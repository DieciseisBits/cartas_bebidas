<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
      @include('includes.cabecera')
    </head>
    <body>
      @include('includes.menu')
      @foreach($productos as $producto)
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            {{  $producto->id }}
          </div>
          <div class="col-md-4">
            {{  $producto->titulo }}
          </div>
          <div class="col-md-4">
            {{  $producto->subtitulo }}
          </div>
        </div>
      </div>
      @endforeach
    </body>
</html>
