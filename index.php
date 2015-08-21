<?php
  $incdir = './';
  $title = 'Fast Response';
  $page_header = 'Fast Response School of<br />Health Care Education';
  $description = '';
  $css = array('index.css');
?>
<?php require_once($incdir . 'header.php'); ?>

<div id="sidebar-primary">
  <aside id="slideshow">
    <img src="/slideshow/frontpage/slide01.jpg" alt="" />
  </aside>

  <aside id="contact-info">
    <header><h3>Contact Us</h3></header>
    <div id="phone">
      <div class="button"><a href="tel://510-849-4009"><span class="nowrap">510-849-4009</span></a></div>
    </div>
    <div id="email">
      <div class="button"><a href="contact_us.php"><span class="nowrap">Send an Email</span></a></div>
    </div>
  </aside>

<?php if (false): ?>
  <aside id="announcements" class="collapsible">
    <header><h3 class="trigger">News And Announcements</h3></header>
    <div>Paramedic Academy Applications due <span class="nowrap">Jul 20th</span></div>
    <div>Pharmacy Technician classes in 2015 - <span class="nowrap">Now Enrolling</span></div>
    <div>Discounted Prices for all Active Military Personnel and Veterans</div>
  </aside>
<?php endif; ?>

  <aside id="fb-feed" class="collapsible start-closed-mobile start-closed-tablet">
    <header class="stay-open"><h3 class="trigger">News And Announcements</h3></header>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div class="fb-page" data-href="https://www.facebook.com/FastResponseSchool" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-show-posts="true" data-hide-cta="true" data-width="300">
      <div class="fb-xfbml-parse-ignore">
        <blockquote cite="https://www.facebook.com/FastResponseSchool">
          <a href="https://www.facebook.com/FastResponseSchool">
            Fast Response School of Health Care Education
          </a>
        </blockquote>
      </div>
    </div>
  </aside>
</div>

<section id="content">

  <div id="banner" class="hide-mobile">
    <div class="bold italic"><a href="/courses/cma/">Evening Medical Assistant classes begin Sept 21<sup>st</sup></a></div>
  </div>

  <article id="career_courses" class="collapsible start-closed-mobile">
    <header class="stay-open"><h1 class="trigger">Career Courses</h1></header>
    <section>
      <h3><a href="courses/emt/">Emergency Medical Technician</a></h3>
      <ul>
        <li>Work in an ambulance, fire department, or hospital emergency department</li>
        <li>Full-time: 5 weeks, Part-time: 9 weeks</li>
        <li><span class="bold red underline">96%</span> student success rate on national exam</li>
      </ul>
    </section>
    <section>
      <h3><a href="courses/cpt/">Certified Phlebotomy Technician</a></h3>
      <ul>
        <li>Work in hospitals and laboratories</li>
        <li>Full-time: 2 weeks, Part-time: 4 weeks</li>
        <li><span class="bold red underline">91%</span> student success rate on national exam</li>
      </ul>
    </section>
    <section>
      <h3><a href="courses/phm/">Pharmacy Technician</a></h3>
      <ul>
        <li>Point 1.</li>
        <li>Point 2.</li>
      </ul>
    </section>
    <section>
      <h3><a href="courses/cma/">Clinical Medical Assistant</a></h3>
      <ul>
        <li>Point 1.</li>
        <li>Point 2.</li>
      </ul>
    </section>
    <section>
      <h3><a href="courses/paramedic/">Paramedic</a></h3>
      <ul>
        <li>Point 1.</li>
        <li>Point 2.</li>
      </ul>
    </section>
    <section>
      <h3><a href="courses/spt/">Sterile Processing Technician</a></h3>
      <ul>
        <li>Point 1.</li>
        <li>Point 2.</li>
      </ul>
    </section>
  </article>

  <article id="continuing_ed" class="collapsible start-closed-mobile">
    <header class="stay-open"><h1 class="trigger">Continuing Education</h1></header>
    <section>
      <h3><a href="/courses/bls/">Basic Life Support</a></h3>
      <ul>
        <li>Point 1.</li>
        <li>Point 2.</li>
      </ul>
    </section>
    <section>
      <h3><a href="/courses/acls/">Advanced Cardiovascular Life Support</a></h3>
      <ul>
        <li>Point 1.</li>
        <li>Point 2.</li>
      </ul>
    </section>
    <section>
      <h3><a href="/courses/pals/">Pediatric Advanced Life Support</a></h3>
      <ul>
        <li>Point 1.</li>
        <li>Point 2.</li>
      </ul>
    </section>
    <section>
      <h3><a href="/courses/ecg-b/">ECG Basic</a></h3>
      <ul>
        <li>Point 1.</li>
        <li>Point 2.</li>
      </ul>
    </section>
    <section>
      <h3><a href="/courses/ecg-t/">ECG Technician</a></h3>
      <ul>
        <li>Point 1.</li>
        <li>Point 2.</li>
      </ul>
    </section>
    <section>
      <h3><a href="/courses/emt-r/">EMT Refresher</a></h3>
      <ul>
        <li>Point 1.</li>
        <li>Point 2.</li>
      </ul>
    </section>
    <section>
      <h3><a href="/courses/emt-s/">EMT Skills Verification</a></h3>
      <ul>
        <li>Point 1.</li>
        <li>Point 2.</li>
      </ul>
    </section>
    <section>
      <h3><a href="/courses/itls/">International Trauma Life Support</a></h3>
      <ul>
        <li>Point 1.</li>
        <li>Point 2.</li>
      </ul>
    </section>
  </article>
</section>

<div id="bottom-bar">
  <section id="testimonials">
    <?php testimonials($handle, array('EMT'), 3); ?>
  </section>
</div>

<?php require_once($incdir . 'footer.php'); ?>
