<?php
  $incdir = '../';
  $title = 'Courses at Fast Response';
  $page_header = 'Courses at Fast Response';
  $description = 'Postsecondary and Continuing Education courses offered at Fast Response.';
  $canonical = 'http://www.fastresponse.org/courses/';
  $css = array('index.css');
?>
<?php require_once($incdir . 'include/header.php'); ?>

<?php if (false): ?>
<div id="sidebar-primary">
  <aside id="slideshow">
    <img src="<?= $incdir ?>img/front.jpg" alt="" />
  </aside>

  <?php include($incdir . 'include/contact_info.php'); ?>
</div>
<?php endif; ?>

<section id="content">

<?php include_once($incdir . 'include/course_list_postsec.php'); ?>

<?php include_once($incdir . 'include/course_list_ceu.php'); ?>

</section>

<?php require_once($incdir . 'include/footer.php'); ?>
