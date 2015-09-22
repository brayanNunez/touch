<!-- START CONTENT  -->

<section id="content" class="registro-content">

    <!--start container-->
    <div class="container">
        <div id="chart-dashboard">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div id="submit-button" class="section">
                        <div class="row">
                            <div class="col s12 m12 offset-l1 l10">
                                <form class="col s12">

                                    <div class="col s12 m12 l12">
                                        <div class="input-field col s12 m8 l6">
                                            <div class="input-field col s12">
                                                <select onChange="registro(this)">
                                                    <option value="1" selected>Trabajador independiente</option>
                                                    <option value="2">Empresa</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="input-field col s12 m8 l6">
                                            <div class="input-field col s12">
                                                <input id="registro_numeroIdentificacion" class="campo-registro" type="text"
                                                       placeholder="<?= label('formPerfil_numeroIdentificacion'); ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <!--start informacion-independiente-->
                                    <div id="informacion-independiente">

                                        <div class="col s12 m12 l12">
                                            <h5><?= label('tituloPerfil'); ?></h5>
                                        </div>

                                        <div class="col s12 m12 l12">
                                            <div class="input-field col s12 m8 l4">
                                                <div class="input-field col s12">
                                                    <input id="registro_nombreIndepediente" class="campo-registro" type="text"
                                                           placeholder="<?= label('formPerfil_nombre'); ?>">
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m8 l4">
                                                <div class="input-field col s12">
                                                    <input id="registro_primerApellidoIndepediente" class="campo-registro" type="text"
                                                           placeholder="<?= label('formPerfil_apellido1'); ?>">
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m8 l4">
                                                <div class="input-field col s12">
                                                    <input id="registro_segundoApellidoIndepediente" class="campo-registro" type="text"
                                                           placeholder="<?= label('formPerfil_apellido2'); ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col s12 m12 l12">
                                            <div class="input-field col s12 m8 l6">
                                                <div class="input-field col s12">
                                                    <input id="registro_correoIndepediente" class="campo-registro" type="email"
                                                           placeholder="<?= label('formPerfil_correo'); ?>">
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m8 l6">
                                                <div class="input-field col s12">
                                                    <input id="registro_confirmarCorreoIndepediente" class="campo-registro" type="email"
                                                           placeholder="<?= label('formPerfil_confCorreo'); ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col s12 m12 l12">
                                            <div class="input-field col s12 m8 l6">
                                                <div class="input-field col s12">
                                                    <input id="registro_contraseñaIndepediente" class="campo-registro" type="password"
                                                           placeholder="<?= label('formPerfil_contraseña'); ?>">
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m8 l6">
                                                <div class="input-field col s12">
                                                    <input id="registro_confirmarContraseñaIndepediente" class="campo-registro" type="password"
                                                           placeholder="<?= label('formPerfil_confContraseña'); ?>">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!--end informacion-independiente-->

                                    <!--start direccion-independiente-->
                                    <div id="direccion-independiente">

                                        <div class="col s12 m12 l12">
                                            <h5><?= label('formPerfil_direccion'); ?></h5>
                                        </div>

                                        <div class="col s12 m12 l12">
                                            <div class="input-field col s12 m8 l6">
                                                <div class="input-field col s12 country-select">
                                                    <select>
                                                        <option class="selected-option" selected disabled><?= label('formPerfil_pais'); ?>
                                                        </option>
                                                        <option value="1">Costa Rica</option>
                                                        <option value="2">Colombia</option>
                                                        <option value="3">Brasil</option>
                                                        <option value="4">USA</option>
                                                        <option value="5">Chile</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m8 l6">
                                                <div class="input-field col s12">
                                                    <input id="registro_provinciaIndepediente" class="campo-registro" type="text"
                                                           placeholder="<?= label('formPerfil_estado'); ?>">
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="col s12 m12 l12">
                                            <div class="input-field col s12 m8 l6">
                                                <div class="input-field col s12">
                                                    <input id="registro_cantonIndepediente" class="campo-registro" type="text"
                                                           placeholder="<?= label('formPerfil_ciudad'); ?>">
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m8 l6">
                                                <div class="input-field col s12">
                                                    <input id="registro_domicilioIndepediente" class="campo-registro" type="text"
                                                           placeholder="<?= label('formPerfil_domicilio'); ?>">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!--end direccion-independiente-->

                                    <!--start informacion-empresa-->
                                    <div id="informacion-empresa">

                                        <div class="col s12 m12 l12">
                                            <h5><?= label('tituloPerfil'); ?></h5>
                                        </div>

                                        <div class="col s12 m12 l12">
                                            <div class="input-field col s12 m8 l6">
                                                <div class="input-field col s12">
                                                    <input id="registro_nombreEmpresa" class="campo-registro" type="text"
                                                           placeholder="<?= label('formPerfil_nombreEmpresa'); ?>">
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m8 l6">
                                                <div class="input-field col s12">
                                                    <input id="registro_nombreFantasiaEmpresa" class="campo-registro" type="text"
                                                           placeholder="<?= label('formPerfil_nombreFantasia'); ?>">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!--end informacion-empresa-->

                                    <!--start direccion-empresa-->
                                    <div id="direccion-empresa">

                                        <div class="col s12 m12 l12">
                                            <h5><?= label('formPerfil_direccion'); ?></h5>
                                        </div>

                                        <div class="col s12 m12 l12">
                                            <div class="input-field col s12 m8 l6">
                                                <div class="input-field col s12 country-select">
                                                    <select>
                                                        <option class="selected-option" selected disabled><?= label('formPerfil_pais'); ?>
                                                        </option>
                                                        <option value="1">Costa Rica</option>
                                                        <option value="2">Colombia</option>
                                                        <option value="3">Brasil</option>
                                                        <option value="4">USA</option>
                                                        <option value="5">Chile</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m8 l6">
                                                <div class="input-field col s12">
                                                    <input id="registro_provinciaEmpresa" class="campo-registro" type="text"
                                                           placeholder="<?= label('formPerfil_estado'); ?>">
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="col s12 m12 l12">
                                            <div class="input-field col s12 m8 l6">
                                                <div class="input-field col s12">
                                                    <input id="registro_cantonEmpresa" class="campo-registro" type="text"
                                                           placeholder="<?= label('formPerfil_ciudad'); ?>">
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m8 l6">
                                                <div class="input-field col s12">
                                                    <input id="registro_domicilioEmpresa" class="campo-registro" type="text"
                                                           placeholder="<?= label('formPerfil_domicilio'); ?>">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!--end direccion-empresa-->

                                    <!--star informacion-contacto-->

                                    <div id="informacion-contacto">

                                        <div class="col s12 m12 l12">
                                            <h5><?= label('formPerfil_datosContacto'); ?></h5>
                                        </div>

                                        <div class="col s12 m8 10">
                                            <div class="input-field col s12">
                                                <input id="registro_numeroIdentificacionContacto" class="campo-registro" type="text"
                                                       placeholder="<?= label('formPerfil_numeroIdentificacion'); ?>">
                                            </div>
                                        </div>

                                        <div class="col s12 m12 l12">
                                            <div class="input-field col s12 m8 l4">
                                                <div class="input-field col s12">
                                                    <input id="registro_nombreContacto" class="campo-registro" type="text"
                                                           placeholder="<?= label('formPerfil_nombre'); ?>">
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m8 l4">
                                                <div class="input-field col s12">
                                                    <input id="registro_primerApellidoContacto" class="campo-registro" type="text"
                                                           placeholder="<?= label('formPerfil_apellido1'); ?>">
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m8 l4">
                                                <div class="input-field col s12">
                                                    <input id="registro_segundoApellidoContacto" class="campo-registro" type="text"
                                                           placeholder="<?= label('formPerfil_apellido2'); ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col s12 m12 l12">
                                            <div class="input-field col s12 m8 l6">
                                                <div class="input-field col s12">
                                                    <input id="registro_correoContacto" class="campo-registro" type="email"
                                                           placeholder="<?= label('formPerfil_correo'); ?>">
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m8 l6">
                                                <div class="input-field col s12">
                                                    <input id="registro_confirmarCorreoContacto" class="campo-registro" type="email"
                                                           placeholder="<?= label('formPerfil_confCorreo'); ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col s12 m12 l12">
                                            <div class="input-field col s12 m8 l6">
                                                <div class="input-field col s12">
                                                    <input id="registro_contraseñaContacto" class="campo-registro" type="password"
                                                           placeholder="<?= label('formPerfil_contraseña'); ?>">
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m8 l6">
                                                <div class="input-field col s12">
                                                    <input id="registro_confirmarContraseñaContacto" class="campo-registro" type="password"
                                                           placeholder="<?= label('formPerfil_confContraseña'); ?>">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <!--end informacion-contacto-->

                                    <div class="col s12 m12 l12">
                                        <div class="input-field col s12 campo-captcha">
                                            <input type="text" id="defaultReal" name="defaultReal"
                                                   class="campo-registro"
                                                   placeholder="<?= label('formPerfil_captcha'); ?>">
                                        </div>
                                    </div>

                                    <div class="col s12 m12 l12">
                                        <div class="input-field col s12">
                                            <input class="filled-in" type="checkbox" id="correosPromociones"/>
                                            <label for="correosPromociones"><?= label('formPerfil_acepto1'); ?></label>
                                        </div>
                                    </div>

                                    <div class="col s12 m12 l12">
                                        <div class="input-field col s12">
                                            <input class="filled-in" type="checkbox" id="terminos"/>
                                            <label for="terminos"><?= label('formPerfil_acepto2'); ?></label>
                                        </div>
                                    </div>

                                    <div class="col s12 m12 l12">
                                        <div class="input-field col s12 envio-formulario">
                                            <a href="<?= base_url() ?>inicio" class="btn btn-filled registrar">
                                                <?= label('formRegistro_crearPerfil'); ?></a>
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
