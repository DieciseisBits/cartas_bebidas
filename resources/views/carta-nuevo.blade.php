<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
      @include('includes.cabecera')
    </head>
    <body>
      @include('includes.menu')
      <div class="container">
        <button id="anadir-producto" class="btn btn-primary">Añadir producto</button>
        <button id="actualizar" class="btn btn-primary">Actualizar</button>
        <div id="productos" class="row">
          {{ Form::open(array('url'=>'carta/crear','files' => true, 'name' => 'formulario_productos')) }}
          {{ Form::text('n_productos', '2', array('id'=>'n_productos','class'=>'form-control input-sm')) }}
          <!--Producto-->
          <div id="producto_1" class="col-md-6">
            <div class="row">
              <div class="col-md-9">
                <div class="row">
                  <div class="col-xs-8">
                    {{ Form::text('titulo_1', 'Título', array('class'=>'form-control input-sm')) }}
                    {{ Form::text('subtitulo_1', 'Subtitulo', array('class'=>'form-control input-sm')) }}
                  </div>
                  <div class="col-xs-4">
                    <img class="logo-marca" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=340%C3%97340&w=340&h=340">
                    {{ Form::text('precio_1', 'Precio', array('class'=>'form-control input-sm')) }}
                    {{ Form::text('precio_copa_1', 'P. Copa', array('class'=>'form-control input-sm')) }}
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
          <div id="producto_2" class="col-md-6">
            <div class="row">
              <div class="col-md-9">
                <div class="row">
                  <div class="col-xs-8">
                    {{ Form::text('titulo_2', 'Título', array('class'=>'form-control input-sm')) }}
                    {{ Form::text('subtitulo_2', 'Subtitulo', array('class'=>'form-control input-sm')) }}
                  </div>
                  <div class="col-xs-4">
                    <img class="logo-marca" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=340%C3%97340&w=340&h=340">
                    {{ Form::text('precio_2', 'Precio', array('class'=>'form-control input-sm')) }}
                    {{ Form::text('precio_copa_2', 'P. Copa', array('class'=>'form-control input-sm')) }}

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
      <script type="text/javascript">
      $("#anadir-producto").click(function(){

        $('#n_productos').val( function(i, antiguo_valor) {
            return parseInt( antiguo_valor, 10) + 1;
        });

        var n_producto = $( "#n_productos" ).val();



      $( "#productos" ).append( "<div id=\"producto_"+n_producto+"\" class=\"col-md-6\">"+
        "<div class=\"row\">"+
          "<div class=\"col-md-9\">"+
            "<div class=\"row\">"+
              "<div class=\"col-xs-8\">"+
                "<input class=\"form-control input-sm\" name=\"titulo_"+n_producto+"\" type=\"text\" value=\"Título\">"+
                "<input class=\"form-control input-sm\" name=\"subtitulo_"+n_producto+"\" type=\"text\" value=\"Subtitulo\">"+
              "</div>"+
              "<div class=\"col-xs-4\">"+
                "<img class=\"logo-marca\" src=\"https://placeholdit.imgix.net/~text?txtsize=33&txt=340%C3%97340&w=340&h=340\">"+
                "<input class=\"form-control input-sm\" name=\"precio_"+n_producto+"\" type=\"text\" value=\"Precio\">"+
                "<input class=\"form-control input-sm\" name=\"precio_copa_"+n_producto+"\" type=\"text\" value=\"P. Copa\">"+
              "</div>"+
            "</div>"+
            "<div class=\"row\">"+
              "<div class=\"col-xs-12\">"+
                "<textarea class=\"form-control input-sm\" rows=\"3\" name=\"texto\" cols=\"50\">Texto</textarea>"+
              "</div>"+
            "</div>"+
          "</div>"+
          "<div class=\"col-md-3\">"+
            "<img class=\"imagen\" src=\"https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97550&w=350&h=550\">"+
          "</div>"+
        "</div>"+
      "</div>" );
    });



      </script>

    </body>
</html>
