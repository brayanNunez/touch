
<div class="row">
   <div class="input-field col s12 m3 l3 inputSelector">
      <label for="contenedorSelectCliente"><?= label("paso3_labelPlantilla"); ?></label>
      <br>
      <div id="contenedorSelectPalntilla"></div>
   </div>
</div>
<br>
<!-- <div class="contenedorHoja col s12"> -->
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

                  <?php
                  if ($resultado['empresa']['logo'] != '') {
                     ?>
                     <img class="imagen" src="<?= base_url() ?>files/empresas/<?= $resultado['idEmpresa'];?>/<?= $resultado['empresa']['logo'];?>"/>
                     <?php
                  } else {
                      ?>
                      <img class="imagen" src="<?= base_url() ?>files/imagenDiseno.png"/>
                     <?php
                  }
                  ?>
                  
               </div>
               <div id="datosEncabezado">
                  <div class="datos" id="datos1">
                     <div></div>
                     <p class="box" id="nombreEmpresa"><?= $resultado['empresa']['nombre']?></p>
                     <p class="box" id="codigoCotizacion"><?= label("paso3_codCotizacion:"); ?><span id="disenoCodigo"></span><span id="separador">-</span><span id="disenoNumero"></span></p>
                     <p class="box" id="cliente"><?= label("paso3_cliente:"); ?><span id="disenoCliente"></span></p>
                     <p class="box" id="atencion"><?= label("paso3_atencion:"); ?><span id='disenoAtencion'></span></p>
                     <p class="box" id="vendedor"><?= label("paso3_vendedor:"); ?><?= $resultado['usuario']['nombre'].' '.$resultado['usuario']['primerApellido'].' '.$resultado['usuario']['segundoApellido']?></p>
                  </div>
                  <div class="datos" id="datos2">
                     <div></div>
                     <?php 
                     $fecha = '';
                     if (isset($resultado['cotizacion'])) {
                        $fecha = $resultado['cotizacion']['fechaCreacion'];
                     } else {
                        $fecha = $resultado['fechaCreacion'];
                     }

                     ?>
                     <p class="box" id="fecha"><?= label("paso3_fecha:"); ?><?= date("d-m-Y", strtotime($fecha));?></p>
                     <p class="box" id="hora"><?= label("paso3_hora:"); ?><?php 
                        $date = new DateTime($fecha);
                        echo $date->format('g:i a');

                     ?></p>
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
                        <th class="celdaColumna col_1"><?= label("paso3_item"); ?></th>
                        <th class="celdaColumna col_2"><?= label("paso3_nombre"); ?></th>
                        <th class="celdaColumna col_3"><?= label("paso3_descripcion"); ?></th>
                        <th class="celdaColumna col_4"><?= label("paso3_precioUnitario"); ?></th>
                        <th class="celdaColumna col_5"><?= label("paso3_cantidad"); ?></th>
                        <!-- <th class="celdaColumna col_6"><?= label("paso3_impuesto"); ?></th> -->
                        <th class="celdaColumna col_7"><?= label("paso3_total"); ?></th>
                     </tr>
                  </thead>
                  <tbody id="lineasDiseno">
                     
                  </tbody>
               </table>
               <div id="contenedorResultados">
                  <div id="resultados">
                     <div class="box" id="impuesto">
                        <p><?= label("paso3_impuesto:"); ?><p>
                        <ul id="disenoImpuesto" style="list-style: none; padding: 0px;"></ul>
                     </div>

                     <div class="box" id="descuento">
                        <div></div>
                        <p><?= label("paso3_descuento:"); ?> 
                        <spam id="disenoDescuento"></spam><spam>%</spam></p>
                     </div>
                     
                     <div class="box" id="total">
                        <p><?= label("paso3_total:"); ?> 
                        <b><spam class='monedaCotizacion'></spam><spam id="disenoTotal"></spam></b><p>
                     </div>
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
                  <div></div>                  <p class="box" id="formaPago"><?= label("paso3_formaPago:"); ?><span id="disenoFormaPago"></span></p>

                  <p class="box" id="validez"><?= label("paso3_validoHasta:"); ?><span id="disenoValidez"></span></p>
                  <p id="informacionDetalle"></p>
                  <div class="box" id="firma">
                     <!-- <img id="imagenFirma" class="imagen" src="<?= base_url() ?>files/empresas/<?= $resultado['idEmpresa'];?>/img_firmaEmpresa_1.jpg"/> -->
                     <p id="textoFirma"><?= label("paso3_firma:"); ?><span>
                     <?php
                     if ($resultado['empresa']['firma'] != '') {
                        ?>
                        <img id="imagenFirma" class="imagen" src="<?= base_url() ?>files/empresas/<?= $resultado['idEmpresa'];?>/<?= $resultado['empresa']['firma'];?>"/>
                        <?php
                     } else {
                         ?>
                         <img id="imagenSinFirma" class="imagen" src="<?= base_url() ?>files/imagenDiseno.png"/>
                        <?php
                     }
                     ?>
                     </span></p>


                     <!-- <p id="textoFirma">Firma:<span><img id="imagenFirma" class="imagen" src="<?= base_url() ?>files/empresas/<?= $resultado['idEmpresa'];?>/Firma.png"/></span></p> -->
                     <div id="contenedorNombreFirma">
                        <p id="nombreFirma"><?=$resultado['empresa']['nombreRepresentante'].' '.$resultado['empresa']['primerApellidoRepresentante'].' '.$resultado['empresa']['segundoApellidoRepresentante']?></p>
                     </div>
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
                     
                     <?php
                     if ($resultado['empresa']['logo'] != '') {
                        ?>
                        <img id="imagenFooter" class="imagen" src="<?= base_url() ?>files/empresas/<?= $resultado['idEmpresa'];?>/<?= $resultado['empresa']['logo'];?>"/>
                        <?php
                     } else {
                         ?>
                         <img id="imagenFooter" class="imagen" src="<?= base_url() ?>files/imagenDiseno.png"/>
                        <?php
                     }
                     ?>
                  </div>
                  <div id="datosFooter">
                     <div class="datos" id="datos1">
                        <div></div>
                        <p class="box" id="telefono"><?= label("paso3_telefono:"); ?><span><?= $resultado['empresa']['telefono'];?></span></p>
                        <p class="box" id="sitio"><?= label("paso3_sitioWeb:"); ?><span><?= $resultado['empresa']['sitioWeb'];?></span></p>
                        <p class="box" id="correo"><?= label("paso3_correo:"); ?><span><?= $resultado['empresa']['correo'];?></span></p>
                     </div>
                     <div class="datos" id="datos2">
                        <div></div>  <!-- sin esta lina no sirve -->
                        <p id="informacionFooter"></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="informacionSistema">
            <span>
               <p><?= label('paso3_Diseno_mensajeFotter')?><a id="enlaceCotizacion" target="_blank" href="<?=base_url()?>"><?=label('link_paginaInicial'); ?><a></p>
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
                        <label for="filled-in-box1"><?= label("paso3_nombreEmpresa"); ?></label>
                     </p>
                     <p>
                        <input name="checksEncabezado_codigoCotizacion" value="codigoCotizacion" type="checkbox"
                           class="filled-in checksEncabezado" id="filled-in-box2">
                        <label for="filled-in-box2"><?= label("paso3_codCotizacion"); ?></label>
                     </p>
                     <p>
                        <input name="checksEncabezado_cliente" value="cliente" type="checkbox" class="filled-in checksEncabezado"
                           id="filled-in-box3">
                        <label for="filled-in-box3"><?= label("paso3_cliente"); ?></label>
                     </p>
                     <p>
                        <input name="checksEncabezado_atencion" value="atencion" type="checkbox" class="filled-in checksEncabezado"
                           id="filled-in-box4">
                        <label for="filled-in-box4"><?= label("paso3_atencion"); ?></label>
                     </p>
                     <p>
                        <input name="checksEncabezado_vendedor" value="vendedor" type="checkbox" class="filled-in checksEncabezado"
                           id="filled-in-box5">
                        <label for="filled-in-box5"><?= label("paso3_vendedor"); ?></label>
                     </p>
                     <p>
                        <input name="checksEncabezado_fecha" value="fecha" type="checkbox" class="filled-in checksEncabezado"
                           id="filled-in-box6">
                        <label for="filled-in-box6"><?= label("paso3_fecha"); ?></label>
                     </p>
                     <p>
                        <input name="checksEncabezado_hora" value="hora" type="checkbox" class="filled-in checksEncabezado"
                           id="filled-in-box7">
                        <label for="filled-in-box7"><?= label("paso3_hora"); ?></label>
                     </p>
                     <p>
                        <input name="checksEncabezado_logo" value="logo" type="checkbox" class="filled-in checksEncabezado"
                           id="filled-in-box8">
                        <label for="filled-in-box8"><?= label("paso3_imagen"); ?></label>
                     </p>
                  </div>
               </div>
               <div class="row col s12 m6 l6">
                  <div class="inputModals input-field col s12">
                     <p><?= label("paso3_colorFondo:"); ?><input name="colorEncabezado_colorFondo" class="colorFondo" type="color" id="myColor1"></p>
                  </div>
                  <div class="inputModals input-field col s12">
                     <p><?= label("paso3_colorLetra:"); ?><input name="colorEncabezado_colorLetra" class="colorLetra" type="color" id="myColor2"></p>
                  </div>
                  <div class="inputModals input-field col s12">
                     <p><?= label("paso3_colorBarraHorizontal:"); ?><input name="colorEncabezado_colorBarra" class="colorBarra" type="color" id="myColor3"></p>
                  </div>
                  <!-- <div class="input-field col s12">
                     <textarea id="message" class="materialize-textarea" style="height: 24px;"></textarea>
                     <label for="message" class="">Texto adicional</label>
                  </div> -->
               </div>
            </form>
         </div>
      </div>
   </div>
   <div class="modal-footer">
      <div class="aplicarCambios">
         <a class="waves-effect btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
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
                     <p><?= label("paso3_mostrarColumnas:"); ?></p>
                     <p>
                        <input value="col_1" name="checksDetalle_ColumnaItem" type="checkbox" class="filled-in checksCuerpo" id="cuerpofilled-in-box1">
                        <label for="cuerpofilled-in-box1"><?= label("paso3_item"); ?></label>
                     </p>
                     <p>
                        <input value="col_2" name="checksDetalle_ColumnaNombre" type="checkbox" class="filled-in checksCuerpo" id="cuerpofilled-in-box2">
                        <label for="cuerpofilled-in-box2"><?= label("paso3_nombre"); ?></label>
                     </p>
                     <p>
                        <input value="col_3" name="checksDetalle_ColumnaDescripcion" type="checkbox" class="filled-in checksCuerpo" id="cuerpofilled-in-box3">
                        <label for="cuerpofilled-in-box3"><?= label("paso3_descripcion"); ?></label>
                     </p>
                     <p>
                        <input value="col_4" name="checksDetalle_ColumnaPrecio" type="checkbox" class="filled-in checksCuerpo" id="cuerpofilled-in-box5">
                        <label for="cuerpofilled-in-box5"><?= label("paso3_precioUnitario"); ?></label>
                     </p>
                     <p>
                        <input value="col_5" name="checksDetalle_ColumnaCantidad" type="checkbox" class="filled-in checksCuerpo" id="cuerpofilled-in-box6">
                        <label for="cuerpofilled-in-box6"><?= label("paso3_cantidad"); ?></label>
                     </p>
                     <!-- <p>
                        <input value="col_6" name="checksDetalle_ColumnaImpuesto" type="checkbox" class="filled-in checksCuerpo" id="cuerpofilled-in-box7">
                        <label for="cuerpofilled-in-box7"><?= label("paso3_impuesto"); ?></label>
                     </p> -->
                     <p>
                        <input value="col_7" name="checksDetalle_ColumnaTotal" type="checkbox" class="filled-in checksCuerpo" id="cuerpofilled-in-box8">
                        <label for="cuerpofilled-in-box8"><?= label("paso3_total"); ?></label>
                     </p>
                  </div>
               </div>
               <div class="row col s12 m6 l6">
                  <div class="listaCecksModals">
                     <p><?= label("paso3_mostrarTotales:"); ?></p>
                     <p>
                        <input name="checksDetalle_impuesto" value="impuesto" type="checkbox" class="filled-in checksCuerpo" id="cuerpofilled-in-box9">
                        <label for="cuerpofilled-in-box9"><?= label("paso3_impuesto"); ?></label>
                     </p>
                     <p>
                        <input name="checksDetalle_descuento" value="descuento" type="checkbox" class="filled-in checksCuerpo" id="cuerpofilled-in-box10">
                        <label for="cuerpofilled-in-box10"><?= label("paso3_descuento"); ?></label>
                     </p>
                     <p>
                        <input name="checksDetalle_total" value="total" type="checkbox" class="filled-in checksCuerpo" id="cuerpofilled-in-box11">
                        <label for="cuerpofilled-in-box11"><?= label("paso3_total"); ?></label>
                     </p>
                  </div>
               </div>
               <div class="row col s12 m6 l6">
                  <div class="inputModals input-field col s12">
                     <p><?= label("paso3_colorFondo:"); ?><input name="colorCuerpo_colorFondo" class="colorFondo" type="color" id="myColor1"></p>
                  </div>
                  <div class="inputModals input-field col s12">
                     <p><?= label("paso3_colorLetra:"); ?><input name="colorCuerpo_colorLetra" class="colorLetra" type="color" id="myColor2"></p>
                  </div>
                  <div class="inputModals input-field col s12">
                     <p><?= label("paso3_colorBarraHorizontal:"); ?><input name="colorCuerpo_colorBarra"class="colorBarra" type="color" id="myColor3"></p>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   <div class="modal-footer">
      <div class="aplicarCambios">
         <a class="waves-effect btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
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
                        <label for="informacionfilled-in-box1"><?= label("paso3_formaPago"); ?></label>
                     </p>
                     <p>
                        <input name="checksInformacion_validez" value="validez" type="checkbox" class="filled-in checksInformacion"
                           id="informacionfilled-in-box2">
                        <label for="informacionfilled-in-box2"><?= label("paso3_validez"); ?></label>
                     </p>
                     <!-- <p>
                        <input name="checksInformacion_informacionDetalle" value="informacionDetalle" type="checkbox" class="filled-in checksInformacion" id="informacionfilled-in-box3">
                        <label for="informacionfilled-in-box3">Detalle</label>
                     </p> -->
                     <p>
                        <input name="checksInformacion_firma" value="firma" type="checkbox" class="filled-in checksInformacion"
                           id="informacionfilled-in-box4">
                        <label for="informacionfilled-in-box4"><?= label("paso3_firma"); ?></label>
                     </p>
                     <!-- <div class="file-field input-field col s12">
                        <div class="inputModals">Firma electónica:<input type="file">
                        </div>
                        <input class="file-path validate" type="text">
                     </div> -->
                  </div>
               </div>
               <div class="row col s12 m6 l6">
                  <div class="inputModals input-field col s12">
                     <p><?= label("paso3_colorFondo:"); ?><input name="colorInformacion_colorFondo" class="colorFondo" type="color" id="myColor1"></p>
                  </div>
                  <div class="inputModals input-field col s12">
                     <p><?= label("paso3_colorLetra:"); ?><input name="colorInformacion_colorLetra" class="colorLetra" type="color" id="myColor2"></p>
                  </div>
                  <div class="inputModals input-field col s12">
                     <p><?= label("paso3_colorBarraHorizontal:"); ?><input name="colorInformacion_colorBarra" class="colorBarra" type="color" id="myColor3"></p>
                  </div>
                  
               </div>
               <div class="input-field col s12">
                     <textarea length="600" maxlength="600" id="textoAdicionalInformacion" name="textoAdicionalInformacion" class="materialize-textarea" style="height: 24px;"></textarea>
                     <label for="message" class=""><?= label("paso3_textoAdicional"); ?></label>
               </div>
            </form>
         </div>
      </div>
   </div>
   <div class="modal-footer">
      <div class="aplicarCambios">
         <a class="waves-effect btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
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
                        <label for="footerfilled-in-box1"><?= label("paso3_telefono"); ?></label>
                     </p>
                     <p>
                        <input name="checksFooter_sitio" value="sitio" type="checkbox" class="filled-in checksFooter"
                           id="footerfilled-in-box2">
                        <label for="footerfilled-in-box2"><?= label("paso3_sitioWeb"); ?></label>
                     </p>
                     <p>
                        <input name="checksFooter_correo" value="correo" type="checkbox" class="filled-in checksFooter"
                           id="footerfilled-in-box3">
                        <label for="footerfilled-in-box3"><?= label("paso3_correo"); ?></label>
                     </p>
                     <p>
                        <input name="checksFooter_logo" value="logo" type="checkbox" class="filled-in checksFooter"
                           id="footerfilled-in-box4">
                        <label for="footerfilled-in-box4"><?= label("paso3_imagen"); ?></label>
                     </p>
                  </div>
               </div>
               <div class="row col s12 m6 l6">
                  <div class="inputModals input-field col s12">
                     <p><?= label("paso3_colorFondo:"); ?><input name="colorFooter_colorFondo" class="colorFondo" type="color" id="myColor1"></p>
                  </div>
                  <div class="inputModals input-field col s12">
                     <p><?= label("paso3_colorLetra:"); ?><input name="colorFooter_colorLetra" class="colorLetra" type="color" id="myColor2"></p>
                  </div>
                  <div class="input-field col s12">
                     <textarea length="100" maxlength="100" id="textoAdicionalFooter" name="textoAdicionalFooter" class="materialize-textarea" style="height: 24px;"></textarea>
                     <label for="message" class=""><?= label("paso3_textoAdicional"); ?></label>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   <div class="modal-footer">
      <div class="aplicarCambios">
         <a class="waves-effect btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
      </div>
   </div>
</div>

<!--Fin lista modals-->
<script type="text/javascript">




   $(document).ready(function(){

         $('#botonPaso4').parents('li').on('click', function(){
            
          generarPDF();
   
         });

         
   
           $('#botonPaso3').parents('li').on('click', function(){
               actualizarDiseno();
           });
   
       
   });
   
    $(document).ready(function(){
       // cargarDiseno(0, false);
   
       <?php 
      if (isset($resultado['plantilla'])) {// se esta editando una cotizacion
          ?>
           // alert(arrayPlantilla['colorEncabezado']);
           cargarDiseno(0, false);
           <?php
      }  else {
           ?>
           cargarDiseno(0, true);
           <?php
      }
      ?>
   
   
   });

    function generarPDF(){

      actualizarDiseno();

       var html = obtenerHTML();
       // alert('hola');

       var idEmpresa = "<?= $resultado['idEmpresa'];?>";
       var idCotizacion = "<?= encryptIt($resultado['idCotizacion']);?>";

       // alert(html);


       $.ajax({
          data: {miHtml :  html, idEmpresa :  idEmpresa, idCotizacion :  idCotizacion},
          url:   '<?=base_url()?>ManejadorPDF/generarCotizacion',
          type:  'post',
          beforeSend: function(){
               $('#botonPaso4').text('<?= label("paso3_cargando"); ?>');
               // $('#vistaPrevia').hide();
               // $('#preCarga').show();

           },
          success:  function (response) {
                // alert(response);
               $('#botonPaso4').text('<?= label('paso4'); ?>');

               $('#vistaPrevia').attr('src', "<?= base_url() ?>files/empresas/<?= $resultado['idEmpresa'];?>/cotizaciones/<?= encryptIt($resultado['idCotizacion']);?>/sistema/cotizacion.pdf");
           }
     });

    }

    function actualizarDiseno(){

               calcularTotalImpuestos();
               $('#disenoImpuesto').empty();
               for (var i = 0; i < arrayImpuestos.length; i++) {

                  var moneda = $('#paso1_tipoCambio').val();
                  if (moneda == '' || moneda == 0) {
                     moneda = 1;
                  };
                  costoImpuesto = (arrayImpuestos[i]['valor'] / parseFloat(moneda)).toFixed(2);
                  // alert(arrayImpuestos[i]['nombre'] + ', '+ arrayImpuestos[i]['valor']);
                  $('#disenoImpuesto').append('<li>'+arrayImpuestos[i]['nombre'] + ': <spam class="monedaCotizacion"> </spam>'+ costoImpuesto + '</li>');
               };
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

               var formaPago = $('#paso1FormaPago option:selected').text();
               $('#disenoFormaPago').text(formaPago);

               var totalCotizacion = $('#paso2_totalCotizacion').val();
               $('#disenoTotal').text(totalCotizacion);

               var totalCotizacion = $('#paso2_descuentoCotizacion').val();
               $('#disenoDescuento').text(totalCotizacion);
           // } 
   
           if (codigo != '') {
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
                           '<td class="celdaColumna col_4"><spam class="monedaCotizacion"></spam>'+ fila.find('.precio').val() +'</td>'+  
                           '<td class="celdaColumna col_5">'+ fila.find('.campo_cantidad').val() +'</td>'+
                           // '<td class="celdaColumna col_6">13%</td>'+
                           '<td class="celdaColumna col_7"><spam class="monedaCotizacion"></spam>'+ fila.find('.subTotal').val() +'</td>'+
                       '</tr>';
                   $('#lineasDiseno').append(lineaDetalle);
   
               }
           });
         $('.monedaCotizacion').text(signoMoneda + ' ');
            
            
            //Las nuevas filas que se insertaron no están actualizadas en cuanto a si sus columnas son visibles o no. El siguiente código los actualiza según los th de la tabla  
            $('td.col_1').css('display', $('th.col_1').css('display'));
            $('td.col_2').css('display', $('th.col_2').css('display'));
            $('td.col_3').css('display', $('th.col_3').css('display'));
            $('td.col_4').css('display', $('th.col_4').css('display'));
            $('td.col_5').css('display', $('th.col_5').css('display'));
            $('td.col_6').css('display', $('th.col_6').css('display'));
            $('td.col_7').css('display', $('th.col_7').css('display'));

   
       }

    function obtenerHTML() {
           $('#footerDiseno').css("height", footer);
           $('#prefooter').css("height", footer);

           $('#informacion').css("height", informacion);
           $('#footerCotizacion').css("height", footerCotizacion);

           $('.editarExterno').css("display", "none");
   
           var backgroundcolor = $('#hoja').css("background-color");
           var fuente = $('#hoja').css("font-family");
           var color = $('#hoja').css("color");
           var style = 'style="background: ' + backgroundcolor + '; font-family: ' + fuente + '; color: ' + color + '"';
   
           var html = '<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><title>403 Forbidden</title><link rel="stylesheet" href="<?= base_url() ?>assets/dashboard/css/estiloDisenoHoja.css"></head><body id="hojaPDF" ' + style + '>';
           html += '<div id="headerDiseno">' + $('#headerDiseno').html() + '</div>';
           html += '<div id="informacionSistema">' + $('#informacionSistema').html() + '</div>';
           html += '<div id="cuerpoDocumento">' + $('#cuerpoDocumento').html() + '</div></body></html>';
   
   
           //eliminar la propiedead height para que siga adaptandose a los cambios de tamano en el html
           $('#footerDiseno').css("height", "");
           $('#informacion').css("height", "");
           $('#footerCotizacion').css("height", "");
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

   var footer = 0;// esta varable es actualizada por el metodo recalcularAlturaContenido y se usa en el metodo obtenerHTML.
   var informacion = 0;// esta varable es actualizada por el metodo recalcularAlturaContenido y se usa en el metodo obtenerHTML.
   var footerCotizacion = 0;// esta varable es actualizada por el metodo recalcularAlturaContenido y se usa en el metodo obtenerHTML.
   function cargarDiseno(idPlantilla, plantillaDesdeLista){
       recalcularAlturaContenido();

       function recalcularAlturaContenido() {
            // alert('calculando');
           var tamanoHojaHTML = 1117; //aqui puede ajustar el tamano de la hoja que se verá en el html
           var header = $('#headerDiseno').height();//212
           footer = $('#footerDiseno').height();//226
           var informacionSistema = $('#informacionSistema').height();//20
           informacion = $('#informacion').height();
           footerCotizacion = $('#footerCotizacion').height();
   
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

           $('#informacionDetalle').text($('#textoAdicionalInformacion').val());
           

   
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

           $('#informacionFooter').text($('#textoAdicionalFooter').val());
   
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
   // if (plantilla['mostrarColumnaImpuesto'] == 1) {
   //     $("#modalCuerpo input[value='col_6']").prop("checked", true );
   // } else{
   //     $("#modalCuerpo input[value='col_6']").prop("checked", false );
   // }
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
   $('#textoAdicionalInformacion').val(plantilla['textoAdicionalInformacion']);
   

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
   // if (plantilla['mostrarDetalle'] == 1) {
   //     $("#modalInformacion input[value='informacionDetalle']").prop("checked", true );
   // } else {
   //     $("#modalInformacion input[value='informacionDetalle']").prop("checked", false );
   // }
   if (plantilla['mostrarFirma'] == 1) {
       $("#modalInformacion input[value='firma']").prop("checked", true );
   } else {
       $("#modalInformacion input[value='firma']").prop("checked", false );
   }
   }
   
   function actualizarModalFooter(plantilla){
   $('#modalFooter .colorFondo').val(plantilla['colorFooter']);
   $('#modalFooter .colorLetra').val(plantilla['colorLetraFooter']);

   $('#textoAdicionalFooter').val(plantilla['textoAdicionalFooter']);

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
   // 'mostrarColumnaImpuesto': $('#cuerpoDocumento thead .col_6').is(':visible'),
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
   // "mostrarDetalle":$('#informacion .box#informacionDetalle').is(':visible'),
   "mostrarFirma":$('#informacion .box#firma').is(':visible'),
   "imagenFirma":"",
   "textoAdicionalInformacion": $('#informacionDetalle').text()
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
   "textoAdicionalFooter":$('#informacionFooter').text()
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