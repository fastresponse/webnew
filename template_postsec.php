<?php
  $incdir = '../../';
  $title = '';
  $page_header = '';
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
    <header><h3>Our Success Rate - <span class="bold red underline">XX%</span></h3></header>
    <p>In 2015*, <span class="bold underline red">XX%</span> of our graduates passed the Test Name exam, making them eligible for immediate employment.</p>
    <div>* As of Month Nth, 2015</div>
  </aside>
  <aside id="start_dates">
    <header><h3>Class Start Dates</h3></header>
    <ul>
      <!-- code here -->
    </ul>
  </aside>
  <aside id="links">
    <header><h3>Links</h3></header>
    <ul>
      <li><a href="#">School Catalog</a></li>
      <li><a href="#">Immunizations Requirements</a></li>
    </ul>
  </aside>
  <aside id="course_approvals">
    <header><h3>Approved By</h3></header>
    <ul>
      <li>CA Bureau for Private Postsecondary Education</li>
    </ul>
  </aside>
</div>

<section id="content">
  <article>
    <div id="sidebar-secondary">
      <aside id="testimonials">
        <header><h3>Success Stories</h3></header>
        <?php testimonials($handle, array($course_code), 2); ?>
      </aside>
    </div>

    <div class="collapsible start-closed-mobile">
      <header class="stay-open"><h1>Page Header Text</h1></header>
      <h4 class="stay-open" style="margin: 0;">Subheader</h4>
      <p class="stay-open">Intro paragraph. Always displays.</p>
      <p class="hide-desktop hide-tablet trigger bold red underline" style="text-align: center;" data-trigger-text="Continue Reading"></p>
      <p>Body paragraphs. On mobile these start hidden.</p>
    </div>
  </article>
</section>

<div id="bottom-bar">
</div>

<?php require_once($incdir . 'footer.php'); ?>

