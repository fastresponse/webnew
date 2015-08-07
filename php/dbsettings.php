<?php

function dbsettings($table) {
  $local_testing = 1;

  if ($local_testing) {
	  $host = 'localhost';
	  $user = 'root';
	  $pass = 'F4stR3sponse';
	  $dbname = 'webdata';
  }
  else {
	  $host = 'sql5c40a.carrierzone.com';
	  $user = 'fstrspnssi400738';
	  $pass = 'F4stR3sponse';
	  $dbname = 'webdata_' . $user;
  }

  return array($local_testing, $host, $user, $pass, $dbname);
}

?>
