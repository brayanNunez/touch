
<div class="row">
   <div class="input-field col s12 m3 l3 inputSelector">
      <label for="contenedorSelectCliente"><?= label("paso3_labelPlantilla"); ?></label>
      <br>
      <div id="contenedorSelectPalntilla"></div>
   </div>
</div>
<!-- <div class="contenedorHoja col s12"> -->
<button id="crear">CREAR</button>
<div style="display: none" id="inset_form"></div>
<div id="contenedorDisenoHoja">
   <div id="contenedorHoja">
      <div id="hoja">
         <div id="headerDiseno">
            <div id="contenerdorEditarEncabezado">
               <a id="editarEncabezado" href="#modalEncabezado"
                  class="editarExterno modal-trigger btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
               <i class="mdi-editor-mode-edit"></i>
               </a>
            </div>
            <div id="encabezado">
               <div id="logo" class="box">
                  <img class="imagen" src="<?= base_url() ?>assets/dashboard/images/sombrero.png"/>
               </div>
               <div id="datosEncabezado">
                  <div class="datos" id="datos1">
                     <div></div>
                     <p class="box" id="nombreEmpresa"><?= $resultado['empresa']['nombre']?></p>
                     <p class="box" id="codigoCotizacion">Código de cotización: <span id="disenoCodigo"></span><span id="separador">-</span><span id="disenoNumero"></span></p>
                     <p class="box" id="cliente">Cliente: <span id="disenoCliente"></span></p>
                     <p class="box" id="atencion">Atención: <span id='disenoAtencion'></span></p>
                     <p class="box" id="vendedor">Vendedor: <?= $resultado['usuario']['nombre'].' '.$resultado['usuario']['primerApellido'].' '.$resultado['usuario']['segundoApellido']?></p>
                  </div>
                  <div class="datos" id="datos2">
                     <div></div>
                     <p class="box" id="fecha">Fecha: 24/06/2015</p>
                     <p class="box" id="hora">Hora: 09:45 am</p>
                  </div>
               </div>
            </div>
            <div class="barra-horizontal" id="barra1">
            </div>
            <div id="contenedorEditarCuerpo">
               <a id="editarCuerpo" href="#modalCuerpo"
                  class="editarExterno modal-trigger btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
               <i class="mdi-editor-mode-edit"></i>
               </a>
            </div>
         </div>
         <div id="cuerpoDocumento">
            <div id="contenidoDiseno">
               <table>
                  <thead>
                     <tr>
                        <th class="celdaColumna col_1">Item</th>
                        <th class="celdaColumna col_2">Nombre</th>
                        <th class="celdaColumna col_3">Descripción</th>
                        <th class="celdaColumna col_4">Precio unitario</th>
                        <th class="celdaColumna col_5">Cantidad</th>
                        <th class="celdaColumna col_6">Impuesto</th>
                        <th class="celdaColumna col_7">Total</th>
                     </tr>
                  </thead>
                  <tbody id="lineasDiseno">
                     
                  </tbody>
               </table>
               <div id="contenedorResultados">
                  <div id="resultados">
                     <p class="box" id="descuento">
                        Descuento: 
                        <spam id="resultadoDescuento">15%</spam>
                     </p>
                     <p class="box" id="impuesto">
                        Impuesto: 
                        <spam id="resultadoImpuesto">13%</spam>
                     </p>
                     <p class="box" id="total">
                        Total: 
                        <spam id="resultadoTotal">$780</spam>
                     </p>
                  </div>
               </div>
               <div id="prefooter">
               </div>
            </div>
            <div id="footerDiseno">
               <div class="barra-horizontal" id="barra2"></div>
               <div id="contenedorEditarInformacion">
                  <a id="editarInformacion" href="#modalInformacion"
                     class="editarExterno modal-trigger btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                  <i class="mdi-editor-mode-edit"></i>
                  </a>
               </div>
               <div id="informacion">
                  <p class="box" id="formaPago">Forma de pago: 50% primer mes, 50% segundo mes.</p>
                  <p class="box" id="validez">Válido hasta: <span id="disenoValidez"></span></p>
                  <p class="box" id="informacionDetalle">Detalle: Por las especificaciones del equipo, es posible que
                     existan variantes entre impresiones sin que esto represente para nosotros problemas de calidad.
                     La presente oferta tiene una validéz de 15 días naturales a partir de esta fecha. 
                  </p>
                  <div class="box" id="firma">
                     <p>Firma:__________________________</p>
                     <p id="nombreFirma">Emanuel Conejo</p>
                  </div>
               </div>
               <div class="barra-horizontal" id="barra3">
               </div>
               <div id="contenedorEditarFooter">
                  <a id="editarFooter" href="#modalFooter"
                     class="editarExterno modal-trigger btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                  <i class="mdi-editor-mode-edit"></i>
                  </a>
               </div>
               <div id="footerCotizacion">
                  <div class="box" id="logo">
                     <img class="imagen" src="<?= base_url() ?>assets/dashboard/images/sombrero.png"/>
                  </div>
                  <div id="datosFooter">
                     <div class="datos" id="datos1">
                        <div></div>
                        <p class="box" id="telefono">Teléfono: <span><?= $resultado['empresa']['telefono'];?></span></p>
                        <p class="box" id="sitio">Sitio web: www.mrrabbit.cr</p>
                        <p class="box" id="correo">Correo: <span><?= $resultado['empresa']['correo'];?></span></p>
                     </div>
                     <div class="datos" id="datos2">
                        <div></div>
                        <p>Con el mayor deseo de servirle, me pongo a su entera disposición.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="informacionSistema">
            <span>
               <p><?= label('paso3_Diseno_mensajeFotter').label('link_paginaInicial'); ?></p>
            </span>
         </div>
      </div>
   </div>
</div>
<div style="visibility:hidden; position:absolute">                                 
   <a id="linkNuevaPlantilla" href="#agregarPlantilla" class="modal-trigger"></a>
   <a id="linkModalGuardado" href="#transaccionCorrecta" class="btn btn-default modal-trigger"></a>
   <a id="linkModalError" href="#transaccionIncorrecta" class="btn btn-default modal-trigger"></a>
</div>
<!-- </div> -->
<!-- <div class="row">
   <div class="input-field col s4 m7 l7">
       <a href="#modalVistaPrevia" class=" left btn btn-default modal-trigger">Vista previa</a>
   </div>
   </div> -->
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
<!-- lista modals -->
<div id="modalEncabezado" class="modal">
   <div class="modal-header">
      <p><?= label('nombreSistema'); ?></p>
      <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
   </div>
   <div class="modal-content">
      <div class="row">
         <div class="col s12 m12 l12">
            <form id="form_encabezado">
               <div class="row col s12 m6 l6">
                  <div class="listaCecksModals">
                     <p>
                        <input name="checksEncabezado_nombreEmpresa" value="nombreEmpresa" type="checkbox" class="filled-in checksEncabezado"
                           id="filled-in-box1">
                        <label for="filled-in-box1">Nombre de la empresa</label>
                     </p>
                     <p>
                        <input name="checksEncabezado_codigoCotizacion" value="codigoCotizacion" type="checkbox"
                           class="filled-in checksEncabezado" id="filled-in-box2">
                        <label for="filled-in-box2">Código de cotización</label>
                     </p>
                     <p>
                        <input name="checksEncabezado_cliente" value="cliente" type="checkbox" class="filled-in checksEncabezado"
                           id="filled-in-box3">
                        <label for="filled-in-box3">Cliente</label>
                     </p>
                     <p>
                        <input name="checksEncabezado_atencion" value="atencion" type="checkbox" class="filled-in checksEncabezado"
                           id="filled-in-box4">
                        <label for="filled-in-box4">Atención</label>
                     </p>
                     <p>
                        <input name="checksEncabezado_vendedor" value="vendedor" type="checkbox" class="filled-in checksEncabezado"
                           id="filled-in-box5">
                        <label for="filled-in-box5">Vendedor</label>
                     </p>
                     <p>
                        <input name="checksEncabezado_fecha" value="fecha" type="checkbox" class="filled-in checksEncabezado"
                           id="filled-in-box6">
                        <label for="filled-in-box6">Fecha</label>
                     </p>
                     <p>
                        <input name="checksEncabezado_hora" value="hora" type="checkbox" class="filled-in checksEncabezado"
                           id="filled-in-box7">
                        <label for="filled-in-box7">Hora</label>
                     </p>
                     <p>
                        <input name="checksEncabezado_logo" value="logo" type="checkbox" class="filled-in checksEncabezado"
                           id="filled-in-box8">
                        <label for="filled-in-box8">Imagen</label>
                     </p>
                  </div>
               </div>
               <div class="row col s12 m6 l6">
                  <div class="inputModals input-field col s12">
                     <p>Color de fondo: <input name="colorEncabezado_colorFondo" class="colorFondo" type="color" id="myColor1"></p>
                  </div>
                  <div class="inputModals input-field col s12">
                     <p>Color de letra: <input name="colorEncabezado_colorLetra" class="colorLetra" type="color" id="myColor2"></p>
                  </div>
                  <div class="inputModals input-field col s12">
                     <p>Color de barra horizontal: <input name="colorEncabezado_colorBarra" class="colorBarra" type="color" id="myColor3"></p>
                  </div>
                  <div class="input-field col s12">
                     <textarea id="message" class="materialize-textarea" style="height: 24px;"></textarea>
                     <label for="message" class="">Texto adicional</label>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   <div class="modal-footer">
      <div class="aplicarCambios">
         <a href="#" class="waves-effect btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
      </div>
   </div>
</div>
<div id="modalCuerpo" class="modal">
   <div class="modal-header">
      <p><?= label('nombreSistema'); ?></p>
      <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
   </div>
   <div class="modal-content">
      <div class="row">
         <div class="col s12 m12 l12">
            <form id="form_cuerpo">
               <div class="row col s12 m6 l6">
                  <div class="listaCecksModals">
                     <p>Mostrar las siguientes columnas:</p>
                     <p>
                        <input value="col_1" name="checksDetalle_ColumnaItem" type="checkbox" class="filled-in checksCuerpo" id="cuerpofilled-in-box1">
                        <label for="cuerpofilled-in-box1">Item</label>
                     </p>
                     <p>
                        <input value="col_2" name="checksDetalle_ColumnaNombre" type="checkbox" class="filled-in checksCuerpo" id="cuerpofilled-in-box2">
                        <label for="cuerpofilled-in-box2">Nombre</label>
                     </p>
                     <p>
                        <input value="col_3" name="checksDetalle_ColumnaDescripcion" type="checkbox" class="filled-in checksCuerpo" id="cuerpofilled-in-box3">
                        <label for="cuerpofilled-in-box3">Descripción</label>
                     </p>
                     <p>
                        <input value="col_4" name="checksDetalle_ColumnaPrecio" type="checkbox" class="filled-in checksCuerpo" id="cuerpofilled-in-box5">
                        <label for="cuerpofilled-in-box5">Precio unitario</label>
                     </p>
                     <p>
                        <input value="col_5" name="checksDetalle_ColumnaCantidad" type="checkbox" class="filled-in checksCuerpo" id="cuerpofilled-in-box6">
                        <label for="cuerpofilled-in-box6">Cantidad</label>
                     </p>
                     <p>
                        <input value="col_6" name="checksDetalle_ColumnaImpuesto" type="checkbox" class="filled-in checksCuerpo" id="cuerpofilled-in-box7">
                        <label for="cuerpofilled-in-box7">Impuesto</label>
                     </p>
                     <p>
                        <input value="col_7" name="checksDetalle_ColumnaTotal" type="checkbox" class="filled-in checksCuerpo" id="cuerpofilled-in-box8">
                        <label for="cuerpofilled-in-box8">Total</label>
                     </p>
                  </div>
               </div>
               <div class="row col s12 m6 l6">
                  <div class="listaCecksModals">
                     <p>Mostrar los siguientes totales:</p>
                     <p>
                        <input name="checksDetalle_impuesto" value="impuesto" type="checkbox" class="filled-in checksCuerpo" id="cuerpofilled-in-box9">
                        <label for="cuerpofilled-in-box9">Impuesto</label>
                     </p>
                     <p>
                        <input name="checksDetalle_descuento" value="descuento" type="checkbox" class="filled-in checksCuerpo" id="cuerpofilled-in-box10">
                        <label for="cuerpofilled-in-box10">Descuento</label>
                     </p>
                     <p>
                        <input name="checksDetalle_total" value="total" type="checkbox" class="filled-in checksCuerpo" id="cuerpofilled-in-box11">
                        <label for="cuerpofilled-in-box11">Tolal</label>
                     </p>
                  </div>
               </div>
               <div class="row col s12 m6 l6">
                  <div class="inputModals input-field col s12">
                     <p>Color de fondo: <input name="colorCuerpo_colorFondo" class="colorFondo" type="color" id="myColor1"></p>
                  </div>
                  <div class="inputModals input-field col s12">
                     <p>Color de letra: <input name="colorCuerpo_colorLetra" class="colorLetra" type="color" id="myColor2"></p>
                  </div>
                  <div class="inputModals input-field col s12">
                     <p>Color de barra horizontal: <input name="colorCuerpo_colorBarra"class="colorBarra" type="color" id="myColor3"></p>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   <div class="modal-footer">
      <div class="aplicarCambios">
         <a href="#" class="waves-effect btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
      </div>
   </div>
</div>
<div id="modalInformacion" class="modal">
   <div class="modal-header">
      <p><?= label('nombreSistema'); ?></p>
      <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
   </div>
   <div class="modal-content">
      <div class="row">
         <div class="col s12 m12 l12">
            <form id="form_informacion">
               <div class="row col s12 m6 l6">
                  <div class="listaCecksModals">
                     <p>
                        <input name="checksInformacion_formaPago" value="formaPago" type="checkbox" class="filled-in checksInformacion"
                           id="informacionfilled-in-box1">
                        <label for="informacionfilled-in-box1">Forma de pago</label>
                     </p>
                     <p>
                        <input name="checksInformacion_validez" value="validez" type="checkbox" class="filled-in checksInformacion"
                           id="informacionfilled-in-box2">
                        <label for="informacionfilled-in-box2">Vlidez</label>
                     </p>
                     <p>
                        <input name="checksInformacion_informacionDetalle" value="informacionDetalle" type="checkbox" class="filled-in checksInformacion" id="informacionfilled-in-box3">
                        <label for="informacionfilled-in-box3">Detalle</label>
                     </p>
                     <p>
                        <input name="checksInformacion_firma" value="firma" type="checkbox" class="filled-in checksInformacion"
                           id="informacionfilled-in-box4">
                        <label for="informacionfilled-in-box4">Firma</label>
                     </p>
                     <div class="file-field input-field col s12">
                        <div class="inputModals">Firma electónica:<input type="file">
                        </div>
                        <input class="file-path validate" type="text">
                     </div>
                  </div>
               </div>
               <div class="row col s12 m6 l6">
                  <div class="inputModals input-field col s12">
                     <p>Color de fondo: <input name="colorInformacion_colorFondo" class="colorFondo" type="color" id="myColor1"></p>
                  </div>
                  <div class="inputModals input-field col s12">
                     <p>Color de letra: <input name="colorInformacion_colorLetra" class="colorLetra" type="color" id="myColor2"></p>
                  </div>
                  <div class="inputModals input-field col s12">
                     <p>Color de barra horizontal: <input name="colorInformacion_colorBarra" class="colorBarra" type="color" id="myColor3"></p>
                  </div>
                  <div class="input-field col s12">
                     <textarea id="message" class="materialize-textarea" style="height: 24px;"></textarea>
                     <label for="message" class="">Texto adicional</label>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   <div class="modal-footer">
      <div class="aplicarCambios">
         <a href="#" class="waves-effect btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
      </div>
   </div>
</div>
<div id="modalFooter" class="modal">
   <div class="modal-header">
      <p><?= label('nombreSistema'); ?></p>
      <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
   </div>
   <div class="modal-content">
      <div class="row">
         <div class="col s12 m12 l12">
            <form id="form_footer">
               <div class="row col s12 m6 l6">
                  <div class="listaCecksModals">
                     <p>
                        <input name="checksFooter_telefono" value="telefono" type="checkbox" class="filled-in checksFooter"
                           id="footerfilled-in-box1">
                        <label for="footerfilled-in-box1">Teléfono</label>
                     </p>
                     <p>
                        <input name="checksFooter_sitio" value="sitio" type="checkbox" class="filled-in checksFooter"
                           id="footerfilled-in-box2">
                        <label for="footerfilled-in-box2">Sitio web</label>
                     </p>
                     <p>
                        <input name="checksFooter_correo" value="correo" type="checkbox" class="filled-in checksFooter"
                           id="footerfilled-in-box3">
                        <label for="footerfilled-in-box3">Correo</label>
                     </p>
                     <p>
                        <input name="checksFooter_logo" value="logo" type="checkbox" class="filled-in checksFooter"
                           id="footerfilled-in-box4">
                        <label for="footerfilled-in-box4">Imagen</label>
                     </p>
                  </div>
               </div>
               <div class="row col s12 m6 l6">
                  <div class="inputModals input-field col s12">
                     <p>Color de fondo: <input name="colorFooter_colorFondo" class="colorFondo" type="color" id="myColor1"></p>
                  </div>
                  <div class="inputModals input-field col s12">
                     <p>Color de letra: <input name="colorFooter_colorLetra" class="colorLetra" type="color" id="myColor2"></p>
                  </div>
                  <div class="input-field col s12">
                     <textarea id="message" class="materialize-textarea" style="height: 24px;"></textarea>
                     <label for="message" class="">Texto adicional</label>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   <div class="modal-footer">
      <div class="aplicarCambios">
         <a href="#" class="waves-effect btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
      </div>
   </div>
</div>

<!--Fin lista modals-->
<script type="text/javascript">




   $(document).ready(function(){

         
   
         $('#botonPaso4').parents('li').on('click', function(){
            // alert('hola');

          // event.preventDefault();
          // $('#botonPaso3').parents('li').click();
          // alert('hola');
          actualizarDiseno();

          var html = crearPDF();
          // alert('hola');

          var idEmpresa = "<?= $resultado['idEmpresa'];?>";
          var idCotizacion = "<?= encryptIt($resultado['idCotizacion']);?>";
   
          // alert(html);

   
          $.ajax({
             data: {miHtml :  html, idEmpresa :  idEmpresa, idCotizacion :  idCotizacion},
             url:   '<?=base_url()?>ManejadorPDF/generarCotizacion',
             type:  'post',
             beforeSend: function(){
                  $('#botonPaso4').text('Cargando...');
                  // $('#vistaPrevia').hide();
                  // $('#preCarga').show();

              },
             success:  function (response) {
                   // alert(response);
                  $('#botonPaso4').text('<?= label('paso4'); ?>');
                  // document.getElementById('vistaPrevia').contentDocument.location.reload(true);
                  // document.getElementById('vistaPrevia').contentWindow.location.reload();

                  $('#vistaPrevia').attr('src', "<?= base_url() ?>files/empresas/<?= $resultado['idEmpresa'];?>/cotizaciones/<?= encryptIt($resultado['idCotizacion']);?>/sistema/test.pdf");
                  // $('#vistaPrevia').show()"<?= base_url() ?>files/empresas/<?= $resultado['idEmpresa'];?>/cotizaciones/<?= encryptIt($resultado['idCotizacion']);?>/sistema/test.pdf"                  // $('#preCarga').hide();
                  // $('#vistaPrevia').contentDocument.location.reload(true);
              }
        });
   
   });
   
           $('#botonPaso3').parents('li').on('click', function(){
               actualizarDiseno();
           });
   
       function actualizarDiseno(){
         // alert('actualizarInformacion');
           // if ($('#paso1Cliente option:selected').val() != 0) {
               var cliente = $('#paso1Cliente option:selected').text();
               $('#disenoCliente').text(cliente);
           // }
           // if ($('#paso1Atencion option:selected').val() != 0) {
               var atencion = $('#paso1Atencion option:selected').text();
               $('#disenoAtencion').text(atencion);
           // } 
           // alert($('#paso1_codigo').val());
           // if ($('#paso1_codigo').val() != '') {
               var codigo = $('#paso1_codigo').val();
               $('#disenoCodigo').text(codigo);
           // } 
           // if ($('#paso1_numero').val() != '') {
               var numero = $('#paso1_numero').val();
               $('#disenoNumero').text(numero);
           // }
           // if ($('#paso1_validez').val() != '') {
               var validez = $('#paso1_validez').val();
               $('#disenoValidez').text(validez);
           // } 
   
           if (codigo != '' && numero != '') {
               $('#separador').show();
           } else{
               $('#separador').hide();
           };
           
           
           $('#lineasDiseno').empty();
           $('#contenedorLineas').find('tr').each(function(){
               var fila = $(this);
               if(fila.find('.accionAplicada').val() != 2){// si no esta eliminada la fila
                   
                   // alert($('th.col_1').is(':visible'));
                   
                   var lineaDetalle=    '<tr>'+
                           '<td class="celdaColumna col_1" >'+ fila.find('.itemServicio option:selected').text() +'</td>'+
                           '<td class="celdaColumna col_2">'+ fila.find('.nombreServicio option:selected').text() +'</td>'+
                           '<td class="celdaColumna col_3">'+ fila.find('.descripcion').val() +'</td>'+
                           '<td class="celdaColumna col_4">'+ fila.find('.precio').val() +'</td>'+  
                           '<td class="celdaColumna col_5">'+ fila.find('.cantidad').val() +'</td>'+
                           '<td class="celdaColumna col_6">13%</td>'+
                           '<td class="celdaColumna col_7">'+ fila.find('.subTotal').val() +'</td>'+
                       '</tr>';
                   $('#lineasDiseno').append(lineaDetalle);
   
               }
           });
         // actualizarCuerpo();
   
       }
   });
   
    $(document).ready(function(){
       // cargarDieseno(0, false);
   
       <?php 
      if (isset($resultado['plantilla'])) {// se esta editando una cotizacion
          ?>
           // alert(arrayPlantilla['colorEncabezado']);
           cargarDieseno(0, false);
           <?php
      }  else {
           ?>
           cargarDieseno(0, true);
           <?php
      }
      ?>
   
   
   });

    function crearPDF() {
           // alert($('#footerDiseno').height());
           // var height = $('#footerDiseno').css("height");
           $('#footerDiseno').css("height", footer);
           $('#prefooter').css("height", footer);
   
           // var height = $('#informacion').css("height");
           $('#informacion').css("height", informacion);
           // alert(height);
   
           $('.editarExterno').css("display", "none");
   
   
           var backgroundcolor = $('#hoja').css("background-color");
           var fuente = $('#hoja').css("font-family");
           var color = $('#hoja').css("color");
           var style = 'style="background: ' + backgroundcolor + '; font-family: ' + fuente + '; color: ' + color + '"';
   
           var html = '<!DOCTYPE html><html><head><title>403 Forbidden</title><link rel="stylesheet" href="<?= base_url() ?>assets/dashboard/css/estiloDisenoHoja.css"></head><body id="hojaPDF" ' + style + '>';
           html += '<div id="headerDiseno">' + $('#headerDiseno').html() + '</div>';
           html += '<div id="informacionSistema">' + $('#informacionSistema').html() + '</div>';
           html += '<div id="cuerpoDocumento">' + $('#cuerpoDocumento').html() + '</div></body></html>';
           // target="iframe"
           // $('#inset_form').html('<form  action="<?=base_url()?>ManejadorPDF/index" name="form" method="post" style="display:block;"><textarea name="miHtml">' + html + '</textarea></form>');
           // document.forms['form'].submit();
   
   
   
           //eliminar la propiedead height para que siga adaptandose a los cambios de tamano en el html
           $('#footerDiseno').css("height", "");
           $('#informacion').css("height", "");
           $('#prefooter').css("height", "");
           $('.editarExterno').css("display", "");
   
           return html;
       }

   
   <?php 
      $js_array = json_encode($resultado['plantillas']); 
      echo "var arrayPlantillas =". $js_array.";";
      
      if (isset($resultado['plantilla'])) {// se esta editando una cotizacion
          $js_array = json_encode($resultado['plantilla']); 
          echo "var arrayPlantilla =". $js_array.";";       
      }
      
      ?> 

   var footer = 0;// esta varable es actualizada por el metodo recalcularAlturaContenido y se usa en el metodo crearPDF.
   var informacion = 0;// esta varable es actualizada por el metodo recalcularAlturaContenido y se usa en el metodo crearPDF.
   
   function cargarDieseno(idPlantilla, plantillaDesdeLista){
       recalcularAlturaContenido();
   
       function recalcularAlturaContenido() {
            // alert('calculando');
           var tamanoHojaHTML = 1117; //aqui puede ajustar el tamano de la hoja que se verá en el html
           var header = $('#headerDiseno').height();//212
           footer = $('#footerDiseno').height();//226
           var informacionSistema = $('#informacionSistema').height();//20
           informacion = $('#informacion').height();
   
           var paddingTop = $('#contenidoDiseno').css("padding-top").replace("px", "");
           var paddingBottom = $('#contenidoDiseno').css("padding-bottom").replace("px", "");
           var resultado = tamanoHojaHTML - header - footer - informacionSistema - paddingTop - paddingBottom;
           $('#contenidoDiseno').height(resultado);
   
       }
   
   
       $('#modalEncabezado .aplicarCambios').click(function () {
           actualizarEncabezado();
           recalcularAlturaContenido();
       });
   
       $('#modalCuerpo .aplicarCambios').click(function () {
           actualizarCuerpo();
           recalcularAlturaContenido();    
       });
   
       $('#modalInformacion .aplicarCambios').click(function () {
           actualizarInformacion();
           recalcularAlturaContenido();
       });
   
       $('#modalFooter .aplicarCambios').click(function () {
           actualizarFooter();
           recalcularAlturaContenido();
           
       });
   
        function actualizarEncabezado(){
           var colorFondo = $('#modalEncabezado .colorFondo').val();
           $('#encabezado').css("background", colorFondo);
   
           var colorLetra = $('#modalEncabezado .colorLetra').val();
           $('#encabezado').css("color", colorLetra);
   
           var colorBarra = $('#modalEncabezado .colorBarra').val();
           $('#barra1').css("background", colorBarra);
   
   
           $('#encabezado .box').each(function () {
               $(this).hide();
           })
   
           // var seleccionados = $('input[class*="checksEncabezado"]:checked');
           var seleccionados = $('.checksEncabezado:checked');
           var logoActivado = false;
           if (seleccionados.length > 0) {
               seleccionados.each(function () {
                   // alert($(this).val());
                   $('#encabezado .box#' + $(this).val()).show();
                   if ($(this).val() == 'logo') {
                       logoActivado = true;
                   };
               });
   
               if (!logoActivado) {
                   var datos1 = $('#datosEncabezado #datos1');
                   $('#datosEncabezado').css('width', 598 + 148);
                   datos1.css('width', 431.18 + 148);
               } else{
                   var datos1 = $('#datosEncabezado #datos1');
                   $('#datosEncabezado').css('width', 598);
                   datos1.css('width', 431.18);
               }
   
           }
           
       }
   
   
       function actualizarCuerpo(){
   
           var colorFondo = $('#modalCuerpo .colorFondo').val();
           $('#hoja').css("background", colorFondo);
   
           var colorLetra = $('#modalCuerpo .colorLetra').val();
           $('#hoja').css("color", colorLetra);
   
           var colorBarra = $('#modalCuerpo .colorBarra').val();
           $('#barra2').css("background", colorBarra);
   
           $('.celdaColumna').each(function () {
               $(this).hide();
           })
           $('#contenedorResultados .box').each(function () {
               $(this).hide();
           })
   
           var seleccionados = $('.checksCuerpo:checked');
           if (seleccionados.length > 0) {
               seleccionados.each(function () {
                   $('#cuerpoDocumento .' + $(this).val()).show();
               });
   
                seleccionados.each(function () {
                   $('#cuerpoDocumento .box#' + $(this).val()).show();
               });
           }
   
       }
       
   
       function actualizarInformacion(){
           var colorFondo = $('#modalInformacion .colorFondo').val();
           $('#informacion').css("background", colorFondo);
   
           var colorLetra = $('#modalInformacion .colorLetra').val();
           $('#informacion').css("color", colorLetra);
   
           var colorBarra = $('#modalInformacion .colorBarra').val();
           $('#barra3').css("background", colorBarra);
   
   
           $('#informacion .box').each(function () {
               $(this).hide();
           })
   
           var seleccionados = $('.checksInformacion:checked');
           if (seleccionados.length > 0) {
               seleccionados.each(function () {
                   $('#informacion .box#' + $(this).val()).show();
               });
           }
       }
   
       function actualizarFooter(){
           var colorFondo = $('#modalFooter .colorFondo').val();
           $('#footerCotizacion').css("background", colorFondo);
   
           var colorLetra = $('#modalFooter .colorLetra').val();
           $('#footerCotizacion').css("color", colorLetra);
   
           $('#footerCotizacion .box').each(function () {
               $(this).hide();
           })
   
           var seleccionados = $('.checksFooter:checked');
           var logoActivado = false;
           if (seleccionados.length > 0) {
               seleccionados.each(function () {
                   $('#footerCotizacion #datos1').show();
                   $('#footerCotizacion #datos2').css('width', '43%');
   
                   $('#footerCotizacion .box#' + $(this).val()).show();
                   if ($(this).val() == 'logo') {
                       logoActivado = true;
                   };
               });
               if (!logoActivado) {
                   // alert('desactivaron el logo');
                   $('#datosFooter').css('width', '96%');
                   $('#footerCotizacion #datos1').css('width', '46%');
                   $('#footerCotizacion #datos2').css('width', '50%');
               } else {
                   $('#datosFooter').css('width', '87%');
                   if (seleccionados.length == 1) {
                       $('#footerCotizacion #datos1').hide();
                       $('#footerCotizacion #datos2').css('width', '100%');
                   } else {
                   // $('#footerCotizacion #datos1').show();
                   $('#footerCotizacion #datos1').css('width', '53%');
                   $('#footerCotizacion #datos2').css('width', '43%');
                   }
               }
           } else {
               $('#footerCotizacion #datos1').hide();
               $('#datosFooter').css('width', '96%');
               $('#footerCotizacion #datos2').css('width', '100%');
           }
       }
   
       desplegarPlantilla(idPlantilla);
   
       // Existen 3 posibilidades: 
       // 1-Cargar una de las  plantillas por defecto (esto en caso de una cotización nueva) 
       // 2-Crgar la plantilla propia de la cotización, es decir, solo sucede eso cuando se está editando la cotización 
       // 3- Otra caso es en el que no existe ni plantillas por defecto y se trata de una cotización nueva.
       function desplegarPlantilla(idPlantilla){
           if(!plantillaDesdeLista){ //caso 2
               desplegar(arrayPlantilla);
           } else {
               if (arrayPlantillas.length != 0) {// caso 1
                   var plantilla =  arrayPlantillas[idPlantilla];
                   desplegar(plantilla);
               } else{//caso 3
                   obtenerDatosEncabezado();
                   obtenerDatosCuerpo();
                   obtenerDatosInformacion();
                   obtenerDatosFooter();
   
               };
               
           }
       }
   
       function desplegar(plantilla){
   
           actualizarModalEncabezado(plantilla);
           actualizarModalDetalle(plantilla);
           actualizarModalInformacion(plantilla);
           actualizarModalFooter(plantilla);
           // alert('hola');
           actualizarEncabezado();
           actualizarCuerpo();
           actualizarFooter();
           actualizarInformacion();
           recalcularAlturaContenido();
       }
   
   
   
       
   
   
       // alert($('#headerDiseno').height());
       
   
   // });
   }
   
   
   
   
   function actualizarModalEncabezado(plantilla){
   // alert(plantilla['colorEncabezado']);
   $('#encabezado').css("font-family", "helvetica");
   $('#modalEncabezado .colorFondo').val(plantilla['colorEncabezado']);
   $('#modalEncabezado .colorLetra').val(plantilla['colorLetraEncabezado']);
   $('#modalEncabezado .colorBarra').val(plantilla['colorBarraHorizontal1']);
   
   if (plantilla['mostrarNombreEmpresa'] == 1) {
       $("#modalEncabezado input[value='nombreEmpresa']").prop("checked", true );
   } else{
       $("#modalEncabezado input[value='nombreEmpresa']").prop("checked", false );
   }
   if (plantilla['mostrarCodigo'] == 1) {
       $("#modalEncabezado input[value='codigoCotizacion']").prop("checked", true );
   } else{
       $("#modalEncabezado input[value='codigoCotizacion']").prop("checked", false );
   }
   if (plantilla['mostrarCliente'] == 1) {
       $("#modalEncabezado input[value='cliente']").prop("checked", true );
   } else{
       $("#modalEncabezado input[value='cliente']").prop("checked", false );
   }
   if (plantilla['mostrarAtencion'] == 1) {
       $("#modalEncabezado input[value='atencion']").prop("checked", true );
   } else{
       $("#modalEncabezado input[value='atencion']").prop("checked", false );
   }
   if (plantilla['mostrarCotizador'] == 1) {
       $("#modalEncabezado input[value='vendedor']").prop("checked", true );
   } else{
       $("#modalEncabezado input[value='vendedor']").prop("checked", false );
   }
   if (plantilla['mostrarFecha'] == 1) {
       $("#modalEncabezado input[value='fecha']").prop("checked", true );
   } else{
       $("#modalEncabezado input[value='fecha']").prop("checked", false );
   }
   if (plantilla['mostrarHora'] == 1) {
       $("#modalEncabezado input[value='hora']").prop("checked", true );
   } else{
       $("#modalEncabezado input[value='hora']").prop("checked", false );
   }
   if (plantilla['mostrarImagenEncabezado'] == 1) {
       $("#modalEncabezado input[value='logo']").prop("checked", true );
   } else{
       $("#modalEncabezado input[value='logo']").prop("checked", false );
   }
   }
   
   function actualizarModalDetalle(plantilla){
   $('#modalCuerpo .colorFondo').val(plantilla['colorDetalle']);
   $('#modalCuerpo .colorLetra').val(plantilla['colorLetraDetalle']);
   $('#modalCuerpo .colorBarra').val(plantilla['colorBarraHorizontal2']);
   
   
   if (plantilla['mostrarColumnaItem'] == 1) {
       $("#modalCuerpo input[value='col_1']").prop("checked", true );
   } else{
       $("#modalCuerpo input[value='col_1']").prop("checked", false );
   }
   
   if (plantilla['mostrarColumnaNombre'] == 1) {
       $("#modalCuerpo input[value='col_2']").prop("checked", true );
   } else{
       $("#modalCuerpo input[value='col_2']").prop("checked", false );
   }
   
   if (plantilla['mostrarColumnaDescripcion'] == 1) {
       $("#modalCuerpo input[value='col_3']").prop("checked", true );
   } else{
       $("#modalCuerpo input[value='col_3']").prop("checked", false );
   }
   if (plantilla['mostrarColumnaPrecio'] == 1) {
       $("#modalCuerpo input[value='col_4']").prop("checked", true );
   } else{
       $("#modalCuerpo input[value='col_4']").prop("checked", false );
   }
   if (plantilla['mostrarColumnaCantidad'] == 1) {
       $("#modalCuerpo input[value='col_5']").prop("checked", true );
   } else{
       $("#modalCuerpo input[value='col_5']").prop("checked", false );
   }
   if (plantilla['mostrarColumnaImpuesto'] == 1) {
       $("#modalCuerpo input[value='col_6']").prop("checked", true );
   } else{
       $("#modalCuerpo input[value='col_6']").prop("checked", false );
   }
   if (plantilla['mostrarColumnaTotal'] == 1) {
       $("#modalCuerpo input[value='col_7']").prop("checked", true );
   } else{
       $("#modalCuerpo input[value='col_7']").prop("checked", false );
   }
   
   if (plantilla['mostrarImpuesto'] == 1) {
       $("#modalCuerpo input[value='impuesto']").prop("checked", true );
   } else{
       $("#modalCuerpo input[value='impuesto']").prop("checked", false );
   }
   if (plantilla['mostrarDescuento'] == 1) {
       $("#modalCuerpo input[value='descuento']").prop("checked", true );
   } else{
       $("#modalCuerpo input[value='descuento']").prop("checked", false );
   }
   if (plantilla['mostrarTotal'] == 1) {
       $("#modalCuerpo input[value='total']").prop("checked", true );
   } else{
       $("#modalCuerpo input[value='total']").prop("checked", false );
   }
   
   }
   
   function actualizarModalInformacion(plantilla){
   $('#modalInformacion .colorFondo').val(plantilla['colorInformacion']);
   $('#modalInformacion .colorLetra').val(plantilla['colorLetraInformcion']);
   $('#modalInformacion .colorBarra').val(plantilla['colorBarraHorizontal3']);
   if (plantilla['mostrarFormaPago'] == 1) {
       $("#modalInformacion input[value='formaPago']").prop("checked", true );
   } else {
       $("#modalInformacion input[value='formaPago']").prop("checked", false );
   }
   if (plantilla['mostrarValidez'] == 1) {
       $("#modalInformacion input[value='validez']").prop("checked", true );
   } else {
       $("#modalInformacion input[value='validez']").prop("checked", false );
   }
   if (plantilla['mostrarDetalle'] == 1) {
       $("#modalInformacion input[value='informacionDetalle']").prop("checked", true );
   } else {
       $("#modalInformacion input[value='informacionDetalle']").prop("checked", false );
   }
   if (plantilla['mostrarFirma'] == 1) {
       $("#modalInformacion input[value='firma']").prop("checked", true );
   } else {
       $("#modalInformacion input[value='firma']").prop("checked", false );
   }
   }
   
   function actualizarModalFooter(plantilla){
   $('#modalFooter .colorFondo').val(plantilla['colorFooter']);
   $('#modalFooter .colorLetra').val(plantilla['colorLetraFooter']);
    if (plantilla['mostrarTelefono'] == 1) {
       $("#modalFooter input[value='telefono']").prop("checked", true );
   } else {
       $("#modalFooter input[value='telefono']").prop("checked", false );
   }
   
   if (plantilla['mostrarSitioWeb'] == 1) {
       $("#modalFooter input[value='sitio']").prop("checked", true );
   } else {
       $("#modalFooter input[value='sitio']").prop("checked", false );
   }
   if (plantilla['mostrarCorreo'] == 1) {
       $("#modalFooter input[value='correo']").prop("checked", true );
   } else {
       $("#modalFooter input[value='correo']").prop("checked", false );
   }
   if (plantilla['mostrarImagenFooter'] == 1) {
       $("#modalFooter input[value='logo']").prop("checked", true );
   } else {
       $("#modalFooter input[value='logo']").prop("checked", false );
   }
   // if (plantilla['textoAdicionalFooter'] == 1) {
   //     $("#modalEncabezado input[value='logo']").attr("checked", "checked");
   // };
   }
   
   // $(document).on('ready', function(){
   
   
   // });
   
   
   
   
   
       
   // });
   
   
   
   function validacionCorrecta(){
   var nuevoNombre = $('#nombrePlantilla').val();
   var existeNombre = false;
   for (var i = arrayPlantillas.length - 1; i >= 0; i--) {
       if (arrayPlantillas[i]['nombrePlantilla'] == nuevoNombre) {
           existeNombre = true;
       };
   };
   
   if (existeNombre) {
       alert('<?= label("paso3_nombrePlantillaExiste");?>');
   } else{
   
       $('.modal-header a').click(); 
       obtenerDatosEncabezado();
       obtenerDatosCuerpo();
       obtenerDatosInformacion();
       obtenerDatosFooter();
       var url = $('#form_paso3AgregarPlantilla').attr('action');
       var method = $('#form_paso3AgregarPlantilla').attr('method'); 
       $.ajax({
          type: method,
          url: url,
          data: $('#form_encabezado, #form_paso3AgregarPlantilla, #form_cuerpo, #form_informacion, #form_footer').serialize(), 
          success: function(response)
          {
               if (response == 0) {
                   $('#linkModalError').click();
               } else{
                   $.ajax({
                      type: 'POST',
                      url: '<?=base_url()?>Cotizacion/cargarTodasPlnatillas',
                      success: function(response)
                      {
                           if (response == 0) {
                              $('#linkModalError').click();
                          } else {
                           arrayPlantillas = $.parseJSON(response);
                           var valor = arrayPlantillas.length -1;
                           var nombre = arrayPlantillas[valor]['nombrePlantilla'];
                           $('#paso3_plantilla').append('<option selected value="'+ valor + '">'+ nombre +'</option>');
                           $('#paso3_plantilla').trigger("chosen:updated");
                            // generarListas();
                           $('#linkModalGuardado').click();
                          }
                      }
                    }); 
               };
               
                 
   
              // if (response == 0) {
              //     $('#linkModalError').click();
              // } else {
              //      $('#linkModalGuardado').click();
              //      $('#empleado_palabras').tagsinput('removeAll');
              // }
          }
        });        
   
   }
   }
   
   function componentToHex(c) {
   var hex = c.toString(16);
   return hex.length == 1 ? "0" + hex : hex;
   }
   
   function rgbToHex(rgbColor) {
   rgb = rgbColor.substring(4, rgbColor.length-1).replace(/ /g, '').split(',');
   return "#" + componentToHex(parseInt(rgb[0])) + componentToHex(parseInt(rgb[1])) + componentToHex(parseInt(rgb[2]));
   }
   
   function obtenerDatosEncabezado(){
   var plantilla = {"colorEncabezado":rgbToHex($('#encabezado').css("background-color")),
   "colorLetraEncabezado":rgbToHex($('#encabezado').css("color")),
   "colorBarraHorizontal1":rgbToHex($('#barra1').css("background-color")),
   "tipoLetraEncabezado":"",
   "mostrarNombreEmpresa":$('#encabezado .box#nombreEmpresa').is(':visible'),
   "mostrarCodigo":$('#encabezado .box#codigoCotizacion').is(':visible'),
   "mostrarCliente":$('#encabezado .box#cliente').is(':visible'),
   "mostrarAtencion":$('#encabezado .box#atencion').is(':visible'),
   "mostrarCotizador":$('#encabezado .box#vendedor').is(':visible'),
   "mostrarFecha":$('#encabezado .box#fecha').is(':visible'),
   "mostrarHora":$('#encabezado .box#hora').is(':visible'),
   "mostrarImagenEncabezado":$('#encabezado .box#logo').is(':visible'),
   "textoAdicionalEncabezado":""
   };
   // alert(plantilla['mostrarNombreEmpresa']);
   actualizarModalEncabezado(plantilla);
   }
   
   function obtenerDatosCuerpo(){
   // alert('hola');
   // alert($('#cuerpoDocumento thead .col_7').is(':visible'));
   var plantilla = {"colorDetalle":rgbToHex($('#hoja').css("background-color")),
   "colorLetraDetalle":rgbToHex($('#hoja').css("color")),
   "colorBarraHorizontal2":rgbToHex($('#barra2').css("background-color")),
   "tipoLetraDeralle":"",
   'mostrarColumnaItem': $('#cuerpoDocumento thead .col_1').is(':visible'),
   'mostrarColumnaNombre': $('#cuerpoDocumento thead .col_2').is(':visible'),
   'mostrarColumnaDescripcion': $('#cuerpoDocumento thead .col_3').is(':visible'),
   'mostrarColumnaPrecio': $('#cuerpoDocumento thead .col_4').is(':visible'),
   'mostrarColumnaCantidad': $('#cuerpoDocumento thead .col_5').is(':visible'),
   'mostrarColumnaImpuesto': $('#cuerpoDocumento thead .col_6').is(':visible'),
   'mostrarColumnaTotal': $('#cuerpoDocumento thead .col_7').is(':visible'),
   "mostrarImpuesto": $('#cuerpoDocumento .box#impuesto').is(':visible'),
   "mostrarDescuento": $('#cuerpoDocumento .box#descuento').is(':visible'),
   "mostrarTotal": $('#cuerpoDocumento .box#total').is(':visible')
   }
   // alert('visible: ' + plantilla['mostrarImpuesto']);
   actualizarModalDetalle(plantilla);
   }
   
   function obtenerDatosInformacion(){
   var plantilla = {
   "colorInformacion":rgbToHex($('#informacion').css("background-color")),
   "colorLetraInformcion":rgbToHex($('#informacion').css("color")),
   "colorBarraHorizontal3":rgbToHex($('#barra3').css("background-color")),
   "tipoLetraInformacion":"", 
   "mostrarFormaPago":$('#informacion .box#formaPago').is(':visible'),
   "mostrarValidez":$('#informacion .box#validez').is(':visible'),
   "mostrarDetalle":$('#informacion .box#informacionDetalle').is(':visible'),
   "mostrarFirma":$('#informacion .box#firma').is(':visible'),
   "imagenFirma":"",
   "textoAdicionalInformacion":""
   }
   // alert('visible: ' + (plantilla['colorEncabezado']));
   actualizarModalInformacion(plantilla);
   }
   function obtenerDatosFooter(){
   var plantilla = {
   "colorFooter":rgbToHex($('#footerCotizacion').css("background-color")),
   "colorLetraFooter":rgbToHex($('#footerCotizacion').css("color")),
   "tipoLetraFooter":"",
   "mostrarTelefono":$('#footerCotizacion .box#telefono').is(':visible'),
   "mostrarSitioWeb":$('#footerCotizacion .box#sitio').is(':visible'),
   "mostrarCorreo":$('#footerCotizacion .box#correo').is(':visible'),
   "mostrarImagenFooter":$('#footerCotizacion .box#logo').is(':visible'),
   "textoAdicionalFooter":"0"
   };
   // alert('visible: ' + (plantilla['colorEncabezado']));
   actualizarModalFooter(plantilla);
   }
   $(document).on('ready', function(){
       $('#contenerdorEditarEncabezado').on('click', function(){
           obtenerDatosEncabezado();
       });
   
       $('#contenedorEditarCuerpo').on('click', function(){
           obtenerDatosCuerpo();
       });
   
        $('#contenedorEditarInformacion').on('click', function(){
           obtenerDatosInformacion();
       });
   
        $('#contenedorEditarFooter').on('click', function(){
           obtenerDatosFooter();
       });
   
   });
   
</script>
<!-- lista modals -->
<div id="agregarPlantilla" class="modal">
   <div class="modal-header">
      <p><?= label('nombreSistema'); ?></p>
      <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
   </div>
   <form id="form_paso3AgregarPlantilla" action="<?=base_url()?>Cotizacion/nuevaPlantilla" method="post">
      <div class="modal-content">
         <p class="center"><?= label('paso3_nombreNuevaPlantilla'); ?></p>
         <div class="input-field col s12 m12 l12">
            <input id="nombrePlantilla" name="nombrePlantilla" type="text">
            <label for="nombrePlantilla"><?= label('paso3_labelNombrePlantilla') ?></label>
         </div>
      </div>
      <div id="botonEliminar" class="modal-footer black-text">
         <a onclick="$(this).closest('form').submit()" class="waves-effect waves-green btn-flat modal-action"><?= label('aceptar'); ?></a>
      </div>
   </form>
</div>
<div id="transaccionCorrecta" class="modal">
   <div class="modal-header">
      <p><?= label('nombreSistema'); ?></p>
      <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
   </div>
   <div class="modal-content">
      <p><?= label('paso3_plantillaGuardadoCorrectamente'); ?></p>
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
<!-- Fin lista modals-->