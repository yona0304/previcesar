<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cambiar Contraseña</title>
  <link rel="stylesheet" href="{{ asset('asset/css/editar.css') }}"/>

</head>

<body>
  <script>
    function validarContraseña() {
      var nuevaContraseña = document.getElementById("password").value;
      var confirmarContraseña = document.getElementById("confirmpassword").value;

      if (nuevaContraseña != confirmarContraseña) {
        swal.fire({
          title: "Las contraseñas no coinciden",
          text: "",
          icon: "error"
        });
        return false;
      }
      return true;
    }
    // sweet_alert.js

    

  </script>

  <main>
    <div id="content">
      <section class="profile-edit">
        <h2>Información Personal</h2>
        <!-- Modificar el action para que envíe a la ruta de cambio de contraseña -->
        <!-- En la sección head de tu plantilla HTML -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
        <script src="{{ asset('js/sweet_alert.js') }}"></script>






        <form action="/cambiopassword" method="POST" onsubmit="return validarContraseña()">
          @csrf
          <!-- Campo para el ID de usuario -->
          <div class="form-group">
            <label for="password">Ingrese la contraseña actual</label>
            <input type="password" id="current_password" name="current_password"
              placeholder="Ingrese la contraseña actual" required />
          </div>
          <!-- Campo para la nueva contraseña -->
          <div class="form-group">
            <label for="password">Nueva Contraseña:</label>
            <input type="password" id="password" name="password" placeholder="Nueva contraseña" required />
          </div>

          <!-- Campo para confirmar la nueva contraseña -->
          <div class="form-group">
            <label for="confirmpassword">Confirmar contraseña:</label>
            <input type="password" id="confirmpassword" name="confirm_password" placeholder="Confirmar contraseña"
              required />
          </div>

          <!-- Botones de acción -->
          <div class="form-actions">
            <button type="submit">Guardar Cambios</button>
            <!-- <button type="button" onclick="window.history.back();">Cancelar</button> -->
          </div>
        </form>
      </section>
    </div>

  </main>
</body>

</html>