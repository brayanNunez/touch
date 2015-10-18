<form id="formGeneral" class="section">
    <div class="row">
        <div class="input-field col s6 m3 l3">
            <div class="input-field col s12">
                <input id="paso1_codigo" name="paso1_codigo" type="text">
                <label for="paso1_codigo" class=""><?= label("paso1_labelCodido"); ?></label>
            </div>
        </div>
        <div class="input-field col s6 m3 l3">
            <div class="input-field col s12">
                <input id="last_name" type="text">
                <label for="last_name" class=""><?= label("paso1_labelNumero"); ?></label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 m6 l6 inputSelector">            
            <label for="contenedorSelectCliente"><?= label("paso1_labelCliente"); ?></label>
            <br>
            <div id="contenedorSelectCliente">    
             </div>
        </div>
        <div class="input-field col s12 m6 l6 inputSelector">
            <!-- <input id="client-contact" type="text"> -->
            <!-- <div>
               
                
            </div> -->
            <!-- <a id="cotizacion-agregarAtencion" class="btn modal-trigger" href="#agregarAtencion" data-toggle="tooltip" title="Agregar nuevo contacto">
                <i class="mdi-content-add col s1"></i>

            </a> -->
            
            <label for="contenedorSelectAtencion"><?= label("paso1_labelContacto"); ?></label>
            <br>
            <div id="contenedorSelectAtencion">    
             </div>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 m6 l6 inputSelector">            
            <label for="contenedorSelectFormaPago"><?= label("paso1_labelFormaPago"); ?></label>
            <br>
            <div id="contenedorSelectFormaPago">    
             </div>
        </div>
        <div class="input-field col s12 m6 l6 inputSelector">            
            <label for="contenedorSelectMoneda"><?= label("paso1_labelTipoMoneda"); ?></label>
            <br>
            <div id="contenedorSelectMoneda">    
             </div>
        </div>
        
    </div>
    <div class="row">
        <div class="input-field col s12 m6 l6">
            <input id="cotizacion-validez" class="datepicker-fecha" type="text">
            <label for="cotizacion-validez"><?= label("paso1_labelTiempoVlidez"); ?></label>
        </div>
        <div class="input-field col s12 m6 l6">
            <input id="moneda-tipoCambio" type="text">
            <label for="moneda-tipoCambio" class=""><?= label("paso1_labelTipoCambio"); ?></label>
        </div>
        <div class="input-field col s12">
            <textarea id="message" class="materialize-textarea" style="height: 24px;"></textarea>
            <label for="message" class=""><?= label("paso1_labelDetalle"); ?></label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12" style="margin-top: 0;">
            <input class="filled-in" type="checkbox" id="cotizacion_incluirGastosVariables"/>
            <label for="cotizacion_incluirGastosVariables"><?= label('cotizacion_incluirGastosVariables'); ?></label>
        </div>
        <div id="cotizacion_gastosVariables" style="display: none;padding: 0;">
            <div class="col s12 m6 l3" style="margin-top: 20px;">
                <div class="input-field">
                    <input id="agregarGatos_buscar" type="text">
                    <label for="agregarGatos_buscar" class=""><?= label("agregarGatos_buscar"); ?></label>
                </div>
                <div>
                    <div class="col s12">
                        <a id="busqueda_masOpciones" style="text-decoration: underline;float: right;cursor: pointer;margin-bottom: 20px;">
                            <?= label('agregarGastos_masOpciones'); ?></a>
                    </div>
                    <div id="opcionesBusquedaGasto" class="col s12" style="display: none;margin-bottom: 20px;padding: 0;">
                        <div class="input-field" style="margin-top: 0.5rem;">
                            <select id="agregarGastos_categoria" name="agregarGastos_categoria">
                                <option class="selected-option" value="0" selected><?= label('agregarGastos_todos'); ?></option>
                                <option value="1">Categoria1</option>
                                <option value="2">Categoria2</option>
                                <option value="3">Categoria3</option>
                            </select>
                            <label class="cotizacionPaso1_labelBusqueda" for="agregarGastos_categoria"><?= label('agregarGastos_categoria'); ?></label>
                        </div>
                        <div class="input-field" style="margin-top: 1.5rem;">
                            <select id="agregarGastos_proveedor" name="agregarGastos_proveedor">
                                <option class="selected-option" value="0" selected><?= label('agregarGastos_todos'); ?></option>
                                <option value="1">Proveedor1</option>
                                <option value="2">Proveedor2</option>
                                <option value="3">Proveedor3</option>
                            </select>
                            <label class="cotizacionPaso1_labelBusqueda" for="agregarGastos_proveedor"><?= label('agregarGastos_proveedor'); ?></label>
                        </div>
                        <div class="input-field" style="margin-top: 1.5rem;">
                            <select id="agregarGastos_gasto" name="agregarGastos_gasto">
                                <option class="selected-option" value="0" selected><?= label('agregarGastos_todos'); ?></option>
                                <option value="1">Gasto1</option>
                                <option value="2">Gasto2</option>
                                <option value="3">Gasto3</option>
                            </select>
                            <label class="cotizacionPaso1_labelBusqueda" for="agregarGastos_gasto"><?= label('agregarGastos_gasto'); ?></label>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="#" class="waves-effect btn modal-action modal-close"
                       style="width: 200px;float: none;display: block;margin: 0 auto;text-align: center;color: white;">
                        <?= label('agregarGatos_agregar'); ?>
                    </a>
                </div>
            </div>
            <div class="col s12 m12 l9">
                <div class="table-responsive">
                    <table id="productos-tabla-lista" class="table display striped" cellspacing="0">
                        <thead>
                            <tr>
                                <th><?= label('tituloGastos_codigo'); ?></th>
                                <th><?= label('tituloGastos_gasto'); ?></th>
                                <th><?= label('tituloGastos_proveedor'); ?></th>
                                <th><?= label('tituloGastos_proveedorCategoria'); ?></th>
                                <th><?= label('tituloGastos_tiempo'); ?></th>
                                <th><?= label('tituloGastos_cantidad'); ?></th>
                                <th><?= label('tituloGastos_monto'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>PROG-00001</td>
                                <td>Mantenimiento web</td>
                                <td>Ronald Alfaro</td>
                                <td>Programador</td>
                                <td>Hora</td>
                                <td><input type="number" value="10"/></td>
                                <td>$250,000.00</td>
                            </tr>
                            <tr>
                                <td>PROG-00002</td>
                                <td>Mantenimiento movil</td>
                                <td>Juan Gomez</td>
                                <td>Programador</td>
                                <td>Hora</td>
                                <td><input type="number" value="20"/></td>
                                <td>$300,000.00</td>
                            </tr>
                            <tr>
                                <td>PROG-00003</td>
                                <td>Mantenimiento equipo</td>
                                <td>Mauricio Fernandez</td>
                                <td>Tecnico</td>
                                <td>Hora</td>
                                <td><input type="number" value="7"/></td>
                                <td>$70,000.00</td>
                            </tr>
                            <tr>
                                <td colspan="5"></td>
                                <td>TOTAL</td>
                                <td>$620,000.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col s12" style="margin-top: 20px;">
                <h5><?= label('cotizacionGastos_total'); ?>: $2,000,000.00</h5>
            </div>
        </div>
    </div>
</form>

<script>
    $(document).ready(function () {
        $('#busqueda_masOpciones').click(function (event) {
            var $elementos = $('#opcionesBusquedaGasto');
            var $buscar = $('#agregarGatos_buscar');
            var $display = $elementos.css('display');
            if($display == 'none') {
                $elementos.css('display', 'block');
                $(this).text('<?= label('agregarGastos_menosOpciones'); ?>');
                $buscar.attr('disabled', true);
            } else {
                $elementos.css('display', 'none');
                $(this).text('<?= label('agregarGastos_masOpciones'); ?>');
                $buscar.attr('disabled', false);
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
        })
    });
</script>

<!-- lista modals -->
<div id="agregarAtencion" class="modal">
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
<!--Fin lista modals-->