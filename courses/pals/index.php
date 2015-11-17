<?php

$incdir = '../../';
$title = 'Pediatric Advanced Life Support';
$page_header = 'Pediatric Advanced Life Support';
//$sub_header = '';
$description = '';
$course_code = 'PALS';
$form_course_name = 'PALS';

$sections = array(

  'registration buttons' => <<<'HTML'
<form action="http://www.ssreg.com/fastresponse/classes/classes.asp?catID=4109&pcatID=4108" method="get" class="registration-btn" target="_blank">
  <input type="submit" class="register-btn" name="btn" value="Initial Certification" />
  <input type="hidden" name="catID" value="4109" />
  <input type="hidden" name="pcatID" value="4108" />
</form>
<form action="http://www.ssreg.com/fastresponse/classes/classes.asp?catID=4110&pcatID=4108" method="get" class="registration-btn" target="_blank">
  <input type="submit" class="register-btn" name="btn" value="Renewal" />
  <input type="hidden" name="catID" value="4110" />
  <input type="hidden" name="pcatID" value="4108" />
</form>
HTML
  ,

  'required books' => true,

  'course approvals' => <<<'HTML'
<li>American Heart Association</li>
<li>Training Center #CA03190</li>
HTML
  ,

  'above fold' => <<<'HTML'
<p class="stay-open">The Pediatric Advanced Life Support (PALS) course has been designed by the American Heart Association (AHA) to provide healthcare providers with the information and strategies needed to recognize and prevent cardiopulmonary arrest in infants and children, as well as identify and treat patients in a prearrest condition, such as respiratory failure or hypotensive shock. This course includes airway management, CPR review, and core case practice and testing. Our instructors are friendly, professional and experienced. This class offers hands-on practice using a supportive team approach.</p>
HTML
  ,

  //'trigger' => 'Continue Reading',

  'below fold' => '',

  'course details' => <<<'HTML'
<div class="tablet-row-2">
  <p class="underline">Initial Certification</p>
  <ul>
    <li>For first time students and anyone with an expired PALS card.</li>
    <li>Student Manual is <span class="bold red">required</span>.</li>
    <li>Two day class, 9:00 AM to 5:00 PM.</li>
    <li>Continuing Education Units: 14.00</li>
    <li>Course price: <span class="price">$255.00</span></li>
  </ul>
</div>
<hr class="hide-tablet" />
<div class="tablet-row-2">
  <p class="underline">Renewal</p>
  <ul>
    <li>For those with a current PALS card.</li>
    <li>Current card <span class="bold red">must</span> be presented to instructor.</li>
    <li>Student Manual is <span class="bold red">required</span>.</li>
    <li>One day class, 9:00 AM to 5:00 PM.</li>
    <li>Continuing Education Units: 7.00</li>
    <li>Course price: <span class="price">$190.00</span></li>
  </ul>
</div>
HTML
  ,

  'books' => <<<'HTML'
<div class="tablet-row-2">
  <p class="underline">AHA PALS Provider Manual with Pocket Reference Card</p>
  <ul>
    <li><span class="bold red">Required</span></li>
	  <li><span class="isbn-label">AHA item #:</span> 901052</li>
	  <li><span class="isbn-label">ISBN:</span> 1616691123</li>
	  <li><span class="isbn-label">ISBN-13:</span> 9781616691127</li>
    <li>Our price: <span class="price">$60.00</span>.
    <li>A previously purchased book can be used as long as it meets the current (2010) AHA guidelines.</li>
    <li class="red">This book must be used <span class="bold">during class</span>, per AHA requirements. Students without a book will not receive a certification card.</li>
  </ul>
</div>
<hr class="hide-tablet" />
<div class="tablet-row-2">
  <p class="underline">Fast Response PALS Study Guide</p>
  <ul>
    <li><span class="bold yellow">Recommended</span></li>
    <li>Provided <span class="price">free</span> by Fast Response.</li>
    <li><a href="#" target="_blank">Click here to download</a>.</li>
  </ul>
</div>
HTML
  ,
  
);

?>

<?php require_once($incdir . 'include/template_ceu.php'); ?>
