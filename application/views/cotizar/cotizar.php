

<script type="text/javascript">

    function agregarFila(){
        generarAutocompletarProductoNombre(3);
        generarAutocompletarProductoItem(3);
        generarListas();
    }

    function botonEnLista(tipo, idBoton, nuevoElementoAgregar){
        
        
        alert("tipo: " +tipo+ " id: " + idBoton + " palabra: " + nuevoElementoAgregar);
        if (tipo == "productoNombre" || tipo == "productoItem") {
            window.location.href = "<?= base_url() ?>productos/agregar";
        } 
        if (tipo == "paso1Atencion") {
            var linkModal = $('<a id="cotizacion-agregarAtencion" class="btn modal-trigger" href="#agregarAtencion" data-toggle="tooltip" title="Agregar nuevo contacto">');   
            linkModal.trigger('click');
        } 
        if (tipo == "paso1Cliente") {
             window.location.href = "<?= base_url() ?>clientes/agregar";
        } 
        
    }

    function generarAutocompletarFormaPago(id){
        var miSelect = $('<select placeholder="seleccionar" data-tipo="paso1FormaPago" id="' + id + '" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("paso1_elegirFormaPago"); ?>" class="chosen-select" style="width:350px;" tabindex="2"></select>');
        miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("paso1_elegirFormaPago"); ?></option>');
        miSelect.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');
        miSelect.append('<option value="Almuerzo">Contado</option>');
        miSelect.append('<option value="Fresco">50-50</option>');
        miSelect.append('<option value="Hamburguesa">Entrega</option>');

        $('#contenedorSelectFormaPago').html(miSelect);
    }

    function generarAutocompletarMoneda(id){
        var miSelect = $('<select placeholder="seleccionar" data-tipo="paso1Moneda" id="' + id + '" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("paso1_elegirMoneda"); ?>" class="chosen-select" style="width:350px;" tabindex="2"></select>');
         miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("paso1_elegirMoneda"); ?></option>');
        miSelect.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');
        miSelect.append('<option value="Almuerzo">Dolar</option>');
        miSelect.append('<option value="Fresco">Peso</option>');
        miSelect.append('<option value="Hamburguesa">Colón</option>');

        $('#contenedorSelectMoneda').html(miSelect);
    }

    function generarAutocompletarCliente(id){
        var miSelect = $('<select placeholder="seleccionar" data-tipo="paso1Cliente" id="' + id + '" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("paso1_elegirCliente"); ?>" class="chosen-select" style="width:350px;" tabindex="2"></select>');
         miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("paso1_elegirCliente"); ?></option>');
        miSelect.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');
        miSelect.append('<option value="Almuerzo">Brayan Nunez Rojas</option>');
        miSelect.append('<option value="Fresco">María Alfaro Alfaro</option>');
        miSelect.append('<option value="Hamburguesa">Diego Rojas Salas</option>');
        miSelect.append('<option value="Música">Juan Manuel Rojas</option>');

        $('#contenedorSelectCliente').html(miSelect);
    }

    function generarAutocompletarAtencion(id){
        var miSelect = $('<select placeholder="seleccionar" data-tipo="paso1Atencion" id="' + id + '" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("paso1_elegirAtencion"); ?>" class="chosen-select" style="width:350px;" tabindex="2"></select>');
         miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("paso1_elegirAtencion"); ?></option>');
        miSelect.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');
        miSelect.append('<option value="Almuerzo">Brayan Nunez Rojas</option>');
        miSelect.append('<option value="Fresco">María Alfaro Alfaro</option>');
        miSelect.append('<option value="Hamburguesa">Diego Rojas Salas</option>');
        miSelect.append('<option value="Música">Juan Manuel Rojas</option>');

        $('#contenedorSelectAtencion').html(miSelect);
    }

     function generarAutocompletarProductoNombre(id){
        var miSelect = $('<select placeholder="seleccionar" data-tipo="productoNombre" id="' + id + '" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("paso2_elegirProductoNombre"); ?>" class="chosen-select" style="width:350px;" tabindex="2"></select>');
         miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("paso2_elegirProductoNombre"); ?></option>');
        miSelect.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');
        miSelect.append('<option value="Almuerzo">Almuerzo</option>');
        miSelect.append('<option value="Fresco">Fresco</option>');
        miSelect.append('<option value="Hamburguesa">Hamburguesa</option>');
        miSelect.append('<option value="Música">Música</option>');
        miSelect.append('<option value="Pizza">Pizza</option>');
        miSelect.append('<option value="Arroz">Arroz</option>');
        miSelect.append('<option value="Frijoles">Frijoles</option>');
        miSelect.append('<option value="Ensalada">Ensalada</option>');
        miSelect.append('<option value="Carne en salsa">Carne en salsa</option>');
        miSelect.append('<option value="Pollo">Pollo</option>');
        // miSelect.append('<option value="Pizza">Pizza</option>');
        miSelect.append('<option value="Bolsa de confites">Bolsa de confites</option>');
        miSelect.append('<option value="Piñata">Piñata</option>');
        miSelect.append('<option value="Comediante">Comediante</option>');
        miSelect.append('<option value="Animador">Animador</option>');
        miSelect.append('<option value="Comparsa">Comparsa</option>');
        miSelect.append('<option value="Mariachi">Mariachi</option>');
        miSelect.append('<option value="Vino">Vino</option>');
        miSelect.append('<option value="Tacos">Tacos</option>');
        miSelect.append('<option value="Globos">Globos</option>');
        miSelect.append('<option value="Payaso">Payaso</option>');
        miSelect.append('<option value="Quque">Quque</option>');
        miSelect.append('<option value="Helado">Helado</option>');

        $('#contenedorSelectProductoNombre' + id + '').html(miSelect);
    }
    function generarAutocompletarProductoItem(id){
        var miSelect = $('<select placeholder="seleccionar" data-tipo="productoItem" id="' + id + '" data-textoBoton="<?= label("agregarNuevo"); ?>" data-placeholder="<?= label("paso2_elegirProductoItem"); ?>" class="chosen-select" style="width:350px;" tabindex="2"></select>');
         miSelect.append('<option value="0" disabled selected style="display:none;"><?= label("paso2_elegirProductoItem"); ?></option>');
        miSelect.append('<option value="nuevo"><?= label("agregarNuevo"); ?></option>');
        miSelect.append('<option value="Uganda">001</option>');
        miSelect.append('<option value="Ukraine">002</option>');
        miSelect.append('<option value="United Arab Emirates">003</option>');
        miSelect.append('<option value="United Kingdom">123</option>');
        miSelect.append('<option value="United States">234</option>');
        miSelect.append('<option value="United States Minor Outlying Islands">458</option>');
        $('#contenedorSelectProductoItem' + id + '').html(miSelect);
    }
    function generarListas(){
        // alert("generando")

        var config = {'.chosen-select'           : {}}
          for (var selector in config) {
            $(selector).chosen(config[selector]);
          }
    }
</script>

<script type="text/javascript">
    $(document).on("ready", function(){


        generarAutocompletarProductoNombre(1);
        generarAutocompletarProductoNombre(2);

        generarAutocompletarProductoItem(1);
        generarAutocompletarProductoItem(2);


        generarAutocompletarAtencion("paso1_atencion");
        generarAutocompletarCliente("paso1_cliente");
        generarAutocompletarMoneda("paso1_moneda");
        generarAutocompletarFormaPago("paso1_formaPago");

        generarListas();


         $('.chosen-select').on('change',function(){
            var valor = $(this).val();
            if (valor=="nuevo") {
                var tipo = $(this).attr("data-tipo");
                var idBoton = $(this).attr("id");
                var nuevoElementoAgregar = "";
                botonEnLista(tipo, idBoton, nuevoElementoAgregar)
            } else{
                alert(valor);
            };
            
        });


    });
     

</script>

<!-- START CONTENT -->
<section id="content">
    <!--start container-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="breadcrumbs-title"><?= label('tituloCotizacion'); ?></a></h5>
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
                                <!-- <div class="card"> -->
                                <div class="col s12 m12 l12">
                                    <a id="comentariosCotizacion" href="#" data-activates="chat-out"
                                       class="right waves-effect waves-block waves-light chat-collapse">
                                        <i class="mdi-communication-chat"></i></a>

                                    <div class="row">
                                        <div class="col s12">
                                            <ul class="tabs tab-demo z-depth-1">
                                                <li class="tab col s3">
                                                    <a id="botonPaso1" class="tab-paso-cotizacion active"
                                                       href="#paso1"><?= label('paso1'); ?></a>
                                                </li>
                                                <li class="tab col s3">
                                                    <a id="botonPaso2" class="tab-paso-cotizacion"
                                                       href="#paso2"><?= label('paso2'); ?></a>
                                                </li>
                                                <li class="tab col s3">
                                                    <a id="botonPaso3" class="tab-paso-cotizacion"
                                                       href="#paso3"><?= label('paso3'); ?></a>
                                                </li>
                                                <li class="tab col s3">
                                                    <a id="botonPaso4" class="tab-paso-cotizacion"
                                                       href="#paso4"><?= label('paso4'); ?></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- <div class="card"> -->
                                        <div class="col s12">
                                            <div id="paso1" class="card card-ContenidoPasos col s12">
                                                <?php $this->load->view('cotizar/paso1'); ?>
                                                <div class="atras_adelante">
                                                    <a class="siguiente right" href="#"
                                                       onclick="darclick(2);"><?= label('pasoSiguiente'); ?><i
                                                            class="mdi-image-navigate-next medium"></i></a>
                                                </div>
                                            </div>
                                            <div id="paso2" class="card card-ContenidoPasos col s12">
                                                <?php $this->load->view('cotizar/paso2'); ?>
                                                <br/>

                                                <div class="atras_adelante">
                                                    <a class="siguiente right" href="#"
                                                       onclick="darclick(3);"><?= label('pasoSiguiente'); ?><i
                                                            class="mdi-image-navigate-next medium"></i></a>
                                                    <a class="anterior left" href="#" onclick="darclick(1);"><i
                                                            class="mdi-image-navigate-before medium"></i><?= label('pasoAnterior'); ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="paso3" class="card card-ContenidoPasos col s12">
                                                <?php $this->load->view('cotizar/paso3'); ?>
                                                <br/>

                                                <div class="atras_adelante">
                                                    <a class="siguiente right" href="#"
                                                       onclick="darclick(4);"><?= label('pasoSiguiente'); ?><i
                                                            class="mdi-image-navigate-next medium"></i></a>
                                                    <a class="anterior left" href="#" onclick="darclick(2);"><i
                                                            class="mdi-image-navigate-before medium"></i><?= label('pasoAnterior'); ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div id="paso4" class="card card-ContenidoPasos col s12">
                                                <?php $this->load->view('cotizar/paso4'); ?>
                                                <br/>

                                                <div class="atras_adelante">
                                                    <a class="anterior left" href="#" onclick="darclick(3);"><i
                                                            class="mdi-image-navigate-before medium"></i><?= label('pasoAnterior'); ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end container-->

        <?php
        $this->load->view('layout/default/menu-crear.php');
        ?>

</section>
<!-- END CONTENT-->


<script type="text/javascript">


    function darclick(paso) {

        var obj = document.getElementById('botonPaso' + paso);

        obj.click();

    }
</script>







 