<!-- START CONTENT  -->
<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloFormularioServicioEditar'); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <?php
    $idServicio = '';
    $codigo = '';
    $nombre = '';
    $descripcion = '';
    $utilidad = '';
    $total = '';
    if (isset($resultado)) {
        $idServicio = encryptIt($resultado['idServicio']);;
        $codigo = $resultado['codigo'];
        $nombre = $resultado['nombre'];
        $descripcion = $resultado['descripcion'];
        $utilidad = $resultado['utilidad'];
        $total = $resultado['total'];
    }
    ?>

    <!--start container-->
    <div class="container">
        <div id="chart-dashboard">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div id="submit-button" class="section">
                        <div class="row">
                            <div class="col s12">
                                <form id="form_servicio" action="<?= base_url(); ?>servicios/modificar/<?= $idServicio; ?>" method="post" class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="servicio_codigo" name="servicio_codigo" type="text" value="<?= $codigo; ?>">
                                            <label for="servicio_codigo"><?= label('formServicio_codigo'); ?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="servicio_nombre" name="servicio_nombre" type="text" value="<?= $nombre; ?>">
                                            <label for="servicio_nombre"><?= label('formServicio_nombre'); ?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <textarea id="servicio_descripcion" name="servicio_descripcion"
                                                      class="materialize-textarea" rows="4"><?= $descripcion; ?></textarea>
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

                                        <div class="col s8">
                                            <div class="input-field col s6">
                                                <select name="servicio_fase">
                                                    <option value=""
                                                            disabled>Seleccione la fase</option>
                                                    <option value="1">Análisis</option>
                                                    <option value="2" selected>Diseño</option>
                                                    <option value="3">Desarrollo</option>
                                                    <option value="4">Pruebas</option>
                                                    <option value="5">Mantenimiento</option>
                                                </select>
                                                <label for="servicio_fase"><?= label('formServicio_seleccioneFase') ?></label>
                                            </div> 
                                            <div class="input-field col s6">
                                                <select name="servicio_subfase">
                                                    <option value="" 
                                                            disabled>Seleccione la subfase</option>
                                                    <option value="1">Diseño lógico</option>
                                                    <option value="2" selected>Diseño fisico</option>
                                                    <option value="3">Prototipo</option>
                                                </select>
                                                <label for="servicio_subfase"><?= label('formServicio_seleccioneSubfase') ?></label>
                                            </div> 
                                        </div>

                                        <div class="input-field col s12">
                                            <a href=""><?= label('formServicio_agregarTodasFases') ?></a>
                                        </div>
                                        <br>
                                        <div class="agregar_nuevo col s12">
                                            <a href="" class="btn btn-default"><?= label('formServicio_agregar') ?></a>
                                        </div>

                                        <div class="col s12">
                                            <div class="input-field col s6">
                                                <div class="input-field col s3">
                                                    <label for="servicio-agregar-rapido"><?= label('formServicio_agregarRapido') ?></label>
                                                </div>
                                                <div class="input-field col s9">
                                                    <input id="servicio-busqueda" type="text" value="Diseño">
                                                    <label for="servicio-busqueda"><?= label('formServicio_busqueda') ?></label>
                                                </div>
                                            </div> 
                                            <div class="input-field col s6">
                                                <div class="input-field col s4">
                                                <label for="servicio_tiempo"><?= label('formServicio_cotizarPor') ?></label>
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

                                        <div class="table-responsive">
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
                                                            <td><a href="">001</a></td>
                                                            <td><a href="">ERS</a></td>
                                                            <td>Requerimientos de software</td>
                                                            <td><input type="number"></td>
                                                            <td>
                                                                <ul id="dropdown-forma2" class="dropdown-content">
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
                                                                   href="#!" data-activates="dropdown-forma2">
                                                                    <?= label('menuOpciones_seleccionar') ?><i
                                                                        class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="">001</a></td>
                                                            <td><a href="">ERS</a></td>
                                                            <td>Requerimientos de software</td>
                                                            <td><input type="number"></td>
                                                            <td>
                                                                <ul id="dropdown-forma2" class="dropdown-content">
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
                                                                   href="#!" data-activates="dropdown-forma2">
                                                                    <?= label('menuOpciones_seleccionar') ?><i
                                                                        class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="">001</a></td>
                                                            <td><a href="">ERS</a></td>
                                                            <td>Requerimientos de software</td>
                                                            <td><input type="number"></td>
                                                            <td>
                                                                <ul id="dropdown-forma2" class="dropdown-content">
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
                                                                   href="#!" data-activates="dropdown-forma2">
                                                                    <?= label('menuOpciones_seleccionar') ?><i
                                                                        class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td>TOTAL</td>
                                                            <td>70</td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        <div class="input-field col offset-s6 s6">
                                            <input id="servicio_utilidad" name="servicio_utilidad" type="number" value="<?= $utilidad; ?>">
                                            <label for="servicio_utilidad"><?= label('formServicio_utilidad'); ?>
                                            </label>
                                        </div>
                                        <div class="input-field col offset-s6 s6">
                                            <input id="servicio_total" name="servicio_total" type="number" value="<?= $total; ?>" readonly>
                                            <label for="servicio_total"><?= label('formServicio_total'); ?></label>
                                        </div>

                                        <div class="input-field col s12 envio-formulario">
                                            <button class="btn waves-effect waves-light right" type="submit"
                                                    name="action"><?= label('formServicio_editar'); ?>
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
        var codigoActual = '<?= $codigo; ?>';
        var codigoNuevo = $('#servicio_codigo').val();
        if(codigoActual == codigoNuevo) {
            var formulario = $('#form_servicio');
            var data = formulario.serialize();
            var url = formulario.attr('action');
            var method = formulario.attr('method');
            $.ajax({
                type: method,
                url: url,
                data: data,
                success: function(response)
                {
                    if (response == 0) {
                        $('#linkModalError').click();
                    } else {
                        $('#linkModalGuardado').click();
                    }
                }
            });
        } else {
            $.ajax({
                data: {servicio_codigo: $('#servicio_codigo').val()},
                url: '<?=base_url()?>servicios/existeCodigo',
                type: 'post',
                success: function (response) {
                    switch (response) {
                        case '0':
                            $('#linkModalError').click();//error al ir a verificar codigo
                            break;
                        case '1':
                            alert('<?= label("servicioCodigoExistente"); ?>');
                            $('#servicio_codigo').focus();
                            break;
                        case '2':
                            var formulario = $('#form_servicio');
                            var data = formulario.serialize();
                            var url = formulario.attr('action');
                            var method = formulario.attr('method');
                            $.ajax({
                                type: method,
                                url: url,
                                data: data,
                                success: function (response) {
                                    switch (response) {
                                        case '0':
                                            $('#linkModalError').click();
                                            break;
                                        case '1':
                                            $('#linkModalGuardado').click();
                                            break;
                                    }
                                }
                            });
                            break;
                    }
                }
            });
        }
    }
</script>

<script>
    $(document).ready(function () {
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

        $('.tags_Impuestos > > input').tagsinput({
            typeaheadjs: {
                name: 'gusto',
                displayKey: 'name',
                valueKey: 'name',
                source: gusto.ttAdapter()
            }
        });

        // elt.tagsinput('add', {"value": 1, "text": "Impuestos directos", "continent": "Europe"});
        // elt.tagsinput('add', {"value": 2, "text": "Impuestos indirectos", "continent": "America"});
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
        <p><?= label('servicioEditadoCorrectamente'); ?></p>
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