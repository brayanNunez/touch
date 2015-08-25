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
    <link href="<?= base_url() ?>assets/dashboard/css/mystyle-s.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/dashboard/css/mystyle-j.css" media="all" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="<?=base_url()?>assets/dashboard/css/jquery.realperson.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/dashboard/js/jquery.plugin.js"></script>
    <script src="<?=base_url()?>assets/dashboard/js/jquery.realperson.js"></script>
    <script>
        $(function() {
            $('#defaultReal').realperson({length: 6, regenerate: '<?=label("cambiar_captcha")?>'});
        });
    </script>

</head>

<body>