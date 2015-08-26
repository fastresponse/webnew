<?php
  $incdir = '../';
  $title = 'Fast Response Location and Directions';
  $page_header = '';
  $description = '';
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
</div>

<section id="content">
  <article>
    <div id="sidebar-secondary">
    </div>

    <div>
      <header><h1>Location and Directions</h1></header>
      <div>
        <a target="_blank" href="http://maps.google.com?hl=en&amp;q=2075+Allston+Way,+Berkeley,+CA,+94704&amp;z=15&amp;f=d">
          <img src="http://maps.googleapis.com/maps/api/staticmap?center=2075+Allston+Way,Suite+B,Berkeley,CA,94704&amp;zoom=14&amp;markers=color:red%7Clabel:F%7C2075+Allston+Way,Berkeley,CA&amp;size=300x210&amp;sensor=false" alt="Map of our area" width="300" height="210" />
        </a>
      </div>
      <p style="line-height: 1.1em;">
        Fast Response School of Health Care Education<br />
        2075 Allston Way<br />
        Suite B<br />
        Berkeley, CA 94704<br />
      </p>
      <p>510-849-4009</p>

    </div>
  </article>
</section>

<div id="bottom-bar">
</div>

<?php require_once($incdir . 'footer.php'); ?>

