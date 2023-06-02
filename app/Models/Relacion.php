<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relacion extends Model
{
    use HasFactory;

    protected $fillable = ['pj1_id', 'pj2_id', 'descripcion'];

    public $timestamps = false;

    protected $table = 'relaciones';

    public function pj1()
    {
        return $this->belongsTo(Personaje::class, 'pj1_id');
    }

    public function pj2()
    {
        return $this->belongsTo(Personaje::class, 'pj2_id');
    }
}
