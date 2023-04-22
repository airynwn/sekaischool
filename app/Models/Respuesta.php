<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;
    protected $fillable = ['respuesta', 'pj_id', 'pregunta_id'];

    public function personaje()
    {
        return $this->belongsTo(Personaje::class, 'pj_id');
    }

    public function pregunta()
    {
        return $this->belongsTo(Personaje::class, 'pregunta_id');
    }
}
