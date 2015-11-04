<?php

$incdir = '../../';
$title = '';
$page_header = '';
$sub_header = '';
$description = '';
$course_code = '';
$form_course_name = '';

$sections = array(

  'test results' => <<<'HTML'
<header><h3>Our Success Rate - <span class="testscore">XX%</span></h3></header>
<p>In 2015*, <span class="testscore">XX%</span> of our graduates passed the INSERT NAME licensing test, making them eligible for immediate employment.</p>
<div>* As of Month 0th, 2015</div>
HTML
  ,

  'class start dates' => true,

  'course details' => <<<'HTML'
<div class="tablet-row-2">
  <p class="underline">Full Time</p>
  <ul>
    <li>Tue - Fri: 8:30 AM - 5:00 PM</li>
    <li>NUMBER weeks of instruction</li>
  </ul>
</div>
<hr class="hide-tablet" />
<div class="tablet-row-2">
  <p class="underline">Part Time</p>
  <ul>
    <li>Mon, Tue, Thu: 6:00 PM - 10:00 PM</li>
    <li>Sat: 8:30 AM - 5:00 PM</li>
    <li>NUMBER weeks of instruction</li>
  </ul>
</div>
<hr class="tablet-row-1" />
<div class="tablet-row-1">
  <p>Both courses include:</p>
  <ul>
    <li>XX hours of instruction and skills practice</li>
    <li>XX hours of externship</li>
  </ul>
</div>
HTML
  ,

  'links' => <<<'HTML'
<li><a href="#">Course Information Packet</a></li>
<li><a href="#">School Catalog</a></li>
<li><a href="#">Immunizations Requirements</a></li>
HTML
  ,

  'course approvals' => <<<'HTML'
<li>CA Bureau for Private Postsecondary Education</li>
HTML
  ,

  'above fold' => <<<'HTML'
<p class="stay-open"></p>
HTML
  ,

  'trigger' => 'Continue Reading',

  // this is a heredoc, which allows evaluating variables (like {$incdir})
  // the others are nowdocs, which will literally print out {$incdir}
  'below fold' => <<<"HTML"
<div class="testimonial-row hide-mobile">
  <div class="testimonial-bg">
    <div id="testimonial-interstitial-1" class="testimonial-container testimonial-interstitial"></div>
  </div>
</div>
<p></p>
<p></p>
<div id="image-placeholder-1" class="image-placeholder" data-src="{$incdir}img/fr-logo-black.png"></div>
<p></p>
<div class="testimonial-row hide-mobile hide-desktop">
  <div class="testimonial-bg">
    <div id="testimonial-interstitial-2" class="testimonial-container testimonial-interstitial"></div>
  </div>
</div>
<p></p>
<div id="image-placeholder-2" class="image-placeholder"></div>
<p></p>
HTML
  ,
);

?>

<?php require_once($incdir . 'include/template_postsec.php'); ?>
