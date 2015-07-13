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

                                        <div class="col-sm-12">
                                            <p>Tipo de formulario</p>
                                            <select onChange="embed(this)">
                                                <option value="">Seleccionar</option>
                                                <option value="1"><?=label('incluir') ?></option>
                                                <option value="2"><?=label('noIncluir') ?></option>
                                            </select>
                                        </div>

                                    <div id="embedCategoria">
                                        <div id="tableHeader">
                                            <div class="dataTables_filter search">
                                                <label>
                                                    <?=label('Producto_tablaBusqueda');?>
                                                    <input id="search" type="search" aria-controls="data-table-simple">
                                                </label>
                                            </div>
                                        </div>
                                        <div id="table">
                                            <p>Seleccione las categorias o subcategorias que desea mostrar</p>
                                            <table id="example" class="table table-responsive striped" data-search="true">
                                                <thead>
                                                    <tr>
                                                        <th><?=label('Producto_tablaNombre')?></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-tt-id="1">
                                                        <td>
                                                            <input type="checkbox" class="filled-in" id="footerfilled-in-box4" checked="checked">
                                                            <label for="footerfilled-in-box4">Productos</label>
                                                        </td>
                                                    </tr>
                                                    <tr data-tt-id="2" data-tt-parent-id="1">
                                                        <td><span style="margin-left: 20px">
                                                            <input type="checkbox" class="filled-in" id="idAlimentos" checked="checked">
                                                            <label for="idAlimentos">Alimentacion</label>
                                                        </span></td>

                                                    </tr>
                                                    <tr data-tt-id="3" data-tt-parent-id="2">
                                                        <td><a href="<?=base_url()?>productos/editar">Arroz</a></td>

                                                    </tr>
                                                    <tr data-tt-id="4" data-tt-parent-id="1">
                                                        <td><span style="margin-left: 20px">
                                                            <input type="checkbox" class="filled-in" id="idBebidas" checked="checked">
                                                            <label for="idBebidas">Bebidas</label>


                                                        </span></td>

                                                    </tr>
                                                    <tr data-tt-id="5" data-tt-parent-id="4">
                                                        <td><span style="margin-left: 20px">
                                                             <input type="checkbox" class="filled-in" id="idGaseosas" checked="checked">
                                                            <label for="idGaseosas">Gaseosas</label>
                                                        </span></td>

                                                    </tr>
                                                    <tr data-tt-id="6" data-tt-parent-id="5">
                                                        <td><a href="<?=base_url()?>productos/editar">Coca Cola</a></td>


                                                    </tr>
                                                    <tr data-tt-id="7" data-tt-parent-id="5">
                                                        <td><a href="<?=base_url()?>productos/editar">Fanta</a></td>

                                                    </tr>
                                                    <tr data-tt-id="8" data-tt-parent-id="4">
                                                        <td><span style="margin-left: 20px">
                                                            <input type="checkbox" class="filled-in" id="idNaturales" checked="checked">
                                                            <label for="idNaturales">Naturales</label>
                                                        </span></td>

                                                    </tr>
                                                    <tr data-tt-id="9" data-tt-parent-id="8">
                                                        <td><a href="<?=base_url()?>productos/editar">Te frio</a></td>

                                                    </tr>
                                                    <tr data-tt-id="10" data-tt-parent-id="8">
                                                        <td><a href="<?=base_url()?>productos/editar">Mora</a></td>

                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th><?=label('Producto_tablaNombre')?></th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>

                                    <script>
                                        function searchTable(inputVal) {
                                            var table = $('#example');
                                            table.find('tr').each(function(index, row)
                                            {
                                                var allCells = $(row).find('td');
                                                if(allCells.length > 0)
                                                {
                                                    var found = false;
                                                    allCells.each(function(index, td)
                                                    {
                                                        var regExp = new RegExp(inputVal, 'i');
                                                        if(regExp.test($(td).text()))
                                                        {
                                                            found = true;
                                                            return false;
                                                        }
                                                    });
                                                    if(found == true){
                                                        $(row).show();
                                                    } else {
                                                        $(row).hide();
                                                    }
                                                }
                                            });
                                        }
                                    </script>
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                            $("#example").agikiTreeTable({
                                                persist: true, persistStoreName: "files"});
                                        });
                                        $(document).ready(function() {
                                            $('#search').keyup(function() {
                                                debugger;
                                                searchTable($(this).val());
                                            });
                                        });
                                    </script>
                                    <script type="text/javascript">
                                        function toggle_visibility(id) {
                                            var e = document.getElementById(id);
                                            if(e.style.display == 'block')
                                                e.style.display = 'none';
                                            else
                                                e.style.display = 'block';
                                        }
                                    </script>

                                        <div class="col-sm-12 col-md-12 bloque-embed-cliente">
                                            <div class="col-md-6">
                                                <p>Seleccione los espacios del cliente que desea mostrar</p>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="embed_cliente1" type="checkbox">
                                                <label for="embed_cliente1"><?=label('formEmbed_cliente1');?></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="embed_cliente2" type="checkbox">
                                                <label for="embed_cliente2"><?=label('formEmbed_cliente2');?></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="embed_cliente3" type="checkbox">
                                                <label for="embed_cliente3"><?=label('formEmbed_cliente3');?></label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input id="embed_cliente4" type="checkbox">
                                                <label for="embed_cliente4"><?=label('formEmbed_cliente4');?></label>
                                            </div>
                                        </div>

                                        <div id="embedPrecio" class="col-sm-12 col-md-12">
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