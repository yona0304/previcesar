<link rel="stylesheet" href="{{ asset('asset/css/benefici.css') }}">
<div class="container">
    <form id="formuContrato" action="{{ route('contracts.store') }}" method="POST">
        @csrf
        <h3>Contrato</h3>
        <div class="row">
            <div class="col">
                <label>N° contrato</label>
                <input name="n_contract" type="text" class="form-control" placeholder="ASD6576AD">
            </div>
            <div class="col">
                <label>Fecha Afiliación</label>
                <input name="affiliation_date" type="date" class="form-control">
            </div>
            <div class="col">
                <label>$ Cuota</label>
                <input name="quota_value" type="number" class="form-control" placeholder="Valor">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label>Sitio Emisión</label>
                <input name="site_issuance" type="text" class="form-control" placeholder="Barrio/Vereda">
            </div>
            <div class="col">
                <label>Asesor</label>
                <input name="advisor" type="text" class="form-control">
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="periodo_pago">Periodo pago</label>
                    <select name="payment_period" class="form-control" id="periodo_pago">
                        <option value="mensual">Mensual</option>
                        <option value="quincenal">Quincenal</option>
                        <option value="semanal">Semanal</option>
                    </select>
                </div>
            </div>
        </div>
        <hr>
        <h3>Titular</h3>
        <div class="row">
            <div class="col">
                <label>N° Documento</label>
                <input name="holder_identification" type="number" class="form-control" placeholder="123456789">
            </div>
            <div class="col">
                <label>Nombre y Apellidos</label>
                <input name="holder_name" type="text" class="form-control" placeholder="xxxxxx xxxxxx xxxxxxx">
            </div>
            <div class="col">
                <label>Fecha Nacimiento</label>
                <input name="holder_date_of_birth" type="date" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label>Telefono</label>
                <input name="holder_phone_number" type="number" class="form-control" placeholder="123456789">
            </div>
            <div class="col">
                <label>Dirección</label>
                <input name="holder_address" type="text" class="form-control" placeholder="Barrio/Vereda">
            </div>
            <div class="col">
                <label>Lugar Expedición</label>
                <input name="holder_shipping_location" type="text" class="form-control" placeholder="Ciudad de expedición">
            </div>
        </div>
        <hr>

        <div class="floating-buttons">
            <button id="btnConsulta" type="button">Agregar Beneficiarios</button>
        </div>
        
        <div class="floating-form" id="floatingForm">
            <h3>Beneficiarios</h3>
            <div class="row">
                <div class="col">
                    <label>N° Documento</label>
                </div>
                <div class="col">
                    <label>Nombre y Apellidos</label>
                </div>
                <div class="col">
                    <label>Fecha Nacimiento</label>
                </div>
            </div>
        
            <div id="beneficiarios_container">
                <div class="row newgrupinput">
                    <div class="col">
                        <input type="number" class="form-control" name="beneficiaries[0][identification]" placeholder="N° documento"/>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="beneficiaries[0][name]" placeholder="Nombre Completo"/>
                    </div>
                    <div class="col">
                        <input type="date" class="form-control" name="beneficiaries[0][date_of_birth]" placeholder="Fecha nacimiento" />
                    </div>
                    <button class="eliminar" type="button">-</button>
                </div>
            </div>
            <br/>
            <button id="agregar" type="button">+</button>
        </div>
        <button type="submit">Registrar Contrato</button>
    </form>
</div>
<script>
    $(document).ready(function () {
    $('#formuContrato').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function (response) {
                // Cierra el modal
                // $('#agregarModal').modal('hide');

                // Mostrar la alerta
                Swal.fire({
                    title: "¡Buen Trabajo!",
                    text: "Contrato guardado correctamente",
                    icon: "success",
                    timer: 2000, // Tiempo en milisegundos
                    showConfirmButton: false
                });

                // Esperar 2 segundos antes de recargar la página
                setTimeout(function() {
                    location.reload();
                }, 2000);

                // Recarga la página
                // location.reload();
            },
            error: function (response) {
                // Manejar errores aquí
                console.log(response);
            }
        });
    });
});
</script>

<script src="{{ asset('asset/js/incremento.js') }}"></script>
