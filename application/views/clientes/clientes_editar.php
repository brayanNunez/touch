<div class="col s12 m12 l8">
    <form class="col s12">
        <div class="row">
            <div class="input-field col s12">
                <select>
                    <option value="" disabled><?= label('formCliente_seleccioneUno'); ?></option>
                    <option value="1"><?= label('formCliente_fisica'); ?></option>
                    <option value="2" selected><?= label('formCliente_juridica'); ?></option>
                </select>
                <label for="cliente_tipo"><?= label('formCliente_tipoPersona'); ?></label>
            </div>
            <div class="input-field col s12">
                <input id="cliente_codigo" type="text" value="0001">
                <label for="cliente_codigo"><?= label('formCliente_codigo'); ?></label>
            </div>
            <div class="input-field col s12">
                <input id="cliente_nombre" type="text" value="Dos Pinos">
                <label for="cliente_nombre"><?= label('formCliente_nombre'); ?></label>
            </div>
            <div class="input-field col s12">
                <input id="cliente_id" type="text" value="3-123-468-845">
                <label for="cliente_id"><?= label('formCliente_identificacion'); ?></label>
            </div>
            <div class="input-field col s12">
                <input type="date" class="datepicker" value="12-12-1970">
                <label for=""><?= label('formCliente_fechaNacimiento'); ?></label>
            </div>
            <div class="input-field col s12">
                <input id="cliente_correo" type="email" value="coopedospinos@gmail.com">
                <label for="cliente_correo"><?= label('formCliente_correo'); ?></label>
            </div>
            <div class="input-field col s12">
                <input id="cliente_telefonoMovil" type="text" value="8563-4120">
                <label for="cliente_telefonoMovil"><?= label('formCliente_telefonoMovil'); ?></label>
            </div>
            <div class="input-field col s12">
                <input id="cliente_telefono" type="text" value="2456-8945">
                <label for="cliente_telefono"><?= label('formCliente_telefonoFijo'); ?></label>
            </div>
            <div class="input-field col s12">
                <textarea id="cliente_comentarios" class="materialize-textarea"
                          length="120">Cliente frecuente</textarea>
                <label for="cliente_comentarios"><?= label('formCliente_comentarios'); ?></label>
            </div>
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
                               value="Música,Fútbol"/>
                    </div>
                </div>
                <br>
            </div>

            <div class="inputTag col s12">
                <label for="mediosCliente"><?= label('formCliente_mediosContacto'); ?></label>
                <br>

                <div id="mediosCliente" class="example tags_mediosContacto">
                    <div class="bs-example">
                        <input placeholder="<?= label('formCliente_anadirMedio'); ?>" type="text" value="Radio,TV"/>
                    </div>
                </div>
                <br>
            </div>

            <div class="input-field col s12">
                <label><?= label('formCliente_Contactos'); ?></label>
                <br/>
                <br/>
                <table id="cliente1-contactos" class="table striped">
                    <thead>
                    <tr>
                        <th style="text-align: center;">
                            <input class="filled-in checkbox checkall" type="checkbox" id="checkbox-all"
                                   onclick="toggleChecked(this.checked)"/>
                            <label for="checkbox-all"></label>
                        </th>
                        <th><?= label('formCliente_nombreContacto'); ?></th>
                        <th><?= label('formCliente_correoContacto'); ?></th>
                        <th><?= label('formCliente_opcionesContacto'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td style="text-align: center;">
                            <input type="checkbox" class="filled-in checkbox" id="checkbox_cliente1_contacto1"/>
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
                            <input type="checkbox" class="filled-in checkbox" id="checkbox_cliente1_contacto2"/>
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
                            <input type="checkbox" class="filled-in checkbox" id="checkbox_cliente1_contacto3"/>
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
                    </tbody>
                </table>
                <br/>

                <div>
                    <a href="#agregar" class="btn btn-default modal-trigger"><?= label('formCliente_agregar'); ?></a>

                    <div class="tabla-conAgregar tabla-contactos-cliente">
                        <a id="opciones-seleccionados-delete"
                           class="modal-trigger waves-effect black-text opciones-seleccionados option-delete-elements"
                           style="visibility: hidden;"
                           href="#eliminarElementosSeleccionados" data-toggle="tooltip"
                           title="<?= label('opciones_seleccionadosEliminar') ?>">
                            <i class="mdi-action-delete icono-opciones-varios"></i>
                        </a>
                    </div>
                </div>
                <hr/>
            </div>

            <!--  <div class="input-field col s12">
                 <label><?= label('formCliente_gustos_preferencias'); ?></label>
                 <br />
                 <br />
                 <table class="table striped">
                     <thead>
                     <tr>
                         <th><?= label('formCliente_gustos'); ?></th>
                         <th><?= label('formCliente_estado'); ?></th>
                     </tr>
                     </thead>
                     <tbody>
                     <tr>
                         <td>Preferencia 1</td>
                         <td>
                             <div class="switch">
                                 <label style="position: relative">
                                     <?= label('off'); ?>
                                     <input type="checkbox">
                                     <span class="lever"></span>
                                     <?= label('on'); ?>
                                 </label>
                             </div>
                             <br />
                         </td>
                     </tr>
                     <tr>
                         <td>Preferencia 2</td>
                         <td>
                             <div class="switch">
                                 <label style="position: relative">
                                     <?= label('off'); ?>
                                     <input type="checkbox">
                                     <span class="lever"></span>
                                     <?= label('on'); ?>
                                 </label>
                             </div>
                             <br />
                         </td>
                     </tr>
                     <tr>
                         <td>Preferencia 3</td>
                         <td>
                             <div class="switch">
                                 <label style="position: relative">
                                     <?= label('off'); ?>
                                     <input type="checkbox">
                                     <span class="lever"></span>
                                     <?= label('on'); ?>
                                 </label>
                             </div>
                             <br />
                         </td>
                     </tr>
                     </tbody>
                 </table>
                 <div class="input-field col s12">
                     <div class="input-field col s8">
                         <input id="cliente_nuevoGusto" type="text">
                         <label for="cliente_nuevoGusto"><?= label('formCliente_nuevoGusto'); ?></label>
                     </div>
                     <div class="input-field col s4">
                         <a href="#" class="btn btn-default"><?= label('formCliente_agregarNuevo'); ?></a>
                     </div>
                 </div>
                 <hr />
             </div> -->

            <!--  <div class="input-field col s12">
                 <label><?= label('formCliente_mediosContacto'); ?></label>
                 <br />
                 <br />
                 <table class="table striped">
                     <thead>
                     <tr>
                         <th><?= label('formCliente_medio'); ?></th>
                         <th><?= label('formCliente_estadoMedio'); ?></th>
                     </tr>
                     </thead>
                     <tbody>
                     <tr>
                         <td>Medio 1</td>
                         <td>
                             <div class="switch">
                                 <label style="position: relative">
                                     <?= label('off'); ?>
                                     <input type="checkbox">
                                     <span class="lever"></span>
                                     <?= label('on'); ?>
                                 </label>
                             </div>
                             <br />
                         </td>
                     </tr>
                     <tr>
                         <td>Medio 2</td>
                         <td>
                             <div class="switch">
                                 <label style="position: relative">
                                     <?= label('off'); ?>
                                     <input type="checkbox">
                                     <span class="lever"></span>
                                     <?= label('on'); ?>
                                 </label>
                             </div>
                             <br />
                         </td>
                     </tr>
                     <tr>
                         <td>Medio 3</td>
                         <td>
                             <div class="switch">
                                 <label style="position: relative">
                                     <?= label('off'); ?>
                                     <input type="checkbox">
                                     <span class="lever"></span>
                                     <?= label('on'); ?>
                                 </label>
                             </div>
                             <br />
                         </td>
                     </tr>
                     </tbody>
                 </table>
                 <div class="input-field col s12">
                     <div class="input-field col s8">
                         <input id="cliente_nuevoMedio" type="text">
                         <label for="cliente_nuevoMedio"><?= label('formCliente_nuevoMedio'); ?></label>
                     </div>
                     <div class="input-field col s4">
                         <a href="#" class="btn btn-default"><?= label('formCliente_agregarNuevo'); ?></a>
                     </div>
                 </div>
                 <hr />
                 <br />
             </div> -->

            <!-- <div class="input-field col s12">
                 <select>
                     <option value="" disabled><?= label('formCliente_seleccioneUno'); ?></option>
                     <option value="1">Pedro Perez</option>
                     <option value="2" selected>Juan Martinez</option>
                     <option value="3">Maria Castro</option>
                 </select>
                 <label for="cliente_cotizador"><?= label('formCliente_cotizador'); ?></label>
             </div> -->

            <div class="input-field col s12 envio-formulario">
                <button class="btn waves-effect waves-light right" type="submit"
                        name="action"><?= label('formCliente_editar'); ?>
                </button>
            </div>
        </div>
    </form>
</div>

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
<div id="editarContacto" class="modal">
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
        <div id="botonElimnar" title="cliente1-contactos">
            <a href="#"
               class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>
<!-- Fin lista modals-->