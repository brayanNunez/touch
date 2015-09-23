<!--START CONTENT  -->

<section id="content">
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="breadcrumbs-title"><?= label('verCotizacion'); ?></h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div id="chart-dashboard">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div id="submit-button" class="section">
                        <div class="row">
                            <div class="col s12 ">
                                <div class="card" id="card-diseno">
                                    <iframe id="iframe-ver-cotizacion" src="<?= base_url() ?>files/pdfs/test.pdf"></iframe>
                                    <div id="opciones-ver-cotizacion" class="col s12">
                                        <div class="col s12 m4 l4">
                                            <a href="<?= base_url(); ?>cotizacion/cotizar" class="btn btn-default opcion-ver-cot"
                                               title="<?= label('verCotizacion_editar'); ?>">
                                                <?= label('tablaCotizaciones_opcionEditar'); ?>
                                            </a>
                                        </div>
                                        <div class="col s12 m4 l4">
                                            <a href="#duplicar-cotizacion" class="btn btn-default opcion-ver-cot modal-trigger"
                                               title="<?= label('verCotizacion_duplicar'); ?>">
                                                <?= label('tablaCotizaciones_opcionDuplicar'); ?>
                                            </a>
                                        </div>
                                        <div class="col s12 m4 l4">
                                            <a href="#eliminar-cotizacion" class="btn btn-default opcion-ver-cot modal-trigger"
                                               title="<?= label('verCotizacion_eliminar'); ?>">
                                                <?= label('tablaCotizaciones_opcionEliminar'); ?>
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

    <?php
    $this->load->view('layout/default/menu-crear.php');
    ?>

</section>

<div id="eliminar-cotizacion" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarCotizacion'); ?></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<div id="duplicar-cotizacion" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarDuplicarCotizacion'); ?></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>