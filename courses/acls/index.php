<?php
  $incdir = '../../';
  $title = 'ACLS';
  $page_header = 'Advanced Cardiovascular <span class="nowrap">Life Support</span>';
  $description = '';
  $course_code = 'ACLS';
  $css = array('courses.css');
  $form_course_name = 'ACLS';
?>
<?php require_once($incdir . 'header.php'); ?>

<div id="sidebar-primary">
  <aside id="registration">
    <header><h3>Online Registration</h3></header>
    <!--
    <div class="button"><a href="http://www.ssreg.com/fastresponse/calendar.asp?page=Calendar" target="_blank"><span class="nowrap">View Calendar</span></span></a></div>
    <div class="button"><a href="http://www.ssreg.com/fastresponse/classes/classes.asp?catID=4106&pcatID=4105" target="_blank"><span class="nowrap">Initial Certification</span></span></a></div>
    <div class="button"><a href="http://www.ssreg.com/fastresponse/classes/classes.asp?catID=4107&pcatID=4105" target="_blank"><span class="nowrap">Renewal</span></span></a></div>
    -->
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
  </aside>
 <aside id="contact-info">
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
  <aside id="faqs" style="display: none" class="collapsible-mobile-start collapsible-tablet">
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
      <p>Please read through our <a href="/school/policies/ceu.php">Continuing Education Policies</a> before registering.</p>
    </div>

    <div id="content-bottom">
      <div style="background: yellow; min-height: 200px;"/></div>
      <div style="background: yellow; min-height: 200px;"/></div>
      <img src="" alt="" style="min-height: 150px;"/>
      <img src="" alt="" style="min-height: 150px;"/>
    </div>
  </article>
</section>

<div id="bottom-bar">
  <aside id="details" class="collapsible-mobile-start collapsible-tablet">
    <header class="stay-open"><h3 class="trigger">Course Details</h3></header>
    <p class="underline">Initial Certification</p>
    <ul>
      <li>For first time students and anyone with an expired ACLS card.</li>
      <li>Student Manual is <span class="bold red">required</span>.</li>
      <li>Two day class, 9:00 AM to 5:00 PM.</li>
      <li>Continuing Education Units: 14.00</li>
      <li>Course price: <span class="price">$260.00</span></li>
    </ul>
    <hr />
    <p class="underline">Renewal</p>
    <ul>
      <li>For those with a current ACLS card.</li>
      <li>Current card <span class="bold red">must</span> be presented to instructor.</li>
      <li>Student Manual is <span class="bold red">required</span>.</li>
      <li>One day class, 9:00 AM to 5:00 PM.</li>
      <li>Continuing Education Units: 7.00</li>
      <li>Course price: <span class="price">$190.00</span></li>
    </ul>
  </aside>
  <aside id="books" class="collapsible-mobile-start collapsible-tablet">
    <header class="stay-open"><h3 class="trigger">Books</h3></header>
    <p class="underline">AHA ACLS Provider Manual with Pocket Reference Card Set</p>
    <ul>
      <li><span class="bold red">Required</span></li>
	    <li><span class="isbn-label">AHA item #:</span> 901014</li>
	    <li><span class="isbn-label">ISBN:</span> 1616690100</li>
	    <li><span class="isbn-label">ISBN-13:</span> 9781616690106</li>
      <li>Our price: <span class="price">$52.75</span>.
      <li>A previously purchased book can be used as long as it meets the current (2010) AHA guidelines.</li>
      <li class="red">This book must be used <span class="bold">during class</span>, per AHA requirements. Students without a book will not receive a certification card.</li>
    </ul>
    <hr />
    <p class="underline">Fast Response ACLS Study Guide</p>
    <ul>
      <li><span class="bold yellow">Recommended</span></li>
      <li>Provided <span class="price">free</span> by Fast Response.</li>
      <li><a href="/pdfs/ACLS - Study Guide.pdf" target="_blank">Click here to download</a>.</li>
    </ul>
    <hr />
    <div class="small-print">On-site book purchase is available Mon - Fri. Books may be purchased elsewhere at student discretion.</div>
  </aside>
  <aside id="promotions">
    <header><h3>Promotions</h3></header>
    <p class="underline">Active Military Personnel and Veterans</p>
    <div>10% off course price</div>
    <hr />
    <div class="small-print">Online registrations are not eligible for promotions. Please register by phone instead. Promotions may not be combined and do not apply to books.</div>
  </aside>
  <aside id="course_approvals">
    <header><h3>Approved By</h3></header>
    <ul>
      <li>American Heart Association Training Center #CA03190</li>
    </ul>
  </aside>
</div>

<?php require_once($incdir . 'footer.php'); ?>

