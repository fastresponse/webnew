<?php

$incdir = '../../';
$title = 'Phlebotomy';
$page_header = 'Certified Phlebotomy Technician';
$sub_header = 'High-quality, Hands-on Training';
$description = '';
$course_code = 'CPT';
$form_course_name = 'Phlebotomy';

if (false && empty($landing_page)) {
$config = <<<'HTML'
testimonialOpts['desktop']['testimonial-sidebar-1']['load'] = 'none';
testimonialOpts['desktop']['testimonial-sidebar-2']['load'] = 'none';
HTML;
}

$sections = array(

  'test results' => <<<'HTML'
<header><h3>Our Success Rate - <span class="testscore">89%</span></h3></header>
<p>In 2015*, <span class="testscore">89%</span> of our graduates passed the National Center for Competency Testing Phlebotomy Technician licensing test, making them eligible for immediate employment.</p>
<div>* As of December 1st, 2015</div>
HTML
  ,

  'class start dates' => true,

  'course details' => <<<'HTML'
<div class="tablet-row-2">
  <p class="underline">Full Time</p>
  <ul>
    <li>Mon - Fri: 9:00 AM - 4:30 PM</li>
    <li>Two weeks of instruction</li>
  </ul>
</div>
<hr class="hide-tablet" />
<div class="tablet-row-2">
  <p class="underline">Part Time</p>
  <ul>
    <li>Mon - Thu: 6:00 PM - 10:00 PM</li>
    <li>Four weeks of instruction</li>
  </ul>
</div>
<hr class="tablet-row-1" />
<div class="tablet-row-1">
  <p>Both courses include:</p>
  <ul>
    <li>65 hours of instruction and laboratory practice</li>
    <li>80+ hours of clinical externship</li>
  </ul>
</div>
HTML
  ,

  'links' => <<<'HTML'
HTML
  ,

  'course approvals' => <<<'HTML'
<li>CA Bureau for Private Postsecondary Education</li>
<li>National Center for Competency Testing</li>
<li>California Department of Public Health, Laboratory Field Services</li>
HTML
  ,

  'above fold' => <<<'HTML'
<p class="stay-open">An important member of the clinical laboratory team, the phlebotomist works directly with patients to collect and process blood specimens for laboratory testing. Topics covered in the course include anatomy and physiology, laboratory safety, infection control precautions, bloodborne pathogens, specimen collection, and proper needle disposal.</p>
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
<p>Our program focuses on hands-on training to prepare you for a real career. After proper instruction, students practice drawing blood first from dummy training arms, and then from each other. We impose a maximum student to instructor ratio of 8:1 in the lab to ensure safety and quality learning.</p>
<div id="image-placeholder-1" class="image-placeholder"></div>
<p>Every student receives a free CPR training class before being placed on a guaranteed clinical externship in a professional medical lab environment. This real-world experience also provides opportunities to make valuable contacts in the industry.</p>
HTML
  ,
);

?>

<?php require_once($incdir . 'include/template_postsec.php'); ?>
