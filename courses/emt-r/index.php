<?php

$incdir = '../../';
$title = 'EMT Refresher';
$page_header = 'EMT Refresher';
//$sub_header = '';
$description = 'Our EMT Refresher course is designed for current EMTs who need continuing education units and skills testing for recertification.';
$keywords = 'emt, emergency medical technician, emt refresher, emt class, emt course';
$course_code = 'EMT-R';
$form_course_name = 'EMT Refresher';

include_once($incdir . 'php/registration_form.php');

$sections = array(

  'registration buttons' =>
    registration_form('Register for EMT Refresher',
      'http://www.ssreg.com/fastresponse/classes/classes.asp',
      array('catID' => '4120')
    )
  ,

  'required books' => false,

  'course approvals' => <<<'HTML'
<li>Alameda County EMS</li>
<li>CA EMS #01-0031</li>
HTML
  ,

  'above fold' => <<<'HTML'
<p class="stay-open">This course is designed for currently certified EMTs who need continuing education units and skills testing for recertification.</p>
<p class="stay-open">Our 24-hour course combines lecture and skills components with the latest equipment available in the EMT field. Whether you are an ER Tech, in Paramedic school, or an EMT, this course will refresh your skills and provide some new information. Our instructors are all experienced EMTs and Paramedics.</p>
HTML
  ,

  'trigger' => 'Continue Reading',

  'below fold' => <<<'HTML'
<p>After successful completion of this course, the student will receive 24 CEUs and be awarded a completed California EMT Skills Competency Verification Form (EMSA-SCV 08/10) and the appropriate skills verification for the NREMT.</p>
<p>This course meets California recertification and transition course requirements. Additional CEUs are required for NREMT recertification.</p>
HTML
  ,

  'course details' => <<<'HTML'
<div class="tablet-row-1">
  <p class="underline">Class Schedule</p>
  <ul>
    <li>For currently licensed EMTs and those expired within the last 6 months.</li>
    <li>Skills check-off included.</li>
    <li>Three day class, 9:00 AM to 6:00 PM.</li>
    <li>Continuing Education Units: 24.00</li>
    <li>Course price: <span class="price">$395.00</span></li>
  </ul>
</div>
HTML
  ,

  'books' => <<<'HTML'
<div class="tablet-row-1">
  <p class="underline">Emergency medical Technician Transition Manual</p>
  <ul>
    <li><span class="bold yellow">Required</span></li>
	  <li><span class="isbn-label">ISBN:</span> 1449609155</li>
	  <li><span class="isbn-label">ISBN-13:</span> 9781449609153</li>
    <li>Our price: <span class="price">$53.00</span>.
    <li><a href="http://www.jblearning.com/cart/Default.aspx?bc=0915-3&coupon=EMS15">Purchase from JB Learning at a discounted price!</a></li>
  </ul>
</div>
HTML
  ,

  'extra' => <<<"HTML"
<header class="stay-open"><h3 class="trigger">More EMT at Fast Response</h3></header>
<div class="tablet-row-2">
  <p class="bold"><a href="{$incdir}courses/emt/">EMT Program</a></p>
  <div>Fast Response offers an accelerated EMT program, perfect for anyone looking for an entry-level medical responder course.</div>
</div>
<hr class="hide-tablet">
<div class="tablet-row-2">
  <p class="bold"><a href="{$incdir}courses/emt-s/">EMT Skills Verification</a></p>
  <div>A scenario-based skills test intended for EMTs who need to renew their certifications, and have already completed enough continuing education units.</div>
</div>
<hr class="tablet-row-1" />
<div class="tablet-row-1">
  <ul>
    <li><a href="http://www.emsa.ca.gov/emt_frequently_asked_questions">CA State Renewal Guidelines</a></li>
    <li><a href="https://www.nremt.org/nremt/about/reg_basic_history.asp#EMT_Recertification">NREMT Renewal Guidelines</a></li>
  </ul>
</div>
</div>
HTML
  ,
  
);

?>

<?php require_once($incdir . 'include/template_ceu.php'); ?>
