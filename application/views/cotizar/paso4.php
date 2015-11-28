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
<iframe id="vistaPrevia" class="col s12" height="500px" src="<?= base_url() ?>/cotizacion/preCarga">
</iframe>
<!-- <div id="preCarga" class="col s12">
</div> -->


<div class="col s12 m12 l12">
    <div class="input-field col s12 m4 l4">
        <div class="input-field col s12">
            <a href="#guardar-enviar" id="btnGuardarEnviar" class="left btn btn-default modal-trigger opt-finalizar"
               title="<?= label('tooltip_guardarEnviar'); ?>"><?= label('guardarEnviar'); ?></a>
        </div>
    </div>
    <div class="input-field col s12 m4 l4">
        <div class="input-field col s12">
            <a href="#guardar-descargar" id="btnGuardarDescargar"
               class="left btn btn-default modal-trigger opt-finalizar"
               title="<?= label('tooltip_guardarDescargar'); ?>"><?= label('guardarDescargar'); ?></a>
        </div>
    </div>
    <div class="input-field col s12 m4 l4">
        <div class="input-field col s12">
            <a id="btnGuardarCerrar" class="left btn btn-default opt-finalizar"
               title="<?= label('tooltip_guardarCerrar'); ?>"><?= label('guardarCerrar'); ?></a>
        </div>
    </div>
</div>
<div class="input-field col s12 opt-finalizar-cancelar">
    <a href="#cancelar-cot" id="btnCancelarCot" class="modal-trigger opt-finalizar"
       title="<?= label('tooltip_cancelarCot'); ?>"><?= label('cancelarCot'); ?></a>
</div>

<a href="<?=base_url()?>ManejadorPDF/downloadPdf">PRUEBA</a>


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
        Seleccionar aprobadores
        <div class="row">
            <div class="col s12 m12 l12">
                <form action="#">
                    <div class="row col s12 m6 l6">
                        <div class="listaCecksModals">

                        <?php
                          if (isset($resultado['aprobadores'])) {
                                   $contador = 0;
                                      foreach ($resultado['aprobadores'] as $aprobador) {
                                          ?>

                                          <p>
                                              <input type="checkbox" class="filled-in" id="filled-in-box_<?=$contador?>" value="<?=$aprobador['idUsuario'];?>" name="aprobadores" checked="checked">
                                              <label for="filled-in-box_<?=$contador++?>"><?=$aprobador['nombre'].' '.$aprobador['primerApellido'].' '.$aprobador['segundoApellido']?></label>
                                          </p>

                                          <?php 
                                        }
                                      }
                                  ?>
                            <!-- <p>
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
                            </p> -->

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
        <a href="<?= base_url() ?>cotizacion"
           class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>


<div id="guardar-descargar" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarGuardarDescargar'); ?></p>
    </div>
    <div class="modal-footer">
        <a href="<?= base_url() ?>cotizacion"
           class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>


<!-- <div id="guardar-cerrar" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarGuardarCerrar'); ?></p>
    </div>
    <div class="modal-footer">
        <a href="<?= base_url() ?>cotizacion"
           class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div> -->


<div id="cancelar-cot" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarCancelarCotizacion'); ?></p>
    </div>
    <div class="modal-footer">
        <a href="<?= base_url() ?>cotizacion"
           class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>


<script type="text/javascript">

  <?php 
    $js_array = json_encode($resultado['aprobadores']); 
    echo "var arrayAprobadores =". $js_array .";";
    ?>

    $(document).on("ready", function () {

      $('#btnGuardarDescargar').on('click', function(){
            alert('descargar');
            var html = crearPDF();
            $('#inset_form').html('<form  action="<?=base_url()?>ManejadorPDF/descargarCotizacion/<?= $resultado['idEmpresa'];?>/<?= encryptIt($resultado['idCotizacion']);?>" name="form" method="post" style="display:block;"><textarea name="miHtml">' + html + '</textarea></form>');
            document.forms['form'].submit();
         });


        // $('#botonPaso4').on("click", function () {


            // alert("ahora2");
             // $('#vistaPrevia').attr('src', $('#vistaPrevia').attr('src'));
            // $('#vistaPrevia').attr("src", $('#vistaPrevia').attr("src"));

        // });

        $('#btnGuardarCerrar').on("click", function () {
          // alert('hola');
            var url = '<?= base_url() ?>Cotizacion/guardar/<?= encryptIt($resultado['idCotizacion']);?>';
            var method = 'POST'; 
            $.ajax({
                   type: method,
                   url: url,
                   data: $('#formLineasDetalle, #formGeneral, #form_encabezado, #form_paso3AgregarPlantilla, #form_cuerpo, #form_informacion, #form_footer').serialize(), 
                   success: function(response)
                   {
                    alert(response);

                       // if (response == 0) {
                       //      $('#linkModalError').click();
                       // } else {
                       //      $('#linkModalEditado').click();
                       // }
                   }
                 });

        });
        




    });

    
</script>