<?php
  $incdir = '../../';
  $title = 'ACLS';
  $page_header = 'Advanced Cardiovascular <span class="nowrap">Life Support</span>';
  $description = '';
  $course_code = 'ACLS';
  $css = array('courses.css');
  $form_course_name = 'ACLS';
  $picdir = $incdir . 'img/acls/';
?>
<?php require_once($incdir . 'header.php'); ?>

<div id="sidebar-primary">
  <aside id="registration" class="tablet-row-1">
    <header><h3>Online Registration</h3></header>
    <div class="tablet-row-2">
      <form action="http://www.ssreg.com/fastresponse/calendar.asp?page=Calendar" method="get" class="registration-btn" target="_blank">
        <input type="submit" class="calendar-btn" name="btn" value="View Calendar" />
        <input type="hidden" name="page" value="Calendar" />
      </form>
      <form action="http://www.ssreg.com/fastresponse/classes/classes.asp?catID=4106&pcatID=4105" method="get" class="registration-btn" target="_blank">
        <input type="submit" class="register-btn" name="btn" value="Initial Certification" />
        <input type="hidden" name="catID" value="4106" />
        <input type="hidden" name="pcatID" value="4105" />
      </form>
      <form action="http://www.ssreg.com/fastresponse/classes/classes.asp?catID=4107&pcatID=4105" method="get" class="registration-btn" target="_blank">
        <input type="submit" class="register-btn" name="btn" value="Renewal" />
        <input type="hidden" name="catID" value="4107" />
        <input type="hidden" name="pcatID" value="4105" />
      </form>
      <hr />
      <div class="book-notice">
        <header><h4>There are required books <span class="nowrap">for this class.</span></h4></header>
        <p>Please see the books section for details.</p>
      </div>
    </div>
    <hr class="hide-tablet" />
    <div class="tablet-row-2">
      <div class="reg-notice">
        <header><h3>Attention!</h3></header>
        <p><span class="nowrap">If you are employed by one of</span> <span class="nowrap">the following medical facilities:</span></p>
        <ul>
          <li>Alta Bates Medical Center (RNs only)</li>
          <li>Alameda County Medical Center</li>
          <li>WestMed Ambulance</li>
          <li>Pro Transport-1</li>
        </ul>
        <p>Then you <span class="underline red">must</span> register by phone.</p>
      </div>
    </div>
  </aside>
  <aside style="display: none;">
  </aside>
  <aside id="contact-info" class="tablet-row-2">
    <header><h3>Contact Us</h3></header>
    <div id="phone">
      <!--<div class="button"><a href="tel://510-849-4009"><span class="nowrap"><span class="hide-mobile">510-849-4009</span><span class="hide-tablet hide-desktop">Call</span></span></a></div>-->
      <form action="tel:+15108494009" method="get" class="contact-btn">
        <input type="submit" class="phone-btn" name="btn" value="510-849-4009" />
      </form>
    </div>
    <div id="email">
      <!--<div class="button"><a href="<?= $incdir ?>contact_us.php"><span class="nowrap"><span class="hide-mobile">Send an </span>Email</span></a></div>-->
      <form action="<?= $incdir ?>contact/" method="get" class="contact-btn">
        <input type="submit" class="email-btn" name="btn" value="Send an Email" />
        <input type="hidden" name="p" value="<?= urlencode($form_course_name) ?>" />
      </form>
    </div>
  </aside> 
  <aside id="course_approvals" class="tablet-row-2">
    <header><h3>Approved By</h3></header>
    <ul>
      <li>American Heart Association</li>
      <li>Training Center #CA03190</li>
    </ul>
  </aside>
  <aside id="promotions" class="tablet-row-1">
    <header><h3>Promotions</h3></header>
    <p class="underline">Active Military Personnel and Veterans</p>
    <div>10% off course price</div>
    <hr />
    <div class="small-print">Online registrations are not eligible for promotions. Please register by phone instead. Promotions may not be combined and do not apply to books.</div>
  </aside>
</div>

<section id="content">
  <article>
    <!--
    <div id="sidebar-secondary">
      <aside>
        <header><h3>Test box</h3></header>
        <h4>This is only here to show what it looks like if we put information in this sidebar.</h4>
        <div>We need to decide whether we want to use this sidebar for CEU pages. It can be hidden in mobile format.</div>
      </aside>
    </div>
    -->

    <div class="collapsible-mobile-start collapsible-tablet">
      <header class="stay-open"><h1><?= $page_header ?></h1></header>
      <p class="stay-open">Our Advanced Cardiovascular Life Support (ACLS) course offers challenging and useful skills that make a difference in saving lives. A lively, low-stress class environment, with a focus on a team approach to medical emergencies has proven to be an essential and rewarding experience for all participants.</p>
      <p class="hide-desktop hide-tablet trigger bold red underline" style="text-align: center;" data-trigger-text="Continue Reading"></p>
      <p>Designed by the American Heart Association (AHA), this course provides the knowledge and skills needed to evaluate and manage the first 10 minutes of adult ventricular fibrillation/ventricular tachycardia (VF/VT) arrest, as well as other pulseless and pre-arrest cardiopulmonary emergencies.</p>
      <p>Please read through our <a href="<?= $incdir ?>policies/">Continuing Education Policies</a> before registering.</p>
    </div>

    <div id="content-bottom">
      <div class="image-placeholder tablet-row-2"></div>
      <div class="image-placeholder tablet-row-2"></div>

      <aside id="details" class="collapsible-mobile-start collapsible-tablet tablet-row-1">
        <header class="stay-open"><h3 class="trigger">Course Details</h3></header>
        <div class="tablet-row-2">
          <p class="underline">Initial Certification</p>
          <ul>
            <li>For first time students and anyone with an expired ACLS card.</li>
            <li>Student Manual is <span class="bold red">required</span>.</li>
            <li>Two day class, 9:00 AM to 5:00 PM.</li>
            <li>Continuing Education Units: 14.00</li>
            <li>Course price: <span class="price">$260.00</span></li>
          </ul>
        </div>
        <hr class="hide-tablet" />
        <div class="tablet-row-2">
          <p class="underline">Renewal</p>
          <ul>
            <li>For those with a current ACLS card.</li>
            <li>Current card <span class="bold red">must</span> be presented to instructor.</li>
            <li>Student Manual is <span class="bold red">required</span>.</li>
            <li>One day class, 9:00 AM to 5:00 PM.</li>
            <li>Continuing Education Units: 7.00</li>
            <li>Course price: <span class="price">$190.00</span></li>
          </ul>
        </div>
      </aside>
      <aside id="books" class="collapsible-mobile-start collapsible-tablet tablet-row-1">
        <header class="stay-open"><h3 class="trigger">Books</h3></header>
        <div class="tablet-row-2">
          <p class="underline">AHA ACLS Provider Manual with Pocket Reference Card Set</p>
          <ul>
            <li><span class="bold red">Required</span></li>
	          <li><span class="isbn-label">AHA item #:</span> 901014</li>
	          <li><span class="isbn-label">ISBN:</span> 1616690100</li>
	          <li><span class="isbn-label">ISBN-13:</span> 9781616690106</li>
            <li>Our price: <span class="price">$53.00</span>.
            <li>A previously purchased book can be used as long as it meets the current (2010) AHA guidelines.</li>
            <li class="red">This book must be used <span class="bold">during class</span>, per AHA requirements. Students without a book will not receive a certification card.</li>
          </ul>
        </div>
        <hr class="hide-tablet" />
        <div class="tablet-row-2">
          <p class="underline">Fast Response ACLS Study Guide</p>
          <ul>
            <li><span class="bold yellow">Recommended</span></li>
            <li>Provided <span class="price">free</span> by Fast Response.</li>
            <li><a href="/pdfs/ACLS - Study Guide.pdf" target="_blank">Click here to download</a>.</li>
          </ul>
        </div>
        <hr class="tablet-row-1" />
        <div class="small-print tablet-row-1">On-site book purchase is available Mon - Fri. Books may be purchased elsewhere at student discretion.</div>
      </aside>
    </div>
  </article>
</section>

<div id="bottom-bar">
  <aside id="faqs" class="collapsible-mobile-start collapsible-tablet-start">
    <header class="stay-open"><h3 class="trigger">FAQs</h3></header>
    <dl>
      <dt>Question 1.</dt>
      <dd>Answer 1.</dd>
      <dt>Question 2.</dt>
      <dd>Answer 2.</dd>
      <dt>Question 3.</dt>
      <dd>Answer 3.</dd>
      <dt>Question 4.</dt>
      <dd>Answer 4.</dd>
    </dl>
  </aside>
</div>

<script>
<?php // variable translate section, PHP -> Javascript ?>
var course_code = "<?= $course_code ?>";

var piclist = [
<?php 
  require_once($incdir . 'php/file_list.php');
  $piclist = get_file_list($picdir);
  
  foreach ($piclist as $piclink): ?>
  "<?= $piclink ?>",
<?php endforeach; ?>
];
</script>

<script>
$(document).ready(function() {
  var width = $(window).width();
  var srclist = piclist.slice(0); // clones array
  var type;

  if (width >= 800) {
    type = 'desktop';
    $('.image-placeholder').load_placeholders(srclist);
  }
  else if (width >= 550) {
    type = 'tablet';
    $('.image-placeholder').load_placeholders(srclist);
  }
  else {
    type = 'mobile';
  }

});
</script>

<?php require_once($incdir . 'footer.php'); ?>

