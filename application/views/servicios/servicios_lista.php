<!-- START CONTENT -->

<section id="content">

    <!--start container-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloServicios'); ?></h1>
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
                                                <table id="tabla-servicios-lista"
                                                       class="data-table-information responsive-table display"
                                                       cellspacing="0">
                                                    <div class="agregar_nuevo">
                                                        <a href="<?= base_url() ?>servicios/agregar"
                                                           class="btn btn-default modal-trigger"><?= label('agregar_nuevo'); ?></a>
                                                    </div>
                                                    <thead>
                                                    <tr>
                                                        <th style="text-align: center;">
                                                            <input class="filled-in checkbox checkall" type="checkbox"
                                                                   id="checkbox-all"
                                                                   onclick="toggleChecked(this.checked)"/>
                                                            <label for="checkbox-all"></label>
                                                        </th>
                                                        <th><?= label('Servicio_tablaCodigo'); ?></th>
                                                        <th><?= label('Servicio_tablaNombre'); ?></th>
                                                        <th><?= label('Servicio_tablaDescripcion'); ?></th>
                                                        <th><?= label('Servicio_tablaPrecio'); ?></th>
                                                        <th><?= label('Servicio_tablaOpciones'); ?></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <input type="checkbox" class="filled-in checkbox"
                                                                   id="checkbox_servicio1"/>
                                                            <label for="checkbox_servicio1"></label>
                                                        </td>
                                                        <td>0001</td>
                                                        <td><a href="<?= base_url() ?>servicios/editar">Aplicación
                                                                móvil</a></td>
                                                        <td>Aplicación móvil para SO android</td>
                                                        <td>$500</td>
                                                        <td>
                                                            <ul id="dropdown-servicio1" class="dropdown-content">
                                                                <li>
                                                                    <a href="<?= base_url(); ?>servicios/editar"
                                                                       class="-text"><?= label('menuOpciones_editar') ?></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#eliminarServicio"
                                                                       class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                </li>
                                                            </ul>
                                                            <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                               href="#" data-activates="dropdown-servicio1">
                                                                <?= label('menuOpciones_seleccionar') ?><i
                                                                    class="mdi-navigation-arrow-drop-down"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <input type="checkbox" class="filled-in checkbox"
                                                                   id="checkbox_servicio2"/>
                                                            <label for="checkbox_servicio2"></label>
                                                        </td>
                                                        <td>0002</td>
                                                        <td><a href="<?= base_url() ?>servicios/editar">Hosting</a></td>
                                                        <td>Servicio de hosting por un mes</td>
                                                        <td>$70</td>
                                                        <td>
                                                            <ul id="dropdown-servicio2" class="dropdown-content">
                                                                <li>
                                                                    <a href="<?= base_url(); ?>servicios/editar"
                                                                       class="-text"><?= label('menuOpciones_editar') ?></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#eliminarServicio"
                                                                       class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                </li>
                                                            </ul>
                                                            <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                               href="#" data-activates="dropdown-servicio2">
                                                                <?= label('menuOpciones_seleccionar') ?><i
                                                                    class="mdi-navigation-arrow-drop-down"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <input type="checkbox" class="filled-in checkbox"
                                                                   id="checkbox_servicio3"/>
                                                            <label for="checkbox_servicio3"></label>
                                                        </td>
                                                        <td>0003</td>
                                                        <td><a href="<?= base_url() ?>servicios/editar">Sitio de
                                                                cotizaciones</a></td>
                                                        <td>Sitio de cotizaciones en linea</td>
                                                        <td>$20.000</td>
                                                        <td>
                                                            <ul id="dropdown-servicio3" class="dropdown-content">
                                                                <li>
                                                                    <a href="<?= base_url(); ?>servicios/editar"
                                                                       class="-text"><?= label('menuOpciones_editar') ?></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#eliminarServicio"
                                                                       class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                </li>
                                                            </ul>
                                                            <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                               href="#" data-activates="dropdown-servicio3">
                                                                <?= label('menuOpciones_seleccionar') ?><i
                                                                    class="mdi-navigation-arrow-drop-down"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <div class="tabla-conAgregar">
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
   
        $('#eliminarServicio #botonEliminar').on('click', function () {
           event.preventDefault();
           $.ajax({
                  data: {idEliminar : idEliminar},
                  url:   '<?=base_url()?>servicios/eliminar',
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
                          url:   '<?=base_url()?>servicios/eliminar',
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

    $(document).ready(function () {
        $('#botonEliminar').on("click", function (event) {
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
<div id="eliminarServicio" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarServicio'); ?></p>
    </div>
    <div id="botonEliminar" class="modal-footer black-text">
        <a href="" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
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
        <div id="botonEliminar" class="modal-footer black-text" title="tabla-servicios-lista">
            <a href="#"
               class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>
<!--Fin lista modals -->
