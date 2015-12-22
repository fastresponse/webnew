<?php

$incdir = '../../';
$title = 'International Trauma Life Support';
$page_header = 'International Trauma Life Support';
//$sub_header = '';
$description = '';
$course_code = 'ITLS';
$form_course_name = 'ITLS';

include_once($incdir . 'php/registration_form.php');

$sections = array(

  'registration buttons' =>
    registration_form('Initial Certification',
      'http://www.ssreg.com/fastresponse/classes/classes.asp',
      array('catID' => '4113', 'pcatID' => '4111')
    ) . "\n" .
    registration_form('Refresher',
      'http://www.ssreg.com/fastresponse/'
    )
  ,

  'required books' => true,

  //'course approvals' => null,

  'above fold' => <<<'HTML'
<p class="stay-open">ITLS is internationally accepted as the standard training course for pre-hospital trauma care. This approach represents a global standard that can be applied to any situation and any environment.</p>
HTML
  ,

  'trigger' => 'Continue Reading',

  'below fold' => <<<'HTML'
<p>ITLS courses give the student the knowledge and hands-on skills to take better care of trauma patients. ITLS stresses rapid assessment, appropriate intervention and identification of immediate life threats.</p>
<p>Our ITLS course is taught by knowledgeable and skilled ALS educators with many years of field experience. It combines classroom learning, hands-on skills stations, and assessment stations that put learning to work in simulated trauma scenarios.</p>
<p>Upon completion of this course you will be able to utilize your knowledge of traumatic mechanisms and pathologies in order to initiate critical patient interventions in a timely manner.</p>
<p>ITLS is an approved provider by the Continuing Education Coordination Board for Emergency Medical Services (CECBEMS) and all ITLS courses are CECBEMS certified.</p>
HTML
  ,

  'course details' => <<<'HTML'
<div class="tablet-row-2">
  <p class="underline">Initial Certification</p>
  <ul>
    <li>Skills check-off included.</li>
    <li>Two day class, 9:00 AM to 5:00 PM.</li>
    <li>Continuing Education Units: 16.00</li>
    <li>Course price: <span class="price">$300.00</span></li>
  </ul>
</div>
<hr class="hide-tablet" />
<div class="tablet-row-2">
  <p class="underline">Refresher</p>
  <ul>
    <li>Used to renew ITLS certification every 3 years.</li>
    <li>One day class, 9:00 AM to 5:00 PM.</li>
    <li>Continuing Education Units: 8.00</li>
    <li>Course price: <span class="price">$185.00</span></li>
  </ul>
</div>
HTML
  ,

  'books' => <<<'HTML'
<div class="tablet-row-1">
  <p class="underline">International Trauma Life Support Student Manual, <span class="nowrap">7th Edition</span></p>
  <ul>
    <li><span class="bold red">Required</span></li>
	  <li><span class="isbn-label">ISBN:</span> 0132157241</li>
	  <li><span class="isbn-label">ISBN-13:</span> 9780132157247</li>
    <li>Our price: <span class="price">$75.00</span>.
  </ul>
</div>
HTML
  ,
  
  'extra' => <<<'HTML'
<header class="stay-open"><h3 class="trigger">Certification</h3></header>
<div class="tablet-row-1">
  <p>Upon completion of this course, students will be internationally certified by the ITLS organization.</p>
  <p>Certification cards will be mailed to students and should arrive about 2 weeks after course completion.</p>
  <p>This certification must be renewed every 3 years.</p>
</div>
HTML
  ,
);

?>

<?php require_once($incdir . 'include/template_ceu.php'); ?>
