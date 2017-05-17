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
          @foreach ($productos as $key => $producto)

          <!--Producto-->
          <div id="producto_{{$key}}" class="col-md-6 producto-lista">
            <div class="row">
              <div class="col-md-12"><div class="ribbon"><strong class="ribbon-content">PRODUCTO Nº {{$key+1}}</strong></div></div>
              <div class="col-md-9">
                <div class="row">
                  <div class="col-xs-8">
                    {{ Form::text('titulo_'.$key, Request::old('titulo') ? Request::old('titulo') : $producto->titulo, array('class'=>'form-control input-sm')) }}
                    {{ Form::text('subtitulo_'.$key, $producto->subtitulo, array('class'=>'form-control input-sm')) }}
                  </div>
                  <div class="col-xs-4">
                    <img class="logo-marca" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=340%C3%97340&w=340&h=340">
                    {{ Form::text('precio_'.$key,  Request::old('precio') ? Request::old('precio') : $producto->precio, array('class'=>'form-control input-sm')) }}
                    {{ Form::text('precio_copa_'.$key, Request::old('precio_copa') ? Request::old('precio_copa') : $producto->precio_copa, array('class'=>'form-control input-sm')) }}
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    {{ Form::textarea('texto_'.$key,  Request::old('texto') ? Request::old('texto') : $producto->texto, array('class'=>'form-control input-sm','rows'=>'3')) }}
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <img class="imagen" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97550&w=350&h=550">
              </div>
            </div>
          </div>
          <!--/Producto-->
          @endforeach
        </div>
        <div class="enviar">
        {{ Form::submit('Guardar',array('class'=>'btn btn-primary btn-block btn-lg')) }}
        {{ Form::close() }}
        </div>
      </div>
    </body>
</html>
