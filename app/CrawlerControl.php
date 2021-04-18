<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrawlerControl extends Model
{
    //
    protected $fillable = [
        'target_website_url','pagination_rules', 'pages_to_crawl','interval',
    ];
}
