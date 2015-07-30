<!-- START CONTENT  -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?=label('tituloGastos');?></h1>
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
                            <div class="col s12 m12 l12">
                                <div class="card lista-elementos">
                                    <div id="table-datatables">
                                        <div class="row">
                                            <div class="col s12 m12 l12">
                                                <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                                    <div class="agregar_nuevo">
                                                        <a href="#agregarGasto" class="btn modal-trigger"><?=label('tituloGastos_nuevo');?></a>
                                                    </div>
                                                    <thead>
                                                        <tr>
                                                            <th><?=label('tituloGastos_nombre');?></th>
                                                            <th><?=label('tituloGastos_monto');?></th>
                                                            <th><?=label('tituloGastos_opciones');?></th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
<!--                                                        <tr>-->
<!--                                                            <th>--><?//=label('tituloGastos_nombre');?><!--</th>-->
<!--                                                            <th>--><?//=label('tituloGastos_monto');?><!--</th>-->
<!--                                                            <th>--><?//=label('tituloGastos_opciones');?><!--</th>-->
<!--                                                        </tr>-->
                                                    </tfoot>
                                                    <tbody>
                                                        <tr>
                                                            <td>Transporte</td>
                                                            <td>$1000</td>
                                                            <td>
                                                                <a class="modal-trigger icono-edicion" href="#editarGasto" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                                    <i class="mdi-editor-mode-edit"></i>
                                                                </a>
                                                                <a class="modal-trigger icono-edicion" href="#eliminarGasto" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                                    <i class="mdi-action-delete"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Viaje a USA</td>
                                                            <td>$500</td>
                                                            <td>
                                                                <a class="modal-trigger icono-edicion" href="#editarGasto" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                                    <i class="mdi-editor-mode-edit"></i>
                                                                </a>
                                                                <a class="modal-trigger icono-edicion" href="#eliminarGasto" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                                    <i class="mdi-action-delete"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Licencia VS 2013</td>
                                                            <td>$10000</td>
                                                            <td>
                                                                <a class="modal-trigger icono-edicion" href="#editarGasto" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                                    <i class="mdi-editor-mode-edit"></i>
                                                                </a>
                                                                <a class="modal-trigger icono-edicion" href="#eliminarGasto" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
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
    </div>
    <!--end container-->
</section>
<!-- END CONTENT


<!-- lista modals -->
<div id="eliminarGasto" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <p><?=label('confirmarEliminarGasto');?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<div id="agregarGasto" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <input id="gasto_nombre" type="text">
            <label for="gasto_nombre"><?=label('formGastos_nombre');?></label>
        </div>
        <div class="input-field col s12">
            <input id="gasto_monto" type="text">
            <label for="gasto_monto"><?=label('formGastos_monto');?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<div id="editarGasto" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <input id="gasto_nombre" type="text" value="Transporte">
            <label for="gasto_nombre"><?=label('formGastos_nombre');?></label>
        </div>
        <div class="input-field col s12">
            <input id="gasto_monto" type="text" value="$1000">
            <label for="gasto_monto"><?=label('formGastos_monto');?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<!-- Fin lista modals -->