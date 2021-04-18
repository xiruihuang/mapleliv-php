<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    protected $fillable = [
        'userID','userFirstName', 'userLastName','IpAddressArrive','IpAddressBack','status','ArriveTime','BackTime','totalHour','arriveDay','arriveHour','arriveMin','arriveDate'];
}

