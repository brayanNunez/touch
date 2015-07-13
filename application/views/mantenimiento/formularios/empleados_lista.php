<!-- START CONTENT -->

 <section id="content">

    <!--start container-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h1 class="breadcrumbs-title"><?=label('tituloEmpleados');?></h1>
                
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
                                                    <div id="empleado_nuevo">
                                                        <a href="<?=base_url()?>empleados/agregar" class="btn btn-default"><?=label('Empleado_nuevo');?></a>
                                                    </div>
                                                    <thead>
                                                        <tr>
                                                            <th><?=label('Empleado_tablaCodigo');?></th>
                                                            <th><?=label('Empleado_tablaNombre');?></th>
                                                            <th><?=label('Empleado_tablaIdentificacion');?></th>
                                                            <th><?=label('Empleado_tablaPalabras');?></th>
                                                            <th><?=label('Empleado_tablaOpciones');?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>0001</td>
                                                            <td><a href="<?=base_url()?>empleados/editar">Jorge Arias C.</a></td>
                                                            <td>11-235-689</td>
                                                            <td>Programador, Bases de datos</td>
                                                            <td>
                                                                <a href="<?=base_url()?>empleados/editar"><?=label('editar');?></a>
                                                                <a class="modal-trigger" href="#eliminarEmpleado"><?=label('eliminar');?></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>0002</td>
                                                            <td><a href="<?=base_url()?>empleados/editar">Brayan Núñez R.</a></td>
                                                            <td>2-245-678</td>
                                                            <td>Programador, Bases de datos</td>
                                                            <td>
                                                                <a href="<?=base_url()?>empleados/editar"><?=label('editar');?></a>
                                                                <a class="modal-trigger" href="#eliminarEmpleado"><?=label('eliminar');?></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>0003</td>
                                                            <td><a href="<?=base_url()?>empleados/editar">Sebastián Rodríguez B.</a></td>
                                                            <td>2-723-327</td>
                                                            <td>Programador, Bases de datos</td>
                                                            <td>
                                                                <a href="<?=base_url()?>empleados/editar"><?=label('editar');?></a>
                                                                <a class="modal-trigger" href="#eliminarEmpleado"><?=label('eliminar');?></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>0004</td>
                                                            <td><a href="<?=base_url()?>empleados/editar">Claret Rojas C.</a></td>
                                                            <td>2-897-231</td>
                                                            <td>Programador, Bases de datos</td>
                                                            <td>
                                                                <a href="<?=base_url()?>empleados/editar"><?=label('editar');?></a>
                                                                <a class="modal-trigger" href="#eliminarEmpleado"><?=label('eliminar');?></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th><?=label('Empleado_tablaCodigo');?></th>
                                                            <th><?=label('Empleado_tablaNombre');?></th>
                                                            <th><?=label('Empleado_tablaIdentificacion');?></th>
                                                            <th><?=label('Empleado_tablaPalabras');?></th>
                                                            <th><?=label('Empleado_tablaOpciones');?></th>
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
<div id="eliminarEmpleado" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
    </div>
    <div class="modal-content">
        <p><?=label('confirmarEliminarEmpleado');?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close"><?=label('cancelar');?></a>
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<!--Fin lista modals -->
