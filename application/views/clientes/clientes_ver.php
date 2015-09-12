<script type="text/javascript">
    $(document).ready(function() {
        $('#slider-contactos').liquidcarousel({height:200, duration:1000, hidearrows:false});
    });
</script>

<div class="col s12">
    <form class="col s12">
        <div class="row">
            <div class="col s12">
                <div class="col s12 m2 l3">
                    <div class="col s12" style="margin-top: 45px;">
                        <img style="width: inherit; border: 1px solid #000;" src="<?= base_url().'files/archivo1.png'; ?>" />
                    </div>
                </div>
                <div class="col s12 m5 l5">
                    <h4>Claret Rojas Chaves</h4>
                    <p><span class="informacion-cliente"><?= label('formCliente_identificacion'); ?></span>. 2-723-327</p>
                    <p><span class="informacion-cliente"><?= label('formCliente_nacionalidad'); ?></span>: Costa Rica</p>
                    <p><span class="informacion-cliente"><?= label('formCliente_fechaNacimiento'); ?></span>: 10-03-1994</p>
                    <p><span class="informacion-cliente"><?= label('formCliente_telefonoMovil'); ?></span>: 8956-9865</p>
                    <p><span class="informacion-cliente"><?= label('formCliente_telefonoFijo'); ?></span>: 2448-5623</p>
                    <p><span class="informacion-cliente"><?= label('formCliente_correo'); ?></span>: claret@gmail.com</p>
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
                <div id="tab-contactos" class="card col s12">
                    <div id="slider-contactos" class="liquid">
                        <span class="previous"><i class="mdi-image-navigate-before large"></i></span>
                        <div class="wrapper">
                            <ul>
                                <li>
                                    <div class="info-contacto">
                                        <div>
                                            <h5>Jorge Arias</h5>
                                            <p>Gerente de finanzas</p>
                                            <p>jorge@gmail.com</p>
                                            <p>Tel. 8956-9865</p>
                                            <div class="contacto-opciones">
                                                <a href="#">
                                                    <i class="mdi-editor-mode-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="mdi-file-file-download"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="mdi-action-delete"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="info-contacto">
                                        <div>
                                            <h5>Brayan Nunez</h5>
                                            <p>Gerente de planta</p>
                                            <p>brayan@gmail.com</p>
                                            <p>Tel. 8956-6545</p>
                                            <div class="contacto-opciones">
                                                <a href="#">
                                                    <i class="mdi-editor-mode-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="mdi-file-file-download"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="mdi-action-delete"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="info-contacto">
                                        <div>
                                            <h5>Sebastian Rodriguez B.</h5>
                                            <p>CEO</p>
                                            <p>sebas@gmail.com</p>
                                            <p>Tel. 8956-3405</p>
                                            <div class="contacto-opciones">
                                                <a href="#">
                                                    <i class="mdi-editor-mode-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="mdi-file-file-download"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="mdi-action-delete"></i>
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
                                            <p>Tel. 8956-1245</p>
                                            <div class="contacto-opciones">
                                                <a href="#">
                                                    <i class="mdi-editor-mode-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="mdi-file-file-download"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="mdi-action-delete"></i>
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
                                                <a href="#">
                                                    <i class="mdi-editor-mode-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="mdi-file-file-download"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="mdi-action-delete"></i>
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
                                                <a href="#">
                                                    <i class="mdi-editor-mode-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="mdi-file-file-download"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="mdi-action-delete"></i>
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
                                                <a href="#">
                                                    <i class="mdi-editor-mode-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="mdi-file-file-download"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="mdi-action-delete"></i>
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
                                                <a href="#">
                                                    <i class="mdi-editor-mode-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="mdi-file-file-download"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="mdi-action-delete"></i>
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
                                                <a href="#">
                                                    <i class="mdi-editor-mode-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="mdi-file-file-download"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="mdi-action-delete"></i>
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
                                                <a href="#">
                                                    <i class="mdi-editor-mode-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="mdi-file-file-download"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="mdi-action-delete"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="info-contacto">
                                        <div>
                                            <h5>Michael Arguedas</h5>
                                            <p>Redes</p>
                                            <p>caya@gmail.com</p>
                                            <p>Tel. 8956-5080</p>
                                            <div class="contacto-opciones">
                                                <a href="#">
                                                    <i class="mdi-editor-mode-edit"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="mdi-file-file-download"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="mdi-action-delete"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <span class="next"><i class="mdi-image-navigate-next large"></i></span>
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
    </form>
</div>

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