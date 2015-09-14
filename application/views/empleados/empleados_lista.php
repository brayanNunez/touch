<button id="convertirPDF">PDF</button>
<button id="convertirExcel">Excel</button>
<button id="convertirImprimir">Imprimir</button>



<script type="text/javascript">

    $('#convertirImprimir').on("click", function(){
        tablaHtml = '<table style="border-collapse:collapse;width: 100%;"><thead style="font-weight: bold;">';

    $('#empleados-tabla-lista >thead >tr').each(function()
    {
        tablaHtml += '<tr>';
        var cantidadColummnas = $(this).children("th").length;
      $(this).children("th").each(function(index){
        if (index != 0 && index != cantidadColummnas-1) {
            tablaHtml += '<td style="border:1px solid #A9A9A9; padding:3px 7px 2px 7px;">' + $(this).html() + '</td>';
        };
      });
      tablaHtml += '</tr>';
    });

    tablaHtml += '</thead>';
    tablaHtml += '<tbody>';

    $('#empleados-tabla-lista >tbody >tr').each(function()
    {
        // alert($(this).children("td").first().html());
         if ($(this).children("td").first().find('input').is(':checked')) {

            tablaHtml += '<tr>';
            var cantidadColummnas = $(this).children("td").length;
            $(this).children("td").each(function(index){
             if (index != 0 && index != cantidadColummnas-1) {
                tablaHtml += '<td style="border:1px solid #A9A9A9; padding:3px 7px 2px 7px;">' + $(this).text() + '</td>';
                };
            });
            tablaHtml += '</tr>';
            
           
         }

        
    });
    
    var html = '<!DOCTYPE html><html><head><title>403 Forbidden</title><link rel="stylesheet" href="<?= base_url() ?>assets/dashboard/css/estiloTablasDescarga.css"></head><body id="hojaPDF">';
     html +=  tablaHtml + '</body></html>';

    
        // alert('mec');
        Popup(tablaHtml);

    });

    function Popup(data) 
    {
        // var mywindow = window.open('', 'my div', 'height=400,width=600');
        var mywindow = window.open('', 'my div', '');
        mywindow.document.write('<html><head><title>Empleados</title>');
       // mywindow.document.write('<link media="print,screen" href="<?= base_url() ?>assets/dashboard/css/estiloTablasDescarga.css" rel="stylesheet" type="text/css" >');

          // mywindow.document.write('<style type="text/css">@media print {table{background: red;}}</style>');
        
        mywindow.document.write('</head><body>');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');


        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10



        mywindow.print();

        mywindow.close();


        return true;
    }

</script>



<script type="text/javascript">

$('#convertirImprimir').on("click", function(){
    $('table').printArea();

});


$('#convertirExcel').on("click", function(){
    tablaHtml = '<table><thead>';

    $('#empleados-tabla-lista >thead >tr').each(function()
    {
        tablaHtml += '<tr>';
        var cantidadColummnas = $(this).children("th").length;
      $(this).children("th").each(function(index){
        if (index != 0 && index != cantidadColummnas-1) {
            tablaHtml += '<td>' + $(this).html() + '</td>';
        };
      });
      tablaHtml += '</tr>';
    });

    tablaHtml += '</thead>';
    tablaHtml += '<tbody>';

    $('#empleados-tabla-lista >tbody >tr').each(function()
    {
        if ($(this).children("td").first().find('input').is(':checked')) {
            tablaHtml += '<tr>';
            var cantidadColummnas = $(this).children("td").length;
              $(this).children("td").each(function(index){
                if (index != 0 && index != cantidadColummnas-1) {
                    tablaHtml += '<td>' + $(this).text() + '</td>';
                };
              });
              tablaHtml += '</tr>';
     }
    });
    tablaHtml += '</tbody></table></body></html>';


    var html = tablaHtml;

    $('#inset_form').html('<form  action="<?=base_url()?>ManejadorExcel/tablaDescarga" name="form" method="post" style="display:block;"><input type="text" name="titulo" value="<?= label('tituloEmpleados'); ?>"><textarea name="miHtml">' + html + '</textarea></form>');
    document.forms['form'].submit();

    //eliminar la propiedead height para que siga adaptandose a los cambios de tamano en el html
    // $('#footerDiseno').css("height", "");
    // $('#informacion').css("height", "");
    // $('#prefooter').css("height", "");
    // $('.editarExterno').css("display", "");

});

$('#convertirPDF').on("click", function(){
 
    var informacionSistema = '<div id="informacionSistema"><div id="linkPagina"><a href="<?=base_url()?>">touchcr.com</a></div><span class="numeracion"></span></div>';
    var encabezado = '<div id="encabezado"><?= label('tituloEmpleados'); ?></div>';
    var tablaHtml = encabezado + informacionSistema;
    // tablaHtml += '<h4 id="titulo">Empleados</h4>';
    tablaHtml += '<table><thead>';

    var rows = $("#empleados-tabla-lista").dataTable().fnGetNodes();
    // alert(rows.html());

    var tabla = $("#empleados-tabla-lista").dataTable();
    // $("#empleados-tabla-lista");
    alert( tabla.find('> tbody > tr').length);



    tabla.find('> thead > tr').each(function()
    {
        tablaHtml += '<tr>';
        var cantidadColummnas = $(this).children("th").length;
      $(this).children("th").each(function(index){
        if (index != 0 && index != cantidadColummnas-1) {
            tablaHtml += '<td>' + $(this).html() + '</td>';
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
            tablaHtml += '<td>' + $(this).text() + '</td>';
        };
      });
      tablaHtml += '</tr>';
  }
    });
    tablaHtml += '</tbody></table></body></html>';
     var table =  '<table><thead><tr><th>Month</th><th>Savings</th></tr></thead><tfoot><tr><td>Sum</td><td><a href="localhost/Proyectos">$180</a></td></tr></tfoot><tbody><tr><td>January</td><td>$100</td></tr><tr><td>February</td><td>$80</td></tr></tbody></table>';
     // table = $('#contenedorTabla').html();

    var html = '<!DOCTYPE html><html><head><title>403 Forbidden</title><link rel="stylesheet" href="<?= base_url() ?>assets/dashboard/css/estiloTablasDescarga.css"></head><body id="hojaPDF">';
     html +=  tablaHtml + '</body></html>';

    $('#inset_form').html('<form  action="<?=base_url()?>ManejadorPDF/tablaDescarga" name="form" method="post" style="display:block;"><textarea name="miHtml">' + html + '</textarea></form>');
    document.forms['form'].submit();

    //eliminar la propiedead height para que siga adaptandose a los cambios de tamano en el html
    // $('#footerDiseno').css("height", "");
    // $('#informacion').css("height", "");
    // $('#prefooter').css("height", "");
    // $('.editarExterno').css("display", "");

});

</script>
<div style="display: none" id="inset_form"></div>

<!-- START CONTENT -->

<section id="content">

    <!--start container-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloEmpleados'); ?></h1>

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
                                <div class="card lista-elementos">
                                    <div id="table-datatables">
                                        <div class="row">
                                            <div class="col s12">
                                                <div class="agregar_nuevo">
                                                    <a href="<?= base_url() ?>empleados/agregar"
                                                       class="btn btn-default"><?= label('agregar_nuevo'); ?></a>
                                                </div>
                                                <div id="contenedorTabla">
                                                <table id="empleados-tabla-lista" class="data-table-information responsive-table striped" cellspacing="0">
                                                    <thead>
                                                    <tr>
                                                        <th style="text-align: center;">
                                                            <input class="filled-in checkbox checkall" type="checkbox"
                                                                   id="checkbox-all"
                                                                   onclick="toggleChecked(this.checked)"/>
                                                            <label for="checkbox-all"></label>
                                                        </th>
                                                        <th><?= label('Empleado_tablaCodigo'); ?></th>
                                                        <th><?= label('Empleado_tablaNombre'); ?></th>
                                                        <!-- <th><?= label('Empleado_primerApellido'); ?></th> -->
                                                        <!-- <th><?= label('Empleado_segundoApellido'); ?></th> -->
                                                        <th><?= label('Empleado_tablaIdentificacion'); ?></th> 
                                                        <th><?= label('Empleado_tablaPalabras'); ?></th>
                                                        <th><?= label('Empleado_tablaOpciones'); ?></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php
                                                    if (isset($lista)) {

                                                        if ($lista !== false) {
                                                             $contador = 0;
                                                                foreach ($lista as $fila) {
                                                                    $idEncriptado = encryptIt($fila['idEmpleado']);
                                                                    ?>
                                                                    <tr id="fila<?= $contador ?>" data-idElemento="<?= $idEncriptado ?>">
                                                                        <td style="text-align: center;">
                                                                            <input type="checkbox" class="filled-in checkbox"
                                                                                   id="<?=$idEncriptado?>"/>
                                                                            <label for="<?=$idEncriptado?>"></label>
                                                                        </td>
                                                                        <td><?= $fila['codigo'] ?></td>

                                                                        <td>
                                                                            <a href="<?= base_url() ?>empleados/editar/<?= $idEncriptado ?>"><?= $fila['nombre']." ".$fila['primerApellido']." ".$fila['segundoApellido'] ?></a>
                                                                        </td>
                                                                        <!-- <td>
                                                                            <a href="<?= base_url() ?>empleados/editar/<?= $idEncriptado ?>"><?= $fila['primerApellido'] ?></a>
                                                                        </td>
                                                                        <td>
                                                                            <a href="<?= base_url() ?>empleados/editar/<?= $idEncriptado ?>"><?= $fila['segundoApellido'] ?></a>
                                                                        </td> -->
                                                                        <td><?= $fila['identificacion'] ?></td>
                                                                        <td><?php foreach ($fila['palabras'] as $palabra) {
                                                                                    echo $palabra['descripcion'].', ';
                                                                                }
                                                                               ?></td>
                                                                        <td>
                                                                            <ul id="dropdown-empleado<?= $contador ?>"
                                                                                class="dropdown-content">
                                                                                <li>
                                                                                    <a href="<?= base_url() ?>empleados/editar/<?= $idEncriptado ?>"
                                                                                       class="-text"><?= label('menuOpciones_editar') ?></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="#eliminarEmpleado"
                                                                                       class="-text modal-trigger confirmarEliminar"
                                                                                       data-id-eliminar="<?= $idEncriptado ?>"  data-fila-eliminar="fila<?= $contador?>"><?= label('menuOpciones_eliminar') ?></a>
                                                                                </li>
                                                                            </ul>
                                                                            <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                               href="#!"
                                                                               data-activates="dropdown-empleado<?= $contador++ ?>">
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
                                                       class="waves-effect black-text opciones-seleccionados option-print-table"
                                                       style="visibility: hidden;"
                                                       href="#" data-toggle="tooltip"
                                                       title="<?= label('opciones_seleccionadosImprimir') ?>">
                                                        <i class="mdi-action-print icono-opciones-varios"></i>
                                                    </a>
                                                    <ul id="dropdown-exportar" class="dropdown-content">
                                                        <li>
                                                            <a href="#"
                                                               class="-text"><?= label('opciones_seleccionadosExportarPdf') ?></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                               class="-text"><?= label('opciones_seleccionadosExportarExcel') ?></a>
                                                        </li>
                                                    </ul>
                                                    <a id="opciones-seleccionados-export"
                                                       class="opciones-seleccionados boton-opciones black-text dropdown-button option-export-table"
                                                       href="#" data-toggle="tooltip"
                                                       title="<?= label('opciones_seleccionadosExportar') ?>"
                                                       data-activates="dropdown-exportar">
                                                        <i class="mdi-file-file-download icono-opciones-varios"></i>
                                                    </a>
                                                    <a id="opciones-seleccionados-delete"
                                                       class="modal-trigger waves-effect black-text opciones-seleccionados option-delete-elements"
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
<!-- END CONTENT-->

<!-- script para agregar link al boton aceptar del modal -->
<script type="text/javascript">
    $(document).on("ready", function () { 

        <?php
        if (isset($lista)) {
            if ($lista === false) {?>

                alert("Error al leer los datos");

            <?php
            }
        }
        ?>
          

        var idEliminar = 0;
        var fila = 0;

        $('.confirmarEliminar').on('click', function () {
            idEliminar = $(this).data('id-eliminar');
            fila = $(this).data('fila-eliminar');
            // idEliminar = id;
            // $('#eliminarEmpleado #botonEliminar a').attr('href', "<?=base_url()?>empleados/eliminar/" + id);
        });

         $('#eliminarEmpleado #botonEliminar').on('click', function () {
            event.preventDefault();
            // alert("#fila" + idEliminar);
            // window.location.replace('<?=base_url()?>empleados/eliminar/' + idEliminar);
            // redirect();
            $.ajax({
                   data: {idEliminar : idEliminar},
                   url:   '<?=base_url()?>empleados/eliminar',
                   type:  'post',
                   // beforeSend: function () {
                   //         $("#resultado").html("Procesando, espere por favor...");
                   // },
                   success:  function (response) {
                    // alert(response);
                    if (response==true) {
                        $('#' + fila).fadeOut(function () {
                        $this.remove();
                        });
                    } else{
                        alert("Ha ocurrido un error");
                    };
                }
            });
         });




    });

</script>

<script>
    $(window).load(function () {
        var marcados = $('.checkbox:checked').size();
        if (marcados >= 1) {
            var elems = document.getElementsByClassName('opciones-seleccionados');
            var e;
            for (e in elems) {
//                elems[e].style.display = 'block';
                elems[e].style.visibility = 'visible';
//                elems[e].css('visibility', 'visible');
            }
        } else {
            var elems = document.getElementsByClassName('opciones-seleccionados');
            var e;
            for (e in elems) {
//                elems[e].style.display = 'none';
                elems[e].style.visibility = 'hidden';
//                elems[e].css('visibility', 'hidden');
            }
        }
        document.getElementById('checkbox-all').checked = false;

    });
    $(document).ready( function () {
        $('#empleados-tabla-lista').dataTable( {
            'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0, -1] /* 1st one, start by the right */
            }]
        });
    });
    $(document).ready(function () {
        $('table#empleados-tabla-lista thead th:first').removeClass('sorting_asc').addClass('sorting_disabled');
        $('table#empleados-tabla-lista thead th:nth-child(2)').removeClass('sorting').addClass('sorting_asc');
//        $('table#empleados-tabla-lista thead th:last').removeClass('sorting').addClass('sorting_disabled');
    });
    $(document).ready(function () {
        $('#eliminarElementosSeleccionados #botonEliminar').on("click", function (event) {
            var tb = $(this).attr('title');
            var sel = false;
            var ch = $('#' + tb).find('tbody input[type=checkbox]');
            ch.each(function () {
                var $this = $(this);
                if ($this.is(':checked')) {
                    sel = true;
                    var fila = $this.parents('tr');
                    var idEliminar = $this.parents('tr').attr('data-idElemento');

                    $.ajax({
                           data: {idEliminar : idEliminar},
                           url:   '<?=base_url()?>empleados/eliminar',
                           type:  'post',
                           // beforeSend: function () {
                           //         $("#resultado").html("Procesando, espere por favor...");
                           // },
                           success:  function (response) {
                            // alert(response);
                            if (response==true) {
                               fila.fadeOut(function () {
                                fila.remove();
                                verificarChecks();
                                });
                            } else{
                                alert("Ha ocurrido un error");
                            };
                        }
                    });

                    // fila.fadeOut(function () {
                    //     $this.remove();
                    // });
                }
            });
            return false;

        });
    });
    $(document).ready(function () {
        $('#checkbox-all').click(function (event) {
            var $this = $(this);
            var tableBody = $('#empleados-tabla-lista').find('tbody tr[role=row] input[type=checkbox]');
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
//                    elems[e].style.display = 'block';
                    elems[e].style.visibility = 'visible';
//                elems[e].css('visibility', 'visible');
                }
            } else {
                $('#checkbox-all').prop('checked', false);
                var elems = document.getElementsByClassName('opciones-seleccionados');
                var e;
                for (e in elems) {
//                    elems[e].style.display = 'none';
                    elems[e].style.visibility = 'hidden';
//                elems[e].css('visibility', 'hidden');
                }
            }
    }






    $(document).ready(function () {
        $('.boton-opciones').on('click', function (event) {
            // alert(event.type);
            //e.preventDefault();

            var elementoActivo = $(this).siblings('ul.active');
            if (elementoActivo.length > 0) {
                var estado = elementoActivo.css("display");
                if (estado == "block") {
                    elementoActivo.css("display", "none");
                    elementoActivo.style.display = 'none';
                } else {
                    elementoActivo.css("display", "block");
                    elementoActivo.style.display = 'block';
                }
            }
        });
    });
</script>

<!-- lista modals -->
<div id="eliminarEmpleado" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarEmpleado'); ?></p>
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
        <p><?= label('clientes_archivosSeleccionadosEliminar'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <div id="botonEliminar" class="modal-footer black-text" title="empleados-tabla-lista">
            <a href="#"
               class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>
<!--Fin lista modals -->
