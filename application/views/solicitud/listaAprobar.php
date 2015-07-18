<!-- START CONTENT -->
<section id="content">
   <!--start container-->
   <div id="breadcrumbs-wrapper" class=" grey lighten-3">
      <div class="container">
         <div class="row">
            <div class="col s12 m12 l12">
               <h1 class="breadcrumbs-title"><?=label('tituloListaPorAprobar');?></h1>
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
                              <!-- <h4 class="header">DataTables example</h4> -->
                              <div class="row">
                                 
                                 <div class="col s12 m12 l12">
                                    <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                       <thead>
                                          <tr>
                                             <th><?=label('tablaPorAbrobar_cliente');?></th>
                                             <th><?=label('tablaPorAbrobar_monto');?></th>
                                             <th><?=label('tablaPorAbrobar_fecha');?></th>
                                             <th><?=label('tablaPorAbrobar_opciones');?></th>
                                          </tr>
                                       </thead>
                                       <tfoot>
                                          <tr>
                                             <th><?=label('tablaPorAbrobar_cliente');?></th>
                                             <th><?=label('tablaPorAbrobar_monto');?></th>
                                             <th><?=label('tablaPorAbrobar_fecha');?></th>
                                             <th><?=label('tablaPorAbrobar_opciones');?></th>
                                          </tr>
                                       </tfoot>
                                       <tbody>
                                          <tr>
                                              <td><a href="<?=base_url()?>clientes/editar">Dos Pinos S.A.</a></td>
                                              <td>$300</td>
                                              <td>4/3/2015</td>
                                              <td>
                                                  <a class="icono-edicion" href="<?=base_url()?>Solicitud/ver"
                                                     data-toggle="tooltip" title="<?=label('tooltip_revisar')?>">
                                                      <!-- <i class="mdi-editor-mode-edit"></i> -->
                                                      Revisar
                                                  </a>
                                              </td>
                                          </tr>
                                          <tr>
                                              <td><a href="<?=base_url()?>clientes/editar">Juan Carlos Rodríguez</a></td>
                                              <td>$200</td>
                                              <td>6/3/2015</td>
                                              <td>
                                                  <a class="icono-edicion" href="<?=base_url()?>Solicitud/ver"
                                                     data-toggle="tooltip" title="<?=label('tooltip_revisar')?>">
                                                      <!-- <i class="mdi-editor-mode-edit"></i> -->
                                                      Revisar
                                                  </a>
                                              </td>
                                          </tr>
                                       </tbody>
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
   <!--end container-->
</section>
<!-- END CONTENT-->
<!-- lista modals -->

<div id="eliminarSolicitud" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
    </div>
    <div class="modal-content">
        <p><?=label('confirmarEliminarSolicitud');?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close"><?=label('cancelar');?></a>
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<!--Fin lista modals