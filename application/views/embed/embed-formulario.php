<!-- START CONTENT  -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloFormularioEmbed'); ?></h1>

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
                                            <input id="embed_nombre" type="text">
                                            <label for="embed_nombre"><?= label('formEmbed_nombre'); ?></label>
                                        </div>

                                        <div class="input-field col s12">
                                            <input id="embed_correo" type="email">
                                            <label for="embed_correo"><?= label('formEmbed_correo'); ?></label>
                                        </div>

                                        <div class="input-field col s12">
                                            <input id="embed_telefono" type="text">
                                            <label for="embed_telefono"><?= label('formEmbed_telefono'); ?></label>
                                        </div>

                                        <div class="input-field col s12">
                                            <textarea id="embed_detalle" class="materialize-textarea"
                                                      length="250"></textarea>
                                            <label for="embed_detalle"><?= label('formEmbed_detalle'); ?></label>
                                        </div>

                                        <div class="input-field col s12 campo-captcha">
                                            <input type="text" id="defaultReal" name="defaultReal"
                                                   class="campo-registro">
                                        </div>

                                        <div class="input-field col s12 envio-formulario">
                                            <button class="btn btn-sm right" type="submit"
                                                    name="action"><?= label('formEmbed_enviar'); ?>
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
<!-- END CONTENT