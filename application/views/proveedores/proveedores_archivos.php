<div class="agregar_nuevo">
    <a href="#agregarArchivo" class="btn btn-default modal-trigger"><?= label('proveedores_archivoNuevo') ?></a>
</div>
<table id="files" class="data-table-information responsive-table display">
    <thead>
        <tr>
            <th style="text-align: center;">
                <input class="filled-in checkbox-file checkall" type="checkbox" id="checkbox-all-files"
                       onclick="toggleChecked(this.checked)"/>
                <label for="checkbox-all-files"></label>
            </th>
            <th><?= label('proveedores_archivosNombre') ?></th>
            <th><?= label('proveedores_archivosDescripcion') ?></th>
            <th><?= label('proveedores_archivosPeso') ?></th>
            <th><?= label('proveedores_archivosFecha') ?></th>
            <th><?= label('proveedores_archivosOpciones') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php
        $idPersonaEncriptado = '';
        if(isset($resultado)) {
            $idPersonaEncriptado = encryptIt($resultado['idProveedor']);
            $archivos = $resultado['archivos'];
            $contador = 0;
            foreach($archivos as $file) {
                $idEmpresa = $this->session->userdata('logged_in')['idEmpresa'];
                $idPersona = $file['idPersona'];
                $idPersonaEncriptado = encryptIt($file['idPersona']);
                $idEncriptado = encryptIt($file['idArchivoPersona']); ?>
                <tr id="fila<?=$contador?>" data-idElemento="<?= $idEncriptado ?>">
                    <td style="text-align: center;">
                        <input type="checkbox" class="filled-in checkbox-file" id="<?= $idEncriptado; ?>"/>
                        <label for="<?= $idEncriptado; ?>"></label>
                    </td>
                    <td>
                        <a href="<?= base_url().'files/empresas/'.$idEmpresa.'/proveedores/'.$idPersona.'/'.$file['nombreOriginal']; ?>" target="_blank">
                            <?= $file['nombre']; ?>
                        </a>
                    </td>
                    <td>
                        <p><?= $file['descripcion']; ?></p>
                    </td>
                    <td>
                        <p><?= $file['tamano'].' KB'; ?></p>
                    </td>
                    <td>
                        <p><?= date('d/m/Y  h:i a', strtotime($file['fecha'])); ?></p>
                    </td>
                    <td>
                        <ul id="dropdown-archivo<?= $contador; ?>" class="dropdown-content">
                            <li>
                                <a href="<?= base_url().'files/empresas/'.$idEmpresa.'/proveedores/'.$idPersona.'/'.$file['nombreOriginal']; ?>" class="-text"
                                   target="_blank"><?= label('menuOpciones_abrir') ?></a>
                            </li>
                            <li>
                                <a href="#eliminarArchivo" data-id-eliminar="<?= $idEncriptado ?>"  data-fila-eliminar="fila<?= $contador?>"
                                   class="-text modal-trigger confirmarEliminar"><?= label('menuOpciones_eliminar') ?></a>
                            </li>
                        </ul>
                        <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#"
                           data-activates="dropdown-archivo<?= $contador++; ?>">
                            <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                        </a>
                    </td>
                </tr>
        <?php
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
       href="#eliminarArchivosSeleccionados" data-toggle="tooltip"
       title="<?= label('opciones_seleccionadosEliminar') ?>">
        <i class="mdi-action-delete icono-opciones-varios"></i>
    </a>
</div>
<div style="display: none">
    <a id="linkModalErrorCargarDatos" href="#transaccionIncorrectaCargar" class="btn btn-default modal-trigger"></a>
    <a id="linkModalErrorEliminar" href="#transaccionIncorrectaEliminar" class="btn btn-default modal-trigger"></a>
</div>

<!--Script para el manejo de los archivos-->
<script>
    var contadorFilas = 0;
    <?php
    if (isset($resultado)) {
        if ($resultado !== false) { ?>
            contadorFilas = <?=count($resultado['archivos']);?>;//actualiza el contador con los que vienen desde la bd
    <?php
        }
    }
    ?>
    function validacionCorrecta_Archivo(){
        var formPW = $('#persona-archivo');
        $.ajax({
            data: new FormData(formPW[0]),
            url: formPW.attr('action'),
            type: formPW.attr('method'),
            success:  function (response) {
                if(response == 0) {
                    alert('<?= label('personaErrorSubirArchivo'); ?>');
                } else {
                    if (response == '-1') {
                        alert('<?= label('personaErrorSubirArchivo'); ?>');
                    } else {
                        alert('<?= label('personaExitoSubirArchivo'); ?>');
                        var idArchivoCargar = response;
                        $.ajax({
                            type: 'post',
                            url: '<?= base_url(); ?>proveedores/cargarArchivo',
                            data: {idArchivo : idArchivoCargar},
                            success: function(response)
                            {
                                var archivo = $.parseJSON(response);
                                agregarFilaArchivo(archivo['idEncriptado'], archivo['nombre'], archivo['ruta'], archivo['descripcion'],
                                    archivo['tamano'], archivo['fechaArchivo']);
                            }
                        });
                        formPW[0].reset();
                    }
                }
            },
            cache: false,
            contentType: false,
            processData: false
        });
    }
    function agregarFilaArchivo(idEncriptado, nombre, ruta, descripcion, tamano, fecha) {
        var check = '<td>' +
                        '<div style="text-align: center;">'+
                            '<input type="checkbox" class="filled-in checkbox-file" id="' + idEncriptado + '"/>' +
                            '<label for="' + idEncriptado + '"></label>' +
                        '</div>'+
                    '</td>';
        var boton = '<td>' +
                        '<ul id="dropdown-archivo' + contadorFilas + '" class="dropdown-content">' +
                            '<li>' +
                                '<a href="' + ruta + '"  class="-text" target="_blank"><?= label('menuOpciones_abrir') ?></a>' +
                            '</li>' +
                            '<li>' +
                                '<a href="#eliminarArchivo" data-id-eliminar="' + idEncriptado + '" data-fila-eliminar="' + contadorFilas + '"' +
                                    ' class="-text modal-trigger confirmarEliminar"><?= label('menuOpciones_eliminar') ?></a>' +
                            '</li>' +
                        '</ul>' +
                        '<a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#"' +
                            'data-activates="dropdown-archivo' + contadorFilas + '">' +
                            '<?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>' +
                        '</a>' +
                    '</td>';
        var nombre = '<td>' +
                        '<a href="' + ruta + '" target="_blank">' + nombre + '</a>' +
                    '</td>';
        var descripcion = '<td>' + descripcion + '</td>';
        var tamano = '<td>' + tamano +' KB </td>';
        var fecha = '<td>' + fecha + '</td>';

        $('#files').dataTable().fnAddData([
            check,
            nombre,
            descripcion,
            tamano,
            fecha,
            boton ]);
        generarListasBotones();
        $('.modal-trigger').leanModal();
        contadorFilas++;
    }
    function generarListasBotones() {
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
        });
    }
</script>
<!--Script para el manejo de la tabla y los checks-->
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
        var idPersona = 0;
        var filaEliminar = null;
        $(document).on('click', '.confirmarEliminar', function () {
            idEliminar = $(this).data('id-eliminar');
            idPersona = '<?= $idPersonaEncriptado; ?>';
            filaEliminar = $(this).parents('tr');
        });
        $('#eliminarArchivo #botonEliminar').on('click', function () {
            event.preventDefault();
            $.ajax({
                data: {idEliminar : idEliminar, idPersona : idPersona},
                url:   '<?=base_url()?>proveedores/eliminarArchivo',
                type:  'post',
                success:  function (response) {
                    if (response == 1) {
                        filaEliminar.fadeOut(function () {
                            filaEliminar.empty();
                            filaEliminar.remove();
                            verificarChecks();
                            $('#files').dataTable();
                        });
                    } else{
                        $('#linkModalErrorEliminar').click();
                    }
                }
            });
        });
    });

    $(document).ready( function () {
        $('#files').dataTable( {
            'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0, -1] //desactiva en primer y �ltima columna opci�n de ordenar
            }]
        });
    });
    $(document).ready(function () {
        $('table#files thead th:first').removeClass('sorting_asc').addClass('sorting_disabled');
        $('table#files thead th:nth-child(2)').removeClass('sorting').addClass('sorting_asc');
    });
    $(document).ready(function () {
        $('#eliminarArchivosSeleccionados #botonEliminar').on("click", function (event) {
            var tb = $(this).attr('title');
            var sel = false;
            var ch = $('#' + tb).find('tbody input[type=checkbox]');
            var marcados = $('.checkbox-file:checked').not('#checkbox-all-files').size();
            var contador = 0;
            ch.each(function () {
                var $this = $(this);
                if ($this.is(':checked')) {
                    sel = true;
                    var fila = $this.parents('tr');
                    var idEliminar = $this.parents('tr').attr('data-idElemento');
                    var idPersona = '<?= $idPersonaEncriptado; ?>';

                    $.ajax({
                        data: {idEliminar : idEliminar, idPersona : idPersona},
                        url:   '<?=base_url()?>proveedores/eliminarArchivo',
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
        $('#checkbox-all-files').click(function (event) {
            var $this = $(this);
            var tableBody = $('#files').find('tbody tr[role=row] input[type=checkbox]');
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
        $('.checkbox-file').click(function (event) {
            verificarChecks();
        });
    });

    function verificarChecks(){

        var marcados = $('.checkbox-file:checked').not('#checkbox-all-files').size();
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
        $('.boton-opciones').on('click', function (event) {
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

    // Inicio script de descarga pdf, excel e imprimir
    $(document).on('ready', function(){

        $('#opciones-seleccionados-print').on("click", function(){
            tablaHtml = htmlTabla('files', true);
            Popup(tablaHtml);
        });

        function Popup(data)
        {
            // var mywindow = window.open('', 'my div', 'height=400,width=600');
            var mywindow = window.open('', 'my div', '');
            mywindow.document.write('<html><head><title><?= label('tituloArchivos'); ?></title>');
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
            var html = htmlTabla('empleados-tabla-lista', false);
            $('#inset_form').html('<form  action="<?=base_url()?>ManejadorExcel/tablaDescarga" name="form" method="post" style="display:block;"><input type="text" name="titulo" value="<?= label('tituloArchivos'); ?>"><textarea name="miHtml">' + html + '</textarea></form>');
            document.forms['form'].submit();
        });

        $('#opciones-seleccionados-PDF').on("click", function(){
            var informacionSistema = '<div id="informacionSistema"><div id="linkPagina"><a href="<?=base_url()?>"><?= label('link_paginaInicial'); ?></a></div><span class="numeracion"></span></div>';
            var encabezado = '<div id="encabezado"><?= label('tituloArchivos'); ?></div>';
            var body = encabezado + informacionSistema;
            body += htmlTabla('files', false);
            var html = '<!DOCTYPE html><html><head><title>403 Forbidden</title><link rel="stylesheet" href="<?= base_url() ?>assets/dashboard/css/estiloTablasDescarga.css"></head><body id="hojaPDF">';
            html +=  body + '</body></html>';
            $('#inset_form').html('<form  action="<?=base_url()?>ManejadorPDF/tablaDescarga" name="form" method="post" style="display:block;"><input type="text" name="titulo" value="<?= label('tituloArchivos'); ?>"><textarea name="miHtml">' + html + '</textarea></form>');
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

<div id="agregarArchivo" class="modal">
    <?php $this->load->helper('form'); ?>
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <?php echo form_open_multipart(base_url().'proveedores/agregarArchivo/'.$idPersonaEncriptado,
            array('id' => 'persona-archivo', 'method' => 'POST', 'class' => 'col s12')); ?>
            <div class="col s12" style="padding: 0;">
                <div class="file-field col s12" style="padding: 0;">
                    <label for="persona_archivo"><?= label('formPersona_archivo'); ?></label>

                    <div class="file-field input-field col s12" style="padding: 0;">
                        <input style="margin-left: 18% !important;width: 80% !important;"
                               name="persona_archivo" class="file-path" type="text" readonly/>

                        <div class="btn" data-toggle="tooltip" title="<?= label('tooltip_examinar') ?>" style="top: -15px;">
                            <span><i class="mdi-action-search"></i></span>
                            <input style="padding-right: 100px;" id="userfile" type="file" name="userfile" accept=""/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <label for="archivo_descripcion" style="float: left;text-align: left;"><?= label('archivo_descripcion'); ?></label>
                <textarea id="archivo_descripcion" name="archivo_descripcion" class="materialize-textarea" rows="3" style="padding: 0.6rem 0 1.6rem;"></textarea>
            </div>
            <div class="input-field col s12 envio-formulario" style="margin-bottom: 30px;">
                <button id="subir_archivo" class="btn" type="submit" value="<?= label('archivo_upload'); ?>"
                        name="action"><?= label('persona_subirArchivo'); ?></button>
            </div>
        </form>
    </div>
</div>
<div id="eliminarArchivo" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('clientes_archivoEliminar'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <div id="botonEliminar">
            <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>
<div id="eliminarArchivosSeleccionados" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('clientes_archivosSeleccionadosEliminar'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <div id="botonEliminar" title="files">
            <a href="#" class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>
<!--Fin lista modals -->








