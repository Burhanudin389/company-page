<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        {{-- FONTS --}}
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('storage/uploads/metadata/'. $favicon) }}" type="image/x-icon">
        <style>
            @font-face {
                font-family: 'Trajan';
                src: url(/fonts/trajanpro-bold.otf);
            }
            @font-face {
                font-family: 'Verdana';
                src: url(/fonts/helvetica.otf);
            }
            body {
                font-family: 'Helvetica', sans-serif !important;
            }

            h1, h2, h3, h4, h5, h6 {
                font-family: 'Trajan', sans-serif !important;
            }
        </style>
        {{-- VITE --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @include('partials.navigation')
        @yield('content')
        
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
        @stack('scripts')
        <script>
            AOS.init();
        </script>
    </body>
</html>
