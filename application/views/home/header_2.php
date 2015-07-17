<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?=base_url()?>assets/img/favicon.ico" type="image/x-icon" />
    <title>Touch!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?=base_url()?>assets/css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?=base_url()?>assets/css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?=base_url()?>assets/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?=base_url()?>assets/css/ytplayer.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?=base_url()?>assets/css/theme.css" rel="stylesheet" type="text/css" media="all" />
<!--    <link href="--><?//=base_url()?><!--assets/css/custom.css" rel="stylesheet" type="text/css" media="all" />-->
<!--    <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>-->
<!--    <link href="--><?//= base_url() ?><!--assets/dashboard/css/mystyle-j.css" media="all" rel="stylesheet" type="text/css" />-->

    <!-- CORE CSS-->
    <link href="<?=base_url()?>assets/dashboard/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?=base_url()?>assets/dashboard/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">

<!--    <link href="--><?//=base_url()?><!--assets/dashboard/css/mystyle.css" type="text/css" rel="stylesheet" media="screen,projection">-->

    <!-- <link href="<?=base_url()?>assets/variant/theme/css/bootstrap.css" type="text/css" rel="stylesheet" media="screen,projection"> -->
    <!-- <link href="http://cdn.datatables.net/1.10.6/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection"> -->

    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/dashboard/js/jquery.treetable-ajax-persist.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/dashboard/js/jquery.treetable-3.0.0.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/dashboard/js/persist-min.js"></script>
    <link href="<?= base_url() ?>assets/dashboard/css/jquery.treetable.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/dashboard/css/mystyle-s.css" media="all" rel="stylesheet" type="text/css" />

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <!-- <link href="<?=base_url()?>assets/dashboard/js/plugins/material-preloader/materialPreloader.css" type="text/css" rel="stylesheet" media="screen,projection"> -->
    <link href="<?=base_url()?>assets/dashboard/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?=base_url()?>assets/dashboard/js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?=base_url()?>assets/dashboard/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">

    <link href="<?=base_url()?>assets/dashboard/js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- js necesario para autocompletar en las lineas de detalle -->
    <link rel="stylesheet" href="<?=base_url()?>assets/dashboard/css/jquery-ui.min.css">

    <script src="<?=base_url()?>assets/dashboard/js/jquery-ui.js"></script>

</head>

<body class="btn-rounded">

<div class="nav-container">
    <nav style="background-color: white; box-shadow: none;">
        <div class="nav-utility">
            <div class="module left menu-nosotros">
                <i class="ti-email">&nbsp;</i>
                <span class="sub">hello@touchcr.com</span>
            </div>
            <div class="module right">
                <a class="btn btn-sm boton-registro" href="<?=base_url()?>welcome/registro">REGISTRARSE</a>
                <a class="btn btn-sm boton-registro" href="<?=base_url()?>inicio">Ingresar</a>
            </div>
        </div>
        <div class="nav-bar">
            <div class="module left">
                <a href="<?=base_url()?>welcome/index">
                    <img class="logo logo-light" alt="To" src="<?=base_url()?>assets/img/to.png">
                    <div class="vnu"><img class="" alt="To" src="<?=base_url()?>assets/img/to.png"></div>
                </a>
            </div>
            <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
                <i class="ti-menu"></i>
            </div>
            <div class="module-group right">
                <div class="module left">
                    <ul class="menu">
                        <li style="margin-right: 0%;">
                            <a href="<?=base_url()?>welcome/faq">FAQ</a>
                        </li>
                        <li class="has-dropdown nosotros">
                            <a href="#">
                                nosotros</a>
                            <ul class="mega-menu">
                                <li>
                                    <ul>
                                        <li>
                                            <span class="title">touch!</span>
                                        </li>
                                        <li>
                                            <a href="<?=base_url()?>welcome/que">Qué es Touch? <br></a>
                                        </li>
                                        <li>
                                            <a href="<?=base_url()?>welcome/quienes">¿Quiénes lo usan?<br></a>
                                        </li>
                                        <li>
                                            <a href="<?=base_url()?>welcome/prensa">Prensa<br>&nbsp;<br></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
<div class="main-container">