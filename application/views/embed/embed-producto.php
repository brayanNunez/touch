<!-- START CONTENT  -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloProductoEmbed'); ?></h1>

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
                            <div class="col s12 m8 l8 offset-m2 offset-l2">
                                <form class="col s12">
                                    <div class="row">

                                        <div class="input-field col s12">
                                            <input id="producto_nombre" type="text" value="Laptop" readonly>
                                            <label for="producto_nombre"><?= label('formProducto_nombre'); ?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <textarea id="producto_descripcion" class="materialize-textarea"
                                                      length="120">Esta es la descripción</textarea>
                                            <label
                                                for="producto_descripcion"><?= label('formProducto_descripcion'); ?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="producto_precio" type="text" value="$600">
                                            <label for="producto_precio"><?= label('formProducto_precio'); ?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <br/>
                                            <label for="producto_imagen"><?= label('formProducto_imagen'); ?></label>
                                            <br/>
                                            <img class="responsive-img"
                                                 src="<?= base_url() ?>assets/dashboard/images/laptop.jpg" alt=""/>
                                        </div>
                                    </div>

                                    <div class="input-field col s12">
                                        <label><?= label('formProducto_caracteristicas'); ?></label>
                                        <br/>
                                        <br/>
                                        <table class="table striped">
                                            <thead>
                                            <tr>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody class="text-left">
                                            <tr>
                                                <td>Pantalla 35"</td>
                                            </tr>
                                            <tr>
                                                <td>HDD 2TB</td>
                                            </tr>
                                            <tr>
                                                <td>Procesador Intel Core I7</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="input-field col s12 envio-formulario">
                                        <a class="btn waves-effect waves-light center"
                                           href="<?= base_url() ?>embed/embedCotizar"><?= label('formEmbedProducto_cerrar'); ?></a>
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