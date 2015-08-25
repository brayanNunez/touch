<table id="usuario1-cotizaciones" class="data-table-information responsive-table display" cellspacing="0">
    <thead>
    <tr>
        <th style="text-align: center;">
            <input class="filled-in checkbox checkall" type="checkbox" id="checkbox-all-cotizaciones"
                   onclick="toggleChecked(this.checked)"/>
            <label for="checkbox-all-cotizaciones"></label>
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
            <input type="checkbox" class="filled-in checkbox checkbox-cotizacion" id="checkbox_usuario1_cotizacion1"/>
            <label for="checkbox_usuario1_cotizacion1"></label>
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
            <input type="checkbox" class="filled-in checkbox checkbox-cotizacion" id="checkbox_usuario1_cotizacion2"/>
            <label for="checkbox_usuario1_cotizacion2"></label>
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
    </tbody>
</table>

<div class="tabla-sinAgregar">
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
                elems[e].style.visibility = ' hidden';
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
    $(document).ready(function () {
        $('#checkbox-all-cotizaciones').click(function (event) {
            if (this.checked) {
                $('.checkbox-cotizacion').each(function () {
                    this.checked = true;
                });
            } else {
                $('.checkbox-cotizacion').each(function () {
                    this.checked = false;
                });
            }
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
        <div id="botonEliminarCotizacionesSeleccionadas" title="usuario1-cotizaciones">
            <a href="#"
               class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>
