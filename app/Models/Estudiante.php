<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'usuario'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function inscripcion()
    {
        return $this->hasMany(Inscripcion::class, 'id');
    }
}
