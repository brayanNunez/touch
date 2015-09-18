<!--START CONTENT  -->
<!-- <section id="content"> -->
<!--start container-->
<!--    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
   <div class="container">
      <div class="row">
         <div class="col s12 m12 l12">
            <h5 class="breadcrumbs-title">Diseño</h5>
         </div>
      </div>
   </div>
   </div> -->
<!--breadcrumbs end-->
<!--    <div class="container">
   <div id="chart-dashboard">
      <div class="row">
         <div class="col s12 m12 l12">
            <div id="submit-button id="crear"" class="section">
               <div class="row">
                  <div class="col s12 ">
                     <div class="card" id="card-diseno"> -->
<div class="row">
    <div class="input-field col s8 m5 l5">
        <select class="input-field col s12">
            <option value="" disabled selected>Estilo</option>
            <option value="1">Formal</option>
            <option value="2">Normal</option>
            <option value="3">Simple</option>
            <option value="4">Para la Dos Pinos</option>
        </select>
        <label>Estilo de plantilla</label>
    </div>
    <!-- <div class="input-field col s4 m7 l7">
        <a href="#modalVistaPrevia" class=" right btn btn-default modal-trigger">Vista previa</a>
    </div> -->
</div>
<!-- <div class="contenedorHoja col s12"> -->
<button id="crear">CREAR</button>
<div id="inset_form"></div>

<div id="contenedorDisenoHoja">
    
    <div id="contenedorHoja">
        

        <div id="hoja">
            <div id="headerDiseno">
            <a id="editarEncabezado" href="#modalEncabezado"
               class="editarExterno modal-trigger btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                <i class="mdi-editor-mode-edit"></i>
            </a>
                <div id="encabezado">
                    <div id="logo" class="box">
                        <img class="imagen" src="<?= base_url() ?>assets/dashboard/images/sombrero.png"/>
                    </div>
                    <div id="datosEncabezado">
                        <div class="datos" id="datos1">
                            <div></div>
                            <p class="box" id="nombreEmpresa">Mr Rabbit</p>

                            <p class="box" id="codigoCotizacion">Código de cotización: MR-123</p>

                            <p class="box" id="cliente">Cliente: faytur</p>

                            <p class="box" id="atencion">Atención: Juan Carlos Rodríguez Salas sasassasassq lkmds sdflkm
                                dsfklm sdflkmd</p>

                            <p class="box" id="vendedor">Vendedor: Brayan Nuñez Rojas</p>
                        </div>
                        <div class="datos" id="datos2">
                            <div></div>
                            <p class="box" id="fecha">Fecha: 24/06/2015</p>

                            <p class="box" id="hora">Hora: 09:45 am</p>
                        </div>
                    </div>
                </div>
                <div class="barra-horizontal" id="barra1">
                </div>
                <a id="editarCuerpo" href="#modalCuerpo"
                   class="editarExterno modal-trigger btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                    <i class="mdi-editor-mode-edit"></i>
                </a>
            </div>
            

            <div id="cuerpoDocumento">


                <div id="contenidoDiseno">

                    <table>
                        <thead>
                        <tr>
                            <th>Item</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Imagen</th>
                            <th>Precio unitario</th>
                            <th>Cantidad</th>
                            <th>Impuesto</th>
                            <th>Total individual</th>                    
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>001</td>
                            <td>Un nombre</td>
                            <td>Una descripción</td>
                            <td>
                                <img style="width: 100px; height: 100px; " class="imagen" src="<?= base_url() ?>assets/dashboard/images/almuerzo.jpg"/>
                            </td>
                            <td>$50</td>
                            <td>3</td>
                            <td>13%</td>
                            <td>$155</td>
                        </tr>
                        <tr>
                            <td>001</td>
                            <td>Un nombre</td>
                            <td>Una descripción</td>
                            <td>
                                <img style="width: 100px; height: 100px; " class="imagen" src="<?= base_url() ?>assets/dashboard/images/musica.jpg"/>
                            </td>
                            <td>$50</td>
                            <td>3</td>
                            <td>13%</td>
                            <td>$155</td>
                        </tr>
                        <tr>
                            <td>001</td>
                            <td>Un nombre</td>
                            <td>Una descripción</td>
                            <td>
                                <img style="width: 100px; height: 100px; " class="imagen" src="<?= base_url() ?>assets/dashboard/images/almuerzo.jpg"/>
                            </td>
                            <td>$50</td>
                            <td>3</td>
                            <td>13%</td>
                            <td>$155</td>
                        </tr>
                        <tr>
                            <td>001</td>
                            <td>Un nombre</td>
                            <td>Una descripción</td>
                            <td>
                                <img style="width: 100px; height: 100px; " class="imagen" src="<?= base_url() ?>assets/dashboard/images/musica.jpg"/>
                            </td>
                            <td>$50</td>
                            <td>3</td>
                            <td>13%</td>
                            <td>$155</td>
                        </tr>
                        <tr>
                            <td>001</td>
                            <td>Un nombre</td>
                            <td>Una descripción</td>
                            <td>
                                <img style="width: 100px; height: 100px; " class="imagen" src="<?= base_url() ?>assets/dashboard/images/almuerzo.jpg"/>
                            </td>
                            <td>$50</td>
                            <td>3</td>
                            <td>13%</td>
                            <td>$155</td>
                        </tr>
                        <tr>
                            <td>001</td>
                            <td>Un nombre</td>
                            <td>Una descripción</td>
                            <td>
                                <img style="width: 100px; height: 100px; " class="imagen" src="<?= base_url() ?>assets/dashboard/images/musica.jpg"/>
                            </td>
                            <td>$50</td>
                            <td>3</td>
                            <td>13%</td>
                            <td>$155</td>
                        </tr>

                        
                        </tbody>
                    </table>
                    <div id="prefooter">
                    </div>
                </div>
                <div id="footerDiseno">
                    <div class="barra-horizontal" id="barra2"></div>
                    <a id="editarInformacion" href="#modalInformacion"
                       class="editarExterno modal-trigger btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                        <i class="mdi-editor-mode-edit"></i>
                    </a>

                    <div id="informacion">
                        <p class="box" id="formaPago">Forma de pago: 50% primer mes, 50% segundo mes.</p>

                        <p class="box" id="validez">Válido por: 1,5 meses</p>

                        <p class="box" id="informacionDetalle">Detalle: Por las especificaciones del equipo, es posible que
                            existan variantes entre impresiones sin que esto represente para nosotros problemas de calidad.
                            La presente oferta tiene una validéz de 15 días naturales a partir de esta fecha. </p>

                        <div class="box" id="firma">
                            <p>Firma:__________________________</p>

                            <p id="nombreFirma">Emanuel Conejo</p>
                        </div>
                    </div>
                    <div class="barra-horizontal" id="barra3">
                    </div>
                    <a id="editarEncabezado" href="#modalFooter"
                       class="editarExterno modal-trigger btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                        <i class="mdi-editor-mode-edit"></i>
                    </a>

                    <div id="footerCotizacion">
                        <div class="box" id="logo">
                            <img class="imagen" src="<?= base_url() ?>assets/dashboard/images/sombrero.png"/>
                        </div>
                        <div id="datosFooter">
                            <div class="datos" id="datos1">
                                <div></div>
                                <p class="box" id="telefono">Teléfono: 2494-33-44</p>

                                <p class="box" id="sitio">Sitio web: www.mrrabbit.cr</p>

                                <p class="box" id="correo">Correo: info@mrrabbit.cr</p>
                            </div>
                            <div class="datos" id="datos2">
                                <div></div>
                                <p>Con el mayor deseo de servirle, me pongo a su entera disposición.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="informacionSistema">
             <span>
                <p>Esta cotización ha sido desarrollada en la plataforma: touchcr.com</p>
             </span>
            </div>
        </div>
    </div>

</div>

<!-- </div> -->
<!-- <div class="row">
    <div class="input-field col s4 m7 l7">
        <a href="#modalVistaPrevia" class=" left btn btn-default modal-trigger">Vista previa</a>
    </div>
</div> -->
<!-- </div>
   </div>
   </div>
   </div>
   </div>
   </div>
   </div>
   </div> -->
<!--end container-->
<!-- </section> -->
<!-- END CONTENT-->
<!-- lista modals -->
<div id="modalEncabezado" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="row">
            <div class="col s12 m12 l12">
                <form action="#">
                    <div class="row col s12 m6 l6">
                        <div class="listaCecksModals">
                            <p>
                                <input name="checksEncabezado" value="nombreEmpresa" type="checkbox" class="filled-in"
                                       id="filled-in-box1" checked="checked">
                                <label for="filled-in-box1">Nombre de la empresa</label>
                            </p>

                            <p>
                                <input name="checksEncabezado" value="codigoCotizacion" type="checkbox"
                                       class="filled-in" id="filled-in-box2" checked="checked">
                                <label for="filled-in-box2">Código de cotización</label>
                            </p>

                            <p>
                                <input name="checksEncabezado" value="cliente" type="checkbox" class="filled-in"
                                       id="filled-in-box3" checked="checked">
                                <label for="filled-in-box3">Cliente</label>
                            </p>

                            <p>
                                <input name="checksEncabezado" value="atencion" type="checkbox" class="filled-in"
                                       id="filled-in-box4" checked="checked">
                                <label for="filled-in-box4">Atención</label>
                            </p>

                            <p>
                                <input name="checksEncabezado" value="vendedor" type="checkbox" class="filled-in"
                                       id="filled-in-box5" checked="checked">
                                <label for="filled-in-box5">Vendedor</label>
                            </p>

                            <p>
                                <input name="checksEncabezado" value="fecha" type="checkbox" class="filled-in"
                                       id="filled-in-box6" checked="checked">
                                <label for="filled-in-box6">Fecha</label>
                            </p>

                            <p>
                                <input name="checksEncabezado" value="hora" type="checkbox" class="filled-in"
                                       id="filled-in-box7" checked="checked">
                                <label for="filled-in-box7">Hora</label>
                            </p>

                            <p>
                                <input name="checksEncabezado" value="logo" type="checkbox" class="filled-in"
                                       id="filled-in-box8" checked="checked">
                                <label for="filled-in-box8">Imagen</label>
                            </p>
                        </div>
                    </div>
                    <div class="row col s12 m6 l6">
                        <div class="inputModals input-field col s12">
                            <p>Color de fondo: <input class="colorFondo" type="color" id="myColor1"></p>
                        </div>
                        <div class="inputModals input-field col s12">
                            <p>Color de letra: <input class="colorLetra" type="color" id="myColor2"></p>
                        </div>
                        <div class="inputModals input-field col s12">
                            <p>Color de barra horizontal: <input class="colorBarra" type="color" id="myColor3"></p>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="message" class="materialize-textarea" style="height: 24px;"></textarea>
                            <label for="message" class="">Texto adicional</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="aplicarCambios">
            <a href="#" class="waves-effect btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>
<div id="modalCuerpo" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="row">
            <div class="col s12 m12 l12">
                <form action="#">



                    <div class="row col s12 m6 l6">
                        <div class="listaCecksModals">
                            <p>Mostrar las siguientes columnas:</p>
                            <p>
                                <input type="checkbox" class="filled-in" id="cuerpofilled-in-box1" checked="checked">
                                <label for="cuerpofilled-in-box1">Item</label>
                            </p>

                            <p>
                                <input type="checkbox" class="filled-in" id="cuerpofilled-in-box2" checked="checked">
                                <label for="cuerpofilled-in-box2">Nombre</label>
                            </p>

                            <p>
                                <input type="checkbox" class="filled-in" id="cuerpofilled-in-box3" checked="checked">
                                <label for="cuerpofilled-in-box3">Descripción</label>
                            </p>

                            <p>
                                <input type="checkbox" class="filled-in" id="cuerpofilled-in-box3" checked="checked">
                                <label for="cuerpofilled-in-box4">Imagen</label>
                            </p>

                            <p>
                                <input type="checkbox" class="filled-in" id="cuerpofilled-in-box5" checked="checked">
                                <label for="cuerpofilled-in-box5">Precio unitario</label>
                            </p>

                            <p>
                                <input type="checkbox" class="filled-in" id="cuerpofilled-in-box6" checked="checked">
                                <label for="cuerpofilled-in-box6">Cantidad</label>
                            </p>

                            <p>
                                <input type="checkbox" class="filled-in" id="cuerpofilled-in-box7" checked="checked">
                                <label for="cuerpofilled-in-box7">Impuesto</label>
                            </p>

                            <p>
                                <input type="checkbox" class="filled-in" id="cuerpofilled-in-box8" checked="checked">
                                <label for="cuerpofilled-in-box8">Total individual</label>
                            </p>

                        </div>
                    </div>


                    <div class="row col s12 m6 l6">
                        <div class="listaCecksModals">
                            <p>Mostrar los siguientes totales:</p>
                            <p>
                                <input type="checkbox" class="filled-in" id="cuerpofilled-in-box9" checked="checked">
                                <label for="cuerpofilled-in-box9">Impuesto</label>
                            </p>

                            <p>
                                <input type="checkbox" class="filled-in" id="cuerpofilled-in-box10" checked="checked">
                                <label for="cuerpofilled-in-box10">Descuento</label>
                            </p>

                            <p>
                                <input type="checkbox" class="filled-in" id="cuerpofilled-in-box11" checked="checked">
                                <label for="cuerpofilled-in-box11">Tolal</label>
                            </p>
                        </div>
                    </div>
                    <div class="row col s12 m6 l6">
                        <div class="inputModals input-field col s12">
                            <p>Color de fondo: <input class="colorFondo" type="color" id="myColor1"></p>
                        </div>
                        <div class="inputModals input-field col s12">
                            <p>Color de letra: <input class="colorLetra" type="color" id="myColor2"></p>
                        </div>
                        <div class="inputModals input-field col s12">
                            <p>Color de barra horizontal: <input class="colorBarra" type="color" id="myColor3"></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="aplicarCambios">
            <a href="#" class="waves-effect btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>
<div id="modalInformacion" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="row">
            <div class="col s12 m12 l12">
                <form action="#">
                    <div class="row col s12 m6 l6">
                        <div class="listaCecksModals">
                            <p>
                                <input name="checksInformacion" value="formaPago" type="checkbox" class="filled-in"
                                       id="informacionfilled-in-box1" checked="checked">
                                <label for="informacionfilled-in-box1">Forma de pago</label>
                            </p>

                            <p>
                                <input name="checksInformacion" value="validez" type="checkbox" class="filled-in"
                                       id="informacionfilled-in-box2" checked="checked">
                                <label for="informacionfilled-in-box2">Vlidez</label>
                            </p>

                            <p>
                                <input name="checksInformacion" value="informacionDetalle" type="checkbox"
                                       class="filled-in" id="informacionfilled-in-box3" checked="checked">
                                <label for="informacionfilled-in-box3">Detalle</label>
                            </p>


                            <p>
                                <input name="checksInformacion" value="firma" type="checkbox" class="filled-in"
                                       id="informacionfilled-in-box4" checked="checked">
                                <label for="informacionfilled-in-box4">Firma</label>
                            </p>

                            <div class="file-field input-field col s12">
                                <div class="inputModals">Firma electónica:<input type="file">
                                </div>
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row col s12 m6 l6">
                        <div class="inputModals input-field col s12">
                            <p>Color de fondo: <input class="colorFondo" type="color" id="myColor1"></p>
                        </div>
                        <div class="inputModals input-field col s12">
                            <p>Color de letra: <input class="colorLetra" type="color" id="myColor2"></p>
                        </div>
                        <div class="inputModals input-field col s12">
                            <p>Color de barra horizontal: <input class="colorBarra" type="color" id="myColor3"></p>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="message" class="materialize-textarea" style="height: 24px;"></textarea>
                            <label for="message" class="">Texto adicional</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="aplicarCambios">
            <a href="#" class="waves-effect btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>
<div id="modalFooter" class="modal">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal"><i class="mdi-content-clear"></i></a>
    </div>
    <div class="modal-content">
        <div class="row">
            <div class="col s12 m12 l12">
                <form action="#">
                    <div class="row col s12 m6 l6">
                        <div class="listaCecksModals">
                            <p>
                                <input name="checksFooter" value="telefono" type="checkbox" class="filled-in"
                                       id="footerfilled-in-box1" checked="checked">
                                <label for="footerfilled-in-box1">Teléfono</label>
                            </p>

                            <p>
                                <input name="checksFooter" value="sitio" type="checkbox" class="filled-in"
                                       id="footerfilled-in-box2" checked="checked">
                                <label for="footerfilled-in-box2">Sitio web</label>
                            </p>

                            <p>
                                <input name="checksFooter" value="correo" type="checkbox" class="filled-in"
                                       id="footerfilled-in-box3" checked="checked">
                                <label for="footerfilled-in-box3">Correo</label>
                            </p>

                            <p>
                                <input name="checksFooter" value="logo" type="checkbox" class="filled-in"
                                       id="footerfilled-in-box4" checked="checked">
                                <label for="footerfilled-in-box4">Imagen</label>
                            </p>
                        </div>
                    </div>
                    <div class="row col s12 m6 l6">
                        <div class="inputModals input-field col s12">
                            <p>Color de fondo: <input class="colorFondo" type="color" id="myColor1"></p>
                        </div>
                        <div class="inputModals input-field col s12">
                            <p>Color de letra: <input class="colorLetra" type="color" id="myColor2"></p>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="message" class="materialize-textarea" style="height: 24px;"></textarea>
                            <label for="message" class="">Texto adicional</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="aplicarCambios">
            <a href="#" class="waves-effect btn-flat modal-action modal-close"><?= label('aceptar'); ?></a>
        </div>
    </div>
</div>
<!--Fin lista modals-->
<script type="text/javascript">
    function recalcularAlturaContenido() {
        var tamanoHojaHTML = 1117; //aqui puede ajustar el tamano de la hoja que se vera en el html
        var header = $('#headerDiseno').height();//212
        var footer = $('#footerDiseno').height();//226
        var informacionSistema = $('#informacionSistema').height();//20

        var paddingTop = $('#contenidoDiseno').css("padding-top").replace("px", "");

        var paddingBottom = $('#contenidoDiseno').css("padding-bottom").replace("px", "");
        var resultado = tamanoHojaHTML - header - footer - informacionSistema - paddingTop - paddingBottom;
        $('#contenidoDiseno').height(300);
    }


    $(document).on('ready', function () {

        $('#modalEncabezado .aplicarCambios').click(function () {
            var colorFondo = $('#modalEncabezado .colorFondo').val();
            $('#encabezado').css("background", colorFondo);

            var colorLetra = $('#modalEncabezado .colorLetra').val();
            $('#encabezado').css("color", colorLetra);

            var colorBarra = $('#modalEncabezado .colorBarra').val();
            $('#barra1').css("background", colorBarra);


            $('#encabezado .box').each(function () {
                $(this).hide();
            })

            var seleccionados = $('input[name=checksEncabezado]:checked');
            if (seleccionados.length > 0) {
                seleccionados.each(function () {
                    $('#encabezado .box#' + $(this).val()).show();
                });
            }


        });

        $('#modalCuerpo .aplicarCambios').click(function () {
            var colorFondo = $('#modalCuerpo .colorFondo').val();
            $('#hoja').css("background", colorFondo);

            var colorLetra = $('#modalCuerpo .colorLetra').val();
            $('#hoja').css("color", colorLetra);

            var colorBarra = $('#modalCuerpo .colorBarra').val();
            $('#barra2').css("background", colorBarra);


        });

        $('#modalInformacion .aplicarCambios').click(function () {
            var colorFondo = $('#modalInformacion .colorFondo').val();
            $('#informacion').css("background", colorFondo);

            var colorLetra = $('#modalInformacion .colorLetra').val();
            $('#informacion').css("color", colorLetra);

            var colorBarra = $('#modalInformacion .colorBarra').val();
            $('#barra3').css("background", colorBarra);


            $('#informacion .box').each(function () {
                $(this).hide();
            })

            var seleccionados = $('input[name=checksInformacion]:checked');
            if (seleccionados.length > 0) {
                seleccionados.each(function () {
                    $('#informacion .box#' + $(this).val()).show();
                });
            }


        });

        $('#modalFooter .aplicarCambios').click(function () {
            var colorFondo = $('#modalFooter .colorFondo').val();
            $('#footerCotizacion').css("background", colorFondo);

            var colorLetra = $('#modalFooter .colorLetra').val();
            $('#footerCotizacion').css("color", colorLetra);

            $('#footerCotizacion .box').each(function () {
                $(this).hide();
            })

            var seleccionados = $('input[name=checksFooter]:checked');
            if (seleccionados.length > 0) {
                seleccionados.each(function () {
                    $('#footerCotizacion .box#' + $(this).val()).show();
                });
            }
        });

        $('#encabezado').css("background", "red");
        $('#hoja').css("background", "white");
        $('#hoja').css("color", "#8A0829");
        $('#hoja').css("font-family", "monospace");
        $('#encabezado').css("color", "white");
        $('#encabezado').css("font-family", "lucon");
        $('#barra1').css("background", "black");
        $('#barra3').css("background", "black");
        $('#footerCotizacion').css("background", "red");
        $('#footerCotizacion').css("color", "white");
        $('#informacion').css("background", "orange");
        $('#informacion').css("color", "white");


        // alert($('#headerDiseno').height());
        recalcularAlturaContenido();

        $("#crear").click(function () {
            alert("hola");
            var height = $('#footerDiseno').css("height");
            $('#footerDiseno').css("height", height);
            $('#prefooter').css("height", height);

            var height = $('#informacion').css("height");
            $('#informacion').css("height", height);
            alert(height);

            $('.editarExterno').css("display", "none");


            var backgroundcolor = $('#hoja').css("background-color");
            var fuente = $('#hoja').css("font-family");
            var color = $('#hoja').css("color");
            var style = 'style="background: ' + backgroundcolor + '; font-family: ' + fuente + '; color: ' + color + '"';

            var html = '<!DOCTYPE html><html><head><title>403 Forbidden</title><link rel="stylesheet" href="<?= base_url() ?>assets/dashboard/css/estiloDisenoHoja.css"></head><body id="hojaPDF" ' + style + '>';
            html += '<div id="headerDiseno">' + $('#headerDiseno').html() + '</div>';
            html += '<div id="informacionSistema">' + $('#informacionSistema').html() + '</div>';
            html += '<div id="cuerpoDocumento">' + $('#cuerpoDocumento').html() + '</div></body></html>';
            // target="iframe"
            $('#inset_form').html('<form  action="<?=base_url()?>ManejadorPDF/index" name="form" method="post" style="display:block;"><textarea name="miHtml">' + html + '</textarea></form>');
            document.forms['form'].submit();

            //eliminar la propiedead height para que siga adaptandose a los cambios de tamano en el html
            $('#footerDiseno').css("height", "");
            $('#informacion').css("height", "");
            $('#prefooter').css("height", "");
            $('.editarExterno').css("display", "");

        });

    });
</script>