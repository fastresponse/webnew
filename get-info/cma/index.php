<?php
$landing_page = true;

$canonical = 'http://www.fastresponse.org/get-info/cma/';

$config = <<<'HTML'
testimonialOpts['desktop']['testimonial-sidebar-1']['load'] = 'none';
testimonialOpts['desktop']['testimonial-interstitial-1']['categories'] = [course_code];
HTML;

?>
<?php require_once('../../courses/cma/index.php'); ?>
