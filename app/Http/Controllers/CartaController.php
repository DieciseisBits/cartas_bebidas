<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartaController extends Controller
{
    //
    public function nuevo()
    {

      return view('carta-nuevo');

    }

    public function crear()
    {

      $n_productos = \Request::input('n_productos');

      for ($i=1; $i <= $n_productos; $i++) {
        $producto = new  \App\producto;
        $producto->titulo = \Request::input('titulo_'.$i);
        $producto->subtitulo = \Request::input('subtitulo_'.$i);
        $producto->texto = \Request::input('texto_'.$i);
        $producto->save();
      }

      return redirect('/');

    }
}
