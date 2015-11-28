<div style="display: none" id="inset_form"></div>
<!-- START CONTENT  -->

<section id="content">

    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloGastos'); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--start container-->
    <div class="container">
        <div id="chart-dashboard">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div id="submit-button" class="section">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card lista-elementos">
                                    <div id="table-datatables">
                                        <div class="row">
                                            <div class="col s12 m12 l12">
                                                <div class="agregar_nuevo">
                                                    <a href="#agregarGasto" class="btn modal-trigger">
                                                        <?= label('tituloGastos_nuevo'); ?>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a id="busqueda-avanzada-agregar" href="#busquedaAvanzadaGastos"
                                                       class="modal-trigger"><?= label('gastos_busquedaAvanzada') ?></a>
                                                </div>
                                                <div id="contenedorTabla">
                                                    <table id="gastos-tabla-lista" cellspacing="0"
                                                           class="data-table-information responsive-table display">
                                                        <thead>
                                                            <tr>
                                                                <th style="text-align: center;">
                                                                    <input class="filled-in checkbox checkall" type="checkbox"
                                                                           id="checkbox-all"
                                                                           onclick="toggleChecked(this.checked)"/>
                                                                    <label for="checkbox-all"></label>
                                                                </th>
                                                                <th><?= label('tituloGastos_codigo'); ?></th>
                                                                <th><?= label('tituloGastos_tipo'); ?></th>
                                                                <th><?= label('tituloGastos_categoria'); ?></th>
                                                                <th><?= label('tituloGastos_tiempo'); ?></th>
                                                                <th><?= label('tituloGastos_gasto'); ?></th>
                                                                <th><?= label('tituloGastos_proveedor'); ?></th>
                                                                <th><?= label('tituloGastos_monto'); ?></th>
                                                                <th><?= label('tituloGastos_opciones'); ?></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        if (isset($lista)) {
                                                            if ($lista !== false) {
                                                                $contador = 0;
                                                                foreach ($lista as $fila) {
                                                                    $categoriaGasto = '';
                                                                    $formaPago = '';
                                                                    $persona = '';
                                                                    $tipo = '';
                                                                    if(isset($fila['datosAdicionales'])) {
                                                                        $categoriaGasto = $fila['datosAdicionales']['categoria'];
                                                                        $formaPago = $fila['datosAdicionales']['formaPago'];
                                                                        $persona = $fila['datosAdicionales']['persona'];
                                                                        $tipo = $fila['datosAdicionales']['tipo'];
                                                                    }
                                                                    $idEncriptado = encryptIt($fila['idGasto']); ?>

                                                                    <tr id="fila<?= $contador ?>" data-idElemento="<?= $idEncriptado ?>">
                                                                        <td style="text-align: center;">
                                                                            <input type="checkbox" class="filled-in checkbox"
                                                                                   id="<?=$idEncriptado?>"/>
                                                                            <label for="<?=$idEncriptado?>"></label>
                                                                        </td>
                                                                        <td><?= $fila['codigo']; ?></td>
                                                                        <td><?= $tipo; ?></td>
                                                                        <td><?= $categoriaGasto; ?></td>
                                                                        <td><?= $formaPago; ?></td>
                                                                        <td><?= $fila['nombre']; ?></td>
                                                                        <td><?= $persona; ?></td>
                                                                        <td><?= $fila['monto']; ?></td>
                                                                        <td>
                                                                            <ul id="dropdown-gasto<?= $contador ?>" class="dropdown-content">
                                                                                <li>
                                                                                    <a href="#editarGasto" data-id-editar="<?= $idEncriptado ?>"
                                                                                       class="-text modal-trigger abrirEditar"><?= label('menuOpciones_editar') ?></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#eliminarGasto" class="-text modal-trigger confirmarEliminar"
                                                                                       data-id-eliminar="<?= $idEncriptado ?>"  data-fila-eliminar="fila<?= $contador?>"><?= label('menuOpciones_eliminar') ?></a>
                                                                                </li>
                                                                            </ul>
                                                                            <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                               href="#" data-activates="dropdown-gasto<?= $contador++ ?>">
                                                                                <?= label('menuOpciones_seleccionar') ?>
                                                                                <i class="mdi-navigation-arrow-drop-down"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>

                                                        <?php
                                                                }
                                                            }
                                                        } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="tabla-conAgregar">
                                                    <a id="opciones-seleccionados-print"
                                                       class="black-text opciones-seleccionados option-print-table"
                                                       style="visibility: hidden;"
                                                       href="#" data-toggle="tooltip"
                                                       title="<?= label('opciones_seleccionadosImprimir') ?>">
                                                        <i class="mdi-action-print icono-opciones-varios"></i>
                                                    </a>
                                                    <ul id="dropdown-exportar" class="dropdown-content">
                                                        <li>
                                                            <a id="opciones-seleccionados-PDF" href="#" class="-text">
                                                                <?= label('opciones_seleccionadosExportarPdf') ?>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a id="opciones-seleccionados-Excel" href="#" class="-text">
                                                                <?= label('opciones_seleccionadosExportarExcel') ?>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <a id="opciones-seleccionados-export"
                                                       style="visibility: hidden;"
                                                       class="opciones-seleccionados boton-opciones black-text dropdown-button option-export-table"
                                                       href="#" data-toggle="tooltip"
                                                       title="<?= label('opciones_seleccionadosExportar') ?>"
                                                       data-activates="dropdown-exportar">
                                                        <i class="mdi-file-file-download icono-opciones-varios"></i>
                                                    </a>
                                                    <a id="opciones-seleccionados-delete"
                                                       class="modal-trigger black-text opciones-seleccionados option-delete-elements"
                                                       style="visibility: hidden;"
                                                       href="#eliminarElementosSeleccionados" data-toggle="tooltip"
                                                       title="<?= label('opciones_seleccionadosEliminar') ?>">
                                                        <i class="mdi-action-delete icono-opciones-varios"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end container-->

    <?php
    $this->load->view('layout/default/menu-crear.php'); ?>

</section>

<div style="display: none">
    <a id="linkModalErrorCargarDatos" href="#transaccionIncorrectaCargar" class="btn btn-default modal-trigger"></a>
    <a id="linkModalErrorEliminar" href="#transaccionIncorrectaEliminar" class="btn btn-default modal-trigger"></a>

    <a id="linkNuevaCategoria" href="#agregarCategoria" class="modal-trigger"></a>
    <a id="linkNuevaFormaPago" href="#agregarFormaPago" class="modal-trigger"></a>
    <a id="linkNuevaPersona" href="#agregarPersona" class="modal-trigger"></a>
</div>
<!-- END CONTENT-->

<!--Script para el manejo de selects de busqueda y datos de categorias, formas de pago y personas-->
<script type="text/javascript">
    $(document).ready(function () {
        actualizarSelectTipo();
        actualizarSelects();
    });

    function actualizarSelects() {
        var formulario = $('#form_gasto');
        $.ajax({
            type: formulario.attr('method'),
            url: '<?= base_url(); ?>gastos/personas',
            data: {  },
            success: function(response)
            {
                generarAutocompletarPersona($.parseJSON(response), 0);
            }
        });
        $.ajax({
            type: formulario.attr('method'),
            url: '<?= base_url(); ?>gastos/categoriasGasto',
            data: {  },
            success: function(response)
            {
                generarAutocompletarCategoria($.parseJSON(response), 0);
            }
        });
        $.ajax({
            type: formulario.attr('method'),
            url: '<?= base_url(); ?>gastos/formasPago',
            data: {  },
            success: function(response)
            {
                generarAutocompletarFormaPago($.parseJSON(response), 0);
                generarListas();
            }
        });
    }
    function actualizarSelectTipo() {
        var selectTipo = $('#form_gasto #gasto_tipo');
        selectTipo.empty();
        selectTipo.append($('<option>', {
            value: 1,
            text: 'Fijo',
            selected: true
        }));
        selectTipo.append($('<option>', {
            value: 2,
            text: 'Variable',
            selected: false
        }));
        selectTipo.material_select();
    }
    function actualizarSelectCategoriasGasto($id) {
        var formulario = $('#form_gasto');
        $.ajax({
            type: formulario.attr('method'),
            url: '<?= base_url(); ?>gastos/categoriasGasto',
            data: {  },
            success: function(response)
            {
                generarAutocompletarCategoria($.parseJSON(response), $id);
                generarListas();
            }
        });
    }
    function actualizarSelectFormasPago($id) {
        var formulario = $('#form_gasto');
        $.ajax({
            type: formulario.attr('method'),
            url: '<?= base_url(); ?>gastos/formasPago',
            data: {  },
            success: function(response)
            {
                generarAutocompletarFormaPago($.parseJSON(response), $id);
                generarListas();
            }
        });
    }
    function actualizarSelectPersonas($id) {
        var formulario = $('#form_gasto');
        $.ajax({
            type: formulario.attr('method'),
            url: '<?= base_url(); ?>gastos/personas',
            data: {  },
            success: function(response)
            {
                generarAutocompletarPersona($.parseJSON(response), $id);
                generarListas();
            }
        });
    }

    function actualizarSelectTipo_Editar($fijo) {
        var selectTipo = $('#form_gastoEditar #gasto_tipo');
        selectTipo.empty();
        if($fijo === '1') {
            selectTipo.append($('<option>', {
                value: 1,
                text: 'Fijo',
                selected: true
            }));
            selectTipo.append($('<option>', {
                value: 2,
                text: 'Variable',
                selected: false
            }));
        } else {
            selectTipo.append($('<option>', {
                value: 1,
                text: 'Fijo',
                selected: false
            }));
            selectTipo.append($('<option>', {
                value: 2,
                text: 'Variable',
                selected: true
            }));
        }
        selectTipo.material_select();
    }
    function actualizarSelectCategoriasGasto_Editar($idCategoria) {
        var formulario = $('#form_gasto');
        $.ajax({
            type: formulario.attr('method'),
            url: '<?= base_url(); ?>gastos/categoriasGasto',
            data: {  },
            success: function(response)
            {
                generarAutocompletarCategoriaEditar($.parseJSON(response), $idCategoria);
                generarListas();
            }
        });
    }
    function actualizarSelectFormasPago_Editar($idFormaPago) {
        var formulario = $('#form_gasto');
        $.ajax({
            type: formulario.attr('method'),
            url: '<?= base_url(); ?>gastos/formasPago',
            data: {  },
            success: function(response)
            {
                generarAutocompletarFormaPagoEditar($.parseJSON(response), $idFormaPago);
                generarListas();
            }
        });
    }
    function actualizarSelectPersonas_Editar($idPersona) {
        var formulario = $('#form_gasto');
        $.ajax({
            type: formulario.attr('method'),
            url: '<?= base_url(); ?>gastos/personas',
            data: {  },
            success: function(response)
            {
                generarAutocompletarPersonaEditar($.parseJSON(response), $idPersona);
                generarListas();
            }
        });
    }

    function botonEnLista(tipo, idBoton, nuevoElementoAgregar){
        if (tipo == "agregarGasto_categoria") {
            $('#categoria_nombre').val(nuevoElementoAgregar);
            $('#linkNuevaCategoria').click();
            $('#categoria_nombre').focus();
            document.getElementById('agregarGasto').style.visibility = 'hidden';
            document.getElementById('editarGasto').style.visibility = 'hidden';
        }
        if (tipo == "agregarGasto_formaPago") {
            $('#formaPago_nombre').val(nuevoElementoAgregar);
            $('#linkNuevaFormaPago').click();
            $('#formaPago_nombre').focus();
            document.getElementById('agregarGasto').style.visibility = 'hidden';
            document.getElementById('editarGasto').style.visibility = 'hidden';
        }
        if (tipo == "agregarGasto_persona") {
            $('#persona_nombre').val(nuevoElementoAgregar);
            $('#linkNuevaPersona').click();
            $('#persona_nombre').focus();
            document.getElementById('agregarGasto').style.visibility = 'hidden';
            document.getElementById('editarGasto').style.visibility = 'hidden';
        }
    }

    function generarAutocompletarCategoria($array, $id){
        var miSelect = $('#gasto_categoria');
        miSelect.empty();
        miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("agregarGasto_elegirCategoria"); ?></option>');
        miSelect.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');
        for(var i = 0; i < $array.length; i++) {
            var cat = $array[i];
            if(cat != null) {
                if(cat['idCategoriaGasto'] == $id){
                    miSelect.append('<option value="' + cat['idCategoriaGasto'] + '" selected>' + cat['nombre'] + '</option>');
                } else {
                    miSelect.append('<option value="' + cat['idCategoriaGasto'] + '">' + cat['nombre'] + '</option>');
                }
            }
        }
        miSelect.trigger("chosen:updated");
//        var opts = document.getElementById("gasto_categoria").options;
    }
    function generarAutocompletarFormaPago($array, $id){
        var miSelect = $('#gasto_formaPago');
        miSelect.empty();
        miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("agregarGasto_elegirFormaPago"); ?></option>');
        miSelect.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');
        for(var i = 0; i < $array.length; i++) {
            var formaP = $array[i];
            if(formaP != null) {
                if(formaP['idFormaPago'] == $id) {
                    miSelect.append('<option value="' + formaP['idFormaPago'] + '" selected>' + formaP['nombre'] + '</option>');
                } else {
                    miSelect.append('<option value="' + formaP['idFormaPago'] + '">' + formaP['nombre'] + '</option>');
                }
            }
        }
        miSelect.trigger("chosen:updated");
    }
    function generarAutocompletarPersona($array, $id){
        var miSelect = $('#gasto_persona');
        miSelect.empty();
        miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("agregarGasto_elegirPersona"); ?></option>');
        miSelect.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');
        for(var i = 0; i < $array.length; i++) {
            var pers = $array[i];
            if(pers != null) {
                var tipoPersona = pers['juridico'];
                var nombreCompleto = pers['nombre'];
                if(tipoPersona == '0') {
                    nombreCompleto += ' ' + pers['primerApellido'] + ' ' + pers['segundoApellido'];
                }
                if(pers['idProveedor'] == $id) {
                    miSelect.append('<option value="' + pers['idProveedor'] + '" selected>' + nombreCompleto + '</option>');
                } else {
                    miSelect.append('<option value="' + pers['idProveedor'] + '">' + nombreCompleto + '</option>');
                }
            }
        }
        miSelect.trigger("chosen:updated");
    }
    function generarAutocompletarCategoriaEditar($array, $id){
        var miSelect = $('#gasto_categoriaEditar');
        miSelect.empty();
        miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("agregarGasto_elegirCategoria"); ?></option>');
        miSelect.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');
        for(var i = 0; i < $array.length; i++) {
            var cat = $array[i];
            if(cat != null) {
                if(cat['idCategoriaGasto'] == $id){
                    miSelect.append('<option value="' + cat['idCategoriaGasto'] + '" selected>' + cat['nombre'] + '</option>');
                } else {
                    miSelect.append('<option value="' + cat['idCategoriaGasto'] + '">' + cat['nombre'] + '</option>');
                }
            }
        }
        miSelect.trigger("chosen:updated");
    }
    function generarAutocompletarFormaPagoEditar($array, $id){
        var miSelect = $('#gasto_formaPagoEditar');
        miSelect.empty();
        miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("agregarGasto_elegirFormaPago"); ?></option>');
        miSelect.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');
        for(var i = 0; i < $array.length; i++) {
            var formaP = $array[i];
            if(formaP != null) {
                if(formaP['idFormaPago'] == $id) {
                    miSelect.append('<option value="' + formaP['idFormaPago'] + '" selected>' + formaP['nombre'] + '</option>');
                } else {
                    miSelect.append('<option value="' + formaP['idFormaPago'] + '">' + formaP['nombre'] + '</option>');
                }
            }
        }
        miSelect.trigger("chosen:updated");
    }
    function generarAutocompletarPersonaEditar($array, $id){
        var miSelect = $('#gasto_personaEditar');
        miSelect.empty();
        miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("agregarGasto_elegirPersona"); ?></option>');
        miSelect.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');
        for(var i = 0; i < $array.length; i++) {
            var pers = $array[i];
            if(pers != null) {
                var tipoPersona = pers['juridico'];
                var nombreCompleto = pers['nombre'];
                if(tipoPersona == '0') {
                    nombreCompleto += ' ' + pers['primerApellido'] + ' ' + pers['segundoApellido'];
                }
                if(pers['idProveedor'] == $id) {
                    miSelect.append('<option value="' + pers['idProveedor'] + '" selected>' + nombreCompleto + '</option>');
                } else {
                    miSelect.append('<option value="' + pers['idProveedor'] + '">' + nombreCompleto + '</option>');
                }
            }
        }
        miSelect.trigger("chosen:updated");
    }

    function generarListas(){
        var config = {'.chosen-select'           : {}}
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }
    }
    $(document).on('change','.chosen-select',function(){
        var valor = $(this).val();
        var tipo = $(this).attr("data-tipo");
        if (valor=="nuevo") {
            var idBoton = $(this).attr("id");
            var nuevoElementoAgregar = "";
            botonEnLista(tipo, idBoton, nuevoElementoAgregar)
        }
    });

    var cerrarModalCategoria = false;
    var cerrarModalFormaPago = false;
    var cerrarModalPersona = false;
    $(document).on('ready', function(){
        $('#guardarOtroCategoria').on('click', function(){
            cerrarModalCategoria = false;
        });
        $('#guardarCerrarCategoria').on('click', function(){
            cerrarModalCategoria = true;
        });
        $('#guardarOtroFormaPago').on('click', function(){
            cerrarModalFormaPago = false;
        });
        $('#guardarCerrarFormaPago').on('click', function(){
            cerrarModalFormaPago = true;
        });
        $('#guardarOtroPersona').on('click', function(){
            cerrarModalPersona = false;
        });
        $('#guardarCerrarPersona').on('click', function(){
            cerrarModalPersona = true;
        });
    });
    function limpiarFormCategoria() {
        $('#form_categoria')[0].reset();
        var validator = $("#form_categoria").validate();
        validator.resetForm();
    }
    function limpiarFormFormaPago() {
        $('#form_formaPago_Gastos')[0].reset();
        var validator = $("#form_formaPago_Gastos").validate();
        validator.resetForm();
    }
    function limpiarFormPersona() {
        $('#form_persona_Gastos')[0].reset();
        var validator = $("#form_persona_Gastos").validate();
        validator.resetForm();
    }

    $(document).ready(function () {
        $('#modalAgregarCategoria_cerrar').on('click', function () {
            document.getElementById('agregarGasto').style.visibility = 'visible';
            document.getElementById('editarGasto').style.visibility = 'visible';
            document.getElementById('agregarCategoria').style.display = 'none';
        });
        $('#modalAgregarFormaPago_cerrar').on('click', function () {
            document.getElementById('agregarGasto').style.visibility = 'visible';
            document.getElementById('editarGasto').style.visibility = 'visible';
            document.getElementById('agregarFormaPago').style.display = 'none';
        });
        $('#modalAgregarPersona_cerrar').on('click', function () {
            document.getElementById('agregarGasto').style.visibility = 'visible';
            document.getElementById('editarGasto').style.visibility = 'visible';
            document.getElementById('agregarPersona').style.display = 'none';
        });
        $(document).on('click', '#lean-overlay', function () {
            document.getElementById('agregarGasto').style.visibility = 'visible';
            document.getElementById('editarGasto').style.visibility = 'visible';
        });
    });
    function validacionCorrecta_Categoria() {
        $.ajax({
            data: $('#form_categoria').serialize(),
            url:   '<?=base_url()?>gastos/verificarNombreCategoria',
            type:  'post',
            success:  function (response) {
                if (response == '0') {
                    alert("<?=label('errorGuardar'); ?>");
                    $('#agregarCategoria .modal-header a').click();
                } else {
                    if (response == '2') {
                        var url = $('#form_categoria').attr('action');
                        var method = $('#form_categoria').attr('method');
                        $.ajax({
                            type: method,
                            url: url,
                            data: $('#form_categoria').serialize(),
                            success: function(response)
                            {
                                if (response == 0) {
                                    alert("<?=label('errorGuardar'); ?>");
                                    $('#agregarCategoria .modal-header a').click();
                                } else {
                                    actualizarSelectCategoriasGasto(response);
                                    actualizarSelectCategoriasGasto_Editar(response);
                                    alert("<?=label('gastos_categoriaGuardadoCorrectamente'); ?>");
                                    if (cerrarModalCategoria) {
                                        $('#agregarCategoria .modal-header a').click();
                                    } else{
                                        limpiarFormCategoria();
                                    }
                                }
                            }
                        });
                    } else {
                        alert("<?=label('categoria_error_nombreExisteEnBD'); ?>");
                        $('#form_categoria #categoria_nombre').focus();
                    }
                }
            }
        });
    }
    function validacionCorrecta_FormaPago() {
        $.ajax({
            data: $('#form_formaPago_Gastos').serialize(),
            url:   '<?=base_url()?>gastos/verificarNombreFormaPago',
            type:  'post',
            success:  function (response) {
                if (response == '0') {
                    alert("<?=label('errorGuardar'); ?>");
                    $('#agregarFormaPago .modal-header a').click();
                } else{
                    if (response == '2') {
                        var url = $('#form_formaPago_Gastos').attr('action');
                        var method = $('#form_formaPago_Gastos').attr('method');
                        $.ajax({
                            type: method,
                            url: url,
                            data: $('#form_formaPago_Gastos').serialize(),
                            success: function(response)
                            {
                                if (response == 0) {
                                    alert("<?=label('errorGuardar'); ?>");
                                    $('#agregarFormaPago .modal-header a').click();
                                } else {
                                    actualizarSelectFormasPago(response);
                                    actualizarSelectFormasPago_Editar(response);
                                    alert("<?=label('gastos_FormaPagoGuardadoCorrectamente'); ?>");
                                    if (cerrarModalFormaPago) {
                                        $('#agregarFormaPago .modal-header a').click();
                                    } else{
                                        limpiarFormFormaPago();
                                    }
                                }
                            }
                        });
                    } else{
                        alert("<?=label('formaPago_error_nombreExisteEnBD'); ?>");
                        $('#form_formaPago_Gastos #formaPago_nombre').focus();
                    }
                }
            }
        });
    }
    function validacionCorrecta_Persona() {
        $.ajax({
            data: $('#form_persona_Gastos').serialize(),
            url:   '<?=base_url()?>gastos/verificarIdentificacionPersona',
            type:  'post',
            success:  function (response) {
                if (response == '0') {
                    alert("<?=label('errorGuardar'); ?>");
                    $('#agregarPersona .modal-header a').click();
                } else{
                    if (response == '2') {
                        var formulario = $('#form_persona_Gastos');
                        var url = formulario.attr('action');
                        var method = formulario.attr('method');
                        var data = new FormData(formulario[0]);
                        $.ajax({
                            type: method,
                            url: url,
                            data: data,
                            success: function(response)
                            {
                                if (response == 0) {
                                    alert("<?=label('errorGuardar'); ?>");
                                    $('#agregarPersona .modal-header a').click();
                                } else {
                                    actualizarSelectPersonas(response);
                                    actualizarSelectPersonas_Editar(response);
                                    alert("<?=label('gastos_PersonaGuardadoCorrectamente'); ?>");
                                    if (cerrarModalPersona) {
                                        $('#agregarPersona .modal-header a').click();
                                    } else{
                                        limpiarFormPersona();
                                    }
                                }
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                    } else{
                        alert("<?=label('persona_error_identificacionExisteEnBD'); ?>");
                        $('#form_persona_Gastos #persona_identificacion').focus();
                        $('#form_persona_Gastos #personajuridico_identificacion').focus();
                    }
                }
            }
        });
    }
</script>
<!--Script para el manejo de gastos-->
<script type="text/javascript">
    var menuOpciones_editar = '<?= label('menuOpciones_editar'); ?>';
    var menuOpciones_eliminar = '<?= label('menuOpciones_eliminar'); ?>';
    var menuOpciones_seleccionar = '<?= label('menuOpciones_seleccionar'); ?>';

    var row = null;
    var checkActivo = false;
    var idEditar = 0;
    $(document).on('ready', function() {
        var table = $('table').DataTable();
        $(document).on( 'click', '.abrirEditar', function () {
            limpiarFormEditar();
            idEditar = $(this).data('id-editar');
            checkActivo = false;
            checkActivo = $('.checkbox#'+idEditar).is(':checked');// se verifica el estado del check para actualizarlo luego de editar la fila ya que este check se quita solo al editar
            row = table.row($(this).parents('tr'));

            var url = '<?=base_url()?>gastos/editar';
            var method = 'POST';
            $.ajax({
                type: method,
                url: url,
                data: {idEditar : idEditar},
                success: function(response)
                {
                    var gasto = $.parseJSON(response);
                    $('#form_gastoEditar #gasto_codigoOriginal').val(gasto['codigo']);
                    $('#form_gastoEditar #gasto_codigo').val(gasto['codigo']);
                    $('#form_gastoEditar #gasto_nombre').val(gasto['nombre']);
                    $('#form_gastoEditar #gasto_monto').val(gasto['monto']);
                    $('#form_gastoEditar #idGasto').val(idEditar);

                    actualizarSelectTipo_Editar(gasto['gastoFijo']);
                    actualizarSelectCategoriasGasto_Editar(gasto['idCategoriaGasto']);
                    actualizarSelectFormasPago_Editar(gasto['formaPago']);
                    actualizarSelectPersonas_Editar(gasto['idProveedor']);
                    $('label').addClass('active');
                }
            });
        });
    });
    function limpiarFormEditar(){
        $('#form_gastoEditar')[0].reset();
        var validator = $("#form_gastoEditar").validate();
        validator.resetForm();
    }
    function editarFila(categoria, persona, tipo, codigo, nombre, monto, formaPago) {
        var d = row.data();
        d[1]= codigo;
        d[2]= tipo;
        d[3]= categoria;
        d[4]= formaPago;
        d[5]= nombre;
        d[6]= persona;
        d[7]= monto;
        row.data(d);
        generarListasBotones();
        $('.modal-trigger').leanModal();
        if (checkActivo) {
            $('.checkbox#'+idEditar).prop('checked', true);
        }
    }

    var contadorFilas = 0;
    <?php
    if (isset($lista)) {
        if ($lista !== false) { ?>
            contadorFilas = <?=count($lista);?>;//actualiza el contador con los que vienen desde la bd
    <?php
        }
    } ?>
    function agregarFila(idEncriptado, categoria, persona, tipo, codigo, nombre, monto, formaPago){
        var check = '<td>' +
                        '<div style="text-align: center;">'+
                            '<input type="checkbox" class="filled-in checkbox" id="'+idEncriptado+'"/>' +
                            '<label for="'+idEncriptado+'"></label>' +
                        '</div>'+
                    '</td>';
        var boton = '<td>' +
                        '<ul id="dropdown-gasto'+ contadorFilas +'" class="dropdown-content">' +
                            '<li>' +
                                '<a href="#" data-id-editar="'+idEncriptado+'"' +
                                    'class="-text modal-trigger abrirEditar">'+ menuOpciones_editar + '</a>' +
                            '</li>' +
                            '<li>' +
                                '<a href="#"' +
                                    'class="-text modal-trigger confirmarEliminar"' +
                                    'data-id-eliminar="'+idEncriptado+'"  data-fila-eliminar="fila'+ contadorFilas +'">'+menuOpciones_eliminar+'</a>' +
                            '</li>' +
                        '</ul>' +
                        '<a class="boton-opciones btn-flat dropdown-button waves-effect white-text"' +
                            'href="#"' +
                            'data-activates="dropdown-gasto'+ contadorFilas +'">' +
                            ''+ menuOpciones_seleccionar +'<i class="mdi-navigation-arrow-drop-down"></i>' +
                        '</a>' +
                    '</td>';
        var categoria = '<td>' + categoria + '</td>';
        var persona = '<td>' + persona + '</td>';
        var tipo = '<td>' + tipo +' </td>';
        var codigo = '<td>' + codigo + '</td>';
        var nombre = '<td>' + nombre + '</td>';
        var monto = '<td>' + monto + '</td>';
        var formaPago = '<td>' + formaPago + '</td>';
        $('table').dataTable().fnAddData([
            check,
            codigo,
            tipo,
            categoria,
            formaPago,
            nombre,
            persona,
            monto,
            boton ]);
        generarListasBotones();
        $('.modal-trigger').leanModal();
        contadorFilas++;
    }
    function generarListasBotones() {
        $('.boton-opciones').sideNav({
            // menuWidth: 0, // Default is 240
            edge: 'right', // Choose the horizontal origin
            closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
            }
        );
        $('.dropdown-button').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrain_width: true, // Does not change width of dropdown to that of the activator
            hover: false, // Activate on hover
            gutter: 0, // Spacing from edge
            belowOrigin: true, // Displays dropdown below the button
            alignment: 'left' // Displays dropdown with edge aligned to the left of button
        });
    }

    var cerrarModal = false;
    $(document).on('ready', function(){
        $('#guardarOtro').on('click', function(){
            cerrarModal = false;
        });
        $('#guardarCerrar').on('click', function(){
            cerrarModal = true;
        });
        $('#botonNuevoTipoMoneda').click(function(){
            limpiarForm();
        });
    });
    function limpiarForm() {
        $('#form_gasto')[0].reset();
        var validator = $("#form_gasto").validate();
        validator.resetForm();
    }

    function validacionCorrecta() {
        $.ajax({
            data: $('#form_gasto').serialize(),
            url:   '<?=base_url()?>gastos/verificarCodigo',
            type:  'post',
            success:  function (response) {
                if (response == '0') {
                    alert("<?=label('errorGuardar'); ?>");
                    $('#agregarGasto .modal-header a').click();
                } else {
                    if (response == '2') {
                        var url = $('#form_gasto').attr('action');
                        var method = $('#form_gasto').attr('method');
                        $.ajax({
                            type: method,
                            url: url,
                            data: $('#form_gasto').serialize(),
                            success: function(response)
                            {
                                if (response == 0) {
                                    alert("<?=label('errorGuardar'); ?>");
                                    $('#agregarGasto .modal-header a').click();
                                } else {
                                    alert("<?=label('gastos_gastoGuardadoCorrectamente'); ?>");
                                    var idGasto = response;
                                    var url = '<?=base_url()?>gastos/editar';
                                    var method = 'POST';
                                    $.ajax({
                                        type: method,
                                        url: url,
                                        data: {idEditar : idGasto},
                                        success: function(response)
                                        {
                                            var gasto = $.parseJSON(response);
                                            agregarFila(idGasto, gasto['datosAdicionales']['categoria'], gasto['datosAdicionales']['persona'],
                                                gasto['datosAdicionales']['tipo'], gasto['codigo'], gasto['nombre'], gasto['monto'],
                                                gasto['datosAdicionales']['formaPago']);
                                        }
                                    });
                                    if (cerrarModal) {
                                        $('#agregarGasto .modal-header a').click();
                                        limpiarForm();
                                    } else{
                                        limpiarForm();
                                    }
                                }
                            }
                        });
                    } else {
                        alert("<?=label('gasto_error_codigoExisteEnBD'); ?>");
                        $('#form_gasto #gasto_codigo').focus();
                    }
                }
            }
        });
    }
    function validacionCorrectaEditar() {
        if($('#form_gastoEditar #gasto_codigoOriginal').val() != $('#form_gastoEditar #gasto_codigo').val()) {
            $.ajax({
                data: $('#form_gastoEditar').serialize(),
                url:   '<?=base_url()?>gastos/verificarCodigo',
                type:  'post',
                success:  function (response) {
                    if (response == '0') {
                        alert("<?=label('errorGuardar'); ?>");
                        $('#editarGasto .modal-header a').click();
                    } else{
                        if (response == '2') {
                            var url = $('#form_gastoEditar').attr('action');
                            var method = $('#form_gastoEditar').attr('method');
                            $.ajax({
                                type: method,
                                url: url,
                                data: $('#form_gastoEditar').serialize(),
                                success: function(response)
                                {
                                    if (response == 0) {
                                        alert("<?=label('errorEditar'); ?>");
                                        $('#editarGasto .modal-header a').click();
                                    } else {
                                        alert("<?=label('gastos_gastoEditadoCorrectamente'); ?>");

                                        var idGastoEditar = $('#form_gastoEditar #idGasto').val();
                                        var url = '<?=base_url()?>gastos/editar';
                                        var method = 'POST';
                                        $.ajax({
                                            type: method,
                                            url: url,
                                            data: {idEditar : idGastoEditar},
                                            success: function(response)
                                            {
                                                var gasto = $.parseJSON(response);
                                                editarFila(gasto['datosAdicionales']['categoria'], gasto['datosAdicionales']['persona'],
                                                    gasto['datosAdicionales']['tipo'], gasto['codigo'], gasto['nombre'], gasto['monto'],
                                                    gasto['datosAdicionales']['formaPago']);
                                            }
                                        });
                                        $('#editarGasto .modal-header a').click();
                                    }
                                }
                            });
                        } else{
                            alert("<?=label('gasto_error_codigoExisteEnBD'); ?>");
                            $('#form_gastoEditar #gasto_codigo').focus();
                        }
                    }
                }
            });
        } else {
            var url = $('#form_gastoEditar').attr('action');
            var method = $('#form_gastoEditar').attr('method');
            $.ajax({
                type: method,
                url: url,
                data: $('#form_gastoEditar').serialize(),
                success: function(response)
                {
                    if (response == 0) {
                        alert("<?=label('errorEditar'); ?>");
                        $('#editarGasto .modal-header a').click();
                    } else {
                        alert("<?=label('gastos_gastoEditadoCorrectamente'); ?>");

                        var idGastoEditar = $('#form_gastoEditar #idGasto').val();
                        var url = '<?=base_url()?>gastos/editar';
                        var method = 'POST';
                        $.ajax({
                            type: method,
                            url: url,
                            data: {idEditar : idGastoEditar},
                            success: function(response)
                            {
                                var gasto = $.parseJSON(response);
                                editarFila(gasto['datosAdicionales']['categoria'], gasto['datosAdicionales']['persona'],
                                    gasto['datosAdicionales']['tipo'], gasto['codigo'], gasto['nombre'], gasto['monto'],
                                    gasto['datosAdicionales']['formaPago']);
                            }
                        });
                        $('#editarGasto .modal-header a').click();
                    }
                }
            });
        }
    }
</script>
<!--Script para el control de la tabla, checks y opciones de elementos marcados-->
<script type="text/javascript">
   $(document).on("ready", function () {

       <?php
      if (isset($lista)) {
          if ($lista === false) {?>

                $('#linkModalErrorCargarDatos').click();

           <?php
      }
      }
      ?>


       var idEliminar = 0;
       var filaEliminar = null;

       $(document).on('click','.confirmarEliminar', function () {
           idEliminar = $(this).data('id-eliminar');
           filaEliminar = $(this).parents('tr');

       });

        $('#eliminarGasto #botonEliminar').on('click', function () {
           event.preventDefault();
           $.ajax({
                  data: {idEliminar : idEliminar},
                  url:   '<?=base_url()?>gastos/eliminar',
                  type:  'post',
                  // beforeSend: function () {
                  //         $("#resultado").html("Procesando, espere por favor...");
                  // },
                  success:  function (response) {
                   if (response==1) {
                       filaEliminar.fadeOut(function () {
                       filaEliminar.remove();
                       verificarChecks();
                       });

                   } else{
                       $('#linkModalErrorEliminar').click();
                   };
               }
           });
        });
   });

   $(document).ready( function () {
       $('#gastos-tabla-lista').dataTable( {
           'aoColumnDefs': [{
               'bSortable': false,
               'aTargets': [0, -1] //desactiva en primer y última columna opción de ordenar
           }]
       });
   });
   $(document).ready(function () {
       $('table#gastos-tabla-lista thead th:first').removeClass('sorting_asc').addClass('sorting_disabled');
       $('table#gastos-tabla-lista thead th:nth-child(2)').removeClass('sorting').addClass('sorting_asc');
   });
   $(document).ready(function () {
       $('#eliminarElementosSeleccionados #botonEliminar').on("click", function (event) {
           var tb = $(this).attr('title');
           var sel = false;
           var ch = $('#' + tb).find('tbody input[type=checkbox]');
           var marcados = $('.checkbox:checked').not('#checkbox-all').size();
           var contadorErrores = 0;
           var contadorTotal = 0;
           ch.each(function () {
               var $this = $(this);
               if ($this.is(':checked')) {
                   sel = true;
                    var fila = $this.parents('tr');
                   // var idEliminar = $this.parents('tr').attr('data-idElemento');
                   var idEliminar = $this.attr('id');
                   $.ajax({
                          data: {idEliminar : idEliminar},
                          url:   '<?=base_url()?>gastos/eliminar',
                          type:  'post',
                          success:  function (response) {

                           contadorTotal++;
                           if (response==1) {
                              fila.fadeOut(function () {
                               fila.remove();
                               verificarChecks();
                               });
                           } else{
                            contadorErrores++;
                           };
                            if (contadorTotal == marcados) {
                                if (contadorErrores != 0) {
                                    $('#linkModalErrorEliminar').click();
                                }

                            };
                       }
                   });

               }
           });

           return false;

       });
   });

    $(window).load(function () {
        verificarChecks();
    });

   $(document).ready(function () {
       $('#checkbox-all').click(function (event) {
           var $this = $(this);
           var tableBody = $('#gastos-tabla-lista').find('tbody tr[role=row] input[type=checkbox]');
           tableBody.each(function() {
               var check = $(this);
               if ($this.is(':checked')) {
                   check.prop('checked', true);
               } else {
                   check.prop('checked', false);
               }
           });
       });
    });
    $(document).ready(function () {
      $(document).on('click','.checkbox',function (event) {
        verificarChecks();
      });
    });

   function verificarChecks(){

       var marcados = $('.checkbox:checked').not('#checkbox-all').size();
       if (marcados >= 1) {
           var elems = document.getElementsByClassName('opciones-seleccionados');
           var e;
           for (e in elems) {
               elems[e].style.visibility = 'visible';
           }
       } else {
           $('#checkbox-all').prop('checked', false);
           var elems = document.getElementsByClassName('opciones-seleccionados');
           var e;
           for (e in elems) {
               elems[e].style.visibility = 'hidden';
           }
       }
   }

   $(document).ready(function () {
          $('.boton-opciones').sideNav({
          // menuWidth: 0, // Default is 240
           edge: 'right', // Choose the horizontal origin
              closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
            }
          );

          $('.dropdown-button').dropdown({
              inDuration: 300,
              outDuration: 225,
              constrain_width: true, // Does not change width of dropdown to that of the activator
              hover: false, // Activate on hover
              gutter: 0, // Spacing from edge
              belowOrigin: true, // Displays dropdown below the button
              alignment: 'left' // Displays dropdown with edge aligned to the left of button
            }
          );
    });

   // Inicio script de descarga pdf, excel e imprimir
   $(document).on('ready', function(){

       $('#opciones-seleccionados-print').on("click", function(){
           tablaHtml = htmlTabla('gastos-tabla-lista', true);
           Popup(tablaHtml);
       });

       function Popup(data)
       {
           // var mywindow = window.open('', 'my div', 'height=400,width=600');
           var mywindow = window.open('', 'my div', '');
           mywindow.document.write('<html><head><title><?= label('tituloGastos'); ?></title>');
          // mywindow.document.write('<link media="print,screen" href="<?= base_url() ?>assets/dashboard/css/estiloTablasDescarga.css" rel="stylesheet" type="text/css" >');
           mywindow.document.write('</head><body>');
           mywindow.document.write(data);
           mywindow.document.write('</body></html>');
           mywindow.document.close(); // necessary for IE >= 10
           mywindow.focus(); // necessary for IE >= 10
           mywindow.print();
           mywindow.close();
           return true;
       }


       $('#opciones-seleccionados-Excel').on("click", function(){
           var html = htmlTabla('gastos-tabla-lista', false);
           $('#inset_form').html('<form  action="<?=base_url()?>ManejadorExcel/tablaDescarga" name="form" method="post" style="display:block;"><input type="text" name="titulo" value="<?= label('tituloGastos'); ?>"><textarea name="miHtml">' + html + '</textarea></form>');
           document.forms['form'].submit();
       });

       $('#opciones-seleccionados-PDF').on("click", function(){
           var informacionSistema = '<div id="informacionSistema"><div id="linkPagina"><a href="<?=base_url()?>"><?= label('link_paginaInicial'); ?></a></div><span class="numeracion"></span></div>';
           var encabezado = '<div id="encabezado"><?= label('tituloGastos'); ?></div>';
           var body = encabezado + informacionSistema;
           body += htmlTabla('gastos-tabla-lista', false);
           var html = '<!DOCTYPE html><html><head><title>403 Forbidden</title><link rel="stylesheet" href="<?= base_url() ?>assets/dashboard/css/estiloTablasDescarga.css"></head><body id="hojaPDF">';
           html +=  body + '</body></html>';
           $('#inset_form').html('<form  action="<?=base_url()?>ManejadorPDF/tablaDescarga" name="form" method="post" style="display:block;"><input type="text" name="titulo" value="<?= label('tituloGastos'); ?>"><textarea name="miHtml">' + html + '</textarea></form>');
           document.forms['form'].submit();
       });


       function htmlTabla(idTabla, style){

           var styleTable = 'style="border-collapse:collapse;width: 100%;"';
           var styleHead = 'style="font-weight: bold;"';
           var styleTd = 'style="border:1px solid #A9A9A9; padding:3px 7px 2px 7px;"';
           if (style) {
               var tablaHtml = '<table ' + styleTable + '><thead ' + styleHead + '>';
           } else{
               var tablaHtml = '<table><thead>';
           };

           var tabla = $("#" + idTabla).dataTable();

           tabla.find('> thead > tr').each(function()
           {
               tablaHtml += '<tr>';
               var cantidadColummnas = $(this).children("th").length;
                 $(this).children("th").each(function(index){
                   if (index != 0 && index != cantidadColummnas-1) {
                       if (style) {
                           tablaHtml += '<td ' + styleTd + '>' + $(this).html() + '</td>';
                       } else{
                           tablaHtml += '<td>' + $(this).html() + '</td>';
                       };

                   };
                 });
               tablaHtml += '</tr>';
           });

           tablaHtml += '</thead>';
           tablaHtml += '<tbody>';
           tabla.find('> tbody > tr').each(function()
           {
               if ($(this).children("td").first().find('input').is(':checked')) {
               tablaHtml += '<tr>';
               var cantidadColummnas = $(this).children("td").length;
                 $(this).children("td").each(function(index){
                   if (index != 0 && index != cantidadColummnas-1) {
                       if (style) {
                           tablaHtml += '<td '+ styleTd +'>' + $(this).text() + '</td>';
                       } else{
                           tablaHtml += '<td>' + $(this).text() + '</td>';
                       };

                   };
                 });
             tablaHtml += '</tr>';
         }
           });
           tablaHtml += '</tbody></table>';
          return  tablaHtml;

       }
   });
   // Fin script de descarga pdf, excel e imprimir



</script>

<!--Scripts para manejo de persona-->
<script type="text/javascript">
    $(document).on('ready', function(){
        var config = {'.chosen-select'           : {}}
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }
    });
    function tipoProveedor(opcionSeleccionada) {
        if (opcionSeleccionada.value == "1") {
            document.getElementById('seleccion_TipoProveedor').style.display = 'block';
        } else {
            document.getElementById('seleccion_TipoProveedor').style.display = 'none';
            document.getElementById('camposObligatorios_fisico').style.display = 'block';
            document.getElementById('camposObligatorios_juridico').style.display = 'none';
        }
    }
    function datosProveedor(opcionSeleccionada) {
        if (opcionSeleccionada.value == "1") {
            document.getElementById('camposObligatorios_fisico').style.display = 'block';
            document.getElementById('camposObligatorios_juridico').style.display = 'none';
            document.getElementById('campos-proveedor-fisico').style.display = 'block';
            document.getElementById('campos-proveedor-juridico').style.display = 'none';
        } else {
            document.getElementById('camposObligatorios_fisico').style.display = 'none';
            document.getElementById('camposObligatorios_juridico').style.display = 'block';
            document.getElementById('campos-proveedor-fisico').style.display = 'none';
            document.getElementById('campos-proveedor-juridico').style.display = 'block';
        }
    }

    $(document).on('click', '#btn_persona_otrosDatos', function () {
        var estadoOtrosDatos = document.getElementById('datosNoObligatorios').style.display;
        if(estadoOtrosDatos == 'none') {
            document.getElementById('datosNoObligatorios').style.display = 'block';
        } else {
            document.getElementById('datosNoObligatorios').style.display = 'none';
        }
    });
    $(document).on('click', '#btn_persona_contactos', function () {
        var estadoDatosContactos = document.getElementById('datosContactos').style.display;
        if(estadoDatosContactos == 'none') {
            document.getElementById('datosContactos').style.display = 'block';
        } else {
            document.getElementById('datosContactos').style.display = 'none';
        }
    });
</script>
<!-- Script para tags -->
<script>
    $(document).ready(function () {
        var vendedores = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // prefetch: 'http://localhost/Proyectos/touch/assets/dashboard/js/json/vendedores.json'
            prefetch: {
                url: '<?=base_url()?>Cotizacion/jsonVendedores',
                ttl: 1000
            }
        });
        vendedores.initialize();

        elt = $('.tags_vendedores > > input');
        elt.tagsinput({
            itemValue: 'value',
            itemText: 'text',
            typeaheadjs: {
                name: 'vendedores',
                displayKey: 'text',
                source: vendedores.ttAdapter()
            }
        });
//        elt.tagsinput('add', {"value": 1, "text": "Brayan Nuñez Rojas", "continent": "Europe"});
//        elt.tagsinput('add', {"value": 4, "text": "Anthony Nuñez Rojas", "continent": "America"});
//        elt.tagsinput('add', {"value": 7, "text": "Maria Perez Salas", "continent": "Australia"});
//        elt.tagsinput('add', {"value": 10, "text": "Carlos David Rojas", "continent": "Asia"});
//        elt.tagsinput('add', {"value": 13, "text": "Diego Alfaro Rojas", "continent": "Africa"});

        var gusto = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: {
                url: '<?=base_url()?>Cotizacion/jsonGustos',
                ttl: 1000,
                filter: function (list) {
                    return $.map(list, function (gusto) {
                        return {name: gusto};
                    });
                }
            }
        });
        gusto.initialize();

        $('.tags_keywords  > > input').tagsinput({
            typeaheadjs: {
                name: 'gusto',
                displayKey: 'name',
                valueKey: 'name',
                source: gusto.ttAdapter()
            }
        });

        var mediosContacto = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // prefetch: 'http://localhost/Proyectos/touch/assets/dashboard/js/json/gustos.json'
            prefetch: {
                url: '<?=base_url()?>Cotizacion/jsonContactos',
                ttl: 1000,
                filter: function (list) {
                    return $.map(list, function (mediosContacto) {
                        return {name: mediosContacto};
                    });
                }
            }
        });
        mediosContacto.initialize();

        var elt = $('.tags_mediosContacto > > input');
        elt.tagsinput({
            typeaheadjs: {
                name: 'mediosContacto',
                displayKey: 'name',
                valueKey: 'name',
                source: mediosContacto.ttAdapter()
            }
        });

        $('.boton-opciones').on('click', function (event) {
            var elementoActivo = $(this).siblings('ul.active');
            if (elementoActivo.length > 0) {
                var estado = elementoActivo.css("display");
                if (estado == "block") {
                    elementoActivo.css("display", "none");
                    elementoActivo.style.display = 'none';
                } else {
                    elementoActivo.css("display", "block");
                    elementoActivo.style.display = 'block';
                }
            }
        });
    });
</script>
<!--Script de tags de categorias-->
<script>
    $(document).ready(function () {
        var CategoriasPersona = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('nombre'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // prefetch: 'http://localhost/Proyectos/touch/assets/dashboard/js/json/CategoriasPersona.json'
            prefetch: {
                url: '<?=base_url()?>categoriasPersona/categoriasSugerencia',
                ttl: 1000
            }
        });
        CategoriasPersona.initialize();

        elt = $('.tags_Categorias > > input');
        elt.tagsinput({
            itemValue: 'idCategoriaPersona',
            itemText: 'nombre',
            typeaheadjs: {
                name: 'CategoriasPersona',
                displayKey: 'nombre',
                source: CategoriasPersona.ttAdapter()
            }
        });
    });
</script>
<!--Script para el manejo de contactos de persona -->
<script type="text/javascript">
    var contactoEliminar = null;
    $(document).on('click','.confirmarEliminarContacto', function () {
        contactoEliminar = $(this).parent().parent().parent();
        var confirmarEliminar = confirm('<?= label('gastos_personaContactos_confirmarEliminar'); ?>');
        if(confirmarEliminar) {
            contactoEliminar.fadeOut(function () {
                contactoEliminar.remove();
            });
            cantidad--;
            actualizarCantidad();
        }
    });
    function actualizarCantidad(){
        $('#cantidadContactos').val(cantidad);
    }
    var cantidad = 0;
    var contador = 0;
    function agregarNuevoContacto() {
        cantidad++;
        actualizarCantidad();
        $('#contenedorContactos').append('' +
            '<div>' +
                '<div id="' + contador + '" class="row">' +
                    '<div class="col s12 m11 l11">' +
                        '<div class="row">' +
                            '<div class="input-field col s12 m4 l4">' +
                                '<input id="proveedor_contactoNombre_' + contador + '" name="proveedor_contactoNombre_' + contador + '" type="text">' +
                                '<label for="proveedor_contactoNombre_' + contador + '"><?= label("formContacto_nombre"); ?></label>' +
                            '</div>' +
                            '<div class="input-field col s12 m4 l4">' +
                                '<input style="display:none" name="contacto_'+ contador +'" type="text">' +
                                '<input id="proveedor_contactoApellido1_' + contador + '" name="proveedor_contactoApellido1_' + contador + '" type="text">' +
                                '<label for="proveedor_contactoApellido1_' + contador + '"><?= label("formContacto_apellido1"); ?></label>' +
                            '</div>' +
                            '<div class="input-field col s12 m4 l4">' +
                                '<input id="proveedor_contactoApellido2_' + contador + '" name="proveedor_contactoApellido2_' + contador + '" type="text">' +
                                '<label for="proveedor_contactoApellido2_' + contador + '"><?= label("formContacto_apellido2"); ?></label>' +
                            '</div>' +
                        '</div>' +
                        '<div class="row">' +
                            '<div class="input-field col s12 m6 l6">' +
                                '<div>' +
                                    '<input id="proveedor_contactoCorreo_' + contador + '" name="proveedor_contactoCorreo_' + contador + '" type="email">' +
                                    '<label for="proveedor_contactoCorreo_' + contador + '"><?= label('formProveedor_correo'); ?></label>' +
                                '</div>' +
//                                '<div style="margin-bottom: 20px;">' +
//                                    '<input type="checkbox" class="filled-in" id="checkbox_contactoCorreoProveedor_' + contador + '" name="checkbox_contactoCorreoProveedor_' + contador + '" />' +
//                                    '<label for="checkbox_contactoCorreoProveedor_' + contador + '" style="margin-bottom: 20px;">' +
//                                    '<?//= label('formProveedor_correoCheck') ?>//' +
//                                    '</label>' +
//                                '</div>' +
                            '</div>' +
                            '<div class="input-field col s12 m3 l3">' +
                                '<input id="proveedor_contactoPuesto_' + contador + '" name="proveedor_contactoPuesto_' + contador + '" type="text">' +
                                '<label for="proveedor_contactoPuesto_' + contador + '"><?= label('formContacto_puesto'); ?></label>' +
                            '</div>' +
                            '<div class="input-field col s12 m3 l3">' +
                                '<input id="proveedor_contactoTelefono_' + contador + '" name="proveedor_contactoTelefono_' + contador + '" type="text">' +
                                '<label for="proveedor_contactoTelefono_' + contador + '"><?= label('formContacto_telefono'); ?></label>' +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                    '<div class="col s12 m1 l1 btn-contacto-eliminar-edicion">' +
                        '<a class="confirmarEliminarContacto" data-fila-eliminar="' + contador + '" title="<?= label('formProveedor_contactoEliminar') ?>"><i class="mdi-action-delete medium" style="color: black;"></i></a>' +
                    '</div>' +
                '</div>' +
                '<div class="col s12">' +
                    '<hr />' +
                '</div>' +
            '</div>'
        );
        contador++;
    }
</script>

<!-- Inicio lista modals -->
<div id="transaccionIncorrectaCargar" class="modal">
    <div  class="modal-header headerTransaccionIncorrecta">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('errorLeerDatos'); ?></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="transaccionIncorrectaEliminar" class="modal">
    <div  class="modal-header headerTransaccionIncorrecta">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('errorEliminar'); ?></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>

<div id="agregarGasto" class="modal" style="width: 70%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content" style="padding: 0 24px;">
        <div class="row">
            <h5 style="float: left;"><?= label('agregarGasto_titulo'); ?></h5>
<!--            <a href="#" style="float: left;margin: 15px 25px;text-decoration: underline;">Importar csv - xls</a>-->
        </div>
        <form id="form_gasto" action="<?=base_url()?>gastos/insertar" method="post">
            <div class="row">
                <div class="input-field col s12 m4 l4">
                    <select id="gasto_tipo" name="gasto_tipo"></select>
                    <label for="gasto_tipo"><?= label('gastos_Tipo'); ?></label>
                </div>
                <div class="input-field col s12 m4 l4">
                    <input id="gasto_codigo" name="gasto_codigo" type="text">
                    <label for="gasto_codigo"><?= label('gastos_Codigo') ?></label>
                </div>
                <div class="input-field col s12 m4 l4">
                    <input id="gasto_nombre" name="gasto_nombre" type="text">
                    <label for="gasto_nombre"><?= label('gastos_Nombre') ?></label>
                </div>
                <div class="row">
                    <div class="input-field col s12 m4 l4 inputSelector">
                        <label for="gasto_categoria"><?= label("gastos_Categoria"); ?></label>
                        <br>
                        <div id="contenedorSelectCategorias">
                            <select data-incluirBoton="1" placeholder="seleccionar" data-tipo="agregarGasto_categoria" id="gasto_categoria" name="gasto_categoria"
                                    data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("agregarGasto_elegirCategoria"); ?>"
                                    class="browser-default chosen-select" style="width:350px;" tabindex="2"></select>
                        </div>
                    </div>
                    <div class="input-field col s12 m4 l4 inputSelector">
                        <label for="gasto_formaPago"><?= label("gastos_FormaPago"); ?></label>
                        <br>
                        <div id="contenedorSelectFormasPago">
                            <select data-incluirBoton="1" placeholder="seleccionar" data-tipo="agregarGasto_formaPago" id="gasto_formaPago" name="gasto_formaPago"
                                    data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("agregarGasto_elegirFormaPago"); ?>"
                                    class="browser-default chosen-select" style="width:350px;" tabindex="2"></select>
                        </div>
                    </div>
                    <div class="input-field col s12 m4 l4 inputSelector">
                        <label for="gasto_categoria"><?= label("gastos_Persona"); ?></label>
                        <br>
                        <div id="contenedorSelectPersonas">
                            <select data-incluirBoton="1" placeholder="seleccionar" data-tipo="agregarGasto_persona" id="gasto_persona" name="gasto_persona"
                                    data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("agregarGasto_elegirPersona"); ?>"
                                    class="browser-default chosen-select" style="width:350px;" tabindex="2"></select>
                        </div>
                    </div>
                </div>
                <div class="input-field col s12 m6 l6">
                    <input id="gasto_monto" name="gasto_monto" type="text">
                    <label for="gasto_monto"><?= label('gastos_Monto') ?></label>
                </div>
            </div>
            <div class="row">
<!--                <a href="#" style="font-size: larger;float: left;text-decoration: underline;"-->
<!--                   class="modal-action modal-close">--><?//= label('cancelar'); ?>
<!--                </a>-->
                <a onclick="$(this).closest('form').submit()" id="guardarCerrar" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('guardarCerrar'); ?>
                </a>
                <a onclick="$(this).closest('form').submit()" id="guardarOtro" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('guardarAgregarOtro'); ?>
                </a>
            </div>
        </form>
    </div>
</div>
<div id="editarGasto" class="modal" style="width: 70%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content" style="padding: 0 24px;">
        <div class="row">
            <h5 style="float: left;">Editar gasto</h5>
        </div>
        <form id="form_gastoEditar" action="<?=base_url()?>gastos/modificar" method="post">
            <div class="row">
                <div class="input-field col s12 m4 l4">
                    <select id="gasto_tipo" name="gasto_tipo"></select>
                    <label for="gasto_tipo"><?= label('gastos_Tipo'); ?></label>
                </div>
                <div class="input-field col s12 m4 l4">
                    <input style="display:none" id="idGasto" name="idGasto" type="text">
                    <input style="display:none" id="gasto_codigoOriginal" name="gasto_codigoOriginal" type="text">
                    <input id="gasto_codigo" name="gasto_codigo" type="text">
                    <label for="gasto_codigo"><?= label('gastos_Codigo') ?></label>
                </div>
                <div class="input-field col s12 m4 l4">
                    <input id="gasto_nombre" name="gasto_nombre" type="text">
                    <label for="gasto_nombre"><?= label('gastos_Nombre') ?></label>
                </div>
                <div class="row">
                    <div class="input-field col s12 m4 l4 inputSelector">
                        <label for="gasto_categoria"><?= label("gastos_Categoria"); ?></label>
                        <br>
                        <div id="contenedorSelectCategorias">
                            <select data-incluirBoton="1" placeholder="seleccionar" data-tipo="agregarGasto_categoria" id="gasto_categoriaEditar" name="gasto_categoria"
                                    data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("agregarGasto_elegirCategoria"); ?>"
                                    class="browser-default chosen-select" style="width:350px;" tabindex="2"></select>
                        </div>
                    </div>
                    <div class="input-field col s12 m4 l4 inputSelector">
                        <label for="gasto_formaPago"><?= label("gastos_FormaPago"); ?></label>
                        <br>
                        <div id="contenedorSelectFormasPago">
                            <select data-incluirBoton="1" placeholder="seleccionar" data-tipo="agregarGasto_formaPago" id="gasto_formaPagoEditar" name="gasto_formaPago"
                                    data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("agregarGasto_elegirFormaPago"); ?>"
                                    class="browser-default chosen-select" style="width:350px;" tabindex="2"></select>
                        </div>
                    </div>
                    <div class="input-field col s12 m4 l4 inputSelector">
                        <label for="gasto_categoria"><?= label("gastos_Persona"); ?></label>
                        <br>
                        <div id="contenedorSelectPersonas">
                            <select data-incluirBoton="1" placeholder="seleccionar" data-tipo="agregarGasto_persona" id="gasto_personaEditar" name="gasto_persona"
                                    data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("agregarGasto_elegirPersona"); ?>"
                                    class="browser-default chosen-select" style="width:350px;" tabindex="2"></select>
                        </div>
                    </div>
                </div>
                <div class="input-field col s12 m6 l6">
                    <input id="gasto_monto" name="gasto_monto" type="text">
                    <label for="gasto_monto"><?= label('gastos_Monto') ?></label>
                </div>
            </div>
            <div class="row">
<!--                <a href="#" style="font-size: larger;float: left;text-decoration: underline;"-->
<!--                   class="modal-action modal-close">--><?//= label('cancelar'); ?>
<!--                </a>-->
                <a onclick="$(this).closest('form').submit()" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('tipoMoneda_guardarCambios'); ?>
                </a>
            </div>
        </form>
    </div>
</div>
<div id="eliminarGasto" class="modal">
   <div class="modal-header">
      <p><?= label('nombreSistema'); ?></p>
      <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
   </div>
   <div class="modal-content">
      <p><?= label('confirmarEliminarGasto'); ?></p>
   </div>
   <div id="botonEliminar" class="modal-footer black-text">
      <a href="" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
   </div>
</div>
<div id="eliminarElementosSeleccionados" class="modal">
   <div class="modal-header">
      <p><?= label('nombreSistema'); ?></p>
      <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
   </div>
   <div class="modal-content">
      <p><?= label('eliminarSeleccionados'); ?></p>
   </div>
   <div class="modal-footer black-text">
      <div id="botonEliminar" class="modal-footer black-text" title="gastos-tabla-lista">
         <a href="#"
            class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
      </div>
   </div>
</div>

<div id="agregarCategoria" class="modal" style="width: 70%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a id="modalAgregarCategoria_cerrar" class="modal-action cerrar-modal">
            <i class="mdi-content-clear"></i>
        </a>
    </div>
    <div class="modal-content" style="padding: 0 24px;">
        <div class="row">
            <h5 style="float: left;"><?= label('gasto_agregarCategoria'); ?></h5>
        </div>
        <form id="form_categoria" action="<?=base_url()?>gastos/insertarCategoria" method="post">
            <div class="row">
                <div class="input-field col s12">
                    <input id="categoria_nombre" name="categoria_nombre" type="text">
                    <label for="categoria_nombre"><?= label('categoriaGastos_Nombre') ?></label>
                </div>
                <div class="input-field col s12">
                    <textarea name="categoria_descripcion" id="categoria_descripcion" class="materialize-textarea" rows="4"></textarea>
                    <label for="categoria_descripcion"><?= label('formCategoriaGasto_descripcion'); ?></label>
                </div>
            </div>
            <div class="row">
                <a onclick="$(this).closest('form').submit()" id="guardarCerrarCategoria" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('guardarCerrar'); ?>
                </a>
                <a onclick="$(this).closest('form').submit()" id="guardarOtroCategoria" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('guardarAgregarOtro'); ?>
                </a>
            </div>
        </form>
    </div>
</div>
<div id="agregarFormaPago" class="modal" style="width: 70%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a id="modalAgregarFormaPago_cerrar" class="modal-action cerrar-modal">
            <i class="mdi-content-clear"></i>
        </a>
    </div>
    <div class="modal-content" style="padding: 0 24px;">
        <div class="row">
            <h5 style="float: left;"><?= label('gasto_agregarFormaPago'); ?></h5>
        </div>
        <form id="form_formaPago_Gastos" action="<?=base_url()?>gastos/insertarFormaPago" method="post">
            <div class="row">
                <div class="input-field col s12">
                    <input id="formaPago_nombre" name="formaPago_nombre" type="text">
                    <label for="formaPago_nombre"><?= label('formaPago_Nombre') ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="formaPago_descripcion" name="formaPago_descripcion" type="text">
                    <label for="formaPago_descripcion"><?= label('formaPago_descripcion') ?></label>
                </div>
            </div>
            <div class="row">
<!--                <a href="#" style="font-size: larger;float: left;text-decoration: underline;"-->
<!--                   class="modal-action modal-close">--><?//= label('cancelar'); ?>
<!--                </a>-->
                <a onclick="$(this).closest('form').submit()" id="guardarCerrarFormaPago" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('guardarCerrar'); ?>
                </a>
                <a onclick="$(this).closest('form').submit()" id="guardarOtroFormaPago" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('guardarAgregarOtro'); ?>
                </a>
            </div>
        </form>
    </div>
</div>
<div id="agregarPersona" class="modal" style="width: 70%;max-height: 80%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a id="modalAgregarPersona_cerrar" class="modal-action cerrar-modal">
            <i class="mdi-content-clear"></i>
        </a>
    </div>
    <div class="modal-content" style="padding: 0 24px;">
        <div class="row">
            <h5 style="float: left;"><?= label('gasto_agregarPersona'); ?></h5>
        </div>
        <?php $this->load->helper('form'); ?>
        <?php echo form_open_multipart(base_url().'gastos/insertarPersona',
            array('id' => 'form_persona_Gastos', 'method' => 'POST', 'class' => 'col s12')); ?>
<!--        <form id="form_persona_Gastos" action="--><?//=base_url()?><!--gastos/insertarPersona" method="post">-->
            <div class="row">
                <!-- Campos obligatorios -->
                <div class="input-field col s12">
                    <select id="persona_tipoProveedor" name="persona_tipoProveedor"
                            onchange="tipoProveedor(this)">
                        <option value="1" selected><?= label('formPersona_proveedor'); ?></option>
                        <option value="2"><?= label('formPersona_empleado'); ?></option>
                    </select>
                    <label for="persona_tipoProveedor"><?= label('formPersona_tipoProveedor'); ?></label>
                </div>
                <div id="seleccion_TipoProveedor" class="input-field col s12">
                    <select id="persona_tipo" name="persona_tipo" onchange="datosProveedor(this)">
                        <option value="1" selected><?= label('formPersona_fisico'); ?></option>
                        <option value="2"><?= label('formPersona_juridico'); ?></option>
                    </select>
                    <label for="persona_tipo"><?= label('formPersona_tipo'); ?></label>
                </div>
                <div class="input-field col s12 inputSelector">
                    <label for="persona_nacionalidad"><?= label('formCliente_nacionalidad'); ?></label>
                    <br>
                    <select data-placeholder="<?= label('formCliente_seleccioneUno'); ?>" data-incluirBoton="0" id="persona_nacionalidad" name="persona_nacionalidad" class="required browser-default chosen-select">
                        <option value=""></option>
                        <?php
                        if(isset($paises)) {
                            foreach ($paises as $pais) { ?>
                                <option value="<?= $pais['idPais']; ?>"><?= $pais['nombre']; ?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <div id="camposObligatorios_fisico" style="display: block;">
                    <div class="input-field col s12">
                        <input id="persona_identificacion" name="persona_identificacion" type="text">
                        <label for="persona_identificacion"><?= label('formPersona_identificacion'); ?></label>
                    </div>
                    <div>
                        <div class="input-field col s12 m4 l4">
                            <input id="persona_nombre" name="persona_nombre" type="text">
                            <label for="persona_nombre"><?= label('formPersona_nombre'); ?></label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                            <input id="persona_apellido1" name="persona_apellido1" type="text">
                            <label for="persona_apellido1"><?= label('formPersona_apellido1'); ?></label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                            <input id="persona_apellido2" name="persona_apellido2" type="text">
                            <label for="persona_apellido2"><?= label('formPersona_apellido2'); ?></label>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <input id="persona_correo" name="persona_correo" type="email">
                        <label for="persona_correo"><?= label('formPersona_correo'); ?></label>
                    </div>
                </div>
                <div id="camposObligatorios_juridico" style="display: none;">
                    <div class="input-field col s12">
                        <input id="personajuridico_identificacion" name="personajuridico_identificacion" type="text">
                        <label for="personajuridico_identificacion">
                            <?= label('formPersona_identificacionJuridica'); ?></label>
                    </div>
                    <div class="input-field col s12">
                        <input id="personajuridico_nombre" name="personajuridico_nombre" type="text">
                        <label for="personajuridico_nombre">
                            <?= label('formPersona_nombreJuridico'); ?></label>
                    </div>
                    <div class="input-field col s12">
                        <input id="personajuridico_correo" name="personajuridico_correo" type="email">
                        <label for="personajuridico_correo"><?= label('formPersona_correo'); ?></label>
                    </div>
                </div>

                <!-- Otros datos -->
                <div class="col s12">
                    <a id="btn_persona_otrosDatos" class="btn_mostrarElementosOcultos">Otros datos</a>
                </div>
                <div id="datosNoObligatorios" style="display: none;">
                    <div id="campos-proveedor-fisico" style="display: block;">
                        <div class="input-field col s12">
                            <input id="persona_telefonoMovil" name="persona_telefonoMovil" type="text">
                            <label for="persona_telefonoMovil">
                                <?= label('formPersona_telefonoMovil'); ?></label>
                        </div>
                        <div class="input-field col s12">
                            <input id="persona_telefono" name="persona_telefono" type="text">
                            <label for="persona_telefono">
                                <?= label('formProveedor_telefonoFijo'); ?></label>
                        </div>
                        <div class="input-field col s12">
                            <input id="persona_fechaNacimiento" name="persona_fechaNacimiento" type="text" class="datepicker-fecha">
                            <label for="persona_fechaNacimiento">
                                <?= label('formPersona_fechaNacimiento'); ?></label>
                        </div>
                    </div>
                    <div id="campos-proveedor-juridico" style="display: none;">
                        <div class="input-field col s12">
                            <input id="personajuridico_nombreFantasia" name="personajuridico_nombreFantasia" type="text">
                            <label for="personajuridico_nombreFantasia">
                                <?= label('formPersona_nombreFantasia'); ?></label>
                        </div>
                        <div class="input-field col s12">
                            <input id="personajuridico_telefono" name="personajuridico_telefono" type="text">
                            <label for="personajuridico_telefono"><?= label('formPersona_telefono'); ?></label>
                        </div>
                        <div class="input-field col s12">
                            <input id="personajuridico_fax" name="personajuridico_fax" type="text">
                            <label for="personajuridico_fax"><?= label('formPersona_fax'); ?></label>
                        </div>
                    </div>
                    <div>
                        <div class="inputTag col s12" style="margin-bottom: 10px;">
                            <label for="persona_palabrasClave"><?= label('formPersona_palabrasClave'); ?></label>
                            <div id="persona_palabrasClave" class="example tags_keywords" style="margin-top: 10px;">
                                <div class="bs-example">
                                    <input id="persona_palabras" name="persona_palabras" placeholder="<?= label('formPersona_palabrasClaveAnadir'); ?>" type="text"/>
                                </div>
                            </div>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="persona_descripcion" name="persona_descripcion"
                                      class="materialize-textarea" rows="4"></textarea>
                            <label for="persona_descripcion"><?= label('formPersona_descripcion'); ?></label>
                        </div>
                        <div class="inputTag col s12">
                            <label for="categorias_persona"><?= label('formPersona_categorias'); ?></label>
                            <br>
                            <div id="categoriasPersona" class="example tags_Categorias">
                                <div class="bs-example">
                                    <input id="categorias_persona" name="categorias_persona" placeholder="<?= label('formPersona_anadirCategoria'); ?>" type="text"/>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div>
                        <div class="input-field col s12 m4 l4">
                            <input id="persona_direccionPais" name="persona_direccionPais" type="text">
                            <label for="persona_direccionPais"><?= label('formPersona_direccionPais'); ?></label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                            <input id="persona_direccionProvincia" name="persona_direccionProvincia" type="text">
                            <label for="persona_direccionProvincia"><?= label('formPersona_direccionProvincia'); ?></label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                            <input id="persona_direccionCanton" name="persona_direccionCanton" type="text">
                            <label for="persona_direccionCanton"><?= label('formPersona_direccionCanton'); ?></label>
                        </div>
                        <div class="input-field col s12 m12 l12">
                            <input id="persona_direccionDomicilio" name="persona_direccionDomicilio" type="text">
                            <label for="persona_direccionDomicilio"><?= label('formPersona_direccionDomicilio'); ?></label>
                        </div>
                    </div>
                    <div class="col s12">
                        <div class="file-field col s12 m7 l9" style="margin-top:45px;">
                            <label for="persona_fotografia"><?= label('formPersona_fotografia'); ?></label>

                            <div class="file-field input-field col s12">
                                <input name="persona_fotografia" class="file-path" type="text" readonly/>

                                <div class="btn" data-toggle="tooltip" title="<?= label('tooltip_examinar') ?>">
                                    <span><i class="mdi-action-search"></i></span>
                                    <input style="padding-right: 800px;" id="userfile" type="file" name="userfile"
                                           accept="image/jpeg,image/png"/>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m5 l3">
                            <figure>
                                <img id="imagen_seleccionada" src="<?= base_url(); ?>files/default-user-image.png">
                            </figure>
                        </div>
                    </div>
                </div>

                <!-- Datos de contactos -->
                <div class="col s12">
                    <a id="btn_persona_contactos" class="btn_mostrarElementosOcultos">Contactos</a>
                </div>
                <div id="datosContactos" style="display: none;">
                    <div id="contenedorContactos"></div>
                    <div class="row" id="tab-contactos-nuevo" style="padding: 20px;">
                        <a onclick="agregarNuevoContacto();">
                            <?= label('formProveedor_contactoAgregar') ?>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <a onclick="$(this).closest('form').submit()" id="guardarCerrarPersona" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('guardarCerrar'); ?>
                </a>
                <a onclick="$(this).closest('form').submit()" id="guardarOtroPersona" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('guardarAgregarOtro'); ?>
                </a>
            </div>
            <div style="visibility:hidden; position:absolute">
                <input id="cantidadContactos" name="cantidadContactos" type="text" value="0">
            </div>
        </form>
    </div>
</div>

<div id="busquedaAvanzadaGastos" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div id="formGeneral" class="section" style="padding-bottom: 0;">
            <div class="row" style="margin-bottom: 0;">
                <div class="input-field col s12 m3 l3">
                    <select id="gasto_busquedaTipo">
                        <option value="0" selected>Todos</option>
                        <option value="1"><?= label('gastos_tipoFijo'); ?></option>
                        <option value="2"><?= label('gastos_tipoVariable'); ?></option>
                    </select>
                    <label for="gasto_busquedaTipo"><?= label('gastos_busquedaTipo'); ?></label>
                </div>
                <div class="input-field col s12 m3 l3">
                    <input id="gastos_busquedaCodigo" type="text">
                    <label for="gastos_busquedaCodigo"><?= label('gastos_busquedaCodigo') ?></label>
                </div>

                <div class="input-field col s12 m3 l3">
                    <select id="gasto_busquedaCategoria">
                        <option value="1" selected>Todos</option>
                        <option value="2">Servicios profesionales</option>
                        <option value="3">Servicios profesionales</option>
                        <option value="4">Servicios profesionales</option>
                    </select>
                    <label for="gasto_busquedaCategoria"><?= label('gastos_busquedaCategoria'); ?></label>
                </div>
                <div class="input-field col s12 m3 l3">
                    <select id="gasto_busquedaTiempo">
                        <option value="1" selected>Todos</option>
                        <option value="2">Horas</option>
                        <option value="3">Diario</option>
                        <option value="4">Semanal</option>
                    </select>
                    <label for="gasto_busquedaTiempo"><?= label('gastos_busquedaTiempo'); ?></label>
                </div>

                <div class="input-field col s12 m4 l4">
                    <input id="gastos_busquedaGasto" type="text">
                    <label for="gastos_busquedaGasto"><?= label('gastos_busquedaGasto') ?></label>
                </div>
                <div class="input-field col s12 m8 l8">
                    <input id="gastos_busquedaDescripcion" type="text">
                    <label for="gastos_busquedaDescripcion"><?= label('gastos_busquedaDescripcion') ?></label>
                </div>

                <div class="input-field col s12 m6 l6">
                    <select id="gasto_busquedaProveedor">
                        <option value="1" selected>Todos</option>
                        <option value="2">Juan Gomez</option>
                        <option value="3">Juan Perez</option>
                        <option value="4">Ronald Alfaro</option>
                        <option value="5">Pedro Mora</option>
                    </select>
                    <label for="gasto_busquedaProveedor"><?= label('gastos_busquedaProveedor'); ?></label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <select id="gasto_busquedaProveedorCategoria">
                        <option value="1" selected>Todos</option>
                        <option value="2">Programador</option>
                        <option value="3">Tecnico en reparaciones</option>
                        <option value="4">Constructor</option>
                    </select>
                    <label for="gasto_busquedaProveedorCategoria"><?= label('gastos_busquedaProveedorCategoria'); ?></label>
                </div>

                <div class="input-field col s12 m6 l6">
                    <input id="gastos_busquedaMontoDesde" type="text">
                    <label for="gastos_busquedaMontoDesde"><?= label('gastos_busquedaMontoDesde') ?></label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <input id="gastos_busquedaMontoHasta" type="text">
                    <label for="gastos_busquedaMontoHasta"><?= label('gastos_busquedaMontoHasta') ?></label>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect btn modal-action modal-close"
           style="width: 300px;float: none;display: block;margin: 0 auto;text-align: center;color: white;">
            <?= label('gastos_busquedaBuscar'); ?>
        </a>
    </div>
</div>
<!-- Fin lista modals -->

<!--script para el manejo de la imagen de la persona-->
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imagen_seleccionada').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#userfile").change(function(){
        var file = this.files[0];
        var name = file.name;
        var size = file.size;
        var type = file.type;
        var t = type.split('/');
        var ext = t.slice(1, 2);
        if(size > 2097150) { //2097152
            alert("<?= label('usuarioErrorTamanoArchivo') ?>");
            document.getElementById('userfile').value = '';
        }
        var valid_ext = ['image/png','image/jpg','image/jpeg'];
        if(valid_ext.indexOf(type)==-1) {
            alert("<?= label('usuarioErrorTipoArchivo') ?>");
            document.getElementById('userfile').value = '';
        }
        if(document.getElementById('userfile').value == ''){
            $('#imagen_seleccionada').attr('src', '<?= base_url(); ?>files/default-user-image.png');
        } else {
            $('#usuario_fotografia').attr('value', ext);
            readURL(this);
        }
    });
</script>