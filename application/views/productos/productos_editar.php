<!-- START CONTENT  -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloFormularioProductoEditar'); ?></h1>
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
                                            <input id="producto_codigo" type="text" value="0001">
                                            <label for="producto_codigo"><?= label('formProducto_codigo'); ?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="producto_nombre" type="text" value="Arroz">
                                            <label for="producto_nombre"><?= label('formProducto_nombre'); ?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <textarea id="producto_descripcion" class="materialize-textarea"
                                                      length="120">Esta es la descripción</textarea>
                                            <label
                                                for="producto_descripcion"><?= label('formProducto_descripcion'); ?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="producto_precio" type="text" value="$2">
                                            <label for="producto_precio"><?= label('formProducto_precio'); ?></label>
                                        </div>
                                        <div class="inputTag col s12">
                                            <label for="impuestosProducto"><?= label('formProducto_impuestos'); ?></label>
                                            <br>
                                            <div id="impuestosProducto" class="example tags_Impuestos">
                                                <div class="bs-example">
                                                    <input placeholder="<?= label('formProducto_anadirImpuesto'); ?>" type="text"/>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="input-field col s12">
                                            <br/>
                                            <label for="producto_imagen"><?= label('formProducto_imagen'); ?></label>

                                            <div class="file-field input-field col s12">
                                                <input class="file-path validate" type="text"/>

                                                <div class="btn" data-toggle="tooltip" title="<?= label('examinar') ?>">
                                                    <span><i class="mdi-action-search"></i></span>
                                                    <input type="file"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-field col s12">
                                            <label><?= label('formProducto_caracteristicas'); ?></label>
                                            <br/>
                                            <br/>
                                            <table id="producto1-caracteristicas" class="table striped">
                                                <thead>
                                                <tr>
                                                    <th style="text-align: center;">
                                                        <input class="filled-in checkbox checkall" type="checkbox"
                                                               id="checkbox-all" onclick="toggleChecked(this.checked)"/>
                                                        <label for="checkbox-all"></label>
                                                    </th>
                                                    <th><?= label('formProducto_caracteristicasDescripcion'); ?></th>
                                                    <th><?= label('formProducto_caracteristicasOpciones'); ?></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td style="text-align: center;">
                                                        <input type="checkbox" class="filled-in checkbox"
                                                               id="checkbox_producto1_caracteristica1"/>
                                                        <label for="checkbox_producto1_caracteristica1"></label>
                                                    </td>
                                                    <td>Pantalla 35"</td>
                                                    <td>
                                                        <ul id="dropdown-producto1-caracteristica1"
                                                            class="dropdown-content">
                                                            <li>
                                                                <a href="#editarCaracteristica"
                                                                   class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                                            </li>
                                                            <li>
                                                                <a href="#eliminarCaracteristica"
                                                                   class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                            </li>
                                                        </ul>
                                                        <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                           href="#!"
                                                           data-activates="dropdown-producto1-caracteristica1">
                                                            <?= label('menuOpciones_seleccionar') ?><i
                                                                class="mdi-navigation-arrow-drop-down"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">
                                                        <input type="checkbox" class="filled-in checkbox"
                                                               id="checkbox_producto1_caracteristica2"/>
                                                        <label for="checkbox_producto1_caracteristica2"></label>
                                                    </td>
                                                    <td>HDD 2TB</td>
                                                    <td>
                                                        <ul id="dropdown-producto1-caracteristica2"
                                                            class="dropdown-content">
                                                            <li>
                                                                <a href="#editarCaracteristica"
                                                                   class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                                            </li>
                                                            <li>
                                                                <a href="#eliminarCaracteristica"
                                                                   class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                            </li>
                                                        </ul>
                                                        <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                           href="#!"
                                                           data-activates="dropdown-producto1-caracteristica2">
                                                            <?= label('menuOpciones_seleccionar') ?><i
                                                                class="mdi-navigation-arrow-drop-down"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: center;">
                                                        <input type="checkbox" class="filled-in checkbox"
                                                               id="checkbox_producto1_caracteristica3"/>
                                                        <label for="checkbox_producto1_caracteristica3"></label>
                                                    </td>
                                                    <td>Procesador Intel Core I7</td>
                                                    <td>
                                                        <ul id="dropdown-producto1-caracteristica3"
                                                            class="dropdown-content">
                                                            <li>
                                                                <a href="#editarCaracteristica"
                                                                   class="-text modal-trigger"><?= label('menuOpciones_editar') ?></a>
                                                            </li>
                                                            <li>
                                                                <a href="#eliminarCaracteristica"
                                                                   class="-text modal-trigger"><?= label('menuOpciones_eliminar') ?></a>
                                                            </li>
                                                        </ul>
                                                        <a class="boton-opciones btn-flat dropdown-button waves-effect white-text"
                                                           href="#!"
                                                           data-activates="dropdown-producto1-caracteristica3">
                                                            <?= label('menuOpciones_seleccionar') ?><i
                                                                class="mdi-navigation-arrow-drop-down"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <br/>

                                            <div>
                                                <a href="#agregarCaracteristica"
                                                   class="btn btn-default modal-trigger"><?= label('formProducto_nuevaCaracteristica') ?></a>

                                                <div class="tabla-conAgregar tabla-caracteristicas-producto">
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
                                                    name="action"><?= label('formProducto_editar'); ?>
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
</section>
<!-- END CONTENT-->

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

<script>
    $(document).ready(function () {

        var Impuestos = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // prefetch: 'http://localhost/Proyectos/touch/assets/dashboard/js/json/Impuestos.json'
            prefetch: {
                url: '<?=base_url()?>Cotizacion/jsonImpuestos',
                ttl: 1000
            }
        });

        Impuestos.initialize();

        elt = $('.tags_Impuestos > > input');
        elt.tagsinput({
            itemValue: 'value',
            itemText: 'text',
            typeaheadjs: {
                name: 'Impuestos',
                displayKey: 'text',
                source: Impuestos.ttAdapter()
            }
        });

        elt.tagsinput('add', {"value": 1, "text": "Impuestos directos", "continent": "Europe"});
        elt.tagsinput('add', {"value": 2, "text": "Impuestos indirectos", "continent": "America"});
    });
</script>

<!-- lista modals -->
<div id="agregarCaracteristica" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <textarea id="caracteristica_descripcion" class="materialize-textarea" length="120"></textarea>
            <label for="caracteristica_descripcion"><?= label('formProducto_caracteristicasDescripcion'); ?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="editarCaracteristica" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <textarea id="caracteristica_descripcion" class="materialize-textarea"
                      length="120">Pantalla de 35"</textarea>
            <label for="caracteristica_descripcion"><?= label('formProducto_caracteristicasDescripcion'); ?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="eliminarCaracteristica" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarCaracteristica'); ?></p>
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
        <div id="botonElimnar" title="producto1-caracteristicas">
            <a href="#"
               class="deleteall waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>
<!-- Fin lista modals -->