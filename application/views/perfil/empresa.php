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
                                            <input id="perfil_numeroIdentificacionEmpresa" type="text" value="3-101-289867">
                                            <label for="perfil_numeroIdentificacionEmpresa"><?= label('Número de identificación'); ?></label>
                                        </div>

                                        <div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_nombreEmpresa" type="text" value="Empresa S.A">
                                                <label for="perfil_nombreEmpresa">Nombre (Razón social)</label>
                                            </div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_nombreFantasiaEmpresa" type="text" value="Empresa">
                                                <label for="perfil_nombreFantasiaEmpresa">Nombre de fantasía</label>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_telefonoEmpresa" type="text" value="2448-6352">
                                                <label for="perfil_telefonoEmpresa">Teléfono</label>
                                            </div>

                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_celularEmpresa" type="text" value="8475-5689">
                                                <label for="perfil_celularEmpresa">Celular</label>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_correoEmpresa" type="email" value="empresa@gmail.com">
                                                <label for="perfil_correoEmpresa">Correo empresarial</label>
                                            </div>

                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_sitioEmpresa" type="text" value="www.empresa.com">
                                                <label for="perfil_sitioEmpresa">Sitio web</label>
                                            </div>
                                        </div>

                                        <div class="col s12 m12">
                                            <div class="input-field col s12 m6 l6">
                                                
                                                <select id="perfil_actividadEmpresa">
                                                    <option>Independiente</option>
                                                    <option selected>Empresa</option>
                                                </select>
                                                <label for="perfil_actividadEmpresa">Actividad comercial</label>
                                            </div>

                                            <div class="input-field col s12 m6 l6">

                                                <select id="perfil_tamañoEmpresa">
                                                    <option>1 a 5</option>
                                                    <option>6 a 10</option>
                                                    <option selected>11 a 25</option>
                                                    <option>26 a 50</option>
                                                    <option>51 a 75</option>
                                                    <option>76 a 100</option>
                                                    <option>100+</option>
                                                </select>
                                                <label for="perfil_tamañoEmpresa">Tamaño de la empresa</label>
                                            </div>
                                        </div>

                                        <div>

                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_fechaEmpresa" class="datepicker-fecha" type="text" value="04-05-2000">
                                                <label for="perfil_fechaEmpresa">Fecha de creación</label>
                                            </div>
                                            
                                            <div class="file-field col s12 m6 l6">
                                            <label for="perfil_fotografiaEmpresa"><?= label('formUsuario_fotografia'); ?></label>

                                            <div class="file-field input-field col s12">
                                                <input class="file-path validate" type="text" value="imagen.jpg"/>

                                                <div class="btn" data-toggle="tooltip" title="<?= label('tooltip_examinar') ?>">
                                                    <span><i class="mdi-action-search"></i></span>
                                                    <input type="file"/>
                                                </div>
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
                                                    <select id="perfil_paisEmpresa">
                                                        <option value="1" selected>Costa Rica</option>
                                                        <option value="2">Colombia</option>
                                                        <option value="3">Brasil</option>
                                                        <option value="4">USA</option>
                                                        <option value="5">Chile</option>
                                                    </select>
                                                    <label for="perfil_paisEmpresa">Pais</label>
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m6 l6">
                                                <div class="input-field col s12">
                                                    <input id="perfil_estadoProvinciaEmpresa" type="text" value="San José">
                                                    <label for="perfil_estadoProvinciaEmpresa">Estado/Provincia</label>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="col s12 m12">
                                            <div class="input-field col s12 m6 l6">
                                                <div class="input-field col s12">
                                                <input id="perfil_ciudadCantonEmpresa" type="text" value="Escazú">
                                                <label for="perfil_ciudadCantonEmpresa">Ciudad/Cantón</label>
                                            </div>
                                            </div>

                                            <div class="input-field col s12 m6 l6">
                                                <div class="input-field col s12">
                                                <input id="perfil_domicilioEmpresa" type="text" value="100m sur del parque central">
                                                <label for="perfil_domicilioEmpresa">Domicilio</label>
                                            </div>
                                            </div>
                                        </div>

                                        <br>
                                        <div class="col s12 m12">
                                            <h5>Datos del contacto (Representante legal)</h5>
                                        </div>

                                        <div class="input-field col s12">
                                            <input id="perfil_numeroIdentificacionContactoEmpresa" type="text" value="1-0578-3852">
                                            <label for="perfil_numeroIdentificacionContactoEmpresa"><?= label('Número de identificación'); ?></label>
                                        </div>

                                        <div>
                                            <div class="input-field col s12 m4 l4">
                                                <input id="perfil_apellido1ContactoEmpresa" type="text" value="Chaves">
                                                <label for="perfil_apellido1ContactoEmpresa">Primer apellido</label>
                                            </div>
                                            <div class="input-field col s12 m4 l4">
                                                <input id="perfil_apellido2ContactoEmpresa" type="text" value="Arias">
                                                <label for="perfil_apellido2ContactoEmpresa">Segundo apellido</label>
                                            </div>
                                            <div class="input-field col s12 m4 l4">
                                                <input id="perfil_nombreContactoEmpresa" type="text" value="Hugo">
                                                <label for="perfil_nombreContactoEmpresa">Nombre</label>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_correoContactoEmpresa" type="email" value="hugo@gmail.com">
                                                <label for="perfil_correoContactoEmpresa">Correo electrónico</label>
                                            </div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_confirmarCorreoContactoEmpresa" type="email" value="hugo@gmail.com">
                                                <label for="perfil_confirmarCorreoContactoEmpresa">Confirmar correo electrónico</label>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_contraseñaContactoEmpresa" type="password" value="123456">
                                                <label for="perfil_contraseñaContactoEmpresa">Contraseña</label>
                                            </div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_confirmarContraseñaContactoEmpresa" type="password" value="123456">
                                                <label for="perfil_confirmarContraseñaContactoEmpresa">Confirmar contraseña</label>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_puestoContactoEmpresa" type="text" value="Gerente">
                                                <label for="perfil_puestoContactoEmpresa">Puesto</label>
                                            </div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_fechaNacIndependienteContactoEmpresa" value="05-07-1970" class="datepicker-fecha" type="text">
                                                <label for="perfil_fechaNacIndependienteContactoEmpresa">Fecha de nacimiento</label>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_telefonoContactoEmpresa" type="text" value="2568-5985">
                                                <label for="perfil_telefonoContactoEmpresa">Teléfono</label>
                                            </div>

                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_celularContactoEmpresa" type="text" value="8549-5748">
                                                <label for="perfil_celularContactoEmpresa">Celular</label>
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
