<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\User;

class Address extends Model
{
    protected $fillable = [
        'street', 'number', 'user_id',
    ];

    protected $table = 'addresses';

    public function user()
    {
        return $this->belongsTo('User::class', 'user_id', 'id');
    }


}
