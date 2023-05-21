<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'biografia',
        'cumple',
        'twitter',
        'discord',
        'pj_fav_id',
        'grupo_fav_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Cartas que tiene el usuario
     *
     * @return void
     */
    public function cartas()
    {
        return $this->belongsToMany(Carta::class, 'inventario')
                    ->as('inventario')
                    ->withPivot('estado')
                    ->withTimestamps();
    }

    /**
     * Posts que el usuario ha valorado positivamente
     *
     * @return void
     */
    public function favs()
    {
        return $this->belongsToMany(Post::class, 'valoraciones')->as('valoraciones');
    }

    /**
     * Posts escritos por el usuario
     *
     * @return void
     */
    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id');
    }

    /**
     * Personaje favorito del usuario
     *
     * @return void
     */
    public function pj_fav()
    {
        return $this->belongsTo(Personaje::class, 'pj_fav_id');
    }

    /**
     * Grupo favorito del usuario
     *
     * @return void
     */
    public function grupo_fav()
    {
        return $this->belongsTo(Grupo::class, 'grupo_fav_id');
    }

    /**
     * Devuelve los diez primeros usuarios que más favs han recibido
     * y el número total de estos
     *
     * @return void
     */
    public static function ranking()
    {
        return DB::table('users')
            ->select('users.name', DB::raw('COUNT(valoraciones.user_id) AS likes_totales'))
            ->join('posts', 'users.id', '=', 'posts.user_id')
            ->join('valoraciones', 'posts.id', '=', 'valoraciones.post_id')
            ->groupBy('users.id', 'users.name')
            ->orderByDesc(DB::raw('likes_totales'))
            ->limit(10)
            ->get();
    }
}
