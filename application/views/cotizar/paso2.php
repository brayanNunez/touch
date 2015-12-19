
<!-- <button id="botonAgregarFila">Agregar Fila(boton de prueba)</button> -->



<script type="text/javascript">


    

   $(document).ready(function(){


    $('#tablaLineasDetalle').dataTable( {
      "bPaginate": false,
      'aoColumnDefs': [{
               'bSortable': false,
               'aTargets': [0, -1, 6] //desactiva en primer y última columna opción de ordenar
           }],
      <?php
      if (isset($resultado['cotizacion'])) {// se esta editando una cotizacion
        $valor = 'desc';
        if ($resultado['cotizacion']['ascendente']=='1') {
            $valor = 'asc';
        } 
        ?>
            "order": [[<?=$resultado['cotizacion']['columna']?>, "<?=$valor?>" ]],
        <?php
      }
      ?>
      // "aaSorting": [],
      
      "columns": [
            null,
            // { "orderDataType": "dom-text-numeric" },
            { "orderDataType": "dom-select" },
            { "orderDataType": "dom-select" },
            { "orderDataType": "dom-text", type: 'string' },
            // { "orderDataType": "dom-select" },
            { "orderDataType": "dom-text-numeric" },
            { "orderDataType": "dom-text-numeric" },
            null,
            { "orderDataType": "dom-text-numeric" },
            { "orderDataType": "dom-text-numeric" },
            null
        ],
      // "ordering": false,
      "searching": false
    });
    

/* Create an array with the values of all the input boxes in a column */
$.fn.dataTable.ext.order['dom-text'] = function  ( settings, col )
{
    return this.api().column( col, {order:'index'} ).nodes().map( function ( td, i ) {
        return $('input', td).val();
    } );
}
 
/* Create an array with the values of all the input boxes in a column, parsed as numbers */
$.fn.dataTable.ext.order['dom-text-numeric'] = function  ( settings, col )
{
    return this.api().column( col, {order:'index'} ).nodes().map( function ( td, i ) {
        return $('input', td).val() * 1;
    } );
}
 
/* Create an array with the values of all the select options in a column */
$.fn.dataTable.ext.order['dom-select'] = function  ( settings, col )
{
    return this.api().column( col, {order:'index'} ).nodes().map( function ( td, i ) {
        return $('select', td).val();
    } );
}

});



$(document).ready(function(){

    var filaEliminar = null;
   

   $(document).on('click','.confirmarEliminarLinea', function () {
       filaEliminar = $(this).parents('tr');  
   });

     $('#eliminarLinea #botonEliminar').on('click', function () {
            // alert('eliminar');
           event.preventDefault();
           var tipo = filaEliminar.find('.accionAplicada').val();
           if (tipo == '0') {
                var table = $('#tablaLineasDetalle').DataTable();
                table
                .row(filaEliminar)
                .remove()
                .draw();
               cantidadLineas--;
               actualizarCantidad();
           } else{
            filaEliminar.find('.accionAplicada').val('2');
            filaEliminar.fadeOut(function () {
                filaEliminar.hide();
           });

           }
           actualizarTotal();
        });

   });

   

// $(document).on('ready', function(){
    <?php 
    $js_array = json_encode($resultado['servicios']); 
    echo "var arrayServicios =". $js_array .";";

    if (isset($resultado['lineasDetalle'])) {
        $js_array = json_encode($resultado['lineasDetalle']); 
        echo "var arrayLineasDetalle =". $js_array .";";
        ?>

    $(document).on('ready', function(){
        cargarLineasDetalle();
    });

        <?php
    };
    
    ?>  

    

    
    function cargarLineasDetalle(){
        // alert('hola');
        for (var i = 0; i < arrayLineasDetalle.length; i++) {
            
            var linea = arrayLineasDetalle[i];
            agregarFila(1, linea['idLineaDetalle']);//1 porque liena de detalle viene desde la BD
            var numeroFila = i;

            // var numeroFila = $(this).attr('data-fila');
            var select = $('#productoNombre_' + numeroFila);
            select.val(linea['idServicio']);
            select.trigger("chosen:updated");

            select = $('#productoItem_' + numeroFila);
            select.val(linea['idServicio']);
            select.trigger("chosen:updated");

            $('#descripcion_' + numeroFila).val(linea['descripcion']);
            cargarImpuestosPorServicio(numeroFila, linea['impuestos']);
                      
            $('#cantidad_' + numeroFila).val(linea['cantidad']);  
            $('#utilidad_' + numeroFila).val(linea['utilidad']);

            $('#precio_' + numeroFila).val(linea['precioUnidad']);
            $('#subTotal_' + numeroFila).val(linea['total']);

            var precioPropio = linea['precioUnidadPropio'];
            $('#precioUnidadPropio_' + numeroFila).val(precioPropio);//aqui

            

            for (var j = arrayServicios.length - 1; j >= 0; j--) {
                var servicio = arrayServicios[j];
                if (servicio['idServicio'] == linea['idServicio']) {
                    $('#cantidadHorasLinea_' + numeroFila).val(servicio['cantidadHoras']);
                    $('#tipoTiempoLinea_' + numeroFila).val(servicio['idTiempo']);
                    $('#gastosVariablesLinea_' + numeroFila).val(servicio['gastosVariables']);
                }
            }
            var precioActual =  calcularPrecioActualizado(numeroFila);
            // alert('comparacion: ' +  precioActual + ', '+ precioPropio);
            if (precioActual != precioPropio) {
                // alert('generando link');

                var precio = $('#precio_' + numeroFila).val();
                var row = $('#precio_' + numeroFila).parent('row');
                html  = row.html();
                html = '<a data-fila="'+numeroFila+'" id="actualizar_'+numeroFila+'" href = "#actualizarPrecio" class="modal-trigger linkActualizar">'+html+'<a>';
                row.empty();
                row.append(html);
                $('#precio_' + numeroFila).val(precio);
            } 
        };
    }

    
    var filaLinkActualizar = '';
    $(document).on('click', '.linkActualizar', function(){
        filaLinkActualizar = $(this).attr('data-fila');
    });

    $(document).on('ready',function(){
        $('#aceptarActualizar').on('click', function(){
            var numeroFila = filaLinkActualizar;
            $('#actualizarPrecio').closeModal();
            var precioActual =  calcularPrecioActualizado(numeroFila);
            $('#precioUnidadPropio_' + numeroFila).val(precioActual);//aqui
            calcularPrecioPropio(numeroFila);

            $('#actualizar_' + numeroFila).attr('href', '').css({'cursor': 'pointer', 'pointer-events' : 'none', 'color' : 'black'});
            actualizarTotal();

        });


    });

    function modificarMontos(){
        // alert('modificar moneda');
        $('.subTotal').each(function(){

            var fila = $(this).attr('data-numeroFila');
            var monto = $(this).val();
            var accionAplicada = $('#linea_' + fila).val();
            if ($('#productoNombre_' + fila).val() != null && accionAplicada != 2) {
                // alert('entre');
                calcularPrecioPropio(fila);
            };
            
        });

        // calcularPrecioPropio();//aqui
        actualizarTotal();
    }


    function actualizarTotal(){
        var sumatoria = 0;
        $('.subTotal').each(function(){
            var fila = $(this).attr('data-numeroFila');
            var accionAplicada = $('#linea_' + fila).val();
            if ($('#productoNombre_' + fila).val() != null && accionAplicada != 2) {
                sumatoria += parseFloat($(this).val());
            };
            
        });
        var descuento = parseFloat($('#paso2_descuentoCotizacion').val());
        var total = sumatoria - (sumatoria * (descuento/100));
        total = total.toFixed(2);
        $('#paso2_totalCotizacion').val(total);
    }





    function cargarDatosFila(idServicio, numeroFila){
        // alert(idServicio + ', ' + numeroFila);
        for (var i = arrayServicios.length - 1; i >= 0; i--) {
            var servicio = arrayServicios[i];
            if (servicio['idServicio'] == idServicio) {
                $('#descripcion_' + numeroFila).val(servicio['descripcion']);
                $('#precio_' + numeroFila).val(servicio['total']);  
                $('#cantidad_' + numeroFila).val(1);  
                cargarImpuestosPorServicio(numeroFila, servicio['impuestos']);
                $('#utilidad_' + numeroFila).val(servicio['utilidad']);  
                // alert(servicio['nombre'] + ', ' + servicio['descripcion']);

                $('#cantidadHorasLinea_' + numeroFila).val(servicio['cantidadHoras']);
                $('#tipoTiempoLinea_' + numeroFila).val(servicio['idTiempo']);
                $('#gastosVariablesLinea_' + numeroFila).val(servicio['gastosVariables']);
            }
        };
        calcularPrecio(numeroFila);
        $('#actualizar_' + numeroFila).attr('href', '').css({'cursor': 'pointer', 'pointer-events' : 'none', 'color' : 'black'});
        actualizarTotal();
    }
// });


    function actualizarCantidad(){
        $('#cantidadLineasDetalle').val(cantidadLineas);

    }

    var cantidadLineas = 0;
    var contadorFilas = cantidadLineas;

    $(document).on('ready', function(){
        $('#botonAgregarFila').on('click', function(){
            agregarFila(0, null);// 0 porque es nueva
        });
    });


    function verificarExiste(valorVerificar, numeroFilaVerificar){
        // alert(valorVerificar + ',  ' + numeroFilaVerificar);
        var existe = false;
        $('.nombreServicio').each(function(){ 
            var valor = $(this).val();
            var numeroFila = $(this).data('fila');
            var estadoFila = $('#linea_' + numeroFila).val();

            // alert('fila: ' + numeroFila + ', estado' + estadoFila + 'valor ' + valor);
            if (estadoFila != 2) {
                if (numeroFilaVerificar != numeroFila && valorVerificar == valor) {
                    existe = true;
                }
            }
        });
        return existe;
    }


    function agregarFila(accionAplicada, idLinea){
        cantidadLineas++;
        actualizarCantidad();
        var check = '<td>'+
            '<div style="text-align: center;">'+
                '<input class="accionAplicada" style="display:none" name="linea_'+contadorFilas+'" id="linea_'+contadorFilas+'" type="text" value="'+ accionAplicada + '">'+ 
                '<input style="display:none" name="idLinea_'+contadorFilas+'" type="text" value="'+ idLinea +'">'+
                '<input style="display:none" id="cantidadHorasLinea_'+contadorFilas+'" name="cantidadHorasLinea_'+contadorFilas+'" type="text" value="'+ contadorFilas +'">'+
                '<input style="display:none" id="tipoTiempoLinea_'+contadorFilas+'" name="tipoTiempoLinea_'+contadorFilas+'" type="text" value="'+ contadorFilas +'">'+
                '<input style="display:none" id="gastosVariablesLinea_'+contadorFilas+'" name="gastosVariablesLinea_'+contadorFilas+'" type="text" value="'+ contadorFilas +'">'+
                '<input style="display:none" id="precioUnidadPropio_'+contadorFilas+'" name="precioUnidadPropio_'+contadorFilas+'" type="text" value="">'+
                '<input style="display:none" class="campo_numeroFila" id="numeroLinea_'+contadorFilas+'" name="numeroLinea_'+contadorFilas+'" type="text" value="'+ contadorFilas +'">'+

                '<input type="checkbox" class="filled-in checkbox" id="checkbox_linea'+contadorFilas+'"/>'+
                '<label for="checkbox_linea'+contadorFilas+'"></label>'+
            '</div>'+
        '</td>';

        var item = '<td>'+
            '<row>'+
                '<div id="contenedorSelectProductoItem'+contadorFilas+'" name="item_'+contadorFilas+'" class="contenedorSelectProductoItem">'+
                '</div>'+
            '</row>'+
        '</td>';

        var nombre ='<td>'+
            '<row>'+
                '<div id="contenedorSelectProductoNombre'+contadorFilas+'" name="nombre_'+contadorFilas+'" class="contenedorSelectProductoNombre">'+
                '</div>'+
            '</row>'+
        '</td>';

        var des = '<td>'+
            '<row>'+
                '<input class="descripcion" value="" type="text" id="descripcion_'+contadorFilas+'" name="descripcion_'+contadorFilas+'">'+
            '</row>'+
        '</td>';

        var precio ='<td>'+
            '<row>'+
                '<input class="precio" value="" type="text" id="precio_'+contadorFilas+'" name="precio_'+contadorFilas+'" readonly="true">'+
            '</row>'+
        '</td>';

        var cantidad = '<td>'+
            '<row>'+
                '<input class="campo_cantidad" value="" type="number" id="cantidad_'+contadorFilas+'" name="cantidad_'+contadorFilas+'">'+
            '</row>'+
        '</td>';

        var impuestos = '<td>'+
            '<row>'+
                '<div id="impuestosProducto'+contadorFilas+'" class="example tags_Impuestos">'+
                    '<div class="bs-example">'+
                        '<input class="campo_impuestos" id="impuestos_'+contadorFilas+'" name="impuestos_'+contadorFilas+'" placeholder="<?= label('formProducto_anadirImpuesto'); ?>" type="text"/>'+
                    '</div>'+
                '</div>'+
            '</row>'+
        '</td>';

        var utilidad ='<td>'+
            '<row>'+
                '<input class="utilidad" type="number" id="utilidad_'+contadorFilas+'" name="utilidad_'+contadorFilas+'">'+
            '</row>'+
        '</td>';

        var total ='<td>'+
            '<row>'+
                '<input data-numeroFila="'+contadorFilas+'" class="subTotal" value="" type="text" id="subTotal_'+contadorFilas+'" name="subTotal_'+contadorFilas+'">'+
            '</row>'+
        '</td>';

        var eliminar = '<td>'+
            '<a href="#eliminarLinea" data-id-eliminar="'+contadorFilas+'" class="-text modal-trigger confirmarEliminarLinea boton-opciones btn-flat white-text"><?= label('menuOpciones_eliminar'); ?></a>';
            // '<div class="btn-linea-eliminar">'+
            //     '<a class="confirmarEliminarLinea" data-linea-eliminar="'+contadorFilas+'" title="<?= label('paso2_lineaEliminar') ?>"><i class="mdi-action-delete small" style="color: black;"></i></a>'+
            // '</div>'+
        '</td>';


        $('#tablaLineasDetalle').dataTable().fnAddData([
            check,
            item,
            nombre,
            des,
            precio,
            cantidad,
            impuestos,
            utilidad,
            total,
            eliminar]);

        
        // $('#contenedorLineas').append(html);
        cargarTags_Impuestos(contadorFilas);
        actualizarSelectServiciosNuevos(contadorFilas);
        // generarAutocompletarProductoNombre(contadorFilas);aqui
        // generarAutocompletarProductoItem(contadorFilas);
        generarListas();
        // generarListasBotones();
        $('.modal-trigger').leanModal(); 

        contadorFilas++;
    }



// function generarListasBotones(){

//   $('.boton-opciones').sideNav({
//   // menuWidth: 0, // Default is 240
//       edge: 'right', // Choose the horizontal origin
//       closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
//     }
//   );

//   $('.dropdown-button').dropdown({
//       inDuration: 300,
//       outDuration: 225,
//       constrain_width: true, // Does not change width of dropdown to that of the activator
//       hover: false, // Activate on hover
//       gutter: 0, // Spacing from edge
//       belowOrigin: true, // Displays dropdown below the button
//       alignment: 'left' // Displays dropdown with edge aligned to the left of button
//     }
//   );

//   // $(".boton-opciones").sideNav();


// }

</script>

<div id="centered-table">
    <div class="row">
        <div class="col s12 m12 l12">
            <!-- <input type="text" class="tags"> -->

            <div id="contenerdorTablaDetalles">
                <form id="formLineasDetalle">
                    <table id="tablaLineasDetalle"  class="centered">
                    <!-- <table id="cotizacion1-detalles" class="centered"> -->
                        <thead>
                            <tr>
                                <th data-indice-columna="0" style="text-align: center;">
                                    <input class="filled-in checkbox checkall" type="checkbox" id="checkbox-all"
                                           onclick="toggleChecked(this.checked)"/>
                                    <label for="checkbox-all"></label>
                                </th>
                                <th data-indice-columna="1">
                                    <?= label('tablaLineasDetalle_item'); ?>
                                </th>
                                <th  data-indice-columna="2">
                                    <?= label('tablaLineasDetalle_nombre'); ?>
                                </th>
                                <th  data-indice-columna="3">
                                    <?= label('tablaLineasDetalle_descripcion'); ?>
                                </th>
                                <th  data-indice-columna="4">
                                    <?= label('tablaLineasDetalle_preciounitario'); ?>
                                </th>
                                <th  data-indice-columna="5">
                                    <?= label('tablaLineasDetalle_cantidad'); ?>
                                </th>
                                <th  data-indice-columna="6">
                                    <?= label('tablaLineasDetalle_impuesto'); ?>
                                </th>
                                <th  data-indice-columna="7">
                                    <?= label('tablaLineasDetalle_utilidad'); ?>
                                </th>
                                <th data-indice-columna="8">
                                    <?= label('tablaLineasDetalle_total'); ?>
                                </th>
                                <th data-indice-columna="9">
                                    <?= label('tablaLineasDetalle_opciones'); ?>
                                </th>
                            </tr>
                        </thead>
                        
                        <input style="display:none" id="cantidadLineasDetalle" name="cantidadLineasDetalle" type="text" value="0">
                        <tbody id="contenedorLineas">

                        </tbody>
                        
                    </table>
                </form>
            </div>
            <br>

            <div>
                <div class="col s12 m6 l7">
                    <!--<div class="col s12">
                        <a href="#agregarServicio" class="modal-trigger opcionesDetalles">Agregar servicio</a>
                    </div>-->
                    <!-- <div class="col s12" style="margin-top: 20px;">
                        <a id="botonAgregarFila" class="btn-default opcionesDetalles btn-newLine">Agregar linea</a>
                    </div> -->

                    <div>
                        <a id="botonAgregarFila" class="btn btn-default"><?= label('paso2_agregarLinea'); ?></a>
                    </div>

                    <div class="tabla-conAgregar tabla-detalles-cotizacion">
                        <a id="opciones-seleccionados-delete"
                           class="modal-trigger waves-effect black-text opciones-seleccionados option-delete-elements"
                           style="visibility: hidden;"
                           href="#eliminarElementosSeleccionados" data-toggle="tooltip"
                           title="<?= label('opciones_seleccionadosEliminar') ?>">
                            <i class="mdi-action-delete icono-opciones-varios"></i>
                        </a>
                    </div>
                </div>
                <div id="resultadoDetalles" class="col s12 m6 l5">
                    <form id="form_resultados">
                        <div class="col s12" style="float: right;">
                            <div class="input-field col s12">
                                <input id="paso2_descuentoCotizacion" name="paso2_descuentoCotizacion" type="number" value="<?php
                                if (isset($resultado['cotizacion'])) {
                                    echo $resultado['cotizacion']['descuento'];
                                } else {
                                    echo 0;
                                }
                                ?>">
                                <label for="paso2_descuentoCotizacion" class=""><?= label('paso2_descuento'); ?></label>
                                <span class="icono-porcentaje-descuento">%</span>
                            </div>
                            <div class="input-field col s12">
                                <input id="paso2_totalCotizacion" name="paso2_totalCotizacion" type="text" readonly="true" value="<?php
                                if (isset($resultado['cotizacion'])) {
                                    echo $resultado['cotizacion']['monto'];
                                }
                                ?>">
                                <label for="paso2_totalCotizacion"><?= label('paso2_total'); ?></label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<!--Funciones de checkboxes y eliminar-->


<script>

    function cargarTags_Impuestos(contadorFilas){
        var Impuestos = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('nombre'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // prefetch: 'http://localhost/Proyectos/touch/assets/dashboard/js/json/Impuestos.json'
            prefetch: {
                url: '<?=base_url()?>Impuesto/impuestosSugerencia',
                ttl: 1000
            }
        });

        Impuestos.initialize();

        elt = $('#impuestos_' + contadorFilas);
        elt.tagsinput({
            itemValue: 'idImpuesto',
            itemText: 'nombre', 
            typeaheadjs: {
                name: 'Impuestos',
                displayKey: 'nombre',
                source: Impuestos.ttAdapter()
            }
        });
    }

    function cargarImpuestosPorServicio(numeroFila, impuestos){
        $('#impuestos_'+ numeroFila).tagsinput('removeAll');
        for (var i = impuestos.length - 1; i >= 0; i--) {
            $('#impuestos_'+ numeroFila).tagsinput('add', impuestos[i]);
        };
    }

// Esta es la solución para que las columnas se ordenaran cuando se carga la tabla ya que mediante [["order": 2, "asc”]] 
//en la configuración del  datatable no sirve correctamente. La solución consiste en hacer doble click sobre la columna que debe ordenar la tabla.  
$(document).on('ready', function(){
     <?php
      if (isset($resultado['cotizacion'])) {// se esta editando una cotizacion
        $valor = 'desc';
        if ($resultado['cotizacion']['ascendente']=='1') {
        ?>
            $('.sorting_asc').click();
            $('.sorting_desc').click();
        <?php
      } else {
        ?>
            $('.sorting_desc').click();
            $('.sorting_asc').click();
        <?php
      }
  } else {//  cotizacion nueva
    ?>
     agregarFila(0, null);
    <?php

  }
      ?>      
});
    


</script>


<!-- Inicio lista modals -->
<div id="agregarServicio" class="modal" style="width: 80%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content" style="padding: 0 24px;">
        <div class="row">
            <h5 style="float: left;"><?= label('paso2_agregarServicio'); ?></h5>
        </div>
        <form id="form_servicio_cotizar" action="<?= base_url(); ?>servicios/insertar" method="POST" class="col s12">
            <div class="input-field col s12">
                <input id="servicio_codigo" name="servicio_codigo" type="text">
                <label for="servicio_codigo"><?= label('formServicio_codigo'); ?></label>
            </div>
            <div class="input-field col s12">
                <input id="servicio_nombre" name="servicio_nombre" type="text">
                <label for="servicio_nombre"><?= label('formServicio_nombre'); ?></label>
            </div>
            <div class="input-field col s12">
                <textarea length="200" maxlength="200" id="servicio_descripcion" name="servicio_descripcion"
                          class="materialize-textarea" rows="4"></textarea>
                <label for="servicio_descripcion"><?= label('formServicio_descripcion'); ?></label>
            </div>
            <div class="inputTag col s12">
                <label for="impuestosServicio"><?= label('formProducto_impuestos'); ?></label>
                <br>
                <div id="impuestosServicio" class="example tags_Impuestos">
                    <div class="bs-example">
                        <input id="servicio_impuestos" name="servicio_impuestos" placeholder="<?= label('formProducto_anadirImpuesto'); ?>" type="text"/>
                    </div>
                </div>
                <br>
            </div>

            <!-- Inicio fases-->
            <div class="row">
                <div class="input-field col s12 m6 l6 inputSelector" >
                    <label for="servicioFase"><?= label('formServicio_seleccioneFase'); ?></label>
                    <br>
                    <select data-incluirBoton="0" placeholder="seleccionar" data-tipo="servicioFase" id="servicioFase" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("servicio_elegirFase"); ?>" class="browser-default chosen-select" style="width:350px;" tabindex="2">
                    </select>
                </div>
                <div class="input-field col s12 m6 l6 inputSelector" >
                    <label for="servicio_subFase"><?= label('formServicio_seleccioneSubfase'); ?></label>
                    <br>
                    <select disabled='disabled' data-incluirBoton="0" placeholder="seleccionar" data-tipo="servicio_subFase" id="servicio_subFase" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("servicio_elegirSubFase"); ?>" class="browser-default chosen-select" style="width:350px;" tabindex="2">
                    </select>
                </div>
                <div class="input-field col s12 m12 l12" style="margin-top: 5px;">
                    <!-- <a href="" style="text-decoration: underline;float: left;"><?= label('formServicio_agregarTodasFases'); ?></a> -->
                    <a id="agregarFase" class="btn" style="display: block;margin: 5px auto;width: 40%;"><?= label('agregar'); ?></a>
                </div>
                <div class="input-field col s12 m6 l3 inputSelector" >
                    <label for="servicioFase"><?= label('formServicio_cotizarPor'); ?></label>
                    <br>
                    <select data-incluirBoton="0" placeholder="seleccionar" data-tipo="servicioTiempo" id="servicioTiempo" name="servicioTiempo" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("servicio_elegirTiempo"); ?>" class="browser-default chosen-select" style="width:350px;" tabindex="2">
                        <option value="0" disabled selected style="display:none;"><?= label("servicio_elegirTiempo"); ?></option>
                        <!-- <option value="nuevo"><?= label("agregarNuevo"); ?></option> -->
                        <?php
                        if (isset($tiempos)) {
                            foreach ($tiempos as $tiempo) {
                                ?>
                                <option value="<?=$tiempo['idTiempo']?>"><?=$tiempo['nombre']?></option>
                                <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <input style="display:none" id="cantidadFases" name="cantidadFases" type="text" value="0">
                <div class="col s12 table-responsive">
                    <table id="tabla-servicio" class="table striped" cellspacing="0">
                        <thead>
                        <tr>
                            <th><?= label('tablaServicio_codigo'); ?></th>
                            <th><?= label('tablaServicio_fase'); ?></th>
                            <th><?= label('tablaServicio_descripcion'); ?></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th style="display:none"></th>
                            <th><?= label('tablaServicio_cantidad'); ?></th>
                            <th><?= label('tablaServicio_opciones'); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Inicio gastos-->
            <div class="row" style="">
                <div class="input-field col s12" style="margin-top: 0;">
                    <input class="filled-in" type="checkbox" id="servicio_incluirGastosVariables" name="servicio_incluirGastosVariables"/>
                    <label for="servicio_incluirGastosVariables" style="float: left;"><?= label('servicio_incluirGastosVariables'); ?></label>
                </div>
                <div id="servicio_gastosVariables" style="display: none;padding: 0;">
                    <div class="col s12 m6 l3" style="margin-top: 20px;">
                        <div class="input-field col s12 inputSelector">
                            <label for="agregarGastos_buscar"><?= label('agregarGatos_buscar'); ?></label>
                            <br>
                            <select data-placeholder="<?= label('formServicio_seleccioneGasto'); ?>" data-incluirBoton="0" id="agregarGastos_buscar" name="agregarGastos_buscar" class="browser-default chosen-select">
                                <option value=""></option>
                                <?php
                                if(isset($gastos)) {
                                    foreach ($gastos as $gasto) { ?>
                                        <option value="<?= $gasto['idGasto']; ?>"><?= $gasto['nombre']; ?></option>
                                        <?php
                                    }
                                } ?>
                            </select>
                        </div>
                        <div>
                            <div class="col s12">
                                <a id="busqueda_masOpciones" style="text-decoration: underline;float: right;cursor: pointer;margin-bottom: 20px;">
                                    <?= label('agregarGastos_masOpciones'); ?></a>
                            </div>
                            <div id="opcionesBusquedaGasto" class="col s12" style="display: none;margin-bottom: 20px;padding: 0;">
                                <div class="input-field col s12 inputSelector">
                                    <label for="agregarGastos_categoria"><?= label('agregarGastos_categoria'); ?></label>
                                    <br>
                                    <select data-placeholder="<?= label('formServicio_seleccioneCategoria'); ?>" data-tipo="servicioCategoriaGasto" data-incluirBoton="0" id="agregarGastos_categoria" name="agregarGastos_categoria" class="browser-default chosen-select">
                                        <option value=""></option>
                                        <?php
                                        if(isset($categorias)) {
                                            foreach ($categorias as $categoria) { ?>
                                                <option value="<?= $categoria['idCategoriaPersona']; ?>"><?= $categoria['nombre']; ?></option>
                                                <?php
                                            }
                                        } ?>
                                    </select>
                                </div>
                                <div class="input-field col s12 inputSelector">
                                    <label for="agregarGastos_proveedor"><?= label('agregarGastos_proveedor'); ?></label>
                                    <br>
                                    <select data-placeholder="<?= label('formServicio_seleccioneProveedor'); ?>" data-tipo="servicioPersonaGasto"  data-incluirBoton="0" id="agregarGastos_proveedor" name="agregarGastos_proveedor" class="browser-default chosen-select">
                                    </select>
                                </div>
                                <div class="input-field col s12 inputSelector">
                                    <label for="agregarGastos_gasto"><?= label('agregarGastos_gasto'); ?></label>
                                    <br>
                                    <select data-placeholder="<?= label('formServicio_seleccioneGasto'); ?>" data-incluirBoton="0" id="agregarGastos_gasto" name="agregarGastos_gasto" class="browser-default chosen-select">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a class="waves-effect btn" id="btn_agregarGasto"
                               style="width: 200px;float: none;display: block;margin: 0 auto;text-align: center;color: white;cursor:pointer;">
                                <?= label('agregarGatos_agregar'); ?>
                            </a>
                        </div>
                    </div>
                    <div class="col s12 m12 l9">
                        <div class="table-responsive">
                            <table id="gastos-tabla-lista" class="table display striped" cellspacing="0">
                                <thead>
                                <tr>
                                    <th><?= label('tituloGastos_codigo'); ?></th>
                                    <th><?= label('tituloGastos_gasto'); ?></th>
                                    <th><?= label('tituloGastos_proveedor'); ?></th>
                                    <th><?= label('tituloGastos_proveedorCategoria'); ?></th>
                                    <th><?= label('tituloGastos_tiempo'); ?></th>
                                    <th><?= label('tituloGastos_monto'); ?></th>
                                    <th><?= label('tituloGastos_cantidad'); ?></th>
                                    <th><?= label('tituloGastos_subtotal'); ?></th>
                                    <th><?= label('tituloGastos_opciones'); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><?= label('modalServicio_total'); ?></td>
                                    <td><span class="moneda_signo"></span><span class="total_gastos_variables">0</span></td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col s12" style="margin-top: 20px;">
                        <h5><?= label('servicioGastos_total'); ?>: <span class="moneda_signo"></span><span class="total_gastos_variables">0</span></h5>
                    </div>
                </div>
            </div>

            <div class="input-field col offset-s6 s6">
                <input readonly id="cantidadTotal" name="servicio_cantidadTotal" type="number" value="0">
                <label for="cantidadTotal"><?= label('formServicio_totalTiempo'); ?> <span id='unidadTiempo'></span></label>
            </div>
            <div class="input-field col offset-s6 s6">
                <input id="servicio_utilidad" name="servicio_utilidad" type="number" min="0" value="0">
                <label for="servicio_utilidad"><?= label('formServicio_utilidad'); ?></label>
            </div>
            <div class="input-field col offset-s6 s6">
                <input id="servicio_total" name="servicio_total" type="number" value="0" readonly>
                <label for="servicio_total"><?= label('formServicio_total'); ?></label>
            </div>
            <div style="visibility:hidden; position:absolute">
                <input id="cantidadGastos" name="cantidadGastos" type="text" value="0">
            </div>

            <div class="row" style="margin-bottom: 25px;margin-top: 30px;">
                <a onclick="$(this).closest('form').submit()" id="guardarCerrarServicio" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('guardarCerrar'); ?>
                </a>
                <a onclick="$(this).closest('form').submit()" id="guardarOtroServicio" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('guardarAgregarOtro'); ?>
                </a>
            </div>
        </form>
    </div>
</div>

<div id="Elminar" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarlineaDetalle'); ?></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>

<div id="actualizarPrecio" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarActualizarPrecio'); ?></p>
    </div>
    <div class="modal-footer">
        <a id="aceptarActualizar" class="waves-effect waves-red btn-flat modal-action"><?= label('aceptar'); ?></a>
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
        <div id="botonElimnar" title="cotizacion1-detalles">
            <a href="#"
               class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>

<div id="eliminarLinea" class="modal">
   <div class="modal-header">
      <p><?= label('nombreSistema'); ?></p>
      <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
   </div>
   <div class="modal-content">
      <p><?= label('confirmarEliminarLineaDetalle'); ?></p>
   </div>
   <div id="botonEliminar" class="modal-footer black-text">
      <a class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
   </div>
</div>
<!-- Fin lista modals -->

<div style="visibility:hidden; position:absolute">                                 
    <a id="linkNuevaServicio" href="#agregarServicio" class="modal-trigger"></a>
</div>

<!--Script para select de busqueda-->
<script>
    $(document).on('ready', function(){
        var config = {'.chosen-select'           : {}}
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }

        $('#servicioTiempo').on('change', function(){
            cambioUnidadTiempo();
        });
        function cambioUnidadTiempo(){
            var valor = $('#servicioTiempo option:selected').text().toLowerCase();
            $('#unidadTiempo').text('en ' + valor);
        }

    });
</script>
<!--Script para mostrar elementos de agregar gastos-->
<script>
    gastosTabla = [];
    $(document).ready(function () {
        $('#agregarGastos_proveedor').attr('disabled', 'disabled');
        $('#agregarGastos_gasto').attr('disabled', 'disabled');
        $('#busqueda_masOpciones').click(function (event) {
            var $elementos = $('#opcionesBusquedaGasto');
            var $buscar = $('#agregarGastos_buscar');
            var $display = $elementos.css('display');
            if($display == 'none') {
                $elementos.css('display', 'block');
                $(this).text('<?= label('agregarGastos_menosOpciones'); ?>');
                $buscar.val('0');
                $buscar.attr('disabled', 'disabled');
                $buscar.trigger("chosen:updated");
            } else {
                $elementos.css('display', 'none');
                $(this).text('<?= label('agregarGastos_masOpciones'); ?>');
                $buscar.removeAttr('disabled');
                $buscar.trigger("chosen:updated");

                var select_categoria = $('#agregarGastos_categoria');
                select_categoria.val('0');
                select_categoria.trigger("chosen:updated");
                var select_persona = $('#agregarGastos_proveedor');
                select_persona.val('0');
                select_persona.attr('disabled', 'disabled');
                select_persona.trigger("chosen:updated");
                var select_gastos = $('#agregarGastos_gasto');
                select_gastos.val('0');
                select_gastos.attr('disabled', 'disabled');
                select_gastos.trigger("chosen:updated");
            }
        });
        $(document).on('click', '#servicio_incluirGastosVariables', function () {
            var $incluir = $(this).is(':checked');
            var $gastos = $('#servicio_gastosVariables');
            if($incluir) {
                $gastos.css('display', 'block');
            } else {
                $gastos.css('display', 'none');
            }
        });
        <?php
        $js_arrayPersonas = json_encode($personas);
        $js_arrayGastos = json_encode($gastos);
        echo "var arrayPersonas =". $js_arrayPersonas.';';
        echo "var arrayGastos =". $js_arrayGastos.';';
        ?>
        $(document).on('change','.chosen-select',function(){
            var valor = $(this).val();
            var tipo = $(this).attr("data-tipo");
            var $gastos_categoria = $('#agregarGastos_categoria');
            var $gastos_persona = $('#agregarGastos_proveedor');
            var $gastos_gasto = $('#agregarGastos_gasto');
            if (tipo == 'servicioCategoriaGasto') {
                var categoria_id = $gastos_categoria.val();
                $gastos_persona.empty(); //remove all child nodes
                $gastos_persona.removeAttr('disabled');
                $gastos_persona.append($('<option value="0" disabled selected style="display:none;"><?= label("servicio_elegirPersonaGasto"); ?></option>'));
                for (var i = 0; i < arrayPersonas.length; i++) {
                    var persona_categorias = arrayPersonas[i]['categorias'];
                    for(var j = 0; j < persona_categorias.length; j++) {
                        var categorias_ids = persona_categorias[j]['idCategoriaPersona'];
                        if(categorias_ids.indexOf(categoria_id) != -1) {
                            var newOption = $('<option value="'+ arrayPersonas[i]['idProveedor'] + '">' + arrayPersonas[i]['nombre'] + '</option>');
                            $gastos_persona.append(newOption);
                        }
                    }
                }
                $gastos_gasto.attr('disabled', 'disabled');
                $gastos_gasto.trigger("chosen:updated");
                $gastos_persona.trigger("chosen:updated");
            } else {
                if(tipo == 'servicioPersonaGasto') {
                    var persona_id = $gastos_persona.val();
                    $gastos_gasto.empty(); //remove all child nodes
                    $gastos_gasto.removeAttr('disabled');
                    $gastos_gasto.append($('<option value="0" disabled selected style="display:none;"><?= label("servicio_elegirGastoGasto"); ?></option>'));
                    for (var i = 0; i < arrayGastos.length; i++) {
                        var gasto_persona = arrayGastos[i]['idProveedor'];
                        if(gasto_persona == persona_id) {
                            var newOption = $('<option value="' + arrayGastos[i]['idGasto'] + '">' + arrayGastos[i]['nombre'] + '</option>');
                            $gastos_gasto.append(newOption);
                        }
                    }
                    $gastos_gasto.trigger("chosen:updated");
                }
            }
        });
        $(document).on('change', '.input_cantidad_gasto', function () {
            actualizarMontos();
        });
    });
    function actualizarMontos() {
        var elementos = $('.total_gastos_variables');
        var gastosVariablesServicios = 0;//parseInt(elementos.first().text());
        $('.input_cantidad_gasto').each(function () {
            var padre = $(this).parents('tr');
            var monto = padre.find('td input.input_monto_gasto').first().val();
            var cantidad = $(this).val();
            var subtotal = padre.find('td span.subtotal_fila').first();
            var resultado = monto * cantidad;
            subtotal.text(resultado);
            gastosVariablesServicios += resultado;
        });
        elementos.each(function () {
            $(this).text(gastosVariablesServicios);
        });
        totalGastosVariables = gastosVariablesServicios;

        calcularPrecioNuevo();
    }
    function limpiarTablaGastos() {
        $('.gasto_elementoTabla').each(function () {
            var elementoPadre = $(this).parents('tr');
            elementoPadre.fadeOut(function () {
                elementoPadre.empty();
                elementoPadre.remove();
            });
        });
        actualizarMontos();
        contadorFilasGastos = 0;
        actualizarCantidadGastos();
        gastosTabla.splice(0, gastosTabla.length);
    }
</script>
<!--Script para manejo de gastos-->
<script type="text/javascript">
    var menuOpciones_eliminar = '<?= label('menuOpciones_eliminar'); ?>';
    var totalGastosVariables = 0;
    function actualizarCantidadGastos(){
        $('#cantidadGastos').val(contadorFilasGastos);
    }
    $(document).ready(function () {
        $('#btn_agregarGasto').on('click', function () {
            var idGastoPrincipal = $('#agregarGastos_buscar').val();
            var idCategoria = $('#agregarGastos_categoria').val();
            var idPersona = $('#agregarGastos_proveedor').val();
            var idGasto = $('#agregarGastos_gasto').val();
            if(idGasto != null && idGasto != '') {
                $.ajax({
                    type: 'post',
                    url: '<?= base_url(); ?>servicios/cargarGasto',
                    data: {idEditar : idGasto},
                    success: function(response)
                    {
                        var gasto = $.parseJSON(response);
                        agregarFilaGasto(idGasto, gasto['codigo'], gasto['nombre'], gasto['datosAdicionales']['persona'],
                            gasto['datosAdicionales']['persona'], gasto['datosAdicionales']['formaPago'], gasto['monto']);
                        actualizarCantidadGastos();
                    }
                });
            } else {
                $.ajax({
                    type: 'post',
                    url: '<?= base_url(); ?>servicios/cargarGasto',
                    data: {idEditar : idGastoPrincipal},
                    success: function(response)
                    {
                        var gasto = $.parseJSON(response);
                        agregarFilaGasto(idGastoPrincipal, gasto['codigo'], gasto['nombre'], gasto['datosAdicionales']['persona'],
                            gasto['datosAdicionales']['persona'], gasto['datosAdicionales']['formaPago'], gasto['monto']);
                        actualizarCantidadGastos();
                    }
                });
            }
        });
    });
    var contadorFilasGastos = 0;
    function agregarFilaGasto(idEncriptado, cod, nom, per, categoria, tmp, mont){
        var boton = '<td>' +
            '<a class="boton-opciones btn-flat white-text confirmarEliminarGasto"' +
            'data-id-eliminar="' + idEncriptado + '" data-fila-eliminar="fila'+ contadorFilasGastos +'">' + menuOpciones_eliminar +'</a>' +
            '</td>';
        var codigo = '<td>' +
            '<input class="gasto_elementoTabla" style="display:none" name="gasto_'+ contadorFilasGastos +'" type="text">' +
            '<input name="gasto' + contadorFilasGastos + '_idGasto" type="text" style="display: none;" value="' + idEncriptado + '" />' + cod + '</td>';
        var nombre = '<td>' + nom + '</td>';
        var persona = '<td>' + per + '</td>';
        var categoriaPersona = '<td>' + categoria + '</td>';
        var tiempo = '<td>' + tmp +' </td>';
        var cantidad = '<td><input class="input_cantidad_gasto" min="0" name="gasto' + contadorFilasGastos + '_cantidad" type="number" value="0"/></td>';
        var monto = '<td><input class="input_monto_gasto" style="display: none;" name="gasto' + contadorFilasGastos + '_monto" type="text" value="' + mont + '" />' + mont + '</td>';
        var subtotal = '<td>$<span class="subtotal_fila">0</span></td>';

        var tBody = $('#gastos-tabla-lista');
        if(gastosTabla.indexOf(idEncriptado) == -1) {
            if (tBody.find('tbody tr').length == 1) {
                tBody.find('tbody tr:first').before('' +
                    '<tr>' +
                    codigo + nombre + persona + categoriaPersona + tiempo + monto + cantidad + subtotal + boton +
                    '</tr>'
                );

            } else {
                tBody.find('tbody tr:last').before('' +
                    '<tr>' +
                    codigo + nombre + persona + categoriaPersona + tiempo + monto + cantidad + subtotal + boton +
                    '</tr>'
                );
            }
            contadorFilasGastos++;
            gastosTabla.push(idEncriptado);
        } else {
            alert('<?= label('servicio_gastoExistente'); ?>');
        }

        var select_principal = $('#agregarGastos_buscar');
        select_principal.val('0');
        select_principal.trigger("chosen:updated");
        var select_categoria = $('#agregarGastos_categoria');
        select_categoria.val('0');
        select_categoria.trigger("chosen:updated");
        var select_persona = $('#agregarGastos_proveedor');
        select_persona.val('0');
        select_persona.attr('disabled', 'disabled');
        select_persona.trigger("chosen:updated");
        var select_gastos = $('#agregarGastos_gasto');
        select_gastos.val('0');
        select_gastos.attr('disabled', 'disabled');
        select_gastos.trigger("chosen:updated");
    }
</script>
<!--Script para eliminar gastos-->
<script type="text/javascript">
    $(document).on("ready", function () {
        var idEliminarGasto = 0;
        var filaEliminarGasto = null;

        $(document).on('click','.confirmarEliminarGasto', function () {
            idEliminarGasto = $(this).data('id-eliminar');
            filaEliminarGasto = $(this).parents('tr');
            $('#linkGastosEliminar').click();
            //esto se hace porque al agregar un <a class="modal-trigger"> dinamicamente con el metodo de agregarNuevoContacto() pareciera no servir, entonces lo que se hace es llamar al evento click del modal-trigger con el id = linkContactosElimminar
        });
        $('#eliminarGasto #botonEliminar').on('click', function () {
            event.preventDefault();
            filaEliminarGasto.fadeOut(function () {
                filaEliminarGasto.empty();
                filaEliminarGasto.remove();
                actualizarMontos();
            });
            contadorFilasGastos--;
            actualizarCantidadGastos();
            var id = gastosTabla.indexOf(''+idEliminarGasto);
            gastosTabla[id] = '';
        });
    });
</script>
<!--Script para fases e insercion de datos-->
<script>
    <?php
    $js_array = json_encode($fases);
    echo "var arrayFases =". $js_array.";";
    ?>

    var cantidadFases = 0;
    var contadorFases = cantidadFases;

    $(document).on('ready', function() {
        function exiteEnTabla(idFase){
            var existe = false;
            $('.id_fase').each(function(){
                if ($(this).val() == idFase) {
                    existe = true;
                }
            });
            return existe;
        }

        $('#agregarFase').on('click', function() {
            // alert('ahora');
            var idFase = $('#servicioFase').val();
            var idSubfase = $('#servicio_subFase').val();
            if (idFase == null || (idFase != 'todas' && idSubfase == null)) {
                if (idFase == null) {
                    alert('<?=label("form_servicioDebeElegirFase")?>');
                } else{
                    alert('<?=label("form_servicioDebeElegirSubFase")?>');
                }
                return false;
            }
            if (idFase != 'todas') {
                if (idSubfase != 'todas') {
                    if (!exiteEnTabla(idSubfase)) {
                        for (var i = 0; i < arrayFases.length; i++) {
                            if (arrayFases[i]['idFase'] == idFase) {
                                for (var j = 0; j < arrayFases[i]['subfases'].length; j++) {
                                    var fase = arrayFases[i];
                                    var subfase = fase['subfases'][j];
                                    if (subfase['idFase'] == idSubfase) {
                                        agregarFila(subfase['codigo'], subfase['nombre'], subfase['notas'], fase['codigo'], fase['nombre'], fase['notas'], subfase['idFase']);
                                    }
                                }
                            }
                        };
                    }
                } else {
                    // if (!exiteEnTabla(idSubfase)) {
                    for (var i = 0; i < arrayFases.length; i++) {
                        if (arrayFases[i]['idFase'] == idFase) {
                            for (var j = 0; j < arrayFases[i]['subfases'].length; j++) {
                                var fase = arrayFases[i];
                                var subfase = fase['subfases'][j];
                                if (!exiteEnTabla(subfase['idFase'])) {
                                    agregarFila(subfase['codigo'], subfase['nombre'], subfase['notas'], fase['codigo'], fase['nombre'], fase['notas'], subfase['idFase']);
                                }
                            }
                        }
                    }
                    // }
                }
            } else {
                for (var i = 0; i < arrayFases.length; i++) {
                    // if (arrayFases[i]['idFase'] == idFase) {
                    for (var j = 0; j < arrayFases[i]['subfases'].length; j++) {
                        var fase = arrayFases[i];
                        var subfase = fase['subfases'][j];
                        if (!exiteEnTabla(subfase['idFase'])) {
                            agregarFila(subfase['codigo'], subfase['nombre'], subfase['notas'], fase['codigo'], fase['nombre'], fase['notas'], subfase['idFase']);
                        }
                    }
                    // }
                }
            }
        });
        var config = {'.chosen-select'           : {}}
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }
        cargarFases();

        $(document).on('change','.chosen-select',function(){
            var valor = $(this).val();
            var tipo = $(this).attr("data-tipo");
            if (valor=="nuevo") {
                var idBoton = $(this).attr("id");
                var nuevoElementoAgregar = "";
                botonEnLista(tipo, idBoton, nuevoElementoAgregar)
            } else {
                if (tipo == 'servicioFase') {
                    if ($('#servicioFase').val() != 'todas') {
                        cargarSubFases(valor);
                    } else{
                        $('#servicio_subFase').empty();
                        $('#servicio_subFase').attr('disabled', 'disabled');
                        $('#servicio_subFase').trigger("chosen:updated");
                    }
                }
            }
        });

        function cargarSubFases(idFasePadre) {
            $('#servicio_subFase').empty(); //remove all child nodes
            $('#servicio_subFase').removeAttr('disabled');
            $('#servicio_subFase').append($('<option value="0" disabled selected style="display:none;"><?= label("servicio_elegirSubFase"); ?></option>'));
            // $('#servicio_subFase').append($('<option value="nuevo"><?= label("agregarNuevo"); ?></option>'));
            $('#servicio_subFase').append($('<option value="todas"><?= label("formServicio_fases_agregarTodas"); ?></option>'));
            for (var i = 0; i < arrayFases.length; i++) {
                if (arrayFases[i]['idFase'] == idFasePadre) {
                    for (var j = 0; j < arrayFases[i]['subfases'].length; j++) {
                        var newOption = $('<option value="'+arrayFases[i]['subfases'][j]['idFase']+'">'+arrayFases[i]['subfases'][j]['nombre']+'</option>');
                        $('#servicio_subFase').append(newOption);
                    }
                }
            }
            $('#servicio_subFase').trigger("chosen:updated");
        }

        function cargarFases(){
            $('#servicioFase').empty(); //remove all child nodes
            $('#servicioFase').append($('<option value="0" disabled selected style="display:none;"><?= label("servicio_elegirFase"); ?></option>'));
            // $('#servicioFase').append($('<option value="nuevo"><?= label("agregarNuevo"); ?></option>'));
            $('#servicioFase').append($('<option value="todas"><?= label("formServicio_fases_agregarTodas"); ?></option>'));
            for (var i = 0; i < arrayFases.length; i++) {
                var newOption = $('<option value="'+arrayFases[i]['idFase']+'">'+arrayFases[i]['nombre']+'</option>');
                $('#servicioFase').append(newOption);
            }
            $('#servicioFase').trigger("chosen:updated");
        }

        function actualizarCantidad(){
            // alert($('#cantidadFases').val());
            $('#cantidadFases').val(cantidadFases);
        }


        function agregarFila(codigo, nombre, des, codigoPadre, nombrePadre, desPadre, idFase){
            // alert(cantidadFases);
            cantidadFases++;
            actualizarCantidad();

            var boton = '<a href="#eliminarSubFase" data-id-eliminar="1" class="-text modal-trigger confirmarEliminar boton-opciones btn-flat white-text"><?= label('menuOpciones_eliminar'); ?></a>';
            // var codigo = 'PROG-0001';
            // var nombre = 'ERS';
            // var des = 'Requerimientos de software Nuevo';
            var idFase = '<input class="id_fase"  name="id_'+contadorFases+'" id="id_'+contadorFases+'" type="number" value="'+idFase+'" />';
            var cantidadTiempo = '<input class="cantidad" data-grupo="'+codigoPadre+'" name="cantidadhoras_'+contadorFases+'" id="cantidadhoras_'+contadorFases+'" type="number" value="0" />';
            // var codigoPadre = 'PROG-0002Padre';
            // var nombrePadre = 'ERSPadre';
            // var desPadre = 'Requerimientos de softwarePadre';

            $('#tabla-servicio').dataTable().fnAddData([
                codigo,
                nombre,
                des,
                codigoPadre,
                nombrePadre,
                desPadre,
                idFase,
                cantidadTiempo,
                boton ]);

            $('.id_fase').parent('td').css('display', 'none');

            $('.modal-trigger').leanModal();

            contadorFases++;
        }


        var filaEliminar = null;

        $(document).on('click','.confirmarEliminar', function () {
            // idEliminar = $(this).data('id-eliminar');
            filaEliminar = $(this).parents('tr');
        });
        var grupoEliminar = null;

        $(document).on('click','.confirmarEliminarGrupo', function () {
            // idEliminar = $(this).data('id-eliminar');
            grupoEliminar = $(this).attr('data-grupo');
            // filaEliminar = $(this).parents('tr');
        });

        $('#eliminarSubFase #botonEliminar').on('click', function () {
            event.preventDefault();
            filaEliminar.fadeOut(function () {
                $('#tabla-servicio').dataTable().fnDeleteRow(filaEliminar);
                verificarChecks();
            });
            cantidad--;
            actualizarCantidad();
        });

        $('#eliminarFase #botonEliminar').on('click', function () {
            // alert('hola');
            event.preventDefault();
            $('input[data-grupo='+grupoEliminar+']').parents('tr').each(function(){
                // alert($(this).parents('tr').html);
                $(this).fadeOut(function () {
                    $('#tabla-servicio').dataTable().fnDeleteRow($(this));
                });
                cantidad--;
                actualizarCantidad();
            });
            verificarChecks();
            cantidad--;
            actualizarCantidad();
        });

        var table = $('#tabla-servicio').DataTable({
            "bPaginate": false,
            "ordering": false,
            "searching": false,
            "columnDefs": [
                { "visible": false, "targets": 3 },
                { "visible": false, "targets": 4 },
                { "visible": false, "targets": 5 }
                // { "visible": false, "targets": 6 }
            ],
            "order": [[ 3, 'asc' ]],
            "displayLength": 25,
            "drawCallback": function ( settings ) {

                var api = this.api();
                // alert(this.html());
                var rows = api.rows( {page:'current'} ).nodes();
                var last=null;

                var cantidadGrupo = '';
                // var contadorGrupo = 0;
                api.column(3, {page:'current'} ).data().each( function ( group, i ) {
                    var codigo = group;
                    var nombre =  api.column(4, {page:'current'} ).data()[i];
                    var descripcion =  api.column(5, {page:'current'} ).data()[i];
                    // alert(group +', '+nombre, +', '+descripcion);
                    if ( last !== group ) {
                        // alert(group);
                        $(rows).eq( i ).before(
                            '<tr class="group"><td>'+codigo+'</td><td>'+nombre+'</td><td>'+descripcion+'</td><td id="'+codigo+'">0</td><td><a href="#eliminarFase" data-grupo="'+codigo+'" class="-text modal-trigger confirmarEliminarGrupo boton-opciones btn-flat white-text"><?= label('menuOpciones_eliminar'); ?></a></td></tr>'
                        );

                        last = group;

                    }
                    cantidadGrupo = $(rows).eq( i ).find('.cantidad').val();
                    var valorActual = parseInt($("#"+codigo).text()) + parseInt(cantidadGrupo);
                    $("#"+codigo).text(valorActual);

                });
                $('.modal-trigger').leanModal();
                calcularTotal();
            }
        });

        $(document).on('change','.cantidad', function(){
            var grupo = $(this).attr('data-grupo');
            var sumatoria = 0;
            $('input[data-grupo = '+grupo+']').each(function(){
                sumatoria += parseInt($(this).val());
            });
            // alert('#'+grupo);
            $('#'+grupo).text(sumatoria);
            calcularTotal();

            calcularPrecioNuevo();
        });

        function calcularTotal(){
            var sumatoria = 0;
            $('#agregarServicio .cantidad').each(function(){
                sumatoria += parseInt($(this).val());
            });
            $('#cantidadTotal').val(sumatoria);
        }
    });

    var cerrarModalServicio = false;
    $(document).on('ready', function(){
        $('#guardarOtroServicio').on('click', function(){
            cerrarModalServicio = false;
        });
        $('#guardarCerrarServicio').on('click', function(){
            cerrarModalServicio = true;
        });
    });


    var idSelectAgregarNuevo = 0;
    function actualizarSelectSeleccionado(select){
        idSelectAgregarNuevo = select;
    }

    function validacionCorrecta_ServiciosCotizacion(){
        $.ajax({
            data: {servicio_codigo :  $('#servicio_codigo').val()},
            url:   '<?=base_url()?>servicios/existeCodigo',
            type:  'post',
            success:  function (response) {
                switch(response){
                    case '0':
                        alert("<?=label('errorGuardar'); ?>");
                        $('#agregarServicio .modal-header a').click();
                        break;
                    case '1':
                        alert("<?=label('servicio_error_codigoExisteEnBD'); ?>");
                        $('#servicio_codigo').focus();
                        break;
                    case '2':
                        var formulario = $('#form_servicio_cotizar');
                        var formData = formulario.serialize();
                        var url = formulario.attr('action');
                        var method = formulario.attr('method');
                        $.ajax({
                            type: method,
                            url: url,
                            data: formData,
                            success: function(response) {
                                switch(response) {
                                    case '0':
                                        alert("<?=label('errorGuardar'); ?>");
                                        $('#agregarServicio .modal-header a').click();
                                        break;
                                    default:
                                        // alert(response + ', ' + idSelectAgregarNuevo);
                                        actualizarSelectServicios(response, idSelectAgregarNuevo);
                                        alert("<?=label('cotizacion_servicioGuardadoCorrectamente'); ?>");
                                        

                                        formulario[0].reset();
                                        $('#servicio_impuestos').tagsinput('removeAll');
                                        $('#servicioTiempo').val('').trigger('chosen:updated');
                                        cantidadFases = 0;
                                        contadorFases = 0;

                                        var table = $('#tabla-servicio').DataTable();
                                        table.clear().draw();

                                        var $incluir = $(this).is(':checked');
                                        var $gastos = $('#servicio_gastosVariables');
                                        $gastos.css('display', 'none');

                                        limpiarTablaGastos();

                                        if (cerrarModalServicio) {
                                            $('#agregarServicio .modal-header a').click();   
                                        }
                                        
                                        break;
                                }
                            }
                        });
                        break;
                }
            }
        });
    }

     function actualizarSelectServiciosNuevos(fila) {
        generarAutocompletarServiciosNuevo(arrayServicios, fila);
        generarListas();
    }


        function generarAutocompletarServiciosNuevo($array, id){

            var selectNombre = $('<select data-incluirBoton="1" placeholder="seleccionar" data-tipo="productoNombre" data-fila="' + id + '" id="productoNombre_' + id + '" name="productoNombre_' + id + '" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("paso2_elegirProductoNombre"); ?>" class="chosen-select nombreServicio" style="width:350px;" tabindex="2"></select>');
            selectNombre.append('<option value="0" disabled selected style="display:none;"><?= label("paso2_elegirProductoNombre"); ?></option>');
            selectNombre.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');
            

            var selectItem = $('<select data-incluirBoton="1" placeholder="seleccionar" data-tipo="productoItem" data-fila="' + id + '" id="productoItem_' + id + '" name="productoItem_' + id + '" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("paso2_elegirProductoItem"); ?>" class="chosen-select itemServicio" style="width:350px;" tabindex="2"></select>');
            selectItem.append('<option value="0" disabled selected style="display:none;"><?= label("paso2_elegirProductoItem"); ?></option>');
            selectItem.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');
            


            selectNombre.empty();
            selectNombre.append('<option value="0" disabled selected style="display:none;"><?= label("paso2_elegirProductoNombre"); ?></option>');
            selectNombre.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');

            selectItem.empty();
            selectItem.append('<option value="0" disabled selected style="display:none;"><?= label("paso2_elegirProductoItem"); ?></option>');
            selectItem.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');

            for(var i = 0; i < $array.length; i++) {
                var servicio = $array[i];
                if(servicio != null) {
                    selectNombre.append('<option value="' + servicio['idServicio'] + '">' + servicio['nombre'] + '</option>');
                    selectItem.append('<option value="' + servicio['idServicio'] + '">' + servicio['codigo'] + '</option>');
                }
            }
            $('#contenedorSelectProductoNombre' + id + '').html(selectNombre);
            $('#contenedorSelectProductoItem' + id + '').html(selectItem);

            selectNombre.trigger("chosen:updated");
            selectItem.trigger("chosen:updated");


    }



    function actualizarSelectServicios($idServicio, selectSeleccionado) {
        // alert($idServicio + ' ' + selectSeleccionado);
        $.ajax({
            type: 'POST',
            url: '<?= base_url(); ?>servicios/servicios',
            data: {  },
            success: function(response)
            { 
                // alert('hola');
                arrayServicios = $.parseJSON(response);
                generarAutocompletarServicios($.parseJSON(response), $idServicio, selectSeleccionado);
                generarListas();
            }
        });
    }

    function generarAutocompletarServicios($array, $idServicio, selectSeleccionado){
        var miSelect = $('.nombreServicio');
        var numeroFilaNuevo = 0;
        miSelect.each(function(){
            var select = $(this);
            var valorActual = $(this).val();
            var numeroFilaSelect = $(this).attr('data-fila');
            var selectNombre = $('#productoNombre_' + numeroFilaSelect);
            var selectItem = $('#productoItem_' + numeroFilaSelect);

            selectNombre.empty();
            selectNombre.append('<option value="0" disabled selected style="display:none;"><?= label("paso2_elegirProductoNombre"); ?></option>');
            selectNombre.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');

            selectItem.empty();
            selectItem.append('<option value="0" disabled selected style="display:none;"><?= label("paso2_elegirProductoItem"); ?></option>');
            selectItem.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');

            for(var i = 0; i < $array.length; i++) {
                var servicio = $array[i];
                if(servicio != null) {

                    if (selectNombre.attr('id') == selectSeleccionado || selectItem.attr('id') == selectSeleccionado) {
                        if(servicio['idServicio'] == $idServicio) {
                            numeroFilaNuevo = numeroFilaSelect;
                            selectNombre.append('<option value="' + servicio['idServicio'] + '" selected>' + servicio['nombre'] + '</option>');
                            selectItem.append('<option value="' + servicio['idServicio'] + '" selected>' + servicio['codigo'] + '</option>');
                        } else  {
                            selectNombre.append('<option value="' + servicio['idServicio'] + '">' + servicio['nombre'] + '</option>');
                            selectItem.append('<option value="' + servicio['idServicio'] + '">' + servicio['codigo'] + '</option>');
                        }

                    } else {
                        if (servicio['idServicio'] == valorActual) {
                            selectNombre.append('<option value="' + servicio['idServicio'] + '" selected>' + servicio['nombre'] + '</option>');
                            selectItem.append('<option value="' + servicio['idServicio'] + '" selected>' + servicio['codigo'] + '</option>');
                        } else  {
                            selectNombre.append('<option value="' + servicio['idServicio'] + '">' + servicio['nombre'] + '</option>');
                            selectItem.append('<option value="' + servicio['idServicio'] + '">' + servicio['codigo'] + '</option>');
                        }
                    }
                }
            }
            selectNombre.trigger("chosen:updated");
            selectItem.trigger("chosen:updated");
        });
        cargarDatosFila($idServicio, numeroFilaNuevo);
    }



</script>
<!--Script para tags de impuestos-->
<script>
    $(document).ready(function () {
        var Impuestos = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('nombre'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // prefetch: 'http://localhost/Proyectos/touch/assets/dashboard/js/json/Impuestos.json'
            prefetch: {
                url: '<?=base_url()?>Impuesto/impuestosSugerencia',
                ttl: 1000
            }
        });
        Impuestos.initialize();

        elt = $('.tags_Impuestos > > input');
        elt.tagsinput({
            itemValue: 'idImpuesto',
            itemText: 'nombre',
            typeaheadjs: {
                name: 'Impuestos',
                displayKey: 'nombre',
                source: Impuestos.ttAdapter()
            }
        });
//        elt.tagsinput('add', {"idImpuesto": 1, "nombre": "Impuestos directos"});
//        elt.tagsinput('add', {"idImpuesto": 2, "nombre": "Impuestos indirectos"});
    });
</script>

<!--Script para calcular precio de servicio en lineas de detalle-->
<script type="text/javascript">
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
        var tiempoServicio = parseFloat($('#cantidadHorasLinea_' + numeroFila).val());
        var tipoTiempo = $('#tipoTiempoLinea_' + numeroFila).val();

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

    function calcularPrecioActualizado(numeroFila){

        gastosFijosAnuales();
        horasLaborales();
        var totalGastosV = parseFloat($('#gastosVariablesLinea_' + numeroFila).val());
        var totalGastos = totalGastosFijosAnuales;
        if(totalGastosV > 0) {
            totalGastos += totalGastosV;
        }

        var costoHora = totalGastos / totalHorasLaborales;
        var cantidadHoras = horasServicio(numeroFila);
        var margenUtilidad = parseFloat($('#utilidad_' + numeroFila).val()) / 100;

        return cantidadHoras * costoHora;
    }

    function calcularPrecio(numeroFila) {
        // alert('calcularPrecio');
        gastosFijosAnuales();
        horasLaborales();
        var totalGastosV = parseFloat($('#gastosVariablesLinea_' + numeroFila).val());
        var totalGastos = totalGastosFijosAnuales;
        if(totalGastosV > 0) {
            totalGastos += totalGastosV;
        }

        var costoHora = totalGastos / totalHorasLaborales;
        var cantidadHoras = horasServicio(numeroFila);
        var margenUtilidad = parseFloat($('#utilidad_' + numeroFila).val()) / 100;

        var precioBase = cantidadHoras * costoHora;

        $('#precioUnidadPropio_' + numeroFila).val(precioBase);//Este va a ser el precio Unidad que va a mantener la línea de detalle, aunque el precio del servicio cambie.

        var precioServicio = (precioBase) / (1 - margenUtilidad);

        var impuestosAgregados = 0;
        $.each($("#impuestos_" + numeroFila).tagsinput('items'), function( index, value ) {
            impuestosAgregados += precioServicio * (value['valor'] / 100);
        });
        precioServicio += impuestosAgregados;

        precioServicio = precioServicio.toFixed(2);

        var moneda = $('#paso1_tipoCambio').val();
        precioServicio = precioServicio / parseFloat(moneda);
        precioServicio = precioServicio.toFixed(2);
        $('#precio_' + numeroFila).val(precioServicio);
        var cantidadServicio = parseFloat($('#cantidad_' + numeroFila).val());
        var subTotalServicio = precioServicio * cantidadServicio;
        subTotalServicio = subTotalServicio.toFixed(2);
        // alert(subTotalServicio);
        $('#subTotal_' + numeroFila).val(subTotalServicio);

    }

    function calcularPrecioPropio(numeroFila) {

        var margenUtilidad = parseFloat($('#utilidad_' + numeroFila).val()) / 100;

        var precioPorpio = $('#precioUnidadPropio_' + numeroFila).val();//Este va a ser el precio Unidad que va a mantener la línea de detalle, aunque el precio del servicio cambie.

        var precioServicio = precioPorpio / (1 - margenUtilidad);

        var impuestosAgregados = 0;
        $.each($("#impuestos_" + numeroFila).tagsinput('items'), function( index, value ) {
            impuestosAgregados += precioServicio * (value['valor'] / 100);
        });
        precioServicio += impuestosAgregados;

        precioServicio = precioServicio.toFixed(2);

        var moneda = $('#paso1_tipoCambio').val();
        precioServicio = precioServicio / parseFloat(moneda);
        precioServicio = precioServicio.toFixed(2);
        $('#precio_' + numeroFila).val(precioServicio);
        var cantidadServicio = parseFloat($('#cantidad_' + numeroFila).val());
        var subTotalServicio = precioServicio * cantidadServicio;
        subTotalServicio = subTotalServicio.toFixed(2);
        // alert(subTotalServicio);
        $('#subTotal_' + numeroFila).val(subTotalServicio);
    }

$(document).on('ready', function () {

    $(document).on('change', '.subTotal', function () {
        actualizarTotal();
    });

    $(document).on('change', '#paso2_descuentoCotizacion', function () {
        actualizarTotal();
    });

    $(document).on('change', '.campo_cantidad', function () {
        // alert('cambio en cantidad');
        var lineaPadre = $(this).parents('tr');
        var numeroLineaPadre = lineaPadre.find('td input.campo_numeroFila').first().val();
        calcularPrecioPropio(numeroLineaPadre);
        actualizarTotal();
    });

    $(document).on('change', '.precio', function () {
        // alert('cambio en impuestos');
        var lineaPadre = $(this).parents('tr');
        var numeroLineaPadre = lineaPadre.find('td input.campo_numeroFila').first().val();
        calcularPrecioPropio(numeroLineaPadre);
        actualizarTotal();
    });

    

    $(document).on('change', '.campo_impuestos', function () {
        // alert('cambio en impuestos');
        var lineaPadre = $(this).parents('tr');
        var numeroLineaPadre = lineaPadre.find('td input.campo_numeroFila').first().val();
        calcularPrecioPropio(numeroLineaPadre);
        actualizarTotal();
    });
    $(document).on('change', '.utilidad', function () {
        // alert('cambio en utilidad');
        var lineaPadre = $(this).parents('tr');
        var numeroLineaPadre = lineaPadre.find('td input.campo_numeroFila').first().val();
        calcularPrecioPropio(numeroLineaPadre);
        actualizarTotal();
    });

});
</script>
<!--Script para calcular precio servicio que se agrega-->
<script type="text/javascript">
    function horasServicioNuevo() {
        var tiempoServicio = parseFloat($('#agregarServicio #cantidadTotal').val());
        var tipoTiempo = $('#agregarServicio #servicioTiempo').val();
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

    function calcularPrecioNuevo() {
        // alert('calcularPrecio nuevo');
        gastosFijosAnuales();
        horasLaborales();
        var totalGastos = totalGastosFijosAnuales + totalGastosVariables;

        var costoHora = totalGastos / totalHorasLaborales;
        var cantidadHoras = horasServicioNuevo();
        var margenUtilidad = parseFloat($('#agregarServicio #servicio_utilidad').val()) / 100;

        var precioServicio = (cantidadHoras * costoHora) / (1 - margenUtilidad);

        var impuestosAgregados = 0;
        $.each($("#agregarServicio #servicio_impuestos").tagsinput('items'), function( index, value ) {
            impuestosAgregados += precioServicio * (value['valor'] / 100);
        });
        precioServicio += impuestosAgregados;

        precioServicio = precioServicio.toFixed(2);

        $('#agregarServicio #servicio_total').val(precioServicio);
    }

    $(document).on('change', '#agregarServicio #servicio_utilidad', function () {
        calcularPrecioNuevo();
    });
    $(document).on('change', '#agregarServicio #servicioTiempo', function () {
        calcularPrecioNuevo();
    });
    $(document).on('change', '#agregarServicio #servicio_impuestos', function () {
        calcularPrecioNuevo();
    });
</script>