<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;

    protected $fillable = [
        'curso',
        'pregunta',
        'avance',
        'titulo',
        'calificacion'
    ];

    public function curso()
    {
        return $this->belongsTo(Cursos::class, 'curso');
    }

    public function pregunta()
    {
        return $this->hasMany(Pregunta::class, 'id');
    }
}
