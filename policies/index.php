<?php
  $incdir = '../';
  $title = 'Fast Response Policies';
  $page_header = 'Fast Response Policies';
  $description = '';
  $css = array('policies.css');
?>
<?php require_once($incdir . 'include/header.php'); ?>

<div id="sidebar-primary">
  <?php
    $contact_info_class = 'tablet-row-3';
    include($incdir . 'include/contact_info.php');
  ?>
  <aside>
    <header><h3>Sections</h3></header>
    <ul>
      <li><a href="#ceu">Continuing Education</a></li>
      <li><a href="#privacy">Privacy Policy</a></li>
      <li><a href="#terms">Terms and Conditions</a></li>
    </ul>
  </aside>
</div>

<section id="content">
  <article>
    <header><h1>Fast Response Policies</h1></header>
    
    <section>
      <a name="ceu"></a>
      <header><h2>Continuing Education Class Policies</h2></header>
      <p><?php include('ceu.php'); ?></p>
    </section>

    <hr />

    <section>
      <a name="privacy"></a>
      <header><h2>Fast Response Privacy Policy</h2></header>
      <p><?php include('privacy.php'); ?></p>
    </section>

    <hr />

    <section>
      <a name="terms"></a>
      <header><h2>Website Terms And Conditions</h2></header>
      <p><?php include('terms.php'); ?></p>
    </section>

  </article>
</section>

<?php require_once($incdir . 'include/footer.php'); ?>
