<!--Inicio menú-->
<div id="menu-superior" class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="row">
        <div class="col-xs-4 icono-nueva-carta">
          <div class="text-center"><i class="fa fa-glass fa-2x" aria-hidden="true"></i><br>Nueva Carta </div>
        </div>
        <div class="col-xs-8 botones-nueva-carta">
          <table>
            <tr>
              <td><a href="{{ url('/carta/nuevo/1') }}"><div>1</div></a></td>
              <td><a href="{{ url('/carta/nuevo/2') }}"><div>2</div></a></td>
              <td><a href="{{ url('/carta/nuevo/3') }}"><div>3</div></a></td>
              <td><a href="{{ url('/carta/nuevo/4') }}"><div>4</div></a></td>
            </tr>
            <tr>
              <td><a href="{{ url('/carta/nuevo/5') }}"><div>5</div></a></td>
              <td><a href="{{ url('/carta/nuevo/6') }}"><div>6</div></a></td>
              <td><a href="{{ url('/carta/nuevo/7') }}"><div>7</div></a></td>
              <td><a href="{{ url('/carta/nuevo/8') }}"><div>8</div></a></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <h2>Carta de Bebidas</h2>

    </div>
    <div class="col-md-4">
      @if (Route::has('login'))
          <div class="top-right links">
              @if (Auth::check())
                  <a href="{{ url('/home') }}">Home</a>
              @else
                  <a href="{{ url('/login') }}">Login</a>
                  <a href="{{ url('/register') }}">Register</a>
              @endif
          </div>
      @endif
    </div>
  </div>
</div>
<!--Fin menú-->
