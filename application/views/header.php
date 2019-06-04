<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Analytics
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src=""></script> -->
    
    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title><?php if($pageTitle) echo $pageTitle . ' | '; ?>ಉದಯಭಾನು</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Javascript calls
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="<?=PUBLIC_URL?>js/jquery.columnizer.js?v=1.2"></script>
    <script type="text/javascript" src="<?=PUBLIC_URL?>js/viewer.js?v=1.2"></script>
    
    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/viewer.css?v=1.2">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/navbar.css?v=1.2">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/homepage.css?v=1.3">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/carousel.css?v=1.2">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/dict.css?v=1.2">

    <!-- Fonts
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,700" rel="stylesheet">
    
    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="<?=PUBLIC_URL?>images/logo.png">
</head>
<body>

    <!-- Navigation
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <nav id="mainNavBar" class="navbar navbar-light navbar-expand-lg fixed-top">
        <div class="container-fluid clear-paddings">
            <a class="navbar-brand" href="<?=BASE_URL?>"><img src="<?=PUBLIC_URL?>images/udayabhanu.jpg" alt="Logo" class="logo"></a>
            <p class="navbar-text" id="navbarText">ಉದಯಭಾನು</p>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav nav ml-auto">
<?php if($viewHelper->isLoggedIn()) { ?>
                    <li><a href="<?=BASE_URL?>user/logout"><span class="english">Logout</span></a></li>
<?php } else {?>
                    <li><a href="<?=BASE_URL?>user/login"><span class="english">Login</span></a></li>
<?php } ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
