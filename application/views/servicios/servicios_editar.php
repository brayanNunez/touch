<!-- START CONTENT  -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?=label('tituloFormularioServicioEditar');?></h1>
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
                            <div class="col s12 m12 l8">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="servicio_codigo" type="text" value="0001">
                                            <label for="servicio_codigo"><?=label('formServicio_codigo');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="servicio_nombre" type="text" value="Aplicación móvil">
                                            <label for="servicio_nombre"><?=label('formServicio_nombre');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <textarea id="servicio_descripcion" class="materialize-textarea" length="120">Aplicación móvil para SO android</textarea>
                                            <label for="servicio_descripcion"><?=label('formServicio_descripcion');?></label>
                                        </div>
                                        <div class="file-field col s12">
                                            <br />
                                            <label for="servicio_imagen"><?=label('formServicio_imagen');?></label>
                                            <div class="file-field input-field col s12">
                                                <input class="file-path validate" type="text"/>
                                                <div class="btn" data-toggle="tooltip" title="<?=label('tooltip_examinar')?>">
                                                    <span><i class="mdi-action-search"></i></span>
                                                    <input type="file" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-field col s12">
                                            <label><?=label('formServicio_gastos');?></label>
                                            <br/>
                                            <br/>
                                            <a href="#gastoNuevo" class="modal-trigger">Nuevo gasto </a>|
                                            <a href="#agregarPersona" class="modal-trigger"> Nueva persona</a>
                                            <br />
                                            <table id="servicio1-gastos" class="table striped">
                                                <thead>
                                                <tr>
                                                    <th style="text-align: center;">
                                                        <input class="filled-in checkbox checkall" type="checkbox" id="checkbox-all" onclick="toggleChecked(this.checked)"/>
                                                        <label for="checkbox-all"></label>
                                                    </th>
                                                    <th><?=label('formServicio_gastosNombre');?></th>
                                                    <th><?=label('formServicio_gastosCantidad');?></th>
                                                    <th><?=label('formServicio_gastosSubtotal');?></th>
                                                    <th><?=label('formServicio_gastosOpciones');?></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td style="text-align: center;">
                                                        <input type="checkbox" class="filled-in checkbox" id="checkbox_servicio1_gasto1" />
                                                        <label for="checkbox_servicio1_gasto1"></label>
                                                    </td>
                                                    <td>Jorge Arias</td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col s4 m4 l4">
                                                                <input type="number" min="0" value="90">
                                                            </div>
                                                            <div class="col s8 m8 l8">
                                                                <select>
                                                                    <option value="">Seleccione</option>
                                                                    <option value="1"><?=label('horas') ?></option>
                                                                    <option value="2"><?=label('dia') ?></option>
                                                                    <option value="3"><?=label('semana') ?></option>
                                                                    <option value="4"><?=label('quincena') ?></option>
                                                                    <option value="5"><?=label('mes') ?></option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$300</td>
                                                    <td>
                                                        <ul id="dropdown-servicio1-gasto1" class="dropdown-content">
                                                            <li>
                                                                <a href="#editar" class="-text modal-trigger"><?=label('menuOpciones_editar')?></a>
                                                            </li>
                                                            <li>
                                                                <a href="#eliminarElemento" class="-text modal-trigger"><?=label('menuOpciones_eliminar')?></a>
                                                            </li>
                                                        </ul>
                                                        <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-servicio1-gasto1">
                                                            <?=label('menuOpciones_seleccionar')?><i class="mdi-navigation-arrow-drop-down"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">
                                                        <input type="checkbox" class="filled-in checkbox" id="checkbox_servicio1_gasto2" />
                                                        <label for="checkbox_servicio1_gasto2"></label>
                                                    </td>
                                                    <td>Licencias</td>
                                                    <td><input type="number" min="0" value="2"></td>
                                                    <td>$500</td>
                                                    <td>
                                                        <ul id="dropdown-servicio1-gasto2" class="dropdown-content">
                                                            <li>
                                                                <a href="#editar" class="-text modal-trigger"><?=label('menuOpciones_editar')?></a>
                                                            </li>
                                                            <li>
                                                                <a href="#eliminarElemento" class="-text modal-trigger"><?=label('menuOpciones_eliminar')?></a>
                                                            </li>
                                                        </ul>
                                                        <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-servicio1-gasto2">
                                                            <?=label('menuOpciones_seleccionar')?><i class="mdi-navigation-arrow-drop-down"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">
                                                        <input type="checkbox" class="filled-in checkbox" id="checkbox_servicio1_gasto3" />
                                                        <label for="checkbox_servicio1_gasto3"></label>
                                                    </td>
                                                    <td>Viaje a Guanacaste</td>
                                                    <td><input type="number" min="0" value="2"></td>
                                                    <td>$1000</td>
                                                    <td>
                                                        <ul id="dropdown-servicio1-gasto3" class="dropdown-content">
                                                            <li>
                                                                <a href="#editar" class="-text modal-trigger"><?=label('menuOpciones_editar')?></a>
                                                            </li>
                                                            <li>
                                                                <a href="#eliminarElemento" class="-text modal-trigger"><?=label('menuOpciones_eliminar')?></a>
                                                            </li>
                                                        </ul>
                                                        <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-servicio1-gasto3">
                                                            <?=label('menuOpciones_seleccionar')?><i class="mdi-navigation-arrow-drop-down"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <br />
                                            <!--                                            <a href="#agregar" class="btn btn-default modal-trigger">--><?//=label('formServicio_nuevaPersona');?><!--</a>-->
                                            <div class="tabla-sinAgregar tabla-gastos-servicio">
                                                <a id="opciones-seleccionados-delete" class="modal-trigger waves-effect black-text opciones-seleccionados option-delete-elements" style="visibility: hidden;"
                                                   href="#eliminarElementosSeleccionados" data-toggle="tooltip" title="<?=label('opciones_seleccionadosEliminar')?>">
                                                    <i class="mdi-action-delete icono-opciones-varios"></i>
                                                </a>
                                            </div>
                                            <hr />
                                        </div>

                                        <div class="input-field col offset-s6 s6">
                                            <input id="servicio_utilidad" type="text" value="10%">
                                            <label for="servicio_utilidad"><?=label('formServicio_utilidad');?></label>
                                        </div>
                                        <div class="input-field col offset-s6 s6">
                                            <input id="servicio_total" type="text" value="$20000" disabled>
                                            <label for="servicio_total"><?=label('formServicio_total');?></label>
                                        </div>

                                        <div class="input-field col s12 envio-formulario">
                                            <button class="btn waves-effect waves-light right" type="submit" name="action"><?=label('formServicio_editar');?>
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
    $(window).load(function() {
        var marcados = $('.checkbox:checked').size();
        if(marcados >= 1) {
            var elems = document.getElementsByClassName('opciones-seleccionados');
            var e;
            for(e in elems) {
                elems[e].style.visibility = 'visible';
            }
        } else {
            var elems = document.getElementsByClassName('opciones-seleccionados');
            var e;
            for(e in elems) {
                elems[e].style.visibility = 'hidden';
            }
        }
        document.getElementById('checkbox-all').checked = false;
    });
    $(document).ready(function() {
        $('#botonElimnar').on("click", function(event){
            var tb = $(this).attr('title');
            var sel = false;
            var ch = $('#'+tb).find('tbody input[type=checkbox]');
            ch.each(function(){
                var $this = $(this);
                if($this.is(':checked')) {
                    sel = true;
                    $this.parents('tr').fadeOut(function(){
                        $this.remove();
                    });
                }
            });
            return false;
        });
    });
    $(document).ready(function(){
        $('#checkbox-all').click(function(event) {
            if(this.checked) {
                $('.checkbox').each(function() {
                    this.checked = true;
                });
            } else {
                $('.checkbox').each(function() {
                    this.checked = false;
                });
            }
        });
    });
    $(document).ready(function(){
        $('.checkbox').click(function(event) {
            var marcados = $('.checkbox:checked').size();
            if(marcados >= 1) {
                var elems = document.getElementsByClassName('opciones-seleccionados');
                var e;
                for(e in elems) {
                    elems[e].style.visibility = 'visible';
                }
            } else {
                var elems = document.getElementsByClassName('opciones-seleccionados');
                var e;
                for(e in elems) {
                    elems[e].style.visibility = 'hidden';
                }
            }
        });
    });
    $(document).ready(function() {
        $('.boton-opciones').on('click', function(event) {
            // alert(event.type);
            //e.preventDefault();

            var elementoActivo = $(this).siblings('ul.active');
            if (elementoActivo.length>0) {
                var estado = elementoActivo.css("display");
                if (estado == "block") {
                    elementoActivo.css("display", "none");
                    elementoActivo.style.display='none';
                } else {
                    elementoActivo.css("display", "block");
                    elementoActivo.style.display='block';
                }
            }
        });
    });
</script>

<!-- lista modals -->
<div id="gastoNuevo" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <input id="gasto_nombre" type="text" value="">
            <label for="gasto_nombre"><?=label('formServicio_gastoAdicionalNombre');?></label>
        </div>
        <div class="input-field col s12">
            <input id="gasto_monto" type="text" value="">
            <label for="gasto_monto"><?=label('formServicio_gastoAdicionalMonto');?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<div id="agregarPersona" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <select>
                <option value="" selected>Seleccione uno</option>
                <option value="1"><?=label('formServicio_nuevaPersonaEmpleado') ?></option>
                <option value="2"><?=label('formServicio_nuevaPersonaProveedor') ?></option>
            </select>
            <label for="persona_tipo"><?=label('formServicio_nuevaPersonaTipo');?></label>
        </div>
        <div class="input-field col s12">
            <input id="persona_codigo" type="text" value="">
            <label for="persona_codigo"><?=label('formServicio_nuevaPersonaCodigo');?></label>
        </div>
        <div class="input-field col s12">
            <input id="persona_id" type="text" value="">
            <label for="persona_id"><?=label('formServicio_nuevaPersonaIdentificacion');?></label>
        </div>
        <div class="input-field col s12">
            <input id="persona_nombre" type="text" value="">
            <label for="persona_nombre"><?=label('formServicio_nuevaPersonaNombre');?></label>
        </div>
        <div class="input-field col s12">
            <textarea id="persona_descripcion" class="materialize-textarea" length="120"></textarea>
            <label for="persona_descripcion"><?=label('formServicio_nuevaPersonaDescripcion');?></label>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <select>
                    <option value="">Seleccione</option>
                    <option value="1" selected><?=label('horas') ?></option>
                    <option value="2"><?=label('dia') ?></option>
                    <option value="3"><?=label('semana') ?></option>
                    <option value="4"><?=label('quincena') ?></option>
                    <option value="5"><?=label('mes') ?></option>
                </select>
                <label for=""><?=label('formServicio_nuevaPersonaSalarioTipo');?></label>
            </div>
            <div class="input-field col s6">
                <input id="persona_salarioMonto" type="text" value="">
                <label for="persona_salarioMonto"><?=label('formServicio_nuevaPersonaSalarioMonto');?></label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<div id="eliminarElemento" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?=label('confirmarEliminarElementoServicio');?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<div id="editar" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <input id="client_code" type="text" value="Maria Rodriguez">
            <label for="client_code"><?=label('formCliente_nombreContacto');?></label>
        </div>
        <div class="input-field col s12">
            <input id="client_code" type="text" value="maria@gmail.com">
            <label for="client_code"><?=label('formCliente_correoContacto');?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<div id="agregar" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <input id="client_code" type="text" value="">
            <label for="client_code"><?=label('formCliente_nombreContacto');?></label>
        </div>
        <div class="input-field col s12">
            <input id="client_code" type="text" value="">
            <label for="client_code"><?=label('formCliente_correoContacto');?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<div id="eliminarElementosSeleccionados" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?=label('clientes_archivosSeleccionadosEliminar');?></p>
    </div>
    <div class="modal-footer black-text">
        <div id="botonElimnar" title="servicio1-gastos">
            <a href="#" class="deleteall waves-effect waves-red btn-flat modal-action modal-close" ><?=label('aceptar');?></a>
        </div>
    </div>
</div>
<!-- Fin lista modals -->