<!-- START CONTENT  -->

<button id="prueba">(PRUEBA)Ver el valor de los impuestos</button>


<script type="text/javascript">
    
// $(document).on('ready', function()){
    $('#prueba').click(function(){

        $.each($("#servicio_impuestos").tagsinput('items'), function( index, value ) {
          alert( index + ": " + value['valor'] );
        });

     });


</script>



<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloFormularioServicio'); ?></h1>
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
                            <div class="col s12">
                                <form id="form_servicio" action="<?= base_url(); ?>servicios/insertar" method="post" class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="servicio_codigo" name="servicio_codigo" type="text">
                                            <label for="servicio_codigo"><?= label('formServicio_codigo'); ?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="servicio_nombre" name="servicio_nombre" type="text">
                                            <label for="servicio_nombre"><?= label('formServicio_nombre'); ?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <textarea id="servicio_descripcion" name="servicio_descripcion"
                                                      class="materialize-textarea" rows="4"></textarea>
                                            <label for="servicio_descripcion"><?= label('formServicio_descripcion'); ?></label>
                                        </div>
                                        <div class="inputTag col s12">
                                            <label for="impuestosServicio"><?= label('formProducto_impuestos'); ?></label>
                                            <br>
                                            <div id="impuestosServicio" class="example tags_Impuestos">
                                                <div class="bs-example">
                                                    <input id="servicio_impuestos" name="servicio_impuestos" placeholder="<?= label('formProducto_anadirImpuesto'); ?>" type="text"/>
                                                </div>
                                            </div>
                                            <br>
                                        </div>

                                        <div class="col s12" style="padding: 0;">
                                            <div class="input-field col s12 m6 l5">
                                                <select id="servicio_fase" name="servicio_fase">
                                                    <option value="" selected disabled>Seleccione uno</option>
                                                    <option value="1">Fase1</option>
                                                    <option value="2">Fase2</option>
                                                    <option value="3">Fase3</option>
                                                </select>
                                                <label for="servicio_fase"><?= label('formServicio_seleccioneFase'); ?></label>
                                            </div>
                                            <div class="input-field col s12 m6 l5">
                                                <select id="servicio_subFase" name="servicio_subFase">
                                                    <option value="" selected disabled>Seleccione uno</option>
                                                    <option value="1">Subfase1</option>
                                                    <option value="2">Subfase2</option>
                                                    <option value="3">Subfase3</option>
                                                </select>
                                                <label for="servicio_subFase"><?= label('formServicio_seleccioneSubfase'); ?></label>
                                            </div>
                                            <div class="input-field col s12 m6 l10" style="margin-top: 5px;">
                                                <a href="" style="text-decoration: underline;float: left;"><?= label('formServicio_agregarTodasFases'); ?></a>
                                                <a href="" class="btn" style="display: block;margin: 0 auto;width: 40%;"><?= label('agregar'); ?></a>
                                            </div>
                                            <div class="col s12" style="margin-top: 15px;padding: 0;">
                                                <div class="col s12 m6 l4">
                                                    <div class="input-field">
                                                        <input id="nuevoServicio_busqueda" type="text">
                                                        <label for="nuevoServicio_busqueda"><i class="mdi-action-search"></i><?= label('formServicio_agregarRapido') ?></label>
                                                    </div>
                                                </div>
                                                <div class="col s12 m6 l8">
                                                    <div class="input-field col s4" style="padding-right: 0;">
                                                        <p style="font-size: large;margin: 15px 0 0;float: right;"><?= label('formServicio_cotizarPor') ?>:</p>
                                                    </div>
                                                    <div class="input-field col s8">
                                                        <select name="servicio_tiempo">
                                                            <option value="1" selected>Horas</option>
                                                            <option value="2">Días</option>
                                                            <option value="3">Semanas</option>
                                                            <option value="4">Meses</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col s12 table-responsive">
                                                <table id="tabla-servicio" class="table striped" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th><?= label('tablaServicio_codigo'); ?></th>
                                                            <th><?= label('tablaServicio_fase'); ?></th>
                                                            <th><?= label('tablaServicio_descripcion'); ?></th>
                                                            <th><?= label('tablaServicio_cantidad'); ?></th>
                                                            <th><?= label('tablaServicio_opciones'); ?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>PROG-0001</td>
                                                            <td>ERS</td>
                                                            <td>Requerimientos de software</td>
                                                            <td><input id="fase1_horas" type="number" value="30" /></td>
                                                            <td>
    <!--                                                            <a href="" class="boton-opciones btn-flat white-text">--><?//= label('menuOpciones_eliminar'); ?><!--</a>-->
                                                                <ul id="dropdown-fase1" class="dropdown-content">
                                                                    <li>
                                                                        <a href="#Editar"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#Eliminar"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                   href="#" data-activates="dropdown-fase1">
                                                                    <?= label('menuOpciones_seleccionar') ?><i
                                                                        class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>PROG-0002</td>
                                                            <td>Analisis</td>
                                                            <td>Fase de analisis del sistema</td>
                                                            <td><input id="fase2_horas" type="number" value="30" /></td>
                                                            <td>
    <!--                                                            <a href="" class="boton-opciones btn-flat white-text">--><?//= label('menuOpciones_eliminar'); ?><!--</a>-->
                                                                <ul id="dropdown-fase2" class="dropdown-content">
                                                                    <li>
                                                                        <a href="#Editar"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#Eliminar"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                   href="#" data-activates="dropdown-fase2">
                                                                    <?= label('menuOpciones_seleccionar') ?><i
                                                                        class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>PROG-0003</td>
                                                            <td>Desarrollo</td>
                                                            <td>Fase de desarrollo del sistema</td>
                                                            <td><input id="fase3_horas" type="number" value="40" /></td>
                                                            <td>
    <!--                                                            <a href="" class="boton-opciones btn-flat white-text">--><?//= label('menuOpciones_eliminar'); ?><!--</a>-->
                                                                <ul id="dropdown-fase3" class="dropdown-content">
                                                                    <li>
                                                                        <a href="#Editar"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#Eliminar"
                                                                           class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                   href="#" data-activates="dropdown-fase3">
                                                                    <?= label('menuOpciones_seleccionar') ?><i
                                                                        class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2"></td>
                                                            <td>TOTAL</td>
                                                            <td>100</td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="input-field col offset-s6 s6">
                                            <input id="servicio_utilidad" name="servicio_utilidad" type="number">
                                            <label for="servicio_utilidad"><?= label('formServicio_utilidad'); ?>
                                            </label>
                                        </div>
                                        <div class="input-field col offset-s6 s6">
                                            <input id="servicio_total" name="servicio_total" type="number" value="0" readonly>
                                            <label for="servicio_total"><?= label('formServicio_total'); ?></label>
                                        </div>

                                        <div class="input-field col s12 envio-formulario">
                                            <button class="btn waves-effect waves-light right" type="submit"
                                                    name="action"><?= label('formServicio_enviar'); ?>
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
<!-- END CONTENT-->

<script>
    function validacionCorrecta_Servicios(){
        $.ajax({
            data: {servicio_codigo :  $('#servicio_codigo').val()},
            url:   '<?=base_url()?>servicios/existeCodigo',
            type:  'post',
            success:  function (response) {
                switch(response){
                    case '0':
                        $('#linkModalError').click();//error al ir a verificar codigo
                        break;
                    case '1':
                        alert('<?= label("servicioCodigoExistente"); ?>');
                        $('#servicio_codigo').focus();
                        break;
                    case '2':
                        var formulario = $('#form_servicio');
                        var formData = formulario.serialize();
                        var url = formulario.attr('action');
                        var method = formulario.attr('method');
                        $.ajax({
                            type: method,
                            url: url,
                            data: formData,
                            success: function(response) {
                                switch(response) {
                                    case '0':
                                        $('#linkModalError').click();
                                        break;
                                    case '1':
                                        $('#linkModalGuardado').click();
                                        $('form')[0].reset();
                                        $('#servicio_impuestos').tagsinput('removeAll');
                                        break;
                                }
                            }
                        });
                        break;
                }
            }
        });
    }
</script>

<script>
    $(document).ready(function () {

        var Impuestos = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('nombre'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // prefetch: 'http://localhost/Proyectos/touch/assets/dashboard/js/json/Impuestos.json'
            prefetch: {
                url: '<?=base_url()?>Impuesto/impuestosSugerencia',
                ttl: 1000
            }
        });

        Impuestos.initialize();

        elt = $('.tags_Impuestos > > input');
        elt.tagsinput({
            itemValue: 'idImpuesto',
            itemText: 'nombre', 
            typeaheadjs: {
                name: 'Impuestos',
                displayKey: 'nombre',
                source: Impuestos.ttAdapter()
            }
        });


        
        // elt.tagsinput('add', {"idImpuesto": 1, "nombre": "Impuestos directos"});
        // elt.tagsinput('add', {"idImpuesto": 2, "nombre": "Impuestos indirectos"});
    });
</script>


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
    $(document).ready(function () {
        $('#checkbox-all').click(function (event) {
            if (this.checked) {
                $('.checkbox').each(function () {
                    this.checked = true;
                });
            } else {
                $('.checkbox').each(function () {
                    this.checked = false;
                });
            }
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

<!-- lista modals -->
<div id="transaccionCorrecta" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('servicioGuardadoCorrectamente'); ?></p>
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

<div id="gastoNuevo" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <input id="gasto_nombre" type="text" value="">
            <label for="gasto_nombre"><?= label('formServicio_gastoAdicionalNombre'); ?></label>
        </div>
        <div class="input-field col s12">
            <input id="gasto_monto" type="text" value="">
            <label for="gasto_monto"><?= label('formServicio_gastoAdicionalMonto'); ?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="agregarPersona" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <select>
                <option value="" selected>Seleccione uno</option>
                <option value="1"><?= label('formServicio_nuevaPersonaEmpleado') ?></option>
                <option value="2"><?= label('formServicio_nuevaPersonaProveedor') ?></option>
            </select>
            <label for="persona_tipo"><?= label('formServicio_nuevaPersonaTipo'); ?></label>
        </div>
        <div class="input-field col s12">
            <input id="persona_codigo" type="text" value="">
            <label for="persona_codigo"><?= label('formServicio_nuevaPersonaCodigo'); ?></label>
        </div>
        <div class="input-field col s12">
            <input id="persona_id" type="text" value="">
            <label for="persona_id"><?= label('formServicio_nuevaPersonaIdentificacion'); ?></label>
        </div>
        <div class="input-field col s12">
            <input id="persona_nombre" type="text" value="">
            <label for="persona_nombre"><?= label('formServicio_nuevaPersonaNombre'); ?></label>
        </div>
        <div class="input-field col s12">
            <textarea id="persona_descripcion" class="materialize-textarea" length="120"></textarea>
            <label for="persona_descripcion"><?= label('formServicio_nuevaPersonaDescripcion'); ?></label>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <select>
                    <option value="">Seleccione</option>
                    <option value="1" selected><?= label('horas') ?></option>
                    <option value="2"><?= label('dia') ?></option>
                    <option value="3"><?= label('semana') ?></option>
                    <option value="4"><?= label('quincena') ?></option>
                    <option value="5"><?= label('mes') ?></option>
                </select>
                <label for=""><?= label('formServicio_nuevaPersonaSalarioTipo'); ?></label>
            </div>
            <div class="input-field col s6">
                <input id="persona_salarioMonto" type="text" value="">
                <label for="persona_salarioMonto"><?= label('formServicio_nuevaPersonaSalarioMonto'); ?></label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="eliminarElemento" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarElementoServicio'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="editar" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <input id="client_code" type="text" value="Maria Rodriguez">
            <label for="client_code"><?= label('formCliente_nombreContacto'); ?></label>
        </div>
        <div class="input-field col s12">
            <input id="client_code" type="text" value="maria@gmail.com">
            <label for="client_code"><?= label('formCliente_correoContacto'); ?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="agregar" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <input id="client_code" type="text" value="">
            <label for="client_code"><?= label('formCliente_nombreContacto'); ?></label>
        </div>
        <div class="input-field col s12">
            <input id="client_code" type="text" value="">
            <label for="client_code"><?= label('formCliente_correoContacto'); ?></label>
        </div>
    </div>
    <div class="modal-footer">
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
        <div id="botonElimnar" title="servicio1-gastos">
            <a href="#"
               class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>
<!-- Fin lista modals -->