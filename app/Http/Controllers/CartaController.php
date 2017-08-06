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
        $producto->precio = \Request::input('precio_'.$i);
        $producto->precio_copa = \Request::input('precio_copa'.$i);
        $producto->texto = \Request::input('texto_'.$i);

        if (\Request::file('logo_'.$i)){

          $nombre_archivo_logo =  \Request::file('logo_'.$i)->getClientOriginalName();
          $extension_archivo_logo =  \Request::file('logo_'.$i)->extension();
          $fecha = date('Y-m-d-s');
          $mover_logo = \Request::file('logo_'.$i)->storeAs('public/imagenes', $fecha.'-'.$i.'logo.'.$extension_archivo_logo);
          $producto->logo = 'public/imagenes/'.$fecha.'-'.$i.'logo.'.$extension_archivo_logo;

        }

        if (\Request::file('imagen_'.$i)){

        $nombre_archivo_imagen =  \Request::file('imagen_'.$i)->getClientOriginalName();
        $extension_archivo_imagen =  \Request::file('imagen_'.$i)->extension();
        $fecha = date('Y-m-d-s');
        $mover_imagen = \Request::file('imagen_'.$i)->storeAs('public/imagenes', $fecha.'-'.$i.'imagen.'.$extension_archivo_imagen);
        $producto->imagen = 'public/imagenes/'.$fecha.'-'.$i.'imagen.'.$extension_archivo_imagen;
      }
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
      $productos = Producto::where('id_carta',$id)->get();
      $n_productos = Producto::where('id_carta',$id)->count();
      //suponiendo que la carta tenga que llevar hasta 12 productos
      $cantidad_productos_nuevos = 13 - $n_productos;
      return view('carta-editar',array('productos'=> $productos,'n_productos' => $n_productos,'id_carta' => $id, 'cantidad_productos_nuevos' => $cantidad_productos_nuevos));

    }

    public function actualizar($id_carta,$id_producto)
    {


      $producto = Producto::find($id_producto);
      $producto->titulo = \Request::input('titulo_'.$id_producto);
      $producto->subtitulo = \Request::input('subtitulo_'.$id_producto);
      $producto->precio = \Request::input('precio_'.$id_producto);
      $producto->precio_copa = \Request::input('precio_copa_'.$id_producto);
      $producto->texto = \Request::input('texto_'.$id_producto);

      if (\Request::file('logo_'.$id_producto)){

        $nombre_archivo_logo =  \Request::file('logo_'.$id_producto)->getClientOriginalName();
        $extension_archivo_logo =  \Request::file('logo_'.$id_producto)->extension();
        $fecha = date('Y-m-d-s');
        $mover_logo = \Request::file('logo_'.$id_producto)->storeAs('public/imagenes', $fecha.'-'.$id_producto.'logo.'.$extension_archivo_logo);
        $producto->logo = 'public/imagenes/'.$fecha.'-'.$id_producto.'logo.'.$extension_archivo_logo;

      }

      if (\Request::file('imagen_'.$id_producto)){

      $nombre_archivo_imagen =  \Request::file('imagen_'.$id_producto)->getClientOriginalName();
      $extension_archivo_imagen =  \Request::file('imagen_'.$id_producto)->extension();
      $fecha = date('Y-m-d-s');
      $mover_imagen = \Request::file('imagen_'.$id_producto)->storeAs('public/imagenes', $fecha.'-'.$id_producto.'imagen.'.$extension_archivo_imagen);
      $producto->imagen = 'public/imagenes/'.$fecha.'-'.$id_producto.'imagen.'.$extension_archivo_imagen;
    }

      $producto->save();


      return redirect('/carta/editar/'.$id_carta);

    }

    public function eliminarProducto($id_producto,$id_carta){
      $producto = Producto::find($id_producto)->delete();
      return redirect('/carta/editar/'.$id_carta);
    }

    public function anadirProductos($id_carta,$n_productos)
    {

      return view('carta-anadir-productos',array('id_carta' => $id_carta,'n_productos' => $n_productos));

    }

    public function guardarProductosAnadidos($id_carta)
    {

      $n_productos = \Request::input('n_productos');

      for ($i=0; $i <= $n_productos-1; $i++) {
        $producto = new  \App\producto;
        $producto->id_carta = $id_carta;
        $producto->titulo = \Request::input('titulo_'.$i);
        $producto->subtitulo = \Request::input('subtitulo_'.$i);
        $producto->precio = \Request::input('precio_'.$i);
        $producto->precio_copa = \Request::input('precio_copa'.$i);
        $producto->texto = \Request::input('texto_'.$i);

        if (\Request::file('logo_'.$i)){

          $nombre_archivo_logo =  \Request::file('logo_'.$i)->getClientOriginalName();
          $extension_archivo_logo =  \Request::file('logo_'.$i)->extension();
          $fecha = date('Y-m-d-s');
          $mover_logo = \Request::file('logo_'.$i)->storeAs('public/imagenes', $fecha.'-'.$i.'logo.'.$extension_archivo_logo);
          $producto->logo = 'public/imagenes/'.$fecha.'-'.$i.'logo.'.$extension_archivo_logo;

        }

        if (\Request::file('imagen_'.$i)){

        $nombre_archivo_imagen =  \Request::file('imagen_'.$i)->getClientOriginalName();
        $extension_archivo_imagen =  \Request::file('imagen_'.$i)->extension();
        $fecha = date('Y-m-d-s');
        $mover_imagen = \Request::file('imagen_'.$i)->storeAs('public/imagenes', $fecha.'-'.$i.'imagen.'.$extension_archivo_imagen);
        $producto->imagen = 'public/imagenes/'.$fecha.'-'.$i.'imagen.'.$extension_archivo_imagen;
      }
        $producto->save();
      }

      return redirect('/carta/editar/'.$id_carta);

    }




    public function imprimir($id){

      /** Este también funciona
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML('<h1>Test</h1>');
      return $pdf->stream();
      **/

      $productos = Producto::where('id_carta',$id)->get();
      $n_productos = Producto::where('id_carta',$id)->count();
      //return view('carta-editar',array('productos'=> $productos,'n_productos' => $n_productos,'id_carta' => $id));


      set_time_limit(120); //60 seconds = 1 minute
      $pdf = \PDF::loadView('carta-imprimir',array('productos'=> $productos,'n_productos' => $n_productos,'i'=>0) );
      return $pdf->download('invoice.pdf');
    }


}
