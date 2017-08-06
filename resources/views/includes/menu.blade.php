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
              <td><a href="{{ url('/carta/nuevo/6') }}"><div>6</div></a></td>
              <td><a href="{{ url('/carta/nuevo/8') }}"><div>8</div></a></td>
              <td><a href="{{ url('/carta/nuevo/10') }}"><div>10</div></a></td>
              <td><a href="{{ url('/carta/nuevo/12') }}"><div>12</div></a></td>
              <td><a href="{{ url('/carta/nuevo/14') }}"><div>14</div></a></td>
              <td><a href="{{ url('/carta/nuevo/16') }}"><div>16</div></a></td>
              <td><a href="{{ url('/carta/nuevo/18') }}"><div>18</div></a></td>
            </tr>
            <tr>
              <td><a href="{{ url('/carta/nuevo/7') }}"><div>7</div></a></td>
              <td><a href="{{ url('/carta/nuevo/9') }}"><div>9</div></a></td>
              <td><a href="{{ url('/carta/nuevo/11') }}"><div>11</div></a></td>
              <td><a href="{{ url('/carta/nuevo/13') }}"><div>13</div></a></td>
              <td><a href="{{ url('/carta/nuevo/15') }}"><div>15</div></a></td>
              <td><a href="{{ url('/carta/nuevo/17') }}"><div>17</div></a></td>
              <td><div>&nbsp;</div></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <h2>Carta de Bebidas</h2>

    </div>
    <div class="col-md-4">
      <a href="{{ url('/') }}">Inicio</a>
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
