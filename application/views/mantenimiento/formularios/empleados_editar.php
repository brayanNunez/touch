<!-- START CONTENT   -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?=label('tituloFormularioEmpleadoEditar');?></h1>
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
                                            <input id="empleado_codigo" type="text" value="0001">
                                            <label for="empleado_codigo"><?=label('formEmpleado_codigo');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="empleado_id" type="text" value="11-356-689">
                                            <label for="empleado_id"><?=label('formEmpleado_identificacion');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="empleado_nombre" type="text" value="Jorge Arias C.">
                                            <label for="empleado_nombre"><?=label('formEmpleado_nombre');?></label>
                                        </div>

                                        <div class="inputTag col s12">

                                            <label for="empleado_palabras"><?=label('formEmpleado_palabrasClave');?></label>

                                            <input placeholder="<?=label('formEmpleado_anadirPalabraClave');?>" id="empleado_palabras" type="text" value="palabra1,palabra2,palabra3,palabra4,palabra5" data-role="tagsinput" />
                                            
                                        </div>

<!--                                        <div class="inputTag col s12">-->
<!--                                            <label for="vendedoresCliente">--><?//=label('formCliente_cotizador');?><!--</label>-->
<!--                                            <br>-->
<!--                                            <div id="vendedoresCliente" class="example example_objects_as_tags">-->
<!--                                              <div class="bs-example">-->
<!--                                                <input  placeholder="--><?//=label('formCliente_anadirVendedor');?><!--" type="text"  />-->
<!--                                              </div>-->
<!--                                            </div>-->
<!--                                            <br>-->
<!--                                        </div> -->

<!--                                         <div class="input-field col s12"> -->
<!--                                             <input type="text" value="palabra1,palabra2,palabra3,palabra4,palabra5" data-role="tagsinput" /> -->
<!--                                         </div> -->

                                        <div class="input-field col s12">
                                            <input id="empleado_fechaNacimiento" type="date" class="datepicker" value="18-06-1994">
                                            <label for="empleado_fechaNacimiento"><?=label('formEmpleado_fechaNacimiento');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="empleado_fechaIngreso" type="date" class="datepicker" value="09-03-2015">
                                            <label for="empleado_fechaIngreso"><?=label('formEmpleado_fechaIngreso');?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <textarea id="empleado_descripcion" class="materialize-textarea" length="120">Primer empleado</textarea>
                                            <label for="empleado_descripcion"><?=label('formEmpleado_descripcion');?></label>
                                        </div>

                                        <div class="input-field col s12">
                                            <label><?=label('formEmpleado_salarios');?></label>
                                            <br />
                                            <br />
                                            <table class="table striped">
                                                <thead>
                                                    <tr>
                                                        <th><?=label('formEmpleado_salariosTipo');?></th>
                                                        <th><?=label('formEmpleado_salariosMonto');?></th>
                                                        <th><?=label('formEmpleado_salariosOpciones');?></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Por hora</td>
                                                        <td>$10</td>
                                                        <td>
                                                            <a class="modal-trigger icono-edicion" href="#editarSalario" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                                <i class="mdi-editor-mode-edit"></i>
                                                            </a>
                                                            <a class="modal-trigger icono-edicion" href="#eliminarSalario" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                                <i class="mdi-action-delete"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Por día</td>
                                                        <td>$80</td>
                                                        <td>
                                                            <a class="modal-trigger icono-edicion" href="#editarSalario" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                                <i class="mdi-editor-mode-edit"></i>
                                                            </a>
                                                            <a class="modal-trigger icono-edicion" href="#eliminarSalario" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                                <i class="mdi-action-delete"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mensual</td>
                                                        <td>$1400</td>
                                                        <td>
                                                            <a class="modal-trigger icono-edicion" href="#editarSalario" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                                <i class="mdi-editor-mode-edit"></i>
                                                            </a>
                                                            <a class="modal-trigger icono-edicion" href="#eliminarSalario" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                                <i class="mdi-action-delete"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <br />
                                            <a href="#agregarSalario" class="btn btn-default modal-trigger"><?=label('formEmpleado_nuevoSalario');?></a>
                                            <hr />
                                        </div>

                                        <div class="input-field col s12 envio-formulario">
                                            <button class="btn waves-effect waves-light right" type="submit" name="action"><?=label('formEmpleado_editar');?>
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


<!-- lista modals -->
<div id="agregarPalabra" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <input id="palabra_nombre" type="text" value="">
            <label for="palabra_nombre"><?=label('formEmpleado_palabraNombre');?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
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
            <label for=""><?=label('formEmpleado_salarioTipo');?></label>
        </div>
        <div class="input-field col s12">
            <input id="salario_monto" type="text" value="">
            <label for="salario_monto"><?=label('formEmpleado_salarioMonto');?></label>
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
            <label for=""><?=label('formEmpleado_salarioTipo');?></label>
        </div><div class="input-field col s12">
            <input id="salario_monto" type="text" value="$10">
            <label for="salario_monto"><?=label('formEmpleado_salarioMonto');?></label>
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
<!-- Fin lista modals-->