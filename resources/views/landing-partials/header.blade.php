<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Derrick Homes and Travels</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.JPG') }}" rel="icon">
    <link href="{{ asset('assets/img/favicon.JPG') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('asset1/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset1/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('asset1/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('asset1/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset1/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('asset1/css/main.css') }}" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->


    <header id="header" class="header d-flex align-items-center">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assets/img/favicon.JPG" alt="Derrick Homes and Travels">
                <!-- <h1>Derrick Homes and Travels<span>.</span></h1> -->
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li class="nav-item"><a href="index.html/#hero">Home</a></li>
                    <li class="nav-item"><a href="{{ route('cars') }}">Cars</a></li>
                    <li class="nav-item"><a href="{{ route('homes') }}">Homes</a></li>
                    <li class="nav-item"><a href="index.html/#about">About</a></li>
                    <li class="nav-item"><a href="index.html/#contact">Contact Us</a></li>

                </ul>
            </nav><!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->
    <!-- End Header -->