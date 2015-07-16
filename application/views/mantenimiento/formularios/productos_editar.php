<!-- START CONTENT  -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?=label('tituloFormularioProductoEditar');?></h1>
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
                                                <input id="producto_codigo" type="text" value="0001">
                                                <label for="producto_codigo"><?=label('formProducto_codigo');?></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="producto_nombre" type="text" value="Arroz">
                                                <label for="producto_nombre"><?=label('formProducto_nombre');?></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <textarea id="producto_descripcion" class="materialize-textarea" length="120">Esta es la descripción</textarea>
                                                <label for="producto_descripcion"><?=label('formProducto_descripcion');?></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="producto_precio" type="text" value="$2">
                                                <label for="producto_precio"><?=label('formProducto_precio');?></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <br />
                                                <label for="producto_imagen"><?=label('formProducto_imagen');?></label>
                                                <div class="file-field input-field col s12">
                                                    <input class="file-path validate" type="text"/>
                                                    <div class="btn" data-toggle="tooltip" title="<?=label('examinar')?>">
                                                        <span><i class="mdi-action-search"></i></span>
                                                        <input type="file" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-field col s12">
                                                <label><?=label('formProducto_caracteristicas');?></label>
                                                <br />
                                                <br />
                                                <table class="table striped">
                                                    <thead>
                                                        <tr>
                                                            <th><?=label('formProducto_caracteristicasDescripcion');?></th>
                                                            <th><?=label('formProducto_caracteristicasOpciones');?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Pantalla 35"</td>
                                                            <td>
                                                                <a class="modal-trigger icono-edicion" href="#editarCaracteristica" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                                    <i class="mdi-editor-mode-edit"></i>
                                                                </a>
                                                                <a class="modal-trigger icono-edicion" href="#eliminarCaracteristica" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                                    <i class="mdi-action-delete"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>HDD 2TB</td>
                                                            <td>
                                                                <a class="modal-trigger icono-edicion" href="#editarCaracteristica" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                                    <i class="mdi-editor-mode-edit"></i>
                                                                </a>
                                                                <a class="modal-trigger icono-edicion" href="#eliminarCaracteristica" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                                    <i class="mdi-action-delete"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Procesador Intel Core I7</td>
                                                            <td>
                                                                <a class="modal-trigger icono-edicion" href="#editarCaracteristica" data-toggle="tooltip" title="<?=label('tooltip_verEditar')?>">
                                                                    <i class="mdi-editor-mode-edit"></i>
                                                                </a>
                                                                <a class="modal-trigger icono-edicion" href="#eliminarCaracteristica" data-toggle="tooltip" title="<?=label('tooltip_eliminar')?>">
                                                                    <i class="mdi-action-delete"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            <br />
                                            <a href="#agregarCaracteristica" class="btn btn-default modal-trigger">
                                                <?=label('formProducto_nuevaCaracteristica')?>
                                            </a>
                                            <hr />
                                        </div>

                                        <div class="input-field col s12 envio-formulario">
                                            <button class="btn waves-effect waves-light right" type="submit" name="action"><?=label('formProducto_editar');?>
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


<!-- lista modals -->
<div id="agregarCaracteristica" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <textarea id="caracteristica_descripcion" class="materialize-textarea" length="120"></textarea>
            <label for="caracteristica_descripcion"><?=label('formProducto_caracteristicasDescripcion');?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close"><?=label('cancelar');?></a>
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<div id="editarCaracteristica" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
    </div>
    <div class="modal-content">
        <div class="input-field col s12">
            <textarea id="caracteristica_descripcion" class="materialize-textarea" length="120">Pantalla de 35"</textarea>
            <label for="caracteristica_descripcion"><?=label('formProducto_caracteristicasDescripcion');?></label>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close"><?=label('cancelar');?></a>
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<div id="eliminarCaracteristica" class="modal">
    <div class="modal-header">
        <p><?=label('nombreSistema');?></p>
    </div>
    <div class="modal-content">
        <p><?=label('confirmarEliminarCaracteristica');?></p>
    </div>
    <div class="modal-footer black-text">
        <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close"><?=label('cancelar');?></a>
        <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close"><?=label('aceptar');?></a>
    </div>
</div>
<!-- Fin lista modals -->