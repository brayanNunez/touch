<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description"
          content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords"
          content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Touch!</title>

    <!-- Favicons-->
    <link rel="icon" href="<?= base_url() ?>assets/dashboard/images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed"
          href="<?= base_url() ?>assets/dashboard/images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="<?= base_url() ?>assets/dashboard/images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->

    <!-- CORE CSS-->
    <link href="<?= base_url() ?>assets/dashboard/css/materialize.css" type="text/css" rel="stylesheet"
          media="screen,projection">
    <link href="<?= base_url() ?>assets/dashboard/css/style.css" type="text/css" rel="stylesheet"
          media="screen,projection">
    <link href="<?= base_url() ?>assets/dashboard/css/mystyle.css" type="text/css" rel="stylesheet"
          media="screen,projection">
    <!-- <link href="<?= base_url() ?>assets/variant/theme/css/bootstrap.css" type="text/css" rel="stylesheet" media="screen,projection"> -->
    <!-- <link href="http://cdn.datatables.net/1.10.6/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection"> -->

    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
    <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script> -->
    <script type="text/javascript" src="<?= base_url() ?>assets/dashboard/js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/dashboard/js/jquery.liquidcarousel.pack.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/dashboard/js/jquery.treetable-ajax-persist.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/dashboard/js/jquery.treetable-3.0.0.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/dashboard/js/persist-min.js"></script>
    <script type="text/javascript">
        function embed(seleccion) {
            if (seleccion.value == "1") {
                $("#embedCategoria").show();
                $("#embedPrecio").show();
            } else {
                $("#embedCategoria").hide();
                $("#embedPrecio").hide();
            }
        }
    </script>

    <script>
        $(function() {
            $( ".datepicker-fecha" ).datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: "dd-mm-yy",
                monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Setiembre", "Octubre", "Noviembre", "Diciembre" ],
                monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Set", "Oct", "Nov", "Dic" ],
                dayNames: [ "Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado" ],
                dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
                dayNamesShort: [ "Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sab" ],
                yearRange: "c-90:+nn"
            });
            $( ".datepicker-fechaCotizacion" ).datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: "dd-mm-yy",
                monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Setiembre", "Octubre", "Noviembre", "Diciembre" ],
                monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Set", "Oct", "Nov", "Dic" ],
                dayNames: [ "Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado" ],
                dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
                dayNamesShort: [ "Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sab" ],
                yearRange: "+nn:c+10"
            });
        });
    </script>

    <script>
        //Funcion del menu de opciones
        $(function () {
            $(".menu-opciones-tabla").menu({
                icons: {submenu: "ui-icon-carat-1-s"}
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <link href="<?= base_url() ?>assets/dashboard/css/jquery.treetable.css" media="all" rel="stylesheet"
          type="text/css"/>
    <link href="<?= base_url() ?>assets/dashboard/css/mystyle-s.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url() ?>assets/dashboard/css/mystyle-j.css" media="all" rel="stylesheet" type="text/css"/>


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <!-- <link href="<?= base_url() ?>assets/dashboard/js/plugins/material-preloader/materialPreloader.css" type="text/css" rel="stylesheet" media="screen,projection"> -->
    <link href="<?= base_url() ?>assets/dashboard/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css"
          rel="stylesheet" media="screen,projection">
    <link href="<?= base_url() ?>assets/dashboard/js/plugins/jvectormap/jquery-jvectormap.css" type="text/css"
          rel="stylesheet" media="screen,projection">
    <link href="<?= base_url() ?>assets/dashboard/js/plugins/chartist-js/chartist.min.css" type="text/css"
          rel="stylesheet" media="screen,projection">

    <link href="<?= base_url() ?>assets/dashboard/js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css"
          rel="stylesheet" media="screen,projection">


    <!-- js necesario para autocompletar en las lineas de detalle -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dashboard/css/jquery-ui.min.css">
    <script src="<?= base_url() ?>assets/dashboard/js/jquery-ui.js"></script>

    <!-- js necesario para el menu de opciones-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <!-- js y css para menu contextual -->
    <script src="<?= base_url() ?>assets/dashboard/js/jquery.contextMenu.js" type="text/javascript"></script>
    <link href="<?= base_url() ?>assets/dashboard/css/jquery.contextMenu.css" rel="stylesheet" type="text/css"/>
    


    <!-- js y css necesario para los tags de palabras nuevas y tags de seleccionar varios empleados -->
    <script src="<?= base_url() ?>assets/dashboard/js/typeahead.bundle.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/dashboard/js/bootstrap-tagsinput.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/dashboard/js/app_bs3.js"></script>
    <link href="<?= base_url() ?>assets/dashboard/css/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="<?= base_url() ?>assets/dashboard/css/app.css">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->


     <!-- js para validar foormularios -->
     <script src="<?= base_url() ?>assets/dashboard/js/validaciones.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/dashboard/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/dashboard/js/messages_es.js" type="text/javascript"></script>


    <!-- css necesario para estilo de la hoja de diseno -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dashboard/css/estiloDisenoHoja.css">


    <!-- js y css necesario para chosen de los autocompletar -->
    <link href="<?= base_url() ?>assets/dashboard/css/chosen/chosen.css" rel="stylesheet" type="text/css"/>


    

</head>

<body>

<!--     Start Page Loading-->
<!-- <div id="loader-wrapper"> 
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div> -->
<!--     End Page Loading-->

<!--     START HEADER-->
<header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
        <nav class="touch">
            <div class="nav-wrapper">
                <h1 class="logo-wrapper">
                    <a id="logo-principal-header" href="<?= base_url() ?>inicio" class="brand-logo darken-1">
                        <img src="<?= base_url() ?>assets/dashboard/images/materialize-logo.png" alt="materialize logo">
                    </a>
                    <span class="logo-text"><?= label('nombreSistema'); ?></span>
                </h1>

                <span id="span_mensajeRegistroIncompleto"><?= label('header_perfilIncompleto'); ?>
                    <a id="btn_completarRegistro" href="#completarRegistroEmpresa" class="-text modal-trigger"><?= label('header_perfilEditar'); ?></a>
                </span>

                <ul id="opciones-barra-superior" class="right hide-on-med-and-down">
                    <?php
                    $sessionActual = $this->session->userdata('logged_in');
                    $rolAdministradorConfiguracion = $sessionActual['administrador'];

                    if($rolAdministradorConfiguracion) {
                    ?>
                        <li>
                            <a class="dropdown-button" href="#" data-activates="listaConfiguracion"
                               title="<?= label('tooltip_configuracion') ?>">
                                <i class="mdi-action-settings-applications"></i>
                            </a>
                        </li>
                        <ul id="listaConfiguracion" class="dropdown-content">
                            <li>
                                <a href="<?= base_url() ?>tiposMoneda"><?= label('monedas'); ?></a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>usuarios"><?= label('usuarios'); ?></a>
                            </li>
                            <li>
                                <a href="<?= base_url(); ?>formasPago"><?= label('formasPago'); ?></a>
                            </li>
                            <li>
                                <a href="<?= base_url(); ?>impuesto"><?= label('impuesto'); ?></a>
                            </li>
                            <li>
                                <a href="<?= base_url(); ?>categoriasGasto"><?= label('categoriaDeGastos'); ?></a>
                            </li>
                            <li>
                                <a href="<?= base_url(); ?>categoriasPersona"><?= label('categoriaDeProveedores'); ?></a>
                            </li>
                            <li>
                                <a id="btn_horasLaborales" href="#horasLaborales" class="modal-trigger"><?= label('horas'); ?></a>
                            </li>
                            <li>
                                <a href="<?= base_url(); ?>fases"><?= label('fases'); ?></a>
                            </li>
                        </ul>
                    <?php
                    }
                    ?>
                    <!-- Dropdown Trigger -->
                    <!-- <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                    </li> -->
                </ul>
            </div>
        </nav>
    </div>
    <!-- end header nav-->
</header>
<!--     END HEADER-->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">
