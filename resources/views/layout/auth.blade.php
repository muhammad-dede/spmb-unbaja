<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta content="{{ config('app.name') }}" name="description">
    <meta content="{{ config('app.name') }}" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ config('app.name') }}" />
    <meta property="og:url" content="{{ config('app.name') }}" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    @hasSection('title')
        <title>@yield('title')&nbsp;|&nbsp;{{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif
    <link rel="canonical" href="{{ route('index') }}" />
    <link rel="shortcut icon" href="{{ asset('') }}public/logo.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ asset('') }}public/templates/app/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('') }}public/templates/app/dist/assets/css/style.bundle.css" rel="stylesheet"
        type="text/css" />
    @stack('my-css')
</head>

<body id="kt_body" class="bg-body">
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative" style="background: #639DDF;">
                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                    <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-10">
                        <a href="{{ route('index') }}" class="py-9 mb-5">
                            <img alt="Logo" src="{{ asset('') }}public/logo.png" class="h-60px" />
                        </a>
                        <h1 class="fw-bolder fs-2qx" style="color: #fff;">Penerimaan Mahasiswa Baru</h1>
                        <p class="fw-bold fs-2" style="color: #fff;">Universitas Banten Jaya
                        </p>
                    </div>
                    <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px"
                        style="background-image: url({{ asset('') }}public/templates/app/dist/assets/media/illustrations/dozzy-1/13.png">
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                @yield('content')
                <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
                    <div class="d-flex flex-center fw-bold fs-6">
                        <a href="http://www.unbaja.ac.id/" class="text-muted text-hover-primary px-2"
                            target="_blank">&copy;
                            Universitas Banten Jaya&nbsp;{{ date('Y') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('') }}public/templates/app/dist/assets/plugins/global/plugins.bundle.js"></script>
    <script src="{{ asset('') }}public/templates/app/dist/assets/js/scripts.bundle.js"></script>
    @stack('my-js')
</body>

</html>
