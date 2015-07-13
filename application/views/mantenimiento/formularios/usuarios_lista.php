<!-- START CONTENT -->

 <section id="content">

    <!--start container-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h1 class="breadcrumbs-title"><?=label('tituloUsuarios');?></h1>
                
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
                                <div class="card" id="listaUsuarios">
                                    <div id="table-datatables">
                                        <div class="row">
                                            <div class="col s12 m12 l12 servicios">
                                                <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                                    <div id="usuario_nuevo">
                                                        <a href="<?=base_url()?>usuarios/agregar" class="btn btn-default"><?=label('Usuario_nuevo');?></a>
                                                    </div>
                                                    <thead>
                                                        <tr>
                                                            <th><?=label('Usuario_tablaIdentificacion');?></th>
                                                            <th><?=label('Usuario_tablaNombre');?></th>
                                                            <th><?=label('Usuario_tablaCorreo');?></th>
                                                            <th><?=label('Usuario_tablaOpciones');?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>2-123-456</td>
                                                            <td><a href="<?=base_url()?>usuarios/editar">Juan</a></td>
                                                            <td><a href="<?=base_url()?>usuarios/editar">juan@gmail.com</a></td>
                                                            <td>
                                                                <a href="<?=base_url()?>usuarios/editar"><?=label('editar');?></a>
                                                                <a class="modal-trigger" href="#eliminarUsuario"><?=label('eliminar');?></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3-012-798</td>
                                                            <td><a href="<?=base_url()?>usuarios/editar">Maria</a></td>
                                                            <td><a href="<?=base_url()?>usuarios/editar">maria@gmail.com</a></td>
                                                            <td>
                                                                <a href="<?=base_url()?>usuarios/editar"><?=label('editar');?></a>
                                                                <a class="modal-trigger" href="#eliminarUsuario"><?=label('eliminar');?></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4-245-023</td>
                                                            <td><a href="<?=base_url()?>usuarios/editar">Pepe</a></td>
                                                            <td><a href="<?=base_url()?>usuarios/editar">pepe@gmail.com</a></td>
                                                            <td>
                                                                <a href="<?=base_url()?>usuarios/editar"><?=label('editar');?></a>
                                                                <a class="modal-trigger" href="#eliminarUsuario"><?=label('eliminar');?></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>5-678-123</td>
                                                            <td><a href="<?=base_url()?>usuarios/editar">Alberto</a></td>
                                                            <td><a href="<?=base_url()?>usuarios/editar">alberto@gmail.com</a></td>
                                                            <td>
                                                                <a href="<?=base_url()?>usuarios/editar"><?=label('editar');?></a>
                                                                <a class="modal-trigger" href="#eliminarUsuario"><?=label('eliminar');?></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th><?=label('Usuario_tablaIdentificacion');?></th>
                                                            <th><?=label('Usuario_tablaNombre');?></th>
                                                            <th><?=label('Usuario_tablaCorreo');?></th>
                                                            <th><?=label('Usuario_tablaOpciones');?></th>
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
<div id="eliminarUsuario" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
    </div>
    <div class="modal-content">
        <p><?=label('confirmarEliminarUsuario');?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close"><?=label('cancelar');?></a>
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<!--Fin lista modals -->
