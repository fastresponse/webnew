<?php
  $incdir = '../';
  $title = 'Student Resources';
  $page_header = '';
  $description = '';
  $css = array('students.css');
?>
<?php require_once($incdir . 'include/header.php'); ?>

<div id="sidebar-primary">
  <aside id="slideshow">
    <img src="/slideshow/frontpage/slide01.jpg" alt="" />
  </aside>

  <aside id="contact-info">
    <header><h3>Contact Us</h3></header>
    <div id="phone">
      <form action="tel: +15108494009" method="get" class="contact-btn">
        <input type="submit" class="phone-btn" name="btn" value="510-849-4009" />
      </form>
    </div>
    <div id="email">
      <form action="<?= $incdir ?>contact/" method="get" class="contact-btn">
        <input type="submit" class="email-btn" name="btn" value="Send an Email" />
      </form>
    </div>
  </aside>
</div>

<section id="content">

  <header><h1>Student Resources</h1></header>

  <article id="admissions" class="collapsible-mobile-start collapsible-tablet-start collapsible-desktop-start">
    <header class="stay-open"><h1 class="trigger">Admissions</h1></header>
    <section>
      <dl>
        <dt><a href="/pdf/admissions/Immunization Form - All Classes.pdf" target="_blank">Immunization Form - General</a></dt>
        <dd>Checklist for required immunizations. To be filled out by a licensed nurse or physician.</dd>

        <dt><a href="/pdf/admissions/Immunization Form - EMT.pdf" target="_blank">Immunization Form - EMT</a></dt>
        <dd>Checklist for required immunizations. To be filled out by a licensed nurse or physician.</dd>

        <dt><a href="/pdf/admissions/Immunization Requirements - Paramedic.pdf" target="_blank">Immunization Form - Paramedic</a></dt>
        <dd>Checklist for required immunizations. To be filled out by a licensed nurse or physician.</dd>

        <dt><a href="/pdf/admissions/Drug Screen Form.pdf" target="_blank">Drug Screen Form</a></dt>
        <dd>Used to sign up for mandatory drug screening.</dd>

        <dt><a href="/pdf/admissions/Registrar Request Form.pdf" target="_blank">Registrar Request Form</a></dt>
        <dd>Used for requesting copies of transcripts, immunization records, background checks, and other student information.</dd>

        <dt><a href="/pdf/admissions/FERPA Form.pdf" target="_blank">FERPA Student Information Release Form</a></dt>
        <dd>Used to send a copy of your student information to a third party. Commonly used for academic and immunization records.</dd>

        <dt><a href="/pdf/admissions/Declination Form for Hep-B.pdf">Declination Form for Hepatitis-B</a></dt>
        <dd>For students who decline to be vaccinated against hepatitis-B.</dd>

        <dt><a href="/pdf/admissions/Declination Form for Seasonal Influenza Vaccine.pdf">Declination Form for Seasonal Influenza Vaccine</a></dt>
        <dd>For students who decline to be vaccinated against seasonal influenza.</dd>
      </dl>
    </section>
  </article>

  <article id="emt" class="collapsible-mobile-start collapsible-tablet-start collapsible-desktop-start">
    <header class="stay-open"><h1 class="trigger">Emergency Medical Technician</h1></header>
    <section>
      <h3>Current Students</h3>
      <dl>
        <dt><a href="#">EMT Skills Videos</a></dt>
      </dl>
    </section>
    <section class="collapsible-mobile-start collapsible-tablet-start collapsible-desktop-start">
      <h3 class="trigger">Externship</h3>
      <dl>
        <dt><a href="/pdf/externship/Externship_Requirements_Checklist.pdf" target="_blank">Externship Requirements Checklist</a></dt>

        <dt><a href="/pdf/externship/emt/EMT Externship Expectations.pdf" target="_blank">Externship Expectations</a></dt>

        <dt><a href="/pdf/externship/emt/Clinical_and_Field_Patient_Contact_Log.pdf" target="_blank">Clinical and Field Patient Contact Log</a></dt>
        <dd>Minimum of 10 logged patient contacts. This form may be used for both clinical and field sites.</dd>

        <dt><a href="/pdf/externship/emt/Evaluation_Form_of_Clinical_and_Field_Experience.pdf" target="_blank">Evaluation Form for Clinical and Field Experience</a></dt>
        <dd>Your evaluation of your clinical and field externship experience.</dd>

        <dt><a href="/pdf/externship/emt/Evaluation_Form_of_Student.pdf" target="_blank">Evaluation Form of Student</a></dt>
        <dd>Your supervisor must fill out this evaluation form at each site of your externship <span style="white-space: nowrap;">(minimum 2;</span> one for clinical site and one for ambulance ride-along).</dd>

        <dt><a href="/pdf/externship/emt/Externship_Time_Log.pdf" target="_blank">Externship Time Log</a></dt>
        <dd>Log all hours during externship. You must have your supervisor for each site sign off on this sheet.</dd>

        <dt><a href="/pdf/externship/emt/Patient_Care_Report.pdf" target="_blank">Patient Care Report</a></dt>
        <dd>You must have completed 4 PCRs minimum, including 2 from your clinical externship and 2 from your ambulance ride-along. It is highly recommended that you fill out additional PCRs, however, in the event that one of your reports is not accepted (incomplete, illegible, etc.).</dd>

        <dt><a href="/pdf/externship/emt/Ride_Along_Student_Agreement.pdf" target="_blank">Ride Along Student Agreement</a></dt>
        <dd>You must fill out a student agreement for each ride-along externship you attend.</dd>
      </dl>
    </section>
    <section>
      <h3>Graduates</h3>
      <dl>
        <dt><a href="#">Career Resources from Fast Response</a></dt>
      </dl>
    </section>
  </article>

  <article id="phlebotomy" class="collapsible-mobile-start collapsible-tablet-start collapsible-desktop-start">
    <header class="stay-open"><h1 class="trigger">Phlebotomy</h1></header>
    <section>
      <h3>Current Students</h3>
      <dl>
        <dt></dt>
      </dl>
    </section>
    <section>
      <h3>Externship</h3>
      <dl>
        <dt><a href="/pdf/externship/Externship_Requirements_Checklist.pdf" target="_blank">Externship Requirements Checklist</a></dt>
      </dl>
    </section>
    <section>
      <h3>Graduates</h3>
      <dl>
        <dt></dt>
      </dl>
    </section>
  </article>

  <article id="medical_assistant" class="collapsible-mobile-start collapsible-tablet-start collapsible-desktop-start">
    <header class="stay-open"><h1 class="trigger">Medical Assistant</h1></header>
    <section>
      <h3>Current Students</h3>
      <dl>
        <dt></dt>
      </dl>
    </section>
    <section>
      <h3>Externship</h3>
      <dl>
        <dt><a href="/pdf/externship/Externship_Requirements_Checklist.pdf" target="_blank">Externship Requirements Checklist</a></dt>
      </dl>
    </section>
    <section>
      <h3>Graduates</h3>
      <dl>
        <dt></dt>
      </dl>
    </section>
  </article>

  <article id="pharm_tech" class="collapsible-mobile-start collapsible-tablet-start collapsible-desktop-start">
    <header class="stay-open"><h1 class="trigger">Pharmacy Technician</h1></header>
    <section>
      <h3>Current Students</h3>
      <dl>
        <dt></dt>
      </dl>
    </section>
    <section>
      <h3>Externship</h3>
      <dl>
        <dt><a href="/pdf/externship/Externship_Requirements_Checklist.pdf" target="_blank">Externship Requirements Checklist</a></dt>
      </dl>
    </section>
    <section>
      <h3>Graduates</h3>
      <dl>
        <dt></dt>
      </dl>
    </section>
  </article>

  <article id="sterile_processing" class="collapsible-mobile-start collapsible-tablet-start collapsible-desktop-start">
    <header class="stay-open"><h1 class="trigger">Sterile Processing</h1></header>
    <section>
      <h3>Current Students</h3>
      <dl>
        <dt></dt>
      </dl>
    </section>
    <section>
      <h3>Externship</h3>
      <dl>
        <dt><a href="/pdf/externship/Externship_Requirements_Checklist.pdf" target="_blank">Externship Requirements Checklist</a></dt>
      </dl>
    </section>
    <section>
      <h3>Graduates</h3>
      <dl>
        <dt></dt>
      </dl>
    </section>
  </article>

  <article id="paramedic" class="collapsible-mobile-start collapsible-tablet-start collapsible-desktop-start">
    <header class="stay-open"><h1 class="trigger">Paramedic</h1></header>
    <section>
      <h3>Current Students</h3>
      <dl>
        <dt></dt>
      </dl>
    </section>
    <section>
      <h3>Externship</h3>
      <dl>
        <dt></dt>
      </dl>
    </section>
    <section>
      <h3>Graduates</h3>
      <dl>
        <dt></dt>
      </dl>
    </section>
  </article>

</section>

<div id="bottom-bar">
</div>

<?php require_once($incdir . 'include/footer.php'); ?>

