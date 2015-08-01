
    <section class="cover fullscreen image-slider slider-all-controls controls-inside parallax slider-inicio">
        <ul class="slides">
            <li class="overlay image-bg">
                <div class="background-image-holder">
                    <img alt="image" class="background-image" src="<?=base_url()?>assets/img/gestion01.jpg">
                </div>
                <div class="container v-align-transform">
                    <div class="row">
                        <div class="col-md-6 col-sm-8 texto-slider">
                            <h1 class="mb40 mb-xs-16 large"><?=label('slogan');?>&nbsp;</h1>
                            <h6 class="uppercase mb16"><?=label('textoPrincipal');?></h6>
                            <p class="lead mb40"> </p>
                            <a class="btn btn-lg boton-claro" href="<?=base_url()?>inicio" style="border: 2px solid white"><?=label('pruebeloGratis');?></a>
                        </div>
                    </div>

                </div>

            </li>
        </ul>
    </section>

    <section class="bg-primary pb0">
        <div class="container pt80">
            <div class="row mb24 mb-xs-0">
                <div class="col-sm-10 col-sm-offset-1 text-center">
                    <h1 class="large"><?=label('conTouch');?></h1>
                    <p class="lead"><?=label('textoSecundario');?></p>
                </div>
            </div>



            <div class="row imagen-inicio">
                <img alt="image" src="<?=base_url()?>assets/img/app1.png">
            </div>

        </div>

    </section>

    <section class="number-users">
        <div class="container">
            <div class="row mb40 mb-xs-0">
                <div class="col-sm-12 text-center">
                    <h4 class="uppercase"> </h4>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-5 text-right text-center-xs">
                    <h1 class="large mb8"><?=label('numeroEmpresas');?></h1>
                    <h6 class="uppercase"><?=label('empresasUtilizandoTouch');?></h6>
                </div>
                <div class="col-md-2 text-center hidden-sm hidden-xs">
                    <i class="ti-infinite icon icon-lg color-primary mt8 mt-xs-0"></i>
                </div>
                <div class="col-sm-6 col-md-5 text-center-xs">
                    <h1 class="large mb8"><?=label('numeroCotizaciones');?></h1>
                    <h6 class="uppercase"><?=label('cotizacionesEnviadas');?></h6>
                </div>
            </div>

        </div>

    </section>

    <section id="planes">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h4 class="uppercase mb16"><?=label('planes');?></h4>
                    <p class="lead mb64">
                        <?=label('textoPlan');?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="pricing-table pt-2 text-center">
                        <h5 class="uppercase"><?=label('nombrePlan1');?></h5>
                        <span class="price"><?=label('montoPlan1');?></span>
                        <p class="lead"><?=label('tiempoPlan1');?></p>
                        <a class="btn btn-filled btn-lg boton-normal" href="#"><?=label('iniciar');?></a>
                        <ul>
                            <li>Clientes <br>Cotizaciones <br>Productos <br>Proveedores<br>Proveedores<br>Proveedores<br>Proveedores<br>&lt;Embed?&nbsp; </li>
                            <li> </li>
                            <li> </li>
                            <li> </li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="pricing-table pt-2 boxed text-center">
                        <h5 class="uppercase"><?=label('nombrePlan2');?></h5>
                        <span class="price"><?=label('montoPlan2');?></span>
                        <p class="lead"><?=label('tiempoPlan2');?></p>
                        <a class="btn btn-filled btn-lg boton-normal" href="#"><?=label('iniciar');?></a>
                        <ul>
                            <li>Clientes <br>Cotizaciones <br>Productos <br>Proveedores<br>Proveedores<br>Proveedores<br>Proveedores<br>&lt;Embed&gt;<br></li>
                            <li> </li>
                            <li> </li>
                            <li> </li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="pricing-table pt-2 emphasis text-center">
                        <h5 class="uppercase"><?=label('nombrePlan3');?></h5>
                        <span class="price"><?=label('montoPlan3');?></span>
                        <p class="lead"><?=label('tiempoPlan3');?></p>
                        <a class="btn btn-white btn-lg boton-normal" href="#" style="border: 2px solid white"><?=label('iniciar');?>Iniciar</a>
                        <ul>
                            <li>
                                <strong>Clientes <br>Cotizaciones <br>Productos <br>Proveedores<br>Proveedores<br>Proveedores<br>Proveedores<br>&lt;Embed&gt;&nbsp;&nbsp;<br>Factura digital</strong></li>
                            <li><b><?=label('pagosEnLinea');?></b></li>
                            <li><br></li>
                            <li> </li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>

    </section>

    <section id="contacto">
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-sm-4 col-md-5 col-xs-offset-2 col-sm-offset-1 col-md-offset-1" style="text-align: center;">
                    <h4 class="uppercase"><?=label('slogan');?></h4>
                    <p>
                        <?=label('textoContacto');?></p>
                    <hr>
                    <p> </p>
                    <hr>
                    <p><strong>C:</strong><?=label('correoInicio');?>&nbsp; &nbsp; &nbsp;<br><strong>T:</strong><?=label('telefonoInicio');?>&nbsp; &nbsp; &nbsp;<br>
                    </p>
                </div>
                <div class="col-xs-10 col-sm-6 col-md-5 col-xs-offset-1 col-sm-offset-1 col-md-offset-1" style="margin-top: 3%;">
                    <form class="form-email" data-success="Excelente! Estaremos en contacto pronto! Keep in Touch!" data-error="Debes ingresar la información solicitada!" success-redirect="hello@touchcr.com">
<!--                        <input type="text" class="validate-required" name="name" placeholder="Nombre">-->
<!--                        <input type="text" class="validate-required validate-email" name="email" placeholder="Correo electrónico">-->
<!--                        <textarea class="validate-required" name="message" rows="4" placeholder="Message"></textarea>-->
                        <input type="text" class="campo-registro" name="name" placeholder="Nombre">
                        <input type="text" class="campo-registro" name="email" placeholder="Correo electrónico">
                        <textarea class="campo-registro" name="message" placeholder="Message"></textarea>
                        <input id="send-message" type="submit" value="Enviar">
                    </form>
                </div>
            </div>

        </div>

    </section>