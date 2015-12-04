<?php

$incdir = '../../';
$title = 'Sterile Processing Technician';
$page_header = 'Sterile Processing Technician';
$sub_header = 'High quality education for an important role';
$description = '';
$course_code = 'SPT';
$form_course_name = 'Sterile Processing';
$show_links = true;

$sections = array(

  'test results' => false,

  'class start dates' => true,

  'course details' => <<<'HTML'
<div class="tablet-row-2">
  <p class="underline">Part-Time Class Hours</p>
  <ul>
    <li>Tue, Wed, Thu: 6:00 PM - 10:00 PM</li>
    <li>Sat: 9:00 AM - 6:00 PM</li>
  </ul>
</div>
<hr class="hide-tablet" />
<div class="tablet-row-2">
  <p>Course includes:</p>
  <dl>
    <dt>Ten weeks of instruction and skills practice</dt>
      <dd>Total of 200 hours</dd>
    <dt>Ten weeks of field externship</dt>
      <dd>Full-time, 8 hours per day, Mon - Fri</dd>
      <dd>Total of 400 hours</dd>
  </dl>
</div>
HTML
  ,

  'links' => <<<'HTML'
<li><a href="https://www.iahcsmm.org/certification-preparation/crcst-certification.html">IAHCSMM CRCST Information</a></li>
HTML
  ,

  'course approvals' => <<<'HTML'
<li>CA Bureau for Private Postsecondary Education</li>
HTML
  ,

  'above fold' => <<<'HTML'
<p class="stay-open">Sterile Processing Technicians provide a critical service in the healthcare environment. These technicians focus on infection control and aseptic techniques to disinfect the wide variety of surgical instruments and tools required for surgical procedures.</p>
HTML
  ,

  'trigger' => 'Continue Reading',

  // this is a heredoc, which allows evaluating variables (the {$incdir})
  // the others are nowdocs, which will literally print out {$incdir}
  'below fold' => <<<"HTML"
<div class="testimonial-row hide-mobile">
  <div class="testimonial-bg">
    <div id="testimonial-interstitial-1" class="testimonial-container testimonial-interstitial"></div>
  </div>
</div>
<p>This course will introduce the student to the roles and responsibilities of Sterile Processing Technicians. The student will obtain basic knowledge and broad perspective of sterile processing (also known as central service) as well as the flow of the operating room.</p>
<p>Skills covered in this course include safe and effective sterilization procedures, provision of instrument sets for surgical procedures and case carts for booked and emergency surgery, documentation and maintenance of instrument and tray records, and the sorting, disassembling, cleaning, and disinfecting of trays, instruments, carts, supplies and equipment.</p>
<div id="image-placeholder-1" class="image-placeholder"></div>
<p>Graduates of this course are prepared to take the Certified Registered Central Service Technician (CRCST) exam provided by IAHCSMM. This certification helps open the doors to new career opportunities, so it's highly recommended!</p>
HTML
  ,
);

?>

<?php require_once($incdir . 'include/template_postsec.php'); ?>
