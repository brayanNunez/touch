<!--  START CONTENT  -->
<section id="content">
   <!--start container-->
   <div id="breadcrumbs-wrapper" class=" grey lighten-3">
      <div class="container">
         <div class="row">
            <div class="col s12 m12 l12">
               <h5 class="breadcrumbs-title"><?=label('tituloReporteClientes');?></a></h5>
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
                     <div class="" id="card-reporte">
	                    <div id="formGeneral" class="section">
	                        <div class="row">
	                           <div class="input-field col s12 m3 l3">
	                              <div class="input-field col s12">
                                     <input id="reporte-desde" type="date" class="datepicker">
                                     <label for="reporte-desde"><?=label('Desde');?></label>
	                              </div>
	                           </div>
	                           <div class="input-field col s12 m3 l3">
	                              <div class="input-field col s12">
                                     <input type="date" class="datepicker">
                                     <label for=""><?=label('Hasta');?></label>
	                              </div>
	                           </div>
                               <div class="input-field col s12 m6 l6">
                                  <select id="reporte-estado" class="input-field col s12">
	                                 <option value="" disabled selected>Estado</option>
	                                 <option value="1">Todos</option>
	                                 <option value="2">Enviada</option>
	                                 <option value="3">Finalizada</option>
	                                 <option value="4">Rechazada</option>
	                              </select>
	                              <label for="reporte-estado">Seleccione uno</label>
	                           </div>
	                           <div class="input-field col s12 m6 l6">
	                              <select id="reporte-cliente" class="input-field col s12">
	                                 <option value="" disabled selected>Outsourcing</option>
	                                 <option value="1">Todos</option>
	                                 <option value="2">Transportes Rojas</option>
	                                 <option value="3">Música en vivo</option>
	                              </select>
	                              <label for="reporte-cliente">Seleccione uno</label>
	                           </div>
	                           <div class="input-field col s12 m6 l6">
	                              <select id="reporte-cotizador" class="input-field col s12">
	                                 <option value="" disabled selected>Empleado</option>
	                                 <option value="1">Todos</option>
	                                 <option value="2">Juan Carlos Porras</option>
	                                 <option value="3">Ana Bolaños Rojas</option>
	                              </select>
	                              <label for="reporte-cotizador">Seleccione uno</label>
	                           </div>
                               <div class="input-field col s12 m6 l6">
                                  <label><?=label('formCliente_gustos_preferencias');?></label>
                                  <br />
                                  <br />
                                  <table class="table striped">
                                     <thead>
                                     <tr>
                                        <th><?=label('formCliente_gustos');?></th>
                                        <th><?=label('formCliente_estado');?></th>
                                     </tr>
                                     </thead>
                                     <tbody>
                                     <tr>
                                        <td>Preferencia 1</td>
                                        <td>
                                           <div class="switch">
                                              <label style="position: relative">
                                                 <?=label('off');?>
                                                 <input type="checkbox">
                                                 <span class="lever"></span>
                                                 <?=label('on');?>
                                              </label>
                                           </div>
                                           <br />
                                        </td>
                                     </tr>
                                     <tr>
                                        <td>Preferencia 2</td>
                                        <td>
                                           <div class="switch">
                                              <label style="position: relative">
                                                 <?=label('off');?>
                                                 <input type="checkbox">
                                                 <span class="lever"></span>
                                                 <?=label('on');?>
                                              </label>
                                           </div>
                                           <br />
                                        </td>
                                     </tr>
                                     <tr>
                                        <td>Preferencia 3</td>
                                        <td>
                                           <div class="switch">
                                              <label style="position: relative">
                                                 <?=label('off');?>
                                                 <input type="checkbox">
                                                 <span class="lever"></span>
                                                 <?=label('on');?>
                                              </label>
                                           </div>
                                           <br />
                                        </td>
                                     </tr>
                                     </tbody>
                                  </table>
                               </div>
                               <div class="input-field col s12 m6 l6">
                                  <label><?=label('formCliente_mediosContacto');?></label>
                                  <br />
                                  <br />
                                  <table class="table striped">
                                     <thead>
                                     <tr>
                                        <th><?=label('formCliente_medio');?></th>
                                        <th><?=label('formCliente_estadoMedio');?></th>
                                     </tr>
                                     </thead>
                                     <tbody>
                                     <tr>
                                        <td>Medio 1</td>
                                        <td>
                                           <div class="switch">
                                              <label style="position: relative">
                                                 <?=label('off');?>
                                                 <input type="checkbox">
                                                 <span class="lever"></span>
                                                 <?=label('on');?>
                                              </label>
                                           </div>
                                           <br />
                                        </td>
                                     </tr>
                                     <tr>
                                        <td>Medio 2</td>
                                        <td>
                                           <div class="switch">
                                              <label style="position: relative">
                                                 <?=label('off');?>
                                                 <input type="checkbox">
                                                 <span class="lever"></span>
                                                 <?=label('on');?>
                                              </label>
                                           </div>
                                           <br />
                                        </td>
                                     </tr>
                                     <tr>
                                        <td>Medio 3</td>
                                        <td>
                                           <div class="switch">
                                              <label style="position: relative">
                                                 <?=label('off');?>
                                                 <input type="checkbox">
                                                 <span class="lever"></span>
                                                 <?=label('on');?>
                                              </label>
                                           </div>
                                           <br />
                                        </td>
                                     </tr>
                                     </tbody>
                                  </table>
                               </div>
	                        </div>
	                    </div>
                        <div class="section reporte-generar">
                           <a href="#" class="btn btn-default">Generar reporte</a>
	                    </div>
                        <hr>
	                    <div id="table-datatables" style="margin-top: 3%;">
                           <div class="row">
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
                                             <a class="btn_duplicar modal-trigger icono-edicion" href="#" data-toggle="tooltip" title="<?=label('tooltip_duplicar')?>">
                                                <i class="mdi-content-content-copy"></i>
                                             </a>
                                             <a class="btn_ver icono-edicion" href="<?=base_url()?>cotizacion/cotizar" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                <i class="mdi-editor-mode-edit"></i>
                                             </a>
                                             <a class="btn_eliminar modal-trigger icono-edicion" href="#" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                <i class="mdi-action-delete"></i>
                                             </a>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>MRR-002</td>
                                          <td>2015/01/12</td>
                                          <td><a href="">Juan Carlos Rojas</a></td>
                                          <td>$100</td>
                                          <td>Enviada</td>
                                          <td>
                                             <a class="btn_duplicar modal-trigger icono-edicion" href="#" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                <i class="mdi-content-content-copy"></i>
                                             </a>
                                             <a class="btn_ver icono-edicion" href="<?=base_url()?>cotizacion/cotizar" data-toggle="tooltip" title="<?=label('tooltip_duplicar')?>">
                                                <i class="mdi-editor-mode-edit"></i>
                                             </a>
                                             <a class="btn_eliminar modal-trigger icono-edicion" href="#" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                <i class="mdi-action-delete"></i>
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