<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title', 'Admin Dashboard')</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.jpg') }}" rel="icon">
    <link href="{{ asset('assets/img/favicon.jpg') }}" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    @stack('styles')
</head>

<body>
    <!-- ======= Header ======= -->
    @include('partials.header')

    <!-- ======= Sidebar ======= -->
    @include('partials.sidebar')

    <!-- ======= Main Content ======= -->
    <main id="main" class="main">
        @yield('content')
    </main>

    <!-- ======= Footer ======= -->
    @include('partials.footer')

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>