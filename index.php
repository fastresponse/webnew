<?php
  $incdir = './';
  $title = 'Fast Response';
  $page_header = 'Fast Response School of<br />Health Care Education';
  $description = '';
  $canonical = 'http://www.fastresponse.org/';
  $css = array('index.css');
?>
<?php require_once($incdir . 'include/header.php'); ?>

<div id="sidebar-primary">
  <aside id="slideshow">
    <img src="<?= $incdir ?>img/front.jpg" alt="" />
  </aside>

  <aside id="contact-info">
    <header><h3>Contact Us</h3></header>
    <div id="phone">
      <form action="tel: +15108494009" method="get" class="contact-btn">
        <input type="submit" class="phone-btn" value="510-849-4009" />
      </form>
    </div>
    <div id="email">
      <form action="<?= $incdir ?>contact/" method="get" class="contact-btn">
        <input type="submit" class="email-btn" value="Send an Email" />
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

  <div id="banner" class="">
  <?php if (false): ?><div class="bold italic blue">Fast Response will be closed Nov 26-27. Happy Thanksgiving!</div><?php endif; ?>
    <div class="bold italic"><a href="<?= $incdir ?>courses/phm/">Pharmacy Technician classes - <span class="nowrap">Now Enrolling for 2016</span></a></div>
  </div>

<?php include_once($incdir . 'include/course_list_postsec.php'); ?>

<?php include_once($incdir . 'include/course_list_ceu.php'); ?>

</section>

<div id="bottom-bar" class="space-out-3">
  <aside class="testimonial-column hide-mobile">
    <div class="testimonial-bg">
      <div id="testimonial-1" class="testimonial-container"></div>
    </div>
  </aside>
  <aside class="testimonial-column hide-mobile">
    <div class="testimonial-bg">
      <div id="testimonial-2" class="testimonial-container"></div>
    </div>
  </aside>
  <aside class="testimonial-column hide-tablet">
    <div class="testimonial-bg">
      <div id="testimonial-3" class="testimonial-container"><h3 class="red click-load hide-desktop hide-tablet">Click to Read Testimonials</h3></div>
    </div>
  </aside>
</div>

<script src="<?= $incdir ?>config/index.js"></script>

<script src="<?= $incdir ?>js/vendor/jquery.bxslider/jquery.bxslider.min.js"></script>

<script>
$(document).ready(function() {
  var width = $(window).width();
  var type;

  if (width >= 800) {
    type = 'desktop';
  }
  else if (width >= 550) {
    type = 'tablet';
  }
  else {
    type = 'mobile';
  }

  $.when(
    $('.testimonial-container').load_testimonials( testimonialOpts[type] )
  ).then(function() {
    //$('.image-placeholder').load_placeholders( imageOpts[type], srclist );
  });
});
</script>

<?php require_once($incdir . 'include/footer.php'); ?>
