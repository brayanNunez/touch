<!-- START CONTENT   -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?=label('tituloFormularioProveedorEditar');?></h1>
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
                                            <select>
                                                <option value="" selected disabled><?=label('formProveedor_seleccioneUno');?></option>
                                                <option value="1"><?=label('formProveedor_fisico');?></option>
                                                <option value="2" selected><?=label('formProveedor_juridico');?></option>
                                            </select>
                                            <label for="proveedor_tipo"><?=label('formProveedor_tipoProveedor');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="proveedor_codigo" type="text" value="0001">
                                            <label for="proveedor_codigo"><?=label('formProveedor_codigo');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="proveedor_id" type="text" value="2-789-456">
                                            <label for="proveedor_id"><?=label('formProveedor_identificacion');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="proveedor_nombre" type="text" value="Juan Perez D.">
                                            <label for="proveedor_nombre"><?=label('formProveedor_nombre');?></label>
                                        </div>

<!--                                        <div class="input-field col s12">-->
<!--                                            <label for="proveedor_palabras">--><?//=label('formProveedor_palabrasClave');?><!--</label>-->
<!--                                            <input id="proveedor_palabras" type="text" value="Diseño">-->
<!--                                            <div class="input-field col s12">-->
<!--                                                <div class="input-field col s8">-->
<!--                                                    <input id="otra_palabra" type="text">-->
<!--                                                    <label for="otra_palabra">--><?//=label('formProveedor_nuevaPalabra');?><!--</label>-->
<!--                                                </div>-->
<!--                                                <div class="input-field col s4">-->
<!--                                                    <a href="#" class="btn btn-default">--><?//=label('formProveedor_agregar');?><!--</a>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <hr />-->
<!--                                        </div>-->

                                        <div class="inputTag col s12">
                                            <label for="empleado_palabras"><?=label('formProveedor_palabrasClave');?></label>
                                            <input placeholder="<?=label('formProveedor_anadirPalabraClave');?>" id="empleado_palabras" type="text" value="Palabra1, Palabra2" data-role="tagsinput" />
                                        </div>

                                        <div class="input-field col s12">
                                            <textarea id="proveedor_descripcion" class="materialize-textarea" length="120">Diseñador profesional</textarea>
                                            <label for="proveedor_descripcion"><?=label('formProveedor_descripcion');?></label>
                                        </div>

                                        <div class="input-field col s12">
                                            <label><?=label('formProveedor_salarios');?></label>
                                            <br />
                                            <br />
                                            <table id="proveedor1-salarios" class="table striped">
                                                <thead>
                                                    <tr>
                                                        <th style="text-align: center;">
                                                            <input class="filled-in checkbox checkall" type="checkbox" id="checkbox-all" onclick="toggleChecked(this.checked)"/>
                                                            <label for="checkbox-all"></label>
                                                        </th>
                                                        <th><?=label('formProveedor_salariosTipo');?></th>
                                                        <th><?=label('formProveedor_salariosMonto');?></th>
                                                        <th><?=label('formProveedor_salariosOpciones');?></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <input type="checkbox" class="filled-in checkbox" id="checkbox_proveedor1_salario1" />
                                                            <label for="checkbox_proveedor1_salario1"></label>
                                                        </td>
                                                        <td>Por hora</td>
                                                        <td>$10</td>
                                                        <td>
                                                            <ul id="dropdown-proveedor1-salario1" class="dropdown-content">
                                                                <li>
                                                                    <a href="#editarSalario" class="-text modal-trigger"><?=label('menuOpciones_editar')?></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#eliminarSalario" class="-text modal-trigger"><?=label('menuOpciones_eliminar')?></a>
                                                                </li>
                                                            </ul>
                                                            <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-proveedor1-salario1">
                                                                <?=label('menuOpciones_seleccionar')?><i class="mdi-navigation-arrow-drop-down"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <input type="checkbox" class="filled-in checkbox" id="checkbox_proveedor1_salario2" />
                                                            <label for="checkbox_proveedor1_salario2"></label>
                                                        </td>
                                                        <td>Por día</td>
                                                        <td>$80</td>
                                                        <td>
                                                            <ul id="dropdown-proveedor1-salario2" class="dropdown-content">
                                                                <li>
                                                                    <a href="#editarSalario" class="-text modal-trigger"><?=label('menuOpciones_editar')?></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#eliminarSalario" class="-text modal-trigger"><?=label('menuOpciones_eliminar')?></a>
                                                                </li>
                                                            </ul>
                                                            <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-proveedor1-salario2">
                                                                <?=label('menuOpciones_seleccionar')?><i class="mdi-navigation-arrow-drop-down"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <input type="checkbox" class="filled-in checkbox" id="checkbox_proveedor1_salario3" />
                                                            <label for="checkbox_proveedor1_salario3"></label>
                                                        </td>
                                                        <td>Mensual</td>
                                                        <td>$1400</td>
                                                        <td>
                                                            <ul id="dropdown-proveedor1-salario3" class="dropdown-content">
                                                                <li>
                                                                    <a href="#editarSalario" class="-text modal-trigger"><?=label('menuOpciones_editar')?></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#eliminarSalario" class="-text modal-trigger"><?=label('menuOpciones_eliminar')?></a>
                                                                </li>
                                                            </ul>
                                                            <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-proveedor1-salario3">
                                                                <?=label('menuOpciones_seleccionar')?><i class="mdi-navigation-arrow-drop-down"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <br />
                                            <div>
                                                <a href="#agregarSalario" class="btn btn-default modal-trigger"><?=label('formProveedor_nuevoSalario');?></a>

                                                <div class="tabla-conAgregar tabla-salarios-proveedor">
                                                    <a id="opciones-seleccionados-delete" class="modal-trigger waves-effect black-text opciones-seleccionados option-delete-elements" style="visibility: hidden;"
                                                       href="#eliminarElementosSeleccionados" data-toggle="tooltip" title="<?=label('opciones_seleccionadosEliminar')?>">
                                                        <i class="mdi-action-delete icono-opciones-varios"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <hr />
                                        </div>

                                        <div class="input-field col s12 envio-formulario">
                                            <button class="btn waves-effect waves-light right" type="submit" name="action"><?=label('formProveedor_editar');?>
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
<div id="agregarSalario" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <select>
                <option value="">Seleccione</option>
                <option value="1"><?=label('horas') ?></option>
                <option value="2"><?=label('dia') ?></option>
                <option value="3"><?=label('semana') ?></option>
                <option value="4"><?=label('quincena') ?></option>
                <option value="5"><?=label('mes') ?></option>
            </select>
            <label for=""><?=label('formProveedor_salarioTipo');?></label>
        </div>
        <div class="input-field col s12">
            <input id="salario_monto" type="text" value="">
            <label for="salario_monto"><?=label('formProveedor_salarioMonto');?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<div id="editarSalario" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <select>
                <option value="">Seleccione</option>
                <option value="1" selected><?=label('horas') ?></option>
                <option value="2"><?=label('dia') ?></option>
                <option value="3"><?=label('semana') ?></option>
                <option value="4"><?=label('quincena') ?></option>
                <option value="5"><?=label('mes') ?></option>
            </select>
            <label for=""><?=label('formProveedor_salarioTipo');?></label>
        </div><div class="input-field col s12">
            <input id="salario_monto" type="text" value="$10">
            <label for="salario_monto"><?=label('formProveedor_salarioMonto');?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<div id="eliminarSalario" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?=label('confirmarEliminarSalario');?></p>
    </div>
    <div class="modal-footer black-text">
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
        <div id="botonElimnar" title="proveedor1-salarios">
            <a href="#" class="deleteall waves-effect waves-red btn-flat modal-action modal-close" ><?=label('aceptar');?></a>
        </div>
    </div>
</div>
<!-- Fin lista modals-->