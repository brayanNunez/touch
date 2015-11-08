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
                                                                <th><?= label('tituloGastos_proveedorCategoria'); ?></th>
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
                                                                        <td>Programador</td>
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

<script type="text/javascript">
    $(document).ready(function () {
        actualizarSelectTipo();
        actualizarSelects();
//        actualizarSelectFormasPago();
//        actualizarSelectPersonas();

//        actualizarSelectCategoriasGasto();
//        actualizarSelectFormasPago();
//        actualizarSelectPersonas();
////        actualizarSelectTipo_Editar(0);
////        actualizarSelectCategoriasGasto_Editar(2);
////        actualizarSelectFormasPago_Editar(3);
////        actualizarSelectPersonas_Editar(2);
    });

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
    function actualizarSelects() {
        var formulario = $('#form_gasto');
        $.ajax({
            type: formulario.attr('method'),
            url: '<?= base_url(); ?>gastos/personas',
            data: {  },
            success: function(response)
            {
                generarAutocompletarPersona($.parseJSON(response));
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

    function actualizarSelectPersonas() {
        var formulario = $('#form_gasto');
        $.ajax({
            type: formulario.attr('method'),
            url: '<?= base_url(); ?>gastos/personas',
            data: {  },
            success: function(response)
            {
                generarAutocompletarPersona($.parseJSON(response));
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
                var categoriasGasto = $.parseJSON(response);
                var selectCategoriaGasto = $('#form_gastoEditar #gasto_categoria');
                selectCategoriaGasto.empty();
                selectCategoriaGasto.append($('<option>', {
                    value: 0,
                    text: 'Seleccione uno',
                    disabled: true
                }));
                for(var i = 0; i < categoriasGasto.length; i++) {
                    var cat = categoriasGasto[i];
                    if(cat != null) {
                        if(cat['idCategoriaGasto'] == $idCategoria) {
                            selectCategoriaGasto.append($('<option>', {
                                value: cat['idCategoriaGasto'],
                                text: cat['nombre'],
                                selected: true
                            }));
                        } else {
                            selectCategoriaGasto.append($('<option>', {
                                value: cat['idCategoriaGasto'],
                                text: cat['nombre'],
                                selected: false
                            }));
                        }
                    }
                }
                selectCategoriaGasto.material_select();
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
                var formasPago = $.parseJSON(response);
                var selectFormasPago = $('#form_gastoEditar #gasto_formaPago');
                selectFormasPago.empty();
                selectFormasPago.append($('<option>', {
                    value: 0,
                    text: 'Seleccione uno',
                    disabled: true
                }));
                for(var i = 0; i < formasPago.length; i++) {
                    var formaP = formasPago[i];
                    if(formaP != null) {
                        if(formaP['idFormaPago'] == $idFormaPago) {
                            selectFormasPago.append($('<option>', {
                                value: formaP['idFormaPago'],
                                text: formaP['nombre'],
                                selected: true
                            }));
                        } else {
                            selectFormasPago.append($('<option>', {
                                value: formaP['idFormaPago'],
                                text: formaP['nombre'],
                                selected: false
                            }));
                        }
                    }
                }
                selectFormasPago.material_select();
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
                var personas = $.parseJSON(response);
                var selectPersona = $('#form_gastoEditar #gasto_persona');
                selectPersona.empty();
                selectPersona.append($('<option>', {
                    value: 0,
                    text: 'Seleccione uno',
                    disabled: true
                }));
                for(var i = 0; i < personas.length; i++) {
                    var pers = personas[i];
                    if(pers != null) {
                        if(pers['idProveedor'] == $idPersona) {
                            selectPersona.append($('<option>', {
                                value: pers['idProveedor'],
                                text: pers['nombre'],
                                selected: true
                            }));
                        } else {
                            selectPersona.append($('<option>', {
                                value: pers['idProveedor'],
                                text: pers['nombre'],
                                selected: false
                            }));
                        }
                    }
                }
                selectPersona.material_select();
            }
        });
    }

    function botonEnLista(tipo, idBoton, nuevoElementoAgregar){
        if (tipo == "agregarGasto_categoria") {
            $('#categoria_nombre').val(nuevoElementoAgregar);
            $('#linkNuevaCategoria').click();
            $('#categoria_nombre').focus();
            document.getElementById('agregarGasto').style.visibility = 'hidden';
        }
        if (tipo == "agregarGasto_formaPago") {
            $('#formaPago_nombre').val(nuevoElementoAgregar);
            $('#linkNuevaFormaPago').click();
            $('#formaPago_nombre').focus();
            document.getElementById('agregarGasto').style.visibility = 'hidden';
        }
        if (tipo == "agregarGasto_persona") {
            $('#persona_nombre').val(nuevoElementoAgregar);
            $('#linkNuevaPersona').click();
            $('#persona_nombre').focus();
            document.getElementById('agregarPersona').style.visibility = 'hidden';
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
    function generarAutocompletarPersona($array){
        var miSelect = $('#gasto_persona');
        miSelect.empty();
        miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("agregarGasto_elegirPersona"); ?></option>');
        miSelect.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');
        for(var i = 0; i < $array.length; i++) {
            var pers = $array[i];
            if(pers != null) {
                miSelect.append('<option value="' + pers['idProveedor'] + '">' + pers['nombre'] + '</option>');
            }
        }
    }

    function generarListas(){
        // alert("generando");

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
        } else{
            alert(valor);
        }
    });

    $(document).ready(function () {
        $('#modalAgregar_agregarCategoria').on('click', function () {
            document.getElementById('agregarGasto').style.visibility = 'hidden';
        });
        $('#modalAgregarCategoria_cerrar').on('click', function () {
            document.getElementById('agregarGasto').style.visibility = 'visible';
            document.getElementById('agregarCategoria').style.display = 'none';
        });
        $('#modalAgregarFormaPago_cerrar').on('click', function () {
            document.getElementById('agregarGasto').style.visibility = 'visible';
            document.getElementById('agregarFormaPago').style.display = 'none';
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
                                    alert("<?=label('gastos_categoriaGuardadoCorrectamente'); ?>");
//                                    if (cerrarModal) {
                                        $('#agregarCategoria .modal-header a').click();
//                                    } else{
//                                        limpiarForm();
//                                    }
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
                                    alert("<?=label('gastos_FormaPagoGuardadoCorrectamente'); ?>");
//                                    if (cerrarModal) {
                                        $('#agregarFormaPago .modal-header a').click();
//                                    } else{
//                                        limpiarForm();
//                                    }
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
</script>

<script type="text/javascript">
    var menuOpciones_editar = '<?= label('menuOpciones_editar'); ?>';
    var menuOpciones_eliminar = '<?= label('menuOpciones_eliminar'); ?>';
    var menuOpciones_seleccionar = '<?= label('menuOpciones_seleccionar'); ?>';

    var row = null;
    var checkActivo = false;
    var idEditar = 0;
    $(document).on('ready', function() {
        function limpiarFormEditar(){
            $('#form_gastoEditar')[0].reset();
            var validator = $("#form_gastoEditar").validate();
            validator.resetForm();
//            $('#form_gastoEditar #gasto_nombre').focus();
        }

        var table = $('table').DataTable();
        $(document).on( 'click', '.abrirEditar', function () {
            limpiarFormEditar();
            idEditar = $(this).data('id-editar');
            checkActivo = false;
            checkActivo = $('.checkbox#'+idEditar).is(':checked');// se verifica el estado del check para actualizarlo luego de editar la fila ya que este check se quita solo al editar
            row = table.row($(this).parents('tr'));
            // editarFila('22', 'impuesto', 'descripcion');
            // alert(idEditar);

            var url = '<?=base_url()?>gastos/editar';
            var method = 'POST';
            $.ajax({
                type: method,
                url: url,
                data: {idEditar : idEditar},
                success: function(response)
                {
                    var gasto = $.parseJSON(response);
//                    $('#form_gastoEditar #gasto_tipo').val(gasto['gastoFijo']);
//                    $('#form_gastoEditar #gasto_categoria').val(gasto['idCategoriaGasto']);
//                    $('#form_gastoEditar #gasto_persona').val(gasto['idProveedor']);
//                    $('#form_gastoEditar #gasto_formaPago').val(gasto['formaPago']);
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
    function editarFila(categoria, persona, tipo, codigo, nombre, monto, formaPago) {
        var d = row.data();
        d[1]= codigo;
        d[2]= tipo;
        d[3]= categoria;
        d[4]= formaPago;
        d[5]= nombre;
        d[6]= persona;
        d[7]= persona;
        d[8]= monto;
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
                                '<a href="#editarTipoMoneda" data-id-editar="'+idEncriptado+'"' +
                                    'class="-text modal-trigger abrirEditar">'+ menuOpciones_editar + '</a>' +
                            '</li>' +
                            '<li>' +
                                '<a href="#eliminarTipoMoneda"' +
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
        var categoriaPersona = '<td>' + persona + '</td>';
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
            categoriaPersona,
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
//        $('#form_gasto #gasto_nombre').focus();
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

<!-- lista modals -->
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
            <h5 style="float: left;">Agregar gasto</h5>
            <a href="#" style="float: left;margin: 15px 25px;text-decoration: underline;">Importar csv - xls</a>
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
                <a href="#" style="font-size: larger;float: left;text-decoration: underline;"
                   class="modal-action modal-close"><?= label('cancelar'); ?>
                </a>
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
                    <div class="input-field col s12 m4 l4">
                        <select id="gasto_categoria" name="gasto_categoria"></select>
                        <label for="gasto_categoria"><?= label('gastos_Categoria'); ?></label>
                        <a href="#" style="text-decoration: underline;">Agregar categoria</a>
                    </div>
                    <div class="input-field col s12 m4 l4">
                        <select id="gasto_formaPago" name="gasto_formaPago"></select>
                        <label for="gasto_formaPago"><?= label('gastos_FormaPago'); ?></label>
                    </div>
                    <div class="input-field col s12 m4 l4">
                        <select id="gasto_persona" name="gasto_persona"></select>
                        <label for="gasto_persona"><?= label('gastos_Persona'); ?></label>
                        <a href="#" style="text-decoration: underline;">Agregar persona</a>
                    </div>
                </div>
                <div class="input-field col s12 m6 l6">
                    <input id="gasto_monto" name="gasto_monto" type="text">
                    <label for="gasto_monto"><?= label('gastos_Monto') ?></label>
                </div>
            </div>
            <div class="row">
                <a href="#" style="font-size: larger;float: left;text-decoration: underline;"
                   class="modal-action modal-close"><?= label('cancelar'); ?>
                </a>
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
            <h5 style="float: left;">Agregar categoria de gastos</h5>
        </div>
        <form id="form_categoria" action="<?=base_url()?>gastos/insertarCategoria" method="post">
            <div class="row">
                <div class="input-field col s12">
                    <input id="categoria_nombre" name="categoria_nombre" type="text">
                    <label for="categoria_nombre"><?= label('categoriaGastos_Nombre') ?></label>
                </div>
            </div>
            <div class="row">
                <a href="#" style="font-size: larger;float: left;text-decoration: underline;"
                   class="modal-action modal-close"><?= label('cancelar'); ?>
                </a>
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
<div id="agregarFormaPago" class="modal" style="width: 70%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a id="modalAgregarFormaPago_cerrar" class="modal-action cerrar-modal">
            <i class="mdi-content-clear"></i>
        </a>
    </div>
    <div class="modal-content" style="padding: 0 24px;">
        <div class="row">
            <h5 style="float: left;">Agregar forma de pago</h5>
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
                <a href="#" style="font-size: larger;float: left;text-decoration: underline;"
                   class="modal-action modal-close"><?= label('cancelar'); ?>
                </a>
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