<!-- START CONTENT -->

<section id="content">

    <!--start container-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloListaPlanes'); ?></h1>

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
                                <div class="card lista-elementos" id="listaPlanes">
                                    <div id="table-datatables">
                                        <div class="row">
                                            <div class="col s12 m12 l12">
                                                <table id="data-table-simple" class="responsive-table display"
                                                       cellspacing="0">
                                                    <div id="boton_nuevo">
                                                        <a href="<?= base_url() ?>administrador/planes"
                                                           class="btn btn-default modal-trigger"><?= label('planNuevo'); ?></a>
                                                    </div>
                                                    <thead>
                                                    <tr>
                                                        <th><?= label('tablaPlanes_nombre'); ?></th>
                                                        <th><?= label('tablaPlanes_costo'); ?></th>
                                                        <th><?= label('tablaPlanes_beneficios'); ?></th>
                                                        <th><?= label('tablaPlanes_opciones'); ?></th>
                                                    </tr>
                                                    </thead>

                                                    <tfoot>
                                                    <!--                                                    <tr>-->
                                                    <!--                                                        <th>-->
                                                    <? //=label('tablaPlanes_nombre');?><!--</th>-->
                                                    <!--                                                        <th>-->
                                                    <? //=label('tablaPlanes_costo');?><!--</th>-->
                                                    <!--                                                        <th>-->
                                                    <? //=label('tablaPlanes_beneficios');?><!--</th>-->
                                                    <!--                                                        <th>-->
                                                    <? //=label('tablaPlanes_opciones');?><!--</th>-->
                                                    <!--                                                    </tr>-->
                                                    </tfoot>

                                                    <tbody>

                                                    <tr>
                                                        <td><a href="#">Básico</a></td>
                                                        <td>$15</td>
                                                        <td>Cotizar, Embed</td>
                                                        <td>
                                                            <a class="btn_editar modal-trigger"
                                                               href="#Editar"><?= label('editar'); ?></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#">Avanzado</a></td>
                                                        <td>$25</td>
                                                        <td>Cotizar, Embed, Vender</td>
                                                        <td>
                                                            <a class="btn_editar modal-trigger"
                                                               href="#Editar"><?= label('editar'); ?></a>
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
<div id="Editar" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <input id="plan_nombre" type="text" value="Básico">
            <label for="plan_nombre"><?= label('formPlan_nombre'); ?></label>
        </div>
        <div class="input-field col s12">
            <textarea id="plan_descripcion" class="materialize-textarea" length="120"></textarea>
            <label for="plan_descripcion"><?= label('formPlan_descripcion'); ?></label>
        </div>
        <div class="input-field col s12">
            <input id="plan_costo" type="text" value="$15">
            <label for="plan_costo"><?= label('formPlan_costo'); ?></label>
        </div>
        <p>Seleccione los beneficios</p>

        <div class="input-field col s12">
            <input id="plan_beneficio1" type="checkbox" checked></textarea>
            <label for="plan_beneficio1"><?= label('formPlan_beneficio1'); ?></label>
        </div>
        <div class="input-field col s12">
            <input id="plan_beneficio2" type="checkbox" checked></textarea>
            <label for="plan_beneficio2"><?= label('formPlan_beneficio2'); ?></label>
        </div>
        <div class="input-field col s12">
            <input id="plan_beneficio3" type="checkbox"></textarea>
            <label for="plan_beneficio3"><?= label('formPlan_beneficio3'); ?></label>
        </div>
        <div class="input-field col s12">
            <input id="plan_beneficio4" type="checkbox"></textarea>
            <label for="plan_beneficio4"><?= label('formPlan_beneficio4'); ?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<!--Fin lista modals -->
