<button id="pruebaInsertar">Insertar(Prueba)</button>

<!--START CONTENT  -->
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
    $incluirGastos = 0;
    if (isset($resultado)) {
        $idServicio = encryptIt($resultado['idServicio']);;
        $codigo = $resultado['codigo'];
        $nombre = $resultado['nombre'];
        $descripcion = $resultado['descripcion'];
        $utilidad = $resultado['utilidad'];
        $total = $resultado['total'];
        $incluirGastos = $resultado['incluirGastos'];
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
                                                    <input id="servicio_impuestos" name="servicio_impuestos"
                                                           placeholder="<?= label('formProducto_anadirImpuesto'); ?>" type="text"/>
                                                </div>
                                            </div>
                                            <br>
                                        </div>

                                        <div class="col s12" style="padding: 0;">
                                            <div class="input-field col s12 m6 l6 inputSelector" >
                                                <label for="servicioFase"><?= label('formServicio_seleccioneFase'); ?></label>
                                                <br>
                                                <select data-incluirBoton="1" placeholder="seleccionar" data-tipo="servicioFase" id="servicioFase" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("servicio_elegirFase"); ?>" class="browser-default chosen-select" style="width:350px;" tabindex="2">
                                                </select>
                                            </div>
                                            <div class="input-field col s12 m6 l6 inputSelector" >
                                                <label for="servicio_subFase"><?= label('formServicio_seleccioneSubfase'); ?></label>
                                                <br>
                                                <select disabled='disabled' data-incluirBoton="1" placeholder="seleccionar" data-tipo="servicio_subFase" id="servicio_subFase" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("servicio_elegirSubFase"); ?>" class="browser-default chosen-select" style="width:350px;" tabindex="2">
                                                </select>
                                            </div>
                                            <div class="input-field col s12 m6 l12" style="margin-top: 5px;">
                                                <!-- <a href="" style="text-decoration: underline;float: left;"><?= label('formServicio_agregarTodasFases'); ?></a> -->
                                                <a id="agregarFase" class="btn" style="display: block;margin: 5px auto;width: 40%;"><?= label('agregar'); ?></a>
                                            </div>

                                            <input style="display:none" id="cantidadFases" name="cantidadFases" type="text" value="<?= count($resultado['misFases'])?>">    
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
                                                    <?php
                                                        if (isset($resultado)) {
                                                            if ($resultado !== false) {   
                                                            $contador = 0;                                                                 
                                                                foreach ($resultado['misFases'] as $fase) {
                                                    ?>
                                                                    <tr>
                                                                        <td><?=$fase['codigo']?></td>
                                                                        <td><?=$fase['nombre']?></td>
                                                                        <td><?=$fase['notas']?></td>
                                                                        <td><?=$fase['p_codigo']?></td>
                                                                        <td><?=$fase['p_nombre']?></td>
                                                                        <td><?=$fase['p_notas']?></td>
                                                                        <td style="display:none"><input class="id_fase"  name="id_<?=$contador?>" id="id_<?=$contador?>" type="number" value="<?=$fase['idFase']?>" /></td>
                                                                        <td><input class="cantidad" data-grupo="<?=$fase['p_codigo']?>" name="cantidadhoras_<?=$contador?>" id="cantidadhoras_<?=$contador?>" type="number" value="<?=$fase['cantidadTiempo']?>" /></td>
                                                                        <td>
                                                                            <a href="#eliminarSubFase" data-id-eliminar="1" class="-text modal-trigger confirmarEliminar boton-opciones btn-flat white-text"><?= label('menuOpciones_eliminar'); ?></a>
                                                                        </td>
                                                                    </tr>
                                                    <?php
                                                                    $contador++;
                                                                }
                                                            }
                                                        }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="col s12" style="margin: 10px 0 25px;">
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
                                                            <?php
                                                            $totalGastos = 0;
                                                            $contador = 0;
                                                            if(isset($resultado['gastos'])) {
                                                                $gastosServicio = $resultado['gastos'];
                                                                if($gastosServicio != false) {
                                                                    foreach ($gastosServicio as $gasto) {
                                                                        $idGastoServicio = $gasto['idGastoServicio'];
                                                                        $idGasto = $gasto['idGasto'];
                                                                        $proveedor = $gasto['nombrePersona'];
                                                                        $codigoG = $gasto['codigo'];
                                                                        $juridico = $gasto['juridico'];
                                                                        $nombre = $gasto['nombreGasto'];
                                                                        $monto = $gasto['monto'];
                                                                        $formaPago = $gasto['formaPago'];
                                                                        $cantidad = $gasto['cantidad'];
                                                                        if($juridico) {
                                                                            $proveedor .= ' '.$gasto['primerApellido'].' '.$gasto['segundoApellido'];
                                                                        }
                                                                        $subtotal = $cantidad * $monto;
                                                                        $totalGastos += $subtotal;
                                                                        ?>
                                                                        <tr>
                                                                            <td>
                                                                                <!-- value 1 para existentes, 0 los nuevos y 2 los eliminados -->
                                                                                <input class="accionAplicada" style="display:none" name="gasto_<?= $contador; ?>" type="text" value="1">

                                                                                <input name="gasto<?= $contador; ?>_gastoServicio" type="text" style="display: none;" value="<?= $idGastoServicio; ?>" />
                                                                                <input name="gasto<?= $contador; ?>_idGasto" type="text" style="display: none;" value="<?= $idGasto; ?>" />
                                                                                <?= $codigoG; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?= $nombre; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?= $proveedor; ?>
                                                                            </td>
                                                                            <td>
                                                                                <?= $formaPago; ?>
                                                                            </td>
                                                                            <td>
                                                                                <input class="input_monto_gasto" style="display: none;" name="gasto<?= $contador; ?>_monto" type="text" value="<?= $monto; ?>" />
                                                                                <?= $monto; ?>
                                                                            </td>
                                                                            <td>
                                                                                <input class="input_cantidad_gasto" min="0" name="gasto<?= $contador; ?>_cantidad" type="number" value="<?= $cantidad; ?>"/>
                                                                            </td>
                                                                            <td>
                                                                                $<span class="subtotal_fila"><?= $subtotal; ?></span>
                                                                            </td>
                                                                            <td>
                                                                                <a class="boton-opciones btn-flat white-text confirmarEliminarGasto"
                                                                                   data-id-eliminar="<?= $idGasto; ?>"  data-fila-eliminar="fila<?= $contador++; ?>"><?= label('menuOpciones_eliminar'); ?></a>
                                                                            </td>
                                                                        </tr>
                                                            <?php
                                                                    }
                                                                }
                                                            }
                                                            ?>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>TOTAL</td>
                                                                <td>$<span class="total_gastos_variables"><?= $totalGastos; ?></span></td>
                                                                <td></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col s12" style="margin-top: 20px;">
                                                    <h5><?= label('servicioGastos_total'); ?>: $<span class="total_gastos_variables"><?= $totalGastos; ?></span></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col s12">
                                            <div class="input-field col s12 m6 l6 inputSelector" >
                                                <label for="servicioFase"><?= label('formServicio_cotizarPor'); ?></label>
                                                <br>
                                                <select data-incluirBoton="1" placeholder="seleccionar" data-tipo="servicioFase" id="servicioFase" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("servicio_elegirTiempo"); ?>" class="browser-default chosen-select" style="width:350px;" tabindex="2">
                                                    <option value="0" disabled selected style="display:none;"><?= label("servicio_elegirTiempo"); ?></option>
                                                    <option value="nuevo"><?= label("agregarNuevo"); ?></option>
                                                    <option value="1">Horas</option>
                                                    <option value="2">Días</option>
                                                    <option value="3">Semanas</option>
                                                    <option value="4">Meses</option>
                                                    </select>
                                            </div>
                                            <div class="input-field col s12 m6 l6 ">
                                                <input id="cantidadTotal" name="servicio_cantidadTotal" type="number" value="0">
                                                <label for="cantidadTotal"><?= label('formServicio_totalTiempo'); ?>
                                                </label>
                                            </div>  
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
                                    <div style="visibility:hidden; position:absolute">
                                        <input id="cantidadGastos" name="cantidadGastos" type="text" value="<?= $contador; ?>">
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
<!--Script para mostrar elementos de agregar gastos-->
<script>
    gastosTabla = [];
    <?php
    if(isset($resultado['gastos'])) {
        $gastosServicio = $resultado['gastos'];
        if ($gastosServicio != false) {
            foreach($gastosServicio as $gasto)
            {
                $idGasto = $gasto['idGasto'];
    ?>
                gastosTabla.push('<?= $idGasto; ?>');
    <?php
            }
        }
    }
    ?>

    $(document).ready(function () {
        var incluirGastos = '<?= $incluirGastos; ?>';
        var $gastos = $('#servicio_gastosVariables');
        var $check = $('#servicio_incluirGastosVariables');
        if(incluirGastos == 1) {
            $gastos.css('display', 'block');
            $check.attr('checked', true);
        } else {
            $gastos.css('display', 'none');
            $check.attr('checked', false);
        }
    });
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
        var totalGastos = 0;//parseInt(elementos.first().text());
        $('.input_cantidad_gasto').each(function () {
            var padre = $(this).parents('tr');
            var monto = padre.find('td input.input_monto_gasto').first().val();
            var cantidad = $(this).val();
            var subtotal = padre.find('td span.subtotal_fila').first();
            var resultado = monto * cantidad;
            subtotal.text(resultado);
            totalGastos += resultado;
        });
        elementos.each(function () {
            $(this).text(totalGastos);
        });
    }
</script>
<!--Script para manejo de gastos-->
<script type="text/javascript">
    var menuOpciones_eliminar = '<?= label('menuOpciones_eliminar'); ?>';
    var totalGastosVariables = <?= $totalGastos; ?>;
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
    var contadorFilasGastos = '<?= count($resultado['gastos']); ?>';
    function agregarFilaGasto(idEncriptado, cod, nom, per, categoria, tmp, mont){
        var boton = '<td>' +
            '<a class="boton-opciones btn-flat white-text confirmarEliminarGasto"' +
            'data-id-eliminar="' + idEncriptado + '"  data-fila-eliminar="fila'+ contadorFilasGastos +'">' + menuOpciones_eliminar +'</a>' +
            '</td>';
        var codigo = '<td>' +
            '<input class="accionAplicada" style="display:none" name="gasto_' + contadorFilasGastos + '" type="text" value="0">' +
            '<input name="gasto' + contadorFilasGastos + '_gastoServicio" type="text" style="display: none;" value="0" />' +
            '<input name="gasto' + contadorFilasGastos + '_idGasto" type="text" style="display: none;" value="' + idEncriptado + '" />' + cod + '</td>';
        var nombre = '<td>' + nom + '</td>';
        var persona = '<td>' + per + '</td>';
//        var categoriaPersona = '<td>' + categoria + '</td>';
        var tiempo = '<td>' + tmp +' </td>';
        var cantidad = '<td><input class="input_cantidad_gasto" min="0" name="gasto' + contadorFilasGastos + '_cantidad" type="number" value="0"/></td>';
        var monto = '<td><input class="input_monto_gasto" style="display: none;" name="gasto' + contadorFilasGastos + '_monto" type="text" value="' + mont + '" />' + mont + '</td>';
        var subtotal = '<td>$<span class="subtotal_fila">0</pan></td>';

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
            var tipo = filaEliminarGasto.find('.accionAplicada').val();
            if (tipo == '0') {
                filaEliminarGasto.fadeOut(function () {
                    filaEliminarGasto.empty();
                    filaEliminarGasto.remove();
                    actualizarMontos();
                });
                contadorFilasGastos--;
                actualizarCantidadGastos();
                var id = gastosTabla.indexOf(''+idEliminarGasto);
                gastosTabla[id] = '';
            } else {
                filaEliminarGasto.find('.accionAplicada').val(2);
                filaEliminarGasto.fadeOut(function () {
                    filaEliminarGasto.hide();

                    filaEliminarGasto.find('td input.input_cantidad_gasto').first().val(0);
                    actualizarMontos();
                });
                var id = gastosTabla.indexOf(''+idEliminarGasto);
                gastosTabla[id] = '';
            }
        });
    });
</script>

<!--Script para fases e insercion de datos-->
<script>
<?php 
$js_array = json_encode($resultado['fases']); 
echo "var arrayFases =". $js_array;
?>
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
//            calcularTotal();

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
    // });

        function cargarSubFases(idFasePadre) {
            $('#servicio_subFase').empty(); //remove all child nodes
            $('#servicio_subFase').removeAttr('disabled');
            $('#servicio_subFase').append($('<option value="0" disabled selected style="display:none;"><?= label("servicio_elegirSubFase"); ?></option>'));
            $('#servicio_subFase').append($('<option value="nuevo"><?= label("agregarNuevo"); ?></option>'));
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
            $('#servicioFase').append($('<option value="nuevo"><?= label("agregarNuevo"); ?></option>'));
            $('#servicioFase').append($('<option value="todas"><?= label("formServicio_fases_agregarTodas"); ?></option>'));
            for (var i = 0; i < arrayFases.length; i++) {
                 var newOption = $('<option value="'+arrayFases[i]['idFase']+'">'+arrayFases[i]['nombre']+'</option>');
                 $('#servicioFase').append(newOption);
            }
            $('#servicioFase').trigger("chosen:updated");
        }

// $(document).ready(function() {

        $('#pruebaInsertar').on('click', function(){
            agregarFila();
        });
        function actualizarCantidad(){
            $('#cantidadFases').val(cantidad);
        }

        var cantidad = <?= count($resultado['misFases'])?>;
        var contador = cantidad;
        function agregarFila(codigo, nombre, des, codigoPadre, nombrePadre, desPadre, idFase){
            cantidad++;
            actualizarCantidad();
       
            var boton = '<a href="#eliminarSubFase" data-id-eliminar="1" class="-text modal-trigger confirmarEliminar boton-opciones btn-flat white-text"><?= label('menuOpciones_eliminar'); ?></a>';
            // var codigo = 'PROG-0001';
            // var nombre = 'ERS';
            // var des = 'Requerimientos de software Nuevo';
            var idFase = '<input class="id_fase"  name="id_'+contador+'" id="id_'+contador+'" type="number" value="'+idFase+'" />';                                                             
            var cantidadTiempo = '<input class="cantidad" data-grupo="'+codigoPadre+'" name="cantidadhoras_'+contador+'" id="cantidadhoras_'+contador+'" type="number" value="0" />';
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
      
            contador++;
        }

        // function generarListasBotones(){
        //   $('.boton-opciones').sideNav({
        //   // menuWidth: 0, // Default is 240
        //    edge: 'right', // Choose the horizontal origin
        //       closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
        //     }
        //   );

        //       $('.dropdown-button').dropdown({
        //           inDuration: 300,
        //           outDuration: 225,
        //           constrain_width: true, // Does not change width of dropdown to that of the activator
        //           hover: false, // Activate on hover
        //           gutter: 0, // Spacing from edge
        //           belowOrigin: true, // Displays dropdown below the button
        //           alignment: 'left' // Displays dropdown with edge aligned to the left of button
        //         }
          
        // var idEliminar = 0;
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
                $('table').dataTable().fnDeleteRow(filaEliminar);
                verificarChecks();
            });
            cantidad--;
            actualizarCantidad();
        });

        $('#eliminarFase #botonEliminar').on('click', function () {
            event.preventDefault();
            $('input[data-grupo='+grupoEliminar+']').parents('tr').each(function(){
                // alert($(this).parents('tr').html);
                $(this).fadeOut(function () {
                    $('table').dataTable().fnDeleteRow($(this));
                });
                cantidad--;
                actualizarCantidad();
            });
            verificarChecks();
            cantidad--;
            actualizarCantidad();
        });

        var table = $('#tabla-servicio').DataTable({
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

        // Order by the grouping
        // $('table tbody').on( 'click', 'tr.group', function () {
        //     var currentOrder = table.order()[0];
        //     if ( currentOrder[0] === 3 && currentOrder[1] === 'asc' ) {
        //         table.order( [ 3, 'desc' ] ).draw();
        //     }
        //     else {
        //         table.order( [ 3, 'asc' ] ).draw();
        //     }
        // } );

        $(document).on('change','.cantidad', function(){
            var grupo = $(this).attr('data-grupo');
            var sumatoria = 0;
            $('input[data-grupo = '+grupo+']').each(function(){
                sumatoria += parseInt($(this).val());
            });
            // alert('#'+grupo);
            $('#'+grupo).text(sumatoria);
            calcularTotal();
        });

        function calcularTotal(){
            // alert('entre mec');
            var sumatoria = 0;
            $('.cantidad').each(function(){
                sumatoria += parseInt($(this).val());
            });
            $('#cantidadTotal').val(sumatoria);
        }
    });

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

        <?php 
        foreach ($resultado['impuestos'] as $impuesto) {
             echo 'elt.tagsinput("add", '.json_encode($impuesto).');';
        }
        ?>
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

<!-- Inicio lista modals -->
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