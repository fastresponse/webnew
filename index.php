<?php
  $incdir = './';
  $title = 'Fast Response';
  $page_header = 'Fast Response School of<br />Health Care Education';
  $description = '';
  $canonical = 'http://www.fastresponse.org/';
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
      <!--<div class="button"><a href="tel://510-849-4009"><span class="nowrap">510-849-4009</span></a></div>-->
      <form action="tel:+15108494009" method="get" class="contact-btn">
        <input type="submit" class="phone-btn" name="btn" value="510-849-4009" />
      </form>
    </div>
    <div id="email">
      <!--<div class="button"><a href="<?= $incdir ?>contact/"><span class="nowrap">Send an Email</span></a></div>-->
      <form action="<?= $incdir ?>contact/" method="get" class="contact-btn">
        <input type="submit" class="email-btn" name="btn" value="Send an Email" />
      </form>
    </div>
  </aside>

<?php if (false): ?>
  <aside id="announcements" class="collapsible-mobile-start collapsible-tablet-start">
    <header><h3 class="trigger">News And Announcements</h3></header>
    <div>Paramedic Academy Applications due <span class="nowrap">Jul 20th</span></div>
    <div>Pharmacy Technician classes in 2015 - <span class="nowrap">Now Enrolling</span></div>
    <div>Discounted Prices for all Active Military Personnel and Veterans</div>
  </aside>
<?php endif; ?>

  <aside id="fb-feed" class="collapsible-mobile-start collapsible-tablet-start">
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

  <article id="career_courses" class="collapsible-mobile-start collapsible-tablet">
    <header class="stay-open"><h1 class="trigger">Career Courses</h1></header>
    <section>
      <h3><a href="courses/emt/">Emergency Medical Technician</a></h3>
      <ul>
        <li>Work in an ambulance, fire department, or hospital emergency department</li>
        <li>Full-time: 5 weeks, Part-time: 9 weeks</li>
        <li><span class="testscore">93%</span> student success rate on national exam</li>
      </ul>
    </section>
    <section>
      <h3><a href="courses/cpt/">Certified Phlebotomy Technician</a></h3>
      <ul>
        <li>Work in hospitals and laboratories</li>
        <li>Full-time: 2 weeks, Part-time: 4 weeks</li>
        <li><span class="testscore">91%</span> student success rate on national exam</li>
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

  <article id="continuing_ed" class="collapsible-mobile-start collapsible-tablet">
    <header class="stay-open"><h1 class="trigger">Continuing Education</h1></header>
    <section>
      <h3><a href="courses/bls/">Basic <span class="nowrap">Life Support</span></a></h3>
      <ul>
        <li>Initial certification: 5 hours, <span class="price">$50.00</span></li>
        <li>Renewal: 3.5 hours, <span class="price">$45.00</span></li>
        <li>Online class w/ in-person skills testing available</li>
        <li>AHA BLS card provided at course completion</li>
      </ul>
    </section>
    <section>
      <h3><a href="courses/acls/">Advanced Cardiovascular <span class="nowrap">Life Support</span></a></h3>
      <ul>
        <li>Initial certification: 2 days, <span class="price">$245.00</span></li>
        <li>Renewal: 1 day, <span class="price">$175.00</span></li>
        <li>AHA ACLS card provided at course completion</li>
      </ul>
    </section>
    <section>
      <h3><a href="courses/pals/">Pediatric Advanced <span class="nowrap">Life Support</span></a></h3>
      <ul>
        <li>Initial certification: 2 days, <span class="price">$245.00</span></li>
        <li>Renewal: 1 day, <span class="price">$175.00</span></li>
        <li>AHA PALS card provided at course completion</li>
      </ul>
    </section>
    <section>
      <h3><a href="courses/ecg-b/">ECG Basic</a></h3>
      <ul>
        <li>2 days, <span class="price">$215.00</span></li>
        <li>14 CEUs</li>
      </ul>
    </section>
    <section>
      <h3><a href="courses/ecg-t/">ECG Technician</a></h3>
      <ul>
        <li>5 days, <span class="price">$1300.00</span></li>
      </ul>
    </section>
    <section>
      <h3><a href="courses/emt-r/">EMT Refresher</a></h3>
      <ul>
        <li>3 days, <span class="price">$350.00</span></li>
        <li>Skills check-off included</li>
        <li>24 CEUs</li>
      </ul>
    </section>
    <section>
      <h3><a href="courses/emt-s/">EMT Skills Verification</a></h3>
      <ul>
        <li>Class held by appointment only</li>
        <li>3 hours, <span class="price">$90.00</span></li>
      </ul>
    </section>
    <section>
      <h3><a href="courses/itls/">International Trauma <span class="nowrap">Life Support</span></a></h3>
      <ul>
        <li>Initial certification: 2 days, <span class="price">$300.00</span></li>
        <li>Renewal: 1 day, <span class="price">$185.00</span></li>
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
    <?php
      include_once($incdir . 'php/testimonials.php');
      $emp_testimonials = get_testimonials($handle, array('employer'));
      $emt_para_testimonials =
        get_testimonials($handle, array('EMT', 'student')) +
        get_testimonials($handle, array('Paramedic', 'student'));
      $other_testimonials =
        get_testimonials($handle, array('CMA', 'student')) +
        get_testimonials($handle, array('CPT', 'student')) +
        get_testimonials($handle, array('SPT', 'student')) +
        get_testimonials($handle, array('PHM', 'student'));
      display($emp_testimonials, 1, 'vertical');
      display($emt_para_testimonials, 1, 'vertical');
      display($other_testimonials, 1, 'vertical');
    ?>
  </section>
</div>

<?php require_once($incdir . 'footer.php'); ?>
