<!-- START CONTENT -->
<section id="content">
    <!--start container-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloListaSolicitudesConCliente'); ?></h1>
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
                                <div class="card lista-elementos">

                                    <div id="table-datatables">
                                        <!-- <h4 class="header">DataTables example</h4> -->
                                        <div class="row">

                                            <div class="col s12 m12 l12">
                                                <table id="data-table-simple" class="responsive-table display"
                                                       cellspacing="0">
                                                    <thead>
                                                    <tr>
                                                        <th><?= label('tablaSolicitudes_nombre'); ?></th>
                                                        <th><?= label('tablaSolicitudes_correo'); ?></th>
                                                        <th><?= label('tablaSolicitudes_fecha'); ?></th>
                                                        <th><?= label('tablaSolicitudes_descripcion'); ?></th>
                                                        <th><?= label('tablaSolicitudes_opciones'); ?></th>
                                                    </tr>
                                                    </thead>
                                                    <tfoot>
                                                    <!--                                          <tr>-->
                                                    <!--                                             <th>-->
                                                    <? //=label('tablaSolicitudes_nombre');?><!--</th>-->
                                                    <!--                                             <th>-->
                                                    <? //=label('tablaSolicitudes_correo');?><!--</th>-->
                                                    <!--                                             <th>-->
                                                    <? //=label('tablaSolicitudes_fecha');?><!--</th>-->
                                                    <!--                                             <th>-->
                                                    <? //=label('tablaSolicitudes_descripcion');?><!--</th>-->
                                                    <!--                                             <th>-->
                                                    <? //=label('tablaSolicitudes_opciones');?><!--</th>-->
                                                    <!--                                          </tr>-->
                                                    </tfoot>
                                                    <tbody>
                                                    <tr>
                                                        <td>Mario Mendez</td>
                                                        <td>mario@gmail.com</td>
                                                        <td>25-10-2015</td>
                                                        <td>Necesito una cotización para una fiesta</td>
                                                        <td>
                                                            <a class="modal-trigger icono-edicion"
                                                               href="<?= base_url() ?>solicitud/ver_solicitud"
                                                               data-toggle="tooltip"
                                                               title="<?= label('tooltip_verEditar') ?>">
                                                                <i class="mdi-editor-mode-edit"></i>
                                                            </a>
                                                            <!--                                                            <a class="modal-trigger" href="#eliminarContacto">-->
                                                            <? //=label('eliminar');?><!--</a>-->
                                                            <a class="modal-trigger icono-edicion"
                                                               href="#eliminarSolicitud" data-toggle="tooltip"
                                                               title="<?= label('tooltip_eliminar') ?>">
                                                                <i class="mdi-action-delete"></i>
                                                            </a>
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

<div id="eliminarSolicitud" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?= label('confirmarEliminarSolicitud'); ?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
    </div>
</div>
<!--Fin lista modals