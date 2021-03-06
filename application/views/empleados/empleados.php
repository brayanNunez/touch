

<!--START CONTENT -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloFormularioEmpleado'); ?></h1>
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
                                <form id="form_empleado" class="col s12" action="<?= base_url() ?>empleados/insertar" method="POST">
                                    <div class="row">
                                        

                                        <div class="input-field col s12">
                                            <input id="empleado_codigo" name="empleado_codigo" type="text">
                                            <label for="empleado_codigo"><?= label('formEmpleado_codigo'); ?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="empleado_id" name="empleado_id" type="text">
                                            <label
                                                for="empleado_id"><?= label('formEmpleado_identificacion'); ?></label>
                                        </div>

                                        <div>
                                            <div class="input-field col s12 m4 l4">
                                                <input id="empleado_primerApellido" name="empleado_primerApellido" type="text">
                                                <label for="empleado_primerApellido"><?= label('formEmpleado_apellido1'); ?></label>
                                            </div>
                                            <div class="input-field col s12 m4 l4">
                                                <input id="empleado_segundoApellido" name="empleado_segundoApellido" type="text">
                                                <label for="empleado_segundoApellido"><?= label('formEmpleado_apellido2'); ?></label>
                                            </div>
                                            <div class="input-field col s12 m4 l4">
                                                <input id="empleado_nombre" name="empleado_nombre" type="text">
                                                <label for="empleado_nombre"><?= label('formEmpleado_nombre'); ?></label>
                                            </div>
                                        </div>


                                        <div class="inputTag col s12">
                                            <label
                                                for="empleado_palabras"><?= label('formEmpleado_palabrasClave'); ?></label>
                                            <input placeholder="<?= label('formEmpleado_anadirPalabraClave'); ?>"
                                                   id="empleado_palabras" name="empleado_palabras" type="text" value="" data-role="tagsinput"/>
                                        </div>

                                        <div class="input-field col s12">
                                            <input id="empleado_fechaNacimiento" name="empleado_fechaNacimiento" type="text" class="datepicker-fecha">
                                            <label for="empleado_fechaNacimiento"><?= label('formEmpleado_fechaNacimiento'); ?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="empleado_fechaIngreso" name="empleado_fechaIngreso" type="text" class="datepicker-fecha">
                                            <label for="empleado_fechaIngreso"><?= label('formEmpleado_fechaIngreso'); ?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <textarea id="empleado_descripcion" name="empleado_descripcion"
                                                      class="materialize-textarea" length="120"></textarea>
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
                                                    <th><?= label('formEmpleado_salarioTipo'); ?></th>
                                                    <th><?= label('formEmpleado_salarioMonto'); ?></th>
                                                    <th><?= label('formEmpleado_salariosPorDefecto'); ?></th>
                                                    <th><?= label('formEmpleado_salariosOpciones'); ?></th>
                                                </tr>
                                                </thead>
                                                <tbody>
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
                                                    <th><?= label('formEmpleado_salarioTipo'); ?></th>
                                                    <th><?= label('formEmpleado_salarioMonto'); ?></th>
                                                    <th><?= label('formEmpleado_salariosPorDefecto'); ?></th>
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
                                                        <input type="radio" name="radioPorDefectoEmpleado" id="radio_pago1" checked="checked"/>
                                                        <label for="radio_pago1"></label>
                                                    </td>
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
                                        </div>

                                        <div class="input-field col s12 envio-formulario">
                                            <button class="btn waves-effect waves-light right" type="submit"
                                                    name="action"><?= label('formEmpleado_enviar'); ?>
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

function validacionCorrecta_agregarSalario(){
  $('.modal-header a').click(); 
}

function validacionCorrecta(){

    $.ajax({
           data: {empleado_id :  $('#empleado_id').val()},
           url:   '<?=base_url()?>empleados/existeIdentificacion',
           type:  'post',
           success:  function (response) {
            switch(response){
                case '0':
                    $('#linkModalError').click();//error al ir a verificar identificación
                break;
                case '1':
                    alert('<?= label("empleadoIdentificacionExistente"); ?>');
                    $('#empleado_id').focus();
                break;
                case '2':
                    var url = $('form').attr('action');
                    var method = $('form').attr('method'); 
                    $.ajax({
                           type: method,
                           url: url,
                           data: $('form').serialize(), 
                           success: function(response)
                           {
                               if (response == 0) {
                                   $('#linkModalError').click();
                               } else {
                                    $('#linkModalGuardado').click();
                                    $('form')[0].reset();
                                    $('#empleado_palabras').tagsinput('removeAll');
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
        <p><?= label('empleadoGuardadoCorrectamente'); ?></p>
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


<div id="agregarSalario" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <form id="form_empleado_agregarSalario">
    <div class="modal-content">
        
        <div class="input-field col s12">
            <select>

                <option>Seleccione</option>
                <?php
                  if (isset($resultado)) {      
                    if ($resultado !== false) {
                      $contador = 0;
                      foreach ($resultado as $tipo) {
                      ?>
                        <option value="<?php $tipo['idTipoSalario']?>"><?= $tipo['nombre'] ?></option>
                      <?php 
                      
                    }
                  }
                }
                ?>
            </select>
            <label for=""><?= label('formEmpleado_salarioTipo'); ?></label>
        </div>
        <div class="input-field col s12">
            <input id="salario_monto" name="salario_monto" type="number">
            <label for="salario_monto"><?= label('formEmpleado_salarioMonto'); ?></label>
        </div>
        
    </div>
    <div class="modal-footer">
        <a onclick="$(this).closest('form').submit()" class="waves-effect waves-green btn-flat"><?= label('aceptar'); ?></a>
    </div>
    </form>
</div>

<div id="editarSalario" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <select>

                <option>Seleccione</option>
                <?php
                  if (isset($resultado)) {      
                    if ($resultado !== false) {
                      $contador = 0;
                      foreach ($resultado as $tipo) {
                      ?>
                        <option value="<?php $tipo['idTipoSalario']?>"><?= $tipo['nombre'] ?></option>
                      <?php 
                      
                    }
                  }
                }
                ?>
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
<!-- Fin lista modals -->
