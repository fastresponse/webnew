<?php

require_once('dbconn.php');

class CourseDateList {

  const DEF_PREV_LIMIT = 1;
  const DEF_NEXT_LIMIT = 5;

  private $handle = null;
  private $course_code = null;
  private $course_type = null;

  private $select = null;
  private $table = null;
  private $prev_where = null;
  private $next_where = null;
  private $prev_sort = null;
  private $next_sort = null;
  private $prev_limit = null;
  private $next_limit = null;

  public function __construct(
    $handle = null, $course_code = null, $course_type = null,
    $next_limit = null, $prev_limit = null
  ) {

    $this->set_default_values();

    if (!empty($handle)) $this->handle = $handle;
    else $this->handle = db_connect();

    $this->course_code = $course_code;
    $this->course_type = $course_type;
    $this->next_limit = $next_limit;
    $this->prev_limit = $prev_limit;
  }

  public function set_default_values() {
    $this->select = array(
      'type',
      "DATE_FORMAT(thedate, '%M %D, %Y') as showdate",
      'status',
    );
    $this->table = 'start_dates';
    $this->prev_where = array(
      'course = :course',
      'thedate < CURDATE()'
    );
    $this->next_where = array(
      'course = :course',
      'thedate >= CURDATE()'
    );
    $this->prev_sort = 'thedate DESC';
    $this->next_sort = 'thedate ASC';
  }

  public function set_course($course_code, $course_type = null) {
    $this->course_code = $course_code;
    if (!empty($course_type)) $this->course_type = $course_type;
  }

  public function set_limits($prev_limit, $next_limit) {
    if (is_numeric($prev_limit) && $prev_limit >= 0) {
      $this->prev_limit = $prev_limit;
    }
    if (is_numeric($next_limit) && $next_limit >= 0) {
      $this->next_limit = $next_limit;
    }
  }

  public function get_course_dates() {
    $prev_limit = ($this->prev_limit || self::DEF_PREV_LIMIT);
    $next_limit = ($this->next_limit || self::DEF_NEXT_LIMIT);

    $prev_where = $this->prev_where;
    $next_where = $this->next_where;

    $args = array(
      ':course' => $this->course_code
    );

    if ($this->course_type) {
      $prev_where[] = 'type = :type';
      $next_where[] = 'type = :type';
      $args[':type'] = $course_type;
    }

    $prev = array();
    if ($prev_limit > 0) {
      $prev = basic_query($this->handle,
        $this->select,
        $this->table,
        $prev_where,
        $this->prev_sort,
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
    }

    $next = array();
    if ($next_limit > 0) {
      $next = basic_query($this->handle,
        $this->select,
        $this->table,
        $next_where,
        $this->next_sort,
        $next_limit,
        $args
      );

      if ($next === false) {
        $next = array();
      }
    }

    $all = array_merge($prev, $next);

    return $this->format_course_dates($all);
  }

  public function get_next_course_date() {
    $next_limit = 1;
    $next_where = $this->next_where;

    $args = array(
      ':course' => $this->course_code
    );

    if ($this->course_type) {
      $next_where[] = 'type = :type';
      $args[':type'] = $this->course_type;
    }

    $next = basic_query($this->handle,
      $this->select,
      $this->table,
      $next_where,
      $this->next_sort,
      $next_limit,
      $args
    );

    if ($next === false) {
      $next = array();
    }

    return $this->format_course_dates(array($next))[0];
  }

  private function format_course_dates($rows) {
    foreach ($rows as &$row) {
      if (empty($row['showdate'])) continue;

      $row['status_display'] = ($row['status'] ? ' ('.$row['status'].')' : '');

      $row['full_display'] = "<span class='class-date'>{$row['showdate']}</span> - <span class='class-type-and-status'><span class='class-type'>{$row['type']}</span> <span class='class-status'>{$row['status_display']}</span></span>";

      $row['date_display'] = $row['showdate'] . $row['status_display'];
    }
    return $rows;
  }

}

?>
