<!--START CONTENT  -->
<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h1 class="breadcrumbs-title"><?= label('tituloPerfilEmpresa'); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <?php
    $idEmpresa = '';
    $cedulaEmpresa = '';
    $tipoEmpresa = '';
    $nombreEmpresa = '';
    $nombreFantasia = '';
    $correo = '';
    $sitioWeb = '';
    $telefono = '';
    $telefonoMovil = '';
    $fechaCreacion = '';
    $profesion = '';
    $tamano = '';
    $codigoCotizacion = '';
    $nombreRepresentante = '';
    $primerApellidoRepresentante = '';
    $segundoApellidoRepresentante = '';
    $pais = '';
    $provincia = '';
    $canton = '';
    $domicilio = '';
    //Contacto
    $idUsuario = '';
    $cedulaContacto = '';
    $nombreContacto = '';
    $primerApellidoContacto = '';
    $segundoApellidoContacto = '';
    $correoContacto = '';
    $puestoContacto = '';
    $fechaNacimientoContacto = '';
    $telefonoFijoContacto = '';
    $telefonoMovilContacto = '';
    $contrasena = '';
    $ruta = base_url().'files/empresas/';
    $rutaFirma = base_url().'files/empresas/';
    if (isset($resultado)) {
        $idEmpresa = encryptIt($resultado['idEmpresa']);
        $cedulaEmpresa = $resultado['cedula'];
        $tipoEmpresa = $resultado['empresa'];
        $nombreEmpresa = $resultado['nombre'];
        $nombreFantasia = $resultado['nombreFantasia'];
        $correo = $resultado['correo'];
        $sitioWeb = $resultado['sitioWeb'];
        $telefono = $resultado['telefono'];
        $telefonoMovil = $resultado['telefonoMovil'];
        $fechaCreacion = $resultado['fechaCreacion'];
        $profesion = $resultado['profesion'];
        $tamano = $resultado['tamano'];
        $codigoCotizacion = $resultado['codigoCotizacion'];
        $nombreRepresentante = $resultado['nombreRepresentante'];
        $primerApellidoRepresentante = $resultado['primerApellidoRepresentante'];
        $segundoApellidoRepresentante = $resultado['segundoApellidoRepresentante'];
        $pais = $resultado['direccion']['pais'];
        $provincia = $resultado['direccion']['provincia'];
        $canton = $resultado['direccion']['canton'];
        $domicilio = $resultado['direccion']['domicilio'];
        //Contacto
        $idUsuario = $resultado['usuario']['idUsuario'];
        $nombreContacto = $resultado['usuario']['nombre'];
        $primerApellidoContacto = $resultado['usuario']['primerApellido'];
        $segundoApellidoContacto = $resultado['usuario']['segundoApellido'];
        $correoContacto = $resultado['usuario']['correo'];
//        $cedulaContacto = $resultado['usuario']['cedula'];
//        $puestoContacto = $resultado['usuario']['puesto'];
//        $fechaNacimientoContacto = $resultado['usuario']['fechaNacimiento'];
//        $telefonoFijoContacto = $resultado['usuario']['telefonoFijo'];
//        $telefonoMovilContacto = $resultado['usuario']['telefonoMovil'];
//        $contrasena = $resultado['usuario']['contrasena'];

        if($resultado['logo'] != '' && $resultado['logo'] != null && $resultado['logo'] != 'profile_picture_'.$resultado['idEmpresa'].'.') {
            $ruta .= $resultado['idEmpresa'].'/'.$resultado['logo'];
        } else {
            $ruta = base_url().'files/default-user-image.png';
        }
        if($resultado['firma'] != '' && $resultado['firma'] != null && $resultado['firma'] != 'img_firmaEmpresa_'.$resultado['idEmpresa'].'.') {
            $rutaFirma .= $resultado['idEmpresa'].'/'.$resultado['firma'];
        } else {
            $rutaFirma = base_url().'files/default-sign-image.png';
        }
    } else {
        $ruta = base_url().'files/default-user-image.png';
        $rutaFirma = base_url().'files/default-sign-image.png';
    }
    ?>

    <!--start container-->
    <div class="container">
        <div id="chart-dashboard">
            <div class="row">
                <div class="col s12">
                    <div id="submit-button" class="section">
                        <div class="row">
                            <div class="col s12">
                                <?php $this->load->helper('form'); ?>
                                <?php echo form_open_multipart(base_url().'registro/modificar',
                                    array('id' => 'form_registroEditar', 'method' => 'POST', 'class' => 'col s12')); ?>
                                    <div class="row">
                                        <div class="col offset-s3 s6 m6 l6">
                                            <div id="empresa_logo_editar" class="cliente-ver-logo" style="margin: 5px 0;">
                                                <a class="modal-trigger" href="#cambio-imagen" title="Cambiar logo" style="position: relative; cursor:pointer;">
                                                    <img id="empresa_logo" alt="Logo de la empresa" src="<?= $ruta; ?>" style="position:relative;height: 200px;width: 200px;" />
                                                    <img id="icon-image-edit" src="<?= base_url() ?>files/edit-image.png">
                                                </a>
                                            </div>
                                        </div>

                                        <div id="datosEmpresa" style="display: none;">
                                            <div class="col s12 m6 l6" style="padding: 0;">
                                                <div class="input-field col s12">
                                                    <input id="empresa_idEmpresa" name="empresa_idEmpresa" type="text" value="<?= $cedulaEmpresa;?>">
                                                    <label for="empresa_idEmpresa"><?= label('formEmpresa_identificacionJuridica'); ?></label>
                                                </div>
                                                <div class="input-field col s12">
                                                    <input id="empresa_empresaNombre" name="empresa_empresaNombre" type="text" value="<?= $nombreEmpresa;?>">
                                                    <label for="empresa_empresaNombre"><?= label('formEmpresa_nombreEmpresa'); ?></label>
                                                </div>
                                                <div class="input-field col s12">
                                                    <input id="empresa_empresaNombreFantasia" name="empresa_empresaNombreFantasia" type="text" value="<?= $nombreFantasia;?>">
                                                    <label for="empresa_empresaNombreFantasia"><?= label('formEmpresa_nombreFantasia'); ?></label>
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="empresa_empresaCorreo" name="empresa_empresaCorreo" type="text" value="<?= $correo;?>">
                                                <label for="empresa_empresaCorreo"><?= label('formEmpresa_correoEmpresa'); ?></label>
                                            </div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="empresa_empresaTelefonoFijo" name="empresa_empresaTelefonoFijo" type="text" value="<?= $telefono;?>">
                                                <label for="empresa_empresaTelefonoFijo"><?= label('formEmpresa_telefonoFijo'); ?></label>
                                            </div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="empresa_empresaTelefonoMovil" name="empresa_empresaTelefonoMovil" type="text" value="<?= $telefonoMovil;?>">
                                                <label for="empresa_empresaTelefonoMovil"><?= label('formEmpresa_telefonoMovil'); ?></label>
                                            </div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="empresa_empresaSitioweb" name="empresa_empresaSitioweb" type="text" value="<?= $sitioWeb;?>">
                                                <label for="empresa_empresaSitioweb"><?= label('formEmpresa_sitioWeb'); ?></label>
                                            </div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="empresa_fechaCreacion" name="empresa_fechaCreacion" type="text" class="datepicker-fecha" value="<?= $fechaCreacion; ?>">
                                                <label for="empresa_fechaCreacion"><?= label('formEmpresa_fechaCreacion'); ?></label>
                                            </div>
                                            <div class="input-field col s12 m6 l6">
                                                <select id="empresa_tamano" name="empresa_tamano">
                                                    <option value="0" selected disabled><?= label('formRegistro_seleccioneUno'); ?></option>
                                                    <option value="1">1 a 5</option>
                                                    <option value="2">6 a 10</option>
                                                    <option value="3">11 a 25</option>
                                                    <option value="4">26 a 50</option>
                                                    <option value="5">50+</option>
                                                    <option value="6">100+</option>
                                                    <option value="7">250+</option>
                                                    <option value="8">500+</option>
                                                </select>
                                                <label for="empresa_tamano"><?= label('formEmpresa_tamano'); ?></label>
                                            </div>
                                        </div>
                                        <div id="datosTrabajadorIndependiente" style="display: block;">
                                            <div class="col s12 m6 l6" style="padding: 0;">
                                                <div class="input-field col s12">
                                                    <input id="empresa_idTrabajador" name="empresa_idTrabajador" type="text" value="<?= $cedulaEmpresa; ?>">
                                                    <label for="empresa_idTrabajador"><?= label('formEmpresa_identificacionFisica'); ?></label>
                                                </div>
                                                <div class="input-field col s12">
                                                    <input id="empresa_trabajadorNombreArtistico" name="empresa_trabajadorNombreArtistico" type="text" value="<?= $nombreEmpresa; ?>">
                                                    <label for="empresa_trabajadorNombreArtistico"><?= label('formEmpresa_nombreArtisticoTrabajador'); ?></label>
                                                </div>
                                            </div>
                                            <div class="col s12" style="padding: 0;">
                                                <div class="input-field col s12 m4 l4">
                                                    <input id="empresa_trabajadorNombre" name="empresa_trabajadorNombre" type="text" value="<?= $nombreContacto; ?>">
                                                    <label for="empresa_trabajadorNombre"><?= label('formEmpresa_nombreTrabajador'); ?></label>
                                                </div>
                                                <div class="input-field col s12 m4 l4">
                                                    <input id="empresa_trabajadorPrimerApellido" name="empresa_trabajadorPrimerApellido" type="text" value="<?= $primerApellidoContacto; ?>">
                                                    <label for="empresa_trabajadorPrimerApellido"><?= label('formEmpresa_primerApellidoTrabajador'); ?></label>
                                                </div>
                                                <div class="input-field col s12 m4 l4">
                                                    <input id="empresa_trabajadorSegundoApellido" name="empresa_trabajadorSegundoApellido" type="text" value="<?= $segundoApellidoContacto; ?>">
                                                    <label for="empresa_trabajadorSegundoApellido"><?= label('formEmpresa_segundoApellidoTrabajador'); ?></label>
                                                </div>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="empresa_trabajadorCorreo" name="empresa_trabajadorCorreo" type="text" value="<?= $correoContacto; ?>">
                                                <label for="empresa_trabajadorCorreo"><?= label('formEmpresa_CorreoTrabajador'); ?></label>
                                            </div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="empresa_trabajadortelefonoFijo" name="empresa_trabajadortelefonoFijo" type="text" value="<?= $telefono; ?>">
                                                <label for="empresa_trabajadortelefonoFijo"><?= label('formEmpresa_telefonoFijoTrabajador'); ?></label>
                                            </div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="empresa_trabajadorTelefonoMovil" name="empresa_trabajadorTelefonoMovil" type="text" value="<?= $telefonoMovil; ?>">
                                                <label for="empresa_trabajadorTelefonoMovil"><?= label('formEmpresa_TelefonoMovilTrabajador'); ?></label>
                                            </div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="empresa_trabajadorProfesion" name="empresa_trabajadorProfesion" type="text" value="<?= $profesion; ?>">
                                                <label for="empresa_trabajadorProfesion"><?= label('formEmpresa_ProfesionTrabajador'); ?></label>
                                            </div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="empresa_trabajadorSitioWeb" name="empresa_trabajadorSitioWeb" type="text" value="<?= $sitioWeb; ?>">
                                                <label for="empresa_trabajadorSitioWeb"><?= label('formEmpresa_sitioWebTrabajador'); ?></label>
                                            </div>
                                            <div class="input-field col s12 m6 l6">
                                                <input id="empresa_trabajadorFechaNacimiento" name="empresa_trabajadorFechaNacimiento" type="text" value="<?= $fechaCreacion; ?>" class="datepicker-fecha">
                                                <label for="empresa_trabajadorFechaNacimiento"><?= label('formEmpresa_trabajadorFechaNacimiento'); ?></label>
                                            </div>
                                        </div>

                                        <div>
                                            <input name="empresa_idUsuario" type="text" style="display: none;" value="<?= $idUsuario; ?>">
                                            <div class="input-field col s12">
                                                <select id="empresa_actividadComercial" name="empresa_actividadComercial" onchange="datosEmpresa(this)">
                                                    <option value="1" selected><?= label('formRegistro_trabajadorIndependiente'); ?></option>
                                                    <option value="2"><?= label('formRegistro_empresa'); ?></option>
                                                </select>
                                                <label for="empresa_actividadComercial"><?= label('formEmpresa_actividadComercial'); ?></label>
                                            </div>
                                            <div>
                                                <div class="col s12">
                                                    <h5><?= label('formEmpresa_direccion'); ?></h5>
                                                </div>
                                                <div class="input-field col s12 m4 l4 inputSelector">
                                                    <label for="empresa_direccionPais"><?= label('formEmpresa_direccionPais'); ?></label>
                                                    <br>
                                                    <select data-placeholder="<?= label('formEmpresa_seleccioneUno'); ?>" data-incluirBoton="0" id="empresa_direccionPais" name="empresa_direccionPais" class="browser-default chosen-select">
                                                        <option value="0" disabled selected style="display:none;"><?= label("formEmpresa_seleccioneUno"); ?></option>
                                                        <?php
                                                        if(isset($paises)) {
                                                            foreach ($paises as $p) { ?>
                                                                <option value="<?= $p['idPais']; ?>"><?= $p['nombre']; ?></option>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="input-field col s12 m4 l4">
                                                    <input id="empresa_direccionProvincia" name="empresa_direccionProvincia" type="text" value="<?= $provincia; ?>">
                                                    <label for="empresa_direccionProvincia"><?= label('formEmpresa_direccionProvincia'); ?></label>
                                                </div>
                                                <div class="input-field col s12 m4 l4">
                                                    <input id="empresa_direccionCanton" name="empresa_direccionCanton" type="text" value="<?= $canton; ?>">
                                                    <label for="empresa_direccionCanton"><?= label('formEmpresa_direccionCanton'); ?></label>
                                                </div>
                                                <div class="input-field col s12">
                                                    <input id="empresa_direccionDomicilio" name="empresa_direccionDomicilio" type="text" value="<?= $domicilio; ?>">
                                                    <label for="empresa_direccionDomicilio"><?= label('formEmpresa_direccionDomicilio'); ?></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="datosEmpresa_contacto" style="display: none;">
                                            <div class="col s12" style="padding: 0;">
                                                <div class="col s12">
                                                    <h5><?= label('formPerfil_datosContacto'); ?></h5>
                                                </div>
                                                <div class="input-field col s12 m4 l4">
                                                    <input id="empresa_nombreContacto" name="empresa_nombreContacto" type="text" value="<?= $nombreContacto; ?>">
                                                    <label for="empresa_nombreContacto"><?= label('formEmpresa_nombreContacto'); ?></label>
                                                </div>
                                                <div class="input-field col s12 m4 l4">
                                                    <input id="empresa_primerApellidoContacto" name="empresa_primerApellidoContacto" type="text" value="<?= $primerApellidoContacto; ?>">
                                                    <label for="empresa_primerApellidoContacto"><?= label('formEmpresa_primerApellidoContacto'); ?></label>
                                                </div>
                                                <div class="input-field col s12 m4 l4">
                                                    <input id="empresa_segundoApellidoContacto" name="empresa_segundoApellidoContacto" type="text" value="<?= $segundoApellidoContacto; ?>">
                                                    <label for="empresa_segundoApellidoContacto"><?= label('formEmpresa_segundoApellidoContacto'); ?></label>
                                                </div>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="empresa_correoContacto" name="empresa_correoContacto" type="text" value="<?= $correoContacto; ?>">
                                                <label for="empresa_correoContacto"><?= label('formEmpresa_correoContacto'); ?></label>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="col s12">
                                                <h5><?= label('formEmpresa_infoCotizacion'); ?></h5>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="empresa_codigoCotizacion" name="empresa_codigoCotizacion" type="text" value="<?= $codigoCotizacion;?>">
                                                <label for="empresa_codigoCotizacion"><?= label('formEmpresa_codigoCotizacion'); ?></label>
                                            </div>
                                            <div class="input-field col s12 m4 l4">
                                                <input id="empresa_nombreRepresentante" name="empresa_nombreRepresentante" type="text" value="<?= $nombreRepresentante;?>">
                                                <label for="empresa_nombreRepresentante"><?= label('formEmpresa_nombreRepresentante'); ?></label>
                                            </div>
                                            <div class="input-field col s12 m4 l4">
                                                <input id="empresa_primerApellidoRepresentante" name="empresa_primerApellidoRepresentante" type="text" value="<?= $primerApellidoRepresentante;?>">
                                                <label for="empresa_primerApellidoRepresentante"><?= label('formEmpresa_primerApellidoRepresentante'); ?></label>
                                            </div>
                                            <div class="input-field col s12 m4 l4">
                                                <input id="empresa_segundoApellidoRepresentante" name="empresa_segundoApellidoRepresentante" type="text" value="<?= $segundoApellidoRepresentante;?>">
                                                <label for="empresa_segundoApellidoRepresentante"><?= label('formEmpresa_segundoApellidoRepresentante'); ?></label>
                                            </div>
                                            <div class="col s12">
                                                <label for="empresa_firma_editar" style="display: block;margin-bottom: 0.5rem;"><?= label('formEmpresa_tituloFirma'); ?></label>
                                                <div class="col s6 offset-m1 m4 offset-l1 l3">
                                                    <div id="empresa_firma_editar" class="cliente-ver-logo" style="margin: 5px 0;">
                                                        <a class="modal-trigger" href="#cambio-imagenFirma" title="Cambiar firma" style="position: relative; cursor:pointer;">
                                                            <img id="empresa_firma" alt="Logo de la empresa" src="<?= $rutaFirma; ?>" style="position:relative;height: 200px;width: 200px;" />
                                                            <img id="icon-image-edit" src="<?= base_url() ?>files/edit-image.png">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-field col s12 envio-formulario">
                                            <button class="btn waves-effect waves-light right" type="submit"
                                                    name="action"><?= label('formEmpresa_enviar'); ?>
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

    <?php
    $this->load->view('layout/default/menu-crear.php');
    ?>

</section>
<!-- END CONTENT-->

<!--Script para insercion de datos y para mostrar elementos -->
<script>
    $(document).ready(function () {
        $('#empresa_direccionPais').val('<?= $pais; ?>').change();
    });

    $(document).ready(function () {
        var actividadEmpresa = $('#empresa_actividadComercial');
        var tipo = '<?= $tipoEmpresa; ?>';
        if(tipo == 1) {
            actividadEmpresa.val(2).change();
        } else {
            actividadEmpresa.val(1).change();
        }
        var valorTamano = '<?= $tamano; ?>';
        if(valorTamano != '' && valorTamano != null) {
            $('#empresa_tamano').val(valorTamano).change();
        }
    });
    function validacionCorrecta(){
        var formulario = $('#form_registroEditar');
        var data = formulario.serialize();
        var url = formulario.attr('action');
        var method = formulario.attr('method');
        $.ajax({
            type: method,
            url: url,
            data: data,
            async: false,
            success: function(response) {
                if (response == 0) {
                    $('#transaccionIncorrecta').openModal();
                } else {
                    $('#transaccionCorrecta').openModal();
                }

                validarRegistroCompleto();
            }
        });
    }
    function validacionCorrecta_Imagen(){
        var formPW = $('#registro_cambioImagen');
        $.ajax({
            data: new FormData(formPW[0]),
            url: formPW.attr('action'),
            type: formPW.attr('method'),
            async: false,
            success:  function (response) {
                if(response == 0) {
                    alert('<?= label('usuarioErrorCambioImagen'); ?>');//error al ir a verificar identificaci�n
                } else {
                    alert('<?= label('usuarioExitoCambioEmagen'); ?>');
                    d = new Date();
                    $('#editarRegistro_imagen_seleccionada').attr('src', response + '?' + d.getTime());
                    $('#empresa_logo').attr('src', response + '?' + d.getTime());
                    formPW.find('input:file,input:text').val('');
                    $('#cambio-imagen .modal-header a').click();

                    validarRegistroCompleto();
                }
            },
            cache: false,
            contentType: false,
            processData: false
        });
    }
    function validacionCorrecta_ImagenFirma(){
        var formPW = $('#registro_cambioImagenFirma');
        $.ajax({
            data: new FormData(formPW[0]),
            url: formPW.attr('action'),
            type: formPW.attr('method'),
            async: false,
            success:  function (response) {
                if(response == 0) {
                    alert('<?= label('usuarioErrorCambioImagen'); ?>');//error al ir a verificar identificaci�n
                } else {
                    alert('<?= label('usuarioExitoCambioEmagen'); ?>');
                    d = new Date();
                    $('#editarRegistro_imagen_seleccionadaFirma').attr('src', response + '?' + d.getTime());
                    $('#empresa_firma').attr('src', response + '?' + d.getTime());
                    formPW.find('input:file,input:text').val('');
                    $('#cambio-imagenFirma .modal-header a').click();

                    validarRegistroCompleto();
                }
            },
            cache: false,
            contentType: false,
            processData: false
        });
    }
    function datosEmpresa(opcionSeleccionada) {
        if (opcionSeleccionada.value == "1") {
            document.getElementById('datosTrabajadorIndependiente').style.display = 'block';
            document.getElementById('datosEmpresa').style.display = 'none';
            document.getElementById('datosEmpresa_contacto').style.display = 'none';
        } else {
            document.getElementById('datosEmpresa').style.display = 'block';
            document.getElementById('datosEmpresa_contacto').style.display = 'block';
            document.getElementById('datosTrabajadorIndependiente').style.display = 'none';
        }
    }
</script>
<!--Script para select de busqueda-->
<script>
    $(document).on('ready', function(){
        var config = {'.chosen-select'           : {}}
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }

    });
</script>

<!-- lista modals -->
<div id="transaccionCorrecta" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('registroEditadoCorrectamente'); ?></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="transaccionIncorrecta" class="modal">
    <div  class="modal-header headerTransaccionIncorrecta">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('errorGuardar'); ?></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>

<div id="cambio-imagen" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <?php $this->load->helper('form'); ?>
        <?php echo form_open_multipart(base_url().'registro/cambio_imagen/', array('id' => 'registro_cambioImagen', 'method' => 'POST', 'class' => 'col s12')); ?>
        <div class="row">
            <div class="file-field col s12 m7 l9" style="padding: 0;">
                <label for="empresa_imagenLogo"><?= label('formEmpresa_logo'); ?></label>

                <div class="file-field input-field col s12" style="padding: 0;">
                    <input style="margin-left: 18% !important;width: 80% !important;"
                           name="empresa_imagenLogo" class="file-path" type="text" readonly/>

                    <div class="btn" data-toggle="tooltip" title="<?= label('tooltip_examinar') ?>" style="top: -15px;">
                        <span><i class="mdi-action-search"></i></span>
                        <input style="padding-right: 100px;" id="userfile" type="file" name="userfile"
                               accept="image/jpeg,image/png"/>
                    </div>
                </div>
            </div>
            <div class="col s12 m5 l3">
                <figure style="margin:0 10px;">
                    <img class="imagen_seleccionada" id="editarRegistro_imagen_seleccionada" src="<?= $ruta; ?>">
                </figure>
            </div>
            <div class="col s12">
                <h5 style="text-align: left;"><?= label('formEmpresa_nota'); ?></h5>
                <h6>- <?= label('formEmpresa_imagenTipoPreferible'); ?></h6>
            </div>
        </div>
        <div class="input-field col s12 envio-formulario" style="margin-bottom: 30px;">
            <button class="btn waves-effect waves-light right" type="submit" id="guardar-cambios-usuario"
                    name="action"><?= label('formUsuario_editar'); ?></button>
        </div>
        </form>
    </div>
</div>
<div id="cambio-imagenFirma" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <?php $this->load->helper('form'); ?>
        <?php echo form_open_multipart(base_url().'registro/cambio_imagenFirma/', array('id' => 'registro_cambioImagenFirma', 'method' => 'POST', 'class' => 'col s12')); ?>
            <div class="row">
                <div class="file-field col s12 m7 l9" style="padding: 0;">
                    <label for="empresa_imagenFirma"><?= label('formEmpresa_firma'); ?></label>

                    <div class="file-field input-field col s12" style="padding: 0;">
                        <input style="margin-left: 18% !important;width: 80% !important;"
                               name="empresa_imagenFirma" class="file-path" type="text" readonly/>

                        <div class="btn" data-toggle="tooltip" title="<?= label('tooltip_examinar') ?>" style="top: -15px;">
                            <span><i class="mdi-action-search"></i></span>
                            <input style="padding-right: 100px;" id="userfile2" type="file" name="userfile2"
                                   accept="image/jpeg,image/png"/>
                        </div>
                    </div>
                </div>
                <div class="col s12 m5 l3">
                    <figure style="margin:0 10px;">
                        <img class="imagen_seleccionada" id="editarRegistro_imagen_seleccionadaFirma" src="<?= $rutaFirma; ?>">
                    </figure>
                </div>
                <div class="col s12">
                    <h5 style="text-align: left;"><?= label('formEmpresa_nota'); ?></h5>
                    <h6>- <?= label('formEmpresa_imagenTipoPreferible'); ?></h6>
                </div>
            </div>
            <div class="input-field col s12 envio-formulario" style="margin-bottom: 30px;">
                <button class="btn waves-effect waves-light right" type="submit" id="guardar-cambios-usuario"
                        name="action"><?= label('formUsuario_editar'); ?></button>
            </div>
        </form>
    </div>
</div>
<!-- Fin lista modals-->

<!--Script para el manejo de la imagen de perfil e imagen de firma-->
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#editarRegistro_imagen_seleccionada').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURL_Firma(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#editarRegistro_imagen_seleccionadaFirma').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#cambio-imagen #userfile").change(function(){
        var file = this.files[0];
        var name = file.name;
        var size = file.size;
        var type = file.type;
        var t = type.split('/');
        var ext = t.slice(1, 2);
        if(size > 2097150) { //2097152
            alert("<?= label('usuarioErrorTamanoArchivo') ?>");
            document.getElementById('userfile').value = '';
        }
        var valid_ext = ['image/png','image/jpg','image/jpeg'];
        if(valid_ext.indexOf(type)==-1) {
            alert("<?= label('usuarioErrorTipoArchivo') ?>");
            document.getElementById('userfile').value = '';
        }
        if(document.getElementById('userfile').value == ''){
            $('#editarRegistro_imagen_seleccionada').attr('src', '<?= base_url(); ?>files/default-user-image.png');
        } else {
            readURL(this);
        }
    });
    $("#cambio-imagenFirma #userfile2").change(function(){
        var file = this.files[0];
        var name = file.name;
        var size = file.size;
        var type = file.type;
        var t = type.split('/');
        var ext = t.slice(1, 2);
        if(size > 2097150) { //2097152
            alert("<?= label('usuarioErrorTamanoArchivo') ?>");
            document.getElementById('userfile2').value = '';
        }
        var valid_ext = ['image/png','image/jpg','image/jpeg'];
        if(valid_ext.indexOf(type)==-1) {
            alert("<?= label('usuarioErrorTipoArchivo') ?>");
            document.getElementById('userfile2').value = '';
        }
        if(document.getElementById('userfile2').value == ''){
            $('#editarRegistro_imagen_seleccionadaFirma').attr('src', '<?= base_url(); ?>files/default-sign-image.png');
        } else {
            readURL_Firma(this);
        }
    });
</script>