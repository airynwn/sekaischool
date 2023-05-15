<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['contenido', 'user_id'];
    protected $dates = ['created_at', 'updated_at'];

    /**
     * Usuarios que han valorado positivamente un post
     *
     * @return void
     */
    public function fans()
    {
        return $this->belongsToMany(User::class, 'valoraciones')->as('valoraciones');
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

    public function tiempo()
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }
}
