<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Curriculum extends Model
{
    
    use HasFactory;
    protected $table = 'curriculums';
    protected $fillable = [
        'nombre',
        'apellidos',
        'datos_personales',
        'habilidades',
        'idiomas',
        'profesion',
        'experiencia_profesional',
        'historial_academico',
        'formacion_complementaria',
        'otros_datos',
    ];
    
}
