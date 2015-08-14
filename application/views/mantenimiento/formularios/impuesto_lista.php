<!-- START CONTENT -->

<section id="content">

    <!--start container-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?=label('tituloListaImpuesto');?></h1>

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
                                                        <a href="#Agregar" class="btn btn-default modal-trigger"><?=label('impuestoNuevo');?></a>
                                                    </div>
                                                    <thead>
                                                    <tr>
                                                        <th><?=label('tablaImpuesto_nombre');?></th>
                                                        <th><?=label('tablaImpuesto_descripcion');?></th>
                                                        <th><?=label('tablaImpuesto_valor');?></th>
                                                        <th><?=label('tablaPlanes_opciones');?></th>
                                                    </tr>
                                                    </thead>

                                                    <tbody>

                                                    <tr>
                                                        <td>IV</td>
                                                        <td>Impuesto de venta</td>
                                                        <td>13%</td>
                                                        <td>
                                                            <a class="btn_editar modal-trigger icono-edicion" href="#Editar" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                                <i class="mdi-editor-mode-edit"></i>
                                                            </a>
                                                            <a class="btn_eliminar modal-trigger icono-edicion" href="#Eliminar" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
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
<div id="Agregar" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">

        <div class="input-field col s12">
            <input id="impuesto_nombre" type="text">
            <label for="impuesto_nombre"><?=label('formImpuesto_nombre');?></label>
        </div>

        <div class="input-field col s12">
            <input id="impuesto_descripcion" type="text">
            <label for="impuesto_descripcion"><?=label('formImpuesto_descripcion');?></label>
        </div>

        <div class="input-field col s12">
            <input id="impuesto_valor" type="number">
            <label for="impuesto_valor"><?=label('formImpuesto_valor');?></label>
        </div>

    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<div id="Editar" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">

        <div class="input-field col s12">
            <input id="impuesto_nombre" type="text" value="IV">
            <label for="impuesto_nombre"><?=label('formImpuesto_nombre');?></label>
        </div>

        <div class="input-field col s12">
            <input id="impuesto_descripcion" type="text" value="Impuesto de venta">
            <label for="impuesto_descripcion"><?=label('formImpuesto_descripcion');?></label>
        </div>

        <div class="input-field col s12">
            <input id="impuesto_valor" type="number" value="13">
            <label for="impuesto_valor"><?=label('formImpuesto_valor');?></label>
        </div>

    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<div id="Eliminar" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?=label('confirmarEliminarImpuesto');?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<!--Fin lista modals -->