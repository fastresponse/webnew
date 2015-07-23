<?php
  $incdir = './';

  $title = 'Fast Response';
  $page_header = 'Fast Response School of<br />Health Care Education';
  $description = '';

?>
<?php require_once($incdir . 'header.php'); ?>

<div id="asides">
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
    <header><h3>News And Announcements</h3></header>
    <div>Paramedic Academy Applications due <span class="nowrap">Jul 20th</span></div>
    <div>Pharmacy Technician classes in 2015 - <span class="nowrap">Now Enrolling</span></div>
    <div>Discounted Prices for all Active Military Personnel and Veterans</div>
  </aside>
<?php endif; ?>

  <aside id="fb-feed" class="collapsible start-closed-mobile start-closed-tablet">
    <header><h3>News And Announcements</h3></header>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div class="fb-page" data-href="https://www.facebook.com/FastResponseSchool" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-show-posts="true" data-hide-cta="true" data-width="500">
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

<section id="articles">
  <article id="career_courses" class="collapsible start-closed-mobile">
    <header><h1>Career Courses</h1></header>
    <section>
      <h3>Emergency Medical Technician</h3>
      <p>A brief description.</p>
    </section>
    <section>
      <h3>Certified Phlebotomy Technician</h3>
      <p>A brief description.</p>
    </section>
    <section>
      <h3>Pharmacy Technician</h3>
      <p>A brief description.</p>
    </section>
    <section>
      <h3>Clinical Medical Assistant</h3>
      <p>A brief description.</p>
    </section>
    <section>
      <h3>Paramedic</h3>
      <p>A brief description.</p>
    </section>
    <section>
      <h3>Sterile Processing Technician</h3>
      <p>A brief description.</p>
    </section>
  </article>

  <article id="continuing_ed" class="collapsible start-closed-mobile">
    <header><h1>Continuing Education</h1></header>
    <section>
      <h3>Basic Life Support</h3>
      <p>A brief description.</p>
    </section>
    <section>
      <h3>Advanced Cardiovascular Life Support</h3>
      <p>A brief description.</p>
    </section>
    <section>
      <h3>Pediatric Advanced Life Support</h3>
      <p>A brief description.</p>
    </section>
    <section>
      <h3>ECG Basic</h3>
      <p>A brief description.</p>
    </section>
    <section>
      <h3>ECG Technician</h3>
      <p>A brief description.</p>
    </section>
    <section>
      <h3>EMT Refresher</h3>
      <p>A brief description.</p>
    </section>
    <section>
      <h3>EMT Skills Verification</h3>
      <p>A brief description.</p>
    </section>
    <section>
      <h3>International Trauma Life Support</h3>
      <p>A brief description.</p>
    </section>
  </article>
</section>

<section id="testimonials">
  <article>Testimonial 1</article>
  <article>Testimonial 2</article>
  <article>Testimonial 3</article>
</section>

<?php require_once($incdir . 'footer.php'); ?>
