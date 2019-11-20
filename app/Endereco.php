<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = ['cliente_id', 'rua', 'numero'];

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
}
