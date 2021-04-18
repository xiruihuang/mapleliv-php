<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdBanner extends Model
{
    //
    protected $fillable = [
        'route_url','ad_name', 'ad_description','ad_dimension','ad_link_path','is_paid','sponsor','is_active','updated_at','ad_image_url','ad_position'
    ];
}
