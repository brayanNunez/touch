<!-- START CONTENT -->

 <section id="content">

    <!--start container-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h1 class="breadcrumbs-title"><?=label('tituloProveedores');?></h1>
                
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
                                                <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                                    <div class="agregar_nuevo">
                                                        <a href="<?=base_url()?>proveedores/agregar" class="btn btn-default"><?=label('agregar_nuevo');?></a>
                                                    </div>
                                                    <thead>
                                                        <tr>
                                                            <th><?=label('Proveedor_tablaCodigo');?></th>
                                                            <th><?=label('Proveedor_tablaNombre');?></th>
                                                            <th><?=label('Proveedor_tablaIdentificacion');?></th>
                                                            <th><?=label('Proveedor_tablaDescripcion');?></th>
                                                            <th><?=label('Proveedor_tablaOpciones');?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>0001</td>
                                                            <td><a href="<?=base_url()?>proveedores/editar">Juan Perez D.</a></td>
                                                            <td>11-235-689</td>
                                                            <td>Diseñador</td>
                                                            <td>
                                                                <a class="icono-edicion" href="<?=base_url()?>proveedores/editar" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                                    <i class="mdi-editor-mode-edit"></i>
                                                                </a>
                                                                <a class="modal-trigger icono-edicion" href="#eliminarProveedor" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                                    <i class="mdi-action-delete"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>0002</td>
                                                            <td><a href="<?=base_url()?>proveedores/editar">Jose Porras E.</a></td>
                                                            <td>2-245-678</td>
                                                            <td>Pintor</td>
                                                            <td>
                                                                <a class="icono-edicion" href="<?=base_url()?>proveedores/editar" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                                    <i class="mdi-editor-mode-edit"></i>
                                                                </a>
                                                                <a class="modal-trigger icono-edicion" href="#eliminarProveedor" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                                    <i class="mdi-action-delete"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>0003</td>
                                                            <td><a href="<?=base_url()?>proveedores/editar">Maria Castro M.</a></td>
                                                            <td>2-723-327</td>
                                                            <td>Limpieza</td>
                                                            <td>
                                                                <a class="icono-edicion" href="<?=base_url()?>proveedores/editar" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                                    <i class="mdi-editor-mode-edit"></i>
                                                                </a>
                                                                <a class="modal-trigger icono-edicion" href="#eliminarProveedor" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                                    <i class="mdi-action-delete"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>0004</td>
                                                            <td><a href="<?=base_url()?>proveedores/editar">Ana Mora Q.</a></td>
                                                            <td>2-897-231</td>
                                                            <td>Finanzas</td>
                                                            <td>
                                                                <a class="icono-edicion" href="<?=base_url()?>proveedores/editar" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                                    <i class="mdi-editor-mode-edit"></i>
                                                                </a>
                                                                <a class="modal-trigger icono-edicion" href="#eliminarProveedor" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                                    <i class="mdi-action-delete"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th><?=label('Proveedor_tablaCodigo');?></th>
                                                            <th><?=label('Proveedor_tablaNombre');?></th>
                                                            <th><?=label('Proveedor_tablaIdentificacion');?></th>
                                                            <th><?=label('Proveedor_tablaDescripcion');?></th>
                                                            <th><?=label('Proveedor_tablaOpciones');?></th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
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
</section>
<!-- END CONTENT-->

<!-- lista modals -->
<div id="eliminarProveedor" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
    </div>
    <div class="modal-content">
        <p><?=label('confirmarEliminarProveedor');?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close"><?=label('cancelar');?></a>
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<!--Fin lista modals -->
