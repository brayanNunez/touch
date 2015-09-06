<div class="col s12">
    <form class="col s12">
        <div class="row">
            <div class="input-field col s12">
                <select onchange="datosCliente(this)">
                    <option value="1" selected><?= label('formCliente_fisica'); ?></option>
                    <option value="2"><?= label('formCliente_juridica'); ?></option>
                </select>
                <label for="cliente_tipo"><?= label('formCliente_tipoPersona'); ?></label>
            </div>
            <div class="input-field col s12">
                <select>
                    <option value="" disabled><?= label('formCliente_seleccioneUno'); ?></option>
                    <option value="1" selected>Costa Rica</option>
                    <option value="2">Brasil</option>
                    <option value="3">USA</option>
                    <option value="4">Colombia</option>
                    <option value="5">Uruguay</option>
                    <option value="6">Chile</option>
                </select>
                <label for="cliente_nacionalidad"><?= label('formCliente_nacionalidad'); ?></label>
            </div>

            <div id="elementos-cliente-fisico" style="display: block;">
                <div class="input-field col s12">
                    <input id="cliente_id" type="text" value="2-723-327">
                    <label for="cliente_id"><?= label('formCliente_identificacion'); ?></label>
                </div>
                <div>
                    <div class="input-field col s12 m4 l4">
                        <input id="cliente_apellido1" type="text" value="Rojas">
                        <label for="cliente_apellido1"><?= label('formCliente_apellido1'); ?></label>
                    </div>
                    <div class="input-field col s12 m4 l4">
                        <input id="cliente_apellido2" type="text" value="Chaves">
                        <label for="cliente_apellido2"><?= label('formCliente_apellido2'); ?></label>
                    </div>
                    <div class="input-field col s12 m4 l4">
                        <input id="cliente_nombre" type="text" value="Claret">
                        <label for="cliente_nombre"><?= label('formCliente_nombre'); ?></label>
                    </div>
                </div>
                <div class="input-field col s12">
                    <div>
                        <input id="cliente_correo" type="email" style="margin-bottom: 0;" value="claret@gmail.com">
                        <label for="cliente_correo"><?= label('formCliente_correo'); ?></label>
                    </div>
                    <div style="margin-bottom: 20px;">
                        <input type="checkbox" class="filled-in" id="checkbox_correoCliente" checked/>
                        <label for="checkbox_correoCliente">
                            <?= label('formCliente_correoCheck') ?>
                        </label>
                    </div>
                </div>
                <div class="input-field col s12">
                    <input id="cliente_telefonoMovil" type="text" value="8956-9865">
                    <label
                        for="cliente_telefonoMovil"><?= label('formCliente_telefonoMovil'); ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="cliente_telefono" type="text" value="2448-5623">
                    <label
                        for="cliente_telefono"><?= label('formCliente_telefonoFijo'); ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="cliente_fechaNacimiento" type="text" class="datepicker-fecha" value="10-03-1994">
                    <label for="cliente_fechaNacimiento"><?= label('formCliente_fechaNacimiento'); ?></label>
                </div>
            </div>

            <div id="elementos-cliente-juridico" style="display: none;">
                <div class="input-field col s12">
                    <input id="clientejuridico_id" type="text" value="3-4567-1324">
                    <label for="clientejuridico_id"><?= label('formCliente_identificacionJuridica'); ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="clientejuridico_nombre" type="text" value="Cooperativa Dos Pinos S.A.">
                    <label for="clientejuridico_nombre"><?= label('formCliente_nombreJuridico'); ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="clientejuridico_nombreFantasia" type="text" value="Dos Pinos S.A.">
                    <label for="clientejuridico_nombreFantasia"><?= label('formCliente_nombreFantasia'); ?></label>
                </div>
                <div class="input-field col s12">
                    <div>
                        <input id="clientejuridico_correo" type="email" value="dospinos@gmail.com">
                        <label for="clientejuridico_correo"><?= label('formCliente_correo'); ?></label>
                    </div>
                    <div style="margin-bottom: 20px;">
                        <input type="checkbox" class="filled-in" id="checkbox_correoClientejuridico" checked/>
                        <label for="checkbox_correoClientejuridico">
                            <?= label('formCliente_correoCheck') ?>
                        </label>
                    </div>
                </div>
                <div class="input-field col s12">
                    <input id="clientejuridico_telefono" type="text" value="2245-8754">
                    <label
                        for="clientejuridico_telefono"><?= label('formCliente_telefono'); ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="clientejuridico_fax" type="text" value="2245-1234">
                    <label
                        for="clientejuridico_fax"><?= label('formCliente_fax'); ?></label>
                </div>
            </div>

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
                            <input id="cliente_direccionPais" type="text" value="Costa Rica">
                            <label for="cliente_direccionPais"><?= label('formCliente_direccionPais'); ?></label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                            <input id="cliente_direccionProvincia" type="text" value="Alajuela">
                            <label for="cliente_direccionProvincia"><?= label('formCliente_direccionProvincia'); ?></label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                            <input id="cliente_direccionCanton" type="text" value="Grecia">
                            <label for="cliente_direccionCanton"><?= label('formCliente_direccionCanton'); ?></label>
                        </div>
                        <div class="input-field col s12 m4 l4">
                            <input id="cliente_direccionDistrito" type="text" value="Tacares">
                            <label for="cliente_direccionDistrito"><?= label('formCliente_direccionDistrito'); ?></label>
                        </div>
                        <div class="input-field col s12 m8 l8">
                            <input id="cliente_direccionDomicilio" type="text"
                                   value="50 mts norte de la iglesia de la localidad">
                            <label for="cliente_direccionDomicilio"><?= label('formCliente_direccionDomicilio'); ?></label>
                        </div>
                    </div>
                </div>
                <div id="tab-contactos-editar" class="card col s12">
                    <div class="agregar_nuevo">
                        <a href="#agregarContacto" class="btn btn-default modal-trigger">
                            <?= label('formCliente_agregar'); ?>
                        </a>
                    </div>
                    <div id="checkbox-general">
                        <input class="filled-in checkbox-edicion checkall" type="checkbox" id="checkbox-all"
                               onclick="toggleChecked(this.checked)"/>
                        <label for="checkbox-all"></label>
                    </div>
                    <table id="cliente1-contactos-editar" class="data-table-information responsive-table striped">
                        <thead>
                            <tr>
                                <th></th>
                                <th><?= label('formCliente_nombreContacto'); ?></th>
                                <th><?= label('formCliente_correoContacto'); ?></th>
                                <th><?= label('formCliente_opcionesContacto'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" class="filled-in checkbox-edicion" id="checkbox_cliente1_contacto1"/>
                                    <label for="checkbox_cliente1_contacto1"></label>
                                </td>
                                <td>Maria Rodriguez</td>
                                <td>maria@gmail.com</td>
                                <td>
                                    <ul id="dropdown-cliente1-contacto1" class="dropdown-content">
                                        <li>
                                            <a href="#editarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                        </li>
                                        <li>
                                            <a href="#eliminarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                        </li>
                                    </ul>
                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!"
                                       data-activates="dropdown-cliente1-contacto1">
                                        <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" class="filled-in checkbox-edicion" id="checkbox_cliente1_contacto2"/>
                                    <label for="checkbox_cliente1_contacto2"></label>
                                </td>
                                <td>Juan Perez</td>
                                <td>juan@gmail.com</td>
                                <td>
                                    <ul id="dropdown-cliente1-contacto2" class="dropdown-content">
                                        <li>
                                            <a href="#editarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                        </li>
                                        <li>
                                            <a href="#eliminarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                        </li>
                                    </ul>
                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!"
                                       data-activates="dropdown-cliente1-contacto2">
                                        <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" class="filled-in checkbox-edicion" id="checkbox_cliente1_contacto3"/>
                                    <label for="checkbox_cliente1_contacto3"></label>
                                </td>
                                <td>Jose Mora</td>
                                <td>jose@gmail.com</td>
                                <td>
                                    <ul id="dropdown-cliente1-contacto3" class="dropdown-content">
                                        <li>
                                            <a href="#editarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                        </li>
                                        <li>
                                            <a href="#eliminarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                        </li>
                                    </ul>
                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!"
                                       data-activates="dropdown-cliente1-contacto3">
                                        <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" class="filled-in checkbox-edicion" id="checkbox_cliente1_contacto4"/>
                                    <label for="checkbox_cliente1_contacto4"></label>
                                </td>
                                <td>Brayan Nunnez</td>
                                <td>brayan@gmail.com</td>
                                <td>
                                    <ul id="dropdown-cliente1-contacto4" class="dropdown-content">
                                        <li>
                                            <a href="#editarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                        </li>
                                        <li>
                                            <a href="#eliminarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                        </li>
                                    </ul>
                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!"
                                       data-activates="dropdown-cliente1-contacto4">
                                        <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" class="filled-in checkbox-edicion" id="checkbox_cliente1_contacto5"/>
                                    <label for="checkbox_cliente1_contacto5"></label>
                                </td>
                                <td>Jorge Arias</td>
                                <td>jorge@gmail.com</td>
                                <td>
                                    <ul id="dropdown-cliente1-contacto5" class="dropdown-content">
                                        <li>
                                            <a href="#editarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                        </li>
                                        <li>
                                            <a href="#eliminarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                        </li>
                                    </ul>
                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!"
                                       data-activates="dropdown-cliente1-contacto5">
                                        <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" class="filled-in checkbox-edicion" id="checkbox_cliente1_contacto6"/>
                                    <label for="checkbox_cliente1_contacto6"></label>
                                </td>
                                <td>Claret Rojas</td>
                                <td>cloret@gmail.com</td>
                                <td>
                                    <ul id="dropdown-cliente1-contacto6" class="dropdown-content">
                                        <li>
                                            <a href="#editarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                        </li>
                                        <li>
                                            <a href="#eliminarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                        </li>
                                    </ul>
                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!"
                                       data-activates="dropdown-cliente1-contacto6">
                                        <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" class="filled-in checkbox-edicion" id="checkbox_cliente1_contacto7"/>
                                    <label for="checkbox_cliente1_contacto7"></label>
                                </td>
                                <td>Sebastian Rodriguez</td>
                                <td>sebas@gmail.com</td>
                                <td>
                                    <ul id="dropdown-cliente1-contacto7" class="dropdown-content">
                                        <li>
                                            <a href="#editarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                        </li>
                                        <li>
                                            <a href="#eliminarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                        </li>
                                    </ul>
                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!"
                                       data-activates="dropdown-cliente1-contacto7">
                                        <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" class="filled-in checkbox-edicion" id="checkbox_cliente1_contacto8"/>
                                    <label for="checkbox_cliente1_contacto8"></label>
                                </td>
                                <td>Emmanuel Conejo</td>
                                <td>emma@gmail.com</td>
                                <td>
                                    <ul id="dropdown-cliente1-contacto8" class="dropdown-content">
                                        <li>
                                            <a href="#editarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                        </li>
                                        <li>
                                            <a href="#eliminarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                        </li>
                                    </ul>
                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!"
                                       data-activates="dropdown-cliente1-contacto8">
                                        <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" class="filled-in checkbox-edicion" id="checkbox_cliente1_contacto9"/>
                                    <label for="checkbox_cliente1_contacto9"></label>
                                </td>
                                <td>Emmanuel Jimenez</td>
                                <td>emmaj@gmail.com</td>
                                <td>
                                    <ul id="dropdown-cliente1-contacto9" class="dropdown-content">
                                        <li>
                                            <a href="#editarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                        </li>
                                        <li>
                                            <a href="#eliminarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                        </li>
                                    </ul>
                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!"
                                       data-activates="dropdown-cliente1-contacto9">
                                        <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" class="filled-in checkbox-edicion" id="checkbox_cliente1_contacto10"/>
                                    <label for="checkbox_cliente1_contacto10"></label>
                                </td>
                                <td>Luis Barrantes</td>
                                <td>luis@gmail.com</td>
                                <td>
                                    <ul id="dropdown-cliente1-contacto10" class="dropdown-content">
                                        <li>
                                            <a href="#editarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                        </li>
                                        <li>
                                            <a href="#eliminarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                        </li>
                                    </ul>
                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!"
                                       data-activates="dropdown-cliente1-contacto10">
                                        <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" class="filled-in checkbox-edicion" id="checkbox_cliente1_contacto11"/>
                                    <label for="checkbox_cliente1_contacto11"></label>
                                </td>
                                <td>Joseph Fuentes</td>
                                <td>joseph@gmail.com</td>
                                <td>
                                    <ul id="dropdown-cliente1-contacto11" class="dropdown-content">
                                        <li>
                                            <a href="#editarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                        </li>
                                        <li>
                                            <a href="#eliminarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                        </li>
                                    </ul>
                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!"
                                       data-activates="dropdown-cliente1-contacto11">
                                        <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" class="filled-in checkbox-edicion" id="checkbox_cliente1_contacto12"/>
                                    <label for="checkbox_cliente1_contacto12"></label>
                                </td>
                                <td>Yohan Diaz</td>
                                <td>yohan@gmail.com</td>
                                <td>
                                    <ul id="dropdown-cliente1-contacto12" class="dropdown-content">
                                        <li>
                                            <a href="#editarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                        </li>
                                        <li>
                                            <a href="#eliminarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                        </li>
                                    </ul>
                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!"
                                       data-activates="dropdown-cliente1-contacto12">
                                        <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" class="filled-in checkbox-edicion" id="checkbox_cliente1_contacto13"/>
                                    <label for="checkbox_cliente1_contacto13"></label>
                                </td>
                                <td>Victor Gonzales</td>
                                <td>victor@gmail.com</td>
                                <td>
                                    <ul id="dropdown-cliente1-contacto13" class="dropdown-content">
                                        <li>
                                            <a href="#editarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                        </li>
                                        <li>
                                            <a href="#eliminarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                        </li>
                                    </ul>
                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!"
                                       data-activates="dropdown-cliente1-contacto13">
                                        <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" class="filled-in checkbox-edicion" id="checkbox_cliente1_contacto14"/>
                                    <label for="checkbox_cliente1_contacto14"></label>
                                </td>
                                <td>Jonathan Calderon</td>
                                <td>calde@gmail.com</td>
                                <td>
                                    <ul id="dropdown-cliente1-contacto14" class="dropdown-content">
                                        <li>
                                            <a href="#editarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                        </li>
                                        <li>
                                            <a href="#eliminarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                        </li>
                                    </ul>
                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!"
                                       data-activates="dropdown-cliente1-contacto14">
                                        <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" class="filled-in checkbox-edicion" id="checkbox_cliente1_contacto15"/>
                                    <label for="checkbox_cliente1_contacto15"></label>
                                </td>
                                <td>Kendal Zamora</td>
                                <td>kendal@gmail.com</td>
                                <td>
                                    <ul id="dropdown-cliente1-contacto15" class="dropdown-content">
                                        <li>
                                            <a href="#editarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                        </li>
                                        <li>
                                            <a href="#eliminarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                        </li>
                                    </ul>
                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!"
                                       data-activates="dropdown-cliente1-contacto15">
                                        <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" class="filled-in checkbox-edicion" id="checkbox_cliente1_contacto16"/>
                                    <label for="checkbox_cliente1_contacto16"></label>
                                </td>
                                <td>Sindy Porras</td>
                                <td>sindy@gmail.com</td>
                                <td>
                                    <ul id="dropdown-cliente1-contacto16" class="dropdown-content">
                                        <li>
                                            <a href="#editarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                        </li>
                                        <li>
                                            <a href="#eliminarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                        </li>
                                    </ul>
                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!"
                                       data-activates="dropdown-cliente1-contacto16">
                                        <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" class="filled-in checkbox-edicion" id="checkbox_cliente1_contacto17"/>
                                    <label for="checkbox_cliente1_contacto17"></label>
                                </td>
                                <td>Enrico Travierso</td>
                                <td>enrico@gmail.com</td>
                                <td>
                                    <ul id="dropdown-cliente1-contacto17" class="dropdown-content">
                                        <li>
                                            <a href="#editarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                        </li>
                                        <li>
                                            <a href="#eliminarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                        </li>
                                    </ul>
                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!"
                                       data-activates="dropdown-cliente1-contacto17">
                                        <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" class="filled-in checkbox-edicion" id="checkbox_cliente1_contacto18"/>
                                    <label for="checkbox_cliente1_contacto18"></label>
                                </td>
                                <td>Juan Carlos Miranda</td>
                                <td>miranda@gmail.com</td>
                                <td>
                                    <ul id="dropdown-cliente1-contacto18" class="dropdown-content">
                                        <li>
                                            <a href="#editarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                        </li>
                                        <li>
                                            <a href="#eliminarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                        </li>
                                    </ul>
                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!"
                                       data-activates="dropdown-cliente1-contacto18">
                                        <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" class="filled-in checkbox-edicion" id="checkbox_cliente1_contacto19"/>
                                    <label for="checkbox_cliente1_contacto19"></label>
                                </td>
                                <td>Wendy Castro</td>
                                <td>wendy@gmail.com</td>
                                <td>
                                    <ul id="dropdown-cliente1-contacto19" class="dropdown-content">
                                        <li>
                                            <a href="#editarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                        </li>
                                        <li>
                                            <a href="#eliminarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                        </li>
                                    </ul>
                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!"
                                       data-activates="dropdown-cliente1-contacto19">
                                        <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" class="filled-in checkbox-edicion" id="checkbox_cliente1_contacto20"/>
                                    <label for="checkbox_cliente1_contacto20"></label>
                                </td>
                                <td>Dennis Gonzales</td>
                                <td>dennis@gmail.com</td>
                                <td>
                                    <ul id="dropdown-cliente1-contacto20" class="dropdown-content">
                                        <li>
                                            <a href="#editarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                        </li>
                                        <li>
                                            <a href="#eliminarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                        </li>
                                    </ul>
                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!"
                                       data-activates="dropdown-cliente1-contacto20">
                                        <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" class="filled-in checkbox-edicion" id="checkbox_cliente1_contacto13"/>
                                    <label for="checkbox_cliente1_contacto13"></label>
                                </td>
                                <td>Rebeca Arias</td>
                                <td>rebeca@gmail.com</td>
                                <td>
                                    <ul id="dropdown-cliente1-contacto13" class="dropdown-content">
                                        <li>
                                            <a href="#editarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                        </li>
                                        <li>
                                            <a href="#eliminarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                        </li>
                                    </ul>
                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!"
                                       data-activates="dropdown-cliente1-contacto13">
                                        <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" class="filled-in checkbox-edicion" id="checkbox_cliente1_contacto14"/>
                                    <label for="checkbox_cliente1_contacto14"></label>
                                </td>
                                <td>Hilary madrigal</td>
                                <td>hilary@gmail.com</td>
                                <td>
                                    <ul id="dropdown-cliente1-contacto14" class="dropdown-content">
                                        <li>
                                            <a href="#editarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                        </li>
                                        <li>
                                            <a href="#eliminarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                        </li>
                                    </ul>
                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!"
                                       data-activates="dropdown-cliente1-contacto14">
                                        <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" class="filled-in checkbox-edicion" id="checkbox_cliente1_contacto15"/>
                                    <label for="checkbox_cliente1_contacto15"></label>
                                </td>
                                <td>Michael Arguedas</td>
                                <td>michael@gmail.com</td>
                                <td>
                                    <ul id="dropdown-cliente1-contacto15" class="dropdown-content">
                                        <li>
                                            <a href="#editarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                        </li>
                                        <li>
                                            <a href="#eliminarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                        </li>
                                    </ul>
                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!"
                                       data-activates="dropdown-cliente1-contacto15">
                                        <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">
                                    <input type="checkbox" class="filled-in checkbox-edicion" id="checkbox_cliente1_contacto16"/>
                                    <label for="checkbox_cliente1_contacto16"></label>
                                </td>
                                <td>Emmanuel Hidalgo</td>
                                <td>emmaF@gmail.com</td>
                                <td>
                                    <ul id="dropdown-cliente1-contacto16" class="dropdown-content">
                                        <li>
                                            <a href="#editarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                        </li>
                                        <li>
                                            <a href="#eliminarContacto"
                                               class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                        </li>
                                    </ul>
                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!"
                                       data-activates="dropdown-cliente1-contacto16">
                                        <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="tabla-conAgregar tabla-opciones-contacto">
                        <a id="opciones-seleccionados-delete"
                           class="modal-trigger waves-effect black-text opciones-seleccionados option-delete-elements"
                           style="visibility: hidden;"
                           href="#eliminarElementosSeleccionados" data-toggle="tooltip"
                           title="<?= label('opciones_seleccionadosEliminar') ?>">
                            <i class="mdi-action-delete icono-opciones-varios"></i>
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
                                <input placeholder="<?= label('formCliente_anadirGusto'); ?>" type="text"
                                       value="Futbol,Baseball,Tennis,Golf"/>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="inputTag col s12">
                        <label for="mediosCliente"><?= label('formCliente_mediosContacto'); ?></label>
                        <br>
                        <div id="mediosCliente" class="example tags_mediosContacto">
                            <div class="bs-example">
                                <input placeholder="<?= label('formCliente_anadirMedio'); ?>" type="text"
                                       value="TV,Radio,Carteles,Vallas publicitarias"/>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                <div id="tab-infoFacturacion-editar" class="card col s12">
                    <div class="input-field col s12">
                        <select>
                            <option value="" disabled><?= label('formCliente_seleccioneUno'); ?></option>
                            <option value="1">Adelantado</option>
                            <option value="2">Contado</option>
                            <option value="3" selected>A pagos</option>
                        </select>
                        <label for="cliente_formaPagoFavorita">
                            <?= label('formCliente_formaPagoFavorita'); ?></label>
                    </div>
                    <div class="input-field col s12">
                        <input id="cliente_descuento" type="text" value="5">
                        <label for="cliente_descuento"><?= label('formCliente_descuento'); ?></label>
                        <span class="icono-porcentaje-descuento">%</span>
                    </div>
                    <div class="input-field col s12">
                        <select>
                            <option value="" disabled><?= label('formCliente_seleccioneUno'); ?></option>
                            <option value="1" selected>Dolar</option>
                            <option value="2">Reales</option>
                            <option value="3">Euros</option>
                        </select>
                        <label for="cliente_moneda"><?= label('formCliente_monedaCotizar'); ?></label>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
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
    });
</script>

<!-- Funcion para mostrar elementos -->
<script>
    function datosCliente(opcionSeleccionada) {
        if (opcionSeleccionada.value == "1") {
            document.getElementById('elementos-cliente-fisico').style.display = 'block';
            document.getElementById('elementos-cliente-juridico').style.display = 'none';
        } else {
            document.getElementById('elementos-cliente-fisico').style.display = 'none';
            document.getElementById('elementos-cliente-juridico').style.display = 'block';
        }
    }
</script>

<!-- lista modals -->
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
<div id="agregarContacto" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="row">
            <div class="input-field col s12 m4 l4">
                <input id="cliente_contactoApellido1" type="text">
                <label for="cliente_contactoApellido1"><?= label('formContacto_apellido1'); ?></label>
            </div>
            <div class="input-field col s12 m4 l4">
                <input id="cliente_contactoApellido2" type="text">
                <label for="cliente_contactoApellido2"><?= label('formContacto_apellido2'); ?></label>
            </div>
            <div class="input-field col s12 m4 l4">
                <input id="cliente_contactoNombre" type="text">
                <label for="cliente_contactoNombre"><?= label('formContacto_nombre'); ?></label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6 l6">
                <input id="cliente_contactoCorreo" type="email" style="margin-bottom: 0;">
                <label for="cliente_contactoCorreo"><?= label('formCliente_correo'); ?></label>
                <input type="checkbox" class="filled-in checkbox"
                       id="checkbox_contactoCorreoCliente" />
                <label for="checkbox_contactoCorreoCliente" style="margin-bottom: 20px;">
                    <?= label('formCliente_correoCheck') ?>
                </label>
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
<div id="editarContacto" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="row">
            <div class="input-field col s12 m4 l4">
                <input id="cliente_contactoApellido1_existente" type="text" value="Rojas">
                <label for="cliente_contactoApellido1_existente"><?= label('formContacto_apellido1'); ?></label>
            </div>
            <div class="input-field col s12 m4 l4">
                <input id="cliente_contactoApellido2_existente" type="text" value="Chaves">
                <label for="cliente_contactoApellido2_existente"><?= label('formContacto_apellido2'); ?></label>
            </div>
            <div class="input-field col s12 m4 l4">
                <input id="cliente_contactoNombre_existente" type="text" value="Claret">
                <label for="cliente_contactoNombre_existente"><?= label('formContacto_nombre'); ?></label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6 l6">
                <div>
                    <input id="cliente_contactoCorreo_existente" type="email" style="margin-bottom: 0;" value="claret@gmail.com">
                    <label for="cliente_contactoCorreo_existente"><?= label('formCliente_correo'); ?></label>
                </div>
                <div style="margin-bottom: 20px;">
                    <input type="checkbox" class="filled-in"
                           id="checkbox_contactoCorreoCliente_existente" checked/>
                    <label for="checkbox_contactoCorreoCliente_existente" style="margin-bottom: 20px;">
                        <?= label('formCliente_correoCheck') ?>
                    </label>
                </div>
            </div>
            <div class="input-field col s12 m3 l3">
                <input id="cliente_contactoPuesto_existente" type="text" value="CEO">
                <label for="cliente_contactoPuesto_existente"><?= label('formContacto_puesto'); ?></label>
            </div>
            <div class="input-field col s12 m3 l3">
                <input id="cliente_contactoTelefono_existente" type="text" value="8596-7420">
                <label
                    for="cliente_contactoTelefono_existente"><?= label('formContacto_telefono'); ?></label>
            </div>
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
        <div id="botonElimnar" title="cliente1-contactos-editar">
            <a href="#"
               class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>
<!-- Fin lista modals-->