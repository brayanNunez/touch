<script type="text/javascript">
    $(document).ready(function() {
        $('#slider-contactos').liquidcarousel({height:275, duration:700, hidearrows:false});
    });
</script>

<div class="col s12 tab-informacion-ver">
    <?php
        $empleado = '';
        $juridico = '';
        $tipo = '';
        $tipoProveedor = '';
        $identificacion = '';
        $nacionalidad = '';
        $nombre = '';
        $nombreFantasia = '';
        $correo = '';
        $telefonoFijo = '';
        $telefonoMovil = '';
        $fax = '';
        $fechaNacimiento = '';
        $descripcion = '';
        $pais = '';
        $provincia = '';
        $canton = '';
        $domicilio = '';
        $palabras = '';
        $ruta = base_url().'files/empresas/';
        if(isset($resultado)) {
            $empleado = $resultado['empleado'];
            $juridico = $resultado['juridico'];
            $identificacion = $resultado['identificacion'];
            $nacionalidad = $resultado['paisNacionalidad'];//Falta jalarlo de la bd
            $correo = $resultado['correo'];
            $telefonoFijo = $resultado['telefonoFijo'];
            $descripcion = $resultado['descripcion'];
            $pais = $resultado['pais'];
            $provincia = $resultado['provincia'];
            $canton = $resultado['canton'];
            $domicilio = $resultado['domicilio'];
            foreach($resultado['palabras'] as $palabra) {
                if($palabras != '') {
                    $palabras.= ', '.$palabra['descripcion'];
                } else {
                    $palabras.= $palabra['descripcion'];
                }
            }
            if($empleado) {
                $tipo = 'Empleado';
                $tipoProveedor = 'Fisico';
                $nombre = $resultado['nombre'].' '.$resultado['primerApellido'].' '.$resultado['segundoApellido'];
                $telefonoMovil = $resultado['telefonoMovil'];
                $fechaNacimiento = date('d/m/Y', strtotime($resultado['fechaNacimiento']));
            } else {
                $tipo = 'Proveedor';
                $nombre = $resultado['nombre'];
                $nombreFantasia = $resultado['nombreFantasia'];
                if($juridico){
                    $tipoProveedor = 'Juridico';
                    $fax = $resultado['fax'];
                } else {
                    $tipoProveedor = 'Fisico';
                    $telefonoMovil = $resultado['telefonoMovil'];
                }
            }
            if($resultado['fotografia'] != '') {
                $ruta .= $resultado['idEmpresa'].'/proveedores/'.$resultado['idProveedor'].'/'.$resultado['fotografia'];
            } else {
                $ruta = base_url().'files/default-user-image.png';
            }
        } else {
            $ruta = base_url().'files/default-user-image.png';
        }
    ?>
    <div class="row">
        <div class="col s12">
            <div class="col s12 m12 l3">
                <div class="proveedor-ver-logo">
                    <img id="imagen_perfil_usuario_ver" src="<?= $ruta; ?>" />
                </div>
            </div>
            <div class="col s12 m8 l5">
                <h4><?= $nombre; ?></h4>
                <p><span class="informacion-proveedor"><?= label('formProveedor_identificacion'); ?></span>. <?= $identificacion; ?></p>
                <p><span class="informacion-proveedor"><?= label('formProveedor_nacionalidad'); ?></span>: <?= $nacionalidad; ?></p>
                <?php
                    if($empleado) { ?>
                        <p><span class="informacion-proveedor"><?= label('formProveedor_fechaNacimiento'); ?></span>: <?= $fechaNacimiento; ?></p>
                <?php
                    } ?>
                <p><span class="informacion-proveedor"><?= label('formProveedor_telefono'); ?></span>: <?= $telefonoFijo; ?></p>
                <?php
                    if($juridico) { ?>
                        <p><span class="informacion-proveedor"><?= label('formProveedor_fax'); ?></span>: <?= $fax; ?></p>
                <?php
                    } else { ?>
                        <p><span class="informacion-proveedor"><?= label('formProveedor_telefonoMovil'); ?></span>: <?= $telefonoMovil; ?></p>
                <?php
                    }?>
                <p><span class="informacion-proveedor"><?= label('formProveedor_correo'); ?></span>: <?= $correo; ?></p>
                <p><span class="informacion-proveedor"><?= label('formProveedor_descripcion'); ?></span>: <?= $descripcion; ?></p>
            </div>
            <div class="col s12 m4 l4">
                <?php
                    if(!$empleado && $juridico) {
                ?>
                <div><h4><?= $nombreFantasia; ?></h4></div>
                <?php
                    }
                ?>
                <div>
                    <h5><?= label('formProveedor_direccion'); ?></h5>
                    <p><?= $pais.', '.$provincia; ?></p>
                    <p><?= $canton.', '.$domicilio; ?></p>
                </div>
                <div style="margin-top: 25px;">
                    <h5><?= label('formProveedor_palabrasClaveAsociadas'); ?>:</h5>
                    <p><?= $palabras; ?></p>
                </div>
            </div>
        </div>

        <div class="col s12" style="margin-top: 20px;">
            <ul class="tabs tab-demo-active z-depth-1 proveedor-info tags-secundarios">
                <li class="tab-interior tab col s3">
                    <a class="white-text darken-1 waves-effect waves-light"
                       id="cliente-informacion" href="#tab-contactos"><i
                            class="mdi-communication-contacts"></i>
                        <?= label('formProveedor_contactos'); ?></a>
                </li>
                <li class="tab-interior tab col s3">
                    <a class="white-text darken-1 waves-effect waves-light"
                       id="cliente-informacion" href="#tab-infoAdicional"><i
                            class="mdi-av-queue"></i>
                        <?= label('formProveedor_infoCotizacion'); ?></a>
                </li>
            </ul>
        </div>

        <div class="col s12">
            <div id="tab-contactos" class="card col s12" style="padding: 0;">
                <div id="slider-contactos" class="liquid">
                    <span id="btn-previous" class="previous" title="Elementos anteriores">
                        <img src="<?= base_url(); ?>assets/img/lightbox/img_prev.png">
                    </span>
                    <div class="wrapper">
                        <ul>
                            <?php
                                if(isset($resultado['contactos'])) {
                                    $contactos = $resultado['contactos'];
                                    if($contactos != false) {
                                        foreach ($contactos as $contacto) {
                            ?>
                                            <li>
                                                <div class="info-contacto">
                                                    <div>
                                                        <h5><?= $contacto['nombre'].' '.$contacto['primerApellido'].' '.$contacto['segundoApellido'] ?></h5>
                                                        <p><?= $contacto['puesto']; ?></p>
                                                        <p><?= $contacto['correo']; ?></p>
                                                        <p>Tel. <?= $contacto['telefono']; ?></p>
                                                        <div class="contacto-opciones">
                                                            <a href="#editarContacto" class="modal-trigger"
                                                               title="<?= label('formProveedor_contactoEditar') ?>">
                                                                <i class="mdi-editor-mode-edit"></i>
                                                            </a>
                                                            <a href="#" title="<?= label('formProveedor_contactoDescargar')?>">
                                                                <i class="mdi-file-file-download"></i>
                                                            </a>
                                                            <a href="#eliminarContacto" class="modal-trigger" title="<?= label('formProveedor_contactoEliminar')?>">
                                                                <i class="mdi-action-delete"></i>
                                                            </a>
                                                        </div>
<!--                                                        El principal se pone con la clase es-principal-->
                                                        <div class="contacto-principal">
                                                            <a href="#cambiarPrincipal" class="modal-trigger" title="<?= label('formProveedor_contactoPrincipal') ?>">
                                                                <i class="mdi-action-done"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                            <?php
                                        }
                                    }
                                }
                            ?>
                        </ul>
                    </div>
                    <span id="btn-next" class="next" title="Elementos siguientes">
                        <img src="<?= base_url(); ?>assets/img/lightbox/img_next.png">
                    </span>
                </div>
            </div>
            <div id="tab-infoAdicional" class="card col s12">
                <div class="table-responsive">
                    <h5>Presupuesto promedio del proveedor</h5>
                    <p>* Exclusivo para proveedores de servicios, no tiene fines contables</p>
                    <table id="proveedor1-presupuestos" class="striped">
                        <thead>
                            <tr>
                                <th style="width: 30%;"><?= label('formProveedor_salariosTipo'); ?></th>
                                <th><?= label('formProveedor_salariosMonto'); ?></th>
                                <th><?= label('formProveedor_salariosPorDefecto'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Por hora</td>
                                <td>$10</td>
                                <td><i class="mdi-action-done"></i></td>
                            </tr>
                            <tr>
                                <td>Diario</td>
                                <td>$80</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Mensual</td>
                                <td>$1400</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(window).load(function () {
        document.getElementById('btn-previous').style.visibility = 'hidden';

        var slider = $('#slider-contactos');
        var wrapper = slider.find('div').first().css('width');
        var wrapperw = wrapper.substring(0, wrapper.length-2);
        var wrapperwn = parseInt(wrapperw);

        var lista = slider.find('ul li');
        var numero = lista.size();
        var primero = lista.first();
        var primerow = primero.css('width');
        var primerom = primero.css('margin-left');
        var primerowv = primerow.substring(0, primerow.length-2);
        var primeromv = primerom.substring(0, primerom.length-2);
        var primeroT = parseInt(primerowv) + 2*parseInt(primeromv);

        var wlis = parseInt(wrapperwn/primeroT);
        var wx = wrapperwn%primeroT;
        var falta = wx/(wlis*2);
        if(falta == 0) {
        } else {
            lista.each(function() {
                var $this = $(this);
                var newv = parseInt(primerom) + falta;
                $this.css('margin-left', newv);
                $this.css('margin-right', newv);
            });
        }

        var total = primeroT * numero;

        if(wrapperwn >= total) {
            document.getElementById('btn-next').style.visibility = 'hidden';
        } else {
            document.getElementById('btn-next').style.visibility = 'visible';
        }
    });
    $(document).ready(function () {
        $('.previous').on("click", function (event) {
            document.getElementById('btn-next').style.visibility = 'visible';

            var slider = $('#slider-contactos');
            var wrapper = slider.find('div').first().css('width');
            var wrapperw = wrapper.substring(0, wrapper.length-2);
            var lista = slider.find('ul').first().css('width');
            var listaw = lista.substring(0, lista.length-2);

            var anterior = listaw/wrapperw - 1;
            if(anterior <= 1) {
                document.getElementById('btn-previous').style.visibility = 'hidden';
            } else {
                document.getElementById('btn-previous').style.visibility = 'visible';
            }
        });
        $('.next').on("click", function (event) {
            document.getElementById('btn-previous').style.visibility = 'visible';

            var slider = $('#slider-contactos');
            var wrapper = slider.find('div').first().css('width');
            var wrapperw = wrapper.substring(0, wrapper.length-2);
            var listaul = slider.find('ul').first();
            var lista = listaul.css('width');
            var listaw = lista.substring(0, lista.length-2);
            var totalActual = parseInt(listaw)+parseInt(wrapperw);

            var listali = slider.find('ul li');
            var numero = listali.size();
            var primero = listali.first();
            var primerow = primero.css('width');
            var primerom = primero.css('margin-left');
            var primerowv = primerow.substring(0, primerow.length-2);
            var primeromv = primerom.substring(0, primerom.length-2);
            var primeroT = parseInt(primerowv) + 2*parseInt(primeromv);
            var total = primeroT * numero;

            if(totalActual >= total) {
                document.getElementById('btn-next').style.visibility = 'hidden';
            } else {
                document.getElementById('btn-next').style.visibility = 'visible';
            }
        });
    });
</script>

<!-- Script para tags -->
<script>
    $(document).ready(function () {

        var vendedores = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // prefetch: 'http://localhost/Proyectos/touch/assets/dashboard/js/json/vendedores.json'
            prefetch: {
                url: '<?=base_url()?>Cotizacion/jsonVendedores',
                ttl: 1000
            }
        });

        vendedores.initialize();

        elt = $('.tags_vendedores > > input');
        elt.tagsinput({
            itemValue: 'value',
            itemText: 'text',
            typeaheadjs: {
                name: 'vendedores',
                displayKey: 'text',
                source: vendedores.ttAdapter()
            }
        });

//        elt.tagsinput('add', {"value": 1, "text": "Brayan Nuñez Rojas", "continent": "Europe"});
//        elt.tagsinput('add', {"value": 4, "text": "Anthony Nuñez Rojas", "continent": "America"});
//        elt.tagsinput('add', {"value": 7, "text": "Maria Perez Salas", "continent": "Australia"});
//        elt.tagsinput('add', {"value": 10, "text": "Carlos David Rojas", "continent": "Asia"});
//        elt.tagsinput('add', {"value": 13, "text": "Diego Alfaro Rojas", "continent": "Africa"});


        var gusto = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: {
                url: '<?=base_url()?>Cotizacion/jsonGustos',
                ttl: 1000,
                filter: function (list) {
                    return $.map(list, function (gusto) {
                        return {name: gusto};
                    });
                }
            }
        });
        gusto.initialize();


        $('.tags_gustosCliente  > > input').tagsinput({
            typeaheadjs: {
                name: 'gusto',
                displayKey: 'name',
                valueKey: 'name',
                source: gusto.ttAdapter()
            }
        });


        var mediosContacto = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // prefetch: 'http://localhost/Proyectos/touch/assets/dashboard/js/json/gustos.json'
            prefetch: {
                url: '<?=base_url()?>Cotizacion/jsonContactos',
                ttl: 1000,
                filter: function (list) {
                    return $.map(list, function (mediosContacto) {
                        return {name: mediosContacto};
                    });
                }
            }
        });
        mediosContacto.initialize();


        var elt = $('.tags_mediosContacto > > input');
        elt.tagsinput({
            typeaheadjs: {
                name: 'mediosContacto',
                displayKey: 'name',
                valueKey: 'name',
                source: mediosContacto.ttAdapter()
            }
        });

    });
</script>

<!-- Lista de modals-->

<div id="eliminarContacto" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarContacto'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="cambiarPrincipal" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarCambiarPrincipal'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="editarContacto" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="row">
            <div class="input-field col s12 m4 l4">
                <input id="cliente_contactoApellido1_existente" type="text" value="Rojas">
                <label for="cliente_contactoApellido1_existente"><?= label('formContacto_apellido1'); ?></label>
            </div>
            <div class="input-field col s12 m4 l4">
                <input id="cliente_contactoApellido2_existente" type="text" value="Chaves">
                <label for="cliente_contactoApellido2_existente"><?= label('formContacto_apellido2'); ?></label>
            </div>
            <div class="input-field col s12 m4 l4">
                <input id="cliente_contactoNombre_existente" type="text" value="Claret">
                <label for="cliente_contactoNombre_existente"><?= label('formContacto_nombre'); ?></label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6 l6">
                <div>
                    <input id="cliente_contactoCorreo_existente" type="email" style="margin-bottom: 0;">
                    <label for="cliente_contactoCorreo_existente"><?= label('formCliente_correo'); ?></label>
                </div>
                <div style="margin-bottom: 20px;">
                    <input type="checkbox" class="filled-in" id="checkbox_contactoCorreoCliente_existente" checked/>
                    <label for="checkbox_contactoCorreoCliente_existente" style="margin-bottom: 20px;">
                        <?= label('formCliente_correoCheck') ?>
                    </label>
                </div>
            </div>
            <div class="input-field col s12 m3 l3">
                <input id="cliente_contactoPuesto_existente" type="text" value="CEO">
                <label for="cliente_contactoPuesto_existente"><?= label('formContacto_puesto'); ?></label>
            </div>
            <div class="input-field col s12 m3 l3">
                <input id="cliente_contactoTelefono_existente" type="text" value="8596-7420">
                <label
                    for="cliente_contactoTelefono_existente"><?= label('formContacto_telefono'); ?></label>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>