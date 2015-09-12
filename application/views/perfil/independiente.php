<!-- START CONTENT -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="breadcrumbs-title">Información de la cuenta</a></h5>
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
                            <div class="col s12 m12 l10">
                                <form class="col s12">
                                    <div class="row">

                                        <div class="input-field col s12">
                                            <input id="perfil_numeroIdentificacionIndependiente" type="text" value="1-1515-7373">
                                            <label for="perfil_numeroIdentificacionIndependiente"><?= label('Número de identificación'); ?></label>
                                        </div>

                                        <div>
                                            <div class="input-field col s12 m4 l4">
                                                <input id="perfil_apellido1Independiente" type="text" value="Perez">
                                                <label for="perfil_apellido1Independiente"><?= label('formUsuario_apellido1'); ?></label>
                                            </div>
                                            <div class="input-field col s12 m4 l4">
                                                <input id="perfil_apellido2Independiente" type="text" value="Pereira">
                                                <label for="perfil_apellido2Independiente"><?= label('formUsuario_apellido2'); ?></label>
                                            </div>
                                            <div class="input-field col s12 m4 l4">
                                                <input id="perfil_nombreIndependiente" type="text" value="Juan">
                                                <label for="perfil_nombreIndependiente"><?= label('formUsuario_nombre'); ?></label>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_correoIndepediente" type="email" value="juanperez@gmail.com">
                                                <label for="perfil_correoIndepediente">Correo electrónico</label>
                                            </div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_confirmarCorreoIndepediente" type="email" value="juanperez@gmail.com">
                                                <label for="perfil_confirmarCorreoIndepediente">Confirmar correo electrónico</label>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_contraseñaIndepediente" type="password" value="123456">
                                                <label for="perfil_contraseñaIndepediente">Contraseña</label>
                                            </div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_confirmarContraseñaIndepediente" type="password" value="123456">
                                                <label for="perfil_confirmarContraseñaIndepediente">Confirmar contraseña</label>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_telefonoIndependiente" type="text" value="2444-5689">
                                                <label for="perfil_telefonoIndependiente">Teléfono</label>
                                            </div>

                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_celularIndependiente" type="text" value="8245-5956">
                                                <label for="perfil_celularIndependiente">Celular</label>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_profesionIndependiente" type="text" value="Comerciante">
                                                <label for="perfil_profesionIndependiente">Profesión</label>
                                            </div>

                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_sitioIndependiente" type="text" value="www.empresa.com">
                                                <label for="perfil_sitioIndependiente">Sitio web</label>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_fechaNacIndependiente" class="datepicker-fecha" type="text" value="11-09-1990">
                                                <label for="perfil_fechaNacIndependiente">Fecha de nacimiento</label>
                                            </div>

                                            <div class="input-field col s12 m6 l6">
                                                <select id="perfil_actividadIndependiente">
                                                    <option selected>Trabajador independiente</option>
                                                    <option>Empresa</option>
                                                </select>
                                                <label for="perfil_actividadIndependiente">Actividad comercial</label>
                                            </div>
                                        </div>

                                        
                                        <div class="file-field col s12">
                                            <br/>
                                            <label for="perfil_fotografiaIndependiente"><?= label('formUsuario_fotografia'); ?></label>

                                            <div class="file-field input-field col s12">
                                                <input class="file-path validate" type="text" value="imagen.jpg"/>

                                                <div class="btn" data-toggle="tooltip" title="<?= label('tooltip_examinar') ?>">
                                                    <span><i class="mdi-action-search"></i></span>
                                                    <input type="file"/>
                                                </div>
                                            </div>
                                        </div>

                                        

                                        <div class="col s12 m12">
                                            <br>
                                            <div class="col s12 m12">
                                                <h5>Dirección</h5>
                                            </div>
                                            <div class="input-field col s12 m6 l6">
                                                <div class="input-field col s12 country-select">
                                                    <select id="perfil_paisIndependiente">
                                                        <option value="1" selected>Costa Rica</option>
                                                        <option value="2">Colombia</option>
                                                        <option value="3">Brasil</option>
                                                        <option value="4">USA</option>
                                                        <option value="5">Chile</option>
                                                    </select>
                                                    <label for="perfil_paisIndependiente">País</label>
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m6 l6">
                                                <div class="input-field col s12">
                                                    <input id="perfil_estadoProvinciaIndependiente" type="text" value="Alajuela">
                                                    <label for="perfil_estadoProvinciaIndependiente">Estado/Provincia</label>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="col s12 m12">
                                            <div class="input-field col s12 m6 l6">
                                                <div class="input-field col s12">
                                                <input id="perfil_ciudadCantonIndependiente" type="text" value="San Pedro">
                                                <label for="perfil_ciudadCantonIndependiente">Ciudad/Cantón</label>
                                            </div>
                                            </div>

                                            <div class="input-field col s12 m6 l6">
                                                <div class="input-field col s12">
                                                <input id="perfil_domicilioIndependiente" type="text" value="Poás">
                                                <label for="perfil_domicilioIndependiente">Domicilio</label>
                                            </div>
                                            </div>
                                        </div>

                                        <div class="input-field col s12 envio-formulario">
                                            <button class="btn waves-effect waves-light right" type="submit"
                                                    name="action"><?= label('formUsuario_editar'); ?></button>
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
<!-- END CONTENT-->
