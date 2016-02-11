<?php

$incdir = '../../';
$title = 'Paramedic Academy';
$page_header = 'Paramedic Academy';
$sub_header = 'Advanced Skills for EMTs';
$description = "The Fast Response Paramedic Academy's mission is to produce extraordinary, compassionate paramedics in a supportive learning environment.";
$keywords = 'paramedic, paramedic academy, paramedic school, paramedic course, paramedic class';
$course_code = 'Paramedic';
$form_course_name = 'Paramedic';
$show_links = true;

$sections = array(

  'test results' => <<<'HTML'
<header><h3>Our Success Rate - <span class="testscore">100%</span></h3></header>
<p>In 2015*, <span class="testscore">100%</span> of our graduates passed the National Registration licensing test, making them eligible for immediate employment.</p>
<div>* As of December 31st, 2015</div>
HTML
  ,

  'class start dates' => true,

  'course details' => <<<'HTML'
<div class="tablet-row-2">
  <p class="underline">Class Hours</p>
  <ul>
    <li>Mon - Wed: 9:00 AM - 6:00 PM</li>
  </ul>
</div>
<hr class="hide-tablet" />
<div class="tablet-row-2">
  <p>Course includes:</p>
  <ul>
    <li>728 hours of didactic instruction</li>
    <li>48 hours of didactic observation</li>
    <li>208+ hours of clinical internship</li>
    <li>480+ hours of field internship</li>
  </ul>
</div>
HTML
  ,

  'links' => <<<"HTML"
<li><a href="{$incdir}pdf/admissions/Paramedic Application Process.pdf">Paramedic Application Process</a></li>
<li><a href="{$incdir}pdf/admissions/Paramedic Academy Application.pdf">Paramedic Academy Application Form</a></li>
<li><a href="http://www.ssreg.com/fastresponse/classes/classes.asp?catID=4216">Online signup for Anatomy and Physiology</a></li>
HTML
  ,

  'course approvals' => <<<'HTML'
<li>CA Bureau for Private Postsecondary Education</li>
<li>CA Emergency Medical Services Authority</li>
<li>Alameda County EMS Agency</li>
<li>National Registry of Emergency Medical Technicians</li>
HTML
  ,

  'below date' => 'Seats Are Limited - Now Enrolling',

  'above fold' => <<<'HTML'
<p class="stay-open">It is the mission of the FRSHCE/BAS EMS Consortium Paramedic Academy to produce extraordinary critical thinking paramedics who provide compassionate and exceptional patient care. We do this by creating a supportive learning environment that includes the student in the learning process. We provide several opportunities for outside activities that enrich the didactic experience. The opportunities include ride alongs with local 911 EMS providers.</p>
HTML
  ,

  'trigger' => 'Continue Reading',

  // this is a heredoc, which allows evaluating variables (the {$incdir})
  // the others are nowdocs, which will literally print out {$incdir}
  'below fold' => <<<"HTML"
<div class="testimonial-row hide-mobile">
  <div class="testimonial-bg">
    <div id="testimonial-interstitial-1" class="testimonial-container testimonial-interstitial"></div>
  </div>
</div>
<p>We provide our students with a tablet computer for accessing EMS software to include Title 22, local and regional EMS Regulations, as well as online learning tools. These tools will enhance the overall learning experience, while utilizing up to date technology students can expect to use in the field. This equipment will be incorporated into all aspects of clinical and field training. We have an excellent skills lab that includes a scenario based Simulation Lab, a High Fidelity ALS manikin, and an ambulance simulator.</p>
<div id="image-placeholder-1" class="image-placeholder"></div>
<p>The FRSHCE/BAS EMS Consortium has developed strong relationships with many clinical and field sites including Paramedics Plus, Kaiser Permanente Regional Medical Centers, and Eden Medical Center. Through contractual agreements with these facilities, the consortium is able to guarantee immediate access to both clinical and field internships.</p>
<hr />
<img id="stop-sign" src="{$incdir}img/stop.svg" alt="STOP" style="display: block; margin: 0 auto;" onerror="this.src='{$incdir}img/stop.png'; this.onerror=null;"/>
<p id="paramedic_stop_msg" class="bold red">You must be a certified EMT with six months of experience before you can begin training as a paramedic. <span class="nowrap">Please click <a href="{$incdir}courses/emt/">here</a></span> to get information about our EMT program.</p>
<hr />
<h4 style="margin-bottom: 0;">Anatomy and Physiology</h4>
<p>Applicants who have not completed a college level Anatomy and Physiology course within the last 2 years must also attend the Paramedic Anatomy and Physiology course to be prepared for the Paramedic Academy.</p>
<p>The purpose of the Anatomy and Physiology (A&P) prerequisite course is to deliver a comprehensive theoretical foundation and medical terminology of the human body systems to the paramedic program candidate comparable to what they will encounter during their didactic portion of the Paramedic Academy. Successful completion of this prerequisite will raise the candidate's cognitive level to that of a better prepared beginning paramedic student, and will verify the candidate's ability to cope with the pace of the School's Paramedic Academy. All Paramedic Academy candidates who have not completed a Collegiate Level A&P course must complete this course.</p>
<p>Sections of this course may be held in an online format. All students must have online access and the ability to complete assignments autonomously. Intermittent quizzes will be given as formative assessments to ensure that each student is advancing sufficiently in the course.</p>
<p class="underline">Class Hours</p>
<ul>
  <li>Mondays and Wednesdays: 12:00 PM - 6:00 PM</li>
  <li>Cost: $450.00 - Books included.</li>
  <li>Online signup for A&P is available.</li>
</ul>
<hr />
<h4 style="margin-bottom: 0;">Advanced Placement</h4>
<p>Advanced placement is any process where a program formally recognizes prior learning of a student and applies that recognition toward meeting the program requirements.</p>
<p>Fast Response <span class="underline">does not</span> currently offer advanced placement.</p>
HTML
  ,
);

?>

<?php require_once($incdir . 'include/template_postsec.php'); ?>
