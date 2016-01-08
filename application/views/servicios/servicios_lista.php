<div style="display: none" id="inset_form"></div>

<!-- START CONTENT -->
<section id="content">

    <!--start container-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloServicios'); ?></h1>
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
                                            <div class="col s12 m12 l12">
                                                <div class="agregar_nuevo">
                                                    <a id="btn_agregarNuevo" class="btn btn-default">
                                                        <?= label('agregar_servicio'); ?>
                                                    </a>
                                                </div>
                                                <table id="servicios-tabla-lista" cellspacing="0"
                                                       class="data-table-information responsive-table display">
                                                    <thead>
                                                        <tr>
                                                            <th style="text-align: center;">
                                                                <input class="filled-in checkbox checkall" type="checkbox"
                                                                       id="checkbox-all"
                                                                       onclick="toggleChecked(this.checked)"/>
                                                                <label for="checkbox-all"></label>
                                                            </th>
                                                            <th><?= label('Servicio_tablaCodigo'); ?></th>
                                                            <th><?= label('Servicio_tablaNombre'); ?></th>
                                                            <th><?= label('Servicio_tablaDescripcion'); ?></th>
                                                            <th><?= label('Servicio_tablaPrecio'); ?></th>
                                                            <th><?= label('Servicio_tablaOpciones'); ?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    if(isset($lista)) {
                                                        if($lista != false) {
                                                            $contador = 0;
                                                            foreach ($lista as $fila) {
                                                                $idEncriptado = encryptIt($fila['idServicio']);
                                                                $codigo = $fila['codigo'];
                                                                $nombre = $fila['nombre'];
                                                                $descripcion = $fila['descripcion'];
                                                                $utilidad = $fila['utilidad'];
                                                                $horasServicio = $fila['cantidadHoras'];
                                                                $tipoTiempo = $fila['idTiempo'];
                                                                $gastosVariables = $fila['gastosVariables'];
                                                                $total = $fila['total']; ?>

                                                                <tr id="fila<?= $contador ?>" data-idElemento="<?= $idEncriptado ?>">
                                                                    <td style="text-align: center;">
                                                                        <input type="checkbox" class="filled-in checkbox" id="<?= $idEncriptado; ?>"/>
                                                                        <label for="<?= $idEncriptado; ?>"></label>

                                                                        <input id="horasServicio_<?= $contador; ?>" type="text" style="display: none;" value="<?= $horasServicio; ?>">
                                                                        <input id="tipoTiempoServicio_<?= $contador; ?>" type="text" style="display: none;" value="<?= $tipoTiempo; ?>">
                                                                        <input id="gastosVariablesServicio_<?= $contador; ?>" type="text" style="display: none;" value="<?= $gastosVariables; ?>">
                                                                        <input id="utilidadServicio_<?= $contador; ?>" type="text" style="display: none;" value="<?= $utilidad; ?>">

                                                                        <input id="idServicio_<?= $contador; ?>" type="text" style="display: none;" value="<?= $fila['idServicio']; ?>">
                                                                    </td>
                                                                    <td><?= $codigo; ?></td>
                                                                    <td><a href="<?= base_url() ?>servicios/editar/<?= $idEncriptado; ?>"><?= $nombre; ?></a></td>
                                                                    <td><?= $descripcion; ?></td>
                                                                    <td><span class="moneda_signo"></span><span id="precioServicio_<?= $contador; ?>"></span></td>
                                                                    <td>
                                                                        <ul id="dropdown-servicio<?= $contador; ?>" class="dropdown-content">
                                                                            <li>
                                                                                <a href="<?= base_url(); ?>servicios/editar/<?= $idEncriptado; ?>"
                                                                                   class="-text"><?= label('menuOpciones_editar') ?></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#eliminarServicio" class="-text modal-trigger confirmarEliminar" data-id-eliminar="<?= $idEncriptado ?>"
                                                                                   data-fila-eliminar="fila<?= $contador?>"><?= label('menuOpciones_eliminar') ?></a>
                                                                            </li>
                                                                        </ul>
                                                                        <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                           href="#" data-activates="dropdown-servicio<?= $contador++; ?>">
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

    <a id="btn_errorHoras" href="#mensajeHorasIncompletas" style="display: none;" class="modal-trigger"></a>
    <a id="btn_agregarServicio" href="<?= base_url() ?>servicios/agregar" style="display: none;"></a>
</div>
<!-- END CONTENT-->

<!--Script para manejo de tabla y checks-->
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

        $('#eliminarServicio #botonEliminar').on('click', function () {
            event.preventDefault();
            $.ajax({
                data: {idEliminar : idEliminar},
                url:   '<?=base_url()?>servicios/eliminar',
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
        $('#servicios-tabla-lista').dataTable( {
            'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0, -1] //desactiva en primer y última columna opción de ordenar
            }]
        });
    });
    $(document).ready(function () {
        $('table#servicios-tabla-lista thead th:first').removeClass('sorting_asc').addClass('sorting_disabled');
        $('table#servicios-tabla-lista thead th:nth-child(2)').removeClass('sorting').addClass('sorting_asc');
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
                        url:   '<?=base_url()?>servicios/eliminar',
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
            var tableBody = $('#servicios-tabla-lista').find('tbody tr[role=row] input[type=checkbox]');
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
            tablaHtml = htmlTabla('servicios-tabla-lista', true);
            Popup(tablaHtml);
        });

        function Popup(data)
        {
            // var mywindow = window.open('', 'my div', 'height=400,width=600');
            var mywindow = window.open('', 'my div', '');
            mywindow.document.write('<html><head><title><?= label('tituloServicios'); ?></title>');
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
            var html = htmlTabla('servicios-tabla-lista', false);
            $('#inset_form').html('<form  action="<?=base_url()?>ManejadorExcel/tablaDescarga" name="form" method="post" style="display:block;"><input type="text" name="titulo" value="<?= label('tituloServicios'); ?>"><textarea name="miHtml">' + html + '</textarea></form>');
            document.forms['form'].submit();
        });

        $('#opciones-seleccionados-PDF').on("click", function(){
            var informacionSistema = '<div id="informacionSistema"><div id="linkPagina"><a href="<?=base_url()?>"><?= label('link_paginaInicial'); ?></a></div><span class="numeracion"></span></div>';
            var encabezado = '<div id="encabezado"><?= label('tituloServicios'); ?></div>';
            var body = encabezado + informacionSistema;
            body += htmlTabla('servicios-tabla-lista', false);
            var html = '<!DOCTYPE html><html><head><title>403 Forbidden</title><link rel="stylesheet" href="<?= base_url() ?>assets/dashboard/css/estiloTablasDescarga.css"></head><body id="hojaPDF">';
            html +=  body + '</body></html>';
            $('#inset_form').html('<form  action="<?=base_url()?>ManejadorPDF/tablaDescarga" name="form" method="post" style="display:block;"><input type="text" name="titulo" value="<?= label('tituloServicios'); ?>"><textarea name="miHtml">' + html + '</textarea></form>');
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
<!--Script para manejo de precio de servicios-->
<script type="text/javascript">
    <?php
        $js_array = json_encode($lista);
        echo "var arrayServicios =". $js_array .";";
    ?>
    var totalGastosFijosAnuales = 0;
    var totalHorasLaborales = 0;

    function gastosFijosAnuales() {
        $.ajax({
            type: 'POST',
            url: '<?= base_url(); ?>gastos/gastosFijos',
            data: {  },
            async: false,
            success: function(response)
            {
                var $arrayGastosFijos = $.parseJSON(response);

                var totalGastosFijos = 0;
                for(var i = 0; i < $arrayGastosFijos.length; i++) {
                    var gastoFijo = $arrayGastosFijos[i];
                    var monto = 0;
                    switch (gastoFijo['formaPago']) {
                        case '1':
                            monto = parseFloat(gastoFijo['monto']) * 8760;
                            break;
                        case '2':
                            monto = parseFloat(gastoFijo['monto']) * 365;
                            break;
                        case '3':
                            monto = parseFloat(gastoFijo['monto']) * 52.1429;
                            break;
                        case '4':
                            monto = parseFloat(gastoFijo['monto']) * 12;
                            break;
                        case '5':
                            monto = parseFloat(gastoFijo['monto']);
                            break;
                    }
                    totalGastosFijos += monto;
                }

                totalGastosFijosAnuales = totalGastosFijos;
            }
        });
    }
    function horasLaborales() {
        $.ajax({
            type: 'post',
            url: '<?= base_url(); ?>horas/cargarDatos',
            data: {  },
            async: false,
            success: function(response)
            {
                if(response != 'null') {
                    var datosHoras = $.parseJSON(response);

                    var diasAnno = 365;
                    var finesSemana = parseFloat(datosHoras['finesSemana']);
                    var festivosObligatorios = parseFloat(datosHoras['festivosObligatorios']);
                    var incluirNoObligatorios = datosHoras['incluirNoObligatorios'];
                    var festivosNoObligatorios = parseFloat(datosHoras['festivosNoObligatorios']);
                    var vacaciones = parseFloat(datosHoras['vacaciones']);
                    var promedioBajas = parseFloat(datosHoras['promedioBajas']);
                    var promedioHorasDiarias = parseFloat(datosHoras['promedioHorasDiarias']);
                    var cantidadManoObra = parseFloat(datosHoras['cantidadManoObra']);

                    var diasNoFacturables = finesSemana + festivosObligatorios + vacaciones + promedioBajas;
                    if(incluirNoObligatorios == 1) {
                        diasNoFacturables += festivosNoObligatorios;
                    }
                    var diasFacturables = (diasAnno - diasNoFacturables).toFixed(2);
                    var totalHorasAnual = (diasFacturables * promedioHorasDiarias * cantidadManoObra).toFixed(2);
                    var promedioHorasMensual = ((diasFacturables / 12) * promedioHorasDiarias * cantidadManoObra).toFixed(2);

                    totalHorasLaborales = totalHorasAnual;
                } else {
                    totalHorasLaborales = 0;
                }
            }
        });
    }
    function horasServicio(numeroFila) {
        var tiempoServicio = parseFloat($('#horasServicio_' + numeroFila).val());
        var tipoTiempo = $('#tipoTiempoServicio_' + numeroFila).val();

        var cantidadHoras = 0;
        switch (tipoTiempo) {
            case '1':
                cantidadHoras = tiempoServicio;
                break;
            case '2':
                cantidadHoras = tiempoServicio * 24;
                break;
            case '3':
                cantidadHoras = tiempoServicio * 168;
                break;
            case '4':
                cantidadHoras = tiempoServicio * 730.001;
                break;
            case '5':
                cantidadHoras = tiempoServicio * 8760;
                break;
        }
        return cantidadHoras;
    }
    function impuestosServicio(idServicio, precioServicio) {
        var impuestosAgregados = 0;
        for (var j = 0; j < arrayServicios.length; j++) {
            var servicio = arrayServicios[j];
            if (servicio['idServicio'] == idServicio) {
                var impuestos = servicio['impuestos'];
                for(var i = 0; i < impuestos.length; i++) {
                    var valorImpuesto = parseFloat(impuestos[i]['valor']);
                    impuestosAgregados += precioServicio * (valorImpuesto / 100);
                }
            }
        }
        return impuestosAgregados;
    }

    function calcularPrecio(numeroFila) {
        var idServicio = parseFloat($('#idServicio_' + numeroFila).val());

        gastosFijosAnuales();
        horasLaborales();
        var totalGastosV = parseFloat($('#gastosVariablesServicio_' + numeroFila).val());
        var totalGastos = totalGastosFijosAnuales;
        if(totalGastosV > 0) {
            totalGastos += totalGastosV;
        }

        var costoHora = totalGastos / totalHorasLaborales;
        var cantidadHoras = horasServicio(numeroFila);
        var margenUtilidad = parseFloat($('#utilidadServicio_' + numeroFila).val()) / 100;

        var precioServicio = (cantidadHoras * costoHora) / (1 - margenUtilidad);

        var impuestosAgregados = impuestosServicio(idServicio, precioServicio);
        precioServicio += impuestosAgregados;

        precioServicio = precioServicio.toFixed(2);

        $('#precioServicio_' + numeroFila).text(precioServicio);
    }

    $(document).ready(function () {
        var numeroServicios = arrayServicios.length;
        for(var i = 0; i < numeroServicios; i++) {
            calcularPrecio(i);
        }
    });

    $(document).on('click', '#btn_agregarNuevo', function () {
        horasLaborales();
        if(totalHorasLaborales != 0) {
//            $('#btn_agregarServicio').click();
            window.location.href = "<?= base_url() ?>servicios/agregar";
        } else {
            document.getElementById('mensajeHorasIncompletas').style.visibility = 'visible';
            $('#btn_errorHoras').click();
        }
    });
    $(document).on('click', '#btn_completarHorasMensaje', function () {
        document.getElementById('mensajeHorasIncompletas').style.visibility = 'hidden';
        $('#btn_horasLaborales').click();
    });
    $(document).on('click', '.lean-overlay', function () {
        document.getElementById('mensajeHorasIncompletas').style.visibility = 'visible';
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
<div id="mensajeHorasIncompletas" class="modal">
    <div  class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('errorHoras'); ?></p>
    </div>
    <div class="modal-footer">
        <a id="btn_completarHorasMensaje" href="#" class="waves-effect waves-red btn-flat"><?= label('irCompletarHoras'); ?></a>
    </div>
</div>

<div id="eliminarServicio" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarServicio'); ?></p>
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
        <div id="botonEliminar" class="modal-footer black-text" title="servicios-tabla-lista">
            <a href="#"
               class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>
<!--Fin lista modals -->
