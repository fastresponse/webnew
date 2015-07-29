<?php
  $incdir = './';
  $title = 'Contact Fast Response';
  $page_header = 'Contact Fast Response';
  $description = '';
  $css = array('contact_form.css', 'contacts.css');
?>
<?php require_once($incdir . 'header.php'); ?>

<?php include_once($incdir . 'contact_form.php'); ?>

<div id="all_contacts">
	<div>Contact Information</div>
	<dl>

	  <dt>Front Desk<br />Continuing Education<br />General Inquiries</dt>
	  <dd><dl>
		  <dt>Hours:</dt> <dd>9:00 AM - 5:00 PM, Monday - Friday</dd> <br />
		  <dt>Phone:</dt> <dd>1-510-849-4009</dd> <br />
		  <dt>Fax:</dt> <dd>1-866-290-2739</dd> <br />
		  <dt>Email:</dt> <dd><a href="mailto: info@fastresponse.org">info@fastresponse.org</a></dd> <br />
		  <dt>Address:</dt> <br />
		  <!-- this needs to be block so the margin applies to every line -->
		  <dd style="display: block; margin-left: 0.5em;">
		  Fast Response School of<br />
		  Health Care Education<br />
		  2075 Allston Way, Suite B<br />
		  Berkeley, CA 94704<br />
		  </dd>
    </dl></dd>

	  <dt>Admissions<br />Career Courses<br />Postsecondary Education</dt>
	  <dd><dl>
		  <dt>Hours:</dt> <dd>9:00 AM - 5:00 PM, Monday - Friday</dd> <br />
		  <dt>Phone:</dt> <dd>1-510-809-3654</dd> <br />
		  <dt>Toll Free:</dt> <dd>1-800-637-7387</dd> <br />
		  <dt>Fax:</dt> <dd>1-866-572-3363</dd> <br />
		  <dt>Email:</dt> <dd><a href="mailto: admissions@fastresponse.org">admissions@fastresponse.org</a></dd> <br />
	  </dl></dd>

	  <dt>EMT Program</dt>
	  <dd><dl>
		  <dt>Email:</dt> <dd><a href="mailto: emt@fastresponse.org">emt@fastresponse.org</a></dd> <br />
	  </dl></dd>

	  <dt>Phlebotomy Program</dt>
	  <dd><dl>
		  <dt>Email:</dt> <dd><a href="mailto: phlebotomy@fastresponse.org">phlebotomy@fastresponse.org</a></dd> <br />
	  </dl></dd>

	  <dt>Pharmacy Technician Program</dt>
	  <dd><dl>
		  <dt>Email:</dt> <dd><a href="mailto: pharmacy@fastresponse.org">pharmacy@fastresponse.org</a></dd> <br />
	  </dl></dd>

	  <dt>Medical Assistant Program</dt>
	  <dd><dl>
		  <dt>Email:</dt> <dd><a href="mailto: ma@fastresponse.org">ma@fastresponse.org</a></dd> <br />
	  </dl></dd>

	  <dt>Sterile Processing Program</dt>
	  <dd><dl>
		  <dt>Email:</dt> <dd><a href="mailto: spt@fastresponse.org">spt@fastresponse.org</a></dd> <br />
	  </dl></dd>

	  <dt>Paramedic Program</dt>
	  <dd><dl>
		  <dt>Email:</dt> <dd><a href="mailto: paramedic@fastresponse.org">paramedic@fastresponse.org</a></dd> <br />
	  </dl></dd>

	  <dt>Employment Inquiries</dt>
	  <dd><dl>
<dt>Email:</dt> <dd><a href="mailto: applications@fastresponse.org">applications@fastresponse.org</a></dd> <br />
	  </dl></dd>

	</dl>
</div>

<?php require_once($incdir . 'footer.php'); ?>
