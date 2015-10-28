<div style="display: none" id="inset_form"></div>
<!-- START CONTENT  -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloGastos'); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--start container-->
    <div class="container">
        <div id="chart-dashboard">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div id="submit-button" class="section">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card lista-elementos">
                                    <div id="table-datatables">
                                        <div class="row">
                                            <div class="col s12 m12 l12">
                                                <div class="agregar_nuevo">
                                                    <a href="#agregarGasto"
                                                       class="btn modal-trigger"><?= label('tituloGastos_nuevo'); ?></a>
                                                </div>
                                                <div>
                                                    <a id="busqueda-avanzada-agregar" href="#busquedaAvanzadaGastos"
                                                       class="modal-trigger"><?= label('gastos_busquedaAvanzada') ?></a>
                                                </div>
                                                <div id="contenedorTabla">
                                                    <table id="gastos-tabla-lista"
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
                                                                <th><?= label('tituloGastos_codigo'); ?></th>
                                                                <th><?= label('tituloGastos_tipo'); ?></th>
                                                                <th><?= label('tituloGastos_categoria'); ?></th>
                                                                <th><?= label('tituloGastos_tiempo'); ?></th>
                                                                <th><?= label('tituloGastos_gasto'); ?></th>
                                                                <th><?= label('tituloGastos_proveedor'); ?></th>
                                                                <th><?= label('tituloGastos_proveedorCategoria'); ?></th>
                                                                <th><?= label('tituloGastos_monto'); ?></th>
                                                                <th><?= label('tituloGastos_opciones'); ?></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                         <?php
                                                            if (isset($lista)) {
                                                            
                                                                if ($lista !== false) {
                                                                     $contador = 0;
                                                                        foreach ($lista as $fila) {
                                                                            $idEncriptado = encryptIt($fila['idGasto']);
                                                                            ?>

                                                            <tr id="fila<?= $contador ?>" data-idElemento="<?= $idEncriptado ?>">
                                                                <td style="text-align: center;">
                                                                   <input type="checkbox" class="filled-in checkbox"
                                                                      id="<?=$idEncriptado?>"/>
                                                                   <label for="<?=$idEncriptado?>"></label>
                                                                </td>
                                                                <td><?= $fila['codigo']?></td>
                                                                <td><?= $fila['gastoFijo']?></td>
                                                                <td><?= $fila['idCategoriaGasto']?></td>
                                                                <td>Horas</td>
                                                                <td><?= $fila['nombre']?></td>
                                                                <td><?= $fila['idProveedor']?></td>
                                                                <td>Programador</td>
                                                                <td><?= $fila['monto']?></td>
                                                                

                                                                <td>
                                                                <ul id="dropdown-gasto<?= $contador ?>"
                                                                  class="dropdown-content">
                                                                    <li>
                                                                        <a href="#editarGasto" data-id-editar="<?= $idEncriptado ?>"
                                                                           class="-text modal-trigger abrirEditar"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                         <a href="#eliminarGasto"
                                                                            class="-text modal-trigger confirmarEliminar"
                                                                            data-id-eliminar="<?= $idEncriptado ?>"  data-fila-eliminar="fila<?= $contador?>"><?= label('menuOpciones_eliminar') ?></a>
                                                                      </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                  href="#!"
                                                                  data-activates="dropdown-gasto<?= $contador++ ?>">
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
                                       <div class="tabla-conAgregar">
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
<div style="display: none">
    <a id="linkModalErrorCargarDatos" href="#transaccionIncorrectaCargar" class="btn btn-default modal-trigger"></a>
    <a id="linkModalErrorEliminar" href="#transaccionIncorrectaEliminar" class="btn btn-default modal-trigger"></a>
</div>

<!-- END CONTENT-->

<script type="text/javascript">
   $(document).on("ready", function () { 
   
       <?php
      if (isset($lista)) {
          if ($lista === false) {?>
   
                $('#linkModalErrorCargarDatos').click();
   
           <?php
      }
      }
      ?>
         
   
       var idEliminar = 0;
       var fila = 0;
   
       $('.confirmarEliminar').on('click', function () {
           idEliminar = $(this).data('id-eliminar');
           fila = $(this).data('fila-eliminar');
       });
   
        $('#eliminarGasto #botonEliminar').on('click', function () {
           event.preventDefault();
           $.ajax({
                  data: {idEliminar : idEliminar},
                  url:   '<?=base_url()?>gastos/eliminar',
                  type:  'post',
                  // beforeSend: function () {
                  //         $("#resultado").html("Procesando, espere por favor...");
                  // },
                  success:  function (response) {
                   if (response==1) {
                       $('#' + fila).fadeOut(function () {
                       $('#' + fila).remove();
                       verificarChecks();
                       });
                       
                   } else{
                       $('#linkModalErrorEliminar').click();
                   };
               }
           });
        });
   
   
   
   
   });
   
   $(document).ready( function () {
       $('#gastos-tabla-lista').dataTable( {
           'aoColumnDefs': [{
               'bSortable': false,
               'aTargets': [0, -1] //desactiva en primer y última columna opción de ordenar
           }]
       });
   });
   $(document).ready(function () {
       $('table#gastos-tabla-lista thead th:first').removeClass('sorting_asc').addClass('sorting_disabled');
       $('table#gastos-tabla-lista thead th:nth-child(2)').removeClass('sorting').addClass('sorting_asc');
   });
   $(document).ready(function () {
       $('#eliminarElementosSeleccionados #botonEliminar').on("click", function (event) {
           var tb = $(this).attr('title');
           var sel = false;
           var ch = $('#' + tb).find('tbody input[type=checkbox]');
           var marcados = $('.checkbox:checked').not('#checkbox-all').size();
           var contador = 0;
           ch.each(function () {
               var $this = $(this);
               if ($this.is(':checked')) {
                   sel = true;
                   var fila = $this.parents('tr');
                   var idEliminar = $this.parents('tr').attr('data-idElemento');
   
                   $.ajax({
                          data: {idEliminar : idEliminar},
                          url:   '<?=base_url()?>gastos/eliminar',
                          type:  'post',
                          // beforeSend: function () {
                          //         $("#resultado").html("Procesando, espere por favor...");
                          // },
                          success:  function (response) {
                           if (response==1) {
                              fila.fadeOut(function () {
                               fila.remove();
                               verificarChecks();
                               });
                           } else{ 
                            contador++;
                            if (contador == marcados) {
                              $('#linkModalErrorEliminar').click();
                            };
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
           var tableBody = $('#gastos-tabla-lista').find('tbody tr[role=row] input[type=checkbox]');
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
       $('.checkbox').click(function (event) {
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
           tablaHtml = htmlTabla('gastos-tabla-lista', true);
           Popup(tablaHtml);
       });
   
       function Popup(data) 
       {
           // var mywindow = window.open('', 'my div', 'height=400,width=600');
           var mywindow = window.open('', 'my div', '');
           mywindow.document.write('<html><head><title><?= label('tituloGastos'); ?></title>');
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
           var html = htmlTabla('gastos-tabla-lista', false);
           $('#inset_form').html('<form  action="<?=base_url()?>ManejadorExcel/tablaDescarga" name="form" method="post" style="display:block;"><input type="text" name="titulo" value="<?= label('tituloGastos'); ?>"><textarea name="miHtml">' + html + '</textarea></form>');
           document.forms['form'].submit();
       });
       
       $('#opciones-seleccionados-PDF').on("click", function(){
           var informacionSistema = '<div id="informacionSistema"><div id="linkPagina"><a href="<?=base_url()?>"><?= label('link_paginaInicial'); ?></a></div><span class="numeracion"></span></div>';
           var encabezado = '<div id="encabezado"><?= label('tituloGastos'); ?></div>';
           var body = encabezado + informacionSistema;
           body += htmlTabla('gastos-tabla-lista', false);
           var html = '<!DOCTYPE html><html><head><title>403 Forbidden</title><link rel="stylesheet" href="<?= base_url() ?>assets/dashboard/css/estiloTablasDescarga.css"></head><body id="hojaPDF">';
           html +=  body + '</body></html>';
           $('#inset_form').html('<form  action="<?=base_url()?>ManejadorPDF/tablaDescarga" name="form" method="post" style="display:block;"><input type="text" name="titulo" value="<?= label('tituloGastos'); ?>"><textarea name="miHtml">' + html + '</textarea></form>');
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

<div id="eliminarGasto" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarGasto'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="agregarGasto" class="modal" style="width: 70%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content" style="padding: 0 24px;">
        <div class="row">
            <h5 style="float: left;">Agregar gasto</h5>
            <a href="#" style="float: left;margin: 15px 25px;text-decoration: underline;">Importar csv - xls</a>
        </div>
        <div class="row">
            <div class="input-field col s12 m4 l4">
                <select id="nuevoGasto_tipo">
                    <option value="1" selected><?= label('gastos_tipoFijo'); ?></option>
                    <option value="2"><?= label('gastos_tipoVariable'); ?></option>
                </select>
                <label for="nuevoGasto_tipo"><?= label('gastos_Tipo'); ?></label>
            </div>
            <div class="input-field col s12 m4 l4">
                <input id="nuevoGasto_codigo" type="text">
                <label for="nuevoGasto_codigo"><?= label('gastos_Codigo') ?></label>
            </div>
            <div class="input-field col s12 m4 l4">
                <input id="nuevoGasto_gasto" type="text">
                <label for="nuevoGasto_gasto"><?= label('gastos_Gasto') ?></label>
            </div>

            <div class="row">
                <div class="input-field col s12 m4 l4">
                    <select id="nuevoGasto_categoria">
                        <option value="1" selected>Todos</option>
                        <option value="2">Servicios profesionales</option>
                        <option value="3">Servicios profesionales</option>
                        <option value="4">Servicios profesionales</option>
                    </select>
                    <label for="nuevoGasto_categoria"><?= label('gastos_Categoria'); ?></label>
                    <a href="#" style="text-decoration: underline;">Agregar categoria</a>
                </div>
                <div class="input-field col s12 m4 l4">
                    <select id="nuevoGasto_tiempo">
                        <option value="1" selected>Todos</option>
                        <option value="2">Horas</option>
                        <option value="3">Diario</option>
                        <option value="4">Semanal</option>
                    </select>
                    <label for="nuevoGasto_tiempo"><?= label('gastos_Tiempo'); ?></label>
                </div>
                <div class="input-field col s12 m4 l4">
                    <select id="nuevoGasto_persona">
                        <option value="1" selected>Todos</option>
                        <option value="2">Juan Gomez</option>
                        <option value="3">Juan Perez</option>
                        <option value="4">Ronald Alfaro</option>
                        <option value="5">Pedro Mora</option>
                    </select>
                    <label for="nuevoGasto_persona"><?= label('gastos_Persona'); ?></label>
                    <a href="#" style="text-decoration: underline;">Agregar persona</a>
                </div>
            </div>

            <div class="input-field col s12 m6 l6">
                <input id="nuevoGasto_monto" type="text">
                <label for="nuevoGasto_monto"><?= label('gastos_Monto') ?></label>
            </div>
        </div>
        <div class="row">
            <a href="#" style="font-size: larger;float: left;text-decoration: underline;"
               class="modal-action modal-close"><?= label('cancelar'); ?>
            </a>
            <a href="#" class="waves-effect btn modal-action modal-close" style="margin: 0 20px;">
                <?= label('guardarCerrar'); ?>
            </a>
            <a href="#" class="waves-effect btn modal-action modal-close" style="margin: 0 20px;">
                <?= label('guardarAgregarOtro'); ?>
            </a>
        </div>
    </div>
<!--    <div class="modal-footer">-->
<!--        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">--><?//= label('cancelar'); ?><!--</a>-->
<!--        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">--><?//= label('aceptar'); ?><!--</a>-->
<!--    </div>-->
</div>
<div id="editarGasto" class="modal" style="width: 70%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content" style="padding: 0 24px;">
        <div class="row">
            <h5 style="float: left;">Editar gasto</h5>
        </div>
        <div class="row">
            <div class="input-field col s12 m4 l4">
                <select id="editarGasto_tipo">
                    <option value="1" selected><?= label('gastos_tipoFijo'); ?></option>
                    <option value="2"><?= label('gastos_tipoVariable'); ?></option>
                </select>
                <label for="editarGasto_tipo"><?= label('gastos_Tipo'); ?></label>
            </div>
            <div class="input-field col s12 m4 l4">
                <input id="editarGasto_codigo" type="text" value="Prog. 001">
                <label for="editarGasto_codigo"><?= label('gastos_Codigo') ?></label>
            </div>
            <div class="input-field col s12 m4 l4">
                <input id="editarGasto_gasto" type="text" value="Mantenimiento Web">
                <label for="editarGasto_gasto"><?= label('gastos_Gasto') ?></label>
            </div>

            <div class="row">
                <div class="input-field col s12 m4 l4">
                    <select id="editarGasto_categoria">
                        <option value="1">Todos</option>
                        <option value="2" selected>Servicios profesionales</option>
                        <option value="3">Servicios profesionales</option>
                        <option value="4">Servicios profesionales</option>
                    </select>
                    <label for="editarGasto_categoria"><?= label('gastos_Categoria'); ?></label>
                    <a href="#" style="text-decoration: underline;">Agregar categoria</a>
                </div>
                <div class="input-field col s12 m4 l4">
                    <select id="editarGasto_tiempo">
                        <option value="1">Todos</option>
                        <option value="2" selected>Horas</option>
                        <option value="3">Diario</option>
                        <option value="4">Semanal</option>
                    </select>
                    <label for="editarGasto_tiempo"><?= label('gastos_Tiempo'); ?></label>
                </div>
                <div class="input-field col s12 m4 l4">
                    <select id="editarGasto_persona">
                        <option value="1">Todos</option>
                        <option value="2" selected>Juan Gomez</option>
                        <option value="3">Juan Perez</option>
                        <option value="4">Ronald Alfaro</option>
                        <option value="5">Pedro Mora</option>
                    </select>
                    <label for="editarGasto_persona"><?= label('gastos_Persona'); ?></label>
                    <a href="#" style="text-decoration: underline;">Agregar persona</a>
                </div>
            </div>

            <div class="input-field col s12 m6 l6">
                <input id="editarGasto_monto" type="text" value="$1000">
                <label for="editarGasto_monto"><?= label('gastos_Monto') ?></label>
            </div>
        </div>
        <div class="row">
            <a href="#" style="font-size: larger;float: left;text-decoration: underline;"
               class="modal-action modal-close"><?= label('cancelar'); ?>
            </a>
            <a href="#" class="waves-effect btn modal-action modal-close" style="margin: 0 20px;">
                <?= label('gastos_guardarCambios'); ?>
            </a>
        </div>
    </div>
</div>
<div id="eliminarElementosSeleccionados" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('gastos_eliminarElementosSeleccionados'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <div id="botonElimnar" title="gastos-tabla-lista">
            <a href="#"
               class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>

<div id="busquedaAvanzadaGastos" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div id="formGeneral" class="section" style="padding-bottom: 0;">
            <div class="row" style="margin-bottom: 0;">
                <div class="input-field col s12 m3 l3">
                    <select id="gasto_busquedaTipo">
                        <option value="0" selected>Todos</option>
                        <option value="1"><?= label('gastos_tipoFijo'); ?></option>
                        <option value="2"><?= label('gastos_tipoVariable'); ?></option>
                    </select>
                    <label for="gasto_busquedaTipo"><?= label('gastos_busquedaTipo'); ?></label>
                </div>
                <div class="input-field col s12 m3 l3">
                    <input id="gastos_busquedaCodigo" type="text">
                    <label for="gastos_busquedaCodigo"><?= label('gastos_busquedaCodigo') ?></label>
                </div>

                <div class="input-field col s12 m3 l3">
                    <select id="gasto_busquedaCategoria">
                        <option value="1" selected>Todos</option>
                        <option value="2">Servicios profesionales</option>
                        <option value="3">Servicios profesionales</option>
                        <option value="4">Servicios profesionales</option>
                    </select>
                    <label for="gasto_busquedaCategoria"><?= label('gastos_busquedaCategoria'); ?></label>
                </div>
                <div class="input-field col s12 m3 l3">
                    <select id="gasto_busquedaTiempo">
                        <option value="1" selected>Todos</option>
                        <option value="2">Horas</option>
                        <option value="3">Diario</option>
                        <option value="4">Semanal</option>
                    </select>
                    <label for="gasto_busquedaTiempo"><?= label('gastos_busquedaTiempo'); ?></label>
                </div>

                <div class="input-field col s12 m4 l4">
                    <input id="gastos_busquedaGasto" type="text">
                    <label for="gastos_busquedaGasto"><?= label('gastos_busquedaGasto') ?></label>
                </div>
                <div class="input-field col s12 m8 l8">
                    <input id="gastos_busquedaDescripcion" type="text">
                    <label for="gastos_busquedaDescripcion"><?= label('gastos_busquedaDescripcion') ?></label>
                </div>

                <div class="input-field col s12 m6 l6">
                    <select id="gasto_busquedaProveedor">
                        <option value="1" selected>Todos</option>
                        <option value="2">Juan Gomez</option>
                        <option value="3">Juan Perez</option>
                        <option value="4">Ronald Alfaro</option>
                        <option value="5">Pedro Mora</option>
                    </select>
                    <label for="gasto_busquedaProveedor"><?= label('gastos_busquedaProveedor'); ?></label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <select id="gasto_busquedaProveedorCategoria">
                        <option value="1" selected>Todos</option>
                        <option value="2">Programador</option>
                        <option value="3">Tecnico en reparaciones</option>
                        <option value="4">Constructor</option>
                    </select>
                    <label for="gasto_busquedaProveedorCategoria"><?= label('gastos_busquedaProveedorCategoria'); ?></label>
                </div>

                <div class="input-field col s12 m6 l6">
                    <input id="gastos_busquedaMontoDesde" type="text">
                    <label for="gastos_busquedaMontoDesde"><?= label('gastos_busquedaMontoDesde') ?></label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <input id="gastos_busquedaMontoHasta" type="text">
                    <label for="gastos_busquedaMontoHasta"><?= label('gastos_busquedaMontoHasta') ?></label>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect btn modal-action modal-close"
           style="width: 300px;float: none;display: block;margin: 0 auto;text-align: center;color: white;">
            <?= label('gastos_busquedaBuscar'); ?>
        </a>
    </div>
</div>
<!-- Fin lista modals -->