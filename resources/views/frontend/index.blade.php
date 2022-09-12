@extends('layouts.app')
@section('title', 'Kantor Akuntan Publik Muhammad Novelsyah')
@section('content')
    {{-- START : HEADER --}}
    <header class="relative w-full h-screen">
        <img src="{{ asset('img/header-img.png') }}" class="header-image fixed inset-0 -z-50 w-full h-full object-cover" alt="">
        <div class="absolute pt-20 inset-0 z-10 w-full h-full object-cover bg-gradient-to-r from-white to-transparent">
            <div class="max-w-screen-custom h-full px-4 mx-auto flex flex-col justify-center">
                <h1 data-aos="fade-up" data-aos-delay="200" class="text-2xl md:text-4xl max-w-lg">Kantor Akuntan Publik Mochamad Novelsyah</h1>
                <p data-aos="fade-up" data-aos-delay="400" class="max-w-md mt-5 text-slate-800">Menjadi Kantor Akuntan Publik terdepan dalam pengembangan pengetahuan dan praktek asurans serta non asurans baik di sektor privat maupun sektor publik.</p>
                <div data-aos="fade-up" data-aos-delay="600" class="flex mt-5">
                    <a href="{{ route('frontend.solution') }}" class="w-48 md:w-52 h-12 md:h-14 rounded-full font-medium transition-all duration-300 bg-blue-900 bg-opacity-25 hover:bg-opacity-100 hover:text-white border-2 border-blue-900 focus:ring-2 focus:ring-blue-300 text-blue-900 flex justify-center items-center">
                        Pelajari solusi kami
                    </a>
                </div>
            </div>
        </div>
    </header>
    {{-- END : HEADER --}}
    {{-- START : KEUNGGULAN --}}
    <section class="w-full pt-10 md:pt-20  bg-gradient-to-tr from-blue-900 to-blue-1000 relative">
        <div class="hidden md:block absolute w-full h-full inset-0 overflow-hidden">
            <img src="{{ asset('img/privillege-pattern.svg') }}" class="w-full h-full object-cover object-center opacity-50" alt="">
        </div>
        <div class="w-full h-full relative max-w-screen-custom mx-auto px-4">
            {{-- <div class="w-full py-5 md:py-0">
                <h1 data-aos="fade-up" class="text-2xl md:text-3xl font-bold text-center text-zinc-100">Keunggulan layanan kami</h1>
                <p data-aos="fade-up" data-aos-delay="300" class="mt-3 text-center max-w-lg mx-auto text-zinc-300">Lihat keunggulan yang kami tawarkan kepada anda, sehingga anda tidak ragu lagi dalam memilih kami</p>
            </div> --}}
            {{-- CARD --}}
            {{-- <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-5 pt-10 pb-5 md:transform md:translate-y-16">
                @foreach ($privilleges as $privillege)
                    <div data-aos="fade-up" data-aos-delay="{{ $delayPrivillege++ }}00" class="w-full h-auto py-10 md:py-0 md:h-80 px-5 bg-white md:shadow-xl shadow-zinc-200 rounded-lg flex flex-col items-center justify-center">
                        <img src="{{ asset('storage/uploads/privillege/'. $privillege->icon) }}" class="w-20 mx-auto" alt="">
                        <h1 class="font-semibold text-xl py-5 text-center">{{ $privillege->title }}</h1>
                        <p class="text-center text-zinc-500 max-w-md mx-auto lg:px-5">{{ $privillege->description }}</p>
                    </div>
                @endforeach
            </div> --}}
            <div class="w-full max-w-screen-custom mx-auto px-4">
                <div class="w-full grid grid-cols-1 md:grid-cols-2">
                    <div class="w-full py-8 md:py-0">
                        <h1 data-aos="fade-up" data-aos-delay="200" class="text-2xl md:text-3xl font-bold max-w-md text-white">Pelajari solusi kami</h1>
                        <p data-aos="fade-up" data-aos-delay="400" class="max-w-md mt-5 text-white">Lihat solusi yang kami tawarkan kepada anda</p>
                    </div>
                    <div class="flex justify-end w-full md:transform -translate-x-3">
                        <div class="relative w-full md:w-32 h-28 md:h-full">    
                            <div data-aos="fade-in" id="keunggulan-swiper-prev" class="swiper-button-prev"></div>
                            <div data-aos="fade-in" id="keunggulan-swiper-next" class="swiper-button-next transform -translate-x-5"></div>
                        </div>
                    </div>
                </div>
                {{--  --}}
                <div class="swiper keunggulan-swiper mt-10">
                    <div class="swiper-wrapper">
                        @foreach ($solutions as $solution)
                            {{-- SINGLE --}}
                            <div class="swiper-slide">
                                <div data-aos="zoom-in" data-aos-delay="200" class="w-full md:h-80 px-5 py-10 border hover:border-blue-500 hover:text-blue-500 rounded-lg bg-white transition-all duration-300">
                                    <img src="{{ asset('storage/uploads/solution/'. $solution->icon) }}" class="w-20 mx-auto" alt="">
                                    <h1 class="font-semibold text-xl p-5 text-center">{{ $solution->title }}</h1>
                                    <p class="text-center text-zinc-500">{{ $solution->description }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-20">
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            {{-- <section class="w-full pt-10 md:pt-80 bg-white">
            </section> --}}
        </div>
    </section>
    {{-- END : KEUNGGULAN --}}
    {{-- START : SOLUSI --}}
    
    {{-- END : SOLUSI --}}
    {{-- START : PARTNER --}}
    @include('partials.partner')
    {{-- END : PARTNER --}}
    {{-- START : TESTIMONI --}}
    <section class="w-full py-10 bg-white">
        <div class="w-full max-w-screen-custom mx-auto px-4 grid grid-cols-1 md:grid-cols-2 md:items-center">
            <div class="w-full">
                <div class="w-full relative">
                    <h1 data-aos="fade-up" data-aos-delay="200" class="text-2xl md:text-3xl font-bold max-w-md relative z-10">Tanggapan klien</h1>
                    <p data-aos="fade-up" data-aos-delay="400" class="max-w-md relative z-10 mt-5 text-zinc-500">Bagaimana tanggapan klien kami tentang pelayanan yang kami berikan kepada mereka</p>
                    {{-- ICON --}}
                    <img src="{{ asset('icons/quote.svg') }}" style="-webkit-user-drag: none !important;" class="absolute select-none top-0 left-0 w-20 opacity-30 transform -translate-x-1/2 -translate-y-1/3 rotate-180" alt="">
                    {{-- ICON --}}
                </div>
                <div class="flex w-full transform">
                    <div class="relative w-full md:w-32 h-28 md:transform -translate-x-3">    
                        <div data-aos="fade-in" id="testimonial-swiper-prev" class="swiper-button-prev"></div>
                        <div data-aos="fade-in" data-aos-delay="300" id="testimonial-swiper-next" class="swiper-button-next transform -translate-x-5"></div>
                    </div>
                </div>
            </div>
            {{--  --}}
            <div class="w-full swiper testimonial-swiper md:w-96 mt-10">
                <div class="swiper-wrapper">
                    @foreach ($testimonis as $testimoni)
                        {{-- SINGLE --}}
                        <div class="swiper-slide bg-white">
                            <div data-aos="zoom-in" data-aos-delay="200" class="w-full px-5 py-10 border hover:border-blue-500 hover:text-blue-500 rounded-lg transition-all duration-300" style="background-color: white;">
                                <div class="w-14 h-14 overflow-hidden rounded-full border-transparent">
                                    <img src="{{ asset('storage/uploads/testimoni/'. $testimoni->photo) }}" class="w-full h-full object-cover" alt="">
                                </div>
                                <h1 class="font-bold text-xl pt-5">{{ $testimoni->client }}</h1>
                                <div class="w-24 grid grid-cols-5 pb-5 pt-1 gap-1" style="border: unset; background-color: unset; box-shadow: unset;">
                                    <img src="{{ asset('icons/star.svg') }}" class="w-full" alt="">
                                    <img src="{{ asset('icons/star.svg') }}" class="w-full" alt="">
                                    <img src="{{ asset('icons/star.svg') }}" class="w-full" alt="">
                                    <img src="{{ asset('icons/star.svg') }}" class="w-full" alt="">
                                    <img src="{{ asset('icons/star.svg') }}" class="w-full" alt="">
                                </div>
                                <p class="text-zinc-400 italic">"{{ $testimoni->testimonis }}"</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-20">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    {{-- END : TESTIMONI --}}
    {{-- START : FOOTER --}}
    @include('partials.footer')
    {{-- START : FOOTER --}}
@endsection

@push('scripts')
    <script>
        var keunggulanSwiper = new Swiper(".keunggulan-swiper", {
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
        var testiSwiper = new Swiper(".testimonial-swiper", {
            effect: 'fade',
            crossFade: true,
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
                nextEl: "#testimonial-swiper-next",
                prevEl: "#testimonial-swiper-prev",
            },
            slidesPerView: 1,
            spaceBetween: 20,
        });
    </script>
@endpush