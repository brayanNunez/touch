<!--START CONTENT  -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h1 class="breadcrumbs-title"><?= label('tituloFormularioCliente'); ?></h1>
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
                                <form id="form_cliente" class="col s12" action="<?= base_url() ?>clientes/insertar" method="POST">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select name="cliente_tipo" onchange="datosCliente(this)">
                                                <option value="0" selected><?= label('formCliente_fisica'); ?></option>
                                                <option value="1"><?= label('formCliente_juridica'); ?></option>
                                            </select>
                                            <label for="cliente_tipo"><?= label('formCliente_tipoPersona'); ?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <select name="cliente_nacionalidad">
                                                <option value="" selected
                                                        disabled><?= label('formCliente_seleccioneUno'); ?></option>
                                                <option value="1">Costa Rica</option>
                                                <option value="2">Colombia</option>
                                                <option value="3">USA</option>
                                                <option value="4">Brasil</option>
                                                <option value="5">Uruguay</option>
                                                <option value="6">Chile</option>
                                            </select>
                                            <label for="cliente_nacionalidad"><?= label('formCliente_nacionalidad'); ?></label>
                                        </div>

                                        <div id="elementos-cliente-fisico" style="display: block;">
                                            <div class="input-field col s12">
                                                <input id="cliente_id" name="cliente_id" type="text">
                                                <label for="cliente_id"><?= label('formCliente_identificacion'); ?></label>
                                            </div>
                                            <div>
                                                <div class="input-field col s12 m4 l4">
                                                    <input id="cliente_apellido1" name="cliente_apellido1" type="text">
                                                    <label for="cliente_apellido1"><?= label('formCliente_apellido1'); ?></label>
                                                </div>
                                                <div class="input-field col s12 m4 l4">
                                                    <input id="cliente_apellido2" name="cliente_apellido2" type="text">
                                                    <label for="cliente_apellido2"><?= label('formCliente_apellido2'); ?></label>
                                                </div>
                                                <div class="input-field col s12 m4 l4">
                                                    <input id="cliente_nombre" name="cliente_nombre" type="text">
                                                    <label for="cliente_nombre"><?= label('formCliente_nombre'); ?></label>
                                                </div>
                                            </div>
                                            <div class="input-field col s12">
                                                <div>
                                                    <input id="cliente_correo" name="cliente_correo" type="email" style="margin-bottom: 0;" >
                                                    <label for="cliente_correo"><?= label('formCliente_correo'); ?></label>
                                                </div>
                                                <div style="margin-bottom: 20px;">
                                                    <input type="checkbox" class="filled-in" id="checkbox_correoCliente" name="checkbox_correoCliente" />
                                                    <label for="checkbox_correoCliente">
                                                        <?= label('formCliente_correoCheck') ?>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="cliente_telefonoMovil" name="cliente_telefonoMovil" type="text">
                                                <label
                                                    for="cliente_telefonoMovil"><?= label('formCliente_telefonoMovil'); ?></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="cliente_telefono" name="cliente_telefono" type="text">
                                                <label
                                                    for="cliente_telefono"><?= label('formCliente_telefonoFijo'); ?></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="cliente_fechaNacimiento" name="cliente_fechaNacimiento" type="text" class="datepicker-fecha">
                                                <label for="cliente_fechaNacimiento"><?= label('formCliente_fechaNacimiento'); ?></label>
                                            </div>
                                        </div>

                                        <div id="elementos-cliente-juridico" style="display: none;">
                                            <div class="input-field col s12">
                                                <input id="clientejuridico_id" name="clientejuridico_id" type="text">
                                                <label for="clientejuridico_id"><?= label('formCliente_identificacionJuridica'); ?></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="clientejuridico_nombre" name="clientejuridico_nombre" type="text">
                                                <label for="clientejuridico_nombre"><?= label('formCliente_nombreJuridico'); ?></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="clientejuridico_nombreFantasia" name="clientejuridico_nombreFantasia" type="text">
                                                <label for="clientejuridico_nombreFantasia"><?= label('formCliente_nombreFantasia'); ?></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <div>
                                                    <input id="clientejuridico_correo" name="clientejuridico_correo" type="email">
                                                    <label for="clientejuridico_correo"><?= label('formCliente_correo'); ?></label>
                                                </div>
                                                <div style="margin-bottom: 20px;">
                                                    <input type="checkbox" class="filled-in"
                                                           id="checkbox_correoClientejuridico" name="checkbox_correoClientejuridico" />
                                                    <label for="checkbox_correoClientejuridico">
                                                        <?= label('formCliente_correoCheck') ?>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="clientejuridico_telefono" name="clientejuridico_telefono" type="text">
                                                <label
                                                    for="clientejuridico_telefono"><?= label('formCliente_telefono'); ?></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="clientejuridico_fax" name="clientejuridico_fax" type="text">
                                                <label
                                                    for="clientejuridico_fax"><?= label('formCliente_fax'); ?></label>
                                            </div>
                                        </div>

                                        <div class="col s12">
                                            <ul class="tabs tab-demo-active z-depth-1 cliente-info">
                                                <li class="tab col s3">
                                                    <a class="white-text darken-1 waves-effect waves-light active"
                                                       id="cliente-informacion" href="#tab-direccion"><i
                                                            class="mdi-maps-my-location"></i>
                                                        <?= label('cliente_direccion'); ?></a>
                                                </li>
                                                <li class="tab-interior tab col s3">
                                                    <a class="white-text darken-1 waves-effect waves-light"
                                                       id="cliente-informacion" href="#tab-contactos"><i
                                                            class="mdi-communication-contacts"></i>
                                                        <?= label('formCliente_Contactos'); ?></a>
                                                </li>
                                                <li class="tab-interior tab col s3">
                                                    <a class="white-text darken-1 waves-effect waves-light"
                                                       id="cliente-informacion" href="#tab-infoAdicional"><i
                                                            class="mdi-av-queue"></i>
                                                        <?= label('cliente_infoAdicional'); ?></a>
                                                </li>
                                                <li class="tab-interior tab col s3">
                                                    <a class="white-text darken-1 waves-effect waves-light"
                                                       id="cliente-informacion" href="#tab-infoFacturacion"><i
                                                            class="mdi-editor-format-list-numbered"></i>
                                                        <?= label('cliente_infoFacturacion'); ?></a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col s12">
                                            <div id="tab-direccion" class="card col s12">
                                                <div>
                                                    <div class="input-field col s12 m4 l4">
                                                        <input id="cliente_direccionPais" name="cliente_direccionPais" type="text">
                                                        <label for="cliente_direccionPais"><?= label('formCliente_direccionPais'); ?></label>
                                                    </div>
                                                    <div class="input-field col s12 m4 l4">
                                                        <input id="cliente_direccionProvincia" name="cliente_direccionProvincia" type="text">
                                                        <label for="cliente_direccionProvincia"><?= label('formCliente_direccionProvincia'); ?></label>
                                                    </div>
                                                    <div class="input-field col s12 m4 l4">
                                                        <input id="cliente_direccionCanton" name="cliente_direccionCanton" type="text">
                                                        <label for="cliente_direccionCanton"><?= label('formCliente_direccionCanton'); ?></label>
                                                    </div>
<!--                                                    <div class="input-field col s12 m4 l4">-->
<!--                                                        <input id="cliente_direccionDistrito" type="text">-->
<!--                                                        <label for="cliente_direccionDistrito">--><?//= label('formCliente_direccionDistrito'); ?><!--</label>-->
<!--                                                    </div>-->
                                                    <div class="input-field col s12 m12 l12">
                                                        <input id="cliente_direccionDomicilio" name="cliente_direccionDomicilio" type="text">
                                                        <label for="cliente_direccionDomicilio"><?= label('formCliente_direccionDomicilio'); ?></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tab-contactos" class="card col s12">
                                                <div class="row">
                                                    <div class="col s12 m11 l11">
                                                        <div class="row">
                                                            <div class="input-field col s12 m4 l4">
                                                                <input id="cliente_contactoApellido1" type="text">
                                                                <label for="cliente_contactoApellido1"><?= label('formContacto_apellido1'); ?></label>
                                                            </div>
                                                            <div class="input-field col s12 m4 l4">
                                                                <input id="cliente_contactoApellido2" type="text">
                                                                <label for="cliente_contactoApellido2"><?= label('formContacto_apellido2'); ?></label>
                                                            </div>
                                                            <div class="input-field col s12 m4 l4">
                                                                <input id="cliente_contactoNombre" type="text">
                                                                <label for="cliente_contactoNombre"><?= label('formContacto_nombre'); ?></label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12 m6 l6">
                                                                <div>
                                                                    <input id="cliente_contactoCorreo" type="email" style="margin-bottom: 0;">
                                                                    <label for="cliente_contactoCorreo"><?= label('formCliente_correo'); ?></label>
                                                                </div>
                                                                <div style="margin-bottom: 20px;">
                                                                    <input type="checkbox" class="filled-in" id="checkbox_contactoCorreoCliente" />
                                                                    <label for="checkbox_contactoCorreoCliente" style="margin-bottom: 20px;">
                                                                        <?= label('formCliente_correoCheck') ?>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="input-field col s12 m3 l3">
                                                                <input id="cliente_contactoPuesto" type="text">
                                                                <label for="cliente_contactoPuesto"><?= label('formContacto_puesto'); ?></label>
                                                            </div>
                                                            <div class="input-field col s12 m3 l3">
                                                                <input id="cliente_contactoTelefono" type="text">
                                                                <label
                                                                    for="cliente_contactoTelefono"><?= label('formContacto_telefono'); ?></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m1 l1 btn-contacto-eliminar-edicion">
                                                        <a href="#eliminarContacto" class="modal-trigger" title="<?= label('formCliente_contactoEliminar') ?>">
                                                            <i class="mdi-action-delete medium" style="color: black;"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="row" id="tab-contactos-nuevo">
                                                    <a onclick="agregarNuevoContacto();">
                                                        <?= label('formCliente_contactoAgregar') ?>
                                                    </a>
                                                </div>
                                                <div class="col s12">
                                                    <hr />
                                                </div>
                                            </div>
                                            <div id="tab-infoAdicional" class="card col s12">
                                                <div class="inputTag col s12">
                                                    <label for="vendedoresCliente"><?= label('formCliente_cotizador'); ?></label>
                                                    <br>
                                                    <div id="vendedoresCliente" class="example tags_vendedores">
                                                        <div class="bs-example">
                                                            <input placeholder="<?= label('formCliente_anadirVendedor'); ?>" type="text"/>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                                <div class="inputTag col s12">
                                                    <label for="gustosCliente"><?= label('formCliente_gustos_preferencias'); ?></label>
                                                    <br>
                                                    <div id="gustosCliente" class="example tags_gustosCliente">
                                                        <div class="bs-example">
                                                            <input placeholder="<?= label('formCliente_anadirGusto'); ?>" type="text"
                                                                   value=""/>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                                <div class="inputTag col s12">
                                                    <label for="mediosCliente"><?= label('formCliente_mediosContacto'); ?></label>
                                                    <br>
                                                    <div id="mediosCliente" class="example tags_mediosContacto">
                                                        <div class="bs-example">
                                                            <input placeholder="<?= label('formCliente_anadirMedio'); ?>" type="text"
                                                                   value=""/>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                            <div id="tab-infoFacturacion" class="card col s12">
                                                <div class="input-field col s12">
                                                    <select>
                                                        <option value="" selected
                                                                disabled><?= label('formCliente_seleccioneUno'); ?></option>
                                                        <option value="1">Adelantado</option>
                                                        <option value="2">Contado</option>
                                                        <option value="3">A pagos</option>
                                                    </select>
                                                    <label for="cliente_formaPagoFavorita">
                                                        <?= label('formCliente_formaPagoFavorita'); ?></label>
                                                </div>
                                                <div class="input-field col s12">
                                                    <input id="cliente_descuento" type="text">
                                                    <label
                                                        for="cliente_descuento"><?= label('formCliente_descuento'); ?></label>
                                                    <span class="icono-porcentaje-descuento">%</span>
                                                </div>
                                                <div class="input-field col s12">
                                                    <select>
                                                        <option value="" selected
                                                                disabled><?= label('formCliente_seleccioneUno'); ?></option>
                                                        <option value="1">Dolar</option>
                                                        <option value="2">Reales</option>
                                                        <option value="3">Euros</option>
                                                    </select>
                                                    <label for="cliente_moneda"><?= label('formCliente_monedaCotizar'); ?></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field col s12 envio-formulario">
                                            <button class="btn waves-effect waves-light right" type="submit"
                                                    name="action"><?= label('formCliente_enviar'); ?>
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

<script>
    $(window).load(function () {
        var marcados = $('.checkbox:checked').size();
        if (marcados >= 1) {
            var elems = document.getElementsByClassName('opciones-seleccionados');
            var e;
            for (e in elems) {
                elems[e].style.visibility = 'visible';
            }
        } else {
            var elems = document.getElementsByClassName('opciones-seleccionados');
            var e;
            for (e in elems) {
                elems[e].style.visibility = 'hidden';
            }
        }
        document.getElementById('checkbox-all').checked = false;
    });
    $(document).ready(function () {
        $('#botonElimnar').on("click", function (event) {
            var tb = $(this).attr('title');
            var sel = false;
            var ch = $('#' + tb).find('tbody input[type=checkbox]');
            ch.each(function () {
                var $this = $(this);
                if ($this.is(':checked')) {
                    sel = true;
                    $this.parents('tr').fadeOut(function () {
                        $this.remove();
                    });
                }
            });
            return false;
        });
    });
    $(document).ready( function () {
        $('#cliente1-contactos').dataTable( {
            'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0, -1] /* 1st one, start by the right */
            }]
        });

        $('table#cliente1-contactos thead th:first').removeClass('sorting_asc').addClass('sorting_disabled');
        $('table#cliente1-contactos thead th:nth-child(2)').removeClass('sorting').addClass('sorting_asc');
    });
    $(document).ready(function () {
        $('#checkbox-all').click(function (event) {
            var $this = $(this);
            var tableBody = $('#cliente1-contactos').find('tbody tr[role=row] input[type=checkbox]');
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
        $('.checkbox').click(function (event) {
            var marcados = $('.checkbox:checked').size();
            if (marcados >= 1) {
                var elems = document.getElementsByClassName('opciones-seleccionados');
                var e;
                for (e in elems) {
                    elems[e].style.visibility = 'visible';
                }
            } else {
                var elems = document.getElementsByClassName('opciones-seleccionados');
                var e;
                for (e in elems) {
                    elems[e].style.visibility = 'hidden';
                }
            }
        });
    });
    $(document).ready(function () {
        $('.boton-opciones').on('click', function (event) {
            // alert(event.type);
            //e.preventDefault();

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


        $('.tags_gustosCliente  > > input').tagsinput({
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
    function datosCliente(opcionSeleccionada) {
        if (opcionSeleccionada.value == "0") {
            document.getElementById('elementos-cliente-fisico').style.display = 'block';
            document.getElementById('elementos-cliente-juridico').style.display = 'none';
        } else {
            document.getElementById('elementos-cliente-fisico').style.display = 'none';
            document.getElementById('elementos-cliente-juridico').style.display = 'block';
        }
    }
    function agregarNuevoContacto() {
        $('#tab-contactos-nuevo').remove();
        $('#tab-contactos').append('' +
            '<div class="row">' +
                '<div class="col s12 m11 l11">' +
                    '<div class="row">' +
                        '<div class="input-field col s12 m4 l4">' +
                            '<input id="cliente_contactoApellido1" type="text">' +
                            '<label for="cliente_contactoApellido1"><?= label("formContacto_apellido1"); ?></label>' +
                        '</div>' +
                        '<div class="input-field col s12 m4 l4">' +
                            '<input id="cliente_contactoApellido2" type="text">' +
                            '<label for="cliente_contactoApellido2"><?= label("formContacto_apellido2"); ?></label>' +
                        '</div>' +
                        '<div class="input-field col s12 m4 l4">' +
                            '<input id="cliente_contactoNombre" type="text">' +
                            '<label for="cliente_contactoNombre"><?= label("formContacto_nombre"); ?></label>' +
                        '</div>' +
                    '</div>' +

                    '<div class="row">' +
                        '<div class="input-field col s12 m6 l6">' +
                            '<div>' +
                                '<input id="cliente_contactoCorreo" type="email" style="margin-bottom: 0;">' +
                                '<label for="cliente_contactoCorreo"><?= label('formCliente_correo'); ?></label>' +
                            '</div>' +
                            '<div style="margin-bottom: 20px;">' +
                                '<input type="checkbox" class="filled-in" id="checkbox_contactoCorreoCliente" />' +
                                '<label for="checkbox_contactoCorreoCliente" style="margin-bottom: 20px;">' +
                                '<?= label('formCliente_correoCheck') ?>' +
                                '</label>' +
                            '</div>' +
                        '</div>' +
                        '<div class="input-field col s12 m3 l3">' +
                            '<input id="cliente_contactoPuesto" type="text">' +
                            '<label for="cliente_contactoPuesto"><?= label('formContacto_puesto'); ?></label>' +
                        '</div>' +
                        '<div class="input-field col s12 m3 l3">' +
                            '<input id="cliente_contactoTelefono" type="text">' +
                            '<label for="cliente_contactoTelefono"><?= label('formContacto_telefono'); ?></label>' +
                        '</div>' +
                    '</div>' +

                '</div>' +
                '<div class="col s12 m1 l1 btn-contacto-eliminar-edicion">' +
                    '<a href="#eliminarContacto" class="modal-trigger" title="<?= label('formCliente_contactoEliminar') ?>"><i class="mdi-action-delete medium" style="color: black;"></i></a>' +
                '</div>' +
            '</div>' +
            '<div class="row" id="tab-contactos-nuevo">' +
                '<a style="cursor: pointer;" onclick="agregarNuevoContacto();"><?= label('formCliente_contactoAgregar') ?></a>' +
            '</div>' +
            '<div class="col s12">' +
                '<hr />' +
            '</div>');
    }
</script>

<!-- lista modals -->
<div id="eliminarContacto" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarContacto'); ?></p>
    </div>
    <div class="modal-footer black-text">
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
        <div id="botonElimnar" title="cliente1-contactos">
            <a href="#"
               class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>
<!-- Fin lista modals-->