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
        if($resultado['fotografia'] != '' && $resultado['fotografia'] != null && $resultado['fotografia'] != 'profile_picture_'.$resultado['idProveedor'].'.') {
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

                    <div class="input-field col s12 inputSelector">
                        <label for="persona_nacionalidad"><?= label('formCliente_nacionalidad'); ?></label>
                        <br>
                        <select data-placeholder="<?= label('formCliente_seleccioneUno'); ?>" data-incluirBoton="0" id="persona_nacionalidad" name="persona_nacionalidad" class="required browser-default chosen-select">
                            <option value=""></option>
                            <?php
                            if(isset($resultado['paises'])) {
                                $paises = $resultado['paises'];
                                foreach ($paises as $p) { ?>
                                    <option value="<?= $p['idPais']; ?>"><?= $p['nombre']; ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
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
                        <input id="persona_nombre" name="persona_nombre" type="text" value="<?= $nombre; ?>">
                        <label for="persona_nombre"><?= label('formPersona_nombre'); ?></label>
                    </div>
                    <div class="input-field col s12 m4 l4">
                        <input id="persona_apellido1" name="persona_apellido1" type="text" value="<?= $apellido1; ?>">
                        <label for="persona_apellido1"><?= label('formPersona_apellido1'); ?></label>
                    </div>
                    <div class="input-field col s12 m4 l4">
                        <input id="persona_apellido2" name="persona_apellido2" type="text" value="<?= $apellido2; ?>">
                        <label for="persona_apellido2"><?= label('formPersona_apellido2'); ?></label>
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

                <div class="inputTag col s12">
                    <label for="categorias_persona"><?= label('formPersona_categorias'); ?></label>
                    <br>
                    <div id="categoriasPersona" class="example tags_Categorias">
                        <div class="bs-example">
                            <input id="categorias_persona" name="categorias_persona"
                                   placeholder="<?= label('formPersona_anadirCategoria'); ?>" type="text"/>
                        </div>
                    </div>
                    <br>
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
                    <h5>Gastos del proveedor</h5>
                    <table id="proveedor_gastos_editar" class="table striped">
                        <thead>
                            <tr>
                                <th style="text-align: center;">
                                    <input class="filled-in checkboxGastos checkall" type="checkbox"
                                           id="checkbox-allGastos" onclick="toggleChecked(this.checked)"/>
                                    <label for="checkbox-allGastos"></label>
                                </th>
                                <th><?= label('formProveedor_gastosTipo'); ?></th>
                                <th><?= label('formProveedor_gastosCategoria'); ?></th>
                                <th><?= label('formProveedor_gastosCodigo'); ?></th>
                                <th><?= label('formProveedor_gastosNombre'); ?></th>
                                <th><?= label('formProveedor_gastosTiempo'); ?></th>
                                <th><?= label('formProveedor_gastosMonto'); ?></th>
                                <th><?= label('formProveedor_gastosOpciones'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(isset($resultado['gastos'])) {
                            $gastos = $resultado['gastos'];
                            if($gastos != false) {
                                $contador= 0;
                                foreach ($gastos as $gasto) {
                                    $tipoGasto = 0;
                                    if($gasto['gastoFijo']) {
                                        $tipoGasto = 1;
                                    }
                                    ?>
                                    <tr id="gasto<?= $contador; ?>">
                                        <td style="text-align: center;">
                                            <input class="accionAplicada" style="display:none" name="gasto_<?= $contador; ?>" type="text" value="1"> <!-- value 1 para existentes, 0 los nuevos y 2 los eliminados -->
                                            <input style="display:none" name="idGasto_<?= $contador; ?>" type="text" value="<?=encryptIt($gasto['idGasto'])?>">

                                            <input type="checkbox" class="filled-in checkboxGastos" id="checkbox_gasto<?= $contador; ?>"/>
                                            <label for="checkbox_gasto<?= $contador; ?>"></label>
                                        </td>
                                        <td>
                                            <span id="span_gasto<?= $contador; ?>_tipo"><?= $gasto['datosAdicionales']['tipo']; ?></span>
                                            <input type="text" name="gasto<?= $contador; ?>_tipo" id="gasto<?= $contador; ?>_tipo"
                                                   value="<?= $tipoGasto; ?>" style="display: none;" />
                                        </td>
                                        <td>
                                            <span id="span_gasto<?= $contador; ?>_categoria"><?= $gasto['datosAdicionales']['categoria']; ?></span>
                                            <input type="text" name="gasto<?= $contador; ?>_categoria" id="gasto<?= $contador; ?>_categoria"
                                                   value="<?= $gasto['idCategoriaGasto']; ?>" style="display: none;" />
                                        </td>
                                        <td>
                                            <span id="span_gasto<?= $contador; ?>_codigo"><?= $gasto['codigo']; ?></span>
                                            <input type="text" name="gasto<?= $contador; ?>_codigo" id="gasto<?= $contador; ?>_codigo"
                                                   value="<?= $gasto['codigo']; ?>" style="display: none;" />
                                        </td>
                                        <td>
                                            <span id="span_gasto<?= $contador; ?>_nombre"><?= $gasto['nombre']; ?></span>
                                            <input type="text" name="gasto<?= $contador; ?>_nombre" id="gasto<?= $contador; ?>_nombre"
                                                   value="<?= $gasto['nombre']; ?>" style="display: none;" />
                                        </td>
                                        <td>
                                            <span id="span_gasto<?= $contador; ?>_formaPago"><?= $gasto['datosAdicionales']['formaPago']; ?></span>
                                            <input type="text" name="gasto<?= $contador; ?>_formaPago" id="gasto<?= $contador; ?>_formaPago"
                                                   value="<?= $gasto['formaPago']; ?>" style="display: none;" />
                                        </td>
                                        <td>
                                            <span id="span_gasto<?= $contador; ?>_monto"><?= $gasto['monto']; ?></span>
                                            <input type="text" name="gasto<?= $contador; ?>_monto" id="gasto<?= $contador; ?>_monto"
                                                   value="<?= $gasto['monto']; ?>" style="display: none;" />
                                        </td>
                                        <td>
                                            <ul id="dropdown_gasto<?= $contador; ?>" class="dropdown-content">
                                                <li>
                                                    <a href="#editarGasto" class="-text modal-trigger abrirEditar" data-id-editar="<?= $contador; ?>"><?= label('menuOpciones_editar') ?></a>
                                                </li>
                                                <li>
                                                    <a class="-text modal-trigger confirmarEliminarGasto" data-id-eliminar="<?= $contador; ?>"><?= label('menuOpciones_eliminar') ?></a>
                                                </li>
                                            </ul>
                                            <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#" data-activates="dropdown_gasto<?= $contador; ?>"><?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i> </a>
                                        </td>
                                    </tr>
                        <?php
                                    $contador++;
                                }
                            }
                        } ?>
                        </tbody>
                    </table>
                    <div style="padding: 20px;">
                        <a id="btn_accionAgregarGasto" href="#agregarGasto"
                           class="btn btn-default modal-trigger"><?= label('formProveedor_nuevoGasto'); ?></a>

                        <div class="tabla-conAgregar tabla-salarios-proveedor">
                            <a id="opciones-seleccionados-delete"
                               class="modal-trigger waves-effect black-text opciones-seleccionados option-delete-elements"
                               style="visibility: hidden;"
                               href="#eliminarGastosSeleccionados" data-toggle="tooltip"
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
        <div style="visibility:hidden; position:absolute">
            <input id="cantidadContactos" name="cantidadContactos" type="text" value="<?= count($resultado['contactos'])?>">
            <input id="cantidadGastos" name="cantidadGastos" type="text" value="<?= count($resultado['gastos'])?>">
        </div>
    </form>
</div>

<div style="display: none">
    <a id="linkModalGuardado" href="#transaccionCorrecta" class="btn btn-default modal-trigger"></a>
    <a id="linkModalError" href="#transaccionIncorrecta" class="btn btn-default modal-trigger"></a>
</div>
<div style="visibility:hidden; position:absolute">
    <a id="linkContactosElimminar" href="#eliminarContacto-editar" class="modal-trigger" data-fila-eliminar="1"
       title="<?= label('formProveedor_contactoEliminar') ?>"><i class="mdi-action-delete medium" style="color: black;"></i></a>
    <a id="linkGastosElimminar" href="#eliminarGasto-editar" class="modal-trigger" data-fila-eliminar="1"
       title="<?= label('formProveedor_gastoEliminar') ?>"><i class="mdi-action-delete medium" style="color: black;"></i></a>
</div>

<?php
    $this->load->view('layout/default/menu-crear.php');
?>

<!--Script para tags de categorias-->
<script>
    $(document).ready(function () {
        var CategoriasPersona = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('nombre'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // prefetch: 'http://localhost/Proyectos/touch/assets/dashboard/js/json/CategoriasPersona.json'
            prefetch: {
                url: '<?=base_url()?>categoriasPersona/categoriasSugerencia',
                ttl: 1000
            }
        });
        CategoriasPersona.initialize();

        elt = $('.tags_Categorias > > input');
        elt.tagsinput({
            itemValue: 'idCategoriaPersona',
            itemText: 'nombre',
            typeaheadjs: {
                name: 'CategoriasPersona',
                displayKey: 'nombre',
                source: CategoriasPersona.ttAdapter()
            }
        });

        <?php
        foreach ($resultado['categorias'] as $categoria) {
             echo 'elt.tagsinput("add", '.json_encode($categoria).');';
        }
        ?>
    });
</script>

<script>
    $(document).on('ready', function(){
        var config = {'.chosen-select'           : {}}
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }

    });
</script>

<!-- Funcion de insercion de datos-->
<script>
    function validacionCorrecta_Persona() {
        var identificacionActual = '<?= $identificacion; ?>';
        var identificacionNueva = '';
        var tipoPersona = $('#persona_tipo').val();
        if (tipoPersona == 1) {
            identificacionNueva = $('#persona_identificacion').val();
        } else {
            identificacionNueva = $('#personajuridico_identificacion').val();
        }
        var formulario = $('#formPersona');
        if(identificacionNueva == identificacionActual) {
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
        } else {
            $.ajax({
                data: formulario.serialize(),
                url: '<?=base_url()?>proveedores/verificarIdentificacion',
                type: 'post',
                success: function (response) {
                    if (response == '0') {
                        $('#linkModalError').click();
                    } else {
                        if (response == '2') {
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
                        } else {
                            alert("<?=label('proveedor_error_nombreExisteEnBD'); ?>");
                            $('#formPersona #persona_identificacion').focus();
                            $('#formPersona #personajuridico_identificacion').focus();
                        }
                    }
                }
            });
        }
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
                        $('#imagen_perfil_usuario_ver').attr('src', '<?= $ruta; ?>?' + d.getTime());
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

<!--Funcion para gastos-->
<script>
    $(document).ready(function () {
        actualizarSelectTipo();
        actualizarSelects();
    });
    var nombres = [];
    var idEditar = 0;
    function actualizarSelectTipo() {
        var selectTipo = $('#agregarGasto #gasto_tipo');
        selectTipo.empty();
        selectTipo.append($('<option>', {
            value: 1,
            text: 'Fijo',
            selected: true
        }));
        selectTipo.append($('<option>', {
            value: 2,
            text: 'Variable',
            selected: false
        }));
        selectTipo.material_select();
    }
    function actualizarSelects() {
        $.ajax({
            type: 'POST',
            url: '<?= base_url(); ?>gastos/categoriasGasto',
            data: {  },
            success: function(response)
            {
                generarAutocompletarCategoria($.parseJSON(response), 0);
            }
        });
        $.ajax({
            type: 'POST',
            url: '<?= base_url(); ?>gastos/formasPago',
            data: {  },
            success: function(response)
            {
                generarAutocompletarFormaPago($.parseJSON(response), 0);
                generarListas();
            }
        });
    }

    function generarAutocompletarCategoria($array, $id){
        var miSelect = $('#gasto_categoria');
        miSelect.empty();
        miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("agregarGasto_elegirCategoria"); ?></option>');
        miSelect.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');
        for(var i = 0; i < $array.length; i++) {
            var cat = $array[i];
            if(cat != null) {
                if(cat['idCategoriaGasto'] == $id){
                    miSelect.append('<option value="' + cat['idCategoriaGasto'] + '" selected>' + cat['nombre'] + '</option>');
                } else {
                    miSelect.append('<option value="' + cat['idCategoriaGasto'] + '">' + cat['nombre'] + '</option>');
                }
            }
        }
        miSelect.trigger("chosen:updated");
    }
    function generarAutocompletarFormaPago($array, $id){
        var miSelect = $('#gasto_formaPago');
        miSelect.empty();
        miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("agregarGasto_elegirFormaPago"); ?></option>');
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
    function generarListas(){
        var config = {'.chosen-select'           : {}}
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }
    }

    var gastoEliminar = null;
    $(document).on('click','.confirmarEliminarGasto', function () {
        gastoEliminar = $(this).parents('tr');
        $('#linkGastosElimminar').click();//esto se hace porque al agregar un <a class="modal-trigger"> dinamicamente con el metodo de agregarNuevoContacto() pareciera no servir, entonces lo que se hace es llamar al evento click del modal-trigger con el id = linkContactosElimminar
    });
    $(document).on('click','#eliminarGasto-editar #botonEliminar', function () {
        event.preventDefault();
        var tipo = gastoEliminar.find('.accionAplicada').val();
        if (tipo == '0') {
            gastoEliminar.fadeOut(function () {
                gastoEliminar.remove();
            });
            cantidadGasto--;
            actualizarCantidadGastos();
        } else{
            gastoEliminar.find('.accionAplicada').val('2');
            gastoEliminar.fadeOut(function () {
                gastoEliminar.hide();
            });
        }
    });

    function actualizarCantidadGastos(){
        $('#cantidadGastos').val(cantidadGasto);
    }
    var cantidadGasto = '<?= count($resultado['gastos'])?>';
    var contadorGasto = cantidadGasto;
    $(document).on('click', '#btn_accionAgregarGasto', function () {
        var selectTipo = $('#agregarGasto_tipo');
        selectTipo.empty();
        selectTipo.append($('<option>', {
            value: 0,
            text: 'Seleccione uno',
            selected: true,
            disabled: true
        }));
        var i;
        for(i = 0; i < nombres.length; i++) {
            var name = nombres[i];
            if(name != null && name != '') {
                selectTipo.append($('<option>', {
                    value: i,
                    text: nombres[i],
                    selected: false
                }));
            }
        }
        selectTipo.material_select();
    });
    $(document).on('click', '#agregarGasto #btnAgregarGasto', function () {
        var tipo = $('#agregarGasto #gasto_tipo');
        var codigo = $('#agregarGasto #gasto_codigo');
        var nombre = $('#agregarGasto #gasto_nombre');
        var categoria = $('#agregarGasto #gasto_categoria');
        var formaPago = $('#agregarGasto #gasto_formaPago');
        var monto = $('#agregarGasto #gasto_monto');
        agregarNuevoGasto(tipo.val(), codigo.val(), nombre.val(), categoria.val(), formaPago.val(), monto.val());
        monto.val('');
    });
    function agregarNuevoGasto(tipo, codigo, nombre, categoria, formaPago, monto) {
        cantidadGasto++;
        actualizarCantidadGastos();
        var check = '<td>' +
                        '<div style="text-align: center;">' +
                            '<input class="accionAplicada" style="display:none" name="gasto_'+ contadorGasto +'" type="text" value="0">' +
                            '<input type="checkbox" class="filled-in checkbox" id="checkbox_gasto'+ contadorGasto +'"/>' +
                            '<label for="checkbox_gasto'+ contadorGasto +'"></label>' +
                        '</div>' +
                    '</td>';
        var nombreTipo = 'Fijo';
        if(tipo == 2) {
            nombreTipo = 'Variable';
        }
        var tipoP = '<td>' +
                        '<span id="span_gasto'+ contadorGasto +'_tipo">' + nombreTipo + '</span><input type="text" name="gasto'+ contadorGasto +'_tipo" id="gasto'+ contadorGasto +'_tipo" value="'+ tipo +'" style="display: none;" />' +
                    '</td>';
        var nombreCategoria = $("#gasto_categoria option[value='" + categoria + "']").text();
        var categoriaP = '<td>' +
                        '<span id="span_gasto'+ contadorGasto +'_categoria">' + nombreCategoria + '</span><input type="text" name="gasto'+ contadorGasto +'_categoria" id="gasto'+ contadorGasto +'_categoria" value="'+ categoria +'" style="display: none;" />' +
                    '</td>';
        var codigoP = '<td>' +
                        '<span id="span_gasto'+ contadorGasto +'_codigo">' + codigo + '</span><input type="text" name="gasto'+ contadorGasto +'_codigo" id="gasto'+ contadorGasto +'_codigo" value="'+ codigo +'" style="display: none;" />' +
                    '</td>';
        var nombreP = '<td>' +
                        '<span id="span_gasto'+ contadorGasto +'_nombre">' + nombre + '</span><input type="text" name="gasto'+ contadorGasto +'_nombre" id="gasto'+ contadorGasto +'_nombre" value="'+ nombre +'" style="display: none;" />' +
                    '</td>';
        var nombreFormaPago = $("#gasto_formaPago option[value='" + formaPago + "']").text();
        var formaP = '<td>' +
                        '<span id="span_gasto'+ contadorGasto +'_formaPago">' + nombreFormaPago + '</span><input type="text" name="gasto'+ contadorGasto +'_formaPago" id="gasto'+ contadorGasto +'_formaPago" value="'+ formaPago +'" style="display: none;" />' +
                    '</td>';
        var montoP = '<td>'+
                        '<span id="span_gasto'+ contadorGasto +'_monto">' + monto + '</span><input type="text" name="gasto'+ contadorGasto +'_monto" id="gasto'+ contadorGasto +'_monto" value="'+ monto +'" style="display: none;" />' +
                    '</td>';
//        var principal = '<td>' +
//                            '<input type="radio" name="radioGastoPrincipal" id="radio_gasto'+ contadorGasto +'" value="' + contadorGasto + '" />' +
//                            '<label for="radio_gasto'+ contadorGasto +'"></label>' +
//                        '</td>';
        var opciones = '<td>' +
                            '<ul id="dropdown_gasto'+ contadorGasto +'" class="dropdown-content">' +
                                '<li>' +
                                    '<a href="#editarGasto" class="-text modal-trigger abrirEditar" data-id-editar="'+ contadorGasto + '"><?= label('menuOpciones_editar') ?></a>' +
                                '</li>' +
                                '<li>' +
                                    '<a class="-text modal-trigger confirmarEliminarGasto" data-id-eliminar="'+ contadorGasto +'" data-fila-eliminar="fila'+ contadorGasto +'"><?= label('menuOpciones_eliminar') ?></a>' +
                                '</li>' +
                            '</ul>' +
                            '<a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown_gasto'+ contadorGasto +'"><?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i> </a>' +
                        '</td>';
        $('#proveedor_gastos_editar').dataTable().fnAddData([
            check,
            tipoP,
            categoriaP,
            codigoP,
            nombreP,
            formaP,
            montoP,
//            principal,
            opciones
        ]);

        generarListasBotones();
        $('.modal-trigger').leanModal();
        contadorGasto++;
    }

    $(document).on('click', '.abrirEditar', function () {
        idEditar = $(this).data('id-editar');
        var tipoActual = $('#gasto' + idEditar + '_tipo').val();
        var nombreTipo = nombres[tipoActual];
        var montoActual = $('#gasto' + idEditar + '_monto').val();

//        alert(tipoActual + '  -  ' + montoActual + '  -  ' + nombreTipo);
        var montoEditar = $('#editarGasto_monto');
        montoEditar.val(montoActual);
        var selectTipo = $('#editarGasto_tipo');
        selectTipo.empty();
        selectTipo.append($('<option>', {
            value: 0,
            text: 'Seleccione uno',
            disabled: true
        }));
        var i;
        for(i = 0; i < nombres.length; i++) {
            var name = nombres[i];
            if(name != null && name != '') {
                if(i == tipoActual) {
                    selectTipo.append($('<option>', {
                        value: i,
                        text: nombres[i],
                        selected: true
                    }));
                } else {
                    selectTipo.append($('<option>', {
                        value: i,
                        text: nombres[i]
                    }));
                }
            }
        }
        selectTipo.material_select();
    });
    $(document).on('click', '#editarGasto #btnEditarGasto', function () {
        var tipo = $('#editarGasto_tipo');
        var nombreTipo = nombres[tipo.val()];
        var monto = $('#editarGasto_monto');

//        alert(tipo.val() + '  -  ' + monto.val() + '  -  ' + nombreTipo);

        $('#gasto' + idEditar + '_tipo').val(tipo.val());
        $('#gasto' + idEditar + '_monto').val(monto.val());
        $('#span_gasto' + idEditar + '_tipo').text(nombreTipo);
        $('#span_gasto' + idEditar + '_monto').text(monto.val());

//        tipo.val(0).change();
        monto.val('');
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
    }
</script>

<script>
    $(document).on("ready", function () {

        <?php
       if (isset($lista)) {
           if ($lista === false) {?>

        $('#linkModalErrorCargarDatos').click();

        <?php
   }
   }
   ?>


        var idEliminar = 0;
        var fila = 0;

        $(document).on('click','.confirmarEliminar', function () {
//            idEliminar = $(this).data('id-eliminar');
            fila = $(this).parents('tr');
        });

        $('#eliminarGasto #botonEliminar').on('click', function () {
            event.preventDefault();

            fila.fadeOut(function () {
                fila.remove();
                verificarChecks();
            });
        });
    });

    $(document).ready( function () {
        $('#proveedor_gastos_editar').dataTable( {
            'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0, -1] //desactiva en primer y última columna opción de ordenar
            }]
        });
    });
    $(document).ready(function () {
        $('table#proveedor_gastos_editar thead th:first').removeClass('sorting_asc').addClass('sorting_disabled');
        $('table#proveedor_gastos_editar thead th:nth-child(2)').removeClass('sorting').addClass('sorting_asc');
    });
    $(document).ready(function () {
        $('#eliminarGastosSeleccionados #botonEliminar').on("click", function (event) {
            var tb = $(this).attr('title');
            var sel = false;
            var ch = $('#' + tb).find('tbody input[type=checkbox]');
            var marcados = $('.checkbox:checked').not('#checkbox-all').size();
            var contador = 0;
            ch.each(function () {
                var $this = $(this);
                if ($this.is(':checked')) {
                    sel = true;

                    var fila = $this.parents('tr');
                    var tipo = fila.find('.accionAplicada').val();
                    if (tipo == '0') {
                        fila.fadeOut(function () {
                            fila.remove();
                        });
                        cantidadGasto--;
                        actualizarCantidadGastos();
                    } else{
                        fila.find('.accionAplicada').val('2');
                        fila.fadeOut(function () {
                            fila.hide();
                        });
                    }

                    contador++;
                    if (contador == marcados) {
                        $('#linkModalErrorEliminar').click();
                    }
                }
            });
            verificarChecksGastos();
            actualizarCantidadGastos();
            return false;
        });
    });

    $(window).load(function () {
        verificarChecks();
    });

    $(document).ready(function () {
        $('#checkbox-allGastos').click(function (event) {
            var $this = $(this);
            var tableBody = $('#proveedor_gastos_editar').find('tbody tr[role=row] input[type=checkbox]');
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
        $(document).on('click','.checkboxGastos',function (event) {
            verificarChecksGastos();
        });
    });

    function verificarChecksGastos(){
        var marcados = $('.checkboxGastos:checked').not('#checkbox-allGastos').size();
        if (marcados >= 1) {
            var elems = document.getElementsByClassName('opciones-seleccionados');
            var e;
            for (e in elems) {
                elems[e].style.visibility = 'visible';
            }
        } else {
            $('#checkbox-all').prop('checked', false);
            var elems = document.getElementsByClassName('opciones-seleccionados');
            var e;
            for (e in elems) {
                elems[e].style.visibility = 'hidden';
            }
        }
    }

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

<!-- lista modals -->
<div id="transaccionCorrecta" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('usuarioEditadoCorrectamente'); ?></p>
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

<div id="agregarGasto" class="modal" style="width: 70%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="row">
            <div class="input-field col s12 m4 l4">
                <select id="gasto_tipo" name="gasto_tipo"></select>
                <label for="gasto_tipo"><?= label('gastos_Tipo'); ?></label>
            </div>
            <div class="input-field col s12 m4 l4">
                <input id="gasto_codigo" name="gasto_codigo" type="text">
                <label for="gasto_codigo"><?= label('gastos_Codigo') ?></label>
            </div>
            <div class="input-field col s12 m4 l4">
                <input id="gasto_nombre" name="gasto_nombre" type="text">
                <label for="gasto_nombre"><?= label('gastos_Nombre') ?></label>
            </div>
            <div class="row">
                <div class="input-field col s12 m6 l6 inputSelector">
                    <label for="gasto_categoria"><?= label("gastos_Categoria"); ?></label>
                    <br>
                    <div id="contenedorSelectCategorias">
                        <select data-incluirBoton="1" placeholder="seleccionar" data-tipo="agregarGasto_categoria" id="gasto_categoria" name="gasto_categoria"
                                data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("agregarGasto_elegirCategoria"); ?>"
                                class="browser-default chosen-select" style="width:350px;" tabindex="2"></select>
                    </div>
                </div>
                <div class="input-field col s12 m6 l6 inputSelector">
                    <label for="gasto_formaPago"><?= label("gastos_FormaPago"); ?></label>
                    <br>
                    <div id="contenedorSelectFormasPago">
                        <select data-incluirBoton="1" placeholder="seleccionar" data-tipo="agregarGasto_formaPago" id="gasto_formaPago" name="gasto_formaPago"
                                data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("agregarGasto_elegirFormaPago"); ?>"
                                class="browser-default chosen-select" style="width:350px;" tabindex="2"></select>
                    </div>
                </div>
            </div>
            <div class="input-field col s12 m6 l6">
                <input id="gasto_monto" name="gasto_monto" type="text">
                <label for="gasto_monto"><?= label('gastos_Monto') ?></label>
            </div>
        </div>
    </div>
    <div class="modal-footer" id="btnAgregarGasto">
        <a class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="editarGasto" class="modal" style="height: 55%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div id="div_selectTipo"></div>
        <div class="input-field col s12" style="padding: 0;">
            <select id="editarGasto_tipo">
            </select>
            <label for="editarGasto_tipo" class="label_modalGasto"><?= label('formProveedor_salarioTipo'); ?></label>
        </div>
        <div class="input-field col s12" style="margin-top: 25px;padding: 0;">
            <input id="editarGasto_monto" type="number" value="0">
            <label for="editarGasto_monto" class="label_modalGasto"><?= label('formProveedor_salarioMonto'); ?></label>
        </div>
    </div>
    <div class="modal-footer" id="btnEditarGasto">
        <a class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="eliminarGasto-editar" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarSalario'); ?></p>
    </div>
    <div id="botonEliminar" class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="eliminarGastosSeleccionados" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('clientes_archivosSeleccionadosEliminar'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <div id="botonEliminar" title="proveedor_gastos_editar">
            <a href="#" class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
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