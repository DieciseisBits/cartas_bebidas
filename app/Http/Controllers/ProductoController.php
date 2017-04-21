<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    //

    public function listarProductos()
    {
      $productos = Producto::orderby('id','ASC')->get();
      return view('panel',array('productos' => $productos));
    }



}
