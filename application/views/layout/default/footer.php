<!-- START RIGHT SIDEBAR NAV-->
<aside id="right-sidebar-nav">
    <ul id="chat-out" class="side-nav rightside-navigation">
        <li class="li-hover">
            <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>

            <div id="right-search" class="row">
                <form class="col s12">
                    <div class="input-field">
                        <!-- <i class="mdi-action-search prefix"></i> -->
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix"><?= label('comentar'); ?></label>
                    </div>
                </form>
            </div>
        </li>
        <li class="li-hover">
            <ul class="chat-collapsible" data-collapsible="expandable">
                <li>
                    <!-- <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent Activity</div> -->
                    <!-- <div class="collapsible-body recent-activity"> -->
                    <div class="recent-activity-list chat-out-list row">
                        <!-- <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i>
                        </div> -->
                        <div class="col s12 recent-activity-list-text">
                            <a href="#">Brayan Nuñez Rojas</a>

                            <p>Falta agregar el impuesto</p>
                        </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row">
                        <div class="col s12 recent-activity-list-text">
                            <a href="#">Juan Mendez Perez</a>

                            <p>Todos los productos han sido agregados</p>
                        </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row">
                        <div class="col s12 recent-activity-list-text">
                            <a href="#">María Salas Bolaños</a>

                            <p>Falta agregar los servicios</p>
                        </div>
                    </div>

                    <!-- </div> -->
                </li>
                <!-- <li>
                            <div class="collapsible-header light-blue white-text active"><i class="mdi-editor-attach-money"></i>Sales Repoart</div>
                            <div class="collapsible-body sales-repoart">
                                <div class="sales-repoart-list  chat-out-list row">
                                    <div class="col s8">Target Salse</div>
                                    <div class="col s4"><span id="sales-line-1"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Payment Due</div>
                                    <div class="col s4"><span id="sales-bar-1"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Total Delivery</div>
                                    <div class="col s4"><span id="sales-line-2"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Total Progress</div>
                                    <div class="col s4"><span id="sales-bar-2"></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite Associates</div>
                            <div class="collapsible-body favorite-associates">
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="<?= base_url() ?>assets/dashboard/images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Eileen Sideways</p>
                                        <p class="place">Los Angeles, CA</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="<?= base_url() ?>assets/dashboard/images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Zaham Sindil</p>
                                        <p class="place">San Francisco, CA</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="<?= base_url() ?>assets/dashboard/images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Renov Leongal</p>
                                        <p class="place">Cebu City, Philippines</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="<?= base_url() ?>assets/dashboard/images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Weno Carasbong</p>
                                        <p>Tokyo, Japan</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="<?= base_url() ?>assets/dashboard/images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Nusja Nawancali</p>
                                        <p class="place">Bangkok, Thailand</p>
                                    </div>
                                </div>
                            </div>
                        </li> -->
            </ul>
        </li>
    </ul>
</aside>
<!-- LEFT RIGHT SIDEBAR NAV-->

</div>
<!-- END WRAPPER -->

</div>
<!-- END MAIN -->


<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START FOOTER -->
<footer class="page-footer">

    <div class="footer-copyright">
        <div class="container">
            Derechos Reservados © 2015 <a class="grey-text text-lighten-4" href="http://www.touchcr.com"
                                          target="_blank">Touch!</a> .
            <span class="right"> Desarrollado por <a class="grey-text text-lighten-4" href="http://www.mrrabbit.cr/"
                                                     target="_blank">Mr Rabbit</a></span>
        </div>
    </div>
</footer>
<!-- END FOOTER -->


<!-- ================================================
Scripts
================================================ -->

<!-- jQuery Library -->
<!--<script type="text/javascript" src="<? //=base_url()?><!--assets/dashboard/js/jquery-1.11.2.min.js"></script> -->
<!--materialize js-->
<script type="text/javascript" src="<?= base_url() ?>assets/dashboard/js/materialize.min.js"></script>
<!--scrollbar-->
<script type="text/javascript"
        src="<?= base_url() ?>assets/dashboard/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script type="text/javascript"
        src="<?= base_url() ?>assets/dashboard/js/plugins/material-preloader/materialPreloader.js"></script>

<!-- chartist -->
<script type="text/javascript" src="<?= base_url() ?>assets/dashboard/js/plugins/chartist-js/chartist.min.js"></script>

<!-- data-tables -->
<script type="text/javascript"
        src="<?= base_url() ?>assets/dashboard/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript"
        src="<?= base_url() ?>assets/dashboard/js/plugins/data-tables/data-tables-script.js"></script>

<!-- chartjs -->
<script type="text/javascript" src="<?= base_url() ?>assets/dashboard/js/plugins/chartjs/chart.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/dashboard/js/plugins/chartjs/chart-script.js"></script>

<!-- sparkline -->
<script type="text/javascript"
        src="<?= base_url() ?>assets/dashboard/js/plugins/sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript"
        src="<?= base_url() ?>assets/dashboard/js/plugins/sparkline/sparkline-script.js"></script>

<!--jvectormap-->
<script type="text/javascript"
        src="<?= base_url() ?>assets/dashboard/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script type="text/javascript"
        src="<?= base_url() ?>assets/dashboard/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script type="text/javascript"
        src="<?= base_url() ?>assets/dashboard/js/plugins/jvectormap/vectormap-script.js"></script>


<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="<?= base_url() ?>assets/dashboard/js/plugins.js"></script>
<!-- Toast Notification -->

<!-- autocompletar con boton dentro -->
<script src="<?= base_url()?>assets/dashboard/js/chosen.jquery.js" type="text/javascript"></script>

<!--Inicio lista de modals-->
<div id="login-page" class="modal fade in" style="width: 25%; max-height: none; ">
    <div class="col s12 z-depth-4 card-panel" style="box-shadow: none; margin: 0px; padding-bottom: 0px; ">
        <form class="login-form" style="width: auto; ">
            <div class="row">
                <div class="input-field col s12 center">
                    <img src="<?= base_url() ?>assets/dashboard/images/login-logo.png" alt=""
                         class="circle responsive-img valign profile-image-login">

                    <p class="center login-form-text"><?= label('nombreSistema'); ?></p>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-social-person-outline prefix"></i>
                    <input id="username" type="text">
                    <label for="username" class="center-align"><?= label('login_username'); ?></label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-action-lock-outline prefix"></i>
                    <input id="password" type="password">
                    <label for="password"><?= label('login_password'); ?></label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m12 l12  login-text">
                    <input type="checkbox" id="remember-me"/>
                    <label for="remember-me"><?= label('recordar') ?></label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <a href="<?= base_url() ?>inicio"
                       class="btn waves-effect waves-light col s12"><?= label('loguear') ?></a>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6 m6 l6">
                    <p class="margin medium-small"><a
                            href="<?= base_url() ?>welcome/registro"><?= label('registrar') ?></a></p>
                </div>
                <div class="input-field col s6 m6 l6">
                    <p class="margin right-align medium-small"><a
                            href="page-forgot-password.html"><?= label('contrasena_olvido') ?></a></p>
                </div>
            </div>

        </form>
    </div>
</div>
<div id="horasLaborales" class="modal" style="width: 70%; min-height: 85%;">
    <div class="modal-header">
        <p><?= label('nombreSistema'); ?></p>
        <a class="modal-action modal-close cerrar-modal">
            <i class="mdi-content-clear"></i>
        </a>
    </div>
    <div class="modal-content" style="padding: 0 24px;">
        <div class="row">
            <h5 style="float: left;"><?= label('horas_titulo'); ?></h5>
        </div>
        <div class="row">
            <form id="form_horas" action="<?=base_url()?>horas/guardarCambios" method="post">
                <div class="input-field col s12">
                    <input id="horas_diasAnno" name="horas_diasAnno" type="number">
                    <label for="horas_diasAnno"><?= label('horas_diasAnno') ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="horas_finesSemana" name="horas_finesSemana" type="number">
                    <label for="horas_finesSemana"><?= label('horas_finesSemana') ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="horas_festivosObligatorios" name="horas_festivosObligatorios" type="number">
                    <label for="horas_festivosObligatorios"><?= label('horas_festivosObligatorios') ?></label>
                    <div style="margin-bottom: 35px;">
                        <input value='1' type="checkbox" class="filled-in" id="checkbox_festivosNoObligatorios" name="checkbox_festivosNoObligatorios" />
                        <label id="label_checkboxFestivosNoObligatorios" for="checkbox_festivosNoObligatorios" style="float: left; top: 0;"><?= label('horas_asignarFestivosNoObligatorios') ?></label>
                    </div>
                </div>
                <div id="horas_inputFestivosNoObligatorios" class="input-field col s12" style="display: none;">
                    <input id="horas_festivosNoObligatorios" name="horas_festivosNoObligatorios" type="number">
                    <label for="horas_festivosNoObligatorios"><?= label('horas_festivosNoObligatorios') ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="horas_vacaciones" name="horas_vacaciones" type="number">
                    <label for="horas_vacaciones"><?= label('horas_vacaciones') ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="horas_promedioBajas" name="horas_promedioBajas" type="number">
                    <label for="horas_promedioBajas"><?= label('horas_promedioBajas') ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="horas_diasFacturables" name="horas_diasFacturables" type="number">
                    <label for="horas_diasFacturables"><?= label('horas_diasFacturables') ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="horas_promedioHorasDiarias" name="horas_promedioHorasDiarias" type="number">
                    <label for="horas_promedioHorasDiarias"><?= label('horas_promedioHorasDiarias') ?></label>
                </div>
                <div class="input-field col s12">
                    <input id="horas_cantidadManoObra" name="horas_cantidadManoObra" type="number">
                    <label for="horas_cantidadManoObra"><?= label('horas_cantidadManoObra') ?></label>
                </div>
                <div class="col s12">
                    <div class="col s6">
                        <h5>Total horas anuales: <span id="horas_totalAnual"></span></h5>
                    </div>
                    <div class="col s6">
                        <h5>Promedio de horas mensuales: <span id="horas_promedioMensual"></span></h5>
                    </div>
                </div>
                <div class="input-field col s12 envio-formulario">
                        <button class="btn waves-effect waves-light right" type="submit" name="action">
                            <?= label('horas_guardarCambios'); ?>
                        </button>
                    </div>
            </form>
        </div>
    </div>
</div>
<!--Fin lista de modals-->

<script type="text/javascript">
    $(document).on('click', '#checkbox_festivosNoObligatorios', function () {
        var incluirFestivosNoObligatorios = $(this).is(':checked');
        if(incluirFestivosNoObligatorios) {
            document.getElementById('horas_inputFestivosNoObligatorios').style.display = 'block';
        } else {
            document.getElementById('horas_inputFestivosNoObligatorios').style.display = 'none';
        }
    });
    function validacionCorrecta_horas() {
        var formulario = $('#form_horas');
        $.ajax({
            data: formulario.serialize(),
            url: formulario.attr('action'),
            type:  formulario.attr('method'),
            success:  function (response) {
                if (response == '0') {
                    alert("<?=label('errorGuardar'); ?>");
                } else {
                    alert("Cambios gurdados correctamente.");
                    $('#horasLaborales .modal-header a').click();
                }
            }
        });
    }
    $(document).on('click', '#btn_horasLaborales', function () {
        $.ajax({
            type: 'post',
            url: '<?= base_url(); ?>horas/cargarDatos',
            data: {  },
            success: function(response)
            {
                if(response != 'null') {
                    var datosHoras = $.parseJSON(response);
                    var incluirNoObligatorios = datosHoras['incluirNoObligatorios'];
                    $('#form_horas #horas_diasAnno').val(datosHoras['diasAnno']);
                    $('#form_horas #horas_finesSemana').val(datosHoras['finesSemana']);
                    $('#form_horas #horas_festivosObligatorios').val(datosHoras['festivosObligatorios']);
                    $('#form_horas #horas_festivosNoObligatorios').val(datosHoras['festivosNoObligatorios']);
                    if (incluirNoObligatorios == 0) {
                        $('#form_horas #checkbox_festivosNoObligatorios').prop('checked', false);
                        document.getElementById('horas_inputFestivosNoObligatorios').style.display = 'none';
                    } else {
                        $('#form_horas #checkbox_festivosNoObligatorios').prop('checked', true);
                        document.getElementById('horas_inputFestivosNoObligatorios').style.display = 'block';
                    }
                    $('#form_horas #horas_vacaciones').val(datosHoras['vacaciones']);
                    $('#form_horas #horas_promedioBajas').val(datosHoras['promedioBajas']);
                    $('#form_horas #horas_diasFacturables').val(datosHoras['diasFacturables']);
                    $('#form_horas #horas_promedioHorasDiarias').val(datosHoras['promedioHorasDiarias']);
                    $('#form_horas #horas_cantidadManoObra').val(datosHoras['cantidadManoObra']);

                    var totalHorasAnual = (datosHoras['diasFacturables'] * datosHoras['promedioHorasDiarias']).toFixed(2);
                    var promedioHorasMensual = (totalHorasAnual / 12).toFixed(2);
                    $('#horas_totalAnual').text(totalHorasAnual);
                    $('#horas_promedioMensual').text(promedioHorasMensual);

                    $('#horasLaborales label').addClass('active');
                    $('#label_checkboxFestivosNoObligatorios').removeClass('active');
                } else {
                    $('#horas_totalAnual').text('0');
                    $('#horas_promedioMensual').text('0');
                }
            }
        });
    });
</script>

<script type="text/javascript">
//    $(document).on("ready", function(){
//        var config = {'.chosen-select select'           : {}}
//        for (var selector in config) {
//            $(selector).chosen(config[selector]);
//        }
//    });
</script>

    </body>
</html>