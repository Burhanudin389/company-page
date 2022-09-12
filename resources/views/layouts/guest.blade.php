<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Login ke akun anda</title>
        {{-- FONTS --}}
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
        <style>
            @font-face {
                font-family: 'Trajan';
                src: url(/fonts/trajanpro-bold.otf);
            }
            @font-face {
                font-family: 'Verdana';
                src: url(/fonts/helvetica.otf);
            }

            h1, h2, h3, h4, h5, h6 {
                font-family: 'Trajan', sans-serif !important;
            }
            body {
                font-family: 'Open Sans', sans-serif !important;
            }
        </style>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>