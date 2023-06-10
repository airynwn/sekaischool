<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class Cancion extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'audio'];

    public $timestamps = false;

    protected $table = 'canciones';

    public function encriptar()
    {
        return Crypt::encryptString($this->titulo);
    }
}
