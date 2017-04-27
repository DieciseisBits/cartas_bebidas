<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
      @include('includes.cabecera')
    </head>
    <body>
      <div class="container">
      @include('includes.menu')
        <div class="row tabla-cabecera">
          <div class="col-md-4">ID</div>
          <div class="col-md-4">Título</div>
          <div class="col-md-4">Fecha</div>
        </div>
      @foreach($cartas as $carta)
        <div class="row tabla-linea">
          <div class="col-md-4">
            {{  $carta->id }}
          </div>
          <div class="col-md-4">
            {{  $carta->titulo }}
          </div>
          <div class="col-md-4">
            {{  $carta->created_at }}
          </div>
        </div>
      @endforeach
      </div>
    </body>
</html>
