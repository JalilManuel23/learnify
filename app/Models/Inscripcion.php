<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use HasFactory;

    protected $fillable = [
        'curso',
        'estudiante',
        'avance',
        'fecha_inicio',
        'fecha_fin',
        'estatus'
    ];

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'estudiante');
    }

    public function curso_datos(){
        return $this->hasOne(Curso::class, 'id', 'curso');
    }
}
