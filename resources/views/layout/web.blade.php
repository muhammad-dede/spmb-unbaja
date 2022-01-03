<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{ config('app.name') }}" name="description">
    <meta content="{{ config('app.name') }}" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @hasSection('title')
        <title>@yield('title')&nbsp;|&nbsp;{{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif

    <!-- Favicons -->
    <link href="{{ asset('') }}public/logo.png" rel="icon">
    <link href="{{ asset('') }}public/logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('') }}public/templates/web/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('') }}public/templates/web/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('') }}public/templates/web/assets/vendor/bootstrap-icons/bootstrap-icons.css"
        rel="stylesheet">
    <link href="{{ asset('') }}public/templates/web/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('') }}public/templates/web/assets/vendor/glightbox/css/glightbox.min.css"
        rel="stylesheet">
    <link href="{{ asset('') }}public/templates/web/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('') }}public/templates/web/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('') }}public/templates/web/assets/css/style.css" rel="stylesheet">
    <link href="{{ asset('') }}public/templates/web/assets/css/my-css.css" rel="stylesheet">
    @stack('my-css')
</head>

<body>

    <!-- ======= Header ======= -->
    @include('layout.web.header')
    <!-- End Header -->

    @yield('content')

    <!-- ======= Footer ======= -->
    @include('layout.web.footer')
    <!-- End Footer -->


    <!-- ======= Whatsapp Floating ======= -->
    <div class="whats-float">
        <a href="https://wa.me/6281902082011/?text=Halo%20Admin,%20saya%20ingin%20bertanya%20" target="_blank">
            <i class="bi bi-whatsapp"></i>
            <span>WhatsApp<br><small>081902082011</small></span>
        </a>
    </div>
    <!-- ======= End:Whatsapp Floating ======= -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('') }}public/templates/web/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('') }}public/templates/web/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}public/templates/web/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('') }}public/templates/web/assets/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('') }}public/templates/web/assets/vendor/purecounter/purecounter.js"></script>
    <script src="{{ asset('') }}public/templates/web/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('') }}public/templates/web/assets/js/main.js"></script>
    @stack('my-js')
</body>

</html>
