

<div style="display: none" id="inset_form"></div>
<!-- START CONTENT -->

<section id="content">

    <!--start container-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h1 class="breadcrumbs-title"><?= label('tituloClientes'); ?></h1>
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
                                                <div class="agregar_nuevo">
                                                    <a href="<?= base_url() ?>clientes/agregar"
                                                       class="btn btn-default"><?= label('clientes_agregar'); ?></a>
                                                </div>
                                                <div>
                                                    <a id="busqueda-avanzada-agregar" href="#busquedaAvanzada"
                                                       class="modal-trigger"><?= label('clientes_busquedaAvanzada') ?></a>
                                                </div>
                                                <div id="contenedorTabla">
                                                <table id="clientes-tabla-lista"
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
                                                            <th><?= label('Cliente_tablaCodigo'); ?></th>
                                                            <th><?= label('Cliente_tablaTipo'); ?></th>
                                                            <th><?= label('Cliente_tablaNombre'); ?></th>
                                                            <th><?= label('Cliente_tablaTelefono'); ?></th>
                                                            <th><?= label('Cliente_tablaCorreo'); ?></th>
                                                            <th><?= label('Cliente_tablaCotizador'); ?></th>
                                                            <th><?= label('Cliente_tablaOpciones'); ?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                     <?php
                                                        if (isset($lista)) {
                                                        
                                                            if ($lista !== false) {
                                                                 $contador = 0;
                                                                    foreach ($lista as $fila) {
                                                                        $idEncriptado = encryptIt($fila['idCliente']);
                                                                        $juridico = $fila['juridico'];
                                                                        ?>
                                                     <tr id="fila<?= $contador ?>" data-idElemento="<?= $idEncriptado ?>">
                                                        <td style="text-align: center;">
                                                           <input type="checkbox" class="filled-in checkbox"
                                                              id="<?=$idEncriptado?>"/>
                                                           <label for="<?=$idEncriptado?>"></label>
                                                        </td>
                                                        <td><?= $fila['identificacion'] ?></td>
                                                        <td><?php if($juridico){ echo label('formCliente_juridica');} else { echo label('formCliente_fisica');} ?></td>
                                                        <?php
                                                        if (!$juridico) {
                                                           ?>
                                                        <td>
                                                           <a href="<?= base_url() ?>clientes/editar/<?= $idEncriptado ?>/#tab-informacion"><?= $fila['nombre']." ".$fila['primerApellido']." ".$fila['segundoApellido'] ?></a>
                                                        </td>

                                                            <?php
                                                        } else {
                                                           ?>
                                                        <td>
                                                           <a href="<?= base_url() ?>clientes/editar/<?= $idEncriptado ?>"><?= $fila['nombre']?></a>
                                                        </td>

                                                            <?php
                                                        }
                                                        ?>
                                                        
                                                        <td><?= $fila['telefonoFijo'] ?></td>
                                                        <td><?= $fila['correo'] ?></td>
                                                        <td>Hola</td>
                                                        
                                                        <td>
                                                           <ul id="dropdown-cliente<?= $contador ?>"
                                                              class="dropdown-content">
                                                              <li>
                                                                 <a href="<?= base_url(); ?>clientes/editar/<?= $idEncriptado?>#tab-informacion"
                                                                    class="-text"><?= label('menuOpciones_ver') ?></a>
                                                             </li>
                                                              <li>
                                                                 <a href="<?= base_url() ?>clientes/editar/<?= $idEncriptado?>#tab-edicion"
                                                                    class="-text"><?= label('menuOpciones_editar') ?></a>
                                                              </li>
                                                              <li>
                                                                 <a href="#eliminarCliente"
                                                                    class="-text modal-trigger confirmarEliminar"
                                                                    data-id-eliminar="<?= $idEncriptado ?>"  data-fila-eliminar="fila<?= $contador?>"><?= label('menuOpciones_eliminar') ?></a>
                                                              </li>
                                                              <li>
                                                                 <a href="<?= base_url(); ?>cotizacion/cotizar"
                                                                    class="-text"><?= label('menuOpciones_cotizar') ?></a>
                                                             </li>
                                                             <li>
                                                                 <a href="#desactivarCliente"
                                                                    class="-text modal-trigger"><?= label('menuOpciones_desactivar') ?></a>
                                                             </li>
                                                           </ul>
                                                           <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                              href="#!"
                                                              data-activates="dropdown-cliente<?= $contador++ ?>">
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

    <?php
    $this->load->view('layout/default/menu-crear.php');
    ?>

    <!--end container-->
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
       var filaEliminar = null;
   
       $(document).on('click','.confirmarEliminar', function () {
           idEliminar = $(this).data('id-eliminar');
           filaEliminar = $(this).parents('tr');
           
       });
   
        $('#eliminarCliente #botonEliminar').on('click', function () {
           event.preventDefault();
           $.ajax({
                  data: {idEliminar : idEliminar},
                  url:   '<?=base_url()?>clientes/eliminar',
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
                       $('#linkModalErrorEliminar').click();
                   };
               }
           });
        });
   });
   
   $(document).ready( function () {
       $('#clientes-tabla-lista').dataTable( {
           'aoColumnDefs': [{
               'bSortable': false,
               'aTargets': [0, -1] //desactiva en primer y última columna opción de ordenar
           }]
       });
   });
   $(document).ready(function () {
       $('table#clientes-tabla-lista thead th:first').removeClass('sorting_asc').addClass('sorting_disabled');
       $('table#clientes-tabla-lista thead th:nth-child(2)').removeClass('sorting').addClass('sorting_asc');
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
                          url:   '<?=base_url()?>clientes/eliminar',
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
                                    $('#linkModalErrorEliminar').click();
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
           var tableBody = $('#clientes-tabla-lista').find('tbody tr[role=row] input[type=checkbox]');
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
           tablaHtml = htmlTabla('clientes-tabla-lista', true);
           Popup(tablaHtml);
       });
   
       function Popup(data) 
       {
           // var mywindow = window.open('', 'my div', 'height=400,width=600');
           var mywindow = window.open('', 'my div', '');
           mywindow.document.write('<html><head><title><?= label('tituloClientes'); ?></title>');
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
           var html = htmlTabla('clientes-tabla-lista', false);
           $('#inset_form').html('<form  action="<?=base_url()?>ManejadorExcel/tablaDescarga" name="form" method="post" style="display:block;"><input type="text" name="titulo" value="<?= label('tituloClientes'); ?>"><textarea name="miHtml">' + html + '</textarea></form>');
           document.forms['form'].submit();
       });
       
       $('#opciones-seleccionados-PDF').on("click", function(){
           var informacionSistema = '<div id="informacionSistema"><div id="linkPagina"><a href="<?=base_url()?>"><?= label('link_paginaInicial'); ?></a></div><span class="numeracion"></span></div>';
           var encabezado = '<div id="encabezado"><?= label('tituloClientes'); ?></div>';
           var body = encabezado + informacionSistema;
           body += htmlTabla('clientes-tabla-lista', false);
           var html = '<!DOCTYPE html><html><head><title>403 Forbidden</title><link rel="stylesheet" href="<?= base_url() ?>assets/dashboard/css/estiloTablasDescarga.css"></head><body id="hojaPDF">';
           html +=  body + '</body></html>';
           $('#inset_form').html('<form  action="<?=base_url()?>ManejadorPDF/tablaDescarga" name="form" method="post" style="display:block;"><input type="text" name="titulo" value="<?= label('tituloClientes'); ?>"><textarea name="miHtml">' + html + '</textarea></form>');
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

   //inicio tags busqueda

   $(document).ready(function () {


        var Vendedores = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('nombre'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // prefetch: 'http://localhost/Proyectos/touch/assets/dashboard/js/json/Vendedores.json'
            prefetch: {
                url: '<?=base_url()?>Usuarios/vendedorSugerencia',
                ttl: 1000
            }
        });

        Vendedores.initialize();


        elt = $('.tags_vendedores > > input');
        elt.tagsinput({
            itemValue: 'idUsuario',
            itemText: 'nombre', 
            typeaheadjs: {
                name: 'Vendedor',
                displayKey: 'nombre',
                source: Vendedores.ttAdapter()
            }
        });

        var gusto = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('nombre'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: {
                url: '<?=base_url()?>Clientes/gustosSugerenciaBusqueda',
                ttl: 1000
            }
        });
        gusto.initialize();

        elt = $('.tags_gustosCliente > > input');
        elt.tagsinput({
            itemValue: 'nombre',
            itemText: 'nombre', 
            typeaheadjs: {
                name: 'gusto',
                displayKey: 'nombre',
                source: gusto.ttAdapter()
            }
        });


        var mediosContacto = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('nombre'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: {
                url: '<?=base_url()?>Clientes/mediosSugerenciaBusqueda',
                ttl: 1000
            }
        });
        mediosContacto.initialize();


        var elt = $('.tags_mediosContacto > > input');
        elt.tagsinput({
            itemValue: 'nombre',
            itemText: 'nombre', 
            typeaheadjs: {
                name: 'medio',
                displayKey: 'nombre',
                source: mediosContacto.ttAdapter()
            }
        });

      });
// fin tags busqueda

   // script busqueda avanzada
   $(document).on('ready', function(){
      $('#botonBusqueda').on('click', function(){
        var url = '<?= base_url() ?>Clientes/busqueda';
        var method = 'POST'; 
        $.ajax({
               type: method,
               url: url,
               data: $('#formBusqueda').serialize(), 
               success: function(response)
               {
                alert(response);
                  // if (response ==0) {
                  //   alert('<?= label('errorLeerDatos'); ?>');
                  // } else{
                  //   arrayBusqueda = $.parseJSON(response);
                  //   var table = $('#cotizaciones-tabla-lista').DataTable();
                  //   table.clear().draw();

                  //   for (var i = 0; i < arrayBusqueda.length; i++) {
                  //     var fila = arrayBusqueda[i];
                  //     agregarFila(fila['idCotizacion'], fila['codigo'], fila['numero'], fila['fechaCreacion'], fila['cliente'], fila['vendedor'], 'monto', fila['estado'], fila['idCliente'], fila['idUsuario'], i);
                  //   };
                    
                  // };
                  // $('#busquedaAvanzada').closeModal();
                  
               }
             });
      })
});



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
<div id="eliminarCliente" class="modal">
   <div class="modal-header">
      <p><?= label('nombreSistema'); ?></p>
      <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
   </div>
   <div class="modal-content">
      <p><?= label('confirmarEliminarCliente'); ?></p>
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
      <div id="botonEliminar" class="modal-footer black-text" title="clientes-tabla-lista">
         <a href="#"
            class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
      </div>
   </div>
</div>



<div id="desactivarCliente" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarDesactivarCliente'); ?></p>
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
        <div id="formGeneral" class="section" style="padding-bottom: 0;">
          <form id="formBusqueda">
            <div class="row" style="margin-bottom: 0;">
                <div class="input-field col s12 m3 l3">
                    <div class="input-field col s12">
                        <input id="busqueda-fecha-desde" type="text" class="datepicker-fecha">
                        <label for="busqueda-fecha-desde"><?= label('clientes_busquedaDesde') ?></label>
                    </div>
                </div>
                <div class="input-field col s12 m3 l3">
                    <div class="input-field col s12">
                        <input id="busqueda-fecha-hasta" type="text" class="datepicker-fecha">
                        <label for="busqueda-fecha-hasta"><?= label('clientes_busquedaHasta') ?></label>
                    </div>
                </div>

                <div class="input-field col s12 m6 l6">
                    <select class="input-field col s12">
                        <option value="1" selected>Todos</option>
                        <option value="2">Enviada</option>
                        <option value="3">Finalizada</option>
                        <option value="4">Rechazada</option>
                    </select>
                    <label>Estado de la cotización</label>
                </div>
                <!-- <div class="input-field col s12 m6 l6">
                    <select class="input-field col s12">
                        <option value="1" selected>Todos</option>
                        <option value="2">Juan Alfaro Alfaro</option>
                        <option value="3">Diego Rojas</option>
                    </select>
                    <label>Clientes</label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <select id="reporte-cliente" class="input-field col s12">
                        <option value="1" selected>Todos</option>
                        <option value="2">Transportes Rojas</option>
                        <option value="3">Música en vivo</option>
                    </select>
                    <label for="reporte-cliente">Proveedores</label>
                </div> -->
                <div class="inputTag col s12 m4">
                    <label for="vendedoresCliente"><?= label('formCliente_cotizador'); ?></label>
                    <br>
                    <div id="vendedoresCliente" class="example tags_vendedores">
                        <div class="bs-example">
                            <input id="cliente_vendedores" name="cliente_vendedores" placeholder="<?= label('formCliente_anadirVendedor'); ?>" type="text"/>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="inputTag col s12 m4">
                    <label for="gustosCliente"><?= label('formCliente_gustos_preferencias'); ?></label>
                    <br>
                    <div id="gustosCliente" class="example tags_gustosCliente">
                        <div class="bs-example">
                            <input id="cliente_gustos" name="cliente_gustos" placeholder="<?= label('formCliente_anadirGusto'); ?>" type="text"/>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="inputTag col s12 m4">
                    <label for="mediosCliente"><?= label('formCliente_mediosContacto'); ?></label>
                    <br>
                    <div id="mediosCliente" class="example tags_mediosContacto">
                        <div class="bs-example">
                            <input id="cliente_medios" name="cliente_medios" placeholder="<?= label('formCliente_anadirMedio'); ?>" type="text"/>
                        </div>
                    </div>
                    <br>
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
