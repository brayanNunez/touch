<button id="botonPalabras">ver palabras</button>

<script type="text/javascript">
// $(document).on("ready", function(){})
$('#botonPalabras').on("click", function(){
    alert($('#empleado_palabras').tagsinput('items'));
});

    
</script>



<!-- START CONTENT   -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloFormularioEmpleadoEditar'); ?></h1>
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
                            <div class="col s12 m12 l10">
                                <form class="col s12"
                                      action="<?= base_url() ?>empleados/modificar/<?php if (isset($resultado)) {
                                          echo encryptIt($resultado['idEmpleado']);
                                      } ?>" method="POST">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="empleado_codigo" name="empleado_codigo" type="text"
                                                   value='<?php if (isset($resultado)) {
                                                       echo $resultado['codigo'];
                                                   } ?>'>
                                            <label for="empleado_codigo"><?= label('formEmpleado_codigo'); ?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="empleado_id" name="empleado_id" type="text"
                                                   value='<?php if (isset($resultado)) {
                                                       echo $resultado['identificacion'];
                                                   } ?>'>
                                            <label
                                                for="empleado_id"><?= label('formEmpleado_identificacion'); ?></label>
                                        </div>
                                       

                                        <div>
                                            <div class="input-field col s12 m4 l4">
                                                <input id="empleado_primerApellido" name="empleado_primerApellido" type="text" value='<?php if (isset($resultado)) {
                                                       echo $resultado['primerApellido'];
                                                   } ?>'>
                                                <label for="empleado_primerApellido"><?= label('formEmpleado_apellido1'); ?></label>
                                            </div>
                                            <div class="input-field col s12 m4 l4">
                                                <input id="empleado_segundoApellido" name="empleado_segundoApellido" type="text"value='<?php if (isset($resultado)) {
                                                       echo $resultado['segundoApellido'];
                                                   } ?>'>
                                                <label for="empleado_segundoApellido"><?= label('formEmpleado_apellido2'); ?></label>
                                            </div>
                                            <div class="input-field col s12 m4 l4">
                                                <input id="empleado_nombre" name="empleado_nombre" type="text"value='<?php if (isset($resultado)) {
                                                       echo $resultado['nombre'];
                                                   } ?>'>
                                                <label for="empleado_nombre"><?= label('formEmpleado_nombre'); ?></label>
                                            </div>
                                        </div>



                                        <div class="inputTag col s12">

                                            <label
                                                for="empleado_palabras"><?= label('formEmpleado_palabrasClave'); ?></label>

                                            <input placeholder="<?= label('formEmpleado_anadirPalabraClave'); ?>"
                                                   id="empleado_palabras" name="empleado_palabras" type="text"
                                                   value="<?php if (isset($resultado)) {
                                                        foreach ($resultado['palabras'] as $palabra) {
                                                            echo $palabra['descripcion'].',';
                                                        }
                                                      
                                                   } ?>"
                                                   data-role="tagsinput"/>

                                        </div>

                                        <!--                                        <div class="inputTag col s12">-->
                                        <!--                                            <label for="vendedoresCliente">-->
                                        <? //=label('formCliente_cotizador');?><!--</label>-->
                                        <!--                                            <br>-->
                                        <!--                                            <div id="vendedoresCliente" class="example example_objects_as_tags">-->
                                        <!--                                              <div class="bs-example">-->
                                        <!--                                                <input  placeholder="-->
                                        <? //=label('formCliente_anadirVendedor');?><!--" type="text"  />-->
                                        <!--                                              </div>-->
                                        <!--                                            </div>-->
                                        <!--                                            <br>-->
                                        <!--                                        </div> -->

                                        <!--                                         <div class="input-field col s12"> -->
                                        <!--                                             <input type="text" value="palabra1,palabra2,palabra3,palabra4,palabra5" data-role="tagsinput" /> -->
                                        <!--                                         </div> -->

                                        <div class="input-field col s12">
                                            <input id="empleado_fechaNacimiento" name="empleado_fechaNacimiento" type="text" class="datepicker-fecha" value='<?php if (isset($resultado)) {
                                                       echo $resultado['fechaNacimiento'];
                                                   } ?>'>
                                            <label for="empleado_fechaNacimiento"><?= label('formEmpleado_fechaNacimiento'); ?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="empleado_fechaIngreso" name="empleado_fechaIngreso" type="text" class="datepicker-fecha" value='<?php if (isset($resultado)) {
                                                       echo $resultado['fechaIngresoEmpresa'];
                                                   } ?>'>
                                            <label for="empleado_fechaIngreso"><?= label('formEmpleado_fechaIngreso'); ?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <textarea id="empleado_descripcion" name="empleado_descripcion"
                                                      class="materialize-textarea"
                                                      ><?php if (isset($resultado)) {
                                                    echo $resultado['descripcion'];
                                                } ?></textarea>
                                            <label
                                                for="empleado_descripcion"><?= label('formEmpleado_descripcion'); ?></label>
                                        </div>

                                        <div class="input-field col s12">
                                            <label><?= label('formEmpleado_salarios'); ?></label>
                                            <br/>
                                            <br/>
                                            <table id="empleados1-salarios" class="table striped">
                                                <thead>
                                                <tr>
                                                    <th style="text-align: center;">
                                                        <input class="filled-in checkbox checkall" type="checkbox"
                                                               id="checkbox-all" onclick="toggleChecked(this.checked)"/>
                                                        <label for="checkbox-all"></label>
                                                    </th>
                                                    <th><?= label('formEmpleado_salariosTipo'); ?></th>
                                                    <th><?= label('formEmpleado_salariosMonto'); ?></th>
                                                    <th><?= label('formEmpleado_salariosOpciones'); ?></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td style="text-align: center;">
                                                        <input type="checkbox" class="filled-in checkbox"
                                                               id="checkbox_empleado1_salario1"/>
                                                        <label for="checkbox_empleado1_salario1"></label>
                                                    </td>
                                                    <td>Por hora</td>
                                                    <td>$10</td>
                                                    <td>
                                                        <ul id="dropdown-empleado1-salario1" class="dropdown-content">
                                                            <li>
                                                                <a href="#editarSalario"
                                                                   class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                                            </li>
                                                            <li>
                                                                <a href="#eliminarSalario"
                                                                   class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                            </li>
                                                        </ul>
                                                        <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                           href="#!" data-activates="dropdown-empleado1-salario1">
                                                            <?= label('menuOpciones_seleccionar') ?><i
                                                                class="mdi-navigation-arrow-drop-down"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">
                                                        <input type="checkbox" class="filled-in checkbox"
                                                               id="checkbox_empleado1_salario1"/>
                                                        <label for="checkbox_empleado1_salario1"></label>
                                                    </td>
                                                    <td>Por día</td>
                                                    <td>$80</td>
                                                    <td>
                                                        <ul id="dropdown-empleado1-salario1" class="dropdown-content">
                                                            <li>
                                                                <a href="#editarSalario"
                                                                   class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                                            </li>
                                                            <li>
                                                                <a href="#eliminarSalario"
                                                                   class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                            </li>
                                                        </ul>
                                                        <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                           href="#!" data-activates="dropdown-empleado1-salario1">
                                                            <?= label('menuOpciones_seleccionar') ?><i
                                                                class="mdi-navigation-arrow-drop-down"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">
                                                        <input type="checkbox" class="filled-in checkbox"
                                                               id="checkbox_empleado1_salario1"/>
                                                        <label for="checkbox_empleado1_salario1"></label>
                                                    </td>
                                                    <td>Mensual</td>
                                                    <td>$1400</td>
                                                    <td>
                                                        <ul id="dropdown-empleado1-salario1" class="dropdown-content">
                                                            <li>
                                                                <a href="#editarSalario"
                                                                   class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                                            </li>
                                                            <li>
                                                                <a href="#eliminarSalario"
                                                                   class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                            </li>
                                                        </ul>
                                                        <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                           href="#!" data-activates="dropdown-empleado1-salario1">
                                                            <?= label('menuOpciones_seleccionar') ?><i
                                                                class="mdi-navigation-arrow-drop-down"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <br/>

                                            <div>
                                                <a href="#agregarSalario"
                                                   class="btn btn-default modal-trigger"><?= label('formEmpleado_nuevoSalario'); ?></a>

                                                <div class="tabla-conAgregar tabla-salarios-empleado">
                                                    <a id="opciones-seleccionados-delete"
                                                       class="modal-trigger waves-effect black-text opciones-seleccionados option-delete-elements"
                                                       style="visibility: hidden;"
                                                       href="#eliminarElementosSeleccionados" data-toggle="tooltip"
                                                       title="<?= label('opciones_seleccionadosEliminar') ?>">
                                                        <i class="mdi-action-delete icono-opciones-varios"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <hr/>
                                        </div>

                                        <div class="input-field col s12 envio-formulario">
                                            <button class="btn waves-effect waves-light right" type="submit"
                                                    name="action"><?= label('formEmpleado_editar'); ?>
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


     $('#empleado_fechaNacimiento').datepicker({
      dateFormat: 'yy-mm-dd'
    });
    $('#empleado_fechaIngreso').datepicker({
      dateFormat: 'yy-mm-dd'
    });

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
<div id="agregarPalabra" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <input id="palabra_nombre" type="text" value="">
            <label for="palabra_nombre"><?= label('formEmpleado_palabraNombre'); ?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="agregarSalario" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <select>
                <option value="">Seleccione</option>
                <option value="1"><?= label('horas') ?></option>
                <option value="2"><?= label('dia') ?></option>
                <option value="3"><?= label('semana') ?></option>
                <option value="4"><?= label('quincena') ?></option>
                <option value="5"><?= label('mes') ?></option>
            </select>
            <label for=""><?= label('formEmpleado_salarioTipo'); ?></label>
        </div>
        <div class="input-field col s12">
            <input id="salario_monto" type="text" value="">
            <label for="salario_monto"><?= label('formEmpleado_salarioMonto'); ?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="editarSalario" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <select>
                <option value="">Seleccione</option>
                <option value="1" selected><?= label('horas') ?></option>
                <option value="2"><?= label('dia') ?></option>
                <option value="3"><?= label('semana') ?></option>
                <option value="4"><?= label('quincena') ?></option>
                <option value="5"><?= label('mes') ?></option>
            </select>
            <label for=""><?= label('formEmpleado_salarioTipo'); ?></label>
        </div>
        <div class="input-field col s12">
            <input id="salario_monto" type="text" value="$10">
            <label for="salario_monto"><?= label('formEmpleado_salarioMonto'); ?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="eliminarSalario" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarSalario'); ?></p>
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
        <div id="botonElimnar" title="empleados1-salarios">
            <a href="#"
               class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>
<!-- Fin lista modals-->