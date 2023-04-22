<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personaje extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'historia', 'personalidad', 'imagen', 'comic', 'grupo_id'];

    public function carta()
    {
        return $this->hasMany(Carta::class, 'pj_id');
    }

    public function respuesta()
    {
        return $this->hasMany(Respuesta::class, 'pj_id');
    }

    public function trivia()
    {
        return $this->hasMany(Trivia::class, 'pj_id');
    }

    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'grupo_id');
    }
}
