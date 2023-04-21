<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personaje extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'historia', 'personalidad', 'imagen', 'comic', 'grupo_id'];

    public function carta() {
        return $this->hasMany(Carta::class, 'pj_id');
    }
}
