<?php

namespace App\Http\Controllers;

use App\User;
use App\Housing;
use App\CrawlerSchedule;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CrawlerControl;
use Goutte;
use Goutte\Client;


class DataCrawlController extends Controller
{
    /*================================================

    The below section is used for crawling vanpeople
    since each website's structure is vastly different,
    each one will require a different function

    we can look into similarities and build more universal functions
    once we have built a couple more crawler functions

    =================================================*/
    
    //go to vanpeople's link and get all their housing data by each page
    public function vanpeopleCrawl(){
        //vanpeople url: http://www.vanpeople.com/c/list/1/0/
        $count = 1;

        $client = new Client();

        $pageurl = 'http://www.vanpeople.com/c/list/1/0/';
        $next_page = Goutte::request('GET', $pageurl);
        $next_text = $next_page->filter('div.pages > a.width65')->first()->text();

        while($count < 20){
            $this->getVanpeopleList($next_page);
            $link = $next_page->selectLink($next_text)->link();
            echo '<p>'.$next_page->filter('div.pages > a.width65')->first()->attr('href').'</p>';
            $next_page = Goutte::click($link);
            $count ++;
        }
    }

    //get the housing link for each of the pages and fill the task data table
    public function getVanpeopleList($crawler){
        // $pageurl = 'http://www.vanpeople.com/c/list/1/0/';
        // $crawler = Goutte::request('GET', $pageurl);

        $posturl = $crawler->filter('body > div > div > ul.g-list > li.g-item.f-clear > div.f-fl.contxt > div.title > a.ahtitle')->each(function ($node) {
            return $node->attr('href');
        });

        foreach($posturl as $pu){
            $find = CrawlerSchedule::where('crawled_url',$pu)->get();

            if(count($find) == 0){
                $url = new CrawlerSchedule();
                $url->crawled_url = $pu;
                $url->is_loaded = 0;
                $url->source = 'Vanpeople';
                $url->save();
            }
            echo ' |'.$pu.'added to schedule list ';
        }
    }

    //used by cron task to fill new data from the crawler data table
    public function populateCrawlList(){
        $list = CrawlerSchedule::where('is_loaded',0)->get();
        foreach($list as $i){
             $housing_id = $this->vanpeoplePageDetail($i->crawled_url);

             $i->is_loaded = 1;
             $i->housing_id = $housing_id;
             $i->save();
//            $this->vanpeoplePageDetail('http://www.vanpeople.com/c/2200292.html');
            echo "|".$i->crawled_url;
        }
    }

    //grab data from detail page and save to database, also creates user and housing for crawled users
    public function vanpeoplePageDetail($pageurl = 'http://www.vanpeople.com/c/2199530.html'){
        echo $pageurl.' - ';

        $crawler = Goutte::request('GET', $pageurl);
        $client_name = $crawler->filter('div.ep_news > div.rightBox > ul > li > span.content')->first()->text();
        if(strpos($crawler->filter('div.ep_news > div.rightBox')->html(), 'tel') !== false){
            $client_phone = $crawler->filter('div.ep_news > div.rightBox > ul > li > span.content.tel')->first()->text();
        }else{
            $client_phone = '';
        }
        if(strpos($crawler->filter('div.ep_news > div.rightBox')->html(), 'email') !== false){
            $client_email = $crawler->filter('div.ep_news > div.rightBox > ul > li > span.email.content')->first()->text();
        }else{
            $client_email = '';
        }
        $description = $crawler->filter('div.f-w1190.f-clear.description > div.f-fl.descall > div.desc > div.f-fl > div.adsContent')->first()->text();
        $title = $crawler->filter('div.f-w1190.main > div.mainTitle > div.f-fl > h1')->first()->text();
        //since the structure is so bad, I had to mannually parse this piece of garbage
        $info_array = $this->infoParseToArrayVanpeople($crawler->filter(' ul.leftUlBox')->html());


        $image_array = $crawler->filter('img.img')->each(function ($node) {
            return $node->attr('src');
        });

        $user = User::where('phone',$client_phone)->first();
        if($user == null){
            $user = new User();
            $user->firstname = $client_name;
            $user->lastname = '';
            $user->email = '';
            $user->phone = $client_phone;
            $user->password = bcrypt($this->randStringGenerator(8));
            $user->type = 3;
            $user->is_crawler=1;
            $user->is_active=0;
            $user->save();
        }
        
        $housing = new Housing();
        $housing->userID = $user->id;
        $housing->title = $title;
        $housing->contactPeople = $client_name;
        $housing->phone = $client_phone;
        $housing->description = $description;
        $housing->uploadTypeID = 'crawler';
        if(array_key_exists('address',$info_array)){
            $housing->address = $info_array['address'];
        }else{
            $housing->address = '';
        }
        if(array_key_exists('city',$info_array)){
            $housing->city = $info_array['city'];
        }else{
            $housing->city = '';
        }
        if(array_key_exists('price',$info_array)){
            $housing->publicPrice = $info_array['price'];
        }else{
            $housing->publicPrice = '';
        }
        $housing->refreshTime = Carbon::now();
        $housing->status = 'crawled';
        $housing->websiteLink = $pageurl;
        $housing->save();

        echo '|'.$user->phone.' X '.$housing->title;

        return $housing->id;
    }

    public function infoParseToArrayVanpeople($info_list){
        $info_list = preg_replace("/\t/","",$info_list);
        $info_list = preg_replace("/\r\n/","",$info_list);
        $info_list = preg_replace("/<li>/","",$info_list);
        $info_list = preg_replace("/<span class=\"title\">/","",$info_list);
        $info_list = preg_replace("/<span class=\"content\">/","",$info_list);
        $info_list = preg_replace("/<span class=\"content\" style=\"word-wrap: break-word;word-break: normal;\">/","",$info_list);

        $info_list = explode("</li>",$info_list);
        array_pop($info_list);

        $return_array = [];
        foreach($info_list as $il){
            $segment = explode("</span>",$il);
            array_pop($segment);

            if(strpos($segment[0], '价　　格') !== false){
                if(strpos($segment[0], '面议') !== false){
                    $return_array['price'] = 0;
                }
                else{
                    $return_array['price'] =  preg_replace("/[^0-9]/", "", $segment[1] );
                }
            }
            if(strpos($segment[0], '地　　区') !== false){
                $return_array['city'] = $segment[1];

            }
            if(strpos($segment[0], '地　　址') !== false){
                $return_array['address'] = $segment[1];
            }
        }

        return $return_array;
    }

    /*================================================

    helper functions for crawler

    =================================================*/

    private function get_string_between($string, $start, $end){
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }

    private function randStringGenerator(int $int){
        $sampleString = "qwertyuiop1234567890asdfghjklzxcvbnmQAZWSXEDCRFVTGBYHNUJMIKOLP!@#$%^&*~?_-";
        $s_len = strlen($sampleString);
        $key = '';
        for($i = $s_len; $i > ($s_len-$int); $i--){
            $pos = rand(0,$i);
            $item = $sampleString[$pos-1];
            $key = $key.$item;
        }

        return $key;
    }

    public function bulkSendSms( $send_array )
    {
       // Your Account SID and Auth Token from twilio.com/console
       $sid    = env( 'TWILIO_SID' );
       $token  = env( 'TWILIO_TOKEN' );
       $client = new Client( $sid, $token );

       foreach( $send_array as $details )
           {
               $count++;
               $number = $details->phone;
               $message = '';

               $client->messages->create(
                   $number,
                   [
                       'from' => env( 'TWILIO_FROM' ),
                       'body' => $message,
                   ]
               );
           }

           return back()->with( 'success', $count . " messages sent!" );
   }
}
