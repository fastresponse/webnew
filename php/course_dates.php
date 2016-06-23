<?php

require_once('dbconn.php');

if (empty($handle)) $handle = db_connect();

function get_course_dates($handle, $course_code, $course_type = null) {

  $select_fields = array(
    'type',
    "DATE_FORMAT(thedate, '%M %D, %Y') as showdate",
    'status',
  );

  $table = 'start_dates';

  $prev_where = array(
    'course = :course',
    'thedate < CURDATE()'
  );
  $next_where = array(
    'course = :course',
    'thedate >= CURDATE()'
  );

  $prev_sort = 'thedate DESC';
  $next_sort = 'thedate ASC';

  $prev_limit = 1;
  $next_limit = 5;

  $args = array(
    ':course' => $course_code
  );

  if ($course_type) {
    $prev_where[] = 'type = :type';
    $next_where[] = 'type = :type';
    $prev_limit = 1;
    $next_limit = 5;
    $args[':type'] = $course_type;
  }

  $prev = basic_query($handle,
    $select_fields,
    $table,
    $prev_where,
    $prev_sort,
    $prev_limit,
    $args
  );

  if ($prev === false) {
    $prev = array();
  }
  else {
    if ($prev_limit == 1) {
      $prev = array( $prev );
    }
    else {
      $prev = array_reverse($prev);
    }
  }

  $next = basic_query($handle,
    $select_fields,
    $table,
    $next_where,
    $next_sort,
    $next_limit,
    $args
  );

  if ($next === false) {
    $next = array();
  }

  $all = array_merge($prev, $next);

  return format_course_dates($all);
}

function get_next_course_date($handle, $course_code, $course_type = null) {

  $select_fields = array(
    'type',
    "DATE_FORMAT(thedate, '%M %D, %Y') as showdate",
    'status',
  );

  $table = 'start_dates';

  $next_where = array(
    'course = :course',
    'thedate >= CURDATE()'
  );

  $next_sort = 'thedate ASC';
  $next_limit = 1;

  $args = array(
    ':course' => $course_code
  );

  if ($course_type) {
    $next_where[] = 'type = :type';
    $args[':type'] = $course_type;
  }

  $next = basic_query($handle,
    $select_fields,
    $table,
    $next_where,
    $next_sort,
    $next_limit,
    $args
  );

  if ($next === false) {
    $next = array();
  }

  return format_course_dates(array($next))[0];
}

function format_course_dates($arr) {
  foreach ($arr as &$row) {
    if (!isset($row['showdate'])) continue;
    $row['status_display'] = ($row['status'] ? ' ('.$row['status'].')' : '');
    //$row['full_display'] = $row['showdate'] . ' - ' . $row['type'] . $row['status_display'];
    $row['full_display'] = "<span class='class-date'>{$row['showdate']}</span> - <span class='class-type-and-status'><span class='class-type'>{$row['type']}</span> <span class='class-status'>{$row['status_display']}</span></span>";
    $row['date_display'] = $row['showdate'] . $row['status_display'];
  }
  return $arr;
}

?>
