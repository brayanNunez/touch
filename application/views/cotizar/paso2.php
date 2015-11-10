
<button id="botonAgregarFila">Agregar Fila(boton de prueba)</button>

<!-- <button id="myFunction">Vamos tu puedes</button> -->

<script type="text/javascript">

// $(document).on('ready', function(){
     <?php 
    $js_array = json_encode($resultado['servicios']); 
    echo "var arrayServicios =". $js_array;
    ?>  

    function cargarFila(idServicio, numeroFila){
        for (var i = arrayServicios.length - 1; i >= 0; i--) {
            var servicio = arrayServicios[i];
            if (servicio['idServicio'] == idServicio) {
                $('#descripcion_' + numeroFila).val(servicio['descripcion']);
                $('#precio_' + numeroFila).val(servicio['total']);  
                $('#cantidad_' + numeroFila).val(1);  
                cargarImpuestosPorServicio(numeroFila, servicio['impuestos'])
                $('#utilidad_' + numeroFila).val(servicio['utilidad']);  
                alert(servicio['nombre'] + ', ' + servicio['descripcion']);
            } 
            
        };
     // alert('bien');
    }
// });


function actualizarCantidad(){
        $('#cantidadLineasDetalle').val(cantidad);

    }

    var cantidad = <?= count($resultado['lineasDetalle'])?>;
    var contadorFilas = cantidad;

    $('#botonAgregarFila').on('click', function(){

         var check = '<td>'+
            '<div style="text-align: center;">'+
                '<input class="accionAplicada" style="display:none" name="linea_'+contadorFilas+'" type="text" value="1">'+ 
                '<input style="display:none" name="idLinea_'+contadorFilas+'" type="text" value="">'+
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
                '<input value="Arroz, ensalada, carne" type="text" id="descripcion_'+contadorFilas+'" name="descripcion_'+contadorFilas+'">'+
            '</row>'+
        '</td>';

        var precio ='<td>'+
            '<row>'+
                '<input value="$6" type="text" id="precio_'+contadorFilas+'" name="precio_'+contadorFilas+'">'+
            '</row>'+
        '</td>';

        var cantidad = '<td>'+
            '<row>'+
                '<input value="20" type="number" id="cantidad_'+contadorFilas+'" name="cantidad_'+contadorFilas+'">'+
            '</row>'+
        '</td>';

        var impuestos = '<td>'+
            '<row>'+
                '<div id="impuestosProducto'+contadorFilas+'" class="example tags_Impuestos">'+
                    '<div class="bs-example">'+
                        '<input id="impuestos_'+contadorFilas+'" name="impuestos_'+contadorFilas+'" placeholder="<?= label('formProducto_anadirImpuesto'); ?>" type="text"/>'+
                    '</div>'+
                '</div>'+
            '</row>'+
        '</td>';

        var utilidad ='<td>'+
            '<row>'+
                '<input value="2" type="number" id="utilidad_'+contadorFilas+'" name="utilidad_'+contadorFilas+'">'+
            '</row>'+
        '</td>';

        var total ='<td>'+
            '<row>'+
                '<input value="$020" type="text" id="subTotal_'+contadorFilas+'" name="subTotal_'+contadorFilas+'" readonly="true">'+
            '</row>'+
        '</td>';

        var eliminar = '<td>'+
            '<div class="btn-linea-eliminar">'+
                '<a class="confirmarEliminarLinea" data-linea-eliminar="'+contadorFilas+'" title="<?= label('paso2_lineaEliminar') ?>"><i class="mdi-action-delete small" style="color: black;"></i></a>'+
            '</div>'+
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
        generarAutocompletarProductoNombre(contadorFilas);
        generarAutocompletarProductoItem(contadorFilas);
        generarListas();
        generarListasBotones();
        $('.modal-trigger').leanModal(); 

        contadorFilas++;

        });



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

  // $(".boton-opciones").sideNav();


}

</script>

<div id="centered-table">
    <div class="row">
        <div class="col s12 m12 l12">
            <!-- <input type="text" class="tags"> -->

            <div id="contenerdorTablaDetalles">
                <table id="tablaLineasDetalle" class="centered responsive-table">
                <!-- <table id="cotizacion1-detalles" class="centered"> -->
                    <thead>
                    <tr>
                        <th style="text-align: center;">
                            <input class="filled-in checkbox checkall" type="checkbox" id="checkbox-all"
                                   onclick="toggleChecked(this.checked)"/>
                            <label for="checkbox-all"></label>
                        </th>
                        <th class="context-menu-miItem box" data-field="id">
                            <row>
                                <div class="col s12 m12 l12 celdaTitulo">Item</div>
                            </row>
                        </th>
                        <th class="context-menu-nombre box" data-field="id">
                            <row>
                                <div class="col s12 m12 l12 celdaTitulo">
                                    Nombre
                                </div>
                            </row>
                        </th>
                        <th class="context-menu-descripcion box" data-field="id">
                            <row>
                                <div class="col s12 m12 l12 celdaTitulo">
                                    Descripción
                                </div>
                            </row>
                        </th>
                     <!--    <th class="context-menu-imagen box" data-field="id">
                            <row>
                                <div class="col s12 m12 l12 celdaTitulo">
                                    Imagen
                                </div>
                            </row>
                        </th> -->
                        <th class="context-menu-precio box" data-field="id">
                            <row>
                                <div class="col s12 m12 l12 celdaTitulo">
                                    Precio unitario
                                </div>
                            </row>
                        </th>
                        <th class="context-menu-cantidad box" data-field="id">
                            <row>
                                <div class="col s12 m12 l12 celdaTitulo">
                                    Cantidad
                                </div>
                            </row>
                        </th>
                        <th class="context-menu-impuestoVenta box" data-field="id">
                            <row>
                                <div class="col s12 m12 l12 celdaTitulo">
                                    Impuesto de venta
                                </div>
                            </row>
                        </th>
                        <th class="context-menu-utilidad box" data-field="id">
                            <row>
                                <div class="col s12 m12 l12 celdaTitulo">
                                    Margen de utilidad
                                </div>
                            </row>
                        </th>
                        <th class="context-menu-subTotal box" data-field="id">
                            <row>
                                <div class="col s12 m12 l12 celdaTitulo">
                                    Total
                                </div>
                            </row>
                        </th>
                        <th class="" data-field="id">
                            <row>
                                
                                <div class="col s12 m12 l12 celdaTitulo">
                                    Opciones
                                </div>
                            </row>
                        </th>
                        <!--                        <th data-field="name">Descripción</th>-->
                        <!--                        <th data-field="price">Imagen</th>-->
                        <!--                        <th data-field="price">Precio unitario</th>-->
                        <!--                        <th data-field="price">cantidad</th>-->
                        <!--                        <th data-field="price">IV</th>-->
                        <!--                        <th data-field="price">Utilidad</th>-->
                        <!--                        <th data-field="price">Subtotal</th>-->
                        <!--                        <th data-field="price">Opciones</th>-->
                    </tr>
                    </thead>
                    <tbody id="contenedorLineas">
                    <input style="display:none" id="cantidadLineasDetalle" name="cantidadLineasDetalle" type="text" value="<?= count($resultado['lineasDetalle'])?>">
                     <?php
                    if (isset($lista)) {
                        if ($resultado['lineasDetalle'] !== false) {
                             $contador = 0;
                                foreach ($resultado['lineasDetalle'] as $lineaDealle) {
                                    $idEncriptado = encryptIt($lineaDealle['idLineaDetalle']);
                                    ?>

                                        <tr>
                                            <td style="text-align: center;">
                                                <input class="accionAplicada" style="display:none" name="linea_<?=$contador;?>" type="text" value="1"> <!-- value 1 para existentes, 0 los nuevos y 2 los eliminados -->
                                                <input style="display:none" name="idLinea_<?=$contador;?>" type="text" value="<?=$idEncriptado?>">
                                                <input type="checkbox" class="filled-in checkbox" id="checkbox_linea<?=$contador;?>"/>
                                                <label for="checkbox_linea<?=$contador;?>"></label>
                                            </td>

                                            <td>
                                                <row>
                                                    <div id="contenedorSelectProductoItem<?=$contador;?>" name="item_<?=$contador;?>" class="contenedorSelectProductoItem"></div>     
                                                </row>
                                            </td>
                                            <td>
                                                <row>
                                                    <div id="contenedorSelectProductoNombre<?=$contador;?>" name='nombre_<?=$contador;?>' class="contenedorSelectProductoNombre"></div>
                                                </row>
                                            </td>
                                            <td>
                                                <row>
                                                    <input value="Arroz, ensalada, carne" type="text" id="descripcion_<?=$contador;?>" name="descripcion_<?=$contador;?>">
                                                </row>
                                            </td>
                                            <td>
                                                <row>
                                                    <input value="$6" type="text" id="precio_<?=$contador;?>" name="precio_<?=$contador;?>">
                                                </row>
                                            </td>
                                            <td>
                                                <row>
                                                    <input value="20" type="number" id="cantidad_<?=$contador;?>" name="cantidad_<?=$contador;?>">
                                                </row>
                                            </td>
                                            <td>
                                                <row>
                                                    <div id="impuestosProducto<?=$contador;?>" class="example tags_Impuestos">
                                                        <div class="bs-example">
                                                            <input id="impuestos_<?=$contador;?>" name="impuestos_<?=$contador;?>"> placeholder="<?= label('formProducto_anadirImpuesto'); ?>" type="text"/>
                                                        </div>
                                                    </div>
                                                </row>
                                            </td>
                                            <td>
                                                <row>
                                                    <input value="2" type="number" id="utilidad_<?=$contador;?>" name="utilidad_<?=$contador;?>">
                                                </row>
                                            </td>
                                            <td>
                                                <row>
                                                    <input value="$020" type="text" id="subTotal_<?=$contador;?>" name="subTotal_<?=$contador;?>" readonly="true">
                                                </row>
                                            </td>
                                            <td>
                                                <div class="btn-linea-eliminar">
                                                    <a class="confirmarEliminarLinea" data-linea-eliminar="<?=$contador;?>" title="<?= label('paso2_lineaEliminar') ?>"><i class="mdi-action-delete small" style="color: black;"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php 
                                }
                                $contador++;
                            }
                        }

                    ?>
                    </tbody>
                </table>
            </div>
            <br>

            <div>
                <div class="col s12 m6 l7">
                    <div class="col s12">
                        <a href="#agregarServicio" class="modal-trigger opcionesDetalles">Agregar servicio</a>
                    </div>
                    <div class="col s12" style="margin-top: 20px;">
                        <a href="" class="opcionesDetalles btn-newLine">Agregar linea</a>
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
                    <div class="col s12" style="float: right;">
                        <div class="input-field col s12">
                            <input id="last_name" type="number">
                            <label for="last_name" class="">Descuento</label>
                        </div>
                        <div class="input-field col s12">
                            <input value="$140" id="last_name" type="text" disabled>
                            <label for="last_name">Total</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // function check(nombre, elemnto) {
    //     var lista = document.getElementsByClassName(nombre);
    //     var titulo = document.getElementById(elemnto.id)
    //     if (!titulo.checked) {
    //         for (var i = 0; i < lista.length; i++) {
    //             lista[i].checked = false;
    //         }
    //         ;
    //     } else {
    //         for (var i = 0; i < lista.length; i++) {
    //             lista[i].checked = true;
    //         }
    //         ;
    //     }
    //     ;
    // }
    // function check(nombre) {
    //     var lista = document.getElementsByClassName(nombre);
    //     for (var i = 0; i < lista.length; i++) {
    //         lista[i].checked = true;
    //     }
    //     ;
    // }
    // function quitarCheck(nombre) {
    //     var lista = document.getElementsByClassName(nombre);
    //     for (var i = 0; i < lista.length; i++) {
    //         lista[i].checked = false;
    //     }
    //     ;
    // }
    // $(function () {
    //     var availableTags = [
    //         "Almuerzo",
    //         "Fresco",
    //         "Hamburguesa",
    //         "Música",
    //         "Pizza",
    //         "Arroz",
    //         "Frijoles",
    //         "Ensalada",
    //         "Carne en salsa",
    //         "Pollo",
    //         "Bolsa de confites",
    //         "Piñata",
    //         "Comediante",
    //         "Animador",
    //         "Comparsa",
    //         "Mariachi",
    //         "Vino",
    //         "Tacos",
    //         "Globos",
    //         "Payaso",
    //         "Quque",
    //         "Helado"
    //     ];
    //     $(".tags").autocomplete({
    //         source: availableTags
    //     });

    //      $('.tags').bind('autocompleteopen', function(event,data){

    //       $('<li tabindex="-1" class="ui-menu-item" id=""><a href="....">Agregar producto</a></li>').prependTo('ul.ui-autocomplete');
       
    //     });

    //     $('.tags').on("input", function(){
            
    //         var primero = "true";
    //         $(".ui-menu-item").each(function(index, val) {
    //             if (!primero) {
    //                 val.remove();
    //             } 
    //             primero = false;
              
    //         });

    //         // $('.ui-menu-item').remove();
    //         $('#ui-id-2').css('display', 'block');

    //      });
           
           

    // });
</script>

<!--Funciones de checkboxes y eliminar-->
<script>
    $(window).load(function () {
        var marcados = $('.checkbox:checked').size();
        if (marcados >= 1) {
            var elems = document.getElementsByClassName('opciones-seleccionados');
            var e;
            for (e in elems) {
                elems[e].style.visibility = 'visible';
            }
        } else {
            var elems = document.getElementsByClassName('opciones-seleccionados');
            var e;
            for (e in elems) {
                elems[e].style.visibility = 'hidden';
            }
        }
        document.getElementById('checkbox-all').checked = false;
    });
    $(document).ready(function () {
        $('#botonElimnar').on("click", function (event) {
            var tb = $(this).attr('title');
            var sel = false;
            var ch = $('#' + tb).find('tbody input[type=checkbox]');
            ch.each(function () {
                var $this = $(this);
                if ($this.is(':checked')) {
                    sel = true;
                    $this.parents('tr').fadeOut(function () {
                        $this.remove();
                    });
                }
            });
            return false;
        });
    });
    $(document).ready( function () {
        $('#cotizacion1-detalles').dataTable( {
            'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0, -1] /* 1st one, start by the right */
            }]
        });
        $('table#cotizacion1-detalles thead th:first').removeClass('sorting_asc').addClass('sorting_disabled');
        $('table#cotizacion1-detalles thead th:nth-child(2)').removeClass('sorting').addClass('sorting_asc');
    });
    $(document).ready(function () {
        $('#checkbox-all').click(function (event) {
            var $this = $(this);
            var tableBody = $('#cotizacion1-detalles').find('tbody tr[role=row] input[type=checkbox]');
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
            var marcados = $('.checkbox:checked').size();
            if (marcados >= 1) {
                var elems = document.getElementsByClassName('opciones-seleccionados');
                var e;
                for (e in elems) {
                    elems[e].style.visibility = 'visible';
                }
            } else {
                var elems = document.getElementsByClassName('opciones-seleccionados');
                var e;
                for (e in elems) {
                    elems[e].style.visibility = 'hidden';
                }
            }
        });
    });
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
</script>

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

    $(document).ready(function () {
        // cargarTags_Impuestos();
    });
</script>

<script type="text/javascript" class="showcase">
    // $(function () {
    //     $.contextMenu({
    //         selector: '.context-menu-miItem',
    //         callback: function (key, options) {
    //             if (key == 'check') {
    //                 check('item');
    //             }
    //             if (key == 'noCheck') {
    //                 quitarCheck('item');
    //             }
    //             // window.console && console.log(m) || alert(m);
    //         },
    //         items: {
    //             "Agregar columna a la izquierda": {name: "Agregar columna a la izquierda", icon: "add"},
    //             "Agregar columna a la derecha": {name: "Agregar columna a la derecha", icon: "add"},
    //             "noCheck": {name: "No mostrar esta columna", icon: "delete"},
    //             "check": {name: "Mostrar esta columna", icon: "quit"}
    //             // "Salir": {name: "Salir", icon: "quit"}
    //         }
    //     });
    //     $('.context-menu-miItem').on('click', function (e) {
    //         console.log('clicked', this);
    //     })
    // });

    // $(function () {
    //     $.contextMenu({
    //         selector: '.context-menu-nombre',
    //         callback: function (key, options) {
    //             if (key == 'check') {
    //                 check('nombre');
    //             }
    //             if (key == 'noCheck') {
    //                 quitarCheck('nombre');
    //             }
    //             // window.console && console.log(m) || alert(m);
    //         },
    //         items: {
    //             "Agregar columna a la izquierda": {name: "Agregar columna a la izquierda", icon: "add"},
    //             "Agregar columna a la derecha": {name: "Agregar columna a la derecha", icon: "add"},
    //             "noCheck": {name: "No mostrar esta columna", icon: "delete"},
    //             "check": {name: "Mostrar esta columna", icon: "quit"}
    //             // "Salir": {name: "Salir", icon: "quit"}
    //         }
    //     });
    //     $('.context-menu-nombre').on('click', function (e) {
    //         console.log('clicked', this);
    //     })
    // });

    // $(function () {
    //     $.contextMenu({
    //         selector: '.context-menu-descripcion',
    //         callback: function (key, options) {
    //             if (key == 'check') {
    //                 check('descripcion');
    //             }
    //             if (key == 'noCheck') {
    //                 quitarCheck('descripcion');
    //             }
    //             // window.console && console.log(m) || alert(m);
    //         },
    //         items: {
    //             "Agregar columna a la izquierda": {name: "Agregar columna a la izquierda", icon: "add"},
    //             "Agregar columna a la derecha": {name: "Agregar columna a la derecha", icon: "add"},
    //             "noCheck": {name: "No mostrar esta columna", icon: "delete"},
    //             "check": {name: "Mostrar esta columna", icon: "quit"}
    //             // "Salir": {name: "Salir", icon: "quit"}
    //         }
    //     });
    //     $('.context-menu-descripcion').on('click', function (e) {
    //         console.log('clicked', this);
    //     })
    // });

    // $(function () {
    //     $.contextMenu({
    //         selector: '.context-menu-imagen',
    //         callback: function (key, options) {
    //             if (key == 'check') {
    //                 check('imagen');
    //             }
    //             if (key == 'noCheck') {
    //                 quitarCheck('imagen');
    //             }
    //             // window.console && console.log(m) || alert(m);
    //         },
    //         items: {
    //             "Agregar columna a la izquierda": {name: "Agregar columna a la izquierda", icon: "add"},
    //             "Agregar columna a la derecha": {name: "Agregar columna a la derecha", icon: "add"},
    //             "noCheck": {name: "No mostrar esta columna", icon: "delete"},
    //             "check": {name: "Mostrar esta columna", icon: "quit"}
    //             // "Salir": {name: "Salir", icon: "quit"}
    //         }
    //     });
    //     $('.context-menu-imagen').on('click', function (e) {
    //         console.log('clicked', this);
    //     })
    // });

    // $(function () {
    //     $.contextMenu({
    //         selector: '.context-menu-precio',
    //         callback: function (key, options) {
    //             if (key == 'check') {
    //                 check('precio');
    //             }
    //             if (key == 'noCheck') {
    //                 quitarCheck('precio');
    //             }
    //             // window.console && console.log(m) || alert(m);
    //         },
    //         items: {
    //             "Agregar columna a la izquierda": {name: "Agregar columna a la izquierda", icon: "add"},
    //             "Agregar columna a la derecha": {name: "Agregar columna a la derecha", icon: "add"},
    //             "noCheck": {name: "No mostrar esta columna", icon: "delete"},
    //             "check": {name: "Mostrar esta columna", icon: "quit"}
    //             // "Salir": {name: "Salir", icon: "quit"}
    //         }
    //     });
    //     $('.context-menu-precio').on('click', function (e) {
    //         console.log('clicked', this);
    //     })
    // });

    // $(function () {
    //     $.contextMenu({
    //         selector: '.context-menu-cantidad',
    //         callback: function (key, options) {
    //             if (key == 'check') {
    //                 check('cantidad');
    //             }
    //             if (key == 'noCheck') {
    //                 quitarCheck('cantidad');
    //             }
    //             // window.console && console.log(m) || alert(m);
    //         },
    //         items: {
    //             "Agregar columna a la izquierda": {name: "Agregar columna a la izquierda", icon: "add"},
    //             "Agregar columna a la derecha": {name: "Agregar columna a la derecha", icon: "add"},
    //             "noCheck": {name: "No mostrar esta columna", icon: "delete"},
    //             "check": {name: "Mostrar esta columna", icon: "quit"}
    //             // "Salir": {name: "Salir", icon: "quit"}
    //         }
    //     });
    //     $('.context-menu-cantidad').on('click', function (e) {
    //         console.log('clicked', this);
    //     })
    // });

    // $(function () {
    //     $.contextMenu({
    //         selector: '.context-menu-impuestoVenta',
    //         callback: function (key, options) {
    //             if (key == 'check') {
    //                 check('impuestoVenta');
    //             }
    //             if (key == 'noCheck') {
    //                 quitarCheck('impuestoVenta');
    //             }
    //             // window.console && console.log(m) || alert(m);
    //         },
    //         items: {
    //             "Agregar columna a la izquierda": {name: "Agregar columna a la izquierda", icon: "add"},
    //             "Agregar columna a la derecha": {name: "Agregar columna a la derecha", icon: "add"},
    //             "noCheck": {name: "No mostrar esta columna", icon: "delete"},
    //             "check": {name: "Mostrar esta columna", icon: "quit"}
    //             // "Salir": {name: "Salir", icon: "quit"}
    //         }
    //     });
    //     $('.context-menu-impuestoVenta').on('click', function (e) {
    //         console.log('clicked', this);
    //     })
    // });

    // $(function () {
    //     $.contextMenu({
    //         selector: '.context-menu-utilidad',
    //         callback: function (key, options) {
    //             if (key == 'check') {
    //                 check('utilidad');
    //             }
    //             if (key == 'noCheck') {
    //                 quitarCheck('utilidad');
    //             }
    //             // window.console && console.log(m) || alert(m);
    //         },
    //         items: {
    //             "Agregar columna a la izquierda": {name: "Agregar columna a la izquierda", icon: "add"},
    //             "Agregar columna a la derecha": {name: "Agregar columna a la derecha", icon: "add"},
    //             "noCheck": {name: "No mostrar esta columna", icon: "delete"},
    //             "check": {name: "Mostrar esta columna", icon: "quit"}
    //             // "Salir": {name: "Salir", icon: "quit"}
    //         }
    //     });
    //     $('.context-menu-utilidad').on('click', function (e) {
    //         console.log('clicked', this);
    //     })
    // });

    // $(function () {
    //     $.contextMenu({
    //         selector: '.context-menu-subTotal',
    //         callback: function (key, options) {
    //             if (key == 'check') {
    //                 check('subTotal');
    //             }
    //             if (key == 'noCheck') {
    //                 quitarCheck('subTotal');
    //             }
    //             // window.console && console.log(m) || alert(m);
    //         },
    //         items: {
    //             "Agregar columna a la izquierda": {name: "Agregar columna a la izquierda", icon: "add"},
    //             "Agregar columna a la derecha": {name: "Agregar columna a la derecha", icon: "add"},
    //             "noCheck": {name: "No mostrar esta columna", icon: "delete"},
    //             "check": {name: "Mostrar esta columna", icon: "quit"}
    //             // "Salir": {name: "Salir", icon: "quit"}
    //         }
    //     });
    //     $('.context-menu-subTotal').on('click', function (e) {
    //         console.log('clicked', this);
    //     })
    // });
</script>

<!-- lista modals -->
<div id="agregarServicio" class="modal" style="width: 80%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content" style="padding: 0 24px;">
        <div class="row">
            <h5 style="float: left;">Agregar servicio</h5>
        </div>
        <div class="row">
            <div class="input-field col s12 m4 l3">
                <input id="nuevoServicio_codigo" type="text">
                <label for="nuevoServicio_codigo"><?= label('formServicio_codigo') ?></label>
            </div>
            <div class="input-field col s12 m8 l9">
                <input id="nuevoServicio_nombre" type="text">
                <label for="nuevoServicio_nombre"><?= label('formServicio_nombre') ?></label>
            </div>
            <div class="input-field col s12">
                <textarea id="nuevoServicio_descripcion" class="materialize-textarea" rows="4"></textarea>
                <label for="nuevoServicio_descripcion"><?= label('formServicio_descripcion') ?></label>
            </div>
            <div class="col s12" style="padding: 0;">
                <div class="input-field col s12 m6 l5">
                    <select id="servicio_fase" name="servicio_fase">
                        <option value="" selected disabled>Seleccione la fase</option>
                        <option value="1">Fase1</option>
                        <option value="2">Fase2</option>
                        <option value="3">Fase3</option>
                    </select>
                </div>
                <div class="input-field col s12 m6 l5">
                    <select id="servicio_subFase" name="servicio_subFase">
                        <option value="" selected disabled>Seleccione la subfase</option>
                        <option value="1">Subfase1</option>
                        <option value="2">Subfase2</option>
                        <option value="3">Subfase3</option>
                    </select>
                </div>
                <div class="input-field col s12 m6 l10">
                    <a href="" style="text-decoration: underline;float: left;"><?= label('formServicio_agregarTodasFases'); ?></a>
                    <a href="" class="btn" style="display: block;margin: 0 auto;width: 40%;"><?= label('agregar'); ?></a>
                </div>
                <div>
                    <div class="col s12 m6 l4">
                        <div class="input-field">
                            <input id="nuevoServicio_busqueda" type="text">
                            <label for="nuevoServicio_busqueda"><i class="mdi-action-search"></i><?= label('formServicio_agregarRapido') ?></label>
                        </div>
                    </div>
                    <div class="col s12 m6 l8">
                        <div class="input-field col s4" style="padding-right: 0;">
                            <p style="font-size: large;margin: 15px 0 0;float: right;"><?= label('formServicio_cotizarPor') ?>:</p>
                        </div>
                        <div class="input-field col s8">
                            <select name="servicio_tiempo">
                                <option value="1" selected>Horas</option>
                                <option value="2">Días</option>
                                <option value="3">Semanas</option>
                                <option value="4">Meses</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="tabla-servicio" class="table striped" cellspacing="0">
                        <thead>
                            <tr>
                                <th><?= label('tablaServicio_codigo'); ?></th>
                                <th><?= label('tablaServicio_fase'); ?></th>
                                <th><?= label('tablaServicio_descripcion'); ?></th>
                                <th><?= label('tablaServicio_cantidad'); ?></th>
                                <th><?= label('tablaServicio_opciones'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PROG-0001</td>
                                <td>ERS</td>
                                <td>Requerimientos de software</td>
                                <td><input id="fase1_horas" type="number" value="30" /></td>
                                <td>
                                    <a href="" class="boton-opciones btn-flat white-text"><?= label('menuOpciones_eliminar'); ?></a>
<!--                                    <ul id="dropdown-fase1" class="dropdown-content">-->
<!--                                        <li>-->
<!--                                            <a href="#Editar"-->
<!--                                               class="-text modal-trigger">--><?//= label('menuOpciones_editar') ?><!--</a>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            <a href="#Eliminar"-->
<!--                                               class="-text modal-trigger">--><?//= label('menuOpciones_eliminar') ?><!--</a>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"-->
<!--                                       href="#" data-activates="dropdown-fase1">-->
<!--                                        --><?//= label('menuOpciones_seleccionar') ?><!--<i-->
<!--                                            class="mdi-navigation-arrow-drop-down"></i>-->
<!--                                    </a>-->
                                </td>
                            </tr>
                            <tr>
                                <td>PROG-0002</td>
                                <td>Analisis</td>
                                <td>Fase de analisis del sistema</td>
                                <td><input id="fase2_horas" type="number" value="30" /></td>
                                <td>
                                    <a href="" class="boton-opciones btn-flat white-text"><?= label('menuOpciones_eliminar'); ?></a>
<!--                                    <ul id="dropdown-fase2" class="dropdown-content">-->
<!--                                        <li>-->
<!--                                            <a href="#Editar"-->
<!--                                               class="-text modal-trigger">--><?//= label('menuOpciones_editar') ?><!--</a>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            <a href="#Eliminar"-->
<!--                                               class="-text modal-trigger">--><?//= label('menuOpciones_eliminar') ?><!--</a>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"-->
<!--                                       href="#" data-activates="dropdown-fase2">-->
<!--                                        --><?//= label('menuOpciones_seleccionar') ?><!--<i-->
<!--                                            class="mdi-navigation-arrow-drop-down"></i>-->
<!--                                    </a>-->
                                </td>
                            </tr>
                            <tr>
                                <td>PROG-0003</td>
                                <td>Desarrollo</td>
                                <td>Fase de desarrollo del sistema</td>
                                <td><input id="fase3_horas" type="number" value="40" /></td>
                                <td>
                                    <a href="" class="boton-opciones btn-flat white-text"><?= label('menuOpciones_eliminar'); ?></a>
<!--                                    <ul id="dropdown-fase3" class="dropdown-content">-->
<!--                                        <li>-->
<!--                                            <a href="#Editar"-->
<!--                                               class="-text modal-trigger">--><?//= label('menuOpciones_editar') ?><!--</a>-->
<!--                                        </li>-->
<!--                                        <li>-->
<!--                                            <a href="#Eliminar"-->
<!--                                               class="-text modal-trigger">--><?//= label('menuOpciones_eliminar') ?><!--</a>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"-->
<!--                                       href="#" data-activates="dropdown-fase3">-->
<!--                                        --><?//= label('menuOpciones_seleccionar') ?><!--<i-->
<!--                                            class="mdi-navigation-arrow-drop-down"></i>-->
<!--                                    </a>-->
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td>TOTAL</td>
                                <td>100</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom: 25px;margin-top: 30px;">
            <a href="#" style="font-size: larger;float: left;text-decoration: underline;"
               class="modal-action modal-close"><?= label('cancelar'); ?>
            </a>
            <a href="#" class="waves-effect btn modal-action modal-close" style="margin: 0 20px;">
                <?= label('insertarSoloLinea'); ?>
            </a>
            <a href="#" class="waves-effect btn modal-action modal-close" style="margin: 0 20px;">
                <?= label('insertarGuardarServicio'); ?>
            </a>
        </div>
    </div>
    <!--    <div class="modal-footer">-->
    <!--        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">--><?//= label('cancelar'); ?><!--</a>-->
    <!--        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">--><?//= label('aceptar'); ?><!--</a>-->
    <!--    </div>-->
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
<!-- Fin lista modals -->