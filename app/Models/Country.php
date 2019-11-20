<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Country extends Model
{
    protected $fillable = ['name'];
    
    public function locais()
    {
        return $this->hasOne('App\Models\Location');
    }
}
