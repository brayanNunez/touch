<script type="text/javascript">
    $(document).ready(function() {
        $('#slider-contactos').liquidcarousel({height:275, duration:700, hidearrows:false});
    });
</script>

<div class="col s12 tab-informacion-ver">
    <div class="row">
        <div class="col s12">
            <div class="col s12 m12 l3">
                <div class="cliente-ver-logo">
                    <?php
                        $ruta = base_url().'files/empresas/';
                        if(isset($resultado)) {
                            if($resultado['fotografia'] != '' && $resultado['fotografia'] != null && $resultado['fotografia'] != 'profile_picture_'.$resultado['idCliente'].'.') {
                                $ruta .= $resultado['idEmpresa'].'/clientes/'.$resultado['idCliente'].'/'.$resultado['fotografia'];
                            } else {
                                $ruta = base_url().'files/default-user-image.png';
                            }
                        } else {
                            $ruta = base_url().'files/default-user-image.png';
                        }
                    ?>
                    <img id="imagen_perfil_usuario_ver"  src="<?= $ruta; ?>" />
                </div>
            </div>
            <div class="col s12 m8 l5">
                <?php
                    if (isset($resultado)) {
                        $juridico = $resultado['juridico'];
                        if (!$juridico) { ?>
                            <h4><?= $resultado['nombre']." ".$resultado['primerApellido']." ".$resultado['segundoApellido']; ?></h4>
                           <p><span class="informacion-cliente"><?= label('formCliente_identificacion'); ?>: </span><?=$resultado['identificacion']?></p>
                           <p><span class="informacion-cliente"><?= label('formCliente_nacionalidad'); ?>: </span><?= $resultado['paisNacionalidad']; ?></p>
                           <p><span class="informacion-cliente"><?= label('formCliente_fechaNacimiento'); ?>: </span><?=date("d-m-Y", strtotime($resultado['fechaNacimiento']))?></p>
                           <p><span class="informacion-cliente"><?= label('formCliente_telefonoMovil'); ?>: </span><?=$resultado['telefonoMovil']?></p>
                           <p><span class="informacion-cliente"><?= label('formCliente_telefonoFijo'); ?>: </span><?=$resultado['telefonoFijo']?></p>
                           <p><span class="informacion-cliente"><?= label('formCliente_correo'); ?>: </span><?=$resultado['correo']?></p>
                <?php
                        } else { ?>
                           <h4><?=$resultado['nombre']?></h4>
                           <p><span class="informacion-cliente"><?= label('formCliente_identificacion'); ?>: </span><?=$resultado['identificacion']?></p>
                           <p><span class="informacion-cliente"><?= label('formCliente_nacionalidad'); ?>: </span><?= $resultado['paisNacionalidad']; ?></p>
                           <p><span class="informacion-cliente"><?= label('formCliente_telefono'); ?>: </span><?=$resultado['telefonoFijo']?></p>
                           <p><span class="informacion-cliente"><?= label('formCliente_correo'); ?>: </span><?=$resultado['correo']?></p>
                           <p><span class="informacion-cliente"><?= label('formCliente_fax'); ?>: </span><?=$resultado['fax']?></p>
                <?php
                        } ?>
            </div>
            <div class="col s12 m4 l4">
                <h5><?= label('cliente_direccion'); ?></h5>
                <p><?= $resultado['nombrePais']; ?>, <?=$resultado['estadoProvincia']?></p>
                <p><?=$resultado['ciudadCanton']?>, <?=$resultado['domicilio']?></p>
            </div>

            <?php
                    } ?>
        </div>

        <div class="col s12" style="margin-top: 20px;">
            <ul class="tabs tab-demo-active z-depth-1 cliente-info tags-secundarios">
                <li class="tab col s3">
                    <a class="white-text darken-1 waves-effect waves-light"
                       id="cliente-informacion" href="#tab-contactos"><i
                            class="mdi-communication-contacts"></i>
                        <?= label('formCliente_Contactos'); ?></a>
                </li>
                <li class="tab-interior tab col s3">
                    <a class="white-text darken-1 waves-effect waves-light"
                       id="cliente-informacion" href="#tab-infoAdicional"><i
                            class="mdi-av-queue"></i>
                        <?= label('cliente_infoAdicional'); ?></a>
                </li>
                <li class="tab-interior tab col s3">
                    <a class="white-text darken-1 waves-effect waves-light"
                       id="cliente-informacion" href="#tab-infoFacturacion"><i
                            class="mdi-editor-format-list-numbered"></i>
                        <?= label('cliente_infoFacturacion'); ?></a>
                </li>
            </ul>
        </div>

        <div class="col s12">
            <div id="tab-contactos" class="card col s12" style="padding: 0;">
                <?php
                if(isset($resultado['contactos'])) {
                    $contactos = $resultado['contactos'];
                    if($contactos != false && $contactos != null) { ?>
                        <div id="slider-contactos" class="liquid">
                            <span id="btn-previous" class="previous" title="Elementos anteriores">
                                <img src="<?= base_url(); ?>assets/img/lightbox/img_prev.png">
                            </span>
                            <div class="wrapper">
                                <ul>
                <?php
                        foreach ($contactos as $contacto) { ?>
                                    <li>
                                        <div class="info-contacto">
                                            <div>
                                                <h5><?=$contacto['nombre']." ".$contacto['primerApellido']." ".$contacto['segundoApellido']?></h5>
                                                <p><?=$contacto['puesto']?></p>
                                                <p><?=$contacto['correo']?></p>
                                                <p><?=$contacto['telefono']?></p>
<!--                                                    <div class="contacto-opciones">-->
<!--                                                        <a href="#editarContacto" class="modal-trigger"-->
<!--                                                           title="--><?//= label('formCliente_contactoEditar') ?><!--">-->
<!--                                                            <i class="mdi-editor-mode-edit"></i>-->
<!--                                                        </a>-->
<!--                                                        <a href="#" title="--><?//= label('formCliente_contactoDescargar')?><!--">-->
<!--                                                            <i class="mdi-file-file-download"></i>-->
<!--                                                        </a>-->
<!--                                                        <a href="#eliminarContacto" class="modal-trigger" title="--><?//= label('formCliente_contactoEliminar')?><!--">-->
<!--                                                            <i class="mdi-action-delete"></i>-->
<!--                                                        </a>-->
<!--                                                    </div>-->
                                                <div class="contacto-principal es-principal">
                                                    <a href="#cambiarPrincipal" class="modal-trigger" title="<?= label('formCliente_contactoPrincipal') ?>">
                                                        <i class="mdi-action-done"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                <?php
                        } ?>
                                </ul>
                            </div>
                            <span id="btn-next" class="next" title="Elementos siguientes">
                                <img src="<?= base_url(); ?>assets/img/lightbox/img_next.png">
                            </span>
                        </div>
                <?php
                    } else { ?>
                        <h5 style="padding: 25px;"><?= label('clientes_noHayContactos'); ?></h5>
                <?php
                    }
                }
                ?>
            </div>
            <div id="tab-infoAdicional" class="card col s12">
                <div class="table-responsive">
                    <table id="cliente1-direccion" class="striped">
                        <thead>
                            <tr>
                                <th style="width: 30%;"></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= label('formCliente_cotizador'); ?></td>
                                <?php
                                if($resultado['todosVendedores'] == 1) {
                                ?>
                                    <td>Todos</td>
                                <?php
                                } else {
                                    if(isset($resultado['vendedores'])) {
                                ?>
                                        <td>
                                <?php
                                        $arrayVendedores = '';
                                        foreach ($resultado['vendedores'] as $vendedor) {
                                            if($arrayVendedores == '') {
                                                $arrayVendedores .= $vendedor['nombre'];
                                            } else {
                                                $arrayVendedores .= ', '.$vendedor['nombre'];
                                            }
                                        }
                                        echo $arrayVendedores;
                                ?>
                                        </td>
                                <?php
                                    }
                                }
                                ?>
                            </tr>
                            <tr>
                                <td><?= label('formCliente_gustos_preferencias'); ?></td>
                                <td><?php
                                    if (isset($resultado)) {
                                        $numItems = count($resultado['gustos']);
                                        $i = 0;
                                        foreach ($resultado['gustos'] as $gusto) {
                                            if(++$i === $numItems) {
                                                echo $gusto['nombre'];
                                            } else {
                                                echo $gusto['nombre'].', ';
                                            }
                                        }
                                    } ?>
                                   </td>
                            </tr>
                            <tr>
                                <td><?= label('formCliente_mediosContacto'); ?></td>
                                <td><?php
                                    if (isset($resultado)) {
                                        $numItems = count($resultado['medios']);
                                        $i = 0;
                                        foreach ($resultado['medios'] as $gusto) {
                                            if(++$i === $numItems) {
                                                echo $gusto['nombre'];
                                            } else {
                                                echo $gusto['nombre'].', ';
                                            }
                                        }
                                    } ?>
                                   </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="tab-infoFacturacion" class="card col s12">
                <div class="table-responsive">
                    <table id="cliente1-informacion" class="striped">
                        <thead>
                        <tr>
                            <th style="width: 30%;"></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= label('formCliente_formaPagoFavorita'); ?></td>
                                <td><?php if (isset($resultado)) echo $resultado['nombre_formaPago'];?></td>
                            </tr>
                            <tr>
                                <td><?= label('formCliente_descuento'); ?></td>
                                <td><?php if (isset($resultado)) echo $resultado['descuentoFijo'];?>%</td>
                            </tr>
                            <tr>
                                <td><?= label('formCliente_monedaCotizar'); ?></td>
                                <td><?php if (isset($resultado)) echo $resultado['nombre_moneda']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Script para slider de contactos-->
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
            var newv = parseInt(primerom) + falta;
            lista.each(function() {
                var $this = $(this);
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