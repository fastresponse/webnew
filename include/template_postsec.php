<?php

if (!isset($incdir)) {
  $incdir = '../../';
}

$get_piclist = true;

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
    <a href="tel:+1-800-637-7387" class="phone-btn">800-637-7387</a>
  </div>
  <div id="email">
    <a href="<?= $incdir ?>contact/?p=<?= $form_course_name ?>" class="phone-btn">Send an Email</a>
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
    $section_widths = array(
      'contact-info' => 3,
      'test_results' => 3,
      'start_dates' => 3,
      'details' => 1,
      'links' => 2,
      'promotions' => 2,
      'course_approvals' => 2,
    );
    $n = 3;
    $d = 1;

    /*
    include_once($incdir . 'php/class.course_dates.php');
    if (empty($course_dates_ob)) {
      $course_dates_ob = new CourseDateList(null, $code_for_course_dates);
    }
    else {
      $course_dates_ob->set_course($code_for_course_dates);
    }
    $course_dates_list = $course_dates_ob->get_course_dates();
    $show_start_dates = (is_array($course_dates_list) && count($course_dates_list));
    */

    $course_dates_list = array();
    $show_start_dates = false;

    $show_test_results = ($sections['test results'] ? true : false);

    if (!$show_test_results) {
      $section_widths['contact-info'] = 2;
      $section_widths['test_results'] = 0;
    }
    if (!$show_start_dates) {
      $section_widths['contact-info'] = 2;
      $section_widths['start_dates'] = 0;
    }
    if (!$show_test_results || !$show_start_dates) { $n = 2; }
    if (!($show_test_results || $show_start_dates)) { $d = 2; }
  ?>

  <?php
    $contact_info_class = 'tablet-row-'.$n;
    include($incdir . 'include/contact_info.php');
  ?>

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
    <header class="stay-open tablet-row-1"><h3 class="trigger">Course Details</h3></header>
    <?= $sections['course details'] ?>
  </aside>
  <?php endif; ?>

  <?php if (($n+$d) % 2 == 1): ?>
  <aside style="display: none;"></aside>
  <?php endif; ?>

<?php if (isset($show_links)): ?>
  <?php if ($sections['links']): ?>
  <aside id="links" class="tablet-row-2">
    <header><h3>Links</h3></header>
    <ul>
      <?= $sections['links'] ?>
    </ul>
  </aside>
  <?php endif; ?>
<?php endif; ?>

  <?php
  include_once($incdir . 'php/dbconn.php');
  if (!isset($handle)) $handle = db_connect();

  $promo_results = basic_query($handle,
    array('title', 'description', 'notes'),
    'promotions',
    array('active = 1', 'FIND_IN_SET(:course, courses)'),
    'id ASC',
    0,
    array(':course' => $course_code)
  );

  if (isset($promo_results) && count($promo_results)):
  ?>
  <aside id="promotions" class="tablet-row-2">
    <header><h3>Promotions</h3></header>
    <?php
    $i = 0;
    foreach ($promo_results as $promo):
    ?>
      <?php if ($i++ > 0): ?>
      <hr>
      <?php endif; ?>
      <p class="underline"><?= $promo['title'] ?></p>
      <div><?= nl2br($promo['description']) ?></div>
      <?php if (!empty($promo['notes'])): ?>
      <ul>
        <?= '<li>' . str_replace("\n", "</li>\n<li>", $promo['notes']) . '</li>' ?>
      </ul>
      <?php endif; ?>
    <?php endforeach; ?>
    <hr>
    <div class="small-print">Online registrations are not eligible for promotions. Please register by phone instead. Promotions may not be combined and do not apply to books.</div>
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
      include_once($incdir . 'php/class.course_dates.php');
      if (empty($course_dates_ob)) {
        $course_dates_ob = new CourseDateList(null, $course_code);
      }
      else {
        $course_dates_ob->set_course($course_code);
      }
      $nextdate = $course_dates_ob->get_next_course_date();
      if (!empty($nextdate['date_display'])) {
    ?>
    <h4 class="stay-open red">Next class: <span class="nowrap"><?= $nextdate['date_display'] ?></span></h4>
    <?php
      }
    }
    ?>

    <?php if ($landing_page && isset($sections['below date'])): ?>
    <h4 class="stay-open red"><?= $sections['below date'] ?></h4>
    <?php endif; ?>

    <?= $sections['above fold'] ?>
    <?php if (isset($sections['trigger'])): ?>
    <p class="hide-desktop hide-tablet trigger bold red underline" data-trigger-text="<?= $sections['trigger'] ?>"></p>
    <?php endif; ?>
    <?= $sections['below fold'] ?>

    <div id="content-bottom"></div>
  </article>
</section>

<div id="bottom-bar">
</div>

<script src="<?= $incdir ?>config/<?= ($landing_page ? 'landing' : 'postsec') ?>.js"></script>

<script src="<?= $incdir ?>js/vendor/jquery.bxslider/jquery.bxslider.min.js"></script>

<?php if (!empty($config)): ?>
<script>
<?= $config ?>
</script>
<?php endif; ?>

<script>
$FRvars.loadfuncs.push(
  function() {
    if ($FRvars.type == 'desktop') {
      $('#sidebar-primary').even_out(
        '#content > article > *:last-child',
        {
          '#promotions' : '#content-bottom',
          '#course_approvals' : '#content-bottom'
        },
        200
      );
    }
  }
);
</script>

<?php require_once($incdir . 'include/footer.php'); ?>
