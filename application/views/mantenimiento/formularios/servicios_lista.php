<!-- START CONTENT -->

<section id="content">

    <!--start container-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?=label('tituloServicios');?></h1>
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
                                                <table id="tabla-servicios-lista" class="data-table-information responsive-table display" cellspacing="0">
                                                    <div class="agregar_nuevo">
                                                        <a href="<?=base_url()?>servicios/agregar" class="btn btn-default modal-trigger"><?=label('agregar_nuevo');?></a>
                                                    </div>
                                                    <thead>
                                                        <tr>
                                                            <th style="text-align: center;">
                                                                <input class="filled-in checkbox checkall" type="checkbox" id="checkbox-all" onclick="toggleChecked(this.checked)"/>
                                                                <label for="checkbox-all"></label>
                                                            </th>
                                                            <th><?=label('Servicio_tablaCodigo');?></th>
                                                            <th><?=label('Servicio_tablaNombre');?></th>
                                                            <th><?=label('Servicio_tablaDescripcion');?></th>
                                                            <th><?=label('Servicio_tablaPrecio');?></th>
                                                            <th><?=label('Servicio_tablaOpciones');?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox" id="checkbox_servicio1" />
                                                                <label for="checkbox_servicio1"></label>
                                                            </td>
                                                            <td>0001</td>
                                                            <td><a href="<?=base_url()?>servicios/editar">Aplicación móvil</a></td>
                                                            <td>Aplicación móvil para SO android</td>
                                                            <td>$500</td>
                                                            <td>
                                                                <ul id="dropdown-servicio1" class="dropdown-content">
                                                                    <li>
                                                                        <a href="<?=base_url(); ?>servicios/editar" class="-text"><?=label('menuOpciones_editar')?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarServicio" class="-text modal-trigger"><?=label('menuOpciones_eliminar')?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#" data-activates="dropdown-servicio1">
                                                                    <?=label('menuOpciones_seleccionar')?><i class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox" id="checkbox_servicio2" />
                                                                <label for="checkbox_servicio2"></label>
                                                            </td>
                                                            <td>0002</td>
                                                            <td><a href="<?=base_url()?>servicios/editar">Hosting</a></td>
                                                            <td>Servicio de hosting por un mes</td>
                                                            <td>$70</td>
                                                            <td>
                                                                <ul id="dropdown-servicio2" class="dropdown-content">
                                                                    <li>
                                                                        <a href="<?=base_url(); ?>servicios/editar" class="-text"><?=label('menuOpciones_editar')?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarServicio" class="-text modal-trigger"><?=label('menuOpciones_eliminar')?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#" data-activates="dropdown-servicio2">
                                                                    <?=label('menuOpciones_seleccionar')?><i class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox" id="checkbox_servicio3" />
                                                                <label for="checkbox_servicio3"></label>
                                                            </td>
                                                            <td>0003</td>
                                                            <td><a href="<?=base_url()?>servicios/editar">Sitio de cotizaciones</a></td>
                                                            <td>Sitio de cotizaciones en linea</td>
                                                            <td>$20.000</td>
                                                            <td>
                                                                <ul id="dropdown-servicio3" class="dropdown-content">
                                                                    <li>
                                                                        <a href="<?=base_url(); ?>servicios/editar" class="-text"><?=label('menuOpciones_editar')?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarServicio" class="-text modal-trigger"><?=label('menuOpciones_eliminar')?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#" data-activates="dropdown-servicio3">
                                                                    <?=label('menuOpciones_seleccionar')?><i class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="tabla-conAgregar">
                                                    <a id="opciones-seleccionados-delete" class="modal-trigger waves-effect black-text opciones-seleccionados" style="display: none;"
                                                       href="#eliminarElementosSeleccionados" data-toggle="tooltip" title="<?=label('opciones_seleccionadosEliminar')?>">
                                                        <i class="mdi-action-delete icono-opciones-varios"></i>
                                                    </a>
                                                    <a id="opciones-seleccionados-print" class="waves-effect black-text opciones-seleccionados" style="display: none;"
                                                       href="#" data-toggle="tooltip" title="<?=label('opciones_seleccionadosImprimir')?>">
                                                        <i class="mdi-action-print icono-opciones-varios"></i>
                                                    </a>
                                                    <ul id="dropdown-exportar" class="dropdown-content">
                                                        <li>
                                                            <a href="#" class="-text"><?=label('opciones_seleccionadosExportarPdf')?></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="-text"><?=label('opciones_seleccionadosExportarExcel')?></a>
                                                        </li>
                                                    </ul>
                                                    <a id="opciones-seleccionados-export" class="boton-opciones black-text opciones-seleccionados dropdown-button" style="display: none;"
                                                       href="#" data-toggle="tooltip" title="<?=label('opciones_seleccionadosExportar')?>" data-activates="dropdown-exportar">
                                                        <i class="mdi-file-file-download icono-opciones-varios"></i>
                                                    </a>
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
    </div>
<!--end container-->
</section>
<!-- END CONTENT-->

<script>
    $(window).load(function() {
        var marcados = $('.checkbox:checked').size();
        if(marcados >= 1) {
            var elems = document.getElementsByClassName('opciones-seleccionados');
            var e;
            for(e in elems) {
                elems[e].style.display = 'block';
            }
        } else {
            var elems = document.getElementsByClassName('opciones-seleccionados');
            var e;
            for(e in elems) {
                elems[e].style.display = 'none';
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
                    elems[e].style.display = 'block';
                }
            } else {
                var elems = document.getElementsByClassName('opciones-seleccionados');
                var e;
                for(e in elems) {
                    elems[e].style.display = 'none';
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
<div id="eliminarServicio" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?=label('confirmarEliminarServicio');?></p>
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
        <div id="botonElimnar" title="tabla-servicios-lista">
            <a href="#" class="deleteall waves-effect waves-red btn-flat modal-action modal-close" ><?=label('aceptar');?></a>
        </div>
    </div>
</div>
<!--Fin lista modals -->
