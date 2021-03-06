<?php
  $incdir = '../';
  $title = 'About Fast Response';
  $page_header = '';
  $description = 'Fast Response School of Health Care Education offers postsecondary and continuing education classes. Learn about us here.';
  $css = array('courses.css');
?>
<?php require_once($incdir . 'include/header.php'); ?>

<div id="sidebar-primary">
  <?php include($incdir . 'include/contact_info.php'); ?>
  <aside id="links">
    <header><h3>Links</h3></header>
    <ul>
      <li><a href="<?= $incdir ?>pdf/Fast Response Catalog 2016.pdf">School Catalog</a></li>
      <li><a href="<?= $incdir ?>pdf/BPPE Annual Report 2014.pdf">BPPE Annual Report</a></li>
      <li><a href="<?= $incdir ?>pdf/BPPE Performance Fact Sheets 2014.pdf">Performance Fact Sheets</a></li>
    </ul>
  </aside>
  <aside id="postsec">
    <header><h3>Postsecondary Courses</h3></header>
    <ul>
      <li><a href="<?= $incdir ?>courses/emt/">Emergency Medical Technician</a></li>
      <li><a href="<?= $incdir ?>courses/cpt/">Certified Phlebotomy Technician</a></li>
      <?php if (false): ?><li><a href="<?= $incdir ?>courses/phm/">Pharmacy Technician</a></li><?php endif; ?>
      <li><a href="<?= $incdir ?>courses/cma/">Clinical Medical Assistant</a></li>
      <li><a href="<?= $incdir ?>courses/paramedic/">Paramedic</a></li>
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
          <?php if (false): ?><li>American Society of Health-System Pharmacists</li><?php endif; ?>
          <li>National Center for Competency Testing</li>
          <li>California Department of Public Health, Laboratory Field Services</li>
          <li>International Trauma Life Support</li>
          <li>American Heart Association</li>
          <li>National EMPACT Training Center</li>
        </ul>
      </aside>
    </div>

    <div class="collapsible-mobile-start collapsible-tablet">
      <header class="stay-open">
        <h1>About Fast Response</h1>
        <h4><a name="bppe"></a>We are approved by the <a href="http://www.bppe.ca.gov/about_us/contact.shtml">Bureau of Private and Postsecondary Education</a></h4>
        <blockquote style="text-align: left; font-size: 0.9em;">This institution is a private institution approved to operate by the California Bureau for Private Postsecondary Education. Approval to operate means the institution is compliant with the minimum standards contained in the California Private Postsecondary Education Act of 2009 (as amended) and Division 7.5 of Title 5 of the California Code of Regulations.
        </blockquote>
        <blockquote style="text-align: left; font-size: 0.9em;">A student or any member of the public may contact the Bureau of Private Postsecondary Education at any time about this institution by calling toll free: <span class="nowrap">888-370-7589</span>, writing to Bureau for Private Postsecondary Education, <span class="nowrap">P.O. Box 980818,</span> West Sacramento, <span class="nowrap">CA 95798-0818</span> or <span class="nowrap">2535 Capitol Oaks Drive, Suite 400,</span> Sacramento, <span class="nowrap">CA 95833,</span> or by completing a complaint form, which can be obtained on the Bureau's internet website: <a href="http://www.bppe.ca.gov/">http://www.bppe.ca.gov</a>.</blockquote>
      </header>
      <p class="bold italic stay-open">Fast Response School of Health Care Education is a private postsecondary educational school.</p>
	    <p class="stay-open">We are an American Heart Association (AHA), American Safety and Health Institute (ASHI) and American Academy of Pediatrics (AAP) affiliated training facility. We provide CEUs (Continuing Education Units) for EMS personnel, Nurses and other medical professionals.</p>
      <p class="hide-desktop hide-tablet trigger bold red underline" style="text-align: center;" data-trigger-text="Continue Reading"></p>
	    <p>Our Phlebotomy Technician program is approved by the State of California Department of Health Services, and our Emergency Medical Technician program is approved by the State of California Emergency Medical Services Authority.</p>
	    <p>As a School of Health Care Education, our curriculum is approved by The Department of Health Services California Laboratory Field Services, California Emergency Medical Services Authority (EMSA), and registered with The Bureau of Private Postsecondary Vocational Education. To maintain this status, we must uphold the same standards as a Junior College, University or Vocational School, but we can offer comparable training in a shorter period of time, providing you with superior training while you begin or augment your career in the medical field.</p>
	    <p>In addition to providing training at our main campus in Berkeley, we also teach in a variety of healthcare and corporate settings in the greater Bay Area. We contract with hospitals, businesses, schools, daycares, community organizations, and individuals.</p>
	    <p>Since 1989, Fast Response School of Health Care Education has been the Bay Area's premier community and professional training center, offering certifications in many postsecondary and continuing education courses.</p>
	    <p>We promote an energetic, diverse, and challenging atmosphere where you are given the attention needed to lay the groundwork for success in today's exciting healthcare industry.  Our Instructors are all certified or licensed medical professionals with years of field and teaching experience. Our school administrators are invested in the success of every student.</p>
      <p>Fast Response is a fifty percent woman-owned (and family-owned), equal opportunity business, with women and minorities making up a large percentage of our staff.</p>
      <hr class="stay-open" />
      <h4 class="stay-open">Our Mission</h4>
	    <p class="stay-open">To create a highly stimulating and supportive learning environment which will enable our students to obtain the necessary career skills to achieve their life goals. We sincerely believe that a learning environment which is challenging, accepting and lively inspires confidence and motivates our students to succeed. Together, we can be a driving factor in improving the quality of Health Care in our community.</p>
    </div>
  </article>
</section>

<div id="bottom-bar">
</div>

<?php require_once($incdir . 'include/footer.php'); ?>
