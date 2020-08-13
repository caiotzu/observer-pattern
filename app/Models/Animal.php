<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = ['name', 'breed', 'customer_id', 'animal_type_id'];

    public function customer(){
        // Model que esta referenciando / id do this model(chave estrangeira) / id da tabela referenciada (chave primaria)
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

    public function AnimalType(){
        // Model que esta referenciando / id do this model(chave estrangeira) / id da tabela referenciada (chave primaria)
        return $this->belongsTo(AnimalType::class, 'animal_type_id', 'id');
    }
}
