<?php
  $incdir = '../';
  $title = 'Student Resources';
  $page_header = '';
  $description = '';
  $css = array('students.css');
?>
<?php require_once($incdir . 'include/header.php'); ?>

<div id="sidebar-primary">
  <aside id="menu">
    <header><h3>Student Resources Menu</h3></header>
    <ul class="menu-links" data-default="#admissions">
      <li class="menu-link" data-for="#admissions">Admissions</li>
      <li class="menu-link" data-for="#career_services">Student Career Services</li>
      <hr />
      <li class="menu-link" data-for="#emt">Emergency Medical Technician</li>
      <li class="menu-link" data-for="#phlebotomy">Phelbotomy</li>
      <li class="menu-link" data-for="#medical_assistant">Medical Assistant</li>
      <li class="menu-link" data-for="#pharm_tech">Pharmacy Technician</li>
      <li class="menu-link" data-for="#sterile_processing">Sterile Processing</li>
      <!--<li class="menu-link" data-for="#paramedic">Paramedic</li>-->
    </ul>
  </aside>

  <aside id="slideshow">
    <img src="/slideshow/frontpage/slide01.jpg" alt="" />
  </aside>

  <aside id="contact-info">
    <header><h3>Contact Us</h3></header>
    <div id="phone">
      <form action="tel: +15108494009" method="get" class="contact-btn">
        <input type="submit" class="phone-btn" value="510-849-4009" />
      </form>
    </div>
    <div id="email">
      <form action="<?= $incdir ?>contact/" method="get" class="contact-btn">
        <input type="submit" class="email-btn" value="Send an Email" />
      </form>
    </div>
  </aside>
</div>

<section id="content">

  <header class="hide-desktop hide-desktop-large"><h1>Student Resources</h1></header>

  <article id="admissions" class="collapsible-mobile collapsible-tablet">
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

  <article id="career_services" class="collapsible-mobile-start collapsible-tablet-start">
    <header class="stay-open"><h1 class="trigger">Student Career Services</h1></header>
    <section>
      <dl>
        <dt></dt>
      </dl>
    </section>
  </article>

  <hr class="hide-desktop hide-desktop-large" />

  <article id="emt" class="collapsible-mobile-start collapsible-tablet-start">
    <header class="stay-open"><h1 class="trigger">Emergency Medical Technician</h1></header>
    <section class="collapsible-mobile-start collapsible-tablet-start collapsible-desktop-start">
      <h3 class="trigger">Current Students</h3>
      <dl>
        <dt><a href="<?= $incdir ?>courses/emt/skills_videos.php">EMT Skills Videos</a></dt>

        <dt>Ambulance Driver Certificate Information</dt>
        <dd>
          <dl>
            <dt><a href="https://www.dmv.ca.gov/portal/dmv/?1dmy&urile=wcm:path:/dmv_content_en/dmv/dl/ambu_drvr_cert">CA DMV Ambulance Driver Certificate requirements</a></dt>
            <dd>This link describes all the steps needed to obtain a California Ambulance Driver Certificate.</dd>

            <dt><a href="https://www.dmv.ca.gov/portal/dmv/detail/forms/dl/dl51">Medical Examination Report DL-51</a></dt>
            <dd><a href="https://www.dmv.ca.gov/portal/wcm/connect/fa2a514f-130a-4935-adba-e55ec36e234a/dl51.pdf?MOD=AJPERES">Direct link to Form DL-51</a>.</dd>
            <dd>Medical evaluation form required to be filled out by an MD, DO, PA, NP, or DC. The examiner <strong>must be listed on the National Registry of Certified Medical Examiners</strong>.</dd>

            <dt>Changes to the Medical Examiner Certificate</dt>
            <dd>Effective January 1st, 2014, form DL-51A / Medical Examiner Certificate (the "Green Card") is obsolete. In lieu of this form, drivers must use the <a href="http://www.fmcsa.dot.gov/documents/safetyprograms/Medical-Examiners-Certificate.pdf">Federal Medical Examiner's Certificate</a>. You can bring in a printed copy, or the Medical Secretary at your physician's office may also have a copy. However, you should confirm that before your visit.</dd>
            <dd>If you already have a valid DL-51A Green Card, then that card is still valid until its expiration date.</dd>
            <dd><a href="http://apps.dmv.ca.gov/pubs/olin/14_olin/14olin02.pdf">This document</a> explains the changes.</dd>

            <dt>What we require for externships</dt>
            <dd>We do NOT require the DL-51 to be completed in order to schedule externships. However, <strong>we highly recommend it</strong>, especially for students who will be seeking ambulance work.</dd>
            <dd>What is required is a note from an MD, DO, PA, NP, DC, or RN stating that they have examined you and have found you physically fit for work in an emergency room in the capacity of an ED Technician, and that your vision is not seriously impaired (correctable to at least 20/40 vision and able to differentiate between standard traffic signal colors).</dd>
            <dd>A photocopy of the completed DL-51, DL-51A ("Green Card"), the Federal Medical Examiner's Certificate, or a handwritten or typed note signed by the above medical professionals are all acceptable and sufficient to meet our externship requirements.</dd>
          </dl>
        </dd>
        </dt>
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
  </article>

  <article id="phlebotomy" class="collapsible-mobile-start collapsible-tablet-start">
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
  </article>

  <article id="medical_assistant" class="collapsible-mobile-start collapsible-tablet-start">
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
  </article>

  <article id="pharm_tech" class="collapsible-mobile-start collapsible-tablet-start">
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
  </article>

  <article id="sterile_processing" class="collapsible-mobile-start collapsible-tablet-start">
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
  </article>

  <!--
  <article id="paramedic" class="collapsible-mobile-start collapsible-tablet-start">
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
  </article>
  -->

</section>

<div id="bottom-bar">
</div>

<?php require_once($incdir . 'include/footer.php'); ?>

