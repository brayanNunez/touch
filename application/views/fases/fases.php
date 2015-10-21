<!-- START CONTENT  -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloFases'); ?></h1>
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
                                                    <a href="#agregarFase"
                                                       class="btn modal-trigger"><?= label('tituloFases_nuevo'); ?></a>
                                                </div>
                                                <div>
                                                    <a id="busqueda-avanzada-agregar" href="#busquedaAvanzadaFases"
                                                       class="modal-trigger"><?= label('fases_busquedaAvanzada') ?></a>
                                                </div>
                                                <table id="fases-tabla-lista"
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
                                                            <th><?= label('tituloFases_codigo'); ?></th>
                                                            <th><?= label('tituloFases_fase'); ?></th>
                                                            <th><?= label('tituloFases_descripcion'); ?></th>
                                                            <th><?= label('tituloFases_subfases'); ?></th>
                                                            <th><?= label('tituloFases_opciones'); ?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox"
                                                                       id="checkbox_fase1"/>
                                                                <label for="checkbox_fase1"></label>
                                                            </td>
                                                            <td>Prog 001</td>
                                                            <td>ERS</td>
                                                            <td>Requerimientos de software</td>
                                                            <td><a href="#">Ver subfases</a></td>
                                                            <td>
                                                                <ul id="dropdown-fase1" class="dropdown-content">
                                                                    <li>
                                                                        <a href="#editarFase"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarFase"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                   href="#" data-activates="dropdown-fase1">
                                                                    <?= label('menuOpciones_seleccionar') ?><i
                                                                        class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox"
                                                                       id="checkbox_fase2"/>
                                                                <label for="checkbox_fase2"></label>
                                                            </td>
                                                            <td>Prog 002</td>
                                                            <td>Diseno</td>
                                                            <td>Diseno del sistema</td>
                                                            <td><a href="#">Ver subfases</a></td>
                                                            <td>
                                                                <ul id="dropdown-fase2" class="dropdown-content">
                                                                    <li>
                                                                        <a href="#editarFase"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarFase"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                   href="#" data-activates="dropdown-fase2">
                                                                    <?= label('menuOpciones_seleccionar') ?><i
                                                                        class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox"
                                                                       id="checkbox_fase3"/>
                                                                <label for="checkbox_fase3"></label>
                                                            </td>
                                                            <td>Prog 003</td>
                                                            <td>Desarrollo</td>
                                                            <td>Desarrollo del sistema</td>
                                                            <td><a href="#">Ver subfases</a></td>
                                                            <td>
                                                                <ul id="dropdown-fase3" class="dropdown-content">
                                                                    <li>
                                                                        <a href="#editarFase"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarFase"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                   href="#" data-activates="dropdown-fase3">
                                                                    <?= label('menuOpciones_seleccionar') ?><i
                                                                        class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox"
                                                                       id="checkbox_fase4"/>
                                                                <label for="checkbox_fase4"></label>
                                                            </td>
                                                            <td>Prog 004</td>
                                                            <td>Implementacion</td>
                                                            <td>Implementacion del sistema</td>
                                                            <td><a href="#">Ver subfases</a></td>
                                                            <td>
                                                                <ul id="dropdown-fase4" class="dropdown-content">
                                                                    <li>
                                                                        <a href="#editarFase"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarFase"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                   href="#" data-activates="dropdown-fase4">
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
        $('#fases-tabla-lista').dataTable( {
            'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0, -1] /* 1st one, start by the right */
            }]
        });
        $('table#fases-tabla-lista thead th:first').removeClass('sorting_asc').addClass('sorting_disabled');
        $('table#fases-tabla-lista thead th:nth-child(2)').removeClass('sorting').addClass('sorting_asc');
    });
    $(document).ready(function () {
        $('#checkbox-all').click(function (event) {
            var $this = $(this);
            var tableBody = $('#fases-tabla-lista').find('tbody tr[role=row] input[type=checkbox]');
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
<div id="eliminarFase" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarFase'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="agregarFase" class="modal" style="width: 70%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="row">
            <div id="contenedorFases">
                <div class="input-field col s12 m4 l4">
                    <input id="nuevaFase_codigo" type="text">
                    <label for="nuevaFase_codigo"><?= label('fase_codigo') ?></label>
                </div>
                <div class="input-field col s12 m8 l8">
                    <input id="nuevaFase_nombre" type="text">
                    <label for="nuevaFase_nombre"><?= label('fase_nombre') ?></label>
                </div>
                <div class="input-field col s12">
                    <textarea id="nuevaFase_notas" class="materialize-textarea" rows="4"></textarea>
                    <label for="nuevaFase_notas"><?= label('fase_notas') ?></label>
                </div>
                <div class="col s12">
                    <hr />
                </div>
            </div>
            <div class="row">
                <a id="btn_agregarSubfase" style="text-decoration: underline;float: right;cursor: pointer;"
                   onclick="agregarNuevaFase();"><?= label('fase_agregarSubfase') ?></a>
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
</div>
<div id="editarFase" class="modal" style="width: 70%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="row">
            <div id="contenedorFasesEditar">
                <div class="input-field col s12 m4 l4">
                    <input id="editarFase_codigo" type="text" value="Prog. 001">
                    <label for="editarFase_codigo"><?= label('fase_codigo') ?></label>
                </div>
                <div class="input-field col s12 m8 l8">
                    <input id="editarFase_nombre" type="text" value="ERS">
                    <label for="editarFase_nombre"><?= label('fase_nombre') ?></label>
                </div>
                <div class="input-field col s12">
                    <textarea id="editarFase_notas" class="materialize-textarea" rows="4">- Fase de requerimientos de software.
                    </textarea>
                    <label for="editarFase_notas"><?= label('fase_notas') ?></label>
                </div>
                <div class="col s12">
                    <hr />
                </div>
            </div>
            <div class="col s12">
                <a id="editar_agregarSubfase" style="text-decoration: underline;float: right;cursor: pointer;"
                   onclick="agregarNuevaFaseEditar();"><?= label('fase_agregarSubfase') ?></a>
            </div>
        </div>
        <div class="row">
            <a href="#" style="font-size: larger;float: left;text-decoration: underline;"
               class="modal-action modal-close"><?= label('cancelar'); ?>
            </a>
            <a href="#" class="waves-effect btn modal-action modal-close" style="margin: 0 20px;">
                <?= label('fases_guardarCambios'); ?>
            </a>
        </div>
    </div>
</div>
<div id="eliminarElementosSeleccionados" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('fases_eliminarElementosSeleccionados'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <div id="botonElimnar" title="fases-tabla-lista">
            <a href="#"
               class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>

<div id="busquedaAvanzadaFases" class="modal" style="width: 70%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content" style="padding-top: 0;">
        <div id="formGeneral" class="section" style="padding-bottom: 0;">
            <div class="row" style="margin-bottom: 0;">
                <div class="input-field col s12 m6 l6">
                    <input id="fases_busquedaCodigo" type="text">
                    <label for="fases_busquedaCodigo"><?= label('fases_busquedaCodigo') ?></label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <input id="fases_busquedaNombre" type="text">
                    <label for="fases_busquedaNombre"><?= label('fases_busquedaNombre') ?></label>
                </div>

                <div class="input-field col s12">
                    <input id="fases_busquedaDescripcion" type="text">
                    <label for="fases_busquedaDescripcion"><?= label('fases_busquedaDescripcion') ?></label>
                </div>

                <div class="input-field col s12 m6 l6">
                    <select id="fases_busquedaCotizacion">
                        <option value="1" selected>Todos</option>
                        <option value="2">Cotizacion 1</option>
                        <option value="3">Cotizacion 2</option>
                        <option value="4">Cotizacion 3</option>
                        <option value="5">Cotizacion 4</option>
                    </select>
                    <label for="fases_busquedaCotizacion"><?= label('fases_busquedaCotizacion'); ?></label>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect btn modal-action modal-close"
           style="width: 300px;float: none;display: block;margin: 0 auto;text-align: center;color: white;">
            <?= label('fases_busquedaBuscar'); ?>
        </a>
    </div>
</div>
<!-- Fin lista modals -->

<script>
    var cantidad = 0;
    var contador = cantidad;
    function agregarNuevaFase() {
        cantidad++;
//        actualizarCantidad();
        $('#contenedorFases').append('' +
            '<div id="fase' + contador + '" style="margin-left: 50px;">' +
                '<div class="input-field col s12 m4 l4">' +
                    '<input id="fase' + contador + '_codigo" type="text">' +
                    '<label for="fase' + contador + '_codigo"><?= label('fase_codigo') ?></label>' +
                '</div>' +
                '<div class="input-field col s12 m8 l8">' +
                    '<input id="fase' + contador + '_nombre" type="text">' +
                    '<label for="fase' + contador + '_nombre"><?= label('fase_nombre') ?></label>' +
                '</div>' +
                '<div class="input-field col s12">' +
                    '<textarea id="fase' + contador + '_notas" class="materialize-textarea" rows="4"></textarea>' +
                    '<label for="fase' + contador + '_notas"><?= label('fase_notas') ?></label>' +
                '</div>' +
                '<div class="col s12">' +
                    '<hr />' +
                '</div>' +
            '</div>'
        );
        contador++;
    }

    var cantidadEditar = 0;
    var contadorEditar = cantidadEditar;
    function agregarNuevaFaseEditar() {
        cantidadEditar++;
//        actualizarCantidad();
        $('#contenedorFasesEditar').append('' +
            '<div id="fase' + contadorEditar + '" style="margin-left: 50px;">' +
                '<div class="input-field col s12 m4 l4">' +
                    '<input id="faseEditar' + contadorEditar + '_codigo" type="text">' +
                    '<label for="faseEditar' + contadorEditar + '_codigo"><?= label('fase_codigo') ?></label>' +
                '</div>' +
                '<div class="input-field col s12 m8 l8">' +
                    '<input id="faseEditar' + contadorEditar + '_nombre" type="text">' +
                    '<label for="faseEditar' + contadorEditar + '_nombre"><?= label('fase_nombre') ?></label>' +
                '</div>' +
                '<div class="input-field col s12">' +
                    '<textarea id="faseEditar' + contadorEditar + '_notas" class="materialize-textarea" rows="4"></textarea>' +
                    '<label for="faseEditar' + contadorEditar + '_notas"><?= label('fase_notas') ?></label>' +
                '</div>' +
                '<div class="col s12">' +
                    '<hr />' +
                '</div>' +
            '</div>'
        );
        contadorEditar++;
    }
</script>