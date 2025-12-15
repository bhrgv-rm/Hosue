<!-- CONTACT US MODAL -->
<div id="contactModal" class="force-modal">
  <div class="force-modal-content">
    <h2>Contact Us</h2>
    <p>Please fill in the details below to continue browsing.</p>

    <form id="contactForm">
      <input type="text" name="name" placeholder="Full Name" required>
    <input type="tel" name="phone" placeholder="Phone Number" required><select name="Subject" class="no-nice-select" required>
          <option value="">Select Enquiry*</option>
          <option value="site_visit">Schedule a Site Visit</option>
          <option value="price_details">Price & Cost Details</option>
          <option value="floor_plans">Floor Plans & Layouts</option>
          <option value="availability">Availability of Villas</option>
          <option value="brochure_download">Download Brochure</option>
          <option value="other">Other</option>
        </select>
      <textarea name="message" placeholder="Your Message" required></textarea>

      <button type="submit">Submit</button>
    </form>
  </div>
</div>


<script>
  $(document).ready(function () {
  $('select').not('.no-nice-select').niceSelect();
});

</script>