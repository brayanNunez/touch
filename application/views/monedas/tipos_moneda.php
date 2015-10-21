<!-- START CONTENT  -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloTiposMoneda'); ?></h1>
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
                                            <div class="input-field col s12">
                                                <select>
                                                    <option value="" selected
                                                            disabled><?= label('tiposMoneda_selecionarUno'); ?></option>
                                                    <option value="1">Colón</option>
                                                    <option value="2">Dólar</option>
                                                    <option value="3">Euro</option>
                                                    <option value="4">Peso mexicano</option>
                                                </select>
                                                <label for="cliente_tipo"><?= label('tiposMoneda_defecto'); ?></label>
                                            </div>
                                            <div class="col s12 m12 l12">
                                                <div class="col s12">
                                                    <label><?= label('tiposMoneda_permitidos'); ?></label>
                                                    <br/>
                                                    <br/>
                                                </div>
                                                <div class="col s12 m12 l12">
                                                    <div class="agregar_nuevo">
                                                        <a href="#agregarTipo" class="btn modal-trigger">
                                                            <?= label('tiposMoneda_nuevo'); ?>
                                                        </a>
                                                    </div>
                                                    <table id="monedas-tabla-lista"
                                                           class="data-table-information responsive-table display"
                                                           cellspacing="0">
                                                        <thead>
                                                        <tr>
                                                            <th style="text-align: center;">
                                                                <input class="filled-in checkbox checkall"
                                                                       type="checkbox" id="checkbox-all"
                                                                       onclick="toggleChecked(this.checked)"/>
                                                                <label for="checkbox-all"></label>
                                                            </th>
                                                            <th><?= label('tiposMoneda_nombre'); ?></th>
                                                            <th><?= label('tiposMoneda_tipoCambio'); ?></th>
                                                            <th><?= label('tiposMoneda_opciones'); ?></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox"
                                                                       id="checkbox_moneda1"/>
                                                                <label for="checkbox_moneda1"></label>
                                                            </td>
                                                            <td>Colón</td>
                                                            <td>550</td>
                                                            <td>
                                                                <ul id="dropdown-moneda1" class="dropdown-content">
                                                                    <li>
                                                                        <a href="#eliminarTipo"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                   href="#!" data-activates="dropdown-moneda1">
                                                                    <?= label('menuOpciones_seleccionar') ?><i
                                                                        class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox"
                                                                       id="checkbox_moneda2"/>
                                                                <label for="checkbox_moneda2"></label>
                                                            </td>
                                                            <td>Dólar</td>
                                                            <td>1</td>
                                                            <td>
                                                                <ul id="dropdown-moneda2" class="dropdown-content">
                                                                    <li>
                                                                        <a href="#eliminarTipo"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                   href="#!" data-activates="dropdown-moneda2">
                                                                    <?= label('menuOpciones_seleccionar') ?><i
                                                                        class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox"
                                                                       id="checkbox_moneda3"/>
                                                                <label for="checkbox_moneda3"></label>
                                                            </td>
                                                            <td>Euro</td>
                                                            <td>0.97</td>
                                                            <td>
                                                                <ul id="dropdown-moneda3" class="dropdown-content">
                                                                    <li>
                                                                        <a href="#eliminarTipo"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                   href="#!" data-activates="dropdown-moneda3">
                                                                    <?= label('menuOpciones_seleccionar') ?><i
                                                                        class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <div class="tabla-conAgregar tabla-opciones-monedas">
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
        $('#monedas-tabla-lista').dataTable( {
            'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0, -1] /* 1st one, start by the right */
            }]
        });
        $('table#monedas-tabla-lista thead th:first').removeClass('sorting_asc').addClass('sorting_disabled');
        $('table#monedas-tabla-lista thead th:nth-child(2)').removeClass('sorting').addClass('sorting_asc');
    });
    $(document).ready(function () {
        $('#checkbox-all').click(function (event) {
            var $this = $(this);
            var tableBody = $('#monedas-tabla-lista').find('tbody tr[role=row] input[type=checkbox]');
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
<div id="eliminarTipo" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarTipoMoneda'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="agregarTipo" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <select id="moneda_nombre">
                <option value="" selected disabled><?= label('tiposMoneda_selecionarUno'); ?></option>
                <option value="1">Colón</option>
                <option value="2">Dólar</option>
                <option value="3">Euro</option>
                <option value="4">Peso mexicano</option>
            </select>
            <label for="tiposMoneda_defecto"><?= label('tiposMoneda_defecto'); ?></label>
        </div>
        <div class="input-field col s12">
            <input id="moneda_tipoCambio" class="col s6" type="number">
            <label for="tiposMoneda_tipoCambio"><?= label('tiposMoneda_tipoCambio'); ?></label>
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
        <div id="botonElimnar" title="monedas-tabla-lista">
            <a href="#"
               class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>
<!-- Fin lista modals -->