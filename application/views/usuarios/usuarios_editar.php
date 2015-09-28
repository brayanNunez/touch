<div class="col s12">
    <?php $this->load->helper('form'); ?>
    <?php
    $primerApellido = '';
    $segundoApellido = '';
    $nombre = '';
    $correo = '';
    $rolAdministrador = '';
    $rolAprobador = '';
    $rolCotizador = '';
    $rolContador = '';
    $contrasena = '';
    $accion = base_url().'usuarios/modificar/';
    $ruta = base_url().'files/';
    if (isset($resultado)) {
        $accion .= encryptIt($resultado['idUsuario']);
        $primerApellido = $resultado['primerApellido'];
        $segundoApellido = $resultado['segundoApellido'];
        $nombre = $resultado['nombre'];
        $correo = $resultado['correo'];
        $rolAdministrador = $resultado['roles']['rolAdministrador'];
        $rolAprobador = $resultado['roles']['rolAprobador'];
        $rolCotizador = $resultado['roles']['rolCotizador'];
        $rolContador = $resultado['roles']['rolContador'];
        $contrasena = $resultado['contrasena'];
        if(isset($resultado['fotografia'])) {
            $ruta .= $resultado['idEmpresa'].'/'.$resultado['idUsuario'].'/profile_picture_'.$resultado['idUsuario'].'.'.$resultado['fotografia'];
        } else {
            $ruta.= 'default-user-image.png';
        }
    }
    ?>
    <?php echo form_open_multipart($accion, array('id' => 'form_usuario', 'method' => 'POST', 'class' => 'col s12')); ?>
        <div class="row">
            <div class="col s12" style="position: relative;margin-top: 15px;min-height: 150px;">
                <div class="col s12 m5 l3">
                    <div class="cliente-ver-logo" style="margin: 5px 0;">
                        <a onclick="mostrarCambioImagen();" title="Cambiar imagen" style="cursor:pointer;">
                            <img alt="Imagen de perfil del usuario" src="<?= $ruta; ?>" />
                        </a>
                    </div>
                </div>
                <div id="input-cambio-imagen" class="col s12 m17 l9" style="display: none;bottom: 0;position: absolute;right: 0;padding: 20px 30px;background-color: gainsboro;">
                    <div  style="">
                        <div class="file-field col s10 m10 l10">
                            <label for="usuario_fotografia"><?= label('formUsuario_fotografia'); ?></label>

                            <div class="file-field input-field col s12">
                                <br/>
                                <input class="file-path" type="text" readonly/>

                                <div class="btn" data-toggle="tooltip" title="<?= label('tooltip_examinar') ?>">
                                    <span><i class="mdi-action-search"></i></span>
                                    <input style="padding-right: 400px;" id="userfile" type="file" name="userfile"
                                           accept="image/jpeg,image/png"/>
                                </div>
                            </div>
                        </div>
                        <div class="col s2 m2 l2">
                            <a class="btn" style="float:right;background-color:red;" onclick="quitarCambioImagen();">X</a>
                        </div>
                    </div>
                </div>
            </div>

            <div style="margin-top: 15px;padding: 0;" class="col s12">
                <div class="input-field col s12 m4 l4">
                    <input id="usuario_primeroApellido" type="text" name="usuario_primeroApellido" value="<?= $primerApellido; ?>">
                    <label for="usuario_primeroApellido"><?= label('formUsuario_apellido1'); ?></label>
                </div>
                <div class="input-field col s12 m4 l4">
                    <input id="usuario_segundoApellido" type="text" name="usuario_segundoApellido" value="<?= $segundoApellido; ?>">
                    <label for="usuario_segundoApellido"><?= label('formUsuario_apellido2'); ?></label>
                </div>
                <div class="input-field col s12 m4 l4">
                    <input id="usuario_nombre" type="text" name="usuario_nombre" value="<?= $nombre; ?>">
                    <label for="usuario_nombre"><?= label('formUsuario_nombre'); ?></label>
                </div>
            </div>

            <div class="input-field col s12">
                <input id="usuario_correo" type="email" name="usuario_correo" value="<?= $correo; ?>">
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
                                    <input type="checkbox" name="usuario_rolAdministrador" <?= ' '.$rolAdministrador; ?> >
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
                                    <input type="checkbox" name="usuario_rolAprobador" <?= ' '.$rolAprobador; ?>>
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
                                    <input type="checkbox" name="usuario_rolCotizador" <?= ' '.$rolCotizador; ?>>
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
                                    <input type="checkbox" name="usuario_rolContador" <?= ' '.$rolContador; ?>>
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

            <div class="input-field col s12 envio-formulario" style="margin-bottom: 30px;">
                <button class="btn waves-effect waves-light right" type="submit" id="guardar-cambios-usuario"
                        name="action"><?= label('formUsuario_editar'); ?></button>
            </div>
        </div>
    </form>

    <div class="col s12" style="padding: 0 10px 30px;">
        <a class="btn btn-default" onclick="mostrarcambioContrasena();"><?= label('formUsuario_contrasenaCambio'); ?></a>
        <form id="usuario-cambio-contrasena">
            <div class="col s12" id="cambio-contrasena" style="display: none;margin: 15px 0;background-color:gainsboro;padding-top: 15px;padding-bottom: 15px;">
                <div style="">
                    <div class="input-field col s12">
                        <input id="usuario_contrasena_actual" type="password" name="usuario_contrasena_actual">
                        <label for="usuario_contrasena_actual"><?= label('formUsuario_contrasenaVieja'); ?></label>
                    </div>
                    <div class="input-field col s12">
                        <input id="usuario_contrasena_nueva" type="password" name="usuario_contrasena_nueva">
                        <label for="usuario_contrasena_nueva"><?= label('formUsuario_contrasenaNueva'); ?></label>
                    </div>
                    <div class="input-field col s12">
                        <input id="usuario_contrasena_confirmar" type="password" name="usuario_contrasena_confirmar">
                        <label for="usuario_contrasena_confirmar"><?= label('formUsuario_contrasenaConfirmar'); ?></label>
                    </div>
                    <div class="input-field col s12">
                        <div class="col s10 m10 l10">
                            <button class="btn btn-default" type="submit" name="cambiar" style="display: block; margin: 0 auto; width: 300px;"
                               onclick="">Guardar cambios</button>
                        </div>
                        <div class="col s2 m2 l2">
                            <a class="btn" style="float: right; width: 150px; background-color: red;"
                               onclick="quitarcambioContrasena();">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
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
//        document.getElementById('guardar-cambios-usuario').style.display = 'none';
    }
    function quitarcambioContrasena() {
        document.getElementById('cambio-contrasena').style.display = 'none';
//        document.getElementById('guardar-cambios-usuario').style.display = 'block';
    }
</script>

<!-- lista modals -->