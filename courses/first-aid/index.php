<?php

$incdir = '../../';
$title = 'First Aid';
$page_header = 'First Aid';
//$sub_header = '';
$description = '';
$course_code = 'First-Aid';
$form_course_name = 'First Aid';

$sections = array(

  'registration' => <<<'HTML'
<header><h3>Registration</h3></header>
<p>Registration for this course is by appointment only.</p>
<div>Please call or email to schedule a class session.</div>
HTML
  ,

  'required books' => false,

  //'course approvals' => null,

  'above fold' => <<<'HTML'
<p class="stay-open">This course is appropriate for everyone and satisfies the prerequisite for most EMT courses.</p>
<p class="stay-open">Come and learn a systematic approach for responding effectively to most medical emergencies.</p>
HTML
  ,

  'trigger' => 'Continue Reading',

  'below fold' => <<<'HTML'
<p>You will learn how to prioritize the treatment of illnesses and injuries including head and neck injuries and traumas such as bleeding, breaks, and burns. You will learn how to respond to potentially serious medical situations such as bites, stings, poisonings and hypothermia. The class culminates in a scenario where students are able to practice their new skills by assessing and treating a "patient." This is a lively course with plenty of active student participation and is taught in a supportive atmosphere with experienced and enthusiastic instructors.</p>
<p>Includes EMS-approved Pediatric First Aid for Child Care Providers.</p>
HTML
  ,

  'course details' => <<<'HTML'
<div class="tablet-row-1">
  <p class="underline">Class Information</p>
  <ul>
    <li>American Heart Associations Heart Saver Certification.</li>
    <li>The class is 5 hours in length.</li>
    <li>Certification is valid for 2 years.</li>
    <li>You must have a group of 6 or more.</li>
    <li>This course can be taught at our campus or your facility.</li>
  </ul>
</div>
HTML
  ,

  //'books' => null,
  
);

?>

<?php require_once($incdir . 'include/template_ceu.php'); ?>
