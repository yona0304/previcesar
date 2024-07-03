<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inciar sesion</title>
    <link rel="icon" href="{{ asset('asset/images/logo.png') }}">
    <link href="{{ asset('asset/css/Style.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <section class="inicio">
        <div class="porta2">
            <div class="form-container">
                <form action="{{ route('login') }}" method="POST" class="form" onsubmit="return validarInicioSesion()">
                    @csrf
                    <p>Iniciar Sesión</p>
                    <div>
                        <label for="usuario">Usuario:</label>
                        <input type="text" id="usuario" name="usuario" class="input" placeholder="Nombre de usuario"/>
                    </div>
                    <div>
                        <label for="contrasena">Contraseña:</label>
                        <input type="password" id="contrasena" name="password" class="input" placeholder="Contraseña"/>
                    </div>
                    <button type="submit">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </section>
    {{-- <script src="{{ asset('asset/js/alert.js') }}"></script> --}}
    <script src="{{ asset('asset/js/login.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
