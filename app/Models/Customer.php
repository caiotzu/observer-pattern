<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'email', 'zipcode', 'address', 'neighborhood', 'city', 'state', 'number', 'status', 'user_id'];

    public function user(){
        return $this->belongsTo(\App\User::class);
    }
}
