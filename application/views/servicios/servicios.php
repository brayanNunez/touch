<!-- <button id="prueba">(PRUEBA)Ver el valor de los impuestos</button> -->

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
                                            <textarea length="200" maxlength="200" id="servicio_descripcion" name="servicio_descripcion"
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

                                        <!-- aqui -->
                                        <div class="col s12" style="padding: 0;">
                                            <div class="input-field col s12 m6 l6 inputSelector" >
                                                <label for="servicioFase"><?= label('formServicio_seleccioneFase'); ?></label>
                                                <br>
                                                <select data-incluirBoton="0" placeholder="seleccionar" data-tipo="servicioFase" id="servicioFase" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("servicio_elegirFase"); ?>" class="browser-default chosen-select" style="width:350px;" tabindex="2">
                                                </select>
                                            </div>
                                            <div class="input-field col s12 m6 l6 inputSelector" >
                                                <label for="servicio_subFase"><?= label('formServicio_seleccioneSubfase'); ?></label>
                                                <br>
                                                <select disabled='disabled' data-incluirBoton="0" placeholder="seleccionar" data-tipo="servicio_subFase" id="servicio_subFase" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("servicio_elegirSubFase"); ?>" class="browser-default chosen-select" style="width:350px;" tabindex="2">
                                                </select>
                                            </div>
                                            <div class="input-field col s12 m12 l12" style="margin-top: 5px;">
                                                <!-- <a href="" style="text-decoration: underline;float: left;"><?= label('formServicio_agregarTodasFases'); ?></a> -->
                                                <a id="agregarFase" class="btn" style="display: block;margin: 5px auto;width: 40%;"><?= label('agregar'); ?></a>
                                            </div>

                                            <div class="input-field col s12 m6 l3 inputSelector" >
                                                <label for="servicioFase"><?= label('formServicio_cotizarPor'); ?></label>
                                                <br>
                                                <select data-incluirBoton="0" placeholder="seleccionar" data-tipo="servicioTiempo" id="servicioTiempo" name="servicioTiempo" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("servicio_elegirTiempo"); ?>" class="browser-default chosen-select" style="width:350px;" tabindex="2">
                                                    <option value="0" disabled selected style="display:none;"><?= label("servicio_elegirTiempo"); ?></option>
                                                    <!-- <option value="nuevo"><?= label("agregarNuevo"); ?></option> -->
                                                     <?php
                                                        if (isset($tiempos)) {                                                               
                                                                foreach ($tiempos as $tiempo) {
                                                    ?>
                                                    <option value="<?=$tiempo['idTiempo']?>"><?=$tiempo['nombre']?></option>
                                                    <?php 
                                                        }
                                                    }
                                                    ?>
                                                    <!-- <option value="1">Horas</option>
                                                    <option value="2">Días</option>
                                                    <option value="3">Semanas</option>
                                                    <option value="4">Meses</option> -->
                                                </select>
                                            </div>

                                            <input style="display:none" id="cantidadFases" name="cantidadFases" type="text" value="0">    
                                            <div class="col s12 table-responsive">
                                                <table id="tabla-servicio" class="table striped" cellspacing="0">
                                                    <thead>
                                                    <tr>
                                                        <th><?= label('tablaServicio_codigo'); ?></th>
                                                        <th><?= label('tablaServicio_fase'); ?></th>
                                                        <th><?= label('tablaServicio_descripcion'); ?></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th style="display:none"></th>
                                                        <th><?= label('tablaServicio_cantidad'); ?></th>
                                                        <th><?= label('tablaServicio_opciones'); ?></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-top: 25px;">
                                            <div class="input-field col s12" style="margin-top: 0;">
                                                <input class="filled-in" type="checkbox" id="servicio_incluirGastosVariables" name="servicio_incluirGastosVariables"/>
                                                <label for="servicio_incluirGastosVariables"><?= label('servicio_incluirGastosVariables'); ?></label>
                                            </div>
                                            <div id="servicio_gastosVariables" style="display: none;padding: 0;">
                                                <div class="col s12 m6 l3" style="margin-top: 20px;">
                                                    <div class="input-field col s12 inputSelector">
                                                        <label for="agregarGastos_buscar"><?= label('agregarGatos_buscar'); ?></label>
                                                        <br>
                                                        <select data-placeholder="<?= label('formServicio_seleccioneGasto'); ?>" data-incluirBoton="0" id="agregarGastos_buscar" name="agregarGastos_buscar" class="browser-default chosen-select">
                                                            <option value=""></option>
                                                            <?php
                                                            if(isset($gastos)) {
                                                                foreach ($gastos as $gasto) { ?>
                                                                    <option value="<?= $gasto['idGasto']; ?>"><?= $gasto['nombre']; ?></option>
                                                            <?php
                                                                }
                                                            } ?>
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <div class="col s12">
                                                            <a id="busqueda_masOpciones" style="text-decoration: underline;float: right;cursor: pointer;margin-bottom: 20px;">
                                                                <?= label('agregarGastos_masOpciones'); ?></a>
                                                        </div>
                                                        <div id="opcionesBusquedaGasto" class="col s12" style="display: none;margin-bottom: 20px;padding: 0;">
                                                            <div class="input-field col s12 inputSelector">
                                                                <label for="agregarGastos_categoria"><?= label('agregarGastos_categoria'); ?></label>
                                                                <br>
                                                                <select data-placeholder="<?= label('formServicio_seleccioneCategoria'); ?>" data-tipo="servicioCategoriaGasto" data-incluirBoton="0" id="agregarGastos_categoria" name="agregarGastos_categoria" class="browser-default chosen-select">
                                                                    <option value=""></option>
                                                                    <?php
                                                                    if(isset($categorias)) {
                                                                        foreach ($categorias as $categoria) { ?>
                                                                            <option value="<?= $categoria['idCategoriaPersona']; ?>"><?= $categoria['nombre']; ?></option>
                                                                            <?php
                                                                        }
                                                                    } ?>
                                                                </select>
                                                            </div>
                                                            <div class="input-field col s12 inputSelector">
                                                                <label for="agregarGastos_proveedor"><?= label('agregarGastos_proveedor'); ?></label>
                                                                <br>
                                                                <select data-placeholder="<?= label('formServicio_seleccioneProveedor'); ?>" data-tipo="servicioPersonaGasto"  data-incluirBoton="0" id="agregarGastos_proveedor" name="agregarGastos_proveedor" class="browser-default chosen-select">
                                                                </select>
                                                            </div>
                                                            <div class="input-field col s12 inputSelector">
                                                                <label for="agregarGastos_gasto"><?= label('agregarGastos_gasto'); ?></label>
                                                                <br>
                                                                <select data-placeholder="<?= label('formServicio_seleccioneGasto'); ?>" data-incluirBoton="0" id="agregarGastos_gasto" name="agregarGastos_gasto" class="browser-default chosen-select">
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a class="waves-effect btn" id="btn_agregarGasto"
                                                           style="width: 200px;float: none;display: block;margin: 0 auto;text-align: center;color: white;cursor:pointer;">
                                                            <?= label('agregarGatos_agregar'); ?>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col s12 m12 l9">
                                                    <div class="table-responsive">
                                                        <table id="gastos-tabla-lista" class="table display striped" cellspacing="0">
                                                            <thead>
                                                            <tr>
                                                                <th><?= label('tituloGastos_codigo'); ?></th>
                                                                <th><?= label('tituloGastos_gasto'); ?></th>
                                                                <th><?= label('tituloGastos_proveedor'); ?></th>
                                                                <th><?= label('tituloGastos_tiempo'); ?></th>
                                                                <th><?= label('tituloGastos_monto'); ?></th>
                                                                <th><?= label('tituloGastos_cantidad'); ?></th>
                                                                <th><?= label('tituloGastos_subtotal'); ?></th>
                                                                <th><?= label('tituloGastos_opciones'); ?></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td><?= label('modalServicio_total'); ?></td>
                                                                    <td><span class="moneda_signo"></span><span class="total_gastos_variables">0</span></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col s12" style="margin-top: 20px;">
                                                    <h5><?= label('servicioGastos_total'); ?>: <span class="moneda_signo"></span><span class="total_gastos_variables">0</span></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-field col offset-s6 s6">
                                            <input readonly id="cantidadTotal" name="servicio_cantidadTotal" type="number" value="0">
                                            <label for="cantidadTotal"><?= label('formServicio_totalTiempo'); ?> <span id='unidadTiempo'></span>
                                            </label>
                                        </div>
                                        <div class="input-field col offset-s6 s6">
                                            <input id="servicio_utilidad" name="servicio_utilidad" type="number" min="0" value="0">
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
                                    <div style="visibility:hidden; position:absolute">
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
</div>
<div style="visibility:hidden; position:absolute">
    <a id="linkGastosEliminar" href="#eliminarGasto" class="modal-trigger" data-fila-eliminar="1"
       title="<?= label('formProveedor_gastoEliminar') ?>"><i class="mdi-action-delete medium" style="color: black;"></i></a>
    <a id="btn_errorHoras" href="#mensajeHorasIncompletas" style="display: none;" class="modal-trigger"></a>
</div>
<!-- END CONTENT-->

<!--Script para select de busqueda-->
<script>
    $(document).on('ready', function(){
        var config = {'.chosen-select'           : {}}
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }

        $('#servicioTiempo').on('change', function(){
            cambioUnidadTiempo();
        });
        function cambioUnidadTiempo(){
            var valor = $('#servicioTiempo option:selected').text().toLowerCase();
            $('#unidadTiempo').text('en ' + valor);
        }

    });
</script>
<!--Script para mostrar elementos de agregar gastos-->
<script>
    gastosTabla = [];
    $(document).ready(function () {
        $('#agregarGastos_proveedor').attr('disabled', 'disabled');
        $('#agregarGastos_gasto').attr('disabled', 'disabled');
        $('#busqueda_masOpciones').click(function (event) {
            var $elementos = $('#opcionesBusquedaGasto');
            var $buscar = $('#agregarGastos_buscar');
            var $display = $elementos.css('display');
            if($display == 'none') {
                $elementos.css('display', 'block');
                $(this).text('<?= label('agregarGastos_menosOpciones'); ?>');
                $buscar.val('0');
                $buscar.attr('disabled', 'disabled');
                $buscar.trigger("chosen:updated");
            } else {
                $elementos.css('display', 'none');
                $(this).text('<?= label('agregarGastos_masOpciones'); ?>');
                $buscar.removeAttr('disabled');
                $buscar.trigger("chosen:updated");

                var select_categoria = $('#agregarGastos_categoria');
                select_categoria.val('0');
                select_categoria.trigger("chosen:updated");
                var select_persona = $('#agregarGastos_proveedor');
                select_persona.val('0');
                select_persona.attr('disabled', 'disabled');
                select_persona.trigger("chosen:updated");
                var select_gastos = $('#agregarGastos_gasto');
                select_gastos.val('0');
                select_gastos.attr('disabled', 'disabled');
                select_gastos.trigger("chosen:updated");
            }
        });
        $('#servicio_incluirGastosVariables').click(function (event) {
            var $incluir = $(this).is(':checked');
            var $gastos = $('#servicio_gastosVariables');
            if($incluir) {
                $gastos.css('display', 'block');
            } else {
                $gastos.css('display', 'none');
            }
        });
        <?php
        $js_arrayPersonas = json_encode($personas);
        $js_arrayGastos = json_encode($gastos);
        echo "var arrayPersonas =". $js_arrayPersonas.';';
        echo "var arrayGastos =". $js_arrayGastos.';';
        ?>
        $(document).on('change','.chosen-select',function(){
            var valor = $(this).val();
            var tipo = $(this).attr("data-tipo");
            var $gastos_categoria = $('#agregarGastos_categoria');
            var $gastos_persona = $('#agregarGastos_proveedor');
            var $gastos_gasto = $('#agregarGastos_gasto');
            if (tipo == 'servicioCategoriaGasto') {
                var categoria_id = $gastos_categoria.val();
                $gastos_persona.empty(); //remove all child nodes
                $gastos_persona.removeAttr('disabled');
                $gastos_persona.append($('<option value="0" disabled selected style="display:none;"><?= label("servicio_elegirPersonaGasto"); ?></option>'));
                for (var i = 0; i < arrayPersonas.length; i++) {
                    var persona_categorias = arrayPersonas[i]['categorias'];
                    for(var j = 0; j < persona_categorias.length; j++) {
                        var categorias_ids = persona_categorias[j]['idCategoriaPersona'];
                        if(categorias_ids.indexOf(categoria_id) != -1) {
                            var newOption = $('<option value="'+ arrayPersonas[i]['idProveedor'] + '">' + arrayPersonas[i]['nombre'] + '</option>');
                            $gastos_persona.append(newOption);
                        }
                    }
                }
                $gastos_gasto.attr('disabled', 'disabled');
                $gastos_gasto.trigger("chosen:updated");
                $gastos_persona.trigger("chosen:updated");
            } else {
                if(tipo == 'servicioPersonaGasto') {
                    var persona_id = $gastos_persona.val();
                    $gastos_gasto.empty(); //remove all child nodes
                    $gastos_gasto.removeAttr('disabled');
                    $gastos_gasto.append($('<option value="0" disabled selected style="display:none;"><?= label("servicio_elegirGastoGasto"); ?></option>'));
                    for (var i = 0; i < arrayGastos.length; i++) {
                        var gasto_persona = arrayGastos[i]['idProveedor'];
                        if(gasto_persona == persona_id) {
                            var newOption = $('<option value="' + arrayGastos[i]['idGasto'] + '">' + arrayGastos[i]['nombre'] + '</option>');
                            $gastos_gasto.append(newOption);
                        }
                    }
                    $gastos_gasto.trigger("chosen:updated");
                }
            }
        });
        $(document).on('change', '.input_cantidad_gasto', function () {
            actualizarMontos();
        });
    });
    function actualizarMontos() {
        var elementos = $('.total_gastos_variables');
        var gastosVariablesServicios = 0;//parseInt(elementos.first().text());
        $('.input_cantidad_gasto').each(function () {
            var padre = $(this).parents('tr');
            var monto = padre.find('td input.input_monto_gasto').first().val();
            var cantidad = $(this).val();
            var subtotal = padre.find('td span.subtotal_fila').first();
            var resultado = monto * cantidad;
            subtotal.text(resultado);
            gastosVariablesServicios += resultado;
        });
        elementos.each(function () {
            $(this).text(gastosVariablesServicios);
        });

        totalGastosVariables = gastosVariablesServicios;

        calcularPrecio();
    }
    function limpiarTablaGastos() {
        $('.gasto_elementoTabla').each(function () {
            var elementoPadre = $(this).parents('tr');
            elementoPadre.fadeOut(function () {
                elementoPadre.empty();
                elementoPadre.remove();
            });
        });
        actualizarMontos();
        contadorFilasGastos = 0;
        actualizarCantidadGastos();
        gastosTabla.splice(0, gastosTabla.length);
    }
</script>
<!--Script para manejo de gastos-->
<script type="text/javascript">
    var menuOpciones_eliminar = '<?= label('menuOpciones_eliminar'); ?>';
    var totalGastosVariables = 0;
    function actualizarCantidadGastos(){
        $('#cantidadGastos').val(contadorFilasGastos);
    }
    $(document).ready(function () {
        $('#btn_agregarGasto').on('click', function () {
            var idGastoPrincipal = $('#agregarGastos_buscar').val();
            var idCategoria = $('#agregarGastos_categoria').val();
            var idPersona = $('#agregarGastos_proveedor').val();
            var idGasto = $('#agregarGastos_gasto').val();
            if(idGasto != null && idGasto != '') {
                $.ajax({
                    type: 'post',
                    url: '<?= base_url(); ?>servicios/cargarGasto',
                    data: {idEditar : idGasto},
                    success: function(response)
                    {
                        var gasto = $.parseJSON(response);
                        agregarFilaGasto(idGasto, gasto['codigo'], gasto['nombre'], gasto['datosAdicionales']['persona'],
                            gasto['datosAdicionales']['persona'], gasto['datosAdicionales']['formaPago'], gasto['monto']);
                        actualizarCantidadGastos();
                    }
                });
            } else {
                $.ajax({
                    type: 'post',
                    url: '<?= base_url(); ?>servicios/cargarGasto',
                    data: {idEditar : idGastoPrincipal},
                    success: function(response)
                    {
                        var gasto = $.parseJSON(response);
                        agregarFilaGasto(idGastoPrincipal, gasto['codigo'], gasto['nombre'], gasto['datosAdicionales']['persona'],
                            gasto['datosAdicionales']['persona'], gasto['datosAdicionales']['formaPago'], gasto['monto']);
                        actualizarCantidadGastos();
                    }
                });
            }
        });
    });
    var contadorFilasGastos = 0;
    function agregarFilaGasto(idEncriptado, cod, nom, per, categoria, tmp, mont){
        var boton = '<td>' +
                        '<a class="boton-opciones btn-flat white-text confirmarEliminarGasto"' +
                        'data-id-eliminar="' + idEncriptado + '" data-fila-eliminar="fila'+ contadorFilasGastos +'">' + menuOpciones_eliminar +'</a>' +
                    '</td>';
        var codigo = '<td>' +
                        '<input class="gasto_elementoTabla" style="display:none" name="gasto_'+ contadorFilasGastos +'" type="text">' +
                        '<input name="gasto' + contadorFilasGastos + '_idGasto" type="text" style="display: none;" value="' + idEncriptado + '" />' + cod + '</td>';
        var nombre = '<td>' + nom + '</td>';
        var persona = '<td>' + per + '</td>';
        var tiempo = '<td>' + tmp +' </td>';
        var cantidad = '<td><input class="input_cantidad_gasto" min="0" name="gasto' + contadorFilasGastos + '_cantidad" type="number" value="0"/></td>';
        var monto = '<td><input class="input_monto_gasto" style="display: none;" name="gasto' + contadorFilasGastos + '_monto" type="text" value="' + mont + '" /><span class="moneda_signo"></span>' + mont + '</td>';
        var subtotal = '<td><span class="moneda_signo"></span><span class="subtotal_fila">0</span></td>';

        var tBody = $('#gastos-tabla-lista');
        if(gastosTabla.indexOf(idEncriptado) == -1) {
            if (tBody.find('tbody tr').length == 1) {
                tBody.find('tbody tr:first').before('' +
                    '<tr>' +
                    codigo + nombre + persona + tiempo + monto + cantidad + subtotal + boton +
                    '</tr>'
                );

            } else {
                tBody.find('tbody tr:last').before('' +
                    '<tr>' +
                    codigo + nombre + persona + tiempo + monto + cantidad + subtotal + boton +
                    '</tr>'
                );
            }
            contadorFilasGastos++;
            gastosTabla.push(idEncriptado);
        } else {
            alert('<?= label('servicio_gastoExistente'); ?>');
        }

        var select_principal = $('#agregarGastos_buscar');
        select_principal.val('0');
        select_principal.trigger("chosen:updated");
        var select_categoria = $('#agregarGastos_categoria');
        select_categoria.val('0');
        select_categoria.trigger("chosen:updated");
        var select_persona = $('#agregarGastos_proveedor');
        select_persona.val('0');
        select_persona.attr('disabled', 'disabled');
        select_persona.trigger("chosen:updated");
        var select_gastos = $('#agregarGastos_gasto');
        select_gastos.val('0');
        select_gastos.attr('disabled', 'disabled');
        select_gastos.trigger("chosen:updated");

        actualizarSignoMoneda();
    }
</script>
<!--Script para eliminar gastos-->
<script type="text/javascript">
    $(document).on("ready", function () {
        var idEliminarGasto = 0;
        var filaEliminarGasto = null;

        $(document).on('click','.confirmarEliminarGasto', function () {
            idEliminarGasto = $(this).data('id-eliminar');
            filaEliminarGasto = $(this).parents('tr');
            $('#linkGastosEliminar').click();
            //esto se hace porque al agregar un <a class="modal-trigger"> dinamicamente con el metodo de agregarNuevoContacto() pareciera no servir, entonces lo que se hace es llamar al evento click del modal-trigger con el id = linkContactosElimminar
        });
        $('#eliminarGasto #botonEliminar').on('click', function () {
            event.preventDefault();
            filaEliminarGasto.fadeOut(function () {
                filaEliminarGasto.empty();
                filaEliminarGasto.remove();
                actualizarMontos();
            });
            contadorFilasGastos--;
            actualizarCantidadGastos();
            var id = gastosTabla.indexOf(''+idEliminarGasto);
            gastosTabla[id] = '';
        });
    });
</script>
<!--Script para fases e insercion de datos-->
<script>
<?php 
$js_array = json_encode($fases); 
echo "var arrayFases =". $js_array.";";
?>

    // var cantidadFases = 0;
    // var contadorFases = cantidadFases;

    $(document).on('ready', function() {
        function exiteEnTabla(idFase){
            var existe = false;
            $('.id_fase').each(function(){
                if ($(this).val() == idFase) {
                    existe = true;
                } 
            });
            return existe;
        }

        $('#agregarFase').on('click', function() {
            // alert('ahora');
            var idFase = $('#servicioFase').val();
            var idSubfase = $('#servicio_subFase').val();
            if (idFase == null || (idFase != 'todas' && idSubfase == null)) {
                if (idFase == null) {
                    alert('<?=label("form_servicioDebeElegirFase")?>');
                } else{
                    alert('<?=label("form_servicioDebeElegirSubFase")?>');
                }
                return false;
            } 
            if (idFase != 'todas') {
                if (idSubfase != 'todas') {
                    if (!exiteEnTabla(idSubfase)) {
                        for (var i = 0; i < arrayFases.length; i++) {
                            if (arrayFases[i]['idFase'] == idFase) {
                                for (var j = 0; j < arrayFases[i]['subfases'].length; j++) {
                                    var fase = arrayFases[i];
                                    var subfase = fase['subfases'][j];
                                    if (subfase['idFase'] == idSubfase) {  
                                        agregarFila(subfase['codigo'], subfase['nombre'], subfase['notas'], fase['codigo'], fase['nombre'], fase['notas'], subfase['idFase']);
                                    } 
                                }
                            } 
                        };
                    } 
                } else {
                    // if (!exiteEnTabla(idSubfase)) {
                        for (var i = 0; i < arrayFases.length; i++) {
                            if (arrayFases[i]['idFase'] == idFase) {
                                for (var j = 0; j < arrayFases[i]['subfases'].length; j++) {
                                    var fase = arrayFases[i];
                                    var subfase = fase['subfases'][j];
                                    if (!exiteEnTabla(subfase['idFase'])) {  
                                        agregarFila(subfase['codigo'], subfase['nombre'], subfase['notas'], fase['codigo'], fase['nombre'], fase['notas'], subfase['idFase']);
                                    } 
                                }
                            } 
                        }
                    // }
                }
            } else {
                for (var i = 0; i < arrayFases.length; i++) {
                    // if (arrayFases[i]['idFase'] == idFase) {
                        for (var j = 0; j < arrayFases[i]['subfases'].length; j++) {
                            var fase = arrayFases[i];
                            var subfase = fase['subfases'][j];
                            if (!exiteEnTabla(subfase['idFase'])) {  
                                agregarFila(subfase['codigo'], subfase['nombre'], subfase['notas'], fase['codigo'], fase['nombre'], fase['notas'], subfase['idFase']);
                            } 
                        }
                    // } 
                }
            }
        });
        var config = {'.chosen-select'           : {}}
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }
            cargarFases();

        $(document).on('change','.chosen-select',function(){
            var valor = $(this).val();
            var tipo = $(this).attr("data-tipo");
            if (valor=="nuevo") {
                var idBoton = $(this).attr("id");
                var nuevoElementoAgregar = "";
                botonEnLista(tipo, idBoton, nuevoElementoAgregar)
            } else {
                if (tipo == 'servicioFase') {
                    if ($('#servicioFase').val() != 'todas') {
                        cargarSubFases(valor);
                    } else{
                        $('#servicio_subFase').empty();
                        $('#servicio_subFase').attr('disabled', 'disabled');
                        $('#servicio_subFase').trigger("chosen:updated");
                    }
                }
            }
        });

        function cargarSubFases(idFasePadre) {
            $('#servicio_subFase').empty(); //remove all child nodes
            $('#servicio_subFase').removeAttr('disabled');
            $('#servicio_subFase').append($('<option value="0" disabled selected style="display:none;"><?= label("servicio_elegirSubFase"); ?></option>'));
            // $('#servicio_subFase').append($('<option value="nuevo"><?= label("agregarNuevo"); ?></option>'));
            $('#servicio_subFase').append($('<option value="todas"><?= label("formServicio_fases_agregarTodas"); ?></option>'));
            for (var i = 0; i < arrayFases.length; i++) {
                if (arrayFases[i]['idFase'] == idFasePadre) {
                    for (var j = 0; j < arrayFases[i]['subfases'].length; j++) {
                        var newOption = $('<option value="'+arrayFases[i]['subfases'][j]['idFase']+'">'+arrayFases[i]['subfases'][j]['nombre']+'</option>');
                        $('#servicio_subFase').append(newOption);
                    }
                }
            }
            $('#servicio_subFase').trigger("chosen:updated");
        }

        function cargarFases(){
            $('#servicioFase').empty(); //remove all child nodes
            $('#servicioFase').append($('<option value="0" disabled selected style="display:none;"><?= label("servicio_elegirFase"); ?></option>'));
            // $('#servicioFase').append($('<option value="nuevo"><?= label("agregarNuevo"); ?></option>'));
            $('#servicioFase').append($('<option value="todas"><?= label("formServicio_fases_agregarTodas"); ?></option>'));
            for (var i = 0; i < arrayFases.length; i++) {
                 var newOption = $('<option value="'+arrayFases[i]['idFase']+'">'+arrayFases[i]['nombre']+'</option>');
                 $('#servicioFase').append(newOption);
            }
            $('#servicioFase').trigger("chosen:updated");
        }

        function actualizarCantidad(){
            // alert($('#cantidadFases').val());
            $('#cantidadFases').val(cantidadFases);
        }

        var cantidadFases = 0;
        var contadorFases = cantidadFases;

        
        function agregarFila(codigo, nombre, des, codigoPadre, nombrePadre, desPadre, idFase){
            // alert(cantidadFases);
            cantidadFases++;
            actualizarCantidad();

            // alert(cantidadFases);
       
            var boton = '<a href="#eliminarSubFase" data-id-eliminar="1" class="-text modal-trigger confirmarEliminar boton-opciones btn-flat white-text"><?= label('menuOpciones_eliminar'); ?></a>';
            // var codigo = 'PROG-0001';
            // var nombre = 'ERS';
            // var des = 'Requerimientos de software Nuevo';
            var idFase = '<input class="id_fase"  name="id_'+contadorFases+'" id="id_'+contadorFases+'" type="number" value="'+idFase+'" />';                                                             
            var cantidadTiempo = '<input class="cantidad" data-grupo="'+codigoPadre+'" name="cantidadhoras_'+contadorFases+'" id="cantidadhoras_'+contadorFases+'" type="number" value="0" />';
            // var codigoPadre = 'PROG-0002Padre';
            // var nombrePadre = 'ERSPadre';
            // var desPadre = 'Requerimientos de softwarePadre';

           $('#tabla-servicio').dataTable().fnAddData([
            codigo,
            nombre,
            des,
            codigoPadre,
            nombrePadre,
            desPadre,
            idFase,
            cantidadTiempo,
            boton ]);

            $('.id_fase').parent('td').css('display', 'none');

            $('.modal-trigger').leanModal();
      
            contadorFases++;

            var selectSubases = $('#servicio_subFase');
            selectSubases.val(0);
            selectSubases.trigger("chosen:updated");
        }

       
        var filaEliminar = null;
   
        $(document).on('click','.confirmarEliminar', function () {
            // idEliminar = $(this).data('id-eliminar');
            filaEliminar = $(this).parents('tr');
        });
        var grupoEliminar = null;

        $(document).on('click','.confirmarEliminarGrupo', function () {
            // idEliminar = $(this).data('id-eliminar');
            grupoEliminar = $(this).attr('data-grupo');
            // filaEliminar = $(this).parents('tr');
        });
   
        $('#eliminarSubFase #botonEliminar').on('click', function () {
            event.preventDefault();
            filaEliminar.fadeOut(function () {
                $('#tabla-servicio').dataTable().fnDeleteRow(filaEliminar);
                verificarChecks();
            });
            cantidadFases--;
            actualizarCantidad();
        });

        $('#eliminarFase #botonEliminar').on('click', function () {
            // alert('hola');
            event.preventDefault();
            $('input[data-grupo='+grupoEliminar+']').parents('tr').each(function(){
                // alert($(this).parents('tr').html);
                $(this).fadeOut(function () {
                    $('#tabla-servicio').dataTable().fnDeleteRow($(this));
                });
                cantidadFases--;
                actualizarCantidad();
            });
            verificarChecks();
            cantidadFases--;
            actualizarCantidad();
        });

        var table = $('#tabla-servicio').DataTable({
          "bPaginate": false,
          // "ordering": false,
          "searching": false,
            "columnDefs": [
                { "visible": false, "targets": 3 },
                { "visible": false, "targets": 4 },
                { "visible": false, "targets": 5 }
                // { "visible": false, "targets": 6 }
            ],
            "order": [[ 3, 'asc' ]],
            "displayLength": 25,
            "drawCallback": function ( settings ) {

                var api = this.api();
                // alert(this.html());
                var rows = api.rows( {page:'current'} ).nodes();
                var last=null;

                var cantidadGrupo = '';
                // var contadorGrupo = 0;
                api.column(3, {page:'current'} ).data().each( function ( group, i ) {
                    var codigo = group;
                    var nombre =  api.column(4, {page:'current'} ).data()[i];
                    var descripcion =  api.column(5, {page:'current'} ).data()[i];
                     // alert(group +', '+nombre, +', '+descripcion);
                    if ( last !== group ) {
                         // alert(group);
                        $(rows).eq( i ).before(
                            '<tr class="group"><td>'+codigo+'</td><td>'+nombre+'</td><td>'+descripcion+'</td><td id="'+codigo+'">0</td><td><a href="#eliminarFase" data-grupo="'+codigo+'" class="-text modal-trigger confirmarEliminarGrupo boton-opciones btn-flat white-text"><?= label('menuOpciones_eliminar'); ?></a></td></tr>'
                        );

                        last = group;
     
                    }
                    cantidadGrupo = $(rows).eq( i ).find('.cantidad').val();
                    var valorActual = parseInt($("#"+codigo).text()) + parseInt(cantidadGrupo);
                    $("#"+codigo).text(valorActual);
                    
                });
                $('.modal-trigger').leanModal();
                calcularTotal();
            }
        });

        $(document).on('change','.cantidad', function(){
            var grupo = $(this).attr('data-grupo');
            var sumatoria = 0;
            $('input[data-grupo = '+grupo+']').each(function(){
                sumatoria += parseInt($(this).val());
            });
            // alert('#'+grupo);
            $('#'+grupo).text(sumatoria);
            calcularTotal();

            calcularPrecio();
        });

        function calcularTotal(){
            var sumatoria = 0;
            $('.cantidad').each(function(){
                sumatoria += parseInt($(this).val());
            });
            $('#cantidadTotal').val(sumatoria);
        }
    });

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
                                    default:
                                        $('#linkModalGuardado').click();
                                        $('form')[0].reset();
                                        $('#servicio_impuestos').tagsinput('removeAll');
                                        $('#servicioTiempo').val('').trigger('chosen:updated');
                                        cantidadFases = 0;
                                        contadorFases = 0;

                                        var table = $('#tabla-servicio').DataTable();
                                        table.clear().draw();

                                        var selectFases = $('#servicioFase');
                                        var selectSubases = $('#servicio_subFase');
                                        selectFases.val(0);
                                        selectFases.trigger("chosen:updated");
                                        selectSubases.empty();
                                        selectSubases.attr('disabled', 'disabled');
                                        selectSubases.trigger("chosen:updated");

                                        var $incluir = $(this).is(':checked');
                                        var $gastos = $('#servicio_gastosVariables');
                                        $gastos.css('display', 'none');
                                        limpiarTablaGastos();

                                        $('label[for="cantidadTotal"]').addClass('active');
                                        $('label[for="servicio_utilidad"]').addClass('active');
                                        $('label[for="servicio_total"]').addClass('active');

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
<!--Script para tags de impuestos-->
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
//        elt.tagsinput('add', {"idImpuesto": 1, "nombre": "Impuestos directos"});
//        elt.tagsinput('add', {"idImpuesto": 2, "nombre": "Impuestos indirectos"});
    });
</script>
<!--Script para opciones y checks-->
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
<!--Script para calcular precio servicio-->
<script type="text/javascript">
    var totalGastosFijosAnuales = 0;
    var totalHorasLaborales = 0;

    function gastosFijosAnuales() {
        $.ajax({
            type: 'POST',
            url: '<?= base_url(); ?>gastos/gastosFijos',
            data: {  },
            async: false,
            success: function(response)
            {
                var $arrayGastosFijos = $.parseJSON(response);

                var totalGastosFijos = 0;
                for(var i = 0; i < $arrayGastosFijos.length; i++) {
                    var gastoFijo = $arrayGastosFijos[i];
                    var monto = 0;
                    switch (gastoFijo['formaPago']) {
                        case '1':
                            monto = parseFloat(gastoFijo['monto']) * 8760;
                            break;
                        case '2':
                            monto = parseFloat(gastoFijo['monto']) * 365;
                            break;
                        case '3':
                            monto = parseFloat(gastoFijo['monto']) * 52.1429;
                            break;
                        case '4':
                            monto = parseFloat(gastoFijo['monto']) * 12;
                            break;
                        case '5':
                            monto = parseFloat(gastoFijo['monto']);
                            break;
                    }
                    totalGastosFijos += monto;
                }

                totalGastosFijosAnuales = totalGastosFijos;
            }
        });
    }
    function horasLaborales() {
        $.ajax({
            type: 'post',
            url: '<?= base_url(); ?>horas/cargarDatos',
            data: {  },
            async: false,
            success: function(response)
            {
                if(response != 'null') {
                    var datosHoras = $.parseJSON(response);

                    var diasAnno = 365;
                    var finesSemana = parseFloat(datosHoras['finesSemana']);
                    var festivosObligatorios = parseFloat(datosHoras['festivosObligatorios']);
                    var incluirNoObligatorios = datosHoras['incluirNoObligatorios'];
                    var festivosNoObligatorios = parseFloat(datosHoras['festivosNoObligatorios']);
                    var vacaciones = parseFloat(datosHoras['vacaciones']);
                    var promedioBajas = parseFloat(datosHoras['promedioBajas']);
                    var promedioHorasDiarias = parseFloat(datosHoras['promedioHorasDiarias']);
                    var cantidadManoObra = parseFloat(datosHoras['cantidadManoObra']);

                    var diasNoFacturables = finesSemana + festivosObligatorios + vacaciones + promedioBajas;
                    if(incluirNoObligatorios == 1) {
                        diasNoFacturables += festivosNoObligatorios;
                    }
                    var diasFacturables = (diasAnno - diasNoFacturables).toFixed(2);
                    var totalHorasAnual = (diasFacturables * promedioHorasDiarias * cantidadManoObra).toFixed(2);
                    var promedioHorasMensual = ((diasFacturables / 12) * promedioHorasDiarias * cantidadManoObra).toFixed(2);

                    totalHorasLaborales = totalHorasAnual;
                } else {
                    totalHorasLaborales = 0;
                }
            }
        });
    }
    function horasServicio() {
        var tiempoServicio = parseFloat($('#cantidadTotal').val());
        var tipoTiempo = $('#servicioTiempo').val();
        var cantidadHoras = 0;
        switch (tipoTiempo) {
            case '1':
                cantidadHoras = tiempoServicio;
                break;
            case '2':
                cantidadHoras = tiempoServicio * 24;
                break;
            case '3':
                cantidadHoras = tiempoServicio * 168;
                break;
            case '4':
                cantidadHoras = tiempoServicio * 730.001;
                break;
            case '5':
                cantidadHoras = tiempoServicio * 8760;
                break;
        }
        return cantidadHoras;
    }

    function calcularPrecio() {
        gastosFijosAnuales();
        horasLaborales();
        if(totalHorasLaborales != 0) {
            var totalGastos = totalGastosFijosAnuales + totalGastosVariables;

            var costoHora = totalGastos / totalHorasLaborales;
            var cantidadHoras = horasServicio();
            var margenUtilidad = parseFloat($('#servicio_utilidad').val()) / 100;

            var precioServicio = (cantidadHoras * costoHora) / (1 - margenUtilidad);

            var impuestosAgregados = 0;
            $.each($("#servicio_impuestos").tagsinput('items'), function (index, value) {
                impuestosAgregados += precioServicio * (value['valor'] / 100);
//              impuestosAgregados += parseFloat(value['valor']);
            });
            precioServicio += impuestosAgregados;
//          precioServicio += precioServicio * (impuestosAgregados / 100);

            precioServicio = precioServicio.toFixed(2);

            $('#servicio_total').val(precioServicio);
        } else {
            document.getElementById('mensajeHorasIncompletas').style.visibility = 'visible';
            $('#btn_errorHoras').click();
        }
    }

    $(document).on('change', '#servicio_utilidad', function () {
        calcularPrecio();
    });
    $(document).on('change', '#servicioTiempo', function () {
        calcularPrecio();
    });
    $(document).on('change', '#servicio_impuestos', function () {
        calcularPrecio();
    });

    $(document).on('click', '#btn_completarHorasMensaje', function () {
        document.getElementById('mensajeHorasIncompletas').style.visibility = 'hidden';
        $('#btn_horasLaborales').click();
    });
    $(document).on('click', '.lean-overlay', function () {
        document.getElementById('mensajeHorasIncompletas').style.visibility = 'visible';
    });
</script>

<!-- Inicio lista modals -->
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
<div id="mensajeHorasIncompletas" class="modal">
    <div  class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('errorHoras'); ?></p>
    </div>
    <div class="modal-footer">
        <a id="btn_completarHorasMensaje" href="#" class="waves-effect waves-red btn-flat"><?= label('irCompletarHoras'); ?></a>
    </div>
</div>

<div id="eliminarGasto" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarGasto'); ?></p>
    </div>
    <div id="botonEliminar" class="modal-footer black-text">
        <a href="" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
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
                    <option value=""><?= label('formServicio_seleccione'); ?></option>
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

<div id="eliminarSubFase" class="modal">
   <div class="modal-header">
      <p><?= label('nombreSistema'); ?></p>
      <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
   </div>
   <div class="modal-content">
      <p><?= label('confirmarEliminarSubFase'); ?></p>
   </div>
   <div id="botonEliminar" class="modal-footer black-text">
      <a href="" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
   </div>
</div>
<div id="eliminarFase" class="modal">
   <div class="modal-header">
      <p><?= label('nombreSistema'); ?></p>
      <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
   </div>
   <div class="modal-content">
      <p><?= label('confirmarEliminarFase'); ?></p>
   </div>
   <div id="botonEliminar" class="modal-footer black-text">
      <a href="" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
   </div>
</div>
<!-- Fin lista modals -->