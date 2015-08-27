<!-- START CONTENT -->

<section id="content">

    <!--start container-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloProductosServicios'); ?></h1>
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
                                                    <ul id="dropdown-agregarNuevo" class="dropdown-content">
                                                        <li>
                                                            <a href="<?= base_url(); ?>servicios/agregar"
                                                               class="-text"><?= label('menuOpciones_agregarServicio') ?></a>
                                                        </li>
                                                        <li>
                                                            <a href="<?= base_url(); ?>productos/agregar"
                                                               class="-text"><?= label('menuOpciones_agregarProducto') ?></a>
                                                        </li>
                                                        <li>
                                                            <a href="#agregarCategoria"
                                                               class="-text modal-trigger"><?= label('menuOpciones_agregarCategoria') ?></a>
                                                        </li>
                                                    </ul>
                                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                       href="#" data-activates="dropdown-agregarNuevo">
                                                        <?= label('ProductosServicios_nuevo') ?><i
                                                            class="mdi-navigation-arrow-drop-down"></i>
                                                    </a>
                                                </div>
                                                <a id="busqueda-avanzada-agregar" href="#busquedaAvanzadaPS"
                                                   class="modal-trigger"><?= label('ProductosServicios_busquedaAvanzada') ?></a>
                                                <table id="tabla-productosServicios-lista"
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
                                                            <th><?= label('ProductosServicios_tablaCodigo'); ?></th>
                                                            <th><?= label('ProductosServicios_tablaNombre'); ?></th>
                                                            <th><?= label('ProductosServicios_tablaDescripcion'); ?></th>
                                                            <th><?= label('ProductosServicios_tablaCantidad'); ?></th>
                                                            <th><?= label('ProductosServicios_tablaPrecioUnitario'); ?></th>
                                                            <th><?= label('ProductosServicios_tablaImpuestos'); ?></th>
                                                            <th><?= label('ProductosServicios_tablaPrecioFinal'); ?></th>
                                                            <th><?= label('ProductosServicios_tablaOpciones'); ?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox"
                                                                       id="checkbox_servicio1"/>
                                                                <label for="checkbox_servicio1"></label>
                                                            </td>
                                                            <td>s-0001</td>
                                                            <td><a href="<?= base_url() ?>servicios/editar">Aplicación móvil</a></td>
                                                            <td>Aplicación móvil para SO android</td>
                                                            <td>NA</td>
                                                            <td>$500</td>
                                                            <td>Impuesto1, Impuesto2</td>
                                                            <td>$750</td>
                                                            <td>
                                                                <ul id="dropdown-servicio1" class="dropdown-content">
                                                                    <li>
                                                                        <a href="<?= base_url(); ?>servicios/editar"
                                                                           class="-text"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarElemento"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#cambiarCategoria"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_cambiarCategoria') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#desactivarElemento"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_desactivar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                   href="#" data-activates="dropdown-servicio1">
                                                                    <?= label('menuOpciones_seleccionar') ?><i
                                                                        class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox"
                                                                       id="checkbox_producto1"/>
                                                                <label for="checkbox_producto1"></label>
                                                            </td>
                                                            <td>p-0001</td>
                                                            <td>
                                                                <a href="<?= base_url() ?>productos/editar">Coca Cola</a>
                                                            </td>
                                                            <td>Envase de 2 litros</td>
                                                            <td>100 U</td>
                                                            <td>$3</td>
                                                            <td>Impuesto1, Impuesto2</td>
                                                            <td>$4</td>
                                                            <td>
                                                                <ul id="dropdown-producto1" class="dropdown-content">
                                                                    <li>
                                                                        <a href="<?= base_url(); ?>productos/editar"
                                                                           class="-text"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarElemento"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#cambiarCategoria"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_cambiarCategoria') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#desactivarElemento"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_desactivar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                   href="#" data-activates="dropdown-producto1">
                                                                    <?= label('menuOpciones_seleccionar') ?><i
                                                                        class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox"
                                                                       id="checkbox_servicio2"/>
                                                                <label for="checkbox_servicio2"></label>
                                                            </td>
                                                            <td>s-0002</td>
                                                            <td><a href="<?= base_url() ?>servicios/editar">Hosting</a></td>
                                                            <td>Servicio de hosting por un mes</td>
                                                            <td>NA</td>
                                                            <td>$50</td>
                                                            <td>Impuesto2</td>
                                                            <td>$75</td>
                                                            <td>
                                                                <ul id="dropdown-servicio2" class="dropdown-content">
                                                                    <li>
                                                                        <a href="<?= base_url(); ?>servicios/editar"
                                                                           class="-text"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarElemento"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#cambiarCategoria"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_cambiarCategoria') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#desactivarElemento"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_desactivar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                   href="#" data-activates="dropdown-servicio2">
                                                                    <?= label('menuOpciones_seleccionar') ?><i
                                                                        class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox"
                                                                       id="checkbox_producto2"/>
                                                                <label for="checkbox_producto2"></label>
                                                            </td>
                                                            <td>p-0002</td>
                                                            <td>
                                                                <a href="<?= base_url() ?>productos/editar">Fanta</a>
                                                            </td>
                                                            <td>Envase de 1.5 litros</td>
                                                            <td>150 U</td>
                                                            <td>$2.5</td>
                                                            <td>Impuesto1, Impuesto2</td>
                                                            <td>$3.5</td>
                                                            <td>
                                                                <ul id="dropdown-producto2" class="dropdown-content">
                                                                    <li>
                                                                        <a href="<?= base_url(); ?>productos/editar"
                                                                           class="-text"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarElemento"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#cambiarCategoria"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_cambiarCategoria') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#desactivarElemento"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_desactivar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                   href="#" data-activates="dropdown-producto2">
                                                                    <?= label('menuOpciones_seleccionar') ?><i
                                                                        class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox"
                                                                       id="checkbox_servicio3"/>
                                                                <label for="checkbox_servicio3"></label>
                                                            </td>
                                                            <td>s-0003</td>
                                                            <td><a href="<?= base_url() ?>servicios/editar">Sitio de
                                                                    cotizaciones</a></td>
                                                            <td>Sitio de cotizaciones en linea</td>
                                                            <td>NA</td>
                                                            <td>$15.000</td>
                                                            <td>Impuesto1, Impuesto2, Impuesto3</td>
                                                            <td>$20.000</td>
                                                            <td>
                                                                <ul id="dropdown-servicio3" class="dropdown-content">
                                                                    <li>
                                                                        <a href="<?= base_url(); ?>servicios/editar"
                                                                           class="-text"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarElemento"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#cambiarCategoria"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_cambiarCategoria') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#desactivarElemento"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_desactivar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                   href="#" data-activates="dropdown-servicio3">
                                                                    <?= label('menuOpciones_seleccionar') ?><i
                                                                        class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="tabla-conAgregar tabla-opciones-serviciosProductos">
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
                                                    <a id="opciones-seleccionados-cotizar"
                                                       class="waves-effect black-text opciones-seleccionados option-cotizar-elements"
                                                       style="visibility: hidden;"
                                                       href="<?= base_url() ?>cotizacion/cotizar" data-toggle="tooltip"
                                                       title="<?= label('opciones_seleccionadosCotizar') ?>">
                                                        <i class="mdi-editor-format-list-numbered icono-opciones-varios"></i>
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
        $('#checkbox-all').click(function (event) {
            if (this.checked) {
                $('.checkbox').each(function () {
                    this.checked = true;
                });
            } else {
                $('.checkbox').each(function () {
                    this.checked = false;
                });
            }
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

<script>
    function searchTable(inputVal) {
        var table = $('#categorias');
        table.find('tr').each(function (index, row) {
            var allCells = $(row).find('td');
            if (allCells.length > 0) {
                var found = false;
                allCells.each(function (index, td) {
                    var regExp = new RegExp(inputVal, 'i');
                    if (regExp.test($(td).text())) {
                        found = true;
                        return false;
                    }
                });
                if (found == true) {
                    $(row).show();
                } else {
                    $(row).hide();
                }
            }
        });
    }
    $(document).ready(function () {
        $("#categorias").agikiTreeTable({
            persist: true, persistStoreName: "files"
        });
    });
    function toggle_visibility(id) {
        var e = document.getElementById(id);
        if (e.style.display == 'block')
            e.style.display = 'none';
        else
            e.style.display = 'block';
    }
</script>

<!-- lista modals -->
<div id="eliminarElemento" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarProductoServicio'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="cambiarCategoria" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('ProductosServicios_seleccionarCategorias'); ?></p>
        <h5 style="margin: 15px 0;">Coca-Cola</h5>
        <div class="row">
            <p style="text-align: left;"><?= label('ProductosServicios_categorias'); ?></p>
            <div class="col s12 m3 l3">
                <table id="categorias1" class="table table-responsive tabla-categorias" >
                    <thead>
                        <tr>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-tt-id="1">
                            <td>
                                <span class="nivel1">
                                    <input type="checkbox" class="filled-in" id="categoria1" >
                                    <label for="categoria1">Productos</label>
                                </span>
                            </td>
                        </tr>
                        <tr data-tt-id="2" data-tt-parent-id="1">
                            <td>
                                <span class="nivel2">
                                    <input type="checkbox" class="filled-in" id="categoria1_1" checked="checked">
                                    <label for="categoria1_1">Alimentos</label>
                                </span>
                            </td>
                        </tr>
                        <tr data-tt-id="3" data-tt-parent-id="1">
                            <td>
                                <span class="nivel2">
                                    <input type="checkbox" class="filled-in" id="categoria1_2" >
                                    <label for="categoria1_2">Gaseosas</label>
                                </span>
                            </td>
                        </tr>
                        <tr data-tt-id="4" data-tt-parent-id="1">
                            <td>
                                <span class="nivel2">
                                    <input type="checkbox" class="filled-in" id="categoria1_3" checked="checked">
                                    <label for="categoria1_3">Otros</label>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col s12 m3 l3">
                <table id="categorias2" class="table table-responsive tabla-categorias" >
                    <thead>
                        <tr>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-tt-id="1">
                            <td>
                                <span class="nivel1">
                                    <input type="checkbox" class="filled-in" id="categoria1" >
                                    <label for="categoria1">Productos</label>
                                </span>
                            </td>
                        </tr>
                        <tr data-tt-id="2" data-tt-parent-id="1">
                            <td>
                                <span class="nivel2">
                                    <input type="checkbox" class="filled-in" id="categoria1_1" >
                                    <label for="categoria1_1">Alimentos</label>
                                </span>
                            </td>
                        </tr>
                        <tr data-tt-id="3" data-tt-parent-id="1">
                            <td>
                                <span class="nivel2">
                                    <input type="checkbox" class="filled-in" id="categoria1_2" checked="checked">
                                    <label for="categoria1_2">Gaseosas</label>
                                </span>
                            </td>
                        </tr>
                        <tr data-tt-id="4" data-tt-parent-id="1">
                            <td>
                                <span class="nivel2">
                                    <input type="checkbox" class="filled-in" id="categoria1_3" >
                                    <label for="categoria1_3">Otros</label>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col s12 m3 l3">
                <table id="categorias3" class="table table-responsive tabla-categorias" >
                    <thead>
                        <tr>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-tt-id="1">
                            <td>
                                <span class="nivel1">
                                    <input type="checkbox" class="filled-in" id="categoria1" checked="checked">
                                    <label for="categoria1">Productos</label>
                                </span>
                            </td>
                        </tr>
                        <tr data-tt-id="2" data-tt-parent-id="1">
                            <td>
                                <span class="nivel2">
                                    <input type="checkbox" class="filled-in" id="categoria1_1" checked="checked">
                                    <label for="categoria1_1">Alimentos</label>
                                </span>
                            </td>
                        </tr>
                        <tr data-tt-id="3" data-tt-parent-id="1">
                            <td>
                                <span class="nivel2">
                                    <input type="checkbox" class="filled-in" id="categoria1_2" >
                                    <label for="categoria1_2">Gaseosas</label>
                                </span>
                            </td>
                        </tr>
                        <tr data-tt-id="4" data-tt-parent-id="1">
                            <td>
                                <span class="nivel2">
                                    <input type="checkbox" class="filled-in" id="categoria1_3" >
                                    <label for="categoria1_3">Otros</label>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col s12 m3 l3">
                <table id="categorias4" class="table table-responsive tabla-categorias" >
                    <thead>
                        <tr>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-tt-id="1">
                            <td>
                                <span class="nivel1">
                                    <input type="checkbox" class="filled-in" id="categoria1" >
                                    <label for="categoria1">Productos</label>
                                </span>
                            </td>
                        </tr>
                        <tr data-tt-id="2" data-tt-parent-id="1">
                            <td>
                                <span class="nivel2">
                                    <input type="checkbox" class="filled-in" id="categoria1_1" >
                                    <label for="categoria1_1">Alimentos</label>
                                </span>
                            </td>
                        </tr>
                        <tr data-tt-id="3" data-tt-parent-id="1">
                            <td>
                                <span class="nivel2">
                                    <input type="checkbox" class="filled-in" id="categoria1_2" checked="checked">
                                    <label for="categoria1_2">Gaseosas</label>
                                </span>
                            </td>
                        </tr>
                        <tr data-tt-id="4" data-tt-parent-id="1">
                            <td>
                                <span class="nivel2">
                                    <input type="checkbox" class="filled-in" id="categoria1_3" checked="checked">
                                    <label for="categoria1_3">Otros</label>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col s12 m3 l3">
                <table id="categorias5" class="table table-responsive tabla-categorias" >
                    <thead>
                        <tr>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-tt-id="1">
                            <td>
                                <span class="nivel1">
                                    <input type="checkbox" class="filled-in" id="categoria1" checked="checked">
                                    <label for="categoria1">Productos</label>
                                </span>
                            </td>
                        </tr>
                        <tr data-tt-id="2" data-tt-parent-id="1">
                            <td>
                                <span class="nivel2">
                                    <input type="checkbox" class="filled-in" id="categoria1_1" >
                                    <label for="categoria1_1">Alimentos</label>
                                </span>
                            </td>
                        </tr>
                        <tr data-tt-id="3" data-tt-parent-id="1">
                            <td>
                                <span class="nivel2">
                                    <input type="checkbox" class="filled-in" id="categoria1_2" >
                                    <label for="categoria1_2">Gaseosas</label>
                                </span>
                            </td>
                        </tr>
                        <tr data-tt-id="4" data-tt-parent-id="1">
                            <td>
                                <span class="nivel2">
                                    <input type="checkbox" class="filled-in" id="categoria1_3" >
                                    <label for="categoria1_3">Otros</label>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col s12 m3 l3">
                <table id="categorias6" class="table table-responsive tabla-categorias" >
                    <thead>
                        <tr>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-tt-id="1">
                            <td>
                                <span class="nivel1">
                                    <input type="checkbox" class="filled-in" id="categoria1" >
                                    <label for="categoria1">Productos</label>
                                </span>
                            </td>
                        </tr>
                        <tr data-tt-id="2" data-tt-parent-id="1">
                            <td>
                                <span class="nivel2">
                                    <input type="checkbox" class="filled-in" id="categoria1_1" checked="checked">
                                    <label for="categoria1_1">Alimentos</label>
                                </span>
                            </td>
                        </tr>
                        <tr data-tt-id="3" data-tt-parent-id="1">
                            <td>
                                <span class="nivel2">
                                    <input type="checkbox" class="filled-in" id="categoria1_2" >
                                    <label for="categoria1_2">Gaseosas</label>
                                </span>
                            </td>
                        </tr>
                        <tr data-tt-id="4" data-tt-parent-id="1">
                            <td>
                                <span class="nivel2">
                                    <input type="checkbox" class="filled-in" id="categoria1_3" >
                                    <label for="categoria1_3">Otros</label>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col s12 m3 l3">
                <table id="categorias7" class="table table-responsive tabla-categorias" >
                    <thead>
                        <tr>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-tt-id="1">
                            <td>
                                <span class="nivel1">
                                    <input type="checkbox" class="filled-in" id="categoria1" >
                                    <label for="categoria1">Productos</label>
                                </span>
                            </td>
                        </tr>
                        <tr data-tt-id="2" data-tt-parent-id="1">
                            <td>
                                <span class="nivel2">
                                    <input type="checkbox" class="filled-in" id="categoria1_1" >
                                    <label for="categoria1_1">Alimentos</label>
                                </span>
                            </td>
                        </tr>
                        <tr data-tt-id="3" data-tt-parent-id="1">
                            <td>
                                <span class="nivel2">
                                    <input type="checkbox" class="filled-in" id="categoria1_2" >
                                    <label for="categoria1_2">Gaseosas</label>
                                </span>
                            </td>
                        </tr>
                        <tr data-tt-id="4" data-tt-parent-id="1">
                            <td>
                                <span class="nivel2">
                                    <input type="checkbox" class="filled-in" id="categoria1_3" checked="checked">
                                    <label for="categoria1_3">Otros</label>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="activarElemento" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarActivarProductoServicio'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="desactivarElemento" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarDesactivarProductoServicio'); ?></p>
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
        <div id="botonElimnar" title="tabla-productosServicios-lista">
            <a href="#"
               class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>
<div id="busquedaAvanzadaPS" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div id="formGeneral" class="section" style="padding-bottom: 0;">
            <div class="row" style="margin-bottom: 0;">
                <div class="row">
                    <div class="input-field col s12 m4 l4">
                        <div class="input-field col s12">
                            <input id="busquedaPs_codigo" type="text">
                            <label id="busqueda_codigo" for="busquedaPs_codigo"
                                   class=""><?= label('busquedaPS_codigo') ?></label>
                        </div>
                    </div>
                    <div class="input-field col s12 m4 l4">
                        <div class="input-field col s12">
                            <select>
                                <option value="0" selected><?= label('busquedaPS_todos'); ?></option>
                                <option value="1"><?= label('busquedaPS_productos'); ?></option>
                                <option value="2"><?= label('busquedaPS_servicios'); ?></option>
                            </select>
                            <label for="elemento_tipo"><?= label('busquedaPS_tipo'); ?></label>
                        </div>
                    </div>
                    <div class="input-field col s12 m4 l4">
                        <div class="input-field col s12">
                            <select>
                                <option value="0" selected><?= label('busquedaPS_todos'); ?></option>
                                <option value="1">TI</option>
                                <option value="2">Refrescos</option>
                                <option value="3">Zapatos</option>
                                <option value="4">Apps</option>
                                <option value="5">Sistemas</option>
                                <option value="6">Hosting</option>
                            </select>
                            <label for="elemento_tipo"><?= label('busquedaPS_categoria'); ?></label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6 l6">
                        <div class="input-field col s12">
                            <select>
                                <option value="0" selected><?= label('busquedaPS_todos'); ?></option>
                                <option value="1">Coca Cola</option>
                                <option value="2">Fanta</option>
                                <option value="3">Tennis Adidas</option>
                                <option value="4">Tennis Nike</option>
                            </select>
                            <label for="elemento_tipo"><?= label('busquedaPS_elementos'); ?></label>
                        </div>
                    </div>
                    <div class="input-field col s12 m3 l3">
                        <div class="input-field col s12">
                            <input id="busquedaPs_precioDesde" type="text">
                            <label id="precio-desde" for="busquedaPs_precioDesde"
                                   class=""><?= label('busquedaPS_precioDesde') ?></label>
                        </div>
                    </div>
                    <div class="input-field col s12 m3 l3">
                        <div class="input-field col s12">
                            <input id="busquedaPs_precioHasta" type="text">
                            <label id="precio-hasta" for="busquedaPs_precioHasta"
                                   class=""><?= label('busquedaPS_precioHasta') ?></label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m4 l4">
                        <div class="input-field col s12">
                            <select>
                                <option value="0" selected><?= label('busquedaPS_todos'); ?></option>
                                <option value="1">Activos</option>
                                <option value="2">Innactivos</option>
                            </select>
                            <label for="elemento_estado"><?= label('busquedaPS_estado'); ?></label>
                        </div>
                    </div>
                    <div class="input-field col s12 m4 l4">
                        <div class="input-field col s12">
                            <select>
                                <option value="0" selected><?= label('busquedaPS_todos'); ?></option>
                                <option value="1">Impuesto1</option>
                                <option value="1">Impuesto2</option>
                                <option value="1">Impuesto3</option>
                                <option value="1">Impuesto4</option>
                            </select>
                            <label for="elemento_impuesto"><?= label('busquedaPS_impuesto'); ?></label>
                        </div>
                    </div>
                    <div class="input-field col s12 m4 l4">
                        <div class="input-field col s12">
                            <select>
                                <option value="0" selected><?= label('busquedaPS_todos'); ?></option>
                                <option value="1">Kilos</option>
                                <option value="2">Litros</option>
                                <option value="3">Unidades</option>
                                <option value="3">NA</option>
                            </select>
                            <label for="elemento_unidad"><?= label('busquedaPS_unidad'); ?></label>
                        </div>
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
