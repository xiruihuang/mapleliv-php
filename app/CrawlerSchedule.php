<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrawlerSchedule extends Model
{
    //
    protected $fillable = [
        'crawled_url','is_loaded', 'source',
    ];
}
