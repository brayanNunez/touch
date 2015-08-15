<!-- START CONTENT  -->

<section id="content" class="registro-content">
    <!--start breadcrumbs-->
<!--    <div id="breadcrumbs-wrapper" class=" grey lighten-3">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col s12 m12 l12">-->
<!--                    <h1 class="breadcrumbs-title">--><?//=label('tituloFormularioRegistro');?><!--</h1>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!--breadcrumbs end-->

    <!--start container-->
    <div class="container">
        <div id="chart-dashboard">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div id="submit-button" class="section">
                        <div class="row">
                            <div class="col s12 offset-m2 m8 offset-l2 l8">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="registro_nombreEmpresa" class="campo-registro" type="text"
                                                   placeholder="Escriba el nombre de su compañía">
<!--                                            <label for="registro_nombreEmpresa" class="active">--><?//=label('formRegistro_nombre');?><!--</label>-->
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="registro_nombre" class="campo-registro" type="text"
                                                   placeholder="Escriba su nombre completo">
<!--                                            <label for="registro_nombre" class="active">--><?//=label('formRegistro_nombre');?><!--</label>-->
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="registro_correo" class="campo-registro" type="email"
                                                placeholder="Escriba su correo electrónico">
<!--                                            <label for="registro_correo" class="active">--><?//=label('formRegistro_correo');?><!--</label>-->
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="registro_telefono" class="campo-registro" type="text"
                                                placeholder="Escriba su número de teléfono">
<!--                                            <label for="registro_telefono" class="active">--><?//=label('formRegistro_telefono');?><!--</label>-->
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="registro_sitioWeb" class="campo-registro" type="text"
                                                placeholder="Escriba su sitio web">
<!--                                            <label for="registro_sitioWeb" class="active">--><?//=label('formRegistro_sitioWeb');?><!--</label>-->
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="registro_nombreUsuario" class="campo-registro" type="text"
                                                placeholder="Escriba su nombre de usuario">
<!--                                            <label for="registro_nombreUsuario" class="active">--><?//=label('formRegistro_nombreUsuario');?><!--</label>-->
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="registro_contrasena" class="campo-registro" type="password"
                                                placeholder="Escriba su contraseña">
<!--                                            <label for="registro_contrasena" class="active">--><?//=label('formRegistro_contrasena');?><!--</label>-->
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="registro_contrasenaConfirm" class="campo-registro" type="password"
                                                placeholder="Confirme su contraseña">
<!--                                            <label for="registro_contrasenaConfirm" class="active">--><?//=label('formRegistro_contrasenaConfirm');?><!--</label>-->
                                        </div>
                                        <div class="input-field col s12 country-select">
                                            <select>
                                                <option class="selected-option" selected disabled>Seleccione el país al que pertenece</option>
                                                <option value="1">Costa Rica</option>
                                                <option value="2">Brasil</option>
                                                <option value="3">USA</option>
                                                <option value="4">Colombia</option>
                                                <option value="5">Chile</option>
                                            </select>
<!--                                            <input id="registro_country" class="campo-registro" type="password" placeholder="Seleccione el país al que pertenece">-->
<!--                                            <label for="registro_country" class="active">--><?//=label('formRegistro_contrasenaConfirm');?><!--</label>-->
                                        </div>
                                        <div class="file-field col s12">
                                            <br />
<!--                                            <label for="registro_fotografia">--><?//=label('formRegistro_fotografia');?><!--</label>-->
                                            <div class="file-field input-field col s12">
                                                <input class="file-path validate campo-registro" type="text"
                                                    placeholder="Seleccione una imagen"/>
                                                <div class="btn" data-toggle="tooltip" title="<?=label('tooltip_examinar')?>"
                                                    style="border-radius: 0px !important; min-width: 13%;">
                                                    <span><i class="mdi-action-search"></i></span>
                                                    <input type="file" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field col s12 campo-captcha">
                                            <input type="text" id="defaultReal" name="defaultReal" class="campo-registro"
                                                placeholder="Ingrese el captcha">
                                        </div>
                                        <div class="input-field col s12 envio-formulario">
                                            <button class="btn btn-filled registrar" type="submit" name="action"><?=label('formRegistro_crearPerfil');?>
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
