<?php

$incdir = '../../';
$title = 'Advanced Cardiovascular Life Support';
$page_header = 'Advanced Cardiovascular <span class="nowrap">Life Support</span>';
//$sub_header = '';
$description = '';
$course_code = 'ACLS';
$form_course_name = 'ACLS';

$sections = array(

  'registration buttons' => <<<'HTML'
<form action="http://www.ssreg.com/fastresponse/classes/classes.asp?catID=4106&pcatID=4105" method="get" class="registration-btn" target="_blank">
  <input type="submit" class="register-btn" name="btn" value="Initial Certification" />
  <input type="hidden" name="catID" value="4106" />
  <input type="hidden" name="pcatID" value="4105" />
</form>
<form action="http://www.ssreg.com/fastresponse/classes/classes.asp?catID=4107&pcatID=4105" method="get" class="registration-btn" target="_blank">
  <input type="submit" class="register-btn" name="btn" value="Renewal" />
  <input type="hidden" name="catID" value="4107" />
  <input type="hidden" name="pcatID" value="4105" />
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
<p class="stay-open">Our Advanced Cardiovascular Life Support (ACLS) course offers challenging and useful skills that make a difference in saving lives. A lively, low-stress class environment, with a focus on a team approach to medical emergencies has proven to be an essential and rewarding experience for all participants.</p>
HTML
  ,

  'trigger' => 'Continue Reading',

  'below fold' => <<<'HTML'
<p>Designed by the American Heart Association (AHA), this course provides the knowledge and skills needed to evaluate and manage the first 10 minutes of adult ventricular fibrillation/ventricular tachycardia (VF/VT) arrest, as well as other pulseless and pre-arrest cardiopulmonary emergencies.</p>
HTML
  ,

  'course details' => <<<'HTML'
<div class="tablet-row-2">
  <p class="underline">Initial Certification</p>
  <ul>
    <li>For first time students and anyone with an expired ACLS card.</li>
    <li>Student Manual is <span class="bold red">required</span>.</li>
    <li>Two day class, 9:00 AM to 5:00 PM.</li>
    <li>Continuing Education Units: 14.00</li>
    <li>Course price: <span class="price">$260.00</span></li>
  </ul>
</div>
<hr class="hide-tablet" />
<div class="tablet-row-2">
  <p class="underline">Renewal</p>
  <ul>
    <li>For those with a current ACLS card.</li>
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
  <p class="underline">AHA ACLS Provider Manual with Pocket Reference Card Set</p>
  <ul>
    <li><span class="bold red">Required</span></li>
	  <li><span class="isbn-label">AHA item #:</span> 901014</li>
	  <li><span class="isbn-label">ISBN:</span> 1616690100</li>
	  <li><span class="isbn-label">ISBN-13:</span> 9781616690106</li>
    <li>Our price: <span class="price">$53.00</span>.
    <li>A previously purchased book can be used as long as it meets the current (2010) AHA guidelines.</li>
    <li class="red">This book must be used <span class="bold">during class</span>, per AHA requirements. Students without a book will not receive a certification card.</li>
  </ul>
</div>
<hr class="hide-tablet" />
<div class="tablet-row-2">
  <p class="underline">Fast Response ACLS Study Guide</p>
  <ul>
    <li><span class="bold yellow">Recommended</span></li>
    <li>Provided <span class="price">free</span> by Fast Response.</li>
    <li><a href="/pdfs/ACLS - Study Guide.pdf" target="_blank">Click here to download</a>.</li>
  </ul>
</div>
HTML
  ,
  
  'faqs' => <<<'HTML'
<dl>
  <dt>Question 1.</dt>
  <dd>Answer 1.</dd>
  <dt>Question 2.</dt>
  <dd>Answer 2.</dd>
  <dt>Question 3.</dt>
  <dd>Answer 3.</dd>
  <dt>Question 4.</dt>
  <dd>Answer 4.</dd>
</dl>
HTML
  ,
);

?>

<?php require_once($incdir . 'include/template_ceu.php'); ?>
