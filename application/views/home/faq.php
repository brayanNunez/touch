<section>
    <div class="container">

        <div class="row col-sm-12 col-md-12 bloque-home2">
            <div class="col-sm-6 col-md-6 text-center ">
                <h4 class="uppercase mb16"><?= label('faq2'); ?></h4>
            </div>

            <!--<div class="input-group col-sm-5 col-md-5">
                <div>
                    <input id="generic_search" type="text" class="form-control" placeholder="Buscar...">
                </div>
                <span class="input-group-btn">
                    <button class="btn btn-blue" type="button">Buscar</button>
                </span>
            </div>-->

        </div>

        <div class=" panel-group row col-md-12" id="accordion">

            <div class="panel panel-default">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    <div class="panel-heading">
                        <h4 class="panel-title title-acordeon">
                            <?= label('texto_FAQsubtitulo1'); ?>
                        </h4>
                    </div>
                </a>

                <div id="collapseTwo" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div>
                            <h4 class="current_text"><?= label('texto_pregunta1'); ?></h4>

                            <p><?= label('texto_respuesta1_1'); ?><a href="<?= base_url() ?>welcome/registro"><?= label('texto_respuesta1_2'); ?></a></p>
                            <hr>
                        </div>
                        <div>
                            <h4 class="current_text"><?= label('texto_pregunta2'); ?></h4>
                            <ul>
                                <li><p><?= label('texto_respuesta2_1'); ?></p></li>
                                <li><p><?= label('texto_respuesta2_2'); ?></p></li>
                                <li><p><?= label('texto_respuesta2_3'); ?></p></li>
                                <li><p><?= label('texto_respuesta2_4'); ?></p></li>
                                <li><p><?= label('texto_respuesta2_5'); ?></p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    <div class="panel-heading">
                        <h4 class="panel-title title-acordeon">
                            <?= label('texto_FAQsubtitulo2'); ?>
                        </h4>
                    </div>
                </a>

                <div id="collapseTwo" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div>
                            <h4 class="current_text"><?= label('texto_pregunta3'); ?></h4>

                            <p><?= label('texto_respuesta3'); ?></p>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>

</section>