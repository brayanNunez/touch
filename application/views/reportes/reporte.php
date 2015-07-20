<!--  START CONTENT  -->
<section id="content">
   <!--start container-->
   <div id="breadcrumbs-wrapper" class=" grey lighten-3">
      <div class="container">
         <div class="row">
            <div class="col s12 m12 l12">
               <h5 class="breadcrumbs-title"><?=label('tituloReporte');?></a></h5>
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
                     <div class="card" id="card-reporte">

	                    <div id="formGeneral" class="section">
	                        <div class="row">
	                           <div class="input-field col s12 m3 l3">
	                              <div class="input-field col s12">
	                              Desde:
	                                 <input id="last_name" type="date">
	                                 <!-- <label for="last_name" class="">aaaaa</label> -->
	                              </div>
	                           </div>
	                           <div class="input-field col s12 m3 l3">
	                              <div class="input-field col s12">
	                              	Hasta:
	                                 <input id="last_name" type="date">
	                                 <!-- <label for="last_name" class="">Número</label> -->
	                              </div>
	                           </div>

	                           	 <div class="input-field col s12 m6 l6">
	                           	 <br>
	                              <select class="input-field col s12">
<!--	                                 <option value="" disabled selected>Estado</option>-->
	                                 <option value="1" selected>Todos</option>
	                                 <option value="2">Enviada</option>
	                                 <option value="3">Finalizada</option>
	                                 <option value="4">Rechazada</option>
	                              </select>
	                              <label>Estado de la cotización</label>
	                           </div>
	                           <div class="input-field col s12 m4 l4">
	                              <select class="input-field col s12">
<!--	                                 <option value="" disabled selected>Cliente</option>-->
	                                 <option value="1" selected>Todos</option>
	                                 <option value="2">Juan Alfaro Alfaro</option>
	                                 <option value="3">Diego Rojas</option>
	                              </select>
	                              <label>Clientes</label>
	                           </div>
	                           <div class="input-field col s12 m4 l4">
	                              <select class="input-field col s12">
<!--	                                 <option value="" disabled selected>Empleados</option>-->
	                                 <option value="1" selected>Todos</option>
	                                 <option value="2">Juan Carlos Porras</option>
	                                 <option value="3">Ana Bolaños Rojas</option>
	                              </select>
	                              <label>Vendedores</label>
	                           </div>
                               <div class="input-field col s12 m4 l4">
                                  <select id="reporte-cliente" class="input-field col s12">
<!--                                     <option value="" disabled selected>Outsourcing</option>-->
                                     <option value="1" selected>Todos</option>
                                     <option value="2">Transportes Rojas</option>
                                     <option value="3">Música en vivo</option>
                                  </select>
                                  <label for="reporte-cliente">Proveedores</label>
                               </div>
	                        </div>
	                    </div>
      	                <div class="section reporte-generar">
                           <a href="#" class="btn btn-default">Generar reporte</a>
	                    </div>
                        <hr>

	                    <div id="table-datatables" style="margin-top: 3%;">
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
                                             <a class="btn_duplicar modal-trigger icono-edicion" href="#duplicar" data-toggle="tooltip" title="<?=label('tooltip_duplicar')?>">
                                                <i class="mdi-content-content-copy"></i>
                                             </a>
                                             <a class="btn_ver icono-edicion" href="<?=base_url()?>cotizacion/cotizar" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                <i class="mdi-editor-mode-edit"></i>
                                             </a>
                                             <a class="btn_eliminar modal-trigger icono-edicion" href="#Elminar" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
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
                                             <a class="btn_duplicar modal-trigger icono-edicion" href="#" data-toggle="tooltip" title="<?=label('tooltip_duplicar')?>">
                                                <i class="mdi-content-content-copy"></i>
                                             </a>
                                             <a class="btn_ver icono-edicion" href="<?=base_url()?>cotizacion/cotizar" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                <i class="mdi-editor-mode-edit"></i>
                                             </a>
                                             <a class="btn_finalizar modal-trigger icono-edicion" href="#" data-toggle="tooltip" title="<?=label('tooltip_finalizar')?>">
                                                <i class="mdi-action-done"></i>
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
                      <a class="dropdown-button btn-floating  waves-effect waves-light " href="#!" data-activates="dropdown2"><i class="mdi-editor-vertical-align-bottom"></i></a>
                          <ul id="dropdown2" class="dropdown-content">
                            <li><a href="#!" class="-text">Excel</a>
                            </li>
                            <li><a href="#!" class="-text">PDF</a>
                            </li>
                        </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--end container-->
</section>
<!-- END CONTENT-->