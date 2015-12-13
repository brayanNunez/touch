

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
                                                    <div id="botonesAprobar">
                                                      <div class="input-field col s12 m6 l6">
                                                        <a href="#enviar" id="btnGuardarEnviar" class="left btn btn-default modal-trigger opt-finalizar"
                                                           title="<?= label('tooltip_aprobar'); ?>"><?= label('aprobar'); ?></a>
                                                      </div>
                                                      <div class="input-field col s12 m6 l6">
                                                        <a href="#rechazar" id="btnGuardarEnviar" class="left btn btn-default modal-trigger opt-finalizar"
                                                            title="<?= label('tooltip_rechazar'); ?>"><?= label('rechazar'); ?></a>
                                                      </div>
                                                    </div>
                                                    <p style="display:none" id="mensajeAprobacion"><?= label('aprobacion_cotizacionTramitada'); ?></p>

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
    // $('#enviar #boton').on('click', function(){
    //   // alert('enviar');
    //   editarEstado(4);
    // });

    $('#rechazar #boton').on('click', function(){
      // alert('rechazar');
      editarEstado(3);
    });

    var correo = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: {
                url: '<?=base_url()?>Cotizacion/correosSugerencia/<?= encryptIt($resultado['idCotizacion']);?>',
                ttl: 1000,
                filter: function (list) {
                    return $.map(list, function (correo) {
                        return {name: correo};
                    });
                }
            }
        });
        correo.initialize();


        $('.tags_aprobarDestinatario  > > input').tagsinput({
            typeaheadjs: {
                name: 'correo',
                displayKey: 'name',
                valueKey: 'name',
                source: correo.ttAdapter()
            },

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
              // alert(response);
              if (response ==1) {
                $('#mensajeAprobacion').css('display', 'block');
                $('#botonesAprobar').css('display', 'none');
                if (estado == 3) {
                  $('#cotizacionRechazada').openModal();
                } else {
                  $.ajax({
                         type: 'POST',
                         url: '<?=base_url()?>ManejadorPDF/enviarCotizacionCliente/<?= $resultado['idEmpresa'];?>/<?= encryptIt($resultado['idCotizacion']);?>',
                         // data: $('#formAprobadores, #formLineasDetalle, #formGeneral, #form_encabezado, #form_paso3AgregarPlantilla, #form_cuerpo, #form_informacion, #form_footer').serialize(), 
                         success: function(response) {

                         }
                      });
                  $('#cotizacionEnviada').openModal();
                }
              } else {
                $('#transaccionIncorrecta').openModal();
            };
          }
          });

  }

 function validacionCorrecta(){
  alert('enviar datos');

}
  



</script>
<!-- lista modals -->

<?php 
      $destinatario = array();
      $destinatarioCC = array();
      $cliente = $resultado['cliente'];
      if ($cliente['enviarFacturas'] || $resultado['idContactoSeleccionado'] == '') {
        array_push($destinatario, $cliente['correo']);
      }

      $atenciones = $resultado['atenciones'];
      foreach ($atenciones as $atencion ) {
        if ($atencion['idPersonaContacto'] == $resultado['idContactoSeleccionado']) {
          array_push($destinatario, $atencion['correo']);
        } else {
          if ($atencion['enviarFacturas']) {
            array_push($destinatarioCC, $atencion['correo']);
          }
        }
      }  
      $valueDestinatario = '';
      foreach ($destinatario as $correo) {
        $valueDestinatario .= $correo.',';
      } 
      $valueDestinatarioCC = '';
      foreach ($destinatarioCC as $correo) {
        $valueDestinatarioCC .= $correo.',';
      }      

?>

<div id="enviar" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <form id="formEnvio">
    <div class="modal-content" style="text-align: left">
        <p><?= label('confirmarEnviarCliente'); ?></p>
        <p><?= label('confirmarDestinatario'); ?></p>


        <div class="inputTag col s12">
            <label for="aprobarDestinatario"><?= label('aprobar_destinatario'); ?></label>
            <br>
            <div id="aprobarDestinatario" class="example tags_aprobarDestinatario">
                <div class="bs-example">
                    <input name="aprobar_destinatario" placeholder="<?= label('aprobar_anadir'); ?>" type="text"
                           value="<?=$valueDestinatario;?>"/>
                </div>
            </div>
            <br>
        </div>

        <div class="inputTag col s12">
            <label for="aprobarDestinatarioCC"><?= label('aprobar_destinatarioCC'); ?></label>
            <br>
            <div id="aprobarDestinatarioCC" class="example tags_aprobarDestinatario">
                <div class="bs-example">
                    <input name="aprobar_destinatarioCC" placeholder="<?= label('aprobar_anadir'); ?>" type="text"
                           value="<?=$valueDestinatarioCC;?>"/>
                </div>
            </div>
            <br>
        </div>

        <div class="input-field col s12 m6">
            <input id="envio_asunto" name="envio_asunto" type="text" value="<?= label('envio_asuntoDefecto'); ?>">
            <label for="envio_asunto"><?= label('envio_asunto'); ?></label>
        </div>
        <div class="input-field col s12">
          <textarea id="envio_texto" name="envio_texto" class="materialize-textarea" style="height: 24px;"></textarea>
          <label for="envio_texto" class=""><?= label('envio_texto'); ?></label>
        </div>
        <div id="contenedorEnvios">
          <p>
              <input type="checkbox" class="filled-in aprobadores" id="filled-in-box_1" value="" name="aprobadores[]">
              <label for="filled-in-box_1">PDF</label>
          </p>
          <p>
              <input type="checkbox" class="filled-in aprobadores" id="filled-in-box_2" value="" name="aprobadores[]">
              <label for="filled-in-box_2">Link</label>
          </p>
        </div>

    </div>

    <div class="modal-footer">
        <div id="boton" class="modal-footer black-text">
          <a onclick="$(this).closest('form').submit()" class="waves-effect waves-green btn-flat modal-action"><?= label('aceptar'); ?></a>
       </div>
    </div>
    </form>
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


<div id="cotizacionEnviada" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('cotizacionEnviadaCliente'); ?></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>

<div id="cotizacionRechazada" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('cotizacionRechazada'); ?></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>

<div id="transaccionIncorrecta" class="modal">
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
