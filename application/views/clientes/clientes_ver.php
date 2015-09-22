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
                    <img src="<?= base_url().'files/archivo1.png'; ?>" />
                </div>
            </div>
            <div class="col s12 m8 l5">
                <h4>Cooperativa Dos Pinos R.L.</h4>
                <p><span class="informacion-cliente"><?= label('formCliente_identificacion'); ?></span>. 2-723-327</p>
                <p><span class="informacion-cliente"><?= label('formCliente_nacionalidad'); ?></span>: Costa Rica</p>
                <p><span class="informacion-cliente"><?= label('formCliente_fechaNacimiento'); ?></span>: 10-03-1994</p>
                <p><span class="informacion-cliente"><?= label('formCliente_telefonoMovil'); ?></span>: 8956-9865</p>
                <p><span class="informacion-cliente"><?= label('formCliente_telefonoFijo'); ?></span>: 2448-5623</p>
                <p><span class="informacion-cliente"><?= label('formCliente_correo'); ?></span>: dospinos@gmail.com</p>
            </div>
            <div class="col s12 m4 l4">
                <h5><?= label('cliente_direccion'); ?></h5>
                <p>Costa Rica, Alajuela</p>
                <p>Grecia, Tacares</p>
                <p>50 mts norte de la iglesia de la localidad</p>
            </div>
        </div>

        <div class="col s12" style="margin-top: 20px;">
            <ul class="tabs tab-demo-active z-depth-1 cliente-info tags-secundarios">
                <li class="tab-interior tab col s3">
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
                <div id="slider-contactos" class="liquid">
                    <span id="btn-previous" class="previous" title="Elementos anteriores">
                        <img src="<?= base_url(); ?>assets/img/lightbox/img_prev.png">
                    </span>
                    <div class="wrapper">
                        <ul>
                            <li>
                                <div class="info-contacto">
                                    <div>
                                        <h5>Sebastian Rodriguez Bolanos</h5>
                                        <p>CEO</p>
                                        <p>sebastian.rodriguez@gmail.com</p>
                                        <p>Tel. 8956-3405</p>
                                        <div class="contacto-opciones">
                                            <a href="#editarContacto" class="modal-trigger"
                                               title="<?= label('formCliente_contactoEditar') ?>">
                                                <i class="mdi-editor-mode-edit"></i>
                                            </a>
                                            <a href="#" title="<?= label('formCliente_contactoDescargar')?>">
                                                <i class="mdi-file-file-download"></i>
                                            </a>
                                            <a href="#eliminarContacto" class="modal-trigger" title="<?= label('formCliente_contactoEliminar')?>">
                                                <i class="mdi-action-delete"></i>
                                            </a>
                                        </div>
                                        <div class="contacto-principal es-principal">
                                            <a href="#" title="<?= label('formCliente_contactoPrincipal') ?>">
                                                <i class="mdi-action-done"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info-contacto">
                                    <div>
                                        <h5>Brayan Nunez</h5>
                                        <p>CEO</p>
                                        <p>brayan@gmail.com</p>
                                        <p>Tel. 8956-6545</p>
                                        <div class="contacto-opciones">
                                            <a href="#editarContacto" class="modal-trigger"
                                               title="<?= label('formCliente_contactoEditar') ?>">
                                                <i class="mdi-editor-mode-edit"></i>
                                            </a>
                                            <a href="#" title="<?= label('formCliente_contactoDescargar')?>">
                                                <i class="mdi-file-file-download"></i>
                                            </a>
                                            <a href="#eliminarContacto" class="modal-trigger" title="<?= label('formCliente_contactoEliminar')?>">
                                                <i class="mdi-action-delete"></i>
                                            </a>
                                        </div>
                                        <div class="contacto-principal">
                                            <a href="#" title="<?= label('formCliente_contactoSecundario') ?>">
                                                <i class="mdi-action-done"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info-contacto">
                                    <div>
                                        <h5>Jorge Arias</h5>
                                        <p>Gerente de finanzas</p>
                                        <p>jorge@gmail.com</p>
                                        <p>Tel. 8956-9865</p>
                                        <div class="contacto-opciones">
                                            <a href="#editarContacto" class="modal-trigger"
                                               title="<?= label('formCliente_contactoEditar') ?>">
                                                <i class="mdi-editor-mode-edit"></i>
                                            </a>
                                            <a href="#" title="<?= label('formCliente_contactoDescargar')?>">
                                                <i class="mdi-file-file-download"></i>
                                            </a>
                                            <a href="#eliminarContacto" class="modal-trigger" title="<?= label('formCliente_contactoEliminar')?>">
                                                <i class="mdi-action-delete"></i>
                                            </a>
                                        </div>
                                        <div class="contacto-principal">
                                            <a href="#" title="<?= label('formCliente_contactoSecundario') ?>">
                                                <i class="mdi-action-done"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info-contacto">
                                    <div>
                                        <h5>Claret Rojas Chaves</h5>
                                        <p>Gerente de personal</p>
                                        <p>cloret@gmail.com</p>
                                        <p>Tel. 8956-1245</p>
                                        <div class="contacto-opciones">
                                            <a href="#editarContacto" class="modal-trigger"
                                               title="<?= label('formCliente_contactoEditar') ?>">
                                                <i class="mdi-editor-mode-edit"></i>
                                            </a>
                                            <a href="#" title="<?= label('formCliente_contactoDescargar')?>">
                                                <i class="mdi-file-file-download"></i>
                                            </a>
                                            <a href="#eliminarContacto" class="modal-trigger" title="<?= label('formCliente_contactoEliminar')?>">
                                                <i class="mdi-action-delete"></i>
                                            </a>
                                        </div>
                                        <div class="contacto-principal">
                                            <a href="#" title="<?= label('formCliente_contactoSecundario') ?>">
                                                <i class="mdi-action-done"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info-contacto">
                                    <div>
                                        <h5>Luis Barrantes</h5>
                                        <p>Analista</p>
                                        <p>luis@gmail.com</p>
                                        <p>Tel. 8752-9865</p>
                                        <div class="contacto-opciones">
                                            <a href="#editarContacto" class="modal-trigger"
                                               title="<?= label('formCliente_contactoEditar') ?>">
                                                <i class="mdi-editor-mode-edit"></i>
                                            </a>
                                            <a href="#" title="<?= label('formCliente_contactoDescargar')?>">
                                                <i class="mdi-file-file-download"></i>
                                            </a>
                                            <a href="#eliminarContacto" class="modal-trigger" title="<?= label('formCliente_contactoEliminar')?>">
                                                <i class="mdi-action-delete"></i>
                                            </a>
                                        </div>
                                        <div class="contacto-principal">
                                            <a href="#" title="<?= label('formCliente_contactoSecundario') ?>">
                                                <i class="mdi-action-done"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info-contacto">
                                    <div>
                                        <h5>Yohan Diaz Loria</h5>
                                        <p>Redes</p>
                                        <p>yohan@gmail.com</p>
                                        <p>Tel. 8956-1379</p>
                                        <div class="contacto-opciones">
                                            <a href="#editarContacto" class="modal-trigger"
                                               title="<?= label('formCliente_contactoEditar') ?>">
                                                <i class="mdi-editor-mode-edit"></i>
                                            </a>
                                            <a href="#" title="<?= label('formCliente_contactoDescargar')?>">
                                                <i class="mdi-file-file-download"></i>
                                            </a>
                                            <a href="#eliminarContacto" class="modal-trigger" title="<?= label('formCliente_contactoEliminar')?>">
                                                <i class="mdi-action-delete"></i>
                                            </a>
                                        </div>
                                        <div class="contacto-principal">
                                            <a href="#" title="<?= label('formCliente_contactoSecundario') ?>">
                                                <i class="mdi-action-done"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info-contacto">
                                    <div>
                                        <h5>Jean Paul Barquero</h5>
                                        <p>Programador</p>
                                        <p>jean@gmail.com</p>
                                        <p>Tel. 8956-0943</p>
                                        <div class="contacto-opciones">
                                            <a href="#editarContacto" class="modal-trigger"
                                               title="<?= label('formCliente_contactoEditar') ?>">
                                                <i class="mdi-editor-mode-edit"></i>
                                            </a>
                                            <a href="#" title="<?= label('formCliente_contactoDescargar')?>">
                                                <i class="mdi-file-file-download"></i>
                                            </a>
                                            <a href="#eliminarContacto" class="modal-trigger" title="<?= label('formCliente_contactoEliminar')?>">
                                                <i class="mdi-action-delete"></i>
                                            </a>
                                        </div>
                                        <div class="contacto-principal">
                                            <a href="#" title="<?= label('formCliente_contactoSecundario') ?>">
                                                <i class="mdi-action-done"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info-contacto">
                                    <div>
                                        <h5>Joseph Fuentes Cruz</h5>
                                        <p>Bases de datos</p>
                                        <p>joseph@gmail.com</p>
                                        <p>Tel. 8956-3051</p>
                                        <div class="contacto-opciones">
                                            <a href="#editarContacto" class="modal-trigger"
                                               title="<?= label('formCliente_contactoEditar') ?>">
                                                <i class="mdi-editor-mode-edit"></i>
                                            </a>
                                            <a href="#" title="<?= label('formCliente_contactoDescargar')?>">
                                                <i class="mdi-file-file-download"></i>
                                            </a>
                                            <a href="#eliminarContacto" class="modal-trigger" title="<?= label('formCliente_contactoEliminar')?>">
                                                <i class="mdi-action-delete"></i>
                                            </a>
                                        </div>
                                        <div class="contacto-principal">
                                            <a href="#" title="<?= label('formCliente_contactoSecundario') ?>">
                                                <i class="mdi-action-done"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info-contacto">
                                    <div>
                                        <h5>Victor Gonzalez</h5>
                                        <p>Redes</p>
                                        <p>victor@gmail.com</p>
                                        <p>Tel. 8956-7391</p>
                                        <div class="contacto-opciones">
                                            <a href="#editarContacto" class="modal-trigger"
                                               title="<?= label('formCliente_contactoEditar') ?>">
                                                <i class="mdi-editor-mode-edit"></i>
                                            </a>
                                            <a href="#" title="<?= label('formCliente_contactoDescargar')?>">
                                                <i class="mdi-file-file-download"></i>
                                            </a>
                                            <a href="#eliminarContacto" class="modal-trigger" title="<?= label('formCliente_contactoEliminar')?>">
                                                <i class="mdi-action-delete"></i>
                                            </a>
                                        </div>
                                        <div class="contacto-principal">
                                            <a href="#" title="<?= label('formCliente_contactoSecundario') ?>">
                                                <i class="mdi-action-done"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info-contacto">
                                    <div>
                                        <h5>Rebeca Arias Cruz</h5>
                                        <p>Programadora</p>
                                        <p>rebeca@gmail.com</p>
                                        <p>Tel. 8956-7913</p>
                                        <div class="contacto-opciones">
                                            <a href="#editarContacto" class="modal-trigger"
                                               title="<?= label('formCliente_contactoEditar') ?>">
                                                <i class="mdi-editor-mode-edit"></i>
                                            </a>
                                            <a href="#" title="<?= label('formCliente_contactoDescargar')?>">
                                                <i class="mdi-file-file-download"></i>
                                            </a>
                                            <a href="#eliminarContacto" class="modal-trigger" title="<?= label('formCliente_contactoEliminar')?>">
                                                <i class="mdi-action-delete"></i>
                                            </a>
                                        </div>
                                        <div class="contacto-principal">
                                            <a href="#" title="<?= label('formCliente_contactoSecundario') ?>">
                                                <i class="mdi-action-done"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info-contacto">
                                    <div>
                                        <h5>Emmanuel Jimenez</h5>
                                        <p>Programador</p>
                                        <p>emma@gmail.com</p>
                                        <p>Tel. 8956-5080</p>
                                        <div class="contacto-opciones">
                                            <a href="#editarContacto" class="modal-trigger"
                                               title="<?= label('formCliente_contactoEditar') ?>">
                                                <i class="mdi-editor-mode-edit"></i>
                                            </a>
                                            <a href="#" title="<?= label('formCliente_contactoDescargar')?>">
                                                <i class="mdi-file-file-download"></i>
                                            </a>
                                            <a href="#eliminarContacto" class="modal-trigger" title="<?= label('formCliente_contactoEliminar')?>">
                                                <i class="mdi-action-delete"></i>
                                            </a>
                                        </div>
                                        <div class="contacto-principal">
                                            <a href="#" title="<?= label('formCliente_contactoSecundario') ?>">
                                                <i class="mdi-action-done"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <span id="btn-next" class="next" title="Elementos siguientes">
                        <img src="<?= base_url(); ?>assets/img/lightbox/img_next.png">
                    </span>
                </div>
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
                                <td>Brayan Nunez Rojas,
                                    Anthony Nunez Rojas,
                                    Maria Perez Salas,
                                    Carlos David Rojas,
                                    Diego Alfaro Rojas
                                </td>
                            </tr>
                            <tr>
                                <td><?= label('formCliente_gustos_preferencias'); ?></td>
                                <td>Futbol, Baseball, Tennis, Golf</td>
                            </tr>
                            <tr>
                                <td><?= label('formCliente_mediosContacto'); ?></td>
                                <td>TV,Radio,Carteles,Vallas publicitarias</td>
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
                                <td>A pagos</td>
                            </tr>
                            <tr>
                                <td><?= label('formCliente_descuento'); ?></td>
                                <td>5%</td>
                            </tr>
                            <tr>
                                <td><?= label('formCliente_monedaCotizar'); ?></td>
                                <td>Dolar ($)</td>
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