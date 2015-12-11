<?php

$incdir = '../../';
$title = 'EMT Skills Verification';
$page_header = 'EMT Skills Verification';
//$sub_header = '';
$description = '';
$course_code = 'EMT-S';
$form_course_name = 'EMT Skills Verification';

$sections = array(

  'registration' => <<<'HTML'
<header><h3>Registration</h3></header>
<p>Registration for this course is by appointment only.</p>
<div>Please call or email to schedule a class session.</div>
HTML
  ,

  'required books' => false,

  'course approvals' => <<<'HTML'
<li>Alameda County EMS</li>
<li>CA EMS #01-0031</li>
HTML
  ,

  'above fold' => <<<'HTML'
<p class="stay-open">This course is designed for currently certified EMTs who have already met the CEU requirements for recertification and only need to obtain skills verification.</p>
<p class="stay-open">Our three-hour scenario-based skills verification course will assess student competency in the ten required areas through successful completion of three scenarios. Each candidate will be presented with a medical patient scenario, trauma patient scenario, and childbirth scenario. Each scenario will require the candidate to perform several skills within the EMT scope of practice to an acceptable level of competency.</p>
HTML
  ,

  'trigger' => 'Continue Reading',

  'below fold' => <<<'HTML'
<p>If a candidate fails to perform an individual skill to an appropriate level of competency, then he or she will be given one remedial attempt. Remediation is limited to one attempt per skill, and no more than 30% of the required skills. If the lead instructor is not satisfied with the candidate's competency over all ten required areas delineated by the state of California, then the candidate will not be awarded a skills competency form until he/she has successfully passed a 24-hour EMT refresher course. No refunds will be offered for partial or unsuccessful completion of skills competency verification.</p>
<p>After successful completion of this course, the candidate will be awarded a completed California EMT Skills Competency Verification Form (<a href="http://www.acphd.org/media/338131/skillsverificationform0810.pdf">EMSA-SCV 08/10</a>) and the appropriate skills verification for the NREMT.</p>
<p>NREMT skills sheets can be found <a href="https://www.nremt.org/nremt/about/psychomotor_exam_emt.asp">here</a> for reference.</p>
HTML
  ,

  'course details' => <<<'HTML'
<div class="tablet-row-1">
  <p class="underline">Class Schedule</p>
  <ul>
    <li>For currently licensed EMTs and those expired within the last 6 months.</li>
    <li>Class held by appointment only, from 9:00 AM to 12:00 PM.</li>
    <li>No Continuing Education Units for this course.</li>
    <li>Course price: <span class="price">$90.00</span></li>
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
<hr class="hide-tablet" />
<div class="tablet-row-2">
  <p class="bold"><a href="{$incdir}courses/emt-r/">EMT Refresher</a></p>
  <div>A review course intended for EMTs who need continuing education units (CEUs) to renew their certifications. Provides 24 CEUs plus skills testing.</div>
</div>
<hr class="tablet-row-1" />
<div class="tablet-row-1">
  <ul>
    <li><a href="http://www.emsa.ca.gov/emt_frequently_asked_questions">CA State Renewal Guidelines</a></li>
    <li><a href="https://www.nremt.org/nremt/about/reg_basic_history.asp#EMT_Recertification">NREMT Renewal Guidelines</a></li>
  </ul>
</div>
HTML
  ,

  //'books' => null,
);

?>

<?php require_once($incdir . 'include/template_ceu.php'); ?>
