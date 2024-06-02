<link rel="stylesheet" href="{{ asset('asset/css/header.css') }}"/>
<script src="{{ asset('asset/js/desplegable.js') }}"></script>
<link rel="icon" href="{{ asset('asset/images/logo.png') }}">

<header>
  
  <nav class="navbar">
    <div class="nav-logo">
      <a style="text-decoration: none; display: flex; align-items: center" href="#">

        <img src="{{ asset('asset/images/logo.png') }}" />
        <span> Funeraria Previcesar SAS</span>
      </a>
    </div>
    <ul class="nav-links">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" id="dropdown-toggle-certificados">
          Xpersona <span class="arrow"><ion-icon name="person-outline"></ion-icon></span>
        </a>
        <ul class="dropdown-menu" id="dropdown-menu-certificados">
          {{-- <li><a href="{{ url_for('perfil') }}">Perfil</a></li> --}}
          <!-- Enlace al perfil -->
          <li><a href="{{ route('logout') }}">Cerrar sesión</a></li>
          <!-- Enlace para cerrar sesión -->
        </ul>
      </li>
    </ul>
  </nav>
</header>
