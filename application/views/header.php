<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Analytics
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-59279345-7"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-59279345-7');
    </script>
    
    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title><?php if($pageTitle) echo $pageTitle . ' | '; ?>ಡಾ॥ ವಿದ್ವಾನ್ ಎನ್. ರಂಗನಾಥಶರ್ಮಾ</title>
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
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Halant:300&amp;subset=devanagari" rel="stylesheet">
    
    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="<?=PUBLIC_URL?>images/favicon.ico">
</head>
<body>

    <!-- Navigation
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <nav id="mainNavBar" class="navbar navbar-light navbar-expand-lg fixed-top">
        <div class="container-fluid clear-paddings">
            <a class="navbar-brand" href="<?=BASE_URL?>"><img src="<?=PUBLIC_URL?>images/logo.png" alt="Logo" class="logo"></a>
            <p class="navbar-text" id="navbarText"><small>ಮಹಾಮಹೋಪಾಧ್ಯಾಯ</small><br />ಡಾ॥ ವಿದ್ವಾನ್ ಎನ್. ರಂಗನಾಥಶರ್ಮಾ</p>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav nav ml-auto">
                    <li><a href="<?=BASE_URL?>">ಮುಖಪುಟ</a></li>
                    <li><small><a class="dot" href="javascript:void();">•</a></small></li>
                    <li><a href="<?=BASE_URL?>About">ಶರ್ಮರ ಬಗ್ಗೆ</a></li>
                    <li><small><a class="dot" href="javascript:void();">•</a></small></li>
                    <li><a href="<?=BASE_URL?>Krutigalu">ಕೃತಿಗಳು</a></li>
                    <li><small><a class="dot" href="javascript:void();">•</a></small></li>
                    <li><a href="<?=BASE_URL?>Gallery/Photos">ಚಿತ್ರಶಾಲೆ</a></li>
                    <!-- <li class="dropdown">
                        <a class="dropdown-toggle" href="http://example.com" data-toggle="dropdown" aria-haspopup="true">ಚಿತ್ರಶಾಲೆ</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="<?=BASE_URL?>Gallery/Photos">ಚಿತ್ರಗಳು</a>
                          <p class="divider">&nbsp;</p>
                          <a class="dropdown-item" href="#">ದೃಶ್ಯಗಳು</a>
                        </div>
                      </li> -->
                    <li><small><a class="dot" href="javascript:void();">•</a></small></li>
                    <li><a href="<?=BASE_URL?>AboutOurself">ನಮ್ಮ ಬಗ್ಗೆ</a></li>
                    <!-- <li><small><a class="dot" href="javascript:void();">•</a></small></li>
                    <li><a href="<?=BASE_URL?>#contact">ನಮ್ಮ ಸಂಪರ್ಕ</a></li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
