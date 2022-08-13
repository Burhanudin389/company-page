@extends('layouts.app')
@section('title', 'Kontak - Konsultan')
@section('content')
    {{-- START : HEADER --}}
    <header class="relative w-full h-96">
        <img data-aos="fade-in" src="{{ asset('img/head-page.svg') }}" class="-z-50 w-full h-full object-cover opacity-50" alt="">
        <div class="absolute pt-10 inset-0 z-10 w-full h-full">
            <div class="max-w-screen-custom h-full px-4 mx-auto flex flex-col justify-center items-center">
                <h1 data-aos="fade-up" data-aos-delay="100" class="text-3xl font-black max-w-md">Solusi</h1>
                <p data-aos="fade-up" data-aos-delay="200" class="max-w-md mt-5 text-zinc-500">Lihat solusi yang kami tawarkan kepada anda</p>
            </div>
        </div>
    </header>
    {{-- END : HEADER --}}
    {{-- START : ABOUT --}}
    <div class="w-full py-10">
        <div data-aos="fade-up" data-aos-delay="100" class="w-full max-w-screen-custom mx-auto px-4 py-10 relative">
            <img src="{{ asset('img/back-text-pattern.svg') }}" style="-webkit-user-drag: none;" class="absolute select-none inset-0 w-36 opacity-50 transform -translate-x-1/3" alt="">
            <h1 data-aos="fade-up" data-aos-delay="300" class="font-bold text-xl md:text-3xl">Pelajari solusi kami</h1>
            <p class="pt-3 text-clip text-sm md:text-base max-w-lg text-zinc-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, eligendi! Quis saepe quo incidunt ducimus voluptatem</p>
        </div>
        <div class="w-full max-w-screen-custom mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            {{-- SINGLE --}}
            <div data-aos="fade-up" data-aos-delay="200" class="w-full border rounded-md flex items-center p-5 space-x-5 shadow-lg transition-all duration-300 hover:bg-blue-50 shadow-zinc-100 hover:shadow-zinc-200">
                <img src="{{ asset('icons/icon-test.svg') }}" alt="">
                <div class="w-full">
                    <h1 class="text-lg font-semibold">Pajak</h1>
                    <a href="#" class="link-icon text-sm text-blue-500 inline-flex items-center">
                        <span>Lihat solusi</span>
                        <svg class="w-4 h-4 ml-2 transition-all duration-300" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/></svg>
                    </a>
                </div>
            </div>
            {{-- SINGLE --}}
            <div data-aos="fade-up" data-aos-delay="300" class="w-full border rounded-md flex items-center p-5 space-x-5 shadow-lg transition-all duration-300 hover:bg-blue-50 shadow-zinc-100 hover:shadow-zinc-200">
                <img src="{{ asset('icons/icon-test.svg') }}" alt="">
                <div class="w-full">
                    <h1 class="text-lg font-semibold">Akuntansi</h1>
                    <a href="#" class="link-icon text-sm text-blue-500 inline-flex items-center">
                        <span>Lihat solusi</span>
                        <svg class="w-4 h-4 ml-2 transition-all duration-300" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/></svg>
                    </a>
                </div>
            </div>
            {{-- SINGLE --}}
            <div data-aos="fade-up" data-aos-delay="400" class="w-full border rounded-md flex items-center p-5 space-x-5 shadow-lg transition-all duration-300 hover:bg-blue-50 shadow-zinc-100 hover:shadow-zinc-200">
                <img src="{{ asset('icons/icon-test.svg') }}" alt="">
                <div class="w-full">
                    <h1 class="text-lg font-semibold">Audit</h1>
                    <a href="#" class="link-icon text-sm text-blue-500 inline-flex items-center">
                        <span>Lihat solusi</span>
                        <svg class="w-4 h-4 ml-2 transition-all duration-300" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/></svg>
                    </a>
                </div>
            </div>
            {{-- SINGLE --}}
            <div data-aos="fade-up" data-aos-delay="500" class="w-full border rounded-md flex items-center p-5 space-x-5 shadow-lg transition-all duration-300 hover:bg-blue-50 shadow-zinc-100 hover:shadow-zinc-200">
                <img src="{{ asset('icons/icon-test.svg') }}" alt="">
                <div class="w-full">
                    <h1 class="text-lg font-semibold">Keuangan</h1>
                    <a href="#" class="link-icon text-sm text-blue-500 inline-flex items-center">
                        <span>Lihat solusi</span>
                        <svg class="w-4 h-4 ml-2 transition-all duration-300" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/></svg>
                    </a>
                </div>
            </div>
            {{-- SINGLE --}}
            <div data-aos="fade-up" data-aos-delay="600" class="w-full border rounded-md flex items-center p-5 space-x-5 shadow-lg transition-all duration-300 hover:bg-blue-50 shadow-zinc-100 hover:shadow-zinc-200">
                <img src="{{ asset('icons/icon-test.svg') }}" alt="">
                <div class="w-full">
                    <h1 class="text-lg font-semibold">Nama solusi</h1>
                    <a href="#" class="link-icon text-sm text-blue-500 inline-flex items-center">
                        <span>Lihat solusi</span>
                        <svg class="w-4 h-4 ml-2 transition-all duration-300" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/></svg>
                    </a>
                </div>
            </div>
            {{-- SINGLE --}}
            <div data-aos="fade-up" data-aos-delay="700" class="w-full border rounded-md flex items-center p-5 space-x-5 shadow-lg transition-all duration-300 hover:bg-blue-50 shadow-zinc-100 hover:shadow-zinc-200">
                <img src="{{ asset('icons/icon-test.svg') }}" alt="">
                <div class="w-full">
                    <h1 class="text-lg font-semibold">Nama solusi</h1>
                    <a href="#" class="link-icon text-sm text-blue-500 inline-flex items-center">
                        <span>Lihat solusi</span>
                        <svg class="w-4 h-4 ml-2 transition-all duration-300" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- END : ABOUT --}}
    {{-- START : PARTNER --}}
    @include('partials.partner')
    {{-- START : CTA --}}
    @include('partials.whatsapp-section')
    {{-- END : CTA --}}
    {{-- START : FOOTER --}}
    @include('partials.footer')
    {{-- START : FOOTER --}}
@endsection

@push('scripts')
@endpush