<!-- START CONTENT  -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloFormularioUsuario'); ?></h1>
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
                            <div class="col s12">
<!--                                <form id="form_usuario" class="col s12" action="--><?//= base_url() ?><!--usuarios/insertar" method="POST" >-->
                                <?php $this->load->helper('form'); ?>
                                <?php echo form_open_multipart(base_url().'usuarios/insertar',
                                    array('id' => 'form_usuario', 'method' => 'POST', 'class' => 'col s12')); ?>
                                    <div class="row">
                                        <div>
                                            <div class="input-field col s12 m4 l4">
                                                <input id="usuario_primeroApellido" type="text" name="usuario_primeroApellido">
                                                <label for="usuario_primeroApellido"><?= label('formUsuario_apellido1'); ?></label>
                                            </div>
                                            <div class="input-field col s12 m4 l4">
                                                <input id="usuario_segundoApellido" type="text" name="usuario_segundoApellido">
                                                <label for="usuario_segundoApellido"><?= label('formUsuario_apellido2'); ?></label>
                                            </div>
                                            <div class="input-field col s12 m4 l4">
                                                <input id="usuario_nombre" type="text" name="usuario_nombre">
                                                <label for="usuario_nombre"><?= label('formUsuario_nombre'); ?></label>
                                            </div>
                                        </div>

                                        <div class="input-field col s12">
                                            <input id="usuario_correo" type="email" name="usuario_correo">
                                            <label for="usuario_correo"><?= label('formUsuario_correo'); ?></label>
                                        </div>

                                        <div class="input-field col s12">
                                            <input id="usuario_contrasena" type="password" name="usuario_contrasena">
                                            <label for="usuario_contrasena"><?= label('formUsuario_contrasena'); ?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="usuario_contrasenaConfirm" type="password" name="usuario_contrasenaConfirm">
                                            <label
                                                for="usuario_contrasenaConfirm"><?= label('formUsuario_contrasenaConfirmar'); ?></label>
                                        </div>

                                        <div class="input-field col s12">
                                            <label style="top: 0;"><?= label('formUsuario_roles'); ?></label>
                                            <br/>
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
                                                                <input type="checkbox" name="usuario_rolAdministrador">
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
                                                                <input type="checkbox" name="usuario_rolAprobador">
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
                                                                <input type="checkbox" name="usuario_rolCotizador">
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
                                                                <input type="checkbox" name="usuario_rolContador">
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

                                        <div class="col s12">
                                            <div class="file-field col s12 m7 l9" style="margin-top:45px;">
                                                <label for="usuario_fotografia"><?= label('formUsuario_fotografia'); ?></label>

                                                <div class="file-field input-field col s12">
                                                    <input class="file-path" type="text" readonly/>

                                                    <div class="btn" data-toggle="tooltip" title="<?= label('tooltip_examinar') ?>">
                                                        <span><i class="mdi-action-search"></i></span>
                                                        <input style="padding-right: 800px;" id="userfile" type="file" name="userfile"
                                                            accept="image/jpeg,image/png"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col s12 m5 l3">
                                                <figure>
                                                    <img id="imagen_seleccionada" style="width: 100%;border: 1px solid black;"
                                                         src="<?= base_url(); ?>files/default-user-image.png">
                                                </figure>
                                            </div>
                                        </div>

                                        <div class="input-field col s12 envio-formulario">
                                            <button class="btn waves-effect waves-light right" type="submit"
                                                    name="upload"><?= label('formUsuario_enviar'); ?>
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

    <?php
    $this->load->view('layout/default/menu-crear.php');
    ?>

</section>

<div style="display: none">
    <a id="linkModalGuardado" href="#transaccionCorrecta" class="btn btn-default modal-trigger"></a>
    <a id="linkModalError" href="#transaccionIncorrecta" class="btn btn-default modal-trigger"></a>
</div>
<!-- END CONTENT-->

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
            readURL(this);
        }
    });
</script>

<script>
    function validacionCorrecta_Usuarios(){
        $.ajax({
            data: {usuario_correo :  $('#usuario_correo').val()},
            url:   '<?=base_url()?>usuarios/existeCorreo',
            type:  'post',
            success:  function (response) {
                switch(response){
                    case '0':
                        $('#linkModalError').click();//error al ir a verificar identificación
                        break;
                    case '1':
                        alert('<?= label("empleadoIdentificacionExistente"); ?>');
                        $('#usuario_correo').focus();
                        break;
                    case '2':
                        var formulario = $('#form_usuario');
                        var formData = new FormData(formulario[0]);
                        var url = formulario.attr('action');
                        var method = formulario.attr('method');
                        $.ajax({
                            type: method,
                            url: url,
                            data: formData,
                            success: function(response) {
                                if (response == 0) {
                                    $('#linkModalError').click();
                                } else {
                                    $('#linkModalGuardado').click();
                                    $('form')[0].reset();
                                    $('#imagen_seleccionada').attr('src', '<?= base_url(); ?>files/default-user-image.png');
                                }
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                        break;
                }
            }
        });
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

<div id="eliminar" class="modal">
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
<div id="editar" class="modal">
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
<!-- Fin lista modals -->