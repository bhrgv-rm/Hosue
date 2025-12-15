<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('partials/title-meta.php'); ?>

  <?php include('partials/head-css.php'); ?>
</head>

<body class="homepage3-body">

  <?php include('partials/loader.php'); ?>

  <?php include('partials/header/navbar.php'); ?>

  <!--===== HERO AREA STARTS =======-->
  <div class="inner-main-hero-area">
    <div class="img1">
      <img src="/assets/img/all-images/hero/hero-img1.jpg" alt="">
    </div>
    <div class="img2">
      <img src="/assets/img/all-images/hero/hero-img2.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="inner-heading header-heading">
            <h2>Contact Us</h2>
            <div class="space24"></div>
            <p><a href="index.php">Home <i class="fa-solid fa-angle-right"></i></a> <a href="blog.php'"> Contact Us</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== HERO AREA ENDS =======-->

  <!--===== CONTACT AREA STARTS =======-->
  <div class="contact-inner-area sp6">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="contact-inner-boxarea">
            <div class="row align-items-center">
              <div class="col-lg-8">
                <div class="contact-input-section">
                  <h3>Send us a Message</h3>
                  <div class="space16"></div>
                  <p>Contact us today and let's start your journey to urban living excellence. <br> Our team at Hosue is here answer your questions, schedule viewings.</p>
                  <div class="space12"></div>
<form id="footerContactForm">
  <div class="row">

    <div class="col-lg-6">
      <div class="input-area">
        <input type="text" name="Name" placeholder="Your Name*" required>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="input-area">
        <input type="number" name="Mobile" placeholder="Mobile Number*" required>
      </div>
    </div>

    <div class="col-lg-12 mt-4">
      <div class="input-area">
        <select name="Subject" required>
          <option value="">Select Enquiry*</option>
          <option value="site_visit">Schedule a Site Visit</option>
          <option value="price_details">Price & Cost Details</option>
          <option value="floor_plans">Floor Plans & Layouts</option>
          <option value="availability">Availability of Villas</option>
          <option value="brochure_download">Download Brochure</option>
          <option value="other">Other</option>
        </select>
      </div>
    </div>

    <div class="col-lg-12 mt-4">
      <div class="input-area">
        <textarea name="Message" placeholder="Your Message*" required></textarea>
      </div>
    </div>

    <div class="col-lg-12 text-end">
      <button type="submit" class="header-btn4">Send Message</button>
    </div>

  </div>
</form>

                </div>
              </div>
              <div class="col-lg-4">
                <div class="contact-box">
                  <div class="icons">
                    <img src="/assets/img/icons/contact-icon1.svg" alt="">
                  </div>
                  <div class="content">
                    <p>Call</p>
                    <a href="tel:+1234567890">+123 456 7890</a>
                  </div>
                </div>
                <div class="space20"></div>
                <div class="contact-box">
                  <div class="icons">
                    <img src="/assets/img/icons/contact-icon2.svg" alt="">
                  </div>
                  <div class="content">
                    <p>Email</p>
                    <a href="mailto:info@hosuevilla.com">info@hosuevilla.com</a>
                  </div>
                </div>
                <div class="space20"></div>
                <div class="contact-box">
                  <div class="icons">
                    <img src="/assets/img/icons/contact-icon3.svg" alt="">
                  </div>
                  <div class="content">
                    <p>Schedule Time</p>
                    <a href="#">24/7 Anytime All Support</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="space80"></div>

      <div class="row">
        <div class="col-lg-12">
          <div class="maps-area">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3810.258958179454!2d78.4481631759307!3d17.254702206612464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcbbde6c0aedab3%3A0xade00c7702299532!2sVaishnaoi%20Southwoods!5e0!3m2!1sen!2sin!4v1765727457301!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== CONTACT AREA ENDS =======-->

  <?php include('partials/footer.php'); ?>

  <?php include('partials/footer-scripts.php'); ?>

  <script>
document.getElementById("footerContactForm").addEventListener("submit", function(e) {
  e.preventDefault();

  const form = this;
  const submitBtn = form.querySelector("button[type='submit']");
  const originalText = submitBtn.innerText;

  submitBtn.disabled = true;
  submitBtn.innerText = "Submitting...";

  const formData = new FormData(form);

  fetch("https://script.google.com/macros/s/AKfycbxItC0NSGvqXegjDitYsAUDqnLRGnF2K4I5y0K8GXPxDtBaM58SqIfwyUHEtD3SRm8F/exec", {
    method: "POST",
    body: new URLSearchParams(formData)
  })
  .then(res => res.text())
  .then(data => {
    submitBtn.innerText = "Submitted";
    form.reset();

    // Reset button after 5 seconds
    setTimeout(() => {
      submitBtn.innerText = originalText;
      submitBtn.disabled = false;
    }, 5000);
  })
  .catch(err => {
    console.error(err);
    submitBtn.innerText = originalText;
    submitBtn.disabled = false;
  });
});
</script>

</body>

</html>