<?php 
$dir = $incdir;
if (isset($landing_pages) && $landing_pages)
  $dir .= 'get-info/';
else
  $dir .= 'courses/';
?>

<article id="career_courses" class="collapsible-mobile-start collapsible-tablet">
  <header class="stay-open"><h1 class="trigger">Career Courses</h1></header>
  <section>
    <h3><a href="<?= $dir ?>emt/">Emergency Medical Technician</a></h3>
    <ul>
      <li>Work in an ambulance, fire department, or hospital emergency department</li>
      <li>Full-time: 5 weeks, Part-time: 9 weeks</li>
      <li><span class="testscore">93%</span> student success rate on national exam</li>
    </ul>
  </section>
  <section>
    <h3><a href="<?= $dir ?>cpt/">Certified Phlebotomy Technician</a></h3>
    <ul>
      <li>Work in hospitals and laboratories</li>
      <li>Full-time: 2 weeks, Part-time: 4 weeks</li>
      <li><span class="testscore">89%</span> student success rate on national exam</li>
    </ul>
  </section>
  <section>
    <h3><a href="<?= $dir ?>phm/">Pharmacy Technician</a></h3>
    <ul>
      <li>Work in retail and hospital pharmacies</li>
      <li>13 weeks of instruction</li>
    </ul>
  </section>
  <section>
    <h3><a href="<?= $dir ?>cma/">Clinical Medical Assistant</a></h3>
    <ul>
      <li>Work in a variety of hospital and laboratory settings</li>
      <li>12 weeks of instruction</li>
      <li>Phlebotomy included</li>
      <li>Day and evening classes available</li>
    </ul>
  </section>
  <section>
    <h3><a href="<?= $dir ?>paramedic/">Paramedic</a></h3>
    <ul>
      <li>Work in an ambulance, fire department, or hospital emergency department</li>
      <li>7 months of instruction</li>
      <li>Guaranteed internship</li>
    </ul>
  </section>
  <section>
    <h3><a href="<?= $dir ?>spt/">Sterile Processing Technician</a></h3>
    <ul>
      <li>Work in hospitals and laboratories</li>
      <li>10 weeks of instruction</li>
    </ul>
  </section>
</article>
