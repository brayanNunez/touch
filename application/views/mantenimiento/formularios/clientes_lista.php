<!-- START CONTENT -->

 <section id="content">

    <!--start container-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h1 class="breadcrumbs-title"><?=label('tituloClientes');?></h1>
                
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
                                                        <a href="<?=base_url()?>clientes/agregar" class="btn btn-default"><?=label('agregar_nuevo');?></a>
                                                    </div>
                                                    <thead>
                                                        <tr>
                                                            <th><?=label('Cliente_tablaCodigo');?></th>
                                                            <th><?=label('Cliente_tablaTipo');?></th>
                                                            <th><?=label('Cliente_tablaNombre');?></th>
                                                            <th><?=label('Cliente_tablaTelefono');?></th>
                                                            <th><?=label('Cliente_tablaCorreo');?></th>
                                                            <th><?=label('Cliente_tablaCotizador');?></th>
                                                            <th><?=label('Cliente_tablaOpciones');?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>0001</td>
                                                            <td>Jurídico</td>
                                                            <td><a href="<?=base_url()?>clientes/editar">Dos Pinos S.A.</a></td>
                                                            <td>2456-0708</td>
                                                            <td>coopedospinos@gmail.com</td>
                                                            <td><a href="<?=base_url()?>usuarios/editar">Juan</a></td>
                                                            <td>
                                                                <a class="icono-edicion" href="<?=base_url()?>clientes/editar"
                                                                   data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                                    <i class="mdi-editor-mode-edit"></i>
                                                                </a>
                                                                <a class="modal-trigger icono-edicion" href="#eliminarCliente" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                                    <i class="mdi-action-delete"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>0002</td>
                                                            <td>Físico</td>
                                                            <td><a href="<?=base_url()?>clientes/editar">Emanuel Conejo R.</a></td>
                                                            <td>2458-9632</td>
                                                            <td>emanuel@gmail.com</td>
                                                            <td><a href="<?=base_url()?>usuarios/editar">Maria</a></td>
                                                            <td>
                                                                <a class="icono-edicion" href="<?=base_url()?>clientes/editar" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                                    <i class="mdi-editor-mode-edit"></i>
                                                                </a>
                                                                <a class="modal-trigger icono-edicion" href="#eliminarCliente" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                                    <i class="mdi-action-delete"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>0003</td>
                                                            <td>Jurídico</td>
                                                            <td><a href="<?=base_url()?>clientes/editar">Pipasa S.A.</a></td>
                                                            <td>2478-4512</td>
                                                            <td>pipasa@gmail.com</td>
                                                            <td><a href="<?=base_url()?>usuarios/editar">Maria</a></td>
                                                            <td>
                                                                <a class="icono-edicion" href="<?=base_url()?>clientes/editar" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                                    <i class="mdi-editor-mode-edit"></i>
                                                                </a>
                                                                <a class="modal-trigger icono-edicion" href="#eliminarCliente" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                                    <i class="mdi-action-delete"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>0004</td>
                                                            <td>Físico</td>
                                                            <td><a href="<?=base_url()?>clientes/editar">Julia Bolaños E.</a></td>
                                                            <td>2448-4250</td>
                                                            <td>julia@gmail.com</td>
                                                            <td><a href="<?=base_url()?>usuarios/editar">Juan</a></td>
                                                            <td>
                                                                <a class="icono-edicion" href="<?=base_url()?>clientes/editar" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                                    <i class="mdi-editor-mode-edit"></i>
                                                                </a>
                                                                <a class="modal-trigger icono-edicion" href="#eliminarCliente" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                                    <i class="mdi-action-delete"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
<!--                                                        <tr>-->
<!--                                                            <th>--><?//=label('Cliente_tablaCodigo');?><!--</th>-->
<!--                                                            <th>--><?//=label('Cliente_tablaTipo');?><!--</th>-->
<!--                                                            <th>--><?//=label('Cliente_tablaNombre');?><!--</th>-->
<!--                                                            <th>--><?//=label('Cliente_tablaTelefono');?><!--</th>-->
<!--                                                            <th>--><?//=label('Cliente_tablaCorreo');?><!--</th>-->
<!--                                                            <th>--><?//=label('Cliente_tablaCotizador');?><!--</th>-->
<!--                                                            <th>--><?//=label('Cliente_tablaOpciones');?><!--</th>-->
<!--                                                        </tr>-->
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
<div id="eliminarCliente" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?=label('confirmarEliminarCliente');?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<!--Fin lista modals -->
