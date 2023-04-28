<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'logo', 'imagen', 'historia'];

    public function personajes()
    {
        return $this->hasMany(Personaje::class, 'grupo_id');
    }

    public function fans()
    {
        return $this->hasMany(User::class, 'grupo_fav_id');
    }
}
