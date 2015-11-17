<?php
  $incdir = '../';
  $title = 'Landing Pages';
  $page_header = 'Landing Pages';
  $description = '';
  $css = array('index.css');
  $landing_pages = true;
?>
<?php require_once($incdir . 'include/header.php'); ?>

<section id="content">

<?php include_once($incdir . 'include/course_list_postsec.php'); ?>

</section>

<?php require_once($incdir . 'include/footer.php'); ?>
