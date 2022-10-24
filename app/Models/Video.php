<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'curso',
        'avance',
        'archivo',
        'titulo'
    ];

    public function curso()
    {
        return $this->hasMany(Cursos::class, 'id');
    }
}
