  <button id="pruebaInsertar">Insertar(Prueba)</button>
 <!--START CONTENT  -->
<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloFormularioServicioEditar'); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <?php
    $idServicio = '';
    $codigo = '';
    $nombre = '';
    $descripcion = '';
    $utilidad = '';
    $total = '';
    if (isset($resultado)) {
        $idServicio = encryptIt($resultado['idServicio']);;
        $codigo = $resultado['codigo'];
        $nombre = $resultado['nombre'];
        $descripcion = $resultado['descripcion'];
        $utilidad = $resultado['utilidad'];
        $total = $resultado['total'];
    }
    ?>

    <!--start container-->
    <div class="container">
        <div id="chart-dashboard">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div id="submit-button" class="section">
                        <div class="row">
                            <div class="col s12">
                                <form id="form_servicio" action="<?= base_url(); ?>servicios/modificar/<?= $idServicio; ?>" method="post" class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="servicio_codigo" name="servicio_codigo" type="text" value="<?= $codigo; ?>">
                                            <label for="servicio_codigo"><?= label('formServicio_codigo'); ?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="servicio_nombre" name="servicio_nombre" type="text" value="<?= $nombre; ?>">
                                            <label for="servicio_nombre"><?= label('formServicio_nombre'); ?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <textarea id="servicio_descripcion" name="servicio_descripcion"
                                                      class="materialize-textarea" rows="4"><?= $descripcion; ?></textarea>
                                            <label for="servicio_descripcion"><?= label('formServicio_descripcion'); ?></label>
                                        </div>
                                        <div class="inputTag col s12">
                                            <label for="impuestosServicio"><?= label('formProducto_impuestos'); ?></label>
                                            <br>
                                            <div id="impuestosServicio" class="example tags_Impuestos">
                                                <div class="bs-example">
                                                    <input id="servicio_impuestos" name="servicio_impuestos"
                                                           placeholder="<?= label('formProducto_anadirImpuesto'); ?>" type="text"/>
                                                </div>
                                            </div>
                                            <br>
                                        </div>

                                        <div class="col s12" style="padding: 0;">
                                            <!-- <div class="input-field col s12 m6 l5">
                                                <select id="servicio_fase" name="servicio_fase">
                                                    <option value="" selected disabled>Seleccione uno</option>
                                                    <option value="1">Fase1</option>
                                                    <option value="2">Fase2</option>
                                                    <option value="3">Fase3</option>
                                                </select>
                                                <label for="servicio_fase"><?= label('formServicio_seleccioneFase'); ?></label>
                                            </div> -->
                                            <div class="input-field col s12 m6 l6 inputSelector" >
                                                <label for="servicioFase"><?= label('formServicio_seleccioneFase'); ?></label>
                                                <br>
                                                <select data-incluirBoton="1" placeholder="seleccionar" data-tipo="servicioFase" id="servicioFase" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("servicio_elegirFase"); ?>" class="browser-default chosen-select" style="width:350px;" tabindex="2">
                                                    <option value="0" disabled selected style="display:none;"><?= label("servicio_elegirFase"); ?></option>
                                                    <option value="nuevo"><?= label("agregarNuevo"); ?></option>
                                                    <?php
                                                    if(isset($paises)) {
                                                        foreach ($paises as $pais) { ?>
                                                            <option value="<?= $pais['idPais']; ?>"><?= $pais['nombre']; ?></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                    <option value="1">Fase1</option>
                                                    <option value="2">Fase2</option>
                                                    <option value="3">Fase3</option>

                                                </select>
                                            </div>
                                            <!-- <div class="input-field col s12 m6 l5">
                                                <select id="servicio_subFase" name="servicio_subFase">
                                                    <option value="" selected disabled>Seleccione uno</option>
                                                    <option value="1">Subfase1</option>
                                                    <option value="2">Subfase2</option>
                                                    <option value="3">Subfase3</option>
                                                </select>
                                                <label for="servicio_subFase"><?= label('formServicio_seleccioneSubfase'); ?></label>
                                            </div> -->
                                            <div class="input-field col s12 m6 l6 inputSelector" >
                                                <label for="servicio_subFase"><?= label('formServicio_seleccioneSubfase'); ?></label>
                                                <br>
                                                <select data-incluirBoton="1" placeholder="seleccionar" data-tipo="servicio_subFase" id="servicio_subFase" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("servicio_elegirFase"); ?>" class="browser-default chosen-select" style="width:350px;" tabindex="2">
                                                    <option value="0" disabled selected style="display:none;"><?= label("servicio_elegirFase"); ?></option>
                                                    <option value="nuevo"><?= label("agregarNuevo"); ?></option>
                                                    <?php
                                                    if(isset($paises)) {
                                                        foreach ($paises as $pais) { ?>
                                                            <option value="<?= $pais['idPais']; ?>"><?= $pais['nombre']; ?></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                    <option value="1">Fase1</option>
                                                    <option value="2">Fase2</option>
                                                    <option value="3">Fase3</option>

                                                </select>
                                            </div>
                                            <div class="input-field col s12 m6 l12" style="margin-top: 5px;">
                                                <a href="" style="text-decoration: underline;float: left;"><?= label('formServicio_agregarTodasFases'); ?></a>
                                                <a id= "agregarFase" class="btn" style="display: block;margin: 0 auto;width: 40%;"><?= label('agregar'); ?></a>
                                            </div>
                                            <div class="col s12" style="margin-top: 15px;padding: 0;">
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
                                           
                                            <input style="display:none" id="cantidadFases" name="cantidadFases" type="text" value="<?= count($resultado['misFases'])?>">    
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


                                                    <?php
                                                        if (isset($resultado)) {
                                                        
                                                            if ($resultado !== false) {   
                                                            $contador = 0;                                                                 
                                                                    foreach ($resultado['misFases'] as $fase) {
                                                                        ?>

                                                                         <tr>
                                                                            <td><?=$fase['codigo']?></td>
                                                                            <td><?=$fase['nombre']?></td>
                                                                            <td><?=$fase['notas']?></td>
                                                                            <td><?=$fase['p_codigo']?></td>
                                                                            <td><?=$fase['p_nombre']?></td>
                                                                            <td><?=$fase['p_notas']?></td>
                                                                            <td style="display:none"><input  name="id_<?=$contador?>" id="id_<?=$contador?>" type="number" value="<?=$fase['idFase']?>" /></td>
                                                                            <td><input class="cantidad" name="cantidadhoras_<?=$contador?>" id="cantidadhoras_<?=$contador?>" type="number" value="<?=$fase['cantidadTiempo']?>" /></td>
                                                                            <td>                                                       
                                                                                <a href="#eliminarFase" data-id-eliminar="1" class="-text modal-trigger confirmarEliminar boton-opciones btn-flat white-text"><?= label('menuOpciones_eliminar'); ?></a>
                                                                            </td>
                                                                        </tr>

                                                                        <?php
                                                                        $contador++;
                                                                    }
                                                                } 
                                                            }
                                                        ?>

                                                   <!--  <tr>
                                                        <td>PROG-0001</td>
                                                        <td>ERS</td>
                                                        <td>Requerimientos de software</td>
                                                        <td>PROG-0001Padre</td>
                                                        <td>ERSPadre</td>
                                                        <td>Requerimientos de softwarePadre</td>
                                                        <td><input class="cantidad" id="fase1_horas" type="number" value="30" /></td>
                                                        <td>
                                                            <a href="#eliminarFase" data-id-eliminar="1" class="-text modal-trigger confirmarEliminar boton-opciones btn-flat white-text"><?= label('menuOpciones_eliminar'); ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>PROG-0001</td>
                                                        <td>ERS2</td>
                                                        <td>Requerimientos de software</td>
                                                        <td>PROG-0002Padre</td>
                                                        <td>ERSPadre</td>
                                                        <td>Requerimientos de softwarePadre</td>
                                                        <td><input class="cantidad" id="fase1_horas" type="number" value="30" /></td>
                                                        <td>
                                                            <a href="#eliminarFase" data-id-eliminar="1" class="-text modal-trigger confirmarEliminar boton-opciones btn-flat white-text"><?= label('menuOpciones_eliminar'); ?></a>
                                                        </td>
                                                    </tr> -->
                                                    
                                                   
                                                    <!-- <tr>
                                                        <td colspan="2"></td>
                                                        <td>TOTAL</td>
                                                        <td>100</td>
                                                        <td></td>
                                                    </tr> -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="input-field col offset-s6 s6">
                                            <input id="servicio_utilidad" name="servicio_utilidad" type="number" value="<?= $utilidad; ?>">
                                            <label for="servicio_utilidad"><?= label('formServicio_utilidad'); ?>
                                            </label>
                                        </div>
                                        <div class="input-field col offset-s6 s6">
                                            <input id="servicio_total" name="servicio_total" type="number" value="<?= $total; ?>" readonly>
                                            <label for="servicio_total"><?= label('formServicio_total'); ?></label>
                                        </div>

                                        <div class="input-field col s12 envio-formulario">
                                            <button class="btn waves-effect waves-light right" type="submit"
                                                    name="action"><?= label('formServicio_editar'); ?>
                                            </button>
                                        </div>
                                    </div>
                                </form>
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
    <a id="linkModalGuardado" href="#transaccionCorrecta" class="btn btn-default modal-trigger"></a>
    <a id="linkModalError" href="#transaccionIncorrecta" class="btn btn-default modal-trigger"></a>
</div>
<!-- END CONTENT-->

<script>

<?php 
$js_array = json_encode($resultado['fases']); 
echo "var arrayFases =". $js_array;?> 

    $(document).on('ready', function(){

        $('#agregarFase').on('click', function(){
            alert('ahora');
            agregarFila('codigo', 'nombre', 'des', 'cantidad', 'codigoPadre', 'nombrePadre', 'desPadre');
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
            } else{
                if (tipo == 'servicioFase') {
                    cargarSubFases(valor);
                } 
                
                
            };
            
        });

    // });

    

    function cargarSubFases(idFasePadre){
        $('#servicio_subFase').empty(); //remove all child nodes
        $('#servicio_subFase').append($('<option value="0" disabled selected style="display:none;"><?= label("servicio_elegirSubFase"); ?></option>'));
        $('#servicio_subFase').append($('<option value="nuevo"><?= label("agregarNuevo"); ?></option>'));
        for (var i = 0; i < arrayFases.length; i++) {
            if (arrayFases[i]['idFase'] == idFasePadre) {
                for (var j = 0; j < arrayFases[i]['subfases'].length; j++) {
                    var newOption = $('<option value="'+arrayFases[i]['subfases'][j]['idFase']+'">'+arrayFases[i]['subfases'][j]['nombre']+'</option>');
                    $('#servicio_subFase').append(newOption);
                }
            } 
        };

        $('#servicio_subFase').trigger("chosen:updated");

    }

    function cargarFases(){
        $('#servicioFase').empty(); //remove all child nodes
        $('#servicioFase').append($('<option value="0" disabled selected style="display:none;"><?= label("servicio_elegirFase"); ?></option>'));
        $('#servicioFase').append($('<option value="nuevo"><?= label("agregarNuevo"); ?></option>'));
        for (var i = 0; i < arrayFases.length; i++) {
             var newOption = $('<option value="'+arrayFases[i]['idFase']+'">'+arrayFases[i]['nombre']+'</option>');
             $('#servicioFase').append(newOption);
        };
        $('#servicioFase').trigger("chosen:updated");

    }


// $(document).ready(function() {



    $('#pruebaInsertar').on('click', function(){
       agregarFila();
    });

    function actualizarCantidad(){
        $('#cantidadFases').val(cantidad);
    }

    var cantidad = <?= count($resultado['misFases'])?>;
    var contador = cantidad;
    function agregarFila(codigo, nombre, des, cantidad, codigoPadre, nombrePadre, desPadre){
            cantidad++;
            actualizarCantidad();
       
            var boton = '<a href="#eliminarFase" data-id-eliminar="1" class="-text modal-trigger confirmarEliminar boton-opciones btn-flat white-text"><?= label('menuOpciones_eliminar'); ?></a>';
            // var codigo = 'PROG-0001';
            // var nombre = 'ERS';
            // var des = 'Requerimientos de software Nuevo';
            var idFase = '<input class="id_fase"  name="id_'+contador+'" id="id_'+contador+'" type="number" value="<?=$fase['idFase']?>" />';                                                             
            var cantidad = '<input class="cantidad" name="cantidadhoras_'+contador+'" id="cantidadhoras_'+contador+'" type="number" value="0" />';
            // var codigoPadre = 'PROG-0002Padre';
            // var nombrePadre = 'ERSPadre';
            // var desPadre = 'Requerimientos de softwarePadre';



           $('table').dataTable().fnAddData([
            codigo,
            nombre,
            des,
            codigoPadre,
            nombrePadre,
            desPadre,
            idFase,
            cantidad,
            boton ]);

            $('.id_fase').parent('td').css('display', 'none');

            $('.modal-trigger').leanModal();
      
            contador++;
            
            };

        // function generarListasBotones(){
        //   $('.boton-opciones').sideNav({
        //   // menuWidth: 0, // Default is 240
        //    edge: 'right', // Choose the horizontal origin
        //       closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
        //     }
        //   );

    //       $('.dropdown-button').dropdown({
    //           inDuration: 300,
    //           outDuration: 225,
    //           constrain_width: true, // Does not change width of dropdown to that of the activator
    //           hover: false, // Activate on hover
    //           gutter: 0, // Spacing from edge
    //           belowOrigin: true, // Displays dropdown below the button
    //           alignment: 'left' // Displays dropdown with edge aligned to the left of button
    //         }
          
       // var idEliminar = 0;
       var filaEliminar = null;
   
       $(document).on('click','.confirmarEliminar', function () {
           // idEliminar = $(this).data('id-eliminar');
           filaEliminar = $(this).parents('tr');
           
       });
   
        $('#eliminarFase #botonEliminar').on('click', function () {
           event.preventDefault();
           // $.ajax({
                  // data: {idEliminar : idEliminar},
                  // url:   '<?=base_url()?>impuesto/eliminar',
                  // type:  'post',
                  // beforeSend: function () {
                  //         $("#resultado").html("Procesando, espere por favor...");
                  // },
                  // success:  function (response) {
                   // if (response==1) {
                       filaEliminar.fadeOut(function () {
                       // filaEliminar.remove();
                       $('table').dataTable().fnDeleteRow(filaEliminar);
                       verificarChecks();
                       });

                        cantidad--;
                        actualizarCantidad();
                       
                   // } else{
                       // $('#linkModalErrorEliminar').click();
                   // };
               // }
           // });
        });


        var table = $('table').DataTable({
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
                var contadorGrupo = 0;
                api.column(3, {page:'current'} ).data().each( function ( group, i ) {
                    var codigo = group;
                    var nombre =  api.column(4, {page:'current'} ).data()[i];
                    var descripcion =  api.column(5, {page:'current'} ).data()[i];
                     // alert(group +', '+nombre, +', '+descripcion);
                    if ( last !== group ) {
                         // alert(group);
                        $(rows).eq( i ).before(
                            '<tr class="group"><td>'+codigo+'</td><td>'+nombre+'</td><td>'+descripcion+'</td><td id="grupo'+ contadorGrupo++ +'">0</td><td></td></tr>'
                        );

                        last = group;
     
                    }
                    cantidadGrupo = $(rows).eq( i ).find('.cantidad').val();
                    var valorActual = parseInt($("#grupo" + (contadorGrupo -1)).text()) + parseInt(cantidadGrupo);
                    $("#grupo" + (contadorGrupo -1)).text(valorActual);
                    
                });
        }

    } );

 
    // Order by the grouping
    $('table tbody').on( 'click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if ( currentOrder[0] === 3 && currentOrder[1] === 'asc' ) {
            table.order( [ 3, 'desc' ] ).draw();
        }
        else {
            table.order( [ 3, 'asc' ] ).draw();
        }
    } );

    $('.cantidad').on('change', function(){
        alert('hola');
         
    })
});



    function validacionCorrecta_Servicios(){
        var codigoActual = '<?= $codigo; ?>';
        var codigoNuevo = $('#servicio_codigo').val();
        if(codigoActual == codigoNuevo) {
            var formulario = $('#form_servicio');
            var data = formulario.serialize();
            var url = formulario.attr('action');
            var method = formulario.attr('method');
            $.ajax({
                type: method,
                url: url,
                data: data,
                success: function(response)
                {
                    if (response == 0) {
                        $('#linkModalError').click();
                    } else {
                        $('#linkModalGuardado').click();
                    }
                }
            });
        } else {
            $.ajax({
                data: {servicio_codigo: $('#servicio_codigo').val()},
                url: '<?=base_url()?>servicios/existeCodigo',
                type: 'post',
                success: function (response) {
                    switch (response) {
                        case '0':
                            $('#linkModalError').click();//error al ir a verificar codigo
                            break;
                        case '1':
                            alert('<?= label("servicioCodigoExistente"); ?>');
                            $('#servicio_codigo').focus();
                            break;
                        case '2':
                            var formulario = $('#form_servicio');
                            var data = formulario.serialize();
                            var url = formulario.attr('action');
                            var method = formulario.attr('method');
                            $.ajax({
                                type: method,
                                url: url,
                                data: data,
                                success: function (response) {
                                    switch (response) {
                                        case '0':
                                            $('#linkModalError').click();
                                            break;
                                        case '1':
                                            $('#linkModalGuardado').click();
                                            break;
                                    }
                                }
                            });
                            break;
                    }
                }
            });
        }
    }
</script>

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

        <?php 
        foreach ($resultado['impuestos'] as $impuesto) {
             echo 'elt.tagsinput("add", '.json_encode($impuesto).');';
        }
        ?>
         // elt.tagsinput("add", {"nombre":"Impuesto de venta"});


        // elt.tagsinput('add', {"value": 1, "text": "Impuestos directos", "continent": "Europe"});
        // elt.tagsinput('add', {"value": 2, "text": "Impuestos indirectos", "continent": "America"});
    });
</script>

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
    $(document).ready(function () {
        $('#checkbox-all').click(function (event) {
            if (this.checked) {
                $('.checkbox').each(function () {
                    this.checked = true;
                });
            } else {
                $('.checkbox').each(function () {
                    this.checked = false;
                });
            }
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

<!-- lista modals -->
<div id="transaccionCorrecta" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('servicioEditadoCorrectamente'); ?></p>
    </div>
    <div class="modal-footer">
        <a href="<?= base_url(); ?>servicios?>" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
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
</div>

<div id="gastoNuevo" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <input id="gasto_nombre" type="text" value="">
            <label for="gasto_nombre"><?= label('formServicio_gastoAdicionalNombre'); ?></label>
        </div>
        <div class="input-field col s12">
            <input id="gasto_monto" type="text" value="">
            <label for="gasto_monto"><?= label('formServicio_gastoAdicionalMonto'); ?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="agregarPersona" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <select>
                <option value="" selected>Seleccione uno</option>
                <option value="1"><?= label('formServicio_nuevaPersonaEmpleado') ?></option>
                <option value="2"><?= label('formServicio_nuevaPersonaProveedor') ?></option>
            </select>
            <label for="persona_tipo"><?= label('formServicio_nuevaPersonaTipo'); ?></label>
        </div>
        <div class="input-field col s12">
            <input id="persona_codigo" type="text" value="">
            <label for="persona_codigo"><?= label('formServicio_nuevaPersonaCodigo'); ?></label>
        </div>
        <div class="input-field col s12">
            <input id="persona_id" type="text" value="">
            <label for="persona_id"><?= label('formServicio_nuevaPersonaIdentificacion'); ?></label>
        </div>
        <div class="input-field col s12">
            <input id="persona_nombre" type="text" value="">
            <label for="persona_nombre"><?= label('formServicio_nuevaPersonaNombre'); ?></label>
        </div>
        <div class="input-field col s12">
            <textarea id="persona_descripcion" class="materialize-textarea" length="120"></textarea>
            <label for="persona_descripcion"><?= label('formServicio_nuevaPersonaDescripcion'); ?></label>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <select>
                    <option value="">Seleccione</option>
                    <option value="1" selected><?= label('horas') ?></option>
                    <option value="2"><?= label('dia') ?></option>
                    <option value="3"><?= label('semana') ?></option>
                    <option value="4"><?= label('quincena') ?></option>
                    <option value="5"><?= label('mes') ?></option>
                </select>
                <label for=""><?= label('formServicio_nuevaPersonaSalarioTipo'); ?></label>
            </div>
            <div class="input-field col s6">
                <input id="persona_salarioMonto" type="text" value="">
                <label for="persona_salarioMonto"><?= label('formServicio_nuevaPersonaSalarioMonto'); ?></label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="eliminarElemento" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarElementoServicio'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="editar" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <input id="client_code" type="text" value="Maria Rodriguez">
            <label for="client_code"><?= label('formCliente_nombreContacto'); ?></label>
        </div>
        <div class="input-field col s12">
            <input id="client_code" type="text" value="maria@gmail.com">
            <label for="client_code"><?= label('formCliente_correoContacto'); ?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="agregar" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <input id="client_code" type="text" value="">
            <label for="client_code"><?= label('formCliente_nombreContacto'); ?></label>
        </div>
        <div class="input-field col s12">
            <input id="client_code" type="text" value="">
            <label for="client_code"><?= label('formCliente_correoContacto'); ?></label>
        </div>
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
        <div id="botonElimnar" title="servicio1-gastos">
            <a href="#"
               class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
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
<!-- Fin lista modals