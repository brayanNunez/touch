<section id="content">

<!--    start breadcrumbs-->
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
                                    <div id="table">
                                        <table id="example" class="table table-responsive striped" data-search="true">
                                            <thead>
                                                <tr>
                                                    <th><?=label('Producto_tablaNombre')?></th>
                                                    <th><?=label('Producto_tablaCodigo')?></th>
                                                    <th><?=label('Producto_tablaDescripcion')?></th>
                                                    <th><?=label('Producto_tablaPrecio')?></th>
                                                    <th><?=label('Producto_tablaOpciones')?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr data-tt-id="1">
                                                    <td>Productos</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <a class="modal-trigger icono-edicion" href="#agregarCategoría" data-toggle="tooltip" title="<?=label('tooltip_annadir')?>">
                                                            <i class="mdi-content-add"></i>
                                                        </a>
                                                        <a class="modal-trigger icono-edicion" href="#editarCategoría" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                            <i class="mdi-editor-mode-edit"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-tt-id="2" data-tt-parent-id="1">
                                                    <td><span style="margin-left: 20px">Alimentacion</span></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <a class="modal-trigger icono-edicion" href="<?=base_url()?>productos/agregar" data-toggle="tooltip" title="<?=label('tooltip_annadir')?>">
                                                            <i class="mdi-content-add"></i>
                                                        </a>
                                                        <a class="modal-trigger icono-edicion" href="#editarCategoría"  data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                            <i class="mdi-editor-mode-edit"></i>
                                                        </a>
                                                        <a class="modal-trigger icono-edicion" href="#eliminarElemento" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                            <i class="mdi-action-delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-tt-id="3" data-tt-parent-id="2">
                                                    <td><a href="<?=base_url()?>productos/editar">Arroz</a></td>
                                                    <td>00005</td>
                                                    <td>Paquete de 2 Kg</td>
                                                    <td>$2</td>
                                                    <td>
                                                        <a class="icono-edicion" href="<?=base_url()?>productos/editar" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                            <i class="mdi-editor-mode-edit"></i>
                                                        </a>
                                                        <a class="modal-trigger icono-edicion" href="#eliminarElemento" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                            <i class="mdi-action-delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-tt-id="4" data-tt-parent-id="1">
                                                    <td><span style="margin-left: 20px">Bebidas</span></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <a class="modal-trigger icono-edicion" href="#agregarCategoría" data-toggle="tooltip" title="<?=label('tooltip_annadir')?>">
                                                            <i class="mdi-content-add"></i>
                                                        </a>
                                                        <a class="modal-trigger icono-edicion" href="#editarCategoría" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                            <i class="mdi-editor-mode-edit"></i>
                                                        </a>
                                                        <a class="modal-trigger icono-edicion" href="#eliminarElemento" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                            <i class="mdi-action-delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-tt-id="5" data-tt-parent-id="4">
                                                    <td><span style="margin-left: 20px">Gaseosas</span></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <a class="modal-trigger icono-edicion" href="<?=base_url()?>productos/agregar" data-toggle="tooltip" title="<?=label('tooltip_annadir')?>">
                                                            <i class="mdi-content-add"></i>
                                                        </a>
                                                        <a class="modal-trigger icono-edicion" href="#editarCategoría" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                            <i class="mdi-editor-mode-edit"></i>
                                                        </a>
                                                        <a class="modal-trigger icono-edicion" href="#eliminarElemento" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                            <i class="mdi-action-delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-tt-id="6" data-tt-parent-id="5">
                                                    <td><a href="<?=base_url()?>productos/editar">Coca Cola</a></td>
                                                    <td>00006</td>
                                                    <td>Envase de 2 litros</td>
                                                    <td>$3</td>
                                                    <td>
                                                        <a class="icono-edicion" href="<?=base_url()?>productos/editar"  data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                            <i class="mdi-editor-mode-edit"></i>
                                                        </a>
                                                        <a class="modal-trigger icono-edicion" href="#eliminarElemento" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                            <i class="mdi-action-delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-tt-id="7" data-tt-parent-id="5">
                                                    <td><a href="<?=base_url()?>productos/editar">Fanta</a></td>
                                                    <td>00007</td>
                                                    <td>Envase de 1.5 litros</td>
                                                    <td>$2</td>
                                                    <td>
                                                        <a class="icono-edicion" href="<?=base_url()?>productos/editar" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                            <i class="mdi-editor-mode-edit"></i>
                                                        </a>
                                                        <a class="modal-trigger icono-edicion" href="#eliminarElemento" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                            <i class="mdi-action-delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-tt-id="8" data-tt-parent-id="4">
                                                    <td><span style="margin-left: 20px">Naturales</span></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <a class="modal-trigger icono-edicion" href="<?=base_url()?>productos/agregar" data-toggle="tooltip" title="<?=label('tooltip_annadir')?>">
                                                            <i class="mdi-content-add"></i>
                                                        </a>
                                                        <a class="modal-trigger icono-edicion" href="#editarCategoría"  data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                            <i class="mdi-editor-mode-edit"></i>
                                                        </a>
                                                        <a class="modal-trigger icono-edicion" href="#eliminarElemento" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                            <i class="mdi-action-delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-tt-id="9" data-tt-parent-id="8">
                                                    <td><a href="<?=base_url()?>productos/editar">Te frio</a></td>
                                                    <td>00008</td>
                                                    <td>Envase de 1 litro</td>
                                                    <td>$1</td>
                                                    <td>
                                                        <a class="icono-edicion" href="<?=base_url()?>productos/editar" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                            <i class="mdi-editor-mode-edit"></i>
                                                        </a>
                                                        <a class="modal-trigger icono-edicion" href="#eliminarElemento" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                            <i class="mdi-action-delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr data-tt-id="10" data-tt-parent-id="8">
                                                    <td><a href="<?=base_url()?>productos/editar">Mora</a></td>
                                                    <td>00009</td>
                                                    <td>Envase de 3 litros</td>
                                                    <td>$3</td>
                                                    <td>
                                                        <a class="icono-edicion" href="<?=base_url()?>productos/editar" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                            <i class="mdi-editor-mode-edit"></i>
                                                        </a>
                                                        <a class="modal-trigger icono-edicion" href="#eliminarElemento" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                            <i class="mdi-action-delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th><?=label('Producto_tablaNombre')?></th>
                                                    <th><?=label('Producto_tablaCodigo')?></th>
                                                    <th><?=label('Producto_tablaDescripcion')?></th>
                                                    <th><?=label('Producto_tablaPrecio')?></th>
                                                    <th><?=label('Producto_tablaOpciones')?></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <script>
                                        function searchTable(inputVal) {
                                            var table = $('#example');
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
                                    </script>
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                            $("#example").agikiTreeTable({
                                                persist: true, persistStoreName: "files"});
                                        });
                                        $(document).ready(function() {
                                            $('#search').keyup(function() {
                                                searchTable($(this).val());
                                            });
                                        });
                                    </script>
                                    <script type="text/javascript">
                                        function toggle_visibility(id) {
                                            var e = document.getElementById(id);
                                            if(e.style.display == 'block')
                                                e.style.display = 'none';
                                            else
                                                e.style.display = 'block';
                                        }
                                    </script>
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
<!-- END CONTENT


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
<!-- Fin lista modals -->