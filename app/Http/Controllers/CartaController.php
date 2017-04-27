<?php

namespace App\Http\Controllers;
use App\Carta;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CartaController extends Controller
{
    //
    public function listarCartas()
    {
      $cartas = Carta::orderby('id','ASC')->get();
      return view('panel',array('cartas' => $cartas));
    }

    public function nuevo($n_productos)
    {

      return view('carta-nuevo',array('n_productos' => $n_productos));

    }

    public function crear()
    {

      $proxima_carta = Carta::find(DB::table('cartas')->max('id'));

      $n_productos = \Request::input('n_productos');

      for ($i=0; $i <= $n_productos-1; $i++) {
        $producto = new  \App\producto;
        $producto->id_carta = $proxima_carta->id+1;
        $producto->titulo = \Request::input('titulo_'.$i);
        $producto->subtitulo = \Request::input('subtitulo_'.$i);
        $producto->texto = \Request::input('texto_'.$i);
        $producto->save();
      }

      $titulo = \Request::input('titulo');
      $carta = new  \App\carta;
      $carta->titulo = \Request::input('titulo_carta');
      $carta->save();

      return redirect('/');

    }

    public function imprimir(){

      /** Este también funciona
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML('<h1>Test</h1>');
      return $pdf->stream();
      **/

      $pdf = \PDF::loadView('carta-nuevo',array('n_productos' => 2) );
      return $pdf->download('invoice.pdf');
    }


}
