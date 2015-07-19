<!-- START CONTENT -->
<!-- <section id="content"> -->
   <!--start container-->

   
<!--    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
      <div class="container">
         <div class="row">
            <div class="col s12 m12 l12">
               <h5 class="breadcrumbs-title"><?=label('tituloCotizacion');?></a></h5>
            </div>
         </div>
      </div>
   </div> -->
   <!--breadcrumbs end-->


  <!--  <div class="container">
      <div id="chart-dashboard">
         <div class="row">
            <div class="col s12 m12 l12">
               <div id="submit-button" class="section">
                  <div class="row">
                     <div class="col s12 m12 l12">
                        <div class="card" id="card-paso1"> -->
                           <div id="centered-table">
                              <!--  <h4 class="header">Centered Table</h4> -->
                              <div class="row">
                                 <!-- <div class="col s12 m4 l3">
                                    <p>Add <code class=" language-markup">class="centered"</code> to the table tag to center align all the text in the table</p>
                                    </div> -->
                                 <div class="col s12 m12 l12">
                                    <!-- <div class="ui-widget input-field"> -->
                                    <input type="text" class="tags">
                                    <!-- <label class="input-field" for="tags"></label -->
                                    <!-- </div> -->

                                    <div id="contenerdorTablaDetalles">
                                       <table class="centered">
                                          <thead>
                                             <tr>
                                                <th id="columna1" data-field="id">
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input onclick="check('item', this)" type="checkbox" id="item0" checked>
                                                         <label  class="ver" for="item0">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celdaTitulo">Item</div>
                                                   </row>
                                                </th>
                                                <th data-field="id">
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input onclick="check('nombre', this)" type="checkbox" id="nombre0" checked>
                                                         <label class="ver" for="nombre0">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celdaTitulo">
                                                         Nombre
                                                      </div>
                                                   </row>
                                                </th>
                                                <th data-field="id">
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input onclick="check('descripcion', this)" type="checkbox" id="descripcion0" checked>
                                                         <label class="ver" for="descripcion0">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celdaTitulo">
                                                         Descripción
                                                      </div>
                                                   </row>
                                                </th>
                                                <th data-field="id">
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input onclick="check('imagen', this)" type="checkbox" id="imagen0" checked>
                                                         <label class="ver" for="imagen0">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celdaTitulo">
                                                         Imagen
                                                      </div>
                                                   </row>
                                                </th>
                                                <th data-field="id">
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input onclick="check('precio', this)" type="checkbox" id="precio0" checked>
                                                         <label class="ver" for="precio0">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celdaTitulo">
                                                         Precio unitario
                                                      </div>
                                                   </row>
                                                </th>
                                                <th data-field="id">
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input onclick="check('cantidad', this)" type="checkbox" id="cantidad0" checked>
                                                         <label class="ver" for="cantidad0">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celdaTitulo">
                                                         Cantidad
                                                      </div>
                                                   </row>
                                                </th>
                                                <th data-field="id">
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input onclick="check('impuestoVenta', this)" type="checkbox" id="impuestoVenta0" checked>
                                                         <label class="ver" for="impuestoVenta0">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celdaTitulo">
                                                         Impuesto de venta
                                                      </div>
                                                   </row>
                                                </th>
                                                <th data-field="id">
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input onclick="check('utilidad', this)" type="checkbox" id="utilidad0" checked>
                                                         <label class="ver" for="utilidad0">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celdaTitulo">
                                                         Utilidad
                                                      </div>
                                                   </row>
                                                </th>
                                                <th data-field="id">
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input onclick="check('subTotal', this)" type="checkbox" id="subTotal0" checked>
                                                         <label class="ver" for="subTotal0">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celdaTitulo">
                                                         SubTotal
                                                      </div>
                                                   </row>
                                                </th>
                                                <th data-field="id">
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <!-- <input type="checkbox" id="subTotal0" checked>
                                                            <label class="ver" for="subTotal0">
                                                            </label> -->
                                                      </div>
                                                      <div class="col s12 m12 l12 celdaTitulo">
                                                         Opciones
                                                      </div>
                                                   </row>
                                                </th>
                                                <!-- <th data-field="name">Descripción</th>
                                                   <th data-field="price">Imagen</th>
                                                   <th data-field="price">Precio unitario</th>
                                                   <th data-field="price">cantidad</th>
                                                   <th data-field="price">IV</th>
                                                   <th data-field="price">Utilidad</th>
                                                   <th data-field="price">Subtotal</th>
                                                   <th data-field="price">Opciones</th> -->
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input type="checkbox" id="item_1" class="item" checked>
                                                         <label class="ver" for="item_1">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celda">
                                                         <input value="001" type="text" name="item_1">
                                                      </div>
                                                   </row>
                                                </td>
                                                <td>
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input type="checkbox" id="nombre_1" class="nombre" checked>
                                                         <label class="ver" for="nombre_1">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celda">
                                                         <input value="Almuerzo" type="text" name="nombre_1" class="tags">
                                                      </div>
                                                   </row>
                                                </td>
                                                <td>
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input type="checkbox" id="descripcion_1" class="descripcion" checked>
                                                         <label class="ver" for="descripcion_1">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celda">
                                                         <input value="Arroz, ensalada, carne" type="text" name="descripcion_1">
                                                      </div>
                                                   </row>
                                                </td>
                                                <td>
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input type="checkbox" id="imagen_1" class="imagen" checked>
                                                         <label class="ver" for="imagen_1">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celda">
                                                         <input value="Almuerzo.jpg" type="text" name="imagen_1" readonly="true">
                                                      </div>
                                                   </row>
                                                </td>
                                                <td>
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input type="checkbox" id="precio_1" class="precio" checked>
                                                         <label class="ver" for="precio_1">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celda">
                                                         <input value="$6" type="text" name="precio_1">
                                                      </div>
                                                   </row>
                                                </td>
                                                <td>
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input type="checkbox" id="cantidad_1" class="cantidad" checked>
                                                         <label class="ver" for="cantidad_1">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celda">
                                                         <input value="20" type="number" name="cantidad_1">
                                                      </div>
                                                   </row>
                                                </td>
                                                <td>
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input type="checkbox" id="impuestoVenta_1" class="impuestoVenta" checked>
                                                         <label class="ver" for="impuestoVenta_1">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celda">
                                                         <input value="13" type="number" name="impuestoVenta_1">
                                                      </div>
                                                   </row>
                                                </td>
                                                <td>
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input type="checkbox" id="utilidad_1" class="utilidad" checked>
                                                         <label class="ver" for="utilidad_1">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celda">
                                                         <input value="2" type="number" name="utilidad_1">
                                                      </div>
                                                   </row>
                                                </td>
                                                <td>
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input type="checkbox" id="subTotal_1" class="subTotal" checked>
                                                         <label class="ver" for="subTotal_1">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celda">
                                                         <input value="$120" type="text" name="subTotal_1" readonly="true">
                                                      </div>
                                                   </row>
                                                </td>
                                                <td>
                                                   <div class="col s12 m12 l12 celdaBoton">
                                                      <a class="btn_eliminar modal-trigger" href="#Elminar"><?=label('eliminar');?></a>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input type="checkbox" id="item_2" class="item" checked>
                                                         <label class="ver" for="item_2">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celda">
                                                         <input value="002" type="text" name="item_2">
                                                      </div>
                                                   </row>
                                                </td>
                                                <td>
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input type="checkbox" id="nombre_2" class="nombre" checked>
                                                         <label class="ver" for="nombre_2">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celda">
                                                         <input value="Fresco" type="text" name="nombre_2" class="tags">
                                                      </div>
                                                   </row>
                                                </td>
                                                <td>
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input type="checkbox" id="descripcion_2" class="descripcion" checked>
                                                         <label class="ver" for="descripcion_2">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celda">
                                                         <input value="Freso de frutas" type="text" name="descripcion_2">
                                                      </div>
                                                   </row>
                                                </td>
                                                <td>
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input type="checkbox" id="imagen_2" class="imagen" checked>
                                                         <label class="ver" for="imagen_2">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celda">
                                                         <input value="fresco.jpg" type="text" name="imagen_2" readonly="true">
                                                      </div>
                                                   </row>
                                                </td>
                                                <td>
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input type="checkbox" id="precio_2" class="precio" checked>
                                                         <label class="ver" for="precio_2">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celda">
                                                         <input value="$1" type="text" name="precio_2">
                                                      </div>
                                                   </row>
                                                </td>
                                                <td>
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input type="checkbox" id="cantidad_2" class="cantidad" checked>
                                                         <label class="ver" for="cantidad_2">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celda">
                                                         <input value="20" type="number" name="cantidad_2">
                                                      </div>
                                                   </row>
                                                </td>
                                                <td>
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input type="checkbox" id="impuestoVenta_2" class="impuestoVenta" checked>
                                                         <label class="ver" for="impuestoVenta_2">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celda">
                                                         <input value="13" type="number" name="impuestoVenta_2">
                                                      </div>
                                                   </row>
                                                </td>
                                                <td>
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input type="checkbox" id="utilidad_2" class="utilidad" checked>
                                                         <label class="ver" for="utilidad_2">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celda">
                                                         <input value="2" type="number" name="utilidad_2">
                                                      </div>
                                                   </row>
                                                </td>
                                                <td>
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input type="checkbox" id="subTotal_2" class="subTotal" checked>
                                                         <label class="ver" for="subTotal_2">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celda">
                                                         <input value="$20" type="text" name="subTotal_2" readonly="true">
                                                      </div>
                                                   </row>
                                                </td>
                                                <td>
                                                   <div class="col s12 m12 l12 celdaBoton">
                                                      <a class="btn_eliminar modal-trigger" href="#Elminar"><?=label('eliminar');?></a>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input type="checkbox" id="item_3" class="item" checked>
                                                         <label class="ver" for="item_3">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celda">
                                                         <input value="003" type="text" name="item_3">
                                                      </div>
                                                   </row>
                                                </td>
                                                <td>
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input type="checkbox" id="nombre_3" class="nombre" checked>
                                                         <label class="ver" for="nombre_3">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celda">
                                                         <input value="Música" type="text" name="nombre_3" class="tags">
                                                      </div>
                                                   </row>
                                                </td>
                                                <td>
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input type="checkbox" id="descripcion_3" class="descripcion" checked>
                                                         <label class="ver" for="descripcion_3">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celda">
                                                         <input value="Música en vivo" type="text" name="descripcion_3">
                                                      </div>
                                                   </row>
                                                </td>
                                                <td>
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input type="checkbox" id="imagen_3" class="imagen" checked>
                                                         <label class="ver" for="imagen_3">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celda">
                                                         <input value="musica.jpg" type="text" name="imagen_3" readonly="true">
                                                      </div>
                                                   </row>
                                                </td>
                                                <td>
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input type="checkbox" id="precio_3" class="precio" checked>
                                                         <label class="ver" for="precio_3">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celda">
                                                         <input value="$200" type="text" name="precio_3">
                                                      </div>
                                                   </row>
                                                </td>
                                                <td>
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input type="checkbox" id="cantidad_3" class="cantidad" checked>
                                                         <label class="ver" for="cantidad_3">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celda">
                                                         <input value="1" type="number" name="cantidad_3">
                                                      </div>
                                                   </row>
                                                </td>
                                                <td>
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input type="checkbox" id="impuestoVenta_3" class="impuestoVenta" checked>
                                                         <label class="ver" for="impuestoVenta_3">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celda">
                                                         <input value="13" type="number" name="impuestoVenta_3">
                                                      </div>
                                                   </row>
                                                </td>
                                                <td>
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input type="checkbox" id="utilidad_3" class="utilidad" checked>
                                                         <label class="ver" for="utilidad_3">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celda">
                                                         <input value="10" type="number" name="utilidad_3">
                                                      </div>
                                                   </row>
                                                </td>
                                                <td>
                                                   <row>
                                                      <div class="col s12 m12 l12">
                                                         <input type="checkbox" id="subTotal_3" class="subTotal" checked>
                                                         <label class="ver" for="subTotal_3">
                                                         </label>
                                                      </div>
                                                      <div class="col s12 m12 l12 celda">
                                                         <input value="$200" type="text" name="subTotal_3" readonly="true">
                                                      </div>
                                                   </row>
                                                </td>
                                                <td>
                                                   <div class="col s12 m12 l12 celdaBoton">
                                                      <a class="btn_eliminar modal-trigger" href="#Elminar"><?=label('eliminar');?></a>
                                                   </div>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                    <br>
                                    <a href="#" class="btn btn-default">Nueva linea de detalle</a>
                                    <div id="resultadoDetalles" class="col s12 m12 l12">
                                       <div class="input-field col s12 m6 l3">
                                          <div class="input-field col s12">
                                             <input id="last_name" type="number">
                                             <label for="last_name" class="">Utilidad</label>
                                          </div>
                                       </div>
                                       <div class="input-field col s12 m6 l3">
                                          <div class="input-field col s12">
                                             <input id="last_name" type="number">
                                             <label for="last_name" class="">Impuesto</label>
                                          </div>
                                       </div>
                                       <div class="input-field col s12 m6 l3">
                                          <div class="input-field col s12">
                                             <input id="last_name" type="number">
                                             <label for="last_name" class="">Descuento</label>
                                          </div>
                                       </div>
                                       <div class="input-field col s12 m6 l3">
                                          <div class="input-field col s12">
                                             <input value="$140" id="last_name" type="text">
                                             <label for="last_name" class="">Total</label>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="input-field col s12 m6 l4">
                                          <a href="<?=base_url();?>productos/agregar" class=" left btn btn-default modal-trigger agregarElementos">Agregar nuevo producto</a>
                                       </div>
                                       <div class="input-field col s12 m6 l4 ">
                                          <a href="<?=base_url();?>servicios/agregar" class=" left btn btn-default modal-trigger agregarElementos">Agregar nuevo servicio</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        <!-- </div>
                     </div>
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
<script>
   function check(nombre, elemnto) {
     var lista = document.getElementsByClassName(nombre);
     var titulo = document.getElementById(elemnto.id)
     if (!titulo.checked) {
         for (var i = 0; i < lista.length; i++) {
           lista[i].checked = false;
         };
     } else{
       for (var i = 0; i < lista.length; i++) {
         lista[i].checked = true;
       };
     };
   }
</script>
<script>
   $(function() {
     var availableTags = [
       "Almuerzo",
       "Fresco",
       "Hamburguesa",
       "Música",
       "Pizza",
       "Arroz",
       "Frijoles",
       "Ensalada",
       "Carne en salsa",
       "Pollo",
       "Bolsa de confites",
       "Piñata",
       "Comediante",
       "Animador",
       "Comparsa",
       "Mariachi",
       "Vino",
       "Tacos",
       "Globos",
       "Payaso",
       "Quque",
       "Helado"
     ];
     $( ".tags" ).autocomplete({
       source: availableTags
     });
   });
</script>
<div id="Elminar" class="modal">
   <div class="modal-header">
      <p><?=label('nombreSistema');?></p>
      <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
   </div>
   <div class="modal-content">
      <p><?=label('confirmarEliminarlineaDetalle');?></p>
   </div>
   <div class="modal-footer">
      <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
   </div>
</div>