<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Endereco;

class Cliente extends Model
{
    protected $fillable = ['nome', 'telefone'];
    
    public function endereco()
    {
        return $this->hasOne('App\Endereco');
    }
}
