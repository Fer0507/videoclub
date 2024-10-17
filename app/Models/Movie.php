<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    // Especifica la tabla que este modelo usa.
    protected $table = 'movies';

    // Especifica los campos que pueden ser asignados masivamente.
    protected $fillable = ['title', 'year', 'director', 'poster', 'rented', 'synopsis'];
}
