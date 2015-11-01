<div style="display: none" id="inset_form"></div>
<!-- START CONTENT -->

<section id="content">

    <!--start container-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloImpuestos'); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <div class="container">
        <div id="chart-dashboard">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div id="submit-button" class="section">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card lista-elementos" id="listaFinanciamiento">
                                    <div id="table-datatables">
                                        <div class="row">
                                            <div class="col s12 m12 l12">
                                                <div class="agregar_nuevo">
                                                    <a href="#agregarImpuesto" id="botonNuevaImpuesto"
                                                       class="btn btn-default modal-trigger"><?= label('impuestoNuevo'); ?></a>
                                                </div>
                                                <table id="impuestos-tabla-lista"
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
                                                        <th><?= label('tablaImpuesto_nombre'); ?></th>
                                                        <th><?= label('tablaImpuesto_descripcion'); ?></th>
                                                        <th><?= label('tablaImpuesto_valor'); ?></th>
                                                        <th><?= label('tablaPlanes_opciones'); ?></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>


                                                    <?php
                                                        if (isset($lista)) {
                                                        
                                                            if ($lista !== false) {
                                                                 $contador = 0;
                                                                    foreach ($lista as $fila) {
                                                                        $idEncriptado = encryptIt($fila['idImpuesto']);
                                                                        ?>

                                                                        <tr id="fila<?= $contador?>" data-idElemento="<?= $idEncriptado ?>">
                                                                            <td style="text-align: center;">
                                                                               <input type="checkbox" class="filled-in checkbox"
                                                                                  id="<?=$idEncriptado?>"/>
                                                                               <label for="<?=$idEncriptado?>"></label>
                                                                            </td>

                                                                            <td><?= $fila['nombre']?></td>
                                                                            <td><?= $fila['descripcion']?></td>
                                                                            <td><?= $fila['valor']?>%</td>

                                                                            <td>
                                                                              <ul id="dropdown-impuesto<?= $contador ?>"
                                                                                class="dropdown-content">
                                                                                  <li>
                                                                                      <a href="#editarImpuesto" data-id-editar="<?= $idEncriptado ?>"
                                                                                         class="-text modal-trigger abrirEditar"><?= label('menuOpciones_editar') ?></a>
                                                                                  </li>
                                                                                  <li>
                                                                                       <a href="#eliminarImpuesto"
                                                                                          class="-text modal-trigger confirmarEliminar"
                                                                                          data-id-eliminar="<?= $idEncriptado ?>"  data-fila-eliminar="fila<?= $contador?>"><?= label('menuOpciones_eliminar') ?></a>
                                                                                    </li>
                                                                              </ul>
                                                                              <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                                href="#!"
                                                                                data-activates="dropdown-impuesto<?= $contador++ ?>">
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

        var menuOpciones_editar = '<?= label('menuOpciones_editar'); ?>';
        var menuOpciones_eliminar = '<?= label('menuOpciones_eliminar'); ?>';
        var menuOpciones_seleccionar = '<?= label('menuOpciones_seleccionar'); ?>';
        

        var row = null;
        $(document).on('ready', function(){


          function limpiarFormEditar(){
            $('#form_impuestoEditar')[0].reset();
            var validator = $("#form_impuestoEditar").validate();
            validator.resetForm();
            $('#form_impuestoEditar #impuesto_nombre').focus();
          }

          var table = $('table').DataTable(); 
          $(document).on( 'click', '.abrirEditar', function () {
              limpiarFormEditar();

              var idEditar = $(this).data('id-editar');
              row = table.row($(this).parents('tr'));
              // editarFila('22', 'impuesto', 'descripcion');
              // alert(idEditar);

              var url = '<?=base_url()?>impuesto/editar';
              var method = 'POST'; 

              $.ajax({
                 type: method,
                 url: url,
                 data: {idEditar : idEditar},
                 success: function(response)
                 {
                  
                  var impuesto = $.parseJSON(response);
                  $('#form_impuestoEditar #impuesto_nombreOriginal').val(impuesto['nombre']);
                  $('#form_impuestoEditar #impuesto_nombre').val(impuesto['nombre']);
                  $('#form_impuestoEditar #impuesto_descripcion').val(impuesto['descripcion']);
                  $('#form_impuestoEditar #impuesto_valor').val(impuesto['valor']);
                  $('#form_impuestoEditar #idImpuesto').val(idEditar);
                  
                  $('label').addClass('active');
                 }
               }); 
          });

        });
        function editarFila(nombre, descripcion, valor){
            var d = row.data();
            d[1]= nombre;
            d[2]= descripcion;
            d[3]= valor;
            row.data(d);
            generarListasBotones();
            $('.modal-trigger').leanModal();
        }

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
         
       function agregarFila(idEncriptado, nombre, descripcion, valor){
            // $('tbody').empty();
           

            var check = '<td>' +
                        '<div style="text-align: center;">'+
                       '<input type="checkbox" class="filled-in checkbox" id="'+idEncriptado+'"/>' +
                       '<label for="'+idEncriptado+'"></label>' +
                       '</div>'+
                    '</td>';
            var boton = '<td>' +
                            '<ul id="dropdown-impuesto'+ contadorFilas +'" class="dropdown-content">' +
                                '<li>' +
                                    '<a href="#editarImpuesto" data-id-editar="'+idEncriptado+'"' +
                                       'class="-text modal-trigger abrirEditar">'+ menuOpciones_editar + '</a>' +
                                '</li>' +
                                '<li>' +
                                     '<a href="#eliminarImpuesto"' +
                                        'class="-text modal-trigger confirmarEliminar"' +
                                        'data-id-eliminar="'+idEncriptado+'"  data-fila-eliminar="fila'+ contadorFilas +'">'+menuOpciones_eliminar+'</a>' +
                                  '</li>' +
                            '</ul>' +
                            '<a class="boton-opciones btn-flat dropdown-button waves-effect white-text"' +
                              'href="#!"' +
                              'data-activates="dropdown-impuesto'+ contadorFilas +'">' +
                           ''+ menuOpciones_seleccionar +'<i class="mdi-navigation-arrow-drop-down"></i>' +
                           '</a>' +
                        '</td>';

            var nombre = '<td>'+nombre+'</td>';
            var descripcion = '<td>'+ descripcion +'</td>';
            var valor = '<td>'+valor+'%</td>';


            // //initialiase dataTable and set config options
            // var table = $('table').dataTable({
            //     'fnCreatedRow': function (nRow, aData, iDataIndex) {
            //         $(nRow).attr('id', 'myTable'); // or whatever you choose to set as the id
            //     }
            // });


           $('table').dataTable().fnAddData([
            check,
            nombre,
            descripcion,
            valor,
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


    var cerrarModal = false; 

      $(document).on('ready', function(){
      $('#guardarOtro').on('click', function(){
        cerrarModal = false; 
      });

      $('#guardarCerrar').on('click', function(){
        cerrarModal = true; 
      });

      $('#botonNuevaImpuesto').click(function(){
        limpiarForm();
       });


      });
      
      
    function limpiarForm(){
      $('#form_impuesto')[0].reset();
      var validator = $("#form_impuesto").validate();
      validator.resetForm();
      $('#form_impuesto #impuesto_nombre').focus();
    }


 function validacionCorrecta(){
    $.ajax({
      data: $('#form_impuesto').serialize(), 
      url:   '<?=base_url()?>impuesto/verificarNombre',
      type:  'post',
      success:  function (response) {
        if (response == '0') {
          alert("<?=label('errorGuardar'); ?>");
          $('#agregarImpuesto .modal-header a').click();

        } else{
          if (response == '2') {
                var url = $('#form_impuesto').attr('action');
                var method = $('#form_impuesto').attr('method'); 
                $.ajax({
                   type: method,
                   url: url,
                   data: $('#form_impuesto').serialize(), 
                   success: function(response)
                   {
                     if (response == 0) {
                           alert("<?=label('errorGuardar'); ?>");
                           $('#agregarImpuesto .modal-header a').click(); 
                       } else {
                        
                        alert("<?=label('impuestos_impuestoGuardadoCorrectamente'); ?>");
                        agregarFila(response, $('#form_impuesto #impuesto_nombre').val(), $('#form_impuesto #impuesto_descripcion').val(), $('#form_impuesto #impuesto_valor').val());
                        if (cerrarModal) {
                          $('#agregarImpuesto .modal-header a').click(); 
                        } else{
                          limpiarForm();
                        }
                        
                       }   
                   }
                 }); 

          } else{
            alert("<?=label('impuesto_error_nombreExisteEnBD'); ?>");
            $('#form_impuesto #impuesto_nombre').focus();
          };
        };
   }
});
}

function validacionCorrectaEditar(){
    if ($('#form_impuestoEditar #impuesto_nombreOriginal').val() != $('#form_impuestoEditar #impuesto_nombre').val()) {
        $.ajax({
          data: $('#form_impuestoEditar').serialize(), 
          url:   '<?=base_url()?>impuesto/verificarNombre', 
          type:  'post',
          success:  function (response) {
            if (response == '0') {
              alert("<?=label('errorGuardar'); ?>");
              $('#agregarImpuesto .modal-header a').click();

            } else{
              if (response == '2') {
                    var url = $('#form_impuestoEditar').attr('action');
                    var method = $('#form_impuestoEditar').attr('method'); 
                    $.ajax({
                       type: method,
                       url: url,
                       data: $('#form_impuestoEditar').serialize(), 
                       success: function(response)
                       {
                         if (response == 0) {
                               alert("<?=label('errorEditar'); ?>");
                               $('#editarimpuesto .modal-header a').click(); 
                           } else {
                            
                            alert("<?=label('impuestos_impuestoEditadoCorrectamente'); ?>");
                            editarFila($('#form_impuestoEditar #impuesto_nombre').val(), $('#form_impuestoEditar #impuesto_descripcion').val(), $('#form_impuestoEditar #impuesto_valor').val());
                            $('#editarImpuesto .modal-header a').click(); 
                            
                           }   
                       }
                     }); 

              } else{
                alert("<?=label('impuestos_error_codigosExisteEnBD'); ?>");
                $("#form_impuestoEditar input[name*='impuesto_codigo']").each(function () {
                    if ($(this).val() == response) {
                        $(this).focus();
                    }
                });
              };
            };
       }
   });

    } else{

        var url = $('#form_impuestoEditar').attr('action');
        var method = $('#form_impuestoEditar').attr('method'); 
        $.ajax({
           type: method,
           url: url,
           data: $('#form_impuestoEditar').serialize(), 
           success: function(response)
           {
             if (response == 0) {
                   alert("<?=label('errorEditar'); ?>");
                   $('#editarImpuesto .modal-header a').click(); 
               } else {
                
                alert("<?=label('impuestos_impuestoEditadoCorrectamente'); ?>");
                editarFila($('#form_impuestoEditar #impuesto_nombre').val(), $('#form_impuestoEditar #impuesto_descripcion').val(), $('#form_impuestoEditar #impuesto_valor').val());
                $('#editarImpuesto .modal-header a').click(); 
                
               }   
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
   
        $('#eliminarImpuesto #botonEliminar').on('click', function () {
           event.preventDefault();
           $.ajax({
                  data: {idEliminar : idEliminar},
                  url:   '<?=base_url()?>impuesto/eliminar',
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
       $('#impuestos-tabla-lista').dataTable( {
           'aoColumnDefs': [{
               'bSortable': false,
               'aTargets': [0, -1] //desactiva en primer y última columna opción de ordenar
           }]
       });
   });
   $(document).ready(function () {
       $('table#impuestos-tabla-lista thead th:first').removeClass('sorting_asc').addClass('sorting_disabled');
       $('table#impuestos-tabla-lista thead th:nth-child(2)').removeClass('sorting').addClass('sorting_asc');
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
                      url:   '<?=base_url()?>impuesto/eliminar',
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
           var tableBody = $('#impuestos-tabla-lista').find('tbody tr[role=row] input[type=checkbox]');
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
           tablaHtml = htmlTabla('impuestos-tabla-lista', true);
           Popup(tablaHtml);
       });
   
       function Popup(data) 
       {
           // var mywindow = window.open('', 'my div', 'height=400,width=600');
           var mywindow = window.open('', 'my div', '');
           mywindow.document.write('<html><head><title><?= label('tituloImpuestos'); ?></title>');
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
           var html = htmlTabla('impuestos-tabla-lista', false);
           $('#inset_form').html('<form  action="<?=base_url()?>ManejadorExcel/tablaDescarga" name="form" method="post" style="display:block;"><input type="text" name="titulo" value="<?= label('tituloImpuestos'); ?>"><textarea name="miHtml">' + html + '</textarea></form>');
           document.forms['form'].submit();
       });
       
       $('#opciones-seleccionados-PDF').on("click", function(){
           var informacionSistema = '<div id="informacionSistema"><div id="linkPagina"><a href="<?=base_url()?>"><?= label('link_paginaInicial'); ?></a></div><span class="numeracion"></span></div>';
           var encabezado = '<div id="encabezado"><?= label('tituloImpuestos'); ?></div>';
           var body = encabezado + informacionSistema;
           body += htmlTabla('impuestos-tabla-lista', false);
           var html = '<!DOCTYPE html><html><head><title>403 Forbidden</title><link rel="stylesheet" href="<?= base_url() ?>assets/dashboard/css/estiloTablasDescarga.css"></head><body id="hojaPDF">';
           html +=  body + '</body></html>';
           $('#inset_form').html('<form  action="<?=base_url()?>ManejadorPDF/tablaDescarga" name="form" method="post" style="display:block;"><input type="text" name="titulo" value="<?= label('tituloImpuestos'); ?>"><textarea name="miHtml">' + html + '</textarea></form>');
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



<div id="eliminarImpuesto" class="modal">
   <div class="modal-header">
      <p><?= label('nombreSistema'); ?></p>
      <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
   </div>
   <div class="modal-content">
      <p><?= label('confirmarEliminarImpuesto'); ?></p>
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
      <div id="botonEliminar" class="modal-footer black-text" title="impuestos-tabla-lista">
         <a href="#"
            class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
      </div>
   </div>
</div>

<div id="agregarImpuesto" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <form id="form_impuesto" action="<?=base_url()?>Impuesto/insertar" method="post">
        <div class="modal-content">
            <div class="row">
                <div class="input-field col s12 m4">
                    <input id="impuesto_nombre" name="impuesto_nombre" type="text">
                    <label for="impuesto_nombre"><?= label('formImpuesto_nombre'); ?></label>
                </div>

                <div class="input-field col s12 m4"> 
                    <input id="impuesto_descripcion" name="impuesto_descripcion"  type="text">
                    <label for="impuesto_descripcion"><?= label('formImpuesto_descripcion'); ?></label>
                </div>

                <div class="input-field col s12 m4">
                    <input id="impuesto_valor" name="impuesto_valor" type="number">
                    <label for="impuesto_valor"><?= label('formImpuesto_valor'); ?></label>
                </div>
                
            </div>
            <div class="row">
                <a href="#" style="font-size: larger;float: left;text-decoration: underline;"
                   class="modal-action modal-close"><?= label('cancelar'); ?>
                </a>
                <a onclick="$(this).closest('form').submit()" id="guardarCerrar" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('guardarCerrar'); ?>
                </a>
                <a onclick="$(this).closest('form').submit()" id="guardarOtro" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('guardarAgregarOtro'); ?>
                </a>
            </div>
        </div>
    </form>
</div>
<div id="editarImpuesto" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <form id="form_impuestoEditar" action="<?=base_url()?>Impuesto/modificar" method="post">
        <div class="modal-content">
            <div class="row">
                <div class="input-field col s12 m4">
                    <input style="display:none" id="idImpuesto" name="idImpuesto" type="text">
                    <input style="display:none" id="impuesto_nombreOriginal" name="impuesto_nombreOriginal" type="text">
                    <input id="impuesto_nombre" name="impuesto_nombre" type="text">
                    <label for="impuesto_nombre"><?= label('formImpuesto_nombre'); ?></label>
                </div>

                <div class="input-field col s12 m4"> 
                    <input id="impuesto_descripcion" name="impuesto_descripcion"  type="text">
                    <label for="impuesto_descripcion"><?= label('formImpuesto_descripcion'); ?></label>
                </div>

                <div class="input-field col s12 m4">
                    <input id="impuesto_valor" name="impuesto_valor" type="number">
                    <label for="impuesto_valor"><?= label('formImpuesto_valor'); ?></label>
                </div>
                
            </div>
            <div class="row">
              <a href="#" style="font-size: larger;float: left;text-decoration: underline;"
                 class="modal-action modal-close"><?= label('cancelar'); ?>
              </a>
              <a onclick="$(this).closest('form').submit()" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                  <?= label('impuesto_guardarCambios'); ?>
              </a>
          </div>
        </div>
    </form>
</div>


<!-- Fin lista modals -->