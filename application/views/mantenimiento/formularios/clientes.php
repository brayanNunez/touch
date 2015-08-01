START CONTENT  -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?=label('tituloFormularioCliente');?></h1>

                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--start container-->
    <div class="container">
        <div id="chart-dashboard">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div id="submit-button" class="section">
                        <div class="row">
                            <div class="col s12 m12 l8">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select>
                                                <option value="" selected disabled><?=label('formCliente_seleccioneUno');?></option>
                                                <option value="1"><?=label('formCliente_fisica');?></option>
                                                <option value="2"><?=label('formCliente_juridica');?></option>
                                            </select>
                                            <label for="cliente_tipo"><?=label('formCliente_tipoPersona');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="cliente_codigo" type="text">
                                            <label for="cliente_codigo"><?=label('formCliente_codigo');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="cliente_nombre" type="text">
                                            <label for="cliente_nombre"><?=label('formCliente_nombre');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="cliente_id" type="text">
                                            <label for="cliente_id"><?=label('formCliente_identificacion');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input type="date" class="datepicker">
                                            <label for=""><?=label('formCliente_fechaNacimiento');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="cliente_correo" type="email">
                                            <label for="cliente_correo"><?=label('formCliente_correo');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="cliente_telefonoMovil" type="text">
                                            <label for="cliente_telefonoMovil"><?=label('formCliente_telefonoMovil');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="cliente_telefono" type="text">
                                            <label for="cliente_telefono"><?=label('formCliente_telefonoFijo');?></label>
                                        </div>

                                        <div class="input-field col s12">
                                            <textarea id="cliente_comentarios" class="materialize-textarea" length="120"></textarea>
                                            <label for="cliente_comentarios"><?=label('formCliente_comentarios');?></label>
                                        </div>
                                        <div class="file-field col s12">
                                            <br />
                                            <label for="cliente_archivo"><?=label('formCliente_archivo');?></label>
                                            <div class="file-field input-field col s12">
                                                <input class="file-path validate" type="text"/>
                                                <div class="btn" data-toggle="tooltip" title="<?=label('tooltip_examinar')?>">
                                                    <span><i class="mdi-action-search"></i></span>
                                                    <input type="file" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-field col s12">
                                            <label><?=label('formCliente_Contactos');?></label>
                                            <br />
                                            <br />
                                            <table class="table striped">
                                                <thead>
                                                    <tr>
                                                        <th><?=label('formCliente_nombreContacto');?></th>
                                                        <th><?=label('formCliente_correoContacto');?></th>
                                                        <th><?=label('formCliente_opcionesContacto');?></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Maria Rodriguez</td>
                                                        <td>maria@gmail.com</td>
                                                        <td>
                                                            <!--                                                        <a class="modal-trigger" href="#editarContacto">--><?//=label('editar');?><!--</a>-->
                                                            <a class="modal-trigger icono-edicion" href="#editarContacto" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                                <i class="mdi-editor-mode-edit"></i>
                                                            </a>
                                                            <!--                                                            <a class="modal-trigger" href="#eliminarContacto">--><?//=label('eliminar');?><!--</a>-->
                                                            <a class="modal-trigger icono-edicion" href="#eliminarContacto" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                                <i class="mdi-action-delete"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Juan Perez</td>
                                                        <td>juan@gmail.com</td>
                                                        <td>
                                                            <!--                                                        <a class="modal-trigger" href="#editarContacto">--><?//=label('editar');?><!--</a>-->
                                                            <a class="modal-trigger icono-edicion" href="#editarContacto" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                                <i class="mdi-editor-mode-edit"></i>
                                                            </a>
                                                            <!--                                                            <a class="modal-trigger" href="#eliminarContacto">--><?//=label('eliminar');?><!--</a>-->
                                                            <a class="modal-trigger icono-edicion" href="#eliminarContacto" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                                <i class="mdi-action-delete"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jose Mora</td>
                                                        <td>jose@gmail.com</td>
                                                        <td>
                                                            <!--                                                        <a class="modal-trigger" href="#editarContacto">--><?//=label('editar');?><!--</a>-->
                                                            <a class="modal-trigger icono-edicion" href="#editarContacto" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                                <i class="mdi-editor-mode-edit"></i>
                                                            </a>
                                                            <!--                                                            <a class="modal-trigger" href="#eliminarContacto">--><?//=label('eliminar');?><!--</a>-->
                                                            <a class="modal-trigger icono-edicion" href="#eliminarContacto" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                                <i class="mdi-action-delete"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <br />
                                            <a href="#agregar" class="btn btn-default modal-trigger"><?=label('formCliente_agregar');?></a>
                                            <hr />
                                        </div>
                                        <div class="input-field col s12">
                                            <label><?=label('formCliente_gustos_preferencias');?></label>
                                            <br />
                                            <br />
                                            <table class="table striped">
                                                <thead>
                                                    <tr>
                                                        <th><?=label('formCliente_gustos');?></th>
                                                        <th><?=label('formCliente_estado');?></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Preferencia 1</td>
                                                        <td>
                                                            <div class="switch">
                                                                <label style="position: relative">
                                                                    <?=label('off');?>
                                                                    <input type="checkbox">
                                                                    <span class="lever"></span>
                                                                    <?=label('on');?>
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
                                                                    <?=label('off');?>
                                                                    <input type="checkbox">
                                                                    <span class="lever"></span>
                                                                    <?=label('on');?>
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
                                                                    <?=label('off');?>
                                                                    <input type="checkbox">
                                                                    <span class="lever"></span>
                                                                    <?=label('on');?>
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
                                                    <label for="cliente_nuevoGusto"><?=label('formCliente_nuevoGusto');?></label>
                                                </div>
                                                <div class="input-field col s4">
                                                    <a href="#" class="btn btn-default"><?=label('formCliente_agregarNuevo');?></a>
                                                </div>
                                            </div>
                                            <hr />
                                        </div>
                                        <div class="input-field col s12">
                                            <label><?=label('formCliente_mediosContacto');?></label>
                                            <br />
                                            <br />
                                            <table class="table striped">
                                                <thead>
                                                    <tr>
                                                        <th><?=label('formCliente_medio');?></th>
                                                        <th><?=label('formCliente_estadoMedio');?></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Medio 1</td>
                                                        <td>
                                                            <div class="switch">
                                                                <label style="position: relative">
                                                                    <?=label('off');?>
                                                                    <input type="checkbox">
                                                                    <span class="lever"></span>
                                                                    <?=label('on');?>
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
                                                                    <?=label('off');?>
                                                                    <input type="checkbox">
                                                                    <span class="lever"></span>
                                                                    <?=label('on');?>
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
                                                                    <?=label('off');?>
                                                                    <input type="checkbox">
                                                                    <span class="lever"></span>
                                                                    <?=label('on');?>
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
                                                    <label for="cliente_nuevoMedio"><?=label('formCliente_nuevoMedio');?></label>
                                                </div>
                                                <div class="input-field col s4">
                                                    <a href="#" class="btn btn-default"><?=label('formCliente_agregarNuevo');?></a>
                                                </div>
                                            </div>
                                            <hr />
                                            <br />
                                        </div>
                                        <!-- <div class="input-field col s12">
                                            <select>
                                                <option value="" disabled selected><?=label('formCliente_seleccioneUno');?></option>
                                                <option value="1">Pedro Perez</option>
                                                <option value="2">Juan Martinez</option>
                                                <option value="3">Maria Castro</option>
                                            </select>
                                            <label for="cliente_cotizador"><?=label('formCliente_cotizador');?></label>
                                        </div> -->
                                        
                                        <div class="inputTag col s12">
                                            <label for="vendedoresCliente"><?=label('formCliente_cotizador');?></label>
                                            <br>
                                            <div id="vendedoresCliente" class="example example_objects_as_tags">
                                              <div class="bs-example">
                                                <input placeholder="<?=label('formCliente_anadirVendedor');?>" type="text"  />
                                              </div>
                                        </div>

                                        <div class="input-field col s12 envio-formulario">
                                            <button class="btn waves-effect waves-light right" type="submit" name="action"><?=label('formCliente_enviar');?>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end container-->
</section>
<!-- END CONTENT


<!-- lista modals -->
<div id="eliminarContacto" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?=label('confirmarEliminarContacto');?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<div id="editarContacto" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <input id="client_code" type="text" value="Maria Rodriguez">
            <label for="client_code"><?=label('formCliente_nombreContacto');?></label>
        </div>
        <div class="input-field col s12">
            <input id="client_code" type="text" value="maria@gmail.com">
            <label for="client_code"><?=label('formCliente_correoContacto');?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<div id="agregar" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <input id="client_code" type="text" value="">
            <label for="client_code"><?=label('formCliente_nombreContacto');?></label>
        </div>
        <div class="input-field col s12">
            <input id="client_code" type="text" value="">
            <label for="client_code"><?=label('formCliente_correoContacto');?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<!-- Fin lista modals