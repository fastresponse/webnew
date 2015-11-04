<?php

$incdir = '../../';
$title = 'Clinical Medical Assistant';
$page_header = 'Clinical Medical Assistant';
$sub_header = 'Exciting and Multi-faceted Careers';
$description = '';
$course_code = 'CMA';
$form_course_name = 'CMA';
$code_for_course_dates = 'CPT';

$sections = array(

  'test results' => null,

  'class start dates' => true,

  'course details' => <<<'HTML'
<div class="tablet-row-2">
  <p class="underline">Phlebotomy Full Time Hours</p>
  <ul>
    <li>Mon - Fri: 9:00 AM - 4:30 PM</li>
    <li>Two weeks of instruction</li>
  </ul>
</div>
<hr class="hide-tablet" />
<div class="tablet-row-2">
  <p class="underline">Phlebotomy Part Time Hours</p>
  <ul>
    <li>Mon - Thu: 6:00 PM - 10:00 PM</li>
    <li>Four weeks of instruction</li>
  </ul>
</div>
<hr class="tablet-row-1" />
<div class="tablet-row-1">
  <p>Phlebotomy courses include:</p>
  <ul>
    <li>65 hours of instruction and laboratory practice</li>
    <li>80+ hours of clinical externship</li>
  </ul>
</div>
<div></div>
<hr class="tablet-row-1" />
<div class="tablet-row-2">
  <p class="underline">Medical Assistant Class Hours</p>
  <ul>
    <li>Mon - Fri: 9:00 AM - 12:00 PM</li>
    <li>Twelve week part time course</li>
  </ul>
</div>
<hr class="hide-tablet" />
<div class="tablet-row-2">
  <p>Medical Assistant course includes:</p>
  <ul>
    <li>180 hours of instruction and laboratory practice</li>
    <li>160 hours of clinical externship</li>
  </ul>
</div>
HTML
  ,

  'links' => <<<'HTML'
<li><a href="#">CMA Course Information Packet</a></li>
<li><a href="#">School Catalog</a></li>
<li><a href="#">Immunizations Requirements</a></li>
HTML
  ,

  'course approvals' => <<<'HTML'
<li>CA Bureau for Private Postsecondary Education</li>
<li>National Center for Competency Testing</li>
<li>California Department of Public Health, Laboratory Field Services</li>
HTML
  ,

  'above fold' => <<<'HTML'
<p class="stay-open">The Medical Assistant is a liaison between the doctor and the patient and is vital to the success of the medical practice. Medical Assistant duties vary greatly and can include taking and recording vital signs and medical histories, rooming patients and preparing them for exams, administering injections, drawing blood and performing commonly ordered lab tests.</p>
<p class="stay-open">Other schools only include venipuncture with their Medical Assistant Course, which is not sufficient training to draw blood in a hospital environment or work independently in a lab. However, <em><strong>Fast Response includes a complete PHLEBOTOMY CERTIFICATION with our program!</strong></em></p>
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
<p>Our 3.5-month course (usually only 3 hours per day!) will prepare you to perform clinical procedures such as sterile techniques, assisting with minor procedures, injections, and phlebotomy. A full month (160 hours) of field experience gives you confidence, polished skills and contacts you need to get your career started right.</p>
<div id="image-placeholder-1" class="image-placeholder"></div>
<p>Our externship satisfies the work experience requirements of many of the major hospitals in the area.</p>
<p>According to the US Department of Labor, Medical Assisting is one of the fastest-growing and most in-demand professions in the country!</p>
HTML
  ,
);

?>

<?php require_once($incdir . 'include/template_postsec.php'); ?>
