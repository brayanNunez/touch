<!-- START CONTENT -->
 <section id="content">

    <!--start container-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title"><?=label('tituloCotizacion');?></a></h5>
                
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
                              <div class="card" id="card-paso1">


                                  
                            

                                     <div id="centered-table">
                                       <!--  <h4 class="header">Centered Table</h4> -->
                                        <div class="row">
                                          <div class="col s12 m4 l3">
                                            <p>Add <code class=" language-markup">class="centered"</code> to the table tag to center align all the text in the table</p>
                                          </div>
                                          <div class="col s12 m12 l12">
                                            <table class="centered">
                                              <thead>
                                                <tr>
                                                    <th data-field="id">Item</th>
                                                    <th data-field="id">Nombre</th>
                                                    <th data-field="name">Descripción</th>
                                                    <th data-field="price">Imagen</th>
                                                    <th data-field="price">Precio unitario</th>
                                                    <th data-field="price">cantidad</th>
                                                    <th data-field="price">IV</th>
                                                    <th data-field="price">Utilidad</th>
                                                    <th data-field="price">Subtotal</th>
                                                    <th data-field="price">Opciones</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr> <!-- <td> <input type="checkbox" id="test14"><label class="ver" for="test14"></label><button></button></td> -->
                                                    <td> 
                                                      <row>
                                                          <div class="col s12 m12 l12">
                                                            <input type="checkbox" id="item1" checked>
                                                            <label class="ver" for="item1">
                                                            </label>

                                                          </div>
                                                          <div class="col s12 m12 l12 celda">
                                                            <input value="001" type="text" name="ito1">
                                                          </div>
                                                      </row>
                                                    </td>

                                                    <td> 
                                                      <row>
                                                          <div class="col s12 m12 l12">
                                                            <input type="checkbox" id="nombre1" checked>
                                                            <label class="ver" for="nombre1">
                                                            </label>

                                                          </div>
                                                          <div class="col s12 m12 l12 celda">
                                                            <input value="Almuerzo" type="text" name="nombre1">
                                                          </div>
                                                      </row>
                                                    </td>

                                                    <td> 
                                                      <row>
                                                          <div class="col s12 m12 l12">
                                                            <input type="checkbox" id="descripcion1" checked>
                                                            <label class="ver" for="descripcion1">
                                                            </label>

                                                          </div>
                                                          <div class="col s12 m12 l12 celda">
                                                            <input value="Arroz, ensalada, carne" type="text" name="descripcion1">
                                                          </div>
                                                      </row>
                                                    </td>

                                                    <td> 
                                                      <row>
                                                          <div class="col s12 m12 l12">
                                                            <input type="checkbox" id="imagen1" checked>
                                                            <label class="ver" for="imagen1">
                                                            </label>

                                                          </div>
                                                          <div class="col s12 m12 l12 celda">
                                                            <input value="Almuerzo.jpg" type="text" name="imagen1">
                                                          </div>
                                                      </row>
                                                    </td>

                                                    <td> 
                                                      <row>
                                                          <div class="col s12 m12 l12">
                                                            <input type="checkbox" id="precio1" checked>
                                                            <label class="ver" for="precio1">
                                                            </label>

                                                          </div>
                                                          <div class="col s12 m12 l12 celda">
                                                            <input value="$6" type="text" name="precio1">
                                                          </div>
                                                      </row>
                                                    </td>

                                                    <td> 
                                                      <row>
                                                          <div class="col s12 m12 l12">
                                                            <input type="checkbox" id="cantidad1" checked>
                                                            <label class="ver" for="cantidad1">
                                                            </label>

                                                          </div>
                                                          <div class="col s12 m12 l12 celda">
                                                            <input value="20" type="number" name="cantidad1">
                                                          </div>
                                                      </row>
                                                    </td>

                                                    <td> 
                                                      <row>
                                                          <div class="col s12 m12 l12">
                                                            <input type="checkbox" id="impuestoVenta1" checked>
                                                            <label class="ver" for="impuestoVenta1">
                                                            </label>

                                                          </div>
                                                          <div class="col s12 m12 l12 celda">
                                                            <input value="13" type="number" name="impuestoVenta1">
                                                          </div>
                                                      </row>
                                                    </td>


                                                    <td> 
                                                      <row>
                                                          <div class="col s12 m12 l12">
                                                            <input type="checkbox" id="utilidad1" checked>
                                                            <label class="ver" for="utilidad1">
                                                            </label>

                                                          </div>
                                                          <div class="col s12 m12 l12 celda">
                                                            <input value="2" type="number" name="utilidad1">
                                                          </div>
                                                      </row>
                                                    </td>

                                                    <td> 
                                                      <row>
                                                          <div class="col s12 m12 l12">
                                                            <input type="checkbox" id="subTotal1" checked>
                                                            <label class="ver" for="subTotal1">
                                                            </label>

                                                          </div>
                                                          <div class="col s12 m12 l12 celda">
                                                            <input value="$120" type="text" name="subTotal1" readonly="true">
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
    </div>

<!--end container-->
</section>
<!-- END CONTENT-->



<div id="Elminar" class="modal">

    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
    </div>
    <div class="modal-content">
        <p><?=label('confirmarEliminarlineaDetalle');?></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close"><?=label('cancelar');?></a>
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>