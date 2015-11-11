<?php

$incdir = '../../';
$title = 'ECG Technician';
$page_header = 'ECG Technician';
//$sub_header = '';
$description = '';
$course_code = 'ECG-T';
$form_course_name = 'ECG-T';

$sections = array(

  'registration buttons' => <<<'HTML'
<form action="http://www.ssreg.com/fastresponse/classes/classes.asp?catID=4115" method="get" class="registration-btn" target="_blank">
  <input type="submit" class="register-btn" name="btn" value="Register for ECG Technician" />
  <input type="hidden" name="catID" value="4115" />
</form>
HTML
  ,

  'required books' => false,

  //'course approvals' => '',

  'above fold' => <<<'HTML'
<p class="stay-open">Our ECG Technician Program includes medical terminology, anatomy and physiology of the cardiovascular system, cardiac conduction system, scope of practice, and diagnostic testing for cardiovascular related disorders and diseases. Students will gain the skills needed to operate and interpret the 3-Lead, 5-Lead, and 12-Lead ECG. Students will also be thoroughly trained in obtaining and recording blood pressure, respirations, and pulse.</p>
HTML
  ,

  'trigger' => 'Continue Reading',

  'below fold' => <<<'HTML'
<p>Rhythm recognition discussed throughout the program consists of, but is not limited to: sinus rhythms, atrial rhythms, ventricular rhythms, junctional rhythms, heart blocks, myocardial infarction, artifact and ECG troubleshooting.</p>
<p>Upon successful completion of the program, students will be awarded a Certificate of Completion. The certificate allows the student to take the National Center for Competency Testing (NCCT) ECG Technician Exam. Upon successful completion of the NCCT exam, students will be Nationally Licensed ECG Technicians.</p>
HTML
  ,

  'course details' => <<<'HTML'
<div class="tablet-row-2">
  <p class="underline">ECG Technician</p>
  <ul>
    <li>Five day class, Mon - Fri,9:00 AM to 5:00 PM.</li>
    <li>24 hours of classroom lecture and instruction.</li>
    <li>12 hours of hands-on training.</li>
    <li>4 hours of written and practical skills testing.</li>
    <li>Course price: <span class="price">$1300.00</span></li>
  </ul>
</div>
HTML
  ,

  'books' => <<<'HTML'
<div class="tablet-row-2">
  <p class="underline">12-Lead ECG: The Art of Interpretation, <span class="nowrap">2nd Edition</span></p>
  <ul>
    <li><span class="bold red">Included in course</span></li>
	  <li><span class="isbn-label">ISBN:</span> 0763773514</li>
	  <li><span class="isbn-label">ISBN-13:</span> 9780763773519</li>
  </ul>
</div>
<hr class="hide-tablet" />
<div class="tablet-row-2">
  <p class="underline">ECGs Made Easy Book and Pocket Reference, <span class="nowrap">5th Edition</span></p>
  <ul>
    <li><span class="bold yellow">Recommended</span></li>
	  <li><span class="isbn-label">ISBN:</span> 0323101062</li>
	  <li><span class="isbn-label">ISBN-13:</span> 9780323101066</li>
    <li>Not available for purchase at Fast Response.</li>
  </ul>
</div>
HTML
  ,

  'extra' => <<<'HTML'
<div class="tablet-row-1">
  <header><h3>Certification</h3></header>
  <p>This course prepares you to become a Nationally Certified ECG Technician (NCET).</p>
  <p>The NCET Exam is administered by the National Center for Competency Testing (NCCT) and the cost is not included in the course fees.</p>
  <ul><li>Current exam price: <span class="price">$90.00</span>.</li></ul>
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
