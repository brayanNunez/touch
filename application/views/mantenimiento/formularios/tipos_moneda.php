<!-- START CONTENT  -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?=label('tituloTiposMoneda');?></h1>
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
                            <div class="col s12 m12 l12">
                                <div class="card lista-elementos">
                                    <div id="table-datatables">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <select>
                                                    <option value="" selected disabled><?=label('tiposMoneda_selecionarUno');?></option>
                                                    <option value="1">Colón</option>
                                                    <option value="2">Dólar</option>
                                                    <option value="3">Euro</option>
                                                    <option value="4">Peso mexicano</option>
                                                </select>
                                                <label for="cliente_tipo"><?=label('tiposMoneda_defecto');?></label>
                                            </div>
                                            <div class="col s12 m12 l12">
                                                <div class="col s12">
                                                    <label><?=label('tiposMoneda_permitidos');?></label>
                                                    <br />
                                                    <br />
                                                </div>
                                                <div class="col s12 m12 l12">
                                                    <table id="monedas-tabla-lista" class="data-table-information responsive-table display" cellspacing="0">
                                                        <div class="agregar_nuevo">
                                                            <a href="#agregarTipo" class="btn modal-trigger"><?=label('tiposMoneda_nuevo');?></a>
                                                        </div>
                                                        <thead>
                                                            <tr>
                                                                <th style="text-align: center;">
                                                                    <input class="filled-in checkbox checkall" type="checkbox" id="checkbox-all" onclick="toggleChecked(this.checked)"/>
                                                                    <label for="checkbox-all"></label>
                                                                </th>
                                                                <th><?=label('tiposMoneda_nombre');?></th>
                                                                <th><?=label('tiposMoneda_opciones');?></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    <input type="checkbox" class="filled-in checkbox" id="checkbox_moneda1" />
                                                                    <label for="checkbox_moneda1"></label>
                                                                </td>
                                                                <td>Colón</td>
                                                                <td>
                                                                    <ul id="dropdown-moneda1" class="dropdown-content">
                                                                        <li>
                                                                            <a href="#eliminarTipo" class="-text modal-trigger"><?=label('menuOpciones_eliminar')?></a>
                                                                        </li>
                                                                    </ul>
                                                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-moneda1">
                                                                        <?=label('menuOpciones_seleccionar')?><i class="mdi-navigation-arrow-drop-down"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    <input type="checkbox" class="filled-in checkbox" id="checkbox_moneda2" />
                                                                    <label for="checkbox_moneda2"></label>
                                                                </td>
                                                                <td>Dólar</td>
                                                                <td>
                                                                    <ul id="dropdown-moneda2" class="dropdown-content">
                                                                        <li>
                                                                            <a href="#eliminarTipo" class="-text modal-trigger"><?=label('menuOpciones_eliminar')?></a>
                                                                        </li>
                                                                    </ul>
                                                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-moneda2">
                                                                        <?=label('menuOpciones_seleccionar')?><i class="mdi-navigation-arrow-drop-down"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    <input type="checkbox" class="filled-in checkbox" id="checkbox_moneda3" />
                                                                    <label for="checkbox_moneda3"></label>
                                                                </td>
                                                                <td>Euro</td>
                                                                <td>
                                                                    <ul id="dropdown-moneda3" class="dropdown-content">
                                                                        <li>
                                                                            <a href="#eliminarTipo" class="-text modal-trigger"><?=label('menuOpciones_eliminar')?></a>
                                                                        </li>
                                                                    </ul>
                                                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-moneda3">
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
<div id="eliminarTipo" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?=label('confirmarEliminarTipoMoneda');?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<div id="agregarTipo" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <select>
                <option value="" selected disabled><?=label('tiposMoneda_selecionarUno');?></option>
                <option value="1">Colón</option>
                <option value="2">Dólar</option>
                <option value="3">Euro</option>
                <option value="4">Peso mexicano</option>
            </select>
            <label for="cliente_tipo"><?=label('tiposMoneda_defecto');?></label>
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
        <div id="botonElimnar" title="monedas-tabla-lista">
            <a href="#" class="deleteall waves-effect waves-red btn-flat modal-action modal-close" ><?=label('aceptar');?></a>
        </div>
    </div>
</div>
<!-- Fin lista modals -->