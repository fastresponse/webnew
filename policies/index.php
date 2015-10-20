<?php
  $incdir = '../';
  $title = 'Fast Response Policies';
  $page_header = 'Fast Response Policies';
  $description = '';
  $css = array();
?>
<?php require_once($incdir . 'header.php'); ?>

<div id="sidebar-primary">
  <aside id="contact-info" class="tablet-row-3">
    <header><h3>Contact Us</h3></header>
    <div id="phone">
      <form action="tel:+15108494009" method="get" class="contact-btn">
        <input type="submit" class="phone-btn" name="btn" value="510-849-4009" />
      </form>
    </div>
    <div id="email">
      <form action="<?= $incdir ?>contact/" method="get" class="contact-btn">
        <input type="submit" class="email-btn" name="btn" value="Send an Email" />
        <input type="hidden" name="p" value="<?= urlencode($form_course_name) ?>" />
      </form>
    </div>
  </aside>
</div>

<section id="content">
  <article>
    <header><h1>Fast Response Policies</h1></header>
    
    <section>
      <header><h2>Continuing Education Class Policies</h2></header>
      <p><?php include('ceu.php'); ?></p>
    </section>

    <hr />

    <section>
      <header><h2>Fast Response Privacy Policy</h2></header>
      <p><?php include('privacy.php'); ?></p>
    </section>

    <hr />

    <section>
      <header><h2>Website Terms And Conditions</h2></header>
      <p><?php include('terms.php'); ?></p>
    </section>

  </article>
</section>

<?php require_once($incdir . 'footer.php'); ?>
