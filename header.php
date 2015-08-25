<?php
  if (!isset($title)) $title = '';
  if (!isset($page_header)) $page_header = '';
  if (!isset($description)) $description = '';
  if (!isset($css)) $css = null;

  include_once($incdir . 'php/testimonials.php');
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

    <link rel="icon" size="228x228" href="<?= $incdir ?>icon.png">
    <link rel="apple-touch-icon" href="<?= $incdir ?>apple-touch-icon.png">
    <meta name="msapplication-square70x70logo" content="icon\_smalltile.png">
    <meta name="msapplication-square150x150logo" content="icon\_mediumtile.png">
    <meta name="msapplication-wide310x150logo" content="icon\_widetile.png">
    <meta name="msapplication-square310x310logo" content="icon\_largetile.png">

    <link rel="stylesheet" href="<?= $incdir ?>css/normalize.min.css">
    <link rel="stylesheet" href="<?= $incdir ?>css/main.css">
    <?php foreach ($css as $file): ?>
      <link rel="stylesheet" href="<?= $incdir ?>css/<?= $file ?>">
    <?php endforeach; ?>

    <script src="<?= $incdir ?>js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  </head>
  <body>
    <div class="header-container">
      <header class="wrapper">
      <a href="/"><img src="<?= $incdir ?>img/fr-logo-transparent.png" alt="Fast Response School Of Health Care Education" id="logo-img" /></a>
        <div id="menu-button">
          <div></div>
          <div></div>
          <div></div>
        </div>
        <nav>
          <ul>
            <li><a href="<?= $incdir ?>">Home</a></li>
            <li><a href="<?= $incdir ?>contact/">Contact Us</a></li>
            <li><a href="<?= $incdir ?>about/">About Us</a></li>
            <li><a href="<?= $incdir ?>location/">Location</a></li>
            <li><a href="<?= $incdir ?>students/">Student Resources</a></li>
          </ul>
        </nav>
      </header>
    </div>

    <div class="main-container">
      <div class="main wrapper">

