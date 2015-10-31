<!-- START CONTENT -->




<section id="content">

    <!--start container-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloListaCotizaciones'); ?></h1>
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
                                <div class="card" id="listaCotizaciones">
                                    <div id="table-datatables">
                                        <div class="row">
                                            <div class="col s12 m12 l12">
                                                <div class="agregar_nuevo">
                                                    <a href="<?= base_url() ?>cotizacion/cotizar"
                                                       class="btn btn-default"><?= label('agregarCotizacion'); ?></a>
                                                </div>
                                                <div>
                                                    <a id="busqueda-avanzada-agregar" href="#busquedaAvanzada"
                                                       class="modal-trigger"><?= label('clientes_busquedaAvanzada') ?></a>
                                                </div>
                                                <table id="tabla-cotizaciones-lista"
                                                       class="data-table-information responsive-table display"
                                                       cellspacing="0">
                                                    <thead>
                                                    <tr>
                                                        <th style="text-align: center;">
                                                            <input class="filled-in checkbox checkall" type="checkbox"
                                                                   id="checkbox-all"
                                                                   onclick="toggleChecked(this.checked)"/>
                                                            <label for="checkbox-all"></label>
                                                        </th>
                                                        <th><?= label('tablaCotizaciones_codigo'); ?></th>
                                                        <th><?= label('tablaCotizaciones_fecha'); ?></th>
                                                        <th><?= label('tablaCotizaciones_cliente'); ?></th>
                                                        <th><?= label('tablaCotizaciones_monto'); ?></th>
                                                        <th><?= label('tablaCotizaciones_estado'); ?></th>
                                                        <th><?= label('tablaCotizaciones_opciones'); ?></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <input type="checkbox" class="filled-in checkbox"
                                                                   id="checkbox_cotizacion1"/>
                                                            <label for="checkbox_cotizacion1"></label>
                                                        </td>
                                                        <td>MRR-001</td>
                                                        <td>2009/01/12</td>
                                                        <td><a href="<?= base_url() ?>clientes/editar">Dos Pinos</a>
                                                        </td>
                                                        <td>$300</td>
                                                        <td>Finalizada</td>
                                                        <td>
                                                            <ul id="dropdown-cotizacion1" class="dropdown-content">
                                                                <li>
                                                                    <a class="btn_ver modal-trigger icono-edicion"
                                                                       href="<?= base_url() ?>cotizacion/ver">
                                                                        <?= label('tablaCotizaciones_opcionVer') ?>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn_duplicar modal-trigger icono-edicion"
                                                                       href="#duplicar">
                                                                        <?= label('tablaCotizaciones_opcionDuplicar') ?>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn_editar icono-edicion"
                                                                       href="<?= base_url() ?>cotizacion/cotizar">
                                                                        <?= label('tablaCotizaciones_opcionEditar') ?>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn_eliminar modal-trigger icono-edicion"
                                                                       href="#eliminar">
                                                                        <?= label('tablaCotizaciones_opcionEliminar') ?>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                               href="#" data-activates="dropdown-cotizacion1">
                                                                <?= label('menuOpciones_seleccionar') ?><i
                                                                    class="mdi-navigation-arrow-drop-down"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <input type="checkbox" class="filled-in checkbox"
                                                                   id="checkbox_cotizacion2"/>
                                                            <label for="checkbox_cotizacion2"></label>
                                                        </td>
                                                        <td>MRR-002</td>
                                                        <td>2015/01/12</td>
                                                        <td><a href="<?= base_url() ?>clientes/editar">Juan Carlos
                                                                Rojas</a></td>
                                                        <td>$100</td>
                                                        <td>Enviada</td>
                                                        <td>
                                                            <ul id="dropdown-cotizacion2" class="dropdown-content">
                                                                <li>
                                                                    <a class="btn_ver modal-trigger icono-edicion"
                                                                       href="<?= base_url() ?>cotizacion/ver">
                                                                        <?= label('tablaCotizaciones_opcionVer') ?>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn_duplicar modal-trigger icono-edicion"
                                                                       href="#duplicar">
                                                                        <?= label('tablaCotizaciones_opcionDuplicar') ?>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn_editar icono-edicion"
                                                                       href="<?= base_url() ?>cotizacion/cotizar">
                                                                        <?= label('tablaCotizaciones_opcionEditar') ?>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn_eliminar modal-trigger icono-edicion"
                                                                       href="#finalizar">
                                                                        <?= label('tablaCotizaciones_opcionFinalizar') ?>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn_ver icono-edicion"
                                                                       href="<?= base_url() ?>cotizacion/cotizar">
                                                                        <?= label('tablaCotizaciones_opcionEliminar') ?>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                               href="#" data-activates="dropdown-cotizacion2">
                                                                <?= label('menuOpciones_seleccionar') ?><i
                                                                    class="mdi-navigation-arrow-drop-down"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <input type="checkbox" class="filled-in checkbox"
                                                                   id="checkbox_cotizacion3"/>
                                                            <label for="checkbox_cotizacion3"></label>
                                                        </td>
                                                        <td>MRR-003</td>
                                                        <td>2015/01/13</td>
                                                        <td><a href="<?= base_url() ?>clientes/editar">Juan Castro</a>
                                                        </td>
                                                        <td>$600</td>
                                                        <td>Enviada</td>
                                                        <td>
                                                            <ul id="dropdown-cotizacion3" class="dropdown-content">
                                                                <li>
                                                                    <a class="btn_ver modal-trigger icono-edicion"
                                                                       href="<?= base_url() ?>cotizacion/ver">
                                                                        <?= label('tablaCotizaciones_opcionVer') ?>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn_duplicar modal-trigger icono-edicion"
                                                                       href="#duplicar">
                                                                        <?= label('tablaCotizaciones_opcionDuplicar') ?>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn_editar icono-edicion"
                                                                       href="<?= base_url() ?>cotizacion/cotizar">
                                                                        <?= label('tablaCotizaciones_opcionEditar') ?>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn_eliminar modal-trigger icono-edicion"
                                                                       href="#finalizar">
                                                                        <?= label('tablaCotizaciones_opcionFinalizar') ?>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn_ver icono-edicion"
                                                                       href="<?= base_url() ?>cotizacion/cotizar">
                                                                        <?= label('tablaCotizaciones_opcionEliminar') ?>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                               href="#" data-activates="dropdown-cotizacion3">
                                                                <?= label('menuOpciones_seleccionar') ?><i
                                                                    class="mdi-navigation-arrow-drop-down"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <input type="checkbox" class="filled-in checkbox"
                                                                   id="checkbox_cotizacion4"/>
                                                            <label for="checkbox_cotizacion4"></label>
                                                        </td>
                                                        <td>MRR-004</td>
                                                        <td>2015/01/14</td>
                                                        <td><a href="<?= base_url() ?>clientes/editar">Carlos Rojas</a>
                                                        </td>
                                                        <td>$520</td>
                                                        <td>Finalizada</td>
                                                        <td>
                                                            <ul id="dropdown-cotizacion4" class="dropdown-content">
                                                                <li>
                                                                    <a class="btn_ver modal-trigger icono-edicion"
                                                                       href="<?= base_url() ?>cotizacion/ver">
                                                                        <?= label('tablaCotizaciones_opcionVer') ?>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn_duplicar modal-trigger icono-edicion"
                                                                       href="#duplicar">
                                                                        <?= label('tablaCotizaciones_opcionDuplicar') ?>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn_editar icono-edicion"
                                                                       href="<?= base_url() ?>cotizacion/cotizar">
                                                                        <?= label('tablaCotizaciones_opcionEditar') ?>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn_ver icono-edicion"
                                                                       href="<?= base_url() ?>cotizacion/cotizar">
                                                                        <?= label('tablaCotizaciones_opcionEliminar') ?>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                               href="#" data-activates="dropdown-cotizacion4">
                                                                <?= label('menuOpciones_seleccionar') ?><i
                                                                    class="mdi-navigation-arrow-drop-down"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <input type="checkbox" class="filled-in checkbox"
                                                                   id="checkbox_cotizacion5"/>
                                                            <label for="checkbox_cotizacion5"></label>
                                                        </td>
                                                        <td>MRR-005</td>
                                                        <td>2015/01/15</td>
                                                        <td><a href="<?= base_url() ?>clientes/editar">Mario Rojas</a>
                                                        </td>
                                                        <td>$900</td>
                                                        <td>Enviada</td>
                                                        <td>
                                                            <ul id="dropdown-cotizacion5" class="dropdown-content">
                                                                <li>
                                                                    <a class="btn_ver modal-trigger icono-edicion"
                                                                       href="<?= base_url() ?>cotizacion/ver">
                                                                        <?= label('tablaCotizaciones_opcionVer') ?>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn_duplicar modal-trigger icono-edicion"
                                                                       href="#duplicar">
                                                                        <?= label('tablaCotizaciones_opcionDuplicar') ?>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn_editar icono-edicion"
                                                                       href="<?= base_url() ?>cotizacion/cotizar">
                                                                        <?= label('tablaCotizaciones_opcionEditar') ?>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn_eliminar modal-trigger icono-edicion"
                                                                       href="#finalizar">
                                                                        <?= label('tablaCotizaciones_opcionFinalizar') ?>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn_ver icono-edicion"
                                                                       href="#eliminar">
                                                                        <?= label('tablaCotizaciones_opcionEliminar') ?>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                               href="#" data-activates="dropdown-cotizacion5">
                                                                <?= label('menuOpciones_seleccionar') ?><i
                                                                    class="mdi-navigation-arrow-drop-down"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>

                                                <?php
                                                $this->load->view('layout/default/menu-descargar.php');
                                                ?>

                                                <div class="tabla-conAgregar tabla-busqueda-reporte">
                                                    <a id="opciones-seleccionados-print"
                                                       class="waves-effect black-text opciones-seleccionados option-print-table"
                                                       style="visibility: hidden;"
                                                       href="#" data-toggle="tooltip"
                                                       title="<?= label('opciones_seleccionadosImprimir') ?>">
                                                        <i class="mdi-action-print icono-opciones-varios"></i>
                                                    </a>
                                                    <ul id="dropdown-exportar" class="dropdown-content">
                                                        <li>
                                                            <a href="#"
                                                               class="-text"><?= label('opciones_seleccionadosExportarPdf') ?></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                               class="-text"><?= label('opciones_seleccionadosExportarExcel') ?></a>
                                                        </li>
                                                    </ul>
                                                    <a id="opciones-seleccionados-export"
                                                       class="boton-opciones black-text dropdown-button option-export-table"
                                                       href="#" data-toggle="tooltip"
                                                       title="<?= label('opciones_seleccionadosExportar') ?>"
                                                       data-activates="dropdown-exportar">
                                                        <i class="mdi-file-file-download icono-opciones-varios"></i>
                                                    </a>
                                                    <a id="opciones-seleccionados-delete"
                                                       class="modal-trigger waves-effect black-text opciones-seleccionados option-delete-elements"
                                                       style="visibility: hidden;"
                                                       href="#eliminarElementosSeleccionados" data-toggle="tooltip"
                                                       title="<?= label('opciones_seleccionadosEliminar') ?>">
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
    $(document).on("ready", function () { 
   
       <?php
      if (isset($lista)) {
          if ($lista === false) {?>
   
                $('#linkModalErrorCargarDatos').click();
   
           <?php
      }
      }
      ?>
         
   
       var idEliminar = 0;
       var filaEliminar = null;
   
       $(document).on('click','.confirmarEliminar', function () {
           idEliminar = $(this).data('id-eliminar');
           filaEliminar = $(this).parents('tr');
           
       });
   
        $('#eliminarCotizacion #botonEliminar').on('click', function () {
           event.preventDefault();
           $.ajax({
                  data: {idEliminar : idEliminar},
                  url:   '<?=base_url()?>cotizacion/eliminar',
                  type:  'post',
                  // beforeSend: function () {
                  //         $("#resultado").html("Procesando, espere por favor...");
                  // },
                  success:  function (response) {
                   if (response==1) {
                       filaEliminar.fadeOut(function () {
                       filaEliminar.remove();
                       verificarChecks();
                       });
                       
                   } else{
                       $('#linkModalErrorEliminar').click();
                   };
               }
           });
        });
   });

    $(document).ready(function () {
       $('#eliminarElementosSeleccionados #botonEliminar').on("click", function (event) {
           var tb = $(this).attr('title');
           var sel = false;
           var ch = $('#' + tb).find('tbody input[type=checkbox]');
           var marcados = $('.checkbox:checked').not('#checkbox-all').size();
           var contadorErrores = 0;
           var contadorTotal = 0;
           ch.each(function () {
               var $this = $(this);
               if ($this.is(':checked')) {
                   sel = true;
                    var fila = $this.parents('tr');
                   // var idEliminar = $this.parents('tr').attr('data-idElemento');
                   var idEliminar = $this.attr('id');
                   $.ajax({
                          data: {idEliminar : idEliminar},
                          url:   '<?=base_url()?>cotizacion/eliminar',
                          type:  'post',
                          success:  function (response) {

                           contadorTotal++;
                           if (response==1) {
                              fila.fadeOut(function () {
                               fila.remove();
                               verificarChecks();
                               });
                           } else{ 
                            contadorErrores++;
                           };
                            if (contadorTotal == marcados) {
                                if (contadorErrores != 0) {
                                    $('#linkModalErrorEliminar').click();
                                } 
                              
                            };
                       }
                   });
  
               }
           });
            
           return false;
   
       });
   });

    $(document).ready(function () {
         $(document).on('click','.checkbox',function (event) {
             verificarChecks();
         });
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

    $(document).ready( function () {
        $('#tabla-cotizaciones-lista').dataTable( {
            'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [0, -1] /* 1st one, start by the right */
            }]
        });
        $('table#tabla-cotizaciones-lista thead th:first').removeClass('sorting_asc').addClass('sorting_disabled');
        $('table#tabla-cotizaciones-lista thead th:nth-child(2)').removeClass('sorting').addClass('sorting_asc');
    });
    $(document).ready(function () {
        $('#checkbox-all').click(function (event) {
            var $this = $(this);
            var tableBody = $('#tabla-cotizaciones-lista').find('tbody tr[role=row] input[type=checkbox]');
            tableBody.each(function() {
                var check = $(this);
                if ($this.is(':checked')) {
                    check.prop('checked', true);
                } else {
                    check.prop('checked', false);
                }
            });
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
          $('.boton-opciones').sideNav({
          // menuWidth: 0, // Default is 240
           edge: 'right', // Choose the horizontal origin
              closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
            }
          );

          $('.dropdown-button').dropdown({
              inDuration: 300,
              outDuration: 225,
              constrain_width: true, // Does not change width of dropdown to that of the activator
              hover: false, // Activate on hover
              gutter: 0, // Spacing from edge
              belowOrigin: true, // Displays dropdown below the button
              alignment: 'left' // Displays dropdown with edge aligned to the left of button
            }
          );
    });
</script>

<!-- lista modals -->
<div id="eliminar" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarCotizacion'); ?></p>
    </div>
    <div id="botonEliminar" class="modal-footer">
        <a href="" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="finalizar" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarFinalizarCotizacion'); ?></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="duplicar" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarDuplicarCotizacion'); ?></p>
    </div>
    <div class="modal-footer">
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
        <div id="botonEliminar" title="tabla-cotizaciones-lista">
            <a href="#"
               class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>
<div id="busquedaAvanzada" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div id="formGeneral" class="section">
            <div class="row">
                <div class="input-field col s12 m3 l3">
                    <div class="input-field col s12">
                        <input id="busqueda-fecha-desde" type="text" class="datepicker-fecha">
                        <label for="busqueda-fecha-desde" class=""><?= label('clientes_busquedaDesde') ?></label>
                    </div>
                </div>
                <div class="input-field col s12 m3 l3">
                    <div class="input-field col s12">
                        <input id="busqueda-fecha-hasta" type="text" class="datepicker-fecha">
                        <label for="busqueda-fecha-hasta" class=""><?= label('clientes_busquedaHasta') ?></label>
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
                    <label>Estado</label>
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
                        <option value="3">Ana Bola�os Rojas</option>
                    </select>
                    <label>Vendedores</label>
                </div>
                <div class="input-field col s12 m4 l4">
                    <select id="reporte-cliente" class="input-field col s12">
                        <!--                                     <option value="" disabled selected>Outsourcing</option>-->
                        <option value="1" selected>Todos</option>
                        <option value="2">Transportes Rojas</option>
                        <option value="3">M�sica en vivo</option>
                    </select>
                    <label for="reporte-cliente">Proveedores</label>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<!--Fin lista modals -->