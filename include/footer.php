    </div> <!-- #main -->
</div> <!-- #main-container -->

<div class="footer-container">
  <footer class="wrapper">

    <div id="address" class="">
      <a href="http://www.google.com/maps/place/2075+Allston+Way+Berkeley+CA+94704/">
        Fast Response<br />
        2075 Allston Way, <span class="nowrap">Suite B</span><br />
        Berkeley, CA 94704
      </a>
    </div>

    <div id="office-hours" class="">
      <span class="bold">Admissions Hours</span><br />
      Mon - Thu: 8 - 6<br />
      Fri: 8 - 5<br />
      Sat: 9 - 5
    </div>

    <div id="phone-buttons">
      <div class="bold">Call Now</div>
      <a href="tel:+1-510-849-4009" class="phone-btn">510-849-4009</a>
      <a href="tel:+1-800-637-7387" class="phone-btn">800-637-7387</a>
    </div>

    <div id="social-media-footer">
      <div><a href="//www.yelp.com/biz/fast-response-school-of-health-care-education-berkeley">Yelp <img src="<?= $incdir ?>img/yelp-logo.png" alt="Yelp Reviews" /></a></div>
      <div><a href="//www.facebook.com/FastResponseSchool">Facebook <img src="<?= $incdir ?>img/facebook-logo.png" alt="Our Facebook Page" /></a></div>
      <div><a href="//twitter.com/_FastResponse">Twitter <img src="<?= $incdir ?>img/twitter-logo.png" alt="Our Twitter Page" /></a></div>
    </div>

    <div id="legal-footer">
      <div id="policy-footer"><a href="<?= $incdir ?>policies/">Fast Response school policies and terms.</a></div>
      <div id="approval-footer">This school has been approved by the <a href="http://www.bppe.ca.gov/about_us/contact.shtml"><span class="nowrap">Bureau of Private</span> and Postsecondary Education.</a></div>
      <div id="copyright-footer">&copy; <?= date('Y') ?> Fast Response Safety Training Center, Inc. <span class="nowrap">All prices and</span> content subject to change.</div>
    </div>

  </footer>
</div>

<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Fast Response",
  "alternateName" : "Fast Response School of Health Care Education",
  "url" : "http://www.fastresponse.org",
  "logo" : "http://www.fastresponse.org/img/fr-logo-darkblue.png",
  "telephone" : "+1-510-849-4009",
  "faxNumber" : "+1-866-290-2739",
  "email" : "info@fastresponse.org",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "2075 Allston Way, Ste B",
    "addressLocality" : "Berkeley",
    "addressRegion" : "CA",
    "postalCode" : "94704",
    "addressCountry" : "US"
  },
  "openingHours" : [
    "Mo-Th 08:00-18:00",
    "Fr 08:00-17:00"
  ],
  "department" : {
    "@type" : "LocalBusiness",
    "name" : "Admissions",
    "telephone" : "+1-800-637-7387",
    "email" : "admissions@fastresponse.org",
    "openingHours" : [
      "Mo-Th 08:00-18:00",
      "Fr 08:00-17:00",
      "Sa 09:00-17:00"
    ]
  },
  "contactPoint" : [{
    "@type" : "ContactPoint",
    "contactType" : "Customer Service",
    "telephone" : "+1-510-849-4009",
    "faxNumber" : "+1-866-290-2739",
    "email" : "info@fastresponse.org",
    "areaServed" : "US"
  }],
  "sameAs" : [
    "http://www.facebook.com/FastResponseSchool",
    "http://www.twitter.com/_FastResponse",
    "http://www.yelp.com/biz/fast-response-school-of-health-care-education-berkeley"
  ]
}
</script>
<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "WebSite",
  "name" : "Fast Response",
  "alternateName" : "Fast Response School of Health Care Education",
  "url" : "http://www.fastresponse.org"
}
</script>
<?php if (false): ?>
<script>
{
  "potentialAction" : {
    "@type": "SearchAction",
    "target": "http://www.fastresponse.org/search?q={search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
<?php endif; ?>

<script src="<?= $incdir ?>js/main.js" async defer></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
  function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
  e.src='//www.google-analytics.com/analytics.js';
  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
  ga('create','UA-18170901-1','auto');ga('send','pageview');
</script>

</body>
</html>
