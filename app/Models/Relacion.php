<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relacion extends Model
{
    use HasFactory;
    protected $fillable = ['pj1_id', 'pj2_id', 'descripcion'];
}
