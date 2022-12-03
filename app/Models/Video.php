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
        'titulo',
        'descripcion',
        'duracion'
    ];

    public function curso()
    {
        return $this->belongsTo(Video::class, 'id', 'video');
    }
}
