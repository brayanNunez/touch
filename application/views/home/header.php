<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/favicon.ico" type="image/x-icon"/>
    <title>Touch!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?= base_url() ?>assets/css/themify-icons.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?= base_url() ?>assets/css/flexslider.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?= base_url() ?>assets/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?= base_url() ?>assets/css/ytplayer.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?= base_url() ?>assets/css/theme.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?= base_url() ?>assets/css/custom.css" rel="stylesheet" type="text/css" media="all"/>
    <link
        href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600'
        rel='stylesheet' type='text/css'>
    <link href="<?= base_url() ?>assets/dashboard/css/mystyle-j.css" media="all" rel="stylesheet" type="text/css"/>

    <link href="<?= base_url() ?>assets/dashboard/css/materialize.css" type="text/css" rel="stylesheet"
          media="screen,projection">
    <link href="<?= base_url() ?>assets/dashboard/css/style.css" type="text/css" rel="stylesheet"
          media="screen,projection">
    <link href="<?= base_url() ?>assets/dashboard/css/mystyle.css" type="text/css" rel="stylesheet"
          media="screen,projection">
    <link href="<?= base_url() ?>assets/dashboard/css/mystyle-s.css" media="all" rel="stylesheet" type="text/css"/>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</head>
<body class="btn-rounded">

<div class="nav-container">
    <nav id="nav-principal" style="background-color: white; box-shadow: none;">
        <div class="nav-utility">
            <div class="module left menu-nosotros">
                <i class="ti-email">&nbsp;</i>
                <span class="sub"><?= label('correoInicio'); ?></span>
            </div>
            <div class="module right">
                <a class="btn btn-sm boton-registro"
                   href="<?= base_url() ?>welcome/registro"><?= label('registrarse'); ?></a>
                <a id="botonLogin" href="#login-page" class="btn btn-sm boton-registro modal-trigger"><?= label('ingresar'); ?></a>
            </div>
        </div>
        <div class="nav-bar">
            <div class="module left">
                <a href="<?= base_url() ?>welcome/index">
                    <img class="logo logo-light" alt="To" src="<?= base_url() ?>assets/img/to.png">

                    <div class="vnu"><img class="" alt="To" src="<?= base_url() ?>assets/img/to.png"></div>
                </a>
            </div>
            <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
                <i class="ti-menu"></i>
            </div>
            <div class="module-group right">
                <div class="module left">
                    <ul class="menu">
                        <li style="margin-right: 0%;">
                            <a href="<?= base_url() ?>welcome/faq"><?= label('faq'); ?></a>
                        </li>
                        <li class="has-dropdown nosotros">
                            <a class="nav-nosotros"><?= label('nosotros'); ?></a>
                            <ul class="mega-menu">
                                <li>
                                    <span class="title"><?= label('nombreInicio'); ?></span>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>welcome/que"
                                       class="nosotros-opcion"><?= label('queEsTouch'); ?><br></a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>welcome/quienes"
                                       class="nosotros-opcion"><?= label('quienesLoUsan'); ?><br></a>
                                </li>
                                <li>
                                    <a href="<?= base_url() ?>welcome/prensa"
                                       class="nosotros-opcion"><?= label('prensa'); ?><br>&nbsp;<br></a>
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