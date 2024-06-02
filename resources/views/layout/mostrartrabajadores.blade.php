<style>
    .btn-primary{
        background-color: rgb(171, 71, 228);
    }
</style>
<div id="tablajus">
    <!-- Botón para abrir el formulario para agregar un nuevo trabajador -->
    <div class="mb-2">
        <button id="agregarTrabajador" class="btn btn-primary" data-toggle="modal" data-target="#agregarModal">Agregar
            Trabajador
        </button>
    </div>

    <!-- Tabla de trabajadores -->
    <table id="miTabla" class="table table-striped">
        <thead>
            <tr>
                <th>Tipo ID</th>
                <th>Número ID</th>
                <th>Nombres</th>
                <th>Cargo</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <!-- Llenar con datos dinámicamente -->
            {{-- {% for row in data %} --}}
            <tr>
                <td>CC</td>
                <td>1096</td>
                <td>Yona</td>
                <td>Administrador</td>
                <td>3134213189</td>
                <td>Yonatanvides04@gmail.com</td>
                <td>Activo</td>
            </tr>
            {{-- {% endfor %} --}}
        </tbody>
    </table>

    <!-- Modal para agregar trabajadores -->
    <div class="modal fade" id="agregarModal" tabindex="-1" role="dialog" aria-labelledby="agregarModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="agregarModalLabel">Agregar Trabajador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Asegura que el formulario tenga el atributo action y el método POST -->
                    <form id="formularioTrabajador" action="" method="POST">
                        @csrf
                        <div class="row">
                            <!-- Primera columna -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tipo_id">Tipo ID</label>
                                    <input type="text" class="form-control" id="tipo_id" name="tipo_id" required>
                                </div>
                                <div class="form-group">
                                    <label for="numero_id">Número ID</label>
                                    <input type="number" class="form-control" id="numero_id" name="numero_id" required>
                                </div>
                                <div class="form-group">
                                    <label para="nombres">Nombres</label>
                                    <input type="text" class="form-control" id="nombres" name="nombres" required>
                                </div>
                                <div class="form-group">
                                    <label para="correo">Correo</label>
                                    <input type="email" class="form-control" id="correo" name="correo" required>
                                </div>
                            </div>
    
                            <!-- Segunda columna -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label para="cargo">Cargo</label>
                                    <input type="text" class="form-control" id="cargo" name="cargo" required>
                                </div>
                                <div class="form-group">
                                    <label para="telefono">Telefono</label>
                                    <input para="number" class="form-control" id="telefono" name="telefono" required>
                                </div>
                                {{-- <div class="form-group">
                                    <label para="auxt">Auxilio de Transporte</label>
                                    <input para="number" class="form-control" id="auxt" name="auxt" required>
                                </div> --}}
                                <div class="form-group">
                                    <label para="estado">Estado</label>
                                    <input para="text" class="form-control" id="estado" name="estado" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary" id="guardarTrabajador">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    


    <!-- Scripts necesarios -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.18.3/bootstrap-table.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.18.3/locale/bootstrap-table-es-ES.min.js"></script>

    <!-- Evento para guardar un nuevo trabajador -->
    <script>
        $(document).ready(function () {
            $('#miTabla').bootstrapTable({
                search: true,
                filterControl: true,
                pagination: true,
                pageSize: 10,
                filterControlsLocale: {
                    searchPlaceholder: 'Buscar',
                    applyFilterText: 'Aplicar',
                    cancelFilterText: 'Cancelar'
                }
            });
        });
    </script>

    <!-- Estilos adicionales -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.18.3/bootstrap-table.min.css">

    <style>
        #agregarTrabajador {
            position: absolute;
            background-color: #3cb3c3;
        }

        .close {
            width: 10%;
            justify-content: center;
            align-items: center;
        }

        .close:hover {
            background-color: #3cb3c3;
        }
    </style>
</div>