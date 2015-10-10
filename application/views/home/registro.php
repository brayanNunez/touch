<!-- START CONTENT  -->

<section id="content" class="registro-content">

    <?php
    $tipo_error = '';
    $tipoForm = 1;
    $cedulaT = '';
    $nombreT = '';
    $paisT = '0';
    $provinciaT = '';
    $cantonT = '';
    $domicilioT = '';
    $primerApellidoT = '';
    $segundoApellidoT = '';
    $nombreContactoT = '';
    $correoT = '';
    $correoConfirmT = '';
    $contrasenaT = '';
    $contrasenaConfirmT = '';

    $cedulaE = '';
    $nombreE = '';
    $nombreFantasiaE = '';
    $paisE = '0';
    $provinciaE = '';
    $cantonE = '';
    $domicilioE = '';
    $primerApellidoE = '';
    $segundoApellidoE = '';
    $nombreContactoE = '';
    $correoE = '';
    $correoConfirmE = '';
    $contrasenaE = '';
    $contrasenaConfirmE = '';
    if (isset($tipo) && isset($datos) && isset($direccion) && isset($usuario) && isset($correoConfirm) && isset($contrasenaConfirm) && isset($error)) {
        $tipo_error = $error;
        if($tipo == 1) {
            $cedulaT = $datos['cedula'];
            $nombreT = $datos['nombre'];
            $paisT = $direccion['pais'];
            $provinciaT = $direccion['provincia'];
            $cantonT = $direccion['canton'];
            $domicilioT = $direccion['domicilio'];
            $primerApellidoT = $usuario['primerApellido'];
            $segundoApellidoT = $usuario['segundoApellido'];
            $nombreContactoT = $usuario['nombre'];
            $correoT = $usuario['correo'];
            $correoConfirmT = $correoConfirm;
            $contrasenaT = $usuario['contrasena'];
            $contrasenaConfirmT = $contrasenaConfirm;
        } else {
            $tipoForm = 2;
            $cedulaE = $datos['cedula'];
            $nombreE = $datos['nombre'];
            $nombreFantasiaE = $datos['nombreFantasia'];
            $paisE = $direccion['pais'];
            $provinciaE = $direccion['provincia'];
            $cantonE = $direccion['canton'];
            $domicilioE = $direccion['domicilio'];
            $primerApellidoE = $usuario['primerApellido'];
            $segundoApellidoE = $usuario['segundoApellido'];
            $nombreContactoE = $usuario['nombre'];
            $correoE = $usuario['correo'];
            $correoConfirmE = $correoConfirm;
            $contrasenaE = $usuario['contrasena'];
            $contrasenaConfirmE = $contrasenaConfirm;
        }
    }
    ?>

    <!--start container-->
    <div class="container">
        <div id="chart-dashboard">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div id="submit-button" class="section">
                        <div class="row">
                            <div class="col s12 m12 offset-l1 l10">
                                <form id="formulario_registro" class="col s12" action="<?= base_url(); ?>registro/registrar" method="post">

                                    <div class="input-field col s12 m8 l6">
                                        <select id="registro_tipo" name="registro_tipo" onChange="datosRegistro(this)">
                                            <option value="1">Trabajador independiente</option>
                                            <option value="2">Empresa</option>
                                        </select>
                                        <label for="registro_tipo"><?= label('formRegistro_tipo'); ?></label>
                                    </div>

                                    <div id="trabajador_informacion" style="display: block;">
                                        <div class="col s12">
                                            <h5><?= label('tituloPerfil'); ?></h5>
                                        </div>
                                        <div>
                                            <div class="input-field col s12 m12 l6">
                                                <input id="registro_cedulaTrabajador" name="registro_cedulaTrabajador" class="campo-registro" type="text"
                                                       placeholder="<?= label('formPerfil_numeroIdentificacion'); ?>" value="<?= $cedulaT; ?>">
                                            </div>
                                            <div class="input-field col s12 m12 l6">
                                                <input id="registro_nombreEmpresaTrabajador" name="registro_nombreEmpresaTrabajador" class="campo-registro" type="text"
                                                       placeholder="<?= label('formPerfil_nombreArtistico'); ?>" value="<?= $nombreT; ?>">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="input-field col s12 m12 l4">
                                                <input id="registro_nombreTrabajador" name="registro_nombreTrabajador" class="campo-registro" type="text"
                                                       placeholder="<?= label('formPerfil_nombre'); ?>" value="<?= $nombreContactoT; ?>">
                                            </div>
                                            <div class="input-field col s12 m12 l4">
                                                <input id="registro_primerApellidoTrabajador" name="registro_primerApellidoTrabajador" class="campo-registro" type="text"
                                                       placeholder="<?= label('formPerfil_apellido1'); ?>" value="<?= $primerApellidoT; ?>">
                                            </div>
                                            <div class="input-field col s12 m12 l4">
                                                <input id="registro_segundoApellidoTrabajador" name="registro_segundoApellidoTrabajador" class="campo-registro" type="text"
                                                       placeholder="<?= label('formPerfil_apellido2'); ?>" value="<?= $segundoApellidoT; ?>">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="input-field col s12 m12 l6">
                                                <input id="registro_correoTrabajador" name="registro_correoTrabajador" class="campo-registro" type="email"
                                                       placeholder="<?= label('formPerfil_correo'); ?>" value="<?= $correoT; ?>">
                                            </div>
                                            <div class="input-field col s12 m12 l6">
                                                <input id="registro_confirmarCorreoTrabajador" name="registro_confirmarCorreoTrabajador" class="campo-registro" type="email"
                                                       placeholder="<?= label('formPerfil_confCorreo'); ?>" value="<?= $correoConfirmT; ?>">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="input-field col s12 m12 l6">
                                                <input id="registro_contrasenaTrabajador" name="registro_contrasenaTrabajador" class="campo-registro" type="password"
                                                       placeholder="<?= label('formPerfil_contraseña'); ?>" value="<?= $contrasenaT; ?>">
                                            </div>
                                            <div class="input-field col s12 m12 l6">
                                                <input id="registro_confirmarContrasenaTrabajador" name="registro_confirmarContrasenaTrabajador" class="campo-registro" type="password"
                                                       placeholder="<?= label('formPerfil_confContraseña'); ?>" value="<?= $contrasenaConfirmT; ?>">
                                            </div>
                                        </div>
                                        <div id="trabajador_direccion">
                                            <div class="col s12">
                                                <h5><?= label('formPerfil_direccion'); ?></h5>
                                            </div>
                                            <div>
                                                <div class="input-field col s12 m12 l6 country-select" style="margin-top: 13px;">
                                                    <select id="registro_paisTrabajador" name="registro_paisTrabajador">
                                                        <option class="selected-option" value="0"><?= label('formPerfil_pais'); ?>
                                                        </option>
                                                        <option value="1">Costa Rica</option>
                                                        <option value="2">Colombia</option>
                                                        <option value="3">Brasil</option>
                                                        <option value="4">USA</option>
                                                        <option value="5">Chile</option>
                                                    </select>
                                                </div>
                                                <div class="input-field col s12 m12 l6">
                                                    <input id="registro_provinciaTrabajador" name="registro_provinciaTrabajador" class="campo-registro" type="text"
                                                           placeholder="<?= label('formPerfil_estado'); ?>" value="<?= $provinciaT; ?>">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="input-field col s12 m12 l6">
                                                    <input id="registro_cantonTrabajador" name="registro_cantonTrabajador" class="campo-registro" type="text"
                                                           placeholder="<?= label('formPerfil_ciudad'); ?>" value="<?= $cantonT; ?>">
                                                </div>
                                                <div class="input-field col s12 m12 l6">
                                                    <input id="registro_domicilioTrabajador" name="registro_domicilioTrabajador" class="campo-registro" type="text"
                                                           placeholder="<?= label('formPerfil_domicilio'); ?>" value="<?= $domicilioT; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="empresa_informacion" style="display: none;">
                                        <div class="col s12">
                                            <h5><?= label('tituloPerfil'); ?></h5>
                                        </div>
                                        <div>
                                            <div class="input-field col s12 m12 l4">
                                                <input id="registro_cedulaEmpresa" name="registro_cedulaEmpresa" class="campo-registro" type="text"
                                                       placeholder="<?= label('formPerfil_cedulaJuridica'); ?>" value="<?= $cedulaE; ?>">
                                            </div>
                                            <div class="input-field col s12 m12 l4">
                                                <input id="registro_nombreEmpresa" name="registro_nombreEmpresa" class="campo-registro" type="text"
                                                       placeholder="<?= label('formPerfil_nombreEmpresa'); ?>" value="<?= $nombreE; ?>">
                                            </div>
                                            <div class="input-field col s12 m12 l4">
                                                <input id="registro_nombreFantasiaEmpresa" name="registro_nombreFantasiaEmpresa" class="campo-registro" type="text"
                                                       placeholder="<?= label('formPerfil_nombreFantasia'); ?>" value="<?= $nombreFantasiaE; ?>">
                                            </div>
                                        </div>
                                        <div id="empresa_direccion">
                                            <div class="col s12">
                                                <h5><?= label('formPerfil_direccion'); ?></h5>
                                            </div>
                                            <div>
                                                <div class="input-field col s12 m12 l6 country-select" style="margin-top: 13px;">
                                                    <select id="registro_paisEmpresa" name="registro_paisEmpresa">
                                                        <option class="selected-option" value="0"><?= label('formPerfil_pais'); ?>
                                                        </option>
                                                        <option value="1">Costa Rica</option>
                                                        <option value="2">Colombia</option>
                                                        <option value="3">Brasil</option>
                                                        <option value="4">USA</option>
                                                        <option value="5">Chile</option>
                                                    </select>
                                                </div>
                                                <div class="input-field col s12 m12 l6">
                                                    <input id="registro_provinciaEmpresa" name="registro_provinciaEmpresa" class="campo-registro" type="text"
                                                           placeholder="<?= label('formPerfil_estado'); ?>" value="<?= $provinciaE; ?>">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="input-field col s12 m12 l6">
                                                    <input id="registro_cantonEmpresa" name="registro_cantonEmpresa" class="campo-registro" type="text"
                                                           placeholder="<?= label('formPerfil_ciudad'); ?>" value="<?= $cantonE; ?>">
                                                </div>
                                                <div class="input-field col s12 m12 l6">
                                                    <input id="registro_domicilioEmpresa" name="registro_domicilioEmpresa" class="campo-registro" type="text"
                                                           placeholder="<?= label('formPerfil_domicilio'); ?>" value="<?= $domicilioE; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="empresa_contactoInformacion">
                                            <div class="col s12">
                                                <h5><?= label('formPerfil_datosContacto'); ?></h5>
                                            </div>
                                            <div>
                                                <div class="input-field col s12 m12 l4">
                                                    <input id="registro_empresaNombreContacto" name="registro_empresaNombreContacto" class="campo-registro" type="text"
                                                           placeholder="<?= label('formPerfil_nombre'); ?>" value="<?= $nombreContactoE; ?>">
                                                </div>
                                                <div class="input-field col s12 m12 l4">
                                                    <input id="registro_empresaPrimerApellidoContacto" name="registro_empresaPrimerApellidoContacto" class="campo-registro" type="text"
                                                           placeholder="<?= label('formPerfil_apellido1'); ?>" value="<?= $primerApellidoE; ?>">
                                                </div>
                                                <div class="input-field col s12 m12 l4">
                                                    <input id="registro_empresaSegundoApellidoContacto" name="registro_empresaSegundoApellidoContacto" class="campo-registro" type="text"
                                                           placeholder="<?= label('formPerfil_apellido2'); ?>" value="<?= $segundoApellidoE; ?>">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="input-field col s12 m12 l6">
                                                    <input id="registro_empresaCorreoContacto" name="registro_empresaCorreoContacto" class="campo-registro" type="email"
                                                           placeholder="<?= label('formPerfil_correo'); ?>" value="<?= $correoE; ?>">
                                                </div>
                                                <div class="input-field col s12 m12 l6">
                                                    <input id="registro_empresaConfirmarCorreoContacto" name="registro_empresaConfirmarCorreoContacto" class="campo-registro" type="email"
                                                           placeholder="<?= label('formPerfil_confCorreo'); ?>" value="<?= $correoConfirmE; ?>">
                                                </div>
                                            </div>
                                            <div>
                                                <div class="input-field col s12 m12 l6">
                                                    <input id="registro_empresaContrasenaContacto" name="registro_empresaContrasenaContacto" class="campo-registro" type="password"
                                                           placeholder="<?= label('formPerfil_contraseña'); ?>" value="<?= $contrasenaE; ?>">
                                                </div>
                                                <div class="input-field col s12 m12 l6">
                                                    <input id="registro_empresaConfirmarContrasenaContacto" name="registro_empresaConfirmarContrasenaContacto" class="campo-registro" type="password"
                                                           placeholder="<?= label('formPerfil_confContraseña'); ?>" value="<?= $contrasenaConfirmE; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="input-field col s12 campo-captcha">
                                            <input type="text" id="defaultReal" name="defaultReal" class="campo-registro"
                                                   placeholder="<?= label('formPerfil_captcha'); ?>">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="input-field col s12" style="margin-top: 0;">
                                            <input class="filled-in" type="checkbox" id="correosPromociones"/>
                                            <label for="correosPromociones"><?= label('formPerfil_acepto1'); ?></label>
                                        </div>
                                        <div class="input-field col s12" style="margin-top: 5px;">
                                            <input class="filled-in" type="checkbox" id="terminos"/>
                                            <label for="terminos"><?= label('formPerfil_acepto2'); ?></label>
                                        </div>
                                    </div>

                                    <div class="col s12" style="margin-top: 25px;">
                                        <div class="input-field col s12 envio-formulario">
                                            <button type="submit" class="btn btn-filled registrar">
                                                <?= label('formRegistro_crearPerfil'); ?>
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
<!-- END CONTENT-->

<script type="text/javascript">
    function datosRegistro(opcionSeleccionada) {
        if (opcionSeleccionada.value == "1") {
            document.getElementById('trabajador_informacion').style.display = 'block';
            document.getElementById('empresa_informacion').style.display = 'none';
        } else {
            document.getElementById('trabajador_informacion').style.display = 'none';
            document.getElementById('empresa_informacion').style.display = 'block';
        }
    }
</script>

<script type="text/javascript">
    $(window).load(function(){
        var error = '<?= $tipo_error; ?>';
        var tipoForm = '<?= $tipoForm ?>';
        var campoCorreo = $('#registro_correoTrabajador');
        var campoCedula = $('#registro_cedulaTrabajador');
        if(tipoForm == 2) {
            campoCorreo = $('#registro_empresaCorreoContacto');
            campoCedula = $('#registro_cedulaEmpresa');
        }
        if(error != '') {
            if (error == 0) {
                alert('Error de bd');
            } else {
                if (error == 1) {
                    alert('Error en el correo');
                    campoCorreo.focus();
                } else {
                    if (error == 2) {
                        alert('Error en el captcha');
                        $('#defaultReal').focus();
                    } else {
                        if (error == 3) {
                            alert('Error en la identificacion');
                            campoCedula.focus();
                        }
                    }
                }
            }
        }
        var tipoF = parseInt('<?= $tipoForm; ?>');
        var paisT = parseInt('<?= $paisT; ?>');
        var paisE = parseInt('<?= $paisE; ?>');
        $('#registro_tipo').val(tipoF).change();
        $('#registro_paisTrabajador').val(paisT).change();
        $('#registro_paisEmpresa').val(paisE).change();
//        $('#registro_tipo').options[tipoF].selected = true;
//        $('#registro_paisTrabajador').options[paisT].selected = true;
//        $('#registro_paisEmpresa').options[paisE].selected = true;
    });
</script>

