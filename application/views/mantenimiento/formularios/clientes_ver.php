 <div class="col s12 m12 l8">
     <form class="col s12">
         <div class="row">
             <div class="input-field col s12">
                 <input id="cliente_tipo" type="text" value="<?=label('formCliente_juridica');?>" readonly>
                 <label for="cliente_tipo"><?=label('formCliente_tipoPersona');?></label>
             </div>
             <div class="input-field col s12">
                 <input id="cliente_codigo" type="text" value="0001" readonly>
                 <label for="cliente_codigo"><?=label('formCliente_codigo');?></label>
             </div>
             <div class="input-field col s12">
                 <input id="cliente_nombre" type="text" value="Dos Pinos" readonly>
                 <label for="cliente_nombre"><?=label('formCliente_nombre');?></label>
             </div>
             <div class="input-field col s12">
                 <input id="cliente_id" type="text" value="3-123-468-845" readonly>
                 <label for="cliente_id"><?=label('formCliente_identificacion');?></label>
             </div>
             <div class="input-field col s12">
                 <input type="date" class="datepicker" value="12-12-1970" readonly>
                 <label for=""><?=label('formCliente_fechaNacimiento');?></label>
             </div>
             <div class="input-field col s12">
                 <input id="cliente_correo" type="email" value="coopedospinos@gmail.com" readonly>
                 <label for="cliente_correo"><?=label('formCliente_correo');?></label>
             </div>
             <div class="input-field col s12">
                 <input id="cliente_telefonoMovil" type="text" value="8563-4120" readonly>
                 <label for="cliente_telefonoMovil"><?=label('formCliente_telefonoMovil');?></label>
             </div>
             <div class="input-field col s12">
                 <input id="cliente_telefono" type="text" value="2456-8945" readonly>
                 <label for="cliente_telefono"><?=label('formCliente_telefonoFijo');?></label>
             </div>
             <div class="input-field col s12">
                 <textarea id="cliente_comentarios" class="materialize-textarea" length="120" readonly>Cliente frecuente</textarea>
                 <label for="cliente_comentarios"><?=label('formCliente_comentarios');?></label>
             </div>

             <div class="inputTag col s12">
                <label for="vendedoresCliente"><?=label('formCliente_cotizador');?></label>
                <br>
                <div id="vendedoresCliente" class="example example_objects_as_tags">
                  <div class="bs-example">
                    <input  placeholder="<?=label('formCliente_anadirVendedor');?>" type="text"  />
                  </div>
                </div>
                <br>
            </div>

            <div class="inputTag col s12">
                <label for="vendedoresCliente"><?=label('formCliente_gustos_preferencias');?></label>
                <br>
                <div class="example example_typeahead">
                  <div class="bs-example">
                    <input placeholder="<?=label('formCliente_anadirGusto');?>" type="text" value="Música,Fútbol" />
                  </div>
                </div>
                <br>
            </div>

            <div class="inputTag col s12">
                <label for="vendedoresCliente"><?=label('formCliente_mediosContacto');?></label>
                <br>
                <div class="example mediosContacto">
                  <div class="bs-example">
                    <input placeholder="<?=label('formCliente_anadirMedio');?>" type="text" value="Radio,TV" />
                  </div>
                </div>
                <br>
            </div>
            
             <div class="input-field col s12">
                 <label><?=label('formCliente_Contactos');?></label>
                 <br />
                 <br />
                 <table class="table striped">
                     <thead>
                     <tr>
                         <th><?=label('formCliente_nombreContacto');?></th>
                         <th><?=label('formCliente_correoContacto');?></th>
                     </tr>
                     </thead>
                     <tbody>
                     <tr>
                         <td>Maria Rodriguez</td>
                         <td>maria@gmail.com</td>
                     </tr>
                     <tr>
                         <td>Juan Perez</td>
                         <td>juan@gmail.com</td>
                     </tr>
                     <tr>
                         <td>Jose Mora</td>
                         <td>jose@gmail.com</td>
                     </tr>
                     </tbody>
                 </table>
                 <br />
                 <hr />
             </div>
             <!-- <div class="input-field col s12">
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
                 <hr />
             </div>
             <div class="input-field col s12">
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
                 <hr />
                 <br />
             </div> -->
             <!-- <div class="input-field col s12">
                 <input id="cliente_cotizador" type="text" value="Juan Martinez" readonly>
                 <label for="cliente_cotizador"><?=label('formCliente_cotizador');?></label>
             </div> -->

             


         </div>
     </form>
 </div>

<!-- lista modals -->
<!-- Fin lista modals-->