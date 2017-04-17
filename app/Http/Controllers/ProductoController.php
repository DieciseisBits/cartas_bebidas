<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    //

    public function panel()
    {
      $productos = Producto::orderby('id','ASC')->get();
      return view('panel',array('productos' => $productos));
    }


    public function nuevo()
    {

      return view('producto-nuevo');

    }

    public function crear()
    {
      $producto = new  \App\producto;
      $producto->titulo = \Request::input('titulo');
      $producto->subtitulo = \Request::input('subtitulo');
      $producto->texto = \Request::input('texto');
      $producto->save();
      //@TODO averiguar porqué no puedo hacer un Request all
      $productos = Producto::orderby('id','ASC')->get();
      return view('panel',array('productos' => $productos));

    }
}
