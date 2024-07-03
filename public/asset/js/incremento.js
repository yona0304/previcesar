//incrustar una fila mas para registro de beneficiario

document.getElementById('agregar').addEventListener('click', function() {
    var container =  document.querySelector('#beneficiarios_container');
    var newInputGroup = document.createElement('div');
    newInputGroup.classList.add('row', 'newgrupinput'); // Añade la clase 'row' y 'newgrupinput'
    newInputGroup.innerHTML = `
        <div class="col">
            <input type="number" class="form-control" name="beneficiaries[${beneficiaryIndex}][identification]" placeholder="N° documento"/>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="beneficiaries[${beneficiaryIndex}][name]" placeholder="Nombre Completo"/>
        </div>
        <div class="col">
            <input type="date" class="form-control" name="beneficiaries[${beneficiaryIndex}][date_of_birth]" placeholder="Fecha nacimiento" />
        </div>
        <button class="eliminar">-</button>
    `;
    container.appendChild(newInputGroup);
});

//abrir formulario flotante en la pagina de contrato.
document.getElementById('btnConsulta').addEventListener('click', function() {
    var floatingForm = document.getElementById('floatingForm');
    floatingForm.classList.toggle('open'); // Abre o cierra el formulario flotante
});

//eliminar fila de beneficiario
document.getElementById('beneficiarios_container').addEventListener('click', function(e) {
    if (e.target.classList.contains('eliminar')) {
        e.target.parentElement.remove();
    }
});
