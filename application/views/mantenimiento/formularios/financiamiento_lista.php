<!-- START CONTENT -->

<section id="content">

    <!--start container-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?=label('tituloListaFinanciamiento');?></h1>

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
                                <div class="card lista-elementos" id="listaFinanciamiento">
                                    <div id="table-datatables">
                                        <div class="row">
                                            <div class="col s12 m12 l12">
                                                <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                                    <div id="boton_nuevo">
                                                        <a href="<?=base_url()?>financiamiento/nuevo" class="btn btn-default modal-trigger"><?=label('financiamientoNuevo');?></a>
                                                    </div>
                                                    <thead>
                                                    <tr>
                                                        <th><?=label('tablaFinanciamiento_nombre');?></th>
                                                        <th><?=label('tablaFinanciamiento_descripcion');?></th>
                                                        <th><?=label('tablaPlanes_opciones');?></th>
                                                    </tr>
                                                    </thead>
                                                    <tfoot>
                                                    <tr>
                                                        <th><?=label('tablaFinanciamiento_nombre');?></th>
                                                        <th><?=label('tablaFinanciamiento_descripcion');?></th>
                                                        <th><?=label('tablaPlanes_opciones');?></th>
                                                    </tr>
                                                    </tfoot>

                                                    <tbody>

                                                    <tr>
                                                        <td><a href="#">Contado</a></td>
                                                        <td>Se paga todo en un momento</td>
                                                        <td>
                                                            <a class="btn_editar modal-trigger" href="#Editar"><?=label('editar');?></a>
                                                            <a class="btn_eliminar modal-trigger" href="#Eliminar"><?=label('eliminar');?></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#">50-50</a></td>
                                                        <td>Se paga la mitad al inicio y se cancela al final</td>
                                                        <td>
                                                            <a class="btn_editar modal-trigger" href="#Editar"><?=label('editar');?></a>
                                                            <a class="btn_eliminar modal-trigger" href="#Eliminar"><?=label('eliminar');?></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="#">Entrega</a></td>
                                                        <td>Se paga todo al final</td>
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
            <input id="financiamiento_nombre" type="text" value="Contado">
            <label for="financiamiento_nombre"><?=label('formFinanciamiento_nombre');?></label>
        </div>

        <div class="input-field col s12">
            <textarea id="financiamiento_descripcion" class="materialize-textarea" length="120"></textarea>
            <label for="financiamiento_descripcion"><?=label('formFinanciamiento_descripcion');?></label>
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
        <p><?=label('confirmarEliminarFinanciamiento');?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close"><?=label('cancelar');?></a>
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<!--Fin lista modals -->
