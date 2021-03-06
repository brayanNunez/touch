

<div style="display: none" id="inset_form"></div>
<!-- START CONTENT -->

<section id="content">

    <!--start container-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloCotizaciones'); ?></h1>
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
                                                <?php
                                                $sessionActual = $this->session->userdata('logged_in');
                                                $esCotizador = $sessionActual['cotizador'];
                                                if($esCotizador) { ?>
                                                    <div class="agregar_nuevo">
                                                        <a href="<?= base_url() ?>cotizacion/cotizar"
                                                           class="btn btn-default"><?= label('agregarCotizacion'); ?></a>
                                                    </div>
                                                    <div>
                                                        <a id="busqueda-avanzada-agregar" href="#busquedaAvanzada"
                                                           class="modal-trigger"><?= label('cotizaciones_busquedaAvanzada') ?></a>
                                                    </div>
                                                <?php
                                                } else { ?>
                                                    <div>
                                                        <a id="busqueda-avanzada-sinAgregar" href="#busquedaAvanzada"
                                                           class="modal-trigger"><?= label('cotizaciones_busquedaAvanzada') ?></a>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                                <div id="contenedorTabla">
                                                <table id="cotizaciones-tabla-lista"
                                                       class="data-table-information responsive-table display"
                                                       cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th style="text-align: center;">
                                                                <input class="filled-in checkbox checkall" type="checkbox"
                                                                       id="checkbox-all"
                                                                       onclick="toggleChecked(this.checked)"/>
                                                                <label for="checkbox-all"></label>
                                                            </th>
                                                            <th><?= label('tablaCotizaciones_codigo'); ?></th>
                                                            <th><?= label('tablaCotizaciones_fecha'); ?></th>
                                                            <th><?= label('tablaCotizaciones_cliente'); ?></th>
                                                            <th><?= label('tablaCotizaciones_vendedor'); ?></th>
                                                            <th><?= label('tablaCotizaciones_monto'); ?></th>
                                                            <th><?= label('tablaCotizaciones_estado'); ?></th>
                                                            <th><?= label('tablaCotizaciones_opciones'); ?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                     <?php
                                                        if (isset($lista)) {
                                                        
                                                            if ($lista !== false) {
                                                                 $contador = 0;
                                                                    foreach ($lista as $fila) {
                                                                        $idEncriptado = encryptIt($fila['idCotizacion']);
                                                                        ?>
                                                     <tr id="fila<?= $contador ?>" data-idElemento="<?= $idEncriptado ?>">
                                                        <td style="text-align: center;">
                                                           <input type="checkbox" class="filled-in checkbox"
                                                              id="<?=$idEncriptado?>"/>
                                                           <label for="<?=$idEncriptado?>"></label>
                                                        </td>
                                                        <td>
                                                          <a href="<?= base_url(); ?>cotizacion/editar/<?= encryptIt($fila['idCotizacion'])?>">

                                                          <?php 
                                                          if ($fila['codigo'] == '') {
                                                            echo $fila['numero'];
                                                          } else{
                                                            echo $fila['codigo'].'-'.$fila['numero'];
                                                          }
                                                          ?>
                                                          <a>
                                                        </td>
                                                        <td>
                                                        <?= date("d-m-Y", strtotime($fila['fechaCreacion']));?>
                                                        <td>
                                                          <a href="<?= base_url(); ?>clientes/editar/<?= encryptIt($fila['idCliente'])?>#tab-informacion">
                                                          <?= $fila['cliente'] ?>
                                                          <a>
                                                        </td>
                                                        <td>
                                                          <a href="<?= base_url(); ?>usuarios/editar/<?= encryptIt($fila['idUsuario'])?>#tab-informacion">
                                                          <?= $fila['vendedor'] ?>
                                                          <a>
                                                        </td>
                                                        <td><span><?=$fila['signo']?> </span><?=$fila['monto']?></td>
                                                        <td>
                                                        <?php
                                                          $estado =  '';
                                                          switch ($fila['estado']) {
                                                            case 'nueva':
                                                              $estado =  label('estado_nueva');
                                                              break;
                                                            case 'espera':
                                                              $estado =  label('estado_espera');
                                                              break;
                                                            case 'rechazada':
                                                              $estado =  label('estado_rechazada');
                                                              break;
                                                            case 'enviada':
                                                              $estado =  label('estado_enviada');
                                                              break;
                                                            case 'finalizada':
                                                              $estado =  label('estado_finalizada');
                                                              break;
                                                            case 'facturada':
                                                              $estado =  label('estado_facturada');
                                                              break;
                                                          }
                                                          echo $estado;
                                                        ?>
                                                        
                                                        </td>
                                                        <td>
                                                            <ul id="dropdown-cotizacion<?= $contador ?>" class="dropdown-content">
                                                                <?php
                                                                $sessionActual = $this->session->userdata('logged_in');
                                                                $rolAdministrador = $sessionActual['administrador'];
                                                                $rolAprobador = $sessionActual['aprobador'];
                                                                $rolCotizador = $sessionActual['cotizador'];
                                                                $rolContador = $sessionActual['contador'];
                                                                switch ($fila['estado']) {
                                                                    case 'nueva':
                                                                        if($rolCotizador) { ?>
                                                                            <li>
                                                                                <a href="<?= base_url() ?>cotizacion/editar/<?= $idEncriptado ?>"
                                                                                   class="-text">
                                                                                    <?= label('menuOpciones_editar') ?>
                                                                                </a>
                                                                            </li>
                                                                <?php
                                                                        }
                                                                        break;
                                                                    case 'espera':
                                                                        if($rolAprobador) { ?>
                                                                            <li>
                                                                                <a href="<?= base_url() ?>cotizacion/aprobar/<?= $idEncriptado ?>"
                                                                                   class="-text">
                                                                                    <?= label('menuOpciones_aprobar') ?>
                                                                                </a>
                                                                            </li>
                                                                <?php
                                                                        }
                                                                        break;
                                                                    case 'rechazada':
                                                                        if($rolCotizador) { ?>
                                                                            <li>
                                                                                <a href="<?= base_url() ?>cotizacion/editar/<?= $idEncriptado ?>"
                                                                                   class="-text">
                                                                                    <?= label('menuOpciones_editar') ?>
                                                                                </a>
                                                                            </li>
                                                                <?php
                                                                        }
                                                                        break;
                                                                    case 'enviada':
                                                                        if($rolCotizador) { ?>
                                                                            <li>
                                                                                <a href="<?= base_url() ?>cotizacion/finalizar/<?= $idEncriptado ?>"
                                                                                   class="-text">
                                                                                    <?= label('menuOpciones_finalizar') ?>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="<?= base_url() ?>cotizacion/editar/<?= $idEncriptado ?>"
                                                                                   class="-text">
                                                                                    <?= label('menuOpciones_editar') ?>
                                                                                </a>
                                                                            </li>
                                                                <?php
                                                                        }
                                                                        break;
                                                                    case 'finalizada':
                                                                        if($rolContador) { ?>
                                                                            <li>
                                                                                <a href="<?= base_url() ?>cotizacion/facturar/<?= $idEncriptado ?>"
                                                                                   class="-text">
                                                                                    <?= label('menuOpciones_facturar') ?>
                                                                                </a>
                                                                            </li>
                                                                            <?php
                                                                        }
                                                                        break;
                                                                    case 'facturada': ?>
                                                                <?php
                                                                        break;
                                                                }
                                                                ?>

                                                                <li>
                                                                    <a href="<?= base_url(); ?>cotizacion/ver/<?= $idEncriptado?>" class="-text">
                                                                        <?= label('menuOpciones_ver') ?>
                                                                    </a>
                                                                </li>
                                                                <?php
                                                                if($rolCotizador) { ?>
                                                                    <li>
                                                                        <a href="<?= base_url() ?>cotizacion/duplicar/<?= $idEncriptado ?>"
                                                                           class="-text">
                                                                            <?= label('tablaCotizaciones_opcionDuplicar') ?>
                                                                        </a>
                                                                    </li>
                                                                <?php
                                                                }
                                                                if($rolAdministrador) { ?>
                                                                    <li>
                                                                        <a href="#eliminarCotizacion" class="-text modal-trigger confirmarEliminar"
                                                                           data-id-eliminar="<?= $idEncriptado ?>"  data-fila-eliminar="fila<?= $contador?>">
                                                                            <?= label('menuOpciones_eliminar') ?>
                                                                        </a>
                                                                    </li>
                                                                <?php
                                                                } ?>
                                                           </ul>
                                                           <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                              href="#!"
                                                              data-activates="dropdown-cotizacion<?= $contador++ ?>">
                                                           <?= label('menuOpciones_seleccionar') ?><i
                                                              class="mdi-navigation-arrow-drop-down"></i>
                                                           </a>
                                                        </td>
                                                     </tr>
                                                     <?php
                                                        }
                                                        } 
                                                        }
                                                        ?>
                                                  </tbody>
                                                </table>
                                                </div>

                                                <?php
                                                $sessionActual = $this->session->userdata('logged_in');
                                                $esCotizador = $sessionActual['cotizador'];
                                                if($esCotizador) { ?>
                                                    <div class="tabla-conAgregar tabla-conBusqueda">
                                                        <a id="opciones-seleccionados-print"
                                                           class="black-text opciones-seleccionados option-print-table"
                                                           style="visibility: hidden;"
                                                           href="#" data-toggle="tooltip"
                                                           title="<?= label('opciones_seleccionadosImprimir') ?>">
                                                            <i class="mdi-action-print icono-opciones-varios"></i>
                                                        </a>
                                                        <ul id="dropdown-exportar" class="dropdown-content">
                                                            <li>
                                                                <a id="opciones-seleccionados-PDF" href="#"
                                                                   class="-text"><?= label('opciones_seleccionadosExportarPdf') ?></a>
                                                            </li>
                                                            <li>
                                                                <a id="opciones-seleccionados-Excel" href="#"
                                                                   class="-text"><?= label('opciones_seleccionadosExportarExcel') ?></a>
                                                            </li>
                                                        </ul>
                                                        <a id="opciones-seleccionados-export"
                                                           style="visibility: hidden;"
                                                           class="opciones-seleccionados boton-opciones black-text dropdown-button option-export-table"
                                                           href="#" data-toggle="tooltip"
                                                           title="<?= label('opciones_seleccionadosExportar') ?>"
                                                           data-activates="dropdown-exportar">
                                                            <i class="mdi-file-file-download icono-opciones-varios"></i>
                                                        </a>
                                                        <a id="opciones-seleccionados-delete"
                                                           class="modal-trigger black-text opciones-seleccionados option-delete-elements"
                                                           style="visibility: hidden;"
                                                           href="#eliminarElementosSeleccionados" data-toggle="tooltip"
                                                           title="<?= label('opciones_seleccionadosEliminar') ?>">
                                                            <i class="mdi-action-delete icono-opciones-varios"></i>
                                                        </a>
                                                    </div>
                                                <?php
                                                } else {
                                                ?>
                                                    <div class="tabla-sinAgregar tabla-conBusqueda">
                                                        <a id="opciones-seleccionados-print"
                                                           class="black-text opciones-seleccionados option-print-table"
                                                           style="visibility: hidden;"
                                                           href="#" data-toggle="tooltip"
                                                           title="<?= label('opciones_seleccionadosImprimir') ?>">
                                                            <i class="mdi-action-print icono-opciones-varios"></i>
                                                        </a>
                                                        <ul id="dropdown-exportar" class="dropdown-content">
                                                            <li>
                                                                <a id="opciones-seleccionados-PDF" href="#"
                                                                   class="-text"><?= label('opciones_seleccionadosExportarPdf') ?></a>
                                                            </li>
                                                            <li>
                                                                <a id="opciones-seleccionados-Excel" href="#"
                                                                   class="-text"><?= label('opciones_seleccionadosExportarExcel') ?></a>
                                                            </li>
                                                        </ul>
                                                        <a id="opciones-seleccionados-export"
                                                           style="visibility: hidden;"
                                                           class="opciones-seleccionados boton-opciones black-text dropdown-button option-export-table"
                                                           href="#" data-toggle="tooltip"
                                                           title="<?= label('opciones_seleccionadosExportar') ?>"
                                                           data-activates="dropdown-exportar">
                                                            <i class="mdi-file-file-download icono-opciones-varios"></i>
                                                        </a>
                                                        <a id="opciones-seleccionados-delete"
                                                           class="modal-trigger black-text opciones-seleccionados option-delete-elements"
                                                           style="visibility: hidden;"
                                                           href="#eliminarElementosSeleccionados" data-toggle="tooltip"
                                                           title="<?= label('opciones_seleccionadosEliminar') ?>">
                                                            <i class="mdi-action-delete icono-opciones-varios"></i>
                                                        </a>
                                                    </div>
                                                <?php
                                                }
                                                ?>
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
<!-- <div style="display: none"> -->
    <!-- <a id="linkModalErrorCargarDatos" href="#transaccionIncorrectaCargar" class="btn btn-default modal-trigger"></a> -->
    <!-- <a id="transaccionIncorrectaEliminar" hopenModal#transaccionIncorrectaEliminar" class="btn btn-default modal-trigger"></a> -->
<!-- </div> -->

<!-- END CONTENT-->


<script type="text/javascript">
   $(document).on("ready", function () { 

      var config = {'.chosen-select'           : {}}
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }
   
       <?php
      if (isset($lista)) {
          if ($lista === false) {?>
                $('#transaccionIncorrectaCargar').openModal();
           <?php
      }
      }
      ?>
         
   
       var idEliminar = 0;
       var filaEliminar = null;
   
       $(document).on('click','.confirmarEliminar', function () {
           idEliminar = $(this).data('id-eliminar');
           filaEliminar = $(this).parents('tr');
           
       });
   
        $('#eliminarCotizacion #botonEliminar').on('click', function () {
           event.preventDefault();
           $.ajax({
                  data: {idEliminar : idEliminar},
                  url:   '<?=base_url()?>cotizacion/eliminar',
                  type:  'post',
                  // beforeSend: function () {
                  //         $("#resultado").html("Procesando, espere por favor...");
                  // },
                  success:  function (response) {
                   if (response==1) {
                       filaEliminar.fadeOut(function () {
                       filaEliminar.remove();
                       verificarChecks();
                       });
                       
                   } else{
                       $('#transaccionIncorrectaEliminar').openModal();
                   };
               }
           });
        });
   });
   
   $(document).ready( function () {
       $('#cotizaciones-tabla-lista').dataTable( {
           'aoColumnDefs': [{
               'bSortable': false,
               'aTargets': [0, -1] //desactiva en primer y �ltima columna opci�n de ordenar
           }]
       });
   });
   $(document).ready(function () {
       $('table#cotizaciones-tabla-lista thead th:first').removeClass('sorting_asc').addClass('sorting_disabled');
       $('table#cotizaciones-tabla-lista thead th:nth-child(2)').removeClass('sorting').addClass('sorting_asc');
   });
   $(document).ready(function () {
       $('#eliminarElementosSeleccionados #botonEliminar').on("click", function (event) {
           var tb = $(this).attr('title');
           var sel = false;
           var ch = $('#' + tb).find('tbody input[type=checkbox]');
           var marcados = $('.checkbox:checked').not('#checkbox-all').size();
           var contadorErrores = 0;
           var contadorTotal = 0;
           ch.each(function () {
               var $this = $(this);
               if ($this.is(':checked')) {
                   sel = true;
                    var fila = $this.parents('tr');
                   // var idEliminar = $this.parents('tr').attr('data-idElemento');
                   var idEliminar = $this.attr('id');
                   $.ajax({
                          data: {idEliminar : idEliminar},
                          url:   '<?=base_url()?>cotizacion/eliminar',
                          type:  'post',
                          success:  function (response) {

                           contadorTotal++;
                           if (response==1) {
                              fila.fadeOut(function () {
                               fila.remove();
                               verificarChecks();
                               });
                           } else{ 
                            contadorErrores++;
                           };
                            if (contadorTotal == marcados) {
                                if (contadorErrores != 0) {
                                    $('#transaccionIncorrectaEliminar').openModal();
                                } 
                              
                            };
                       }
                   });
  
               }
           });
            
           return false;
   
       });
   });

    $(window).load(function () {
        verificarChecks();
    });

   $(document).ready(function () {
       $('#checkbox-all').click(function (event) {
           var $this = $(this);
           var tableBody = $('#cotizaciones-tabla-lista').find('tbody tr[role=row] input[type=checkbox]');
           tableBody.each(function() {
               var check = $(this);
               if ($this.is(':checked')) {
                   check.prop('checked', true);
               } else {
                   check.prop('checked', false);
               }
           });
       });
   });
    $(document).ready(function () {
      $(document).on('click','.checkbox',function (event) {
        verificarChecks();
      });
    });
   
   function verificarChecks(){
       
       var marcados = $('.checkbox:checked').not('#checkbox-all').size();
       if (marcados >= 1) {
           var elems = document.getElementsByClassName('opciones-seleccionados');
           var e;
           for (e in elems) {
               elems[e].style.visibility = 'visible';
           }
       } else {
           $('#checkbox-all').prop('checked', false);
           var elems = document.getElementsByClassName('opciones-seleccionados');
           var e;
           for (e in elems) {
               elems[e].style.visibility = 'hidden';
           }
       }
   }
   
    $(document).ready(function () {
          $('.boton-opciones').sideNav({
          // menuWidth: 0, // Default is 240
           edge: 'right', // Choose the horizontal origin
              closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
            }
          );

          $('.dropdown-button').dropdown({
              inDuration: 300,
              outDuration: 225,
              constrain_width: true, // Does not change width of dropdown to that of the activator
              hover: false, // Activate on hover
              gutter: 0, // Spacing from edge
              belowOrigin: true, // Displays dropdown below the button
              alignment: 'left' // Displays dropdown with edge aligned to the left of button
            }
          );
    });

   // Inicio script de descarga pdf, excel e imprimir
   $(document).on('ready', function(){
   
       $('#opciones-seleccionados-print').on("click", function(){
           tablaHtml = htmlTabla('cotizaciones-tabla-lista', true);
           Popup(tablaHtml);
       });
   
       function Popup(data) 
       {
           // var mywindow = window.open('', 'my div', 'height=400,width=600');
           var mywindow = window.open('', 'my div', '');
           mywindow.document.write('<html><head><title><?= label('tituloCotizaciones'); ?></title>');
          // mywindow.document.write('<link media="print,screen" href="<?= base_url() ?>assets/dashboard/css/estiloTablasDescarga.css" rel="stylesheet" type="text/css" >');
           mywindow.document.write('</head><body>');
           mywindow.document.write(data);
           mywindow.document.write('</body></html>');
           mywindow.document.close(); // necessary for IE >= 10
           mywindow.focus(); // necessary for IE >= 10
           mywindow.print();
           mywindow.close();
           return true;
       }
   
   
       $('#opciones-seleccionados-Excel').on("click", function(){
           var html = htmlTabla('cotizaciones-tabla-lista', false);
           $('#inset_form').html('<form  action="<?=base_url()?>ManejadorExcel/tablaDescarga" name="form" method="post" style="display:block;"><input type="text" name="titulo" value="<?= label('tituloCotizaciones'); ?>"><textarea name="miHtml">' + html + '</textarea></form>');
           document.forms['form'].submit();
       });
       
       $('#opciones-seleccionados-PDF').on("click", function(){
           var informacionSistema = '<div id="informacionSistema"><div id="linkPagina"><a href="<?=base_url()?>"><?= label('link_paginaInicial'); ?></a></div><span class="numeracion"></span></div>';
           var encabezado = '<div id="encabezado"><?= label('tituloCotizaciones'); ?></div>';
           var body = encabezado + informacionSistema;
           body += htmlTabla('cotizaciones-tabla-lista', false);
           var html = '<!DOCTYPE html><html><head><title>403 Forbidden</title><link rel="stylesheet" href="<?= base_url() ?>assets/dashboard/css/estiloTablasDescarga.css"></head><body id="hojaPDF">';
           html +=  body + '</body></html>';
           $('#inset_form').html('<form  action="<?=base_url()?>ManejadorPDF/tablaDescarga" name="form" method="post" style="display:block;"><input type="text" name="titulo" value="<?= label('tituloCotizaciones'); ?>"><textarea name="miHtml">' + html + '</textarea></form>');
           document.forms['form'].submit();
       });
       
       
       function htmlTabla(idTabla, style){
       
           var styleTable = 'style="border-collapse:collapse;width: 100%;"';
           var styleHead = 'style="font-weight: bold;"';
           var styleTd = 'style="border:1px solid #A9A9A9; padding:3px 7px 2px 7px;"';
           if (style) {
               var tablaHtml = '<table ' + styleTable + '><thead ' + styleHead + '>';
           } else{
               var tablaHtml = '<table><thead>';
           };
           
           var tabla = $("#" + idTabla).dataTable();
           
           tabla.find('> thead > tr').each(function()
           {
               tablaHtml += '<tr>';
               var cantidadColummnas = $(this).children("th").length;
                 $(this).children("th").each(function(index){
                   if (index != 0 && index != cantidadColummnas-1) {
                       if (style) {
                           tablaHtml += '<td ' + styleTd + '>' + $(this).html() + '</td>';
                       } else{
                           tablaHtml += '<td>' + $(this).html() + '</td>';
                       };
                       
                   };
                 });
               tablaHtml += '</tr>';
           });
       
           tablaHtml += '</thead>';
           tablaHtml += '<tbody>';
           tabla.find('> tbody > tr').each(function()
           {
               if ($(this).children("td").first().find('input').is(':checked')) {
               tablaHtml += '<tr>';
               var cantidadColummnas = $(this).children("td").length;
                 $(this).children("td").each(function(index){
                   if (index != 0 && index != cantidadColummnas-1) {
                       if (style) {
                           tablaHtml += '<td '+ styleTd +'>' + $(this).text() + '</td>';
                       } else{
                           tablaHtml += '<td>' + $(this).text() + '</td>';
                       };
                       
                   };
                 });
             tablaHtml += '</tr>';
         }
           });
           tablaHtml += '</tbody></table>';
          return  tablaHtml;
           
       }
   });
   // Fin script de descarga pdf, excel e imprimir

   // script busqueda avanzada
   $(document).on('ready', function(){
      $('#botonBusqueda').on('click', function(){
        var url = '<?= base_url() ?>Cotizacion/busqueda';
        var method = 'POST'; 
        $.ajax({
               type: method,
               url: url,
               data: $('#formBusqueda').serialize(), 
               success: function(response)
               {
                // alert(response);
                  if (response ==0) {
                    alert('<?= label('errorLeerDatos'); ?>');
                  } else{
                    arrayBusqueda = $.parseJSON(response);
                    var table = $('#cotizaciones-tabla-lista').DataTable();
                    table.clear().draw();

                    for (var i = 0; i < arrayBusqueda.length; i++) {
                      var fila = arrayBusqueda[i];
                      agregarFila(fila['idCotizacion'], fila['codigo'], fila['numero'], fila['fechaCreacion'], fila['cliente'], fila['vendedor'], fila['monto'],fila['signo'], fila['estado'], fila['idCliente'], fila['idUsuario'], i);
                    };
                    
                  };
                  $('#busquedaAvanzada').closeModal();
                  
               }
             });
      })
});

   function agregarFila(idEncriptado, codigo, numero, fechaCreacion, cliente, vendedor, monto, signo, estado, idCliente, idUsuario, contadorFilas){
       var urlBase = '<?= base_url(); ?>';
       var label_ver = '<?= label('menuOpciones_ver') ?>';
       var label_editar = '<?= label('menuOpciones_editar') ?>';
       var label_dublicar = '<?= label('tablaCotizaciones_opcionDuplicar') ?>';
       var label_eliminar = '<?= label('menuOpciones_eliminar') ?>';
       var label_seleccionar = '<?= label('menuOpciones_seleccionar') ?>';
       var label_aprobar = '<?= label('menuOpciones_aprobar') ?>';
       var label_finalizar = '<?= label('menuOpciones_finalizar') ?>';
       var label_facturar = '<?= label('menuOpciones_facturar') ?>';

       var check = '<td>' +
                       '<div style="text-align: center;">'+
                           '<input type="checkbox" class="filled-in checkbox" id="'+idEncriptado+'"/>' +
                           '<label for="'+idEncriptado+'"></label>' +
                       '</div>'+
                    '</td>';
            
       var miCodigo = '';
       if (codigo == '') {
           miCodigo = numero;
       } else {
           miCodigo = codigo +'-'+numero;
       }
       var codigo = '<td><a href="'+urlBase+'cotizacion/editar/'+idEncriptado+'">'+miCodigo+'<a></td>';
       var fechaCreacion = '<td>'+fechaCreacion+'</td>';
       if (cliente == null) {
           cliente = '';
       }
       var cliente = '<td><a href="'+urlBase+'clientes/editar/'+idCliente+'#tab-informacion">'+cliente+'<a></td>';
       var vendedor = '<td><a href="'+urlBase+'usuarios/editar/'+idUsuario+'#tab-informacion">'+vendedor+'<a></td>';
       var monto = '<td><span>'+signo+' </span>' + monto +'</td>';

       var boton = '<td>' +
           '<ul id="dropdown-cotizacion'+ contadorFilas +'" class="dropdown-content">';
       var miEstado = '';
       var rolAdministrador = '<?= $rolAdministrador; ?>';
       var rolCotizador = '<?= $rolCotizador; ?>';
       var rolContador = '<?= $rolContador; ?>';
       var rolAprobador = '<?= $rolAprobador; ?>';
       switch(estado) {
           case 'nueva':
               miEstado = '<?=label('estado_nueva')?>';
               if (rolCotizador) {
                   boton += '<li>' +
                       '<a href="<?= base_url(); ?>cotizacion/editar/' + idEncriptado + '" class="-text">' + label_editar + '</a>' +
                       '</li>';
               }
               break;
           case 'espera':
               miEstado = '<?=label('estado_espera')?>';
               if (rolAprobador) {
                   boton += '<li>' +
                       '<a href="<?= base_url(); ?>cotizacion/aprobar/' + idEncriptado + '" class="-text">' + label_aprobar + '</a>' +
                       '</li>';
               }
               break;
           case 'rechazada':
               miEstado =  '<?=label('estado_rechazada')?>';
               if (rolCotizador) {
                   boton += '<li>' +
                       '<a href="<?= base_url(); ?>cotizacion/editar/' + idEncriptado + '" class="-text">' + label_editar + '</a>' +
                       '</li>';
               }
               break;
           case 'enviada':
               miEstado =  '<?=label('estado_enviada')?>';
               if (rolCotizador) {
                   boton += '<li>' +
                       '<a href="<?= base_url(); ?>cotizacion/finalizar/' + idEncriptado + '" class="-text">' + label_finalizar + '</a>' +
                       '</li>' +
                       '<li>' +
                       '<a href="<?= base_url(); ?>cotizacion/editar/' + idEncriptado + '" class="-text">' + label_editar + '</a>' +
                       '</li>';
               }
               break;
           case 'finalizada':
               miEstado =  '<?=label('estado_finalizada')?>';
               if (rolContador) {
                   boton += '<li>' +
                       '<a href="<?= base_url(); ?>cotizacion/facturar/' + idEncriptado + '" class="-text">' + label_facturar + '</a>' +
                       '</li>';
               }
               break;
           case 'facturada':
               miEstado =  '<?=label('estado_facturada')?>';
               break;
       }
       var estado = '<td>' + miEstado +'</td>';
       if (rolCotizador && rolAdministrador) {
           boton += '<li>' +
               '<a href="<?= base_url(); ?>cotizacion/ver/' + idEncriptado + '" class="-text">' + label_ver + '</a>' +
               '</li>' +
               '<li>' +
               '<a href="<?= base_url(); ?>cotizacion/duplicar/' + idEncriptado + '" class="-text">' + label_dublicar + '</a>' +
               '</li>' +
               '<li>' +
               '<a href="#eliminarCotizacion" class="-text modal-trigger confirmarEliminar" data-id-eliminar="' + idEncriptado + '"  data-fila-eliminar="fila' + contadorFilas + '">' + label_eliminar + '</a>' +
               '</li>' +
               '</ul>' +
               '<a class="boton-opciones btn-flat dropdown-button waves-effect white-text"' +
               'href="#!"' +
               'data-activates="dropdown-cotizacion' + contadorFilas + '">' +
               '' + label_seleccionar + '<i class="mdi-navigation-arrow-drop-down"></i>' +
               '</a>' +
               '</td>';
       } else {
           if (rolAdministrador) {
               boton += '<li>' +
                   '<a href="<?= base_url(); ?>cotizacion/ver/' + idEncriptado + '" class="-text">' + label_ver + '</a>' +
                   '</li>' +
                   '<li>' +
                   '<a href="#eliminarCotizacion" class="-text modal-trigger confirmarEliminar" data-id-eliminar="' + idEncriptado + '"  data-fila-eliminar="fila' + contadorFilas + '">' + label_eliminar + '</a>' +
                   '</li>' +
                   '</ul>' +
                   '<a class="boton-opciones btn-flat dropdown-button waves-effect white-text"' +
                   'href="#!"' +
                   'data-activates="dropdown-cotizacion' + contadorFilas + '">' +
                   '' + label_seleccionar + '<i class="mdi-navigation-arrow-drop-down"></i>' +
                   '</a>' +
                   '</td>';
           } else {
               boton += '<li>' +
               '<a href="<?= base_url(); ?>cotizacion/ver/' + idEncriptado + '" class="-text">' + label_ver + '</a>' +
               '</li>' +
               '<li>' +
               '<a href="<?= base_url(); ?>cotizacion/duplicar/' + idEncriptado + '" class="-text">' + label_dublicar + '</a>' +
               '</li>' +
               '</ul>' +
               '<a class="boton-opciones btn-flat dropdown-button waves-effect white-text"' +
               'href="#!"' +
               'data-activates="dropdown-cotizacion' + contadorFilas + '">' +
               '' + label_seleccionar + '<i class="mdi-navigation-arrow-drop-down"></i>' +
               '</a>' +
               '</td>';
           }
       }

       $('table').dataTable().fnAddData([
           check,
           codigo,
           fechaCreacion,
           cliente,
           vendedor,
           monto,
           estado,
           boton ]);

       generarListasBotones();
       $('.modal-trigger').leanModal();
            // contadorFilas++;
   }
          function generarListasBotones(){
            $('.boton-opciones').sideNav({
            // menuWidth: 0, // Default is 240
                edge: 'right', // Choose the horizontal origin
                closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
              });
          $('.dropdown-button').dropdown({
              inDuration: 300,
              outDuration: 225,
              constrain_width: true, // Does not change width of dropdown to that of the activator
              hover: false, // Activate on hover
              gutter: 0, // Spacing from edge
              belowOrigin: true, // Displays dropdown below the button
              alignment: 'left' // Displays dropdown with edge aligned to the left of button
            }
          );
      }

</script>
<!-- lista modals -->
<div id="transaccionIncorrectaCargar" class="modal">
    <div  class="modal-header headerTransaccionIncorrecta">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('errorLeerDatos'); ?></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="transaccionIncorrectaEliminar" class="modal">
    <div  class="modal-header headerTransaccionIncorrecta">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('errorEliminar'); ?></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="eliminarCotizacion" class="modal">
   <div class="modal-header">
      <p><?= label('nombreSistema'); ?></p>
      <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
   </div>
   <div class="modal-content">
      <p><?= label('confirmarEliminarCotizacion'); ?></p>
   </div>
   <div id="botonEliminar" class="modal-footer black-text">
      <a href="" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
   </div>
</div>
<div id="eliminarElementosSeleccionados" class="modal">
   <div class="modal-header">
      <p><?= label('nombreSistema'); ?></p>
      <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
   </div>
   <div class="modal-content">
      <p><?= label('eliminarSeleccionados'); ?></p>
   </div>
   <div class="modal-footer black-text">
      <div id="botonEliminar" class="modal-footer black-text" title="cotizaciones-tabla-lista">
         <a href="#"
            class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
      </div>
   </div>
</div>



<div id="desactivarCotizacion" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarDesactivarCotizacion'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>


<div id="busquedaAvanzada" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div  class="section">
          <form id="formBusqueda">
            <div class="row">
              <div class="row">
                <div class="input-field col s12 m4 l4">
                    <div class="input-field col s12">
                        <input id="busqueda-fecha-desde" name="busqueda-fecha-desde" type="text" value="<?= date("d-m-Y", strtotime($fechaMinima))?>" class="datepicker-fecha">
                        <label for="busqueda-fecha-desde" class=""><?= label('clientes_busquedaDesde') ?></label>
                    </div>
                </div>
                <div class="input-field col s12 m4 l4">
                    <div class="input-field col s12">
                        <input id="busqueda-fecha-hasta" name="busqueda-fecha-hasta" type="text" class="datepicker-fecha" value="<?php echo date('d-m-Y'); ?>">
                        <label for="busqueda-fecha-hasta" class=""><?= label('clientes_busquedaHasta') ?></label>
                    </div>
                </div>


                 <div class="input-field col s12 m4 l4 inputSelector">            
                  <label for="contenedorSelectEstado"><?= label("busqueda_selectEstado"); ?></label>
                  <br>
                  <div id="contenedorSelectEstado">  
                      <select data-incluirBoton="0" placeholder="seleccionar" id="busquedaCotizacion_estado" name="busquedaCotizacion_estado" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("paso1_elegirCliente"); ?>" class="chosen-select browser-default" style="width:350px;" tabindex="2">
                          <!-- <option value="nuevo"><?= label("agregarNuevo"); ?></option> -->
                          <option value="0" selected ><?= label("busquedaAvanzada_Todos"); ?></option>
                          <?php 
                              foreach ($estados as $estado) {
                                  $valor = "value='".$estado['idEstadoCotizacion']."'";
                                  $miEstado =  '';
                                  switch ($estado['descripcion']) {
                                    case 'nueva':
                                      $miEstado =  label('estado_nueva');
                                      break;
                                    case 'espera':
                                      $miEstado =  label('estado_espera');
                                      break;
                                    case 'rechazada':
                                      $miEstado =  label('estado_rechazada');
                                      break;
                                    case 'enviada':
                                      $miEstado =  label('estado_enviada');
                                      break;
                                    case 'finalizada':
                                      $miEstado =  label('estado_finalizada');
                                      break;
                                    case 'facturada':
                                      $miEstado =  label('estado_facturada');
                                      break;
                                  }
                                  echo '<option '.$valor.'>'.$miEstado.'</option>");';
                              }
                                  
                          ?>
                      </select>  
                   </div>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 m12 l4 inputSelector">            
                  <label for="contenedorSelectCliente"><?= label("busqueda_selectClientes"); ?></label>
                  <br>
                  <div id="contenedorSelectCliente">  
                      <select data-incluirBoton="0" placeholder="seleccionar" id="busquedaCotizacion_cliente" name="busquedaCotizacion_cliente" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("paso1_elegirCliente"); ?>" class="chosen-select browser-default" style="width:350px;" tabindex="2">
                          <!-- <option value="nuevo"><?= label("agregarNuevo"); ?></option> -->
                          <option value="0" selected ><?= label("busquedaAvanzada_Todos"); ?></option>
                          <?php 
                              foreach ($clientes as $cliente) {
                                  $valor = "value='".$cliente['idCliente']."'";
                                  echo '<option '.$valor.'>'.$cliente['nombre'].' '.$cliente['primerApellido'].' '.$cliente['segundoApellido'].'</option>");';
                              }
                                  
                          ?>
                      </select>  
                   </div>
                </div>

                <div class="input-field col s12 m12 l4 inputSelector">            
                  <label for="contenedorSelectVendedor"><?= label("busqueda_selectVendedores"); ?></label>
                  <br>
                  <div id="contenedorSelectVendedor">  
                      <select data-incluirBoton="0" placeholder="seleccionar" id="busquedaCotizacion_vendedor" name="busquedaCotizacion_vendedor" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("paso1_elegirVendedor"); ?>" class="chosen-select browser-default" style="width:350px;" tabindex="2">
                          <!-- <option value="nuevo"><?= label("agregarNuevo"); ?></option> -->
                          <option value="0" selected ><?= label("busquedaAvanzada_Todos"); ?></option>
                          <?php 
                              foreach ($vendedores as $vendedor) {
                                  $valor = "value='".$vendedor['idUsuario']."'";
                                  echo '<option '.$valor.'>'.$vendedor['nombre'].' '.$vendedor['primerApellido'].' '.$vendedor['segundoApellido'].'</option>");';
                              }
                                  
                          ?>
                      </select>  
                   </div>
                </div>

                <div class="input-field col s12 m12 l4 inputSelector">            
                  <label for="contenedorSelectServicio"><?= label("busqueda_selectServicios"); ?></label>
                  <br>
                  <div id="contenedorSelectServicio">  
                      <select data-incluirBoton="0" placeholder="seleccionar" id="busquedaCotizacion_servicio" name="busquedaCotizacion_servicio" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("paso1_elegirServicio"); ?>" class="chosen-select browser-default" style="width:350px;" tabindex="2">
                          <!-- <option value="nuevo"><?= label("agregarNuevo"); ?></option> -->
                          <option value="0" selected ><?= label("busquedaAvanzada_Todos"); ?></option>
                          <?php 
                              foreach ($servicios as $servicio) {
                                  $valor = "value='".$servicio['idServicio']."'";
                                  echo '<option '.$valor.'>'.$servicio['nombre'].'</option>");';
                              }
                                  
                          ?>
                      </select>  
                   </div>
                </div>

              </div>
            </div>
          </form>
        </div>
    </div>
    <div class="modal-footer black-text">
        <a id="botonBusqueda" class="waves-effect waves-red btn-flat modal-action"><?= label('aceptar'); ?></a>
    </div>
</div>
<!--Fin lista modals -->
