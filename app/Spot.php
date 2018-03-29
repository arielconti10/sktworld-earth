<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    protected $fillable = [
        'name',
        'description',
        'address',
        'city_id',
        'country_id',
        'state_id',
        'lat',
        'lng',
        'rate',
    ];
}
