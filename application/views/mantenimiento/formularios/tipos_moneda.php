<!-- START CONTENT  -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?=label('tituloTiposMoneda');?></h1>

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
                                            <select>
                                                <option value="" selected disabled><?=label('tiposMoneda_selecionarUno');?></option>
                                                <option value="1">Colón</option>
                                                <option value="2">Dólar</option>
                                                <option value="3">Euro</option>
                                                <option value="4">Peso mexicano</option>
                                            </select>
                                            <label for="cliente_tipo"><?=label('tiposMoneda_defecto');?></label>
                                        </div>
                                        <div class="col s12 m12 l12" style="margin-top: 5%; padding: 0%; ">
                                            <div class="col s12">
                                                <label><?=label('tiposMoneda_permitidos');?></label>
                                                <br />
                                                <br />
                                            </div>
                                            <div class="col s12">
                                                <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th><?=label('tiposMoneda_nombre');?></th>
                                                            <th><?=label('tiposMoneda_opciones');?></th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th><?=label('tiposMoneda_nombre');?></th>
                                                            <th><?=label('tiposMoneda_opciones');?></th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                        <tr>
                                                            <td>Colón</td>
                                                            <td>
                                                                <a class="modal-trigger icono-edicion" href="#eliminarTipo" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                                    <i class="mdi-action-delete"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Dólar</td>
                                                            <td>
                                                                <a class="modal-trigger icono-edicion" href="#eliminarTipo" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                                    <i class="mdi-action-delete"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Euro</td>
                                                            <td>
                                                                <a class="modal-trigger icono-edicion" href="#eliminarTipo" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                                    <i class="mdi-action-delete"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="input-field col s12">
                                                    <a href="#agregarTipo" class="btn modal-trigger"><?=label('tiposMoneda_nuevo');?></a>
                                                </div>
                                            </div>
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
<div id="eliminarTipo" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
    </div>
    <div class="modal-content">
        <p><?=label('confirmarEliminarTipoMoneda');?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close"><?=label('cancelar');?></a>
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<div id="agregarTipo" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <select>
                <option value="" selected disabled><?=label('tiposMoneda_selecionarUno');?></option>
                <option value="1">Colón</option>
                <option value="2">Dólar</option>
                <option value="3">Euro</option>
                <option value="4">Peso mexicano</option>
            </select>
            <label for="cliente_tipo"><?=label('tiposMoneda_defecto');?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close"><?=label('cancelar');?></a>
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<!-- Fin lista modals -->