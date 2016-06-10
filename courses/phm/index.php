<?php

$incdir = '../../';
$title = 'PharmacyTechnician';
$page_header = 'Pharmacy Technician';
$sub_header = 'ASHP Accreditation Pending';
$description = 'The Pharmacy Technician course at Fast Response prepares students for a career in pharmacy using a dynamic classroom and skills lab. Externship included!';
$keywords = 'pharmacy technician, pharmacy tech, pharmacy technician course, pharmacy technician class, pharmacy technician school';
$course_code = 'PHM';
$form_course_name = 'Pharmacy Technician';
$show_links = true;

$sections = array(

  'test results' => null,

  'class start dates' => true,

  'course details' => <<<'HTML'
<div class="tablet-row-1">
  <p class="underline">Class Hours</p>
  <p><ul>
    <li>Tue, Wed, Thu: 6:00 PM - 10:00 PM</li>
    <li>Sat: 9:00 AM - 6:00 PM</li>
  </ul></p>
  <ul>
    <li>246 hours of instruction over 13 weeks</li>
    <li>240 hours of externship over 6 weeks</li>
  </ul>
</div>
HTML
  ,

  'links' => <<<'HTML'
<li><a href="http://www.pharmacy.ca.gov/">CA Board of Pharmacy</a></li>
<li><a href="http://www.ptcb.org/">Pharmacy Technician Certification Board</a></li>
HTML
  ,

  'course approvals' => <<<'HTML'
<li>CA Bureau for Private Postsecondary Education</li>
HTML
  ,

  'above fold' => <<<'HTML'
<p class="stay-open">Pharmacy Technicians (CPhTs) serve as a liaison between a patient and a pharmacist. Under the supervision of a pharmacist, they supply medicines to patients, assemble medications for prescriptions, and provide information to patients and other health care professionals. They also manage areas of medicines supply, produce medicines in hospitals and they may supervise other pharmacy staff.</p>
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
<p>Pharmacy Technicians work in the retail, hospital and specialty areas of pharmacy services like Oncology, Pediatrics and Geriatrics. They work in community pharmacies, hospitals, in pharmaceutical production, pharmacy sales, prisons, primary care organizations, education and training and in veterinary services.</p>
<p>There is strong demand for competent, qualified, and well-trained Pharmacy Technicians in the Bay Area, as well as excellent job outlook. According to the United States Bureau of Labor Statistics, Employment of pharmacy technicians is projected to grow 20 percent from 2012 to 2022, faster than the average for all occupations. It is a great time to get into heath care and get a career in a field you can count on.</p>
<div id="image-placeholder-1" class="image-placeholder"></div>
<p>Our instructors are highly-trained and experienced California Registered Pharmacy Technicians. Come and learn in a dynamic and engaging classroom setting and in our up-to-date skills lab where you will train for both hospital and retail pharmacy jobs. On your clinical externship you will learn from pharmacists and gain confidence while interacting with real patients.</p>
<div class="testimonial-row hide-mobile hide-desktop">
  <div class="testimonial-bg">
    <div id="testimonial-interstitial-2" class="testimonial-container testimonial-interstitial"></div>
  </div>
</div>
<p>If you want to become a highly-skilled health care professional, capable of competing in the job market, come to Fast Response.</p>
HTML
  ,
);

?>

<?php require_once($incdir . 'include/template_postsec.php'); ?>
