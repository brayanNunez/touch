<!-- START CONTENT -->

<section id="content">

    <!--start container-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?=label('tituloListaPagos');?></h1>

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
                                <div class="card lista-elementos" id="listaPagos">
                                    <div id="table-datatables">
                                        <div class="row">
                                            <div class="col s12 m12 l12">
                                                <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                                    <thead>
                                                    <tr>
                                                        <th><?=label('tablaPagos_empresa');?></th>
                                                        <th><?=label('tablaPagos_fecha');?></th>
                                                        <th><?=label('tablaPagos_pago');?></th>
                                                        <th><?=label('tablaPagos_opciones');?></th>
                                                    </tr>
                                                    </thead>

                                                    <tfoot>
<!--                                                    <tr>-->
<!--                                                        <th>--><?//=label('tablaPagos_empresa');?><!--</th>-->
<!--                                                        <th>--><?//=label('tablaPagos_fecha');?><!--</th>-->
<!--                                                        <th>--><?//=label('tablaPagos_pago');?><!--</th>-->
<!--                                                        <th>--><?//=label('tablaPagos_opciones');?><!--</th>-->
<!--                                                    </tr>-->
                                                    </tfoot>

                                                    <tbody>

                                                    <tr>
                                                        <td><a href="#">Springers</a></td>
                                                        <td>2015/06/05</td>
                                                        <td>$30</td>
                                                        <td>
                                                            <a class="btn_verComprobante modal-trigger" href="#verComprobante"><?=label('ver_comprobante');?></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#">Tienda U</a></td>
                                                        <td>2015/05/05</td>
                                                        <td>$30</td>
                                                        <td>
                                                            <a class="btn_verComprobante modal-trigger" href="#verComprobante"><?=label('ver_comprobante');?></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#">Fiestas y +</a></td>
                                                        <td>2015/04/04</td>
                                                        <td>$50</td>
                                                        <td>
                                                            <a class="btn_verComprobante modal-trigger" href="#verComprobante"><?=label('ver_comprobante');?></a>
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
        <!--end container-->
</section>
<!-- END CONTENT-->

<!-- lista modals -->
<div id="verComprobante" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?=label('mostrarComprobante');?></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<!--Fin lista modals -->