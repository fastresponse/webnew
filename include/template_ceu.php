<?php

if (!isset($incdir))
  $incdir = '../../';

if (!isset($picdir) && isset($course_code))
  $picdir = $incdir . 'img/' . strtolower($course_code) . '/';

if (!isset($sections))
  $sections = array();

$basecss = array('courses.css');

if (!isset($css))
  $css = $basecss;
else
  $css = $basecss + $css;

?>
<?php require_once($incdir . 'include/header.php'); ?>

<div id="sidebar-primary">
  <aside id="registration" class="tablet-row-1">
    <header><h3>Online Registration</h3></header>
    <div class="tablet-row-2">
      <form action="http://www.ssreg.com/fastresponse/calendar.asp?page=Calendar" method="get" class="registration-btn" target="_blank">
        <input type="submit" class="calendar-btn" name="btn" value="View Calendar" />
        <input type="hidden" name="page" value="Calendar" />
      </form>
      <?= $sections['registration'] ?>
      <hr />
      <?php if ($sections['required books']): ?>
      <div class="book-notice">
        <header><h4>There are required books <span class="nowrap">for this class.</span></h4></header>
        <p>Please see the books section for details.</p>
      </div>
      <?php endif; ?>
    </div>
    <hr class="hide-tablet" />
    <div class="tablet-row-2">
      <div class="reg-notice">
        <header><h3>Attention!</h3></header>
        <p><span class="nowrap">If you are employed by one of</span> <span class="nowrap">the following medical facilities:</span></p>
        <ul>
          <li>Alta Bates Medical Center (RNs only)</li>
          <li>Alameda County Medical Center</li>
          <li>WestMed Ambulance</li>
          <li>Pro Transport-1</li>
        </ul>
        <p>Then you <span class="underline red">must</span> register by phone.</p>
      </div>
    </div>
  </aside>
  <aside style="display: none;"><!-- why is this here -->
  </aside>
  <aside id="contact-info" class="tablet-row-2">
    <header><h3>Contact Us</h3></header>
    <div id="phone">
      <form action="tel: +15108494009" method="get" class="contact-btn">
        <input type="submit" class="phone-btn" name="btn" value="510-849-4009" />
      </form>
    </div>
    <div id="email">
      <form action="<?= $incdir ?>contact/" method="get" class="contact-btn">
        <input type="submit" class="email-btn" name="btn" value="Send an Email" />
        <input type="hidden" name="p" value="<?= urlencode($form_course_name) ?>" />
      </form>
    </div>
  </aside> 
  <?php if (isset($sections['course approvals'])): ?>
  <aside id="course_approvals" class="tablet-row-2">
    <header><h3>Approved By</h3></header>
    <ul>
      <?= $sections['course approvals'] ?>
    </ul>
  </aside>
  <?php endif; ?>
  <aside id="promotions" class="tablet-row-1">
    <header><h3>Promotions</h3></header>
    <p class="underline">Active Military Personnel and Veterans</p>
    <div>10% off course price</div>
    <hr />
    <div class="small-print">Online registrations are not eligible for promotions. Please register by phone instead. Promotions may not be combined and do not apply to books.</div>
  </aside>
</div>

<section id="content">
  <article>
    <div class="collapsible-mobile-start collapsible-tablet">

      <header class="stay-open">
        <h1><?= $page_header ?></h1>
        <?php if (isset($sub_header)): ?><h4><?= $sub_header ?></h4><?php endif; ?>
      </header>

      <?= $sections['above fold'] ?>
      <?php if (isset($sections['trigger'])): ?>
      <p class="hide-desktop hide-tablet trigger bold red underline" data-trigger-text="<?= $sections['trigger'] ?>"></p>
      <?php endif; ?>
      <?= $sections['below fold'] ?>
      
      <p>Please read through our <a href="<?= $incdir ?>policies/#ceu">Continuing Education Policies</a> before registering.</p>
    </div>

    <div id="content-bottom">
      <div id="image-placeholder-1" class="image-placeholder tablet-row-2"></div>
      <div id="image-placeholder-2" class="image-placeholder tablet-row-2"></div>

      <?php if (isset($sections['course details'])): ?>
      <aside id="details" class="collapsible-mobile-start collapsible-tablet tablet-row-1">
        <header class="stay-open"><h3 class="trigger">Course Details</h3></header>
        <?= $sections['course details'] ?>
      </aside>
      <?php endif; ?>

      <?php if (isset($sections['books'])): ?>
      <aside id="books" class="collapsible-mobile-start collapsible-tablet tablet-row-1">
        <header class="stay-open"><h3 class="trigger">Books</h3></header>
        <?= $sections['books'] ?>
        <hr class="tablet-row-1" />
        <div class="small-print tablet-row-1">On-site book purchase is available Mon - Fri. Books may be purchased elsewhere at student discretion.</div>
      </aside>
      <?php endif; ?>
    </div>
  </article>
</section>

<div id="bottom-bar">
  <?php if (isset($sections['faqs'])): ?>
  <aside id="faqs" class="collapsible-mobile-start collapsible-tablet-start">
    <header class="stay-open"><h3 class="trigger">FAQs</h3></header>
    <?= $sections['faqs'] ?>
  </aside>
  <?php endif; ?>
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

<script src="<?= $incdir ?>config/ceu.js"></script>

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

  $('.image-placeholder').load_placeholders( imageOpts[type], srclist );
});
</script>

<?php require_once($incdir . 'footer.php'); ?>

