<!DOCTYPE html>
<html lang="en">



<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Touch!</title>

    <!-- Favicons-->
    <link rel="icon" href="<?=base_url()?>assets/dashboard/images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>assets/dashboard/images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="<?=base_url()?>assets/dashboard/images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->    
    <link href="<?=base_url()?>assets/dashboard/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?=base_url()?>assets/dashboard/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?=base_url()?>assets/dashboard/css/mystyle.css" type="text/css" rel="stylesheet" media="screen,projection">
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
    <link href="<?=base_url()?>assets/dashboard/js/plugins/material-preloader/materialPreloader.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?=base_url()?>assets/dashboard/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?=base_url()?>assets/dashboard/js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?=base_url()?>assets/dashboard/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">

      <link href="<?=base_url()?>assets/dashboard/js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">

</head>

<body>

<!--     Start Page Loading-->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
<!--     End Page Loading-->

<!--     START HEADER-->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="touch">
                <div class="nav-wrapper">
                    <h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="<?=base_url()?>assets/dashboard/images/materialize-logo.png" alt="materialize logo"></a> <span class="logo-text">Touch!</span></h1>
                    <ul class="right hide-on-med-and-down">
                        <li class="search-out">
                            <input type="text" class="search-out-text">
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-block waves-light show-search"><i class="mdi-action-search"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light"><i class="mdi-social-notifications"></i></a>
                        </li>
                        <!-- Dropdown Trigger -->
                        <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                        </li>
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
