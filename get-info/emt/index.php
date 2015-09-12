<?php
  $incdir = '../../';
  $title = 'Emergency Medical Technician';
  $page_header = 'Emergency Medical Technician';
  $description = '';
  $css = array('landing.css', 'contact_form.css');

  $form_course_name = 'EMT';
  
  $picdir = $incdir . 'img/emt/';
  function add_dir(&$val, $key, $dir) {
    $val = $dir . $val;
  }
  $piclist = array_values(
    array_diff(
      scandir( realpath($picdir), 0),
      array('..', '.', 'Thumbs.db')
    )
  );
  array_walk($piclist, "add_dir", $picdir);
  $pictop = array_shift($piclist);
?>
<?php require_once($incdir . 'header.php'); ?>

<div id="top-bar" class="bg-darkblue">
  <img src="<?= $incdir ?>img/fr-logo-darkblue.png" alt="" />
  <h3 style="width: 100%;">Career training in Berkeley, CA</h3>
  <div id="phone">
    <div class="button"><a href="tel://800-637-7378"><span class="nowrap">Call<span class="hide-mobile"> 800-637-7378</span></span></a></div>
  </div>
  <div id="email">
    <div class="button"><a href="#contact-info"><span class="nowrap"><span class="hide-mobile">Send An </span>Email</span></a></div>
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
  <aside class="side-image" id="image-placeholder-primary">
  </aside>
</div>

<section id="content">
  <article>
    <div id="sidebar-secondary">
    </div>

    <div class="collapsible-mobile-start collapsible-tablet">
      <header class="stay-open"><h1>Fast Response<br />Accelerated EMT Program</h1></header>
      <h4 class="stay-open">Training that will set you apart from the rest!</h4>
      <h4 class="stay-open">Training you for success!</h4>
      <img class="stay-open" src="<?= $pictop ?>" alt="" />
      <p class="stay-open">In only 5 weeks, you can become one of the best EMTs in the Bay Area. After your guaranteed externship you'll have the education and experience to take the National Registry EMT exam, where Fast Response students outperform the national average by XX%. Our graduates are highly sought-after by leading Bay Area ambulance companies, making you fully-qualified, job ready, and exceedingly employable.</p>
      <p class="stay-open">Master the life-saving skills of an EMT and become somebody's hero!</p>
      <p class="hide-desktop hide-tablet trigger bold red underline" style="text-align: center;" data-trigger-text="Continue Reading"></p>
      <p>Emergency Medical Technicians (EMTs) are health care professionals who critically assess, evaluate and treat medical and trauma patients. EMTs may work on ambulances, in fire departments or hospital emergency departments, or on search and rescue teams.</p>
      <p>EMT is considered an entry-level medical responder. While some EMTs may choose to remain at this level of certification, we view the EMT certification as the first step into a broad array of career options. An EMT certification is required prior to obtaining a paramedic license and also may be required for certain fire service positions. EMT patient contact experience is also considered highly desirable when applying for Physician's Assistant (PA) programs. EMT certification is a fast and accessible option for individuals who are interested in medicine but not sure where to start.</p>
      <div class="image-placeholder-single"></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisi ante, vulputate eu rutrum non, euismod sed lectus. Ut ac mi augue, semper molestie lectus. Nam a nulla vitae justo porta lobortis. Etiam cursus dictum auctor. Nam eu lacus ante. Ut at nibh et leo volutpat adipiscing at at diam. Sed sit amet congue enim. Fusce purus mi, accumsan ac ultrices eu, mollis in risus. Fusce ac lectus luctus lorem tincidunt tristique. Duis interdum fermentum vehicula. Phasellus dui tortor, tristique rutrum consectetur vel, molestie ut quam. Suspendisse non enim sit amet lorem eleifend facilisis.</p>
      <p>Nam vulputate, nulla vitae condimentum laoreet, sapien arcu convallis magna, vel euismod arcu nulla eu augue. Nam at lorem nisl. Nunc ornare neque id risus blandit quis sodales nulla suscipit. Aenean eu augue vitae dui pellentesque adipiscing. Cras a arcu ante, in laoreet nisl. Duis porta porttitor adipiscing. Morbi id dolor turpis. Suspendisse at erat vitae odio blandit auctor. Curabitur gravida leo id leo auctor nec bibendum risus dictum. Ut nec eros in quam feugiat mattis at in odio. Vivamus tincidunt lectus non purus luctus hendrerit. Aliquam pharetra, nisl sed consectetur gravida, nisl diam cursus quam, at venenatis dui mauris id justo.</p>
    </div>
  </article>
</section>

<div id="bottom-bar">
</div>

<script>
var piclist = [
<?php foreach ($piclist as $piclink): ?>
  "<?= $piclink ?>",
<?php endforeach; ?>
];

function load_images_until(container, srclist, func) {
  if (srclist.length < 1) return;

  $('<img/>', {
    src: srclist.shift(),
    alt: ''
  }).appendTo(container).load(function() {

    if (func($(this)) === false) {
      srclist.unshift($(this).attr('src'));
      $(this).remove();
    }
    else {
      load_images_until(container, srclist, func);
    }
  });
}

function load_images_num(container, srclist, num) {
  if (num > srclist.length) num = srclist.length;
  if (num < 1) return;

  for(var i = 0; i < num; i++) {
    $('<img/>', {
      src: srclist.shift(),
      alt: ''
    }).appendTo(container);
  }
}

$(window).load(function() {
  var width = $(window).width();
  var srclist = piclist.slice(0); // clones array
  var type;

  if (width >= 800) {
    type = 'desktop';

    load_images_until( $('#image-placeholder-primary'), srclist,
      function($img) {
        var sidebar_height = $('#sidebar-primary').height();
        var content_height = $('#content').height();
        var leeway = 50; // pixels

        if (content_height >= sidebar_height) {
          return true;
        }

        if (sidebar_height > content_height && (sidebar_height - content_height) <= leeway) {
          return true;
        }

        return false;
      }
    );
  }
  else if (width >= 550) {
    type = 'tablet';
    $('.image-placeholder-single').each(function(index, element) {
      load_images_num(element, srclist, 1);
    });
    load_images_num( $('#image-placeholder-primary'), srclist, 3);
  }
  else {
    type = 'mobile';
    load_images_num( $('#image-placeholder-primary'), srclist, 1);
  }
});
</script>

<?php require_once($incdir . 'footer.php'); ?>
