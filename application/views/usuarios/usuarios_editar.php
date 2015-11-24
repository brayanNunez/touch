<div class="col s12">
    <?php $this->load->helper('form'); ?>
    <?php
    $idUsuario = '';
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
    $ruta = base_url().'files/empresas/';
    if (isset($resultado)) {
        $idUsuario = encryptIt($resultado['idUsuario']);
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

        if($resultado['fotografia'] != '' && $resultado['fotografia'] != null && $resultado['fotografia'] != 'profile_picture_'.$resultado['idUsuario'].'.') {
            $ruta .= $resultado['idEmpresa'].'/usuarios/'.$resultado['idUsuario'].'/'.$resultado['fotografia'];
        } else {
            $ruta = base_url().'files/default-user-image.png';
        }
    } else {
        $ruta = base_url().'files/default-user-image.png';
    }
    ?>
    <?php echo form_open_multipart($accion, array('id' => 'form_usuario_editar', 'method' => 'POST', 'class' => 'col s12')); ?>
        <div class="row">
            <div class="col s12" style="position: relative;margin-top: 15px;min-height: 150px;">
                <div class="col s12 m5 l3">
                    <div id="imagen-usuario-editar" class="cliente-ver-logo" style="margin: 5px 0;">
                        <a class="modal-trigger" href="#cambio-imagen" title="Cambiar imagen" style="position: relative; cursor:pointer;">
                            <img id="imagen_perfil_usuario" alt="Imagen de perfil del usuario" src="<?= $ruta; ?>" style="position:relative;height: 200px;width: 200px;" />
                            <img id="icon-image-edit" src="<?= base_url() ?>files/edit-image.png">
                        </a>
                    </div>
                </div>
                <div class="col s12 m17 l9" style="padding: 30px 0;">
                    <div class="input-field col s12">
                        <input id="usuario_correo" type="email" name="usuario_correo" value="<?= $correo; ?>">
                        <label for="usuario_correo"><?= label('formUsuario_correo'); ?></label>
                    </div>

                    <div class="col s12" style="margin: 10px 0;">
                        <a id="btn-cambio-contresena" class="btn btn-default modal-trigger" href="#cambio-contrasena"><?= label('formUsuario_contrasenaCambio'); ?></a>
                    </div>
                </div>
            </div>

            <div style="margin-top: 15px;padding: 0;" class="col s12">
                <div class="input-field col s12 m4 l4">
                    <input id="usuario_nombre" type="text" name="usuario_nombre" value="<?= $nombre; ?>">
                    <label for="usuario_nombre"><?= label('formUsuario_nombre'); ?></label>
                </div>
                <div class="input-field col s12 m4 l4">
                    <input id="usuario_primerApellido" type="text" name="usuario_primerApellido" value="<?= $primerApellido; ?>">
                    <label for="usuario_primerApellido"><?= label('formUsuario_apellido1'); ?></label>
                </div>
                <div class="input-field col s12 m4 l4">
                    <input id="usuario_segundoApellido" type="text" name="usuario_segundoApellido" value="<?= $segundoApellido; ?>">
                    <label for="usuario_segundoApellido"><?= label('formUsuario_apellido2'); ?></label>
                </div>
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
                                    <input type="checkbox" name="usuario_rolAdministrador" <?= ' '.$rolAdministrador; ?> value="1" >
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
                                    <input type="checkbox" name="usuario_rolAprobador" <?= ' '.$rolAprobador; ?> value="2" >
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
                                    <input type="checkbox" name="usuario_rolCotizador" <?= ' '.$rolCotizador; ?> value="3" >
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
                                    <input type="checkbox" name="usuario_rolContador" <?= ' '.$rolContador; ?> value="4" >
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
</div>

<div style="display: none">
    <a id="linkModalEditado" href="#transaccionCorrecta" class="btn btn-default modal-trigger"></a>
    <a id="linkModalError" href="#transaccionIncorrecta" class="btn btn-default modal-trigger"></a>
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
    }
    function quitarcambioContrasena() {
        document.getElementById('cambio-contrasena').style.display = 'none';
    }
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

<script>
    function validacionCorrecta_UsuariosEditar(){
        var miCorreoActual = "<?= $correo; ?>";
        var correoNuevo = $('#usuario_correo').val();

        if (miCorreoActual == correoNuevo) {
            var url = $('#form_usuario_editar').attr('action');
            var method = $('#form_usuario_editar').attr('method');
            $.ajax({
                type: method,
                url: url,
                data: $('#form_usuario_editar').serialize(),
                success: function(response)
                {
                    if (response == 0) {
                        $('#linkModalError').click();
                    } else {
                        $('#linkModalEditado').click();
                    }
                }
            });
        } else {
            $.ajax({
                data: {usuario_correo : correoNuevo},
                url:   '<?=base_url()?>usuarios/existeCorreo',
                type:  'post',
                success:  function (response) {
                    switch(response){
                        case '0':
                            $('#linkModalError').click();
                            break;
                        case '1':
                            alert('<?= label("empleadoIdentificacionExistente"); ?>');
                            $('#usuario_correo').focus();
                            break;
                        case '2':
                            var url = $('#form_usuario_editar').attr('action');
                            var method = $('#form_usuario_editar').attr('method');
                            $.ajax({
                                type: method,
                                url: url,
                                data: $('#form_usuario_editar').serialize(),
                                success: function(response)
                                {
                                    if (response == 0) {
                                        $('#linkModalError').click();
                                    } else {
                                        $('#linkModalEditado').click();
                                    }
                                }
                            });

                            break;
                    }
                }
            });

        };
    }
    function validacionCorrecta_Contrasena(){
        var formPW = $('#usuario-cambio-contrasena');
        $.ajax({
            data: formPW.serialize(),
            url: formPW.attr('action'),
            type: formPW.attr('method'),
            success: function (response) {
                switch (response) {
                    case '0':
                        alert('<?= label('usuarioErrorCambioContrasena'); ?>');//error al ir a verificar identificaci�n
                        break;
                    case '1':
                        alert('<?= label('usuarioExitoCambioContrasena'); ?>');
                        formPW.find('input:password').val(null);
                        break;
                    case '2':
                        alert('<?= label('usuarioErrorContrasenaActual'); ?>');
                        $('#usuario_contrasena_actual').focus();
                        break;
                    case '3':
                        alert('<?= label('usuarioErrorContrasenaConfirmar'); ?>');
                        $('#usuario_contrasena_confirmar').focus();
                        break;
                }
            }
        });
    }
    function validacionCorrecta_Imagen(){
        var formPW = $('#usuario-cambio-imagen');
        $.ajax({
            data: new FormData(formPW[0]),
            url: formPW.attr('action'),
            type: formPW.attr('method'),
            success:  function (response) {
                if(response == 0) {
                    alert('<?= label('usuarioErrorCambioImagen'); ?>');//error al ir a verificar identificaci�n
                } else {
                    alert('<?= label('usuarioExitoCambioEmagen'); ?>');
                    d = new Date();
                    $('#imagen_seleccionada').attr('src', response);
                    $('#imagen_perfil_usuario').attr('src', response);
                    $('#imagen_perfil_usuario_ver').attr('src', response);
                    formPW.find('input:file,input:text').val('');
                }
            },
            cache: false,
            contentType: false,
            processData: false
        });
    }
</script>

<div id="cambio-contrasena" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <form id="usuario-cambio-contrasena" method="post" action="<?= base_url(); ?>usuarios/cambio_contrasena/<?= $idUsuario; ?>">
            <div class="col s12" style="padding-bottom: 15px;">
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
                        <div class="col s12">
                            <button class="btn btn-default" type="submit" name="cambiar" style="display: block; margin: 0 auto; width: 300px;"
                                    id="cambiar-contrasena-usuario" onclick="">Guardar cambios</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div id="cambio-imagen" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <?php echo form_open_multipart(base_url().'usuarios/cambio_imagen/'.$idUsuario, array('id' => 'usuario-cambio-imagen', 'method' => 'POST', 'class' => 'col s12')); ?>
            <div class="col s12" style="padding: 0;">
                <div class="file-field col s12 m7 l9" style="padding: 0;">
                    <label for="usuario_fotografia"><?= label('formUsuario_fotografia'); ?></label>

                    <div class="file-field input-field col s12" style="padding: 0;">
                        <input style="margin-left: 18% !important;width: 80% !important;"
                               name="usuario_fotografia" class="file-path" type="text" readonly/>

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
<!-- Fin lista modals -->

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imagen_seleccionada').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#userfile").change(function(){
        var file = this.files[0];
        var name = file.name;
        var size = file.size;
        var type = file.type;
        var t = type.split('/');
        var ext = t.slice(1, 2);
        if(size > 2097150) { //2097152
            alert("<?= label('usuarioErrorTamanoArchivo') ?>");
            document.getElementById('userfile').value = '';
        }
        var valid_ext = ['image/png','image/jpg','image/jpeg'];
        if(valid_ext.indexOf(type)==-1) {
            alert("<?= label('usuarioErrorTipoArchivo') ?>");
            document.getElementById('userfile').value = '';
        }
        if(document.getElementById('userfile').value == ''){
            $('#imagen_seleccionada').attr('src', '<?= base_url(); ?>files/default-user-image.png');
        } else {
            $('#usuario_fotografia').attr('value', ext);
            readURL(this);
        }
    });
</script>
