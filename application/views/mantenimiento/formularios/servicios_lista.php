<!-- START CONTENT -->

 <section id="content">

    <!--start container-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h1 class="breadcrumbs-title"><?=label('tituloServicios');?></h1>
                
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
                                <div class="card" id="listaCotizaciones">
                                    <div id="table-datatables">
                                        <div class="row">
                                            <div class="col s12 m12 l12 servicios">
                                                <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                                    <div id="servicio_nuevo">
                                                        <a href="<?=base_url()?>servicios/agregar" class="btn btn-default modal-trigger"><?=label('Servicio_nuevo');?></a>
                                                    </div>
                                                    <thead>
                                                        <tr>
                                                            <th><?=label('Servicio_tablaCodigo');?></th>
                                                            <th><?=label('Servicio_tablaNombre');?></th>
                                                            <th><?=label('Servicio_tablaDescripcion');?></th>
                                                            <th><?=label('Servicio_tablaPrecio');?></th>
                                                            <th><?=label('Servicio_tablaOpciones');?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>0001</td>
                                                            <td><a href="<?=base_url()?>servicios/editar">Aplicación móvil</a></td>
                                                            <td>Aplicación móvil para SO android</td>
                                                            <td>$500</td>
                                                            <td>
                                                                <a href="<?=base_url()?>servicios/editar"><?=label('editar');?></a>
                                                                <a class="modal-trigger" href="#eliminarServicio"><?=label('eliminar');?></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>0002</td>
                                                            <td><a href="<?=base_url()?>servicios/editar">Hosting</a></td>
                                                            <td>Servicio de hosting por un mes</td>
                                                            <td>$70</td>
                                                            <td>
                                                                <a href="<?=base_url()?>servicios/editar"><?=label('editar');?></a>
                                                                <a class="modal-trigger" href="#eliminarServicio"><?=label('eliminar');?></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>0003</td>
                                                            <td><a href="<?=base_url()?>servicios/editar">Sitio de cotizaciones</a></td>
                                                            <td>Sitio de cotizaciones en linea</td>
                                                            <td>$20.000</td>
                                                            <td>
                                                                <a href="<?=base_url()?>servicios/editar"><?=label('editar');?></a>
                                                                <a class="modal-trigger" href="#eliminarServicio"><?=label('eliminar');?></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th><?=label('Servicio_tablaCodigo');?></th>
                                                            <th><?=label('Servicio_tablaNombre');?></th>
                                                            <th><?=label('Servicio_tablaDescripcion');?></th>
                                                            <th><?=label('Servicio_tablaPrecio');?></th>
                                                            <th><?=label('Servicio_tablaOpciones');?></th>
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
<div id="eliminarServicio" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
    </div>
    <div class="modal-content">
        <p><?=label('confirmarEliminarServicio');?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close"><?=label('cancelar');?></a>
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<!--Fin lista modals -->
