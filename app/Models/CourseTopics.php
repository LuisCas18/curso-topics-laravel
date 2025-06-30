<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseTopics extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'fecha_publicacion',
        'es_obligatorio',
    ];
}
