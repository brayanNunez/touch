<button onclick="agregarFila()">Agregar botones(boton de prueba)</button>
<button id="botonAgregarFila">Agregar Fila(boton de prueba)</button>

<!-- <button id="myFunction">Vamos tu puedes</button> -->

<script type="text/javascript">
    
var contadorFilas = 1; //inicia en 1 porque siempre se va a mostrar uno fila con sus valores en 0
$('#botonAgregarFila').on('click', function(){
    // alert('agregar fila');
    var html = '<tr>'+
    '<td style="text-align: center;">'+
        '<input type="checkbox" class="filled-in checkbox" id="checkbox_cotizacion1_item'+contadorFilas+'"/>'+
        '<label for="checkbox_cotizacion1_item'+contadorFilas+'"></label>'+
    '</td>'+
    '<td>'+
        '<row>'+
            '<div id="contenedorSelectProductoItem'+contadorFilas+'" class="contenedorSelectProductoItem"></div>'+
        '</row>'+
    '</td>'+
    '<td>'+
        '<row>'+
            '<div id="contenedorSelectProductoNombre'+contadorFilas+'" class="contenedorSelectProductoNombre"></div>'+
       '</row>'+
    '</td>'+
    '<td>'+
        '<row>'+
            '<input value="Música en vivo" type="text" name="descripcion_'+contadorFilas+'">'+
        '</row>'+
    '</td>'+
    '<td>'+
        '<row>'+
            '<input value="musica.jpg" type="text" name="imagen_'+contadorFilas+'" readonly="true">'+
        '</row>'+
    '</td>'+
    '<td>'+
        '<row>'+
            '<input value="$200" type="text" name="precio_'+contadorFilas+'">'+
        '</row>'+
    '</td>'+
    '<td>'+
        '<row>'+
            '<input value="1" type="number" name="cantidad_'+contadorFilas+'">'+
        '</row>'+
    '</td>'+
    '<td>'+
        '<row>'+
             '<div id="impuestosProducto" class="example tags_Impuestos">'+
                '<div class="bs-example">'+
                    '<input placeholder="<?= label('formProducto_anadirImpuesto'); ?>" type="text"/>'+
                '</div>'+
            '</div>'+
        '</row>'+
    '</td>'+
    '<td>'+
        '<row>'+
            '<input value="10" type="number" name="utilidad_'+contadorFilas+'">'+
        '</row>'+
    '</td>'+
    '<td>'+
        '<row>'+
            '<input value="$200" type="text" name="subTotal_'+contadorFilas+'" readonly="true">'+
        '</row>'+
    '</td>'+
    '<td>'+
        '<div class="col s12 m12 l12 celdaBoton">'+
            '<ul id="dropdown-cotizacion1-item'+contadorFilas+'" class="dropdown-content">'+
                '<li>'+
                    '<a href="#Elminar class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>'+
                '</li>'+
            '</ul>'+
            '<a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-cotizacion1-item'+contadorFilas+'">'+
                '<?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>'+
            '</a>'+
        '</div>'+
    '</td>'+
'</tr>';

$('#contenedorLineas').append(html);
cargarTags_Impuestos();
generarAutocompletarProductoNombre(contadorFilas);
generarAutocompletarProductoItem(contadorFilas);
generarListas();
// alert('di');

contadorFilas++;
});


</script>

<div id="centered-table">
    <div class="row">
        <div class="col s12 m12 l12">
            <!-- <input type="text" class="tags"> -->

            <div id="contenerdorTablaDetalles">
                <table class="centered">
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
                        <th class="context-menu-imagen box" data-field="id">
                            <row>
                                <div class="col s12 m12 l12 celdaTitulo">
                                    Imagen
                                </div>
                            </row>
                        </th>
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
                                    Total individual
                                </div>
                            </row>
                        </th>
                        <th class="" data-field="id">
                            <row>
                                <div class="col s12 m12 l12">
                                </div>
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
                    <tr>
                        <td style="text-align: center;">
                            <input type="checkbox" class="filled-in checkbox" id="checkbox_cotizacion1_item0"/>
                            <label for="checkbox_cotizacion1_item0"></label>
                        </td>
                        <td>
                            <row>
                                <div id="contenedorSelectProductoItem0" class="contenedorSelectProductoItem"></div>     
                            </row>
                        </td>
                        <td>
                            <row>
                                <div id="contenedorSelectProductoNombre0" class="contenedorSelectProductoNombre"></div>
                            </row>
                        </td>
                        <td>
                            <row>
                                <input value="Arroz, ensalada, carne" type="text" name="descripcion_0">
                            </row>
                        </td>
                        <td>
                            <row>
                                <input value="Almuerzo.jpg" type="text" name="imagen_0" readonly="true">
                            </row>
                        </td>
                        <td>
                            <row>
                                <input value="$6" type="text" name="precio_0">
                            </row>
                        </td>
                        <td>
                            <row>
                                <input value="20" type="number" name="cantidad_0">
                            </row>
                        </td>
                        <td>
                            <row>
                                <div id="impuestosProducto" class="example tags_Impuestos">
                                    <div class="bs-example">
                                        <input placeholder="<?= label('formProducto_anadirImpuesto'); ?>" type="text"/>
                                    </div>
                                </div>
                            </row>
                        </td>
                        <td>
                            <row>
                                <input value="2" type="number" name="utilidad_0">
                            </row>
                        </td>
                        <td>
                            <row>
                                <input value="$020" type="text" name="subTotal_0" readonly="true">
                            </row>
                        </td>
                        <td>
                            <div class="col s12 m12 l12 celdaBoton">
                                <ul id="dropdown-cotizacion1-item0" class="dropdown-content">
                                    <li>
                                        <a href="#Elminar"
                                           class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                    </li>
                                </ul>
                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!"
                                   data-activates="dropdown-cotizacion1-item0">
                                    <?= label('menuOpciones_seleccionar') ?><i
                                        class="mdi-navigation-arrow-drop-down"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
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

<script>

    function cargarTags_Impuestos(){
        var Impuestos = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // prefetch: 'http://localhost/Proyectos/touch/assets/dashboard/js/json/Impuestos.json'
            prefetch: {
                url: '<?=base_url()?>Cotizacion/jsonImpuestos',
                ttl: 1000
            }
        });

        Impuestos.initialize();

        elt = $('.tags_Impuestos > > input');
        elt.tagsinput({
            itemValue: 'value',
            itemText: 'text',
            typeaheadjs: {
                name: 'Impuestos',
                displayKey: 'text',
                source: Impuestos.ttAdapter()
            }
        });

        elt.tagsinput('add', {"value": 1, "text": "Impuestos directos", "continent": "Europe"});
        elt.tagsinput('add', {"value": 2, "text": "Impuestos indirectos", "continent": "America"});
    }
    $(document).ready(function () {
        cargarTags_Impuestos();
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