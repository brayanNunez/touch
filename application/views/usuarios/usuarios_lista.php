<!-- START CONTENT -->

<section id="content">

    <!--start container-->
        <div id="breadcrumbs-wrapper" class=" grey lighten-3">
            <div class="container">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <h1 class="breadcrumbs-title"><?=label('tituloUsuarios');?></h1>
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
                                                <table id="usuarios-tabla-lista" class="data-table-information responsive-table display" cellspacing="0">
                                                    <div class="agregar_nuevo">
                                                        <a href="<?=base_url()?>usuarios/agregar" class="btn btn-default"><?=label('Usuario_nuevo');?></a>
                                                    </div>
                                                    <thead>
                                                        <tr>
                                                            <th style="text-align: center;">
                                                                <input class="filled-in checkbox checkall" type="checkbox" id="checkbox-all" onclick="toggleChecked(this.checked)"/>
                                                                <label for="checkbox-all"></label>
                                                            </th>
                                                            <th><?=label('Usuario_tablaIdentificacion');?></th>
                                                            <th><?=label('Usuario_tablaNombre');?></th>
                                                            <th><?=label('Usuario_tablaCorreo');?></th>
                                                            <th><?=label('Usuario_tablaOpciones');?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox" id="checkbox_usuario1" />
                                                                <label for="checkbox_usuario1"></label>
                                                            </td>
                                                            <td>2-123-456</td>
                                                            <td><a href="<?=base_url()?>usuarios/editar">Juan</a></td>
                                                            <td><a href="<?=base_url()?>usuarios/editar">juan@gmail.com</a></td>
                                                            <td>
                                                                <ul id="dropdown-usuario1" class="dropdown-content">
                                                                    <li>
                                                                        <a href="<?=base_url(); ?>usuarios/editar" class="-text"><?=label('menuOpciones_editar')?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarUsuario" class="-text modal-trigger"><?=label('menuOpciones_eliminar')?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-usuario1">
                                                                    <?=label('menuOpciones_seleccionar')?><i class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox" id="checkbox_usuario2" />
                                                                <label for="checkbox_usuario2"></label>
                                                            </td>
                                                            <td>3-012-798</td>
                                                            <td><a href="<?=base_url()?>usuarios/editar">Maria</a></td>
                                                            <td><a href="<?=base_url()?>usuarios/editar">maria@gmail.com</a></td>
                                                            <td>
                                                                <ul id="dropdown-usuario2" class="dropdown-content">
                                                                    <li>
                                                                        <a href="<?=base_url(); ?>usuarios/editar" class="-text"><?=label('menuOpciones_editar')?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarUsuario" class="-text modal-trigger"><?=label('menuOpciones_eliminar')?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-usuario2">
                                                                    <?=label('menuOpciones_seleccionar')?><i class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox" id="checkbox_usuario3" />
                                                                <label for="checkbox_usuario3"></label>
                                                            </td>
                                                            <td>4-245-023</td>
                                                            <td><a href="<?=base_url()?>usuarios/editar">Pepe</a></td>
                                                            <td><a href="<?=base_url()?>usuarios/editar">pepe@gmail.com</a></td>
                                                            <td>
                                                                <ul id="dropdown-usuario3" class="dropdown-content">
                                                                    <li>
                                                                        <a href="<?=base_url(); ?>usuarios/editar" class="-text"><?=label('menuOpciones_editar')?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarUsuario" class="-text modal-trigger"><?=label('menuOpciones_eliminar')?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-usuario3">
                                                                    <?=label('menuOpciones_seleccionar')?><i class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox" id="checkbox_usuario4" />
                                                                <label for="checkbox_usuario4"></label>
                                                            </td>
                                                            <td>5-678-123</td>
                                                            <td><a href="<?=base_url()?>usuarios/editar">Alberto</a></td>
                                                            <td><a href="<?=base_url()?>usuarios/editar">alberto@gmail.com</a></td>
                                                            <td>
                                                                <ul id="dropdown-usuario4" class="dropdown-content">
                                                                    <li>
                                                                        <a href="<?=base_url(); ?>usuarios/editar" class="-text"><?=label('menuOpciones_editar')?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarUsuario" class="-text modal-trigger"><?=label('menuOpciones_eliminar')?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-usuario4">
                                                                    <?=label('menuOpciones_seleccionar')?><i class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="tabla-conAgregar">
                                                    <a id="opciones-seleccionados-print" class="waves-effect black-text opciones-seleccionados option-print-table" style="visibility: hidden;"
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
                                                    <a id="opciones-seleccionados-export" class="boton-opciones black-text dropdown-button option-export-table"
                                                       href="#" data-toggle="tooltip" title="<?=label('opciones_seleccionadosExportar')?>" data-activates="dropdown-exportar">
                                                        <i class="mdi-file-file-download icono-opciones-varios"></i>
                                                    </a>
                                                    <a id="opciones-seleccionados-delete" class="modal-trigger waves-effect black-text opciones-seleccionados option-delete-elements" style="visibility: hidden;"
                                                       href="#eliminarElementosSeleccionados" data-toggle="tooltip" title="<?=label('opciones_seleccionadosEliminar')?>">
                                                        <i class="mdi-action-delete icono-opciones-varios"></i>
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
<div id="eliminarUsuario" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?=label('confirmarEliminarUsuario');?></p>
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
        <div id="botonElimnar" title="usuarios-tabla-lista">
            <a href="#" class="deleteall waves-effect waves-red btn-flat modal-action modal-close" ><?=label('aceptar');?></a>
        </div>
    </div>
</div>
<!--Fin lista modals -->
