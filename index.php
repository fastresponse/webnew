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
    <div class="bold italic"><a href="<?= $incdir ?>courses/cma/">Evening Medical Assistant classes begin Sept 21<sup>st</sup></a></div>
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
        <li>Work in retail and hospital pharmacies</li>
        <li>13 weeks of instruction</li>
      </ul>
    </section>
    <section>
      <h3><a href="courses/cma/">Clinical Medical Assistant</a></h3>
      <ul>
        <li>Work in a variety of hospital and laboratory settings</li>
        <li>12 weeks of instruction</li>
        <li>Phlebotomy included</li>
        <li>Day and evening classes available</li>
      </ul>
    </section>
    <section>
      <h3><a href="courses/paramedic/">Paramedic</a></h3>
      <ul>
        <li>Work in an ambulance, fire department, or hospital emergency department</li>
        <li>10 months of instruction</li>
      </ul>
    </section>
    <section>
      <h3><a href="courses/spt/">Sterile Processing Technician</a></h3>
      <ul>
        <li>Work in hospitals and laboratories</li>
        <li>10 weeks of instruction</li>
      </ul>
    </section>
  </article>

  <article id="continuing_ed" class="collapsible start-closed-mobile">
    <header class="stay-open"><h1 class="trigger">Continuing Education</h1></header>
    <section>
      <h3><a href="courses/bls/">Basic <span class="nowrap">Life Support</span></a></h3>
      <ul>
        <li>Initial certification: 5 hours, $50.00</li>
        <li>Renewal: 3.5 hours, $45.00</li>
        <li>Online class w/ in-person skills testing available</li>
        <li>AHA BLS card provided at course completion</li>
      </ul>
    </section>
    <section>
      <h3><a href="courses/acls/">Advanced Cardiovascular <span class="nowrap">Life Support</span></a></h3>
      <ul>
        <li>Initial certification: 2 days, $245.00</li>
        <li>Renewal: 1 day, $175.00</li>
        <li>AHA ACLS card provided at course completion</li>
      </ul>
    </section>
    <section>
      <h3><a href="courses/pals/">Pediatric Advanced <span class="nowrap">Life Support</span></a></h3>
      <ul>
        <li>Initial certification: 2 days, $245.00</li>
        <li>Renewal: 1 day, $175.00</li>
        <li>AHA PALS card provided at course completion</li>
      </ul>
    </section>
    <section>
      <h3><a href="courses/ecg-b/">ECG Basic</a></h3>
      <ul>
        <li>2 days, $215.00</li>
        <li>14 CEUs</li>
      </ul>
    </section>
    <section>
      <h3><a href="courses/ecg-t/">ECG Technician</a></h3>
      <ul>
        <li>5 days, $1300.00</li>
      </ul>
    </section>
    <section>
      <h3><a href="courses/emt-r/">EMT Refresher</a></h3>
      <ul>
        <li>3 days, $350</li>
        <li>Skills check-off included</li>
        <li>24 CEUs</li>
      </ul>
    </section>
    <section>
      <h3><a href="courses/emt-s/">EMT Skills Verification</a></h3>
      <ul>
        <li>Class held by appointment only</li>
        <li>3 hours, $90.00</li>
      </ul>
    </section>
    <section>
      <h3><a href="courses/itls/">International Trauma <span class="nowrap">Life Support</span></a></h3>
      <ul>
        <li>Initial certification: 2 days, $300.00</li>
        <li>Renewal: 1 day, $185.00</li>
      </ul>
    </section>
    <section>
      <h3><a href="courses/first-aid/">First Aid</a></h3>
      <ul>
        <li>For groups of 6 or more</li>
        <li>5 hour class</li>
      </ul>
    </section>
  </article>
</section>

<div id="bottom-bar">
  <section id="testimonials" class="space-out-3">
    <?php testimonials($handle, array('EMT'), 3); ?>
  </section>
</div>

<?php require_once($incdir . 'footer.php'); ?>
