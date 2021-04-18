<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ip extends Model
{
     protected $fillable = [
        'userID','userFirstName', 'userLastName','IpAddress','status',
    ];
}
