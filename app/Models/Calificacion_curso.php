<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacion_curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'curso',
        'estudiante',
        'calificacion',
        'comentario'
    ];

    public function curso()
    {
        return $this->belongsTo(Cursos::class, 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
