<?php

$incdir = '../../';
$title = 'ECG Basic';
$page_header = 'ECG Basic Rhythm Recognition';
//$sub_header = '';
$description = '';
$course_code = 'ECG-B';
$form_course_name = 'ECG Basic';

$sections = array(

  'registration buttons' => <<<'HTML'
<form action="http://www.ssreg.com/fastresponse/classes/classes.asp?catID=4116" method="get" class="registration-btn" target="_blank">
  <input type="submit" class="register-btn" name="btn" value="Register for ECG Basic" />
  <input type="hidden" name="catID" value="4116" />
</form>
HTML
  ,

  'required books' => false,

  //'course approvals' => '',

  'above fold' => <<<'HTML'
<p class="stay-open">Our course of basic 3-lead electrocardiogram (ECG) interpretation starts with a review of the anatomy and electrophysiology of the heart, then moves into waveform recognition and what each waveform represents. We cover proper lead placement, troubleshooting and artifacts, and a detailed review of the ECG paper and how the paper is used to help measure waveforms, intervals and segments.</p>
HTML
  ,

  'trigger' => 'Continue Reading',

  'below fold' => <<<'HTML'
<p>We then move into rhythm analysis, starting with sinus rhythms. With this basic knowledge in place, we begin an in-depth study of arrhythmias. Covered rhythms are: sinus rhythms, atrial rhythms, junctional rhythms, heart blocks, ventricular rhythms, PVCs, PACs, and PJCs.</p>
<p>After covering all of the rhythms, the class will use static (still) and dynamic (moving) images of ECG rhythms and apply the 5 rules of ECG interpretation to analyze each rhythm.</p>
<p>This extensive practice session is not found in many classes and helps solidify the basics of ECG interpretation, and helps the student gain an in-depth understanding of arrhythmias.</p>
HTML
  ,

  'course details' => <<<'HTML'
<div class="tablet-row-1">
  <p class="underline">Basic Rhythm Recognition</p>
  <ul>
    <li>No prerequisite courses necessary.</li>
    <li>Serves as a great introductory or refresher course.</li>
    <li>Recommended as preparation for ACLS certification.</li>
    <li>Two day class, 9:00 AM to 5:00 PM.</li>
    <li>Continuing Education Units: 14.00</li>
    <li>Course price: <span class="price">$215.00</span></li>
  </ul>
</div>
HTML
  ,

  'books' => <<<"HTML"
<div class="tablet-row-2">
  <p class="underline">ECGs Made Easy Book and Pocket Reference, 5th Edition</p>
  <ul>
    <li><span class="bold yellow">Recommended</span></li>
	  <li><span class="isbn-label">ISBN:</span> 0323101062</li>
	  <li><span class="isbn-label">ISBN-13:</span> 9780323101066</li>
    <li>Not available for purchase at Fast Response.</li>
  </ul>
</div>
<hr class="hide-tablet" />
<div class="tablet-row-2">
  <p class="underline">Fast Response ECG Study Guide</p>
  <ul>
    <li><span class="bold yellow">Recommended</span></li>
    <li>Provided <span class="price">free</span> by Fast Response.</li>
    <li><a href="{$incdir}pdf/study_guides/ECG Basic - Study Guide.pdf" target="_blank">Click here to download</a>.</li>
  </ul>
</div>
HTML
  ,
  
);

?>

<?php require_once($incdir . 'include/template_ceu.php'); ?>
