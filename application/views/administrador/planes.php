<!-- START CONTENT  -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloFormularioPlan'); ?></h1>
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
                            <div class="col s12 m12 l8">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="plan_nombre" type="text">
                                            <label for="plan_nombre"><?= label('formPlan_nombre'); ?></label>
                                        </div>

                                        <div class="input-field col s12">
                                            <textarea id="plan_descripcion" class="materialize-textarea"
                                                      length="120"></textarea>
                                            <label for="plan_descripcion"><?= label('formPlan_descripcion'); ?></label>
                                        </div>

                                        <div class="input-field col s12">
                                            <input id="plan_costo" type="number">
                                            <label for="plan_costo"><?= label('formPlan_costo'); ?></label>
                                        </div>

                                        <p>Seleccione los beneficios</p>

                                        <div class="input-field col s12">
                                            <input id="plan_beneficio1" type="checkbox">
                                            <label for="plan_beneficio1"><?= label('formPlan_beneficio1'); ?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="plan_beneficio2" type="checkbox">
                                            <label for="plan_beneficio2"><?= label('formPlan_beneficio2'); ?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="plan_beneficio3" type="checkbox">
                                            <label for="plan_beneficio3"><?= label('formPlan_beneficio3'); ?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="plan_beneficio4" type="checkbox">
                                            <label for="plan_beneficio4"><?= label('formPlan_beneficio4'); ?></label>
                                        </div>

                                        <div class="input-field col s12 envio-formulario">
                                            <button class="btn waves-effect waves-light right" type="submit"
                                                    name="action"><?= label('formPlan_agregar'); ?>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end container-->
</section>
<!-- END CONTENT