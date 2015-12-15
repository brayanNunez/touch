<!doctype html>
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
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <link href="<?= base_url() ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?= base_url() ?>assets/css/themify-icons.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?= base_url() ?>assets/css/flexslider.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?= base_url() ?>assets/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?= base_url() ?>assets/css/ytplayer.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?= base_url() ?>assets/css/theme.css" rel="stylesheet" type="text/css" media="all"/>

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
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/dashboard/js/jquery.treetable-ajax-persist.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/dashboard/js/jquery.treetable-3.0.0.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/dashboard/js/persist-min.js"></script>
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

    <!-- js y css necesario para chosen de los autocompletar -->
    <link href="<?= base_url() ?>assets/dashboard/css/chosen/chosen.css" rel="stylesheet" type="text/css"/>

    <!-- js necesario para autocompletar en las lineas de detalle -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dashboard/css/jquery-ui.min.css">

    <script src="<?= base_url() ?>assets/dashboard/js/jquery-ui.js"></script>

    <link rel="stylesheet" href="<?= base_url() ?>assets/dashboard/css/jquery.realperson.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/js/jquery.plugin.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/js/jquery.realperson.js"></script>

   

    
    <script>
        $(function () {
            $('#defaultReal').realperson({length: 6, regenerate: '<?=label("cambiar_captcha")?>'});
        });
    </script>

    <script type="text/javascript">
        function registro(seleccion) {
            if (seleccion.value == "1") {
                $("#informacion-empresa").hide();
                $("#direccion-empresa").hide();
                $("#informacion-contacto").hide();
                $("#informacion-independiente").fadeIn('slow');
                $("#direccion-independiente").fadeIn('slow');
            } if (seleccion.value == "2") {
                $("#informacion-independiente").hide();
                $("#direccion-independiente").hide();
                $("#informacion-empresa").fadeIn('slow');
                $("#direccion-empresa").fadeIn('slow');
                $("#informacion-contacto").fadeIn('slow');
            }
        }
    </script>

    <script>

        $(document).on('ready',function(){
            $("#informacion-independiente").show();
            $("#direccion-independiente").show();
            $("#informacion-empresa").hide();
            $("#direccion-empresa").hide();
            $("#informacion-contacto").hide();


            //var elem = $('#caja1');
            //mostrar elemento
            //$('#btn1').on('click',function(){
             //   elem.show()
            //});

            //ocultar elemento
            //$('#btn2').on('click',function(){
              //  elem.hide()
            //});

            //desplazar y ocultar
            /*$('#btn3').on('click',function(){
                elem.slideDown(600)
            });

            //desplazar y mostrar
            $('#btn4').on('click',function(){
                elem.slideUp(200)
            });

            //mostrar con sombra
            $('#btn5').on('hover',function(){
                elem.fadeIn('slow')
            });

            //ocultar con sombra
            $('#btn6').on('click',function(){
                elem.fadeOut('fast')
            });*/

        });

    </script>

</head>

<body class="btn-rounded">

<!--     Start Page Loading-->
<!--<div id="loader-wrapper">-->
<!--    <div id="loader"></div>-->
<!--    <div class="loader-section section-left"></div>-->
<!--    <div class="loader-section section-right"></div>-->
<!--</div>-->
<!--     End Page Loading-->

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
                <a href="#login-page" class="btn btn-sm boton-registro modal-trigger"><?= label('ingresar'); ?></a>
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