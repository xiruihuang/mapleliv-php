<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Housing extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userID','uploadTypeID','address','publicPrice','originPrice','description','city','area','beds','baths','furnitures','washingMachines','dishWasher','elevator','oven','parking','electricity','web','refreshTime','title','phone','wechat','contactPeople','floor', 'housingAges','status','gas', 'condition', 'progress', 'size', 'websiteLink','enterTime','contactPhone','landlore','lat','lng','isRentkeya', 'propertyTypes',
    ];}
