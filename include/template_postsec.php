<?php

if (!isset($incdir))
  $incdir = '../../';

if (!isset($picdir) && isset($course_code))
  $picdir = $incdir . 'img/' . strtolower($course_code) . '/';

if (!isset($sections))
  $sections = array();

if (!isset($css))
  $css = array('courses.css');
else
  $css = array('courses.css') + $css;


function output_course_data($what) {
  $method = 'a';
  global $sections;

  switch ($method) {
  case 'a':
    echo $sections[$what];
    break;
  case 'b':
    $filename = str_replace(' ', '_', strtolower($what)) . '.php';
    include(getcwd() . DIRECTORY_SEPARATOR . $filename);
    break;
  default:
  }
}
?>
<?php require_once($incdir . 'include/header.php'); ?>

<div id="sidebar-primary">
  <aside id="contact-info" class="tablet-row-3">
    <header><h3>Contact Us</h3></header>
    <div id="phone">
      <!--<div class="button"><a href="tel://510-849-4009"><span class="nowrap"><span class="hide-mobile">510-849-4009</span><span class="hide-tablet hide-desktop">Call</span></span></a></div>-->
      <form action="tel:+15108494009" method="get" class="contact-btn">
        <input type="submit" class="phone-btn" name="btn" value="510-849-4009" />
      </form>
    </div>
    <div id="email">
      <!--<div class="button"><a href="<?= $incdir ?>contact/?p=<?= urlencode($form_course_name) ?>"><span class="nowrap"><span class="hide-mobile">Send an </span>Email</span></a></div>-->
      <form action="<?= $incdir ?>contact/" method="get" class="contact-btn">
        <input type="submit" class="email-btn" name="btn" value="Send an Email" />
        <input type="hidden" name="p" value="<?= urlencode($form_course_name) ?>" />
      </form>
    </div>
  </aside>

  <?php if ($sections['test results']): ?>
  <aside id="test_results" class="tablet-row-3">
    <?php output_course_data('test results') ?>
  </aside>
  <?php endif; ?>

  <?php
    include_once($incdir . 'php/course_dates.php');
    $course_dates_list = get_course_dates($handle, $course_code);

    if (is_array($course_dates_list) && count($course_dates_list)):
  ?>
  <aside id="start_dates" class="tablet-row-3">
    <header><h3>Class Start Dates</h3></header>
    <ul>
    <?php foreach ($course_dates_list as $row): ?>
      <li><?= $row['full_display'] ?></li>
    <?php endforeach; ?>
    </ul>
  </aside>
  <?php endif; ?>

  <?php if ($sections['course details']): ?>
  <aside id="details" class="collapsible-mobile-start collapsible-tablet tablet-row-1">
    <header class="stay-open"><h3 class="trigger">Course Details</h3></header>
    <?php output_course_data('course details') ?>
  </aside>
  <?php endif; ?>

  <?php if ($sections['links']): ?>
  <aside id="links" class="tablet-row-2">
    <header><h3>Links</h3></header>
    <ul>
      <?php output_course_data('links') ?>
    </ul>
  </aside>
  <?php endif; ?>

  <?php if ($sections['course approvals']): ?>
  <aside id="course_approvals" class="tablet-row-2">
    <header><h3>Approved By</h3></header>
    <ul>
      <?php output_course_data('course approvals') ?>
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
</div>

<section id="content">
  <article>
    <div id="sidebar-secondary" class="hide-mobile hide-tablet">
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

    <div class="collapsible-mobile-start collapsible-tablet">
      <header class="stay-open">
        <h1>Emergency Medical Technician</h1>
        <h4>Training that will set you <span class="nowrap">apart from the rest!</span></h4>
      </header>
      <p class="stay-open">In only 5 weeks, you can become one of the best EMTs in the Bay Area. After your guaranteed externship you'll have the education and experience to take the National Registry EMT exam, where Fast Response students outperform the national average by a significant margin. Our graduates are highly sought-after by leading Bay Area ambulance companies, making you fully-qualified, job ready, and exceedingly employable.</p>
      <p class="stay-open">Master the life-saving skills of an EMT and become somebody's hero!</p>
      <p class="hide-desktop hide-tablet trigger bold red underline" style="text-align: center;" data-trigger-text="Continue Reading"></p>
      <div class="testimonial-row hide-mobile hide-desktop">
        <div class="testimonial-bg">
          <div id="testimonial-interstitial-1" class="testimonial-container testimonial-interstitial"></div>
        </div>
      </div>
      <p>Emergency Medical Technicians (EMTs) are health care professionals who critically assess, evaluate and treat medical and trauma patients. EMTs may work on ambulances, in fire departments or hospital emergency departments, or on search and rescue teams.</p>
      <p>EMT is considered an entry-level medical responder. While some EMTs may choose to remain at this level of certification, we view the EMT certification as the first step into a broad array of career options. An EMT certification is required prior to obtaining a paramedic license and also may be required for certain fire service positions. EMT patient contact experience is also considered highly desirable when applying for Physician's Assistant (PA) programs. EMT certification is a fast and accessible option for individuals who are interested in medicine but not sure where to start.</p>
      <p>Our extensive, five-week EMT course provides the most effective and expedient platform for our graduates to excel as compassionate, critical-thinking EMTs. Students immediately put their skills into practice in our simulated clinical, residential, and ambulance settings. Students will receive hands-on training with actual field medical equipment, supervised by an experienced cadre of paramedics and EMTs. These instructors bring a wide variety of EMT experience to the classroom and skills lab to expand our students' learning opportunities.</p>
      <div class="testimonial-row hide-mobile hide-desktop">
        <div class="testimonial-bg">
          <div id="testimonial-interstitial-2" class="testimonial-container testimonial-interstitial"></div>
        </div>
      </div>
      <!--<div class="image-placeholder" data-src=""></div>-->
      <p>We've contracted with local ambulance companies and hospital emergency departments to provide a guaranteed 24-hour clinical and field externship to every student. Externship is a great way to gain more experience and confidence with patient contact in the field. In addition, students will often have the opportunity to participate in mass casualty incident (MCI) or active shooter drills, arranged in conjunction with local EMS agencies and hospitals.</p>
      <p>The Fast Response EMT course features Basic Life Support (BLS / CPR) certification, free tutoring, NREMT test preparation, and a maximum student to instructor skills training ratio of 9:1.</p>
    </div>
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

<script src="<?= $incdir ?>config/testimonialOpts_postsec.js"></script>

<script src="<?= $incdir ?>js/vendor/jquery.bxslider/jquery.bxslider.min.js"></script>

<script>
$(document).ready(function() {
  var width = $(window).width();
  var srclist = piclist.slice(0); // clones array
  var type;

  if (width >= 800) {
    type = 'desktop';
    $('.image-placeholder').load_placeholders(srclist);
  }
  else if (width >= 550) {
    type = 'tablet';
    $('.image-placeholder').load_placeholders(srclist);
  }
  else {
    type = 'mobile';
  }

  $('.testimonial-container').load_testimonials( testimonialOpts[type] );
});
</script>

<?php require_once($incdir . 'include/footer.php'); ?>
