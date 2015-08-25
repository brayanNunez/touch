<!-- START CONTENT -->

<section id="content">

    <!--start container-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?=label('tituloListaPlan');?></h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <div class="container">
        <div id="chart-dashboard">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div id="submit-button" class="section">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card lista-elementos" id="listaPlan">
                                    <div id="table-datatables">
                                        <div class="row">
                                            <div class="col s12 m12 l12">
                                                <table id="formas-tabla-lista" class="data-table-information responsive-table display" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th><?=label('tablaPlan_nombre');?></th>
                                                            <th><?=label('tablaPlan_costo');?></th>
                                                            <th><?=label('tablaPlan_beneficios');?></th>
                                                            <th><?=label('tablaPlan_opciones');?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Básico</td>
                                                            <td>$15</td>
                                                            <td>
                                                                <ul>
                                                                    <li>Cotizar</li>
                                                                    <li>Embed</li>
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <a href="#Obtener" class="boton-opciones btn-flat waves-effect white-text modal-trigger"><?=label('tablaPlan_Obtener')?></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Avanzado</td>
                                                            <td>$20</td>
                                                            <td>
                                                                <ul>
                                                                    <li>Cotizar</li>
                                                                    <li>Embed</li>
                                                                    <li>Facturar</li>
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <a href="#Obtener" class="boton-opciones btn-flat waves-effect white-text modal-trigger"><?=label('tablaPlan_Obtener')?></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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
        
    <?php
    $this->load->view('layout/default/menu-crear.php');
    ?>

</section>
<!-- END CONTENT-->

<!-- lista modals -->

<div id="Obtener" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?=label('confirmarObtenerPlan');?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="<?=base_url()?>pagos" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<!--Fin lista modals -->
