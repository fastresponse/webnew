<?php
  $incdir = '../../';
  $title = 'Emergency Medical Technician';
  $page_header = 'Emergency Medical Technician';
  $description = '';
  $course_code = 'EMT';
  $css = array('landing.css', 'contact_form.css');

  $form_course_name = 'EMT';
  $picdir = $incdir . 'img/emt/';
?>
<?php require_once($incdir . 'header.php'); ?>

<div id="top-bar" class="bg-darkblue">
  <img src="<?= $incdir ?>img/fr-logo-darkblue.png" alt="Fast Response" />
  <h3 style="width: 100%;">Career training in Berkeley, CA</h3>
  <div id="phone">
    <!--<div class="button"><a href="tel://800-637-7378"><span class="nowrap">Call<span class="hide-mobile"> 800-637-7378</span></span></a></div>-->
    <form action="tel:+18006377378" method="get" class="contact-btn">
      <input type="submit" class="phone-btn" name="btn" value="800-637-7378" />
    </form>
  </div>
  <div id="email">
    <!--<div class="button"><a href="#contact-info"><span class="nowrap"><span class="hide-mobile">Send An </span>Email</span></a></div>-->
    <form action="<?= $incdir ?>contact/" method="get" class="contact-btn">
      <input type="submit" class="email-btn" name="btn" value="Send an Email" />
      <input type="hidden" name="p" value="<?= urlencode($form_course_name) ?>" />
    </form>
  </div>
</div>


<div id="sidebar-primary">
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
      <div id="testimonial-sidebar" class="testimonial-container">
        <h3 class="red underline click-load hide-desktop hide-tablet">Click to Read Testimonials</h3>
      </div>
    </div>
  </aside>
  <aside class="bottom-of-sidebar click-to-top">
    <div class="button"><a href="#top-of-page">Back to top</a></div>
  </aside>
</div>

<section id="content">
  <article class="collapsible-mobile-start collapsible-tablet">
    <div id="sidebar-secondary">
    </div>
    <header class="stay-open"><h1>Emergency Medical Technician</h1></header>
    <h4 class="stay-open">Training that will set you <span class="nowrap">apart from the rest!</span></h4>
    <?php
      include_once($incdir . 'php/course_dates.php');
      $nextdate = get_next_course_date($handle, $course_code)['date_display'];
    ?>
    <h4 class="stay-open red">Next class: <span class="nowrap"><?= $nextdate ?></span></h4>
    <p class="stay-open">In only 5 weeks, you can become one of the best EMTs in the Bay Area. After your guaranteed externship you'll have the education and experience to take the National Registry EMT exam, where Fast Response students outperform the national average by a significant margin. Our graduates are highly sought-after by leading Bay Area ambulance companies, making you fully-qualified, job ready, and exceedingly employable.</p>
    <p class="stay-open">Master the life-saving skills of an EMT and become somebody's hero!</p>
    <p class="hide-desktop hide-tablet trigger bold red underline" style="text-align: center;" data-trigger-text="Continue Reading"></p>
    <div class="testimonial-row">
      <div class="testimonial-bg">
        <div id="interstitial1" class="testimonial-interstitial testimonial-container"></div>
      </div>
    </div>
    <p>Emergency Medical Technicians (EMTs) are health care professionals who critically assess, evaluate and treat medical and trauma patients. EMTs may work on ambulances, in fire departments or hospital emergency departments, or on search and rescue teams.</p>
    <p>EMT is considered an entry-level medical responder. While some EMTs may choose to remain at this level of certification, we view the EMT certification as the first step into a broad array of career options. An EMT certification is required prior to obtaining a paramedic license and also may be required for certain fire service positions. EMT patient contact experience is also considered highly desirable when applying for Physician's Assistant (PA) programs. EMT certification is a fast and accessible option for individuals who are interested in medicine but not sure where to start.</p>
    <div class="image-placeholder" data-src="<?= $incdir ?>img/fr-logo-black.png"></div>
    <p>Our extensive, five-week EMT course provides the most effective and expedient platform for our graduates to excel as compassionate, critical-thinking EMTs. Students immediately put their skills into practice in our simulated clinical, residential, and ambulance settings. Students will receive hands-on training with actual field medical equipment, supervised by an experienced cadre of paramedics and EMTs. These instructors bring a wide variety of EMT experience to the classroom and skills lab to expand our students' learning opportunities.</p>
    <p>We've contracted with local ambulance companies and hospital emergency departments to provide a guaranteed 24-hour clinical and field externship to every student. Externship is a great way to gain more experience and confidence with patient contact in the field. In addition, students will often have the opportunity to participate in mass casualty incident (MCI) or active shooter drills, arranged in conjunction with local EMS agencies and hospitals.</p>
    <div class="image-placeholder"></div>
    <p>The Fast Response EMT course features Basic Life Support (BLS / CPR) certification, free tutoring, NREMT test preparation, and a maximum student to instructor skills training ratio of 9:1.</p>
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

<script src="../testimonialOpts.js"></script>

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

<?php require_once($incdir . 'footer.php'); ?>
