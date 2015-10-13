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
                                                    <a href="#agregarGasto"
                                                       class="btn modal-trigger"><?= label('tituloGastos_nuevo'); ?></a>
                                                </div>
                                                <div>
                                                    <a id="busqueda-avanzada-agregar" href="#busquedaAvanzadaGastos"
                                                       class="modal-trigger"><?= label('gastos_busquedaAvanzada') ?></a>
                                                </div>
                                                <table id="gastos-tabla-lista"
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
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox"
                                                                       id="checkbox_gasto1"/>
                                                                <label for="checkbox_gasto1"></label>
                                                            </td>
                                                            <td>Prog 001</td>
                                                            <td>Gasto fijo</td>
                                                            <td>Servicios profesionales</td>
                                                            <td>Horas</td>
                                                            <td>Mantenimiento Web</td>
                                                            <td>Ronald Alfaro</td>
                                                            <td>Programador</td>
                                                            <td>$1000</td>
                                                            <td>
                                                                <ul id="dropdown-gasto1" class="dropdown-content">
                                                                    <li>
                                                                        <a href="#editarGasto"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarGasto"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                   href="#!" data-activates="dropdown-gasto1">
                                                                    <?= label('menuOpciones_seleccionar') ?><i
                                                                        class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox"
                                                                       id="checkbox_gasto2"/>
                                                                <label for="checkbox_gasto2"></label>
                                                            </td>
                                                            <td>Prog 002</td>
                                                            <td>Gasto fijo</td>
                                                            <td>Servicios profesionales</td>
                                                            <td>Horas</td>
                                                            <td>Mantenimiento Equipo</td>
                                                            <td>Juan Perez</td>
                                                            <td>Tecnico en reparaciones</td>
                                                            <td>$500</td>
                                                            <td>
                                                                <ul id="dropdown-gasto2" class="dropdown-content">
                                                                    <li>
                                                                        <a href="#editarGasto"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarGasto"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                   href="#!" data-activates="dropdown-gasto2">
                                                                    <?= label('menuOpciones_seleccionar') ?><i
                                                                        class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox"
                                                                       id="checkbox_gasto3"/>
                                                                <label for="checkbox_gasto3"></label>
                                                            </td>
                                                            <td>Prog 003</td>
                                                            <td>Gasto fijo</td>
                                                            <td>Servicios profesionales</td>
                                                            <td>Horas</td>
                                                            <td>Mantenimiento App</td>
                                                            <td>Juan Gomez</td>
                                                            <td>Programador</td>
                                                            <td>$700</td>
                                                            <td>
                                                                <ul id="dropdown-gasto3" class="dropdown-content">
                                                                    <li>
                                                                        <a href="#editarGasto"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarGasto"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                   href="#!" data-activates="dropdown-gasto3">
                                                                    <?= label('menuOpciones_seleccionar') ?><i
                                                                        class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox"
                                                                       id="checkbox_gasto1"/>
                                                                <label for="checkbox_gasto1"></label>
                                                            </td>
                                                            <td>Prog 004</td>
                                                            <td>Gasto variable</td>
                                                            <td>Servicios profesionales</td>
                                                            <td>Horas</td>
                                                            <td>Mantenimiento instalaciones</td>
                                                            <td>Pedro Mora</td>
                                                            <td>Constructor</td>
                                                            <td>$200</td>
                                                            <td>
                                                                <ul id="dropdown-gasto4" class="dropdown-content">
                                                                    <li>
                                                                        <a href="#editarGasto"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarGasto"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                   href="#!" data-activates="dropdown-gasto4">
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
    $(document).ready(function () {
        $('#gastos-tabla-lista').dataTable( {
            'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0, -1] /* 1st one, start by the right */
            }]
        });
        $('table#gastos-tabla-lista thead th:first').removeClass('sorting_asc').addClass('sorting_disabled');
        $('table#gastos-tabla-lista thead th:nth-child(2)').removeClass('sorting').addClass('sorting_asc');
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

<!-- lista modals -->
<div id="eliminarGasto" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarGasto'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="agregarGasto" class="modal" style="width: 70%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="row">
            <div class="input-field col s12 m4 l4">
                <select id="nuevoGasto_tipo">
                    <option value="1" selected><?= label('gastos_tipoFijo'); ?></option>
                    <option value="2"><?= label('gastos_tipoVariable'); ?></option>
                </select>
                <label for="nuevoGasto_tipo"><?= label('gastos_Tipo'); ?></label>
            </div>
            <div class="input-field col s12 m4 l4">
                <input id="nuevoGasto_codigo" type="text">
                <label for="nuevoGasto_codigo"><?= label('gastos_Codigo') ?></label>
            </div>
            <div class="input-field col s12 m4 l4">
                <input id="nuevoGasto_gasto" type="text">
                <label for="nuevoGasto_gasto"><?= label('gastos_Gasto') ?></label>
            </div>

            <div class="input-field col s12 m4 l4">
                <select id="nuevoGasto_categoria">
                    <option value="1" selected>Todos</option>
                    <option value="2">Servicios profesionales</option>
                    <option value="3">Servicios profesionales</option>
                    <option value="4">Servicios profesionales</option>
                </select>
                <label for="nuevoGasto_categoria"><?= label('gastos_Categoria'); ?></label>
            </div>
            <div class="input-field col s12 m4 l4">
                <select id="nuevoGasto_tiempo">
                    <option value="1" selected>Todos</option>
                    <option value="2">Horas</option>
                    <option value="3">Diario</option>
                    <option value="4">Semanal</option>
                </select>
                <label for="nuevoGasto_tiempo"><?= label('gastos_Tiempo'); ?></label>
            </div>
            <div class="input-field col s12 m4 l4">
                <select id="nuevoGasto_persona">
                    <option value="1" selected>Todos</option>
                    <option value="2">Juan Gomez</option>
                    <option value="3">Juan Perez</option>
                    <option value="4">Ronald Alfaro</option>
                    <option value="5">Pedro Mora</option>
                </select>
                <label for="nuevoGasto_persona"><?= label('gastos_Persona'); ?></label>
            </div>

            <div class="input-field col s12 m6 l6">
                <input id="nuevoGasto_monto" type="text">
                <label for="nuevoGasto_monto"><?= label('gastos_Monto') ?></label>
            </div>
        </div>
        <div class="row">
            <a href="#" style="font-size: larger;float: left;text-decoration: underline;"
               class="modal-action modal-close"><?= label('cancelar'); ?>
            </a>
            <a href="#" class="waves-effect btn modal-action modal-close" style="margin: 0 20px;">
                <?= label('guardarCerrar'); ?>
            </a>
            <a href="#" class="waves-effect btn modal-action modal-close" style="margin: 0 20px;">
                <?= label('guardarAgregarOtro'); ?>
            </a>
        </div>
    </div>
<!--    <div class="modal-footer">-->
<!--        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">--><?//= label('cancelar'); ?><!--</a>-->
<!--        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">--><?//= label('aceptar'); ?><!--</a>-->
<!--    </div>-->
</div>
<div id="editarGasto" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <input id="gasto_nombre" type="text" value="Transporte">
            <label for="gasto_nombre"><?= label('formGastos_nombre'); ?></label>
        </div>
        <div class="input-field col s12">
            <input id="gasto_monto" type="text" value="$1000">
            <label for="gasto_monto"><?= label('formGastos_monto'); ?></label>
        </div>
    </div>
    <div class="modal-footer">
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
        <div id="botonElimnar" title="gastos-tabla-lista">
            <a href="#"
               class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
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