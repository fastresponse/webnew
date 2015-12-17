<aside id="contact-info" class="<?= (isset($contact_info_class) ? $contact_info_class : '') ?>">
  <header><h3>Contact Us</h3></header>
  <div id="phone">
    <a href="tel:+1-510-849-4009" class="phone-btn">510-849-4009</a>
  </div>
  <div id="email">
    <a href="<?= $incdir ?>contact/<?= (isset($form_course_name) ? '?p='.$form_course_name : '') ?>" class="phone-btn">Send an Email</a>
  </div>
</aside>
