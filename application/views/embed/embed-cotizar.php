<!-- START CONTENT  -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?=label('tituloCotizarEmbed');?></h1>

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

                                        <div class="col-md-12">

                                            <div class="col-md-12 col-sm-12">
                                                <div class="col-md-6 col-sm-6" >
                                                    <p>Lista de productos<p>
                                                </div>
                                                <div class="input-group col-md-6 col-sm-6" style="float:right">
                                                    <div>
                                                        <input id="generic_search" type="text" class="form-control" placeholder="Buscar...">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col s12 m12 l12">
                                                    <div class="card" id="listaProductosEmbed">
                                                        <div id="table-datatables">
                                                            <div id="table-embed" class="row">
                                                                <div class="col s12 m12 l12">
                                                                    <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                                                        <thead>
                                                                        <tr>
                                                                            <th><?=label('ListaEmbed_tablaNombre');?></th>
                                                                            <th><?=label('ListaEmbed_tablaPrecio');?></th>
                                                                            <th><?=label('ListaEmbed_tablaCantidad');?></th>
                                                                        </tr>
                                                                        </thead>
<!--                                                                        <tfoot>-->
<!--                                                                        <tr>-->
<!--                                                                            <th>--><?//=label('ListaEmbed_tablaNombre');?><!--</th>-->
<!--                                                                            <th>--><?//=label('ListaEmbed_tablaPrecio');?><!--</th>-->
<!--                                                                            <th>--><?//=label('ListaEmbed_tablaCantidad');?><!--</th>-->
<!--                                                                        </tr>-->
<!--                                                                        </tfoot>-->
                                                                        <tbody>
                                                                        <tr>
                                                                            <td><a href="<?= base_url() ?>embed/embedProducto">Laptop</a></td>
                                                                            <td>$400</td>
                                                                            <td><input type="number" value="0"/></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><a href="#">Mouse</a></td>
                                                                            <td>$15</td>
                                                                            <td><input type="number" value="0"/></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><a href="#">Escritorio</a></td>
                                                                            <td>$200</td>
                                                                            <td><input type="number" value="0"/></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><a href="#">Refrigeradora</a></td>
                                                                            <td>$700</td>
                                                                            <td><input type="number" value="0"/></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><a href="#">Laptop</a></td>
                                                                            <td>$400</td>
                                                                            <td><input type="number" value="0"/></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><a href="#">Mouse</a></td>
                                                                            <td>$15</td>
                                                                            <td><input type="number" value="0"/></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><a href="#">Escritorio</a></td>
                                                                            <td>$200</td>
                                                                            <td><input type="number" value="0"/></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><a href="#">Refrigeradora</a></td>
                                                                            <td>$700</td>
                                                                            <td><input type="number" value="0"/></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        <p>Datos adicionales</p>

                                        </div>

                                        <div class="col-md-12">

                                            <div class="input-field col s12">
                                                <textarea id="embed_detalle" class="materialize-textarea" length="250"></textarea>
                                                <label for="embed_detalle"><?=label('formEmbed_detalle');?></label>
                                            </div>

                                            <div class="input-field col s12">
                                                <input id="embed_nombre" type="text">
                                                <label for="embed_nombre"><?=label('formEmbed_nombre');?></label>
                                            </div>

                                            <div class="input-field col s12">
                                                <input id="embed_correo" type="email">
                                                <label for="embed_correo"><?=label('formEmbed_correo');?></label>
                                            </div>

                                            <div class="input-field col s12">
                                                <input id="embed_telefono" type="text">
                                                <label for="embed_telefono"><?=label('formEmbed_telefono');?></label>
                                            </div>

                                            <div class="input-field col s12 envio-formulario">
                                                <button class="btn btn-sm right" type="submit" name="action"><?=label('formEmbed_enviar');?>
                                                </button>
                                            </div>

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
<!-- END CONTENT