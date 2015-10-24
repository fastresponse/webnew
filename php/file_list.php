<?php

function get_file_list($dir = null) {

  global $incdir, $course_code;

  if ($dir && !is_dir($dir)) {
    $dir = null;
  }

  if ($dir === null) {
    $trydirs = array(
      $incdir . 'img/' . strtolower($course_code || '') . '/',
    );
    foreach ($trydirs as $trydir) {
      if (is_dir($trydir)) {
        $dir = $trydir;
        break;
      }
    }
  }

  if ($dir === null) return array();

  $exclude = array('..', '.', 'Thumbs.db');

  $filelist = array_values(
    array_diff(
      scandir( realpath($dir), 0),
      $exclude
    )
  );

  $add_dir = function(&$val, $key, $dir) {
    $val = $dir . $val;
  };
  array_walk($filelist, $add_dir, $dir);

  return $filelist;
}

?>
