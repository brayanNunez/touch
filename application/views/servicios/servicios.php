START CONTENT  -->

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
                                                            <td><input class="cantidad" id="fase1_horas" type="number" value="30" /></td>
                                                            <td>
                                                                <a href="" class="boton-opciones btn-flat white-text"><?= label('menuOpciones_eliminar'); ?></a>
                                                                <!-- <ul id="dropdown-fase1" class="dropdown-content">
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
                                                                </a> -->
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>PROG-0001</td>
                                                            <td>ERS</td>
                                                            <td>Requerimientos de software</td>
                                                            <td><input class="cantidad" id="fase1_horas" type="number" value="30" /></td>
                                                            <td>
                                                                <a href="" class="boton-opciones btn-flat white-text"><?= label('menuOpciones_eliminar'); ?></a>
                                                                <!-- <ul id="dropdown-fase1" class="dropdown-content">
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
                                                                </a> -->
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>PROG-0002</td>
                                                            <td>Analisis</td>
                                                            <td>Fase de analisis del sistema</td>
                                                            <td><input class="cantidad" id="fase2_horas" type="number" value="30" /></td>
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
                                                            <td><input class="cantidad" id="fase3_horas" type="number" value="40" /></td>
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
                                                            <td>PROG-0003</td>
                                                            <td>Desarrollo</td>
                                                            <td>Fase de desarrollo del sistema</td>
                                                            <td><input class="cantidad" id="fase3_horas" type="number" value="40" /></td>
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
                                                        <!-- <tr>
                                                            <td colspan="2"></td>
                                                            <td>TOTAL</td>
                                                            <td>100</td>
                                                            <td></td>
                                                        </tr> -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="row" style="margin-top: 25px;">
                                            <div class="input-field col s12" style="margin-top: 0;">
                                                <input class="filled-in" type="checkbox" id="cotizacion_incluirGastosVariables"/>
                                                <label for="cotizacion_incluirGastosVariables"><?= label('cotizacion_incluirGastosVariables'); ?></label>
                                            </div>
                                            <div id="cotizacion_gastosVariables" style="display: none;padding: 0;">
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
<!--                                                                    <option value=""></option>-->
<!--                                                                    --><?php
//                                                                    if(isset($personas)) {
//                                                                        foreach ($personas as $persona) { ?>
<!--                                                                            <option value="--><?//= $persona['idProveedor']; ?><!--">--><?//= $persona['nombre']; ?><!--</option>-->
<!--                                                                            --><?php
//                                                                        }
//                                                                    } ?>
                                                                </select>
                                                            </div>
                                                            <div class="input-field col s12 inputSelector">
                                                                <label for="agregarGastos_gasto"><?= label('agregarGastos_gasto'); ?></label>
                                                                <br>
                                                                <select data-placeholder="<?= label('formServicio_seleccioneGasto'); ?>" data-incluirBoton="0" id="agregarGastos_gasto" name="agregarGastos_gasto" class="browser-default chosen-select">
<!--                                                                    <option value=""></option>-->
<!--                                                                    --><?php
//                                                                    if(isset($gastos)) {
//                                                                        foreach ($gastos as $gasto) { ?>
<!--                                                                            <option value="--><?//= $gasto['idGasto']; ?><!--">--><?//= $gasto['nombre']; ?><!--</option>-->
<!--                                                                            --><?php
//                                                                        }
//                                                                    } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a class="waves-effect btn modal-action modal-close" id="btn_agregarGasto"
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
                                                                <th><?= label('tituloGastos_proveedorCategoria'); ?></th>
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
                                                                    <td></td>
                                                                    <td>TOTAL</td>
                                                                    <td>$<span class="total_gastos_variables">0</span></td>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="col s12" style="margin-top: 20px;">
                                                    <h5><?= label('cotizacionGastos_total'); ?>: $<span class="total_gastos_variables">0</span></h5>
                                                </div>
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
        $('#cotizacion_incluirGastosVariables').click(function (event) {
            var $incluir = $(this).is(':checked');
            var $gastos = $('#cotizacion_gastosVariables');
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
        });
    });
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
                        '<a href="#eliminarGasto" class="boton-opciones btn-flat white-text modal-trigger confirmarEliminar"' +
                        'data-id-eliminar="' + idEncriptado + '"  data-fila-eliminar="fila'+ contadorFilasGastos +'">' + menuOpciones_eliminar +'</a>' +
                    '</td>';
        var codigo = '<td>' +
                        '<input style="display:none" name="gasto_'+ contadorFilasGastos +'" type="text">' +
                        '<input name="gasto' + contadorFilasGastos + '_idGasto" type="text" style="display: none;" value="' + idEncriptado + '" />' + cod + '</td>';
        var nombre = '<td>' + nom + '</td>';
        var persona = '<td>' + per + '</td>';
        var categoriaPersona = '<td>' + categoria + '</td>';
        var tiempo = '<td>' + tmp +' </td>';
        var cantidad = '<td><input class="input_cantidad_gasto" min="0" name="gasto' + contadorFilasGastos + '_cantidad" type="number" value="0"/></td>';
        var monto = '<td><input class="input_monto_gasto" style="display: none;" name="gasto' + contadorFilasGastos + '_monto" type="text" value="' + mont + '" />' + mont + '</td>';
        var subtotal = '<td>$<span class="subtotal_fila">0</pan></td>';

        var tBody = $('#gastos-tabla-lista');

        if(gastosTabla.indexOf(idEncriptado) == -1) {
            if (tBody.find('tbody tr').length == 1) {
                tBody.find('tbody tr:first').before('' +
                    '<tr>' +
                    codigo + nombre + persona + categoriaPersona + tiempo + monto + cantidad + subtotal + boton +
                    '</tr>'
                );
            } else {
                tBody.find('tbody tr:last').before('' +
                    '<tr>' +
                    codigo + nombre + persona + categoriaPersona + tiempo + monto + cantidad + subtotal + boton +
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

<script type="text/javascript">
    $(document).on("ready", function () {
        <?php
            if (isset($lista)) {
                if ($lista === false) { ?>
        $('#linkModalErrorCargarDatos').click();
        <?php
                }
            } ?>

        var idEliminarGasto = 0;
        var filaEliminarGasto = null;

        $(document).on('click','.confirmarEliminar', function () {
            idEliminarGasto = $(this).data('id-eliminar');
            filaEliminarGasto = $(this).parents('tr');
        });
        $('#eliminarGasto #botonEliminar').on('click', function () {
            event.preventDefault();
            filaEliminarGasto.fadeOut(function () {
                filaEliminarGasto.remove();
            });
        });
    });
</script>


<script>

$(document).ready(function() {
    var table = $('#tabla-servicio').DataTable({
        "columnDefs": [
            { "visible": false, "targets": 1 }
        ],
        "order": [[ 2, 'asc' ]],
        "displayLength": 25,
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;

            var cantidadGrupo = '';
            var contadorGrupo = 0;
            api.column(1, {page:'current'} ).data().each( function ( group, i ) {

                if ( last !== group ) {
                    // alert('entre');
                    $(rows).eq( i ).before(
                        '<tr class="group"><td colspan="2">'+group+'</td><td id="grupo'+ contadorGrupo++ +'">0</td><td></td></tr>'
                    );

                    last = group;
 
                }
                cantidadGrupo = $(rows).eq( i ).find('.cantidad').val();
                var valorActual = parseInt($("#grupo" + (contadorGrupo -1)).text()) + parseInt(cantidadGrupo);
                $("#grupo" + (contadorGrupo -1)).text(valorActual);
                
            } );
        }
    } );
 
    // Order by the grouping
    $('#tabla-servicio tbody').on( 'click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
            table.order( [ 2, 'desc' ] ).draw();
        }
        else {
            table.order( [ 2, 'asc' ] ).draw();
        }
    } );
} );


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
<!-- Fin lista modals