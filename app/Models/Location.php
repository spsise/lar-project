<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['country_id', 'latitude', 'longitude'];
    
    public function pais()
    {
        return $this->belongsTo('App\Models\Country', 'country_id', 'id');
    }
}
