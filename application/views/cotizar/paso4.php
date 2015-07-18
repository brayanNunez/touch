 <!--START CONTENT  -->
<!-- <section id="content"> -->
   <!--start container-->
<!--    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
      <div class="container">
         <div class="row">
            <div class="col s12 m12 l12">
               <h5 class="breadcrumbs-title">Diseño</h5>
            </div>
         </div>
      </div>
   </div> -->
   <!--breadcrumbs end-->
<!--    <div class="container">
      <div id="chart-dashboard">
         <div class="row">
            <div class="col s12 m12 l12">
               <div id="submit-button" class="section">
                  <div class="row">
                     <div class="col s12 ">
                        <div class="card" id="card-diseno"> -->
                           <!-- <div class="row">
                              <div class="input-field col s8 m5 l5">
                                 <select class="input-field col s12">
                                    <option value="" disabled selected>Estilo</option>
                                    <option value="1">Formal</option>
                                    <option value="2">Normal</option>
                                    <option value="3">Simple</option>
                                    <option value="4">Para la Dos Pinos</option>
                                 </select>
                                 <label>Estilo de plantilla</label>
                              </div>
                              <div class="input-field col s4 m7 l7">
                                 <a href="#modalVistaPrevia" class=" right btn btn-default modal-trigger">Vista previa</a>
                              </div>
                           </div> -->
                           <div class="contenedorHoja col s12">
                              <div class="listaHojas">
                                 <div class="hoja">
                                    <!-- <a href="#modalEncabezado"  class="modal-trigger btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                                    <i class="mdi-editor-mode-edit"></i>
                                    </a> -->
                                    <div id="encabezado">
                                       <div id="logo">
                                          <img class="imagen" src="<?=base_url()?>assets/dashboard/images/sombrero.png">
                                          </img>
                                       </div>
                                       <div id="datosEncabezado">
                                          <div class="datos" id="datos1">
                                             <p id="nombreEmpresa">Mr Rabbit
                                             <p>
                                             <p>Código de cotización: MR-123</p>
                                             <p>Cliente: faytur</p>
                                             <p>Atención: Juan Pablo Mendez Piedra</p>
                                             <p>Realizado por: Brayan Nuñez Rojas</p>
                                          </div>
                                          <div class="datos" id="datos2">
                                             <p>Fecha:24/06/2015</p>
                                             <p>Hora: 09:45 am</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="barra-horizontal" id="barra1">
                                    </div>
                                    <!-- <a href="#modalCuerpo" class="modal-trigger btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                                    <i class="mdi-editor-mode-edit"></i>
                                    </a> -->
                                    <div id="detalleVista">
                                       <div id="datallesCotizacion">
                                          <table style="width:100%">
                                             <tr>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th>Cantidad</th>
                                                <th>Imagen</th>
                                                <th>Sub-total
                                                   <!-- <a onclick="darclick(2);" class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                                                   <i class="mdi-editor-mode-edit"></i>
                                                   </a> -->
                                                </th>
                                             </tr>
                                             <tr>
                                                <td>Almuerzo</td>
                                                <td>$6</td>
                                                <td>20</td>
                                                <td><img src="<?=base_url()?>assets/dashboard/images/almuerzo.jpg"></td>
                                                <td>$120</td>
                                             </tr>
                                             <tr>
                                                <td>Fresco</td>
                                                <td>$1</td>
                                                <td>20</td>
                                                <td></td>
                                                <td>$20</td>
                                             </tr>
                                             <td>Música</td>
                                             <td>$30</td>
                                             <td></td>
                                             <td><img src="<?=base_url()?>assets/dashboard/images/musica.jpg"></td>
                                             <td>$30</td>
                                             </tr>
                                          </table>
                                       </div>
                                       <div id="resultadoCotizacion">
                                          <p>Impuesto: 13%</p>
                                          <p>Descuento: 10%</p>
                                          <p>Total: $170</p>
                                       </div>
                                    </div>
                                    <div class="barra-horizontal" id="barra2">
                                    </div>
                                    <!-- <a href="#modalInformacion" class="modal-trigger btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                                    <i class="mdi-editor-mode-edit"></i>
                                    </a> -->
                                    <div id="informacion">
                                       <div class="datos">
                                          <p>Forma de pago: 50% primer mes, 50% segundo mes.</p>
                                          <p>Válido por: 1,5 meses</p>
                                          <p>Detalle: Por las especificaciones del equipo, es posible que existan variantes entre impresiones sin que esto represente para nosotros problemas de calidad. La presente oferta tiene una validéz de 15 días naturales a partir de esta fecha. </p>
                                          <p>Nota: El cliente se hace responsable por el cumplimiento de las legislaciones vigentes en materia de contenido y producto de las etiquetas solicitadas, y exime a Mr Rabbit de cualquier responsabilidad en ese sentido.</p>
                                          <br>
                                          <p>Firma:__________________________</p>
                                          <p id="nombreFirma">Emanuel Conejo</p>
                                       </div>
                                    </div>
                                    <div class="barra-horizontal" id="barra3">
                                    </div>
                                    <!-- <a href="#modalFooter" class="modal-trigger btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                                    <i class="mdi-editor-mode-edit"></i>
                                    </a> -->
                                    <div id="footerCotizacion">
                                       <div id="logo">
                                          <img class="imagen" src="<?=base_url()?>assets/dashboard/images/sombrero.png">
                                          </img>
                                       </div>
                                       <div id="datosFooter">
                                          <div class="datos" id="datos1">
                                             <p>Teléfono: 2494-33-44</p>
                                             <p>Sitio web: www.mrrabbit.cr</p>
                                             <p>Correo: info@mrrabbit.cr</p>
                                          </div>
                                          <div class="datos" id="datos2">
                                             <p>Con el mayor deseo de servirle, me pongo a su entera disposición.</p>
                                          </div>
                                       </div>
                                    </div>
                                    <div id="informacionSistema">
                                       <p>Esta cotización ha sido desarrollada en la plataforma: touchcr.com</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row" >
                              <div class="input-field col s12 m4 l3">
                                 <a href="#enviar" id="btnEnviar" class=" left btn btn-default modal-trigger">Enviar</a>
                              </div>

                           </div>

                           
                        <!-- </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div> -->
   <!--end container-->
<!-- </section> -->
<!-- END CONTENT-->


<div id="enviar" class="modal">
   <div class="modal-header">
      <p><?=label('nombreSistema');?></p>
      <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
   </div>
   <div class="modal-content">
      Seleccionar aprobadores
      <div class="row">
         <div class="col s12 m12 l12">
            <form action="#">
               <div class="row col s12 m6 l6">
                  <div class="listaCecksModals">
                     <p>
                        <input type="checkbox" class="filled-in" id="filled-in-box_1" checked="checked">
                        <label for="filled-in-box_1">Esteban Nuñez Rojas</label>
                     </p>
                     <p>
                        <input type="checkbox" class="filled-in" id="filled-in-box_2" checked="checked">
                        <label for="filled-in-box_2">María Alfaro Bolaños</label>
                     </p>
                     <p>
                        <input type="checkbox" class="filled-in" id="filled-in-box_3" checked="checked">
                        <label for="filled-in-box_3">Juan Carlos Arias</label>
                     </p>
                     
                  </div>
               </div>
               <!-- <div class="row col s12 m6 l6">
                  <div class="inputModals input-field col s12">
                     <p>Color de fondo: <input class=""  type="color" id="myColor1"> </p>
                  </div>
                  <div class="inputModals input-field col s12">
                     <p>Color de letra: <input class=""  type="color" id="myColor2"></p>
                  </div>
                  <div class="inputModals input-field col s12">
                     <p>Color de barra horizontal: <input class=""  type="color" id="myColor3"></p>
                  </div>
                  <div class="input-field col s12">
                     <textarea id="message" class="materialize-textarea" style="height: 24px;"></textarea>
                     <label for="message" class="">Texto adicional</label>
                  </div>
               </div> -->
            </form>
         </div>
      </div>
   </div>
   <div class="modal-footer">
      <a href="<?=base_url()?>cotizacion" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
   </div>
</div>