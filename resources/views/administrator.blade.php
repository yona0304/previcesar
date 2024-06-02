<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bienvenido Administrador</title>
  <link href="{{ asset('asset/css/admin.css') }}" rel="stylesheet">
  <link rel="icon" href="{{ asset('asset/images/logo.png') }}">
  {{-- <link rel="icon" href="../static/images/Recurso-1.ico"> --}}
  <style>
    button{
      background-color: rgb(171, 71, 228);
    }
  </style>
</head>

<body>

    @include('layout.menuadmin')
  <main>

    @include('layout.header')

    <div class="menu-tablas">
      <div class="cont-tabla">
        <div class="main">
            @include('layout.contenido')
        </div>
      </div>
      <div class="cont-tabla">
        <div class="main">
          @include('layout.mostrartrabajadores')
        </div>
      </div>
      <div class="cont-tabla">
        <div class="main">
          {{-- @include('layout.gestioncobros') --}}aqui va registrar cobors y en listar cobros.
        </div>
      </div>
      <div class="cont-tabla">
        <div class="main">
          @include('layout.nuevocontrato')
        </div>
      </div>

      <div class="cont-tabla">
        <div class="main">
          {{-- @include('layout.nuevocontrato') --}}aqui  va las novedades del contrato(registrar novedades, consultar, renovar y agregar).
        </div>
      </div>

      <div class="cont-tabla">
        <div class="main">
          @include('layout.editar')
        </div>
      </div>

    </div>
  </main>
</body>


</html>