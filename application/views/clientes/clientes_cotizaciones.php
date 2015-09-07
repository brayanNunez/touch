<div class="agregar_nuevo">
    <a href="<?= base_url() ?>cotizacion/cotizar"
       class="btn btn-default"><?= label('agregarCotizacion'); ?></a>
</div>
<div>
    <a id="busqueda-avanzada-agregar" href="#busquedaAvanzada"
       class="modal-trigger"><?= label('clientes_busquedaAvanzada') ?></a>
</div>
<div class="checkbox-general tabla-interna">
    <input class="filled-in checkbox checkbox-cotizacion checkall" type="checkbox" id="checkbox-all-cotizaciones"
           onclick="toggleChecked(this.checked)"/>
    <label for="checkbox-all-cotizaciones"></label>
</div>
<table id="cliente1-cotizaciones" class="data-table-information responsive-table display" cellspacing="0">
    <thead>
        <tr>
            <th style="text-align: center;">
                <input class="filled-in checkbox checkall" type="checkbox" id="checkbox-all-cotizaciones"
                       style="visibility: hidden;" onclick="toggleChecked(this.checked)"/>
                <label for="checkbox-all-cotizaciones" style="visibility: hidden;"></label>
            </th>
            <th><?= label('tablaCotizaciones_codigo'); ?></th>
            <th><?= label('tablaCotizaciones_fecha'); ?></th>
            <th><?= label('tablaCotizaciones_cliente'); ?></th>
            <th><?= label('tablaCotizaciones_monto'); ?></th>
            <th><?= label('tablaCotizaciones_estado'); ?></th>
            <th><?= label('tablaCotizaciones_opciones'); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="text-align: center;">
                <input type="checkbox" class="filled-in checkbox checkbox-cotizacion" id="checkbox_cliente1_cotizacion1"/>
                <label for="checkbox_cliente1_cotizacion1"></label>
            </td>
            <td>MRR-001</td>
            <td>2009/01/12</td>
            <td><a href="">Dos Pinos</a></td>
            <td>$300</td>
            <td>Finalizada</td>
            <td>
                <ul id="dropdown-cotizacion1" class="dropdown-content">
                    <li>
                        <a class="btn_duplicar modal-trigger icono-edicion" href="#duplicarCotizacion">
                            <?= label('tablaCotizaciones_opcionDuplicar') ?>
                        </a>
                    </li>
                    <li>
                        <a class="btn_ver icono-edicion" href="<?= base_url() ?>cotizacion/cotizar">
                            <?= label('tablaCotizaciones_opcionVerEditar') ?>
                        </a>
                    </li>
                    <li>
                        <a class="btn_eliminar modal-trigger icono-edicion" href="#eliminarCotizacion">
                            <?= label('tablaCotizaciones_opcionEliminar') ?>
                        </a>
                    </li>
                </ul>
                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#"
                   data-activates="dropdown-cotizacion1">
                    <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                </a>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                <input type="checkbox" class="filled-in checkbox checkbox-cotizacion" id="checkbox_cliente1_cotizacion2"/>
                <label for="checkbox_cliente1_cotizacion2"></label>
            </td>
            <td>MRR-002</td>
            <td>2015/01/12</td>
            <td><a href="">Dos Pinos</a></td>
            <td>$100</td>
            <td>Enviada</td>
            <td>
                <ul id="dropdown-cotizacion2" class="dropdown-content">
                    <li>
                        <a class="btn_duplicar modal-trigger icono-edicion" href="#duplicarCotizacion">
                            <?= label('tablaCotizaciones_opcionDuplicar') ?>
                        </a>
                    </li>
                    <li>
                        <a class="btn_ver icono-edicion" href="<?= base_url() ?>cotizacion/cotizar">
                            <?= label('tablaCotizaciones_opcionVerEditar') ?>
                        </a>
                    </li>
                    <li>
                        <a class="btn_ver icono-edicion" href="<?= base_url() ?>cotizacion/cotizar">
                            <?= label('tablaCotizaciones_opcionEliminar') ?>
                        </a>
                    </li>
                    <li>
                        <a class="btn_eliminar modal-trigger icono-edicion" href="#eliminarCotizacion">
                            <?= label('tablaCotizaciones_opcionEliminar') ?>
                        </a>
                    </li>
                </ul>
                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#"
                   data-activates="dropdown-cotizacion2">
                    <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                </a>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                <input type="checkbox" class="filled-in checkbox checkbox-cotizacion" id="checkbox_cliente1_cotizacion3"/>
                <label for="checkbox_cliente1_cotizacion3"></label>
            </td>
            <td>MRR-003</td>
            <td>2015/02/05</td>
            <td><a href="">Dos Pinos</a></td>
            <td>$700</td>
            <td>Aprobada</td>
            <td>
                <ul id="dropdown-cotizacion3" class="dropdown-content">
                    <li>
                        <a class="btn_duplicar modal-trigger icono-edicion" href="#duplicarCotizacion">
                            <?= label('tablaCotizaciones_opcionDuplicar') ?>
                        </a>
                    </li>
                    <li>
                        <a class="btn_ver icono-edicion" href="<?= base_url() ?>cotizacion/cotizar">
                            <?= label('tablaCotizaciones_opcionVerEditar') ?>
                        </a>
                    </li>
                    <li>
                        <a class="btn_eliminar modal-trigger icono-edicion" href="#eliminarCotizacion">
                            <?= label('tablaCotizaciones_opcionEliminar') ?>
                        </a>
                    </li>
                </ul>
                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#"
                   data-activates="dropdown-cotizacion3">
                    <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                </a>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                <input type="checkbox" class="filled-in checkbox checkbox-cotizacion" id="checkbox_cliente1_cotizacion4"/>
                <label for="checkbox_cliente1_cotizacion4"></label>
            </td>
            <td>MRR-004</td>
            <td>2015/03/25</td>
            <td><a href="">Dos Pinos</a></td>
            <td>$850</td>
            <td>Enviada</td>
            <td>
                <ul id="dropdown-cotizacion4" class="dropdown-content">
                    <li>
                        <a class="btn_duplicar modal-trigger icono-edicion" href="#duplicarCotizacion">
                            <?= label('tablaCotizaciones_opcionDuplicar') ?>
                        </a>
                    </li>
                    <li>
                        <a class="btn_ver icono-edicion" href="<?= base_url() ?>cotizacion/cotizar">
                            <?= label('tablaCotizaciones_opcionVerEditar') ?>
                        </a>
                    </li>
                    <li>
                        <a class="btn_ver icono-edicion" href="<?= base_url() ?>cotizacion/cotizar">
                            <?= label('tablaCotizaciones_opcionEliminar') ?>
                        </a>
                    </li>
                    <li>
                        <a class="btn_eliminar modal-trigger icono-edicion" href="#eliminarCotizacion">
                            <?= label('tablaCotizaciones_opcionEliminar') ?>
                        </a>
                    </li>
                </ul>
                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#"
                   data-activates="dropdown-cotizacion4">
                    <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                </a>
            </td>
        </tr>
    </tbody>
</table>

<div class="tabla-conAgregar tabla-busqueda-reporte">
    <a id="opciones-seleccionados-print"
       class="waves-effect black-text opciones-seleccionados-cotizaciones option-print-table"
       style="visibility: hidden;"
       href="#" data-toggle="tooltip" title="<?= label('opciones_seleccionadosImprimir') ?>">
        <i class="mdi-action-print icono-opciones-varios"></i>
    </a>
    <ul id="dropdown-exportar" class="dropdown-content">
        <li>
            <a href="#" class="-text"><?= label('opciones_seleccionadosExportarPdf') ?></a>
        </li>
        <li>
            <a href="#" class="-text"><?= label('opciones_seleccionadosExportarExcel') ?></a>
        </li>
    </ul>
    <a id="opciones-seleccionados-export" class="boton-opciones black-text dropdown-button option-export-table"
       href="#" data-toggle="tooltip" title="<?= label('opciones_seleccionadosExportar') ?>"
       data-activates="dropdown-exportar">
        <i class="mdi-file-file-download icono-opciones-varios"></i>
    </a>
    <a id="opciones-seleccionados-delete"
       class="modal-trigger waves-effect black-text opciones-seleccionados-cotizaciones option-delete-elements"
       style="visibility: hidden;"
       href="#eliminarCotizacionesSeleccionadas" data-toggle="tooltip"
       title="<?= label('opciones_seleccionadosEliminar') ?>">
        <i class="mdi-action-delete icono-opciones-varios"></i>
    </a>
</div>

<script>
    $(window).load(function () {
        var marcados = $('.checkbox-cotizacion:checked').size();
        if (marcados >= 1) {
            var elems = document.getElementsByClassName('opciones-seleccionados-cotizaciones');
            var e;
            for (e in elems) {
                elems[e].style.visibility = 'visible';
            }
        } else {
            var elems = document.getElementsByClassName('opciones-seleccionados-cotizaciones');
            var e;
            for (e in elems) {
                elems[e].style.visibility = 'hidden';
            }
        }
        document.getElementById('checkbox-all').checked = false;
    });
    $(document).ready(function () {
        $('#botonEliminarCotizacionesSeleccionadas').on("click", function (event) {
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
        $('#cliente1-cotizaciones').dataTable( {
            'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0, -1] /* 1st one, start by the right */
            }]
        });
        $('table#cliente1-cotizaciones thead th:first').removeClass('sorting_asc').addClass('sorting_disabled');
        $('table#cliente1-cotizaciones thead th:nth-child(2)').removeClass('sorting').addClass('sorting_asc');
    });
    $(document).ready(function () {
        $('#checkbox-all-cotizaciones').click(function (event) {
            var $this = $(this);
            var tableBody = $('#cliente1-cotizaciones').find('tbody tr[role=row] input[type=checkbox]');
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
        $('.checkbox-cotizacion').click(function (event) {
            var marcados = $('.checkbox-cotizacion:checked').size();
            if (marcados >= 1) {
                var elems = document.getElementsByClassName('opciones-seleccionados-cotizaciones');
                var e;
                for (e in elems) {
                    elems[e].style.visibility = 'visible';
                }
            } else {
                var elems = document.getElementsByClassName('opciones-seleccionados-cotizaciones');
                var e;
                for (e in elems) {
                    elems[e].style.visibility = 'hidden';
                }
            }
        });
    });
</script>

<!-- lista modals -->
<div id="eliminarCotizacion" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarCotizacion'); ?></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="finalizarCotizacion" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarFinalizarCotizacion'); ?></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="duplicarCotizacion" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarDuplicarCotizacion'); ?></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="eliminarCotizacionesSeleccionadas" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('clientes_archivosSeleccionadosEliminar'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <div id="botonEliminarCotizacionesSeleccionadas" title="cliente1-cotizaciones">
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
        <div id="formGeneral" class="section">
            <div class="row">
                <div class="input-field col s12 m3 l3">
                    <div class="input-field col s12">
                        <input id="busqueda-fecha-desde" type="text" class="datepicker-fecha">
                        <label for="busqueda-fecha-desde" class=""><?= label('clientes_busquedaDesde') ?></label>
                    </div>
                </div>
                <div class="input-field col s12 m3 l3">
                    <div class="input-field col s12">
                        <input id="busqueda-fecha-hasta" type="text" class="datepicker-fecha">
                        <label for="busqueda-fecha-hasta" class=""><?= label('clientes_busquedaHasta') ?></label>
                    </div>
                </div>

                <div class="input-field col s12 m6 l6">
                    <select class="input-field col s12">
                        <!--	                                 <option value="" disabled selected>Estado</option>-->
                        <option value="1" selected>Todos</option>
                        <option value="2">Enviada</option>
                        <option value="3">Finalizada</option>
                        <option value="4">Rechazada</option>
                    </select>
                    <label>Estado</label>
                </div>
                <div class="input-field col s12 m4 l4">
                    <select class="input-field col s12">
                        <!--	                                 <option value="" disabled selected>Cliente</option>-->
                        <option value="1" selected>Todos</option>
                        <option value="2">Juan Alfaro Alfaro</option>
                        <option value="3">Diego Rojas</option>
                    </select>
                    <label>Clientes</label>
                </div>
                <div class="input-field col s12 m4 l4">
                    <select class="input-field col s12">
                        <!--	                                 <option value="" disabled selected>Empleados</option>-->
                        <option value="1" selected>Todos</option>
                        <option value="2">Juan Carlos Porras</option>
                        <option value="3">Ana Bolaños Rojas</option>
                    </select>
                    <label>Vendedores</label>
                </div>
                <div class="input-field col s12 m4 l4">
                    <select id="reporte-cliente" class="input-field col s12">
                        <!--                                     <option value="" disabled selected>Outsourcing</option>-->
                        <option value="1" selected>Todos</option>
                        <option value="2">Transportes Rojas</option>
                        <option value="3">Música en vivo</option>
                    </select>
                    <label for="reporte-cliente">Proveedores</label>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<!-- Fin lista de modals -->