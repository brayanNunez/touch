<!-- START CONTENT -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="breadcrumbs-title"><?= label('tituloUsuario'); ?></a></h5>
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
                            <div class="col s12 m12 l12">
                                <form class="col s12">
                                    <div class="row">

                                        <div>
                                            <div class="input-field col s12 m4 l4">
                                                <input id="perfil_nombreUsuario" type="text" value="Juan">
                                                <label for="perfil_nombreUsuario"><?= label('formPerfil_nombre'); ?></label>
                                            </div>
                                            <div class="input-field col s12 m4 l4">
                                                <input id="perfil_apellido1Usuario" type="text" value="Perez">
                                                <label for="perfil_apellido1Usuario"><?= label('formPerfil_apellido1'); ?></label>
                                            </div>
                                            <div class="input-field col s12 m4 l4">
                                                <input id="perfil_apellido2Usuario" type="text" value="Pereira">
                                                <label for="perfil_apellido2Usuario"><?= label('formPerfil_apellido2'); ?></label>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_correoUsuario" type="email" value="juanperez@gmail.com">
                                                <label for="perfil_correoUsuario"><?= label('formPerfil_correo'); ?></label>
                                            </div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_confirmarCorreoUsuario" type="email" value="juanperez@gmail.com">
                                                <label for="perfil_confirmarCorreoUsuario"><?= label('formPerfil_confCorreo'); ?></label>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_contraseñaUsuario" type="password" value="123456">
                                                <label for="perfil_contraseñaUsuario"><?= label('formPerfil_contraseña'); ?></label>
                                            </div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_confirmarContraseñaUsuario" type="password" value="123456">
                                                <label for="perfil_confirmarContraseñaUsuario"><?= label('formPerfil_confContraseña'); ?></label>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_puestoUsuario" type="text" value="2444-5689">
                                                <label for="perfil_puestoUsuario"><?= label('formPerfil_puesto'); ?></label>
                                            </div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_fechaNacUsuario" class="datepicker-fecha" type="text" value="11-09-1990">
                                                <label for="perfil_fechaNacUsuario"><?= label('formPerfil_fechaNac'); ?></label>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_telefonoUsuario" type="text" value="2444-5689">
                                                <label for="perfil_telefonoUsuario"><?= label('formPerfil_telefono'); ?></label>
                                            </div>

                                            <div class="input-field col s12 m6 l6">
                                                <input id="perfil_celularUsuario" type="text" value="8245-5956">
                                                <label for="perfil_celularUsuario"><?= label('formPerfil_celular'); ?></label>
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

                                        <div class="input-field col s12">
                                            <label><?= label('formUsuario_roles'); ?></label>
                                            <br/>
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
                                            <br/>
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
