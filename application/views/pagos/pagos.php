<!--  START CONTENT  -->
<section id="content">
    <!--start container-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="breadcrumbs-title"><?= label('tituloPagos'); ?></a></h5>
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
                                <div class="card" id="card-reporte">
                                    <div id="formGeneral" class="section">

                                        <div id="boton_nuevo">
                                            <a href="<?=base_url()?>pagos/listaPlan" class="btn btn-default modal-trigger">Cambiar de plan</a>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s12 m6 l6">
                                                <div class="input-field col s12">
                                                    <h5 class="input-field col s12"><?=label('datosDelServicio');?></h5>
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m6 l6">
                                                <div class="input-field col s12">
                                                    <a href="<?=base_url()?>pagos/listaPlan" class="btn btn-default modal-trigger input-field col s12">Cambiar de plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12 m6 l6">
                                                <div class="input-field col s12">
                                                    <input id="monto_mensual" type="text" value="$20" readonly>
                                                    <label for="monto_mensual"><?= label('monto_mensual'); ?></label>
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m6 l6">
                                                <div class="input-field col s12">
                                                    <input id="tipo_plan" type="text" value="Básico" readonly>
                                                    <label><?=label('tipo_plan');?></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s12 m6 l6">
                                                <div class="input-field col s12">
                                                    <input id="fecha_pago" type="text" value="18/06/2015" readonly>
                                                    <label for="fecha_pago"><?= label('fecha_pago'); ?></label>
                                                </div>
                                            </div>
                                            <div class="input-field col s12 m6 l6">
                                                <div class="input-field col s12">
                                                    <input id="estado_pago" type="text" value="Moroso" readonly>
                                                    <label for="estado_pago"><?= label('estado_pago'); ?></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h5><?= label('lista_pagos_pendientes'); ?></h5>
                                    <table class="table striped">
                                        <thead>
                                        <tr>
                                            <th><?= label('tablaPagos_fecha'); ?></th>
                                            <th><?= label('tablaPagos_monto'); ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>18/06/2015</td>
                                            <td>$20</td>
                                        </tr>
                                        <tr>
                                            <td>18/06/2015</td>
                                            <td>$20</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="section reporte-generar">
                                        <a href="#" class="btn btn-default"><?= label('pagar_servicio'); ?></a>
                                    </div>

                                    <div id="table-datatables">
                                        <div class="row">
                                            <div class="col s12 m12 l12">
                                                <h5><?= label('lista_pagos_recientes'); ?></h5>
                                                <table id="data-table-simple" class="responsive-table display"
                                                       cellspacing="0">
                                                    <thead>
                                                    <tr>
                                                        <th><?= label('tablaPagos_fecha'); ?></th>
                                                        <th><?= label('tablaPagos_monto'); ?></th>
                                                    </tr>
                                                    </thead>
                                                    <tfoot>
                                                    <!--                                                    <tr>-->
                                                    <!--                                                        <th>-->
                                                    <? //=label('tablaPagos_fecha');?><!--</th>-->
                                                    <!--                                                        <th>-->
                                                    <? //=label('tablaPagos_monto');?><!--</th>-->
                                                    <!--                                                    </tr>-->
                                                    </tfoot>
                                                    <tbody>
                                                    <tr>
                                                        <td>18/05/2015</td>
                                                        <td>$20</td>
                                                    </tr>
                                                    <tr>
                                                        <td>18/04/2015</td>
                                                        <td>$20</td>
                                                    </tr>
                                                    <tr>
                                                        <td>18/03/2015</td>
                                                        <td>$20</td>
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

        <?php
        $this->load->view('layout/default/menu-crear.php');
        ?>

</section>
<!-- END CONTENT-->

