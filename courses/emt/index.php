<?php
  $incdir = '../../';
  $title = 'Emergency Medical Technician';
  $page_header = 'Emergency Medical Technician';
  $description = '';
  $course_code = 'EMT';
  $css = array('courses.css');
?>
<?php require_once($incdir . 'header.php'); ?>

<div id="sidebar-primary">
  <aside id="contact-info">
    <header><h3>Contact Us</h3></header>
    <div id="phone">
      <div class="button"><a href="tel://510-849-4009"><span class="nowrap"><span class="hide-mobile">510-849-4009</span><span class="hide-tablet hide-desktop">Call</span></span></a></div>
    </div>
    <div id="email">
    <div class="button"><a href="<?= $incdir ?>contact_us.php"><span class="nowrap"><span class="hide-mobile">Send an </span>Email</span></a></div>
    </div>
  </aside>
  <aside id="test_results">
    <header><h3>Our Success Rate - <span class="bold red underline">96%</span></h3></header>
    <p>In 2015*, <span class="bold underline red">96%</span> of our graduates passed the National Registration licensing test, making them eligible for immediate employment.</p>
    <div>* As of July 9th, 2015</div>
  </aside>
  <aside id="start_dates">
    <header><h3>Class Start Dates</h3></header>
    <ul>
      <li>September 8th, 2015 - Full Time (open)</li>
      <li>September 19th, 2015 - Part Time (open)</li>
      <li>November 2nd, 2015 - Full Time (open)</li>
    </ul>
  </aside>
  <aside id="details" class="collapsible start-closed-mobile">
    <header class="stay-open"><h3 class="trigger">Course Details</h3></header>
    <p class="underline">Full Time</p>
    <ul>
      <li>Tue - Fri: 8:30 AM - 5:00 PM</li>
      <li>Mon: Optional tutoring</li>
      <li>Five weeks of instruction</li>
    </ul>
    <hr />
    <p class="underline">Part Time</p>
    <ul>
      <li>Mon, Tue, Thu: 6:00 PM - 10:00 PM</li>
      <li>Sat: 8:30 AM - 5:00 PM</li>
      <li>Wed: Optional tutoring</li>
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
        <?php testimonials($handle, array('EMT'), 2); ?>
      </aside>
    </div>

    <div class="collapsible start-closed-mobile">
      <header class="stay-open"><h1>Accelerated EMT Program</h1></header>
      <h4 class="stay-open" style="margin: 0;">Training that will set you apart from the rest!</h4>
      <p class="stay-open">In only 5 weeks, you can become one of the best EMTs in the Bay Area. After your guaranteed externship you'll have the education and experience to take the National Registry EMT exam, where Fast Response students outperform the national average by XX%. Our graduates are highly sought-after by leading Bay Area ambulance companies, making you fully-qualified, job ready, and exceedingly employable.</p>
      <p class="stay-open">Master the life-saving skills of an EMT and become somebody's hero!</p>
      <p class="hide-desktop hide-tablet trigger bold red underline" style="text-align: center;" data-trigger-text="Continue Reading"></p>
      <p>Emergency Medical Technicians (EMTs) are health care professionals who critically assess, evaluate and treat medical and trauma patients. EMTs may work on ambulances, in fire departments or hospital emergency departments, or on search and rescue teams.</p>
      <p>EMT is considered an entry-level medical responder. While some EMTs may choose to remain at this level of certification, we view the EMT certification as the first step into a broad array of career options. An EMT certification is required prior to obtaining a paramedic license and also may be required for certain fire service positions. EMT patient contact experience is also considered highly desirable when applying for Physician's Assistant (PA) programs. EMT certification is a fast and accessible option for individuals who are interested in medicine but not sure where to start.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisi ante, vulputate eu rutrum non, euismod sed lectus. Ut ac mi augue, semper molestie lectus. Nam a nulla vitae justo porta lobortis. Etiam cursus dictum auctor. Nam eu lacus ante. Ut at nibh et leo volutpat adipiscing at at diam. Sed sit amet congue enim. Fusce purus mi, accumsan ac ultrices eu, mollis in risus. Fusce ac lectus luctus lorem tincidunt tristique. Duis interdum fermentum vehicula. Phasellus dui tortor, tristique rutrum consectetur vel, molestie ut quam. Suspendisse non enim sit amet lorem eleifend facilisis.</p>
      <p>Nam vulputate, nulla vitae condimentum laoreet, sapien arcu convallis magna, vel euismod arcu nulla eu augue. Nam at lorem nisl. Nunc ornare neque id risus blandit quis sodales nulla suscipit. Aenean eu augue vitae dui pellentesque adipiscing. Cras a arcu ante, in laoreet nisl. Duis porta porttitor adipiscing. Morbi id dolor turpis. Suspendisse at erat vitae odio blandit auctor. Curabitur gravida leo id leo auctor nec bibendum risus dictum. Ut nec eros in quam feugiat mattis at in odio. Vivamus tincidunt lectus non purus luctus hendrerit. Aliquam pharetra, nisl sed consectetur gravida, nisl diam cursus quam, at venenatis dui mauris id justo.</p>
    </div>
  </article>
</section>

<div id="bottom-bar">
</div>

<?php require_once($incdir . 'footer.php'); ?>
