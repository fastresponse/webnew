<?php
  if (!isset($title)) $title = '';
  if (!isset($page_header)) $page_header = '';
  if (!isset($description)) $description = '';
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?= $title ?></title>
    <meta name="description" content="<?= $description ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/contact_form.css">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  </head>
  <body>
    <div class="header-container">
      <header class="wrapper">
        <img src="/images/headers/header_main_left.png" alt="Fast Response School Of Health Care Education" id="logo-img" />
        <div id="menu-button">
          <div></div>
          <div></div>
          <div></div>
        </div>
        <nav>
          <ul>
            <li><a href="#contact-us-link">Contact Us</a></li>
            <li><a href="#">Career Courses</a></li>
            <li><a href="#">Continuing Education</a></li>
            <li><a href="#">Student Resources</a></li>
            <li><a href="#">About Us</a></li>
          </ul>
        </nav>
      </header>
    </div>

    <div class="main-container">
      <div class="main wrapper">

