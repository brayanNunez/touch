<!--START CONTENT  -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h1 class="breadcrumbs-title"><?= label('tituloFormularioPersona'); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--start container-->
    <div class="container">
        <div id="chart-dashboard">
            <div class="row">
                <div class="col s12">
                    <div id="submit-button" class="section">
                        <div class="row">
                            <div class="col s12">
                                <?php $this->load->helper('form'); ?>
                                <?php echo form_open_multipart(base_url().'proveedores/insertar',
                                    array('id' => 'formPersona', 'method' => 'POST', 'class' => 'col s12')); ?>
<!--                                <form id="formPersona" action="--><?//= base_url(); ?><!--proveedores/insertar" method="POST" class="col s12">-->
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select id="persona_tipoProveedor" name="persona_tipoProveedor"
                                                    onchange="tipoProveedor(this)">
                                                <option value="1" selected><?= label('formPersona_proveedor'); ?></option>
                                                <option value="2"><?= label('formPersona_empleado'); ?></option>
                                            </select>
                                            <label for="persona_tipoProveedor"><?= label('formPersona_tipoProveedor'); ?></label>
                                        </div>

                                        <div id="seleccion_TipoProveedor" class="input-field col s12">
                                            <select id="persona_tipo" name="persona_tipo" onchange="datosProveedor(this)">
                                                <option value="1" selected><?= label('formPersona_fisico'); ?></option>
                                                <option value="2"><?= label('formPersona_juridico'); ?></option>
                                            </select>
                                            <label for="persona_tipo"><?= label('formPersona_tipo'); ?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <select id="persona_nacionalidad" name="persona_nacionalidad">
                                                <option value="0" selected disabled><?= label('formPersona_seleccioneUno'); ?></option>
                                                <option value="1">Costa Rica</option>
                                                <option value="2">Colombia</option>
                                                <option value="3">USA</option>
                                                <option value="4">Brasil</option>
                                                <option value="5">Uruguay</option>
                                                <option value="6">Chile</option>
                                            </select>
                                            <label for="persona_nacionalidad"><?= label('formPersona_nacionalidad'); ?></label>
                                        </div>

                                        <div id="campos-proveedor-fisico" style="display: block;">
                                            <div class="input-field col s12">
                                                <input id="persona_identificacion" name="persona_identificacion" type="text">
                                                <label for="persona_identificacion"><?= label('formPersona_identificacion'); ?></label>
                                            </div>
                                            <div>
                                                <div class="input-field col s12 m4 l4">
                                                    <input id="persona_nombre" name="persona_nombre" type="text">
                                                    <label for="persona_nombre"><?= label('formPersona_nombre'); ?></label>
                                                </div>
                                                <div class="input-field col s12 m4 l4">
                                                    <input id="persona_apellido1" name="persona_apellido1" type="text">
                                                    <label for="persona_apellido1"><?= label('formPersona_apellido1'); ?></label>
                                                </div>
                                                <div class="input-field col s12 m4 l4">
                                                    <input id="persona_apellido2" name="persona_apellido2" type="text">
                                                    <label for="persona_apellido2"><?= label('formPersona_apellido2'); ?></label>
                                                </div>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="persona_correo" name="persona_correo" type="email">
                                                <label for="persona_correo"><?= label('formPersona_correo'); ?></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="persona_telefonoMovil" name="persona_telefonoMovil" type="text">
                                                <label for="persona_telefonoMovil">
                                                    <?= label('formPersona_telefonoMovil'); ?></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="persona_telefono" name="persona_telefono" type="text">
                                                <label for="persona_telefono">
                                                    <?= label('formProveedor_telefonoFijo'); ?></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="persona_fechaNacimiento" name="persona_fechaNacimiento" type="text" class="datepicker-fecha">
                                                <label for="persona_fechaNacimiento">
                                                    <?= label('formPersona_fechaNacimiento'); ?></label>
                                            </div>
                                        </div>

                                        <div id="campos-proveedor-juridico" style="display: none;">
                                            <div class="input-field col s12">
                                                <input id="personajuridico_identificacion" name="personajuridico_identificacion" type="text">
                                                <label for="personajuridico_identificacion">
                                                    <?= label('formPersona_identificacionJuridica'); ?></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="personajuridico_nombre" name="personajuridico_nombre" type="text">
                                                <label for="personajuridico_nombre">
                                                    <?= label('formPersona_nombreJuridico'); ?></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="personajuridico_nombreFantasia" name="personajuridico_nombreFantasia" type="text">
                                                <label for="personajuridico_nombreFantasia">
                                                    <?= label('formPersona_nombreFantasia'); ?></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="personajuridico_correo" name="personajuridico_correo" type="email">
                                                <label for="personajuridico_correo"><?= label('formPersona_correo'); ?></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="personajuridico_telefono" name="personajuridico_telefono" type="text">
                                                <label for="personajuridico_telefono"><?= label('formPersona_telefono'); ?></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="personajuridico_fax" name="personajuridico_fax" type="text">
                                                <label for="personajuridico_fax"><?= label('formPersona_fax'); ?></label>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="inputTag col s12" style="margin-bottom: 10px;">
                                                <label for="persona_palabrasClave"><?= label('formPersona_palabrasClave'); ?></label>
                                                <div id="persona_palabrasClave" class="example tags_keywords" style="margin-top: 10px;">
                                                    <div class="bs-example">
                                                        <input id="persona_palabras" name="persona_palabras" placeholder="<?= label('formPersona_palabrasClaveAnadir'); ?>" type="text"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-field col s12">
                                                <textarea id="persona_descripcion" name="persona_descripcion"
                                                          class="materialize-textarea" rows="4"></textarea>
                                                <label for="persona_descripcion"><?= label('formPersona_descripcion'); ?></label>
                                            </div>
                                        </div>

                                        <div class="col s12">
                                            <div class="file-field col s12 m7 l9" style="margin-top:45px;">
                                                <label for="persona_fotografia"><?= label('formPersona_fotografia'); ?></label>

                                                <div class="file-field input-field col s12">
                                                    <input name="persona_fotografia" class="file-path" type="text" readonly/>

                                                    <div class="btn" data-toggle="tooltip" title="<?= label('tooltip_examinar') ?>">
                                                        <span><i class="mdi-action-search"></i></span>
                                                        <input style="padding-right: 800px;" id="userfile" type="file" name="userfile"
                                                               accept="image/jpeg,image/png"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col s12 m5 l3">
                                                <figure>
                                                    <img id="imagen_seleccionada" src="<?= base_url(); ?>files/default-user-image.png">
                                                </figure>
                                            </div>
                                        </div>

                                        <div class="col s12">
                                            <ul class="tabs tab-demo-active z-depth-1 proveedor-info">
                                                <li class="tab col s3">
                                                    <a class="white-text darken-1 waves-effect waves-light active"
                                                       id="proveedor-tab-direccion" href="#tab-direccion"><i
                                                            class="mdi-maps-my-location"></i>
                                                        <?= label('formProveedor_direccion'); ?></a>
                                                </li>
                                                <li class="tab-interior tab col s3">
                                                    <a class="white-text darken-1 waves-effect waves-light"
                                                       id="proveedor-tab-contactos" href="#tab-contactos"><i
                                                            class="mdi-communication-contacts"></i>
                                                        <?= label('formProveedor_contactos'); ?></a>
                                                </li>
                                                <li class="tab-interior tab col s3">
                                                    <a class="white-text darken-1 waves-effect waves-light"
                                                       id="proveedor-tab-informacion" href="#tab-infoAdicional"><i
                                                            class="mdi-av-queue"></i>
                                                        <?= label('formProveedor_infoCotizacion'); ?></a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col s12">
                                            <div id="tab-direccion" class="card col s12">
                                                <div>
                                                    <div class="input-field col s12 m4 l4">
                                                        <input id="persona_direccionPais" name="persona_direccionPais" type="text">
                                                        <label for="persona_direccionPais"><?= label('formPersona_direccionPais'); ?></label>
                                                    </div>
                                                    <div class="input-field col s12 m4 l4">
                                                        <input id="persona_direccionProvincia" name="persona_direccionProvincia" type="text">
                                                        <label for="persona_direccionProvincia"><?= label('formPersona_direccionProvincia'); ?></label>
                                                    </div>
                                                    <div class="input-field col s12 m4 l4">
                                                        <input id="persona_direccionCanton" name="persona_direccionCanton" type="text">
                                                        <label for="persona_direccionCanton"><?= label('formPersona_direccionCanton'); ?></label>
                                                    </div>
                                                    <div class="input-field col s12 m12 l12">
                                                        <input id="persona_direccionDomicilio" name="persona_direccionDomicilio" type="text">
                                                        <label for="persona_direccionDomicilio"><?= label('formPersona_direccionDomicilio'); ?></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tab-contactos" class="card col s12">
                                                <div id="contenedorContactos">

                                                </div>
                                                <div class="row" id="tab-contactos-nuevo" style="padding: 20px;">
                                                    <a onclick="agregarNuevoContacto();">
                                                        <?= label('formProveedor_contactoAgregar') ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="tab-infoAdicional" class="card col s12">
                                                <h5>Presupuesto promedio del proveedor</h5>
                                                <p>* Exclusivo para proveedores de servicios, no tiene fines contables</p>
                                                <table id="proveedor_presupuestos" class="data-table-information responsive-table display">
                                                    <thead>
                                                        <tr>
                                                            <th style="text-align: center;">
                                                                <input class="filled-in checkbox checkall" type="checkbox"
                                                                       id="checkbox-all" onclick="toggleChecked(this.checked)"/>
                                                                <label for="checkbox-all"></label>
                                                            </th>
                                                            <th><?= label('formProveedor_salariosTipo'); ?></th>
                                                            <th><?= label('formProveedor_salariosMonto'); ?></th>
                                                            <th><?= label('formProveedor_salariosPorDefecto'); ?></th>
                                                            <th><?= label('formProveedor_salariosOpciones'); ?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tablaPresupuestos">
                                                    </tbody>
                                                </table>
                                                <div style="padding: 20px;">
                                                    <a id="btn_accionAgregarPresupuesto" href="#agregarPresupuesto"
                                                       class="btn btn-default modal-trigger"><?= label('formProveedor_nuevoPresupuesto'); ?></a>

                                                    <div class="tabla-conAgregar tabla-salarios-proveedor">
                                                        <a id="opciones-seleccionados-delete"
                                                           class="modal-trigger waves-effect black-text opciones-seleccionados option-delete-elements"
                                                           style="visibility: hidden;"
                                                           href="#eliminarElementosSeleccionados" data-toggle="tooltip"
                                                           title="<?= label('opciones_seleccionadosEliminar') ?>">
                                                            <i class="mdi-action-delete icono-opciones-varios"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-field col s12 envio-formulario">
                                            <button class="btn waves-effect waves-light right" type="submit"
                                                    name="action"><?= label('formPersona_enviar'); ?>
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

<div style="display: none">
    <a id="linkModalGuardado" href="#transaccionCorrecta" class="btn btn-default modal-trigger"></a>
    <a id="linkModalError" href="#transaccionIncorrecta" class="btn btn-default modal-trigger"></a>
</div>
<div style="visibility:hidden; position:absolute">
    <input id="cantidadContactos" form="formPersona" name="cantidadContactos" type="text" value="0">
    <input id="cantidadPresupuestos" form="formPersona" name="cantidadPresupuestos" type="text" value="0">
    <a id="linkContactosElimminar" href="#eliminarContacto" class="modal-trigger" data-fila-eliminar="1"
       title="<?= label('formProveedor_contactoEliminar') ?>"><i class="mdi-action-delete medium" style="color: black;"></i></a>
</div>
<!-- END CONTENT-->

<!-- Funcion de insercion de datos-->
<script>
    function validacionCorrecta_Persona(){
        var formulario = $('#formPersona');
        var data = new FormData(formulario[0]);
        var url = formulario.attr('action');
        var method = formulario.attr('method');
        $.ajax({
            type: method,
            url: url,
            data: data,
            success: function(response) {
                switch(response) {
                    case '0':
                        $('#linkModalError').click();
                        break;
                    case '1':
                        $('#linkModalGuardado').click();
                        $('form')[0].reset();
                        break;
                }
            },
            cache: false,
            contentType: false,
            processData: false
        });
    }
</script>

<!--script para el manejo de la imagen de la persona-->
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imagen_seleccionada').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#userfile").change(function(){
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
            $('#imagen_seleccionada').attr('src', '<?= base_url(); ?>files/default-user-image.png');
        } else {
            $('#usuario_fotografia').attr('value', ext);
            readURL(this);
        }
    });
</script>

<!-- Script para tags -->
<script>
    $(document).ready(function () {

        var vendedores = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // prefetch: 'http://localhost/Proyectos/touch/assets/dashboard/js/json/vendedores.json'
            prefetch: {
                url: '<?=base_url()?>Cotizacion/jsonVendedores',
                ttl: 1000
            }
        });

        vendedores.initialize();

        elt = $('.tags_vendedores > > input');
        elt.tagsinput({
            itemValue: 'value',
            itemText: 'text',
            typeaheadjs: {
                name: 'vendedores',
                displayKey: 'text',
                source: vendedores.ttAdapter()
            }
        });

//        elt.tagsinput('add', {"value": 1, "text": "Brayan Nuñez Rojas", "continent": "Europe"});
//        elt.tagsinput('add', {"value": 4, "text": "Anthony Nuñez Rojas", "continent": "America"});
//        elt.tagsinput('add', {"value": 7, "text": "Maria Perez Salas", "continent": "Australia"});
//        elt.tagsinput('add', {"value": 10, "text": "Carlos David Rojas", "continent": "Asia"});
//        elt.tagsinput('add', {"value": 13, "text": "Diego Alfaro Rojas", "continent": "Africa"});


        var gusto = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: {
                url: '<?=base_url()?>Cotizacion/jsonGustos',
                ttl: 1000,
                filter: function (list) {
                    return $.map(list, function (gusto) {
                        return {name: gusto};
                    });
                }
            }
        });
        gusto.initialize();


        $('.tags_keywords  > > input').tagsinput({
            typeaheadjs: {
                name: 'gusto',
                displayKey: 'name',
                valueKey: 'name',
                source: gusto.ttAdapter()
            }
        });


        var mediosContacto = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // prefetch: 'http://localhost/Proyectos/touch/assets/dashboard/js/json/gustos.json'
            prefetch: {
                url: '<?=base_url()?>Cotizacion/jsonContactos',
                ttl: 1000,
                filter: function (list) {
                    return $.map(list, function (mediosContacto) {
                        return {name: mediosContacto};
                    });
                }
            }
        });
        mediosContacto.initialize();


        var elt = $('.tags_mediosContacto > > input');
        elt.tagsinput({
            typeaheadjs: {
                name: 'mediosContacto',
                displayKey: 'name',
                valueKey: 'name',
                source: mediosContacto.ttAdapter()
            }
        });


        $('.boton-opciones').on('click', function (event) {
            var elementoActivo = $(this).siblings('ul.active');
            if (elementoActivo.length > 0) {
                var estado = elementoActivo.css("display");
                if (estado == "block") {
                    elementoActivo.css("display", "none");
                    elementoActivo.style.display = 'none';
                } else {
                    elementoActivo.css("display", "block");
                    elementoActivo.style.display = 'block';
                }
            }
        });
    });
</script>

<!-- Funcion para mostrar elementos -->
<script>
    function tipoProveedor(opcionSeleccionada) {
        if (opcionSeleccionada.value == "1") {
            document.getElementById('seleccion_TipoProveedor').style.display = 'block';
        } else {
            document.getElementById('seleccion_TipoProveedor').style.display = 'none';
            document.getElementById('campos-proveedor-fisico').style.display = 'block';
            document.getElementById('campos-proveedor-juridico').style.display = 'none';
        }
    }
    function datosProveedor(opcionSeleccionada) {
        if (opcionSeleccionada.value == "1") {
            document.getElementById('campos-proveedor-fisico').style.display = 'block';
            document.getElementById('campos-proveedor-juridico').style.display = 'none';
//            document.getElementById('tabs-proveedor-fisico').style.display = 'block';
//            document.getElementById('tabs-proveedor-juridico').style.display = 'none';
        } else {
            document.getElementById('campos-proveedor-fisico').style.display = 'none';
            document.getElementById('campos-proveedor-juridico').style.display = 'block';
//            document.getElementById('tabs-proveedor-fisico').style.display = 'none';
//            document.getElementById('tabs-proveedor-juridico').style.display = 'block';
        }
    }

    var contactoEliminar = null;
    $(document).on('click','.confirmarEliminarContacto', function () {
        contactoEliminar = $(this).parent().parent();
        $('#linkContactosElimminar').click();//esto se hace porque al agregar un <a class="modal-trigger"> dinamicamente con el metodo de agregarNuevoContacto() pareciera no servir, entonces lo que se hace es llamar al evento click del modal-trigger con el id = linkContactosElimminar
    });
    $(document).on('click','#eliminarContacto #botonEliminar', function () {
        event.preventDefault();
        contactoEliminar.fadeOut(function () {
            contactoEliminar.remove();
        });
        cantidad--;
        actualizarCantidad();
    });
    function actualizarCantidad(){
        $('#cantidadContactos').val(cantidad);
    }
    var cantidad = 0;
    var contador = 0;
    function agregarNuevoContacto() {
        cantidad++;
        actualizarCantidad();
        $('#contenedorContactos').append('' +
            '<div id="' + contador + '" class="row">' +
                '<div class="col s12 m11 l11">' +
                    '<div class="row">' +
                        '<div class="input-field col s12 m4 l4">' +
                            '<input id="proveedor_contactoNombre_' + contador + '" name="proveedor_contactoNombre_' + contador + '" type="text">' +
                            '<label for="proveedor_contactoNombre_' + contador + '"><?= label("formContacto_nombre"); ?></label>' +
                        '</div>' +
                        '<div class="input-field col s12 m4 l4">' +
                            '<input style="display:none" name="contacto_'+ contador +'" type="text">' +
                            '<input id="proveedor_contactoApellido1_' + contador + '" name="proveedor_contactoApellido1_' + contador + '" type="text">' +
                            '<label for="proveedor_contactoApellido1_' + contador + '"><?= label("formContacto_apellido1"); ?></label>' +
                        '</div>' +
                        '<div class="input-field col s12 m4 l4">' +
                            '<input id="proveedor_contactoApellido2_' + contador + '" name="proveedor_contactoApellido2_' + contador + '" type="text">' +
                            '<label for="proveedor_contactoApellido2_' + contador + '"><?= label("formContacto_apellido2"); ?></label>' +
                        '</div>' +
                    '</div>' +
                '<div class="row">' +
                    '<div class="input-field col s12 m6 l6">' +
                        '<div>' +
//                            '<input id="proveedor_contactoCorreo_' + contador + '" name="proveedor_contactoCorreo_' + contador + '" type="email" style="margin-bottom: 0;">' +
                            '<input id="proveedor_contactoCorreo_' + contador + '" name="proveedor_contactoCorreo_' + contador + '" type="email">' +
                            '<label for="proveedor_contactoCorreo_' + contador + '"><?= label('formProveedor_correo'); ?></label>' +
                        '</div>' +
//                        '<div style="margin-bottom: 20px;">' +
//                            '<input type="checkbox" class="filled-in" id="checkbox_contactoCorreoProveedor_' + contador + '" name="checkbox_contactoCorreoProveedor_' + contador + '" />' +
//                            '<label for="checkbox_contactoCorreoProveedor_' + contador + '" style="margin-bottom: 20px;">' +
//                            '<?//= label('formProveedor_correoCheck') ?>//' +
//                            '</label>' +
//                        '</div>' +
                    '</div>' +
                    '<div class="input-field col s12 m3 l3">' +
                        '<input id="proveedor_contactoPuesto_' + contador + '" name="proveedor_contactoPuesto_' + contador + '" type="text">' +
                        '<label for="proveedor_contactoPuesto_' + contador + '"><?= label('formContacto_puesto'); ?></label>' +
                    '</div>' +
                    '<div class="input-field col s12 m3 l3">' +
                        '<input id="proveedor_contactoTelefono_' + contador + '" name="proveedor_contactoTelefono_' + contador + '" type="text">' +
                        '<label for="proveedor_contactoTelefono_' + contador + '"><?= label('formContacto_telefono'); ?></label>' +
                    '</div>' +
                '</div>' +

                '</div>' +
                '<div class="col s12 m1 l1 btn-contacto-eliminar-edicion">' +
//                    '<a href="#eliminarContacto" class="modal-trigger" title="<?//= label('formProveedor_contactoEliminar') ?>//"><i class="mdi-action-delete medium" style="color: black;"></i></a>' +
                    '<a class="confirmarEliminarContacto" data-fila-eliminar="' + contador + '" title="<?= label('formProveedor_contactoEliminar') ?>"><i class="mdi-action-delete medium" style="color: black;"></i></a>' +
                '</div>' +
            '</div>' +
            '<div class="col s12">' +
                '<hr />' +
            '</div>'
        );
        contador++;
    }
</script>




<!--Funciones para presupuestos-->
<script>
    var nombres = [];
    var idEditar = 0;
    $(document).ready(function () {
        <?php
            $nombres = array();
            if(isset($tiposPresupuesto)) {
                foreach ($tiposPresupuesto as $tipo) { ?>
        nombres['<?= $tipo['idTipoPresupuesto'] ?>'] = '<?= $tipo['nombre'] ?>';
                <?php }
            }
        ?>
    });
    function actualizarCantidadPresupuestos(){
        $('#cantidadPresupuestos').val(cantidadPresupuesto);
    }
    var cantidadPresupuesto = 0;
    var contadorPresupuesto = 0;
    $(document).on('click', '#btn_accionAgregarPresupuesto', function () {
        var selectTipo = $('#agregarPresupuesto_tipo');
        selectTipo.empty();
        selectTipo.append($('<option>', {
            value: 0,
            text: 'Seleccione uno',
            selected: true,
            disabled: true
        }));
        var i;
        for(i = 0; i < nombres.length; i++) {
            var name = nombres[i];
            if(name != null && name != '') {
                selectTipo.append($('<option>', {
                    value: i,
                    text: nombres[i],
                    selected: false
                }));
            }
        }
        selectTipo.material_select();
    });
    $(document).on('click', '#agregarPresupuesto #btnAgregarPresupuesto', function () {
        var tipo = $('#agregarPresupuesto_tipo');
        var nombreTipo = nombres[tipo.val()];
        var monto = $('#agregarPresupuesto_monto');
        agregarNuevoPresupuesto(tipo.val(), nombreTipo, monto.val());
//        tipo.val(0).change();
        monto.val('');
    });
    function agregarNuevoPresupuesto(tipo, nombreTipo, monto) {
        cantidadPresupuesto++;
        actualizarCantidadPresupuestos();
        var check = '<td>' +
                        '<div style="text-align: center;">' +
                            '<input style="display:none" name="presupuesto_'+ contadorPresupuesto +'" type="text">' +
                            '<input type="checkbox" class="filled-in checkbox" id="checkbox_presupuesto'+ contadorPresupuesto +'"/>' +
                            '<label for="checkbox_presupuesto'+ contadorPresupuesto +'"></label>' +
                        '</div>' +
                    '</td>';
        var tipoP = '<td>' +
                        '<span id="span_presupuesto'+ contadorPresupuesto +'_tipo">' + nombreTipo + '</span><input type="text" name="presupuesto'+ contadorPresupuesto +'_tipo" id="presupuesto'+ contadorPresupuesto +'_tipo" value="'+ tipo +'" style="display: none;" />' +
                    '</td>';
        var montoP = '<td>'+
                        '<span id="span_presupuesto'+ contadorPresupuesto +'_monto">' + monto + '</span><input type="text" name="presupuesto'+ contadorPresupuesto +'_monto" id="presupuesto'+ contadorPresupuesto +'_monto" value="'+ monto +'" style="display: none;" />' +
                    '</td>';
        var principal = '<td>' +
                        '<input type="radio" name="radioPresupuestoPrincipal" id="radio_presupuesto'+ contadorPresupuesto +'" checked="checked"/>' +
                        '<label for="radio_presupuesto'+ contadorPresupuesto +'"></label>' +
                    '</td>';
        var opciones = '<td>' +
                            '<ul id="dropdown_presupuesto'+ contadorPresupuesto +'" class="dropdown-content">' +
                                '<li>' +
                                    '<a href="#editarPresupuesto" class="-text modal-trigger abrirEditar" data-id-editar="'+ contadorPresupuesto + '"><?= label('menuOpciones_editar') ?></a>' +
                                '</li>' +
                                '<li>' +
                                    '<a href="#eliminarPresupuesto" class="-text modal-trigger confirmarEliminar" data-id-eliminar="'+ contadorPresupuesto +'" data-fila-eliminar="fila'+ contadorPresupuesto +'"><?= label('menuOpciones_eliminar') ?></a>' +
                                '</li>' +
                            '</ul>' +
                            '<a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown_presupuesto'+ contadorPresupuesto +'"><?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i> </a>' +
                        '</td>';

        $('#proveedor_presupuestos').dataTable().fnAddData([
            check,
            tipoP,
            montoP,
            principal,
            opciones
        ]);

        generarListasBotones();
        $('.modal-trigger').leanModal();
        contadorPresupuesto++;
    }

    $(document).on('click', '.abrirEditar', function () {
        idEditar = $(this).data('id-editar');
        var tipoActual = $('#presupuesto' + idEditar + '_tipo').val();
        var nombreTipo = nombres[tipoActual];
        var montoActual = $('#presupuesto' + idEditar + '_monto').val();

//        alert(tipoActual + '  -  ' + montoActual + '  -  ' + nombreTipo);
        var montoEditar = $('#editarPresupuesto_monto');
        montoEditar.val(montoActual);
        var selectTipo = $('#editarPresupuesto_tipo');
        selectTipo.empty();
        selectTipo.append($('<option>', {
            value: 0,
            text: 'Seleccione uno',
            disabled: true
        }));
        var i;
        for(i = 0; i < nombres.length; i++) {
            var name = nombres[i];
            if(name != null && name != '') {
                if(i == tipoActual) {
                    selectTipo.append($('<option>', {
                        value: i,
                        text: nombres[i],
                        selected: true
                    }));
                } else {
                    selectTipo.append($('<option>', {
                        value: i,
                        text: nombres[i]
                    }));
                }
            }
        }
        selectTipo.material_select();
    });
    $(document).on('click', '#editarPresupuesto #btnEditarPresupuesto', function () {
        var tipo = $('#editarPresupuesto_tipo');
        var nombreTipo = nombres[tipo.val()];
        var monto = $('#editarPresupuesto_monto');

//        alert(tipo.val() + '  -  ' + monto.val() + '  -  ' + nombreTipo);

        $('#presupuesto' + idEditar + '_tipo').val(tipo.val());
        $('#presupuesto' + idEditar + '_monto').val(monto.val());
        $('#span_presupuesto' + idEditar + '_tipo').text(nombreTipo);
        $('#span_presupuesto' + idEditar + '_monto').text(monto.val());

//        tipo.val(0).change();
        monto.val('');
    });

    function generarListasBotones(){
        $('.boton-opciones').sideNav({
                // menuWidth: 0, // Default is 240
                edge: 'right', // Choose the horizontal origin
                closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
            }
        );

        $('.dropdown-button').dropdown({
                inDuration: 300,
                outDuration: 225,
                constrain_width: true, // Does not change width of dropdown to that of the activator
                hover: false, // Activate on hover
                gutter: 0, // Spacing from edge
                belowOrigin: true, // Displays dropdown below the button
                alignment: 'left' // Displays dropdown with edge aligned to the left of button
            }
        );
    }
</script>

<script>
    $(document).on("ready", function () {

        <?php
       if (isset($lista)) {
           if ($lista === false) {?>

        $('#linkModalErrorCargarDatos').click();

        <?php
   }
   }
   ?>


        var idEliminar = 0;
        var fila = 0;

        $(document).on('click','.confirmarEliminar', function () {
//            idEliminar = $(this).data('id-eliminar');
            fila = $(this).parents('tr');
        });

        $('#eliminarPresupuesto #botonEliminar').on('click', function () {
            event.preventDefault();

            fila.fadeOut(function () {
                fila.remove();
                verificarChecks();
            });
        });
    });

    $(document).ready( function () {
        $('#proveedor_presupuestos').dataTable( {
            'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0, -1] //desactiva en primer y última columna opción de ordenar
            }]
        });
    });
    $(document).ready(function () {
        $('table#proveedor_presupuestos thead th:first').removeClass('sorting_asc').addClass('sorting_disabled');
        $('table#proveedor_presupuestos thead th:nth-child(2)').removeClass('sorting').addClass('sorting_asc');
    });
    $(document).ready(function () {
        $('#eliminarElementosSeleccionados #botonEliminar').on("click", function (event) {
            var tb = $(this).attr('title');
            var sel = false;
            var ch = $('#' + tb).find('tbody input[type=checkbox]');
            var marcados = $('.checkbox:checked').not('#checkbox-all').size();
            var contador = 0;
            ch.each(function () {
                var $this = $(this);
                if ($this.is(':checked')) {
                    sel = true;
                    var fila = $this.parents('tr');
                    fila.fadeOut(function () {
                        fila.remove();
                        verificarChecks();
                    });
                    contador++;
                    if (contador == marcados) {
                        $('#linkModalErrorEliminar').click();
                    }
                }
            });
            return false;
        });
    });

    $(window).load(function () {
        verificarChecks();
    });

    $(document).ready(function () {
        $('#checkbox-all').click(function (event) {
            var $this = $(this);
            var tableBody = $('#proveedor_presupuestos').find('tbody tr[role=row] input[type=checkbox]');
            tableBody.each(function() {
                var check = $(this);
                if ($this.is(':checked')) {
                    check.prop('checked', true);
                } else {
                    check.prop('checked', false);
                }
            });
        });
    });
    $(document).ready(function () {
        $(document).on('click','.checkbox',function (event) {
            verificarChecks();
        });
    });

    function verificarChecks(){

        var marcados = $('.checkbox:checked').not('#checkbox-all').size();
        if (marcados >= 1) {
            var elems = document.getElementsByClassName('opciones-seleccionados');
            var e;
            for (e in elems) {
                elems[e].style.visibility = 'visible';
            }
        } else {
            $('#checkbox-all').prop('checked', false);
            var elems = document.getElementsByClassName('opciones-seleccionados');
            var e;
            for (e in elems) {
                elems[e].style.visibility = 'hidden';
            }
        }
    }

    $(document).ready(function () {
        $('.boton-opciones').sideNav({
                // menuWidth: 0, // Default is 240
                edge: 'right', // Choose the horizontal origin
                closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
            }
        );

        $('.dropdown-button').dropdown({
                inDuration: 300,
                outDuration: 225,
                constrain_width: true, // Does not change width of dropdown to that of the activator
                hover: false, // Activate on hover
                gutter: 0, // Spacing from edge
                belowOrigin: true, // Displays dropdown below the button
                alignment: 'left' // Displays dropdown with edge aligned to the left of button
            }
        );
    });
</script>

<!-- lista modals -->
<div id="transaccionCorrecta" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('usuarioGuardadoCorrectamente'); ?></p>
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

<div id="eliminarContacto" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarContacto'); ?></p>
    </div>
    <div id="botonEliminar" class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>

<div id="agregarPresupuesto" class="modal" style="height: 55%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <select id="agregarPresupuesto_tipo">
            </select>
            <label for="agregarPresupuesto_tipo" class="label_modalPresupuesto"><?= label('formProveedor_salarioTipo'); ?></label>
        </div>
        <div class="input-field col s12" style="margin-top: 25px;">
            <input id="agregarPresupuesto_monto" type="number" value="">
            <label for="agregarPresupuesto_monto" class="label_modalPresupuesto"><?= label('formProveedor_salarioMonto'); ?></label>
        </div>
    </div>
    <div class="modal-footer" id="btnAgregarPresupuesto">
        <a class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="editarPresupuesto" class="modal" style="height: 55%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div id="div_selectTipo"></div>
        <div class="input-field col s12">
            <select id="editarPresupuesto_tipo">
            </select>
            <label for="editarPresupuesto_tipo" class="label_modalPresupuesto"><?= label('formProveedor_salarioTipo'); ?></label>
        </div>
        <div class="input-field col s12" style="margin-top: 25px;">
            <input id="editarPresupuesto_monto" type="number" value="0">
            <label for="editarPresupuesto_monto" class="label_modalPresupuesto"><?= label('formProveedor_salarioMonto'); ?></label>
        </div>
    </div>
    <div class="modal-footer" id="btnEditarPresupuesto">
        <a class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="eliminarPresupuesto" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarSalario'); ?></p>
    </div>
    <div id="botonEliminar" class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="eliminarElementosSeleccionados" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('clientes_archivosSeleccionadosEliminar'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <div id="botonEliminar" title="proveedor_presupuestos">
            <a href="#" class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>

<div id="editarSalario" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <select>
                <option value="">Seleccione</option>
                <option value="1" selected><?= label('horas') ?></option>
                <option value="2"><?= label('dia') ?></option>
                <option value="3"><?= label('semana') ?></option>
                <option value="4"><?= label('quincena') ?></option>
                <option value="5"><?= label('mes') ?></option>
            </select>
            <label for=""><?= label('formProveedor_salarioTipo'); ?></label>
        </div>
        <div class="input-field col s12">
            <input id="salario_monto" type="text" value="$10">
            <label for="salario_monto"><?= label('formProveedor_salarioMonto'); ?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<!-- Fin lista modals-->