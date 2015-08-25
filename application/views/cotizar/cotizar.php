<!-- START CONTENT -->
<section id="content">
    <!--start container-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="breadcrumbs-title"><?= label('tituloCotizacion'); ?></a></h5>
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
                                <!-- <div class="card"> -->
                                <div class="col s12 m12 l12">
                                    <a id="comentariosCotizacion" href="#" data-activates="chat-out"
                                       class="right waves-effect waves-block waves-light chat-collapse">
                                        <i class="mdi-communication-chat"></i></a>

                                    <div class="row">
                                        <div class="col s12">
                                            <ul class="tabs tab-demo z-depth-1">
                                                <li class="tab col s3">
                                                    <a id="botonPaso1" class="tab-paso-cotizacion active"
                                                       href="#paso1"><?= label('paso1'); ?></a>
                                                </li>
                                                <li class="tab col s3">
                                                    <a id="botonPaso2" class="tab-paso-cotizacion"
                                                       href="#paso2"><?= label('paso2'); ?></a>
                                                </li>
                                                <li class="tab col s3">
                                                    <a id="botonPaso3" class="tab-paso-cotizacion"
                                                       href="#paso3"><?= label('paso3'); ?></a>
                                                </li>
                                                <li class="tab col s3">
                                                    <a id="botonPaso4" class="tab-paso-cotizacion"
                                                       href="#paso4"><?= label('paso4'); ?></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- <div class="card"> -->
                                        <div class="col s12">
                                            <div id="paso1" class="card card-ContenidoPasos col s12">
                                                <?php $this->load->view('cotizar/paso1'); ?>
                                                <div class="atras_adelante">
                                                    <a class="siguiente right" href="#"
                                                       onclick="darclick(2);"><?= label('pasoSiguiente'); ?><i
                                                            class="mdi-image-navigate-next medium"></i></a>
                                                </div>
                                            </div>
                                            <div id="paso2" class="card card-ContenidoPasos col s12">
                                                <?php $this->load->view('cotizar/paso2_2'); ?>
                                                <br/>

                                                <div class="atras_adelante">
                                                    <a class="siguiente right" href="#"
                                                       onclick="darclick(3);"><?= label('pasoSiguiente'); ?><i
                                                            class="mdi-image-navigate-next medium"></i></a>
                                                    <a class="anterior left" href="#" onclick="darclick(1);"><i
                                                            class="mdi-image-navigate-before medium"></i><?= label('pasoAnterior'); ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="paso3" class="card card-ContenidoPasos col s12">
                                                <?php $this->load->view('cotizar/paso3'); ?>
                                                <br/>

                                                <div class="atras_adelante">
                                                    <a class="siguiente right" href="#"
                                                       onclick="darclick(4);"><?= label('pasoSiguiente'); ?><i
                                                            class="mdi-image-navigate-next medium"></i></a>
                                                    <a class="anterior left" href="#" onclick="darclick(2);"><i
                                                            class="mdi-image-navigate-before medium"></i><?= label('pasoAnterior'); ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="paso4" class="card card-ContenidoPasos col s12">
                                                <?php $this->load->view('cotizar/paso4'); ?>
                                                <br/>

                                                <div class="atras_adelante">
                                                    <a class="anterior left" href="#" onclick="darclick(3);"><i
                                                            class="mdi-image-navigate-before medium"></i><?= label('pasoAnterior'); ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <!-- </div> -->
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


<script type="text/javascript">


    function darclick(paso) {

        var obj = document.getElementById('botonPaso' + paso);

        obj.click();

    }
</script>


<div id="modalVistaPrevia" class="modal contenedorHoja col s12">
    <div class="listaHojas">
        <div class="hoja">
            <div id="encabezado">
                <div id="logo">
                    <img class="imagen" src="<?= base_url() ?>assets/dashboard/images/sombrero.png">
                    </img>
                </div>
                <div id="datosEncabezado">
                    <div class="datos" id="datos1">
                        <p id="nombreEmpresa">Mr Rabbit

                        <p>

                        <p>Código de cotización: MR-123</p>

                        <p>Cliente: faytur</p>

                        <p>Atención: Juan Pablo Mendez Piedra</p>

                        <p>Realizado por: Brayan Nuñez Rojas</p>
                    </div>
                    <div class="datos" id="datos2">
                        <p>Fecha:24/06/2015</p>

                        <p>Hora: 09:45 am</p>
                    </div>
                </div>
            </div>
            <div class="barra-horizontal" id="barra1">
            </div>
            <div id="detalleVista">
                <div id="datallesCotizacion">
                    <table style="width:100%">
                        <tr>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Imagen</th>
                            <th>Sub-total</th>
                        </tr>
                        <tr>
                            <td>Almuerzo</td>
                            <td>$6</td>
                            <td>20</td>
                            <td><img src="<?= base_url() ?>assets/dashboard/images/almuerzo.jpg"></td>
                            <td>$120</td>
                        </tr>
                        <tr>
                            <td>Fresco</td>
                            <td>$1</td>
                            <td>20</td>
                            <td></td>
                            <td>$20</td>
                        </tr>
                        <td>Música</td>
                        <td>$30</td>
                        <td></td>
                        <td><img src="<?= base_url() ?>assets/dashboard/images/musica.jpg"></td>
                        <td>$30</td>
                        </tr>
                    </table>
                </div>
                <div id="resultadoCotizacion">
                    <p>Impuesto: 13%</p>

                    <p>Descuento: 10%</p>

                    <p>Total: $170</p>
                </div>
            </div>
            <div class="barra-horizontal" id="barra2">
            </div>
            <div id="informacion">
                <div class="datos">
                    <p>Forma de pago: 50% primer mes, 50% segundo mes.</p>

                    <p>Válido por: 1,5 meses</p>

                    <p>Detalle: Por las especificaciones del equipo, es posible que existan variantes entre impresiones
                        sin que esto represente para nosotros problemas de calidad. La presente oferta tiene una validéz
                        de 15 días naturales a partir de esta fecha. </p>

                    <p>Nota: El cliente se hace responsable por el cumplimiento de las legislaciones vigentes en materia
                        de contenido y producto de las etiquetas solicitadas, y exime a Mr Rabbit de cualquier
                        responsabilidad en ese sentido.</p>
                    <br>

                    <p>Firma:__________________________</p>

                    <p id="nombreFirma">Emanuel Conejo</p>
                </div>
            </div>
            <div class="barra-horizontal" id="barra3">
            </div>
            <div id="footerCotizacion">
                <div id="logo">
                    <img class="imagen" src="<?= base_url() ?>assets/dashboard/images/sombrero.png">
                    </img>
                </div>
                <div id="datosFooter">
                    <div class="datos" id="datos1">
                        <p>Teléfono: 2494-33-44</p>

                        <p>Sitio web: www.mrrabbit.cr</p>

                        <p>Correo: info@mrrabbit.cr</p>
                    </div>
                    <div class="datos" id="datos2">
                        <p>Con el mayor deseo de servirle, me pongo a su entera disposición.</p>
                    </div>
                </div>
            </div>
            <div id="informacionSistema">
                <p>Esta cotización ha sido desarrollada en la plataforma: touchcr.com</p>
            </div>
        </div>
    </div>
</div>





 