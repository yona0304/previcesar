<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<link rel="stylesheet" href="{{ asset('asset/css/menuadmin.css') }}"/>

<div class="navigation">
  <ul class="menu-list">
    <div class="listo">
      <!-- <b></b>
      <b></b> -->
      <a href="#" class="toggle">
        <span class="icon">
          <ion-icon name="menu-outline" class="open"></ion-icon>
        </span>
        <span class="title">Menu</span>
      </a>
    </div>

    <li id="list" class="list active">
      <!-- <b></b>
      <b></b> -->
      <a href="#">
        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
        <span class="title">Home</span>
      </a>
    </li>
    <li id="list" class="list">
      <!-- <b></b>
      <b></b> -->
      <a href="#">
        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
        <span class="title">Personal</span>
      </a>
    </li>

    <li id="list" class="list">
      <!-- <b></b>
      <b></b> -->
      <a href="#">
        <span class="icon"><ion-icon name="cash-outline"></ion-icon></span>
        <span class="title">Gestión Cobros</span>
      </a>
    </li>

    <li id="list" class="list">
      <!-- <b></b>
      <b></b> -->
      <a href="#">
        <span class="icon"><ion-icon name="document-text-outline"></ion-icon></span>
        <span class="title">Nuevo Contrato</span>
      </a>
    </li>

    <li id="list" class="list">
      <!-- <b></b>
      <b></b> -->
      <a href="#">
        <span class="icon"><ion-icon name="document-text-outline"></ion-icon></span>
        <span class="title">Novedades de contrato</span>
      </a>
    </li>

    <li id="list" class="list">
      <!-- <b></b>
      <b></b> -->
      <a href="#">
        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
        <span class="title">Contraseña</span>
      </a>
    </li>


    <li id="cerrar" class="list">
      <!-- <b></b>
      <b></b> -->
      <a href="{{ route('logout') }}">
        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
        <span class="title">Cerrar Sesion</span>
      </a>
    </li>
  </ul>
</div>
<script src="{{ asset('asset/js/menu.js') }}"></script>