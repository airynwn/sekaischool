<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Personaje extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'historia', 'personalidad', 'imagen', 'comic',
    'chibi', 'icon', 'stamp', 'sticker', 'grupo_id'];

    public $timestamps = false;

    /**
     * Cartas del personaje
     *
     * @return void
     */
    public function cartas()
    {
        return $this->hasMany(Carta::class, 'pj_id');
    }

    /**
     * Respuestas que responde un personaje
     *
     * @return void
     */
    public function respuestas()
    {
        return $this->hasMany(Respuesta::class, 'pj_id');
    }

    /**
     * Datos del personaje
     *
     * @return void
     */
    public function trivias()
    {
        return $this->hasMany(Trivia::class, 'pj_id');
    }

    /**
     * Grupo al que pertenece el personaje
     *
     * @return void
     */
    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'grupo_id');
    }

    /**
     * Usuarios que tienen como favorito al personaje
     *
     * @return void
     */
    public function fans()
    {
        return $this->hasMany(User::class, 'pj_fav_id');
    }

    /**
     * A partir de un personaje, devuelve todos los personajes con los que está relacionado
     *
     * @return void
     * Devuelve filas con los siguientes campos:
     * personaje_id, descripción de la relación, campos de personaje
     */
    public function relaciones()
    {
        // $first = DB::table('relaciones')
        //     ->select('pj1_id as id', 'descripcion')
        //     ->where('pj2_id', '=', $this->id)
        //     ->join('personajes', 'relaciones.id', '=', 'personajes.id');

        // $second = DB::table('relaciones')
        //     ->select('pj2_id as id', 'descripcion')
        //     ->where('pj1_id', '=', $this->id)
        //     ->join('personajes', 'relaciones.id', '=', 'personajes.id');

        // return $first->unionAll($second)->get();

        $first = DB::table('relaciones')
            ->join('personajes as p', 'relaciones.pj1_id', '=', 'p.id')
            ->where('relaciones.pj2_id', '=', $this->id)
            ->select('p.id', 'relaciones.descripcion', 'p.nombre', 'p.icon');

        $second = DB::table('relaciones')
            ->join('personajes as p', 'relaciones.pj2_id', '=', 'p.id')
            ->where('relaciones.pj1_id', '=', $this->id)
            ->select('p.id', 'relaciones.descripcion', 'p.nombre', 'p.icon');

        return $first->unionAll($second)->get();
    }
}
