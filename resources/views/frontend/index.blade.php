@extends('layouts.app')
@section('title', 'Homepage - Konsultan')
@section('content')
    {{-- START : HEADER --}}
    <header class="relative w-full h-screen">
        <img src="{{ asset('img/header-img.png') }}" class="header-image absolute inset-0 z-0 w-full h-full object-cover" alt="">
        <div class="absolute pt-20 inset-0 z-10 w-full h-full object-cover bg-gradient-to-r from-white to-transparent">
            <div class="max-w-screen-custom h-full px-4 mx-auto flex flex-col justify-center">
                <h1 class="text-4xl md:text-5xl font-black max-w-md">Bussiness advisory services</h1>
                <p class="max-w-md mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit maxime voluptatem fugiat!</p>
                <div class="flex mt-5">
                    <a href="{{ route('login') }}" class="w-48 md:w-52 h-12 md:h-14 text-sm md:text-base rounded-full font-medium transition-all duration-300 bg-gradient-to-tr from-purple-500 to-purple-700 hover:from-purple-600 hover:to-purple-700 focus:ring-2 focus:ring-purple-300 text-white active:text-purple-300 flex justify-center items-center">
                        Pelajari solusi kami
                    </a>
                </div>
            </div>
        </div>
    </header>
    {{-- END : HEADER --}}
    {{-- START : KEUNGGULAN --}}
    <section class="w-full pt-10 md:pt-20 lg:pt-28">
        <div class="w-full max-w-screen-custom mx-auto px-4">
            <h1 class="text-2xl md:text-3xl font-bold text-center">Keunggulan konsultanku</h1>
            <p class="mt-5 text-center">Apa saja keunggulan yang kami tawarkan kepada anda</p>
            {{--  --}}
            <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-5 mt-10">
                {{-- SINGLE --}}
                <div class="w-full p-5">
                    <img src="{{ asset('img/about-img.svg') }}" class="w-20 mx-auto" alt="">
                    <h1 class="font-semibold text-xl py-5 text-center">Mudah & Praktis</h1>
                    <p class="text-center text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, debitis quod cumque voluptatibus eum pariatur.</p>
                </div>
                {{-- SINGLE --}}
                <div class="w-full p-5">
                    <img src="{{ asset('img/about-img.svg') }}" class="w-20 mx-auto" alt="">
                    <h1 class="font-semibold text-xl py-5 text-center">Mudah & Praktis</h1>
                    <p class="text-center text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, debitis quod cumque voluptatibus eum pariatur.</p>
                </div>
                {{-- SINGLE --}}
                <div class="w-full p-5">
                    <img src="{{ asset('img/about-img.svg') }}" class="w-20 mx-auto" alt="">
                    <h1 class="font-semibold text-xl py-5 text-center">Mudah & Praktis</h1>
                    <p class="text-center text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, debitis quod cumque voluptatibus eum pariatur.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- END : KEUNGGULAN --}}
    {{-- START : KEUNGGULAN --}}
    <section class="w-full pt-10 md:pt-20 lg:pt-28">
        <div class="w-full max-w-screen-custom mx-auto px-4">
            <div class="w-full grid grid-cols-1 md:grid-cols-2">
                <div class="w-full">
                    <h1 class="text-2xl md:text-3xl font-bold max-w-md">Pelajari solusi kami</h1>
                    <p class="max-w-md mt-5">Keunggulan Konsultansi yang akan membuat anda lebih percaya dengan kami</p>
                </div>
                <div class="flex justify-end w-full">
                    <div class="relative w-full md:w-32 h-28 md:h-full">    
                        <div id="keunggulan-swiper-prev" class="swiper-button-prev"></div>
                        <div id="keunggulan-swiper-next" class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
            {{--  --}}
            <div class="swiper keunggulan-swiper mt-10">
                <div class="swiper-wrapper">
                    {{-- SINGLE --}}
                    <div class="swiper-slide">
                        <div class="w-full px-5 py-10 border hover:border-purple-500 hover:text-purple-500 rounded-lg transition-all duration-300">
                            <img src="{{ asset('img/about-img.svg') }}" class="w-20 mx-auto" alt="">
                            <h1 class="font-semibold text-xl py-5 text-center">Mudah & Praktis</h1>
                            <p class="text-center text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, debitis quod cumque voluptatibus eum pariatur.</p>
                        </div>
                    </div>
                    {{-- SINGLE --}}
                    <div class="swiper-slide">
                        <div class="w-full px-5 py-10 border hover:border-purple-500 hover:text-purple-500 rounded-lg transition-all duration-300">
                            <img src="{{ asset('img/about-img.svg') }}" class="w-20 mx-auto" alt="">
                            <h1 class="font-semibold text-xl py-5 text-center">Mudah & Praktis</h1>
                            <p class="text-center text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, debitis quod cumque voluptatibus eum pariatur.</p>
                        </div>
                    </div>
                    {{-- SINGLE --}}
                    <div class="swiper-slide">
                        <div class="w-full px-5 py-10 border hover:border-purple-500 hover:text-purple-500 rounded-lg transition-all duration-300">
                            <img src="{{ asset('img/about-img.svg') }}" class="w-20 mx-auto" alt="">
                            <h1 class="font-semibold text-xl py-5 text-center">Mudah & Praktis</h1>
                            <p class="text-center text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, debitis quod cumque voluptatibus eum pariatur.</p>
                        </div>
                    </div>
                    {{-- SINGLE --}}
                    <div class="swiper-slide">
                        <div class="w-full px-5 py-10 border hover:border-purple-500 hover:text-purple-500 rounded-lg transition-all duration-300">
                            <img src="{{ asset('img/about-img.svg') }}" class="w-20 mx-auto" alt="">
                            <h1 class="font-semibold text-xl py-5 text-center">Mudah & Praktis</h1>
                            <p class="text-center text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, debitis quod cumque voluptatibus eum pariatur.</p>
                        </div>
                    </div>
                    {{-- SINGLE --}}
                    <div class="swiper-slide">
                        <div class="w-full px-5 py-10 border hover:border-purple-500 hover:text-purple-500 rounded-lg transition-all duration-300">
                            <img src="{{ asset('img/about-img.svg') }}" class="w-20 mx-auto" alt="">
                            <h1 class="font-semibold text-xl py-5 text-center">Mudah & Praktis</h1>
                            <p class="text-center text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, debitis quod cumque voluptatibus eum pariatur.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-20">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    {{-- END : KEUNGGULAN --}}
    {{-- START : FOOTER --}}
    <footer class="w-full bg-zinc-800 mt-5">
        <div class="w-full bg-zinc-900">
            <div class="w-full max-w-screen-custom mx-auto py-10 px-5">
                <div class="w-full h-full md:w-1/2 flex flex-col justify-center">
                    <h1 class="font-semibold uppercase text-white text-sm">Metode pembayaran</h1>
                    <div class="grid grid-cols-5 gap-5 mt-5">
                        <img src="{{ asset('img/metode-pembayaran.png') }}" class="w-full" />
                        <img src="{{ asset('img/metode-pembayaran.png') }}" class="w-full" />
                        <img src="{{ asset('img/metode-pembayaran.png') }}" class="w-full" />
                        <img src="{{ asset('img/metode-pembayaran.png') }}" class="w-full" />
                        <img src="{{ asset('img/metode-pembayaran.png') }}" class="w-full" />
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full max-w-screen-custom mx-auto px-4 pt-16">
            <div class="w-full grid grid-cols-1 md:grid-cols-4 gap-5">
                {{-- SINGLE ITEM --}}
                <div class="w-full">
                    <div class="w-full">
                        <h1 class="text-sm uppercase font-semibold text-white">Informasi lain</h1>
                        <ul class="mt-5">
                            <li>
                                <a href="#" class="text-zinc-500 hover:underline">Menu lain</a>
                            </li>
                            <li>
                                <a href="#" class="text-zinc-500 hover:underline">Menu lain</a>
                            </li>
                            <li>
                                <a href="#" class="text-zinc-500 hover:underline">Menu lain</a>
                            </li>
                            <li>
                                <a href="#" class="text-zinc-500 hover:underline">Menu lain</a>
                            </li>
                            <li>
                                <a href="#" class="text-zinc-500 hover:underline">Menu lain</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full mt-5 md:mt-10">
                        <h1 class="text-sm uppercase font-semibold text-white">Informasi lain</h1>
                        <ul class="mt-5">
                            <li>
                                <a href="#" class="text-zinc-500 hover:underline">Menu lain</a>
                            </li>
                            <li>
                                <a href="#" class="text-zinc-500 hover:underline">Menu lain</a>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- SINGLE ITEM --}}
                <div class="w-full mt-5 md:mt-0">
                    <div class="w-full">
                        <h1 class="text-sm uppercase font-semibold text-white">Informasi lain</h1>
                        <ul class="mt-5">
                            <li>
                                <a href="#" class="text-zinc-500 hover:underline">Menu lain</a>
                            </li>
                            <li>
                                <a href="#" class="text-zinc-500 hover:underline">Menu lain</a>
                            </li>
                            <li>
                                <a href="#" class="text-zinc-500 hover:underline">Menu lain</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full mt-10">
                        <h1 class="text-sm uppercase font-semibold text-white">Informasi lain</h1>
                        <ul class="mt-5">
                            <li>
                                <a href="#" class="text-zinc-500 hover:underline">Menu lain</a>
                            </li>
                            <li>
                                <a href="#" class="text-zinc-500 hover:underline">Menu lain</a>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- SINGLE ITEM --}}
                <div class="w-full md:col-span-2">
                    <div class="w-full">
                        <h1 class="text-sm uppercase font-semibold text-white">Media sosial</h1>
                        <ul class="mt-5 flex space-x-3">
                            <li>
                                <a href="#" class="w-10 h-10 transition-all duration-300 bg-zinc-500 hover:bg-zinc-600 rounded-full flex justify-center items-center">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1536 1536"><path fill="currentColor" d="M1024 768q0-106-75-181t-181-75t-181 75t-75 181t75 181t181 75t181-75t75-181zm138 0q0 164-115 279t-279 115t-279-115t-115-279t115-279t279-115t279 115t115 279zm108-410q0 38-27 65t-65 27t-65-27t-27-65t27-65t65-27t65 27t27 65zM768 138q-7 0-76.5-.5t-105.5 0t-96.5 3t-103 10T315 169q-50 20-88 58t-58 88q-11 29-18.5 71.5t-10 103t-3 96.5t0 105.5t.5 76.5t-.5 76.5t0 105.5t3 96.5t10 103T169 1221q20 50 58 88t88 58q29 11 71.5 18.5t103 10t96.5 3t105.5 0t76.5-.5t76.5.5t105.5 0t96.5-3t103-10t71.5-18.5q50-20 88-58t58-88q11-29 18.5-71.5t10-103t3-96.5t0-105.5t-.5-76.5t.5-76.5t0-105.5t-3-96.5t-10-103T1367 315q-20-50-58-88t-88-58q-29-11-71.5-18.5t-103-10t-96.5-3t-105.5 0t-76.5.5zm768 630q0 229-5 317q-10 208-124 322t-322 124q-88 5-317 5t-317-5q-208-10-322-124T5 1085q-5-88-5-317t5-317q10-208 124-322T451 5q88-5 317-5t317 5q208 10 322 124t124 322q5 88 5 317z"/></svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="w-10 h-10 transition-all duration-300 bg-zinc-500 hover:bg-zinc-600 rounded-full flex justify-center items-center">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1536 1536"><path fill="currentColor" d="M1024 768q0-106-75-181t-181-75t-181 75t-75 181t75 181t181 75t181-75t75-181zm138 0q0 164-115 279t-279 115t-279-115t-115-279t115-279t279-115t279 115t115 279zm108-410q0 38-27 65t-65 27t-65-27t-27-65t27-65t65-27t65 27t27 65zM768 138q-7 0-76.5-.5t-105.5 0t-96.5 3t-103 10T315 169q-50 20-88 58t-58 88q-11 29-18.5 71.5t-10 103t-3 96.5t0 105.5t.5 76.5t-.5 76.5t0 105.5t3 96.5t10 103T169 1221q20 50 58 88t88 58q29 11 71.5 18.5t103 10t96.5 3t105.5 0t76.5-.5t76.5.5t105.5 0t96.5-3t103-10t71.5-18.5q50-20 88-58t58-88q11-29 18.5-71.5t10-103t3-96.5t0-105.5t-.5-76.5t.5-76.5t0-105.5t-3-96.5t-10-103T1367 315q-20-50-58-88t-88-58q-29-11-71.5-18.5t-103-10t-96.5-3t-105.5 0t-76.5.5zm768 630q0 229-5 317q-10 208-124 322t-322 124q-88 5-317 5t-317-5q-208-10-322-124T5 1085q-5-88-5-317t5-317q10-208 124-322T451 5q88-5 317-5t317 5q208 10 322 124t124 322q5 88 5 317z"/></svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="w-10 h-10 transition-all duration-300 bg-zinc-500 hover:bg-zinc-600 rounded-full flex justify-center items-center">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1536 1536"><path fill="currentColor" d="M1024 768q0-106-75-181t-181-75t-181 75t-75 181t75 181t181 75t181-75t75-181zm138 0q0 164-115 279t-279 115t-279-115t-115-279t115-279t279-115t279 115t115 279zm108-410q0 38-27 65t-65 27t-65-27t-27-65t27-65t65-27t65 27t27 65zM768 138q-7 0-76.5-.5t-105.5 0t-96.5 3t-103 10T315 169q-50 20-88 58t-58 88q-11 29-18.5 71.5t-10 103t-3 96.5t0 105.5t.5 76.5t-.5 76.5t0 105.5t3 96.5t10 103T169 1221q20 50 58 88t88 58q29 11 71.5 18.5t103 10t96.5 3t105.5 0t76.5-.5t76.5.5t105.5 0t96.5-3t103-10t71.5-18.5q50-20 88-58t58-88q11-29 18.5-71.5t10-103t3-96.5t0-105.5t-.5-76.5t.5-76.5t0-105.5t-3-96.5t-10-103T1367 315q-20-50-58-88t-88-58q-29-11-71.5-18.5t-103-10t-96.5-3t-105.5 0t-76.5.5zm768 630q0 229-5 317q-10 208-124 322t-322 124q-88 5-317 5t-317-5q-208-10-322-124T5 1085q-5-88-5-317t5-317q10-208 124-322T451 5q88-5 317-5t317 5q208 10 322 124t124 322q5 88 5 317z"/></svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full mt-10">
                        <h1 class="text-sm uppercase font-semibold text-white">Newsletter</h1>
                        <ul class="mt-5 text-zinc-500">
                            <li class="max-w-sm">Dapatkan penawaran menarik dari kami dengan cara subscribe ke layanan newsletter kami</li>
                            <li class="w-full flex flex-col sm:flex-row mt-5 gap-y-5 sm:gap-y-0 sm:gap-x-5">
                                <input type="text" class="w-full h-12 sm:h-14 outline-none border-none rounded-sm transition-all duration-300 focus:bg-zinc-100 focus:ring-2 focus:ring-slate-500 px-4 text-sm" placeholder="Masukkan email anda" />
                                <button class="w-full h-12 sm:h-14 sm:w-40 transition-all duration-300 text-white bg-zinc-500 hover:bg-zinc-600 text-sm rounded-sm">Subscribe</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-center text-sm py-10 md:pt-32 text-zinc-500">Copyright &copy;2022 Konsultanku, All rights reserved.</p>
    </footer>
    {{-- START : FOOTER --}}
@endsection

@push('scripts')
    <script>
        var image = document.getElementsByClassName('header-image');
        new simpleParallax(image);

        var swiper = new Swiper(".keunggulan-swiper", {
            spaceBetween: 30,
            loop: true,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: "#keunggulan-swiper-next",
                prevEl: "#keunggulan-swiper-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            }
        });
    </script>
@endpush