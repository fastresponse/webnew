<?php
  $incdir = '../';
  $title = 'Courses at Fast Response';
  $page_header = 'Courses at Fast Response';
  $description = '';
  $css = array('index.css');
?>
<?php require_once($incdir . 'include/header.php'); ?>

<?php if (false): ?>
<div id="sidebar-primary">
  <aside id="slideshow">
    <img src="/slideshow/frontpage/slide01.jpg" alt="" />
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
</div>
<?php endif; ?>

<section id="content">

<?php include_once($incdir . 'include/course_list_postsec.php'); ?>

<?php include_once($incdir . 'include/course_list_ceu.php'); ?>

</section>

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
