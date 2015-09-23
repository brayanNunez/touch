<!-- START CONTENT -->

<section id="content">

    <!--start container-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h1 class="breadcrumbs-title"><?= label('tituloClientes'); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <div class="container">
        <div id="chart-dashboard">
            <div class="row">
                <div class="col s12">
                    <div id="submit-button" class="section">
                        <div class="row">
                            <div class="col s12">
                                <div class="card lista-elementos">
                                    <div id="table-datatables">
                                        <div class="row">
                                            <div class="col s12">
                                                <div class="agregar_nuevo">
                                                    <a href="<?= base_url() ?>clientes/agregar"
                                                       class="btn btn-default"><?= label('agregar_nuevo'); ?></a>
                                                </div>
                                                <div>
                                                    <a id="busqueda-avanzada-agregar" href="#busquedaAvanzada"
                                                       class="modal-trigger"><?= label('clientes_busquedaAvanzada') ?></a>
                                                </div>
                                                <table id="clients"
                                                       class="data-table-information responsive-table display"
                                                       cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th style="text-align: center;">
                                                                <input class="filled-in checkbox checkall" type="checkbox"
                                                                       id="checkbox-all"
                                                                       onclick="toggleChecked(this.checked)"/>
                                                                <label for="checkbox-all"></label>
                                                            </th>
                                                            <th><?= label('Cliente_tablaCodigo'); ?></th>
                                                            <th><?= label('Cliente_tablaTipo'); ?></th>
                                                            <th><?= label('Cliente_tablaNombre'); ?></th>
                                                            <th><?= label('Cliente_tablaTelefono'); ?></th>
                                                            <th><?= label('Cliente_tablaCorreo'); ?></th>
                                                            <th><?= label('Cliente_tablaCotizador'); ?></th>
                                                            <th><?= label('Cliente_tablaOpciones'); ?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox"
                                                                       id="checkbox_cliente1"/>
                                                                <label for="checkbox_cliente1"></label>
                                                            </td>
                                                            <td>0001</td>
                                                            <td>Jurídico</td>
                                                            <td><a href="<?= base_url() ?>clientes/editar">Dos Pinos
                                                                    S.A.</a></td>
                                                            <td>2456-0708</td>
                                                            <td>coopedospinos@gmail.com</td>
                                                            <td><a href="<?= base_url() ?>usuarios/editar">Juan</a></td>
                                                            <td>
                                                                <ul id="dropdown-cliente1" class="dropdown-content">
                                                                    <li>
                                                                        <a href="<?= base_url(); ?>clientes/editar"
                                                                           class="-text"><?= label('menuOpciones_ver') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?= base_url(); ?>clientes/editar"
                                                                           class="-text"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarCliente"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?= base_url(); ?>cotizacion/cotizar"
                                                                           class="-text"><?= label('menuOpciones_cotizar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#desactivarCliente"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_desactivar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                   href="#" data-activates="dropdown-cliente1">
                                                                    <?= label('menuOpciones_seleccionar') ?><i
                                                                        class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox"
                                                                       id="checkbox_cliente2"/>
                                                                <label for="checkbox_cliente2"></label>
                                                            </td>
                                                            <td>0002</td>
                                                            <td>Físico</td>
                                                            <td><a href="<?= base_url() ?>clientes/editar">Emanuel Conejo
                                                                    R.</a></td>
                                                            <td>2458-9632</td>
                                                            <td>emanuel@gmail.com</td>
                                                            <td><a href="<?= base_url() ?>usuarios/editar">Maria</a></td>
                                                            <td>
                                                                <ul id="dropdown-cliente2" class="dropdown-content">
                                                                    <li>
                                                                        <a href="<?= base_url(); ?>clientes/editar"
                                                                           class="-text"><?= label('menuOpciones_ver') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?= base_url(); ?>clientes/editar"
                                                                           class="-text"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarCliente"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?= base_url(); ?>cotizacion/cotizar"
                                                                           class="-text"><?= label('menuOpciones_cotizar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#desactivarCliente"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_desactivar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                   href="#!" data-activates="dropdown-cliente2">
                                                                    <?= label('menuOpciones_seleccionar') ?><i
                                                                        class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox"
                                                                       id="checkbox_cliente3"/>
                                                                <label for="checkbox_cliente3"></label>
                                                            </td>
                                                            <td>0003</td>
                                                            <td>Jurídico</td>
                                                            <td><a href="<?= base_url() ?>clientes/editar">Pipasa S.A.</a>
                                                            </td>
                                                            <td>2478-4512</td>
                                                            <td>pipasa@gmail.com</td>
                                                            <td><a href="<?= base_url() ?>usuarios/editar">Maria</a></td>
                                                            <td>
                                                                <ul id="dropdown-cliente3" class="dropdown-content">
                                                                    <li>
                                                                        <a href="<?= base_url(); ?>clientes/editar"
                                                                           class="-text"><?= label('menuOpciones_ver') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?= base_url(); ?>clientes/editar"
                                                                           class="-text"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarCliente"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?= base_url(); ?>cotizacion/cotizar"
                                                                           class="-text"><?= label('menuOpciones_cotizar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#desactivarCliente"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_desactivar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                   href="#!" data-activates="dropdown-cliente3">
                                                                    <?= label('menuOpciones_seleccionar') ?><i
                                                                        class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox"
                                                                       id="checkbox_cliente4"/>
                                                                <label for="checkbox_cliente4"></label>
                                                            </td>
                                                            <td>0004</td>
                                                            <td>Físico</td>
                                                            <td><a href="<?= base_url() ?>clientes/editar">Julia Bolaños
                                                                    E.</a></td>
                                                            <td>2448-4250</td>
                                                            <td>julia@gmail.com</td>
                                                            <td><a href="<?= base_url() ?>usuarios/editar">Juan</a></td>
                                                            <td>
                                                                <ul id="dropdown-cliente4" class="dropdown-content">
                                                                    <li>
                                                                        <a href="<?= base_url(); ?>clientes/editar"
                                                                           class="-text"><?= label('menuOpciones_ver') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?= base_url(); ?>clientes/editar"
                                                                           class="-text"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarCliente"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?= base_url(); ?>cotizacion/cotizar"
                                                                           class="-text"><?= label('menuOpciones_cotizar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#desactivarCliente"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_desactivar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                   href="#!" data-activates="dropdown-cliente4">
                                                                    <?= label('menuOpciones_seleccionar') ?><i
                                                                        class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <div class="tabla-conAgregar tabla-busqueda-reporte">
                                                    <a id="opciones-seleccionados-print"
                                                       class="waves-effect black-text opciones-seleccionados option-print-table"
                                                       style="visibility: hidden;"
                                                       href="#" data-toggle="tooltip"
                                                       title="<?= label('opciones_seleccionadosImprimir') ?>">
                                                        <i class="mdi-action-print icono-opciones-varios"></i>
                                                    </a>
                                                    <ul id="dropdown-exportar" class="dropdown-content">
                                                        <li>
                                                            <a href="#"
                                                               class="-text"><?= label('opciones_seleccionadosExportarPdf') ?></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                               class="-text"><?= label('opciones_seleccionadosExportarExcel') ?></a>
                                                        </li>
                                                    </ul>
                                                    <a id="opciones-seleccionados-export"
                                                       class="boton-opciones black-text dropdown-button option-export-table"
                                                       href="#" data-toggle="tooltip"
                                                       title="<?= label('opciones_seleccionadosExportar') ?>"
                                                       data-activates="dropdown-exportar">
                                                        <i class="mdi-file-file-download icono-opciones-varios"></i>
                                                    </a>
                                                    <a id="opciones-seleccionados-delete"
                                                       class="modal-trigger waves-effect black-text opciones-seleccionados option-delete-elements"
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

    <?php
    $this->load->view('layout/default/menu-crear.php');
    ?>

    <!--end container-->
</section>
<!-- END CONTENT-->

<script>
    $(window).load(function () {
        var marcados = $('.checkbox:checked').size();
        if (marcados >= 1) {
            var elems = document.getElementsByClassName('opciones-seleccionados');
            var e;
            for (e in elems) {
//                elems[e].style.display = 'block';
                elems[e].style.visibility = 'visible';
            }
        } else {
            var elems = document.getElementsByClassName('opciones-seleccionados');
            var e;
            for (e in elems) {
//                elems[e].style.display = 'none';
                elems[e].style.visibility = 'hidden';
            }
        }
        document.getElementById('checkbox-all').checked = false;
    });
    $(document).ready(function () {
        $('#botonElimnar').on("click", function (event) {
            var tb = $(this).attr('title');
            var sel = false;
            var ch = $('#' + tb).find('tbody input[type=checkbox]');
            ch.each(function () {
                var $this = $(this);
                if ($this.is(':checked')) {
                    sel = true;
                    $this.parents('tr').fadeOut(function () {
                        $this.remove();
                    });
                }
            });
            return false;
        });
    });
    $(document).ready(function () {
        $('#clients').dataTable( {
            'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0, -1] /* 1st one, start by the right */
            }]
        });
        $('table#clients thead th:first').removeClass('sorting_asc').addClass('sorting_disabled');
        $('table#clients thead th:nth-child(2)').removeClass('sorting').addClass('sorting_asc');
    });
    $(document).ready(function () {
        $('#checkbox-all').click(function (event) {
            var $this = $(this);
            var tableBody = $('#clients').find('tbody tr[role=row] input[type=checkbox]');
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
        $('.checkbox').click(function (event) {
            var marcados = $('.checkbox:checked').size();
            if (marcados >= 1) {
                var elems = document.getElementsByClassName('opciones-seleccionados');
                var e;
                for (e in elems) {
//                elems[e].style.display = 'block';
                    elems[e].style.visibility = 'visible';
                }
            } else {
                var elems = document.getElementsByClassName('opciones-seleccionados');
                var e;
                for (e in elems) {
//                elems[e].style.display = 'none';
                    elems[e].style.visibility = 'hidden';
                }
            }
        });
    });
    $(document).ready(function () {
        $('.boton-opciones').on('click', function (event) {
            // alert(event.type);
            //e.preventDefault();

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


        $('.tags_gustosCliente  > > input').tagsinput({
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

<!-- lista modals -->
<div id="desactivarCliente" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarDesactivarCliente'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="eliminarCliente" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarCliente'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="eliminarElementosSeleccionados" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('clientes_archivosSeleccionadosEliminar'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <div id="botonElimnar" title="clients">
            <a href="#"
               class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>
<div id="busquedaAvanzada" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div id="formGeneral" class="section" style="padding-bottom: 0;">
            <div class="row" style="margin-bottom: 0;">
                <div class="input-field col s12 m3 l3">
                    <div class="input-field col s12">
                        <input id="busqueda-fecha-desde" type="text" class="datepicker-fecha">
                        <label for="busqueda-fecha-desde"><?= label('clientes_busquedaDesde') ?></label>
                    </div>
                </div>
                <div class="input-field col s12 m3 l3">
                    <div class="input-field col s12">
                        <input id="busqueda-fecha-hasta" type="text" class="datepicker-fecha">
                        <label for="busqueda-fecha-hasta"><?= label('clientes_busquedaHasta') ?></label>
                    </div>
                </div>

                <div class="input-field col s12 m6 l6">
                    <select class="input-field col s12">
                        <option value="1" selected>Todos</option>
                        <option value="2">Enviada</option>
                        <option value="3">Finalizada</option>
                        <option value="4">Rechazada</option>
                    </select>
                    <label>Estado de la cotización</label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <select class="input-field col s12">
                        <option value="1" selected>Todos</option>
                        <option value="2">Juan Alfaro Alfaro</option>
                        <option value="3">Diego Rojas</option>
                    </select>
                    <label>Clientes</label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <select id="reporte-cliente" class="input-field col s12">
                        <option value="1" selected>Todos</option>
                        <option value="2">Transportes Rojas</option>
                        <option value="3">Música en vivo</option>
                    </select>
                    <label for="reporte-cliente">Proveedores</label>
                </div>
                <div class="col s12 m4 l4 tagsInput-div">
                    <div class="inputTag col s12">
                        <label for="vendedoresCliente"><?= label('formCliente_cotizador'); ?></label>
                        <br>

                        <div id="vendedoresCliente" class="example campo-tags tags_vendedores">
                            <div class="bs-example">
                                <input placeholder="<?= label('formCliente_anadirVendedor'); ?>" type="text" value="Todos"/>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col s12 m4 l4 tagsInput-div">
                    <div class="inputTag col s12">
                        <label for="gustosCliente"><?= label('formCliente_gustos_preferencias'); ?></label>
                        <br>

                        <div id="gustosCliente" class="example campo-tags tags_gustosCliente">
                            <div class="bs-example">
                                <input placeholder="<?= label('formCliente_anadirGusto'); ?>" type="text"
                                       value="Todos"/>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col s12 m4 l4 tagsInput-div">
                    <div class="inputTag col s12">
                        <label for="mediosCliente"><?= label('formCliente_mediosContacto'); ?></label>
                        <br>

                        <div id="mediosCliente" class="example campo-tags tags_mediosContacto">
                            <div class="bs-example">
                                <input placeholder="<?= label('formCliente_anadirMedio'); ?>" type="text" value="Todos"/>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<!--Fin lista modals -->
