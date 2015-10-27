<div class="col s12 tab-edicion-editar">
    <?php
    $idEncriptado = '';
    $empleado = '';
    $juridico = '';
    $tipo = '';
    $tipoProveedor = '';
    $identificacion = '';
    $nacionalidad = '';
    $apellido1 = '';
    $apellido2 = '';
    $nombre = '';
    $nombreFantasia = '';
    $correo = '';
    $telefonoFijo = '';
    $telefonoMovil = '';
    $fax = '';
    $fechaNacimiento = '';
    $descripcion = '';
    $pais = '';
    $provincia = '';
    $canton = '';
    $domicilio = '';
    $palabras = '';
    $ruta = base_url().'files/empresas/';
    if(isset($resultado)) {
        $idEncriptado = encryptIt($resultado['idProveedor']);
        $empleado = $resultado['empleado'];
        $juridico = $resultado['juridico'];
        $identificacion = $resultado['identificacion'];
        $nombre = $resultado['nombre'];
        $apellido1 = $resultado['primerApellido'];
        $apellido2 = $resultado['segundoApellido'];
        $nacionalidad = $resultado['nacionalidad'];//Falta jalarlo de la bd
        $correo = $resultado['correo'];
        $telefonoFijo = $resultado['telefonoFijo'];
        $descripcion = $resultado['descripcion'];
        $pais = $resultado['pais'];
        $provincia = $resultado['provincia'];
        $canton = $resultado['canton'];
        $domicilio = $resultado['domicilio'];
        foreach($resultado['palabras'] as $palabra) {
            $palabras.= $palabra['descripcion'].', ';
        }
        if($empleado) {
            $tipo = 'Empleado';
            $tipoProveedor = 'Fisico';
            $telefonoMovil = $resultado['telefonoMovil'];
            $fechaNacimiento = date('d/m/Y', strtotime($resultado['fechaNacimiento']));
        } else {
            $tipo = 'Proveedor';
            $nombreFantasia = $resultado['nombreFantasia'];
            if($juridico){
                $tipoProveedor = 'Juridico';
                $fax = $resultado['fax'];
            } else {
                $tipoProveedor = 'Fisico';
                $telefonoMovil = $resultado['telefonoMovil'];
                $fechaNacimiento = date('d/m/Y', strtotime($resultado['fechaNacimiento']));
            }
        }
        if($resultado['fotografia'] != '') {
            $ruta .= $resultado['idEmpresa'].'/proveedores/'.$resultado['idProveedor'].'/'.$resultado['fotografia'];
        } else {
            $ruta = base_url().'files/default-user-image.png';
        }
    } else {
        $ruta = base_url().'files/default-user-image.png';
    }
    ?>
    <form id="formPersona" action="<?= base_url(); ?>proveedores/modificar/<?= $idEncriptado; ?>" method="POST" class="col s12">
        <div class="row">

            <div class="col s12" style="position: relative;margin-top: 15px;min-height: 150px;">
                <div class="col s12 m5 l3">
                    <div id="imagen-usuario-editar" class="cliente-ver-logo" style="margin: 5px 0;">
                        <a class="modal-trigger" href="#cambio-imagen" title="Cambiar imagen" style="position: relative; cursor:pointer;">
                            <img id="imagen_perfil_usuario" alt="Imagen de perfil de la persona" src="<?= $ruta; ?>" style="position:relative;height: 200px;width: 200px;" />
                            <img id="icon-image-edit" src="<?= base_url() ?>files/edit-image.png">
                        </a>
                    </div>
                </div>
                <div class="col s12 m17 l9" style="padding: 0;">
                    <div class="input-field col s12">
                        <input id="persona_tipoProveedor" name="persona_tipoProveedor" type="text" value="<?= $tipo; ?>" readonly />
                        <label for="persona_tipoProveedor"><?= label('formPersona_tipoProveedor'); ?></label>
                    </div>

                    <?php
                    if(!$empleado) { ?>
                        <div id="seleccion_TipoProveedor" class="input-field col s12">
                            <select id="persona_tipo" name="persona_tipo" onchange="datosProveedor(this)">
                                <option value="1" selected><?= label('formPersona_fisico'); ?></option>
                                <option value="2"><?= label('formPersona_juridico'); ?></option>
                            </select>
                            <label for="persona_tipo"><?= label('formPersona_tipo'); ?></label>
                        </div>
                        <?php
                    } ?>

                    <div class="input-field col s12">
                        <select id="persona_nacionalidad" name="persona_nacionalidad">
                            <option value="0" selected disabled><?= label('formPersona_seleccioneUno'); ?></option>
                            <option value="1">Costa Rica</option>
                            <option value="2">Colombia</option>
                            <option value="3">USA</option>
                            <option value="4">Brasil</option>
                            <option value="5">Uruguay</option>
                            <option value="6">Chile</option>
                        </select>
                        <label for="persona_nacionalidad"><?= label('formPersona_nacionalidad'); ?></label>
                    </div>
                </div>
            </div>

            <div id="campos-proveedor-fisico" style="display: block;">
                <div class="input-field col s12">
                    <input id="persona_identificacion" name="persona_identificacion" type="text" value="<?= $identificacion; ?>">
                    <label for="persona_identificacion"><?= label('formPersona_identificacion'); ?></label>
                </div>
                <div>
                    <div class="input-field col s12 m4 l4">
                        <input id="persona_apellido1" name="persona_apellido1" type="text" value="<?= $apellido1; ?>">
                        <label for="persona_apellido1"><?= label('formPersona_apellido1'); ?></label>
                    </div>
                    <div class="input-field col s12 m4 l4">
                        <input id="persona_apellido2" name="persona_apellido2" type="text" value="<?= $apellido2; ?>">
                        <label for="persona_apellido2"><?= label('formPersona_apellido2'); ?></label>
                    </div>
                    <div class="input-field col s12 m4 l4">
                        <input id="persona_nombre" name="persona_nombre" type="text" value="<?= $nombre; ?>">
                        <label for="persona_nombre"><?= label('formPersona_nombre'); ?></label>
                    </div>
                </div>
                <div class="input-field col s12">
                    <input id="persona_correo" name="persona_correo" type="email" value="<?= $correo; ?>">
                    <label for="persona_correo"><?= label('formPersona_correo'); ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="persona_telefonoMovil" name="persona_telefonoMovil" type="text" value="<?= $telefonoMovil; ?>">
                    <label for="persona_telefonoMovil"><?= label('formPersona_telefonoMovil'); ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="persona_telefono" name="persona_telefono" type="text" value="<?= $telefonoFijo; ?>">
                    <label for="persona_telefono"><?= label('formProveedor_telefonoFijo'); ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="persona_fechaNacimiento" name="persona_fechaNacimiento" type="text" class="datepicker-fecha" value="<?= $fechaNacimiento; ?>">
                    <label for="persona_fechaNacimiento"><?= label('formPersona_fechaNacimiento'); ?></label>
                </div>
            </div>

            <div id="campos-proveedor-juridico" style="display: none;">
                <div class="input-field col s12">
                    <input id="personajuridico_identificacion" name="personajuridico_identificacion" type="text" value="<?= $identificacion; ?>">
                    <label for="personajuridico_identificacion"><?= label('formPersona_identificacionJuridica'); ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="personajuridico_nombre" name="personajuridico_nombre" type="text" value="<?= $nombre; ?>">
                    <label for="personajuridico_nombre"><?= label('formPersona_nombreJuridico'); ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="personajuridico_nombreFantasia" name="personajuridico_nombreFantasia" type="text" value="<?= $nombreFantasia; ?>">
                    <label for="personajuridico_nombreFantasia"><?= label('formPersona_nombreFantasia'); ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="personajuridico_correo" name="personajuridico_correo" type="email" value="<?= $correo; ?>">
                    <label for="personajuridico_correo"><?= label('formPersona_correo'); ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="personajuridico_telefono" name="personajuridico_telefono" type="text" value="<?= $telefonoFijo; ?>">
                    <label for="personajuridico_telefono"><?= label('formPersona_telefono'); ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="personajuridico_fax" name="personajuridico_fax" type="text" value="<?= $fax; ?>">
                    <label for="personajuridico_fax"><?= label('formPersona_fax'); ?></label>
                </div>
            </div>

            <div>
                <div class="inputTag col s12" style="margin-bottom: 10px;">
                    <label for="persona_palabrasClave"><?= label('formPersona_palabrasClave'); ?></label>
                    <div id="persona_palabrasClave" class="example tags_keywords" style="margin-top: 10px;">
                        <div class="bs-example">
                            <input id="persona_palabras" name="persona_palabras" value="<?= $palabras; ?>"
                                   placeholder="<?= label('formPersona_palabrasClaveAnadir'); ?>" type="text"/>
                        </div>
                    </div>
                </div>
                <div class="input-field col s12">
                    <textarea id="persona_descripcion" name="persona_descripcion" class="materialize-textarea"
                              rows="4"><?= $descripcion; ?></textarea>
                    <label for="persona_descripcion"><?= label('formPersona_descripcion'); ?></label>
                </div>
            </div>

            <div class="col s12 proveedor-editar-tabs-secundarios">
                <ul class="tabs tab-demo-active z-depth-1 proveedor-info">
                    <li class="tab col s3">
                        <a class="white-text darken-1 waves-effect waves-light active"
                           id="proveedor-tab-direccion" href="#tab-direccion-editar"><i
                                class="mdi-maps-my-location"></i>
                            <?= label('formProveedor_direccion'); ?></a>
                    </li>
                    <li class="tab-interior tab col s3">
                        <a class="white-text darken-1 waves-effect waves-light"
                           id="proveedor-tab-contactos" href="#tab-contactos-editar"><i
                                class="mdi-communication-contacts"></i>
                            <?= label('formProveedor_contactos'); ?></a>
                    </li>
                    <li class="tab-interior tab col s3">
                        <a class="white-text darken-1 waves-effect waves-light"
                           id="proveedor-tab-informacion" href="#tab-infoAdicional-editar"><i
                                class="mdi-av-queue"></i>
                            <?= label('formProveedor_infoCotizacion'); ?></a>
                    </li>
                </ul>
            </div>

            <div class="col s12 proveedor-editar-tabs-secundarios">
                <div id="tab-direccion-editar" class="card col s12">
                    <div class="input-field col s12 m4 l4">
                        <input id="persona_direccionPais" name="persona_direccionPais" type="text" value="<?= $pais; ?>">
                        <label for="persona_direccionPais"><?= label('formPersona_direccionPais'); ?></label>
                    </div>
                    <div class="input-field col s12 m4 l4">
                        <input id="persona_direccionProvincia" name="persona_direccionProvincia" type="text" value="<?= $provincia; ?>">
                        <label for="persona_direccionProvincia"><?= label('formPersona_direccionProvincia'); ?></label>
                    </div>
                    <div class="input-field col s12 m4 l4">
                        <input id="persona_direccionCanton" name="persona_direccionCanton" type="text" value="<?= $canton; ?>">
                        <label for="persona_direccionCanton"><?= label('formPersona_direccionCanton'); ?></label>
                    </div>
                    <div class="input-field col s12 m12 l12">
                        <input id="persona_direccionDomicilio" name="persona_direccionDomicilio" type="text" value="<?= $domicilio; ?>">
                        <label for="persona_direccionDomicilio"><?= label('formPersona_direccionDomicilio'); ?></label>
                    </div>
                </div>
                <div id="tab-contactos-editar" class="card col s12">
                    <div id="contenedorContactos">
                        <?php
                        if(isset($resultado['contactos'])) {
                            $contactos = $resultado['contactos'];
                            if($contactos != false) {
                                $contador= 0;
                                foreach ($contactos as $contacto) { ?>
                                    <div id="contacto<?=$contador?> " class="row">
                                        <div class="col s12 m11 l11">
                                            <div class="row">
                                                <div class="input-field col s12 m4 l4">
                                                    <input class="accionAplicada" style="display:none" name="contacto_<?=$contador?>" type="text" value="1"> <!-- value 1 para existentes, 0 los nuevos y 2 los eliminados -->
                                                    <input style="display:none" name="idContacto_<?=$contador?>" type="text" value="<?=encryptIt($contacto['idProveedorContacto'])?>">

                                                    <input id="proveedor_contactoApellido1_<?=$contador?>" name="proveedor_contactoApellido1_<?=$contador?>" type="text" value="<?=$contacto['primerApellido']?>">
                                                    <label for="proveedor_contactoApellido1_<?=$contador?>"><?= label("formContacto_apellido1"); ?></label>
                                                </div>
                                                <div class="input-field col s12 m4 l4">
                                                    <input id="proveedor_contactoApellido2_<?=$contador?>" name="proveedor_contactoApellido2_<?=$contador?>" type="text" value="<?=$contacto['segundoApellido']?>">
                                                    <label for="proveedor_contactoApellido2_<?=$contador?>"><?= label("formContacto_apellido2"); ?></label>
                                                </div>
                                                <div class="input-field col s12 m4 l4">
                                                    <input id="proveedor_contactoNombre_<?=$contador?>" name="proveedor_contactoNombre_<?=$contador?>" type="text" value="<?=$contacto['nombre']?>">
                                                    <label for="proveedor_contactoNombre_<?=$contador?>"><?= label("formContacto_nombre"); ?></label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12 m6 l6">
                                                    <div>
<!--                                                        <input id="proveedor_contactoCorreo_--><?//=$contador?><!--" name="proveedor_contactoCorreo_--><?//=$contador?><!--" type="email" style="margin-bottom: 0;" value="--><?//=$contacto['correo']?><!--">-->
                                                        <input id="proveedor_contactoCorreo_<?=$contador?>" name="proveedor_contactoCorreo_<?=$contador?>" type="email" value="<?=$contacto['correo']?>">
                                                        <label for="proveedor_contactoCorreo_<?=$contador?>"><?= label("formProveedor_correo"); ?></label>
                                                    </div>
<!--                                                    <div style="margin-bottom: 20px;">-->
<!--                                                        <input type="checkbox" class="filled-in" id="checkbox_contactoCorreoCliente_--><?//=$contador?><!--" name="checkbox_contactoCorreoCliente_--><?//=$contador?><!--" value="1" --><?php //if($contacto['enviarFacturas']) echo 'checked';?><!-->
<!--                                                        <label for="checkbox_contactoCorreoCliente_--><?//=$contador?><!--" style="margin-bottom: 20px;">-->
<!--                                                            --><?//= label("formCliente_correoCheck"); ?>
<!--                                                        </label>-->
<!--                                                    </div>-->
                                                </div>
                                                <div class="input-field col s12 m3 l3">
                                                    <input id="proveedor_contactoPuesto_<?=$contador?>" name="proveedor_contactoPuesto_<?=$contador?>" type="text" value="<?=$contacto['puesto']?>">
                                                    <label for="proveedor_contactoPuesto_<?=$contador?>"><?= label("formContacto_puesto"); ?></label>
                                                </div>
                                                <div class="input-field col s12 m3 l3">
                                                    <input id="proveedor_contactoTelefono_<?=$contador?>" name="proveedor_contactoTelefono_<?=$contador?>" type="text" value="<?=$contacto['telefono']?>">
                                                    <label for="proveedor_contactoTelefono_<?=$contador?>"><?= label("formContacto_telefono"); ?></label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col s12 m1 l1 btn-contacto-eliminar-edicion">
                                            <a class="confirmarEliminarContacto" data-fila-eliminar="<?= $contador; ?>" title="<?= label("formProveedor_contactoEliminar") ?>"><i class="mdi-action-delete medium" style="color: black;"></i></a>
                                        </div>
                                    </div>
                                    <div class="col s12">
                                        <hr />
                                    </div>
                        <?php
                                    $contador++;
                                }
                            }
                        } ?>
                    </div>
                    <div class="row" id="tab-contactos-nuevo" style="padding: 20px;">
                        <a onclick="agregarNuevoContacto();">
                            <?= label('formProveedor_contactoAgregar') ?>
                        </a>
                    </div>
                </div>
                <div id="tab-infoAdicional-editar" class="card col s12">
                    <h5>Presupuesto promedio del proveedor</h5>
                    <p>* Exclusivo para proveedores de servicios, no tiene fines contables</p>
                    <table id="proveedor1-salarios" class="table striped">
                        <thead>
                            <tr>
                                <th style="text-align: center;">
                                    <input class="filled-in checkbox checkall" type="checkbox"
                                           id="checkbox-all" onclick="toggleChecked(this.checked)"/>
                                    <label for="checkbox-all"></label>
                                </th>
                                <th><?= label('formProveedor_salariosTipo'); ?></th>
                                <th><?= label('formProveedor_salariosMonto'); ?></th>
                                <th><?= label('formProveedor_salariosPorDefecto'); ?></th>
                                <th><?= label('formProveedor_salariosOpciones'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" class="filled-in checkbox"
                                           id="checkbox_proveedor1_salario1"/>
                                    <label for="checkbox_proveedor1_salario1"></label>
                                </td>
                                <td>Por hora</td>
                                <td>$10</td>
                                <td>
                                    <input type="radio" name="radioPorDefecto" id="radio_pago1" checked="checked"/>
                                    <label for="radio_pago1"></label>
                                </td>
                                <td>
                                    <ul id="dropdown-proveedor1-salario1" class="dropdown-content">
                                        <li>
                                            <a href="#editarSalario"
                                               class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                        </li>
                                        <li>
                                            <a href="#eliminarSalario"
                                               class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                        </li>
                                    </ul>
                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                       href="#!" data-activates="dropdown-proveedor1-salario1">
                                        <?= label('menuOpciones_seleccionar') ?><i
                                            class="mdi-navigation-arrow-drop-down"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" class="filled-in checkbox"
                                           id="checkbox_proveedor1_salario2"/>
                                    <label for="checkbox_proveedor1_salario2"></label>
                                </td>
                                <td>Diario</td>
                                <td>$80</td>
                                <td>
                                    <input type="radio" name="radioPorDefecto" id="radio_pago2"/>
                                    <label for="radio_pago2"></label>
                                </td>
                                <td>
                                    <ul id="dropdown-proveedor1-salario2" class="dropdown-content">
                                        <li>
                                            <a href="#editarSalario"
                                               class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                        </li>
                                        <li>
                                            <a href="#eliminarSalario"
                                               class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                        </li>
                                    </ul>
                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                       href="#!" data-activates="dropdown-proveedor1-salario2">
                                        <?= label('menuOpciones_seleccionar') ?><i
                                            class="mdi-navigation-arrow-drop-down"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" class="filled-in checkbox"
                                           id="checkbox_proveedor1_salario3"/>
                                    <label for="checkbox_proveedor1_salario3"></label>
                                </td>
                                <td>Mensual</td>
                                <td>$1400</td>
                                <td>
                                    <input type="radio" name="radioPorDefecto" id="radio_pago3"/>
                                    <label for="radio_pago3"></label>
                                </td>
                                <td>
                                    <ul id="dropdown-proveedor1-salario3" class="dropdown-content">
                                        <li>
                                            <a href="#editarSalario"
                                               class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                        </li>
                                        <li>
                                            <a href="#eliminarSalario"
                                               class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                        </li>
                                    </ul>
                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                       href="#!" data-activates="dropdown-proveedor1-salario3">
                                        <?= label('menuOpciones_seleccionar') ?><i
                                            class="mdi-navigation-arrow-drop-down"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="padding: 20px;">
                        <a href="#agregarSalario"
                           class="btn btn-default modal-trigger"><?= label('formProveedor_nuevoSalario'); ?></a>

                        <div class="tabla-conAgregar tabla-salarios-proveedor">
                            <a id="opciones-seleccionados-delete"
                               class="modal-trigger waves-effect black-text opciones-seleccionados option-delete-elements"
                               style="visibility: hidden;"
                               href="#eliminarElementosSeleccionados" data-toggle="tooltip"
                               title="<?= label('opciones_seleccionadosEliminar') ?>">
                                <i class="mdi-action-delete icono-opciones-varios"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="input-field col s12 envio-formulario" style="margin: 15px 0 25px;">
                <button class="btn waves-effect waves-light right" type="submit"
                        name="action"><?= label('formPersona_editar'); ?>
                </button>
            </div>
        </div>
    </form>
</div>

<div style="display: none">
    <a id="linkModalGuardado" href="#transaccionCorrecta" class="btn btn-default modal-trigger"></a>
    <a id="linkModalError" href="#transaccionIncorrecta" class="btn btn-default modal-trigger"></a>
</div>
<div style="visibility:hidden; position:absolute">
    <input id="cantidadContactos" form="formPersona" name="cantidadContactos" type="text" value="<?= count($resultado['contactos'])?>">
    <a id="linkContactosElimminar" href="#eliminarContacto-editar" class="modal-trigger" data-fila-eliminar="1"
       title="<?= label('formProveedor_contactoEliminar') ?>"><i class="mdi-action-delete medium" style="color: black;"></i></a>
</div>

<?php
    $this->load->view('layout/default/menu-crear.php');
?>

<!-- Funcion de insercion de datos-->
<script>
    function validacionCorrecta_Persona(){
        var formulario = $('#formPersona');
        var data = formulario.serialize();
        var url = formulario.attr('action');
        var method = formulario.attr('method');
        $.ajax({
            type: method,
            url: url,
            data: data,
            success: function(response) {
                switch(response) {
                    case '0':
                        $('#linkModalError').click();
                        break;
                    case '1':
                        $('#linkModalGuardado').click();
//                        $('form')[0].reset();
                        break;
                }
            }
        });
    }
    function validacionCorrecta_Imagen(){
        var formPW = $('#persona-cambio-imagen');
        $.ajax({
            data: new FormData(formPW[0]),
            url: formPW.attr('action'),
            type: formPW.attr('method'),
            success:  function (response) {
                switch(response){
                    case '0':
                        alert('<?= label('usuarioErrorCambioImagen'); ?>');//error al ir a verificar identificación
                        break;
                    case '1':
                        alert('<?= label('usuarioExitoCambioEmagen'); ?>');
                        d = new Date();
                        $('#imagen_seleccionada').attr('src', '<?= $ruta; ?>?' + d.getTime());
                        $('#imagen_perfil_usuario').attr('src', '<?= $ruta; ?>?' + d.getTime());
                        formPW.find('input:file,input:text').val('');
                        break;
                }
            },
            cache: false,
            contentType: false,
            processData: false
        });
    }
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
            var $this = $(this);
            var tableBody = $('#proveedor1-salarios').find('tbody tr input[type=checkbox]');
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
</script>

<!-- Script para tags -->
<script>
    $(document).ready(function () {

        var vendedores = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // prefetch: 'http://localhost/Proyectos/touch/assets/dashboard/js/json/vendedores.json'
            prefetch: {
                url: '<?=base_url()?>Cotizacion/jsonVendedores',
                ttl: 1000
            }
        });

        vendedores.initialize();

        elt = $('.tags_vendedores > > input');
        elt.tagsinput({
            itemValue: 'value',
            itemText: 'text',
            typeaheadjs: {
                name: 'vendedores',
                displayKey: 'text',
                source: vendedores.ttAdapter()
            }
        });

//        elt.tagsinput('add', {"value": 1, "text": "Brayan Nuñez Rojas", "continent": "Europe"});
//        elt.tagsinput('add', {"value": 4, "text": "Anthony Nuñez Rojas", "continent": "America"});
//        elt.tagsinput('add', {"value": 7, "text": "Maria Perez Salas", "continent": "Australia"});
//        elt.tagsinput('add', {"value": 10, "text": "Carlos David Rojas", "continent": "Asia"});
//        elt.tagsinput('add', {"value": 13, "text": "Diego Alfaro Rojas", "continent": "Africa"});


        var gusto = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: {
                url: '<?=base_url()?>Cotizacion/jsonGustos',
                ttl: 1000,
                filter: function (list) {
                    return $.map(list, function (gusto) {
                        return {name: gusto};
                    });
                }
            }
        });
        gusto.initialize();


        $('.tags_keywords  > > input').tagsinput({
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
                url: '<?=base_url()?>Cotizacion/jsonContactos',
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


//        $('.boton-opciones').on('click', function (event) {
//            var elementoActivo = $(this).siblings('ul.active');
//            if (elementoActivo.length > 0) {
//                var estado = elementoActivo.css("display");
//                if (estado == "block") {
//                    elementoActivo.css("display", "none");
//                    elementoActivo.style.display = 'none';
//                } else {
//                    elementoActivo.css("display", "block");
//                    elementoActivo.style.display = 'block';
//                }
//            }
//        });
    });
</script>

<!-- Funcion para mostrar elementos -->
<script>
    $(document).ready(function () {
        $('#persona_nacionalidad').val('<?= $nacionalidad; ?>').change();
        var tipo = '<?= $juridico; ?>';
        if(tipo == 1) {
            $('#persona_tipo').val(2).change();
        } else {
            $('#persona_tipo').val(1).change();
        }
    });
    function datosProveedor(opcionSeleccionada) {
        if (opcionSeleccionada.value == "1") {
            document.getElementById('campos-proveedor-fisico').style.display = 'block';
            document.getElementById('campos-proveedor-juridico').style.display = 'none';
        } else {
            document.getElementById('campos-proveedor-fisico').style.display = 'none';
            document.getElementById('campos-proveedor-juridico').style.display = 'block';
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
            '<div id="' + contador + '" class="row">' +
                '<div class="col s12 m11 l11">' +
                    '<div class="row">' +
                        '<div class="input-field col s12 m4 l4">' +
                            '<input class="accionAplicada" style="display:none" name="contacto_'+ contador +'" type="text" value="0">' +
                            '<input id="proveedor_contactoApellido1_' + contador + '" name="proveedor_contactoApellido1_' + contador + '" type="text">' +
                            '<label for="proveedor_contactoApellido1_' + contador + '"><?= label("formContacto_apellido1"); ?></label>' +
                        '</div>' +
                        '<div class="input-field col s12 m4 l4">' +
                            '<input id="proveedor_contactoApellido2_' + contador + '" name="proveedor_contactoApellido2_' + contador + '" type="text">' +
                            '<label for="proveedor_contactoApellido2_' + contador + '"><?= label("formContacto_apellido2"); ?></label>' +
                        '</div>' +
                        '<div class="input-field col s12 m4 l4">' +
                            '<input id="proveedor_contactoNombre_' + contador + '" name="proveedor_contactoNombre_' + contador + '" type="text">' +
                            '<label for="proveedor_contactoNombre_' + contador + '"><?= label("formContacto_nombre"); ?></label>' +
                        '</div>' +
                    '</div>' +
                    '<div class="row">' +
                        '<div class="input-field col s12 m6 l6">' +
                            '<div>' +
//                                '<input id="proveedor_contactoCorreo_' + contador + '" name="proveedor_contactoCorreo_' + contador + '" type="email" style="margin-bottom: 0;">' +
                                '<input id="proveedor_contactoCorreo_' + contador + '" name="proveedor_contactoCorreo_' + contador + '" type="email">' +
                                '<label for="proveedor_contactoCorreo_' + contador + '"><?= label('formProveedor_correo'); ?></label>' +
                            '</div>' +
//                            '<div style="margin-bottom: 20px;">' +
//                                '<input type="checkbox" class="filled-in" id="checkbox_contactoCorreoProveedor_' + contador + '" name="checkbox_contactoCorreoProveedor_' + contador + '" />' +
//                                '<label for="checkbox_contactoCorreoProveedor_' + contador + '" style="margin-bottom: 20px;">' +
//                                '<?//= label('formProveedor_correoCheck') ?>//' +
//                                '</label>' +
//                            '</div>' +
                        '</div>' +
                        '<div class="input-field col s12 m3 l3">' +
                            '<input id="proveedor_contactoPuesto_' + contador + '" name="proveedor_contactoPuesto_' + contador + '" type="text">' +
                            '<label for="proveedor_contactoPuesto_' + contador + '"><?= label('formContacto_puesto'); ?></label>' +
                        '</div>' +
                        '<div class="input-field col s12 m3 l3">' +
                            '<input id="proveedor_contactoTelefono_' + contador + '" name="proveedor_contactoTelefono_' + contador + '" type="text">' +
                            '<label for="proveedor_contactoTelefono_' + contador + '"><?= label('formContacto_telefono'); ?></label>' +
                        '</div>' +
                    '</div>' +
                '</div>' +
                '<div class="col s12 m1 l1 btn-contacto-eliminar-edicion">' +
//                    '<a href="#eliminarContacto" class="modal-trigger" title="<?//= label('formProveedor_contactoEliminar') ?>//"><i class="mdi-action-delete medium" style="color: black;"></i></a>' +
                    '<a class="confirmarEliminarContacto" data-fila-eliminar="' + contador + '" title="<?= label('formProveedor_contactoEliminar') ?>"><i class="mdi-action-delete medium" style="color: black;"></i></a>' +
                '</div>' +
            '</div>' +
            '<div class="col s12">' +
                '<hr />' +
            '</div>'
        );
        contador++;
    }
</script>

<!-- lista modals -->
<div id="transaccionCorrecta" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('usuarioGuardadoCorrectamente'); ?></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
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
        <?php echo form_open_multipart(base_url().'proveedores/cambio_imagen/'.$idEncriptado, array('id' => 'persona-cambio-imagen', 'method' => 'POST', 'class' => 'col s12')); ?>
            <div class="col s12" style="padding: 0;">
                <div class="file-field col s12 m7 l9" style="padding: 0;">
                    <label for="persona_fotografia"><?= label('formPersona_fotografia'); ?></label>

                    <div class="file-field input-field col s12" style="padding: 0;">
                        <input style="margin-left: 18% !important;width: 80% !important;"
                               name="persona_fotografia" class="file-path" type="text" readonly/>

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

<div id="agregarSalario" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <select>
                <option value="">Seleccione</option>
                <option value="1"><?= label('horas') ?></option>
                <option value="2"><?= label('dia') ?></option>
                <option value="3"><?= label('semana') ?></option>
                <option value="4"><?= label('quincena') ?></option>
                <option value="5"><?= label('mes') ?></option>
            </select>
            <label for=""><?= label('formProveedor_salarioTipo'); ?></label>
        </div>
        <div class="input-field col s12">
            <input id="salario_monto" type="text" value="">
            <label for="salario_monto"><?= label('formProveedor_salarioMonto'); ?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="editarSalario" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <select>
                <option value="">Seleccione</option>
                <option value="1" selected><?= label('horas') ?></option>
                <option value="2"><?= label('dia') ?></option>
                <option value="3"><?= label('semana') ?></option>
                <option value="4"><?= label('quincena') ?></option>
                <option value="5"><?= label('mes') ?></option>
            </select>
            <label for=""><?= label('formProveedor_salarioTipo'); ?></label>
        </div>
        <div class="input-field col s12">
            <input id="salario_monto" type="text" value="$10">
            <label for="salario_monto"><?= label('formProveedor_salarioMonto'); ?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="eliminarSalario" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarSalario'); ?></p>
    </div>
    <div class="modal-footer black-text">
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
        <div id="botonElimnar" title="proveedor1-salarios">
            <a href="#"
               class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>
<!-- Fin lista modals-->