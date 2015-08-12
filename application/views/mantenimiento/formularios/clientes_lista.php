<!-- START CONTENT -->

 <section id="content">

     <!--start container-->
     <div id="breadcrumbs-wrapper" class=" grey lighten-3">
         <div class="container">
             <div class="row">
                 <div class="col s12 m12 l12">
                     <h1 class="breadcrumbs-title"><?=label('tituloClientes');?></h1>
                 </div>
             </div>
         </div>
     </div>
     <!--breadcrumbs end-->

    <div class="container">
        <div id="chart-dashboard">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div id="submit-button" class="section">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card lista-elementos">
                                    <div id="table-datatables">
                                        <div class="row">
                                            <div class="col s12 m12 l12">
                                                <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                                    <div class="agregar_nuevo">
                                                        <a href="<?=base_url()?>clientes/agregar" class="btn btn-default"><?=label('agregar_nuevo');?></a>
                                                    </div>
                                                    <a id="busqueda-avanzada-cliente" href="#busquedaAvanzada" class="modal-trigger">Busqueda avanzada</a>
                                                    <thead>
                                                        <tr>
                                                            <th style="text-align: center;">
                                                                <input class="filled-in checkbox checkall" type="checkbox" id="checkbox-all" onclick="toggleChecked(this.checked)"/>
                                                                <label for="checkbox-all"></label>
                                                            </th>
                                                            <th><?=label('Cliente_tablaCodigo');?></th>
                                                            <th><?=label('Cliente_tablaTipo');?></th>
                                                            <th><?=label('Cliente_tablaNombre');?></th>
                                                            <th><?=label('Cliente_tablaTelefono');?></th>
                                                            <th><?=label('Cliente_tablaCorreo');?></th>
                                                            <th><?=label('Cliente_tablaCotizador');?></th>
                                                            <th><?=label('Cliente_tablaOpciones');?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox" id="checkbox_cliente1" />
                                                                <label for="checkbox_cliente1"></label>
                                                            </td>
                                                            <td>0001</td>
                                                            <td>Jurídico</td>
                                                            <td><a href="<?=base_url()?>clientes/editar">Dos Pinos S.A.</a></td>
                                                            <td>2456-0708</td>
                                                            <td>coopedospinos@gmail.com</td>
                                                            <td><a href="<?=base_url()?>usuarios/editar">Juan</a></td>
                                                            <td>
                                                                <ul id="dropdown-cliente1" class="dropdown-content">
                                                                    <li><a href="<?=base_url(); ?>clientes/editar" class="-text">Editar</a>
                                                                    </li>
                                                                    <li><a href="#eliminarCliente" class="-text modal-trigger">Eliminar</a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-cliente1">
                                                                    Seleccionar<i class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox" id="checkbox_cliente2" />
                                                                <label for="checkbox_cliente2"></label>
                                                            </td>
                                                            <td>0002</td>
                                                            <td>Físico</td>
                                                            <td><a href="<?=base_url()?>clientes/editar">Emanuel Conejo R.</a></td>
                                                            <td>2458-9632</td>
                                                            <td>emanuel@gmail.com</td>
                                                            <td><a href="<?=base_url()?>usuarios/editar">Maria</a></td>
                                                            <td>
                                                                <ul id="dropdown-cliente2" class="dropdown-content">
                                                                    <li><a href="<?=base_url(); ?>clientes/editar" class="-text">Editar</a>
                                                                    </li>
                                                                    <li><a href="#eliminarCliente" class="-text modal-trigger">Eliminar</a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-cliente2">
                                                                    Seleccionar<i class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox" id="checkbox_cliente3" />
                                                                <label for="checkbox_cliente3"></label>
                                                            </td>
                                                            <td>0003</td>
                                                            <td>Jurídico</td>
                                                            <td><a href="<?=base_url()?>clientes/editar">Pipasa S.A.</a></td>
                                                            <td>2478-4512</td>
                                                            <td>pipasa@gmail.com</td>
                                                            <td><a href="<?=base_url()?>usuarios/editar">Maria</a></td>
                                                            <td>
                                                                <ul id="dropdown-cliente3" class="dropdown-content">
                                                                    <li><a href="<?=base_url(); ?>clientes/editar" class="-text">Editar</a>
                                                                    </li>
                                                                    <li><a href="#eliminarCliente" class="-text modal-trigger">Eliminar</a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-cliente3">
                                                                    Seleccionar<i class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox" id="checkbox_cliente4" />
                                                                <label for="checkbox_cliente4"></label>
                                                            </td>
                                                            <td>0004</td>
                                                            <td>Físico</td>
                                                            <td><a href="<?=base_url()?>clientes/editar">Julia Bolaños E.</a></td>
                                                            <td>2448-4250</td>
                                                            <td>julia@gmail.com</td>
                                                            <td><a href="<?=base_url()?>usuarios/editar">Juan</a></td>
                                                            <td>
                                                                <ul id="dropdown-cliente4" class="dropdown-content">
                                                                    <li><a href="<?=base_url(); ?>clientes/editar" class="-text">Editar</a>
                                                                    </li>
                                                                    <li><a href="#eliminarCliente" class="-text modal-trigger">Eliminar</a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-cliente4">
                                                                    Seleccionar<i class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
<!--                                                        <tr>-->
<!--                                                            <th>--><?//=label('Cliente_tablaCodigo');?><!--</th>-->
<!--                                                            <th>--><?//=label('Cliente_tablaTipo');?><!--</th>-->
<!--                                                            <th>--><?//=label('Cliente_tablaNombre');?><!--</th>-->
<!--                                                            <th>--><?//=label('Cliente_tablaTelefono');?><!--</th>-->
<!--                                                            <th>--><?//=label('Cliente_tablaCorreo');?><!--</th>-->
<!--                                                            <th>--><?//=label('Cliente_tablaCotizador');?><!--</th>-->
<!--                                                            <th>--><?//=label('Cliente_tablaOpciones');?><!--</th>-->
<!--                                                        </tr>-->
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--end container-->
</section>
<!-- END CONTENT-->

<!-- lista modals -->
<div id="eliminarCliente" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?=label('confirmarEliminarCliente');?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<div id="busquedaAvanzada" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div id="formGeneral" class="section">
            <div class="row">
                <div class="input-field col s12 m3 l3">
                    <div class="input-field col s12">
                        <input id="busqueda-fecha-desde" type="date">
                         <label id="fecha-desde" for="busqueda-fecha-desde" class="">Desde: </label>
                    </div>
                </div>
                <div class="input-field col s12 m3 l3">
                    <div class="input-field col s12">
                        <input id="busqueda-fecha-hasta" type="date">
                        <label id="fecha-hasta" for="busqueda-fecha-hasta" class="">Hasta: </label>
                    </div>
                </div>

                <div class="input-field col s12 m6 l6">
                    <select class="input-field col s12">
                        <!--	                                 <option value="" disabled selected>Estado</option>-->
                        <option value="1" selected>Todos</option>
                        <option value="2">Enviada</option>
                        <option value="3">Finalizada</option>
                        <option value="4">Rechazada</option>
                    </select>
                    <label>Estado de la cotización</label>
                </div>
                <div class="input-field col s12 m4 l4">
                    <select class="input-field col s12">
                        <!--	                                 <option value="" disabled selected>Cliente</option>-->
                        <option value="1" selected>Todos</option>
                        <option value="2">Juan Alfaro Alfaro</option>
                        <option value="3">Diego Rojas</option>
                    </select>
                    <label>Clientes</label>
                </div>
                <div class="input-field col s12 m4 l4">
                    <select class="input-field col s12">
                        <!--	                                 <option value="" disabled selected>Empleados</option>-->
                        <option value="1" selected>Todos</option>
                        <option value="2">Juan Carlos Porras</option>
                        <option value="3">Ana Bolaños Rojas</option>
                    </select>
                    <label>Vendedores</label>
                </div>
                <div class="input-field col s12 m4 l4">
                    <select id="reporte-cliente" class="input-field col s12">
                        <!--                                     <option value="" disabled selected>Outsourcing</option>-->
                        <option value="1" selected>Todos</option>
                        <option value="2">Transportes Rojas</option>
                        <option value="3">Música en vivo</option>
                    </select>
                    <label for="reporte-cliente">Proveedores</label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <label><?=label('formCliente_gustos_preferencias');?></label>
                    <br />
                    <br />
                    <table class="table striped">
                        <thead>
                        <tr>
                            <th><?=label('formCliente_gustos');?></th>
                            <th><?=label('formCliente_estado');?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Preferencia 1</td>
                            <td>
                                <div class="switch">
                                    <label style="position: relative">
                                        <?=label('off');?>
                                        <input type="checkbox">
                                        <span class="lever"></span>
                                        <?=label('on');?>
                                    </label>
                                </div>
                                <br />
                            </td>
                        </tr>
                        <tr>
                            <td>Preferencia 2</td>
                            <td>
                                <div class="switch">
                                    <label style="position: relative">
                                        <?=label('off');?>
                                        <input type="checkbox">
                                        <span class="lever"></span>
                                        <?=label('on');?>
                                    </label>
                                </div>
                                <br />
                            </td>
                        </tr>
                        <tr>
                            <td>Preferencia 3</td>
                            <td>
                                <div class="switch">
                                    <label style="position: relative">
                                        <?=label('off');?>
                                        <input type="checkbox">
                                        <span class="lever"></span>
                                        <?=label('on');?>
                                    </label>
                                </div>
                                <br />
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="input-field col s12 m6 l6">
                    <label><?=label('formCliente_mediosContacto');?></label>
                    <br />
                    <br />
                    <table class="table striped">
                        <thead>
                        <tr>
                            <th><?=label('formCliente_medio');?></th>
                            <th><?=label('formCliente_estadoMedio');?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Medio 1</td>
                            <td>
                                <div class="switch">
                                    <label style="position: relative">
                                        <?=label('off');?>
                                        <input type="checkbox">
                                        <span class="lever"></span>
                                        <?=label('on');?>
                                    </label>
                                </div>
                                <br />
                            </td>
                        </tr>
                        <tr>
                            <td>Medio 2</td>
                            <td>
                                <div class="switch">
                                    <label style="position: relative">
                                        <?=label('off');?>
                                        <input type="checkbox">
                                        <span class="lever"></span>
                                        <?=label('on');?>
                                    </label>
                                </div>
                                <br />
                            </td>
                        </tr>
                        <tr>
                            <td>Medio 3</td>
                            <td>
                                <div class="switch">
                                    <label style="position: relative">
                                        <?=label('off');?>
                                        <input type="checkbox">
                                        <span class="lever"></span>
                                        <?=label('on');?>
                                    </label>
                                </div>
                                <br />
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<!--Fin lista modals -->

<script>
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
</script>