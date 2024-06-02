<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<link rel="stylesheet" href="path/to/your/css/styles.css">
<style>
    /* Importar la fuente Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap');

    .information {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 90%;
        padding: 1%;
        display: flex;
    }

    #informacion {
        width: 25%;
        height: 90%;
        background-color: #f0f0f052;
        border-radius: 10px;
        padding: 20px;
        margin-right: 1%;
        overflow: auto;
    }

    #descripcion {
        width: 70%;
        height: 90%;
        overflow: auto;
        padding: 20px;
        background-color: #f0f0f0;
        border-radius: 10px;
    }

    #icon {
        font-size: 24px;
        color: #3cb3c3;
    }

    .ims {
        color: black;
        margin-top: 5%;
        margin-bottom: 5%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        text-decoration: none;
    }

    #informacion a:hover {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        zoom: 110%;
        background-color: #ece5e5cc;
    }

    /* Estilo para el modal */
    .modal {
        display: none;
        justify-content: center;
        align-items: center;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
    }

    /* Contenido del modal */
    .modal-content {

        background-color: #fefefe;
        padding: 20px;
        border: 1px solid #888;
        width: 50%;
        height: 40%;
        pointer-events: auto;
    }

    .close {
        display: flex;
        justify-content: right;
        width: 98%;
    }

    /* Fondo oscuro semi-transparente */
    #modalBackdrop {
        display: none;
        position: fixed;
        z-index: 9998;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
    }

    .profile-container {
        display: flex;
        justify-content: space-between;
        /* Añadido para mantener el logo a la derecha */
        align-items: center;
        padding: 10px;
        background-color: #f5f5f5;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin: 10px 0;
    }

    .profile-pic {
        width: 80px;
        /* Tamaño más grande para la imagen */
        height: 80px;
        /* Mantener altura y anchura iguales para obtener un círculo */
        border-radius: 50%;
        /* Hace que la imagen tenga forma circular */
        object-fit: cover;
        /* Asegura que la imagen cubra completamente el contenedor */
        border: 4px solid #4c59af;
        /* Borde verde para resaltar */
        margin-right: 20px;
        /* Espacio entre imagen y texto */
    }

    /* Nuevo estilo para el logo */
    .logo-container {
        margin-left: 20px;
        /* Espacio entre el texto y el logo */
    }

    .logo {
        width: 120px;
        object-fit: cover;
    }

    .modal-text {
        flex: 1;
        /* Permitir que el texto ocupe el espacio restante */
    }

    .modal-text h2 {
        font-size: 1.5em;
        /* Tamaño de fuente para el nombre */
        color: #333;
        /* Texto gris oscuro para buena legibilidad */
        margin: 0;
        /* Eliminar margen adicional */
    }

    .modal-text p {
        font-size: 1.1em;
        /* Tamaño de fuente para el resto del texto */
        color: #666;
        /* Texto gris medio */
        line-height: 1.5;
        /* Espaciado entre líneas */
    }

    .modal-text a {
        color: #4c59af;
        /* Color para enlaces */
        text-decoration: none;
        /* Sin subrayado para enlaces */
    }

    .modal-text a:hover {
        text-decoration: underline;
        /* Subrayado al pasar el ratón para interactividad */
    }

    h1,
    h2 {
        font-weight: 600;
    }
</style>
</head>
<div class="information">
    <section id="informacion">
        <h1>Bienvenido a la Plataforma</h1>
        <p>
            Aquí puedes administrar a los trabajadores, ver cobros y llevar a cabo otras tareas de gestión.
        </p>
        <p>
            A continuación, encontrarás  una descripción de los botones y tablas, del sitio web.
        </p>
        <p>
            Informacion del Sotware:
        </p>
        <div class="ims">
            <img style=" height: 50px;" src="{{ asset('asset/images/logo.png') }}" alt="">
            <span style="padding-left: 3%;">Software Web Previcesar</span>
        </div>

    </section>

    <section id="descripcion">
        <h3>Descripción de Botones y Tablas</h3>
        <ul>
            <li>
                <span id="icon"><ion-icon name="home-outline"></ion-icon></span>
                <strong>Home:</strong> Inicio, muestra como es la navegacion de la pagina administrador y usuario
            </li>
            <li>
                <span id="icon"><ion-icon name="people-outline"></ion-icon></span>
                <strong>Agregar Trabajador:</strong> Permite agregar un nuevo trabajador a la base de datos.
            </li>
            <li>
                <span id="icon"><ion-icon name="people-outline"></ion-icon></span>
                <strong>Ver Personal:</strong> Muestra el listado de todos los trabajadores.
            </li>
            <li>
                <span id="icon"><ion-icon name="cash-outline"></ion-icon></span>
                <strong>Ver Cobros:</strong> Permite listado de cobros diarios.
            </li>
            <li>
                <span id="icon"><ion-icon name="cash-outline"></ion-icon></span>
                <strong>Registrar Cobro:</strong> Permite registrar el pago realizado.
            </li>
            <li>
                <span id="icon"><ion-icon name="document-text-outline"></ion-icon></span>
                <strong>Nuevo Contrato:</strong> Permite registrar un nuevo contrato en la base de datos.
            </li>
            <li>
                <span id="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                <strong>Cambio de Contraseña</strong> Permite al usuario cambiar su Contraseña.
            </li>
            <li><span id="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                <strong>Cerrar Sesion</strong>
            </li>
        </ul>
    </section>
</div>