<?php
$landing_page = true;

$canonical = 'http://www.fastresponse.org/get-info/cpt/';

$config = <<<'HTML'
$FRvars.testimonialOpts['desktop']['testimonial-sidebar-1']['load'] = 'none';
$FRvars.testimonialOpts['desktop']['testimonial-interstitial-1']['categories'] = [$FRvars.coursecode];
HTML;

?>
<?php require_once('../../courses/cpt/index.php'); ?>
