<?php
  $incdir = '../../';
  $title = 'Emergency Medical Technician';
  $page_header = 'Emergency Medical Technician';
  $description = '';
  $course_code = 'EMT';
  $css = array('courses.css');

  $form_course_name = 'EMT';
?>
<?php require_once($incdir . 'header.php'); ?>

<div id="sidebar-primary">
  <aside id="contact-info">
    <header><h3>Contact Us</h3></header>
    <div id="phone">
      <!--<div class="button"><a href="tel://510-849-4009"><span class="nowrap"><span class="hide-mobile">510-849-4009</span><span class="hide-tablet hide-desktop">Call</span></span></a></div>-->
      <form action="tel:+15108494009" method="get" class="contact-btn">
        <input type="submit" class="phone-btn" name="btn" value="510-849-4009" />
      </form>
    </div>
    <div id="email">
      <!--<div class="button"><a href="<?= $incdir ?>contact/?p=<?= urlencode($form_course_name) ?>"><span class="nowrap"><span class="hide-mobile">Send an </span>Email</span></a></div>-->
      <form action="<?= $incdir ?>contact/" method="get" class="contact-btn">
        <input type="submit" class="email-btn" name="btn" value="Send an Email" />
        <input type="hidden" name="p" value="<?= urlencode($form_course_name) ?>" />
      </form>
    </div>
  </aside>
  <aside id="test_results">
    <header><h3>Our Success Rate - <span class="testscore">96%</span></h3></header>
    <p>In 2015*, <span class="testscore">96%</span> of our graduates passed the National Registration licensing test, making them eligible for immediate employment.</p>
    <div>* As of July 9th, 2015</div>
  </aside>
  <aside id="start_dates">
    <header><h3>Class Start Dates</h3></header>
    <ul>
    <?php
      include_once($incdir . 'php/course_dates.php');
      foreach (get_course_dates($handle, $course_code) as $row):
    ?>
      <li><?= $row['full_display'] ?></li>
    <?php endforeach; ?>
    </ul>
  </aside>
  <aside id="details" class="collapsible-mobile-start collapsible-tablet">
    <header class="stay-open"><h3 class="trigger">Course Details</h3></header>
    <p class="underline">Full Time</p>
    <ul>
      <li>Tue - Fri: 8:30 AM - 5:00 PM</li>
      <li>Mon: 1:00 PM - 5:00 PM Optional tutoring</li>
      <li>Five weeks of instruction</li>
    </ul>
    <hr />
    <p class="underline">Part Time</p>
    <ul>
      <li>Mon, Tue, Thu: 6:00 PM - 10:00 PM</li>
      <li>Sat: 8:30 AM - 5:00 PM</li>
      <li>Mon: 1:00 PM - 5:00 PM Optional tutoring</li>
      <li>Nine weeks of instruction</li>
    </ul>
    <hr />
    <p>Both courses include:</p>
    <ul>
      <li>168 hours of instruction and skills practice</li>
      <li>24-32 hours of field externship</li>
    </ul>
  </aside>
  <aside id="links">
    <header><h3>Links</h3></header>
    <ul>
      <li><a href="#">EMT Course Information Packet</a></li>
      <li><a href="#">School Catalog</a></li>
      <li><a href="#">Immunizations Requirements</a></li>
      <li><a href="#">EMT Skills Videos</a></li>
    </ul>
  </aside>
  <aside id="course_approvals">
    <header><h3>Approved By</h3></header>
    <ul>
      <li>CA Bureau for Private Postsecondary Education</li>
      <li>CA Emergency Medical Services Authority</li>
      <li>Alameda County EMS Agency</li>
      <li>National Registry of Emergency Medical Technicians</li>
    </ul>
  </aside>
</div>

<section id="content">
  <article>
    <div id="sidebar-secondary">
      <aside id="testimonials">
        <header><h3>Success Stories</h3></header>
          <?php
            include_once($incdir . 'php/testimonials.php');
            testimonials($handle, array('EMT'), 2);
          ?>
      </aside>
    </div>

    <div class="collapsible-mobile-start collapsible-tablet">
      <header class="stay-open"><h1>Emergency Medical Technician</h1></header>
      <h4 class="stay-open" style="margin: 0;">Training that will set you <span class="nowrap">apart from the rest!</span></h4>
      <p class="stay-open">In only 5 weeks, you can become one of the best EMTs in the Bay Area. After your guaranteed externship you'll have the education and experience to take the National Registry EMT exam, where Fast Response students outperform the national average by XX%. Our graduates are highly sought-after by leading Bay Area ambulance companies, making you fully-qualified, job ready, and exceedingly employable.</p>
      <p class="stay-open">Master the life-saving skills of an EMT and become somebody's hero!</p>
      <p class="hide-desktop hide-tablet trigger bold red underline" style="text-align: center;" data-trigger-text="Continue Reading"></p>
      <div class="image-placeholder" data-src="<?= $incdir ?>img/fr-logo-black.png"></div>
      <p>Emergency Medical Technicians (EMTs) are health care professionals who critically assess, evaluate and treat medical and trauma patients. EMTs may work on ambulances, in fire departments or hospital emergency departments, or on search and rescue teams.</p>
      <p>EMT is considered an entry-level medical responder. While some EMTs may choose to remain at this level of certification, we view the EMT certification as the first step into a broad array of career options. An EMT certification is required prior to obtaining a paramedic license and also may be required for certain fire service positions. EMT patient contact experience is also considered highly desirable when applying for Physician's Assistant (PA) programs. EMT certification is a fast and accessible option for individuals who are interested in medicine but not sure where to start.</p>
      <p>Our extensive, five-week EMT course provides the most effective and expedient platform for our graduates to excel as compassionate, critical-thinking EMTs. Students immediately put their skills into practice in our simulated clinical, residential, and ambulance settings. Students will receive hands-on training with actual field medical equipment, supervised by an experienced cadre of paramedics and EMTs. These instructors bring a wide variety of EMT experience to the classroom and skills lab to expand our students' learning opportunities.</p>
      <div class="image-placeholder" data-src=""></div>
      <p>We've contracted with local ambulance companies and hospital emergency departments to provide a guaranteed 24-hour clinical and field externship to every student. Externship is a great way to gain more experience and confidence with patient contact in the field. In addition, students will often have the opportunity to participate in mass casualty incident (MCI) or active shooter drills, arranged in conjunction with local EMS agencies and hospitals.</p>
      <p>The Fast Response EMT course features Basic Life Support (BLS / CPR) certification, free tutoring, NREMT test preparation, and a maximum student to instructor skills training ratio of 9:1.</p>
    </div>
  </article>
</section>

<div id="bottom-bar">
</div>

<?php require_once($incdir . 'footer.php'); ?>
