<!-- START CONTENT -->

 <section id="content">

    <!--start container-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h1 class="breadcrumbs-title"><?=label('tituloListaCotizaciones');?></h1>
                
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
                              
                                <!--DataTables example-->
                                
                                    <div id="table-datatables">
                                      <!-- <h4 class="header">DataTables example</h4> -->
                                      <div class="row">
                                        <!-- <div class="col s12 m4 l3">
                                          <p>DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function.</p>

                                          <p>Searching, ordering, paging etc goodness will be immediately added to the table, as shown in this example.</p>
                                        </div> -->
                                        <div class="col s12 m12 l12">
                                          <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th><?=label('tablaCotizaciones_codigo');?></th>
                                                    <th><?=label('tablaCotizaciones_fecha');?></th>
                                                    <th><?=label('tablaCotizaciones_cliente');?></th>
                                                    <th><?=label('tablaCotizaciones_monto');?></th>
                                                    <th><?=label('tablaCotizaciones_estado');?></th>
                                                    <th><?=label('tablaCotizaciones_opciones');?></th>
                                                </tr>
                                            </thead>
                                         
                                            <tfoot>
                                                <tr>
                                                    <th><?=label('tablaCotizaciones_codigo');?></th>
                                                    <th><?=label('tablaCotizaciones_fecha');?></th>
                                                    <th><?=label('tablaCotizaciones_cliente');?></th>
                                                    <th><?=label('tablaCotizaciones_monto');?></th>
                                                    <th><?=label('tablaCotizaciones_estado');?></th>
                                                    <th><?=label('tablaCotizaciones_opciones');?></th>
                                                </tr>
                                            </tfoot>
                                         
                                            <tbody>
                                                
                                                <tr>
                                                    <td>MRR-001</td>
                                                    <td>2009/01/12</td>
                                                    <td><a href="">Dos Pinos</a></td>
                                                    <td>$300</td>
                                                    <td>Finalizada</td>
                                                    <td>
                                                        <a  class="modal-trigger" href="#duplicar"><?=label('duplicar');?></a>
                                                        <a href="<?=base_url()?>cotizacion/cotizar"><?=label('ver');?></a>
                                                        <a class="modal-trigger" href="#Elminar"><?=label('eliminar');?></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>MRR-002</td>
                                                    <td>2015/01/12</td>
                                                    <td><a href="">Juan Carlos Rojas</a></td>
                                                    <td>$100</td>
                                                    <td>Enviada</td>
                                                    <td>
                                                        <a  class="modal-trigger" href="#duplicar"><?=label('duplicar');?></a>
                                                        <a href="<?=base_url()?>cotizacion/cotizar"><?=label('ver');?></a>
                                                        <a class="modal-trigger" href="#finalizar"><?=label('finalizar');?></a>
                                                        <a class="modal-trigger" href="#Elminar"><?=label('eliminar');?></a>
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
<div id="Elminar" class="modal">

    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
    </div>
    <div class="modal-content">
        <p><?=label('confirmarEliminarCotizacion');?></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close"><?=label('cancelar');?></a>
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<div id="finalizar" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
    </div>
    <div class="modal-content">
        <p><?=label('confirmarFinalizarCotizacion');?></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close"><?=label('cancelar');?></a>
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<div id="duplicar" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
    </div>
    <div class="modal-content">
        <p><?=label('confirmarDuplicarCotizacion');?></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close"><?=label('cancelar');?></a>
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<!--Fin lista modals -->
