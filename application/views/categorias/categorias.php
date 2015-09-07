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
                                                <table id="categorias-tabla-lista"
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
                                                                        <a href="#verSubcategorias"
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
                                                                        <a href="#verSubcategorias"
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
                                                                        <a href="#verSubcategorias"
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
                                                                        <a href="#verSubcategorias"
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
    $(document).ready( function () {
        $('#categorias-tabla-lista').dataTable( {
            'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0, -1] /* 1st one, start by the right */
            }]
        });
        $('table#categorias-tabla-lista thead th:first').removeClass('sorting_asc').addClass('sorting_disabled');
        $('table#categorias-tabla-lista thead th:nth-child(2)').removeClass('sorting').addClass('sorting_asc');
    });
    $(document).ready(function () {
        $('#checkbox-all').click(function (event) {
            var $this = $(this);
            var tableBody = $('#categorias-tabla-lista').find('tbody tr[role=row] input[type=checkbox]');
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
<div id="eliminarSubcategoria" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarSubcategoria'); ?></p>
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
        <p class="titulo-modal">
            <?= label('Categorias_nuevo'); ?>
        </p>
        <div class="row">
            <div class="col s12">
                <div class="input-field col s12 m6 l8">
                    <input id="categoriaPadre_codigo" type="text">
                    <label for="categoriaPadre_codigo"><?= label('Categorias_codigoNuevo'); ?></label>
                </div>
                <div id="btn-agregarProductosC1" class="col s12 m6 l4">
                    <a class="btn btn-agregarProductos-categoria" href="#"
                       onclick="document.getElementById('productos-categoria1').style.display = 'block';
                                document.getElementById('btn-agregarProductosC1').style.display = 'none';">
                        <?= label('Categorias_agregarProductos') ?>
                    </a>
                </div>
            </div>
            <div class="col s12">
                <div class="input-field col s12 m6 l8">
                    <input id="categoriaPadre_nombre" type="text">
                    <label for="categoriaPadre_nombre"><?= label('Categorias_nombreNuevo'); ?></label>
                </div>
            </div>
            <div class="col s12">
                <div id="productos-categoria1" class="inputTag col s12 m6 l8" style="display: none;">
                    <div id="mediosCliente" class="example tags_mediosContacto">
                        <div class="bs-example">
                            <input placeholder="<?= label('Categorias_annadirProductos'); ?>" type="text"
                                   value=""/>
                        </div>
                    </div>
                    <br>
                </div>
                <div id="btn-agregarSubcategoria1" class="input-field col s12 m6 l8">
                    <a class="btn" href="#"
                       onclick="document.getElementById('nueva-subcategoria1').style.display = 'block';
                                document.getElementById('btn-agregarSubcategoria1').style.display = 'none';">
                        <?= label('Categorias_annadirSubcategoria'); ?>
                    </a>
                </div>
            </div>
        </div>
        <div id="nueva-subcategoria1" style="display: none;">
            <p class="titulo-modal">
                <?= label('Subcategorias_nuevo'); ?>
            </p>
            <div class="row">
                <div class="col s12">
                    <div class="input-field col s12 m6 l8">
                        <input id="subcategoria1_codigo" type="text">
                        <label for="subcategoria1_codigo"><?= label('Subcategorias_codigo'); ?></label>
                    </div>
                    <div id="btn-agregarProductosSC1" class="col s12 m6 l4">
                        <a class="btn btn-agregarProductos-categoria" href="#"
                           onclick="document.getElementById('productos-subcategoria1').style.display = 'block';
                                document.getElementById('btn-agregarProductosSC1').style.display = 'none';">
                            <?= label('Categorias_agregarProductos') ?>
                        </a>
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field col s12 m6 l8">
                        <input id="subcategoria1_nombre" type="text">
                        <label for="subcategoria1_nombre"><?= label('Subcategorias_nombre'); ?></label>
                    </div>
                    <a href="#" class="btn-subcategoria-eliminar" data-toggle="tooltip"
                       title="<?= label('Subcategorias_eliminar') ?>">
                        <i class="mdi-action-delete medium"></i>
                    </a>
                </div>
                <div class="col s12">
                    <div id="productos-subcategoria1" class="inputTag col s12 m6 l8" style="display: none;">
                        <div id="mediosCliente" class="example tags_mediosContacto">
                            <div class="bs-example">
                                <input placeholder="<?= label('Categorias_annadirProductos'); ?>" type="text"
                                       value=""/>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div id="btn-agregarSubcategoria2" class="input-field col s12 m6 l8">
                        <a class="btn" href="#"
                           onclick="document.getElementById('nueva-subcategoria2').style.display = 'block';
                                document.getElementById('btn-agregarSubcategoria2').style.display = 'none';">
                            <?= label('Categorias_annadirOtraSubcategoria'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="nueva-subcategoria2" style="display: none;">
            <p class="titulo-modal">
                <?= label('Subcategorias_nuevo'); ?>
            </p>
            <div class="row">
                <div class="col s12">
                    <div class="input-field col s12 m6 l8">
                        <input id="subcategoria2_codigo" type="text">
                        <label for="subcategoria2_codigo"><?= label('Subcategorias_codigo'); ?></label>
                    </div>
                    <div id="btn-agregarProductosSC2" class="col s12 m6 l4">
                        <a class="btn btn-agregarProductos-categoria" href="#"
                           onclick="document.getElementById('productos-subcategoria2').style.display = 'block';
                                document.getElementById('btn-agregarProductosSC2').style.display = 'none';">
                            <?= label('Categorias_agregarProductos') ?>
                        </a>
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field col s12 m6 l8">
                        <input id="subcategoria2_nombre" type="text">
                        <label for="subcategoria2_nombre"><?= label('Subcategorias_nombre'); ?></label>
                    </div>
                    <a href="#" class="btn-subcategoria-eliminar" data-toggle="tooltip"
                       title="<?= label('Subcategorias_eliminar') ?>">
                        <i class="mdi-action-delete medium"></i>
                    </a>
                </div>
                <div class="col s12">
                    <div id="productos-subcategoria2" class="inputTag col s12 m6 l8" style="display: none;">
                        <div id="mediosCliente" class="example tags_mediosContacto">
                            <div class="bs-example">
                                <input placeholder="<?= label('Categorias_annadirProductos'); ?>" type="text"
                                       value=""/>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="input-field col s12 m6 l8">
                        <a class="btn" href="#" style="">
                            <?= label('Categorias_annadirOtraSubcategoria'); ?>
                        </a>
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
    <div class="modal-content" style="padding: 0;">
        <p class="titulo-modal">
            <?= label('Categorias_editar'); ?>
        </p>
        <div class="row">
            <div class="col s12">
                <div class="input-field col s12 m6 l8">
                    <input id="categoriaPadre_codigo_existente" type="text" value="0001">
                    <label for="categoriaPadre_codigo_existente"><?= label('Categorias_codigoNuevo'); ?></label>
                </div>
                <div id="btn-agregarProductosC1_existente" class="col s12 m6 l4" style="display: none;">
                    <a class="btn btn-agregarProductos-categoria" href="#">
                        <?= label('Categorias_agregarProductos') ?>
                    </a>
                </div>
            </div>
            <div class="col s12">
                <div class="input-field col s12 m6 l8">
                    <input id="categoriaPadre_nombre_existente" type="text" value="Calzado">
                    <label for="categoriaPadre_nombre_existente"><?= label('Categorias_nombreNuevo'); ?></label>
                </div>
            </div>
            <div class="col s12">
                <div id="productos-categoria1_existente" class="inputTag col s12 m6 l8" >
                    <div id="mediosCliente" class="example tags_mediosContacto">
                        <div class="bs-example">
                            <input placeholder="<?= label('Categorias_annadirProductos'); ?>" type="text"
                                   value="Zapatos de mujer,Zapatos deportivos,Zapatos escolares,Tacos,Tennis masculinas"/>
                        </div>
                    </div>
                    <br>
                </div>
                <div id="btn-agregarSubcategoria1_existente" class="input-field col s12 m6 l8" style="display: none;">
                    <a class="btn" href="#">
                        <?= label('Categorias_annadirSubcategoria'); ?>
                    </a>
                </div>
            </div>
        </div>
        <div id="existente-subcategoria1">
            <p class="titulo-modal">
                <?= label('Subcategorias_nuevo'); ?>
            </p>
            <div class="row">
                <div class="col s12">
                    <div class="input-field col s12 m6 l8">
                        <input id="existente_subcategoria1_codigo" type="text" value="0002">
                        <label for="existente_subcategoria1_codigo"><?= label('Subcategorias_codigo'); ?></label>
                    </div>
                    <div id="btn-agregarProductosSC1_existente" class="col s12 m6 l4" style="display: none;">
                        <a class="btn btn-agregarProductos-categoria" href="#">
                            <?= label('Categorias_agregarProductos') ?>
                        </a>
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field col s12 m6 l8">
                        <input id="existente_subcategoria1_nombre" type="text" value="Calzado de mujer">
                        <label for="existente_subcategoria1_nombre"><?= label('Subcategorias_nombre'); ?></label>
                    </div>
                    <a href="#" class="btn-subcategoria-eliminar" data-toggle="tooltip"
                       title="<?= label('Subcategorias_eliminar') ?>">
                        <i class="mdi-action-delete medium"></i>
                    </a>
                </div>
                <div class="col s12">
                    <div id="productos-subcategoria1_existente" class="inputTag col s12 m6 l8">
                        <div id="mediosCliente" class="example tags_mediosContacto">
                            <div class="bs-example">
                                <input placeholder="<?= label('Categorias_annadirProductos'); ?>" type="text"
                                       value="Zapatos de mujer"/>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div id="btn-agregarSubcategoria1_existente" class="input-field col s12 m6 l8" style="display: none;">
                        <a class="btn" href="#">
                            <?= label('Categorias_annadirOtraSubcategoria'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="existente-subcategoria2">
            <p class="titulo-modal">
                <?= label('Subcategorias_nuevo'); ?>
            </p>
            <div class="row">
                <div class="col s12">
                    <div class="input-field col s12 m6 l8">
                        <input id="existente_subcategoria2_codigo" type="text" value="0003">
                        <label for="existente_subcategoria2_codigo"><?= label('Subcategorias_codigo'); ?></label>
                    </div>
                    <div id="btn-agregarProductosSC2_existente" class="col s12 m6 l4" style="display: none;">
                        <a class="btn btn-agregarProductos-categoria" href="#">
                            <?= label('Categorias_agregarProductos') ?>
                        </a>
                    </div>
                </div>
                <div class="col s12">
                    <div class="input-field col s12 m6 l8">
                        <input id="subcategoria2_nombre_existente" type="text" value="Calzado masculino">
                        <label for="subcategoria2_nombre_existente"><?= label('Subcategorias_nombre'); ?></label>
                    </div>
                    <a href="#" class="btn-subcategoria-eliminar" data-toggle="tooltip"
                       title="<?= label('Subcategorias_eliminar') ?>">
                        <i class="mdi-action-delete medium"></i>
                    </a>
                </div>
                <div class="col s12">
                    <div id="productos-subcategoria2_existente" class="inputTag col s12 m6 l8">
                        <div id="mediosCliente" class="example tags_mediosContacto">
                            <div class="bs-example">
                                <input placeholder="<?= label('Categorias_annadirProductos'); ?>" type="text"
                                       value="Zapatos deportivos,Zapatos escolares,Tacos,Tennis masculinas"/>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="input-field col s12 m6 l8">
                        <a class="btn" href="#">
                            <?= label('Categorias_annadirOtraSubcategoria'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="verSubcategorias" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content" style="padding: 0;">
        <p class="titulo-modal">
            <?= label('Categorias_ver'); ?>
        </p>
        <div class="row">
            <div class="col s12">
                <table id="categoria1_subcategorias-tabla-lista"
                       class="responsive-table display"
                       cellspacing="0">
                    <thead>
                        <tr>
                            <th><?= label('Categorias_codigo'); ?></th>
                            <th><?= label('Categorias_nombre'); ?></th>
                            <th><?= label('Categorias_opciones'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0001</td>
                            <td>Calzado</td>
                            <td>
                                <a id="editar-subcategoria1"
                                   class="black-text editar-subcategoria"
                                   href="#" data-toggle="tooltip"
                                   onclick="mostrarEditar('edicion-subcategoria1')"
                                   title="<?= label('menuOpciones_editar') ?>">
                                    <i class="mdi-editor-mode-edit"></i>
                                </a>
                                <a id="eliminar-subcategoria1"
                                   class="black-text"
                                   href="#" data-toggle="tooltip"
                                   title="<?= label('menuOpciones_eliminar') ?>">
                                    <i class="mdi-action-delete"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="edicion-subcategoria">
                            <td colspan="3">
                                <div id="edicion-subcategoria1" style="display: none;">
                                    <div class="input-field col s12 ">
                                        <input id="categoriaPadre_codigo_existente" type="text" value="0001">
                                        <label for="categoriaPadre_codigo_existente"><?= label('Categorias_codigoNuevo'); ?></label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="categoriaPadre_nombre_existente" type="text" value="Calzado">
                                        <label for="categoriaPadre_nombre_existente"><?= label('Categorias_nombreNuevo'); ?></label>
                                    </div>
                                    <div id="productos-categoria1_existente" class="inputTag col s12" >
                                        <div id="mediosCliente" class="example tags_mediosContacto">
                                            <div class="bs-example">
                                                <input placeholder="<?= label('Categorias_annadirProductos'); ?>" type="text"
                                                       value="Zapatos de mujer,Zapatos deportivos,Zapatos escolares,Tacos,Tennis masculinas"/>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                    <div class="input-field col s12 subcategoria-edicion-opciones">
                                        <a class="btn btn-guardarSubcategoria" href="#"
                                           onclick="mostrarEditar('edicion-subcategoria1')">
                                            <?= label('Subcategorias_guardarCambios'); ?>
                                        </a>
                                        <a class="btn btn-cancelarSubcategoria" href="#"
                                           onclick="mostrarEditar('edicion-subcategoria1')">
                                            <?= label('Subcategorias_cancelarCambios'); ?>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>0002</td>
                            <td>Alimentos</td>
                            <td>
                                <a id="editar-subcategoria2"
                                   class="black-text editar-subcategoria"
                                   href="#" data-toggle="tooltip"
                                   onclick="mostrarEditar('edicion-subcategoria2')"
                                   title="<?= label('menuOpciones_editar') ?>">
                                    <i class="mdi-editor-mode-edit"></i>
                                </a>
                                <a id="eliminar-subcategoria2"
                                   class="black-text"
                                   href="#" data-toggle="tooltip"
                                   title="<?= label('menuOpciones_eliminar') ?>">
                                    <i class="mdi-action-delete"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="edicion-subcategoria">
                            <td colspan="3">
                                <div id="edicion-subcategoria2" style="display: none;">
                                    <div class="input-field col s12">
                                        <input id="categoriaPadre_codigo_existente" type="text" value="0002">
                                        <label for="categoriaPadre_codigo_existente"><?= label('Categorias_codigoNuevo'); ?></label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="categoriaPadre_nombre_existente" type="text" value="Alimentos">
                                        <label for="categoriaPadre_nombre_existente"><?= label('Categorias_nombreNuevo'); ?></label>
                                    </div>
                                    <div id="productos-categoria1_existente" class="inputTag col s12" >
                                        <div id="mediosCliente" class="example tags_mediosContacto">
                                            <div class="bs-example">
                                                <input placeholder="<?= label('Categorias_annadirProductos'); ?>" type="text"
                                                       value="Coca Cola,Arroz,Fanta,Fideos"/>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                    <div class="input-field col s12 subcategoria-edicion-opciones">
                                        <a class="btn btn-guardarSubcategoria" href="#"
                                           onclick="mostrarEditar('edicion-subcategoria2')">
                                            <?= label('Subcategorias_guardarCambios'); ?>
                                        </a>
                                        <a class="btn btn-cancelarSubcategoria" href="#"
                                           onclick="mostrarEditar('edicion-subcategoria2')">
                                            <?= label('Subcategorias_cancelarCambios'); ?>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>0003</td>
                            <td>Zapatos de hombre</td>
                            <td>
                                <a id="editar-subcategoria3"
                                   class="black-text editar-subcategoria"
                                   href="#" data-toggle="tooltip"
                                   onclick="mostrarEditar('edicion-subcategoria3')"
                                   title="<?= label('menuOpciones_editar') ?>">
                                    <i class="mdi-editor-mode-edit"></i>
                                </a>
                                <a id="eliminar-subcategoria3"
                                   class="black-text"
                                   href="#" data-toggle="tooltip"
                                   title="<?= label('menuOpciones_eliminar') ?>">
                                    <i class="mdi-action-delete"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="edicion-subcategoria">
                            <td colspan="3">
                                <div id="edicion-subcategoria3" style="display: none;">
                                    <div class="input-field col s12">
                                        <input id="categoriaPadre_codigo_existente" type="text" value="0003">
                                        <label for="categoriaPadre_codigo_existente"><?= label('Categorias_codigoNuevo'); ?></label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="categoriaPadre_nombre_existente" type="text" value="Zapatos de hombre">
                                        <label for="categoriaPadre_nombre_existente"><?= label('Categorias_nombreNuevo'); ?></label>
                                    </div>
                                    <div id="productos-categoria1_existente" class="inputTag col s12" >
                                        <div id="mediosCliente" class="example tags_mediosContacto">
                                            <div class="bs-example">
                                                <input placeholder="<?= label('Categorias_annadirProductos'); ?>" type="text"
                                                       value="Zapatos escolares,Tacos,Tennis masculinas"/>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                    <div class="input-field col s12 subcategoria-edicion-opciones">
                                        <a class="btn btn-guardarSubcategoria" href="#"
                                           onclick="mostrarEditar('edicion-subcategoria3')">
                                            <?= label('Subcategorias_guardarCambios'); ?>
                                        </a>
                                        <a class="btn btn-cancelarSubcategoria" href="#"
                                           onclick="mostrarEditar('edicion-subcategoria3')">
                                            <?= label('Subcategorias_cancelarCambios'); ?>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>0004</td>
                            <td>Enlatados</td>
                            <td>
                                <a id="editar-subcategoria3"
                                   class="black-text editar-subcategoria"
                                   href="#" data-toggle="tooltip"
                                   onclick="mostrarEditar('edicion-subcategoria4')"
                                   title="<?= label('menuOpciones_editar') ?>">
                                    <i class="mdi-editor-mode-edit"></i>
                                </a>
                                <a id="eliminar-subcategoria3"
                                   class="black-text"
                                   href="#" data-toggle="tooltip"
                                   title="<?= label('menuOpciones_eliminar') ?>">
                                    <i class="mdi-action-delete"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="edicion-subcategoria">
                            <td colspan="3">
                                <div id="edicion-subcategoria4" style="display: none;">
                                    <div class="input-field col s12">
                                        <input id="categoriaPadre_codigo_existente" type="text" value="0004">
                                        <label for="categoriaPadre_codigo_existente"><?= label('Categorias_codigoNuevo'); ?></label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="categoriaPadre_nombre_existente" type="text" value="Enlatados">
                                        <label for="categoriaPadre_nombre_existente"><?= label('Categorias_nombreNuevo'); ?></label>
                                    </div>
                                    <div id="productos-categoria1_existente" class="inputTag col s12" >
                                        <div id="mediosCliente" class="example tags_mediosContacto">
                                            <div class="bs-example">
                                                <input placeholder="<?= label('Categorias_annadirProductos'); ?>" type="text"
                                                       value="Sopa,Duraznos,Frutas"/>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                    <div class="input-field col s12 subcategoria-edicion-opciones">
                                        <a class="btn btn-guardarSubcategoria" href="#"
                                           onclick="mostrarEditar('edicion-subcategoria4')">
                                            <?= label('Subcategorias_guardarCambios'); ?>
                                        </a>
                                        <a class="btn btn-cancelarSubcategoria" href="#"
                                           onclick="mostrarEditar('edicion-subcategoria4')">
                                            <?= label('Subcategorias_cancelarCambios'); ?>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
        <div id="botonElimnar" title="categorias-tabla-lista">
            <a href="#"
               class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>

<script>
    function mostrarEditar(idEdicion) {
        var v = document.getElementById(idEdicion).style.display;
        if(v == 'none') {
            document.getElementById(idEdicion).style.display = 'block';
        } else {
            document.getElementById(idEdicion).style.display = 'none';
        }
    }
</script>
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