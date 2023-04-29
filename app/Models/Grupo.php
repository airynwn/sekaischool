<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'logo', 'imagen', 'historia'];

    public $timestamps = false;

    /**
     * Personajes que son miembros del grupo
     *
     * @return void
     */
    public function personajes()
    {
        return $this->hasMany(Personaje::class, 'grupo_id');
    }

    /**
     * Usuarios que tienen como favorito el grupo
     *
     * @return void
     */
    public function fans()
    {
        return $this->hasMany(User::class, 'grupo_fav_id');
    }
}
