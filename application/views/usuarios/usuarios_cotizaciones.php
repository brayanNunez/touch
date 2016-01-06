<div class="agregar_nuevo">
    <a href="<?= base_url() ?>cotizacion/cotizar"
       class="btn btn-default"><?= label('agregarCotizacion'); ?></a>
</div>
<div>
    <a id="busqueda-avanzada-agregar" href="#busquedaAvanzada"
       class="modal-trigger"><?= label('clientes_busquedaAvanzada') ?></a>
</div>
<table id="usuario_cotizaciones" class="data-table-information responsive-table display" cellspacing="0">
    <thead>
    <tr>
        <th style="text-align: center;">
            <input class="filled-in checkbox checkbox-cotizacion checkall" type="checkbox" id="checkbox-all-cotizaciones"
                   onclick="toggleChecked(this.checked)"/>
            <label for="checkbox-all-cotizaciones"></label>
        </th>
        <th><?= label('tablaCotizaciones_codigo'); ?></th>
        <th><?= label('tablaCotizaciones_fecha'); ?></th>
        <th><?= label('tablaCotizaciones_cliente'); ?></th>
<!--        <th>--><?//= label('tablaCotizaciones_vendedor'); ?><!--</th>-->
        <th><?= label('tablaCotizaciones_monto'); ?></th>
        <th><?= label('tablaCotizaciones_estado'); ?></th>
        <th><?= label('tablaCotizaciones_opciones'); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php
    if(isset($resultado)) {
        $cotizaciones = $resultado['cotizaciones'];
        if ($cotizaciones !== false) {
            $contador = 0;
            foreach ($cotizaciones as $fila) {
                $idEncriptado = encryptIt($fila['idCotizacion']);
                ?>
                <tr id="fila<?= $contador ?>" data-idElemento="<?= $idEncriptado ?>">
                    <td style="text-align: center;">
                        <input type="checkbox" class="filled-in checkbox"
                               id="<?=$idEncriptado?>"/>
                        <label for="<?=$idEncriptado?>"></label>
                    </td>
                    <td>
                        <a href="<?= base_url(); ?>cotizacion/editar/<?= encryptIt($fila['idCotizacion'])?>">
                            <?php
                            if ($fila['codigo'] == '') {
                                echo $fila['numero'];
                            } else {
                                echo $fila['codigo'].'-'.$fila['numero'];
                            }
                            ?>
                        </a>
                    </td>
                    <td>
                        <?= date("d-m-Y", strtotime($fila['fechaCreacion']));?>
                    <td>
                        <a href="<?= base_url(); ?>clientes/editar/<?= encryptIt($fila['idCliente'])?>#tab-informacion">
                            <?= $fila['cliente'] ?>
                        </a>
                    </td>
<!--                    <td>-->
<!--                        <a href="--><?//= base_url(); ?><!--usuarios/editar/--><?//= encryptIt($fila['idUsuario'])?><!--#tab-informacion">-->
<!--                            --><?//= $fila['vendedor'] ?>
<!--                        </a>-->
<!--                    </td>-->
                    <td><span><?=$fila['signo']?> </span><?=$fila['monto']?></td>
                    <td>
                        <?php
                        $estado =  '';
                        switch ($fila['estado']) {
                            case 'nueva':
                                $estado =  label('estado_nueva');
                                break;
                            case 'espera':
                                $estado =  label('estado_espera');
                                break;
                            case 'rechazada':
                                $estado =  label('estado_rechazada');
                                break;
                            case 'enviada':
                                $estado =  label('estado_enviada');
                                break;
                            case 'finalizada':
                                $estado =  label('estado_finalizada');
                                break;
                            case 'facturada':
                                $estado =  label('estado_facturada');
                                break;
                        }
                        echo $estado;
                        ?>
                    </td>
                    <td>
                        <ul id="dropdown-cotizacion<?= $contador ?>" class="dropdown-content">
                            <?php
                            switch ($fila['estado']) {
                                case 'nueva': ?>
                                    <li>
                                        <a href="<?= base_url() ?>cotizacion/editar/<?= $idEncriptado?>" class="-text">
                                            <?= label('menuOpciones_editar') ?>
                                        </a>
                                    </li>
                                    <?php
                                    break;
                                case 'espera': ?>
                                    <li>
                                        <a href="<?= base_url() ?>cotizacion/aprobar/<?= $idEncriptado?>" class="-text">
                                            <?= label('menuOpciones_aprobar') ?>
                                        </a>
                                    </li>
                                    <?php
                                    break;
                                case 'rechazada': ?>
                                    <li>
                                        <a href="<?= base_url() ?>cotizacion/editar/<?= $idEncriptado?>" class="-text">
                                            <?= label('menuOpciones_editar') ?>
                                        </a>
                                    </li>
                                    <?php
                                    break;
                                case 'enviada': ?>
                                    <li>
                                        <a href="<?= base_url() ?>cotizacion/finalizar/<?= $idEncriptado?>" class="-text">
                                            <?= label('menuOpciones_finalizar') ?>
                                        </a>
                                    </li>
                                    <?php
                                    break;
                                case 'finalizada': ?>
                                    <li>
                                        <a href="<?= base_url() ?>cotizacion/facturar/<?= $idEncriptado?>" class="-text">
                                            <?= label('menuOpciones_facturar') ?>
                                        </a>
                                    </li>
                                    <?php
                                    break;
                                case 'facturada': ?>
                                    <?php
                                    break;
                            }
                            ?>

                            <li>
                                <a href="<?= base_url(); ?>cotizacion/ver/<?= $idEncriptado?>" class="-text">
                                    <?= label('menuOpciones_ver') ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>cotizacion/duplicar/<?= $idEncriptado?>" class="-text">
                                    <?= label('tablaCotizaciones_opcionDuplicar') ?>
                                </a>
                            </li>
                            <li>
                                <a href="#eliminarCotizacion" class="-text modal-trigger confirmarEliminar"
                                   data-id-eliminar="<?= $idEncriptado ?>"  data-fila-eliminar="fila<?= $contador?>">
                                    <?= label('menuOpciones_eliminar') ?>
                                </a>
                            </li>

                        </ul>
                        <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#"
                           data-activates="dropdown-cotizacion<?= $contador++ ?>">
                            <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                        </a>
                    </td>
                </tr>
                <?php
            }
        }
    }
    ?>
    </tbody>
</table>

<div class="tabla-conAgregar">
    <a id="opciones-seleccionados-print"
       class="black-text opciones-seleccionados-cotizaciones option-print-table"
       style="visibility: hidden;"
       href="#" data-toggle="tooltip"
       title="<?= label('opciones_seleccionadosImprimir') ?>">
        <i class="mdi-action-print icono-opciones-varios"></i>
    </a>
    <ul id="dropdown-exportar" class="dropdown-content">
        <li>
            <a id="opciones-seleccionados-PDF" href="#"
               class="-text"><?= label('opciones_seleccionadosExportarPdf') ?></a>
        </li>
        <li>
            <a id="opciones-seleccionados-Excel" href="#"
               class="-text"><?= label('opciones_seleccionadosExportarExcel') ?></a>
        </li>
    </ul>
    <a id="opciones-seleccionados-export"
       style="visibility: hidden;"
       class="opciones-seleccionados-cotizaciones boton-opciones black-text dropdown-button option-export-table"
       href="#" data-toggle="tooltip"
       title="<?= label('opciones_seleccionadosExportar') ?>"
       data-activates="dropdown-exportar">
        <i class="mdi-file-file-download icono-opciones-varios"></i>
    </a>
    <a id="opciones-seleccionados-delete"
       class="modal-trigger black-text opciones-seleccionados-cotizaciones option-delete-elements"
       style="visibility: hidden;"
       href="#eliminarElementosSeleccionados" data-toggle="tooltip"
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
    $(document).ready( function () {
        $('#usuario_cotizaciones').dataTable( {
            'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0, -1] /* 1st one, start by the right */
            }]
        });
        $('table#usuario_cotizaciones thead th:first').removeClass('sorting_asc').addClass('sorting_disabled');
        $('table#usuario_cotizaciones thead th:nth-child(2)').removeClass('sorting').addClass('sorting_asc');
    });
    $(document).ready(function () {
        $('#checkbox-all-cotizaciones').click(function (event) {
            var $this = $(this);
            var tableBody = $('#usuario_cotizaciones').find('tbody tr[role=row] input[type=checkbox]');
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
        <div id="botonEliminarCotizacionesSeleccionadas" title="usuario_cotizaciones">
            <a href="#"
               class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>
<!-- Fin lista modals -->