<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!---->
<!---->
<!---->
<!--<head>-->
<!--    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="msapplication-tap-highlight" content="no">-->
<!--    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">-->
<!--    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">-->
<!--    <title>Touch!</title>-->
<!---->
<!--    <!-- Favicons-->-->
<!--    <link rel="icon" href="--><?//=base_url()?><!--assets/dashboard/images/favicon/favicon-32x32.png" sizes="32x32">-->
<!--    <!-- Favicons-->-->
<!--    <link rel="apple-touch-icon-precomposed" href="--><?//=base_url()?><!--assets/dashboard/images/favicon/apple-touch-icon-152x152.png">-->
<!--    <!-- For iPhone -->-->
<!--    <meta name="msapplication-TileColor" content="#00bcd4">-->
<!--    <meta name="msapplication-TileImage" content="--><?//=base_url()?><!--assets/dashboard/images/favicon/mstile-144x144.png">-->
<!--    <!-- For Windows Phone -->-->
<!---->
<!---->
<!--    <!-- CORE CSS-->-->
<!--    <link href="--><?//=base_url()?><!--assets/dashboard/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">-->
<!--    <link href="--><?//=base_url()?><!--assets/dashboard/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">-->
<!--    <link href="--><?//=base_url()?><!--assets/dashboard/css/mystyle.css" type="text/css" rel="stylesheet" media="screen,projection">-->
<!--    <link href="--><?//=base_url()?><!--assets/variant/theme/css/bootstrap.css" type="text/css" rel="stylesheet" media="screen,projection">-->
<!---->
<!--    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
<!--    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>-->
<!--    <script type="text/javascript" src="--><?//= base_url() ?><!--assets/dashboard/js/jquery.treetable-ajax-persist.js"></script>-->
<!--    <script type="text/javascript" src="--><?//= base_url() ?><!--assets/dashboard/js/jquery.treetable-3.0.0.js"></script>-->
<!--    <script type="text/javascript" src="--><?//= base_url() ?><!--assets/dashboard/js/persist-min.js"></script>-->
<!--    <link href="--><?//= base_url() ?><!--assets/dashboard/css/jquery.treetable.css" media="all" rel="stylesheet" type="text/css" />-->
<!---->
<!--    <script type="text/javascript">-->
<!--        $(document).ready(function(){-->
<!--            $("#example").agikiTreeTable({-->
<!--                persist: true, persistStoreName: "files"});-->
<!--        });-->
<!--        $(document).ready(function() {-->
<!--            $('#search').keyup(function() {-->
<!--                debugger;-->
<!--                searchTable($(this).val());-->
<!--            });-->
<!--        });-->
<!--    </script>-->
<!--    <style>-->
<!--        #search { float: left; margin-top: 5px; border-top: none; border-left: none; border-right: none; margin-left: 10px; width: 200px; font-size: large; }-->
<!--        input:focus { outline: 0; }-->
<!--        #tableHeader { min-height: 80px; }-->
<!--        .popup-position { display: none; position: fixed; top: 0; left: 0; background-color: rgba(0,0,0,0.7); width: 100%; height: 100%; }-->
<!--        .popup-wrapper { width: 360px; margin: 70px auto; text-align: left; }-->
<!--        .popup-container { background-color: white; padding: 20px; border-radius: 5px; }-->
<!--        .mb0 { margin: 7px 0px; width: 100% }-->
<!--    </style>-->
<!--    <script type="text/javascript">-->
<!--        function toggle_visibility(id) {-->
<!--            var e = document.getElementById(id);-->
<!--            if(e.style.display == 'block')-->
<!--                e.style.display = 'none';-->
<!--            else-->
<!--                e.style.display = 'block';-->
<!--        }-->
<!--    </script>-->
<!---->
<!--    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->-->
<!--    <link href="--><?//=base_url()?><!--assets/dashboard/js/plugins/material-preloader/materialPreloader.css" type="text/css" rel="stylesheet" media="screen,projection">-->
<!--    <link href="--><?//=base_url()?><!--assets/dashboard/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">-->
<!--    <link href="--><?//=base_url()?><!--assets/dashboard/js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">-->
<!--    <link href="--><?//=base_url()?><!--assets/dashboard/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">-->
<!---->
<!---->
<!--</head>-->

<body>
<div class="container">

    <div id="tableHeader">
        <div class="col-md-6" style="float: left">
            <h2>Productos</h2>
        </div>
        <div class="col-md-6" style="float: right; margin-top: 15px">
            <!--<h4 style="float: left">Buscar: </h4>-->
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
            <!--<tr data-tt-id="3" data-tt-parent-id="2">-->
            <!--<td><a href="#">Carne</a></td>-->
            <!--<td>000010</td>-->
            <!--<td>Carne de res</td>-->
            <!--<td>$4</td>-->
            <!--<td>-->
            <!--<a style="width: 45%" class="btn btn-default" href="#" onclick="editar(11)">Editar</a>-->
            <!--<a style="width: 45%" class="btn btn-default" href="#"-->
            <!--onclick="return confirm('¿Realmente desea eliminar el elemento?')">Eliminar</a>-->
            <!--</td>-->
            <!--</tr>-->

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
        function loguear(idL) {
            document.getElementById('padreL').value = idL;
            toggle_visibility('popup-box1');
        }
        function agregar(idA) {
            toggle_visibility('popup-box2');
            document.getElementById('padreA').value = idA;
        }
        function editar(idE) {
            toggle_visibility('popup-box3');
            debugger;
            document.getElementById('padreE').value = idE;
        }
    </script>

    <div id="popup-box1" class="popup-position">
        <div class="popup-wrapper">
            <div class="popup-container">
                <h2>Login</h2>
                <form class="text-left">
                    <input class="mb0" type="text" id="padreL" style="display: none">
                    <input class="mb0" type="text" placeholder="Username">
                    <input class="mb0" type="password" placeholder="Password">
                    <br />
                    <input type="submit" value="Login" class="btn btn-success" style="width: 100%">
                </form>
                <p><a href="javascript:void(0)" onclick="toggle_visibility('popup-box1');" style="float: right">Cerrar popup</a></p>
            </div>
        </div>
    </div>

    <div id="popup-box2" class="popup-position">
        <div class="popup-wrapper">
            <div class="popup-container">
                <h2>Agregar elemento</h2>
                <form class="text-left">
                    <input class="mb0" type="text" id="padreA" style="display: none">
                    <input class="mb0" type="text" placeholder="Nombre">
                    Tipo:<br />
                    <input type="radio" name="tipo" value="producto">Producto<br />
                    <input type="radio" name="tipo" value="categoria">Categoria
                    <br />
                    <input type="submit" value="Aceptar" class="btn btn-success" style="width: 100%">
                </form>
                <p><a href="javascript:void(0)" onclick="toggle_visibility('popup-box2');" style="float: right">Cerrar</a></p>
            </div>
        </div>
    </div>

    <div id="popup-box3" class="popup-position">
        <div class="popup-wrapper">
            <div class="popup-container">
                <h2>Editar elemento</h2>
                <form class="text-left">
                    <input class="mb0" type="text" id="padreE" style="display: none">
                    <input class="mb0" type="text" placeholder="Nombre">
                    Tipo:<br />
                    <input type="radio" name="tipo" value="producto">Producto<br />
                    <input type="radio" name="tipo" value="categoria">Categoria
                    <br />
                    <input type="submit" value="Aceptar" class="btn btn-success" style="width: 100%">
                </form>
                <p><a href="javascript:void(0)" onclick="toggle_visibility('popup-box3');" style="float: right">Cerrar</a></p>
            </div>
        </div>
    </div>

    <div id="wrapper">
        <p><a href="javascript:void(0)" onclick="toggle_visibility('popup-box1');">Abrir primer popup</a></p>
    </div>

</div>
</body>
</html>