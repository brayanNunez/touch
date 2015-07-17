<!-- START CONTENT  -->

<section id="content" class="registro-content">
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
                                            <input id="registro_nombre" class="campo-registro" type="text"
                                                   placeholder="Escriba su nombre completo">
                                            <label for="registro_nombre" class="active"><?=label('formRegistro_nombre');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="registro_correo" class="campo-registro" type="email"
                                                placeholder="Escriba su correo electr�nico">
                                            <label for="registro_correo" class="active"><?=label('formRegistro_correo');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="registro_telefono" class="campo-registro" type="text"
                                                placeholder="Escriba su n�mero de tel�fono">
                                            <label for="registro_telefono" class="active"><?=label('formRegistro_telefono');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="registro_sitioWeb" class="campo-registro" type="text"
                                                placeholder="Escriba su sitio web">
                                            <label for="registro_sitioWeb" class="active"><?=label('formRegistro_sitioWeb');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="registro_nombreUsuario" class="campo-registro" type="text"
                                                placeholder="Escriba su nombre de usuario">
                                            <label for="registro_nombreUsuario" class="active"><?=label('formRegistro_nombreUsuario');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="registro_contrasena" class="campo-registro" type="password"
                                                placeholder="Escriba su contrase�a">
                                            <label for="registro_contrasena" class="active"><?=label('formRegistro_contrasena');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="registro_contrasenaConfirm" class="campo-registro" type="password"
                                                placeholder="Confirme su contrase�a">
                                            <label for="registro_contrasenaConfirm" class="active"><?=label('formRegistro_contrasenaConfirm');?></label>
                                        </div>
                                        <div class="file-field col s12">
                                            <br />
                                            <label for="registro_fotografia"><?=label('formRegistro_fotografia');?></label>
                                            <div class="file-field input-field col s12">
                                                <input class="file-path validate campo-registro" type="text"/>
                                                <div class="btn btn-filled registrar" data-toggle="tooltip" title="<?=label('tooltip_examinar')?>">
                                                    <span><i class="mdi-action-search"></i></span>
                                                    <input class="file-path" type="file" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col sm12 md12 bloque-captcha">
                                            <div class="captcha">
                                                <img class="responsive-img" src="<?=base_url()?>assets/dashboard/images/captcha.png" alt=""/>
                                            </div>
                                            <input type="text" name=""/><label for="">Ingrese el captcha</label>
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
<!-- END CONTENT


<!-- lista modals -->
<div id="eliminar" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
    </div>
    <div class="modal-content">
        <p><?=label('confirmarEliminarContacto');?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close"><?=label('cancelar');?></a>
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<div id="editar" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <input id="client_code" type="text" value="Maria Rodriguez">
            <label for="client_code"><?=label('formCliente_nombreContacto');?></label>
        </div>
        <div class="input-field col s12">
            <input id="client_code" type="text" value="maria@gmail.com">
            <label for="client_code"><?=label('formCliente_correoContacto');?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close"><?=label('cancelar');?></a>
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<div id="agregar" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <input id="client_code" type="text" value="">
            <label for="client_code"><?=label('formCliente_nombreContacto');?></label>
        </div>
        <div class="input-field col s12">
            <input id="client_code" type="text" value="">
            <label for="client_code"><?=label('formCliente_correoContacto');?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close"><?=label('cancelar');?></a>
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<!-- Fin lista modals -->