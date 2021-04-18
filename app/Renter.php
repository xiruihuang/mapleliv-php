<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renter extends Model
{

	protected $fillable = [
        'name','gender','phone','wechat', 'favoriteLocation','favoriteNumberOfBeds','favoritenumberOfBaths','favoritePrice','enterTime','otherRequirment', 'description', 'salesID', 'status',
    ];
    	
}
