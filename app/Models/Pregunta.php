<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;

    protected $fillable = [
        'examen',
        'pregunta',
        'respuesta_correcta',
        'resouesta_1',
        'resouesta_2',
        'resouesta_3',
    ];

    public function curso()
    {
        return $this->belongsTo(Cursos::class, 'id');
    }
}
