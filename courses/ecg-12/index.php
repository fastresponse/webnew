<?php

$incdir = '../../';
$title = 'ECG 12-Lead';
$page_header = 'ECG 12-Lead';
//$sub_header = '';
$description = '';
$course_code = 'ECG-12';
$form_course_name = 'ECG 12-Lead';

include_once($incdir . 'php/registration_form.php');

$sections = array(

  'registration buttons' =>
    registration_form('Register for ECG 12-Lead',
      'http://www.ssreg.com/fastresponse/classes/classes.asp',
      array('catID' => '4118', 'pcatID' => '4117')
    )
  ,

  'required books' => false,

  //'course approvals' => '',

  'above fold' => <<<'HTML'
<p class="stay-open">
Our 1-day Basic 12-lead ECG interpretation course is taught by experienced educators who are also advanced medical clinicians and/or nationally licensed ECG Technicians. A solid understanding of ECG rhythm recognition is required prior to taking this course. (The 2-day ECG Basic Rhythm Recognition course offered at Fast Response satisfies this requirement.) This course can serve as a refresher course, or as an introduction into 12-lead ECG acquisition and interpretation for medical professionals. A systematic approach to reading and interpreting a 12-lead ECG is presented to the student; that approach is adhered to throughout the course.
</p>
HTML
  ,

  'trigger' => 'Continue Reading',

  'below fold' => <<<'HTML'
<p>The following is the timeline of the course:</p>
<ul>
  <li>A comprehensive review of the anatomy, physiology, and electrophysiology of the heart. Electrolytes and how they &quot;create&quot; electricity in the heart.</li>
  <li>Vectors and the electrical axis of the heart, and how the electrical flow is captured by acquisition of the ECG tracing.</li>
  <li>Correct lead placement, including the more advanced right-sided and posterior lead placements. ECG paper and how it is used to measure waves, segments, and intervals follows, then a brief review of basic ECG recognition.</li>
  <li>Acute coronary syndromes includes a discussion about coronary artery disease, the course of events that occur once a plaque ruptures in the coronary artery, and the difference between ischemia, injury, and infarct. Significant cardiac events such as ST Segment Elevation Myocardial Infarction (STEMI) and Non ST Segment Elevation Myocardial Infarction (NSTEMI).</li>
  <li>An introduction to bundle branch blocks, and as well as determining the difference between a right and left bundle branch blocks. How the cardiac tissue reacts when it is deprived of oxygen. This is examined both anatomically and electrophysiologically.</li>
</ul>
<p>Students will have a solid understanding of the changes which occur in the heart during ischemia, injury and infarction.</p> 
<ul>
  <li>How to localize involved cardiac tissue.</li>
  <li>Considerable time is spent of determining the area of the heart that has been affected by examining the 12-lead ECG.</li>
  <li>Students practice interpreting the 12-Lead ECGs. Several tracings are presented so that students may use the systematic approach to analyze and interpret the tracing. Students then practice acquiring actual 12-lead ECGs by acquiring them from each other under direct supervision of the Instructor.</li>
</ul>
HTML
  ,

  'course details' => <<<'HTML'
<div class="tablet-row-1">
  <p class="underline">12-Lead ECG Interpretation</p>
  <ul>
    <li>A solid understanding of ECG rhythm recognition is a prerequisite for this course.</li>
    <li>Required for Paramedics in some counties.</li>
    <li>One day class, 9:00 AM to 5:00 PM.</li>
    <li>Continuing Education Units: 7.00</li>
    <li>Course price: <span class="price">$112.00</span></li>
  </ul>
</div>
HTML
  ,

  'books' => <<<'HTML'
<div class="tablet-row-1">
  <p class="underline">ECGs Made Easy Book and Pocket Reference, 5th Edition</p>
  <ul>
    <li><span class="bold yellow">Recommended</span></li>
	  <li><span class="isbn-label">ISBN:</span> 0323101062</li>
	  <li><span class="isbn-label">ISBN-13:</span> 9780323101066</li>
    <li>Not available for purchase at Fast Response.</li>
  </ul>
</div>
HTML
  ,
  
);

?>

<?php require_once($incdir . 'include/template_ceu.php'); ?>
