<?php
  $incdir = './';
  $title = 'Contact Fast Response';
  $page_header = 'Contact Fast Response';
  $description = '';
  $css = array('contact_form.css', 'contacts.css');
?>
<?php require_once($incdir . 'header.php'); ?>

<?php include_once($incdir . 'contact_form.php'); ?>


<hr class="form-separator" />

<div id="all_contacts">
	<h2>Contact Information</h2>
	<dl>

    <div class="border">
	  <dt>Front Desk<br />Continuing Education<br />General Inquiries</dt>
	  <dd><dl>
		  <dt>Hours</dt>
        <dd>Mon - Thu: 8 AM - 6 PM</dd>
        <dd>Fri: 8 AM - 5 PM</dd>
		  <dt>Phone</dt>
        <dd>1-510-849-4009</dd>
		  <dt>Fax</dt>
        <dd>1-866-290-2739</dd>
		  <dt>Email</dt>
        <dd><a href="mailto: info@fastresponse.org">info@fastresponse.org</a></dd>
		  <dt>Address</dt>
		    <dd>
		    Fast Response School of<br />
		    Health Care Education<br />
		    2075 Allston Way, Suite B<br />
		    Berkeley, CA 94704<br />
		    </dd>
    </dl></dd>
    </div>

    <div class="border">
	  <dt>Admissions<br />Career Courses<br />Postsecondary Education</dt>
	  <dd><dl>
		  <dt>Hours</dt>
        <dd>Mon - Thu: 8 AM - 7 PM</dd>
        <dd>Fri: 8 AM - 5 PM</dd>
        <dd>Sat: 9 AM - 5 PM</dd>
		  <dt>Phone</dt>
        <dd>1-510-809-3654</dd>
		  <dt>Toll Free</dt>
        <dd>1-800-637-7387</dd>
		  <dt>Fax</dt>
        <dd>1-866-572-3363</dd>
		  <dt>Email</dt>
        <dd><a href="mailto: admissions@fastresponse.org">admissions@fastresponse.org</a></dd>
	  </dl></dd>
    </div>

    <div class="border">
	  <dt>Departments</dt>
	  <dd><dl>
		  <dt>EMT</dt>
        <dd><a href="mailto: emt@fastresponse.org">emt@fastresponse.org</a></dd>
		  <dt>Phlebotomy</dt>
        <dd><a href="mailto: phlebotomy@fastresponse.org">phlebotomy@fastresponse.org</a></dd>
		  <dt>Pharmacy Technician</dt>
        <dd><a href="mailto: pharmacy@fastresponse.org">pharmacy@fastresponse.org</a></dd>
		  <dt>Medical Assisting</dt>
        <dd><a href="mailto: ma@fastresponse.org">ma@fastresponse.org</a></dd>
		  <dt>Sterile Processing</dt>
        <dd><a href="mailto: spt@fastresponse.org">spt@fastresponse.org</a></dd>
		  <dt>Paramedic</dt>
        <dd><a href="mailto: paramedic@fastresponse.org">paramedic@fastresponse.org</a></dd>
	  </dl></dd>
    </div>

    <div class="border">
	  <dt>Employment Inquiries</dt>
	  <dd><dl>
      <dt>Email</dt>
        <dd><a href="mailto: applications@fastresponse.org">applications@fastresponse.org</a></dd>
	  </dl></dd>
    </div>

	</dl>
</div>

<?php require_once($incdir . 'footer.php'); ?>
