<!--  START CONTENT  -->
<section id="content">
    <!--start container-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="breadcrumbs-title"><?= label('tituloPagos'); ?></h5>
                </div>
            </div>
        </div>
    </div>

    <!-- <div id="inset_form"></div> -->

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

                                        <div id="boton_nuevo">
                                            <a href="<?=base_url()?>pagos/listaPlan" class="btn btn-default modal-trigger">Cambiar de plan</a>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s12 m6 l6">
                                                <div class="input-field col s12">
                                                    <h5 class="input-field col s12"><?=label('datosDelServicio');?></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12 m6 l6">
                                                <div class="input-field col s12">
                                                    <input id="monto_mensual" type="text" value="$20" readonly>
                                                    <label for="monto_mensual"><?= label('monto_mensual'); ?></label>
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m6 l6">
                                                <div class="input-field col s12">
                                                    <input id="tipo_plan" type="text" value="Básico" readonly>
                                                    <label><?=label('tipo_plan');?></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s12 m6 l6">
                                                <div class="input-field col s12">
                                                    <input id="fecha_pago" type="text" value="18/06/2015" readonly>
                                                    <label for="fecha_pago"><?= label('fecha_pago'); ?></label>
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m6 l6">
                                                <div class="input-field col s12">
                                                    <input id="estado_pago" type="text" value="Moroso" readonly>
                                                    <label for="estado_pago"><?= label('estado_pago'); ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h5><?= label('lista_pagos_pendientes'); ?></h5>
                                    <table class="table striped">
                                        <thead>
                                        <tr>
                                            <th><?= label('tablaPagos_fecha'); ?></th>
                                            <th><?= label('tablaPagos_monto'); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>18/06/2015</td>
                                            <td>$20</td>
                                            
                                        </tr>
                                        <tr>
                                            <td>18/06/2015</td>
                                            <td>$20</td>
                                        </tr>
                                        <tr>
                                            <td>18/06/2015</td>
                                            <td>$20</td>
                                        </tr>
                                        <tr>
                                            <td>18/06/2015</td>
                                            <td>$20</td>
                                        </tr>
                                        <tr>
                                            <td>18/06/2015</td>
                                            <td>$20</td>
                                        </tr>
                                        <tr>
                                            <td>18/06/2015</td>
                                            <td>$20</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="section reporte-generar">
                                        <a href="#Obtener" class="btn btn-default modal-trigger"><?= label('pagar_servicio'); ?></a>
                                    </div>
                                    

                                    <div id="table-datatables">
                                        <div class="row">
                                            <div class="col s12 m12 l12">
                                                <h5><?= label('lista_pagos_recientes'); ?></h5>
                                                <table id="data-table-simple tabla-pagos" class="responsive-table display"
                                                       cellspacing="0">
                                                    <thead>
                                                    <tr>
                                                        <th><?= label('tablaPagos_codigo'); ?></th>
                                                        <th><?= label('tablaPagos_fecha'); ?></th>
                                                        <th><?= label('tablaPagos_monto'); ?></th>
                                                        <th><?= label('tablaPagos_comprobante'); ?></th>
                                                    </tr>
                                                    </thead>
                                                    <tfoot>
                                                    <!--                                                    <tr>-->
                                                    <!--                                                        <th>-->
                                                    <? //=label('tablaPagos_fecha');?><!--</th>-->
                                                    <!--                                                        <th>-->
                                                    <? //=label('tablaPagos_monto');?><!--</th>-->
                                                    <!--                                                    </tr>-->
                                                    </tfoot>
                                                    <tbody>
                                                    <tr>
                                                        <td>001</td>
                                                        <td>18/05/2015</td>
                                                        <td>$20</td>
                                                        <td><a href="<?=base_url()?>files/facturas/test.pdf">Archivo</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>002</td>
                                                        <td>18/04/2015</td>
                                                        <td>$20</td>
                                                        <td><a href="<?=base_url()?>files/facturas/test.pdf">Archivo</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>003</td>
                                                        <td>18/03/2015</td>
                                                        <td>$20</td>
                                                        <td><a href="<?=base_url()?>files/facturas/test.pdf">Archivo</a></td>
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

        <?php
        $this->load->view('layout/default/menu-crear.php');
        ?>

</section>

<!-- END CONTENT-->

<script>
$(document).ready(function () {
        $(".checkbox").click(function(event) {
            $(".checkbox:checkbox:checked").removeAttr("checked");
            $(this).prop("checked", true);
        });
    });



</script>



<!-- lista modals -->

<div id="Obtener" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('mensaje_pago'); ?></p>
        <div class="input-field col s12">
            <input id="tarjeta_numero" type="text">
            <label for="tarjeta_numero"><?= label('tarjeta_numero'); ?></label>
        </div>

        <div class="input-field col s12">
            <input id="tarjeta_expiracion" type="text">
            <label for="tarjeta_expiracion"><?= label('tarjeta_expiracion'); ?></label>
        </div>
    </div>
    <div class="modal-footer black-text">
        <a href="<?=base_url()?>pagos" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<!--Fin lista modals -->



<!-- html de la factura a crear -->
<script type="text/javascript">

 $(document).ready(function(){

    $("#crear").click(function(){
     var style = '';

      var html = '<!DOCTYPE html><html><head><title>403 Forbidden</title><link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/dashboard/css/estiloFactura.css"></head><body id="hojaPDF" '+ style+'>';
      html +='<div id="headerDiseno">'+ $('#headerDiseno').html() + '</div></body></html>';
   
    $('#inset_form').html('<form  action="<?=base_url()?>ManejadorPDF/crearFactura" name="form" method="post" style="display:block;"><textarea name="miHtml">' + html +'</textarea></form>');
     document.forms['form'].submit();

 
 });

 })
   
</script>

<div style="display:none">
    
    <div id="inset_form"></div>

    <div id="headerDiseno">
        <div id="barraTitulo">
                <p id="nombreSistema"><strong>Facturación Touch!</strong></p>
        </div>
       <div id="factura">
          <div id="datosEncabezado">
          
             <div class="datos" id="datos1">
                <div></div>
                
                <p>Cédula: <strong>3-101-692725</strong></p>
                <p>Teléfono: <strong>8528-0288</strong></p>
                
             </div>
             <div class="datos" id="datos2">
                <div></div>
                <p>Correo: <strong>admin@touch.cr</strong></p>
                <p><strong>Sarchí Sur, Valverde Vega</strong></p>
                
             </div>
             <div class="linea">
             </div>
             <br>
             <div class="datos">
                <div id="datos3">
                <div></div>
                <p>Señor(es): <strong>Juan Diego Alfaro</strong></p>
                <p>Dirección: <strong>SN de Grecia</strong></p>
                  
                </div>
                <div id="datos4">
                <div></div>
                <p>Fecha: <strong>24/06/2015</strong></p>
                <p>Hora: <strong>09:45 am</strong></p>
                </div>
                
             </div>

          </div>
          <!-- <div id="contenidoFactura"> -->
          <div class="linea">
          </div>
          <br>

           <table id="tablaFactura">
             <thead >
              <tr>
                 <th>Cantidad</th>
                 <th>Descripción</th>
                 <th>Total</th>
              </tr>
             </thead>
             <tfoot>
              <tr>
                 <td>2</td>
                 <td>Pago del servicio touch!</td>
                  <td>$180</td>
              </tr>
             </tfoot>
            </table>
       </div>
    </div>
</div>

    <button id="crear">Crear factura (PRUEBA)</button>