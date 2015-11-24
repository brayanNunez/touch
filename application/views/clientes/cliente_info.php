
<!-- START CONTENT -->

<section id="content">
    <!--start breadcrumbs-->
    <div id="breadcrumbs-wrapper" class=" grey lighten-3">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="breadcrumbs-title"><?= label('clientes_info'); ?></a></h5>
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
                                <div class="col s12 m12 l12">
                                    <div class="row">
                                        <div class="col s12">
                                            <ul class="tabs tab-demo-active z-depth-1 cliente-info">
                                                <li class="tab col s3">
                                                    <a class="white-text darken-1 waves-effect waves-light"
                                                       id="cliente-informacion" href="#tab-informacion"><i
                                                            class="mdi-action-perm-identity"></i>
                                                        <?= label('clientes_ver'); ?></a>
                                                </li>
                                                <li class="tab-interior tab col s3">
                                                    <a class="white-text darken-1 waves-effect waves-light"
                                                       id="cliente-informacion" href="#tab-cotizaciones"><i
                                                            class="mdi-editor-format-list-numbered"></i>
                                                        <?= label('clientes_cotizaciones'); ?></a>
                                                </li>
                                                <li class="tab-interior tab col s3">
                                                    <a class="white-text darken-1 waves-effect waves-light"
                                                       id="cliente-informacion" href="#tab-archivos"><i
                                                            class="mdi-file-folder-open"></i>
                                                        <?= label('clientes_archivos'); ?></a>
                                                </li>
                                                <li class="tab-interior tab col s3">
                                                    <a class="white-text darken-1 waves-effect waves-light"
                                                       id="cliente-informacion" href="#tab-edicion"><i
                                                            class="mdi-editor-mode-edit"></i>
                                                        <?= label('clientes_editar'); ?></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col s12">
                                            <div id="tab-informacion" class="card col s12">
                                                <?php
                                                    if(isset($resultado)) {
                                                        $this->load->view('clientes/clientes_ver');
                                                    }
                                                ?>
                                            </div>
                                            <div id="tab-edicion" class="card col s12">
                                                <?php
                                                    if(isset($resultado)) {
                                                        $this->load->view('clientes/clientes_editar');
                                                    }
                                                ?>
                                            </div>
                                            <div id="tab-archivos" class="card col s12">
                                                <?php $archivos = array();
                                                    if(isset($resultado['archivos'])) {
                                                        $this->load->view('clientes/clientes_archivos', $resultado['archivos']);
                                                    } else {
                                                        $this->load->view('clientes/clientes_archivos', $archivos);
                                                    }
                                                ?>
                                            </div>
                                            <div id="tab-cotizaciones" class="card col s12">
                                                <?php $this->load->view('clientes/clientes_cotizaciones'); ?>
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

    <?php
    $this->load->view('layout/default/menu-crear.php');
    ?>

</section>
<!-- END CONTENT-->

<script>
    $(document).ready(function () {

        var Vendedores = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('nombre'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // prefetch: 'http://localhost/Proyectos/touch/assets/dashboard/js/json/Vendedores.json'
            prefetch: {
                url: '<?=base_url()?>Usuarios/vendedorSugerencia',
                ttl: 1000
            }
        });

        Vendedores.initialize();


        elt = $('.tags_vendedores > > input');
        elt.tagsinput({
            itemValue: 'idUsuario',
            itemText: 'nombre', 
            typeaheadjs: {
                name: 'Vendedor',
                displayKey: 'nombre',
                source: Vendedores.ttAdapter()
            }
        });

        <?php 
        foreach ($resultado['vendedores'] as $vendedor) {
             echo 'elt.tagsinput("add", '.json_encode($vendedor).');';
        }
        ?>


        var gusto = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: {
                url: '<?=base_url()?>Clientes/gustosSugerencia',
                ttl: 1000,
                filter: function (list) {
                    return $.map(list, function (gusto) {
                        return {name: gusto};
                    });
                }
            }
        });
        gusto.initialize();


        $('.tags_gustosCliente  > > input').tagsinput({
            typeaheadjs: {
                name: 'gusto',
                displayKey: 'name',
                valueKey: 'name',
                source: gusto.ttAdapter()
            }
        });


        var mediosContacto = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // prefetch: 'http://localhost/Proyectos/touch/assets/dashboard/js/json/gustos.json'
            prefetch: {
                url: '<?=base_url()?>Clientes/mediosSugerencia',
                ttl: 1000,
                filter: function (list) {
                    return $.map(list, function (mediosContacto) {
                        return {name: mediosContacto};
                    });
                }
            }
        });
        mediosContacto.initialize();


        var elt = $('.tags_mediosContacto > > input');
        elt.tagsinput({
            typeaheadjs: {
                name: 'mediosContacto',
                displayKey: 'name',
                valueKey: 'name',
                source: mediosContacto.ttAdapter()
            }
        });


        $('.boton-opciones').on('click', function (event) {
            var elementoActivo = $(this).siblings('ul.active');
            if (elementoActivo.length > 0) {
                var estado = elementoActivo.css("display");
                if (estado == "block") {
                    elementoActivo.css("display", "none");
                    elementoActivo.style.display = 'none';
                } else {
                    elementoActivo.css("display", "block");
                    elementoActivo.style.display = 'block';
                }
            }
        });
    });
</script>


