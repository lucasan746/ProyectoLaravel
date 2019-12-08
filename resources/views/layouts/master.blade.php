<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <title>Sloth</title>
  </head>
  <body>
    <header>
      <nav class="navbar">
        <a href="{{route('home')}}"><img src="../images/icon-lazy.png" alt="iconoprincipal" class="logohome"></a>
          <div class="iconosderecha">

            <form class="" action="{{route('usuarios')}}" method="get" enctype="multipart/form-data">
              @csrf
              <input type="search" name="search" value="" class="busqueda">
              <button type="submit" name="button" hidden >buscar!</button>

            </form>

              <img src="../images/iconos/usuario.png" alt="solicitudes" class="icon-solicitud">
              <img src="../images/iconos/bocadillo.png" alt="mensajes" class="icon-mensaje">
              <img src="../images/iconos/notificacion.png" alt="notificaciones" class="icon-notif">
              <img src="../images/iconos/ajustes.png" alt="grupos" class="icon-config">
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"><img src="../images/iconos/outblanco.png" alt="ajustes" class="icon-cierre"></a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>

          </div>
      </nav>
    </header>
    <br><br><br><br><br>

  @yield('content')

  </body>
</html>