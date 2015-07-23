<?php
  if (!isset($course_name)) $course_name = '';
  if (!isset($zip_radius)) $zip_radius = '50';

  $programs = array(
    'EMT',
    'Phlebotomy',
    'Pharmacy Technician',
    'Medical Assistant',
    'Sterile Processing',
    'Paramedic',
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
<a name="contact-us-link"></a>
<h2>Contact Fast Response</h2>
<form id="contact-form" action="/php/ajax/ajax.course_contact_emailer.php" method="post" onsubmit="return validate(this);">

  <label for="form-program" class="form-section-program">Program</label>
  <select id="form-program" class="form-section-program" name="program" required="required">
    <option value="">&ndash; Select a program &ndash;</option>
    <?= array_to_option_html($programs, $course_name); ?>
  </select>

  <label for="form-name" class="form-section-name">Name</label>
  <input type="text" id="form-name" class="form-section-name" name="name" required="required" />

  <label for="form-email" class="form-section-email">Email</label>
  <input type="email" id="form-email" class="form-section-email" name="email" required="required" />

  <label for="form-phone" class="form-section-phone">Phone</label>
  <input type="tel" id="form-phone" class="form-section-phone" name="phone" required="required" />

  <label for="form-zip" class="form-section-zip">Zip Code</label>
  <input type="text" id="form-zip" class="form-section-zip" name="zip" onkeyup="return zipValidate(this, '#zipcheck', <?= $zip_radius ?>);" />
  <div id="zipcheck" class="form-section-zip"></div>

  <label for="form-source" class="form-section-source">Where did you first hear about us?</label>
  <div class="filler form-section-source"></div>
  <select id="form-source" class="form-section-source" name="source" required="required">
    <option value="">&ndash; Select one &ndash;</option>
    <?= array_to_option_html($sources, get_referring_source()); ?>
  </select>

  <label for="form-comments" class="form-section-comments">Questions and Comments</label>
  <div class="filler form-section-comments"></div>
  <textarea cols="28" rows="3" id="form-comments" class="form-section-comments" name="comments" style="vertical-align: top;"></textarea>

<?php if ($course_name == 'Paramedic'): ?>
  <div class="filler form-section-emt"></div>
  <input type="checkbox" id="form-emt" class="form-section-emt" name="emt" value="I am currently an EMT." required="required" />
  <label for="form-emt" class="form-section-emt">I am currently an EMT.</label>
<?php endif; ?>

  <label id="loading" class="form-section-submit"></label>
  <div id="output" class="form-section-submit"></div>
  <input type="submit" id="form-submit" class="form-section-submit" name="submit" title="Submit" value="Email Our Admissions Department" />

  <input type="hidden" id="city" name="city" value="" />
</form>

<form style="display: inline;" method="get" action="tel://1-800-637-7387">
  <button id="form-call" class="form-section-call" type="button">Talk to an Admissions Representative</button>
</form>

<hr id="form-separator" />

<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>');</script>

<script src="/js/contactform.js"></script>

<!-- for conversion tracking code -->
<script src="/js/frlib2.js"></script>

<script>  
/* <![CDATA[ */    

var formid = '#contact-form';

$(document).ready(function() {
  var form = $(formid);
  var output = $('#output');
  var loadingimgdiv = $('#loading');
  var loadingimgid = '#loadingimg';
  var submitid = '#form-submit';

  function displayOutput(htmlout) {
	  $(loadingimgid).fadeOut(300, function() {
	    $(this).remove(); // removes the loading image
		  output.html(htmlout).slideDown(500);
	  });
  }

  output.click(function() {
    output.slideUp(500);
  });

  form.submit(function(event) {
    event.preventDefault();

    output.show();
    output.html('');

    loadingimgdiv.show();
    loadingimgdiv.append(
      '<img src="/images/ajax-loader.gif" alt="Currently Loading" id="' +
      loadingimgid.slice(1) + '" style="margin: 0 auto;" />'
    );

    var formdata = $(this).serialize();

    $.ajax({
	    type: "POST",
	    url: "/php/ajax/ajax.course_contact_emailer.php",
	    data: formdata,
      dataType: 'json',

      // data.success: true/false
      // data.output: html to display
	    success: function(data, textStatus, jqxhr) {

        // jQuery docs say to do the following, but it errors because PHP's
        // json_encode() isn't quoting the names of 'name' : 'value' pairs
        //   data = $.parseJSON(data);
        // everything currently works fine without it

        // always fade/remove the loading image and display output
        displayOutput(data.output);

        // on success, disable further input and track conversions
        if (data.success) {
          $(submitid).slideUp(500, function() {
	          $('input,select,textarea').prop('disabled', true);
            $('label[for="' + submitid.slice(1) + '"]').hide();
            // in frlib2.js
            trackConversions();
          });
        }
	    },

      error: function(jqxhr, textStatus, errorThrown) {
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
