<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sign extends Model
{
    protected $fillable = [
        'userID', 'year', 'month', 'date', 'workingHours','workingMinutes',
    ];
}
