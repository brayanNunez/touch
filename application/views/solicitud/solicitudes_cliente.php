<!-- START CONTENT  -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?= label('tituloFormularioSolicitudes'); ?></h1>

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
                                <form class="col s12" action="<?= base_url() ?>cotizacion/cotizar">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="solicitud_nombre" type="text" readonly>
                                            <label for="solicitud_nombre"><?= label('formSolicitud_nombre'); ?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="solicitud_correo" type="email" readonly>
                                            <label for="solicitud_correo"><?= label('formSolicitud_correo'); ?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="solicitud_telefono" type="text" readonly>
                                            <label
                                                for="solicitud_telefono"><?= label('formSolicitud_telefono'); ?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="solicitud_fecha" type="text" readonly>
                                            <label for="solicitud_fecha"><?= label('formSolicitud_fecha'); ?></label>
                                        </div>
                                        <div class="input-field col s12">
                                            <label><?= label('formSolicitud_detalle'); ?></label>
                                            <br/>
                                            <br/>
                                            <table class="table striped">
                                                <thead>
                                                <tr>
                                                    <th><?= label('formSolicitud_tablaNombre'); ?></th>
                                                    <th><?= label('formSolicitud_tablaPrecio'); ?></th>
                                                    <th><?= label('formSolicitud_tablaCantidad'); ?></th>
                                                    <th><?= label('formSolicitud_tablaTotal'); ?></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Almuerzo</td>
                                                    <td>$500</td>
                                                    <td>10</td>
                                                    <td>$5000</td>
                                                </tr>
                                                <tr>
                                                    <td>Cena</td>
                                                    <td>$700</td>
                                                    <td>11</td>
                                                    <td>$7700</td>
                                                </tr>
                                                <tr>
                                                    <td>Animador</td>
                                                    <td>$1000</td>
                                                    <td>1</td>
                                                    <td>$1000</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="input-field col s12">
                                            <textarea id="solicitud_datosAdicionales" class="materialize-textarea"
                                                      length="120" readonly></textarea>
                                            <label
                                                for="solicitud_datosAdicionales"><?= label('formSolicitud_datosAdicionales'); ?></label>
                                        </div>
                                        <div class="input-field col s12 envio-formulario">
                                            <button class="btn waves-effect waves-light right" type="submit"
                                                    name="action"><?= label('formSolicitud_iniciar'); ?>
                                            </button>
                                            <br>
                                            <a class="modal-trigger" href="#eliminarSolicitud">Rechazar solicitud</a>
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
<!-- Fin lista modals -->