<div class="col s12">
    <form class="col s12">
        <div class="row">
            <div class="col s12">
                <table id="cliente1-informacion" class="striped">
                    <thead>
                        <tr>
                            <th style="width: 30%;"></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= label('formCliente_tipoPersona'); ?></td>
                            <td><?= label('formCliente_fisica'); ?></td>
                        </tr>
                        <tr>
                            <td><?= label('formCliente_nacionalidad'); ?></td>
                            <td>Costa Rica</td>
                        </tr>
                        <tr>
                            <td><?= label('formCliente_identificacion'); ?></td>
                            <td>2-723-327</td>
                        </tr>
                        <tr>
                            <td><?= label('formCliente_nombreContacto'); ?></td>
                            <td>Claret Rojas Chaves</td>
                        </tr>
                        <tr>
                            <td><?= label('formCliente_correo'); ?></td>
                            <td>claret@gmail.com (Facturas se envian a este correo)</td>
                        </tr>
                        <tr>
                            <td><?= label('formCliente_telefonoMovil'); ?></td>
                            <td>8956-9865</td>
                        </tr>
                        <tr>
                            <td><?= label('formCliente_telefonoFijo'); ?></td>
                            <td>2448-5623</td>
                        </tr>
                        <tr>
                            <td><?= label('formCliente_fechaNacimiento'); ?></td>
                            <td>10-03-1994</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col s12" style="margin-top: 20px;">
                <ul class="tabs tab-demo-active z-depth-1 cliente-info">
                    <li class="tab col s3">
                        <a class="white-text darken-1 waves-effect waves-light active"
                           id="cliente-informacion" href="#tab-direccion"><i
                                class="mdi-maps-my-location"></i>
                            <?= label('cliente_direccion'); ?></a>
                    </li>
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
                <div id="tab-direccion" class="card col s12">
                    <table id="cliente1-direccion" class="striped">
                        <thead>
                            <tr>
                                <th style="width: 30%;"></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= label('formCliente_direccionPais'); ?></td>
                                <td>Costa Rica</td>
                            </tr>
                            <tr>
                                <td><?= label('formCliente_direccionProvincia'); ?></td>
                                <td>Alajuela</td>
                            </tr>
                            <tr>
                                <td><?= label('formCliente_direccionCanton'); ?></td>
                                <td>Grecia</td>
                            </tr>
                            <tr>
                                <td><?= label('formCliente_direccionDistrito'); ?></td>
                                <td>Tacares</td>
                            </tr>
                            <tr>
                                <td><?= label('formCliente_direccionDomicilio'); ?></td>
                                <td>50 mts norte de la iglesia de la localidad</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="tab-contactos" class="card col s12">
                    <div class="table-responsive">
                        <table id="cliente1-contactos" class="striped">
                            <thead>
                                <tr>
                                    <th style="width: 40%;"><?= label('formCliente_nombreContacto'); ?></th>
                                    <th><?= label('formCliente_correoContacto'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Maria Rodriguez</td>
                                    <td>maria@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Juan Perez</td>
                                    <td>juan@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Jose Mora</td>
                                    <td>jose@gmail.com</td>
                                </tr>
                            </tbody>
                        </table>
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