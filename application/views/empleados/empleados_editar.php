<div class="col s12">
  <?php $this->load->helper('form'); ?>
    <form id="form_empleado" class="col s12 " action="<?= base_url() ?>empleados/modificar/<?php if (isset($resultado)) {
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

            <div class="input-field col s12">
                <input id="empleado_fechaNacimiento" name="empleado_fechaNacimiento" type="text" class="datepicker-fecha" value='<?php if (isset($resultado)) {
                           $originalDate =  $resultado['fechaNacimiento'];
                           echo date("d-m-Y", strtotime($originalDate));
                       } ?>'>
                <label for="empleado_fechaNacimiento"><?= label('formEmpleado_fechaNacimiento'); ?></label>
            </div>
            <div class="input-field col s12">
                <input id="empleado_fechaIngreso" name="empleado_fechaIngreso" type="text" class="datepicker-fecha" value='<?php if (isset($resultado)) {
                           $originalDate =  $resultado['fechaIngresoEmpresa'];
                           echo date("d-m-Y", strtotime($originalDate));
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
                        <th><?= label('formEmpleado_salarioTipo'); ?></th>
                        <th><?= label('formEmpleado_salarioMonto'); ?></th>
                        <th><?= label('formEmpleado_salariosPorDefecto'); ?></th>
                        <th><?= label('formEmpleado_salariosOpciones'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        if (isset($resultado)) {
                        
                            if ($resultado !== false) {
                                 $contador = 0;
                                    foreach ($resultado['salarios'] as $salario) {
                                        $idEncriptado = encryptIt($salario['idSalarioEmpleado']);
                                        ?>
                     <tr id="fila<?= $contador ?>" data-idElemento="<?= $idEncriptado ?>">
                        <td style="text-align: center;">
                             <input type="checkbox" class="filled-in checkbox"
                                id="<?=$idEncriptado?>"/>
                             <label for="<?=$idEncriptado?>"></label>
                        </td>
                        <?php foreach ($resultado['tiposalario'] as $tipo) { 
                            if($tipo['idTipoSalario'] === $salario['idTipoSalario']) { ?>
                        <td><?= $tipo['nombre'] ?></td>
                        <?php }
                        } ?>
                        <td><?= $salario['salario'] ?></td>
                        <td><input type="radio" name="radioPorDefectoEmpleado" id="<?=$idEncriptado?>" <?php if($salario['defecto'] == 1){ ?>
                            checked="checked"
                        <?php } ?>/>
                            <label for="<?=$idEncriptado?>"></label>
                        </td>
                        <td>
                           <ul id="dropdown-empleado-salario" class="dropdown-content">
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
                               href="#!" data-activates="dropdown-empleado-salario">
                                <?= label('menuOpciones_seleccionar') ?><i
                                    class="mdi-navigation-arrow-drop-down"></i>
                            </a>
                        </td>
                     </tr>
                     <?php
                        }
                        } 
                        }
                        ?>
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

</section>
<div style="display: none">
    <a id="linkModalEditado" href="#transaccionCorrecta" class="btn btn-default modal-trigger"></a>
    <a id="linkModalError" href="#transaccionIncorrecta" class="btn btn-default modal-trigger"></a>
</div>
<!-- END CONTENT-->

<script>  

function validacionCorrecta_agregarSalario(){
  $('.modal-header a').click(); 
}

var miIdActual = "<?php if (isset($resultado)) {echo $resultado['identificacion'];} ?>";
function validacionCorrecta(){
    var idNuevo = $('#empleado_id').val();

    if (miIdActual == idNuevo) {
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
                        $('#linkModalEditado').click();
                   }
               }
             });
    } else {
            $.ajax({
                   data: {empleado_id : idNuevo},
                   url:   '<?=base_url()?>empleados/existeIdentificacion',
                   type:  'post',
                   success:  function (response) {
                    switch(response){
                        case '0':
                            $('#linkModalError').click();
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
                                            $('#linkModalEditado').click();
                                            miIdActual = idNuevo;
                                       }
                                   }
                                 });

                        break;
                    }
                }
            });

         };

    }

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
        <a href="" class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('empleadoEditadoCorrectamente'); ?></p>
    </div>
    <div class="modal-footer">
        <a href="<?= base_url() ?>empleados" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="transaccionIncorrecta" class="modal">
    <div  class="modal-header headerTransaccionIncorrecta">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('errorEditar'); ?></p>
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
                      foreach ($resultado['tiposalario'] as $tipo) {
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
            <input id="salario_monto" name="salario_monto" type="text" value="">
            <label for="salario_monto"><?= label('formEmpleado_salarioMonto'); ?></label>
        </div>
    
    
    </div>

    <div class="modal-footer">
      <div>
        <a onclick="$(this).closest('form').submit()" class="waves-effect waves-green btn-flat"><?= label('aceptar'); ?></a>
      </div>
        
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
                      foreach ($resultado['tiposalario'] as $tipo) {
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
<!-- Fin lista modals-->