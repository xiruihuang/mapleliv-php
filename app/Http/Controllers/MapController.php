<?php

namespace App\Http\Controllers;

use App\Housing;
use App\HousingIMG;

class MapController extends Controller
{
    public function showMap()
    {
        return view('/map/index');
    }

    public function writeJSON(){

        $housings = Housing::where('uploadTypeID','<', 3)->orderBy('updated_at', 'desc')->get();

        foreach($housings as $h) {

            $houseIMGs = HousingIMG::all();

            foreach($houseIMGs as $hi){
                if($hi->id == $h->id){
                    $img = $hi->filePath;
                    break;
                }
            }

            $posts[] = array('id'=> $h->id,
                'title' => $h->title,
                'price' => $h->publicPrice,
                'marker_image' => $img,
                'url' => '/detail/'.$h->id,
                'address' => $h->address,
                'latitude' => $h->lat,
                'longitude' => $h->lng,
                'bedroom' => $h->beds,
                'bathroom' => $h->baths,

            );
        }

        $fp = fopen('../public/map/assets/db/items.json', 'w');
        fwrite($fp, json_encode($posts));
        fclose($fp);
    }

    public function showAreaMap($id){

        $housings = Housing::where([
            ['area', 'LIKE', '%'. $id .'%'],
        ])->orderBy('updated_at', 'desc') -> get();
        $this->writeJSON();

        return view('/map/detail', compact('housings','id'));
    }

}
