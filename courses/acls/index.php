<?php

$incdir = '../../';
$title = 'Advanced Cardiovascular Life Support';
$page_header = 'Advanced Cardiovascular <span class="nowrap">Life Support</span>';
//$sub_header = '';
$description = 'Advanced Cardiovascular Life Support as approved by the AHA. Low-stress classroom with a focus on a team approach to medical emergencies.';
$keywords = 'acls, advanced life support, advanced cardiovascular life support, acls class, acls course, aha acls';
$course_code = 'ACLS';
$form_course_name = 'ACLS';

include_once($incdir . 'php/registration_form.php');

$sections = array(

  'registration buttons' =>
    registration_form('Initial Certification',
      'http://www.ssreg.com/fastresponse/classes/classes.asp',
      array('catID' => '4106', 'pcatID' => '4105')
    ) . "\n" .
    registration_form('Renewal',
      'http://www.ssreg.com/fastresponse/classes/classes.asp',
      array('catID' => '4107', 'pcatID' => '4105')
    )
  ,

  'required books' => true,

  'course approvals' => <<<'HTML'
<li>American Heart Association</li>
<li>Training Center #CA03190</li>
HTML
  ,

  'above fold' => <<<'HTML'
<div class="stay-open red" id="new-acls-notice">
  <div>The American Heart Association (AHA) has released the 2015 Guidelines Update for CPR and Emergency Cardiovascular Care.</div>
  <div>It is now required that students review, understand, and <span class="bold">COMPLETE</span> the Precourse Self-Assessment located on the <a href="http://www.heart.org/eccstudent">Student Website</a>. The code to access the student website is available at the beginning of the ACLS Provider Manual.</div>
  <div>Please be advised that <span class="bold">ALL</span> students are required to bring to class: <span class="bold">1)</span> the new 2015 ACLS Provider Manual and <span class="bold">2)</span> a printed certificate with a score of 70% or better from the Precourse Self-Assessment.</div>
  <div class="underline">Precourse Assessment is <span class="bold">MANDATORY</span> and those without it will not be admitted into class. <span class="bold">NO EXCEPTIONS!</span></div>
  <div>On-site book sales are still available; however, this will require that students come to our campus on a separate day prior to their class date. Students will not be able to purchase books onsite on the day of their class.</div>
</div>

<p class="stay-open">Our Advanced Cardiac Life Support (ACLS) course offers challenging and useful skills that make a difference in saving lives. A lively, low-stress class environment, focusing on a team approach to medical emergencies has proven to be an essential and rewarding experience for all participants.</p>
HTML
  ,

  'trigger' => 'Continue Reading',

  'below fold' => <<<'HTML'
<p>The ACLS Course is designed for healthcare providers who either direct or participate in the management of cardiopulmonary arrest or other cardiovascular emergencies. Through didactic instruction and active participation in simulated cases, students will enhance their skills in the recognition and intervention of cardiopulmonary arrest, immediate post-cardiac arrest, acute arrhythmia, stroke, and acute coronary syndromes (ACS).</p>
<p>The goal of the ACLS Course is to improve outcomes for adult patients of cardiac arrest and other cardiopulmonary emergencies through early recognition and interventions of high performance teams.</p>
<p class="bold italic">"Life is Why"</p>
HTML
  ,

  'course details' => <<<'HTML'
<div class="tablet-row-1">
  <p class="underline">Precourse Assessment</p>
  <ul>
    <li>Online assessment course.</li>
    <li>Must be completed prior to class date.</li>
    <li>Requires advance purchase of ACLS Provider Manual for online code.</li>
    <li>Results page printout <span class="bold red">must</span> be presented to instructor.</li>
  </ul>
</div>
<hr class="hide-tablet" />
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

  'books' => <<<"HTML"
<div class="tablet-row-1">
  <p class="underline">AHA ACLS Provider Manual with Pocket Reference Card Set</p>
  <ul>
    <li><span class="bold red">New 2015 AHA Guidelines</span></li>
    <li><span class="bold red">Required</span></li>
    <li><span class="bold blue">This book must be purchased <span class="underline">in advance</span> in order to take the <span class="underline">mandatory</span> precourse assessment test.</span>
    <li><br></li>
	  <li><span class="isbn-label">AHA item #:</span> 15-1005</li>
	  <li><span class="isbn-label">ISBN:</span> 1-61669-017-8</li>
	  <li><span class="isbn-label">ISBN-13:</span> 978-1-61669-400-5</li>
    <li><br></li>
    <li>This book may be purchased directly from <span class="nowrap">Fast Response</span>, however, it must be purchased <span class="red bold">prior</span> to the class date.</li>
    <li>Our price: <span class="price">$53.00</span>.
    <li><br></li>
    <li class="red">This book must be used <span class="bold">during class</span>, per AHA requirements. Students without a book will not receive a certification card.</li>
  </ul>
</div>
HTML
  ,
  
  /*
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
*/
);

?>

<?php require_once($incdir . 'include/template_ceu.php'); ?>
