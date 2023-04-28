<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['contenido'];

    /**
     * Usuarios que han valorado positivamente un post
     *
     * @return void
     */
    public function fans()
    {
        return $this->belongsToMany(User::class, 'post_id')->as('valoraciones');
    }

    /**
     * Usuario al que pertenece el post
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
