<!-- START CONTENT  -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('Categorias_titulo'); ?></h1>
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
                                                    <a href="#agregarCategoria"
                                                       class="btn modal-trigger"><?= label('Categorias_nuevo'); ?></a>
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
                                                            <th><?= label('Categorias_codigo'); ?></th>
                                                            <th><?= label('Categorias_nombre'); ?></th>
                                                            <th><?= label('Categorias_opciones'); ?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox"
                                                                       id="checkbox_categoria1"/>
                                                                <label for="checkbox_categoria1"></label>
                                                            </td>
                                                            <td>0001</td>
                                                            <td>Calzado</td>
                                                            <td>
                                                                <ul id="dropdown-categoria1" class="dropdown-content">
                                                                    <li>
                                                                        <a href="#verCategoria"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_verCategoria') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#editarCategoria"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarCategoria"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                   href="#" data-activates="dropdown-categoria1">
                                                                    <?= label('menuOpciones_seleccionar') ?><i
                                                                        class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox"
                                                                       id="checkbox_categoria2"/>
                                                                <label for="checkbox_categoria2"></label>
                                                            </td>
                                                            <td>0002</td>
                                                            <td>Alimentos</td>
                                                            <td>
                                                                <ul id="dropdown-categoria2" class="dropdown-content">
                                                                    <li>
                                                                        <a href="#verCategoria"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_verCategoria') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#editarCategoria"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarCategoria"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                   href="#" data-activates="dropdown-categoria2">
                                                                    <?= label('menuOpciones_seleccionar') ?><i
                                                                        class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox"
                                                                       id="checkbox_categoria3"/>
                                                                <label for="checkbox_categoria3"></label>
                                                            </td>
                                                            <td>0003</td>
                                                            <td>Zapatos de hombre</td>
                                                            <td>
                                                                <ul id="dropdown-categoria3" class="dropdown-content">
                                                                    <li>
                                                                        <a href="#verCategoria"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_verCategoria') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#editarCategoria"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarCategoria"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                   href="#" data-activates="dropdown-categoria3">
                                                                    <?= label('menuOpciones_seleccionar') ?><i
                                                                        class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox"
                                                                       id="checkbox_categoria4"/>
                                                                <label for="checkbox_categoria4"></label>
                                                            </td>
                                                            <td>0004</td>
                                                            <td>Enlatados</td>
                                                            <td>
                                                                <ul id="dropdown-categoria4" class="dropdown-content">
                                                                    <li>
                                                                        <a href="#verCategoria"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_verCategoria') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#editarCategoria"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarCategoria"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                   href="#" data-activates="dropdown-categoria4">
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

<!-- lista modals -->
<div id="eliminarCategoria" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarCategoria'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="agregarCategoria" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content" style="padding: 0;">
        <p style="font-size: larger; text-align: left; margin-left: 2%; font-weight: bold;">
            <?= label('Categorias_nuevo'); ?>
        </p>
        <div class="row">
            <div class="col s12">
                <div class="input-field col s12 m6 l8">
                    <input id="gasto_nombre" type="text">
                    <label for="gasto_nombre"><?= label('Categorias_codigo'); ?></label>
                </div>
                <a class="btn" href="#" style="margin-top: 13px;"
                   onclick="document.getElementById('mediosCliente').style.display = 'block';">
                    Agregar productos
                </a>
            </div>
            <div class="col s12">
                <div class="input-field col s12 m6 l8">
                    <input id="gasto_monto" type="text">
                    <label for="gasto_monto"><?= label('Categorias_nombre'); ?></label>
                </div>
            </div>
            <div class="col s12">
                <div class="inputTag col s12 m6 l8">
                    <div id="mediosCliente" class="example tags_mediosContacto" style="display: none;">
                        <div class="bs-example">
                            <input placeholder="<?= label('Categorias_annadir'); ?>" type="text"
                                   value="Zapatos de mujer,Zapatos deportivos"/>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="input-field col s12 m6 l8">
                    <a class="btn" href="#"
                       onclick="document.getElementById('nueva-subcategoria').style.display = 'block';">
                        Agregar subcategoria
                    </a>
                </div>
            </div>
        </div>
        <div id="nueva-subcategoria" style="display: none;">
            <p style="font-size: larger; text-align: left; margin-left: 2%; font-weight: bold;">
                <?= label('Subcategorias_nuevo'); ?>
            </p>
            <div class="row">
                <div class="col s12">
                    <div class="input-field col s12 m6 l8">
                        <input id="gasto_nombre" type="text">
                        <label for="gasto_nombre"><?= label('Subcategorias_codigo'); ?></label>
                    </div>
                    <a class="btn" href="#" style="margin-top: 13px;">Agregar productos</a>
                </div>
                <div class="col s12">
                    <div class="input-field col s12 m6 l8">
                        <input id="gasto_monto" type="text">
                        <label for="gasto_monto"><?= label('Subcategorias_nombre'); ?></label>
                    </div>
                    <a href="#" style="margin-top: 13px;">
                        <i class="mdi-action-delete medium" style="color: black;"></i>
                    </a>
                </div>
                <div class="col s12">
                    <div class="inputTag col s12 m6 l8">
                        <div id="mediosCliente" class="example tags_mediosContacto">
                            <div class="bs-example">
                                <input placeholder="<?= label('Categorias_annadirProducto'); ?>" type="text"
                                       value=""/>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="input-field col s12 m6 l8">
                        <a class="btn" href="#" style="">Agregar otra subcategoria</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="editarCategoria" class="modal">
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

<script>
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
</script>

<!-- Fin lista modals -->