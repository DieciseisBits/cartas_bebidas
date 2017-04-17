<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table = 'productos';
    protected $fillable = ['titulo','subtitulo','texto','logo','imagen','precio','precio_copa'];
}
