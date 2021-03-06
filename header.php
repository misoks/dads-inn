<?php
require_once "_setup/db.php";
@include("functions.php");
session_start();
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo "$page_title | "; ?>Dads Inn</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/taf-swissface-l.css">
        <link rel="stylesheet" href="css/custom.css">
        <link rel="stylesheet" href="css/helpers.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
    <div class="container">
    <header class="page-header">
        <a href="index.php"><img src="css/dadsinn.png" class="banner" alt="Dads Inn"></a>
        <ul class="nav nav--main">
            <?php
                $tab = "\t\t\t";
                echo '<li class="nav__link nav--main__link">'.navLink('index.php', 'Home')."\n";
                echo $tab.'<li class="nav__link nav--main__link">'.navLink('about.php', 'About')."\n";
                echo $tab.'<li class="nav__link nav--main__link">'.navLink('residents.php', 'Residents')."\n";
                echo $tab.'<li class="nav__link nav--main__link">'.navLink('events.php', 'Events')."\n";
            ?>
        </ul>
    </header>
        <?php echo "<section class='page-content page-content--$page_class'>"; ?>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->