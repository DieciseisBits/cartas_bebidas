<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
      @include('includes.cabecera')
    </head>
    <body>
      @include('includes.menu')
      <div class="container">
        <div id="productos" class="row">
            <div class="col-md-12">
              {{ Form::text('titulo_carta','Título', array('id'=>'titulo_carta','class'=>'form-control input-lg')) }}
            </div>
          @foreach ($productos as $producto)
          <!--Producto-->
          <div id="producto_{{$producto->id}}" class="col-md-6 producto-lista">
            {{ Form::open(array('url'=>'carta/actualizar/'.$producto->id_carta.'/'.$producto->id,'files' => true, 'name' => 'formulario_productos')) }}
            <div class="row">
              <div class="col-md-12"><div class="ribbon"><strong class="ribbon-content">PRODUCTO Nº {{$producto->id}}</strong></div></div>
              <div class="col-md-9">
                <div class="row">
                  <div class="col-xs-8">
                    {{ Form::text('titulo_'.$producto->id, Request::old('titulo') ? Request::old('titulo') : $producto->titulo, array('class'=>'form-control input-sm','maxlength'=>'35')) }}
                    {{ Form::text('subtitulo_'.$producto->id, $producto->subtitulo, array('class'=>'form-control input-sm','maxlength'=>'35')) }}
                  </div>
                  <div class="col-xs-4">
                    <img id="logo_vista_previa_{{$producto->id}}"  class="logo-marca" src="http://localhost/cartas_bebidas/storage/app/{{$producto->logo}}">
                    {{ Form::file('logo_'.$producto->id, array('class'=>'subir-logo', 'onchange'=>'subirLogo(event,'.$producto->id.')','title'=>'Click para cambiar el logo')) }}
                    {{ Form::text('precio_'.$producto->id,  Request::old('precio') ? Request::old('precio') : $producto->precio, array('class'=>'form-control input-sm','maxlength'=>'5')) }}
                    {{ Form::text('precio_copa_'.$producto->id, Request::old('precio_copa') ? Request::old('precio_copa') : $producto->precio_copa, array('class'=>'form-control input-sm','maxlength'=>'5')) }}
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    {{ Form::textarea('texto_'.$producto->id,  Request::old('texto') ? Request::old('texto') : $producto->texto, array('class'=>'form-control input-sm','rows'=>'3','maxlength'=>'210')) }}
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <!--<img class="imagen" src="http://localhost/cartas_bebidas/storage/app/">-->
                <div id="imagen_vista_previa_{{$producto->id}}" style="background: url(http://localhost/cartas_bebidas/storage/app/{{$producto->imagen}}) no-repeat; -webkit-background-size: contain;" class="imagen" onClick="cambiaImagen({{$producto->id}})"></div>
                {{ Form::file('imagen_'.$producto->id, array('id'=>'subir-imagen-'.$producto->id,'class'=>'subir-imagen', 'onchange'=>'subirImagen(event,'.$producto->id.')','title'=>'Click para cambiar la imagen')) }}
              </div>
            </div>
            <div class="col-md-6">
            {{ Form::submit('Actualizar',array('class'=>'btn btn-primary btn-block btn-actualizar')) }}
            {{ Form::close() }}
            </div>
            <div><a class="btn btn-warning" onclick="return confirm('Confirma que deseas eliminar este producto');" href="{{ url('/producto/eliminar/'.$producto->id.'/'.$producto->id_carta) }} ">Eliminar</a></div>
          </div>
          <!--/Producto-->
          @endforeach
        </div>
      </div>
      <div class="container productos-nuevos">

        @for ($i=1; $i < $cantidad_productos_nuevos ; $i++)
          <a class="btn btn-warning" href="{{ url('/carta/anadir-productos/'.$producto->id_carta.'/'.$i) }} "> {{$i}}</a>
        @endfor



      </div>

      <script>
      var subirLogo = function(event,id) {
        var salida_logo = document.getElementById('logo_vista_previa_'+id);
        salida_logo.src = URL.createObjectURL(event.target.files[0]);
      };
      var subirImagen = function(event,id) {
        //var salida_imagen = document.getElementById('imagen_vista_previa_'+id);
        //salida_imagen.src = URL.createObjectURL(event.target.files[0]);
        var la_imagen =  URL.createObjectURL(event.target.files[0]);
        document.getElementById('imagen_vista_previa_'+id).style.background = "url("+la_imagen+") no-repeat";
        document.getElementById('imagen_vista_previa_'+id).style.backgroundSize = "contain";
      };

        function cambiaImagen(numero){
          document.getElementById('subir-imagen-'+numero).click();


        }

      </script>
    </body>
</html>
