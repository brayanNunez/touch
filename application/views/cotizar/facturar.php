

<div style="display: none" id="inset_form"></div>
<!-- START CONTENT -->

<section id="content">

    <!--start container-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloCotizacion'); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <div class="container">
        <div id="chart-dashboard">
            <div class="row">
                <div class="col s12">
                    <div id="submit-button" class="section">
                        <div class="row">
                            <div class="col s12">
                                <div class="card lista-elementos">
                                    <div id="table-datatables">
                                        <div class="row">
                                            <div class="col s12">
                                              <iframe id="vistaPrevia" class="col s12" height="500px" src="<?= base_url() ?>files/empresas/<?= $resultado['idEmpresa'];?>/cotizaciones/<?= encryptIt($resultado['idCotizacion']);?>/sistema/cotizacion.pdf">
                                              </iframe>
                                                  <!-- <div class="input-field col s12 m4 l4"> -->
                                                  <?php
                                                  // echo $resultado['estado'];
                                                  if ($resultado['estado'] == 'finalizada' && $resultado['contadorEstaCotizacion'] == '1') {
                                                    ?>
                                                    <div id="botonesAprobar">
                                                      <div class="input-field col s12 m6 l6">
                                                        <a href="#enviar" class="left btn btn-default modal-trigger opt-facturar"
                                                           title="<?= label('tooltip_facturar'); ?>"><?= label('facturar'); ?></a>
                                                      </div>
                                                      
                                                    </div>
                                                    <p style="display:none" id="mensajeAprobacion"><?= label('aprobacion_cotizacionTramitada'); ?></p>

                                                    <?php
                                                    } else {

                                                      if ($resultado['estado'] == 'facturada' && $resultado['contadorEstaCotizacion'] == '1') {
                                                    ?>

                                                    <p id="mensajeAprobacion"><?= label('aprobacion_cotizacionTramitada'); ?></p>

                                                    <?php
                                                    } 


                                                    }
                                                    ?>

                                                
                                                <!-- </div> -->
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

    <?php
    $this->load->view('layout/default/menu-crear.php');
    ?>

    <!--end container-->
</section>
<!-- <div style="display: none">
    <a id="linkModalErrorCargarDatos" href="#transaccionIncorrectaCargar" class="btn btn-default modal-trigger"></a>
    <a id="linkModalErrorEliminar" href="#transaccionIncorrectaEliminar" class="btn btn-default modal-trigger"></a>
</div> -->

<!-- END CONTENT-->


<script type="text/javascript">


$(document).on('ready', function(){
  $('#facturarCotizacion').on('click', function(){
    facturarCotizacion();
  });
});

 function facturarCotizacion(){
    var url = '<?=base_url()?>ManejadorPDF/facturarCotizacion/<?= encryptIt($resultado['idCotizacion']);?>';
    var method = 'POST'; 
    $.ajax({
           type: method,
           url: url,
           // data: $('#formEnvio').serialize(), 
           success: function(response)
           {
            // alert(response);
            if (response == 1) {
              $('#mensajeAprobacion').css('display', 'block');
              $('#botonesAprobar').css('display', 'none');
              $('#enviar').closeModal();
              $('#cotizacionEnviada').openModal();
            } else {
              $('#enviar').closeModal();
              $('#modal_transaccionIncorrecta').openModal();
            }
          }
        });

}

  



</script>
<!-- lista modals -->


<div id="enviar" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content" style="text-align: left">
        <p style="text-align: center"><?= label('facturar_mensaje'); ?></p>
    </div>

    <div class="modal-footer">
        <div id="boton" class="modal-footer black-text">
          <a id='facturarCotizacion' class="waves-effect waves-green btn-flat modal-action"><?= label('aceptar'); ?></a>
       </div>
    </div>
</div>




<div id="cotizacionEnviada" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('cotizacionFacturada'); ?></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>



<div id="modal_transaccionIncorrecta" class="modal">
    <div  class="modal-header headerTransaccionIncorrecta">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('errorGuardar'); ?></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>

<!--Fin lista modals -->
