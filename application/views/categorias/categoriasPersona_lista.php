<div style="display: none" id="inset_form"></div>
<!-- START CONTENT -->

<section id="content">

    <!--start container-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloCategoriasPersonas'); ?></h1>
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
                                                    <a href="#agregarCategoriaPersona" id="botonNuevaCategoriaPersona"
                                                       class="btn btn-default modal-trigger"><?= label('categoriaPersonaNueva'); ?></a>
                                                </div>
                                                <table id="categoriasPersona-tabla-lista"
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
                                                            <th><?= label('tablaCategoriasPersona_nombre'); ?></th>
                                                            <th><?= label('tablaCategoriasPersona_descripcion'); ?></th>
                                                            <th><?= label('tablaCategoriasPersona_opciones'); ?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        if (isset($lista)) {
                                                            if ($lista !== false) {
                                                                $contador = 0;
                                                                foreach ($lista as $fila) {
                                                                    $idEncriptado = encryptIt($fila['idCategoriaPersona']); ?>

                                                                        <tr id="fila<?= $contador; ?>" data-idElemento="<?= $idEncriptado; ?>">
                                                                            <td style="text-align: center;">
                                                                                <input type="checkbox" class="filled-in checkbox" id="<?= $idEncriptado; ?>"/>
                                                                                <label for="<?= $idEncriptado; ?>"></label>
                                                                            </td>
                                                                            <td><?= $fila['nombre']?></td>
                                                                            <td><?= $fila['descripcion']?></td>
                                                                            <td>
                                                                                <ul id="dropdown-categoriaPersona<?= $contador; ?>" class="dropdown-content">
                                                                                    <li>
                                                                                        <a href="#editarCategoriaPersona" data-id-editar="<?= $idEncriptado; ?>"
                                                                                           class="-text modal-trigger abrirEditar"><?= label('menuOpciones_editar'); ?>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#eliminarCategoriaPersona" class="-text modal-trigger confirmarEliminar"
                                                                                           data-id-eliminar="<?= $idEncriptado; ?>"  data-fila-eliminar="fila<?= $contador; ?>">
                                                                                            <?= label('menuOpciones_eliminar'); ?>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#"
                                                                                   data-activates="dropdown-categoriaPersona<?= $contador++ ?>">
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
                                                            <a id="opciones-seleccionados-PDF" href="#" class="-text">
                                                                <?= label('opciones_seleccionadosExportarPdf') ?>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a id="opciones-seleccionados-Excel" href="#" class="-text">
                                                                <?= label('opciones_seleccionadosExportarExcel') ?>
                                                            </a>
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
    $this->load->view('layout/default/menu-crear.php'); ?>

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
    var checkActivo = false;
    var idEditar = 0;
    $(document).on('ready', function(){
        function limpiarFormEditar(){
            $('#form_categoriaPersonaEditar')[0].reset();
            var validator = $("#form_categoriaPersonaEditar").validate();
            validator.resetForm();
            $('#form_categoriaPersonaEditar #categoriaPersona_nombre').focus();
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
            var url = '<?=base_url()?>categoriasPersona/editar';
            var method = 'POST';
            $.ajax({
                type: method,
                url: url,
                data: {idEditar : idEditar},
                success: function(response)
                {
                    var categoria = $.parseJSON(response);
                    $('#form_categoriaPersonaEditar #categoriaPersona_nombreOriginal').val(categoria['nombre']);
                    $('#form_categoriaPersonaEditar #categoriaPersona_nombre').val(categoria['nombre']);
                    $('#form_categoriaPersonaEditar #categoriaPersona_descripcion').val(categoria['descripcion']);
                    $('#form_categoriaPersonaEditar #idCategoriaPersona').val(idEditar);
                    $('label').addClass('active');
                }
            });
        });
    });
    function editarFila(nombre, descripcion){
        var d = row.data();
        d[1]= nombre;
        d[2]= descripcion;
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
            if ($lista !== false) { ?>
                contadorFilas = <?=count($lista);?>;//actualiza el contador con los que vienen desde la bd
    <?php
            }
        } ?>

    function agregarFila(idEncriptado, nombre, descripcion){
        // $('tbody').empty();
        var check = '<td>' +
                        '<div style="text-align: center;">'+
                            '<input type="checkbox" class="filled-in checkbox" id="'+idEncriptado+'"/>' +
                            '<label for="'+idEncriptado+'"></label>' +
                        '</div>'+
                    '</td>';
        var boton = '<td>' +
                        '<ul id="dropdown-categoriaPersona'+ contadorFilas +'" class="dropdown-content">' +
                            '<li>' +
                                '<a href="#editarCategoriaPersona" data-id-editar="'+idEncriptado+'"' +
                                'class="-text modal-trigger abrirEditar">'+ menuOpciones_editar + '</a>' +
                            '</li>' +
                            '<li>' +
                                '<a href="#eliminarCategoriaPersona"' +
                                'class="-text modal-trigger confirmarEliminar"' +
                                'data-id-eliminar="'+idEncriptado+'"  data-fila-eliminar="fila'+ contadorFilas +'">'+menuOpciones_eliminar+'</a>' +
                            '</li>' +
                        '</ul>' +
                        '<a class="boton-opciones btn-flat dropdown-button waves-effect white-text"' +
                        'href="#!"' +
                        'data-activates="dropdown-categoriaPersona'+ contadorFilas +'">' +
                        ''+ menuOpciones_seleccionar +'<i class="mdi-navigation-arrow-drop-down"></i>' +
                        '</a>' +
                    '</td>';
        var nombre = '<td>'+nombre+'</td>';
        var descripcion = '<td>'+ descripcion +'</td>';
        
        $('table').dataTable().fnAddData([
            check,
            nombre,
            descripcion,
            boton ]);

        generarListasBotones();
        $('.modal-trigger').leanModal();
        contadorFilas++;
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
        });
    }

    var cerrarModal = false;
    $(document).on('ready', function(){
        $('#guardarOtro').on('click', function(){
            cerrarModal = false;
        });
        $('#guardarCerrar').on('click', function(){
            cerrarModal = true;
        });
        $('#botonNuevaCategoriaPersona').click(function(){
            limpiarForm();
        });
    });

    function limpiarForm(){
        $('#form_categoriaPersona')[0].reset();
        var validator = $("#form_categoriaPersona").validate();
        validator.resetForm();
        $('#form_categoriaPersona #categoriaPersona_nombre').focus();
    }

    function validacionCorrecta(){
        $.ajax({
            data: $('#form_categoriaPersona').serialize(),
            url:   '<?=base_url()?>categoriasPersona/verificarNombre',
            type:  'post',
            success:  function (response) {
                if (response == '0') {
                    alert("<?=label('errorGuardar'); ?>");
                    $('#agregarCategoriaPersona .modal-header a').click();
                } else{
                    if (response == '2') {
                        var url = $('#form_categoriaPersona').attr('action');
                        var method = $('#form_categoriaPersona').attr('method');
                        $.ajax({
                            type: method,
                            url: url,
                            data: $('#form_categoriaPersona').serialize(),
                            success: function(response)
                            {
                                if (response == 0) {
                                    alert("<?=label('errorGuardar'); ?>");
                                    $('#agregarCategoriaPersona .modal-header a').click();
                                } else {
                                    alert("<?=label('categoriasPersona_categoriaGuardadoCorrectamente'); ?>");
                                    agregarFila(response, $('#form_categoriaPersona #categoriaPersona_nombre').val(), $('#form_categoriaPersona #categoriaPersona_descripcion').val());
                                    if (cerrarModal) {
                                        $('#agregarCategoriaPersona .modal-header a').click();
                                    } else {
                                        limpiarForm();
                                    }
                                }
                            }
                        });
                    } else {
                        alert("<?=label('categoriaPersona_error_nombreExisteEnBD'); ?>");
                        $('#form_categoriaPersona #categoriaPersona_nombre').focus();
                    }
                }
            }
        });
    }
    function validacionCorrectaEditar(){
        if ($('#form_categoriaPersonaEditar #categoriaPersona_nombreOriginal').val() != $('#form_categoriaPersonaEditar #categoriaPersona_nombre').val()) {
            $.ajax({
                data: $('#form_categoriaPersonaEditar').serialize(),
                url: '<?=base_url()?>categoriasPersona/verificarNombre',
                type: 'post',
                success:  function (response) {
                    if (response == '0') {
                        alert("<?=label('errorGuardar'); ?>");
                        $('#editarCategoriaPersona .modal-header a').click();
                    } else {
                        if (response == '2') {
                            var url = $('#form_categoriaPersonaEditar').attr('action');
                            var method = $('#form_categoriaPersonaEditar').attr('method');
                            $.ajax({
                                type: method,
                                url: url,
                                data: $('#form_categoriaPersonaEditar').serialize(),
                                success: function(response)
                                {
                                    if (response == 0) {
                                        alert("<?=label('errorEditar'); ?>");
                                        $('#editarCategoriaPersona .modal-header a').click();
                                    } else {
                                        alert("<?=label('categoriasPersona_categoriaEditadoCorrectamente'); ?>");
                                        editarFila($('#form_categoriaPersonaEditar #categoriaPersona_nombre').val(), $('#form_categoriaPersonaEditar #categoriaPersona_descripcion').val());
                                        $('#editarCategoriaPersona .modal-header a').click();
                                    }
                                }
                            });
                        } else {
                            alert("<?=label('categoriaPersona_error_nombreExisteEnBD'); ?>");
                            $('#form_categoriaPersonaEditar #categoriaPersona_nombre').focus();
                        }
                    }
                }
            });
        } else {
            var url = $('#form_categoriaPersonaEditar').attr('action');
            var method = $('#form_categoriaPersonaEditar').attr('method');
            $.ajax({
                type: method,
                url: url,
                data: $('#form_categoriaPersonaEditar').serialize(),
                success: function(response)
                {
                    if (response == 0) {
                        alert("<?=label('errorEditar'); ?>");
                        $('#editarCategoriaPersona .modal-header a').click();
                    } else {
                        alert("<?=label('categoriasPersona_categoriaEditadoCorrectamente'); ?>");
                        editarFila($('#form_categoriaPersonaEditar #categoriaPersona_nombre').val(), $('#form_categoriaPersonaEditar #categoriaPersona_descripcion').val());
                        $('#editarCategoriaPersona .modal-header a').click();
                    }
                }
            });
        }
    }

//----------------------------------------------------------------------------------------------------------------

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
   
        $('#eliminarCategoriaPersona #botonEliminar').on('click', function () {
           event.preventDefault();
           $.ajax({
                  data: {idEliminar : idEliminar},
                  url:   '<?=base_url()?>categoriasPersona/eliminar',
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
       $('#categoriasPersona-tabla-lista').dataTable( {
           'aoColumnDefs': [{
               'bSortable': false,
               'aTargets': [0, -1] //desactiva en primer y última columna opción de ordenar
           }]
       });
   });
   $(document).ready(function () {
       $('table#categoriasPersona-tabla-lista thead th:first').removeClass('sorting_asc').addClass('sorting_disabled');
       $('table#categoriasPersona-tabla-lista thead th:nth-child(2)').removeClass('sorting').addClass('sorting_asc');
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
                      url:   '<?=base_url()?>categoriasPersona/eliminar',
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
           var tableBody = $('#categoriasPersona-tabla-lista').find('tbody tr[role=row] input[type=checkbox]');
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
           tablaHtml = htmlTabla('categoriasPersona-tabla-lista', true);
           Popup(tablaHtml);
       });
   
       function Popup(data) 
       {
           // var mywindow = window.open('', 'my div', 'height=400,width=600');
           var mywindow = window.open('', 'my div', '');
           mywindow.document.write('<html><head><title><?= label('tituloCategoriasPersonas'); ?></title>');
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
           var html = htmlTabla('categoriasPersona-tabla-lista', false);
           $('#inset_form').html('<form  action="<?=base_url()?>ManejadorExcel/tablaDescarga" name="form" method="post" style="display:block;"><input type="text" name="titulo" value="<?= label('tituloCategoriasPersonas'); ?>"><textarea name="miHtml">' + html + '</textarea></form>');
           document.forms['form'].submit();
       });
       
       $('#opciones-seleccionados-PDF').on("click", function(){
           var informacionSistema = '<div id="informacionSistema"><div id="linkPagina"><a href="<?=base_url()?>"><?= label('link_paginaInicial'); ?></a></div><span class="numeracion"></span></div>';
           var encabezado = '<div id="encabezado"><?= label('tituloCategoriasPersonas'); ?></div>';
           var body = encabezado + informacionSistema;
           body += htmlTabla('categoriasPersona-tabla-lista', false);
           var html = '<!DOCTYPE html><html><head><title>403 Forbidden</title><link rel="stylesheet" href="<?= base_url() ?>assets/dashboard/css/estiloTablasDescarga.css"></head><body id="hojaPDF">';
           html +=  body + '</body></html>';
           $('#inset_form').html('<form  action="<?=base_url()?>ManejadorPDF/tablaDescarga" name="form" method="post" style="display:block;"><input type="text" name="titulo" value="<?= label('tituloCategoriasPersonas'); ?>"><textarea name="miHtml">' + html + '</textarea></form>');
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

<div id="agregarCategoriaPersona" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <form id="form_categoriaPersona" action="<?=base_url()?>categoriasPersona/insertar" method="post">
            <div class="row">
                <div class="input-field col s12">
                    <input id="categoriaPersona_nombre" name="categoriaPersona_nombre" type="text">
                    <label for="categoriaPersona_nombre"><?= label('formCategoriaPersona_nombre'); ?></label>
                </div>
                <div class="input-field col s12">
                    <textarea length="200" maxlength="200" name="categoriaPersona_descripcion" id="categoriaPersona_descripcion" class="materialize-textarea" rows="4"></textarea>
                    <label for="categoriaPersona_descripcion"><?= label('formCategoriaPersona_descripcion'); ?></label>
                </div>
            </div>
            <div class="row">
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
<div id="editarCategoriaPersona" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <form id="form_categoriaPersonaEditar" action="<?=base_url()?>categoriasPersona/modificar" method="post">
            <div class="row">
                <div class="input-field col s12">
                    <input style="display:none" id="idCategoriaPersona" name="idCategoriaPersona" type="text">
                    <input style="display:none" id="categoriaPersona_nombreOriginal" name="categoriaPersona_nombreOriginal" type="text">
                    <input id="categoriaPersona_nombre" name="categoriaPersona_nombre" type="text">
                    <label for="categoriaPersona_nombre"><?= label('formCategoriaPersona_nombre'); ?></label>
                </div>
                <div class="input-field col s12">
                    <textarea length="200" maxlength="200" name="categoriaPersona_descripcion" id="categoriaPersona_descripcion" class="materialize-textarea" rows="4"></textarea>
                    <label for="categoriaPersona_descripcion"><?= label('formCategoriaPersona_descripcion'); ?></label>
                </div>
            </div>
            <div class="row">
                <a onclick="$(this).closest('form').submit()" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('categoriaPersona_guardarCambios'); ?>
                </a>
            </div>
        </form>
    </div>
</div>
<div id="eliminarCategoriaPersona" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarCategoriaPersona'); ?></p>
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
        <div id="botonEliminar" class="modal-footer black-text" title="categoriasPersona-tabla-lista">
            <a href="#" class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>
<!-- Fin lista modals -->