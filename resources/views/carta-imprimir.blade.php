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
          <table width="100%">
            @for ($i = 0 ;$i< $n_productos; $i++)
            <tr>
              <!--Producto-->
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
                              <div  style="padding-left:80px; padding-bottom:10px;" ><img width="30px" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=340%C3%97340&w=340&h=340"></div>
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
              <!--/Producto-->
              <!--Producto-->
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
                              <div>Precio 3.5&euro;</div>
                              <div>P. Copa 1.5&euro;</div>
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
              <!--/Producto-->
            </tr>
            @endfor
          </table>
        </div>
      </div>
    </body>
</html>
