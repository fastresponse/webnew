<?php

  $query_args = array();
  parse_str($_SERVER['QUERY_STRING'], $query_args);
  $allowed_args = array( 'p' );
  foreach ($allowed_args as $arg) {
    if (!array_key_exists($arg, $query_args)) continue;
    switch ($arg) {
      case 'p':
        $form_course_name = $query_args['p'];
      break;

      default:
    }
  }

  if (!isset($form_course_name)) $form_course_name = '';
  if (!isset($zip_radius)) $zip_radius = '50';
  if (!isset($hide_form_title)) $hide_form_title = false;
  if (!isset($hide_form_call_button)) $hide_form_call_button = true;

  $programs = array(
    'EMT',
    'Phlebotomy',
    'Pharmacy Technician',
    'Medical Assistant',
    'Sterile Processing',
    'Paramedic',
    'Other',
  );

  $sources = array(
    'Google',
    'Facebook',
    'Yahoo / Bing',
    'Yelp',
    'Friend / Relative',
    'Coworker / Employer',
    'Flyer / Brochure',
    'Career Fair',
    'Other',
  );

  $source_hosts = array(
    'www.google.com' => 'Google',
    'www.facebook.com' => 'Facebook',
    'm.facebook.com' => 'Facebook',
    'www.bing.com' => 'Yahoo / Bing',
    'search.yahoo.com' => 'Yahoo / Bing',
    'www.yelp.com' => 'Yelp',
    'm.yelp.com' => 'Yelp',
  );

  
  // if $arr is associative array: keys are used as labels
  // if $arr is simple list: labels and values are the same
  function array_to_option_html($arr, $current = '') {
    $output = '';

    // anonymous function that inherits variables from parent scope
    // must inherit its own name by reference so it can recurse
    $make_html = function($key, $val) use (&$make_html, $current) {
      $output = '';
      if (is_int($key)) {
        $key = $val;
      }
      if (is_array($val)) {
        $output .= "<optgroup label='$key'>";
        foreach ($val as $subkey => $subval) {
          $output .= $make_html($subkey, $subval);
        }
        $output .= "</optgroup>";
      }
      else {
        $selected = ($current == $key) ? "selected='selected'" : "";
        $output .= "<option $selected value='$key'>$val</option>";
      }
      return $output;
    };

    foreach ($arr as $key => $val) {
      $output .= $make_html($key, $val);
    }

    return $output;
  }

  function get_referring_source() {
    global $source_hosts;

    $refer = $_SERVER['HTTP_REFERER'];
    if (!$refer || $refer == '')
      return '';

    $host = parse_url($refer, PHP_URL_HOST);
    if (!$host || $host == '')
      return '';

    if (array_key_exists($host, $source_hosts))
      return $source_hosts[$host];

    /*
    // alternatively, if $source_hosts contains regex patterns:
    foreach ($source_hosts as $pattern => $src) {
      if (preg_match($pattern, $host)) {
        return $src;
      }
    }
    */

    return 'Other';
  }

?>

<div id="contact-form-div">
<a name="contact-form-link"></a>
<?php if (!$hide_form_title): ?>
<h2 class="red">Program Inquiries</h2>
<?php endif; ?>
<div class="border">

<?php if (false): ?>
  <h3>We are currently experiencing technical difficulties with our contact form.</h3>
  <h3>Please contact our Admissions Department</h3>
  <dl style="width: 100%; margin-bottom: 20px;">
    <dt style="text-decoration: underline;">Hours</dt>
      <dd>Mon - Thu: 8 AM - 6 PM</dd>
      <dd>Fri: 8 AM - 5 PM</dd>
      <dd>Sat: 9 AM - 5 PM</dd>
    <dt style="text-decoration: underline;">Phone</dt>
      <dd><a href="tel: +15108093654" class="nowrap">510-809-3654</a></dd>
    <dt style="text-decoration: underline;">Toll Free</dt>
      <dd><a href="tel: +18006377387" class="nowrap">800-637-7387</a></dd>
    <dt style="text-decoration: underline;">Fax</dt>
      <dd>866-572-3363</dd>
    <dt style="text-decoration: underline;">Email</dt>
      <dd><a href="mailto: admissions@fastresponse.org">admissions@fastresponse.org</a></dd>
  </dl>
<?php endif; ?>

<form id="contact-form" action="<?= $incdir ?>php/ajax.course_contact_emailer.php" method="post" onsubmit="return validate(this);">

  <label for="form-program" class="form-section-program">Program</label>
  <select id="form-program" class="form-section-program" name="program" required="required">
    <option value="">&ndash; Select a program &ndash;</option>
    <?= array_to_option_html($programs, $form_course_name); ?>
  </select>

  <input type="checkbox" id="form-emt" class="form-section-emt" name="emt" value="I am a licensed EMT." />
  <label for="form-emt" class="form-section-emt checkbox-label">I am a licensed EMT.</label>

  <label for="form-name" class="form-section-name">Name</label>
  <input type="text" id="form-name" class="form-section-name" name="name" placeholder="Firstname Lastname" required="required" />

  <label for="form-email" class="form-section-email">Email</label>
  <input type="email" id="form-email" class="form-section-email" name="email" placeholder="you@email.com" required="required" />

  <label for="form-phone" class="form-section-phone">Phone</label>
  <input type="tel" id="form-phone" class="form-section-phone" name="phone" placeholder="555-555-5555" required="required" />
  <input type="checkbox" id="form-sms-ok" name="sms-ok" class="form-section-phone" value="Please contact me via SMS.">
  <label for="form-sms-ok" class="form-section-phone checkbox-label">Please contact me via SMS.</label>

  <label for="form-zip" class="form-section-zip">Zip Code</label>
  <input type="text" id="form-zip" class="form-section-zip" name="zip" placeholder="9XXXX" onkeyup="return zipValidate(this, '#zipcheck', <?= $zip_radius ?>);" />
  <div id="zipcheck" class="form-section-zip"></div>

  <label for="form-source" class="form-section-source">Where did you first hear about us?</label>
  <div class="filler form-section-source"></div>
  <select id="form-source" class="form-section-source" name="source" required="required">
    <option value="">&ndash; Select one &ndash;</option>
    <?= array_to_option_html($sources, get_referring_source()); ?>
  </select>

  <label for="form-questions" class="form-section-questions">Common Questions</label>

  <input type="checkbox" id="form-questions-1" class="form-section-questions" name="questions[]" value="How much is tuition?">
  <label for="form-questions-1" class="form-section-questions checkbox-label">How much is tuition?</label>

  <input type="checkbox" id="form-questions-2" class="form-section-questions" name="questions[]" value="What payment plans are available?">
  <label for="form-questions-2" class="form-section-questions checkbox-label">What payment plans are available?</label>

  <input type="checkbox" id="form-questions-3" class="form-section-questions" name="questions[]" value="What are my career prospects?">
  <label for="form-questions-3" class="form-section-questions checkbox-label">What are my career prospects?</label>

  <input type="checkbox" id="form-questions-4" class="form-section-questions" name="questions[]" value="When does it start?">
  <label for="form-questions-4" class="form-section-questions checkbox-label">When does it start?</label>


  <label for="form-comments" class="form-section-comments">Other Questions and Comments</label>
  <div class="filler form-section-comments"></div>
  <textarea cols="28" rows="3" id="form-comments" class="form-section-comments" name="comments" style="vertical-align: top;"></textarea>

  <input type="submit" id="form-submit" class="form-section-submit" name="submit" title="Submit" value="Email Admissions" />

  <div id="output" class="form-section-submit">
    <div id="loading"></div>
  </div>

  <input type="hidden" id="city" name="city" value="" />
</form>

<?php if (!$hide_form_call_button): ?>
<div id="call-form">
  <a id="form-call" class="form-section-call phone-btn" href="tel:+1-800-637-7387"><span>Call Admissions Now<br>800-637-7387</span></a>
</div>
<!--
<form id="call-form" method="get" action="tel://1-800-637-7387">
  <input type="submit" id="form-call" class="form-section-call" name="call" title="Call" value="Call Admissions Now&#x00A 800-637-7387 " />
</form>
-->
<?php endif; ?>

<div id="privacyterms">
  <a href="<?= $incdir ?>policies/#privacy">Privacy Policy</a> <span class="bold">|</span> <a href="<?= $incdir ?>policies/#terms">Terms and Conditions</a>
</div>

</div>

<script>window.jQuery || document.write('<script src="<?= $incdir ?>js/vendor/jquery-1.11.3.min.js"><\/script>');</script>

<script src="<?= $incdir ?>/js/contactform.js"></script>

<!-- for conversion tracking code -->
<script src="<?= $incdir ?>/js/frlib2.js"></script>

<script>  
/* <![CDATA[ */    

var formid = '#contact-form';

var currently_submitting = false;

$(document).ready(function() {
  var programid = '#form-program';

  $(programid).change(function() {
    var emtclass = '.form-section-emt';
    var emtid = '#form-emt';

    if ($(this).val() == 'Paramedic') {
      $(emtclass).show().css("display", "inline-block");
      $(emtid).attr("required", "required");
    }
    else {
      $(emtclass).hide();
      $(emtid).removeAttr("required");
    }
  });
  $(programid).trigger('change');
});

$(document).ready(function() {
  var form = $(formid);
  var output = $('#output');
  var loadingimgdiv = $('#loading');
  var loadingimgid = '#loadingimg';
  var submitid = '#form-submit';

  function displayOutput(htmlout) {
    $(loadingimgid).fadeOut(300, function() {
      $(this).remove(); // removes the loading image
      output.append(htmlout).slideDown(500);
    });
  }

  output.click(function() {
    output.slideUp(500);
  });

  form.submit(function(event) {
    event.preventDefault();

    if (currently_submitting) return;

    currently_submitting = true;

    output.show();
    //output.html('');

    loadingimgdiv.show();
    loadingimgdiv.html(
      '<img src="<?= $incdir ?>img/ajax-loader.gif" alt="Currently Loading" id="' +
      loadingimgid.slice(1) + '" style="margin: 0 auto;" />'
    );

    var formdata = $(this).serialize();

    $.ajax({
      type: "POST",
      url: "<?= $incdir ?>php/ajax.course_contact_emailer.php",
      data: formdata,
      dataType: 'json',

      // data.success: true/false
      // data.output: html to display
      success: function(data, textStatus, jqxhr) {

        currently_submitting = false;

        // jQuery docs say to do the following, but it errors because PHP's
        // json_encode() isn't quoting the names of 'name' : 'value' pairs
        //   data = $.parseJSON(data);
        // everything currently works fine without it

        // always fade/remove the loading image and display output
        displayOutput(data.output);

        // on success, disable further input and track conversions
        if (data.success) {
          $(submitid).slideUp(500, function() {
            $('input,select,textarea').not('#form-call').prop('disabled', true);
            $('label[for="' + submitid.slice(1) + '"]').hide();
            // in frlib2.js
            trackConversions();
          });
        }
      },

      error: function(jqxhr, textStatus, errorThrown) {

        currently_submitting = false;

        /*
        console.log(':: '+textStatus+"\n:: "+errorThrown+"\n:: ");
        console.log(jqxhr);
         */

        displayOutput(
          "<div class=\"error\">There was a problem sending your message. " +
          "Please try again later.</div>\n"
        );
      }
    });

  });
});

/* ]]> */
</script>  
</div>


