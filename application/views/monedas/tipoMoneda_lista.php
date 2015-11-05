<div style="display: none" id="inset_form"></div>
<!-- START CONTENT -->

<section id="content">

    <!--start container-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloTiposMoneda'); ?></h1>
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
                                            <div>
                                                <div class="col s12">
                                                    <span style="font-size: larger;"><?= label('tiposMoneda_defecto'); ?></span>
                                                </div>
                                                <div class="col offset-s1 s11">
                                                    <select id="tipoMoneda_principal" onchange="actualizarTipoPrincipal(this)"></select>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="col s12">
                                                    <span style="font-size: larger;"><?= label('tiposMoneda_permitidos'); ?></span>
                                                </div>
                                                <div class="col s12">
                                                    <div class="agregar_nuevo">
                                                        <a href="#agregarTipoMoneda" id="botonNuevoTipoMoneda"
                                                           class="btn btn-default modal-trigger"><?= label('tiposMoneda_nuevo'); ?></a>
                                                    </div>
                                                    <table id="tiposMoneda-tabla-lista" cellspacing="0"
                                                           class="data-table-information responsive-table display">
                                                        <thead>
                                                            <tr>
                                                                <th style="text-align: center;">
                                                                    <input class="filled-in checkbox checkall" type="checkbox"
                                                                           id="checkbox-all"
                                                                           onclick="toggleChecked(this.checked)"/>
                                                                    <label for="checkbox-all"></label>
                                                                </th>
                                                                <th><?= label('tiposMoneda_nombre'); ?></th>
                                                                <th><?= label('tiposMoneda_signo'); ?></th>
                                                                <th><?= label('tiposMoneda_tipoCambio'); ?></th>
                                                                <th><?= label('tiposMoneda_opciones'); ?></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                            if (isset($lista)) {
                                                                if ($lista !== false) {
                                                                    $contador = 0;
                                                                    foreach ($lista as $fila) {
                                                                        $idEncriptado = encryptIt($fila['idMoneda']); ?>

                                                                        <tr id="fila<?= $contador?>" data-idElemento="<?= $idEncriptado ?>">
                                                                            <td style="text-align: center;">
                                                                                <input type="checkbox" class="filled-in checkbox" id="<?=$idEncriptado?>"/>
                                                                                <label for="<?=$idEncriptado?>"></label>
                                                                            </td>
                                                                            <td><?= $fila['nombre']?></td>
                                                                            <td><?= $fila['signo']?></td>
                                                                            <td><?= $fila['tipoCambio']; ?></td>
                                                                            <td>
                                                                                <ul id="dropdown-tipoMoneda<?= $contador ?>" class="dropdown-content">
                                                                                    <li>
                                                                                        <a href="#editarTipoMoneda" data-id-editar="<?= $idEncriptado ?>"
                                                                                           class="-text modal-trigger abrirEditar"><?= label('menuOpciones_editar') ?></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#eliminarTipoMoneda" class="-text modal-trigger confirmarEliminar"
                                                                                           data-id-eliminar="<?= $idEncriptado ?>"  data-fila-eliminar="fila<?= $contador?>"><?= label('menuOpciones_eliminar') ?></a>
                                                                                    </li>
                                                                                </ul>
                                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                                   href="#" data-activates="dropdown-tipoMoneda<?= $contador++ ?>">
                                                                                    <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                                                                                </a>
                                                                            </td>
                                                                        </tr>

                                                        <?php
                                                                    }
                                                                }
                                                            } ?>
                                                        </tbody>
                                                    </table>
                                                    <div class="tabla-conAgregar tabla-opciones-monedas">
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

<script>
    var tipoMonedaDefecto = '<?php if(isset($monedaDefecto)) { echo $monedaDefecto; } ?>';
    $(document).ready(function () {
        actualizarSelectTipoMoneda();
    });
    function actualizarSelectTipoMoneda() {
        var formulario = $('#form_tipoMonedaEditar');
        $.ajax({
            type: formulario.attr('method'),
            url: '<?= base_url(); ?>tiposMoneda/tiposMoneda',
            data: {  },
            success: function(response)
            {
                var tiposMoneda = $.parseJSON(response);

                var valorTipoDefecto = parseInt(tipoMonedaDefecto);
                var selectTipo = $('#tipoMoneda_principal');
                selectTipo.empty();
                if(valorTipoDefecto != 0 && valorTipoDefecto != null) {
                    selectTipo.append($('<option>', {
                        value: 0,
                        text: 'Seleccione uno',
                        disabled: true
                    }));
                } else {
                    selectTipo.append($('<option>', {
                        value: 0,
                        text: 'Seleccione uno',
                        selected: true,
                        disabled: true
                    }));
                }

                var i;
                for(i = 0; i < tiposMoneda.length; i++) {
                    var tipo = tiposMoneda[i];
                    if(tipo != null) {
                        if(tipo['idMoneda'] == valorTipoDefecto) {
                            selectTipo.append($('<option>', {
                                value: tipo['idMoneda'],
                                text: tipo['nombre'],
                                selected: true
                            }));
                        } else {
                            selectTipo.append($('<option>', {
                                value: tipo['idMoneda'],
                                text: tipo['nombre'],
                                selected: false
                            }));
                        }
                    }
                }
                selectTipo.material_select();
            }
        });
    }
    function actualizarTipoPrincipal(opcionSeleccionada) {
        var selectTipo = $('#tipoMoneda_principal');
        $.ajax({
            type: 'POST',
            url: '<?= base_url(); ?>tiposMoneda/cambiarTipoPrincipal',
            data: {idMoneda : opcionSeleccionada.value},
            success: function(response)
            {
                if(response != 0) {
                    alert('<?= label('tipoMonedaDefectoEditadoCorrectamente'); ?>');
                    tipoMonedaDefecto = opcionSeleccionada;
                } else {
                    alert('<?= label('tipoMonedaDefectoNoEditado'); ?>');
                }
            }
        });
    }
</script>

<script type="text/javascript">

        var menuOpciones_editar = '<?= label('menuOpciones_editar'); ?>';
        var menuOpciones_eliminar = '<?= label('menuOpciones_eliminar'); ?>';
        var menuOpciones_seleccionar = '<?= label('menuOpciones_seleccionar'); ?>';
        

        var row = null;
        var checkActivo = false;
        var idEditar = 0;
        $(document).on('ready', function(){


          function limpiarFormEditar(){
            $('#form_tipoMonedaEditar')[0].reset();
            var validator = $("#form_tipoMonedaEditar").validate();
            validator.resetForm();
            $('#form_tipoMonedaEditar #tipoMoneda_nombre').focus();
          }

          var table = $('table').DataTable(); 
          $(document).on( 'click', '.abrirEditar', function () {
              limpiarFormEditar();

              idEditar = $(this).data('id-editar');
              checkActivo = false;
              checkActivo = $('.checkbox#'+idEditar).is(':checked');// se verifica el estado del check para actualizarlo luego de editar la fila ya que este check se quita solo al editar
              row = table.row($(this).parents('tr'));
              // editarFila('22', 'impuesto', 'descripcion');
              // alert(idEditar);

              var url = '<?=base_url()?>tiposMoneda/editar';
              var method = 'POST'; 

              $.ajax({
                 type: method,
                 url: url,
                 data: {idEditar : idEditar},
                 success: function(response)
                 {
                  var tipoMoneda = $.parseJSON(response);
                  $('#form_tipoMonedaEditar #tipoMoneda_nombreOriginal').val(tipoMoneda['nombre']);
                  $('#form_tipoMonedaEditar #tipoMoneda_nombre').val(tipoMoneda['nombre']);
                  $('#form_tipoMonedaEditar #tipoMoneda_signo').val(tipoMoneda['signo']);
                  $('#form_tipoMonedaEditar #tipoMoneda_tipoCambio').val(tipoMoneda['tipoCambio']);
                  $('#form_tipoMonedaEditar #idTipoMoneda').val(idEditar);
                  
                  $('label').addClass('active');
                 }
               }); 
          });

        });
        function editarFila(nombre, signo, tipoCambio){
            var d = row.data();
            d[1]= nombre;
            d[2]= signo;
            d[3]= tipoCambio;
            row.data(d);
            generarListasBotones();
            $('.modal-trigger').leanModal();
            if (checkActivo) {
              $('.checkbox#'+idEditar).prop('checked', true);
            }
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
         
       function agregarFila(idEncriptado, nombre, signo, tipoCambio){
            // $('tbody').empty();
           

            var check = '<td>' +
                        '<div style="text-align: center;">'+
                       '<input type="checkbox" class="filled-in checkbox" id="'+idEncriptado+'"/>' +
                       '<label for="'+idEncriptado+'"></label>' +
                       '</div>'+
                    '</td>';
            var boton = '<td>' +
                            '<ul id="dropdown-tipoMoneda'+ contadorFilas +'" class="dropdown-content">' +
                                '<li>' +
                                    '<a href="#editarTipoMoneda" data-id-editar="'+idEncriptado+'"' +
                                       'class="-text modal-trigger abrirEditar">'+ menuOpciones_editar + '</a>' +
                                '</li>' +
                                '<li>' +
                                     '<a href="#eliminarTipoMoneda"' +
                                        'class="-text modal-trigger confirmarEliminar"' +
                                        'data-id-eliminar="'+idEncriptado+'"  data-fila-eliminar="fila'+ contadorFilas +'">'+menuOpciones_eliminar+'</a>' +
                                  '</li>' +
                            '</ul>' +
                            '<a class="boton-opciones btn-flat dropdown-button waves-effect white-text"' +
                              'href="#"' +
                              'data-activates="dropdown-tipoMoneda'+ contadorFilas +'">' +
                           ''+ menuOpciones_seleccionar +'<i class="mdi-navigation-arrow-drop-down"></i>' +
                           '</a>' +
                        '</td>';

            var nombre = '<td>'+nombre+'</td>';
            var signo = '<td>'+ signo +'</td>';
            var tipoCambio = '<td>'+tipoCambio+'</td>';


            // //initialiase dataTable and set config options
            // var table = $('table').dataTable({
            //     'fnCreatedRow': function (nRow, aData, iDataIndex) {
            //         $(nRow).attr('id', 'myTable'); // or whatever you choose to set as the id
            //     }
            // });


           $('table').dataTable().fnAddData([
            check,
            nombre,
            signo,
            tipoCambio,
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

      $('#botonNuevoTipoMoneda').click(function(){
        limpiarForm();
       });


      });
      
      
    function limpiarForm(){
      $('#form_tipoMoneda')[0].reset();
      var validator = $("#form_tipoMoneda").validate();
      validator.resetForm();
      $('#form_tipoMoneda #tipoMoneda_nombre').focus();
    }


 function validacionCorrecta(){
    $.ajax({
      data: $('#form_tipoMoneda').serialize(),
      url:   '<?=base_url()?>tiposMoneda/verificarNombre',
      type:  'post',
      success:  function (response) {
        if (response == '0') {
          alert("<?=label('errorGuardar'); ?>");
          $('#agregarTipoMoneda .modal-header a').click();

        } else{
          if (response == '2') {
                var url = $('#form_tipoMoneda').attr('action');
                var method = $('#form_tipoMoneda').attr('method');
                $.ajax({
                   type: method,
                   url: url,
                   data: $('#form_tipoMoneda').serialize(),
                   success: function(response)
                   {
                     if (response == 0) {
                           alert("<?=label('errorGuardar'); ?>");
                           $('#agregarTipoMoneda .modal-header a').click();
                       } else {
                        
                        alert("<?=label('tiposMoneda_tipoMonedaGuardadoCorrectamente'); ?>");
                         actualizarSelectTipoMoneda();
                        agregarFila(response, $('#form_tipoMoneda #tipoMoneda_nombre').val(), $('#form_tipoMoneda #tipoMoneda_signo').val(), $('#form_tipoMoneda #tipoMoneda_tipoCambio').val());
                        if (cerrarModal) {
                          $('#agregarTipoMoneda .modal-header a').click();
                        } else{
                          limpiarForm();
                        }
                        
                       }   
                   }
                 }); 

          } else{
            alert("<?=label('tipoMoneda_error_nombreExisteEnBD'); ?>");
            $('#form_tipoMoneda #tipoMoneda_nombre').focus();
          };
        };
   }
});
}

function validacionCorrectaEditar(){
    if ($('#form_tipoMonedaEditar #tipoMoneda_nombreOriginal').val() != $('#form_tipoMonedaEditar #tipoMoneda_nombre').val()) {
        $.ajax({
          data: $('#form_tipoMonedaEditar').serialize(),
          url:   '<?=base_url()?>tiposMoneda/verificarNombre',
          type:  'post',
          success:  function (response) {
            if (response == '0') {
              alert("<?=label('errorGuardar'); ?>");
              $('#editarTipoMoneda .modal-header a').click();

            } else{
              if (response == '2') {
                    var url = $('#form_tipoMonedaEditar').attr('action');
                    var method = $('#form_tipoMonedaEditar').attr('method');
                    $.ajax({
                       type: method,
                       url: url,
                       data: $('#form_tipoMonedaEditar').serialize(),
                       success: function(response)
                       {
                         if (response == 0) {
                               alert("<?=label('errorEditar'); ?>");
                               $('#editarTipoMoneda .modal-header a').click();
                           } else {
                            
                            alert("<?=label('tiposMoneda_tipoMonedaEditadoCorrectamente'); ?>");
                             actualizarSelectTipoMoneda();
                            editarFila($('#form_tipoMonedaEditar #tipoMoneda_nombre').val(), $('#form_tipoMonedaEditar #tipoMoneda_signo').val(), $('#form_tipoMonedaEditar #tipoMoneda_tipoCambio').val());
                            $('#editarTipoMoneda .modal-header a').click();
                            
                           }   
                       }
                     }); 

              } else{
                alert("<?=label('tipoMoneda_error_nombreExisteEnBD'); ?>");
                  $('#form_tipoMonedaEditar #tipoMoneda_nombre').focus();
//                $("#form_tipoMonedaEditar input[name*='tipoMoneda_nombre']").each(function () {
//                    if ($(this).val() == response) {
//                        $(this).focus();
//                    }
//                });
              };
            };
       }
   });

    } else{

        var url = $('#form_tipoMonedaEditar').attr('action');
        var method = $('#form_tipoMonedaEditar').attr('method');
        $.ajax({
           type: method,
           url: url,
           data: $('#form_tipoMonedaEditar').serialize(),
           success: function(response)
           {
             if (response == 0) {
                   alert("<?=label('errorEditar'); ?>");
                   $('#editarTipoMoneda .modal-header a').click();
               } else {
                
                alert("<?=label('tiposMoneda_tipoMonedaEditadoCorrectamente'); ?>");
                 actualizarSelectTipoMoneda();
                editarFila($('#form_tipoMonedaEditar #tipoMoneda_nombre').val(), $('#form_tipoMonedaEditar #tipoMoneda_signo').val(), $('#form_tipoMonedaEditar #tipoMoneda_tipoCambio').val());
                $('#editarTipoMoneda .modal-header a').click();
                
               }   
           }
         }); 


    };

 
}

//-----------------------------------------------------------------------------------------------------

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
   
        $('#eliminarTipoMoneda #botonEliminar').on('click', function () {
           event.preventDefault();
           $.ajax({
                  data: {idEliminar : idEliminar},
                  url:   '<?=base_url()?>tiposMoneda/eliminar',
                  type:  'post',
                  // beforeSend: function () {
                  //         $("#resultado").html("Procesando, espere por favor...");
                  // },
                  success:  function (response) {
                   if (response==1) {
                       filaEliminar.fadeOut(function () {
                       filaEliminar.remove();
                           actualizarSelectTipoMoneda();
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
       $('#tiposMoneda-tabla-lista').dataTable( {
           'aoColumnDefs': [{
               'bSortable': false,
               'aTargets': [0, -1] //desactiva en primer y última columna opción de ordenar
           }]
       });
   });
   $(document).ready(function () {
       $('table#tiposMoneda-tabla-lista thead th:first').removeClass('sorting_asc').addClass('sorting_disabled');
       $('table#tiposMoneda-tabla-lista thead th:nth-child(2)').removeClass('sorting').addClass('sorting_asc');
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
                      url:   '<?=base_url()?>tiposMoneda/eliminar',
                      type:  'post',
                      success:  function (response) {

                       contadorTotal++;
                       if (response==1) {
                          fila.fadeOut(function () {
                           fila.remove();
                              actualizarSelectTipoMoneda();
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
           var tableBody = $('#tiposMoneda-tabla-lista').find('tbody tr[role=row] input[type=checkbox]');
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
           tablaHtml = htmlTabla('tiposMoneda-tabla-lista', true);
           Popup(tablaHtml);
       });
   
       function Popup(data) 
       {
           // var mywindow = window.open('', 'my div', 'height=400,width=600');
           var mywindow = window.open('', 'my div', '');
           mywindow.document.write('<html><head><title><?= label('tituloTiposMoneda'); ?></title>');
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
           var html = htmlTabla('tiposMoneda-tabla-lista', false);
           $('#inset_form').html('<form  action="<?=base_url()?>ManejadorExcel/tablaDescarga" name="form" method="post" style="display:block;"><input type="text" name="titulo" value="<?= label('tituloTiposMoneda'); ?>"><textarea name="miHtml">' + html + '</textarea></form>');
           document.forms['form'].submit();
       });
       
       $('#opciones-seleccionados-PDF').on("click", function(){
           var informacionSistema = '<div id="informacionSistema"><div id="linkPagina"><a href="<?=base_url()?>"><?= label('link_paginaInicial'); ?></a></div><span class="numeracion"></span></div>';
           var encabezado = '<div id="encabezado"><?= label('tituloTiposMoneda'); ?></div>';
           var body = encabezado + informacionSistema;
           body += htmlTabla('tiposMoneda-tabla-lista', false);
           var html = '<!DOCTYPE html><html><head><title>403 Forbidden</title><link rel="stylesheet" href="<?= base_url() ?>assets/dashboard/css/estiloTablasDescarga.css"></head><body id="hojaPDF">';
           html +=  body + '</body></html>';
           $('#inset_form').html('<form  action="<?=base_url()?>ManejadorPDF/tablaDescarga" name="form" method="post" style="display:block;"><input type="text" name="titulo" value="<?= label('tituloTiposMoneda'); ?>"><textarea name="miHtml">' + html + '</textarea></form>');
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

<div id="agregarTipoMoneda" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <form id="form_tipoMoneda" action="<?=base_url()?>tiposMoneda/insertar" method="post">
            <div class="row">
                <div class="input-field col s12">
                    <input id="tipoMoneda_nombre" name="tipoMoneda_nombre" type="text">
                    <label for="tipoMoneda_nombre"><?= label('formTipoMoneda_nombre'); ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="tipoMoneda_signo" name="tipoMoneda_signo" type="text">
                    <label for="tipoMoneda_signo"><?= label('formTipoMoneda_signo'); ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="tipoMoneda_tipoCambio" name="tipoMoneda_tipoCambio" type="number">
                    <label for="tipoMoneda_tipoCambio"><?= label('formTipoMoneda_tipoCambio'); ?></label>
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
        </form>
    </div>
</div>
<div id="editarTipoMoneda" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <form id="form_tipoMonedaEditar" action="<?=base_url()?>tiposMoneda/modificar" method="post">
            <div class="row">
                <div class="input-field col s12">
                    <input style="display:none" id="idTipoMoneda" name="idTipoMoneda" type="text">
                    <input style="display:none" id="tipoMoneda_nombreOriginal" name="tipoMoneda_nombreOriginal" type="text">
                    <input id="tipoMoneda_nombre" name="tipoMoneda_nombre" type="text">
                    <label for="tipoMoneda_nombre"><?= label('formTipoMoneda_nombre'); ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="tipoMoneda_signo" name="tipoMoneda_signo" type="text">
                    <label for="tipoMoneda_signo"><?= label('formTipoMoneda_signo'); ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="tipoMoneda_tipoCambio" name="tipoMoneda_tipoCambio" type="number">
                    <label for="tipoMoneda_tipoCambio"><?= label('formTipoMoneda_tipoCambio'); ?></label>
                </div>
            </div>
            <div class="row">
                <a href="#" style="font-size: larger;float: left;text-decoration: underline;"
                   class="modal-action modal-close"><?= label('cancelar'); ?>
                </a>
                <a onclick="$(this).closest('form').submit()" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('tipoMoneda_guardarCambios'); ?>
                </a>
            </div>
        </form>
    </div>
</div>
<div id="eliminarTipoMoneda" class="modal">
   <div class="modal-header">
      <p><?= label('nombreSistema'); ?></p>
      <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
   </div>
   <div class="modal-content">
      <p><?= label('confirmarEliminarTipoMoneda'); ?></p>
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
      <div id="botonEliminar" class="modal-footer black-text" title="tiposMoneda-tabla-lista">
         <a href="#"
            class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
      </div>
   </div>
</div>
<!-- Fin lista modals -->