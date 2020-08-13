<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnimalType extends Model
{
    protected $table = 'animalTypes';
    protected $fillable = ['description'];
}
