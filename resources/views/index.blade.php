@extends('layouts.app')

@section('content')
    @include('partials.carousel')

    <!-- Company Logo Auto Slider -->
    <div class="slider">
        <div class="slide-track">
            @for ($i = 1; $i <= 23; $i++)
                <div class="slide">
                    <img src="{{ asset('img/company logos/' . $i . '.png') }}" height="auto" width="150" alt="" />
                </div>
            @endfor
            <!-- Repeat for smooth scrolling -->
            @for ($i = 1; $i <= 23; $i++)
                <div class="slide">
                    <img src="{{ asset('img/company logos/' . $i . '.png') }}" height="auto" width="150" alt="" />
                </div>
            @endfor
        </div>
    </div>
    <!-- Company Logo Auto Slider End -->

    <!-- About Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                    <div>
                        <h4 class="text-primary">What is Swiftopay?</h4>
                        <h6 class="display-6 mb-4">Discover Our Payment Solutions Don’t Miss Out on Seamless Transactions</h6>
                        <p class="mb-4 text-black" style="color: black;">Swiftopay is a comprehensive, feature-rich payment orchestration platform tailored for omni-channel businesses and payment institutions. Our platform connects global payment providers and acquirers, delivering a unified interface for seamless communication, control, and management.</p>
                        <div class="container p-0 py-lg-5">
                            <div class="row text-center">
                                <div class="col-md-3">
                                    <div class="card p-3 shadow-sm">
                                        <div class="card-body">
                                            <i class="bi bi-globe fs-1 mb-2"></i>
                                            <h5 class="text-primary fw-bold">25+</h5>
                                            <p class="mb-0">Payment Gateway</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card p-3 shadow-sm">
                                        <div class="card-body">
                                            <i class="fa-solid fa-code-compare fs-1 mb-3"></i>
                                            <h5 class="text-primary fw-bold">10M</h5>
                                            <p class="mb-4">Transactions</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card p-3 shadow-sm">
                                        <div class="card-body">
                                            <i class="fa-solid fa-indian-rupee-sign fs-1 mb-3"></i>
                                            <h5 class="text-primary fw-bold">700M</h5>
                                            <p class="mb-4">GTV</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card p-3 shadow-sm">
                                        <div class="card-body">
                                            <i class="bi bi-speedometer2 fs-1 mb-2"></i>
                                            <h5 class="text-primary fw-bold">99.99%</h5>
                                            <p class="mb-0">Success Rate</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-primary rounded position-relative overflow-hidden">
                        <img src="{{ asset('img/about-2.png') }}" class="img-fluid rounded w-100" alt="">
                        <div style="position: absolute; top: -15px; right: -15px;">
                            <img src="{{ asset('img/about-3.png') }}" class="img-fluid" style="width: 150px; height: 150px; opacity: 0.7;" alt="">
                        </div>
                        <div style="position: absolute; top: -20px; left: 10px; transform: rotate(90deg);">
                            <img src="{{ asset('img/about-4.png') }}" class="img-fluid" style="width: 100px; height: 150px; opacity: 0.9;" alt="">
                        </div>
                        <div class="rounded-bottom">
                            <img src="{{ asset('img/about-5.jpg') }}" class="img-fluid rounded-bottom w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div class="container-fluid service pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="text-primary">Why Swiftopay?</h1>
                <h4 class="mb-0">Streamline your payment processes with us to achieve faster, more secure transactions, higher payment success rates, and greater control over your payment data and analytics.</h4>
            </div>
            <div class="row g-4">
                @foreach([
                    ['img' => 'service-1.jpg', 'title' => 'Effortless Integration', 'desc' => 'Seamlessly integrate with our SDKs and extensions—no coding needed.'],
                    ['img' => 'service-2.jpg', 'title' => 'Cost and Revenue optimization', 'desc' => 'Reduce failure rates with AI-driven intelligent routing and dynamic rules.'],
                    ['img' => 'service-3.jpg', 'title' => 'Better Conversions', 'desc' => 'Minimize failure rates with dynamic rules and AI-powered smart routing.'],
                    ['img' => 'service-4.jpg', 'title' => 'Infinite Scalability', 'desc' => 'Integrate once to access over 20 payment gateways with unmatched performance, security, and reliability.'],
                    ['img' => 'service-5.jpg', 'title' => 'Hr Consulting', 'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, sint? Excepturi facilis neque nesciunt similique officiis veritatis.'],
                    ['img' => 'service-6.jpg', 'title' => 'Marketing Consulting', 'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, sint? Excepturi facilis neque nesciunt similique officiis veritatis.']
                ] as $key => $service)
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="{{ 0.2 + ($key * 0.2) }}s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ asset('img/' . $service['img']) }}" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">{{ $service['title'] }}</a>
                                <p class="mb-4">{{ $service['desc'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="container text-center py-5" style="background-color: #f8fafc;">
                <button class="btn btn-primary px-4 py-2">Discover the benefits of Swiftopay</button>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Vertical Slider Start -->
    <div class="container-fluid py-5">
        <div class="row">
            @for ($col = 0; $col < 3; $col++)
                <div class="col-md-4">
                    <div class="vertical-slider">
                        <div class="slide-track">
                            @foreach(range(1 + ($col * 10), 10 + ($col * 10)) as $i)
                                @if (file_exists(public_path('img/company logos/' . $i . '.png')))
                                    <div class="slide">
                                        <img src="{{ asset('img/company logos/' . $i . '.png') }}" height="auto" width="150" alt="" />
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <!-- Vertical Slider End -->

    <style>
        .vertical-slider {
            height: 300px;
            overflow: hidden;
            position: relative;
        }
        .vertical-slider .slide-track {
            display: flex;
            flex-direction: column;
            animation: scroll 20s linear infinite;
        }
        .vertical-slider .slide {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;
        }
        @keyframes scroll {
            0% { transform: translateY(0); }
            100% { transform: translateY(-100%); }
        }
    </style>

    <!-- Features Start -->
    <div class="container-fluid py-16 bg-gray-50">
        <div class="container">
            <div class="text-center mx-auto mb-12 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-5 text-primary mb-4">Our Features</h1>
                <p class="mb-5">Experience a comprehensive suite of payment solutions designed to help your business grow</p>
            </div>
            <div class="row g-4">
                @foreach([
                    ['icon' => 'fa-credit-card', 'title' => 'Seamless Payments', 'desc' => 'Experience effortless transactions across various payment modes including credit/debit cards, net banking, UPI, and more.', 'delay' => '0.1'],
                    ['icon' => 'fa-shield-alt', 'title' => 'Secure Transactions', 'desc' => 'PCI-DSS compliant platform with robust security measures protecting your business and customer data.', 'delay' => '0.2'],
                    ['icon' => 'fa-chart-line', 'title' => 'Real-Time Analytics', 'desc' => 'Track transactions, monitor trends, and make data-driven decisions with our comprehensive analytics dashboard.', 'delay' => '0.3'],
                    ['icon' => 'fa-plug', 'title' => 'Easy Integrations', 'desc' => 'Seamlessly integrate with your existing systems using our simple APIs and plugins, saving time and resources.', 'delay' => '0.4'],
                    ['icon' => 'fa-globe', 'title' => 'Multi-Currency', 'desc' => 'Accept payments in various currencies and expand your business globally with ease.', 'delay' => '0.5'],
                    ['icon' => 'fa-server', 'title' => 'Scalable Platform', 'desc' => 'Grow confidently with our high-performance infrastructure designed to handle increasing transaction volumes.', 'delay' => '0.6']
                ] as $feature)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ $feature['delay'] }}s">
                        <div class="feature-item rounded bg-white p-5 h-100">
                            <div class="d-flex align-items-center mb-4">
                                <div class="btn-lg-square rounded bg-primary text-white">
                                    <i class="fa {{ $feature['icon'] }} fa-2x"></i>
                                </div>
                                <h4 class="mb-0 ms-4">{{ $feature['title'] }}</h4>
                            </div>
                            <p class="mb-4">{{ $feature['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row mt-5 g-4">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="bg-white rounded p-4 p-sm-5 h-100">
                        <div class="d-flex align-items-center mb-4">
                            <div class="btn-lg-square rounded bg-primary text-white">
                                <i class="fa fa-headset fa-2x"></i>
                            </div>
                            <h4 class="mb-0 ms-4">Dedicated Support</h4>
                        </div>
                        <p>Enjoy unparalleled support from our dedicated team with setup, troubleshooting, and optimization assistance.</p>
                        <p class="mb-0">Available 24/7 to ensure your payment operations run smoothly.</p>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.1s">
                    <div class="bg-white rounded p-4 p-sm-5 h-100">
                        <div class="d-flex align-items-center mb-4">
                            <div class="btn-lg-square rounded bg-primary text-white">
                                <i class="fa fa-check-circle fa-2x"></i>
                            </div>
                            <h4 class="mb-0 ms-4">Compliance Ready</h4>
                        </div>
                        <p>Stay compliant with industry standards and regulatory requirements.</p>
                        <p class="mb-0">Our expertise helps navigate complex regulations while maintaining security.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5 wow fadeInUp" data-wow-delay="0.1s">
                <a href="#" class="btn btn-primary rounded-pill py-3 px-5">Explore All Features</a>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Offer Start -->
    <div class="container-fluid offer-section pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h2 class="text-primary">Advantages of Cross-Border Payments with Swiftopay</h2>
                <h6>Enjoy seamless global transactions that help your business succeed internationally.</h6>
            </div>
            <div class="container-fluid feature pb-5 p-0">
                <div class="container pb-5 p-0">
                    <div class="row g-4">
                        @foreach([
                            ['icon' => 'fa-earth-americas', 'title' => 'Simplifying Global Expansion', 'desc' => 'Our payment orchestration platform streamlines cross-border transactions, giving you the tools to expand your business globally with ease.', 'delay' => '0.2'],
                            ['icon' => 'fa-university', 'title' => 'All-in-One Payment Solutions', 'desc' => 'From one-time purchases to recurring subscriptions, our innovative solution efficiently manages all types of payments seamlessly and effortlessly.', 'delay' => '0.4'],
                            ['icon' => 'fa-right-left', 'title' => 'Instant Currency Conversion', 'desc' => 'Swiftopay advanced currency conversion delivers real-time, transparent rates, ensuring clarity and accuracy in every transaction.', 'delay' => '0.6'],
                            ['icon' => 'fa-headset', 'title' => 'Personalized Assistance', 'desc' => 'Our expert support team is available 24/7 to help with any issues or questions, ensuring smooth international transactions.', 'delay' => '0.8']
                        ] as $feature)
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="{{ $feature['delay'] }}s">
                                <div class="feature-item p-4">
                                    <div class="feature-icon p-4 mb-4">
                                        <i class="fa-solid {{ $feature['icon'] }} fa-4x text-primary"></i>
                                    </div>
                                    <h4>{{ $feature['title'] }}</h4>
                                    <p class="mb-4">{{ $feature['desc'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="container text-center py-5">
                        <button class="btn btn-primary px-4 py-2">Discover the benefits of cross-border payments.</button>
                    </div>
                </div>
            </div>
            <div class="container py-5">
                <div class="row mb-4">
                    <div class="col-md-12 text-center">
                        <h1 class="section-title display-4">The <span style="color: #009eff;"> Swiftopay </span> Comprehensive Product Suite</h1>
                        <a href="#" class="btn btn-primary mt-3">Explore our Swiftopay product suite</a>
                    </div>
                </div>
                <div class="row g-4">
                    @foreach([
                        ['title' => 'Smart Orchestrator', 'desc' => 'A cutting-edge, AI-powered payment orchestration platform offering a no-code solution to streamline and automate your business\'s payment processes and operational needs, ensuring efficiency and scalability.'],
                        ['title' => 'Invoicer', 'desc' => 'A seamless invoice and expense management tool integrated with a powerful payment collection system, enabling the generation of ad-hoc and recurring invoices while ensuring full compliance with GST regulations.'],
                        ['title' => 'MPOS / SoftPOS', 'desc' => 'Our versatile MPOS and SoftPOS solutions are tailored to meet your business requirements, seamlessly integrated with our payment orchestrator to deliver a smooth and efficient payment experience.'],
                        ['title' => 'Order Manager', 'desc' => 'Our order and inventory management system seamlessly connects with our payment orchestrator, offering small and mid-sized businesses a unified platform to efficiently manage orders, inventory, and payments.'],
                        ['title' => 'Card Recharge Platform', 'desc' => 'Our platform enables effortless recharging of prepaid and forex cards from various banks, supported by a robust payment collection system and a closed-loop wallet for enhanced convenience.'],
                        ['title' => 'Metered Billing', 'desc' => 'Our metered billing system offers a payment model, ensuring customers pay only for what they use each month. This approach provides fair, predictable billing and is a headless, API-first solution for seamless integration.']
                    ] as $product)
                        <div class="col-md-4">
                            <div class="card p-3 text-center">
                                <h4 class="text-center m-3">{{ $product['title'] }}</h4>
                                <p class="text-dark">{{ $product['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->

    <!-- Blog Start -->
    <div class="container-fluid blog pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="text-primary display-5">Universal Payment Orchestration Platform</h1>
                <p class="mb-0">Experience faster, more secure transactions, higher payment success rates, and greater control over payment data and analytics by optimizing your payment processes with our platform.</p>
            </div>
            <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.2s">
                @foreach([
                    ['icon' => 'fa-credit-card', 'desc' => 'Our single integration can help you steer clear of being tied down to a specific payment service provider and also reveal capabilities.'],
                    ['icon' => 'fa-shield-halved', 'desc' => 'Count on our reliable and secure distributed payment infrastructure that is shielded from all types and sizes of DDoS attacks.'],
                    ['icon' => 'fa-computer', 'desc' => 'With a single dashboard, you can manage all payment and payout processes in real-time and configure multiple settings.'],
                    ['icon' => 'fa-shuffle', 'desc' => 'Optimize your transaction costs by leveraging the capability to automatically identify the most cost-effective approach.'],
                    ['icon' => 'fa-globe', 'desc' => 'Endless possibilities for growth and global expansion are unlocked with the ability to connect with as many PSPs as you desire.'],
                    ['icon' => 'fa-repeat', 'desc' => 'Mitigate the potential losses associated with international transactions by setting the exchange rate at the point of sale.'],
                    ['icon' => 'fa-chart-simple', 'desc' => 'Choose from our selection of 30+ reports on various statistics, including fees and decline reasons, and access them instantly.']
                ] as $blog)
                    <div class="blog-item p-4 text-center">
                        <div class="blog-img mb-4"></div>
                        <i class="fa-solid {{ $blog['icon'] }} display-6"></i>
                        <p class="mb-4 text-dark fw-bolder">{{ $blog['desc'] }}</p>
                        <div class="d-flex align-items-center"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection