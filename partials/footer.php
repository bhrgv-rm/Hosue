<!--===== FOOTER AREA STARTS =======-->
<div class="footer3-section-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-instagram-area">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="footer-contact-box" data-aos="zoom-in-up" data-aos-duration="1000">
  <h3>Send Us A Message</h3>
  <div class="space16"></div>

  <form id="footerContactForm">
    <div class="row">

      <div class="col-lg-6">
        <div class="space16"></div>
        <div class="input-area">
          <input type="text" name="Name" placeholder="Your Name*" required>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="space16"></div>
        <div class="input-area">
          <input type="number" name="Mobile" placeholder="Mobile Number*" required>
        </div>
      </div>

      <div class="col-lg-12">
        <div class="space16"></div>
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

      <div class="col-lg-12">
        <div class="space16"></div>
        <div class="input-area">
          <textarea name="Message" placeholder="Your Message*" required></textarea>
        </div>
      </div>

      <div class="col-lg-12">
        <div class="space32"></div>
        <div class="input-area text-end">
          <button type="submit" class="header-btn4">Send Message</button>
        </div>
      </div>

    </div>
  </form>
</div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="instagram-images">
                                <div class="row">
                                    <div class="col-lg-5 col-md-6">
                                        <div class="instagram-posts" data-aos="zoom-in-up" data-aos-duration="800">
                                            <div class="img1">
              <img src="/assets/img/all-images/about/about-img3.jpg" alt="">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-6" data-aos="zoom-in-up" data-aos-duration="1000">
                                        <div class="instagram-posts">
                                            <div class="img1">
              <img src="/assets/img/all-images/about/about-img12.jpg" alt="">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-md-6" data-aos="zoom-in-up" data-aos-duration="1100">
                                        <div class="instagram-posts">
                                            <div class="img1">
              <img src="/assets/img/all-images/about/about-img10.png" alt="">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-5 col-md-6" data-aos="zoom-in-up" data-aos-duration="1200">
                                        <div class="instagram-posts">
                                            <div class="img1">
                                                <img src="/assets/img/all-images/about/about-img11.png" alt="">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space40"></div>
    <div class="footer3-bottom-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-bottom-area">
                        <div class="footer-menu-area">
                            <div class="footer-logo">
                                <a href="index.php"><img src="/assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <div class="footer-menu2">
                                <ul>
                                    <li><a href="#"> <span><i class="fa-solid fa-location-dot"></i></span> <span>Shamshabad, Hyderabad</span></a></li>
                                    <li class="space24"></li>
                                    <li><a href="tel:123-456-7890"><span><i class="fa-solid fa-phone"></i></span> <span>123-456-7890</span></a></li>
                                </ul>
                            </div>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="https://vaishnaoigroup.com/"><i class="fa-solid fa-link"></i></a></li>
                                    <li><a href="https://www.facebook.com/VaishnaoiGroup"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/vaishnaoigroup/"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCOMoybPeNJzhJxeT3olBJlA"><i class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="space48"></div>
                                <div class="copyright-area">
                                    <p>© 2025 - Vaishnaoi Southwoods.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById("footerContactForm").addEventListener("submit", function(e) {
  e.preventDefault();

  const formData = new FormData(this);

  fetch("https://script.google.com/macros/s/AKfycbxItC0NSGvqXegjDitYsAUDqnLRGnF2K4I5y0K8GXPxDtBaM58SqIfwyUHEtD3SRm8F/exec", {
    method: "POST",
    body: new URLSearchParams(formData)
  })
  .then(() => {
    alert("Thank you! Your message has been sent.");
    this.reset();
  })
  .catch(error => {
    alert("Something went wrong. Please try again.");
    console.error(error);
  });
});
</script>

<!--===== FOOTER AREA ENDS =======-->