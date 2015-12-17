<?php
  $incdir = '../';
  $title = 'About Fast Response';
  $page_header = '';
  $description = '';
  $css = array('courses.css');
?>
<?php require_once($incdir . 'include/header.php'); ?>

<div id="sidebar-primary">
  <?php include($incdir . 'include/contact_info.php'); ?>
  <aside id="links">
    <header><h3>Links</h3></header>
    <ul>
      <li><a href="<?= $incdir ?>pdf/Fast Response Catalog 2015.pdf">2015 School Catalog</a></li>
      <li><a href="<?= $incdir ?>pdf/Fast Response Catalog 2014.pdf">2014 School Catalog</a></li>
      <li><a href="<?= $incdir ?>pdf/BPPE Annual Report 2013.pdf">BPPE Annual Report 2013</a></li>
      <li><a href="<?= $incdir ?>pdf/BPPE Annual Report 2014.pdf">BPPE Annual Report 2014</a></li>
      <li><a href="<?= $incdir ?>pdf/BPPE Performance Fact Sheets 2013.pdf">Performance Fact Sheets 2013</a></li>
      <li><a href="<?= $incdir ?>pdf/BPPE Performance Fact Sheets 2014.pdf">Performance Fact Sheets 2014</a></li>
    </ul>
  </aside>
  <aside id="postsec">
    <header><h3>Postsecondary Courses</h3></header>
    <ul>
      <li><a href="<?= $incdir ?>courses/emt/">Emergency Medical Technician</a></li>
      <li><a href="<?= $incdir ?>courses/cpt/">Certified Phlebotomy Technician</a></li>
      <li><a href="<?= $incdir ?>courses/phm/">Pharmacy Technician</a></li>
      <li><a href="<?= $incdir ?>courses/cma/">Clinical Medical Assistant</a></li>
      <li><a href="<?= $incdir ?>courses/paramedic/">Paramedic</a></li>
      <li><a href="<?= $incdir ?>courses/spt/">Sterile Processing Technician</a></li>
    </ul>
  </aside>
  <aside id="ceu">
    <header><h3>Continuing Education Courses</h3></header>
    <ul>
	    <li><a href="<?= $incdir ?>courses/bls/">Healthcare Provider CPR (BLS)</a></li>
	    <li><a href="<?= $incdir ?>courses/acls/">Advanced Cardiac Life Support (ACLS)</a></li>
	    <li><a href="<?= $incdir ?>courses/pals/">Pediatric Advanced Life Support (PALS)</a></li>
	    <li><a href="<?= $incdir ?>courses/ecg-b/">ECG Basic Arrhythmia Recognition</a></li>
	    <li><a href="<?= $incdir ?>courses/ecg-12/">ECG 12-Lead</a></li>
	    <li><a href="<?= $incdir ?>courses/ecg-t/">ECG Technician</a></li>
	    <li><a href="<?= $incdir ?>courses/emt-r/">EMT Refresher</a></li>
      <li><a href="<?= $incdir ?>courses/emt-s/">EMT Skills Verification</a></li>
      <li><a href="<?= $incdir ?>courses/itls/">International Trauma Life Support</a></li>
      <li><a href="<?= $incdir ?>courses/first-aid/">First Aid</a></li>
    </ul>
  </aside>
</div>

<section id="content">
  <article>
    <div id="sidebar-secondary" class="hide-mobile">
      <aside>
        <header><h3>Approved By</h3></header>
        <ul>
          <li>CA Bureau for Private Postsecondary Education</li>
          <li>CA Emergency Medical Services Authority</li>
          <li>Alameda County EMS Agency</li>
          <li>National Registry of Emergency Medical Technicians</li>
          <li>National Center for Competency Testing</li>
          <li>California Department of Public Health, Laboratory Field Services</li>
          <li>American Heart Association</li>
        </ul>
      </aside>
    </div>

    <div class="collapsible-mobile-start collapsible-tablet">
      <header class="stay-open">
        <h1>About Fast Response</h1>
        <h4>We are approved by the <a href="http://www.bppe.ca.gov/about_us/contact.shtml">Bureau of Private and Postsecondary Education</a></h4>
      </header>
      <p class="bold italic stay-open">Fast Response School of Health Care Education is a private postsecondary educational school.</p>
	    <p class="stay-open">We are an American Heart Association (AHA), American Safety and Health Institute (ASHI) and American Academy of Pediatrics (AAP) affiliated training facility. We provide CEUs (Continuing Education Units) for EMS personnel, Nurses and other medical professionals.</p>
      <p class="hide-desktop hide-tablet trigger bold red underline" style="text-align: center;" data-trigger-text="Continue Reading"></p>
	    <p>Our Phlebotomy Technician program is approved by the State of California Department of Health Services, and our Emergency Medical Technician program is approved by the State of California Emergency Medical Services Authority.</p>
	    <p>As a School of Health Care Education, our curriculum is approved by The Department of Health Services California Laboratory Field Services, California Emergency Medical Services Authority (EMSA), and registered with The Bureau of Private Postsecondary Vocational Education. To maintain this status, we must uphold the same standards as a Junior College, University or Vocational School, but we can offer comparable training in a shorter period of time, providing you with superior training while you begin or augment your career in the medical field.</p>
	    <p>In addition to providing training at our main campus in Berkeley, we also teach in a variety of healthcare and corporate settings in the greater Bay Area. We contract with hospitals, businesses, schools, daycares, community organizations, and individuals.</p>
	    <p>Since 1989, Fast Response School of Health Care Education has been the Bay Area's premier community and professional training center, offering certifications in many postsecondary and continuing education courses.</p>
	    <p>We promote an energetic, diverse, and challenging atmosphere where you are given the attention needed to lay the groundwork for success in today's exciting healthcare industry.  Our Instructors are all certified or licensed medical professionals with years of field and teaching experience.  Our school administrators are invested in the success of every student.  Fast Response is a fifty percent woman-owned business, with women and minorities making up a large percentage of our staff.</p>
      <hr class="stay-open" />
      <h4 class="stay-open">Our Mission</h4>
	    <p class="stay-open">To create a highly stimulating and supportive learning environment which will enable our students to obtain the necessary career skills to achieve their life goals. We sincerely believe that a learning environment which is challenging, accepting and lively inspires confidence and motivates our students to succeed. Together, we can be a driving factor in improving the quality of Health Care in our community.</p>
    </div>
  </article>
</section>

<div id="bottom-bar">
</div>

<?php require_once($incdir . 'include/footer.php'); ?>
