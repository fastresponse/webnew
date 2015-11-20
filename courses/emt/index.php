<?php

$incdir = '../../';
$title = 'Emergency Medical Technician';
$page_header = 'Emergency Medical Technician';
$sub_header = 'Training that will set you <span class="nowrap">apart from the rest!</span>';
$description = '';
$course_code = 'EMT';
$form_course_name = 'EMT';

$sections = array(

  'test results' => <<<'HTML'
<header><h3>Our Success Rate - <span class="testscore">93%</span></h3></header>
<p>In 2015*, <span class="testscore">93%</span> of our graduates passed the National Registration licensing test, making them eligible for immediate employment.</p>
<div>* As of October 2nd, 2015</div>
HTML
  ,

  'class start dates' => true,

  'course details' => <<<'HTML'
<div class="tablet-row-2">
  <p class="underline">Full Time</p>
  <ul>
    <li>Tue - Fri: 8:30 AM - 5:00 PM</li>
    <li>Mon: 1:00 PM - 5:00 PM Optional tutoring</li>
    <li>Five weeks of instruction</li>
  </ul>
</div>
<hr class="hide-tablet" />
<div class="tablet-row-2">
  <p class="underline">Part Time</p>
  <ul>
    <li>Mon - Thu: 6:00 PM - 10:00 PM</li>
    <li>Every Other Sat: 8:30 AM - 5:00 PM</li>
    <li>Mon: 1:00 PM - 5:00 PM Optional tutoring</li>
    <li>Nine weeks of instruction</li>
  </ul>
</div>
<hr class="tablet-row-1" />
<div class="tablet-row-1">
  <p>Both courses include:</p>
  <ul>
    <li>168 hours of instruction and skills practice</li>
    <li>24-32 hours of field externship</li>
  </ul>
</div>
HTML
  ,

  'links' => <<<'HTML'
<li><a href="#">EMT Course Information Packet</a></li>
<li><a href="#">School Catalog</a></li>
<li><a href="#">Immunizations Requirements</a></li>
<li><a href="#">EMT Skills Videos</a></li>
HTML
  ,

  'course approvals' => <<<'HTML'
<li>CA Bureau for Private Postsecondary Education</li>
<li>CA Emergency Medical Services Authority</li>
<li>Alameda County EMS Agency</li>
<li>National Registry of Emergency Medical Technicians</li>
HTML
  ,

  'above fold' => <<<'HTML'
<p class="stay-open">In only 5 weeks, you can become one of the best EMTs in the Bay Area. After your guaranteed externship you'll have the education and experience to take the National Registry EMT exam, where Fast Response students outperform the national average by a significant margin. Our graduates are highly sought-after by leading Bay Area ambulance companies, making you fully-qualified, job ready, and exceedingly employable.</p>
<p class="stay-open">Master the life-saving skills of an EMT and become somebody's hero!</p>
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
<p>Emergency Medical Technicians (EMTs) are health care professionals who critically assess, evaluate and treat medical and trauma patients. EMTs may work on ambulances, in fire departments or hospital emergency departments, or on search and rescue teams.</p>
<p>EMT is considered an entry-level medical responder. While some EMTs may choose to remain at this level of certification, we view the EMT certification as the first step into a broad array of career options. An EMT certification is required prior to obtaining a paramedic license and also may be required for certain fire service positions. EMT patient contact experience is also considered highly desirable when applying for Physician's Assistant (PA) programs. EMT certification is a fast and accessible option for individuals who are interested in medicine but not sure where to start.</p>
<div id="image-placeholder-1" class="image-placeholder" data-src="{$incdir}img/fr-logo-black.png"></div>
<p>Our extensive, five-week EMT course provides the most effective and expedient platform for our graduates to excel as compassionate, critical-thinking EMTs. Students immediately put their skills into practice in our simulated clinical, residential, and ambulance settings. Students will receive hands-on training with actual field medical equipment, supervised by an experienced cadre of paramedics and EMTs. These instructors bring a wide variety of EMT experience to the classroom and skills lab to expand our students' learning opportunities.</p>
<div class="testimonial-row hide-mobile hide-desktop">
  <div class="testimonial-bg">
    <div id="testimonial-interstitial-2" class="testimonial-container testimonial-interstitial"></div>
  </div>
</div>
<p>We've contracted with local ambulance companies and hospital emergency departments to provide a guaranteed 24-hour clinical and field externship to every student. Externship is a great way to gain more experience and confidence with patient contact in the field. In addition, students will often have the opportunity to participate in mass casualty incident (MCI) or active shooter drills, arranged in conjunction with local EMS agencies and hospitals.</p>
<div id="image-placeholder-2" class="image-placeholder"></div>
<p>The Fast Response EMT course features Basic Life Support (BLS / CPR) certification, free tutoring, NREMT test preparation, and a maximum student to instructor skills training ratio of 9:1.</p>
HTML
  ,
);

?>

<?php require_once($incdir . 'include/template_postsec.php'); ?>
