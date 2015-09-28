<section>
    <div class="container">

        <div class="row bloque-home1">
            <div class="col-sm-12 text-center">
                <h4 class="uppercase mb16"><?= label('precios'); ?></h4>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="pricing-table pt-2 text-center">
                    <h5 class="uppercase"><?= label('nombrePlan1'); ?></h5>
                    <span class="price"><?= label('montoPlan1'); ?></span>

                    <p class="lead"><?= label('tiempoPlan1'); ?></p>
                    <a class="btn btn-filled btn-lg" href="<?= base_url() ?>welcome/registro"><?= label('iniciar'); ?></a>
                </div>

            </div>
            <div class="col-md-4 col-sm-6">
                <div class="pricing-table pt-2 boxed text-center">
                    <h5 class="uppercase"><?= label('nombrePlan2'); ?></h5>
                    <span class="price"><?= label('montoPlan2'); ?></span>

                    <p class="lead"><?= label('tiempoPlan2'); ?></p>
                    <a class="btn btn-filled btn-lg" href="<?= base_url() ?>welcome/registro"><?= label('iniciar'); ?></a>
                </div>

            </div>
            <div class="col-md-4 col-sm-6">
                <div class="pricing-table pt-2 emphasis text-center">
                    <h5 class="uppercase"><?= label('nombrePlan3'); ?></h5>
                    <span class="price"><?= label('montoPlan3'); ?></span>

                    <p class="lead"><?= label('tiempoPlan3'); ?></p>
                    <a class="btn btn-white btn-lg" href="<?= base_url() ?>welcome/registro"><?= label('iniciar'); ?></a>
                </div>
            </div>
        </div>

    </div>

</section>