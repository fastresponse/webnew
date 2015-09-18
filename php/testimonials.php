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


function testimonials($handle, $categories, $limit = 1) {
  $rows = testimonial_query($handle, $categories);
  shuffle($rows);
  $rows = array_slice($rows, 0, $limit);

  foreach ($rows as $row) {
    $row['quote'] = html_entity_decode($row['quote']);
    $classes = 'testimonial clearfix ' . str_replace(',' , ' ' , $row['categories']);

    $out = <<<END
<div class="$classes">
  <img src="{$row['image']}" alt="" />
  <div class="source">
    <span class="name">{$row['name']}</span>
END;

    if (isset($row['title']) && !empty($row['title'])) {
      $out .= <<<END
    <span class="title">{$row['title']}</span>
END;
    }

    if (isset($row['date']) && !empty($row['date'])) {
      $out .= <<<END
    <span class="date">{$row['date']}</span>
END;
    }
    $out .= <<<END
  </div>
  <div class="quote">{$row['quote']}</div>
</div>
END;

    echo $out;
  }
}

?>

<!--
<script type="text/javascript">
  jQuery('.testimonial.video').magnificPopup();
</script>
-->
