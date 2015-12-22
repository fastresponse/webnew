<?php

if (!isset($incdir)) {
  $incdir = '../../';
}

$get_piclist = true;

if (!isset($picdir) && isset($course_code)) {
  $picdir = $incdir . 'img/' . strtolower($course_code) . '/';
}

if (!isset($sections)) {
  $sections = array();
}

$basecss = array('courses.css');

if (!isset($css)) {
  $css = $basecss;
}
else {
  $css = $basecss + $css;
}

?>
<?php include_once($incdir . 'php/registration_form.php'); ?>
<?php require_once($incdir . 'include/header.php'); ?>

<div id="sidebar-primary">
  <aside id="registration" class="tablet-row-1">
  <?php if (isset($sections['registration'])): ?>
    <?= $sections['registration'] ?>
  <?php else: ?>
    <header><h3>Online Registration</h3></header>
    <div class="tablet-row-2">
      <?= registration_form('View Calendar',
        'http://www.ssreg.com/fastresponse/calendar.asp',
        array('page' => 'Calendar')
      ); ?>
      <?= $sections['registration buttons'] ?>
      <?php if ($sections['required books']): ?>
      <hr />
      <div class="book-notice">
        <header><h4>There are required books <span class="nowrap">for this class.</span></h4></header>
        <p>Please see the books section for details.</p>
      </div>
      <?php endif; ?>
    </div>
    <hr class="hide-tablet" />
    <div class="tablet-row-2">
      <div class="reg-notice">
        <header><h3>Attention!</h3></header>
        <p><span class="nowrap">If you are employed by one of</span> <span class="nowrap">the following medical facilities:</span></p>
        <ul>
          <li>Alta Bates Medical Center (RNs only)</li>
          <li>WestMed Ambulance</li>
          <li>Pro Transport-1</li>
        </ul>
        <p>Then you <span class="underline red">must</span> register by phone.</p>
      </div>
    </div>
  <?php endif; ?>
  </aside>
  <aside style="display: none;"><!-- why is this here -->
  </aside>
  <?php
    if (isset($sections['course approvals'])) $r = 2;
    else $r = 1;
  ?>
<?php
  $contact_info_class = 'tablet-row-'.$r;
  include($incdir . 'include/contact_info.php');
?>
<?php if (false): ?>
  <aside id="contact-info" class="tablet-row-<?= $r ?>">
    <header><h3>Contact Us</h3></header>
    <div id="phone">
      <a href="tel:+1-510-849-4009" class="phone-btn">510-849-4009</a>
    </div>
    <div id="email">
      <a href="<?= $incdir ?>contact/?p=<?= $form_course_name ?>" class="phone-btn">Send an Email</a>
    </div>
  </aside> 
<?php endif; ?>
  <?php if (isset($sections['course approvals'])): ?>
  <aside id="course_approvals" class="tablet-row-2">
    <header><h3>Approved By</h3></header>
    <ul>
      <?= $sections['course approvals'] ?>
    </ul>
  </aside>
  <?php endif; ?>
  <?php
    include_once($incdir . 'php/dbconn.php');
    if (!isset($handle)) $handle = db_connect();
    $promo_results = basic_query($handle,
      array('title', 'description', 'notes'),
      'promotions',
      array('active = 1', 'FIND_IN_SET(:course, courses)'),
      'id ASC',
      0,
      array(':course' => $course_code)
    );

  if (isset($promo_results) && count($promo_results)):
  ?>
  <aside id="promotions" class="tablet-row-1">
    <header><h3>Promotions</h3></header>
    <?php
    $i = 0;
    foreach ($promo_results as $promo):
    ?>
      <?php if ($i++ > 0): ?>
      <hr>
      <?php endif; ?>
      <p class="underline"><?= $promo['title'] ?></p>
      <div><?= nl2br($promo['description']) ?></div>
      <?php if (!empty($promo['notes'])): ?>
      <ul>
        <?= '<li>' . str_replace("\n", "</li>\n<li>", $promo['notes']) . '</li>' ?>
      </ul>
      <?php endif; ?>
    <?php endforeach; ?>
    <hr>
    <div class="small-print">Online registrations are not eligible for promotions. Please register by phone instead. Promotions may not be combined and do not apply to books.</div>
  </aside>
  <?php endif; ?>
  <aside id="faqs" class="tablet-row-1">
    <header><h3>Frequently Asked Questions</h3></header>
    <ul>
      <li><a href="<?= $incdir ?>students/?s=ceu">Please see the Student Resources section</a></li>
    </ul>
  </aside>
</div>

<section id="content">
  <article>
    <div class="collapsible-mobile-start collapsible-tablet">

      <header class="stay-open">
        <h1><?= $page_header ?></h1>
        <?php if (isset($sub_header)): ?><h4><?= $sub_header ?></h4><?php endif; ?>
      </header>

      <?= $sections['above fold'] ?>
      <?php if (isset($sections['trigger'])): ?>
      <p class="hide-desktop hide-tablet trigger bold red underline" data-trigger-text="<?= $sections['trigger'] ?>"></p>
      <?php endif; ?>
      <?= $sections['below fold'] ?>
      
      <p>Please read through our <a href="<?= $incdir ?>policies/#ceu">Continuing Education Policies</a> before registering.</p>
    </div>

    <div id="content-bottom">
      <div id="placeholder-box">
        <div id="image-placeholder-1" class="image-placeholder"></div>
        <div id="image-placeholder-2" class="image-placeholder"></div>
      </div>

<?php if (false): ?>
      <?php
        $order = array();
        /*
         * $order = array(
         *   null,
         *   'course details', 'books',
         *   'extra',
         * );
         */
        for ($i = 0; $i < count($order); $i++) {
          if ($order[$i] === null) continue;
          $id = str_replace(' ', '_', strtolower($order[$i]));
          $t = $order[$i]; //sentence_case($order[$i]);
          if ($i % 3 === 0) {
            $r = 1;
          }
          else {
            $r = 2;
          }
      ?>
      <aside id="<?= $id ?>" class="collapsible-mobile collapsible-tablet tablet-row-<?= $r ?>">
      </aside>
      <?php
        }
      ?>
<?php endif; ?>

      <?php
        $n = 0;
        if (isset($sections['course details'])) $n++;
        if (isset($sections['extra'])) $n++;
        if (isset($sections['books'])) $n++;
      ?>

      <?php if (isset($sections['course details'])): ?>
      <aside id="details" class="collapsible-mobile-start collapsible-tablet tablet-row-1">
        <header class="stay-open"><h3 class="trigger">Course Details</h3></header>
        <?= $sections['course details'] ?>
      </aside>
      <?php endif; ?>

      <?php if (isset($sections['extra'])): ?>
      <aside id="extra" class="collapsible-mobile-start collapsible-tablet tablet-row-1">
        <?= $sections['extra'] ?>
      </aside>
      <?php endif; ?>

      <?php if (false && $n % 2 == 1): ?>
      <aside style="display: none;"></aside>
      <?php endif; ?>

      <?php if (isset($sections['books'])): ?>
      <aside id="books" class="collapsible-mobile-start collapsible-tablet tablet-row-1">
        <header class="stay-open"><h3 class="trigger">Books</h3></header>
        <?= $sections['books'] ?>
        <hr class="tablet-row-1" />
        <div class="small-print tablet-row-1">On-site book purchase is available Mon - Fri. Books may be purchased elsewhere at student discretion.</div>
      </aside>
      <?php endif; ?>
    </div>
  </article>
</section>

<div id="bottom-bar">
  <?php if (isset($sections['faqs'])): ?>
  <aside id="faqs" class="collapsible-mobile-start collapsible-tablet-start">
    <header class="stay-open"><h3 class="trigger">FAQs</h3></header>
    <?= $sections['faqs'] ?>
  </aside>
  <?php endif; ?>
</div>

<script src="<?= $incdir ?>config/ceu.js"></script>

<?php require_once($incdir . 'include/footer.php'); ?>
