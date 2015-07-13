<!-- START CONTENT -->

<section id="content">

    <!--start container-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?=label('tituloListaMonedas');?></h1>

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
                                <div class="card" id="listaMonedas">
                                    <div id="table-datatables">
                                        <div class="row">
                                            <div class="col s12 m12 l12">
                                                <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                                    <div id="boton_nuevo">
                                                        <a href="<?=base_url()?>administrador/monedas" class="btn btn-default modal-trigger"><?=label('monedaNuevo');?></a>
                                                    </div>
                                                    <thead>
                                                    <tr>
                                                        <th><?=label('tablaMonedas_nombre');?></th>
                                                        <th><?=label('tablaMonedas_signo');?></th>
                                                        <th><?=label('tablaMonedas_opciones');?></th>
                                                    </tr>
                                                    </thead>

                                                    <tfoot>
                                                    <tr>
                                                        <th><?=label('tablaMonedas_nombre');?></th>
                                                        <th><?=label('tablaMonedas_signo');?></th>
                                                        <th><?=label('tablaMonedas_opciones');?></th>
                                                    </tr>
                                                    </tfoot>

                                                    <tbody>

                                                    <tr>
                                                        <td><a href="#">Colón</a></td>
                                                        <td>¢</td>
                                                        <td>
                                                            <a class="btn_editar modal-trigger" href="#Editar"><?=label('editar');?></a>
                                                            <a class="btn_eliminar modal-trigger" href="#Eliminar"><?=label('eliminar');?></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#">Dólar</a></td>
                                                        <td>$</td>
                                                        <td>
                                                            <a class="btn_editar modal-trigger" href="#Editar"><?=label('editar');?></a>
                                                            <a class="btn_eliminar modal-trigger" href="#Eliminar"><?=label('eliminar');?></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#">Yen</a></td>
                                                        <td>¥</td>
                                                        <td>
                                                            <a class="btn_editar modal-trigger" href="#Editar"><?=label('editar');?></a>
                                                            <a class="btn_eliminar modal-trigger" href="#Eliminar"><?=label('eliminar');?></a>
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
        <p><?=label('nombreSistema');?></p>
    </div>
    <div class="modal-content">

        <div class="input-field col s12">
            <input id="moneda_nombre" type="text" value="Dólar">
            <label for="moneda_nombre"><?=label('formMoneda_nombre');?></label>
        </div>

        <div class="input-field col s12">
            <input id="moneda_signo" type="text" value="$">
            <label for="moneda_signo"><?=label('formMoneda_signo');?></label>
        </div>

    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('cancelar');?></a>
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>

<div id="Eliminar" class="modal">

    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
    </div>
    <div class="modal-content">
        <p><?=label('confirmarEliminarMoneda');?></p>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close"><?=label('cancelar');?></a>
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<!--Fin lista modals -->
