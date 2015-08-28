<!-- START CONTENT  -->

<section id="content" class="registro-content">

    <!--start container-->
    <div class="container">
        <div id="chart-dashboard">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div id="submit-button" class="section">
                        <div class="row">
                            <div class="col s12 offset-m2 m8 offset-l2 l8">
                                <form class="col s12">

                                    <div class="col s12 m12 l12">
                                        <div class="input-field col s12 m6 l0">
                                            <div class="input-field col s12">
                                                <select onChange="registro(this)">
                                                    <!--<option value="" class="selected-option" selected disabled>Tipo de usuario</option>-->
                                                    <option value="1" selected>Trabajador independiente</option>
                                                    <option value="2">Empresa</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="input-field col s12 m6 l0">
                                            <div class="input-field col s12">
                                                <input id="registro_cedula" class="campo-registro" type="text"
                                                       placeholder="Cédula">
                                            </div>
                                        </div>
                                    </div>

                                    <!--start informacion-independiente-->
                                    <div id="informacion-independiente">

                                        <div class="col s12 m12 l12">
                                            <h5>Información de la cuenta</h5>
                                        </div>

                                        <div class="col s12 m12 l12">
                                            <div class="input-field col s12 m4 l4">
                                                <div class="input-field col s12">
                                                    <input id="registro_nombreIndepediente" class="campo-registro" type="text"
                                                           placeholder="Nombre">
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m4 l4">
                                                <div class="input-field col s12">
                                                    <input id="registro_primerApellidoIndepediente" class="campo-registro" type="text"
                                                           placeholder="Primer apellido">
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m4 l4">
                                                <div class="input-field col s12">
                                                    <input id="registro_segundoApellidoIndepediente" class="campo-registro" type="text"
                                                           placeholder="Segundo apellido">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col s12 m12 l12">
                                            <div class="input-field col s12 m6 l0">
                                                <div class="input-field col s12">
                                                    <input id="registro_correoIndepediente" class="campo-registro" type="email"
                                                           placeholder="Correo electrónico">
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m6 l0">
                                                <div class="input-field col s12">
                                                    <input id="registro_confirmarCorreoIndepediente" class="campo-registro" type="email"
                                                           placeholder="Confirmar correo electrónico">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col s12 m12 l12">
                                            <div class="input-field col s12 m6 l0">
                                                <div class="input-field col s12">
                                                    <input id="registro_contraseñaIndepediente" class="campo-registro" type="password"
                                                           placeholder="Contraseña">
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m6 l0">
                                                <div class="input-field col s12">
                                                    <input id="registro_confirmarContraseñaIndepediente" class="campo-registro" type="password"
                                                           placeholder="Confirmar contraseña">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!--end informacion-independiente-->

                                    <!--start direccion-independiente-->
                                    <div id="direccion-independiente">

                                        <div class="col s12 m12 l12">
                                            <h5>Dirección</h5>
                                        </div>

                                        <div class="col s12 m12 l12">
                                            <div class="input-field col s12 m4 l4">
                                                <div class="input-field col s12">
                                                    <input id="registro_paisIndepediente" class="campo-registro" type="text"
                                                           placeholder="País">
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m4 l4">
                                                <div class="input-field col s12">
                                                    <input id="registro_provinciaIndepediente" class="campo-registro" type="text"
                                                           placeholder="Provincia">
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m4 l4">
                                                <div class="input-field col s12">
                                                    <input id="registro_cantonIndepediente" class="campo-registro" type="text"
                                                           placeholder="Cantón">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col s12 m12 l12">
                                            <div class="input-field col s12 m6 l0">
                                                <div class="input-field col s12">
                                                    <input id="registro_distritoIndepediente" class="campo-registro" type="text"
                                                           placeholder="Distrito">
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m6 l0">
                                                <div class="input-field col s12">
                                                    <input id="registro_domicilioIndepediente" class="campo-registro" type="text"
                                                           placeholder="Domicilio">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!--end direccion-independiente-->

                                    <!--start informacion-empresa-->
                                    <div id="informacion-empresa">

                                        <div class="col s12 m12 l12">
                                            <h5>Información de la cuenta</h5>
                                        </div>

                                        <div class="col s12 m12 l12">
                                            <div class="input-field col s12 m6 l0">
                                                <div class="input-field col s12">
                                                    <input id="registro_nombreEmpresa" class="campo-registro" type="text"
                                                           placeholder="Nombre (Razón social)">
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m6 l0">
                                                <div class="input-field col s12">
                                                    <input id="registro_nombreFantasiaEmpresa" class="campo-registro" type="text"
                                                           placeholder="Nombre de fantasía">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!--end informacion-empresa-->

                                    <!--start direccion-empresa-->
                                    <div id="direccion-empresa">

                                        <div class="col s12 m12 l12">
                                            <h5>Dirección</h5>
                                        </div>

                                        <div class="col s12 m12 l12">
                                            <div class="input-field col s12 m4 l4">
                                                <div class="input-field col s12">
                                                    <input id="registro_paisEmpresa" class="campo-registro" type="text"
                                                           placeholder="País">
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m4 l4">
                                                <div class="input-field col s12">
                                                    <input id="registro_provinciaEmpresa" class="campo-registro" type="text"
                                                           placeholder="Provincia">
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m4 l4">
                                                <div class="input-field col s12">
                                                    <input id="registro_cantonEmpresa" class="campo-registro" type="text"
                                                           placeholder="Cantón">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col s12 m12 l12">
                                            <div class="input-field col s12 m6 l0">
                                                <div class="input-field col s12">
                                                    <input id="registro_distritoEmpresa" class="campo-registro" type="text"
                                                           placeholder="Distrito">
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m6 l0">
                                                <div class="input-field col s12">
                                                    <input id="registro_domicilioEmpresa" class="campo-registro" type="text"
                                                           placeholder="Domicilio">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!--end direccion-empresa-->

                                    <!--star informacion-contacto-->

                                    <div id="informacion-contacto">

                                        <div class="col s12 m12 l12">
                                            <h5>Datos del contacto (Se recomienda representante legal)</h5>
                                        </div>

                                        <div class="col s12 m6 10">
                                            <div class="input-field col s12">
                                                <input id="registro_cedulaContacto" class="campo-registro" type="text"
                                                       placeholder="Cédula">
                                            </div>
                                        </div>

                                        <div class="col s12 m12 l12">
                                            <div class="input-field col s12 m4 l4">
                                                <div class="input-field col s12">
                                                    <input id="registro_nombreContacto" class="campo-registro" type="text"
                                                           placeholder="Nombre">
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m4 l4">
                                                <div class="input-field col s12">
                                                    <input id="registro_primerApellidoContacto" class="campo-registro" type="text"
                                                           placeholder="Primer apellido">
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m4 l4">
                                                <div class="input-field col s12">
                                                    <input id="registro_segundoApellidoContacto" class="campo-registro" type="text"
                                                           placeholder="Segundo apellido">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col s12 m12 l12">
                                            <div class="input-field col s12 m6 l0">
                                                <div class="input-field col s12">
                                                    <input id="registro_correoContacto" class="campo-registro" type="email"
                                                           placeholder="Correo electrónico">
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m6 l0">
                                                <div class="input-field col s12">
                                                    <input id="registro_confirmarCorreoContacto" class="campo-registro" type="email"
                                                           placeholder="Confirmar correo electrónico">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col s12 m12 l12">
                                            <div class="input-field col s12 m6 l0">
                                                <div class="input-field col s12">
                                                    <input id="registro_contraseñaContacto" class="campo-registro" type="password"
                                                           placeholder="Contraseña">
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m6 l0">
                                                <div class="input-field col s12">
                                                    <input id="registro_confirmarContraseñaContacto" class="campo-registro" type="password"
                                                           placeholder="Confirmar contraseña">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <!--end informacion-contacto-->

                                    <div class="col s12 m12 l12">
                                        <div class="input-field col s12 campo-captcha">
                                            <input type="text" id="defaultReal" name="defaultReal"
                                                   class="campo-registro"
                                                   placeholder="Ingrese el captcha">
                                        </div>
                                    </div>

                                    <div class="col s12 m12 l12">
                                        <div class="input-field col s12">
                                            <input class="filled-in" type="checkbox" id="correosPromociones"/>
                                            <label for="correosPromociones">Acepto recibir correos y promociones de Touch!</label>
                                        </div>
                                    </div>

                                    <div class="col s12 m12 l12">
                                        <div class="input-field col s12">
                                            <input class="filled-in" type="checkbox" id="terminos"/>
                                            <label for="terminos">Acepto términos y condiciones de uso</label>
                                        </div>
                                    </div>

                                    <div class="col s12 m12 l12">
                                        <div class="input-field col s12 envio-formulario">
                                            <button class="btn btn-filled registrar" type="submit"
                                                    name="action"><?= label('formRegistro_crearPerfil'); ?>
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
