<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'logo', 'imagen', 'historia'];

    public function personaje()
    {
        return $this->hasMany(Personaje::class, 'grupo_id');
    }
}
