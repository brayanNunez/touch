<div class="col s12 tab-edicion-editar">
    <form class="col s12">
        <div class="row">
            <div class="input-field col s12">
                <select onchange="datosProveedor(this)" id="proveedor_tipo">
                    <option value="1"><?= label('formProveedor_fisico'); ?></option>
                    <option value="2" selected><?= label('formProveedor_juridico'); ?></option>
                </select>
                <label for="proveedor_tipo"><?= label('formProveedor_tipoProveedor'); ?></label>
            </div>
            <div class="input-field col s12">
                <select id="proveedor_nacionalidad">
                    <option value="" disabled><?= label('formProveedor_seleccioneUno'); ?></option>
                    <option value="1" selected>Costa Rica</option>
                    <option value="2">Brasil</option>
                    <option value="3">USA</option>
                    <option value="4">Colombia</option>
                    <option value="5">Uruguay</option>
                    <option value="6">Chile</option>
                </select>
                <label for="proveedor_nacionalidad"><?= label('formProveedor_nacionalidad'); ?></label>
            </div>

            <div id="campos-proveedor-fisico" style="display: none;">
                <div class="input-field col s12">
                    <input id="proveedor_id" type="text">
                    <label for="proveedor_id"><?= label('formProveedor_identificacion'); ?></label>
                </div>
                <div>
                    <div class="input-field col s12 m4 l4">
                        <input id="proveedor_apellido1" type="text">
                        <label for="proveedor_apellido1"><?= label('formProveedor_apellido1'); ?></label>
                    </div>
                    <div class="input-field col s12 m4 l4">
                        <input id="proveedor_apellido2" type="text">
                        <label for="proveedor_apellido2"><?= label('formProveedor_apellido2'); ?></label>
                    </div>
                    <div class="input-field col s12 m4 l4">
                        <input id="proveedor_nombre" type="text">
                        <label for="proveedor_nombre"><?= label('formProveedor_nombre'); ?></label>
                    </div>
                </div>
                <div class="input-field col s12">
                    <input id="proveedor_correo" type="email" style="margin-bottom: 0;" >
                    <label for="proveedor_correo"><?= label('formProveedor_correo'); ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="proveedor_telefonoMovil" type="text">
                    <label
                        for="proveedor_telefonoMovil"><?= label('formProveedor_telefonoMovil'); ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="proveedor_telefono" type="text">
                    <label
                        for="proveedor_telefono"><?= label('formProveedor_telefonoFijo'); ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="proveedor_fechaNacimiento" type="text" class="datepicker-fecha">
                    <label for="proveedor_fechaNacimiento"><?= label('formProveedor_fechaNacimiento'); ?></label>
                </div>
            </div>

            <div id="campos-proveedor-juridico" style="display: block;">
                <div class="input-field col s12">
                    <input id="proveedorjuridico_id" type="text" value="2-723-327">
                    <label for="proveedorjuridico_id"><?= label('formProveedor_identificacionJuridica'); ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="proveedorjuridico_nombre" type="text" value="Materiales R&B">
                    <label for="proveedorjuridico_nombre"><?= label('formProveedor_nombreJuridico'); ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="proveedorjuridico_nombreFantasia" type="text" value="Materiales R&B">
                    <label for="proveedorjuridico_nombreFantasia"><?= label('formProveedor_nombreFantasia'); ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="proveedorjuridico_correo" type="email" value="rbmateriales@gmail.com">
                    <label for="proveedorjuridico_correo"><?= label('formProveedor_correo'); ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="proveedorjuridico_telefono" type="text" value="2448-9865">
                    <label for="proveedorjuridico_telefono"><?= label('formProveedor_telefono'); ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="proveedorjuridico_fax" type="text" value="2448-5623">
                    <label for="proveedorjuridico_fax"><?= label('formProveedor_fax'); ?></label>
                </div>
            </div>

            <div>
                <div class="inputTag col s12" style="margin-bottom: 10px;">
                    <label for="proveedor_palabrasClave"><?= label('formProveedor_palabrasClave'); ?></label>
                    <div id="proveedor_palabrasClave" class="example tags_keywords" style="margin-top: 10px;">
                        <div class="bs-example">
                            <input placeholder="<?= label('formProveedor_palabrasClaveAnadir'); ?>" type="text"
                                value="Herramientas, Materiales varios, Reparaciones, Servicio express" />
                        </div>
                    </div>
                </div>
                <div class="input-field col s12">
                    <textarea id="proveedor_descripcion" name="proveedor_descripcion" class="materialize-textarea"
                              length="120">Proveedor de herramientas y materiales varios.</textarea>
                    <label for="proveedor_descripcion"><?= label('formProveedor_descripcion'); ?></label>
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
                    <div>
                        <div class="input-field col s12 m4 l4">
                            <input id="proveedor_direccionPais" type="text" value="Costa Rica">
                            <label for="proveedor_direccionPais"><?= label('formProveedor_direccionPais'); ?></label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                            <input id="proveedor_direccionProvincia" type="text" value="Alajuela">
                            <label for="proveedor_direccionProvincia"><?= label('formProveedor_direccionProvincia'); ?></label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                            <input id="proveedor_direccionCanton" type="text" value="Poas">
                            <label for="proveedor_direccionCanton"><?= label('formProveedor_direccionCanton'); ?></label>
                        </div>
<!--                        <div class="input-field col s12 m4 l4">-->
<!--                            <input id="proveedor_direccionDistrito" type="text" value="San Rafael">-->
<!--                            <label for="proveedor_direccionDistrito">--><?//= label('formProveedor_direccionDistrito'); ?><!--</label>-->
<!--                        </div>-->
                        <div class="input-field col s12 m12 l12">
                            <input id="proveedor_direccionDomicilio" type="text" value="San Rafael, 200 mts este de la iglesia de la localidad">
                            <label for="proveedor_direccionDomicilio"><?= label('formProveedor_direccionDomicilio'); ?></label>
                        </div>
                    </div>
                </div>
                <div id="tab-contactos-editar" class="card col s12">
                    <div class="row">
                        <div class="col s12 m11 l11">
                            <div class="row">
                                <div class="input-field col s12 m4 l4">
                                    <input id="proveedor_contactoApellido1" type="text" value="Rodriguez">
                                    <label for="proveedor_contactoApellido1"><?= label('formContacto_apellido1'); ?></label>
                                </div>
                                <div class="input-field col s12 m4 l4">
                                    <input id="proveedor_contactoApellido2" type="text" value="Bolanos">
                                    <label for="proveedor_contactoApellido2"><?= label('formContacto_apellido2'); ?></label>
                                </div>
                                <div class="input-field col s12 m4 l4">
                                    <input id="proveedor_contactoNombre" type="text" value="Jose">
                                    <label for="proveedor_contactoNombre"><?= label('formContacto_nombre'); ?></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m6 l6">
                                    <div>
                                        <input id="proveedor_contactoCorreo" type="email" style="margin-bottom: 0;" value="jose.rodriguez@gmail.com">
                                        <label for="proveedor_contactoCorreo"><?= label('formProveedor_correo'); ?></label>
                                    </div>
                                    <div style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" id="checkbox_contactoCorreoProveedor" checked />
                                        <label for="checkbox_contactoCorreoProveedor" style="margin-bottom: 20px;">
                                            <?= label('formProveedor_correoCheck') ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="input-field col s12 m3 l3">
                                    <input id="proveedor_contactoPuesto" type="text" value="Propietario">
                                    <label for="proveedor_contactoPuesto"><?= label('formContacto_puesto'); ?></label>
                                </div>
                                <div class="input-field col s12 m3 l3">
                                    <input id="proveedor_contactoTelefono" type="text" value="8956-3405">
                                    <label for="proveedor_contactoTelefono"><?= label('formContacto_telefono'); ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m1 l1 btn-contacto-eliminar-edicion">
                            <a href="#eliminarContacto" class="modal-trigger" title="<?= label('formProveedor_contactoEliminar') ?>">
                                <i class="mdi-action-delete medium" style="color: black;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col s12">
                        <hr />
                    </div>

                    <div class="row">
                        <div class="col s12 m11 l11">
                            <div class="row">
                                <div class="input-field col s12 m4 l4">
                                    <input id="proveedor_contactoApellido1" type="text" value="Bolanos" >
                                    <label for="proveedor_contactoApellido1"><?= label('formContacto_apellido1'); ?></label>
                                </div>
                                <div class="input-field col s12 m4 l4">
                                    <input id="proveedor_contactoApellido2" type="text" value="Castro">
                                    <label for="proveedor_contactoApellido2"><?= label('formContacto_apellido2'); ?></label>
                                </div>
                                <div class="input-field col s12 m4 l4">
                                    <input id="proveedor_contactoNombre" type="text" value="Maria">
                                    <label for="proveedor_contactoNombre"><?= label('formContacto_nombre'); ?></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m6 l6">
                                    <div>
                                        <input id="proveedor_contactoCorreo" type="email" style="margin-bottom: 0;" value="maria.bolanos@gmail.com">
                                        <label for="proveedor_contactoCorreo"><?= label('formProveedor_correo'); ?></label>
                                    </div>
                                    <div style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" id="checkbox_contactoCorreoProveedor" checked />
                                        <label for="checkbox_contactoCorreoProveedor" style="margin-bottom: 20px;">
                                            <?= label('formProveedor_correoCheck') ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="input-field col s12 m3 l3">
                                    <input id="proveedor_contactoPuesto" type="text" value="Propietario">
                                    <label for="proveedor_contactoPuesto"><?= label('formContacto_puesto'); ?></label>
                                </div>
                                <div class="input-field col s12 m3 l3">
                                    <input id="proveedor_contactoTelefono" type="text" value="8956-6545">
                                    <label for="proveedor_contactoTelefono"><?= label('formContacto_telefono'); ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m1 l1 btn-contacto-eliminar-edicion">
                            <a href="#eliminarContacto" class="modal-trigger" title="<?= label('formProveedor_contactoEliminar') ?>">
                                <i class="mdi-action-delete medium" style="color: black;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col s12">
                        <hr />
                    </div>

                    <div class="row">
                        <div class="col s12 m11 l11">
                            <div class="row">
                                <div class="input-field col s12 m4 l4">
                                    <input id="proveedor_contactoApellido1" type="text" value="Castro">
                                    <label for="proveedor_contactoApellido1"><?= label('formContacto_apellido1'); ?></label>
                                </div>
                                <div class="input-field col s12 m4 l4">
                                    <input id="proveedor_contactoApellido2" type="text" value="Chaves">
                                    <label for="proveedor_contactoApellido2"><?= label('formContacto_apellido2'); ?></label>
                                </div>
                                <div class="input-field col s12 m4 l4">
                                    <input id="proveedor_contactoNombre" type="text" value="Juan">
                                    <label for="proveedor_contactoNombre"><?= label('formContacto_nombre'); ?></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m6 l6">
                                    <div>
                                        <input id="proveedor_contactoCorreo" type="email" style="margin-bottom: 0;" value="juan.castro@gmail.com">
                                        <label for="proveedor_contactoCorreo"><?= label('formProveedor_correo'); ?></label>
                                    </div>
                                    <div style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" id="checkbox_contactoCorreoProveedor" />
                                        <label for="checkbox_contactoCorreoProveedor" style="margin-bottom: 20px;">
                                            <?= label('formProveedor_correoCheck') ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="input-field col s12 m3 l3">
                                    <input id="proveedor_contactoPuesto" type="text" value="Vendedor">
                                    <label for="proveedor_contactoPuesto"><?= label('formContacto_puesto'); ?></label>
                                </div>
                                <div class="input-field col s12 m3 l3">
                                    <input id="proveedor_contactoTelefono" type="text" value="8956-9865">
                                    <label for="proveedor_contactoTelefono"><?= label('formContacto_telefono'); ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m1 l1 btn-contacto-eliminar-edicion">
                            <a href="#eliminarContacto" class="modal-trigger" title="<?= label('formProveedor_contactoEliminar') ?>">
                                <i class="mdi-action-delete medium" style="color: black;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col s12">
                        <hr />
                    </div>

                    <div class="row">
                        <div class="col s12 m11 l11">
                            <div class="row">
                                <div class="input-field col s12 m4 l4">
                                    <input id="proveedor_contactoApellido1" type="text" value="Porras">
                                    <label for="proveedor_contactoApellido1"><?= label('formContacto_apellido1'); ?></label>
                                </div>
                                <div class="input-field col s12 m4 l4">
                                    <input id="proveedor_contactoApellido2" type="text" value="Bogantes">
                                    <label for="proveedor_contactoApellido2"><?= label('formContacto_apellido2'); ?></label>
                                </div>
                                <div class="input-field col s12 m4 l4">
                                    <input id="proveedor_contactoNombre" type="text" value="Luis">
                                    <label for="proveedor_contactoNombre"><?= label('formContacto_nombre'); ?></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m6 l6">
                                    <div>
                                        <input id="proveedor_contactoCorreo" type="email" style="margin-bottom: 0;" value="luis.porras@gmail.com">
                                        <label for="proveedor_contactoCorreo"><?= label('formProveedor_correo'); ?></label>
                                    </div>
                                    <div style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" id="checkbox_contactoCorreoProveedor" />
                                        <label for="checkbox_contactoCorreoProveedor" style="margin-bottom: 20px;">
                                            <?= label('formProveedor_correoCheck') ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="input-field col s12 m3 l3">
                                    <input id="proveedor_contactoPuesto" type="text" value="Vendedor">
                                    <label for="proveedor_contactoPuesto"><?= label('formContacto_puesto'); ?></label>
                                </div>
                                <div class="input-field col s12 m3 l3">
                                    <input id="proveedor_contactoTelefono" type="text" value="8956-1245">
                                    <label for="proveedor_contactoTelefono"><?= label('formContacto_telefono'); ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m1 l1 btn-contacto-eliminar-edicion">
                            <a href="#eliminarContacto" class="modal-trigger" title="<?= label('formProveedor_contactoEliminar') ?>">
                                <i class="mdi-action-delete medium" style="color: black;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col s12">
                        <hr />
                    </div>

                    <div class="row">
                        <div class="col s12 m11 l11">
                            <div class="row">
                                <div class="input-field col s12 m4 l4">
                                    <input id="proveedor_contactoApellido1" type="text" value="Murillo">
                                    <label for="proveedor_contactoApellido1"><?= label('formContacto_apellido1'); ?></label>
                                </div>
                                <div class="input-field col s12 m4 l4">
                                    <input id="proveedor_contactoApellido2" type="text" value="Alfaro">
                                    <label for="proveedor_contactoApellido2"><?= label('formContacto_apellido2'); ?></label>
                                </div>
                                <div class="input-field col s12 m4 l4">
                                    <input id="proveedor_contactoNombre" type="text" value="Jose">
                                    <label for="proveedor_contactoNombre"><?= label('formContacto_nombre'); ?></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m6 l6">
                                    <div>
                                        <input id="proveedor_contactoCorreo" type="email" style="margin-bottom: 0;" value="jose.murillo@gmail.com">
                                        <label for="proveedor_contactoCorreo"><?= label('formProveedor_correo'); ?></label>
                                    </div>
                                    <div style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" id="checkbox_contactoCorreoProveedor" />
                                        <label for="checkbox_contactoCorreoProveedor" style="margin-bottom: 20px;">
                                            <?= label('formProveedor_correoCheck') ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="input-field col s12 m3 l3">
                                    <input id="proveedor_contactoPuesto" type="text" value="Vendedor">
                                    <label for="proveedor_contactoPuesto"><?= label('formContacto_puesto'); ?></label>
                                </div>
                                <div class="input-field col s12 m3 l3">
                                    <input id="proveedor_contactoTelefono" type="text" value="8752-9865">
                                    <label for="proveedor_contactoTelefono"><?= label('formContacto_telefono'); ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m1 l1 btn-contacto-eliminar-edicion">
                            <a href="#eliminarContacto" class="modal-trigger" title="<?= label('formProveedor_contactoEliminar') ?>">
                                <i class="mdi-action-delete medium" style="color: black;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col s12">
                        <hr />
                    </div>

                    <div class="row">
                        <div class="col s12 m11 l11">
                            <div class="row">
                                <div class="input-field col s12 m4 l4">
                                    <input id="proveedor_contactoApellido1" type="text" value="Arias">
                                    <label for="proveedor_contactoApellido1"><?= label('formContacto_apellido1'); ?></label>
                                </div>
                                <div class="input-field col s12 m4 l4">
                                    <input id="proveedor_contactoApellido2" type="text" value="Lopez">
                                    <label for="proveedor_contactoApellido2"><?= label('formContacto_apellido2'); ?></label>
                                </div>
                                <div class="input-field col s12 m4 l4">
                                    <input id="proveedor_contactoNombre" type="text" value="Karla">
                                    <label for="proveedor_contactoNombre"><?= label('formContacto_nombre'); ?></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m6 l6">
                                    <div>
                                        <input id="proveedor_contactoCorreo" type="email" style="margin-bottom: 0;" value="karla.arias@gmail.com">
                                        <label for="proveedor_contactoCorreo"><?= label('formProveedor_correo'); ?></label>
                                    </div>
                                    <div style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" id="checkbox_contactoCorreoProveedor" />
                                        <label for="checkbox_contactoCorreoProveedor" style="margin-bottom: 20px;">
                                            <?= label('formProveedor_correoCheck') ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="input-field col s12 m3 l3">
                                    <input id="proveedor_contactoPuesto" type="text" value="Vendedor">
                                    <label for="proveedor_contactoPuesto"><?= label('formContacto_puesto'); ?></label>
                                </div>
                                <div class="input-field col s12 m3 l3">
                                    <input id="proveedor_contactoTelefono" type="text" value="8956-1379">
                                    <label for="proveedor_contactoTelefono"><?= label('formContacto_telefono'); ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m1 l1 btn-contacto-eliminar-edicion">
                            <a href="#eliminarContacto" class="modal-trigger" title="<?= label('formProveedor_contactoEliminar') ?>">
                                <i class="mdi-action-delete medium" style="color: black;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col s12">
                        <hr />
                    </div>

                    <div class="row">
                        <div class="col s12 m11 l11">
                            <div class="row">
                                <div class="input-field col s12 m4 l4">
                                    <input id="proveedor_contactoApellido1" type="text" value="Zamora">
                                    <label for="proveedor_contactoApellido1"><?= label('formContacto_apellido1'); ?></label>
                                </div>
                                <div class="input-field col s12 m4 l4">
                                    <input id="proveedor_contactoApellido2" type="text" value="Rivera">
                                    <label for="proveedor_contactoApellido2"><?= label('formContacto_apellido2'); ?></label>
                                </div>
                                <div class="input-field col s12 m4 l4">
                                    <input id="proveedor_contactoNombre" type="text" value="Fabian">
                                    <label for="proveedor_contactoNombre"><?= label('formContacto_nombre'); ?></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 m6 l6">
                                    <div>
                                        <input id="proveedor_contactoCorreo" type="email" style="margin-bottom: 0;" value="fabian.zamora@gmail.com">
                                        <label for="proveedor_contactoCorreo"><?= label('formProveedor_correo'); ?></label>
                                    </div>
                                    <div style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" id="checkbox_contactoCorreoProveedor" />
                                        <label for="checkbox_contactoCorreoProveedor" style="margin-bottom: 20px;">
                                            <?= label('formProveedor_correoCheck') ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="input-field col s12 m3 l3">
                                    <input id="proveedor_contactoPuesto" type="text" value="Vendedor">
                                    <label for="proveedor_contactoPuesto"><?= label('formContacto_puesto'); ?></label>
                                </div>
                                <div class="input-field col s12 m3 l3">
                                    <input id="proveedor_contactoTelefono" type="text" value="8956-0943">
                                    <label for="proveedor_contactoTelefono"><?= label('formContacto_telefono'); ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m1 l1 btn-contacto-eliminar-edicion">
                            <a href="#eliminarContacto" class="modal-trigger" title="<?= label('formProveedor_contactoEliminar') ?>">
                                <i class="mdi-action-delete medium" style="color: black;"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row" id="tab-contactos-nuevo">
                        <a onclick="agregarNuevoContacto();">
                            <?= label('formProveedor_contactoAgregar') ?>
                        </a>
                    </div>
                    <div class="col s12">
                        <hr />
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
        </div>
    </form>
</div>

<?php
    $this->load->view('layout/default/menu-crear.php');
?>

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

//        elt.tagsinput('add', {"value": 1, "text": "Brayan Nu�ez Rojas", "continent": "Europe"});
//        elt.tagsinput('add', {"value": 4, "text": "Anthony Nu�ez Rojas", "continent": "America"});
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

<!-- Funcion para mostrar elementos -->
<script>
    function datosProveedor(opcionSeleccionada) {
        if (opcionSeleccionada.value == "1") {
            document.getElementById('campos-proveedor-fisico').style.display = 'block';
            document.getElementById('campos-proveedor-juridico').style.display = 'none';
        } else {
            document.getElementById('campos-proveedor-fisico').style.display = 'none';
            document.getElementById('campos-proveedor-juridico').style.display = 'block';
        }
    }
    function agregarNuevoContacto() {
        $('#tab-contactos-nuevo').remove();
        $('#tab-contactos-editar').append('' +
            '<div class="row">' +
            '<div class="col s12 m11 l11">' +
            '<div class="row">' +
            '<div class="input-field col s12 m4 l4">' +
            '<input id="proveedor_contactoApellido1" type="text">' +
            '<label for="proveedor_contactoApellido1"><?= label("formContacto_apellido1"); ?></label>' +
            '</div>' +
            '<div class="input-field col s12 m4 l4">' +
            '<input id="proveedor_contactoApellido2" type="text">' +
            '<label for="proveedor_contactoApellido2"><?= label("formContacto_apellido2"); ?></label>' +
            '</div>' +
            '<div class="input-field col s12 m4 l4">' +
            '<input id="proveedor_contactoNombre" type="text">' +
            '<label for="proveedor_contactoNombre"><?= label("formContacto_nombre"); ?></label>' +
            '</div>' +
            '</div>' +

            '<div class="row">' +
            '<div class="input-field col s12 m6 l6">' +
            '<div>' +
            '<input id="proveedor_contactoCorreo" type="email" style="margin-bottom: 0;">' +
            '<label for="proveedor_contactoCorreo"><?= label('formProveedor_correo'); ?></label>' +
            '</div>' +
            '<div style="margin-bottom: 20px;">' +
            '<input type="checkbox" class="filled-in" id="checkbox_contactoCorreoProveedor" />' +
            '<label for="checkbox_contactoCorreoProveedor" style="margin-bottom: 20px;">' +
            '<?= label('formProveedor_correoCheck') ?>' +
            '</label>' +
            '</div>' +
            '</div>' +
            '<div class="input-field col s12 m3 l3">' +
            '<input id="proveedor_contactoPuesto" type="text">' +
            '<label for="proveedor_contactoPuesto"><?= label('formContacto_puesto'); ?></label>' +
            '</div>' +
            '<div class="input-field col s12 m3 l3">' +
            '<input id="proveedor_contactoTelefono" type="text">' +
            '<label for="proveedor_contactoTelefono"><?= label('formContacto_telefono'); ?></label>' +
            '</div>' +
            '</div>' +

            '</div>' +
            '<div class="col s12 m1 l1 btn-contacto-eliminar-edicion">' +
            '<a href="#eliminarContacto" class="modal-trigger" title="<?= label('formProveedor_contactoEliminar') ?>"><i class="mdi-action-delete medium" style="color: black;"></i></a>' +
            '</div>' +
            '</div>' +
            '<div class="row" id="tab-contactos-nuevo">' +
            '<a style="cursor: pointer;" onclick="agregarNuevoContacto();"><?= label('formProveedor_contactoAgregar') ?></a>' +
            '</div>' +
            '<div class="col s12">' +
            '<hr />' +
            '</div>');
    }
</script>

<!-- lista modals -->
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
<div id="eliminarContacto" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarContacto'); ?></p>
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