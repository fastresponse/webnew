<?php

$incdir = '../../';
$title = 'Basic Life Support CPR';
$page_header = 'Basic Life Support CPR';
$sub_header = 'AHA Approved - for Healthcare Providers';
$description = 'Basic Life Support CPR for healthcare providers as approved by the AHA. We provide an upbeat environment and enthusiastic instructors.';
$keywords = 'bls, basic life support, cpr, cardiopulmonary resuscitation, bls class, cpr class, bls course, cpr course, aha bls';
$course_code = 'BLS';
$form_course_name = 'BLS';

include_once($incdir . 'php/registration_form.php');

$sections = array(

  'registration buttons' =>
    registration_form('Initial Certification',
      'http://www.ssreg.com/fastresponse/classes/classes.asp',
      array('catID' => '4103', 'pcatID' => '4102')
    ) . "\n" .
    registration_form('Renewal',
      'http://www.ssreg.com/fastresponse/classes/classes.asp',
      array('catID' => '4104', 'pcatID' => '4102')
    ) . "\n" .
    registration_form('eLearning',
      'http://www.ssreg.com/fastresponse/classes/classes.asp',
      array('catID' => '4243', 'pcatID' => '4242')
    )
  ,

  'required books' => true,

  'course approvals' => <<<'HTML'
<li>American Heart Association</li>
<li>Training Center #CA03190</li>
HTML
  ,

  'above fold' => <<<'HTML'
<p class="stay-open">Our Basic Life Support classes adhere to the American Heart Association curriculum. This class is intended for current healthcare professionals and anyone entering a medical or healthcare related field. Current BLS Certification is considered a basic employment qualification for many of these professions. Certification cards are provided at the end of class and are valid for 2 years.</p>
HTML
  ,

  'trigger' => 'Continue Reading',

  'below fold' => <<<'HTML'
<p>We strive to provide a fun, upbeat learning environment with enthusiastic instructors. Every class covers adult, child, and infant CPR and choking rescue, as well as usage of equipment such as AEDs (defibrilators), barrier devices, and bag-valve masks. We ensure that every student gets sufficient hands-on skills practice to be confident in using these skills in real emergency situations.</p>
HTML
  ,

  'course details' => <<<'HTML'
<div class="tablet-row-2">
  <p class="underline">Initial Certification</p>
  <ul>
    <li>For first time students and anyone with an expired BLS card.</li>
    <li>Student Manual is <span class="bold red">required</span>.</li>
    <li>One day class, 10:00 AM to 3:00 PM.</li>
    <li>Course price: <span class="price">$55.00</span></li>
  </ul>
</div>
<hr class="hide-tablet" />
<div class="tablet-row-2">
  <p class="underline">Renewal</p>
  <ul>
    <li>For those with a <span class="bold red">current</span> AHA BLS card.</li>
    <li>Current card <span class="bold red">must</span> be presented to instructor.</li>
    <li>Student Manual is <span class="bold red">required</span>.</li>
    <li>One day class, 3.5 hours in length.</li>
    <li>Course price: <span class="price">$50.00</span></li>
  </ul>
</div>
HTML
  ,

  'extra' => <<<'HTML'
<header class="stay-open"><h3 class="trigger">eLearning</h3></header>
<div class="tablet-row-1">
  <p>
  <ul>
    <li>Official AHA BLS Online Course.</li>
    <li>Can be used for either initial certification or renewal.</li>
    <li>More convenient for busy or dynamic schedules.</li>
    <li>eBook version of <span class="underline">Student Manual</span> is <span class="underline">included</span> in price.</li>
  </ul>
  </p>
  <hr />
  <p class="underline">Part 1: Web-based classroom including case-based scenarios, interactive activities, and videos.</p>
  <ul class="sub">
    <li>System requirements listed in <a href="http://www.heart.org/idc/groups/heart-public/@wcm/@ecc/documents/downloadable/ucm_426256.pdf" target="_blank">this FAQ document</a> by the AHA.</li>
    <li>Approximately 1-2 hours in length.</li>
    <li>Price: <span class="price">$22.00</span>.</li>
  </ul>
  <hr />
  <p class="underline">Parts 2 and 3: Skills practice and testing session.</p>
  <ul class="sub">
    <li>Performed at our campus with an AHA BLS instructor.</li>
    <li>Certificate from part 1 must be presented to instructor.</li>
    <li>BLS Certification card issued after successful completion.</li>
    <li>Session is 1.5 hours in length.</li>
    <li>Price: <span class="price">$35.00</span>.</li>
  </ul>
</div>
HTML
  ,

  'books' => <<<'HTML'
<div class="tablet-row-1">
  <p class="underline">AHA BLS for Healthcare Providers Student Manual with Pocket Reference Card</p>
  <ul>
    <li><span class="bold red">Required</span></li>
	  <li><span class="isbn-label">AHA item #:</span> 901038</li>
	  <li><span class="isbn-label">ISBN:</span> 1616690399</li>
	  <li><span class="isbn-label">ISBN-13:</span> 9781616690397</li>
    <li>Our price: <span class="price">$20.00</span>.
    <li>A previously purchased book can be used as long as it meets the current (2010) AHA guidelines.</li>
    <li class="red">This book must be used <span class="bold">during class</span>, per AHA requirements. Students without a book will not receive a certification card.</li>
  </ul>
</div>
HTML
  ,
  
);

?>

<?php require_once($incdir . 'include/template_ceu.php'); ?>
