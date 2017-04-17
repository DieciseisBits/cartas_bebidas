<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
      @include('includes.cabecera')
    </head>
    <body>
      @include('includes.menu')
      <div class="container productos">
        <div class="row">
          {{ Form::open(array('url'=>'producto/crear','files' => true)) }}
          <!--Producto-->
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-9">
                <div class="row">
                  <div class="col-xs-8">
                    {{ Form::text('titulo', 'Título', array('class'=>'form-control input-sm')) }}
                    {{ Form::text('subtitulo', 'Subtitulo', array('class'=>'form-control input-sm')) }}
                  </div>
                  <div class="col-xs-4">
                    <img class="logo-marca" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=340%C3%97340&w=340&h=340">
                    {{ Form::text('precio', 'Precio', array('class'=>'form-control input-sm')) }}
                    {{ Form::text('precio_copa', 'P. Copa', array('class'=>'form-control input-sm')) }}

                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    {{ Form::textarea('texto', 'Texto', array('class'=>'form-control input-sm','rows'=>'3')) }}
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <img class="imagen" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97550&w=350&h=550">
              </div>
            </div>
          </div>
          <!--/Producto-->
          <!--Producto-->
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-9">
                <div class="row">
                  <div class="col-xs-8">
                    {{ Form::text('titulo', 'Título', array('class'=>'form-control input-sm')) }}
                    {{ Form::text('subtitulo', 'Subtitulo', array('class'=>'form-control input-sm')) }}
                  </div>
                  <div class="col-xs-4">
                    <img class="logo-marca" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=340%C3%97340&w=340&h=340">
                    {{ Form::text('precio', 'Precio', array('class'=>'form-control input-sm')) }}
                    {{ Form::text('precio_copa', 'P. Copa', array('class'=>'form-control input-sm')) }}

                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    {{ Form::textarea('texto', 'Texto', array('class'=>'form-control input-sm','rows'=>'3')) }}
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <img class="imagen" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97550&w=350&h=550">
              </div>
            </div>
          </div>
          <!--/Producto-->
        </div>
        <div class="enviar">
        {{ Form::submit('Guardar',array('class'=>'btn btn-primary btn-block btn-lg')) }}
        {{ Form::close() }}
        </div>
      </div>
    </body>
</html>
