<button id="hola">prueba</button>
<script type="text/javascript">
    // $(document).on('ready', function(){
        var menuOpciones_editar = 'editar';//cargar con los labels de php
        var menuOpciones_eliminar = 'elimnar';
        var menuOpciones_seleccionar = 'opciones';
        var tablaFases_verSubfases = 'Ver Subfases';
$(document).on('ready', function(){
    $('#hola').click(function(){
            $('#linkModalError').click();
            $('#linkModalGuardado').click();
            

            agregarFila();
        });

});
        var contadorFilas = 0;
        <?php
          if (isset($lista)) {
          
              if ($lista !== false) {
                ?>
                contadorFilas = <?=count($lista);?>;//actualiza el contador con los que vienen desde la bd
                <?php
              }
            }

          ?>
         
       function agregarFila(idEncriptado, codigo, fase, descripcion){
            // $('tbody').empty();
           

            var check = '<td>' +
                        '<div style="text-align: center;">'+
                       '<input type="checkbox" class="filled-in checkbox" id="'+idEncriptado+'"/>' +
                       '<label for="'+idEncriptado+'"></label>' +
                       '</div>'+
                    '</td>';
            var boton = '<td>' +
                            '<ul id="dropdown-fase'+ contadorFilas +'" class="dropdown-content">' +
                                '<li>' +
                                    '<a href="#editarFase" data-id-editar="'+idEncriptado+'"' +
                                       'class="-text modal-trigger abrirEditar">'+ menuOpciones_editar + '</a>' +
                                '</li>' +
                                '<li>' +
                                     '<a href="#eliminarFase"' +
                                        'class="-text modal-trigger confirmarEliminar"' +
                                        'data-id-eliminar="'+idEncriptado+'"  data-fila-eliminar="fila'+ contadorFilas +'">'+menuOpciones_eliminar+'</a>' +
                                  '</li>' +
                            '</ul>' +
                            '<a class="boton-opciones btn-flat dropdown-button waves-effect white-text"' +
                              'href="#!"' +
                              'data-activates="dropdown-fase'+ contadorFilas +'">' +
                           ''+ menuOpciones_seleccionar +'<i class="mdi-navigation-arrow-drop-down"></i>' +
                           '</a>' +
                        '</td>';

            var codigo = '<td>'+codigo+'</td>';
            var fase = '<td>'+fase+'</td>';
            var descripcion = '<td>'+ descripcion +'</td>';
            var subfases = '<td><a>'+tablaFases_verSubfases+'</a></td>';


            // //initialiase dataTable and set config options
            // var table = $('table').dataTable({
            //     'fnCreatedRow': function (nRow, aData, iDataIndex) {
            //         $(nRow).attr('id', 'myTable'); // or whatever you choose to set as the id
            //     }
            // });


           $('table').dataTable().fnAddData([
            check,
            codigo,
            fase,
            descripcion,
            subfases,
            boton ]);


           generarListasBotones();
            $('.modal-trigger').leanModal();
      
            contadorFilas++;
            
            };

        function generarListasBotones(){
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
      }

    // });




  // $(".boton-opciones").sideNav();



</script>




<div style="display: none" id="inset_form"></div>
<!-- START CONTENT  -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloFases'); ?></h1>
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
                                                    <a href="#agregarFase"
                                                       class="btn modal-trigger"><?= label('tituloFases_nuevo'); ?></a>
                                                </div>
                                                <div>
                                                    <a id="busqueda-avanzada-agregar" href="#busquedaAvanzadaFases"
                                                       class="modal-trigger"><?= label('fases_busquedaAvanzada') ?></a>
                                                </div>
                                                <div id="contenedorTabla">
                                                <table id="fases-tabla-lista"
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
                                                            <th><?= label('tituloFases_codigo'); ?></th>
                                                            <th><?= label('tituloFases_fase'); ?></th>
                                                            <th><?= label('tituloFases_descripcion'); ?></th>
                                                            <th><?= label('tituloFases_subfases'); ?></th>
                                                            <th><?= label('tituloFases_opciones'); ?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        if (isset($lista)) {
                                                        
                                                            if ($lista !== false) {
                                                                 $contador = 0;
                                                                    foreach ($lista as $fila) {
                                                                        $idEncriptado = encryptIt($fila['idFase']);
                                                                        ?>
                                                     <tr id="fila<?= $contador ?>" data-idElemento="<?= $idEncriptado ?>">
                                                        <td style="text-align: center;">
                                                           <input type="checkbox" class="filled-in checkbox"
                                                              id="<?=$idEncriptado?>"/>
                                                           <label for="<?=$idEncriptado?>"></label>
                                                        </td>
                                                            <td><?= $fila['codigo'] ?></td>
                                                            <td><?= $fila['nombre'] ?></td>
                                                            <td><?= $fila['notas'] ?></td>
                                                            <td><a href="#">Ver subfases</a></td>
                                                            <td>
                                                                <ul id="dropdown-fase<?= $contador ?>"
                                                                  class="dropdown-content">
                                                                    <li>
                                                                        <a href="#editarFase" data-id-editar="<?= $idEncriptado ?>"
                                                                           class="-text modal-trigger abrirEditar"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                         <a href="#eliminarFase"
                                                                            class="-text modal-trigger confirmarEliminar"
                                                                            data-id-eliminar="<?= $idEncriptado ?>"  data-fila-eliminar="fila<?= $contador?>"><?= label('menuOpciones_eliminar') ?></a>
                                                                      </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                  href="#!"
                                                                  data-activates="dropdown-fase<?= $contador++ ?>">
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
<div style="visibility:hidden; position:absolute">
    <a id="linkModalErrorCargarDatos" href="#transaccionIncorrectaCargar" class="btn btn-default modal-trigger"></a>
    <a id="linkModalErrorEliminar" href="#transaccionIncorrectaEliminar" class="btn btn-default modal-trigger"></a>

    <input id="cantidadSubfases" form="form_fases" name="cantidadSubfases" type="text" value="0">                                          
  <!--   <a id="linkModalGuardado" href="#transaccionCorrecta" class="btn btn-default modal-trigger"></a>
    <a id="linkModalError" href="#transaccionIncorrecta" class="btn btn-default modal-trigger"></a> -->
</div>

<!-- END CONTENT-->


<script type="text/javascript">

$('.abrirEditar').click(function(){
 alert($(this).data('id-editar'));
});

 function validacionCorrecta(){
    var repetidos = false;
    $("input[name*='fase_codigo']").each(function () {
        var codigoEvaluar = $(this);
        $("input[name*='fase_codigo']").each(function () {
          if ($(this).val() == codigoEvaluar.val() && $(this).attr('name') != codigoEvaluar.attr('name')) {
              repetidos = true;
          }
      });
    });

    if (repetidos) {
      alert("<?=label('fases_error_codigosRepetidos'); ?>");
    } else{

       $.ajax({
              data: $('#form_fases').serialize(), 
              url:   '<?=base_url()?>fases/verificarCodigos',
              type:  'post',
              success:  function (response) {
                if (response == '0') {
                  alert("<?=label('errorGuardar'); ?>");
                  $('#agregarFase .modal-header a').click();

                } else{
                  if (response == '1') {
                        var url = $('#form_fases').attr('action');
                        var method = $('#form_fases').attr('method'); 
                        $.ajax({
                           type: method,
                           url: url,
                           data: $('#form_fases').serialize(), 
                           success: function(response)
                           {
                             if (response == 0) {
                                   alert("<?=label('errorGuardar'); ?>");
                                   $('#agregarFase .modal-header a').click(); 
                               } else {
                                
                                alert("<?=label('fases_faseGuardadoCorrectamente'); ?>");
                                 $('#agregarFase .modal-header a').click(); 
                                agregarFila(response, $('#fase_codigo').val(), $('#fase_nombre').val(), $('#fase_notas').val());
                               }   

                              
                           }
                         }); 

                  } else{
                    alert("<?=label('fases_error_codigosExisteEnBD'); ?>");
                    $("input[name*='fase_codigo']").each(function () {
                        if ($(this).val() == response) {
                            $(this).focus();
                        }
                    });

                    // $("input[name*='fase_codigo']").each()
                    // alert($("input[name*='fase_codigo']").length);
                    // $("input[value='"+response+"']").focus();
                  };
                };
               // contadorTotal++;
               // if (response==1) {
               //    fila.fadeOut(function () {
               //     fila.remove();
               //     verificarChecks();
               //     });
               // } else{ 
               //  contadorErrores++;
               // };
               //  if (contadorTotal == marcados) {
               //      if (contadorErrores != 0) {
               //          $('#linkModalErrorEliminar').click();
               //      } 
                  
               //  };
           }
       });
   };
       
     
}
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
   
        $('#eliminarFase #botonEliminar').on('click', function () {
           event.preventDefault();
           $.ajax({
                  data: {idEliminar : idEliminar},
                  url:   '<?=base_url()?>fases/eliminar',
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
       $('#fases-tabla-lista').dataTable( {
           'aoColumnDefs': [{
               'bSortable': false,
               'aTargets': [0, -1] //desactiva en primer y última columna opción de ordenar
           }]
       });
   });
   $(document).ready(function () {
       $('table#fases-tabla-lista thead th:first').removeClass('sorting_asc').addClass('sorting_disabled');
       $('table#fases-tabla-lista thead th:nth-child(2)').removeClass('sorting').addClass('sorting_asc');
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
                          url:   '<?=base_url()?>fases/eliminar',
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
           var tableBody = $('#fases-tabla-lista').find('tbody tr[role=row] input[type=checkbox]');
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
           tablaHtml = htmlTabla('fases-tabla-lista', true);
           Popup(tablaHtml);
       });
   
       function Popup(data) 
       {
           // var mywindow = window.open('', 'my div', 'height=400,width=600');
           var mywindow = window.open('', 'my div', '');
           mywindow.document.write('<html><head><title><?= label('tituloFases'); ?></title>');
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
           var html = htmlTabla('fases-tabla-lista', false);
           $('#inset_form').html('<form  action="<?=base_url()?>ManejadorExcel/tablaDescarga" name="form" method="post" style="display:block;"><input type="text" name="titulo" value="<?= label('tituloFases'); ?>"><textarea name="miHtml">' + html + '</textarea></form>');
           document.forms['form'].submit();
       });
       
       $('#opciones-seleccionados-PDF').on("click", function(){
           var informacionSistema = '<div id="informacionSistema"><div id="linkPagina"><a href="<?=base_url()?>"><?= label('link_paginaInicial'); ?></a></div><span class="numeracion"></span></div>';
           var encabezado = '<div id="encabezado"><?= label('tituloFases'); ?></div>';
           var body = encabezado + informacionSistema;
           body += htmlTabla('fases-tabla-lista', false);
           var html = '<!DOCTYPE html><html><head><title>403 Forbidden</title><link rel="stylesheet" href="<?= base_url() ?>assets/dashboard/css/estiloTablasDescarga.css"></head><body id="hojaPDF">';
           html +=  body + '</body></html>';
           $('#inset_form').html('<form  action="<?=base_url()?>ManejadorPDF/tablaDescarga" name="form" method="post" style="display:block;"><input type="text" name="titulo" value="<?= label('tituloFases'); ?>"><textarea name="miHtml">' + html + '</textarea></form>');
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
<div id="eliminarFase" class="modal">
   <div class="modal-header">
      <p><?= label('nombreSistema'); ?></p>
      <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
   </div>
   <div class="modal-content">
      <p><?= label('confirmarEliminarFase'); ?></p>
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
      <div id="botonEliminar" class="modal-footer black-text" title="fases-tabla-lista">
         <a href="#"
            class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
      </div>
   </div>
</div>



<div id="desactivarFase" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarDesactivarFase'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>




<div id="eliminarFase" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarFase'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="agregarFase" class="modal" style="width: 70%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <form id="form_fases" action="<?=base_url()?>Fases/insertar" method="post">
        <div class="modal-content">
            <div class="row">
                <div id="contenedorFases">
                    <div class="input-field col s12 m4 l4">
                        <input id="fase_codigo" name="fase_codigo" type="text">
                        <label for="fase_codigo"><?= label('fase_codigo') ?></label>
                    </div>
                    <div class="input-field col s12 m8 l8">
                        <input id="fase_nombre" name="fase_nombre" type="text">
                        <label for="fase_nombre"><?= label('fase_nombre') ?></label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="fase_notas" name="fase_notas" class="materialize-textarea" rows="4"></textarea>
                        <label for="fase_notas"><?= label('fase_notas') ?></label>
                    </div>
                    <div class="col s12">
                        <hr />
                    </div>
                </div>
                <div class="row">
                    <a id="btn_agregarSubfase" style="text-decoration: underline;float: right;cursor: pointer;"
                       onclick="agregarNuevaFase();"><?= label('fase_agregarSubfase') ?></a>
                </div>
            </div>
            <div class="row">
                <a href="#" style="font-size: larger;float: left;text-decoration: underline;"
                   class="modal-action modal-close"><?= label('cancelar'); ?>
                </a>
                <a onclick="$(this).closest('form').submit()" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('guardarCerrar'); ?>
                </a>
                <a id="guardarOtro" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('guardarAgregarOtro'); ?>
                </a>
            </div>
        </div>
    </form>
</div>
<div id="editarFase" class="modal" style="width: 70%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="row">
            <div id="contenedorFasesEditar">
                <div class="input-field col s12 m4 l4">
                    <input id="editarFase_codigo" type="text" value="Prog. 001">
                    <label for="editarFase_codigo"><?= label('fase_codigo') ?></label>
                </div>
                <div class="input-field col s12 m8 l8">
                    <input id="editarFase_nombre" type="text" value="ERS">
                    <label for="editarFase_nombre"><?= label('fase_nombre') ?></label>
                </div>
                <div class="input-field col s12">
                    <textarea id="editarFase_notas" class="materialize-textarea" rows="4">- Fase de requerimientos de software.
                    </textarea>
                    <label for="editarFase_notas"><?= label('fase_notas') ?></label>
                </div>
                <div class="col s12">
                    <hr />
                </div>
            </div>
            <div class="col s12">
                <a id="editar_agregarSubfase" style="text-decoration: underline;float: right;cursor: pointer;"
                   onclick="agregarNuevaFaseEditar();"><?= label('fase_agregarSubfase') ?></a>
            </div>
        </div>
        <div class="row">
            <a href="#" style="font-size: larger;float: left;text-decoration: underline;"
               class="modal-action modal-close"><?= label('cancelar'); ?>
            </a>
            <a href="#" class="waves-effect btn modal-action modal-close" style="margin: 0 20px;">
                <?= label('fases_guardarCambios'); ?>
            </a>
        </div>
    </div>
</div>


<!-- <div id="transaccionCorrecta" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('fases_faseGuardadoCorrectamente'); ?>'); ?></p>
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
</div> -->


<div id="busquedaAvanzadaFases" class="modal" style="width: 70%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content" style="padding-top: 0;">
        <div id="formGeneral" class="section" style="padding-bottom: 0;">
            <div class="row" style="margin-bottom: 0;">
                <div class="input-field col s12 m6 l6">
                    <input id="fases_busquedaCodigo" type="text">
                    <label for="fases_busquedaCodigo"><?= label('fases_busquedaCodigo') ?></label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <input id="fases_busquedaNombre" type="text">
                    <label for="fases_busquedaNombre"><?= label('fases_busquedaNombre') ?></label>
                </div>

                <div class="input-field col s12">
                    <input id="fases_busquedaDescripcion" type="text">
                    <label for="fases_busquedaDescripcion"><?= label('fases_busquedaDescripcion') ?></label>
                </div>

                <div class="input-field col s12 m6 l6">
                    <select id="fases_busquedaCotizacion">
                        <option value="1" selected>Todos</option>
                        <option value="2">Cotizacion 1</option>
                        <option value="3">Cotizacion 2</option>
                        <option value="4">Cotizacion 3</option>
                        <option value="5">Cotizacion 4</option>
                    </select>
                    <label for="fases_busquedaCotizacion"><?= label('fases_busquedaCotizacion'); ?></label>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect btn modal-action modal-close"
           style="width: 300px;float: none;display: block;margin: 0 auto;text-align: center;color: white;">
            <?= label('fases_busquedaBuscar'); ?>
        </a>
    </div>
</div>





<!-- Fin lista modals -->

<script>
    var subfaseEliminar = null;
    $(document).on('click','.confirmarEliminarSubFase', function () {
       subfaseEliminar = $(this).parent().parent();
       var opcion = confirm("<?= label('confirmarEliminarSubFase')?>");
       if (opcion) {
        subfaseEliminar.fadeOut(function () {
            subfaseEliminar.remove();
       });
        cantidad--;
        actualizarCantidad();
       };
       
    });

    function actualizarCantidad(){
        $('#cantidadSubfases').val(cantidad);

    }

    var cantidad = 0;
    var contador = 0;
    function agregarNuevaFase() {
        cantidad++;
        actualizarCantidad();
        $('#contenedorFases').append('' +
            '<div id="fase' + contador + '" style="margin-left: 50px;">' +
                '<div class="col s12 m11 l11">' +
                '<div class="input-field col s12 m4 l4">' +
                    '<input style="display:none" name="fase_'+ contador +'" type="text">' +
                    '<input id="fase_codigo' + contador + '" name="fase_codigo' + contador + '" type="text">' +
                    '<label for="fase_codigo' + contador + '"><?= label('fase_codigo') ?></label>' +
                '</div>' +
                '<div class="input-field col s12 m8 l8">' +
                    '<input id="fase_nombre' + contador + '" name="fase_nombre' + contador + '" type="text">' +
                    '<label for="fase_nombre' + contador + '"><?= label('fase_nombre') ?></label>' +
                '</div>' +
                '<div class="input-field col s12">' +
                    '<textarea id="fase_notas' + contador + '" name="fase_notas' + contador + '"  class="materialize-textarea" rows="4"></textarea>' +
                    '<label for="fase_notas' + contador + '"><?= label('fase_notas') ?></label>' +
                '</div>' +
                '</div>' +
                '<div class="col s12 m1 l1 btn-fase-eliminar">' +
                    '<a class="confirmarEliminarSubFase" data-fila-eliminar="' + contador + '" title="<?= label('formFases_subfaseEliminar') ?>"><i class="mdi-action-delete medium" style="color: black;"></i></a>' +
                '</div>' +
                '<div class="col s12">' +
                    '<hr />' +
                '</div>' +
            '</div>'
        );
        contador++;
    }

    var cantidadEditar = 0;
    var contadorEditar = cantidadEditar;
    function agregarNuevaFaseEditar() {
        cantidadEditar++;
//        actualizarCantidad();
        $('#contenedorFasesEditar').append('' +
            '<div id="fase' + contadorEditar + '" style="margin-left: 50px;">' +
                '<div class="input-field col s12 m4 l4">' +
                    '<input id="faseEditar' + contadorEditar + '_codigo" type="text">' +
                    '<label for="faseEditar' + contadorEditar + '_codigo"><?= label('fase_codigo') ?></label>' +
                '</div>' +
                '<div class="input-field col s12 m8 l8">' +
                    '<input id="faseEditar' + contadorEditar + '_nombre" type="text">' +
                    '<label for="faseEditar' + contadorEditar + '_nombre"><?= label('fase_nombre') ?></label>' +
                '</div>' +
                '<div class="input-field col s12">' +
                    '<textarea id="faseEditar' + contadorEditar + '_notas" class="materialize-textarea" rows="4"></textarea>' +
                    '<label for="faseEditar' + contadorEditar + '_notas"><?= label('fase_notas') ?></label>' +
                '</div>' +
                '<div class="col s12 m1 l1 btn-contacto-eliminar-edicion">' +
                    '<a class="confirmarEliminarContacto" data-fila-eliminar="' + contadorEditar + '" title="<?= label('formCliente_contactoEliminar') ?>"><i class="mdi-action-delete medium" style="color: black;"></i></a>' +
                '</div>' +
                '<div class="col s12">' +
                    '<hr />' +
                '</div>' +
            '</div>'
        );
        contadorEditar++;
    }
</script>
