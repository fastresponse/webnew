<?php

require_once('dbconn.php');
if (empty($handle)) $handle = db_connect();

function get_drug_screen_dates($handle, $limit = 5) {

  $select_fields = array(
    "DATE_FORMAT(date, '%a %M %D') as showdate",
    "TIME_FORMAT(time_start, '%l:%i %p') as showstarttime",
    "TIME_FORMAT(time_end, '%l:%i %p') as showendtime",
    'status',
  );

  $table = 'drug_screen_dates';

  $where = array(
    'date >= CURDATE()'
  );

  $sort = 'date ASC';

  if ($limit < 1) {
    $limit = 1;
  }

  $args = array();

  $data = basic_query($handle,
    $select_fields,
    $table,
    $where,
    $sort,
    $limit,
    $args
  );

  if ($limit == 1) {
    $data = array($data);
  }

  return format_drug_screen_dates($data);
}

function get_next_drug_screen_date($handle) {
  $next = get_drug_screen_dates($handle, 1);
  if (!$next || !count($next)) return null;
  return $next[0];
}

function format_drug_screen_dates($arr) {
  foreach ($arr as &$row) {
    if (!isset($row['showdate'])) continue;
    $row['status_display'] = ($row['status'] ? ' ('.$row['status'].')' : '');
    $row['date_display'] = "<span class='nowrap'>{$row['showdate']}</span>";
    $row['time_display'] = "<span class='nowrap'>{$row['showstarttime']} - {$row['showendtime']}</span>";
    $row['date_time_display'] = "{$row['date_display']}, {$row['time_display']}";
    $row['date_time_status_display'] = "{$row['date_time_display']} {$row['status_display']}";
    $row['full_display'] = $row['date_time_display'];
  }
  return $arr;
}

?>
