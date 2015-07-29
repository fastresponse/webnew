<?php
  $incdir = '../../';
  $title = 'Emergency Medical Technician';
  $page_header = 'Emergency Medical Technician';
  $description = '';
  $css = array('courses.css');
?>
<?php require_once($incdir . 'header.php'); ?>

<div id="sidebar-primary">
  <aside id="slideshow">
    <img src="/slideshow/emt/slide01.jpg" alt="" />
  </aside>
  <aside id="start_dates">
    <header><h3>Class Start Dates</h3></header>
    <ul>
      <li>September 8th, 2015 - Full Time (open)</li>
      <li>September 19th, 2015 - Part Time (open)</li>
      <li>November 2nd, 2015 - Full Time (open)</li>
    </ul>
  </aside>
  <aside id="test_results">
    <header><h3>NREMT Test Results</h3></header>
    <p>In 2015*, <span class="bold underline red">96%</span> of our graduates passed the National Registration licensing test, making them eligible for immediate employment.</p>
    <div>* As of July 9th, 2015</div>
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
      <aside id="contact-info">
        <header><h3>Contact Us</h3></header>
        <div id="phone">
          <div class="button"><a href="tel://510-849-4009"><span class="nowrap">510-849-4009</span></a></div>
        </div>
        <div id="email">
          <div class="button"><a href="contact_us.php"><span class="nowrap">Send an Email</span></a></div>
        </div>
      </aside>
      <aside id="testimonials">
        <header><h3>Success Stories</h3></header>
        <?php testimonial(1); ?>
        <?php testimonial(2); ?>
      </aside>
    </div>
    <header><h1>Accelerated EMT Program</h1></header>
    <p>Emergency Medical Technicians (EMTs) are health care professionals who critically assess, evaluate and treat medical and trauma patients. EMTs may work on ambulances, in fire departments or hospital emergency departments, or on search and rescue teams.</p>
    <p>EMT is considered an entry-level medical responder. While some EMTs may choose to remain at this level of certification, we view the EMT certification as the first step into a broad array of career options. An EMT certification is required prior to obtaining a paramedic license and also may be required for certain fire service positions. EMT patient contact experience is also considered highly desirable when applying for Physician's Assistant (PA) programs. EMT certification is a fast and accessible option for individuals who are interested in medicine but not sure where to start.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisi ante, vulputate eu rutrum non, euismod sed lectus. Ut ac mi augue, semper molestie lectus. Nam a nulla vitae justo porta lobortis. Etiam cursus dictum auctor. Nam eu lacus ante. Ut at nibh et leo volutpat adipiscing at at diam. Sed sit amet congue enim. Fusce purus mi, accumsan ac ultrices eu, mollis in risus. Fusce ac lectus luctus lorem tincidunt tristique. Duis interdum fermentum vehicula. Phasellus dui tortor, tristique rutrum consectetur vel, molestie ut quam. Suspendisse non enim sit amet lorem eleifend facilisis.</p>
    <p>Nam vulputate, nulla vitae condimentum laoreet, sapien arcu convallis magna, vel euismod arcu nulla eu augue. Nam at lorem nisl. Nunc ornare neque id risus blandit quis sodales nulla suscipit. Aenean eu augue vitae dui pellentesque adipiscing. Cras a arcu ante, in laoreet nisl. Duis porta porttitor adipiscing. Morbi id dolor turpis. Suspendisse at erat vitae odio blandit auctor. Curabitur gravida leo id leo auctor nec bibendum risus dictum. Ut nec eros in quam feugiat mattis at in odio. Vivamus tincidunt lectus non purus luctus hendrerit. Aliquam pharetra, nisl sed consectetur gravida, nisl diam cursus quam, at venenatis dui mauris id justo.</p>
  </article>
</section>

<div id="bottom-bar">
</div>

<?php require_once($incdir . 'footer.php'); ?>
