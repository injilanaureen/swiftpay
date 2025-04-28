@extends('layouts.app')

@section('content')
<head>
  <meta charset="utf-8" />
  <title>Stocker - Stock Market Website Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />
</head>
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
      <div class="container text-center py-5" style="max-width: 900px">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">
          Contact Us
        </h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Pages</a></li>
          <li class="breadcrumb-item active text-primary">Contact</li>
        </ol>
      </div>
    </div>
    <!-- Header End -->
  </div>
  <!-- Navbar & Hero End -->

  <!-- Contact Start -->
  <div class="container-fluid contact py-5">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-xl-6">
          <div class="wow fadeInUp" data-wow-delay="0.2s">
            <div class="bg-light rounded p-5 mb-5">
              <h4 class="text-primary mb-4">Get in Touch</h4>
              <div class="row g-4">
                <div class="col-md-6">
                  <div class="contact-add-item">
                    <div class="contact-icon text-primary mb-4">
                      <i class="fas fa-map-marker-alt fa-2x"></i>
                    </div>
                    <div>
                      <h4>Address</h4>
                      <p class="mb-0">A - Block, Sector-4 Noida</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="contact-add-item">
                    <div class="contact-icon text-primary mb-4">
                      <i class="fas fa-envelope fa-2x"></i>
                    </div>
                    <div>
                      <h4>Mail Us</h4>
                      <p class="mb-0">sales@swiftopay.com</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="contact-add-item">
                    <div class="contact-icon text-primary mb-4">
                      <i class="fa fa-phone-alt fa-2x"></i>
                    </div>
                    <div>
                      <h4>Telephone</h4>
                      <p class="mb-0">+91 9911210174</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <!-- <div class="contact-add-item">
                      <div class="contact-icon text-primary mb-4">
                        <i class="fab fa-firefox-browser fa-2x"></i>
                      </div>
                      <div>
                        <h4>Yoursite@ex.com</h4>
                        <p class="mb-0">+91 8076832529</p>
                      </div>
                    </div> -->
                </div>
              </div>
            </div>
            <div class="bg-light p-5 rounded h-100 wow fadeInUp" data-wow-delay="0.2s">
              <h4 class="text-primary">Send Your Message</h4>
              <p class="mb-4">
                The contact form is currently inactive. Get a functional and
                working contact form with Ajax & PHP in a few minutes. Just
                copy and paste the files, add a little code and you're done.
                <a class="text-primary fw-bold" href="https://htmlcodex.com/contact-form">Download Now</a>.
              </p>
              <form>
                <div class="row g-4">
                  <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                      <input type="text" class="form-control border-0" id="name" placeholder="Your Name" />
                      <label for="name">Your Name</label>
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                      <input type="email" class="form-control border-0" id="email" placeholder="Your Email" />
                      <label for="email">Your Email</label>
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                      <input type="phone" class="form-control border-0" id="phone" placeholder="Phone" />
                      <label for="phone">Your Phone</label>
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                      <input type="text" class="form-control border-0" id="project" placeholder="Project" />
                      <label for="project">Your Project</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <input type="text" class="form-control border-0" id="subject" placeholder="Subject" />
                      <label for="subject">Subject</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <textarea class="form-control border-0" placeholder="Leave a message here" id="message"
                        style="height: 160px"></textarea>
                      <label for="message">Message</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary w-100 py-3">
                      Send Message
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
          <div class="rounded h-100">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.535345973129!2d77.3182618752872!3d28.583712475691417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5acd86d2d77%3A0x34955dbaf07baf15!2sKanak%20Drishti%20Infotech%20Pvt.Ltd.!5e0!3m2!1sen!2sin!4v1744451158704!5m2!1sen!2sin"
              width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact End -->
  @endsection