<div class="col s12 tab-edicion-editar">
    <form id="form_cliente" class="col s12" action="<?= base_url() ?>clientes/modificar/<?php if (isset($resultado)) echo encryptIt($resultado['idCliente']);?>" method="POST">
        <div class="row">
            <div class="col s12" style="position: relative;margin-top: 15px;min-height: 150px;">
                <div class="col s12 m5 l3">
                    <?php
                        $ruta = base_url().'files/empresas/';
                        if(isset($resultado)) {
                            if($resultado['fotografia'] != '' && $resultado['fotografia'] != null && $resultado['fotografia'] != 'profile_picture_'.$resultado['idCliente'].'.') {
                                $ruta .= $resultado['idEmpresa'].'/clientes/'.$resultado['idCliente'].'/'.$resultado['fotografia'];
                            } else {
                                $ruta = base_url().'files/default-user-image.png';
                            }
                        } else {
                            $ruta = base_url().'files/default-user-image.png';
                        }
                    ?>
                    <div id="imagen-usuario-editar" class="cliente-ver-logo" style="margin: 5px 0;">
                        <a class="modal-trigger" href="#cambio-imagen" title="Cambiar imagen" style="position: relative; cursor:pointer;">
                            <img id="imagen_perfil_usuario" alt="Imagen de perfil de la persona" src="<?= $ruta; ?>" style="position:relative;height: 200px;width: 200px;" />
                            <img id="icon-image-edit" src="<?= base_url() ?>files/edit-image.png">
                        </a>
                    </div>
                </div>
                <div class="col s12 m7 l9">
                    <div class="input-field col s12">
                        <select id="cliente_tipo" name="cliente_tipo" onchange="datosCliente(this)">
                            <option value="0" selected><?= label('formCliente_fisica'); ?></option>
                            <option value="1"><?= label('formCliente_juridica'); ?></option>
                        </select>
                        <label for="cliente_tipo"><?= label('formCliente_tipoPersona'); ?></label>
                    </div>
                    <div class="input-field col s12">
                        <select name="cliente_nacionalidad">
                            <option value="" selected disabled><?= label('formCliente_seleccioneUno'); ?></option>
                            <option value="1">Costa Rica</option>
                            <option value="2">Colombia</option>
                            <option value="3">USA</option>
                            <option value="4">Brasil</option>
                            <option value="5">Uruguay</option>
                            <option value="6">Chile</option>
                        </select>
                        <label for="cliente_nacionalidad"><?= label('formCliente_nacionalidad'); ?></label>
                    </div>
                </div>
            </div>

            <?php
            if (isset($resultado)) {
                $juridico = $resultado['juridico'];
                if (!$juridico) { ?>
                    <div id="elementos-cliente-fisico" style="display: block;">
                        <div class="input-field col s12">
                            <input id="cliente_id" name="cliente_id" type="text" value='<?php if (isset($resultado)) echo $resultado['identificacion'];?>'>
                            <label for="cliente_id"><?= label('formCliente_identificacion'); ?></label>
                        </div>
                        <div>
                            <div class="input-field col s12 m4 l4">
                                <input id="cliente_nombre" name="cliente_nombre" type="text" value='<?php if (isset($resultado)) echo $resultado['nombre'];?>'>
                                <label for="cliente_nombre"><?= label('formCliente_nombre'); ?></label>
                            </div>
                            <div class="input-field col s12 m4 l4">
                                <input id="cliente_apellido1" name="cliente_apellido1" type="text" value='<?php if (isset($resultado)) echo $resultado['primerApellido'];?>'>
                                <label for="cliente_apellido1"><?= label('formCliente_apellido1'); ?></label>
                            </div>
                            <div class="input-field col s12 m4 l4">
                                <input id="cliente_apellido2" name="cliente_apellido2" type="text" value='<?php if (isset($resultado)) echo $resultado['segundoApellido'];?>'>
                                <label for="cliente_apellido2"><?= label('formCliente_apellido2'); ?></label>
                            </div>
                        </div>
                        <div class="input-field col s12">
                            <div>
                                <input id="cliente_correo" name="cliente_correo" type="email" style="margin-bottom: 0;" value='<?php if (isset($resultado)) echo $resultado['correo'];?>'>
                                <label for="cliente_correo"><?= label('formCliente_correo'); ?></label>
                            </div>
                            <div style="margin-bottom: 20px;">
                                <input <?php if (isset($resultado)) if($resultado['enviarFacturas']) echo 'checked';?> value='1' type="checkbox" class="filled-in" id="checkbox_correoCliente" name="checkbox_correoCliente" />
                                <label for="checkbox_correoCliente">
                                    <?= label('formCliente_correoCheck') ?>
                                </label>
                            </div>
                        </div>
                        <div class="input-field col s12">
                            <input id="cliente_telefonoMovil" name="cliente_telefonoMovil" type="text" value='<?php if (isset($resultado)) echo $resultado['telefonoMovil'];?>'>
                            <label for="cliente_telefonoMovil"><?= label('formCliente_telefonoMovil'); ?></label>
                        </div>
                        <div class="input-field col s12">
                            <input id="cliente_telefono" name="cliente_telefono" type="text" value='<?php if (isset($resultado)) echo $resultado['telefonoFijo'];?>'>
                            <label for="cliente_telefono"><?= label('formCliente_telefonoFijo'); ?></label>
                        </div>
                        <div class="input-field col s12">
                            <input id="cliente_fechaNacimiento" name="cliente_fechaNacimiento" type="text" class="datepicker-fecha" value='<?php if (isset($resultado)) echo date("d-m-Y", strtotime($resultado['fechaNacimiento']));?>'>
                            <label for="cliente_fechaNacimiento"><?= label('formCliente_fechaNacimiento'); ?></label>
                        </div>
                    </div>
                    <div id="elementos-cliente-juridico" style="display: none;">
                        <div class="input-field col s12">
                            <input id="clientejuridico_id" name="clientejuridico_id" type="text">
                            <label for="clientejuridico_id"><?= label('formCliente_identificacionJuridica'); ?></label>
                        </div>
                        <div class="input-field col s12">
                            <input id="clientejuridico_nombre" name="clientejuridico_nombre" type="text" >
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
                                <label for="checkbox_correoClientejuridico"><?= label('formCliente_correoCheck') ?></label>
                            </div>
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
            <?php
                } else { ?>
                    <div id="elementos-cliente-fisico" style="display: none;">
                        <div class="input-field col s12">
                            <input id="cliente_id" name="cliente_id" type="text" >
                            <label for="cliente_id"><?= label('formCliente_identificacion'); ?></label>
                        </div>
                        <div>
                            <div class="input-field col s12 m4 l4">
                                <input id="cliente_apellido1" name="cliente_apellido1" type="text">
                                <label for="cliente_apellido1"><?= label('formCliente_apellido1'); ?></label>
                            </div>
                            <div class="input-field col s12 m4 l4">
                                <input id="cliente_apellido2" name="cliente_apellido2" type="text">
                                <label for="cliente_apellido2"><?= label('formCliente_apellido2'); ?></label>
                            </div>
                            <div class="input-field col s12 m4 l4">
                                <input id="cliente_nombre" name="cliente_nombre" type="text">
                                <label for="cliente_nombre"><?= label('formCliente_nombre'); ?></label>
                            </div>
                        </div>
                        <div class="input-field col s12">
                            <div>
                                <input id="cliente_correo" name="cliente_correo" type="email" style="margin-bottom: 0;" >
                                <label for="cliente_correo"><?= label('formCliente_correo'); ?></label>
                            </div>
                            <div style="margin-bottom: 20px;">
                                <input value='1' type="checkbox" class="filled-in" id="checkbox_correoCliente" name="checkbox_correoCliente" />
                                <label for="checkbox_correoCliente"><?= label('formCliente_correoCheck') ?></label>
                            </div>
                        </div>
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
                    <div id="elementos-cliente-juridico" style="display: block;">
                        <div class="input-field col s12">
                            <input id="clientejuridico_id" name="clientejuridico_id" type="text" value='<?php if (isset($resultado)) echo $resultado['identificacion'];?>'>
                            <label for="clientejuridico_id"><?= label('formCliente_identificacionJuridica'); ?></label>
                        </div>
                        <div class="input-field col s12">
                            <input id="clientejuridico_nombre" name="clientejuridico_nombre" type="text" value='<?php if (isset($resultado)) echo $resultado['nombre'];?>'>
                            <label for="clientejuridico_nombre"><?= label('formCliente_nombreJuridico'); ?></label>
                        </div>
                        <div class="input-field col s12">
                            <input id="clientejuridico_nombreFantasia" name="clientejuridico_nombreFantasia" type="text" value='<?php if (isset($resultado)) echo $resultado['nombreFantasia'];?>'>
                            <label for="clientejuridico_nombreFantasia"><?= label('formCliente_nombreFantasia'); ?></label>
                        </div>
                        <div class="input-field col s12">
                            <div>
                                <input id="clientejuridico_correo" name="clientejuridico_correo" type="email" value='<?php if (isset($resultado)) echo $resultado['correo'];?>'>
                                <label for="clientejuridico_correo"><?= label('formCliente_correo'); ?></label>
                            </div>
                            <div style="margin-bottom: 20px;">
                                <input <?php if (isset($resultado)) if($resultado['enviarFacturas']) echo 'checked';?> type="checkbox" class="filled-in"
                                                   id="checkbox_correoClientejuridico" name="checkbox_correoClientejuridico" />
                                <label for="checkbox_correoClientejuridico"><?= label('formCliente_correoCheck') ?></label>
                            </div>
                        </div>
                        <div class="input-field col s12">
                            <input id="clientejuridico_telefono" name="clientejuridico_telefono" type="text" value='<?php if (isset($resultado)) echo $resultado['telefonoFijo'];?>'>
                            <label for="clientejuridico_telefono"><?= label('formCliente_telefono'); ?></label>
                        </div>
                        <div class="input-field col s12">
                            <input id="clientejuridico_fax" name="clientejuridico_fax" type="text" value='<?php if (isset($resultado)) echo $resultado['fax'];?>'>
                            <label for="clientejuridico_fax"><?= label('formCliente_fax'); ?></label>
                        </div>
                    </div>
            <?php
                }
            }
            ?>

            <div class="col s12">
                <ul class="tabs tab-demo-active z-depth-1 cliente-info">
                    <li class="tab col s3">
                        <a class="white-text darken-1 waves-effect waves-light active"
                           id="cliente-informacion" href="#tab-direccion-editar">
                            <i class="mdi-maps-my-location"></i>
                            <?= label('cliente_direccion'); ?>
                        </a>
                    </li>
                    <li class="tab-interior tab col s3">
                        <a class="white-text darken-1 waves-effect waves-light"
                           id="cliente-informacion" href="#tab-contactos-editar"><i
                                class="mdi-communication-contacts"></i>
                            <?= label('formCliente_Contactos'); ?></a>
                    </li>
                    <li class="tab-interior tab col s3">
                        <a class="white-text darken-1 waves-effect waves-light"
                           id="cliente-informacion" href="#tab-infoAdicional-editar"><i
                                class="mdi-av-queue"></i>
                            <?= label('cliente_infoAdicional'); ?></a>
                    </li>
                    <li class="tab-interior tab col s3">
                        <a class="white-text darken-1 waves-effect waves-light"
                           id="cliente-informacion" href="#tab-infoFacturacion-editar"><i
                                class="mdi-editor-format-list-numbered"></i>
                            <?= label('cliente_infoFacturacion'); ?></a>
                    </li>
                </ul>
            </div>

            <div class="col s12">
                <div id="tab-direccion-editar" class="card col s12">
                    <div>
                        <div class="input-field col s12 m4 l4">
                            <input id="cliente_direccionPais" name="cliente_direccionPais" type="text">
                            <label for="cliente_direccionPais"><?= label('formCliente_direccionPais'); ?></label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                            <input id="cliente_direccionProvincia" name="cliente_direccionProvincia" type="text" value='<?php if (isset($resultado)) echo $resultado['estadoProvincia'];?>'>
                            <label for="cliente_direccionProvincia"><?= label('formCliente_direccionProvincia'); ?></label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                            <input id="cliente_direccionCanton" name="cliente_direccionCanton" type="text" value='<?php if (isset($resultado)) echo $resultado['ciudadCanton'];?>'>
                            <label for="cliente_direccionCanton"><?= label('formCliente_direccionCanton'); ?></label>
                        </div>
                        <div class="input-field col s12 m12 l12">
                            <input id="cliente_direccionDomicilio" name="cliente_direccionDomicilio" type="text" value='<?php if (isset($resultado)) echo $resultado['domicilio'];?>'>
                            <label for="cliente_direccionDomicilio"><?= label('formCliente_direccionDomicilio'); ?></label>
                        </div>
                    </div>
                </div>
                <div id="tab-contactos-editar" class="card col s12">
                    <input style="display:none" id="cantidadContactos" name="cantidadContactos" type="text" value="<?= count($resultado['contactos'])?>">    
                    <div id="contenedorContactos">

                    <?php 
                        $contador= 0;
                        foreach ($resultado['contactos'] as $contacto) {
                    ?>

                    <div id="contacto<?=$contador?> " class="row"> 
                        <div class="col s12 m11 l11"> 
                            <div class="row"> 
                                <div class="input-field col s12 m4 l4"> 
                                    <input class="accionAplicada" style="display:none" name="contacto_<?=$contador?>" type="text" value="1"> <!-- value 1 para existentes, 0 los nuevos y 2 los eliminados -->
                                    <input style="display:none" name="idContacto_<?=$contador?>" type="text" value="<?=encryptIt($contacto['idPersonaContacto'])?>">

                                    <input id="cliente_contactoApellido1_<?=$contador?>" name="cliente_contactoApellido1_<?=$contador?>" type="text" value="<?=$contacto['primerApellido']?>"> 
                                    <label for="cliente_contactoApellido1_<?=$contador?>"><?= label("formContacto_apellido1"); ?></label> 
                                </div> 
                                <div class="input-field col s12 m4 l4"> 
                                    <input id="cliente_contactoApellido2_<?=$contador?>" name="cliente_contactoApellido2_<?=$contador?>" type="text" value="<?=$contacto['segundoApellido']?>"> 
                                    <label for="cliente_contactoApellido2_<?=$contador?>"><?= label("formContacto_apellido2"); ?></label> 
                                </div> 
                                <div class="input-field col s12 m4 l4"> 
                                    <input id="cliente_contactoNombre_<?=$contador?>" name="cliente_contactoNombre_<?=$contador?>" type="text" value="<?=$contacto['nombre']?>"> 
                                    <label for="cliente_contactoNombre_<?=$contador?>"><?= label("formContacto_nombre"); ?></label> 
                                </div> 
                            </div> 

                            <div class="row"> 
                                <div class="input-field col s12 m6 l6"> 
                                    <div> 
                                        <input id="cliente_contactoCorreo_<?=$contador?>" name="cliente_contactoCorreo_<?=$contador?>" type="email" style="margin-bottom: 0;" value="<?=$contacto['correo']?>"> 
                                        <label for="cliente_contactoCorreo_<?=$contador?>"><?= label("formCliente_correo"); ?></label> 
                                    </div> 
                                    <div style="margin-bottom: 20px;"> 
                                        <input type="checkbox" class="filled-in" id="checkbox_contactoCorreoCliente_<?=$contador?>" name="checkbox_contactoCorreoCliente_<?=$contador?>" value="1" <?php if($contacto['enviarFacturas']) echo 'checked';?>> 
                                        <label for="checkbox_contactoCorreoCliente_<?=$contador?>" style="margin-bottom: 20px;"> 
                                        <?= label("formCliente_correoCheck"); ?> 
                                        </label> 
                                    </div> 
                                </div> 
                                <div class="input-field col s12 m3 l3"> 
                                    <input id="cliente_contactoPuesto_<?=$contador?>" name="cliente_contactoPuesto_<?=$contador?>" type="text" value="<?=$contacto['puesto']?>"> 
                                    <label for="cliente_contactoPuesto_<?=$contador?>"><?= label("formContacto_puesto"); ?></label> 
                                </div> 
                                <div class="input-field col s12 m3 l3"> 
                                    <input id="cliente_contactoTelefono_<?=$contador?>" name="cliente_contactoTelefono_<?=$contador?>" type="text" value="<?=$contacto['telefono']?>"> 
                                    <label for="cliente_contactoTelefono_<?=$contador?>"><?= label("formContacto_telefono"); ?></label> 
                                </div> 
                            </div> 

                        </div> 
                        <div class="col s12 m1 l1 btn-contacto-eliminar-edicion"> 
                            <a class="confirmarEliminarContacto" data-fila-eliminar=" <?=$contador?> " title="<?= label("formCliente_contactoEliminar") ?>"><i class="mdi-action-delete medium" style="color: black;"></i></a> 
                        </div> 
                        <div class="col s12"> 
                            <hr /> 
                        </div> 
                    </div> 



                    <?php 
                        $contador++;
                        }
                    ?>
                        
                    </div>
                       
                    <div class="row" id="tab-contactos-editar-nuevo">
                        <a onclick="agregarNuevoContacto();">
                            <?= label('formCliente_contactoAgregar') ?>
                        </a>
                    </div>
                </div>
                <div id="tab-infoAdicional-editar" class="card col s12">
                    <!-- <div class="inputTag col s12">
                        <label for="vendedoresCliente"><?= label('formCliente_cotizador'); ?></label>
                        <br>
                        <div id="vendedoresCliente" class="example tags_vendedores">
                            <div class="bs-example">
                                <input placeholder="<?= label('formCliente_anadirVendedor'); ?>" type="text"/>
                            </div>
                        </div>
                        <br>
                    </div> -->
                    <div class="inputTag col s12">
                        <label for="vendedoresCliente"><?= label('formCliente_cotizador'); ?></label>

                        <div>
                            <input value='1' type="checkbox" class="filled-in" id="checkbox_todosVendedores" name="checkbox_todosVendedores" />
                            <label for="checkbox_todosVendedores">
                                <?= label('formCliente_todos') ?>
                            </label>
                        </div>
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
                                <input name="cliente_gustos" placeholder="<?= label('formCliente_anadirGusto'); ?>" type="text"
                                       value="<?php if (isset($resultado)) {
                                        foreach ($resultado['gustos'] as $gusto) {
                                            echo $gusto['nombre'].',';
                                        }
                                      
                                   } ?>"/>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="inputTag col s12">
                        <label for="mediosCliente"><?= label('formCliente_mediosContacto'); ?></label>
                        <br>
                        <div id="mediosCliente" class="example tags_mediosContacto">
                            <div class="bs-example">
                                <input name="cliente_medios" placeholder="<?= label('formCliente_anadirMedio'); ?>" type="text"
                                       value="<?php if (isset($resultado)) {
                                        foreach ($resultado['medios'] as $medio) {
                                            echo $medio['nombre'].',';
                                        }
                                      
                                   } ?>"/>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                <div id="tab-infoFacturacion-editar" class="card col s12">
                    <div class="input-field col s12">
                        <select>
                            <option value="" selected
                                    disabled><?= label('formCliente_seleccioneUno'); ?></option>
                            <option value="1">Adelantado</option>
                            <option value="2">Contado</option>
                            <option value="3">A pagos</option>
                        </select>
                        <label for="cliente_formaPagoFavorita">
                            <?= label('formCliente_formaPagoFavorita'); ?></label>
                    </div>
                    <div class="input-field col s12">
                        <input id="cliente_descuento" name="cliente_descuento" type="text">
                        <label
                            for="cliente_descuento"><?= label('formCliente_descuento'); ?></label>
                        <span class="icono-porcentaje-descuento">%</span>
                    </div>
                    <div class="input-field col s12">
                        <select>
                            <option value="" selected
                                    disabled><?= label('formCliente_seleccioneUno'); ?></option>
                            <option value="1">Dolar</option>
                            <option value="2">Reales</option>
                            <option value="3">Euros</option>
                        </select>
                        <label for="cliente_moneda"><?= label('formCliente_monedaCotizar'); ?></label>
                    </div>
                </div>
            </div>
            <div class="input-field col s12 envio-formulario">
                <button class="btn waves-effect waves-light right" type="submit"
                        name="action"><?= label('formCliente_editar'); ?>
                </button>
            </div>
        </div>
    </form>
</div>

<div style="visibility:hidden; position:absolute">
    <a id="linkContactosElimminar" href="#eliminarContacto-editar" class="modal-trigger" data-fila-eliminar="1" title="<?= label('formCliente_contactoEliminar') ?>"><i class="mdi-action-delete medium" style="color: black;"></i></a>
</div>


<script>
    $('#checkbox_todosVendedores').on('click', function(){
         if ($(this).prop('checked')) {
            $('#vendedoresCliente').hide();
        } else {
            $('#vendedoresCliente').show();
        }
    });
    $(document).ready(function () {
        // $juridico = $resultado['juridico'];
        var tipo = "<?= $resultado['juridico'] ?>";
        // alert(tipo);
        if(tipo == 1) {
            $('#cliente_tipo').val(1).change();
        } else {
            $('#cliente_tipo').val(0).change();
        }

        var checkVendedores = "<?= $resultado['todosVendedores'] ?>";
        // alert(checkVendedores
        if(checkVendedores == 1) {
            $('#checkbox_todosVendedores').click();
        }
    });

    var miIdActual = "<?php if (isset($resultado)) {echo $resultado['identificacion'];} ?>";
    function validacionCorrecta(){
        var tipoCliente = $('#cliente_tipo option:selected').val();
        // alert(tipoCliente);
        var identificacion = '';
        if (tipoCliente == 0) {
            identificacion = $('#cliente_id').val();
        } else{
            identificacion = $('#clientejuridico_id').val();
        }
        if (miIdActual == identificacion) {
            var url = $('form').attr('action');
            var method = $('form').attr('method'); 
            $.ajax({
                type: method,
                url: url,
                data: $('form').serialize(),
                success: function(response)
                {
                    // alert(response);
                    if (response == 0) {
                        $('#transaccionIncorrecta').openModal();
                    } else {
                        $('#transaccionCorrecta').openModal();
                    }
                }
            });
        } else {
            $.ajax({
                data: {cliente_id : identificacion},
                url:   '<?=base_url()?>clientes/existeIdentificacion',
                type:  'post',
                success:  function (response) {
                    switch(response){
                        case '0':
                            $('#transaccionIncorrecta').openModal();
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
                            var url = $('form').attr('action');
                            var method = $('form').attr('method');
                            $.ajax({
                                type: method,
                                url: url,
                                data: $('form').serialize(),
                                success: function(response)
                                {
                                    if (response == 0) {
                                        $('#transaccionIncorrecta').openModal();
                                    } else {
                                        $('#transaccionCorrecta').openModal();
                                        miIdActual = idNuevo;
                                    }
                                }
                            });
                            break;
                    }
                }
            });
        }
    }
    function validacionCorrecta_Imagen(){
        var formPW = $('#cliente-cambio-imagen');
        $.ajax({
            data: new FormData(formPW[0]),
            url: formPW.attr('action'),
            type: formPW.attr('method'),
            success:  function (response) {
                if(response == 0) {
                    alert('<?= label('usuarioErrorCambioImagen'); ?>');//error al ir a verificar identificaci�n
                } else {
                    alert('<?= label('usuarioExitoCambioEmagen'); ?>');
                    d = new Date();
                    $('#imagen_seleccionada').attr('src', response + '?' + d.getTime());
                    $('#imagen_perfil_usuario').attr('src', response + '?' + d.getTime());
                    $('#imagen_perfil_usuario_ver').attr('src', response + '?' + d.getTime());
                    formPW.find('input:file,input:text').val('');
                }
            },
            cache: false,
            contentType: false,
            processData: false
        });
    }

    $(window).load(function () {
        var marcados = $('.checkbox-edicion:checked').size();
        var elems = document.getElementsByClassName('opciones-seleccionados');
        if (marcados >= 1) {
            var e1;
            for (e1 in elems) {
                elems[e1].style.visibility = 'visible';
            }
        } else {
            var e2;
            for (e2 in elems) {
                elems[e2].style.visibility = 'hidden';
            }
        }
        document.getElementById('checkbox-all').checked = false;
    });

    $(document).ready( function () {
        $('#cliente1-contactos-editar').dataTable( {
            'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0, -1] /* 1st one, start by the right */
            }]
        });

        $('table#cliente1-contactos-editar thead th:first').removeClass('sorting_asc').addClass('sorting_disabled');
        $('table#cliente1-contactos-editar thead th:nth-child(2)').removeClass('sorting').addClass('sorting_asc');
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
            var $this = $(this);
            var tableBody = $('#cliente1-contactos-editar').find('tbody tr[role=row] input[type=checkbox]');
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
        $('.checkbox-edicion').click(function (event) {
            var marcados = $('.checkbox-edicion:checked').size();
            var elems = document.getElementsByClassName('opciones-seleccionados');
            if (marcados >= 1) {
                var e1;
                for (e1 in elems) {
                    elems[e1].style.visibility = 'visible';
                }
            } else {
                var e2;
                for (e2 in elems) {
                    elems[e2].style.visibility = 'hidden';
                }
            }
        });
    });
</script>

<!-- Funcion para mostrar elementos -->
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

    var contactoEliminar = null;
    $(document).on('click','.confirmarEliminarContacto', function () {
       contactoEliminar = $(this).parent().parent();
       $('#linkContactosElimminar').click();//esto se hace porque al agregar un <a class="modal-trigger"> dinamicamente con el metodo de agregarNuevoContacto() pareciera no servir, entonces lo que se hace es llamar al evento click del modal-trigger con el id = linkContactosElimminar 
   });

    $(document).on('click','#eliminarContacto-editar #botonEliminar', function () {
       event.preventDefault();
       var tipo = contactoEliminar.find('.accionAplicada').val();
       if (tipo == '0') {
            contactoEliminar.fadeOut(function () {
                contactoEliminar.remove();
           });
           cantidad--;
           actualizarCantidad();
       } else{
        contactoEliminar.find('.accionAplicada').val('2');
        contactoEliminar.fadeOut(function () {
            contactoEliminar.hide();
       });

       }
    });

    function actualizarCantidad(){
        $('#cantidadContactos').val(cantidad);
    }
    var cantidad = <?= count($resultado['contactos'])?>;
    var contador = cantidad;
    function agregarNuevoContacto() {
        cantidad++;
        actualizarCantidad();
        $('#contenedorContactos').append('' +
            '<div id="contacto' + contador +' " class="row">' +
                '<div class="col s12 m11 l11">' +
                    '<div class="row">' +
                        '<div class="input-field col s12 m4 l4">' +
                            '<input class="accionAplicada" style="display:none" name="contacto_'+ contador +'" type="text" value="0">' +  
                            '<input id="cliente_contactoApellido1_'+ contador +'" name="cliente_contactoApellido1_'+ contador +'" type="text">' +
                            '<label for="cliente_contactoApellido1_'+ contador +'"><?= label("formContacto_apellido1"); ?></label>' +
                        '</div>' +
                        '<div class="input-field col s12 m4 l4">' +
                            '<input id="cliente_contactoApellido2_'+ contador +'" name="cliente_contactoApellido2_'+ contador +'" type="text">' +
                            '<label for="cliente_contactoApellido2_'+ contador +'"><?= label("formContacto_apellido2"); ?></label>' +
                        '</div>' +
                        '<div class="input-field col s12 m4 l4">' +
                            '<input id="cliente_contactoNombre_'+ contador +'" name="cliente_contactoNombre_'+ contador +'" type="text">' +
                            '<label for="cliente_contactoNombre_'+ contador +'"><?= label("formContacto_nombre"); ?></label>' +
                        '</div>' +
                    '</div>' +

                    '<div class="row">' +
                        '<div class="input-field col s12 m6 l6">' +
                            '<div>' +
                                '<input id="cliente_contactoCorreo_'+ contador +'" name="cliente_contactoCorreo_'+ contador +'" type="email" style="margin-bottom: 0;">' +
                                '<label for="cliente_contactoCorreo_'+ contador +'"><?= label('formCliente_correo'); ?></label>' +
                            '</div>' +
                            '<div style="margin-bottom: 20px;">' +
                                '<input type="checkbox" class="filled-in" id="checkbox_contactoCorreoCliente_'+ contador +'" name="checkbox_contactoCorreoCliente_'+ contador +'" />' +
                                '<label for="checkbox_contactoCorreoCliente_'+ contador +'" style="margin-bottom: 20px;">' +
                                '<?= label('formCliente_correoCheck') ?>' +
                                '</label>' +
                            '</div>' +
                        '</div>' +
                        '<div class="input-field col s12 m3 l3">' +
                            '<input id="cliente_contactoPuesto_'+ contador +'" name="cliente_contactoPuesto_'+ contador +'" type="text">' +
                            '<label for="cliente_contactoPuesto_'+ contador +'"><?= label('formContacto_puesto'); ?></label>' +
                        '</div>' +
                        '<div class="input-field col s12 m3 l3">' +
                            '<input id="cliente_contactoTelefono_'+ contador +'" name="cliente_contactoTelefono_'+ contador +'" type="text">' +
                            '<label for="cliente_contactoTelefono_'+ contador +'"><?= label('formContacto_telefono'); ?></label>' +
                        '</div>' +
                    '</div>' +

                '</div>' +
                '<div class="col s12 m1 l1 btn-contacto-eliminar-edicion">' +
                   // '<a href="#eliminarContacto" class="-text modal-trigger confirmarEliminar"  data-fila-eliminar="' + contador + '"><?= label('menuOpciones_eliminar') ?></a>' +
                   // '<div class="confirmarEliminarContacto">prueba</div>'+
                    '<a class="confirmarEliminarContacto" data-fila-eliminar="' + contador + '" title="<?= label('formCliente_contactoEliminar') ?>"><i class="mdi-action-delete medium" style="color: black;"></i></a>' +
                '</div>' +
                '<div class="col s12">' +
                    '<hr />' +
                '</div>' +
            '</div>' 
            
            );
            contador++;
    }
</script>

<!-- lista modals -->
<div id="eliminarContacto-editar" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarContacto'); ?></p>
    </div>
    <div id="botonEliminar" class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>

<div id="cambio-imagen" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <?php $this->load->helper('form'); ?>
        <?php
        if (isset($resultado)) {
            $idEncriptado = encryptIt($resultado['idCliente']);
        }
        echo form_open_multipart(base_url().'clientes/cambio_imagen/'.$idEncriptado, array('id' => 'cliente-cambio-imagen', 'method' => 'POST', 'class' => 'col s12')); ?>
        <div class="col s12" style="padding: 0;">
            <div class="file-field col s12 m7 l9" style="padding: 0;">
                <label for="cliente_fotografia"><?= label('formCliente_fotografia'); ?></label>

                <div class="file-field input-field col s12" style="padding: 0;">
                    <input style="margin-left: 18% !important;width: 80% !important;"
                           name="cliente_fotografia" class="file-path" type="text" readonly/>

                    <div class="btn" data-toggle="tooltip" title="<?= label('tooltip_examinar') ?>" style="top: -15px;">
                        <span><i class="mdi-action-search"></i></span>
                        <input style="padding-right: 100px;" id="userfile" type="file" name="userfile"
                               accept="image/jpeg,image/png"/>
                    </div>
                </div>
            </div>
            <div class="col s12 m5 l3">
                <figure style="margin:0 10px;">
                    <img id="imagen_seleccionada" src="<?= $ruta; ?>">
                </figure>
            </div>
        </div>
        <div class="input-field col s12 envio-formulario" style="margin-bottom: 30px;">
            <button class="btn waves-effect waves-light right" type="submit" id="guardar-cambios-usuario"
                    name="action"><?= label('formUsuario_editar'); ?></button>
        </div>
        </form>
    </div>
</div>
<div id="transaccionCorrecta" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a href="" class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('clienteEditadoCorrectamente'); ?></p>
    </div>
    <div class="modal-footer">
        <a href="<?= base_url() ?>clientes" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="transaccionIncorrecta" class="modal">
    <div  class="modal-header headerTransaccionIncorrecta">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('errorEditar'); ?></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<!-- Fin lista modals-->

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