<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
      @include('includes.cabecera')
    </head>
    <body>
      @include('includes.menu')
      <div class="container">
        <div id="productos" class="row">
          {{ Form::open(array('url'=>'carta/crear','files' => true, 'name' => 'formulario_productos')) }}
          {{ Form::text('n_productos', $n_productos, array('id'=>'n_productos','class'=>'form-control input-sm ocultar')) }}
            <div class="col-md-12">
              {{ Form::text('titulo_carta','Título', array('id'=>'titulo_carta','class'=>'form-control input-lg')) }}
            </div>
          @for ($i = 0;$i< $n_productos; $i++)
          <!--Producto-->
          <div id="producto_{{$i}}" class="col-md-6 producto-lista">
            <div class="row">
              <div class="col-md-12"><div class="ribbon"><strong class="ribbon-content">PRODUCTO Nº {{$i+1}}</strong></div></div>
              <div class="col-md-9">
                <div class="row">
                  <div class="col-xs-8">
                    {{ Form::text('titulo_'.$i, 'Título', array('class'=>'form-control input-sm')) }}
                    {{ Form::text('subtitulo_'.$i, 'Subtitulo', array('class'=>'form-control input-sm')) }}
                  </div>
                  <div class="col-xs-4">
                    <img  id="logo_vista_previa_{{$i}}" class="logo-marca" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=340%C3%97340&w=340&h=340">
                    {{ Form::file('logo_'.$i, array('class'=>'subir-logo', 'onchange'=>'subirLogo(event,'.$i.')','title'=>'Click para cambiar el logo')) }}
                    {{ Form::text('precio_'.$i, 'Precio', array('class'=>'form-control input-sm')) }}
                    {{ Form::text('precio_copa_'.$i, 'P. Copa', array('class'=>'form-control input-sm')) }}
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    {{ Form::textarea('texto_'.$i, 'Texto', array('class'=>'form-control input-sm','rows'=>'3')) }}
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <!--<img id="imagen_vista_previa_{{$i}}" class="imagen" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97550&w=350&h=550">-->
                <div id="imagen_vista_previa_{{$i}}" class="imagen"></div>
                {{ Form::file('imagen_'.$i, array('class'=>'subir-imagen', 'onchange'=>'subirImagen(event,'.$i.')','title'=>'Click para cambiar la imagen')) }}
              </div>
            </div>
          </div>
          <!--/Producto-->
          @endfor
        </div>
        <div class="enviar">
        {{ Form::submit('Guardar',array('class'=>'btn btn-primary btn-block btn-lg')) }}
        {{ Form::close() }}
        </div>
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
      </script>
    </body>
</html>
