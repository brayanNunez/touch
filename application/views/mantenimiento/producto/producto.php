<!-- START CONTENT -->
<section id="content">

    <!--start container-->

    <div class="container">
        <div id="chart-dashboard">
            <div class="row">
                <div class="col s12 m12 l8">

                    <div id="submit-button" class="section">
                        <div class="row">

                            <div class="col s12 m12 l12">
                                <div id="card_productos" class="card">

                                    <div id="tableHeader">
                                        <div class="col-md-6" style="float: left">
                                            <h2>Productos</h2>
                                        </div>
                                        <div class="col-md-6" style="float: right; margin-top: 15px">
                                            <input type="text" id="search" placeholder="Buscar"/>
                                        </div>
                                    </div>

                                    <div id="table">
                                        <table id="example" class="table table-responsive table-striped table-condensed" data-search="true">

                                            <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Codigo</th>
                                                <th>Descripcion</th>
                                                <th>Precio</th>
                                                <th>Opciones</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr data-tt-id="1">
                                                <td>Productos</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <a style="width: 45%" class="btn btn-default" href="#"  onclick="toggle_visibility('popup-box3');">Editar</a>
                                                    <a style="width: 45%"  class="btn btn-default" href="#" onclick="toggle_visibility('popup-box2');">Annadir</a>
                                                </td>
                                            </tr>
                                            <tr data-tt-id="2" data-tt-parent-id="1">
                                                <td><span style="margin-left: 20px">Alimentacion</span></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <a style="width: 30%" class="btn btn-default" href="#" onclick="editar(2)">Editar</a>
                                                    <a style="width: 30%" class="btn btn-default" href="#"
                                                       onclick="return confirm('¿Realmente desea eliminar el elemento?')">Eliminar</a>
                                                    <a style="width: 30%" class="btn btn-default" href="#" onclick="agregar(2)">Annadir</a>
                                                </td>
                                            </tr>
                                            <tr data-tt-id="3" data-tt-parent-id="2">
                                                <td><a href="#">Arroz</a></td>
                                                <td>00005</td>
                                                <td>Paquete de 2 Kg</td>
                                                <td>$2</td>
                                                <td>
                                                    <a style="width: 45%" class="btn btn-default" href="#" onclick="editar(3)">Editar</a>
                                                    <a style="width: 45%" class="btn btn-default" href="#"
                                                       onclick="return confirm('¿Realmente desea eliminar el elemento?')">Eliminar</a>
                                                </td>
                                            </tr>
                                            <tr data-tt-id="4" data-tt-parent-id="1">
                                                <td><span style="margin-left: 20px">Bebidas</span></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <a style="width: 30%" class="btn btn-default" href="#" onclick="editar(4)">Editar</a>
                                                    <a style="width: 30%" class="btn btn-default" href="#"
                                                       onclick="return confirm('¿Realmente desea eliminar el elemento?')">Eliminar</a>
                                                    <a style="width: 30%" class="btn btn-default" href="#" onclick="agregar(4)">Annadir</a>
                                                </td>
                                            </tr>
                                            <tr data-tt-id="5" data-tt-parent-id="4">
                                                <td><span style="margin-left: 20px">Gaseosas</span></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <a style="width: 30%" class="btn btn-default" href="#" onclick="editar(5)">Editar</a>
                                                    <a style="width: 30%" class="btn btn-default" href="#"
                                                       onclick="return confirm('¿Realmente desea eliminar el elemento?')">Eliminar</a>
                                                    <a style="width: 30%" class="btn btn-default" href="#" onclick="agregar(5)">Annadir</a>
                                                </td>
                                            </tr>
                                            <tr data-tt-id="6" data-tt-parent-id="5">
                                                <td><a href="#">Coca Cola</a></td>
                                                <td>00006</td>
                                                <td>Envase de 2 litros</td>
                                                <td>$3</td>
                                                <td>
                                                    <a style="width: 45%" class="btn btn-default" href="#" onclick="editar(6)">Editar</a>
                                                    <a style="width: 45%" class="btn btn-default" href="#"
                                                       onclick="return confirm('¿Realmente desea eliminar el elemento?')">Eliminar</a>
                                                </td>
                                            </tr>
                                            <tr data-tt-id="7" data-tt-parent-id="5">
                                                <td><a href="#">Fanta</a></td>
                                                <td>00007</td>
                                                <td>Envase de 1.5 litros</td>
                                                <td>$2</td>
                                                <td>
                                                    <a style="width: 45%" class="btn btn-default" href="#" onclick="editar(7)">Editar</a>
                                                    <a style="width: 45%" class="btn btn-default" href="#"
                                                       onclick="return confirm('¿Realmente desea eliminar el elemento?')">Eliminar</a>
                                                </td>
                                            </tr>
                                            <tr data-tt-id="8" data-tt-parent-id="4">
                                                <td><span style="margin-left: 20px">Naturales</span></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <a style="width: 30%" class="btn btn-default" href="#" onclick="editar(8)">Editar</a>
                                                    <a style="width: 30%" class="btn btn-default" href="#"
                                                       onclick="return confirm('¿Realmente desea eliminar el elemento?')">Eliminar</a>
                                                    <a style="width: 30%" class="btn btn-default" href="#" onclick="agregar(8)">Annadir</a>
                                                </td>
                                            </tr>
                                            <tr data-tt-id="9" data-tt-parent-id="8">
                                                <td><a href="#">Te frio</a></td>
                                                <td>00008</td>
                                                <td>Envase de 1 litro</td>
                                                <td>$1</td>
                                                <td>
                                                    <a style="width: 45%" class="btn btn-default" href="#" onclick="editar(9)">Editar</a>
                                                    <a style="width: 45%" class="btn btn-default" href="#"
                                                       onclick="return confirm('¿Realmente desea eliminar el elemento?')">Eliminar</a>
                                                </td>
                                            </tr>
                                            <tr data-tt-id="10" data-tt-parent-id="8">
                                                <td><a href="#">Mora</a></td>
                                                <td>00009</td>
                                                <td>Envase de 3 litros</td>
                                                <td>$3</td>
                                                <td>
                                                    <a style="width: 45%" class="btn btn-default" href="#" onclick="editar(10)">Editar</a>
                                                    <a style="width: 45%" class="btn btn-default" href="#"
                                                       onclick="return confirm('¿Realmente desea eliminar el elemento?')">Eliminar</a>
                                                </td>
                                            </tr>

                                            </tbody>

                                            <tfoot>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Codigo</th>
                                                <th>Descripcion</th>
                                                <th>Precio</th>
                                                <th>Opciones</th>
                                            </tr>
                                            </tfoot>

                                        </table>
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
                                                    if(found == true)$(row).show();else $(row).hide();
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

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--end container-->
</section>
<!-- END CONTENT-->