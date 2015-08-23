<section id="content">

    <!-- start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="breadcrumbs-title"><?=label('tituloProducto')?></h5>
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
                                <div id="card_productos" class="card">
                                    <div id="tableHeader">
                                        <div class="dataTables_filter search">
                                            <label><?=label('Producto_tablaBusqueda');?></label>
                                            <input id="search" type="search" aria-controls="data-table-simple">
                                        </div>
                                    </div>
                                    <div id="table" class="table-responsive">
                                        <table id="productos-tabla-lista" class="table display striped" cellspacing="0" data-search="true">
                                            <thead>
                                                <tr>
                                                    <th style="text-align: center;">
                                                        <input class="filled-in checkbox checkall" type="checkbox" id="checkbox-all" onclick="toggleChecked(this.checked)"/>
                                                        <label for="checkbox-all"></label>
                                                    </th>
                                                    <th><?=label('Producto_tablaNombre')?></th>
                                                    <th><?=label('Producto_tablaCodigo')?></th>
                                                    <th><?=label('Producto_tablaDescripcion')?></th>
                                                    <th><?=label('Producto_tablaPrecio')?></th>
                                                    <th><?=label('Producto_tablaOpciones')?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr data-tt-id="1">
                                                    <td style="text-align: center;">
                                                        <input type="checkbox" class="filled-in checkbox" id="checkbox_producto1" />
                                                        <label for="checkbox_producto1"></label>
                                                    </td>
                                                    <td><span class="nivel1">Productos</span></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <ul id="dropdown-producto1" class="dropdown-content">
                                                            <li>
                                                                <a href="#agregarCategoría" class="-text modal-trigger"><?=label('menuOpciones_agregarCategoria')?></a>
                                                            </li>
                                                            <li>
                                                                <a href="#editarCategoría" class="-text modal-trigger"><?=label('menuOpciones_editar')?></a>
                                                            </li>
                                                        </ul>
                                                        <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-producto1">
                                                            <?=label('menuOpciones_seleccionar')?><i class="mdi-navigation-arrow-drop-down"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-tt-id="2" data-tt-parent-id="1">
                                                    <td style="text-align: center;">
                                                        <input type="checkbox" class="filled-in checkbox" id="checkbox_producto2" />
                                                        <label for="checkbox_producto2"></label>
                                                    </td>
                                                    <td><span class="nivel2">Alimentacion</span></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <ul id="dropdown-producto2" class="dropdown-content">
                                                            <li>
                                                                <a href="<?=base_url()?>productos/agregar" class="-text"><?=label('menuOpciones_agregarProducto')?></a>
                                                            </li>
                                                            <li>
                                                                <a href="#editarCategoría" class="-text modal-trigger"><?=label('menuOpciones_editar')?></a>
                                                            </li>
                                                            <li>
                                                                <a href="#eliminarElemento" class="-text modal-trigger"><?=label('menuOpciones_eliminar')?></a>
                                                            </li>
                                                        </ul>
                                                        <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-producto2">
                                                            <?=label('menuOpciones_seleccionar')?><i class="mdi-navigation-arrow-drop-down"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-tt-id="3" data-tt-parent-id="2">
                                                    <td style="text-align: center;">
                                                        <input type="checkbox" class="filled-in checkbox" id="checkbox_producto3" />
                                                        <label for="checkbox_producto3"></label>
                                                    </td>
                                                    <td>
                                                        <span class="nivel3"><a href="<?=base_url()?>productos/editar">Arroz</a></span>
                                                    </td>
                                                    <td>00005</td>
                                                    <td>Paquete de 2 Kg</td>
                                                    <td>$2</td>
                                                    <td>
                                                        <ul id="dropdown-producto3" class="dropdown-content">
                                                            <li>
                                                                <a href="<?=base_url()?>productos/editar" class="-text"><?=label('menuOpciones_editar')?></a>
                                                            </li>
                                                            <li>
                                                                <a href="#eliminarElemento" class="-text modal-trigger"><?=label('menuOpciones_eliminar')?></a>
                                                            </li>
                                                        </ul>
                                                        <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-producto3">
                                                            <?=label('menuOpciones_seleccionar')?><i class="mdi-navigation-arrow-drop-down"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-tt-id="4" data-tt-parent-id="1">
                                                    <td style="text-align: center;">
                                                        <input type="checkbox" class="filled-in checkbox" id="checkbox_producto4" />
                                                        <label for="checkbox_producto4"></label>
                                                    </td>
                                                    <td><span class="nivel2">Bebidas</span></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <ul id="dropdown-producto4" class="dropdown-content">
                                                            <li>
                                                                <a href="#agregarCategoría" class="-text modal-trigger"><?=label('menuOpciones_agregarProducto')?></a>
                                                            </li>
                                                            <li>
                                                                <a href="#editarCategoría" class="-text modal-trigger"><?=label('menuOpciones_editar')?></a>
                                                            </li>
                                                            <li>
                                                                <a href="#eliminarElemento" class="-text modal-trigger"><?=label('menuOpciones_eliminar')?></a>
                                                            </li>
                                                        </ul>
                                                        <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-producto4">
                                                            <?=label('menuOpciones_seleccionar')?><i class="mdi-navigation-arrow-drop-down"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-tt-id="5" data-tt-parent-id="4">
                                                    <td style="text-align: center;">
                                                        <input type="checkbox" class="filled-in checkbox" id="checkbox_producto5" />
                                                        <label for="checkbox_producto5"></label>
                                                    </td>
                                                    <td><span class="nivel3">Gaseosas</span></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <ul id="dropdown-producto5" class="dropdown-content">
                                                            <li>
                                                                <a href="<?=base_url()?>productos/agregar" class="-text"><?=label('menuOpciones_agregarProducto')?></a>
                                                            </li>
                                                            <li>
                                                                <a href="#editarCategoría" class="-text modal-trigger"><?=label('menuOpciones_editar')?></a>
                                                            </li>
                                                            <li>
                                                                <a href="#eliminarElemento" class="-text modal-trigger"><?=label('menuOpciones_eliminar')?></a>
                                                            </li>
                                                        </ul>
                                                        <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-producto5">
                                                            <?=label('menuOpciones_seleccionar')?><i class="mdi-navigation-arrow-drop-down"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-tt-id="6" data-tt-parent-id="5">
                                                    <td style="text-align: center;">
                                                        <input type="checkbox" class="filled-in checkbox" id="checkbox_producto6" />
                                                        <label for="checkbox_producto6"></label>
                                                    </td>
                                                    <td>
                                                        <span class="nivel4"><a href="<?=base_url()?>productos/editar">Coca Cola</a></span>
                                                    </td>
                                                    <td>00006</td>
                                                    <td>Envase de 2 litros</td>
                                                    <td>$3</td>
                                                    <td>
                                                        <ul id="dropdown-producto6" class="dropdown-content">
                                                            <li>
                                                                <a href="<?=base_url()?>productos/editar" class="-text"><?=label('menuOpciones_editar')?></a>
                                                            </li>
                                                            <li>
                                                                <a href="#eliminarElemento" class="-text modal-trigger"><?=label('menuOpciones_eliminar')?></a>
                                                            </li>
                                                        </ul>
                                                        <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-producto6">
                                                            <?=label('menuOpciones_seleccionar')?><i class="mdi-navigation-arrow-drop-down"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-tt-id="7" data-tt-parent-id="5">
                                                    <td style="text-align: center;">
                                                        <input type="checkbox" class="filled-in checkbox" id="checkbox_producto7" />
                                                        <label for="checkbox_producto7"></label>
                                                    </td>
                                                    <td>
                                                        <span class="nivel4"><a href="<?=base_url()?>productos/editar">Fanta</a></span>
                                                    </td>
                                                    <td>00007</td>
                                                    <td>Envase de 1.5 litros</td>
                                                    <td>$2</td>
                                                    <td>
                                                        <ul id="dropdown-producto7" class="dropdown-content">
                                                            <li>
                                                                <a href="<?=base_url()?>productos/editar" class="-text"><?=label('menuOpciones_editar')?></a>
                                                            </li>
                                                            <li>
                                                                <a href="#eliminarElemento" class="-text modal-trigger"><?=label('menuOpciones_eliminar')?></a>
                                                            </li>
                                                        </ul>
                                                        <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-producto7">
                                                            <?=label('menuOpciones_seleccionar')?><i class="mdi-navigation-arrow-drop-down"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-tt-id="8" data-tt-parent-id="4">
                                                    <td style="text-align: center;">
                                                        <input type="checkbox" class="filled-in checkbox" id="checkbox_producto8" />
                                                        <label for="checkbox_producto8"></label>
                                                    </td>
                                                    <td><span class="nivel3">Naturales</span></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <ul id="dropdown-producto8" class="dropdown-content">
                                                            <li>
                                                                <a href="<?=base_url()?>productos/agregar" class="-text"><?=label('menuOpciones_agregarProducto')?></a>
                                                            </li>
                                                            <li>
                                                                <a href="#editarCategoría" class="-text modal-trigger"><?=label('menuOpciones_editar')?></a>
                                                            </li>
                                                            <li>
                                                                <a href="#eliminarElemento" class="-text modal-trigger"><?=label('menuOpciones_eliminar')?></a>
                                                            </li>
                                                        </ul>
                                                        <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-producto8">
                                                            <?=label('menuOpciones_seleccionar')?><i class="mdi-navigation-arrow-drop-down"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-tt-id="9" data-tt-parent-id="8">
                                                    <td style="text-align: center;">
                                                        <input type="checkbox" class="filled-in checkbox" id="checkbox_producto9" />
                                                        <label for="checkbox_producto9"></label>
                                                    </td>
                                                    <td>
                                                        <span class="nivel4"><a href="<?=base_url()?>productos/editar">Te frio</a></span>
                                                    </td>
                                                    <td>00008</td>
                                                    <td>Envase de 1 litro</td>
                                                    <td>$1</td>
                                                    <td>
                                                        <ul id="dropdown-producto9" class="dropdown-content">
                                                            <li>
                                                                <a href="<?=base_url()?>productos/editar" class="-text"><?=label('menuOpciones_editar')?></a>
                                                            </li>
                                                            <li>
                                                                <a href="#eliminarElemento" class="-text modal-trigger"><?=label('menuOpciones_eliminar')?></a>
                                                            </li>
                                                        </ul>
                                                        <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-producto9">
                                                            <?=label('menuOpciones_seleccionar')?><i class="mdi-navigation-arrow-drop-down"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-tt-id="10" data-tt-parent-id="8">
                                                    <td style="text-align: center;">
                                                        <input type="checkbox" class="filled-in checkbox" id="checkbox_producto10" />
                                                        <label for="checkbox_producto10"></label>
                                                    </td>
                                                    <td>
                                                        <span class="nivel4"><a href="<?=base_url()?>productos/editar">Mora</a></span>
                                                    </td>
                                                    <td>00009</td>
                                                    <td>Envase de 3 litros</td>
                                                    <td>$3</td>
                                                    <td>
                                                        <ul id="dropdown-producto10" class="dropdown-content">
                                                            <li>
                                                                <a href="<?=base_url()?>productos/editar" class="-text"><?=label('menuOpciones_editar')?></a>
                                                            </li>
                                                            <li>
                                                                <a href="#eliminarElemento" class="-text modal-trigger"><?=label('menuOpciones_eliminar')?></a>
                                                            </li>
                                                        </ul>
                                                        <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-producto10">
                                                            <?=label('menuOpciones_seleccionar')?><i class="mdi-navigation-arrow-drop-down"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="tabla-sinAgregar tabla-productos-opciones">
                                            <a id="opciones-seleccionados-print" class="waves-effect black-text opciones-seleccionados option-print-table" style="visibility: hidden;"
                                               href="#" data-toggle="tooltip" title="<?=label('opciones_seleccionadosImprimir')?>">
                                                <i class="mdi-action-print icono-opciones-varios"></i>
                                            </a>
                                            <ul id="dropdown-exportar" class="dropdown-content">
                                                <li>
                                                    <a href="#" class="-text"><?=label('opciones_seleccionadosExportarPdf')?></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="-text"><?=label('opciones_seleccionadosExportarExcel')?></a>
                                                </li>
                                            </ul>
                                            <a id="opciones-seleccionados-export" class="boton-opciones black-text dropdown-button option-export-table"
                                               href="#" data-toggle="tooltip" title="<?=label('opciones_seleccionadosExportar')?>" data-activates="dropdown-exportar">
                                                <i class="mdi-file-file-download icono-opciones-varios"></i>
                                            </a>
                                            <a id="opciones-seleccionados-delete" class="modal-trigger waves-effect black-text opciones-seleccionados option-delete-elements" style="visibility: hidden;"
                                               href="#eliminarElementosSeleccionados" data-toggle="tooltip" title="<?=label('opciones_seleccionadosEliminar')?>">
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
    <!--end container-->

</section>
<!-- END CONTENT-->

<script>
    function searchTable(inputVal) {
        var table = $('#productos-tabla-lista');
        table.find('tr').each(function(index, row)
        {
            var allCells = $(row).find('td');
            if(allCells.length > 0)
            {
                var found = false;
                allCells.each(function(index, td)
                {
                    var regExp = new RegExp(inputVal, 'i');
                    if(regExp.test($(td).text()))
                    {
                        found = true;
                        return false;
                    }
                });
                if(found == true){
                    $(row).show();
                } else {
                    $(row).hide();
                }
            }
        });
    }
    $(document).ready(function(){
        $("#productos-tabla-lista").agikiTreeTable({
            persist: true, persistStoreName: "files"});
    });
    $(document).ready(function() {
        $('#search').keyup(function() {
            searchTable($(this).val());
        });
    });
    function toggle_visibility(id) {
        var e = document.getElementById(id);
        if(e.style.display == 'block')
            e.style.display = 'none';
        else
            e.style.display = 'block';
    }
    $(window).load(function() {
        var marcados = $('.checkbox:checked').size();
        if(marcados >= 1) {
            var elems = document.getElementsByClassName('opciones-seleccionados');
            var e;
            for(e in elems) {
                elems[e].style.visibility = 'visible';
            }
        } else {
            var elems = document.getElementsByClassName('opciones-seleccionados');
            var e;
            for(e in elems) {
                elems[e].style.visibility = 'hidden';
            }
        }
        document.getElementById('checkbox-all').checked = false;
    });
    $(document).ready(function() {
        $('#botonElimnar').on("click", function(event){
            var tb = $(this).attr('title');
            var sel = false;
            var ch = $('#'+tb).find('tbody input[type=checkbox]');
            ch.each(function(){
                var $this = $(this);
                if($this.is(':checked')) {
                    sel = true;
                    $this.parents('tr').fadeOut(function(){
                        $this.remove();
                    });
                }
            });
            return false;
        });
    });
    $(document).ready(function(){
        $('#checkbox-all').click(function(event) {
            if(this.checked) {
                $('.checkbox').each(function() {
                    this.checked = true;
                });
            } else {
                $('.checkbox').each(function() {
                    this.checked = false;
                });
            }
        });
    });
    $(document).ready(function(){
        $('.checkbox').click(function(event) {
            var marcados = $('.checkbox:checked').size();
            if(marcados >= 1) {
                var elems = document.getElementsByClassName('opciones-seleccionados');
                var e;
                for(e in elems) {
                    elems[e].style.visibility = 'visible';
                }
            } else {
                var elems = document.getElementsByClassName('opciones-seleccionados');
                var e;
                for(e in elems) {
                    elems[e].style.visibility = 'hidden';
                }
            }
        });
    });
    $(document).ready(function() {
        $('.boton-opciones').on('click', function(event) {
            // alert(event.type);
            //e.preventDefault();

            var elementoActivo = $(this).siblings('ul.active');
            if (elementoActivo.length>0) {
                var estado = elementoActivo.css("display");
                if (estado == "block") {
                    elementoActivo.css("display", "none");
                    elementoActivo.style.display='none';
                } else {
                    elementoActivo.css("display", "block");
                    elementoActivo.style.display='block';
                }
            }
        });
    });
</script>

<!-- lista modals -->
<div id="agregarCategoría" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <input id="categoria_nombre" type="text" value="">
            <label for="categoria_nombre"><?=label('Producto_categoriaNombre');?></label>
        </div>
        <div class="input-field col s12">
            <select>
                <option value="" disabled selected>Seleccione uno</option>
                <option value="1"><?=label('Producto_categorias') ?></option>
                <option value="2"><?=label('Producto_productos') ?></option>
            </select>
            <label for="categoria_tipo"><?=label('Producto_tipo');?></label>
        </div>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<div id="editarCategoría" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <input id="categoria_nombre" type="text" value="Productos">
            <label for="categoria_nombre"><?=label('Producto_categoriaNombre');?></label>
        </div>
        <div class="input-field col s12">
            <select>
                <option value="" disabled>Seleccione uno</option>
                <option value="1" selected><?=label('Producto_categorias') ?></option>
                <option value="2"><?=label('Producto_productos') ?></option>
            </select>
            <label for="categoria_tipo"><?=label('Producto_tipo');?></label>
        </div>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<div id="eliminarElemento" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?=label('confirmarEliminarElementoProductos');?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<div id="eliminarElementosSeleccionados" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?=label('clientes_archivosSeleccionadosEliminar');?></p>
    </div>
    <div class="modal-footer black-text">
        <div id="botonElimnar" title="productos-tabla-lista">
            <a href="#" class="deleteall waves-effect waves-red btn-flat modal-action modal-close" ><?=label('aceptar');?></a>
        </div>
    </div>
</div>
<!-- Fin lista modals -->