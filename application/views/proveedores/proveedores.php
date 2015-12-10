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
                                        <div class="input-field col s12 inputSelector">
                                            <label for="persona_nacionalidad"><?= label('formCliente_nacionalidad'); ?></label>
                                            <br>
                                            <select data-placeholder="<?= label('formCliente_seleccioneUno'); ?>" data-incluirBoton="0" id="persona_nacionalidad" name="persona_nacionalidad" class="required browser-default chosen-select">
                                                <option value="0" disabled selected style="display:none;"><?= label("formCliente_seleccioneUno"); ?></option>
                                                <?php
                                                if(isset($paises)) {
                                                    foreach ($paises as $pais) { ?>
                                                        <option value="<?= $pais['idPais']; ?>"><?= $pais['nombre']; ?></option>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
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
                                                <textarea length="200" maxlength="200" id="persona_descripcion" name="persona_descripcion"
                                                          class="materialize-textarea" rows="4"></textarea>
                                                <label for="persona_descripcion"><?= label('formPersona_descripcion'); ?></label>
                                            </div>

                                            <div class="inputTag col s12">
                                                <label for="categorias_persona"><?= label('formPersona_categorias'); ?></label>
                                                <br>
                                                <div id="categoriasPersona" class="example tags_Categorias">
                                                    <div class="bs-example">
                                                        <input id="categorias_persona" name="categorias_persona" placeholder="<?= label('formPersona_anadirCategoria'); ?>" type="text"/>
                                                    </div>
                                                </div>
                                                <br>
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
                                                        <?= label('formProveedor_infoGastos'); ?></a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col s12">
                                            <div id="tab-direccion" class="card col s12">
                                                <div>
                                                    <div class="input-field col s12 m4 l4 inputSelector">
                                                        <label for="persona_direccionPais"><?= label('formPersona_direccionPais'); ?></label>
                                                        <br>
                                                        <select data-placeholder="<?= label('formCliente_seleccioneUno'); ?>" data-incluirBoton="0" id="persona_direccionPais" name="persona_direccionPais" class=" browser-default chosen-select">
                                                            <option value="0" disabled selected style="display:none;"><?= label("formCliente_seleccioneUno"); ?></option>
                                                            <?php
                                                            if(isset($paises)) {
                                                                foreach ($paises as $pais) { ?>
                                                                    <option value="<?= $pais['idPais']; ?>"><?= $pais['nombre']; ?></option>
                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                        </select>
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
                                                        <textarea length="200" maxlength="200" id="persona_direccionDomicilio" name="persona_direccionDomicilio" class="materialize-textarea" rows="4"></textarea>
                                                        <label for="persona_direccionDomicilio"><?= label('formPersona_direccionDomicilio'); ?></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tab-contactos" class="card col s12">
                                                <div id="contenedorContactos">

                                                </div>
                                                <div class="row" id="tab-contactos-nuevo">
                                                    <a onclick="agregarNuevoContacto();">
                                                        <?= label('formProveedor_contactoAgregar') ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="tab-infoAdicional" class="card col s12">
                                                <h5><?= label('gastosRelacionados'); ?></h5>
                                                <div class="agregar_nuevo">
                                                    <a id="btn_accionAgregarGasto" href="#agregarGasto"
                                                       class="btn btn-default modal-trigger"><?= label('formProveedor_nuevoGasto'); ?></a>
                                                </div>
                                                <table id="proveedor_gastos" class="data-table-information responsive-table display">
                                                    <thead>
                                                        <tr>
                                                            <th style="text-align: center;">
                                                                <input class="filled-in checkboxGastos checkall" type="checkbox"
                                                                       id="checkbox-allGastos" onclick="toggleChecked(this.checked)"/>
                                                                <label for="checkbox-allGastos"></label>
                                                            </th>
                                                            <th><?= label('formProveedor_gastosTipo'); ?></th>
                                                            <th><?= label('formProveedor_gastosCategoria'); ?></th>
                                                            <th><?= label('formProveedor_gastosCodigo'); ?></th>
                                                            <th><?= label('formProveedor_gastosNombre'); ?></th>
                                                            <th><?= label('formProveedor_gastosTiempo'); ?></th>
                                                            <th><?= label('formProveedor_gastosMonto'); ?></th>
                                                            <th><?= label('formProveedor_gastosOpciones'); ?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                                <div class="tabla_GastosPersona_agregar">
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

                                        <div class="input-field col s12 envio-formulario">
                                            <button class="btn waves-effect waves-light right" type="submit"
                                                    name="action"><?= label('formPersona_enviar'); ?>
                                            </button>
                                        </div>
                                    </div>
                                    <div style="visibility:hidden; position:absolute">
                                        <input id="cantidadContactos" name="cantidadContactos" type="text" value="0">
                                        <input id="cantidadGastos" name="cantidadGastos" type="text" value="0">
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

    <a id="linkNuevaCategoria" href="#agregarCategoria" class="modal-trigger"></a>
    <a id="linkNuevaFormaPago" href="#agregarFormaPago" class="modal-trigger"></a>
</div>
<div style="visibility:hidden; position:absolute">
    <a id="linkContactosElimminar" href="#eliminarContacto" class="modal-trigger" data-fila-eliminar="1"
       title="<?= label('formProveedor_contactoEliminar') ?>"><i class="mdi-action-delete medium" style="color: black;"></i></a>
    <a id="linkGastosElimminar" href="#eliminarGasto" class="modal-trigger" data-fila-eliminar="1"
       title="<?= label('formProveedor_gastoEliminar') ?>"><i class="mdi-action-delete medium" style="color: black;"></i></a>
</div>
<!-- END CONTENT-->

<!--Script para select de busqueda-->
<script>
    $(document).on('ready', function(){
        var config = {'.chosen-select'           : {}}
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }

    });
</script>
<!-- Script para insercion de datos-->
<script>
    function validacionCorrecta_Persona() {
        var formulario = $('#formPersona');
        $.ajax({
            data: formulario.serialize(),
            url:   '<?=base_url()?>proveedores/verificarIdentificacion',
            type:  'post',
            success:  function (response) {
                if (response == '0') {
                    $('#linkModalError').click();
                } else{
                    if (response == '2') {
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
                                        $('#persona_nacionalidad').val('').trigger('chosen:updated');      
                                        $('#persona_direccionPais').val('').trigger('chosen:updated');
                                        $('#imagen_seleccionada').attr('src', '<?= base_url(); ?>files/default-user-image.png');
                                        $('#persona_palabras').tagsinput('removeAll');
                                        $('#categorias_persona').tagsinput('removeAll');
                                        cantidad = 0;
                                        contador = 0;
                                        actualizarCantidad();

                                        nombres.splice(0, nombres.length);
                                        cantidadGasto = 0;
                                        contadorGasto = 0;
                                        actualizarCantidadGastos();
                                        var table = $('#proveedor_gastos').DataTable();
                                        table.clear().draw();

                                        $('#contenedorContactos').empty();
                                        break;
                                }
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                    } else {
                        alert("<?=label('proveedor_error_nombreExisteEnBD'); ?>");
                        $('#formPersona #persona_identificacion').focus();
                        $('#formPersona #personajuridico_identificacion').focus();
                    }
                }
            }
        });
    }
</script>
<!-- Script para el manejo de la imagen de la persona-->
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
<!-- Script para manejo de tags -->
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

//        elt.tagsinput('add', {"value": 1, "text": "Brayan Nu�ez Rojas", "continent": "Europe"});
//        elt.tagsinput('add', {"value": 4, "text": "Anthony Nu�ez Rojas", "continent": "America"});
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
<!--Script para manejo de tags de categorias-->
<script>
    $(document).ready(function () {
        var CategoriasPersona = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('nombre'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // prefetch: 'http://localhost/Proyectos/touch/assets/dashboard/js/json/CategoriasPersona.json'
            prefetch: {
                url: '<?=base_url()?>categoriasPersona/categoriasSugerencia',
                ttl: 1000
            }
        });
        CategoriasPersona.initialize();

        elt = $('.tags_Categorias > > input');
        elt.tagsinput({
            itemValue: 'idCategoriaPersona',
            itemText: 'nombre',
            typeaheadjs: {
                name: 'CategoriasPersona',
                displayKey: 'nombre',
                source: CategoriasPersona.ttAdapter()
            }
        });
    });
</script>
<!-- Script para mostrar elementos y manejo de datos de contactos -->
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
<!--Funciones para gastos, formas de pago, categorias de gasto y selects de busqueda-->
<script>
    <?php
        $js_arrayNombres = json_encode($codigosGasto);
        echo "var arrayNombres =". $js_arrayNombres.';';
        ?>
    $(document).ready(function () {
        actualizarSelectTipo();
        actualizarSelects();
    });
    var nombres = [];
    var idEditar = 0;
    function actualizarSelectTipo() {
        var selectTipo = $('#agregarGasto #gasto_tipo');
        selectTipo.empty();
        selectTipo.append($('<option>', {
            value: 1,
            text: 'Fijo',
            selected: true
        }));
        selectTipo.append($('<option>', {
            value: 2,
            text: 'Variable',
            selected: false
        }));
        selectTipo.material_select();
    }
    function actualizarSelects() {
        $.ajax({
            type: 'POST',
            url: '<?= base_url(); ?>gastos/categoriasGasto',
            data: {  },
            success: function(response)
            {
                generarAutocompletarCategoria($.parseJSON(response), 0);
            }
        });
        $.ajax({
            type: 'POST',
            url: '<?= base_url(); ?>gastos/formasPago',
            data: {  },
            success: function(response)
            {
                generarAutocompletarFormaPago($.parseJSON(response), 0);
                generarListas();
            }
        });
    }

    function actualizarSelectTipo_Editar($fijo) {
        var selectTipo = $('#editarGasto #gasto_tipo');
        selectTipo.empty();
        if($fijo === '1') {
            selectTipo.append($('<option>', {
                value: 1,
                text: 'Fijo',
                selected: true
            }));
            selectTipo.append($('<option>', {
                value: 2,
                text: 'Variable',
                selected: false
            }));
        } else {
            selectTipo.append($('<option>', {
                value: 1,
                text: 'Fijo',
                selected: false
            }));
            selectTipo.append($('<option>', {
                value: 2,
                text: 'Variable',
                selected: true
            }));
        }
        selectTipo.material_select();
    }
    function actualizarSelectCategoriasGasto($id) {
        var formulario = $('#form_gasto');
        $.ajax({
            type: formulario.attr('method'),
            url: '<?= base_url(); ?>gastos/categoriasGasto',
            data: {  },
            success: function(response)
            {
                generarAutocompletarCategoria($.parseJSON(response), $id);
                generarListas();
            }
        });
    }
    function actualizarSelectFormasPago($id) {
        var formulario = $('#form_gasto');
        $.ajax({
            type: formulario.attr('method'),
            url: '<?= base_url(); ?>gastos/formasPago',
            data: {  },
            success: function(response)
            {
                generarAutocompletarFormaPago($.parseJSON(response), $id);
                generarListas();
            }
        });
    }
    function actualizarSelectCategoriasGasto_Editar($idCategoria) {
        $.ajax({
            type: 'POST',
            url: '<?= base_url(); ?>gastos/categoriasGasto',
            data: {  },
            success: function(response)
            {
                generarAutocompletarCategoriaEditar($.parseJSON(response), $idCategoria);
                generarListas();
            }
        });
    }
    function actualizarSelectFormasPago_Editar($idFormaPago) {
        $.ajax({
            type: 'POST',
            url: '<?= base_url(); ?>gastos/formasPago',
            data: {  },
            success: function(response)
            {
                generarAutocompletarFormaPagoEditar($.parseJSON(response), $idFormaPago);
                generarListas();
            }
        });
    }

    function botonEnLista(tipo, idBoton, nuevoElementoAgregar){
        if (tipo == "agregarGasto_categoria") {
            $('#categoria_nombre').val(nuevoElementoAgregar);
            $('#linkNuevaCategoria').click();
            $('#categoria_nombre').focus();
            document.getElementById('agregarGasto').style.visibility = 'hidden';
            document.getElementById('editarGasto').style.visibility = 'hidden';
        }
    }

    function generarAutocompletarCategoria($array, $id){
        var miSelect = $('#agregarGasto #gasto_categoria');
        miSelect.empty();
        miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("agregarGasto_elegirCategoria"); ?></option>');
        miSelect.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');
        for(var i = 0; i < $array.length; i++) {
            var cat = $array[i];
            if(cat != null) {
                if(cat['idCategoriaGasto'] == $id){
                    miSelect.append('<option value="' + cat['idCategoriaGasto'] + '" selected>' + cat['nombre'] + '</option>');
                } else {
                    miSelect.append('<option value="' + cat['idCategoriaGasto'] + '">' + cat['nombre'] + '</option>');
                }
            }
        }
        miSelect.trigger("chosen:updated");
    }
    function generarAutocompletarFormaPago($array, $id){
        var miSelect = $('#agregarGasto #gasto_formaPago');
        miSelect.empty();
        miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("agregarGasto_elegirFormaPago"); ?></option>');
//        miSelect.append('<option value="nuevo"><?//= label("agregarNuevo"); ?>//</option>');
        for(var i = 0; i < $array.length; i++) {
            var formaP = $array[i];
            if(formaP != null) {
                if(formaP['idTiempo'] == $id) {
                    miSelect.append('<option value="' + formaP['idTiempo'] + '" selected>' + formaP['nombre'] + '</option>');
                } else {
                    miSelect.append('<option value="' + formaP['idTiempo'] + '">' + formaP['nombre'] + '</option>');
                }
            }
        }
        miSelect.trigger("chosen:updated");
    }
    function generarAutocompletarCategoriaEditar($array, $id){
        var miSelect = $('#editarGasto #gasto_categoria');
        miSelect.empty();
        miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("agregarGasto_elegirCategoria"); ?></option>');
        miSelect.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');
        for(var i = 0; i < $array.length; i++) {
            var cat = $array[i];
            if(cat != null) {
                if(cat['idCategoriaGasto'] == $id){
                    miSelect.append('<option value="' + cat['idCategoriaGasto'] + '" selected>' + cat['nombre'] + '</option>');
                } else {
                    miSelect.append('<option value="' + cat['idCategoriaGasto'] + '">' + cat['nombre'] + '</option>');
                }
            }
        }
        miSelect.trigger("chosen:updated");
    }
    function generarAutocompletarFormaPagoEditar($array, $id){
        var miSelect = $('#editarGasto #gasto_formaPago');
        miSelect.empty();
        miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("agregarGasto_elegirFormaPago"); ?></option>');
//        miSelect.append('<option value="nuevo"><?//= label("agregarNuevo"); ?>//</option>');
        for(var i = 0; i < $array.length; i++) {
            var formaP = $array[i];
            if(formaP != null) {
                if(formaP['idTiempo'] == $id) {
                    miSelect.append('<option value="' + formaP['idTiempo'] + '" selected>' + formaP['nombre'] + '</option>');
                } else {
                    miSelect.append('<option value="' + formaP['idTiempo'] + '">' + formaP['nombre'] + '</option>');
                }
            }
        }
        miSelect.trigger("chosen:updated");
    }

    function generarListas(){
        var config = {'.chosen-select'           : {}}
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }
    }
    $(document).on('change','.chosen-select',function(){
        var valor = $(this).val();
        var tipo = $(this).attr("data-tipo");
        if (valor=="nuevo") {
            var idBoton = $(this).attr("id");
            var nuevoElementoAgregar = "";
            botonEnLista(tipo, idBoton, nuevoElementoAgregar)
        }
    });

    var gastoEliminar = null;
    var idEliminar = 0;
    $(document).on('click','.confirmarEliminarGasto', function () {
        gastoEliminar = $(this).parents('tr');
        idEliminar = $(this).data('id-eliminar');
        $('#linkGastosElimminar').click();//esto se hace porque al agregar un <a class="modal-trigger"> dinamicamente con el metodo de agregarNuevoContacto() pareciera no servir, entonces lo que se hace es llamar al evento click del modal-trigger con el id = linkContactosElimminar
    });
    $(document).on('click','#eliminarGasto #botonEliminar', function () {
        event.preventDefault();
        gastoEliminar.fadeOut(function () {
            gastoEliminar.empty();
            gastoEliminar.remove();
        });
        cantidadGasto--;
        actualizarCantidadGastos();
        for (var i = 0; i < nombres.length; i++) {
            if (nombres[i]['idGasto'] == idEliminar) {
                nombres[i]['codigo'] = '';
            }
        }
        $('#eliminarGasto .modal-header a').click();
    });

    function actualizarCantidadGastos(){
        $('#cantidadGastos').val(cantidadGasto);
    }
    var cantidadGasto = 0;
    var contadorGasto = 0;
    
    $(document).on('click', '#agregarGasto #btnAgregarGasto', function () {
        var tipo = $('#agregarGasto #gasto_tipo');
        var codigo = $('#agregarGasto #gasto_codigo');
        var nombre = $('#agregarGasto #gasto_nombre');
        var categoria = $('#agregarGasto #gasto_categoria');
        var formaPago = $('#agregarGasto #gasto_formaPago');
        var monto = $('#agregarGasto #gasto_monto');

        var existeCodigoAgregar = false;
        for(var j = 0; j < arrayNombres.length; j++) {
            if(arrayNombres[j]['codigo'] == codigo.val()) {
                existeCodigoAgregar = true;
                break;
            }
        }
        for(var k = 0; k < nombres.length; k++) {
            if(nombres[k]['codigo'] == codigo.val()) {
                existeCodigoAgregar = true;
                break;
            }
        }
        if(!existeCodigoAgregar) {
            agregarNuevoGasto(tipo.val(), codigo.val(), nombre.val(), categoria.val(), formaPago.val(), monto.val());
            $('#agregarGasto .modal-header a').click();
            limpiarFormGasto();
        } else {
            alert('<?= label('proveedores_codigoGastoNoValido'); ?>');
            $('#agregarGasto #gasto_codigo').focus();
        }
    });
    function agregarNuevoGasto(tipo, codigo, nombre, categoria, formaPago, monto) {
        cantidadGasto++;
        actualizarCantidadGastos();
        var check = '<td>' +
            '<div style="text-align: center;">' +
            '<input class="accionAplicada" style="display:none" name="gasto_' + contadorGasto + '" type="text" value="0">' +
            '<input type="checkbox" class="filled-in checkboxGastos" id="checkbox_gasto' + contadorGasto + '"/>' +
            '<label for="checkbox_gasto' + contadorGasto + '"></label>' +
            '</div>' +
            '</td>';
        var nombreTipo = 'Fijo';
        if (tipo == 2) {
            nombreTipo = 'Variable';
        }
        var tipoP = '<td>' +
            '<span id="span_gasto' + contadorGasto + '_tipo">' + nombreTipo + '</span><input type="text" name="gasto' + contadorGasto + '_tipo" id="gasto' + contadorGasto + '_tipo" value="' + tipo + '" style="display: none;" />' +
            '</td>';
        var nombreCategoria = $("#agregarGasto #gasto_categoria option[value='" + categoria + "']").text();
        var categoriaP = '<td>' +
            '<span id="span_gasto' + contadorGasto + '_categoria">' + nombreCategoria + '</span><input type="text" name="gasto' + contadorGasto + '_categoria" id="gasto' + contadorGasto + '_categoria" value="' + categoria + '" style="display: none;" />' +
            '</td>';
        var codigoP = '<td>' +
            '<span id="span_gasto' + contadorGasto + '_codigo">' + codigo + '</span><input type="text" name="gasto' + contadorGasto + '_codigo" id="gasto' + contadorGasto + '_codigo" value="' + codigo + '" style="display: none;" />' +
            '</td>';
        var nombreP = '<td>' +
            '<span id="span_gasto' + contadorGasto + '_nombre">' + nombre + '</span><input type="text" name="gasto' + contadorGasto + '_nombre" id="gasto' + contadorGasto + '_nombre" value="' + nombre + '" style="display: none;" />' +
            '</td>';
        var nombreFormaPago = $("#agregarGasto #gasto_formaPago option[value='" + formaPago + "']").text();
        var formaP = '<td>' +
            '<span id="span_gasto' + contadorGasto + '_formaPago">' + nombreFormaPago + '</span><input type="text" name="gasto' + contadorGasto + '_formaPago" id="gasto' + contadorGasto + '_formaPago" value="' + formaPago + '" style="display: none;" />' +
            '</td>';
        var montoP = '<td>' +
            '<span id="span_gasto' + contadorGasto + '_monto">' + '<span class="moneda_signo"></span>' + monto + '</span><input type="text" name="gasto' + contadorGasto + '_monto" id="gasto' + contadorGasto + '_monto" value="' + monto + '" style="display: none;" />' +
            '</td>';
//        var principal = '<td>' +
//                            '<input type="radio" name="radioGastoPrincipal" id="radio_gasto'+ contadorGasto +'" value="' + contadorGasto + '" />' +
//                            '<label for="radio_gasto'+ contadorGasto +'"></label>' +
//                        '</td>';
        var opciones = '<td>' +
            '<ul id="dropdown_gasto' + contadorGasto + '" class="dropdown-content">' +
            '<li>' +
            '<a href="#editarGasto" class="-text modal-trigger abrirEditar" data-id-editar="' + contadorGasto + '"><?= label('menuOpciones_editar') ?></a>' +
            '</li>' +
            '<li>' +
            '<a class="-text modal-trigger confirmarEliminarGasto" data-id-eliminar="' + contadorGasto + '" data-fila-eliminar="fila' + contadorGasto + '"><?= label('menuOpciones_eliminar') ?></a>' +
            '</li>' +
            '</ul>' +
            '<a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown_gasto' + contadorGasto + '"><?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i> </a>' +
            '</td>';
        $('#proveedor_gastos').dataTable().fnAddData([
            check,
            tipoP,
            categoriaP,
            codigoP,
            nombreP,
            formaP,
            montoP,
//            principal,
            opciones
        ]);

        generarListasBotones();
        $('.modal-trigger').leanModal();
        nombres.push({"idGasto": contadorGasto, "codigo": codigo});
        contadorGasto++;
        actualizarSignoMoneda();
    }

    $(document).on('click', '.abrirEditar', function () {
        idEditar = $(this).data('id-editar');
        var tipo = $('#gasto' + idEditar + '_tipo').val();
        var codigo = $('#gasto' + idEditar + '_codigo').val();
        var nombre = $('#gasto' + idEditar + '_nombre').val();
        var categoria = $('#gasto' + idEditar + '_categoria').val();
        var formaPago = $('#gasto' + idEditar + '_formaPago').val();
        var monto = $('#gasto' + idEditar + '_monto').val();

//        alert(tipo + '  -  ' + codigo + '  -  ' + nombre + '  -  ' + categoria + '  -  ' + formaPago + '  -  ' + monto);
//        $('#editarGasto #gasto_tipo').val(tipo);
//        $('#editarGasto #gasto_categoria').val(categoria);
//        $('#editarGasto #gasto_formaPago').val(formaPago);
        $('#editarGasto #gasto_codigo').val(codigo);
        $('#editarGasto #gasto_nombre').val(nombre);
        $('#editarGasto #gasto_monto').val(monto);

        actualizarSelectTipo_Editar(tipo);
        actualizarSelectCategoriasGasto_Editar(categoria);
        actualizarSelectFormasPago_Editar(formaPago);
        $('label').addClass('active');
    });
    $(document).on('click', '#editarGasto #btnEditarGasto', function () {
        var tipo = $('#editarGasto #gasto_tipo').val();
        var codigo = $('#editarGasto #gasto_codigo').val();
        var nombre = $('#editarGasto #gasto_nombre').val();
        var categoria = $('#editarGasto #gasto_categoria').val();
        var formaPago = $('#editarGasto #gasto_formaPago').val();
        var monto = $('#editarGasto #gasto_monto').val();
        var existeCodigo = false;
        for(var j = 0; j < arrayNombres.length; j++) {
            if(arrayNombres[j]['codigo'] == codigo) {
                existeCodigo = true;
                break;
            }
        }
        for(var k = 0; k < nombres.length; k++) {
            if(nombres[k]['codigo'] == codigo && nombres[k]['idGasto'] != idEditar) {
                existeCodigo = true;
                break;
            }
        }
        if(!existeCodigo) {
            $('#gasto' + idEditar + '_tipo').val(tipo);
            $('#gasto' + idEditar + '_codigo').val(codigo);
            $('#gasto' + idEditar + '_nombre').val(nombre);
            $('#gasto' + idEditar + '_categoria').val(categoria);
            $('#gasto' + idEditar + '_formaPago').val(formaPago);
            $('#gasto' + idEditar + '_monto').val(monto);

            var nombreTipo = 'Fijo';
            if (tipo == 2) {
                nombreTipo = 'Variable';
            }
            var nombreCategoria = $("#editarGasto #gasto_categoria option[value='" + categoria + "']").text();
            var nombreFormaPago = $("#editarGasto #gasto_formaPago option[value='" + formaPago + "']").text();

//        alert(nombreTipo + '  -  ' + codigo + '  -  ' + nombre + '  -  ' + nombreCategoria + '  -  ' + nombreFormaPago + '  -  ' + monto);
            $('#span_gasto' + idEditar + '_tipo').text(nombreTipo);
            $('#span_gasto' + idEditar + '_codigo').text(codigo);
            $('#span_gasto' + idEditar + '_nombre').text(nombre);
            $('#span_gasto' + idEditar + '_categoria').text(nombreCategoria);
            $('#span_gasto' + idEditar + '_formaPago').text(nombreFormaPago);
            $('#span_gasto' + idEditar + '_monto').text(monto);

            for (var i = 0; i < nombres.length; i++) {
                if (nombres[i]['idGasto'] == idEditar) {
                    nombres[i]['codigo'] = codigo;
                }
            }
            $('#editarGasto .modal-header a').click();
        } else {
            alert('<?= label('proveedores_codigoGastoNoValido'); ?>');
            $('#editarGasto #gasto_codigo').focus();
        }
        actualizarSignoMoneda();
    });

    function limpiarFormGasto() {
        $('#agregarGasto #gasto_codigo').val('');
        $('#agregarGasto #gasto_nombre').val('');
        $('#agregarGasto #gasto_monto').val('');
        actualizarSelectTipo();
        actualizarSelects();
    }
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

    var cerrarModalCategoria = false;
    var cerrarModalFormaPago = false;
    $(document).on('ready', function(){
        $('#guardarOtroCategoria').on('click', function(){
            cerrarModalCategoria = false;
        });
        $('#guardarCerrarCategoria').on('click', function(){
            cerrarModalCategoria = true;
        });
    });
    function limpiarFormCategoria() {
        $('#form_categoria')[0].reset();
        var validator = $("#form_categoria").validate();
        validator.resetForm();
    }

    $(document).ready(function () {
        $('#modalAgregarCategoria_cerrar').on('click', function () {
            document.getElementById('agregarGasto').style.visibility = 'visible';
            document.getElementById('editarGasto').style.visibility = 'visible';
            document.getElementById('agregarCategoria').style.display = 'none';
        });
        $(document).on('click', '#lean-overlay', function () {
            document.getElementById('agregarGasto').style.visibility = 'visible';
            document.getElementById('editarGasto').style.visibility = 'visible';
        });
    });
    function validacionCorrecta_Categoria() {
        $.ajax({
            data: $('#form_categoria').serialize(),
            url:   '<?=base_url()?>gastos/verificarNombreCategoria',
            type:  'post',
            success:  function (response) {
                if (response == '0') {
                    alert("<?=label('errorGuardar'); ?>");
                    $('#agregarCategoria .modal-header a').click();
                } else {
                    if (response == '2') {
                        var url = $('#form_categoria').attr('action');
                        var method = $('#form_categoria').attr('method');
                        $.ajax({
                            type: method,
                            url: url,
                            data: $('#form_categoria').serialize(),
                            success: function(response)
                            {
                                if (response == 0) {
                                    alert("<?=label('errorGuardar'); ?>");
                                    $('#agregarCategoria .modal-header a').click();
                                } else {
                                    actualizarSelectCategoriasGasto(response);
                                    actualizarSelectCategoriasGasto_Editar(response);
                                    alert("<?=label('gastos_categoriaGuardadoCorrectamente'); ?>");
                                    if (cerrarModalCategoria) {
                                        limpiarFormCategoria();
                                        $('#agregarCategoria .modal-header a').click();
                                    } else{
                                        limpiarFormCategoria();
                                    }
                                }
                            }
                        });
                    } else {
                        alert("<?=label('categoria_error_nombreExisteEnBD'); ?>");
                        $('#form_categoria #categoria_nombre').focus();
                    }
                }
            }
        });
    }
</script>
<!--Script para eliminar gastos y manejo de la tabla de gastos-->
<script>
    $(document).on("ready", function () {
        <?php
            if (isset($lista)) {
                if ($lista === false) { ?>
                    $('#linkModalErrorCargarDatos').click();
        <?php
                }
            } ?>
    });

    $(document).ready( function () {
        $('#proveedor_gastos').dataTable( {
            'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0, -1] //desactiva en primer y �ltima columna opci�n de ordenar
            }]
        });
    });
    $(document).ready(function () {
        $('table#proveedor_gastos thead th:first').removeClass('sorting_asc').addClass('sorting_disabled');
        $('table#proveedor_gastos thead th:nth-child(2)').removeClass('sorting').addClass('sorting_asc');
    });
    $(document).ready(function () {
        $('#eliminarElementosSeleccionados #botonEliminar').on("click", function (event) {
            var tb = $(this).attr('title');
            var sel = false;
            var ch = $('#' + tb).find('tbody input[type=checkbox]');
            var marcados = $('.checkboxGastos:checked').not('#checkbox-allGastos').size();
            var contador = 0;
            ch.each(function () {
                var $this = $(this);
                if ($this.is(':checked')) {
                    sel = true;
                    var fila = $this.parents('tr');
                    var gastoEliminar = fila.find('.confirmarEliminarGasto');
                    var idGastoEliminar = gastoEliminar.data('id-eliminar');
                    fila.fadeOut(function () {
                        fila.empty();
                        fila.remove();
                        verificarChecks();
                    });
                    for (var i = 0; i < nombres.length; i++) {
                        if (nombres[i]['idGasto'] == idGastoEliminar) {
                            nombres[i]['codigo'] = '';
                        }
                    }
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
        $('#checkbox-allGastos').click(function (event) {
            var $this = $(this);
            var tableBody = $('#proveedor_gastos').find('tbody tr[role=row] input[type=checkbox]');
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
        $(document).on('click','.checkboxGastos',function (event) {
            verificarChecks();
        });
    });

    function verificarChecks(){

        var marcados = $('.checkboxGastos:checked').not('#checkbox-allGastos').size();
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
        <p><?= label('personaGuardadoCorrectamente'); ?></p>
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

<div id="agregarGasto" class="modal" style="width: 70%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="row">
            <div class="input-field col s12 m4 l4">
                <select id="gasto_tipo" name="gasto_tipo"></select>
                <label for="gasto_tipo"><?= label('gastos_Tipo'); ?></label>
            </div>
            <div class="input-field col s12 m4 l4">
                <input id="gasto_codigo" name="gasto_codigo" type="text">
                <label for="gasto_codigo"><?= label('gastos_Codigo') ?></label>
            </div>
            <div class="input-field col s12 m4 l4">
                <input id="gasto_nombre" name="gasto_nombre" type="text">
                <label for="gasto_nombre"><?= label('gastos_Nombre') ?></label>
            </div>
            <div class="row">
                <div class="input-field col s12 m6 l6 inputSelector">
                    <label for="gasto_categoria"><?= label("gastos_Categoria"); ?></label>
                    <br>
                    <div id="contenedorSelectCategorias">
                        <select data-incluirBoton="1" placeholder="seleccionar" data-tipo="agregarGasto_categoria" id="gasto_categoria" name="gasto_categoria"
                                data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("agregarGasto_elegirCategoria"); ?>"
                                class="browser-default chosen-select" style="width:350px;" tabindex="2"></select>
                    </div>
                </div>
                <div class="input-field col s12 m6 l6 inputSelector">
                    <label for="gasto_formaPago"><?= label("gastos_FormaPago"); ?></label>
                    <br>
                    <div id="contenedorSelectFormasPago">
                        <select data-incluirBoton="0" placeholder="seleccionar" data-tipo="agregarGasto_formaPago" id="gasto_formaPago" name="gasto_formaPago"
                                data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("agregarGasto_elegirFormaPago"); ?>"
                                class="browser-default chosen-select" style="width:350px;" tabindex="2"></select>
                    </div>
                </div>
            </div>
            <div class="input-field col s12 m6 l6">
                <input id="gasto_monto" name="gasto_monto" type="text">
                <label for="gasto_monto"><?= label('gastos_Monto') ?></label>
            </div>
        </div>
    </div>
    <div class="modal-footer" id="btnAgregarGasto">
        <a class="waves-effect waves-red btn-flat"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="editarGasto" class="modal" style="width: 70%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="row">
            <div class="input-field col s12 m4 l4">
                <select id="gasto_tipo" name="gasto_tipo"></select>
                <label for="gasto_tipo"><?= label('gastos_Tipo'); ?></label>
            </div>
            <div class="input-field col s12 m4 l4">
                <input id="gasto_codigo" name="gasto_codigo" type="text">
                <label for="gasto_codigo"><?= label('gastos_Codigo') ?></label>
            </div>
            <div class="input-field col s12 m4 l4">
                <input id="gasto_nombre" name="gasto_nombre" type="text">
                <label for="gasto_nombre"><?= label('gastos_Nombre') ?></label>
            </div>
            <div class="row">
                <div class="input-field col s12 m6 l6 inputSelector">
                    <label for="gasto_categoria"><?= label("gastos_Categoria"); ?></label>
                    <br>
                    <div id="contenedorSelectCategorias">
                        <select data-incluirBoton="1" placeholder="seleccionar" data-tipo="agregarGasto_categoria" id="gasto_categoria" name="gasto_categoria"
                                data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("agregarGasto_elegirCategoria"); ?>"
                                class="browser-default chosen-select" style="width:350px;" tabindex="2"></select>
                    </div>
                </div>
                <div class="input-field col s12 m6 l6 inputSelector">
                    <label for="gasto_formaPago"><?= label("gastos_FormaPago"); ?></label>
                    <br>
                    <div id="contenedorSelectFormasPago">
                        <select data-incluirBoton="0" placeholder="seleccionar" data-tipo="agregarGasto_formaPago" id="gasto_formaPago" name="gasto_formaPago"
                                data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("agregarGasto_elegirFormaPago"); ?>"
                                class="browser-default chosen-select" style="width:350px;" tabindex="2"></select>
                    </div>
                </div>
            </div>
            <div class="input-field col s12 m6 l6">
                <input id="gasto_monto" name="gasto_monto" type="text">
                <label for="gasto_monto"><?= label('gastos_Monto') ?></label>
            </div>
        </div>
    </div>
    <div class="modal-footer" id="btnEditarGasto">
        <a class="waves-effect waves-red btn-flat"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="eliminarGasto" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarSalario'); ?></p>
    </div>
    <div id="botonEliminar" class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat"><?= label('aceptar'); ?></a>
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
        <div id="botonEliminar" title="proveedor_gastos">
            <a href="#" class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>

<div id="agregarCategoria" class="modal" style="width: 70%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a id="modalAgregarCategoria_cerrar" class="modal-action cerrar-modal">
            <i class="mdi-content-clear"></i>
        </a>
    </div>
    <div class="modal-content" style="padding: 0 24px;">
        <div class="row">
            <h5 style="float: left;"><?= label('gasto_agregarCategoria'); ?></h5>
        </div>
        <form id="form_categoria" action="<?=base_url()?>gastos/insertarCategoria" method="post">
            <div class="row">
                <div class="input-field col s12">
                    <input id="categoria_nombre" name="categoria_nombre" type="text">
                    <label for="categoria_nombre"><?= label('categoriaGastos_Nombre') ?></label>
                </div>
                <div class="input-field col s12">
                    <textarea name="categoria_descripcion" id="categoria_descripcion" class="materialize-textarea" rows="4"></textarea>
                    <label for="categoria_descripcion"><?= label('formCategoriaGasto_descripcion'); ?></label>
                </div>
            </div>
            <div class="row">
                <a onclick="$(this).closest('form').submit()" id="guardarCerrarCategoria" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('guardarCerrar'); ?>
                </a>
                <a onclick="$(this).closest('form').submit()" id="guardarOtroCategoria" href="#" class="waves-effect btn modal-action" style="margin: 0 20px;">
                    <?= label('guardarAgregarOtro'); ?>
                </a>
            </div>
        </form>
    </div>
</div>
<!-- Fin lista modals-->