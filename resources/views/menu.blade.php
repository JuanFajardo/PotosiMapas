<nav class="navbar-default navbar-side" role="navigation">
<div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
          <li>
              <a @yield('menuMenu') href="{{asset('index.php/Menu')}}"><i class="fa fa-desktop" accesskey="m"></i> <u>M</u>enu</a>
          </li>
            <li>
                <a @yield('menuBoton') href="{{asset('index.php/Boton')}}"><i class="fa fa-desktop" accesskey="b"></i> <u>B</u>oton</a>
            </li>
            <li>
                <a @yield('menuDetalle') href="{{asset('index.php/Detalle')}}"><i class="fa fa-bar-chart-o" accesskey="d"></i> <u>D</u>etalles</a>
            </li>
            <li>
                <a @yield('menuGeo') href="{{asset('index.php/Geo')}}"><i class="fa fa-qrcode" accesskey="g"></i> <u>G</u>eolocalizacion</a>
            </li>

        </ul>
    </div>
</nav>
