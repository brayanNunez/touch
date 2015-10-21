<!-- START CONTENT -->

<section id="content">

    <!--start container-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloProveedores'); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->


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
                                                    <a href="<?= base_url() ?>proveedores/agregar"
                                                       class="btn btn-default"><?= label('agregar_nuevo'); ?></a>
                                                </div>
                                                <table id="tabla-lista-proveedores"
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
                                                        <th><?= label('Proveedor_tablaCodigo'); ?></th>
                                                        <th><?= label('Proveedor_tablaNombre'); ?></th>
                                                        <th><?= label('Proveedor_tablaIdentificacion'); ?></th>
                                                        <th><?= label('Proveedor_tablaDescripcion'); ?></th>
                                                        <th><?= label('Proveedor_tablaOpciones'); ?></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <input type="checkbox" class="filled-in checkbox"
                                                                   id="checkbox_proveedor1"/>
                                                            <label for="checkbox_proveedor1"></label>
                                                        </td>
                                                        <td>0001</td>
                                                        <td><a href="<?= base_url() ?>proveedores/editar">Juan Perez
                                                                D.</a></td>
                                                        <td>11-235-689</td>
                                                        <td>Diseñador</td>
                                                        <td>
                                                            <ul id="dropdown-proveedor1" class="dropdown-content">
                                                                <li>
                                                                    <a href="<?= base_url(); ?>proveedores/editar"
                                                                       class="-text"><?= label('menuOpciones_ver') ?></a>
                                                                </li>
                                                                <li>
                                                                    <a href="<?= base_url(); ?>proveedores/editar"
                                                                       class="-text"><?= label('menuOpciones_editar') ?></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#eliminarProveedor"
                                                                       class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#desactivarProveedor"
                                                                       class="-text modal-trigger"><?= label('menuOpciones_desactivar') ?></a>
                                                                </li>
                                                            </ul>
                                                            <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                               href="#" data-activates="dropdown-proveedor1">
                                                                <?= label('menuOpciones_seleccionar') ?><i
                                                                    class="mdi-navigation-arrow-drop-down"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <input type="checkbox" class="filled-in checkbox"
                                                                   id="checkbox_proveedor2"/>
                                                            <label for="checkbox_proveedor2"></label>
                                                        </td>
                                                        <td>0002</td>
                                                        <td><a href="<?= base_url() ?>proveedores/editar">Jose Porras
                                                                E.</a></td>
                                                        <td>2-245-678</td>
                                                        <td>Pintor</td>
                                                        <td>
                                                            <ul id="dropdown-proveedor2" class="dropdown-content">
                                                                <li>
                                                                    <a href="<?= base_url(); ?>proveedores/editar"
                                                                       class="-text"><?= label('menuOpciones_ver') ?></a>
                                                                </li>
                                                                <li>
                                                                    <a href="<?= base_url(); ?>proveedores/editar"
                                                                       class="-text"><?= label('menuOpciones_editar') ?></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#eliminarProveedor"
                                                                       class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#desactivarProveedor"
                                                                       class="-text modal-trigger"><?= label('menuOpciones_desactivar') ?></a>
                                                                </li>
                                                            </ul>
                                                            <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                               href="#" data-activates="dropdown-proveedor2">
                                                                <?= label('menuOpciones_seleccionar') ?><i
                                                                    class="mdi-navigation-arrow-drop-down"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <input type="checkbox" class="filled-in checkbox"
                                                                   id="checkbox_proveedor3"/>
                                                            <label for="checkbox_proveedor3"></label>
                                                        </td>
                                                        <td>0003</td>
                                                        <td><a href="<?= base_url() ?>proveedores/editar">Maria Castro
                                                                M.</a></td>
                                                        <td>2-723-327</td>
                                                        <td>Limpieza</td>
                                                        <td>
                                                            <ul id="dropdown-proveedor3" class="dropdown-content">
                                                                <li>
                                                                    <a href="<?= base_url(); ?>proveedores/editar"
                                                                       class="-text"><?= label('menuOpciones_ver') ?></a>
                                                                </li>
                                                                <li>
                                                                    <a href="<?= base_url(); ?>proveedores/editar"
                                                                       class="-text"><?= label('menuOpciones_editar') ?></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#eliminarProveedor"
                                                                       class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#desactivarProveedor"
                                                                       class="-text modal-trigger"><?= label('menuOpciones_desactivar') ?></a>
                                                                </li>
                                                            </ul>
                                                            <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                               href="#" data-activates="dropdown-proveedor3">
                                                                <?= label('menuOpciones_seleccionar') ?><i
                                                                    class="mdi-navigation-arrow-drop-down"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <input type="checkbox" class="filled-in checkbox"
                                                                   id="checkbox_proveedor4"/>
                                                            <label for="checkbox_proveedor4"></label>
                                                        </td>
                                                        <td>0004</td>
                                                        <td><a href="<?= base_url() ?>proveedores/editar">Ana Mora
                                                                Q.</a></td>
                                                        <td>2-897-231</td>
                                                        <td>Finanzas</td>
                                                        <td>
                                                            <ul id="dropdown-proveedor4" class="dropdown-content">
                                                                <li>
                                                                    <a href="<?= base_url(); ?>proveedores/editar"
                                                                       class="-text"><?= label('menuOpciones_ver') ?></a>
                                                                </li>
                                                                <li>
                                                                    <a href="<?= base_url(); ?>proveedores/editar"
                                                                       class="-text"><?= label('menuOpciones_editar') ?></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#eliminarProveedor"
                                                                       class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#desactivarProveedor"
                                                                       class="-text modal-trigger"><?= label('menuOpciones_desactivar') ?></a>
                                                                </li>
                                                            </ul>
                                                            <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                               href="#" data-activates="dropdown-proveedor4">
                                                                <?= label('menuOpciones_seleccionar') ?><i
                                                                    class="mdi-navigation-arrow-drop-down"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <div class="tabla-conAgregar">
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
    <!--end container-->

    <?php
    $this->load->view('layout/default/menu-crear.php');
    ?>

</section>
<!-- END CONTENT-->

<script>
    $(window).load(function () {
        var marcados = $('.checkbox:checked').size();
        if (marcados >= 1) {
            var elems = document.getElementsByClassName('opciones-seleccionados');
            var e;
            for (e in elems) {
                elems[e].style.visibility = 'visible';
            }
        } else {
            var elems = document.getElementsByClassName('opciones-seleccionados');
            var e;
            for (e in elems) {
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
    $(document).ready( function () {
        $('#tabla-lista-proveedores').dataTable( {
            'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0, -1] /* 1st one, start by the right */
            }]
        });
        $('table#tabla-lista-proveedores thead th:first').removeClass('sorting_asc').addClass('sorting_disabled');
        $('table#tabla-lista-proveedores thead th:nth-child(2)').removeClass('sorting').addClass('sorting_asc');
    });
    $(document).ready(function () {
        $('#checkbox-all').click(function (event) {
            var $this = $(this);
            var tableBody = $('#tabla-lista-proveedores').find('tbody tr[role=row] input[type=checkbox]');
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
                    elems[e].style.visibility = 'visible';
                }
            } else {
                var elems = document.getElementsByClassName('opciones-seleccionados');
                var e;
                for (e in elems) {
                    elems[e].style.visibility = 'hidden';
                }
            }
        });
    });
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
</script>

<!-- lista modals -->
<div id="desactivarProveedor" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarDesactivarProveedor'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="eliminarProveedor" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarProveedor'); ?></p>
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
        <div id="botonElimnar" title="tabla-lista-proveedores">
            <a href="#"
               class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>
<!--Fin lista modals -->
