<?php
  $incdir = '../';
  $title = 'Contact Fast Response';
  $page_header = 'Contact Fast Response';
  $description = '';
  $css = array('contact_form.css', 'contacts.css');
?>
<?php require_once($incdir . 'include/header.php'); ?>

<section id="contact_form">
<?php include_once('./contact_form.php'); ?>
</section>

<hr class="form-separator hide-desktop hide-desktop-large" />

<section id="contact_information">
	<h2>Contact Information</h2>
	<dl>

    <div id="frontdesk" class="border">
	  <dt>Front Desk<br />Continuing Education<br />General Inquiries</dt>
	  <dd><dl>
		  <dt>Hours</dt>
        <dd>Mon - Thu: 8 AM - 6 PM</dd>
        <dd>Fri: 8 AM - 5 PM</dd>
		  <dt>Phone</dt>
        <dd><a href="tel: +15108494009" class="nowrap">510-849-4009</a></dd>
		  <dt>Fax</dt>
        <dd>866-290-2739</dd>
		  <dt>Email</dt>
        <dd><a href="mailto: info@fastresponse.org">info@fastresponse.org</a></dd>
		  <dt>Address</dt>
		    <dd>
		      <span class="nowrap">Fast Response School of</span><br />
		      <span class="nowrap">Health Care Education</span><br />
		      <span class="nowrap">2075 Allston Way, Suite B</span><br />
		      <span class="nowrap">Berkeley, CA 94704</span><br />
		    </dd>
    </dl></dd>
    </div>

    <div id="admissions" class="border">
	  <dt>Admissions<br />Career Courses<br />Postsecondary Education</dt>
	  <dd><dl>
		  <dt>Hours</dt>
        <dd>Mon - Thu: 8 AM - 7 PM</dd>
        <dd>Fri: 8 AM - 5 PM</dd>
        <dd>Sat: 9 AM - 5 PM</dd>
		  <dt>Phone</dt>
        <dd><a href="tel: +15108093654" class="nowrap">510-809-3654</a></dd>
		  <dt>Toll Free</dt>
        <dd><a href="tel: +18006377387" class="nowrap">800-637-7387</a></dd>
		  <dt>Fax</dt>
        <dd>866-572-3363</dd>
		  <dt>Email</dt>
        <dd><a href="mailto: admissions@fastresponse.org">admissions@fastresponse.org</a></dd>
	  </dl></dd>
    </div>

    <div id="departments" class="border">
	  <dt>Departments</dt>
	  <dd><dl>
		  <div><dt>EMT</dt>
        <dd><a href="mailto: emt@fastresponse.org">emt@fastresponse.org</a></dd></div>
		  <div><dt>Phlebotomy</dt>
        <dd><a href="mailto: phlebotomy@fastresponse.org">phlebotomy@fastresponse.org</a></dd></div>
		  <div><dt>Paramedic</dt>
        <dd><a href="mailto: paramedic@fastresponse.org">paramedic@fastresponse.org</a></dd></div>
		  <div><dt>Pharmacy Technician</dt>
        <dd><a href="mailto: pharmacy@fastresponse.org">pharmacy@fastresponse.org</a></dd></div>
		  <div><dt>Medical Assisting</dt>
        <dd><a href="mailto: ma@fastresponse.org">ma@fastresponse.org</a></dd></div>
		  <div><dt>Sterile Processing</dt>
        <dd><a href="mailto: spt@fastresponse.org">spt@fastresponse.org</a></dd></div>
		  <div><dt>Continuing Education</dt>
        <dd><a href="mailto: ceu@fastresponse.org">ceu@fastresponse.org</a></dd></div>
	    <div><dt>Employment Inquiries</dt>
        <dd><a href="mailto: applications@fastresponse.org">applications@fastresponse.org</a></dd></div>
	  </dl></dd>
    </div>

	</dl>
</section>

<hr class="form-separator " />

<section id="location">
  <header><h2>Location and Directions</h2></header>

  <div id="map" class="border">
    <header><h4>Area Map</h4></header>
    <a target="_blank" href="https://www.google.com/maps/place/Fast+Response+School+of+Health+Care+Education,+2075+Allston+Way,+Berkeley,+CA+94704/">
      <img src="http://maps.googleapis.com/maps/api/staticmap?center=2075+Allston+Way,Suite+B,Berkeley,CA,94704&amp;zoom=14&amp;markers=color:red%7Clabel:F%7C2075+Allston+Way,Berkeley,CA&amp;size=300x210&amp;sensor=false" alt="Map of our area" data-width="300" data-height="210" />
    </a>
  </div>

  <div id="google_directions" class="border">
    <header><h4>Google Directions</h4></header>
    <form>
      <label>From:</label>
      <input type="text" placeholder="Starting address" />
      <br />
      <label>To:</label>
      <input type="text" value="2075 Allston Way, Suite B, Berkeley, CA 94704" />
      <input type="submit" value="Get directions from Google" />
    </form>
  </div>

  <div id="mapquest_directions" class="border">
    <header><h4>Mapquest Directions</h4></header>
    <form onSubmit="openMapquest();">
      <label>From:</label>
      <input type="text" placeholder="Starting address" onFocus="setText(this, 'entering');" onBlur="setText(this, 'done');" />
      <br />
      <label>To:</label>
      <input type="text" value="2075 Allston Way, Suite B, Berkeley, CA 94704" />
      <input type="submit" value="Get directions from Mapquest" />
    </form>
  </div>
</section>

<hr class="form-separator hide-desktop hide-desktop-large" />

<section id="commuter">
  <header><h2>Commuter Information</h2></header>

  <div id="transit" class="border collapsible-mobile-start collapsible-tablet-start">
    <header class="stay-open"><h4 class="trigger">Public Transit</h4></header>
    <ul>
      <li><strong>BART:</strong> Fast Response is located a quarter of a block from the <a href="http://www.bart.gov/stations/dbrk/index.aspx">Downtown Berkeley</a> BART station. This station is served by the Red and Orange lines, with trains arriving every 15 minutes or less through most of the day. Taking BART is the best option to avoid parking hassles!</li>
      <li><strong>AC Transit:</strong> The Alameda County Transit system has many buses that can bring you to Fast Response. Currently there are 14 lines that pass through Downtown Berkeley. <a href="http://www.actransit.org/maps/">Check their maps and schedules</a> for the following lines: 1, 1R, 7, 18, 25, 49, 51B, 52, 65, 67, 88, 800, 851, or F.</li>
      <li><strong>Amtrak:</strong> The <a href="http://www.amtrak.com/capitol-corridor-train">Capitol Corridor</a> route, which travels between Sparks, NV and San Jose, CA, makes a stop at the <a href="http://www.amtrak.com/servlet/ContentServer?c=am2Station&pagename=am%2Fam2Station%2FStation_Page&p=1237405732508&cid=1229726270736">Berkeley (BKY)</a> Amtrak station. From here, AC Transit route <a href="http://maps.google.com/maps?saddr=700+University+Avenue,+Berkeley,+CA&daddr=2075+Allston+Way,+Berkeley,+CA&hl=en&sll=37.269174,-119.306607&sspn=8.721303,14.040527&geocode=FX7PQQIdE9m1-ClrhgY63X6FgDGlDfIEekDRgg%3BFTDXQQIdclO2-CkbMfZInH6FgDHB1sg-vD-NEA&oq=2075+allston+way+&dirflg=r&ttype=now&noexp=0&noal=0&sort=def&mra=ls&t=m&z=14&start=0">51B</a> can bring you down to the school. Sacramento residents can expect a 2.5 hour commute.</li>
      <li style="margin-bottom: 0;"><strong>511:</strong> The <a href="http://www.511.org">511.org</a> website provides an excellent tool for planning complicated bay area trips by bus and train, including transferring between agencies at discounted prices.</li>
    </ul>
  </div>

  <div id="parking" class="border collapsible-mobile-start collapsible-tablet-start">
    <header class="stay-open"><h4 class="trigger">Parking</h4></header>
    <ul>
      <li><strong>Parking Validation:</strong> Sorry, we do not validate parking.</li>
      <li><strong>Metered Parking Lot:</strong> A metered parking lot is available on Berkeley Way between Shattuck Avenue and Milvia. <em>Hours: M-F 5:15am-12am, Sa 8am-12am, Su 12pm-12am.</em></li>
      <li><strong>Residential/Street Parking:</strong> West of Martin Luther King Jr. Way for up to two hours.</li>
      <li><strong>Motorcycle Parking:</strong> Free parking for motorcycles is located on the corner of Allston Way and Harold Street (1/4 block from the school).</li>
      <li><strong>Parking Garages:</strong> There are several parking garages in the area. These rates and hours are not guaranteed -- Please contact the garage prior to your visit.
      <ul>
	      <li>
	        <div>Standard Parking</div>
	        <div>2020 Kittredge St between Harold and Milvia <a href="tel: +15106651662" class="nowrap">510-665-1662</a></div>
	        <div>$2.50 per hour. In by 8:30am, out by 6:00pm: $8.00 for the day.</div>
	        <div>Hours: Su-Th 6am-12am, Fr-Sa 6am-2am</div>
	      </li>
	      <li>
	        <div>Allston Way Garage (Great Western)/Standard Parking</div>
	        <div>2061 Allston Way between Milvia and Shattuck <a href="tel: +15109819443" class="nowrap">510-981-9443</a></div>
	        <div>$2.50 per hour, $14.50 per day. In by 8:30am, out by 6:00pm: $8.00 for the day.</div>
	        <div>Hours: Mo-Th 6am-12am, Fr 6am-2am, Sa 8am-2am, <span class="nowrap">Su 8am-12am</span></div>
	      </li>
	      <li>
	        <div>Center Street Garage - Parking Concepts Inc. (PCI)</div>
	        <div>2025 Center St. between Milvia St. and Shattuck Ave. <a href="tel: +15106499822" class="nowrap">510-649-9822</a></div>
	        <div>$1.00 first hour, $2.00 each hour after. $15.00 per day max.</div>
	        <div>Hours: Mo-Fr 5a-12a, Sa 7a-12a, Sun 12p-12p</div>
	      </li> 
	      <li>
	        <div>Golden Bear Garage - Ampco System Parking</div>
	        <div>1995 University Ave. Enter on Bonita Ave. <a href="tel: +15108482262" class="nowrap">510-848-2262</a></div>
	        <div>$3.00 per hour, $14.00 per day max. In by 9:30am, out by 6:30pm: $10.00 for the day.</div>
	        <div>Hours: Mo-Th 6am-10pm, Fr 8am-10pm, Sa 8am-6pm, <span class="nowrap">Sun CLOSED</span></div>
	      </li>
	      <li>
	        <div>Oxford Street Surface Lot - Parking Concepts, Inc. (PCI)</div>
	        <div>Oxford St. between Allston Way and Kittredge St <a href="tel: +15108431788" class="nowrap">510-843-1788</a></div>
	        <div>$2.00 first hour, $4.00 second hour, $8.00 third hour. $20 max.</div>
	        <div>Hours: Mo-Th 7am-1am, Fr-Sa 7am-2am, <span class="nowrap">Su 8am-10pm</span></div>
	      </li>
	      <li>
	        <div>Promenade Garage - Douglas Parking</div>
	        <div>1936 Addison St. between MLK Jr. Way and Milvia St. <a href="tel: +15108494959" class="nowrap">510-849-4959</a></div>
	        <div>$3.00 per hour, $10.00 per day.</div>
	        <div>Hours: Mo-Sa 7:30am-7pm</div>
	      </li>
	      <li>
	        <div>Al's Parking Lot</div>
	        <div>2109 Milvia St. between Addison St. and Center St.</div>
	      </li>
      </ul>
      </li>
    </ul>
  </div>
</section>

<?php require_once($incdir . 'include/footer.php'); ?>
