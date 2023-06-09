<?php

namespace App\Models;

// use Attribute;
use Illuminate\Database\Eloquent\Casts\Attribute ;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lugare extends Model
{
    use HasFactory;

    protected function nombre(): Attribute
    {

        return new Attribute(
            get: fn ($value) =>  ucwords($value),
            set: fn ($value) =>  strtolower($value)
        );

        
    }
    protected $fillable = ['nombre','departamento','descripcion','imagen','estado','monto','eslogan','horario','duracion','punto_encuentro','llevar','no_cuenta'];
}
