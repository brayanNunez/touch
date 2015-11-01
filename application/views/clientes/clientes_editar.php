<div class="col s12 tab-edicion-editar">
    <form id="form_cliente" class="col s12" action="<?= base_url() ?>clientes/modificar/<?php if (isset($resultado)) echo encryptIt($resultado['idCliente']);?>" method="POST">

        <div class="row">
            <?php
            if (isset($resultado)) {
                $juridico = $resultado['juridico'];
                if (!$juridico) {
                   ?>
                    <div class="input-field col s12">
                        <select name="cliente_tipo" onchange="datosCliente(this)">
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
                                <label
                                    for="cliente_telefonoMovil"><?= label('formCliente_telefonoMovil'); ?></label>
                            </div>
                            <div class="input-field col s12">
                                <input id="cliente_telefono" name="cliente_telefono" type="text" value='<?php if (isset($resultado)) echo $resultado['telefonoFijo'];?>'>
                                <label
                                    for="cliente_telefono"><?= label('formCliente_telefonoFijo'); ?></label>
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


                        <?php
                         } else {
                        ?>

                            <div class="input-field col s12">
                                <select name="cliente_tipo" onchange="datosCliente(this)">
                                    <option value="0" ><?= label('formCliente_fisica'); ?></option>
                                    <option value="1" selected><?= label('formCliente_juridica'); ?></option>
                                </select>
                                <label for="cliente_tipo"><?= label('formCliente_tipoPersona'); ?></label>
                            </div>
                            <div class="input-field col s12">
                                <select name="cliente_nacionalidad">
                                    <option value="" selected
                                            disabled><?= label('formCliente_seleccioneUno'); ?></option>
                                    <option value="1">Costa Rica</option>
                                    <option value="2">Colombia</option>
                                    <option value="3">USA</option>
                                    <option value="4">Brasil</option>
                                    <option value="5">Uruguay</option>
                                    <option value="6">Chile</option>
                                </select>
                                <label for="cliente_nacionalidad"><?= label('formCliente_nacionalidad'); ?></label>
                            </div>

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
                                            <label for="checkbox_correoClientejuridico">
                                                <?= label('formCliente_correoCheck') ?>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="clientejuridico_telefono" name="clientejuridico_telefono" type="text" value='<?php if (isset($resultado)) echo $resultado['telefonoFijo'];?>'>
                                        <label
                                            for="clientejuridico_telefono"><?= label('formCliente_telefono'); ?></label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="clientejuridico_fax" name="clientejuridico_fax" type="text" value='<?php if (isset($resultado)) echo $resultado['fax'];?>'>
                                        <label
                                            for="clientejuridico_fax"><?= label('formCliente_fax'); ?></label>
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
                    <div class="inputTag col s12">
                        <label for="vendedoresCliente"><?= label('formCliente_cotizador'); ?></label>
                        <br>
                        <div id="vendedoresCliente" class="example tags_vendedores">
                            <div class="bs-example">
                                <input placeholder="<?= label('formCliente_anadirVendedor'); ?>" type="text"/>
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
<!-- <div style="display:none"> -->
                                         
    <a id="linkContactosElimminar" href="#eliminarContacto-editar" class="modal-trigger" data-fila-eliminar="1" title="<?= label('formCliente_contactoEliminar') ?>"><i class="mdi-action-delete medium" style="color: black;"></i></a>
</div>


<script>

    var miIdActual = "<?php if (isset($resultado)) {echo $resultado['identificacion'];} ?>";
    function validacionCorrecta(){

        var idNuevo = $('#cliente_id').val();
        if (miIdActual == idNuevo) {

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
                       }
                   }
                 });
        } else {

                $.ajax({
                       data: {cliente_id : idNuevo},
                       url:   '<?=base_url()?>clientes/existeIdentificacion',
                       type:  'post',
                       success:  function (response) {
                        switch(response){
                            case '0':
                                $('#transaccionIncorrecta').openModal();
                            break;
                            case '1':
                                alert('<?= label("clienteIdentificacionExistente"); ?>');
                                $('#cliente_id').focus();
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

             };

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