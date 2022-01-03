<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <base href="">
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
    <link
        href="{{ asset('') }}public/templates/app/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('') }}public/templates/app/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('') }}public/templates/app/dist/assets/css/style.bundle.css" rel="stylesheet"
        type="text/css" />
    @stack('my-css')
</head>

<body id="kt_body">
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            @include('layout.app.aside')
            @yield('content')
        </div>
    </div>

    <!--Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
                    fill="black" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="black" />
            </svg>
        </span>
    </div>
    <!--end Scrolltop-->

    <script src="{{ asset('') }}public/templates/app/dist/assets/plugins/global/plugins.bundle.js"></script>
    <script src="{{ asset('') }}public/templates/app/dist/assets/js/scripts.bundle.js"></script>
    <script src="{{ asset('') }}public/templates/app/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js">
    </script>
    <script src="{{ asset('') }}public/templates/app/dist/assets/js/custom/widgets.js"></script>
    <script src="{{ asset('') }}public/templates/app/dist/assets/js/custom/apps/chat/chat.js"></script>
    <script src="{{ asset('') }}public/templates/app/dist/assets/js/custom/modals/create-app.js"></script>
    <script src="{{ asset('') }}public/templates/app/dist/assets/js/custom/modals/upgrade-plan.js"></script>
    @stack('my-js')
</body>

</html>
