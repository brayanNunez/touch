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
<div id="inset_form"></div>
<iframe id="vistaPrevia" class="col s12" height="500px" src="<?= base_url() ?>cotizacion/precarga">
</iframe>
<!-- <div id="preCarga" class="col s12">
</div> -->


<div class="col s12 m12 l12">
    <div class="input-field col s12 m4 l4">
        <div class="input-field col s12">
            <a id="btnGuardarEnviar" class="left btn btn-default opt-finalizar"
               title="<?= label('tooltip_guardarEnviar'); ?>"><?= label('guardarEnviar'); ?></a>
        </div>
    </div>
    <div class="input-field col s12 m4 l4">
        <div class="input-field col s12">
            <a id="btnGuardarDescargar"
               class="left btn btn-default opt-finalizar"
               title="<?= label('tooltip_guardarDescargar'); ?>"><?= label('guardarDescargar'); ?></a>
        </div>
    </div>
    <div class="input-field col s12 m4 l4">
        <div class="input-field col s12">
            <a id="btnGuardarCerrar" class="left btn btn-default opt-finalizar"
               title="<?= label('tooltip_guardarCerrar'); ?>"><?= label('soloGuardar'); ?></a>
        </div>
    </div>
</div>
<div class="input-field col s12 opt-finalizar-cancelar">
    <a href="#cancelar-cot" id="btnCancelarCot" class="modal-trigger opt-finalizar"
       title="<?= label('tooltip_cancelarCot'); ?>"><?= label('cancelarCot'); ?></a>
</div>

<a id="linkEnviada" style="display: none" class="waves-effect waves-light btn modal-trigger" href="#modal_guardarEnviada"></a>


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


<div id="guardar-enviar" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <?= label('paso4_seleccionarAprobadores'); ?>
        <div class="row">
            <div class="col s12 m12 l12">
                <form id="formAprobadores">
                    <div class="row col s12 m6 l6">
                        <div id="listaAprobadores" class="listaCecksModals">

                        <?php
                          if (isset($resultado['aprobadores'])) {
                                   $contador = 0;
                                      foreach ($resultado['aprobadores'] as $aprobador) {
                                          ?>

                                          <p>
                                              <input type="checkbox" class="filled-in aprobadores" id="filled-in-box_<?=$contador?>" value="<?=$aprobador['idUsuario'];?>" name="aprobadores[]">
                                              <label for="filled-in-box_<?=$contador++?>"><?=$aprobador['nombre'].' '.$aprobador['primerApellido'].' '.$aprobador['segundoApellido']?></label>
                                          </p>

                                          <?php 
                                        }
                                      }
                                  ?>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal-footer">
      <div id="aprobadoresAceptar">
        <a class="waves-effect waves-red btn-flat modal-action"><?= label('aceptar'); ?></a>
      </div>
        
    </div>
</div>
<!--  lista modals -->
<div id="modal_guardarCerrar" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('paso4_codigoCotizacion');?><b><span class="codigoCotizacion"></span></b></p>
        <p><?= label('paso4_cotizacionGuardada'); ?></p>
    </div>
    <div class="modal-footer">
        <a class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>


<div id="modal_guardarDescargar" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('paso4_codigoCotizacion');?><b><span class="codigoCotizacion"></span></b></p>
        <p><?= label('paso4_cotizacionGuardadaDescargando'); ?></p>
    </div>
    <div class="modal-footer">
        <a class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>

<div id="modal_guardarEnviada" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('paso4_codigoCotizacion');?><b><span class="codigoCotizacion"></span></b></p>
        <p><?= label('paso4_cotizacionGuardadaEnviada'); ?></p>
    </div>
    <div class="modal-footer">
        <a class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>


<div id="cancelar-cot" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarCancelarCotizacion'); ?></p>
    </div>
    <div class="modal-footer">
        <a href="<?= base_url()?>cotizacion" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
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
<!--  fin lista modals -->


<script type="text/javascript">

  <?php 
    $js_array = json_encode($resultado['aprobadores']); 
    echo "var arrayAprobadores =". $js_array .";";

    if (isset($resultado['aprobadoresCotizacion'])) {
      $js_array = json_encode($resultado['aprobadoresCotizacion']); 
      echo "var arrayAprobadoresCotizacion =". $js_array .";";

      ?>

      $(document).on("ready", function () {

      //Activar los checks de los aprobadores de esta cotizacion
      for (var i = 0; i < arrayAprobadoresCotizacion.length; i++) {
          var idAprobador = arrayAprobadoresCotizacion[i]['idUsuario'];
          $("#listaAprobadores input[value='"+idAprobador+"']").prop("checked", true );
        };
      });

      <?php

    };

    
    ?>



    $(document).on("ready", function(){

      $('#btnGuardarEnviar').on('click', function(){
        if (validacionesCotizacion()) {
        <?php
          if (isset($resultado['aprobadores'])) {
             $cantidadAprobadores = count($resultado['aprobadores']);

             if ($cantidadAprobadores == 0) {
              ?>
                alert('<?= label('validaciones_noHayAprobadores');?>');
              <?php
             } else {
             ?>
              $('#guardar-enviar').openModal();
             <?php
           }
          }
        ?>

      }
      });

      $('#linkEnviada').leanModal({
            complete: function() { 
             window.location.href='<?= base_url() ?>Cotizacion';
            } // Callback for Modal close
          }
        );


        

      function validacionesCotizacion(){
        var miSelect = $('#paso1Moneda');
        if (miSelect.val()== null) {
          alert('<?= label('validaciones_seleccionarMoneda');?>');
          return false;
        };

        var miSelect = $('.nombreServicio');
        var lineasIncompletas = false;
        miSelect.each(function(){
          if ($(this).val()==null) {
            lineasIncompletas = true;
          };
        });
        if(lineasIncompletas){
          alert('<?= label('validaciones_lineasIncompletas');?>');
          return false;
        }

        return true;
      }

      $('#btnGuardarDescargar').on('click', function(){
        if (validacionesCotizacion()) {
          guardar(1,1);
        };
          // 
      });

      $('#aprobadoresAceptar').on('click', function(){
        
        var cantidad = $('.aprobadores:checked').size();
        if (cantidad != 0) {
          $('#guardar-enviar').closeModal();
          guardar(2,2);
          // alert('guardar');
        } else {
          alert('<?= label('paso4_seleccioneAprobador'); ?>');
        }

          
      });

        $('#btnGuardarCerrar').on("click", function() {
          if (validacionesCotizacion()) {
          guardar(0,1);
        };
            
        });

        function guardar(accion, estado){

          //El siguiente código me indica cual es la columna que ordena la tabla y si es ascendente o descendente 
          //inicio
          var asc = $('.sorting_asc').data('indice-columna');
          var desc = $('.sorting_desc').data('indice-columna');
          var ascendente = 1;
          var columnaSeleccionada = asc;
          if (desc != null) {
              ascendente = 0;
              var columnaSeleccionada = desc;
          } 
          //fin

          var url = '<?= base_url() ?>Cotizacion/guardar/<?= encryptIt($resultado['idCotizacion']);?>' + '/' + estado;
            var method = 'POST'; 
            $.ajax({
                   type: method,
                   url: url,
                   data: $('#form_resultados, #formAprobadores, #formLineasDetalle, #formGeneral, #form_encabezado, #form_paso3AgregarPlantilla, #form_cuerpo, #form_informacion, #form_footer').serialize() + '&columna='+ columnaSeleccionada +'&ascendente='+ ascendente, 
                   // data.push({name: 'columna', value: columnaSeleccionada}, {name: 'ascendente', value: ascendente});
                   success: function(response)
                   {
                    // alert(response);
                    if (response == 'false') {
                      $('#modal_transaccionIncorrecta').openModal();
                    } else{
                      var cotizacionSinCodigo = false;
                      var codigo = $('#paso1_codigo').val();
                      var numero = $('#paso1_numero').val();

                      if (response != 0) {// la cotización no tiene número
                        cotizacionSinCodigo = true;
                        $('#paso1_numero').val(response);
                        numero = response;
                      };
                      var codigoCompleto = '';
                      if (codigo == '') {
                        codigoCompleto = numero;
                      } else{
                        codigoCompleto = codigo + '-' + numero;
                      };
                      $('.codigoCotizacion').text(codigoCompleto);

                      if (accion ==0) {//guardar y cerrar
                        $('#modal_guardarCerrar').openModal();
                        if (cotizacionSinCodigo) {
                          generarPDF();
                        } 
                      } 
                      if (accion == 1) {// es una descarga. Nota: la descarga no se puede realizar mediante ajax por eso se hace de esta manera
                        $('#modal_guardarDescargar').openModal();
                        
                        actualizarDiseno();
                        var html = obtenerHTML();
                        $('#inset_form').html('<form  action="<?=base_url()?>ManejadorPDF/descargarCotizacion/<?= $resultado['idEmpresa'];?>/<?= encryptIt($resultado['idCotizacion']);?>" name="form" method="post" style="display:block;"><textarea name="miHtml">' + html + '</textarea></form>');
                        document.forms['form'].submit();
                        if (cotizacionSinCodigo) {
                          generarPDF();
                        } 
                      }

                      if (accion == 2) {// enviar por correo
                        // alert('enviar correo');
                        $.ajax({
                           type: 'POST',
                           url: '<?=base_url()?>ManejadorPDF/enviarCorreoParaAprobacion/<?= encryptIt($resultado['idCotizacion']);?>',
                           // data: $('#formAprobadores, #formLineasDetalle, #formGeneral, #form_encabezado, #form_paso3AgregarPlantilla, #form_cuerpo, #form_informacion, #form_footer').serialize(), 
                           success: function(response) {
                            // alert(response);
                            //$('#modal_guardarEnviada').openModal(); //mec
                            $('#linkEnviada').click();

                            if (cotizacionSinCodigo) {
                              generarPDF();
                            } 

                           }
                        });
                     }
                     };
                 }
                 });

        }
        
    });

    
</script>