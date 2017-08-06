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

        body{

          background-image: url("{{url('/')}}/img/fondo.jpg") ;
          background-size: 380px;
          background-repeat: no-repeat;

        }

      </style>
    </head>
    <body>
      <div class="fondo">
        <div id="productos">
              {{-- Form::text('titulo_carta','Título', array('id'=>'titulo_carta','class'=>'form-control input-lg')) --}}
              <h4 style="text-align:center; font-family: 'Tangerine', cursive; font-size: 25px;">Carta de Vinos - Exclusivas Andreu</h4>
          <table width="100%">
            @foreach ($productos as $producto)
              @if (($i%2) == 0)
                <tr>
              @endif
              <!--Producto-->
                <td width="50%" style="">
                  <table width="100%">
                    <tr>
                      <td width="75%">
                        <table width="100%">
                          <tr width="100%">
                            <td width="65%">
                              <div style="padding-left: 10px;">{{$producto->titulo}}</div>
                              <div style="padding-left: 10px;">{{$producto->subtitulo}}</div>
                            </td>
                            <td width="35%">
                              <div  style="padding-left:50px; padding-bottom:10px;" ><img width="30px" src="http://localhost/cartas_bebidas/storage/app/{{$producto->logo}}"></div>
                              <div>Precio {{$producto->precio}} &euro;</div>
                              <div>P. Copa {{$producto->precio_copa}} &euro;</div>
                            </td>
                          </tr>
                          <tr width="100%">
                            <div style="padding-left: 10px;">{{$producto->texto}}<br><br><br><br></div>
                          </tr>
                        </table>
                      </td>
                      <td  width="25%" ><img width="80px" src="http://localhost/cartas_bebidas/storage/app/{{$producto->imagen}}"></td>
                    </tr>
                  </table>
                </td>
              <!--/Producto-->
              @if (($i%2) == 1)
              </tr>
              @endif
              @php $i = $i+1; @endphp
            @endforeach
          </table>
        </div>
      </div>
    </body>
</html>
