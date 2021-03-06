<form id="formGeneral" class="section">
    <div class="row">
        <div class="input-field col s6 m3 l3">
            <div class="input-field col s12">
                <input id="paso1_codigo" name="paso1_codigo" type="text" value="<?= $resultado['empresa']['codigoCotizacion']?>">
                <label for="paso1_codigo" class="label_campoTexto"><?= label("paso1_labelCodido"); ?></label>
            </div>
        </div>
        <div class="input-field col s6 m3 l3">
            <div class="input-field col s12">
                <input readonly id="paso1_numero" name="paso1_numero" type="text" value='#'>
                <label for="paso1_numero" class="label_campoTexto"><?= label("paso1_labelNumero"); ?></label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 m6 l6 inputSelector">            
            <label for="contenedorSelectCliente"><?= label("paso1_labelCliente"); ?></label>
            <br>
            <div id="contenedorSelectCliente">  
                <select data-incluirBoton="1" placeholder="seleccionar" data-tipo="paso1Cliente" id="paso1Cliente" name="paso1Cliente" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("paso1_elegirCliente"); ?>" class="chosen-select browser-default" style="width:350px;" tabindex="2">
                    <option value="0" disabled selected style="display:none;"><?= label("paso1_elegirCliente"); ?></option>
                    <option value="nuevo"><?= label("agregarNuevo"); ?></option>
                    <?php 
                        foreach ($resultado['clientes'] as $cliente) {
                            $valor = "value='".$cliente['idCliente']."'";
                            if ($cliente['todosVendedores'] == 1 || $cliente['valido'] == 1) {
                                echo '<option '.$valor.'>'.$cliente['nombre'].' '.$cliente['primerApellido'].' '.$cliente['segundoApellido'].'</option>");';
                            } else{
                                echo '<option '.$valor.' disabled>'.$cliente['nombre'].' '.$cliente['primerApellido'].' '.$cliente['segundoApellido'].'</option>");';
                            }
                        }
                            
                    ?>
                </select>  
             </div>
        </div>
        <div class="input-field col s12 m6 l6 inputSelector">
            <!-- <input id="client-contact" type="text"> -->
            <!-- <div>
               
                
            </div> -->
            <!-- <a id="cotizacion-agregarAtencion" class="btn modal-trigger" href="#agregarAtencion" data-toggle="tooltip" title="Agregar nuevo contacto">
                <i class="mdi-content-add col s1"></i>

            </a> -->
            
            <label for="contenedorSelectAtencion"><?= label("paso1_labelContacto"); ?></label>
            <br>
            <div id="contenedorSelectAtencion">  
                <select disabled='disabled' data-incluirBoton="1" placeholder="seleccionar" data-tipo="paso1Atencion" id="paso1Atencion" name="paso1Atencion" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("paso1_elegirAtencion"); ?>" class="chosen-select browser-default" style="width:350px;" tabindex="2">
                   <!-- <option value="0" disabled selected style="display:none;"><?= label("paso1_elegirAtencion"); ?></option>
                   <option value="nuevo"><?= label("agregarNuevo"); ?></option>
                    
                   <option value="Almuerzo">Brayan Nunez Rojas</option>
                   <option value="Fresco">María Alfaro Alfaro</option>
                   <option value="Hamburguesa">Diego Rojas Salas</option>
                   <option value="Música">Juan Manuel Rojas</option> -->
                </select>
             </div>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 m6 l6 inputSelector">            
            <label for="contenedorSelectFormaPago"><?= label("paso1_labelFormaPago"); ?></label>
            <br>
            <div id="contenedorSelectFormaPago">
                <select data-incluirBoton="1" placeholder="seleccionar" data-tipo="paso1FormaPago" id="paso1FormaPago" name="paso1FormaPago" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("paso1_elegirFormaPago"); ?>" class="chosen-select browser-default" style="width:350px;" tabindex="2">
                    <option value="0" disabled selected style="display:none;"><?= label("paso1_elegirFormaPago"); ?></option>
                    <option value="nuevo"><?= label("agregarNuevo"); ?></option>
                    <?php 
                        foreach ($resultado['formasPago'] as $forma) {
                            $valor = "value='".$forma['idFormaPago']."'";
                            echo '<option '.$valor.'>'.$forma['nombre'].'</option>");';
                        }
                    ?>
                </select>    
             </div>
        </div>
        <div class="input-field col s12 m6 l6 inputSelector">            
            <label for="contenedorSelectMoneda"><?= label("paso1_labelTipoMoneda"); ?></label>
            <br>
            <div id="contenedorSelectMoneda"> 
                <select data-incluirBoton="1" placeholder="seleccionar" data-tipo="paso1Moneda" id="paso1Moneda" name="paso1Moneda"
                        data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("paso1_elegirMoneda"); ?>"
                        class="chosen-select browser-default" style="width:350px;" tabindex="2">
                    <option value="0" disabled selected style="display:none;"><?= label("paso1_elegirMoneda"); ?></option>
                    <option value="nuevo"><?= label("agregarNuevo"); ?></option>
                    <?php 
                        foreach ($resultado['monedas'] as $moneda) {
                            $valor = "value='".$moneda['idMoneda']."'";
                            echo '<option '.$valor.'>'.$moneda['nombre'].'</option>");';
                        }
                    ?>
                </select>   
             </div>
        </div>
        
    </div>
    <div class="row">
        <div class="input-field col s12 m6 l6">
            <input id="paso1_validez" name="paso1_validez" class="datepicker-fechaCotizacion" type="text">
            <label for="paso1_validez"><?= label("paso1_labelTiempoVlidez"); ?></label>
        </div>
        <div class="input-field col s12 m6 l6">
            <input id="paso1_tipoCambio" name="paso1_tipoCambio" type="text">
            <label for="paso1_tipoCambio" class="label_campoTexto"><?= label("paso1_labelTipoCambio"); ?></label>
        </div>
     <!--    <div class="input-field col s12">
            <textarea id="paso1_detalle" class="materialize-textarea" style="height: 24px;"></textarea>
            <label for="paso1_detalle" class=""><?= label("paso1_labelDetalle"); ?></label>
        </div> -->
    </div>
</form>
<div style="visibility:hidden; position:absolute">
    <a id="linkNuevaMoneda" href="#agregarTipoMoneda" class="modal-trigger"></a>
    <a id="linkNuevaFormaPago" href="#agregarFormaPago" class="modal-trigger"></a>
    <a id="linkNuevaAtencion" href="#agregarContacto" class="modal-trigger"></a>
    <a id="linkNuevoCliente" href="#agregarCliente" class="modal-trigger"></a>
</div>

<script>
    $(document).on('ready', function(){
        var config = {'.chosen-select'           : {}}
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }

    });

    
</script>

<!--Script para manejo de datos de cotizacion_editar y valores precargados (codigo) -->
<script>
    var arrayCotizacion = [];
    <?php 
        $js_array = json_encode($resultado['clientes']); 
        echo "var arrayClientes =". $js_array.";";

        $js_array = json_encode($resultado['monedas']); 
        echo "var arrayMonedas =". $js_array.";";


        if (isset($resultado['cotizacion'])) {// se esta editando una cotizacion
            $js_array = json_encode($resultado['cotizacion']); 
            echo "arrayCotizacion =". $js_array.";";
            ?>
                $('#paso1_codigo').val(arrayCotizacion['codigo']);
                var numero = arrayCotizacion['numero'];
                if (arrayCotizacion['numero'] == 0) {// es una cotizacion duplicada
                    numero = '#';
                };
                $('#paso1_numero').val(numero);
                if ($('#paso1Cliente option[value='+ arrayCotizacion['idCliente'] +']').attr('disabled') != 'disabled') {
                    $('#paso1Cliente option[value='+ arrayCotizacion['idCliente'] +']').prop('selected', true);
                    if(arrayCotizacion['idCliente'] != null){
                        // alert(arrayCotizacion['idCliente']);
                        actualizarSelectContactos(arrayCotizacion['idCliente'], arrayCotizacion['idPersonaContacto']);
                        // cargarAtencion(arrayCotizacion['idCliente']);
                    }
                };
                
                
                // $('#paso1Atencion option[value='+ arrayCotizacion['idPersonaContacto'] +']').prop('selected', true);
                $('#paso1FormaPago option[value='+ arrayCotizacion['idFormaPago'] +']').prop('selected', true);
                $('#paso1Moneda option[value='+ arrayCotizacion['idMoneda'] +']').prop('selected', true);
                $('#paso1_tipoCambio').val(arrayCotizacion['tipoCambio']);
                $('#paso1_validez').val('<?php if($resultado['cotizacion']['fechaValidez'] != '0000-00-00 00:00:00') { echo date("d-m-Y", strtotime($resultado['cotizacion']['fechaValidez']));}?>');

                // var date = new Date(arrayCotizacion['fechaValidez']);
                // var fecha = (date.getMonth() + 1) + '/' + date.getDate() + '/' +  date.getFullYear();
                // $('#paso1_validez').val(fecha);


                // alert(arrayCotizacion['codigo']);
            <?php
        } 
    ?> 

    // $(document).on('ready', function(){
    //     alert('hola');
    // });
    

    function cargarTipoCambio(idMoneda){
        // alert('aqui');
        for (var i = 0; i < arrayMonedas.length; i++) {
            if (arrayMonedas[i]['idMoneda'] == idMoneda) {
                $('#paso1_tipoCambio').val(arrayMonedas[i]['tipoCambio']);
                $('#paso1_tipoCambio').focus();
            }
        };
    }

    $('#paso1_tipoCambio').on('change', function(){
        modificarMontos();
    });


    function actualizarSelectMonedas($id) {
        $.ajax({
            type: 'POST',
            url: '<?= base_url(); ?>cotizacion/tiposMoneda',
            data: {  },
            success: function(response)
            {
                generarAutocompletarMoneda($.parseJSON(response), $id);
                generarListas();
            }
        });
    }
    function actualizarSelectFormasPago($id) {
        $.ajax({
            type: 'POST',
            url: '<?= base_url(); ?>cotizacion/formasPago',
            data: {  },
            success: function(response)
            {
                generarAutocompletarFormaPago($.parseJSON(response), $id);
                generarListas();
            }
        });
    }
    function actualizarSelectClientes($id) {
        $.ajax({
            type: 'POST',
            url: '<?= base_url(); ?>cotizacion/clientes',
            data: {  },
            success: function(response)
            {
                arrayClientes = $.parseJSON(response);
                generarAutocompletarClientes($.parseJSON(response), $id);
                generarListas();
            }
        });
    }
    function actualizarSelectContactos($idCliente, $id) {
        // alert('actualizando contactos');
        $.ajax({
            type: 'POST',
            url: '<?= base_url(); ?>cotizacion/contactos',
            data: { idCliente : $idCliente },
            success: function(response)
            {
                // arrayClientes = $.parseJSON(response);
                generarAutocompletarContactos($.parseJSON(response), $id);
                generarListas();
            }
        });
    }

    // function botonEnLista_2(tipo, idBoton, nuevoElementoAgregar){
    //     if (tipo == "paso1Cliente") {
    //         $('#cliente_nombre').val(nuevoElementoAgregar);
    //         $('#linkNuevoCliente').click();
    //         $('#cliente_nombre').focus();
    //     }
    //     if (tipo == "paso1FormaPago") {
    //         $('#formaPago_nombre').val(nuevoElementoAgregar);
    //         $('#linkNuevaFormaPago').click();
    //         $('#formaPago_nombre').focus();
    //     }
    //     if (tipo == "paso1Moneda") {
    //         $('#tipoMoneda_nombre').val(nuevoElementoAgregar);
    //         $('#linkNuevaMoneda').click();
    //         $('#tipoMoneda_nombre').focus();
    //     }
    //     if (tipo == "paso1Atencion") {
    //         $('#cliente_contactoNombre').val(nuevoElementoAgregar);
    //         $('#linkNuevaAtencion').click();
    //         $('#cliente_contactoNombre').focus();
    //     }
    // }

    function generarAutocompletarMoneda($array, $id){
        var miSelect = $('#paso1Moneda');
        miSelect.empty();
        miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("paso1_elegirMoneda"); ?></option>');
        miSelect.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');
        for(var i = 0; i < $array.length; i++) {
            var moneda = $array[i];
            if(moneda != null) {
                if(moneda['idMoneda'] == $id){
                    miSelect.append('<option value="' + moneda['idMoneda'] + '" selected>' + moneda['nombre'] + '</option>');
                } else {
                    miSelect.append('<option value="' + moneda['idMoneda'] + '">' + moneda['nombre'] + '</option>');
                }
            }
        }
        miSelect.trigger("chosen:updated");
    }
    function generarAutocompletarFormaPago($array, $id){
        var miSelect = $('#paso1FormaPago');
        miSelect.empty();
        miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("paso1_elegirFormaPago"); ?></option>');
        miSelect.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');
        for(var i = 0; i < $array.length; i++) {
            var formaP = $array[i];
            if(formaP != null) {
                if(formaP['idFormaPago'] == $id) {
                    miSelect.append('<option value="' + formaP['idFormaPago'] + '" selected>' + formaP['nombre'] + '</option>');
                } else {
                    miSelect.append('<option value="' + formaP['idFormaPago'] + '">' + formaP['nombre'] + '</option>');
                }
            }
        }
        miSelect.trigger("chosen:updated");
    }
    // function generarAutocompletarClientes($array, $id){
    //     alert('hola');
    //     var miSelect = $('#paso1Cliente');
    //     miSelect.empty();
    //     miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("paso1_elegirCliente"); ?></option>');
    //     miSelect.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');
    //     for(var i = 0; i < $array.length; i++) {
    //         var cliente = $array[i];
    //         if(cliente != null) {
    //             var nombreCliente = cliente['nombre'] + ' ' + cliente['primerApellido'] + ' ' cliente['segundoApellido'];
    //             var disabled = '';
    //             if (cliente['todosVendedores'] == 1 || cliente['valido'] == 1) {
    //                 disabled = 'disabled';
    //             }
    //             if(cliente['idCliente'] == $id) {
    //                 miSelect.append('<option value="' + cliente['idCliente'] + '" selected '+disabled+'>' + nombreCliente + '</option>');
    //             } else {
    //                 miSelect.append('<option value="' + cliente['idCliente'] + ' '+disabled+'">' + nombreCliente + '</option>');
    //             }
    //         }
    //     }
    //     miSelect.trigger("chosen:updated");
    // }

    function generarAutocompletarClientes($array, $id){
        var miSelect = $('#paso1Cliente');
        miSelect.empty();
        miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("paso1_elegirCliente"); ?></option>');
        miSelect.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');
        for(var i = 0; i < $array.length; i++) {
            var cliente = $array[i];
            if(cliente != null) {
                if (cliente['primerApellido'] == null) {
                    cliente['primerApellido'] = '';
                }
                if (cliente['segundoApellido'] == null) {
                    cliente['segundoApellido'] = '';
                } 
                var nombreCliente = cliente['nombre'] + ' ' + cliente['primerApellido'] + ' ' + cliente['segundoApellido'];
                // if(cliente['juridico'] == false) {
                //     nombreCliente = cliente['nombre'] + ' ' + cliente['primerApellido'] + ' ' cliente['segundoApellido'];
                // }
                var disabled = '';
                if (!(cliente['todosVendedores'] == 1 || cliente['valido'] == 1)) {
                    disabled = 'disabled';
                } 
                if(cliente['idCliente'] == $id) {
                    var selected = 'selected';
                    if (disabled == 'disabled') {
                        selected = '';
                        bloquearAutocompletarContactos();
                    } else {
                        actualizarSelectContactos($id, 0);//Si el usuario actual es un vendedor de este cliente, quiere decir que el cliente va a salir seleccionado instantáneamente por lo que cargamos el select de contactos. Si no fuera vendedor de este cliente no se cargaría en el select de clientes como seleccionado y por ende tampoco se le cargan los  contactos.
                    }
                    miSelect.append('<option value="' + cliente['idCliente'] + '" '+disabled+' '+selected+'>' + nombreCliente + '</option>');
                } else {
                    miSelect.append('<option value="' + cliente['idCliente'] + '" '+disabled+'>' + nombreCliente + '</option>');
                }
            }
        }
        miSelect.trigger("chosen:updated");

        var clienteElegido =  $id;
        cargarValoresDefectoCliente(clienteElegido);
    }


    function generarAutocompletarContactos($array, $id){
        // alert($id);
        var miSelect = $('#paso1Atencion');
        miSelect.empty();
        miSelect.removeAttr('disabled');
        miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("paso1_elegirAtencion"); ?></option>');
        miSelect.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');
        for(var i = 0; i < $array.length; i++) {
            var atencion = $array[i];
            if(atencion != null) {
                if(atencion['idPersonaContacto'] == $id) {
                    miSelect.append('<option value="' + atencion['idPersonaContacto'] + '" selected>' + atencion['nombreContacto'] + '</option>');
                } else {
                    if ($id == 0 && atencion['principal'] == 1) {
                        miSelect.append('<option value="' + atencion['idPersonaContacto'] + '" selected>' + atencion['nombreContacto'] + '</option>');
                    } else {
                        miSelect.append('<option value="' + atencion['idPersonaContacto'] + '">' + atencion['nombreContacto'] + '</option>');
                    }
                }
            }
        }
        miSelect.trigger("chosen:updated");
    }
    function bloquearAutocompletarContactos($array, $id){
        var miSelect = $('#paso1Atencion');
        miSelect.empty();
        miSelect.attr('disabled', true);
        miSelect.trigger("chosen:updated");
    }

    // function generarListas(){
    //     var config = {'.chosen-select'           : {}}
    //     for (var selector in config) {
    //         $(selector).chosen(config[selector]);
    //     }
    // }
    // $(document).on('change','.chosen-select',function(){
    //     var valor = $(this).val();
    //     var tipo = $(this).attr("data-tipo");
    //     if (valor=="nuevo") {
    //         var idBoton = $(this).attr("id");
    //         var nuevoElementoAgregar = "";
    //         botonEnLista(tipo, idBoton, nuevoElementoAgregar)
    //     }
    // });

    var cerrarModalMoneda = false;
    var cerrarModalFormaPago = false;
    var cerrarModalCliente = false;
    var cerrarModalContacto = false;
    $(document).on('ready', function(){
        $('#guardarOtroMoneda').on('click', function(){
            cerrarModalMoneda = false;
        });
        $('#guardarCerrarMoneda').on('click', function(){
            cerrarModalMoneda = true;
        });
        $('#guardarOtroFormaPago').on('click', function(){
            cerrarModalFormaPago = false;
        });
        $('#guardarCerrarFormaPago').on('click', function(){
            cerrarModalFormaPago = true;
        });
        $('#guardarOtroCliente').on('click', function(){
            cerrarModalCliente = false;
        });
        $('#guardarCerrarCliente').on('click', function(){
            cerrarModalCliente = true;
        });
        $('#guardarOtroContacto').on('click', function(){
            cerrarModalContacto = false;
        });
        $('#guardarCerrarContacto').on('click', function(){
            cerrarModalContacto = true;
        });
    });
    function limpiarFormMoneda() {
        $('#form_tipoMoneda_cotizar')[0].reset();
        var validator = $("#form_tipoMoneda_cotizar").validate();
        validator.resetForm();

        $('label[for="paso1_codigo"]').addClass('active');
        $('label[for="paso1_numero"]').addClass('active');
        var tipoMonedaValor = $('#paso1_tipoCambio').val();
        if(tipoMonedaValor != '' && tipoMonedaValor != null) {
            $('label[for="paso1_tipoCambio"]').addClass('active');
        }
    }
    function limpiarFormFormaPago() {
        $('#form_formaPago_cotizar')[0].reset();
        var validator = $("#form_formaPago_cotizar").validate();
        validator.resetForm();

        $('label[for="paso1_codigo"]').addClass('active');
        $('label[for="paso1_numero"]').addClass('active');
        var tipoMonedaValor = $('#paso1_tipoCambio').val();
        if(tipoMonedaValor != '' && tipoMonedaValor != null) {
            $('label[for="paso1_tipoCambio"]').addClass('active');
        }
    }
    function limpiarFormCliente() {
        $('#form_cliente_cotizar')[0].reset();
        var validator = $("#form_cliente_cotizar").validate();
        validator.resetForm();

        $('#cliente_nacionalidad').val('').trigger('chosen:updated');
        document.getElementById('camposObligatorios_fisico').style.display = 'block';
        document.getElementById('camposObligatorios_juridico').style.display = 'none';

        document.getElementById('datosNoObligatorios').style.display = 'none';
        document.getElementById('datosContactos').style.display = 'none';
        document.getElementById('datosInformacionAdicional').style.display = 'none';
        document.getElementById('datosInformacionFacturacion').style.display = 'none';

        $('#cliente_vendedores').tagsinput('removeAll');
        $('#cliente_gustos').tagsinput('removeAll');
        $('#cliente_medios').tagsinput('removeAll');
        $('#vendedoresCliente').show();
        $('#cliente_direccionPais').val('').trigger('chosen:updated');
        $('#cliente_formaPago').val('').trigger('chosen:updated');
        $('#cliente_monedaCotizar').val('').trigger('chosen:updated');
         $('#checkbox_todosVendedores').click();

        $('#imagen_seleccionada').attr('src', '<?= base_url(); ?>files/default-user-image.png');
        cantidad = 0;
        contador = 0;
        actualizarCantidad_contactos();
        $('#contenedorContactos').empty();

        $('label[for="paso1_codigo"]').addClass('active');
        $('label[for="paso1_numero"]').addClass('active');
        var tipoMonedaValor = $('#paso1_tipoCambio').val();
        if(tipoMonedaValor != '' && tipoMonedaValor != null) {
            $('label[for="paso1_tipoCambio"]').addClass('active');
        }
    }
    function limpiarFormContacto() {
        $('#form_contacto_cotizar')[0].reset();
        var validator = $("#form_contacto_cotizar").validate();
        validator.resetForm();

        $('label[for="paso1_codigo"]').addClass('active');
        $('label[for="paso1_numero"]').addClass('active');
        var tipoMonedaValor = $('#paso1_tipoCambio').val();
        if(tipoMonedaValor != '' && tipoMonedaValor != null) {
            $('label[for="paso1_tipoCambio"]').addClass('active');
        }
    }

    function validacionCorrecta_Moneda() {
        $.ajax({
            data: $('#form_tipoMoneda_cotizar').serialize(),
            url:   '<?=base_url()?>cotizacion/verificarNombreMoneda',
            type:  'post',
            success:  function (response) {
                if (response == '0') {
                    alert("<?=label('errorGuardar'); ?>");
                    $('#agregarTipoMoneda .modal-header a').click();
                } else {
                    if (response == '2') {
                        var url = $('#form_tipoMoneda_cotizar').attr('action');
                        var method = $('#form_tipoMoneda_cotizar').attr('method');
                        $.ajax({
                            type: method,
                            url: url,
                            data: $('#form_tipoMoneda_cotizar').serialize(),
                            success: function(response)
                            {
                                if (response == 0) {
                                    alert("<?=label('errorGuardar'); ?>");
                                    $('#agregarTipoMoneda .modal-header a').click();
                                } else {
                                    actualizarSelectMonedas(response);

                                    valorMonedaElegida(response);

                                    alert("<?=label('cotizacion_tipoMonedaGuardadoCorrectamente'); ?>");
                                    if (cerrarModalMoneda) {
                                        limpiarFormMoneda();
                                        $('#agregarTipoMoneda .modal-header a').click();
                                    } else{
                                        limpiarFormMoneda();
                                    }
                                }
                            }
                        });
                    } else {
                        alert("<?=label('tipoMoneda_error_nombreExisteEnBD'); ?>");
                        $('#form_tipoMoneda_cotizar #tipoMoneda_nombre').focus();
                    }
                }
            }
        });
    }
    function validacionCorrecta_FormaPago() {
        $.ajax({
            data: $('#form_formaPago_cotizar').serialize(),
            url:   '<?=base_url()?>cotizacion/verificarNombreFormaPago',
            type:  'post',
            success:  function (response) {
                if (response == '0') {
                    alert("<?=label('errorGuardar'); ?>");
                    $('#agregarFormaPago .modal-header a').click();
                } else{
                    if (response == '2') {
                        var url = $('#form_formaPago_cotizar').attr('action');
                        var method = $('#form_formaPago_cotizar').attr('method');
                        $.ajax({
                            type: method,
                            url: url,
                            data: $('#form_formaPago_cotizar').serialize(),
                            success: function(response)
                            {
                                if (response == 0) {
                                    alert("<?=label('errorGuardar'); ?>");
                                    $('#agregarFormaPago .modal-header a').click();
                                } else {
                                    actualizarSelectFormasPago(response);
                                    alert("<?=label('cotizacion_formaPagoGuardadoCorrectamente'); ?>");
                                    if (cerrarModalFormaPago) {
                                        limpiarFormFormaPago();
                                        $('#agregarFormaPago .modal-header a').click();
                                    } else{
                                        limpiarFormFormaPago();
                                    }
                                }
                            }
                        });
                    } else{
                        alert("<?=label('formaPago_error_nombreExisteEnBD'); ?>");
                        $('#form_formaPago_cotizar #formaPago_nombre').focus();
                    }
                }
            }
        });
    }
    function validacionCorrecta_Cliente() {
        var tipoCliente = $('#cliente_tipo option:selected').val();
        var identificacion = '';
        if (tipoCliente == 0) {
            identificacion = $('#cliente_id').val();
        } else{
            identificacion = $('#clientejuridico_id').val();
        }
        $.ajax({
            data: {cliente_id :  identificacion},
            url:   '<?=base_url()?>clientes/existeIdentificacion',
            type:  'post',
            success:  function (response) {
                switch(response){
                    case '0':
                        alert("<?=label('errorGuardar'); ?>");
                        $('#agregarCliente .modal-header a').click();
                    break;
                    case '1':
                        alert('<?= label("clienteIdentificacionExistente"); ?>');
                        if (tipoCliente == 0) {
                            $('#cliente_id').focus();
                        } else{
                            $('#clientejuridico_id').focus();
                        }
                        break;
                    case '2':
                        var formulario = $('#form_cliente_cotizar');
                        var url = formulario.attr('action');
                        var method = formulario.attr('method');
                        var data = new FormData(formulario[0]);
                        $.ajax({
                            type: method,
                            url: url,
                            data: data,
                            success: function(response)
                            {

                                if (response == 0) {
                                    alert("<?=label('errorGuardar'); ?>");
                                    $('#agregarCliente .modal-header a').click();
                                } else {
                                    actualizarSelectClientes(response);
                                    alert("<?=label('cotizacion_clienteGuardadoCorrectamente'); ?>");
                                    if (cerrarModalCliente) {
                                        $('#agregarCliente .modal-header a').click();
                                        limpiarFormCliente();
                                    } else{
                                        limpiarFormCliente();
                                    }
                                }
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                        break;
                }
            }
        });
    }
    function validacionCorrecta_Contacto() {
        var clienteElegido = $('#paso1Cliente').val();
        $('#cliente_contactoIdCliente').val(clienteElegido);
        
        var formulario = $('#form_contacto_cotizar');
        var url = formulario.attr('action');
        var method = formulario.attr('method');
        var data = formulario.serialize();
        $.ajax({
            type: method,
            url: url,
            data: data,
            success: function(response)
            {
                if (response == 0) {
                    alert("<?=label('errorGuardar'); ?>");
                    $('#agregarContacto .modal-header a').click();
                } else {
                    var clienteElegido = $('#paso1Cliente').val();
                    actualizarSelectContactos(clienteElegido, response);

                    alert("<?=label('cotizacion_contactoGuardadoCorrectamente'); ?>");
                    if (cerrarModalContacto) {
                        $('#agregarContacto .modal-header a').click();
                        limpiarFormContacto();
                    } else{
                        limpiarFormContacto();
                    }
                }
            }
        });

    }

    <?php
    $signo = '';
    if (isset($resultado['cotizacion'])) {
        $signo = $resultado['cotizacion']['signo'];
    };
        
    ?>
    var signoMoneda = '<?=$signo?>'; //esta variable se usa en el paso 3 en el metodo actualizarDiseno()
    function valorMonedaElegida($idMoneda) {
        $.ajax({
            type: 'POST',
            url: '<?= base_url(); ?>cotizacion/valorMoneda',
            data: { idMoneda : $idMoneda },
            success: function(response)
            {
                var tipoMoneda = $.parseJSON(response);
                $('#paso1_tipoCambio').val(tipoMoneda['tipoCambio']);
                $('label[for="paso1_tipoCambio"]').addClass('active');
                modificarMontos();
                signoMoneda = tipoMoneda['signo'];            }
        });
    }

    $(document).on('change', '#paso1Cliente', function () {
        var clienteElegido = $(this).val();
        cargarValoresDefectoCliente(clienteElegido);
        
    });

    function cargarValoresDefectoCliente(clienteElegido){
        // var clienteElegido = $(this).val();
        for (var i = 0; i < arrayClientes.length; i++) {
            var cliente = arrayClientes[i];
            if (cliente['idCliente'] == clienteElegido) {
                seleccionarMonedaClienteDefecto(cliente['idMonedaDefecto']);
                seleccionarFormaPagoClienteDefecto(cliente['idFormaPagoDefecto']);
                $('#paso2_descuentoCotizacion').val(cliente['descuentoFijo']);
            };
        };

        actualizarSelectContactos(clienteElegido,  0);
        $('#cliente_contactoIdCliente').val(clienteElegido);
    }


    function seleccionarMonedaClienteDefecto(idMoneda){
        $('#paso1Moneda option[value='+ idMoneda +']').prop('selected', true);
        $('#paso1Moneda').trigger("chosen:updated");
        valorMonedaElegida(idMoneda);
    }
    function seleccionarFormaPagoClienteDefecto(idFormaPago){
        $('#paso1FormaPago option[value='+ idFormaPago +']').prop('selected', true);
        $('#paso1FormaPago').trigger("chosen:updated");
    }
    // function contactosClienteAgregado($idCliente) {
    //     actualizarSelectContactos($idCliente, 0);
    // }
</script>
<!--Script para manejo de cliente-->
<script type="text/javascript">
    $(document).on('ready', function(){
        var config = {'.chosen-select'           : {}}
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }
    });
    function datosCliente(opcionSeleccionada) {
        if (opcionSeleccionada.value == "0") {
            document.getElementById('camposObligatorios_fisico').style.display = 'block';
            document.getElementById('camposObligatorios_juridico').style.display = 'none';
            document.getElementById('campos-cliente-fisico').style.display = 'block';
            document.getElementById('campos-cliente-juridico').style.display = 'none';
        } else {
            document.getElementById('camposObligatorios_fisico').style.display = 'none';
            document.getElementById('camposObligatorios_juridico').style.display = 'block';
            document.getElementById('campos-cliente-fisico').style.display = 'none';
            document.getElementById('campos-cliente-juridico').style.display = 'block';
        }
    }
    $(document).on('click', '#checkbox_todosVendedores', function(){
        if ($(this).prop('checked')) {
            $('#vendedoresCliente').hide();
        } else {
            $('#vendedoresCliente').show();
        }
    });
    $(document).on('ready', function(){
        $('#checkbox_todosVendedores').click();
    });

    $(document).ready(function () {
        actualizarSelects_cliente();
    });
    function actualizarSelects_cliente() {
        actualizarSelectMonedas_cliente(0);
        actualizarSelectFormasPago_cliente(0);
        actualizarSelectPaises_cliente(0);
        actualizarSelectNacionalidad_cliente(0);
    }

    function actualizarSelectMonedas_cliente($id) {
        $.ajax({
            type: 'POST',
            url: '<?= base_url(); ?>cotizacion/tiposMoneda',
            data: {  },
            success: function(response)
            {
                generarSelectMoneda_cliente($.parseJSON(response), $id);
                generarListas_cliente();
            }
        });
    }
    function actualizarSelectFormasPago_cliente($id) {
        $.ajax({
            type: 'POST',
            url: '<?= base_url(); ?>cotizacion/formasPago',
            data: {  },
            success: function(response)
            {
                generarSelectFormaPago_cliente($.parseJSON(response), $id);
                generarListas_cliente();
            }
        });
    }
    function actualizarSelectPaises_cliente($id) {
        $.ajax({
            type: 'POST',
            url: '<?= base_url(); ?>cotizacion/paises',
            data: {  },
            success: function(response)
            {
                generarSelectPaises_cliente($.parseJSON(response), $id);
                generarListas_cliente();
            }
        });
    }
    function actualizarSelectNacionalidad_cliente($id) {
        $.ajax({
            type: 'POST',
            url: '<?= base_url(); ?>cotizacion/paises',
            data: {  },
            success: function(response)
            {
                generarSelectNacionalidad_cliente($.parseJSON(response), $id);
                generarListas_cliente();
            }
        });
    }

    function generarSelectMoneda_cliente($array, $id){
        var miSelect = $('#cliente_monedaCotizar');
        miSelect.empty();
        miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("agregarCliente_elegirMoneda"); ?></option>');
//        miSelect.append('<option value="nuevo"><?//= label("agregarNuevo"); ?>//</option>');
        for(var i = 0; i < $array.length; i++) {
            var moneda = $array[i];
            if(moneda != null) {
                if(moneda['idMoneda'] == $id){
                    miSelect.append('<option value="' + moneda['idMoneda'] + '" selected>' + moneda['nombre'] + '</option>');
                } else {
                    miSelect.append('<option value="' + moneda['idMoneda'] + '">' + moneda['nombre'] + '</option>');
                }
            }
        }
        miSelect.trigger("chosen:updated");


    }
    function generarSelectFormaPago_cliente($array, $id){
        var miSelect = $('#cliente_formaPago');
        miSelect.empty();
        miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("agregarCliente_elegirFormaPago"); ?></option>');
//        miSelect.append('<option value="nuevo"><?//= label("agregarNuevo"); ?>//</option>');
        for(var i = 0; i < $array.length; i++) {
            var formaP = $array[i];
            if(formaP != null) {
                if(formaP['idFormaPago'] == $id) {
                    miSelect.append('<option value="' + formaP['idFormaPago'] + '" selected>' + formaP['nombre'] + '</option>');
                } else {
                    miSelect.append('<option value="' + formaP['idFormaPago'] + '">' + formaP['nombre'] + '</option>');
                }
            }
        }
        miSelect.trigger("chosen:updated");
    }
    function generarSelectPaises_cliente($array, $id){
        var miSelect = $('#cliente_direccionPais');
        miSelect.empty();
        miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("agregarCliente_elegirPais"); ?></option>');
//        miSelect.append('<option value="nuevo"><?//= label("agregarNuevo"); ?>//</option>');
        for(var i = 0; i < $array.length; i++) {
            var pais = $array[i];
            if(pais != null) {
                if(pais['idPais'] == $id) {
                    miSelect.append('<option value="' + pais['idPais'] + '" selected>' + pais['nombre'] + '</option>');
                } else {
                    miSelect.append('<option value="' + pais['idPais'] + '">' + pais['nombre'] + '</option>');
                }
            }
        }
        miSelect.trigger("chosen:updated");
    }
    function generarSelectNacionalidad_cliente($array, $id){
        var miSelect = $('#cliente_nacionalidad');
        miSelect.empty();
        miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("agregarCliente_elegirNacionalidad"); ?></option>');
//        miSelect.append('<option value="nuevo"><?//= label("agregarNuevo"); ?>//</option>');
        for(var i = 0; i < $array.length; i++) {
            var pais = $array[i];
            if(pais != null) {
                if(pais['idPais'] == $id) {
                    miSelect.append('<option value="' + pais['idPais'] + '" selected>' + pais['nombre'] + '</option>');
                } else {
                    miSelect.append('<option value="' + pais['idPais'] + '">' + pais['nombre'] + '</option>');
                }
            }
        }
        miSelect.trigger("chosen:updated");
    }

    function generarListas_cliente(){
        var config = {'.chosen-select'           : {}}
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }
    }

    $(document).on('click', '#linkNuevoCliente', function () {
        actualizarSelects_cliente();
    });

    $(document).on('click', '#btn_cliente_otrosDatos', function () {
        var estadoOtrosDatos = document.getElementById('datosNoObligatorios').style.display;
        if(estadoOtrosDatos == 'none') {
            document.getElementById('datosNoObligatorios').style.display = 'block';
        } else {
            document.getElementById('datosNoObligatorios').style.display = 'none';
        }
    });
    $(document).on('click', '#btn_cliente_contactos', function () {
        var estadoDatosContactos = document.getElementById('datosContactos').style.display;
        if(estadoDatosContactos == 'none') {
            document.getElementById('datosContactos').style.display = 'block';
        } else {
            document.getElementById('datosContactos').style.display = 'none';
        }
    });
    $(document).on('click', '#btn_cliente_informacionAdicional', function () {
        var estadoDatosContactos = document.getElementById('datosInformacionAdicional').style.display;
        if(estadoDatosContactos == 'none') {
            document.getElementById('datosInformacionAdicional').style.display = 'block';
        } else {
            document.getElementById('datosInformacionAdicional').style.display = 'none';
        }
    });
    $(document).on('click', '#btn_cliente_informacionFacturacion', function () {
        var estadoDatosContactos = document.getElementById('datosInformacionFacturacion').style.display;
        if(estadoDatosContactos == 'none') {
            document.getElementById('datosInformacionFacturacion').style.display = 'block';
        } else {
            document.getElementById('datosInformacionFacturacion').style.display = 'none';
        }
    });
</script>
<!-- Script para manejo de tags -->
<script>
    $(document).ready(function () {


        var Vendedores = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('nombre'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // prefetch: 'http://localhost/Proyectos/touch/assets/dashboard/js/json/Vendedores.json'
            prefetch: {
                url: '<?=base_url()?>Usuarios/vendedorSugerencia',
                ttl: 1000
            }
        });

        Vendedores.initialize();


        elt = $('.tags_vendedores > > input');
        elt.tagsinput({
            itemValue: 'idUsuario',
            itemText: 'nombre',
            typeaheadjs: {
                name: 'Vendedor',
                displayKey: 'nombre',
                source: Vendedores.ttAdapter()
            }
        });




        // var vendedores = new Bloodhound({
        //     datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
        //     queryTokenizer: Bloodhound.tokenizers.whitespace,
        //     // prefetch: 'http://localhost/Proyectos/touch/assets/dashboard/js/json/vendedores.json'
        //     prefetch: {
        //         url: '<?=base_url()?>Cotizacion/jsonVendedores',
        //         ttl: 1000
        //     }
        // });

        // vendedores.initialize();

        // elt = $('.tags_vendedores > > input');
        // elt.tagsinput({
        //     itemValue: 'value',
        //     itemText: 'text',
        //     typeaheadjs: {
        //         name: 'vendedores',
        //         displayKey: 'text',
        //         source: vendedores.ttAdapter()
        //     }
        // });

//        elt.tagsinput('add', {"value": 1, "text": "Brayan Nu�ez Rojas", "continent": "Europe"});
//        elt.tagsinput('add', {"value": 4, "text": "Anthony Nu�ez Rojas", "continent": "America"});
//        elt.tagsinput('add', {"value": 7, "text": "Maria Perez Salas", "continent": "Australia"});
//        elt.tagsinput('add', {"value": 10, "text": "Carlos David Rojas", "continent": "Asia"});
//        elt.tagsinput('add', {"value": 13, "text": "Diego Alfaro Rojas", "continent": "Africa"});


        var gusto = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: {
                url: '<?=base_url()?>Clientes/gustosSugerencia',
                ttl: 1000,
                filter: function (list) {
                    return $.map(list, function (gusto) {
                        return {name: gusto};
                    });
                }
            }
        });
        gusto.initialize();


        $('.tags_gustosCliente  > > input').tagsinput({
            typeaheadjs: {
                name: 'gusto',
                displayKey: 'name',
                valueKey: 'name',
                source: gusto.ttAdapter()
            }
        });


        var mediosContacto = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // prefetch: 'http://localhost/Proyectos/touch/assets/dashboard/js/json/gustos.json'
            prefetch: {
                url: '<?=base_url()?>Clientes/mediosSugerencia',
                ttl: 1000,
                filter: function (list) {
                    return $.map(list, function (mediosContacto) {
                        return {name: mediosContacto};
                    });
                }
            }
        });
        mediosContacto.initialize();


        var elt = $('.tags_mediosContacto > > input');
        elt.tagsinput({
            typeaheadjs: {
                name: 'mediosContacto',
                displayKey: 'name',
                valueKey: 'name',
                source: mediosContacto.ttAdapter()
            }
        });


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
</script>
<!--Script para el manejo de contactos de persona -->
<script type="text/javascript">
    var contactoEliminar = null;
    $(document).on('click','.confirmarEliminarContacto', function () {
        contactoEliminar = $(this).parent().parent().parent();
        var confirmarEliminar = confirm('<?= label('gastos_personaContactos_confirmarEliminar'); ?>');
        if(confirmarEliminar) {
            contactoEliminar.fadeOut(function () {
                contactoEliminar.remove();
            });
            cantidad--;
            actualizarCantidad();
        }
    });
    function actualizarCantidad_contactos(){
        $('#cantidadContactos').val(cantidad);
    }
    var cantidad = 0;
    var contador = 0;
    function agregarNuevoContacto() {
        cantidad++;
        actualizarCantidad_contactos();
        $('#contenedorContactos').append('' +
            '<div>' +
            '<div id="' + contador + '" class="row">' +
            '<div class="col s12 m11 l11">' +
            '<div class="row">' +
            '<div class="input-field col s12 m4 l4">' +
            '<input id="cliente_contactoNombre_' + contador + '" name="cliente_contactoNombre_' + contador + '" type="text">' +
            '<label for="cliente_contactoNombre_' + contador + '"><?= label("formContacto_nombre"); ?></label>' +
            '</div>' +
            '<div class="input-field col s12 m4 l4">' +
            '<input style="display:none" name="contacto_'+ contador +'" type="text">' +
            '<input id="cliente_contactoApellido1_' + contador + '" name="cliente_contactoApellido1_' + contador + '" type="text">' +
            '<label for="cliente_contactoApellido1_' + contador + '"><?= label("formContacto_apellido1"); ?></label>' +
            '</div>' +
            '<div class="input-field col s12 m4 l4">' +
            '<input id="cliente_contactoApellido2_' + contador + '" name="cliente_contactoApellido2_' + contador + '" type="text">' +
            '<label for="cliente_contactoApellido2_' + contador + '"><?= label("formContacto_apellido2"); ?></label>' +
            '</div>' +
            '</div>' +
            '<div class="row">' +
            '<div class="input-field col s12 m6 l6">' +
            '<div>' +
            '<input id="cliente_contactoCorreo_' + contador + '" name="cliente_contactoCorreo_' + contador + '" type="email">' +
            '<label for="cliente_contactoCorreo_' + contador + '"><?= label('formProveedor_correo'); ?></label>' +
            '</div>' +
            '<div style="margin-bottom: 20px;">' +
            '<input type="checkbox" class="filled-in" id="checkbox_contactoCorreoCliente_' + contador + '" name="checkbox_contactoCorreoCliente_' + contador + '" />' +
            '<label for="checkbox_contactoCorreoCliente_' + contador + '" style="margin-bottom: 20px;">' +
            '<?= label('formCliente_correoCheck') ?>' +
            '</label>' +
            '</div>' +
            '</div>' +
            '<div class="input-field col s12 m3 l3">' +
            '<input id="cliente_contactoPuesto_' + contador + '" name="cliente_contactoPuesto_' + contador + '" type="text">' +
            '<label for="cliente_contactoPuesto_' + contador + '"><?= label('formContacto_puesto'); ?></label>' +
            '</div>' +
            '<div class="input-field col s12 m3 l3">' +
            '<input id="cliente_contactoTelefono_' + contador + '" name="cliente_contactoTelefono_' + contador + '" type="text">' +
            '<label for="cliente_contactoTelefono_' + contador + '"><?= label('formContacto_telefono'); ?></label>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div class="col s12 m1 l1 btn-contacto-eliminar-edicion">' +
            '<a class="confirmarEliminarContacto" data-fila-eliminar="' + contador + '" title="<?= label('formCliente_contactoEliminar') ?>"><i class="mdi-action-delete medium" style="color: black;"></i></a>' +
            '</div>' +
            '</div>' +
            '<div class="col s12">' +
            '<hr />' +
            '</div>' +
            '</div>'
        );
        contador++;
    }
</script>

<!-- Inicio lista modals -->
<div id="agregarTipoMoneda" class="modal" style="width: 70%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <form id="form_tipoMoneda_cotizar" action="<?=base_url()?>cotizacion/insertarMoneda" method="post">
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
                <a onclick="$(this).closest('form').submit()" id="guardarCerrarMoneda" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('guardarCerrar'); ?>
                </a>
                <a onclick="$(this).closest('form').submit()" id="guardarOtroMoneda" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('guardarAgregarOtro'); ?>
                </a>
            </div>
        </form>
    </div>
</div>
<div id="agregarFormaPago" class="modal" style="width: 70%;height: 50%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action cerrar-modal modal-close"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content" style="padding: 0 24px;">
        <div class="row">
            <h5 style="float: left;"><?= label('gasto_agregarFormaPago'); ?></h5>
        </div>
        <form id="form_formaPago_cotizar" action="<?=base_url()?>cotizacion/insertarFormaPago" method="post">
            <div class="row">
                <div class="input-field col s12">
                    <input id="formaPago_nombre" name="formaPago_nombre" type="text">
                    <label for="formaPago_nombre"><?= label('formaPago_Nombre') ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="formaPago_descripcion" name="formaPago_descripcion" type="text">
                    <label for="formaPago_descripcion"><?= label('formaPago_descripcion') ?></label>
                </div>
            </div>
            <div class="row">
                <a onclick="$(this).closest('form').submit()" id="guardarCerrarFormaPago" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('guardarCerrar'); ?>
                </a>
                <a onclick="$(this).closest('form').submit()" id="guardarOtroFormaPago" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('guardarAgregarOtro'); ?>
                </a>
            </div>
        </form>
    </div>
</div>
<div id="agregarCliente" class="modal" style="width: 70%;max-height: 80%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action cerrar-modal modal-close"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content" style="padding: 0 24px;">
        <div class="row">
            <h5 style="float: left;"><?= label('cotizacion_agregarCliente'); ?></h5>
        </div>
        <?php $this->load->helper('form'); ?>
        <?php echo form_open_multipart(base_url().'clientes/insertar',
            array('id' => 'form_cliente_cotizar', 'method' => 'POST', 'class' => 'col s12')); ?>
            <div class="row">
                <!-- Campos obligatorios -->
                <div id="seleccion_TipoCliente" class="input-field col s12">
                    <select id="cliente_tipo" name="cliente_tipo" onchange="datosCliente(this)">
                        <option value="0" selected><?= label('formCliente_fisica'); ?></option>
                        <option value="1"><?= label('formCliente_juridica'); ?></option>
                    </select>
                    <label for="cliente_tipo"><?= label('formCliente_tipoPersona'); ?></label>
                </div>
                <div class="input-field col s12 inputSelector">
                    <label for="cliente_nacionalidad"><?= label('formCliente_nacionalidad'); ?></label>
                    <br>
                    <select data-placeholder="<?= label('formCliente_seleccioneUno'); ?>" data-incluirBoton="0" id="cliente_nacionalidad" name="cliente_nacionalidad" class="browser-default chosen-select">
                    </select>
                </div>
                <div id="camposObligatorios_fisico" style="display: block;">
                    <div class="input-field col s12">
                        <input id="cliente_id" name="cliente_id" type="text">
                        <label for="cliente_id"><?= label('formCliente_identificacion'); ?></label>
                    </div>
                    <div>
                        <div class="input-field col s12 m4 l4">
                            <input id="cliente_nombre" name="cliente_nombre" type="text">
                            <label for="cliente_nombre"><?= label('formCliente_nombre'); ?></label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                            <input id="cliente_apellido1" name="cliente_apellido1" type="text">
                            <label for="cliente_apellido1"><?= label('formCliente_apellido1'); ?></label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                            <input id="cliente_apellido2" name="cliente_apellido2" type="text">
                            <label for="cliente_apellido2"><?= label('formCliente_apellido2'); ?></label>
                        </div>
                    </div>
                    <div>
                        <div class="input-field col s12">
                            <input id="cliente_correo" name="cliente_correo" type="email">
                            <label for="cliente_correo"><?= label('formCliente_correo'); ?></label>
                        </div>
                        <div class="col s12" style="margin-bottom: 20px; margin-left: 30px;">
                            <input value='1' type="checkbox" class="filled-in" id="checkbox_correoCliente" name="checkbox_correoCliente" />
                            <label for="checkbox_correoCliente" class="label_checkboxCorreoCliente">
                                <?= label('formCliente_correoCheck') ?>
                            </label>
                        </div>
                    </div>
                </div>
                <div id="camposObligatorios_juridico" style="display: none;">
                    <div class="input-field col s12">
                        <input id="clientejuridico_id" name="clientejuridico_id" type="text">
                        <label for="clientejuridico_id"><?= label('formCliente_identificacionJuridica'); ?></label>
                    </div>
                    <div class="input-field col s12">
                        <input id="clientejuridico_nombre" name="clientejuridico_nombre" type="text">
                        <label for="clientejuridico_nombre"><?= label('formCliente_nombreJuridico'); ?></label>
                    </div>
                    <div>
                        <div class="input-field col s12">
                            <input id="clientejuridico_correo" name="clientejuridico_correo" type="email">
                            <label for="clientejuridico_correo"><?= label('formCliente_correo'); ?></label>
                        </div>
                        <div class="col s12" style="margin-bottom: 20px; margin-left: 30px;">
                            <input type="checkbox" class="filled-in"
                                   id="checkbox_correoClientejuridico" name="checkbox_correoClientejuridico" />
                            <label for="checkbox_correoClientejuridico" class="label_checkboxCorreoCliente">
                                <?= label('formCliente_correoCheck') ?>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Otros datos -->
                <div class="col s12">
                    <a id="btn_cliente_otrosDatos" class="btn_mostrarElementosOcultos"><?= label('paso1_clientesOtrosDatos'); ?></a>
                </div>
                <div id="datosNoObligatorios" style="display: none;">
                    <div id="campos-cliente-fisico" style="display: block;">
                        <div class="input-field col s12">
                            <input id="cliente_telefonoMovil" name="cliente_telefonoMovil" type="text">
                            <label for="cliente_telefonoMovil"><?= label('formCliente_telefonoMovil'); ?></label>
                        </div>
                        <div class="input-field col s12">
                            <input id="cliente_telefono" name="cliente_telefono" type="text">
                            <label for="cliente_telefono"><?= label('formCliente_telefonoFijo'); ?></label>
                        </div>
                        <div class="input-field col s12">
                            <input id="cliente_fechaNacimiento" name="cliente_fechaNacimiento" type="text" class="datepicker-fecha">
                            <label for="cliente_fechaNacimiento"><?= label('formCliente_fechaNacimiento'); ?></label>
                        </div>
                    </div>
                    <div id="campos-cliente-juridico" style="display: none;">
                        <div class="input-field col s12">
                            <input id="clientejuridico_nombreFantasia" name="clientejuridico_nombreFantasia" type="text">
                            <label for="clientejuridico_nombreFantasia"><?= label('formCliente_nombreFantasia'); ?></label>
                        </div>
                        <div class="input-field col s12">
                            <input id="clientejuridico_telefono" name="clientejuridico_telefono" type="text">
                            <label for="clientejuridico_telefono"><?= label('formCliente_telefono'); ?></label>
                        </div>
                        <div class="input-field col s12">
                            <input id="clientejuridico_fax" name="clientejuridico_fax" type="text">
                            <label for="clientejuridico_fax"><?= label('formCliente_fax'); ?></label>
                        </div>
                    </div>
                    <div class="col s12">
                        <div class="file-field col s12 m7 l9" style="margin-top:45px;">
                            <label for="cliente_fotografia"><?= label('formCliente_fotografia'); ?></label>

                            <div class="file-field input-field col s12">
                                <input name="cliente_fotografia" class="file-path" type="text" readonly/>

                                <div class="btn" data-toggle="tooltip" title="<?= label('tooltip_examinar') ?>">
                                    <span><i class="mdi-action-search"></i></span>
                                    <input style="padding-right: 800px;" id="userfile" type="file" name="userfile"
                                           accept="image/jpeg,image/png"/>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m5 l3">
                            <figure>
                                <img id="imagen_seleccionada" src="<?= base_url(); ?>files/default-user-image.png">
                            </figure>
                        </div>
                    </div>
                    <div>
                        <div class="input-field col s12 m4 l4 inputSelector" >
                            <label for="cliente_direccionPais"><?= label('formCliente_direccionPais'); ?></label>
                            <br>
                            <select data-placeholder="<?= label('formCliente_seleccioneUno'); ?>" data-incluirBoton="0" id="cliente_direccionPais" name="cliente_direccionPais" class="browser-default chosen-select">
                            </select>
                        </div>
                        <div class="input-field col s12 m4 l4">
                            <input id="cliente_direccionProvincia" name="cliente_direccionProvincia" type="text">
                            <label for="cliente_direccionProvincia"><?= label('formCliente_direccionProvincia'); ?></label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                            <input id="cliente_direccionCanton" name="cliente_direccionCanton" type="text">
                            <label for="cliente_direccionCanton"><?= label('formCliente_direccionCanton'); ?></label>
                        </div>
                        <div class="input-field col s12 m12 l12">
                            <input id="cliente_direccionDomicilio" name="cliente_direccionDomicilio" type="text">
                            <label for="cliente_direccionDomicilio"><?= label('formCliente_direccionDomicilio'); ?></label>
                        </div>
                    </div>
                </div>

                <!-- Datos de contactos -->
                <div class="col s12">
                    <a id="btn_cliente_contactos" class="btn_mostrarElementosOcultos"><?= label('paso1_formContactos'); ?></a>
                </div>
                <div id="datosContactos" style="display: none;">
                    <div id="contenedorContactos"></div>
                    <div class="row" id="tab-contactos-nuevo" style="padding: 20px;">
                        <a onclick="agregarNuevoContacto();">
                            <?= label('formCliente_contactoAgregar') ?>
                        </a>
                    </div>
                </div>

                <!-- Datos de informacion adicional-->
                <div class="col s12">
                    <a id="btn_cliente_informacionAdicional" class="btn_mostrarElementosOcultos"><?= label('paso1_formAdicional'); ?></a>
                </div>
                <div id="datosInformacionAdicional" style="display: none;">
                    <div class="inputTag col s12">
                        <label for="vendedoresCliente"><?= label('formCliente_cotizador'); ?></label>
                        <div class="col s12" style="padding: 10px;">
                            <input value='1' type="checkbox" class="filled-in" id="checkbox_todosVendedores" name="checkbox_todosVendedores" />
                            <label for="checkbox_todosVendedores">
                                <?= label('formCliente_todos') ?>
                            </label>
                        </div>
                        <!-- <br> -->
                        <div id="vendedoresCliente" class="example tags_vendedores">
                            <div class="bs-example">
                                <input id="cliente_vendedores" name="cliente_vendedores" placeholder="<?= label('formCliente_anadirVendedor'); ?>" type="text"/>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="inputTag col s12">
                        <label for="gustosCliente"><?= label('formCliente_gustos_preferencias'); ?></label>
                        <br>
                        <div id="gustosCliente" class="example tags_gustosCliente">
                            <div class="bs-example">
                                <input id="cliente_gustos" name="cliente_gustos" placeholder="<?= label('formCliente_anadirGusto'); ?>" type="text"
                                       value=""/>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="inputTag col s12">
                        <label for="mediosCliente"><?= label('formCliente_mediosContacto'); ?></label>
                        <br>
                        <div id="mediosCliente" class="example tags_mediosContacto">
                            <div class="bs-example">
                                <input id="cliente_medios" name="cliente_medios" placeholder="<?= label('formCliente_anadirMedio'); ?>" type="text"
                                       value=""/>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>

                <!-- Datos de facturacion-->
                <div class="col s12">
                    <a id="btn_cliente_informacionFacturacion" class="btn_mostrarElementosOcultos"><?= label('paso1_formFacturacion'); ?></a>
                </div>
                <div id="datosInformacionFacturacion" style="display: none;">
                    <div class="input-field col s12 inputSelector" >
                        <label for="cliente_formaPago"><?= label('formCliente_formaPagoFavorita'); ?></label>
                        <br>
                        <select data-placeholder="<?= label('formCliente_seleccioneUno'); ?>" data-incluirBoton="0" id="cliente_formaPago" name="cliente_formaPago" class="browser-default chosen-select">
                        </select>
                    </div>
                    <div class="input-field col s12">
                        <input id="cliente_descuento" name="cliente_descuento" type="text">
                        <label
                            for="cliente_descuento"><?= label('formCliente_descuento'); ?></label>
                        <span class="icono-porcentaje-descuento">%</span>
                    </div>
                    <div class="input-field col s12 inputSelector" >
                        <label for="cliente_monedaCotizar"><?= label('formCliente_monedaCotizar'); ?></label>
                        <br>
                        <select data-placeholder="<?= label('formCliente_seleccioneUno'); ?>" data-incluirBoton="0" id="cliente_monedaCotizar" name="cliente_monedaCotizar" class="browser-default chosen-select">
                        </select>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 40px;">
                <a onclick="$(this).closest('form').submit()" id="guardarCerrarCliente" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('guardarCerrar'); ?>
                </a>
                <a onclick="$(this).closest('form').submit()" id="guardarOtroCliente" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('guardarAgregarOtro'); ?>
                </a>
            </div>
            <div style="visibility:hidden; position:absolute">
                <input id="cantidadContactos" name="cantidadContactos" type="text" value="0">
            </div>
        </form>
    </div>
</div>
<div id="agregarContacto" class="modal" style="width: 70%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <form id="form_contacto_cotizar" action="<?=base_url()?>cotizacion/insertarContacto" method="post">
            <div class="row">
                <div class="input-field col s12 m4 l4">
                    <input id="cliente_contactoNombre" name="cliente_contactoNombre" type="text">
                    <label for="cliente_contactoNombre"><?= label('formContacto_nombre'); ?></label>
                </div>
                <div class="input-field col s12 m4 l4">
                    <input id="cliente_contactoApellido1" name="cliente_contactoApellido1" type="text">
                    <label for="cliente_contactoApellido1"><?= label('formContacto_apellido1'); ?></label>
                </div>
                <div class="input-field col s12 m4 l4">
                    <input id="cliente_contactoApellido2" name="cliente_contactoApellido2" type="text">
                    <label for="cliente_contactoApellido2"><?= label('formContacto_apellido2'); ?></label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6 l6">
                    <div>
                        <input id="cliente_contactoCorreo" name="cliente_contactoCorreo" type="email" style="margin-bottom: 0;">
                        <label for="cliente_contactoCorreo"><?= label('formCliente_correo'); ?></label>
                    </div>
                    <div style="margin-bottom: 20px;">
                        <input type="checkbox" class="filled-in" id="checkbox_contactoCorreoCliente" name="checkbox_contactoCorreoCliente"/>
                        <label for="checkbox_contactoCorreoCliente" style="margin-bottom: 20px;"><?= label('formCliente_correoCheck') ?></label>
                    </div>
                </div>
                <div class="input-field col s12 m3 l3">
                    <input id="cliente_contactoPuesto" name="cliente_contactoPuesto" type="text">
                    <label for="cliente_contactoPuesto"><?= label('formContacto_puesto'); ?></label>
                </div>
                <div class="input-field col s12 m3 l3">
                    <input id="cliente_contactoTelefono" name="cliente_contactoTelefono" type="text">
                    <label for="cliente_contactoTelefono"><?= label('formContacto_telefono'); ?></label>

                    <input id="cliente_contactoIdCliente" name="cliente_contactoIdCliente" type="text" style="display: none;">
                </div>
            </div>
            <div class="row">
                <a onclick="$(this).closest('form').submit()" id="guardarCerrarContacto" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('guardarCerrar'); ?>
                </a>
                <a onclick="$(this).closest('form').submit()" id="guardarOtroContacto" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('guardarAgregarOtro'); ?>
                </a>
            </div>
        </form>
    </div>
</div>
<!--Fin lista modals-->

<!--Script para el manejo de la imagen del cliente-->
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imagen_seleccionada').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#userfile").change(function(){
        var file = this.files[0];
        var name = file.name;
        var size = file.size;
        var type = file.type;
        var t = type.split('/');
        var ext = t.slice(1, 2);
        if(size > 2097150) { //2097152
            alert("<?= label('usuarioErrorTamanoArchivo') ?>");
            document.getElementById('userfile').value = '';
        }
        var valid_ext = ['image/png','image/jpg','image/jpeg'];
        if(valid_ext.indexOf(type)==-1) {
            alert("<?= label('usuarioErrorTipoArchivo') ?>");
            document.getElementById('userfile').value = '';
        }
        if(document.getElementById('userfile').value == ''){
            $('#imagen_seleccionada').attr('src', '<?= base_url(); ?>files/default-user-image.png');
        } else {
            $('#usuario_fotografia').attr('value', ext);
            readURL(this);
        }
    });
</script>