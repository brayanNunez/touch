<!-- START CONTENT -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="breadcrumbs-title"><?=label('usuarios_info');?></a></h5>
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
                            <div class="col s12 m12 l12">
                                <div class="col s12 m12 l12">
                                    <div class="row">
                                        <div class="col s12">
                                            <ul class="tabs tab-demo-active z-depth-1 usuario-info">
                                                <li class="tab col s3">
                                                    <a class="white-text darken-1 waves-effect waves-light active" href="#tab-informacion">
                                                        <i class="mdi-action-perm-identity"></i><?=label('usuarios_verEditar');?>
                                                    </a>
                                                </li>
                                                <li class="tab-interior tab col s3">
                                                    <a class="white-text darken-1 waves-effect waves-light" href="#tab-cotizaciones">
                                                        <i class="mdi-editor-format-list-numbered"></i><?=label('usuarios_cotizaciones');?>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col s12">
                                            <div id="tab-informacion" class="card col s12">
                                                <?php $this->load->view('mantenimiento/formularios/usuarios_editar'); ?>
                                            </div>
                                            <div id="tab-cotizaciones" class="card col s12">
                                                <?php $this->load->view('mantenimiento/formularios/usuarios_cotizaciones'); ?>
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
    <!--end container-->
</section>
<!-- END CONTENT-->