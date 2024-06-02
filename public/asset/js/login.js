function validarInicioSesion() {
  // Obtener los valores de los campos de usuario y contraseña
  var usuario = document.getElementById("usuario").value;
  var contrasena = document.getElementById("contrasena").value;

  // Verificar si alguno de los campos está vacío
  if (usuario.trim() === "" || contrasena.trim() === "") {
    // Mostrar alerta dulce de error
    Swal.fire({
      title: "Error",
      text: "Por favor ingrese usuario y contraseña.",
      icon: "error",
    });
    // Devolver falso para evitar el envío del formulario
    return false;
  }

  // Si los campos no están vacíos, permitir el envío del formulario
  return true;
}


