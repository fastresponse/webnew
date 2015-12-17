<?php
  $incdir = '../../';
  $title = 'EMT Skills Videos';
  $page_header = $title;
  $description = '';
  $css = array('students.css');
?>
<?php require_once($incdir . 'include/header.php'); ?>

<?php
  include_once($incdir . 'include/videos.php');
  $skills_videos = array_filter($videos,
    function($val) {
      if (in_array('emt', $val['tags']) && in_array('skills', $val['tags']))
        return true;
      return false;
    }
  );
  $default = reset($skills_videos)['id'];
?>

<div id="sidebar-primary">
  <aside id="menu">
    <header><h3><?= $page_header ?></h3></header>
    <ul data-default="#<?= $default ?>">
      <?php foreach($skills_videos as $name => $data): ?>
      <li class="menu-link video-link" data-for="#<?= $data['id'] ?>"><?= $name ?></li>
      <?php endforeach; ?>
    </ul>
  </aside>
</div>

<section id="content">

  <header class="hide-desktop hide-desktop-large"><h1><?= $page_header ?></h1></header>

  <?php foreach($skills_videos as $name => $data): ?>
  <article id="<?= $data['id'] ?>" data-for="#<?= $data['id'] ?>" data-number="<?= $data['number'] ?>" data-loaded="false" class="video-container video-link collapsible-mobile-start collapsible-tablet-start">
    <header class="stay-open"><h1 class="trigger"><?= $name ?></h1></header>
  </article>
  <?php endforeach; ?>

</section>

<script src="<?= $incdir ?>js/vendor/vzaar-client.js"></script>

<script>
$FRvars.loadfuncs.push(
  function() {
    switch ($FRvars.type) {
    case 'desktop':
      $('#menu > ul')
        .enable_menulinks()
        .enable_videolinks()
      ;
      break;
    case 'tablet':
      $('#content').enable_videolinks();
      break;
    case 'mobile':
      $('#content').enable_videolinks(null, "fit");
      break;
    default:
    }
  }
);
</script>

<?php require_once($incdir . 'include/footer.php'); ?>
