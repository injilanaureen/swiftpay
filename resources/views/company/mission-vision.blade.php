@extends('layouts.app')

@section('content')
<head>
    <title>SwiftoPay Mission Vision</title>
</head>
     <!-- Header Start -->
     <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px">
          <h4
            class="text-white display-4 mb-4 wow fadeInDown"
            data-wow-delay="0.1s"
          >
            Mission & Vision
          </h4>
          <ol
            class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown"
            data-wow-delay="0.3s"
          >
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="about.html">Company</a></li>
            <li class="breadcrumb-item active text-primary">
              Mission & Vision
            </li>
          </ol>
        </div>
      </div>
      <!-- Header End -->
    </div>
    <!-- Navbar & Hero End -->

    <div class="container-fluid about py-5">
      <div class="container py-5">
        <!-- MAYBE  -->
        <div class="container my-5">
          <div class="row g-4">
            <!-- Mission -->
            <div class="col-md-6">
              <div class="mission-box px-3 px-lg-0">
                <h4 class="text-center">
                  <span class="icon">💡</span> Our Mission
                </h4>
                <p class="text-justify">
                  At SwiftPay, our mission is to revolutionize the financial landscape by providing a fast, secure, and user-friendly transaction platform. We strive to bridge the gap in financial inclusion, empowering individuals and businesses worldwide to manage their finances effortlessly.
                </p>
              </div>
            </div>
            <!-- Vision -->
            <div class="col-md-6">
              <div class="vision-box px-3 px-lg-0">
                <h4 class="text-center">
                  <span class="icon">✨</span> Our Vision
                </h4>
                <p class="text-justify">
                  Our vision at SwiftPay is to become the global leader in digital financial transactions, renowned for our innovative solutions, exceptional customer experience, and unwavering commitment to security and reliability.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @endsection