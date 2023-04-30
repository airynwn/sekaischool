<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carta extends Model
{
    use HasFactory;

    protected $fillable = ['rareza', 'atributo', 'imagen', 'pj_id'];

    public $timestamps = false;

    /**
     * Personaje al que pertenece la carta
     *
     * @return void
     */
    public function personaje()
    {
        return $this->belongsTo(Personaje::class, 'pj_id');
    }

    /**
     * Usuarios que tienen la carta en su colección o lista de deseos
     *
     * @return void
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'carta_id')
                    ->as('inventario')
                    ->withPivot('estado')
                    ->withTimestamps();
    }
}
