<!-- START CONTENT  -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1 class="breadcrumbs-title"><?=label('tituloGenerarEmbed');?></h1>
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

                                        <div class="col-sm-12 col-md-12">
                                            <p>Tipo de formulario</p>
                                            <select>
                                                <option value="">Seleccionar</option>
                                                <option value="1"><?=label('incluir') ?></option>
                                                <option value="2"><?=label('noIncluir') ?></option>
                                            </select>
                                        </div>

                                        <div class="col-sm-12 col-md-12">
                                            <div class="col-md-6">
                                                <p>Seleccione las categorías que desea mostrar</p>
                                            </div>
                                            <div class="input-group col-md-6" >
                                                <div>
                                                    <input id="generic_search" type="text" class="form-control" placeholder="Buscar...">
                                                </div>
                                                <span class="input-group-btn">
                                                    <button class="btn btn-blue" type="button">Buscar</button>
                                                </span>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="embed_categoria1" type="checkbox">
                                                <label for="embed_categoria1"><?=label('formEmbed_categoria1');?></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="embed_categoria2" type="checkbox">
                                                <label for="embed_categoria2"><?=label('formEmbed_categoria2');?></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="embed_categoria3" type="checkbox">
                                                <label for="embed_categoria3"><?=label('formEmbed_categoria3');?></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="embed_categoria4" type="checkbox">
                                                <label for="embed_categoria4"><?=label('formEmbed_categoria4');?></label>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-12">
                                            <p>¿Desea mostrar el precio de los productos/servicios?</p>
                                            <select>
                                                <option value="">Seleccionar</option>
                                                <option value="1"><?=label('si') ?></option>
                                                <option value="2"><?=label('no') ?></option>
                                            </select>
                                        </div>

                                        <div class="col-sm-12 col-md-12">
                                            <p>Seleccione la forma en que desea mostrar el embed</p>
                                            <select>
                                                <option value="">Seleccionar</option>
                                                <option value="1"><?=label('vertical') ?></option>
                                                <option value="2"><?=label('horizontal') ?></option>
                                            </select>
                                        </div>

                                        <div class="col-sm-12 col-md-12">
                                            <p>Código del embed generado</p>
                                            <div class="bloque-embed-codigo-generado">
                                                <p> Texto generado para pegar en el sitio</p>
                                            </div>
                                            <span class="input-group-btn">
                                                <button class="btn btn-blue" type="button"><?=label('copiarCodigo') ?></button>
                                            </span>
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