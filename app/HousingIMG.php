<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HousingIMG extends Model
{
    protected $fillable = [
        'housingID', 'fileName', 'filePath', 'status'
    ];
}
