<!--Inicio menú-->
<div id="menu-superior" class="container">
  <div class="row">
    <div class="col-md-4">
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
