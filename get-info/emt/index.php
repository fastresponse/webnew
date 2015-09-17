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
  <img src="<?= $incdir ?>img/fr-logo-darkblue.png" alt="Fast Response" />
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
      <header class="stay-open"><h1>Emergency Medical Technician</h1></header>
      <h4 class="stay-open">Training that will set you <span class="nowrap">apart from the rest!</span></h4>
      <p class="stay-open">In only 5 weeks, you can become one of the best EMTs in the Bay Area. After your guaranteed externship you'll have the education and experience to take the National Registry EMT exam, where Fast Response students outperform the national average by XX%. Our graduates are highly sought-after by leading Bay Area ambulance companies, making you fully-qualified, job ready, and exceedingly employable.</p>
      <p class="stay-open">Master the life-saving skills of an EMT and become somebody's hero!</p>
      <p class="hide-desktop hide-tablet trigger bold red underline" style="text-align: center;" data-trigger-text="Continue Reading"></p>
      <p>Emergency Medical Technicians (EMTs) are health care professionals who critically assess, evaluate and treat medical and trauma patients. EMTs may work on ambulances, in fire departments or hospital emergency departments, or on search and rescue teams.</p>
      <p>EMT is considered an entry-level medical responder. While some EMTs may choose to remain at this level of certification, we view the EMT certification as the first step into a broad array of career options. An EMT certification is required prior to obtaining a paramedic license and also may be required for certain fire service positions. EMT patient contact experience is also considered highly desirable when applying for Physician's Assistant (PA) programs. EMT certification is a fast and accessible option for individuals who are interested in medicine but not sure where to start.</p>
      <div class="image-placeholder-single"></div>
<p>Our extensive, five-week EMT course provides the most effective and expedient platform for our graduates to excel as compassionate, critical-thinking EMTs. Students immediately put their skills into practice in our simulated clinical, residential, and ambulance settings. Students will receive hands-on training with actual field medical equipment, supervised by an experienced cadre of paramedics and EMTs. These instructors bring a wide variety of EMT experience to the classroom and skills lab to expand our students' learning opportunities.</p>
      <p>We've contracted with local ambulance companies and hospital emergency departments to provide a guaranteed 24-hour clinical and field externship to every student. Externship is a great way to gain more experience and confidence with patient contact in the field. In addition, students will often have the opportunity to participate in mass casualty incident (MCI) or active shooter drills, arranged in conjunction with local EMS agencies and hospitals.</p>
      <p>The Fast Response EMT course features Basic Life Support (BLS / CPR) certification, free tutoring, NREMT test preparation, and a maximum student to instructor skills training ratio of 9:1.</p>
      <div style="height: 500px; width: 100%; background: yellow;"></div>
    </div>
  </article>
</section>

<div id="bottom-bar">
</div>

<script src="<?= $incdir ?>js/vendor/jquery.bxslider/jquery.bxslider.min.js"></script>

<script>
var piclist = [
<?php foreach ($piclist as $piclink): ?>
  "<?= $piclink ?>",
<?php endforeach; ?>
];

function load_images_until(container, srclist, checkfunc, donefunc) {
  var done_callback = (typeof(donefunc) === "function");

  if (srclist.length < 1) {
    if (done_callback) {
      donefunc();
    }
    return;
  }

  $('<img/>', {
    src: srclist.shift(),
    alt: ''
  }).appendTo(container).load(function() {
    if (checkfunc($(this)) === false) {
      srclist.unshift($(this).attr('src'));
      $(this).remove();
      if (done_callback) {
        donefunc();
      }
    }
    else {
      load_images_until(container, srclist, checkfunc, donefunc);
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

$(document).ready(function() {
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
      },
      function() {
        $('#image-placeholder-primary').bxSlider({
          auto: true,
          autoHover: true,
          pause: 10000,
          mode: 'vertical',
          minSlides: 3,
          maxSlides: 3,
          moveSlides: 1,
          slideMargin: 5,
          adaptiveHeight: true,
          pager: false,
          controls: false
        });
      }
    );

    /*
    $('#image-placeholder-primary').bxSlider({
      auto: true,
      mode: 'vertical',
      slideWidth: 100,
      minSlides: 1,
      maxSlides: 3
    });
    */
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
