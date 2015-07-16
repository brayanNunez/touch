<!-- START CONTENT  -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?=label('tituloFormularioRegistro');?></h1>

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
                            <div class="col offset-s2 s8 offset-m2 m8 offset-l2 l8">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="registro_nombre" type="text">
                                            <label for="registro_nombre"><?=label('formRegistro_nombre');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="registro_correo" type="email">
                                            <label for="registro_correo"><?=label('formRegistro_correo');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="registro_telefono" type="text">
                                            <label for="registro_telefono"><?=label('formRegistro_telefono');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="registro_sitioWeb" type="text">
                                            <label for="registro_sitioWeb"><?=label('formRegistro_sitioWeb');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="registro_nombreUsuario" type="text">
                                            <label for="registro_nombreUsuario"><?=label('formRegistro_nombreUsuario');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="registro_contrasena" type="password">
                                            <label for="registro_contrasena"><?=label('formRegistro_contrasena');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="registro_contrasenaConfirm" type="password">
                                            <label for="registro_contrasenaConfirm"><?=label('formRegistro_contrasenaConfirm');?></label>
                                        </div>
                                        <div class="file-field col s12">
                                            <br />
                                            <label for="registro_fotografia"><?=label('formRegistro_fotografia');?></label>
                                            <div class="file-field input-field col s12">
                                                <input class="file-path validate" type="text"/>
                                                <div class="btn">
                                                    <span><?=label('formRegistro_examinar') ?></span>
                                                    <input type="file" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field col s12">
                                            <button class="btn waves-effect waves-light right" type="submit" name="action"><?=label('formRegistro_crearPerfil');?>
                                                <i class="mdi-content-send right"></i>
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
<!-- END CONTENT