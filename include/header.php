<?php
  if (!isset($incdir)) $incdir = '/';
  if (!isset($title)) $title = '';
  if (!isset($page_header)) $page_header = '';
  if (!isset($description)) $description = '';
  if (!isset($css)) $css = null;
  if (!isset($hide_header)) $hide_header = false;
  if (!isset($course_code)) $course_code = 'no-course';
  if (!isset($get_piclist)) $get_piclist = false;

  if ($get_piclist) {
    if (!isset($picdir)) $picdir = null;
    require_once($incdir . 'php/file_list.php');
    $piclist = get_file_list($picdir);
  }

  if (!isset($piclist)) $piclist = array();
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
    <?php if (isset($keywords)): ?>
    <meta name="keywords" content="<?= $keywords ?>">
    <?php endif; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php if (isset($canonical)): ?>
    <link rel="canonical" href="<?= $canonical ?>">
    <?php endif; ?>

    <link rel="apple-touch-icon" sizes="57x57" href="<?= $incdir ?>icons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= $incdir ?>icons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= $incdir ?>icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= $incdir ?>icons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= $incdir ?>icons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= $incdir ?>icons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= $incdir ?>icons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= $incdir ?>icons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $incdir ?>icons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="<?= $incdir ?>icons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?= $incdir ?>icons/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="<?= $incdir ?>icons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?= $incdir ?>icons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="<?= $incdir ?>icons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?= $incdir ?>manifest.json">
    <meta name="apple-mobile-web-app-title" content="Fast Response">
    <meta name="application-name" content="Fast Response">
    <meta name="msapplication-TileColor" content="#f5f5f5">
    <meta name="msapplication-TileImage" content="<?= $incdir ?>icons/mstile-144x144.png">
    <meta name="msapplication-config" content="<?= $incdir ?>browserconfig.xml" />
    <meta name="theme-color" content="#f5f5f5">

    <link rel="stylesheet" href="<?= $incdir ?>css/normalize.min.css">
    <link rel="stylesheet" href="<?= $incdir ?>css/main.css">

  <?php foreach ($css as $file): ?>
    <link rel="stylesheet" href="<?= $incdir ?>css/<?= $file ?>">
  <?php endforeach; ?>

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="<?= $incdir ?>css-ie/main.css">
    <?php foreach ($css as $file):
      $inc = $incdir . 'css-ie/' . $file;
      if (file_exists($inc)): ?>
      <link rel="stylesheet" href="<?= $inc ?>">
      <?php endif;
    endforeach; ?>
      <script src="<?= $incdir ?>js/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
    <!--[if !IE]>
    <![endif]-->

    <!--<script src="<?= $incdir ?>js/vendor/modernizr.js"></script>-->

    <script src="<?= $incdir ?>js/vendor/jquery-1.11.3.min.js"></script>

    <script>
      $FRvars = new Object();

      <?php // translate PHP to Javascript ?>
      $FRvars.incdir = '<?= $incdir ?>';
      $FRvars.coursecode = '<?= $course_code ?>';
      $FRvars.piclist = [
      <?php foreach ($piclist as $piclink): ?>
        '<?= $piclink ?>',
      <?php endforeach; ?>
      ];
      <?php // end PHP translated vars ?>

      $FRvars.type = 'mobile';
      $FRvars.loadfuncs = [];
      $FRvars.allplayers = [];
      $FRvars.testimonialOpts = {};
      $FRvars.imageOpts = {};
    </script>      

  </head>
  <body>
    <?php if (!$hide_header): ?>
    <div class="header-container">
      <header class="wrapper">
      <a href="<?= $incdir ?>"><img src="<?= $incdir ?>img/fr-logo-transparent-sm.png" alt="Fast Response School Of Health Care Education" id="logo-img" /></a>
        <div id="menu-button">
          <div></div>
          <div></div>
          <div></div>
        </div>
        <nav>
          <ul>
            <li><a href="<?= $incdir ?>">Home</a></li>
            <!--<li><a href="<?= $incdir ?>courses/">Courses</a></li>-->
            <?php
              $contact_url = $incdir . 'contact/';
              if (isset($form_course_name)) {
                $contact_url .= '?p=' . urlencode($form_course_name);
              }
            ?>
            <li><a href="<?= $contact_url ?>">Contact Us</a></li>
            <li><a href="<?= $incdir ?>about/">About Us</a></li>
            <li><a href="<?= $incdir ?>students/">Student Resources</a></li>
          </ul>
        </nav>
      </header>
    </div>
    <?php endif; ?>

    <div class="main-container">
      <a name="top-of-page"></a>
      <div class="main wrapper">

