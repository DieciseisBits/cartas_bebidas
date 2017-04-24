<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table = 'productos';
    protected $fillable = ['id_carta','titulo','subtitulo','texto','logo','imagen','precio','precio_copa'];
}
