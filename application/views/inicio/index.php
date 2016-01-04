<?php 

        $listaGraficoLineal = '';
        $listaGraficoBarras = '';
        $sumaTotal = 0;

        for ($i = 0; $i < 12; $i++) {
            $existe = false;
            foreach ($resultado as $row) {
                if ($row['mes'] == ($i+1)) {
                    $existe = true;
                    $listaGraficoLineal .= $row['suma'].',';
                    $sumaTotal = $sumaTotal + $row['suma'];
                    $listaGraficoBarras .= $row['cantidad'].',';
                };
            }
            if(!$existe){
                $listaGraficoLineal .= '0,';
                $listaGraficoBarras .= '0,';
            }
        }; 
            
    ?>

<!-- START CONTENT -->
<section id="content">
    <!--start container-->
    <div class="container">
        <!--chart dashboard start-->
        <div id="chart-dashboard">
            <div class="row">
                <div class="col s12 m12 l8">
                    <div class="card">
                        <div class="card-move-up waves-effect waves-block waves-light">
                            <div class="move-up cyan darken-1">
                                <div>
                                    <span class="chart-title white-text"><?= label("grafica_ingresos"); ?></span>

                                    <div class="chart-revenue cyan darken-2 white-text">
                                        <p class="chart-revenue-total"><span class="moneda_signo"> </span><?=$sumaTotal?></p>

                                       <!--  <p class="chart-revenue-per"><i class="mdi-navigation-arrow-drop-up"></i> 21.80
                                            %</p> -->
                                    </div>
                                    <!-- <div class="switch chart-revenue-switch right">
                                        <label class="cyan-text text-lighten-5">
                                            Mes
                                            <input type="checkbox">
                                            <span class="lever"></span> Año
                                        </label>
                                    </div> -->
                                </div>
                                <div class="trending-line-chart-wrapper">
                                    <canvas id="trending-line-chart" height="70"></canvas>
                                </div>
                            </div>
                        </div>

                        <div id="card-graficos-inicio" class="card-content">
                        <!-- <span class="chart-title">Ingresos</span> -->
                            <!-- <a class="btn-floating btn-move-up waves-effect waves-light darken-2 right"><i
                                    class="mdi-content-add activator"></i></a> -->


                            <div class="col s12 m3 l3">
                                <div id="doughnut-chart-wrapper">
                                    <span class="chart-title"><?= label("grafica_tituloGraficaCantidad"); ?></span>
                                    <p><?= label("grafica_facturadas"); ?></p>

                                    <canvas id="doughnut-chart" height="0"></canvas>
                                    <!-- <div class="doughnut-chart-status">$4500
                                        <p class="ultra-small center-align">Vendido</p>
                                    </div> -->
                                </div>
                            </div>
                            <!-- <div class="col s12 m2 l2"> -->
                                <!-- <ul class="doughnut-chart-legend">
                                    <li class="mobile ultra-small"><span class="legend-color"></span>Apps</li>
                                    <li class="kitchen ultra-small"><span class="legend-color"></span> Software</li>
                                    <li class="home ultra-small"><span class="legend-color"></span> Sitios web</li>
                                </ul> -->
                            <!-- </div> -->
                            <div class="col s12 m5 l6">
                                <div class="trending-bar-chart-wrapper">
                                    <canvas id="trending-bar-chart" height="90"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- <p>s</p> -->

                        <!-- <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Ingresos mensuales <i
                                    class="mdi-navigation-close right"></i></span>
                            <table class="responsive-table">
                                <thead>
                                <tr>
                                    <th data-field="id">ID</th>
                                    <th data-field="month">Mes</th>
                                    <th data-field="item-sold">Item vendidos</th>
                                    <th data-field="item-price">Precio</th>
                                    <th data-field="total-profit">Total ingresos</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>January</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>February</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>March</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>April</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>May</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>June</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>July</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>August</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Septmber</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Octomber</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>November</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>December</td>
                                    <td>122</td>
                                    <td>100</td>
                                    <td>$122,00.00</td>
                                </tr>
                                </tbody>
                            </table>
                        </div> -->
                    </div>
                </div>
        <!--chart dashboard end-->

                <!--card stats start-->
                <div id="card-stats">
                    <div class="row">
                        <a href="<?= base_url() ?>cotizacion/index/1">
                            <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-content  green white-text">
                                        <p class="card-stats-title"><i class="mdi-action-note-add"></i> <?= label("inicio_estado_nueva"); ?></p>
                                        <h4 class="card-stats-number"><?=$cantidades['cantidadNueva']?></h4>
                                    </div>
                                    <div class="card-action  green darken-2">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?= base_url() ?>cotizacion/index/2">
                            <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-content purple white-text">
                                        <p class="card-stats-title"><i class="mdi-action-alarm-add"></i> <?= label("inicio_estado_espera"); ?></p>
                                        <h4 class="card-stats-number"><?=$cantidades['cantidadEspera']?></h4>
                                    </div>
                                    <div class="card-action purple darken-2">
                                        <div></div>

                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?= base_url() ?>cotizacion/index/3">
                            <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-content deep-purple white-text">
                                        <p class="card-stats-title"><i class="mdi-action-autorenew"></i>
                                            <?= label("inicio_estado_rechazada"); ?></p>
                                        <h4 class="card-stats-number"><?=$cantidades['cantidadRechazada']?></h4>

                                    </div>
                                    <div class="card-action  deep-purple darken-2">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?= base_url() ?>cotizacion/index/4">
                            <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-content blue-grey white-text">
                                        <p class="card-stats-title"><i class="mdi-content-send"></i> <?= label("inicio_estado_enviada"); ?></p>
                                        <h4 class="card-stats-number"><?=$cantidades['cantidadEnviada']?></h4>

                                    </div>
                                    <div class="card-action blue-grey darken-2">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?= base_url() ?>cotizacion/index/5">
                            <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-content  green white-text">
                                        <p class="card-stats-title"><i class="mdi-action-done"></i> <?= label("inicio_estado_finalizada"); ?></p>
                                        <h4 class="card-stats-number"><?=$cantidades['cantidadFinalizada']?></h4>

                                    </div>
                                    <div class="card-action  green darken-2">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?= base_url() ?>cotizacion/index/6">
                            <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-content deep-purple white-text">
                                        <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>
                                            <?= label("inicio_estado_facturada"); ?></p>
                                        <h4 class="card-stats-number"><?=$cantidades['cantidadFacturada']?></h4>

                                    </div>
                                    <div class="card-action  deep-purple darken-2">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="<?= base_url() ?>cotizacion">
                            <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-content green white-text">
                                        <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i>
                                            <?= label("inicio_totalGastoFijoMensual"); ?></p>
                                        <h4 class="card-stats-number"><span class="moneda_signo"></span><span id="total_gastosMensuales"></span></h4>

                                    </div>
                                    <div class="card-action  green darken-2">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!--card stats end-->

                <!--card widgets start-->
                <div id="card-widgets">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <div id="profile-card" class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="<?= base_url() ?>assets/dashboard/images/user-bg.jpg"
                                         alt="user background">
                                </div>
                                <div class="card-content">
                                    <img src="<?= base_url() ?>assets/dashboard/images/users.png" alt=""
                                         class="circle responsive-img activator card-profile-image">
                                    <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                                        <i class="mdi-editor-mode-edit"></i>
                                    </a>

                                    <span
                                        class="card-title activator grey-text text-darken-4"><?= label("inicio_gestionUsuarios"); ?></span>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4"><?= label("inicio_gestionUsuarios"); ?><i
                                            class="mdi-navigation-close right"></i></span>

                                    <a href="<?= base_url() ?>clientes/agregar"><p><i
                                                class="mdi-action-perm-identity cyan-text text-darken-2"></i><?= label("inicio_agregarClientes"); ?></p></a>
                                    <a href="<?= base_url() ?>proveedores/agregar"><p><i
                                                class="mdi-action-perm-identity cyan-text text-darken-2"></i><?= label("inicio_agregarPersonas"); ?></p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--card widgets end-->

                <!-- Floating Action Button -->
                <?php
                    $this->load->view('layout/default/menu-crear.php');
                ?>

                <!--<a href="#RegistroIndependiente" class="-text modal-trigger">Completar registro independiente</a>
                <a href="#RegistroEmpresa" class="-text modal-trigger">Completar registro empresa</a>-->
            </div>
        </div>
    </div>
    <!--end container-->
</section>
<!-- END CONTENT -->


<!--Script para calcular gastos fijos mensuales-->
<script type="text/javascript">
    function gastosFijosMensuales() {
        $.ajax({
            type: 'POST',
            url: '<?= base_url(); ?>gastos/gastosFijos',
            data: {  },
            async: false,
            success: function(response)
            {
                var $arrayGastosFijos = $.parseJSON(response);

                var totalGastosFijos = 0;
                for(var i = 0; i < $arrayGastosFijos.length; i++) {
                    var gastoFijo = $arrayGastosFijos[i];
                    var monto = 0;
                    switch (gastoFijo['formaPago']) {
                        case '1':
                            monto = parseFloat(gastoFijo['monto']) * 730.001;
                            break;
                        case '2':
                            monto = parseFloat(gastoFijo['monto']) * 30.4167;
                            break;
                        case '3':
                            monto = parseFloat(gastoFijo['monto']) * 4.34524;
                            break;
                        case '4':
                            monto = parseFloat(gastoFijo['monto']);
                            break;
                        case '5':
                            monto = parseFloat(gastoFijo['monto']) * 0.0833334;
                            break;
                    }
                    totalGastosFijos += monto;
                }

                $('#total_gastosMensuales').text(totalGastosFijos.toFixed(2));
            }
        });
    }

    $(document).ready(function () {
        gastosFijosMensuales();
    });



    var data = {
    labels : ["ENE","FEB","MAR","ABR","MAY","JUN","JUL","AGO","SET","OCT","NOV","DIC"],
    // ["ENERO","FEBRERO","MARZO","ABRIL","MAYO","JUNIO","JULIO","AGOSTO","SEPTIEMBRE","OCTUBRE","NOVIEMBRE","DICIEMBRE"],
    datasets : [
        {
            label: "First dataset",
            fillColor : "rgba(128, 222, 234, 0.6)",
            strokeColor : "#ffffff",
            pointColor : "#00bcd4",
            pointStrokeColor : "#ffffff",
            pointHighlightFill : "#ffffff",
            pointHighlightStroke : "#ffffff",
            data: [<?=$listaGraficoLineal?>]
        }
     //    ,{
     //     label: "Second dataset",
     //     fillColor : "rgba(128, 222, 234, 0.3)",
     //     strokeColor : "#80deea",
     //     pointColor : "#00bcd4",
     //     pointStrokeColor : "#80deea",
     //     pointHighlightFill : "#80deea",
     //     pointHighlightStroke : "#80deea",
     //     data: [1000, 5000, 2000, 4000, 0000, 50000, 80000,0000,0000,0000,0000,1400]
     // }
    ]
};

    var dataBarChart = {
    labels : ["E","F","M","A","M","J","J","A","S","O","N","D"],
    datasets: [
        {
            label: "Bar dataset",
            fillColor: "#46BFBD",
            strokeColor: "#46BFBD",
            highlightFill: "rgba(70, 191, 189, 0.4)",
            highlightStroke: "rgba(70, 191, 189, 0.9)",
            data: [<?=$listaGraficoBarras?>]
        }
    ]
};

</script>

<!-- lista modals -->
<!--Fin lista modals -->
