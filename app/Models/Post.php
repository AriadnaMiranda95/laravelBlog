<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Post extends Model{
    use HasFactory; // TRAITS (Echarle un ojo)
    protected $fillable = ['title','body','image']; // aquí se almacenarán las columnas de la tabla posts
    // esta clase almacena los datos recogidos de la base de datos

    public function user (){
       return $this->belongsTo(User::class);
    }
}
