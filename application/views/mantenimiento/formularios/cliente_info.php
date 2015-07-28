<!-- START CONTENT -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="breadcrumbs-title"><?=label('clientes_info');?></a></h5>
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
                                            <ul class="tabs tab-demo-active z-depth-1 cliente-info">
                                                <li class="tab col s4">
                                                    <a class="white-text darken-1 waves-effect waves-light active"
                                                       id="cliente-informacion" href="#tab-informacion"><i class="mdi-action-perm-identity"></i>
                                                        <?=label('clientes_editar');?></a>
                                                </li>
                                                <li class="tab-central tab col s4">
                                                    <a class="white-text darken-1 waves-effect waves-light"
                                                       id="cliente-informacion" href="#tab-archivos"><i class="mdi-file-folder-open"></i>
                                                        <?=label('clientes_archivos');?></a>
                                                </li>
                                                <li class="tab col s4">
                                                    <a class="white-text darken-1 waves-effect waves-light"
                                                       id="cliente-informacion" href="#tab-cotizaciones"><i class="mdi-editor-format-list-numbered"></i>
                                                        <?=label('clientes_cotizaciones');?></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col s12">
                                            <div id="tab-informacion" class="card col s12">
                                                <?php $this->load->view('mantenimiento/formularios/clientes_editar'); ?>
                                            </div>
                                            <div id="tab-archivos" class="card col s12">
                                                <?php $this->load->view('mantenimiento/formularios/clientes_archivos'); ?>
                                            </div>
                                            <div id="tab-cotizaciones" class="card col s12">
                                                <?php $this->load->view('mantenimiento/formularios/clientes_cotizaciones'); ?>
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