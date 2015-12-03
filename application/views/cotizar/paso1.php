<form id="formGeneral" class="section">
    <div class="row">
        <div class="input-field col s6 m3 l3">
            <div class="input-field col s12">
                <input id="paso1_codigo" name="paso1_codigo" type="text">
                <label for="paso1_codigo" class=""><?= label("paso1_labelCodido"); ?></label>
            </div>
        </div>
        <div class="input-field col s6 m3 l3">
            <div class="input-field col s12">
                <input readonly id="paso1_numero" name="paso1_numero" type="text">
                <label for="paso1_numero" class=""><?= label("paso1_labelNumero"); ?></label>
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
                <select data-incluirBoton="1" placeholder="seleccionar" data-tipo="paso1Moneda" id="paso1Moneda" name="paso1Moneda" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("paso1_elegirMoneda"); ?>" class="chosen-select browser-default" style="width:350px;" tabindex="2">
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
            <input id="paso1_validez" name="paso1_validez" class="datepicker-fecha" type="text">
            <label for="paso1_validez"><?= label("paso1_labelTiempoVlidez"); ?></label>
        </div>
        <div class="input-field col s12 m6 l6">
            <input id="paso1_tipoCambio" name="paso1_tipoCambio" type="text">
            <label for="paso1_tipoCambio" class=""><?= label("paso1_labelTipoCambio"); ?></label>
        </div>
     <!--    <div class="input-field col s12">
            <textarea id="paso1_detalle" class="materialize-textarea" style="height: 24px;"></textarea>
            <label for="paso1_detalle" class=""><?= label("paso1_labelDetalle"); ?></label>
        </div> -->
    </div>

    <!-- <div class="row">
        <div class="input-field col s12" style="margin-top: 0;">
            <input class="filled-in" type="checkbox" id="cotizacion_incluirGastosVariables"/>
            <label for="cotizacion_incluirGastosVariables"><?= label('cotizacion_incluirGastosVariables'); ?></label>
        </div>
        <div id="cotizacion_gastosVariables" style="display: none;padding: 0;">
            <div class="col s12 m6 l3" style="margin-top: 20px;">
                <div class="input-field">
                    <input id="agregarGatos_buscar" type="text">
                    <label for="agregarGatos_buscar" class=""><?= label("agregarGatos_buscar"); ?></label>
                </div>
                <div>
                    <div class="col s12">
                        <a id="busqueda_masOpciones" style="text-decoration: underline;float: right;cursor: pointer;margin-bottom: 20px;">
                            <?= label('agregarGastos_masOpciones'); ?></a>
                    </div>
                    <div id="opcionesBusquedaGasto" class="col s12" style="display: none;margin-bottom: 20px;padding: 0;">
                        <div class="input-field" style="margin-top: 0.5rem;">
                            <select id="agregarGastos_categoria" name="agregarGastos_categoria">
                                <option class="selected-option" value="0" selected><?= label('agregarGastos_todos'); ?></option>
                                <option value="1">Categoria1</option>
                                <option value="2">Categoria2</option>
                                <option value="3">Categoria3</option>
                            </select>
                            <label class="cotizacionPaso1_labelBusqueda" for="agregarGastos_categoria"><?= label('agregarGastos_categoria'); ?></label>
                        </div>
                        <div class="input-field" style="margin-top: 1.5rem;">
                            <select id="agregarGastos_proveedor" name="agregarGastos_proveedor">
                                <option class="selected-option" value="0" selected><?= label('agregarGastos_todos'); ?></option>
                                <option value="1">Proveedor1</option>
                                <option value="2">Proveedor2</option>
                                <option value="3">Proveedor3</option>
                            </select>
                            <label class="cotizacionPaso1_labelBusqueda" for="agregarGastos_proveedor"><?= label('agregarGastos_proveedor'); ?></label>
                        </div>
                        <div class="input-field" style="margin-top: 1.5rem;">
                            <select id="agregarGastos_gasto" name="agregarGastos_gasto">
                                <option class="selected-option" value="0" selected><?= label('agregarGastos_todos'); ?></option>
                                <option value="1">Gasto1</option>
                                <option value="2">Gasto2</option>
                                <option value="3">Gasto3</option>
                            </select>
                            <label class="cotizacionPaso1_labelBusqueda" for="agregarGastos_gasto"><?= label('agregarGastos_gasto'); ?></label>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="#" class="waves-effect btn modal-action modal-close"
                       style="width: 200px;float: none;display: block;margin: 0 auto;text-align: center;color: white;">
                        <?= label('agregarGatos_agregar'); ?>
                    </a>
                </div>
            </div>
            <div class="col s12 m12 l9">
                <div class="table-responsive">
                    <table id="productos-tabla-lista" class="table display striped" cellspacing="0">
                        <thead>
                            <tr>
                                <th><?= label('tituloGastos_codigo'); ?></th>
                                <th><?= label('tituloGastos_gasto'); ?></th>
                                <th><?= label('tituloGastos_proveedor'); ?></th>
                                <th><?= label('tituloGastos_proveedorCategoria'); ?></th>
                                <th><?= label('tituloGastos_tiempo'); ?></th>
                                <th><?= label('tituloGastos_cantidad'); ?></th>
                                <th><?= label('tituloGastos_monto'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PROG-00001</td>
                                <td>Mantenimiento web</td>
                                <td>Ronald Alfaro</td>
                                <td>Programador</td>
                                <td>Hora</td>
                                <td><input type="number" value="10"/></td>
                                <td>$250,000.00</td>
                            </tr>
                            <tr>
                                <td>PROG-00002</td>
                                <td>Mantenimiento movil</td>
                                <td>Juan Gomez</td>
                                <td>Programador</td>
                                <td>Hora</td>
                                <td><input type="number" value="20"/></td>
                                <td>$300,000.00</td>
                            </tr>
                            <tr>
                                <td>PROG-00003</td>
                                <td>Mantenimiento equipo</td>
                                <td>Mauricio Fernandez</td>
                                <td>Tecnico</td>
                                <td>Hora</td>
                                <td><input type="number" value="7"/></td>
                                <td>$70,000.00</td>
                            </tr>
                            <tr>
                                <td colspan="5"></td>
                                <td>TOTAL</td>
                                <td>$620,000.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col s12" style="margin-top: 20px;">
                <h5><?= label('cotizacionGastos_total'); ?>: $2,000,000.00</h5>
            </div>
        </div>
    </div> -->
</form>

<script>

    <?php 
        $js_array = json_encode($resultado['clientes']); 
        echo "var arrayClientes =". $js_array.";";

        $js_array = json_encode($resultado['monedas']); 
        echo "var arrayMonedas =". $js_array.";";


        if (isset($resultado['cotizacion'])) {// se esta editando una cotizacion
            $js_array = json_encode($resultado['cotizacion']); 
            echo "var arrayCotizacion =". $js_array.";";
            ?>
                $('#paso1_codigo').val(arrayCotizacion['codigo']);
                $('#paso1_numero').val(arrayCotizacion['numero']);
                $('#paso1Cliente option[value='+ arrayCotizacion['idCliente'] +']').prop('selected', true);
                cargarAtencion(arrayCotizacion['idCliente']);
                $('#paso1Atencion option[value='+ arrayCotizacion['idPersonaContacto'] +']').prop('selected', true);
                $('#paso1FormaPago option[value='+ arrayCotizacion['idFormaPago'] +']').prop('selected', true);
                $('#paso1Moneda option[value='+ arrayCotizacion['idMoneda'] +']').prop('selected', true);
                $('#paso1_tipoCambio').val(arrayCotizacion['tipoCambio']);

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


    function cargarAtencion(idCliente){
        $('#paso1Atencion').empty(); //remove all child nodes
        $('#paso1Atencion').removeAttr('disabled');
        $('#paso1Atencion').append($('<option value="0" disabled selected style="display:none;"><?= label("paso1_elegirAtencion"); ?></option>'));
        $('#paso1Atencion').append($('<option value="nuevo"><?= label("agregarNuevo"); ?></option>'));
        // $('#paso1Atencion').append($('<option value="todas"><?= label("formServicio_fases_agregarTodas"); ?></option>'));
        for (var i = 0; i < arrayClientes.length; i++) {
            if (arrayClientes[i]['idCliente'] == idCliente) {
                for (var j = 0; j < arrayClientes[i]['contactos'].length; j++) {
                    var contacto = arrayClientes[i]['contactos'][j];
                    var newOption = $('<option value="'+contacto['idCliente']+'">'+contacto['nombre'] + ' ' + contacto['primerApellido'] + ' ' + contacto['segundoApellido']+'</option>');
                    $('#paso1Atencion').append(newOption);
                }
            } 
        };

        $('#paso1Atencion').trigger("chosen:updated");

    }


    $(document).ready(function () {
        $('#busqueda_masOpciones').click(function (event) {
            var $elementos = $('#opcionesBusquedaGasto');
            var $buscar = $('#agregarGatos_buscar');
            var $display = $elementos.css('display');
            if($display == 'none') {
                $elementos.css('display', 'block');
                $(this).text('<?= label('agregarGastos_menosOpciones'); ?>');
                $buscar.attr('disabled', true);
            } else {
                $elementos.css('display', 'none');
                $(this).text('<?= label('agregarGastos_masOpciones'); ?>');
                $buscar.attr('disabled', false);
            }
        });
        $('#cotizacion_incluirGastosVariables').click(function (event) {
            var $incluir = $(this).is(':checked');
            var $gastos = $('#cotizacion_gastosVariables');
            if($incluir) {
                $gastos.css('display', 'block');
            } else {
                $gastos.css('display', 'none');
            }
        })
    });
</script>

<!-- lista modals -->
<div id="agregarCliente" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="row">
            <div class="col s12">
                <form id="form_cliente" class="col s12" action="<?= base_url() ?>clientes/insertar" method="POST">
                    <div class="row">

                        <div class="input-field col s12">
                            <select name="cliente_tipo" onchange="datosCliente(this)">
                                <option value="0" selected><?= label('formCliente_fisica'); ?></option>
                                <option value="1"><?= label('formCliente_juridica'); ?></option>
                            </select>
                            <label for="cliente_tipo"><?= label('formCliente_tipoPersona'); ?></label>
                        </div>
                        

                        <div class="input-field col s12 inputSelector" >
                            <label for="cleinte_nacionalidad"><?= label('formCliente_nacionalidad'); ?></label>
                            <br>
                            <select data-placeholder="<?= label('formCliente_seleccioneUno'); ?>" data-incluirBoton="0" id="cliente_nacionalidad" name="cliente_nacionalidad" class="required browser-default chosen-select">
                                <option value=""></option>
                                <?php
                                if(isset($paises)) {
                                    foreach ($paises as $pais) { ?>
                                        <option value="<?= $pais['idPais']; ?>"><?= $pais['nombre']; ?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>

                        <div id="elementos-cliente-fisico" style="display: block;">
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
                            <div class="input-field col s12">
                                <div>
                                    <input id="cliente_correo" name="cliente_correo" type="email" style="margin-bottom: 0;" >
                                    <label for="cliente_correo"><?= label('formCliente_correo'); ?></label>
                                </div>
                                <div style="margin-bottom: 20px;">
                                    <input value='1' type="checkbox" class="filled-in" id="checkbox_correoCliente" name="checkbox_correoCliente" />
                                    <label for="checkbox_correoCliente">
                                        <?= label('formCliente_correoCheck') ?>
                                    </label>
                                </div>
                            </div>
                            <div class="input-field col s12">
                                <input id="cliente_telefonoMovil" name="cliente_telefonoMovil" type="text">
                                <label
                                    for="cliente_telefonoMovil"><?= label('formCliente_telefonoMovil'); ?></label>
                            </div>
                            <div class="input-field col s12">
                                <input id="cliente_telefono" name="cliente_telefono" type="text">
                                <label
                                    for="cliente_telefono"><?= label('formCliente_telefonoFijo'); ?></label>
                            </div>
                            <div class="input-field col s12">
                                <input id="cliente_fechaNacimiento" name="cliente_fechaNacimiento" type="text" class="datepicker-fecha">
                                <label for="cliente_fechaNacimiento"><?= label('formCliente_fechaNacimiento'); ?></label>
                            </div>
                        </div>

                        <div id="elementos-cliente-juridico" style="display: none;">
                            <div class="input-field col s12">
                                <input id="clientejuridico_id" name="clientejuridico_id" type="text">
                                <label for="clientejuridico_id"><?= label('formCliente_identificacionJuridica'); ?></label>
                            </div>
                            <div class="input-field col s12">
                                <input id="clientejuridico_nombre" name="clientejuridico_nombre" type="text">
                                <label for="clientejuridico_nombre"><?= label('formCliente_nombreJuridico'); ?></label>
                            </div>
                            <div class="input-field col s12">
                                <input id="clientejuridico_nombreFantasia" name="clientejuridico_nombreFantasia" type="text">
                                <label for="clientejuridico_nombreFantasia"><?= label('formCliente_nombreFantasia'); ?></label>
                            </div>
                            <div class="input-field col s12">
                                <div>
                                    <input id="clientejuridico_correo" name="clientejuridico_correo" type="email">
                                    <label for="clientejuridico_correo"><?= label('formCliente_correo'); ?></label>
                                </div>
                                <div style="margin-bottom: 20px;">
                                    <input type="checkbox" class="filled-in"
                                           id="checkbox_correoClientejuridico" name="checkbox_correoClientejuridico" />
                                    <label for="checkbox_correoClientejuridico">
                                        <?= label('formCliente_correoCheck') ?>
                                    </label>
                                </div>
                            </div>
                            <div class="input-field col s12">
                                <input id="clientejuridico_telefono" name="clientejuridico_telefono" type="text">
                                <label
                                    for="clientejuridico_telefono"><?= label('formCliente_telefono'); ?></label>
                            </div>
                            <div class="input-field col s12">
                                <input id="clientejuridico_fax" name="clientejuridico_fax" type="text">
                                <label
                                    for="clientejuridico_fax"><?= label('formCliente_fax'); ?></label>
                            </div>
                        </div>
                        <div class="input-field col s12 envio-formulario">
                            <button class="btn waves-effect waves-light right" type="submit"
                                    name="action"><?= label('formCliente_enviar'); ?>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="agregarAtencion" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="row">
            <div class="input-field col s12 m4 l4">
                <input id="cliente_contactoNombre" type="text">
                <label for="cliente_contactoNombre"><?= label('formContacto_nombre'); ?></label>
            </div>
            <div class="input-field col s12 m4 l4">
                <input id="cliente_contactoApellido1" type="text">
                <label for="cliente_contactoApellido1"><?= label('formContacto_apellido1'); ?></label>
            </div>
            <div class="input-field col s12 m4 l4">
                <input id="cliente_contactoApellido2" type="text">
                <label for="cliente_contactoApellido2"><?= label('formContacto_apellido2'); ?></label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6 l6">
                <div>
                    <input id="cliente_contactoCorreo" type="email" style="margin-bottom: 0;">
                    <label for="cliente_contactoCorreo"><?= label('formCliente_correo'); ?></label>
                </div>
                <div style="margin-bottom: 20px;">
                    <input type="checkbox" class="filled-in" id="checkbox_contactoCorreoCliente"/>
                    <label for="checkbox_contactoCorreoCliente" style="margin-bottom: 20px;">
                        <?= label('formCliente_correoCheck') ?>
                    </label>
                </div>
            </div>
            <div class="input-field col s12 m3 l3">
                <input id="cliente_contactoPuesto" type="text">
                <label for="cliente_contactoPuesto"><?= label('formContacto_puesto'); ?></label>
            </div>
            <div class="input-field col s12 m3 l3">
                <input id="cliente_contactoTelefono" type="text">
                <label
                    for="cliente_contactoTelefono"><?= label('formContacto_telefono'); ?></label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>

<div id="agregarFormaPago" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <form id="form_formaPago" action="<?=base_url()?>formasPago/insertar" method="post">
            <div class="row">
                <div class="input-field col s12">
                    <input id="formaPago_nombre" name="formaPago_nombre" type="text">
                    <label for="formaPago_nombre"><?= label('formFormaPago_nombre'); ?></label>
                </div>
                <div class="input-field col s12">
                    <textarea name="formaPago_descripcion" id="formaPago_descripcion" class="materialize-textarea" rows="4"></textarea>
                    <label for="formaPago_descripcion"><?= label('formFormaPago_descripcion'); ?></label>
                </div>
            </div>
            <div class="row">
                <!--<a href="#" style="font-size: larger;float: left;text-decoration: underline;"
                   class="modal-action modal-close"><?= label('cancelar'); ?>
                </a>-->
                <a onclick="$(this).closest('form').submit()" id="guardarCerrar" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('guardar'); ?>
                </a>
            </div>
        </form>
    </div>
</div>

<div id="agregarTipoMoneda" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <form id="form_tipoMoneda" action="<?=base_url()?>tiposMoneda/insertar" method="post">
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
                <a onclick="$(this).closest('form').submit()" id="guardarCerrar" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('guardar'); ?>
                </a>
            </div>
        </form>
    </div>
</div>

<div style="visibility:hidden; position:absolute">                                 
    <a id="linkNuevaMoneda" href="#agregarTipoMoneda" class="modal-trigger"></a>
    <a id="linkNuevaFormaPago" href="#agregarFormaPago" class="modal-trigger"></a>
    <a id="linkNuevaAtencion" href="#agregarAtencion" class="modal-trigger"></a>
    <a id="linkNuevoCliente" href="#agregarCliente" class="modal-trigger"></a>
</div>
<!--Fin lista modals-->

<script>
    function datosCliente(opcionSeleccionada) {
        if (opcionSeleccionada.value == "0") {
            document.getElementById('elementos-cliente-fisico').style.display = 'block';
            document.getElementById('elementos-cliente-juridico').style.display = 'none';
        } else {
            document.getElementById('elementos-cliente-fisico').style.display = 'none';
            document.getElementById('elementos-cliente-juridico').style.display = 'block';
        }
    }
</script>