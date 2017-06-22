<?php

namespace App\Http\Controllers;
use App\Carta;
use App\Producto;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Carbon\Carbon;

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

        $nombre_archivo_logo =  \Request::file('logo_'.$i)->getClientOriginalName();
        $extension_archivo_logo =  \Request::file('logo_'.$i)->extension();
        $fecha = date('Y-m-d-s');
        $mover_logo = \Request::file('logo_'.$i)->storeAs('public/imagenes', $fecha.'logo.'.$extension_archivo_logo);
        $producto->logo = 'public/imagenes/'.$fecha.'logo.'.$extension_archivo_logo;

        $nombre_archivo_imagen =  \Request::file('imagen_'.$i)->getClientOriginalName();
        $extension_archivo_imagen =  \Request::file('imagen_'.$i)->extension();
        $fecha = date('Y-m-d-s');
        $mover_imagen = \Request::file('imagen_'.$i)->storeAs('public/imagenes', $fecha.'imagen.'.$extension_archivo_imagen);
        $producto->imagen = 'public/imagenes/'.$fecha.'imagen.'.$extension_archivo_imagen;

        $producto->save();
      }

      $titulo = \Request::input('titulo');
      $carta = new  \App\carta;
      $carta->titulo = \Request::input('titulo_carta');
      $carta->save();

      return redirect('/');

    }

    public function editar($id)
    {
      //$n_productos se usará para añadir productos nuevos
      $productos = Producto::where('id_carta',$id)->get();
      $n_productos = Producto::where('id_carta',$id)->count();
      return view('carta-editar',array('productos'=> $productos,'n_productos' => $n_productos));

    }

    public function actualizar($id,$n_productos)
    {




    }

    public function imprimir(){

      /** Este también funciona
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML('<h1>Test</h1>');
      return $pdf->stream();
      **/
      set_time_limit(120); //60 seconds = 1 minute
      $pdf = \PDF::loadView('carta-imprimir',array('n_productos' => 8) );
      return $pdf->download('invoice.pdf');
    }


}
