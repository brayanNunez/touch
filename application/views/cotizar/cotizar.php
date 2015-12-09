
<!-- <button id="myFunction">Prueba</button> -->

<script type="text/javascript">

    // function agregarFila(){
    //     generarAutocompletarProductoNombre(3);
    //     generarAutocompletarProductoItem(3);
    //     generarListas();
    // }

    //El método botonEnLista es llamado desde el archivo chosen.jquery cuando se quiere agregar un nuevo elemento desde el select o bien puede ser llamado desde el método
    //$('.chosen-select').on('change',function(){ que se encuentra es en este mismo archivo. La razón es que el plugin chosen.jquery solo  funciona
    //el ciertos navegadores y en caso de no permitirlos (como la mayoría de los mobile) el llamado a este método (botonEnLista) se hace mediante el método $('.chosen-select').on('change',function(){
    //ubicado en este archivo.
    function botonEnLista(tipo, idBoton, nuevoElementoAgregar){
        alert("tipo: " +tipo+ " id: " + idBoton + " palabra: " + nuevoElementoAgregar);
        if (tipo == "productoItem") {
            $('#nuevoServicio_codigo').val(nuevoElementoAgregar);
            $('#linkNuevaServicio').click();
            $('#nuevoServicio_codigo').focus();
        } 
        if (tipo == "productoNombre") {
            $('#nuevoServicio_nombre').val(nuevoElementoAgregar);
            $('#linkNuevaServicio').click();
            $('#nuevoServicio_nombre').focus();
        }
        if (tipo == "paso1Atencion") {
            $('#cliente_contactoNombre').val(nuevoElementoAgregar);
            $('#linkNuevaAtencion').click();
            $('#cliente_contactoNombre').focus();
        } 
        if (tipo == "paso1Cliente") {
            $('#cliente_nombre').val(nuevoElementoAgregar);
            $('#linkNuevoCliente').click();
            $('#cliente_nombre').focus();
        } 
        if (tipo == "paso1FormaPago") {
            $('#formaPago_nombre').val(nuevoElementoAgregar);
            $('#linkNuevaFormaPago').click();
            $('#formaPago_nombre').focus();
        }
        if (tipo == "paso1Moneda") {
            $('#tipoMoneda_nombre').val(nuevoElementoAgregar);
            $('#linkNuevaMoneda').click();
            $('#tipoMoneda_nombre').focus();
        }
        if (tipo == "paso3_plantilla") {
            // alert('modal para crear plantilla');
            // $('#form_paso3AgregarPlantilla').reset();
            $('#nombrePlantilla').val(nuevoElementoAgregar);
            $('#linkNuevaPlantilla').click();
            $('#nombrePlantilla').focus();
        };
        
    }

    // function generarAutocompletarFormaPago(id){
    //     var miSelect = $('<select data-incluirBoton="1" placeholder="seleccionar" data-tipo="paso1FormaPago" id="' + id + '" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("paso1_elegirFormaPago"); ?>" class="chosen-select" style="width:350px;" tabindex="2"></select>');
    //     miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("paso1_elegirFormaPago"); ?></option>');
    //     miSelect.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');
    //     miSelect.append('<option value="Almuerzo">Contado</option>');
    //     miSelect.append('<option value="Fresco">50-50</option>');
    //     miSelect.append('<option value="Hamburguesa">Entrega</option>');

    //     $('#contenedorSelectFormaPago').html(miSelect);
    // }

    // function generarAutocompletarMoneda(id){
    //     var miSelect = $('<select data-incluirBoton="0" placeholder="seleccionar" data-tipo="paso1Moneda" id="' + id + '" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("paso1_elegirMoneda"); ?>" class="chosen-select" style="width:350px;" tabindex="2"></select>');
    //     miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("paso1_elegirMoneda"); ?></option>');
    //     miSelect.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');
    //     miSelect.append('<option value="Almuerzo">Dolar</option>');
    //     miSelect.append('<option value="Fresco">Peso</option>');
    //     miSelect.append('<option value="Hamburguesa">Colón</option>');

    //     $('#contenedorSelectMoneda').html(miSelect);
    // }

    // function generarAutocompletarCliente(id){
    //     var miSelect = $('<select data-incluirBoton="1" placeholder="seleccionar" data-tipo="paso1Cliente" id="' + id + '" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("paso1_elegirCliente"); ?>" class="chosen-select" style="width:350px;" tabindex="2"></select>');
    //     miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("paso1_elegirCliente"); ?></option>');
    //     miSelect.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');
    //     miSelect.append('<option value="Almuerzo">Brayan Nunez Rojas</option>');
    //     miSelect.append('<option value="Fresco">María Alfaro Alfaro</option>');
    //     miSelect.append('<option value="Hamburguesa">Diego Rojas Salas</option>');
    //     miSelect.append('<option value="Música">Juan Manuel Rojas</option>');

    //     $('#contenedorSelectCliente').html(miSelect);
    // }

    // function generarAutocompletarAtencion(id){
    //     var miSelect = $('<select data-incluirBoton="1" placeholder="seleccionar" data-tipo="paso1Atencion" id="' + id + '" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("paso1_elegirAtencion"); ?>" class="chosen-select" style="width:350px;" tabindex="2"></select>');
    //     miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("paso1_elegirAtencion"); ?></option>');
    //     miSelect.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');
        
    //     miSelect.append('<option value="Almuerzo">Brayan Nunez Rojas</option>');
    //     miSelect.append('<option value="Fresco">María Alfaro Alfaro</option>');
    //     miSelect.append('<option value="Hamburguesa">Diego Rojas Salas</option>');
    //     miSelect.append('<option value="Música">Juan Manuel Rojas</option>');

    //     $('#contenedorSelectAtencion').html(miSelect);


    // }

    function generarAutocompletarPlantilla(id){
        var miSelect = $('<select data-incluirBoton="1" placeholder="seleccionar" data-tipo="paso3_plantilla" id="' + id + '" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("paso3_elegirPalantilla"); ?>" class="chosen-select" style="width:350px;" tabindex="2"></select>');
        miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("paso3_elegirPlantilla"); ?></option>');
        miSelect.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');
       
        <?php 
        $contador = 0;
        foreach ($resultado['plantillas'] as $plantilla) {
            $valor = "value='".$contador++."'";
             echo 'miSelect.append("<option '.$valor.'>'.$plantilla['nombrePlantilla'].'</option>");';
        }
        
        ?>

        // miSelect.append('<option value="1">Formal</option>');
        // miSelect.append('<option value="2">Para Dos Pinos</option>');
        // miSelect.append('<option value="3">Para el gobierno</option>');
        // miSelect.append('<option value="4">Simple</option>');

        $('#contenedorSelectPalntilla').html(miSelect);
    }


     function generarAutocompletarProductoNombre(id){
        var miSelect = $('<select data-incluirBoton="1" placeholder="seleccionar" data-tipo="productoNombre" data-fila="' + id + '" id="productoNombre_' + id + '" name="productoNombre_' + id + '" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("paso2_elegirProductoNombre"); ?>" class="chosen-select nombreServicio" style="width:350px;" tabindex="2"></select>');
        miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("paso2_elegirProductoNombre"); ?></option>');
        miSelect.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');


        <?php 
        // echo print_r($resultado['servicios']);exit();

        foreach ($resultado['servicios'] as $servicio) {
            $valor = "value='".$servicio['idServicio']."'";
            echo 'miSelect.append("<option '.$valor.'>'.$servicio['nombre'].'</option>");';
        }
        
        ?>


        // miSelect.append('<option value="Almuerzo">Almuerzo</option>');
        // miSelect.append('<option value="Fresco">Fresco</option>');
        // miSelect.append('<option value="Hamburguesa">Hamburguesa</option>');
        // miSelect.append('<option value="Música">Música</option>');
        // miSelect.append('<option value="Pizza">Pizza</option>');
        // miSelect.append('<option value="Arroz">Arroz</option>');


        $('#contenedorSelectProductoNombre' + id + '').html(miSelect);
    }
    function generarAutocompletarProductoItem(id){
        var miSelect = $('<select data-incluirBoton="1" placeholder="seleccionar" data-tipo="productoItem" data-fila="' + id + '" id="productoItem_' + id + '" name="productoItem_' + id + '" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("paso2_elegirProductoItem"); ?>" class="chosen-select itemServicio" style="width:350px;" tabindex="2"></select>');
        miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("paso2_elegirProductoItem"); ?></option>');
        miSelect.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');

        <?php 
        foreach ($resultado['servicios'] as $servicio) {
            $valor = "value='".$servicio['idServicio']."'";
            echo 'miSelect.append("<option '.$valor.'>'.$servicio['codigo'].'</option>");';
        }
        
        ?>
        $('#contenedorSelectProductoItem' + id + '').html(miSelect);
    }
    function generarListas(){
        // alert("generando");

        var config = {'.chosen-select'           : {}}
          for (var selector in config) {
            $(selector).chosen(config[selector]);
          }
    }
</script>

<script type="text/javascript">

    $(document).on("ready", function(){

        generarAutocompletarProductoNombre(0);
        // generarAutocompletarProductoNombre(2);

        generarAutocompletarProductoItem(0);
        // generarAutocompletarProductoItem(2);

        


        generarAutocompletarPlantilla("paso3_plantilla");
        // generarAutocompletarAtencion("paso1_atencion");
        // generarAutocompletarCliente("paso1_cliente");
        // generarAutocompletarMoneda("paso1_moneda");
        // generarAutocompletarFormaPago("paso1_formaPago");

        generarListas();



         $(document).on('change','.chosen-select',function(){
            var valor = $(this).val();
            var tipo = $(this).attr("data-tipo");
            if (valor=="nuevo") {
                var idBoton = $(this).attr("id");
                var nuevoElementoAgregar = "";
                botonEnLista(tipo, idBoton, nuevoElementoAgregar)
            } else{
                // alert('entre 1');
                switch(tipo){
                    case 'paso3_plantilla':
                        cargarDiseno(valor, true);
                    break;
                    case 'productoItem':
                        var numeroFila = $(this).attr('data-fila');
                        var existe = verificarExiste(valor, numeroFila);
                        if (existe) {
                            alert('<?=label('paso2_servicioRepetido'); ?>');
                            $(this).val($('#productoNombre_' + numeroFila).val());
                            $(this).trigger("chosen:updated");
                        } else{
                            var select = $('#productoNombre_' + numeroFila);
                            select.val(valor);
                            select.trigger("chosen:updated");
                            cargarFila(valor, numeroFila);
                        };
                    break;
                    case 'productoNombre':
                        var numeroFila = $(this).attr('data-fila');
                        var existe = verificarExiste(valor, numeroFila);
                        if (existe) {
                            alert('<?=label('paso2_servicioRepetido'); ?>');
                            $(this).val($('#productoItem_' + numeroFila).val());
                            $(this).trigger("chosen:updated");
                        } else {
                            var select = $('#productoItem_' + numeroFila);
                            select.val(valor);
                            select.trigger("chosen:updated");
                            cargarFila(valor, numeroFila);
                        };
                    break;
//                    case 'paso1Cliente':
//                        cargarAtencion(valor);
//                    break;
//                    case 'paso1Moneda':
//                        cargarTipoCambio(valor);
//                    break;


                }
                // var numeroFila = $(this).attr('id');
                // alert(valor+', ' + tipo+ ',id: ' + idFila);
                // mostrarDatos(valor);
            };
            
        });


    });
     

</script>

<!-- START CONTENT -->
<section id="content">
    <!--start container-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="breadcrumbs-title"><?= label('tituloCotizacion'); ?></a></h5>
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
                                <!-- <div class="card"> -->
                                <div class="col s12 m12 l12">
                                    <a id="comentariosCotizacion" href="#" data-activates="chat-out"
                                       class="right waves-effect waves-block waves-light chat-collapse">
                                        <i class="mdi-communication-chat"></i></a>

                                    <div class="row">
                                        <div class="col s12">
                                            <ul class="tabs tab-demo z-depth-1">
                                                <li class="tab col s3">
                                                    <a id="botonPaso1" class="tab-paso-cotizacion active"
                                                       href="#paso1"><?= label('paso1'); ?></a>
                                                </li>
                                                <li class="tab col s3">
                                                    <a id="botonPaso2" class="tab-paso-cotizacion"
                                                       href="#paso2"><?= label('paso2'); ?></a>
                                                </li>
                                                <li class="tab col s3">
                                                    <a id="botonPaso3" class="tab-paso-cotizacion"
                                                       href="#paso3"><?= label('paso3'); ?></a>
                                                </li>
                                                <li class="tab col s3">
                                                    <a id="botonPaso4" class="tab-paso-cotizacion"
                                                       href="#paso4"><?= label('paso4'); ?></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- <div class="card"> -->
                                        <div class="col s12">
                                            <div id="paso1" class="card card-ContenidoPasos col s12">
                                                <?php $this->load->view('cotizar/paso1'); ?>
                                                <div class="atras_adelante">
                                                    <a class="siguiente right" href="#"
                                                       onclick="darclick(2);"><?= label('pasoSiguiente'); ?><i
                                                            class="mdi-image-navigate-next medium"></i></a>
                                                </div>
                                            </div>
                                            <div id="paso2" class="card card-ContenidoPasos col s12">
                                                <?php $this->load->view('cotizar/paso2'); ?>
                                                <br/>

                                                <div class="atras_adelante">
                                                    <a class="siguiente right" href="#"
                                                       onclick="darclick(3);"><?= label('pasoSiguiente'); ?><i
                                                            class="mdi-image-navigate-next medium"></i></a>
                                                    <a class="anterior left" href="#" onclick="darclick(1);"><i
                                                            class="mdi-image-navigate-before medium"></i><?= label('pasoAnterior'); ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="paso3" class="card card-ContenidoPasos col s12">
                                                <?php $this->load->view('cotizar/paso3'); ?>
                                                <br/>

                                                <div class="atras_adelante">
                                                    <a class="siguiente right" href="#"
                                                       onclick="darclick(4);"><?= label('pasoSiguiente'); ?><i
                                                            class="mdi-image-navigate-next medium"></i></a>
                                                    <a class="anterior left" href="#" onclick="darclick(2);"><i
                                                            class="mdi-image-navigate-before medium"></i><?= label('pasoAnterior'); ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="paso4" class="card card-ContenidoPasos col s12">
                                                <?php $this->load->view('cotizar/paso4'); ?>
                                                <br/>

                                                <div class="atras_adelante">
                                                    <a class="anterior left" href="#" onclick="darclick(3);"><i
                                                            class="mdi-image-navigate-before medium"></i><?= label('pasoAnterior'); ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <!-- </div> -->
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


<script type="text/javascript">


    function darclick(paso) {

        var obj = document.getElementById('botonPaso' + paso);

        obj.click();

    }
</script>






 