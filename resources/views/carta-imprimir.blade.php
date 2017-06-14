<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
      @include('includes.cabecera')
      <style>
        table
        {
          font-size:10px;
          line-height: 10px;
        }
      </style>
    </head>
    <body>
      <div>
        <div id="productos">
              {{-- Form::text('titulo_carta','Título', array('id'=>'titulo_carta','class'=>'form-control input-lg')) --}}
          @for ($i = 2;$i< $n_productos; $i++)
          <!--Producto-->
          <div id="producto_{{$i}}">
                <div>
                  <div>
                    {{ Form::text('titulo_'.$i, 'Título', array('class'=>'form-control input-sm')) }}
                    {{ Form::text('subtitulo_'.$i, 'Subtitulo', array('class'=>'form-control input-sm')) }}
                  </div>
                  <div>
                    <img class="logo-marca" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=340%C3%97340&w=340&h=340">
                    {{ Form::text('precio_'.$i, 'Precio', array('class'=>'form-control input-sm')) }}
                    {{ Form::text('precio_copa_'.$i, 'P. Copa', array('class'=>'form-control input-sm')) }}
                  </div>
                </div>
                <div>
                  <div>
                    {{ Form::textarea('texto_'.$i, 'Texto', array('class'=>'form-control input-sm','rows'=>'3')) }}
                  </div>
                </div>
              <div>
                <img class="imagen" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97550&w=350&h=550">
              </div>
          </div>
          <!--/Producto-->
          @endfor
          <table width="100%">
            <tr>
              <td width="50%">
                <table width="100%">
                  <tr>
                    <td width="75%">ads</td>
                    <td width="25%"><img width="75px" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97550&w=350&h=550"></td>
                  </tr>
                </table>
              </td>
              <td width="50%">
                <table width="100%">
                  <tr>
                    <td width="75%">
                      <table width="100%">
                        <tr width="100%">
                          <td width="50%">
                            <div>Rioja Molón</div>
                            <div>Está güeno</div>
                          </td>
                          <td width="50%">
                            <div  style="padding-left:80px;" ><img width="30px" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=340%C3%97340&w=340&h=340"></div>
                            <div>Precio 3.5€</div>
                            <div>P. Copa 1.5€</div>
                          </td>
                        </tr>
                        <tr width="100%">
                          Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum
                          Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Amet Lorem Ipsum Dolor Sit Amet
                        </tr>
                      </table>
                    </td>
                    <td width="25%"><img width="75px" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=350%C3%97550&w=350&h=550"></td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </body>
</html>
