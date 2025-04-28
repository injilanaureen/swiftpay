@extends('layouts.app')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">
                <span id="about-us-title" contenteditable="false">About Us</span>
                <button class="edit-btn" onclick="toggleEdit('about-us-title')">&#9998;</button>
            </h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="about.html">Company</a></li>
                <li class="breadcrumb-item active text-primary">
                    <span id="breadcrumb-about-us" contenteditable="false">About Us</span>
                    <!-- <button class="edit-btn" onclick="toggleEdit('breadcrumb-about-us')">&#9998;</button> -->
                </li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

<!-- About Start -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary mb-3">
                        <span id="about-title" contenteditable="false">About SwiftoPay</span>
                        <button class="edit-btn" onclick="toggleEdit('about-title')">&#9998;</button>
                    </h4>
                    <h1 class="display-6 mb-4">
                        <span id="main-title" contenteditable="false">
                            Revolutionizing Payment Solutions for Modern Businesses
                        </span>
                        <button class="edit-btn" onclick="toggleEdit('main-title')">&#9998;</button>
                    </h1>
                    <p class="mb-4">
                        <span id="about-text" contenteditable="false">
                            Founded by experienced technopreneurs, SwiftoPay is a leading
                            fintech product development company revolutionizing the payment
                            industry. With over six years of experience working with major
                            payment aggregators and gateways in India, we've developed a
                            cutting-edge payment orchestration platform that addresses the
                            real challenges faced by businesses today.
                        </span>
                        <button class="edit-btn" onclick="toggleEdit('about-text')">&#9998;</button>
                    </p>
                    
                    <!-- Features Section -->
                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="bg-primary rounded p-3">
                                    <i class="fas fa-check text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="mb-0">No-Code Integration</h5>
                                    <span>Easy setup without technical expertise</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <div class="bg-primary rounded p-3">
                                    <i class="fas fa-check text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="mb-0">Global Reach</h5>
                                    <span>Connect with multiple payment providers</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Stats -->
                    <div class="container py-4">
                        <div class="row text-center">
                            <div class="col-md-3">
                                <div class="stats-box p-3">
                                    <i class="bi bi-globe fs-1 text-primary mb-2"></i>
                                    <h3 class="text-primary fw-bold" id="payment-gateways" contenteditable="false">25+</h3>
                                    <button class="edit-btn" onclick="toggleEdit('payment-gateways')">&#9998;</button>
                                    <p class="mb-0">Payment Gateways</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="stats-box p-3">
                                    <i class="fa-solid fa-code-compare fs-1 text-primary mb-2"></i>
                                    <h3 class="text-primary fw-bold" id="transactions" contenteditable="false">10M+</h3>
                                    <button class="edit-btn" onclick="toggleEdit('transactions')">&#9998;</button>
                                    <p class="mb-0">Transactions</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="stats-box p-3">
                                    <i class="fa-solid fa-indian-rupee-sign fs-1 text-primary mb-2"></i>
                                    <h3 class="text-primary fw-bold" id="gtv" contenteditable="false">700M+</h3>
                                    <button class="edit-btn" onclick="toggleEdit('gtv')">&#9998;</button>
                                    <p class="mb-0">GTV</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="stats-box p-3">
                                    <i class="bi bi-speedometer2 fs-1 text-primary mb-2"></i>
                                    <h3 class="text-primary fw-bold" id="success-rate" contenteditable="false">99.99%</h3>
                                    <button class="edit-btn" onclick="toggleEdit('success-rate')">&#9998;</button>
                                    <p class="mb-0">Success Rate</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                <div class="position-relative overflow-hidden rounded">
                    <img src="img/about-1.jpg" class="img-fluid w-100" id="about-image" alt="SwiftoPay Features" />
                    <button class="edit-btn" onclick="editImage()">&#9998;</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

    <div class="container-fluid py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 800px">
                <h4 class="text-primary" id="vision-title" contenteditable="false">Our Vision</h4>
                <button class="edit-btn" onclick="toggleEdit('vision-title')">&#9998;</button>
                <h1 class="display-5 mb-4">
                    <span id="vision-text" contenteditable="false">
                        Making Financial Transactions Accessible to All
                    </span>
                    <button class="edit-btn" onclick="toggleEdit('vision-text')">&#9998;</button>
                </h1>
                <p class="mb-0" id="vision-description" contenteditable="false">
                We envision a world where financial transactions are seamless,
            secure, and accessible to everyone. Our mission is to break down
            barriers in the financial industry through innovative technology
            solutions.                </p>
                <button class="edit-btn" onclick="toggleEdit('vision-description')">&#9998;</button>
            </div>
        </div>
    </div>
    <!-- About End -->
   

@endsection
