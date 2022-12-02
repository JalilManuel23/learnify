<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'instructor',
        'categoria',
        'duracion',
        'titulo',
        'calificacion',
        'descripcion',
        'precio',
        'estatus',
        'imagen'
    ];

    public function instructor()
    {
        return $this->belongsTo(Instructor::class, 'id', 'instructor');
    }

    public function curso()
    {
        return $this->hasOne(Inscripcion::class, 'inscripcion');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id', 'categoria');
    }

    public function video()
    {
        return $this->hasMany(Cursos::class, 'id');
    }

    public function calificacion()
    {
        return $this->belongsTo(Calificacion::class, 'id', 'calificacion');
    }

    public function examen()
    {
        return $this->hasMany(Examen::class, 'id');
    }
}
