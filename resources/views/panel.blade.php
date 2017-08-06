<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
      @include('includes.cabecera')
    </head>
    <body>
      <div class="container">
      @include('includes.menu')
        <div class="row tabla-cabecera">
          <div class="col-md-3">ID</div>
          <div class="col-md-3 text-center">Título</div>
          <div class="col-md-3 text-center">Fecha</div>
          <div class="col-md-1 text-center">Editar</div>
          <div class="col-md-1 text-center">Generar</div>
          <div class="col-md-1 text-center">Eliminar</div>
        </div>
      @foreach($cartas as $carta)
        <div class="row tabla-linea">
          <div class="col-md-3">
            {{  $carta->id }}
          </div>
          <div class="col-md-3 text-center">
            {{  $carta->titulo }}
          </div>
          <div class="col-md-3 text-center">
            {{  $carta->created_at }}
          </div>
          <div class="col-md-1 text-center">
            <a href="{{ url('/carta/editar/').'/'.$carta->id }}"><i class="fa fa-pencil"></i></a>
          </div>
          <div class="col-md-1 text-center">
            <a href="{{ url('/carta/imprimir/').'/'.$carta->id }}"><i class="fa fa-file-pdf-o"></i></a>
          </div>
          <div class="col-md-1 text-center">
            <a href="#"><i class="fa fa-window-close"></i></a>
          </div>
        </div>
      @endforeach
      <div class="row tabla-cabecera">
        <div class="col-md-3">ID</div>
        <div class="col-md-3 text-center">Título</div>
        <div class="col-md-3 text-center">Fecha</div>
        <div class="col-md-1 text-center">Editar</div>
        <div class="col-md-1 text-center">Generar</div>
        <div class="col-md-1 text-center">Eliminar</div>
      </div>
      </div>
    </body>
</html>
