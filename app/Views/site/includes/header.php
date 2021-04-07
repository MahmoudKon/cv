<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CV</title>
    <!-- The Page Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="/<?= PROJECTNAME; ?>/public/assets/frontend/icon/favicon.png">
    <!-- For Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link rel="stylesheet" href="/<?= PROJECTNAME; ?>/public/assets/frontend/css/animate.css"> <!-- The Animations CSS -->
    <link rel="stylesheet" href="/<?= PROJECTNAME; ?>/public/assets/frontend/css/style.css"> <!-- The Main CSS Code -->
    <!-- Start Media Query -->
    <link rel="stylesheet" media="screen and (max-width: 1200px)" href="/<?= PROJECTNAME; ?>/public/assets/frontend/css/media_desktop.css"> <!-- DESKTOP -->
    <link rel="stylesheet" media="screen and (max-width: 1024px)" href="/<?= PROJECTNAME; ?>/public/assets/frontend/css/media_small.css"> <!-- SMALL -->
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="/<?= PROJECTNAME; ?>/public/assets/frontend/css/media_ipad.css"> <!-- IPAD -->
    <link rel="stylesheet" media="screen and (max-width: 480px)" href="/<?= PROJECTNAME; ?>/public/assets/frontend/css/media_mobile.css"> <!-- MOBILE -->
    <!-- End Media Query -->
    <link rel="stylesheet" href="/<?= PROJECTNAME; ?>/public/assets/frontend/css/load.css"> <!-- CSS Code About Loading Animation -->

    <style> .wow:first-child { visibility: hidden; } </style>
    <!--[if IE]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
</head>

<body>
    <!-- Start Loading -->
    <div id="load-content">
        <div id="loader"> <span></span> <span></span> <span></span> <span></span> </div>
    </div>
    <!-- End Loading -->

    <!-- Start Header -->
    <header>
        <?php if(!isset(auth()->username)) : ?>
            <p class="wow slideInDown">
                You must <a href="<?= URL('dashboard/login') ?>"> <b> login</b></a> first
                or <a href="<?= URL('dashboard/register') ?>"> <b> register</b></a> first
            </p>
        <?php else : ?>
            <p class="text wow slideInDown ">
                <a href="<?= URL('dashboard') ?>" style="text-decoration: none;"> <b> DASHBOARD</b></a>
            </p>
        <?php endif; ?>

        <?php if(isset($_POST['id'])) { ?>
            <p class="text wow slideInDown ">
                <a href="" style="text-decoration: none;"> <b> BACK</b></a>
            </p>
        <?php } ?>
    </header>
    <!-- End Header -->
