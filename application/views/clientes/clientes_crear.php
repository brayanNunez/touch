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
<!--                                <form id="form_cliente" class="col s12" action="--><?//= base_url() ?><!--clientes/insertar" method="POST">-->
                                <?php $this->load->helper('form'); ?>
                                <?php echo form_open_multipart(base_url().'clientes/insertar',
                                    array('id' => 'form_cliente', 'method' => 'POST', 'class' => 'col s12')); ?>
                                    <div class="row">

                                        <div class="input-field col s12">
                                            <select  id="cliente_tipo" name="cliente_tipo" onchange="datosCliente(this)">
                                                <option value="0" selected><?= label('formCliente_fisica'); ?></option>
                                                <option value="1"><?= label('formCliente_juridica'); ?></option>
                                            </select>
                                            <label for="cliente_tipo"><?= label('formCliente_tipoPersona'); ?></label>
                                        </div>

                                        <div class="input-field col s12 inputSelector" >
                                            <label for="cliente_nacionalidad"><?= label('formCliente_nacionalidad'); ?></label>
                                            <br>
                                            <select data-placeholder="<?= label('formCliente_seleccioneUno'); ?>" data-incluirBoton="0" id="cliente_nacionalidad" name="cliente_nacionalidad" class="required browser-default chosen-select">
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

                                        <div id="elementos-cliente-fisico" style="display: block;">
                                            <div class="input-field col s12">
                                                <input id="cliente_id" name="cliente_id" type="text">
                                                <label for="cliente_id"><?= label('formCliente_identificacion'); ?></label>
                                            </div>
                                            <div>
                                                <div class="input-field col s12 m4 l4">
                                                    <input id="cliente_nombre" name="cliente_nombre" type="text">
                                                    <label for="cliente_nombre"><?= label('formCliente_nombre'); ?></label>
                                                </div>
                                                <div class="input-field col s12 m4 l4">
                                                    <input id="cliente_apellido1" name="cliente_apellido1" type="text">
                                                    <label for="cliente_apellido1"><?= label('formCliente_apellido1'); ?></label>
                                                </div>
                                                <div class="input-field col s12 m4 l4">
                                                    <input id="cliente_apellido2" name="cliente_apellido2" type="text">
                                                    <label for="cliente_apellido2"><?= label('formCliente_apellido2'); ?></label>
                                                </div>
                                            </div>
                                            <div class="input-field col s12">
                                                <div>
                                                    <input id="cliente_correo" name="cliente_correo" type="email" style="margin-bottom: 0;" >
                                                    <label for="cliente_correo"><?= label('formCliente_correo'); ?></label>
                                                </div>
                                                <div style="margin-bottom: 20px;">
                                                    <input value='1' type="checkbox" class="filled-in" id="checkbox_correoCliente" name="checkbox_correoCliente" />
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
                                            <div class="file-field col s12 m7 l9" style="margin-top:45px;">
                                                <label for="cliente_fotografia"><?= label('formCliente_fotografia'); ?></label>

                                                <div class="file-field input-field col s12">
                                                    <input name="cliente_fotografia" class="file-path" type="text" readonly/>

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
                                                    <div class="input-field col s12 m4 l4 inputSelector" >
                                                        <label for="cliente_direccionPais"><?= label('formCliente_direccionPais'); ?></label>
                                                        <br>
                                                        <select data-placeholder="<?= label('formCliente_seleccioneUno'); ?>" data-incluirBoton="0" id="cliente_direccionPais" name="cliente_direccionPais" class="browser-default chosen-select">
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
                                                        <input id="cliente_direccionProvincia" name="cliente_direccionProvincia" type="text">
                                                        <label for="cliente_direccionProvincia"><?= label('formCliente_direccionProvincia'); ?></label>
                                                    </div>
                                                    <div class="input-field col s12 m4 l4">
                                                        <input id="cliente_direccionCanton" name="cliente_direccionCanton" type="text">
                                                        <label for="cliente_direccionCanton"><?= label('formCliente_direccionCanton'); ?></label>
                                                    </div>
                                                    <div class="input-field col s12 m12 l12">
                                                        <textarea length="200" maxlength="200" id="cliente_direccionDomicilio" name="cliente_direccionDomicilio" class="materialize-textarea" rows="4"></textarea>
                                                        <label for="cliente_direccionDomicilio"><?= label('formCliente_direccionDomicilio'); ?></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tab-contactos" class="card col s12">
                                                <input style="display:none" id="cantidadContactos" name="cantidadContactos" type="text" value="0">    
                                                <div id="contenedorContactos">
                                                    
                                                </div>
                                                   
                                                <div class="row" id="tab-contactos-nuevo">
                                                    <a onclick="agregarNuevoContacto();">
                                                        <?= label('formCliente_contactoAgregar') ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="tab-infoAdicional" class="card col s12">

                                                <div class="inputTag col s12">
                                                    <label for="vendedoresCliente"><?= label('formCliente_cotizador'); ?></label>

                                                    <div>
                                                        <input value='1' type="checkbox" class="filled-in" id="checkbox_todosVendedores" name="checkbox_todosVendedores" />
                                                        <label for="checkbox_todosVendedores">
                                                            <?= label('formCliente_todos') ?>
                                                        </label>
                                                    </div>
                                                    
                                                    <!-- <br> -->
                                                    <div id="vendedoresCliente" class="example tags_vendedores">
                                                        <div class="bs-example">
                                                            <input id="cliente_vendedores" name="cliente_vendedores" placeholder="<?= label('formCliente_anadirVendedor'); ?>" type="text"/>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                                <div class="inputTag col s12">
                                                    <label for="gustosCliente"><?= label('formCliente_gustos_preferencias'); ?></label>
                                                    <br>
                                                    <div id="gustosCliente" class="example tags_gustosCliente">
                                                        <div class="bs-example">
                                                            <input id="cliente_gustos" name="cliente_gustos" placeholder="<?= label('formCliente_anadirGusto'); ?>" type="text"
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
                                                            <input id="cliente_medios" name="cliente_medios" placeholder="<?= label('formCliente_anadirMedio'); ?>" type="text"
                                                                   value=""/>
                                                        </div>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                            <div id="tab-infoFacturacion" class="card col s12" style="padding-bottom: 20px;">
                                                <div class="input-field col s12 inputSelector" >
                                                    <label for="cliente_formaPago"><?= label('formCliente_formaPagoFavorita'); ?></label>
                                                    <br>
                                                    <select data-placeholder="<?= label('formCliente_seleccioneUno'); ?>" data-incluirBoton="0" id="cliente_formaPago" name="cliente_formaPago" class=" browser-default chosen-select">
                                                        <!-- <option value=""></option> -->
                                                        <option value="0" disabled selected style="display:none;"><?= label("formCliente_seleccioneUno"); ?></option>
                                                        <?php
                                                        if(isset($formasPago)) {
                                                            foreach ($formasPago as $formaPago) { ?>
                                                                <option value="<?= $formaPago['idFormaPago']; ?>"><?= $formaPago['nombre']; ?></option>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="input-field col s12">
                                                    <input id="cliente_descuento" name="cliente_descuento" type="text">
                                                    <label
                                                        for="cliente_descuento"><?= label('formCliente_descuento'); ?></label>
                                                    <span class="icono-porcentaje-descuento">%</span>
                                                </div>
                                                <div class="input-field col s12 inputSelector" >
                                                    <label for="cliente_monedaCotizar"><?= label('formCliente_monedaCotizar'); ?></label>
                                                    <br>
                                                    <select data-placeholder="<?= label('formCliente_seleccioneUno'); ?>" data-incluirBoton="0" id="cliente_monedaCotizar" name="cliente_monedaCotizar" class=" browser-default chosen-select">
                                                        <option value="0" disabled selected style="display:none;"><?= label("formCliente_seleccioneUno"); ?></option>
                                                        <?php
                                                        if(isset($monedas)) {
                                                            foreach ($monedas as $moneda) { ?>
                                                                <option value="<?= $moneda['idMoneda']; ?>"><?= $moneda['nombre']; ?></option>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
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
<div style="visibility:hidden; position:absolute">
    <a id="linkContactosElimminar" href="#eliminarContacto" class="modal-trigger" data-fila-eliminar="1" title="<?= label('formCliente_contactoEliminar') ?>"><i class="mdi-action-delete medium" style="color: black;"></i></a>
</div>
<!-- END CONTENT-->

<!-- Script para manejo de tabla, insercion de datos, selects de busqueda-->
<script>
    $('#checkbox_todosVendedores').on('click', function(){
        if ($(this).prop('checked')) {
            $('#vendedoresCliente').hide();
        } else {
            $('#vendedoresCliente').show();
        }
    });
    $(document).on('ready', function(){
        var config = {'.chosen-select'           : {}}
          for (var selector in config) {
            $(selector).chosen(config[selector]);
          }
    });
    function validacionCorrecta(){
        var tipoCliente = $('#cliente_tipo option:selected').val();
        var identificacion = '';
        if (tipoCliente == 0) {
            identificacion = $('#cliente_id').val();
        } else{
            identificacion = $('#clientejuridico_id').val();
        }
        $.ajax({
            data: {cliente_id :  identificacion},
            url:   '<?=base_url()?>clientes/existeIdentificacion',
            type:  'post',
            success:  function (response) {
                switch(response){
                    case '0':
                        $('#transaccionIncorrecta').openModal();//error al ir a verificar identificaci�n
                    break;
                    case '1':
                        alert('<?= label("clienteIdentificacionExistente"); ?>');
                        if (tipoCliente == 0) {
                            $('#cliente_id').focus();
                        } else{
                            $('#clientejuridico_id').focus();
                        }
                        break;
                    case '2':
                        var formulario = $('#form_cliente');
                        var data = new FormData(formulario[0]);
                        var url = formulario.attr('action');
                        var method = formulario.attr('method');
                        $.ajax({
                            type: method,
                            url: url,
                            data: data,
                            success: function(response) {
                                if (response == 0) {
                                    $('#transaccionIncorrecta').openModal();
                                } else {
                                    $('#transaccionCorrecta').openModal();
                                    $('form')[0].reset();
                                    $('#cliente_nacionalidad').val('').trigger('chosen:updated');
                                    document.getElementById('elementos-cliente-fisico').style.display = 'block';
                                    document.getElementById('elementos-cliente-juridico').style.display = 'none';
                                    $('#cliente_vendedores').tagsinput('removeAll');
                                    $('#cliente_gustos').tagsinput('removeAll');
                                    $('#cliente_medios').tagsinput('removeAll');
                                    $('#vendedoresCliente').show();
                                    $('#cliente_direccionPais').val('').trigger('chosen:updated');
                                    $('#cliente_formaPago').val('').trigger('chosen:updated');
                                    $('#cliente_monedaCotizar').val('').trigger('chosen:updated');

                                    $('#imagen_seleccionada').attr('src', '<?= base_url(); ?>files/default-user-image.png');
                                    cantidad = 0;
                                    contador = 0;
                                    actualizarCantidad();
                                    $('#contenedorContactos').empty();
                                }
                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                        break;
                }
            }
        });
    }

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
<!-- Script para manejo de la imagen del cliente -->
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imagen_seleccionada').attr('src', e.target.result);
            };
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
//            $('#usuario_fotografia').attr('value', ext);
            readURL(this);
        }
    });
</script>
<!-- Script para manejo de tags -->
<script>
    $(document).ready(function () {


        var Vendedores = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('nombre'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // prefetch: 'http://localhost/Proyectos/touch/assets/dashboard/js/json/Vendedores.json'
            prefetch: {
                url: '<?=base_url()?>Usuarios/vendedorSugerencia',
                ttl: 1000
            }
        });

        Vendedores.initialize();


        elt = $('.tags_vendedores > > input');
        elt.tagsinput({
            itemValue: 'idUsuario',
            itemText: 'nombre', 
            typeaheadjs: {
                name: 'Vendedor',
                displayKey: 'nombre',
                source: Vendedores.ttAdapter()
            }
        });

        var gusto = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: {
                url: '<?=base_url()?>Clientes/gustosSugerencia',
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
                url: '<?=base_url()?>Clientes/mediosSugerencia',
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
<!-- Funcion para mostrar elementos y manejo de contactos -->
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
            '<div id="contacto' + contador +' " class="row">' +
                '<div class="col s12 m11 l11">' +
                    '<div class="row">' +
                        '<div class="input-field col s12 m4 l4">' +
                            '<input style="display:none" name="contacto_'+ contador +'" type="text">' +
                            '<input id="cliente_contactoNombre_'+ contador +'" name="cliente_contactoNombre_'+ contador +'" type="text">' +
                            '<label for="cliente_contactoNombre_'+ contador +'"><?= label("formContacto_nombre"); ?></label>' +
                        '</div>' +
                        '<div class="input-field col s12 m4 l4">' +
                            '<input id="cliente_contactoApellido1_'+ contador +'" name="cliente_contactoApellido1_'+ contador +'" type="text">' +
                            '<label for="cliente_contactoApellido1_'+ contador +'"><?= label("formContacto_apellido1"); ?></label>' +
                        '</div>' +
                        '<div class="input-field col s12 m4 l4">' +
                            '<input id="cliente_contactoApellido2_'+ contador +'" name="cliente_contactoApellido2_'+ contador +'" type="text">' +
                            '<label for="cliente_contactoApellido2_'+ contador +'"><?= label("formContacto_apellido2"); ?></label>' +
                        '</div>' +
                    '</div>' +

                    '<div class="row">' +
                        '<div class="input-field col s12 m6 l6">' +
                            '<div>' +
                                '<input id="cliente_contactoCorreo_'+ contador +'" name="cliente_contactoCorreo_'+ contador +'" type="email" style="margin-bottom: 0;">' +
                                '<label for="cliente_contactoCorreo_'+ contador +'"><?= label('formCliente_correo'); ?></label>' +
                            '</div>' +
                            '<div style="margin-bottom: 20px;">' +
                                '<input type="checkbox" class="filled-in" id="checkbox_contactoCorreoCliente_'+ contador +'" name="checkbox_contactoCorreoCliente_'+ contador +'" />' +
                                '<label for="checkbox_contactoCorreoCliente_'+ contador +'" style="margin-bottom: 20px;">' +
                                '<?= label('formCliente_correoCheck') ?>' +
                                '</label>' +
                            '</div>' +
                        '</div>' +
                        '<div class="input-field col s12 m3 l3">' +
                            '<input id="cliente_contactoPuesto_'+ contador +'" name="cliente_contactoPuesto_'+ contador +'" type="text">' +
                            '<label for="cliente_contactoPuesto_'+ contador +'"><?= label('formContacto_puesto'); ?></label>' +
                        '</div>' +
                        '<div class="input-field col s12 m3 l3">' +
                            '<input id="cliente_contactoTelefono_'+ contador +'" name="cliente_contactoTelefono_'+ contador +'" type="text">' +
                            '<label for="cliente_contactoTelefono_'+ contador +'"><?= label('formContacto_telefono'); ?></label>' +
                        '</div>' +
                    '</div>' +

                '</div>' +
                '<div class="col s12 m1 l1 btn-contacto-eliminar-edicion">' +
                    '<a class="confirmarEliminarContacto" data-fila-eliminar="' + contador + '" title="<?= label('formCliente_contactoEliminar') ?>"><i class="mdi-action-delete medium" style="color: black;"></i></a>' +
                '</div>' +
                '<div class="col s12">' +
                    '<hr />' +
                '</div>' +
            '</div>' 
            
            );
            contador++;
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
    <div id="botonEliminar" class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>

<div id="transaccionCorrecta" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('clienteGuardadoCorrectamente'); ?></p>
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
<!-- Fin lista modals