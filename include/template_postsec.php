<?php

if (!isset($incdir)) {
  $incdir = '../../';
}

if (!isset($picdir) && isset($course_code)) {
  $picdir = $incdir . 'img/' . strtolower($course_code) . '/';
}

if (!isset($sections)) {
  $sections = array();
}

if (!isset($landing_page)) {
  $landing_page = false;
}

if ($landing_page) {
  $basecss = array('landing.css', 'contact_form.css');
  if (!isset($show_next_date)) {
    $show_next_date = true;
  }
  if (!isset($hide_header)) {
    $hide_header = true;
  }
}
else {
  $basecss = array('courses.css');
}

if (!isset($show_next_date)) {
  $show_next_date = false;
}

if (!isset($code_for_course_dates)) {
  $code_for_course_dates = $course_code;
}

if (!isset($css)) {
  $css = $basecss;
}
else {
  $css = $basecss + $css;
}

/*
function load_course_data() {
  global $sections;

  $arr = array(
    'Test Results', 'Course Details', 'Links',
    'Course Approvals', 'Above Fold', 'Below Fold'
  );

  foreach ($arr as $what) {
    $filename = str_replace(' ', '_', strtolower($what)) . '.php';
    $sections[$what] = file_get_contents(getcwd() . DIRECTORY_SEPARATOR . $filename);
  }
}
*/
?>
<?php require_once($incdir . 'include/header.php'); ?>

<?php if ($landing_page): ?>
<div id="top-bar" class="bg-darkblue">
  <img src="<?= $incdir ?>img/fr-logo-darkblue.png" alt="Fast Response" />
  <h3 style="width: 100%;">Career training in Berkeley, CA</h3>
  <div id="phone">
    <form action="tel:+18006377378" method="get" class="contact-btn">
      <input type="submit" class="phone-btn" value="800-637-7378" />
    </form>
  </div>
  <div id="email">
    <form action="<?= $incdir ?>contact/" method="get" class="contact-btn">
      <input type="submit" class="email-btn" value="Send an Email" />
      <input type="hidden" name="p" value="<?= urlencode($form_course_name) ?>" />
    </form>
  </div>
</div>
<?php endif; ?>

<div id="sidebar-primary">
<?php if ($landing_page): ?>
  <aside id="contact-info">
    <header><h3 class="cta-bg">Get Info Now!</h3></header>
    <?php
      $hide_form_title = true;
      $hide_form_call_button = false;
      include($incdir . 'contact/contact_form.php');
    ?>
  </aside>
  <aside class="testimonial-column">
    <div class="testimonial-bg">
      <div id="testimonial-sidebar-1" class="testimonial-container">
        <h3 class="red underline click-load hide-desktop hide-tablet">Click to Read Testimonials</h3>
      </div>
    </div>
  </aside>
  <aside class="bottom-of-sidebar click-to-top">
    <div class="button"><a href="#top-of-page">Back to top</a></div>
  </aside>

<?php else: ?>
  <?php
    $n = 3;
    $d = 1;

    include_once($incdir . 'php/course_dates.php');
    $course_dates_list = get_course_dates($handle, $code_for_course_dates);
    $show_start_dates = (is_array($course_dates_list) && count($course_dates_list));

    $show_test_results = ($sections['test results'] ? true : false);

    if (!$show_test_results || !$show_start_dates) { $n = 2; }
    if (!($show_test_results || $show_start_dates)) { $d = 2; }
  ?>
  <aside id="contact-info" class="tablet-row-<?= $n ?>">
    <header><h3>Contact Us</h3></header>
    <div id="phone">
      <!--<div class="button"><a href="tel://510-849-4009"><span class="nowrap"><span class="hide-mobile">510-849-4009</span><span class="hide-tablet hide-desktop">Call</span></span></a></div>-->
      <form action="tel:+15108494009" method="get" class="contact-btn">
        <input type="submit" class="phone-btn" value="510-849-4009" />
      </form>
    </div>
    <div id="email">
      <!--<div class="button"><a href="<?= $incdir ?>contact/?p=<?= urlencode($form_course_name) ?>"><span class="nowrap"><span class="hide-mobile">Send an </span>Email</span></a></div>-->
      <form action="<?= $incdir ?>contact/" method="get" class="contact-btn">
        <input type="submit" class="email-btn" value="Send an Email" />
        <input type="hidden" name="p" value="<?= urlencode($form_course_name) ?>" />
      </form>
    </div>
  </aside>

  <?php if ($show_test_results): ?>
  <aside id="test_results" class="tablet-row-<?= $n ?>">
    <?= $sections['test results'] ?>
  </aside>
  <?php endif; ?>

  <?php if ($show_start_dates): ?>
  <aside id="start_dates" class="tablet-row-<?= $n ?>">
    <header><h3>Class Start Dates</h3></header>
    <ul>
    <?php foreach ($course_dates_list as $row): ?>
      <li><?= $row['full_display'] ?></li>
    <?php endforeach; ?>
    </ul>
  </aside>
  <?php endif; ?>

  <?php if ($sections['course details']): ?>
    <aside id="details" class="collapsible-mobile-start collapsible-tablet tablet-row-<?= $d ?>">
    <header class="stay-open"><h3 class="trigger">Course Details</h3></header>
    <?= $sections['course details'] ?>
  </aside>
  <?php endif; ?>

  <?php if (($n+$d) % 2 == 1): ?>
  <aside style="display: none;"></aside>
  <?php endif; ?>

  <?php if ($sections['links']): ?>
  <aside id="links" class="tablet-row-2">
    <header><h3>Links</h3></header>
    <ul>
      <?= $sections['links'] ?>
    </ul>
  </aside>
  <?php endif; ?>

  <?php if ($sections['course approvals']): ?>
  <aside id="course_approvals" class="tablet-row-2">
    <header><h3>Approved By</h3></header>
    <ul>
      <?= $sections['course approvals'] ?>
    </ul>
  </aside>
  <?php endif; ?>

  <aside class="hide-desktop hide-tablet testimonial-column">
    <div class="testimonial-bg">
      <div id="testimonial-bottom" class="testimonial-container">
        <h3 class="red underline click-load">Click to Read Testimonials</h3>
      </div>
    </div>
  </aside>
<?php endif; ?>
</div>

<section id="content">
  <article class="collapsible-mobile-start collapsible-tablet">
    <?php if (!$landing_page): ?>
    <div id="sidebar-secondary" class="hide-mobile hide-tablet stay-open">
      <aside class="testimonial-column">
        <div class="testimonial-bg">
          <div id="testimonial-sidebar-1" class="testimonial-container"></div>
        </div>
      </aside>
      <aside class="testimonial-column">
        <div class="testimonial-bg">
          <div id="testimonial-sidebar-2" class="testimonial-container"></div>
        </div>
      </aside>
    </div>
    <?php endif; ?>

    <header class="stay-open">
      <h1><?= $page_header ?></h1>
      <?php if (isset($sub_header)): ?><h4><?= $sub_header ?></h4><?php endif; ?>
    </header>

    <?php
    if ($show_next_date) {
      include_once($incdir . 'php/course_dates.php');
      $nextdate = get_next_course_date($handle, $course_code)['date_display'];
      if (strlen($nextdate)) {
    ?>
    <h4 class="stay-open red">Next class: <span class="nowrap"><?= $nextdate ?></span></h4>
    <?php
      }
    }
    ?>

    <?= $sections['above fold'] ?>
    <?php if (isset($sections['trigger'])): ?>
    <p class="hide-desktop hide-tablet trigger bold red underline" data-trigger-text="<?= $sections['trigger'] ?>"></p>
    <?php endif; ?>
    <?= $sections['below fold'] ?>
  </article>
</section>

<div id="bottom-bar">
</div>

<script>
<?php // variable translate section, PHP -> Javascript ?>
var course_code = "<?= $course_code ?>";

var piclist = [
<?php 
  require_once($incdir . 'php/file_list.php');
  $piclist = get_file_list($picdir);
  
  foreach ($piclist as $piclink): ?>
  "<?= $piclink ?>",
<?php endforeach; ?>
];
</script>

<script src="<?= $incdir ?>config/<?= ($landing_page ? 'landing' : 'postsec') ?>.js"></script>

<script src="<?= $incdir ?>js/vendor/jquery.bxslider/jquery.bxslider.min.js"></script>

<script>
$(document).ready(function() {
  var width = $(window).width();
  var srclist = piclist.slice(0); // clones array
  var type;

  if (width >= 800) {
    type = 'desktop';
  }
  else if (width >= 550) {
    type = 'tablet';
  }
  else {
    type = 'mobile';
  }

  $.when(
    $('.testimonial-container').load_testimonials( testimonialOpts[type] )
  ).then(function() {
    $('.image-placeholder').load_placeholders( imageOpts[type], srclist );
  });
});
</script>

<?php require_once($incdir . 'include/footer.php'); ?>
