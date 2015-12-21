

<div style="display: none" id="inset_form"></div>
<!-- START CONTENT -->

<section id="content">

    <!--start container-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloCotizacion'); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <div class="container">
        <div id="chart-dashboard">
            <div class="row">
                <div class="col s12">
                    <div id="submit-button" class="section">
                        <div class="row">
                            <div class="col s12">
                                <div class="card lista-elementos">
                                    <div id="table-datatables">
                                        <div class="row">
                                            <div class="col s12">
                                              <iframe id="vistaPrevia" class="col s12" height="500px" src="<?= base_url() ?>files/empresas/<?= $idEmpresa;?>/cotizaciones/<?= encryptIt($idCotizacion);?>/sistema/cotizacion.pdf">
                                              </iframe>
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
    </div>

    <?php
    $this->load->view('layout/default/menu-crear.php');
    ?>

    <!--end container-->
</section>



