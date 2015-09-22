<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/php/dbconn.php');
if (empty($handle))
  $handle = db_connect();


// create an array of bitmask values for reference later, i.e.:
// 'EMT' => 1,
// 'CPT' => 2,
// 'CMA' => 4,
// 'PHM' => 8
$category_values = null;
function prepare_testimonial_categories($handle, &$category_values) {
  $set_values = query_set_values($handle, 'categories', 'testimonials');
  $set_values = array_flip($set_values);
  $tmp_arr = array();
  foreach ($set_values as $key => $val) {
    $tmp_arr[$key] = (1 << $val);
  }
  $category_values = $tmp_arr;
}
prepare_testimonial_categories($handle, $category_values);

function testimonial_query($handle = null, $categories = null) {
  if (!isset($handle)) return null;
  if (!isset($categories) || !count($categories)) return null;

  global $category_values;

  // calculate total bit value of the wanted categories
  $categories = array_unique($categories);
  $category_num = 0;
  foreach ($categories as $cat) {
    $category_num += $category_values[$cat];
  }

  $results = basic_query($handle,
    array('name', 'title', 'DATE_FORMAT(date, "%M %D, %Y") AS date',
          'quote', 'image', 'video', 'categories'), # select
    'testimonials', # from
    array('(categories & :catnuma) = :catnumb'), # where
    null, # order by
    0, # limit
    array(':catnuma' => $category_num, ':catnumb' => $category_num) # replacement parameters
  );

  return $results;
};


function format_testimonials($rows) {

  $classes = 'testimonial';

  foreach ($rows as &$row) {
    $row['quote'] = html_entity_decode($row['quote']);
    $rowclasses = $classes;
    if (isset($row['video']) && !empty($row['video'])) {
      $rowclasses .= ' video';
    }
    $rowclasses .= ' ' . str_replace(',' , ' ' , $row['categories']);
    $row['display_vertical'] = '';
    $row['display_horizontal'] = '';

    // -- begin: different classes for styling each orientation -- //
    $vert = <<<END
<div class="$rowclasses vertical">
END;
    $row['display_vertical'] .= $vert;

    $horiz = <<<END
<div class="$rowclasses horizontal">
END;
    $row['display_horizontal'] .= $horiz;

    // -- common: image -- //

    $both = <<<END
  <img src="{$row['image']}" alt="" />
END;
    $row['display_vertical'] .= $both;
    $row['display_horizontal'] .= $both;

    // -- horiz only: extra div around everything but the img -- //

    $horiz = <<<END
  <div class="body">
END;
    $row['display_horizontal'] .= $horiz;

    // -- common: start the div that holds source (name/title/date/etc) -- //

    $both = <<<END
  <div class="source">
    <span class="name">{$row['name']}</span>
END;
    $row['display_vertical'] .= $both;
    $row['display_horizontal'] .= $both;

    // -- common: conditionals: title and date -- //

    if (isset($row['title']) && !empty($row['title'])) {
      $both = <<<END
    <span class="title">{$row['title']}</span>
END;
      $row['display_vertical'] .= $both;
      $row['display_horizontal'] .= $both;
    }

    if (isset($row['date']) && !empty($row['date'])) {
      $both = <<<END
    <span class="date">{$row['date']}</span>
END;
      $row['display_vertical'] .= $both;
      $row['display_horizontal'] .= $both;
    }

    // -- common: close source div, add actual quote text -- //

    $both = <<<END
  </div>
  <div class="quote">{$row['quote']}</div>
END;
    $row['display_vertical'] .= $both;
    $row['display_horizontal'] .= $both;

    // -- horiz only: close the extra div -- //

    $horiz = <<<END
  </div>
END;
    $row['display_horizontal'] .= $horiz;

    // -- common: close the outside div and end -- //

    $both = <<<END
</div>
END;
    $row['display_vertical'] .= $both;
    $row['display_horizontal'] .= $both;

  }

  return $rows;
}

function get_testimonials($handle, $categories) {
  $rows = testimonial_query($handle, $categories);
  shuffle($rows);

  return format_testimonials($rows);
}

function display(&$arr, $num = null, $type = '') {
  if (!$num || $num == 'all' || $num < 1 || $num > count($arr))
    $num = count($arr);

  $display = 'display';
  if (strlen($type)) $display .= '_' . $type;

  for ($i = 0; $i < $num; $i++) {
    $tmp = array_shift($arr);
    echo $tmp[$display];
  }
}
?>

<!--
<script type="text/javascript">
  jQuery('.testimonial.video').magnificPopup();
</script>
-->
