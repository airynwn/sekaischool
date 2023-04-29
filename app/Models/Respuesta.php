<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;

    protected $fillable = ['respuesta', 'pj_id', 'pregunta_id'];

    /**
     * Personaje al que pertenece la respuesta
     *
     * @return void
     */
    public function personaje()
    {
        return $this->belongsTo(Personaje::class, 'pj_id');
    }

    /**
     * Pregunta a la que responde la respuesta
     *
     * @return void
     */
    public function pregunta()
    {
        return $this->belongsTo(Personaje::class, 'pregunta_id');
    }
}
