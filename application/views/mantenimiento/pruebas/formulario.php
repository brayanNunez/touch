<!-- START CONTENT  -->

 <section id="content">

    <!--start container-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h1 class="breadcrumbs-title"><?=label('tituloFormularioCliente');?></h1>
                
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->

    <div class="container">
        <div id="chart-dashboard">
            <div class="row">
                <div class="col s12 m12 l12">

                    <div id="submit-button" class="section">
                        <div class="row">

                            <div class="col s12 m12 l8">
                                <!-- <div class="card"> -->

                                    <!-- <h4 class="uppercase mb16">Agregar cliente</h4> -->
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <select>
                                                    <option value="" disabled selected><?=label('formCliente_tipoPersona');?></option>
                                                    <option value="1"><?=label('formCliente_fisica');?></option>
                                                    <option value="2"><?=label('formCliente_juridica');?></option>
                                                </select>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="client_code" type="text">
                                                <label for="client_code"><?=label('formCliente_codigo');?></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="first_name" type="text">
                                                <label for="first_name"><?=label('formCliente_nombre');?></label>
                                            </div>

                                            <div class="input-field col s12">
                                                <input id="cliente_id" type="text">
                                                <label for="cliente_id"><?=label('formCliente_identificacion');?></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input type="date" class="datepicker">
                                                <label for=""><?=label('formCliente_fechaNacimiento');?></label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="email5" type="email">
                                                <label for="email5"><?=label('formCliente_correo');?></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="mobile_phone" type="text">
                                                <label for="mobile_phone"><?=label('formCliente_telefonoMovil');?></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="other_phone" type="text">
                                                <label for="other_phone"><?=label('formCliente_telefonoFijo');?></label>
                                            </div>
                                        </div>
                                        <div class="input-field col s12">
                                            <label><?=label('formCliente_Contactos');?></label>
                                            <br />
                                            <br />
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th><?=label('formCliente_nombreContacto');?></th>
                                                    <th><?=label('formCliente_correoContacto');?></th>
                                                    <th><?=label('formCliente_opcionesContacto');?></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Maria Rodriguez</td>
                                                    <td>maria@gmail.com</td>
                                                    <td>
                                                        <!-- <a class="btn btn-default">Ed</a>
                                                        <a class="btn btn-default">El</a> -->
                                                        <a class="modal-trigger" href="#login-page"><?=label('editar');?></a>
                                                        <a class="modal-trigger" href="#login"><?=label('eliminar');?></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Juan Perez</td>
                                                    <td>juan@gmail.com</td>
                                                    <td>
                                                        <a class="modal-trigger" href="#editar"><?=label('editar');?></a>
                                                        <a class="modal-trigger" href="#elminar"><?=label('eliminar');?></a>
                                    
                                                    </td>
                                                </tr>
                                                </tbody>


                                            </table>
                                            <a href="#agregar" class="btn btn-default modal-trigger"><?=label('formCliente_agregar');?></a>
                                        </div>
                                        <div class="input-field col s12">
                                            <label><?=label('formCliente_gustos_preferencias');?></label>
                                            <br />
                                            <br />
                                            <table class="table-bordered">
                                                <thead>
                                                <tr>
                                                    <th><?=label('formCliente_gustos');?></th>
                                                    <th><?=label('formCliente_estado');?></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Preferencia 1</td>
                                                    <td>
                                                        <div class="switch">
                                                            <label style="position: relative">
                                                                <?=label('off');?>
                                                                <input type="checkbox">
                                                                <span class="lever"></span> 
                                                                <?=label('on');?>
                                                            </label>
                                                        </div>
                                                        <br />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Preferencia 2</td>
                                                    <td>
                                                        <div class="switch">
                                                            <label style="position: relative">
                                                                <?=label('off');?>
                                                                <input type="checkbox">
                                                                <span class="lever"></span> 
                                                                <?=label('on');?>
                                                            </label>
                                                        </div>
                                                        <br />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Preferencia 3</td>
                                                    <td>
                                                        <div class="switch">
                                                            <label style="position: relative">
                                                                <?=label('off');?>
                                                                <input type="checkbox">
                                                                <span class="lever"></span> 
                                                                <?=label('on');?>
                                                            </label>
                                                        </div>
                                                        <br />
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <div class="input-field col s12">
                                                <div class="input-field col s8">
                                                    <input id="otro_gusto" type="text">
                                                    <label for="otro_gusto"><?=label('formCliente_nuevoGusto');?></label>
                                                </div>
                                                <div class="input-field col s4">
                                                    <a href="#" class="btn btn-default"><?=label('formCliente_agregar');?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field col s12">
                                            <label><?=label('formCliente_mediosContacto');?></label>
                                            <br />
                                            <br />
                                            <table class="table-bordered">
                                                <thead>
                                                <tr>
                                                    <th><?=label('formCliente_medio');?></th>
                                                    <th><?=label('formCliente_estadoMedio');?></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Medio 1</td>
                                                    <td>
                                                        <div class="switch">
                                                            <label style="position: relative">
                                                                <?=label('off');?>
                                                                <input type="checkbox">
                                                                <span class="lever"></span> 
                                                                <?=label('on');?>
                                                            </label>
                                                        </div>
                                                        <br />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Medio 2</td>
                                                    <td>
                                                        <div class="switch">
                                                            <label style="position: relative">
                                                                <?=label('off');?>
                                                                <input type="checkbox">
                                                                <span class="lever"></span> 
                                                                <?=label('on');?>
                                                            </label>
                                                        </div>
                                                        <br />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Medio 3</td>
                                                    <td>
                                                        <div class="switch">
                                                            <label style="position: relative">
                                                                <?=label('off');?>
                                                                <input type="checkbox">
                                                                <span class="lever"></span> 
                                                                <?=label('on');?>
                                                            </label>
                                                        </div>
                                                        <br />
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <div class="input-field col s12">
                                                <div class="input-field col s8">
                                                    <input id="otro_medio" type="text">
                                                    <label for="otro_medio"><?=label('formCliente_nuevoMedio');?></label>
                                                </div>
                                                <div class="input-field col s4">
                                                    <a href="#" class="btn btn-default"><?=label('formCliente_agregar');?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field col s12">
                                            <select>
                                                <option value="" disabled selected><?=label('formCliente_cotizador');?></option>
                                                <option value="1">Pepe</option>
                                                <option value="2">Juan</option>
                                                <option value="3">Maria</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <button class="btn waves-effect waves-light right" type="submit" name="action"><?=label('formCliente_enviar');?>
                                                    <i class="mdi-content-send right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                <!-- </div> -->
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
<div id="elminar" class="modal">
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

<div id="login" class="modal">
    <div class="modal-header white" style="min-height: 50px; ">
        <img style="display: block; margin: 0 auto; margin-top: 10px;" src="<?=base_url()?>assets/dashboard/images/materialize-logo.png" alt="materialize logo">
    </div>
    <div class="modal-content">
        <form action="<?=base_url()?>inicio">
            <div class="input-field col s12">
                <input id="login_username" type="text" value="">
                <label for="login_username"><?=label('login_username');?></label>
            </div>
            <div class="input-field col s12">
                <input id="login_password" type="text" value="">
                <label for="login_password"><?=label('login_password');?></label>
            </div>
            <div class="input-field col s12">
                <button class="btn waves-effect waves-light" style="width: 50%;" type="submit" name="action"><?=label('formCliente_enviar');?>
                    <i class="mdi-content-send right"></i>
                </button>
            </div>
        </form>
        <div class="input-field col s12">
            <a href="#">¿Olvidó su contraseña?</a>
        </div>
        <div class="input-field col s12">
            <a href="<?=base_url()?>welcome/registro" style="font-size: x-large;">Registrarse</a>
        </div>
    </div>
</div>

<div id="login-page" class="modal fade in" style="width: 25%; max-height: none; ">
    <div class="col s12 z-depth-4 card-panel" style="box-shadow: none; margin: 0px; padding-bottom: 0px; ">
        <form class="login-form" style="width: auto; ">
            <div class="row">
                <div class="input-field col s12 center">
                    <img src="<?=base_url()?>assets/dashboard/images/login-logo.png" alt="" class="circle responsive-img valign profile-image-login">
                    <p class="center login-form-text"><?=label('nombreSistema');?></p>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-social-person-outline prefix"></i>
                    <input id="username" type="text">
                    <label for="username" class="center-align"><?=label('login_username');?></label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-action-lock-outline prefix"></i>
                    <input id="password" type="password">
                    <label for="password"><?=label('login_password');?></label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m12 l12  login-text">
                    <input type="checkbox" id="remember-me" />
                    <label for="remember-me"><?=label('recordar')?></label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <a href="<?=base_url()?>inicio" class="btn waves-effect waves-light col s12"><?=label('loguear')?></a>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6 m6 l6">
                    <p class="margin medium-small"><a href="<?=base_url()?>welcome/registro"><?=label('registrar')?></a></p>
                </div>
                <div class="input-field col s6 m6 l6">
                    <p class="margin right-align medium-small"><a href="page-forgot-password.html"><?=label('contrasena_olvido')?></a></p>
                </div>
            </div>

        </form>
    </div>
</div>
<!-- Fin lista modals -->