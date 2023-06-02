<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trivia extends Model
{
    use HasFactory;

    protected $fillable = ['dato', 'pj_id'];

    public $timestamps = false;

    /**
     * Personaje al que pertenece el dato
     *
     * @return void
     */
    public function personaje()
    {
        return $this->belongsTo(Personaje::class, 'pj_id');
    }
}
