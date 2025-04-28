<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Swiftopay</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ asset('lib/animate/animate.min.css') }}" />
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Slider CSS -->
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">

    <style>
        .header-carousel .owl-nav .owl-prev, .header-carousel .owl-nav .owl-next {
            background-color: #009eff;
        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid topbar bg-light px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-flex flex-wrap">
                    <a href="#" class="text-muted small me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Noida Sector 4</a>
                    <a href="tel:9911210174" class="text-muted small me-4"><i class="fas fa-phone-alt text-primary me-2"></i>9911210174</a>
                    <a href="mailto:sales@swiftopay.com" class="text-muted small me-0"><i class="fas fa-envelope text-primary me-2"></i>sales@swiftopay.com</a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="https://accounts.swiftopay.com/"><small class="me-3 text-dark"><i class="fa fa-user text-primary me-2"></i>Register</small></a>
                    <a href="https://accounts.swiftopay.com/"><small class="me-3 text-dark"><i class="fa fa-sign-in-alt text-primary me-2"></i>Login/Signup</small></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-3 px-lg-5 py-3 py-lg-0">
    <a href="/" class="navbar-brand p-0">
        <img src="{{ asset('img/swiftopay.png') }}" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto py-0">
    @foreach ($navbarItems as $item)
        @if ($item->subItems->isNotEmpty())
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">
                    {{ $item->name }}
                </a>
                <div class="dropdown-menu m-0">
                    @foreach ($item->subItems as $subItem)
                        <a href="{{ url($subItem->url) }}" class="dropdown-item">{{ $subItem->name }}</a>
                    @endforeach
                </div>
            </div>
        @else
            <a href="{{ url($item->url ?? '/') }}" class="nav-item nav-link text-white">
                {{ $item->name }}
            </a>
        @endif
    @endforeach

    <a href="https://accounts.swiftopay.com/" class="nav-item nav-link text-white d-sm-block d-lg-none">
        <i class="fa-solid fa-user" style="color: #009eff;"></i> Get Started
    </a>
</div>


        <a href="https://accounts.swiftopay.com/" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0" style="background-color: #009eff;">
            Sign In
        </a>
    </div>
</nav>

    </div>
    <!-- Navbar End -->
</body>
</html>
