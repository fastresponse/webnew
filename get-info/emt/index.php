<?php
  $incdir = '../../';
  $course_name = 'EMT';
  $title = 'Emergency Medical Technician';
  $page_header = 'Emergency Medical Technician';
  $description = '';
  $css = array('landing.css', 'contact_form.css');
  
  $picdir = $incdir . 'img/emt/';
  $piclist = array_values(
    array_diff(
      scandir( realpath($picdir), 0),
      array('..', '.', 'Thumbs.db')
    )
  );
  $i = 0;
  $max_left = 3;
  $max_right = 7;
?>
<?php require_once($incdir . 'header.php'); ?>

<div id="top-bar" class="bg-darkblue">
  <img src="<?= $incdir ?>img/fr-logo-darkblue.png" alt="" />
  <h3 style="text-align: center;">Career training in Berkeley, CA</h3>

  <div id="phone">
    <div class="button"><a href="tel://800-637-7378"><span class="nowrap">Call</span></a></div>
  </div>
  <div id="email">
    <div class="button"><a href="contact_us.php"><span class="nowrap">Email</span></a></div>
  </div>

</div>

<div id="sidebar-primary">
  <aside id="contact-info">
    <header><h3>Contact Us</h3></header>
    <?php
      $hide_form_title = true;
      $hide_form_call_button = false;
      include($incdir . 'contact/contact_form.php');
    ?>
  </aside>
  <?php for (; $i < count($piclist) && $i < $max_left; $i++): ?>
  <aside class="side-image">
    <img src="<?= $picdir . $piclist[$i] ?>" alt="" />
  </aside>
  <?php endfor; ?>
</div>

<section id="content">
  <article>
    <div id="sidebar-secondary">
      <?php for (; $i < count($piclist) && $i < $max_left+$max_right; $i++): ?>
      <aside class="side-image">
        <img src="<?= $picdir . $piclist[$i] ?>" alt="" />
      </aside>
      <?php endfor; ?>
    </div>

    <div class="collapsible start-closed-mobile">
      <header class="stay-open"><h1>Fast Response<br />Accelerated EMT Program</h1></header>
      <h4 class="stay-open" style="margin: 0;">Training that will set you apart from the rest!</h4>
      <img class="stay-open" src="<?= $picdir . $piclist[0] ?>" alt="" />
      <p class="stay-open">In only 5 weeks, you can become one of the best EMTs in the Bay Area. After your guaranteed externship you'll have the education and experience to take the National Registry EMT exam, where Fast Response students outperform the national average by XX%. Our graduates are highly sought-after by leading Bay Area ambulance companies, making you fully-qualified, job ready, and exceedingly employable.</p>
      <p class="stay-open">Master the life-saving skills of an EMT and become somebody's hero!</p>
      <p class="hide-desktop hide-tablet trigger bold red underline" style="text-align: center;" data-trigger-text="Continue Reading"></p>
      <p>Emergency Medical Technicians (EMTs) are health care professionals who critically assess, evaluate and treat medical and trauma patients. EMTs may work on ambulances, in fire departments or hospital emergency departments, or on search and rescue teams.</p>
      <p>EMT is considered an entry-level medical responder. While some EMTs may choose to remain at this level of certification, we view the EMT certification as the first step into a broad array of career options. An EMT certification is required prior to obtaining a paramedic license and also may be required for certain fire service positions. EMT patient contact experience is also considered highly desirable when applying for Physician's Assistant (PA) programs. EMT certification is a fast and accessible option for individuals who are interested in medicine but not sure where to start.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisi ante, vulputate eu rutrum non, euismod sed lectus. Ut ac mi augue, semper molestie lectus. Nam a nulla vitae justo porta lobortis. Etiam cursus dictum auctor. Nam eu lacus ante. Ut at nibh et leo volutpat adipiscing at at diam. Sed sit amet congue enim. Fusce purus mi, accumsan ac ultrices eu, mollis in risus. Fusce ac lectus luctus lorem tincidunt tristique. Duis interdum fermentum vehicula. Phasellus dui tortor, tristique rutrum consectetur vel, molestie ut quam. Suspendisse non enim sit amet lorem eleifend facilisis.</p>
      <p>Nam vulputate, nulla vitae condimentum laoreet, sapien arcu convallis magna, vel euismod arcu nulla eu augue. Nam at lorem nisl. Nunc ornare neque id risus blandit quis sodales nulla suscipit. Aenean eu augue vitae dui pellentesque adipiscing. Cras a arcu ante, in laoreet nisl. Duis porta porttitor adipiscing. Morbi id dolor turpis. Suspendisse at erat vitae odio blandit auctor. Curabitur gravida leo id leo auctor nec bibendum risus dictum. Ut nec eros in quam feugiat mattis at in odio. Vivamus tincidunt lectus non purus luctus hendrerit. Aliquam pharetra, nisl sed consectetur gravida, nisl diam cursus quam, at venenatis dui mauris id justo.</p>
    </div>
  </article>
</section>

<div id="bottom-bar">
</div>

<?php require_once($incdir . 'footer.php'); ?>
