

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
                                              <iframe id="vistaPrevia" class="col s12" height="500px" src="<?= base_url() ?>files/empresas/<?= $resultado['idEmpresa'];?>/cotizaciones/<?= encryptIt($resultado['idCotizacion']);?>/sistema/test.pdf">
                                              </iframe>
                                                  <!-- <div class="input-field col s12 m4 l4"> -->
                                                  <?php
                                                  // echo $resultado['estado'];
                                                  if ($resultado['estado'] == 'espera' && $resultado['aprobadorEstaCotizacion'] == '1') {
                                                    ?>

                                                    <div class="input-field col s12 m6 l6">
                                                      <a href="#enviar" id="btnGuardarEnviar" class="left btn btn-default modal-trigger opt-finalizar"
                                                         title="<?= label('tooltip_aprobar'); ?>"><?= label('aprobar'); ?></a>
                                                    </div>
                                                    <div class="input-field col s12 m6 l6">
                                                      <a href="#rechazar" id="btnGuardarEnviar" class="left btn btn-default modal-trigger opt-finalizar"
                                                          title="<?= label('tooltip_rechazar'); ?>"><?= label('rechazar'); ?></a>
                                                    </div>

                                                    <?php
                                                    } else {

                                                      if ($resultado['estado'] != 'espera' && $resultado['aprobadorEstaCotizacion'] == '1') {
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
    $('#enviar #boton').on('click', function(){
      alert('enviar');
      editarEstado(4);
    });

    $('#rechazar #boton').on('click', function(){
      alert('rechazar');
      editarEstado(3);
    });

  });

  function editarEstado(estado){
    var url = '<?= base_url() ?>Cotizacion/cambiarEstado/<?= encryptIt($resultado['idCotizacion']);?>' + '/' + estado;
      var method = 'POST'; 
      $.ajax({
             type: method,
             url: url,
             // data: $('#formAprobadores, #formLineasDetalle, #formGeneral, #form_encabezado, #form_paso3AgregarPlantilla, #form_cuerpo, #form_informacion, #form_footer').serialize(), 
             success: function(response)
             {
              alert(response);
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
    <div class="modal-content">
        <p><?= label('confirmarEnviarCliente'); ?></p>
    </div>
    <div class="modal-footer">
        <div id="boton" class="modal-footer black-text">
          <a class="waves-effect waves-green btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
       </div>
    </div>
</div>

<div id="rechazar" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarRechazar'); ?></p>
    </div>
    <div class="modal-footer">
        <div id="boton" class="modal-footer black-text">
          <a class="waves-effect waves-green btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
       </div>
    </div>
</div>

<!--Fin lista modals -->
