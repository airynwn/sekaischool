<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carta extends Model
{
    use HasFactory;
    protected $fillable = ['rareza', 'atributo', 'imagen', 'pj_id'];

    public function personaje()
    {
        return $this->belongsTo(Personaje::class, 'pj_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'carta_id')
                    ->as('inventario')
                    ->withPivot('estado')
                    ->withTimestamps();
    }
}
