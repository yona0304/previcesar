<link rel="stylesheet" href="{{ asset('asset/css/benefici.css') }}">
<div class="container">
    <form action="#" method="POST">
        @csrf
        <h3>Contrato</h3>
        <div class="row">
            <div class="col">
                <label>N° contrato</label>
                <input type="text" class="form-control" placeholder="ASD6576AD">
            </div>
            <div class="col">
                <label>Fecha Afiliación</label>
                <input type="date" class="form-control">
            </div>
            <div class="col">
                <label>$ Cuota</label>
                <input type="number" class="form-control" placeholder="Valor">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label>Sitio Emisión</label>
                <input type="text" class="form-control" placeholder="Barrio/Vereda">
            </div>
            <div class="col">
                <label>Asesor</label>
                <input type="text" class="form-control">
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="periodo_pago">Periodo pago</label>
                    <select class="form-control" id="periodo_pago" name="periodo_pago">
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
                <input type="number" class="form-control" placeholder="123456789">
            </div>
            <div class="col">
                <label>Nombre y Apellidos</label>
                <input type="text" class="form-control" placeholder="xxxxxx xxxxxx xxxxxxx">
            </div>
            <div class="col">
                <label>Fecha Nacimiento</label>
                <input type="date" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label>Telefono</label>
                <input type="number" class="form-control" placeholder="123456789">
            </div>
            <div class="col">
                <label>Dirección</label>
                <input type="text" class="form-control" placeholder="Barrio/Vereda">
            </div>
            <div class="col">
                <label>Lugar Expedición</label>
                <input type="text" class="form-control" placeholder="Ciudad de expedición">
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
                <div class="row" class="newgrupinput">
                    <div class="col">
                        <input type="number" class="form-control" name="documento[]" placeholder="N° documento"/>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="nombre_completo[]" placeholder="Nombre Completo"/>
                    </div>
                    <div class="col">
                        <input type="date" class="form-control" name="fecha_naci[]" placeholder="Fecha nacimiento" />
                    </div>
                    <button class="eliminar" type="button">-</ion-icon></button>
                </div>
            </div>
            <br/>
            <button id="agregar" type="button">+</button>
        </div>
        <button type="submit">Registrar Contrato</button>
    </form>
</div>

<script src="{{ asset('asset/js/incremento.js') }}"></script>