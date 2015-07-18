<!-- START CONTENT  -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?=label('tituloFormularioUsuarioEditar');?></h1>
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
                                            <input id="usuario_nombre" type="text" value="Juan">
                                            <label for="usuario_nombre"><?=label('formUsuario_nombre');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="usuario_correo" type="email" value="juan@gmail.com">
                                            <label for="usuario_correo"><?=label('formUsuario_correo');?></label>
                                        </div>

                                        <div class="input-field col s12">
                                            <label><?=label('formUsuario_roles');?></label>
                                            <br />
                                            <br />
                                            <table class="table striped">
                                                <thead>
                                                    <tr>
                                                        <th><?=label('formUsuario_rol');?></th>
                                                        <th><?=label('formUsuario_rolEstado');?></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><?=label('formUsuario_rolAdministrador')?></td>
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
                                                        <td><?=label('formUsuario_rolAprobador')?></td>
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
                                                        <td><?=label('formUsuario_rolCotizador')?></td>
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
                                                        <td><?=label('formUsuario_rolContador')?></td>
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
                                            <hr />
                                            <br />
                                        </div>

                                        <div class="input-field col s12">
                                            <input id="usuario_nombreUsuario" type="text" value="juan_456789">
                                            <label for="usuario_nombreUsuario"><?=label('formUsuario_nombreUsuario');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="usuario_contrasena" type="password" value="123456">
                                            <label for="usuario_contrasena"><?=label('formUsuario_contrasena');?></label>
                                        </div>

                                        <div class="file-field col s12">
                                            <br />
                                            <label for="usuario_fotografia"><?=label('formUsuario_fotografia');?></label>
                                            <div class="file-field input-field col s12">
                                                <input class="file-path validate" type="text" value="imagen.jpg"/>
                                                <div class="btn" data-toggle="tooltip" title="<?=label('tooltip_examinar')?>">
                                                    <span><i class="mdi-action-search"></i></span>
                                                    <input type="file" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-field col s12 envio-formulario">
                                            <button class="btn waves-effect waves-light right" type="submit" name="action"><?=label('formUsuario_editar');?>
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
<div id="eliminar" class="modal">
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
<div id="editar" class="modal">
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
<!-- Fin lista modals -->