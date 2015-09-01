<!-- START CONTENT -->

<section id="content">

    <!--start container-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloEmpleados'); ?></h1>

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
                                                <table id="empleados-tabla-lista"
                                                       class="data-table-information responsive-table display"
                                                       cellspacing="0">
                                                    <div class="agregar_nuevo">
                                                        <a href="<?= base_url() ?>empleados/agregar"
                                                           class="btn btn-default"><?= label('agregar_nuevo'); ?></a>
                                                    </div>
                                                    <thead>
                                                    <tr>
                                                        <th style="text-align: center;">
                                                            <input class="filled-in checkbox checkall" type="checkbox"
                                                                   id="checkbox-all"
                                                                   onclick="toggleChecked(this.checked)"/>
                                                            <label for="checkbox-all"></label>
                                                        </th>
                                                        <th><?= label('Empleado_tablaCodigo'); ?></th>
                                                        <th><?= label('Empleado_tablaNombre'); ?></th>
                                                        <th><?= label('Empleado_tablaIdentificacion'); ?></th>
                                                        <th><?= label('Empleado_tablaPalabras'); ?></th>
                                                        <th><?= label('Empleado_tablaOpciones'); ?></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php
                                                    // if (isset($lista)) {
                                                        $contador = 0;
                                                        // foreach ($lista as $fila) {
                                                            ?>
                                                            <!-- <tr>
                                                                <td style="text-align: center;">
                                                                    <input type="checkbox" class="filled-in checkbox"
                                                                           id="checkbox_empleado1"/>
                                                                    <label for="checkbox_empleado1"></label>
                                                                </td>
                                                                <td><?= $fila->codigo ?></td>
                                                                <td>
                                                                    <a href="<?= base_url() ?>empleados/editar/<?= encryptIt($fila->idEmpleado) ?>"><?= $fila->nombreCompleto ?></a>
                                                                </td>
                                                                <td><?= $fila->identificacion ?></td>
                                                                <td>Programador, Bases de datos</td>
                                                                <td>
                                                                    <ul id="dropdown-empleado<?= $contador ?>"
                                                                        class="dropdown-content">
                                                                        <li>
                                                                            <a href="<?= base_url() ?>empleados/editar/<?= encryptIt($fila->idEmpleado) ?>"
                                                                               class="-text"><?= label('menuOpciones_editar') ?></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#eliminarEmpleado"
                                                                               class="-text modal-trigger confirmarEliminar"
                                                                               data-id-eliminar="<?= encryptIt($fila->idEmpleado) ?>"><?= label('menuOpciones_eliminar') ?></a>
                                                                        </li>
                                                                    </ul>
                                                                    <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                                       href="#!"
                                                                       data-activates="dropdown-empleado<?= $contador++ ?>">
                                                                        <?= label('menuOpciones_seleccionar') ?><i
                                                                            class="mdi-navigation-arrow-drop-down"></i>
                                                                    </a>
                                                                </td>
                                                            </tr> -->
                                                            

                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox" id="checkbox_empleado2" />
                                                                <label for="checkbox_empleado2"></label>
                                                            </td>
                                                            <td>0002</td>
                                                            <td><a href="<?= base_url() ?>empleados/editar">Brayan Núñez R.</a></td>
                                                            <td>2-245-678</td>
                                                            <td>Programador, Bases de datos</td>
                                                            <td>
                                                                <ul id="dropdown-empleado2" class="dropdown-content">
                                                                    <li>
                                                                        <a href="<?= base_url(); ?>empleados/editar" class="-text"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarEmpleado" class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-empleado2">
                                                                    <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox" id="checkbox_empleado3" />
                                                                <label for="checkbox_empleado3"></label>
                                                            </td>
                                                            <td>0003</td>
                                                            <td><a href="<?= base_url() ?>empleados/editar">Sebastián Rodríguez B.</a></td>
                                                            <td>2-723-327</td>
                                                            <td>Programador, Bases de datos</td>
                                                            <td>
                                                                <ul id="dropdown-empleado3" class="dropdown-content">
                                                                    <li>
                                                                        <a href="<?= base_url(); ?>empleados/editar" class="-text"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarEmpleado" class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-empleado3">
                                                                    <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align: center;">
                                                                <input type="checkbox" class="filled-in checkbox" id="checkbox_empleado4" />
                                                                <label for="checkbox_empleado4"></label>
                                                            </td>
                                                            <td>0004</td>
                                                            <td><a href="<?= base_url() ?>empleados/editar">Claret Rojas C.</a></td>
                                                            <td>2-897-231</td>
                                                            <td>Programador, Bases de datos</td>
                                                            <td>
                                                                <ul id="dropdown-empleado4" class="dropdown-content">
                                                                    <li>
                                                                        <a href="<?= base_url(); ?>empleados/editar" class="-text"><?= label('menuOpciones_editar') ?></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#eliminarEmpleado" class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="boton-opciones btn-flat dropdown-button waves-effect white-text" href="#!" data-activates="dropdown-empleado4">
                                                                    <?= label('menuOpciones_seleccionar') ?><i class="mdi-navigation-arrow-drop-down"></i>
                                                                </a>
                                                            </td>
                                                        </tr> 
                                                            <?php
                                                        // }
                                                    // }
                                                    ?>

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


<!-- script para agregar link al boton aceptar del modal -->
<script type="text/javascript">
    $(document).on("ready", function () { 

        var idEliminar = 0;

        $('.confirmarEliminar').on('click', function () {
            idEliminar = $(this).data('id-eliminar');
            // idEliminar = id;
            // $('#eliminarEmpleado #botonEliminar a').attr('href', "<?=base_url()?>empleados/eliminar/" + id);
        });

         $('#eliminarEmpleado #botonEliminar').on('click', function () {
            event.preventDefault();
            // alert(idEliminar);
            $.ajax({
                   data: {idEliminar : idEliminar},
                   url:   '<?=base_url()?>empleados/eliminar',
                   type:  'post',
                   // beforeSend: function () {
                   //         $("#resultado").html("Procesando, espere por favor...");
                   // },
                   success:  function (response) {
                           alert(response);
                   }
            });
         });




    });

</script>


<script>
    $(window).load(function () {
        var marcados = $('.checkbox:checked').size();
        if (marcados >= 1) {
            var elems = document.getElementsByClassName('opciones-seleccionados');
            var e;
            for (e in elems) {
//                elems[e].style.display = 'block';
                elems[e].style.visibility = 'visible';
//                elems[e].css('visibility', 'visible');
            }
        } else {
            var elems = document.getElementsByClassName('opciones-seleccionados');
            var e;
            for (e in elems) {
//                elems[e].style.display = 'none';
                elems[e].style.visibility = 'hidden';
//                elems[e].css('visibility', 'hidden');
            }
        }
        document.getElementById('checkbox-all').checked = false;
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
//                    elems[e].style.display = 'block';
                    elems[e].style.visibility = 'visible';
//                elems[e].css('visibility', 'visible');
                }
            } else {
                var elems = document.getElementsByClassName('opciones-seleccionados');
                var e;
                for (e in elems) {
//                    elems[e].style.display = 'none';
                    elems[e].style.visibility = 'hidden';
//                elems[e].css('visibility', 'hidden');
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
<div id="eliminarEmpleado" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarEmpleado'); ?></p>
    </div>
    <!-- <div id="botonEliminar" class="modal-footer black-text"> -->
        <a href="" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    <!-- </div> -->
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
        <div id="botonEliminar" class="modal-footer black-text" title="empleados-tabla-lista">
            <a href="#"
               class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>
<!--Fin lista modals -->
