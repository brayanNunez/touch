<div class="col s12">
    <form class="col s12">
        <div class="row">

            <div class="col s12">
                <div class="col s2 m2 l2">
                    <div class="cliente-ver-logo" style="margin: 5px 0;">
                        <a onclick="mostrarCambioImagen();" title="Cambiar imagen" style="cursor:pointer;">
                            <img src="<?= base_url().'files/usuario.jpg'; ?>" />
                        </a>
                    </div>
                </div>
                <div class="col s10 m10 l10">
                    <div id="input-cambio-imagen" style="display: none;">
                        <div class="file-field col s8 m8 l8">
                            <br/>
                            <label for="usuario_fotografia"><?= label('formUsuario_fotografia'); ?></label>

                            <div class="file-field input-field col s12">
                                <input class="file-path validate" type="text" value="usuario.jpg"/>
                                <div class="btn" data-toggle="tooltip" title="<?= label('tooltip_examinar') ?>">
                                    <span><i class="mdi-action-search"></i></span>
                                    <input type="file"/>
                                </div>
                            </div>
                        </div>
                        <div class="col s4 m4 l4">
                            <a class="btn" style="float: right; width: 100%; background-color: red;"
                               onclick="quitarCambioImagen();">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div style="margin-top: 15px;">
                <div class="input-field col s12 m4 l4">
                    <input id="usuario_apellido1" type="text" value="Perez">
                    <label for="usuario_apellido1"><?= label('formUsuario_apellido1'); ?></label>
                </div>
                <div class="input-field col s12 m4 l4">
                    <input id="usuario_apellido2" type="text" value="Pereira">
                    <label for="usuario_apellido2"><?= label('formUsuario_apellido2'); ?></label>
                </div>
                <div class="input-field col s12 m4 l4">
                    <input id="usuario_nombre" type="text" value="Juan">
                    <label for="usuario_nombre"><?= label('formUsuario_nombre'); ?></label>
                </div>
            </div>

            <div class="input-field col s12">
                <input id="usuario_correo" type="email" value="juan@gmail.com">
                <label for="usuario_correo"><?= label('formUsuario_correo'); ?></label>
            </div>

            <div class="input-field col s12">
                <label style="font-size: 0.8rem; top: 0;"><?= label('formUsuario_roles'); ?></label>
                <br>
                <table class="table striped">
                    <thead>
                    <tr>
                        <th><?= label('formUsuario_rol'); ?></th>
                        <th><?= label('formUsuario_rolEstado'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?= label('formUsuario_rolAdministrador') ?></td>
                        <td>
                            <div class="switch">
                                <label style="position: relative">
                                    <?= label('off'); ?>
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                    <?= label('on'); ?>
                                </label>
                            </div>
                            <br/>
                        </td>
                    </tr>
                    <tr>
                        <td><?= label('formUsuario_rolAprobador') ?></td>
                        <td>
                            <div class="switch">
                                <label style="position: relative">
                                    <?= label('off'); ?>
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                    <?= label('on'); ?>
                                </label>
                            </div>
                            <br/>
                        </td>
                    </tr>
                    <tr>
                        <td><?= label('formUsuario_rolCotizador') ?></td>
                        <td>
                            <div class="switch">
                                <label style="position: relative">
                                    <?= label('off'); ?>
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                    <?= label('on'); ?>
                                </label>
                            </div>
                            <br/>
                        </td>
                    </tr>
                    <tr>
                        <td><?= label('formUsuario_rolContador') ?></td>
                        <td>
                            <div class="switch">
                                <label style="position: relative">
                                    <?= label('off'); ?>
                                    <input type="checkbox">
                                    <span class="lever"></span>
                                    <?= label('on'); ?>
                                </label>
                            </div>
                            <br/>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <hr/>
            </div>

            <div class="col s12" style="padding: 10px;">
                <a class="btn btn-default" onclick="mostrarcambioContrasena();"><?= label('formUsuario_contrasenaCambio'); ?></a>
                <div id="cambio-contrasena" style="display: none; margin: 15px 30px;">
                    <div class="input-field col s12">
                        <input id="cambio_contrasena_vieja" type="password">
                        <label for="cambio_contrasena_vieja"><?= label('formUsuario_contrasenaVieja'); ?></label>
                    </div>
                    <div class="input-field col s12">
                        <input id="cambio_contrasena_nueva" type="password">
                        <label for="cambio_contrasena_nueva"><?= label('formUsuario_contrasenaNueva'); ?></label>
                    </div>
                    <div class="input-field col s12">
                        <input id="cambio_contrasena_confirmar" type="password">
                        <label for="cambio_contrasena_confirmar"><?= label('formUsuario_contrasenaConfirmar'); ?></label>
                    </div>
                    <div class="input-field col s12">
                        <div class="col s10 m10 l10">
                            <a class="btn btn-default" style="display: block; margin: 0 auto; width: 300px;"
                               onclick="quitarcambioContrasena();">Guardar cambios</a>
                        </div>
                        <div class="col s2 m2 l2">
                            <a class="btn" style="float: right; width: 150px; background-color: red;"
                               onclick="quitarcambioContrasena();">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="input-field col s12 envio-formulario" style="margin-bottom: 30px;">
                <button class="btn waves-effect waves-light right" type="submit" id="guardar-cambios-usuario"
                        name="action"><?= label('formUsuario_editar'); ?></button>
            </div>
        </div>
    </form>
</div>

<script>
    function mostrarCambioImagen() {
        document.getElementById('input-cambio-imagen').style.display = 'block';
    }
    function quitarCambioImagen() {
        document.getElementById('input-cambio-imagen').style.display = 'none';
    }
    function mostrarcambioContrasena() {
        document.getElementById('cambio-contrasena').style.display = 'block';
        document.getElementById('guardar-cambios-usuario').style.display = 'none';
    }
    function quitarcambioContrasena() {
        document.getElementById('cambio-contrasena').style.display = 'none';
        document.getElementById('guardar-cambios-usuario').style.display = 'block';
    }
</script>

<!-- lista modals -->