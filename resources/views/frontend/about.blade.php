@extends('layouts.app')
@section('title', 'Kontak - Konsultan')
@section('content')
    {{-- START : HEADER --}}
    <header class="relative w-full h-96">
        <img data-aos="fade-in" src="{{ asset('img/head-page.svg') }}" class="-z-50 w-full h-full object-cover opacity-50" alt="">
        <div class="absolute pt-10 inset-0 z-10 w-full h-full">
            <div class="max-w-screen-custom h-full px-4 mx-auto flex flex-col justify-center items-center">
                <h1 data-aos="fade-up" class="text-3xl font-black max-w-md">Tentang kami</h1>
                <p data-aos="fade-up" data-aos-delay="300" class="max-w-md mt-5 text-zinc-500">Konsultanku adalah platform bisnis terpercaya</p>
            </div>
        </div>
    </header>
    {{-- END : HEADER --}}
    {{-- START : ABOUT --}}
    <div class="w-full pt-20 pb-10 md:pt-0">
        <div class="w-full max-w-screen-custom mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-5 items-center">
            <div class="w-full relative">
                <img src="{{ asset('img/back-text-pattern.svg') }}" style="-webkit-user-drag: none;" class="absolute select-none inset-0 w-36 opacity-50 transform -translate-y-1/3 -translate-x-1/2" alt="">
                <h1 data-aos="fade-up" data-aos-delay="100" class="font-bold text-3xl">Kenapa anda harus memilih kami sebagai layanan konsultasi bisnis anda?</h1>
                <p data-aos="fade-up" data-aos-delay="400" class="leading-loose pt-5 text-zinc-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi molestiae aperiam error deserunt totam voluptas maiores. Nemo ad qui soluta in, non temporibus error quis eaque unde velit molestias labore. Nemo ad qui soluta in, non temporibus error quis eaque unde velit molestias labore.Nemo ad qui soluta in, non temporibus error quis eaque unde velit molestias labore.Nemo ad qui soluta in, non temporibus error quis eaque unde velit molestias labore.Nemo ad qui soluta in, non temporibus error quis eaque unde velit molestias labore.Nemo ad qui soluta in, non temporibus error quis eaque unde velit molestias labore.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" class="w-full md:p-24 md:pr-0 flex justify-center">
                <img src="{{ asset('img/rect.png') }}" class="w-full rounded-md" alt="">
            </div>
        </div>
    </div>
    {{-- END : ABOUT --}}

    {{-- CARD --}}
    <div class="w-full">
        <div class="w-full max-w-screen-custom mx-auto grid grid-cols-1 md:grid-cols-3 gap-5 py-10 px-4">
            {{-- SINGLE --}}
            <div data-aos="fade-up" data-aos-delay="100" class="w-full h-auto py-10 md:py-0 md:h-80 px-5 flex-col items-center justify-center">
                <img src="{{ asset('icons/icon-test.svg') }}" class="w-20 mx-auto" alt="Awokwok">
                <h1 class="font-bold text-xl py-5 text-center">Judul disini</h1>
                <p class="text-center text-zinc-500 max-w-md mx-auto">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis reiciendis saepe, expedita blanditiis sunt laboriosam id animi eveniet officia explicabo.</p>
            </div>
            {{-- SINGLE --}}
            <div data-aos="fade-up" data-aos-delay="300" class="w-full h-auto py-10 md:py-0 md:h-80 px-5 flex-col items-center justify-center">
                <img src="{{ asset('icons/icon-test.svg') }}" class="w-20 mx-auto" alt="Awokwok">
                <h1 class="font-bold text-xl py-5 text-center">Judul disini</h1>
                <p class="text-center text-zinc-500 max-w-md mx-auto">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis reiciendis saepe, expedita blanditiis sunt laboriosam id animi eveniet officia explicabo.</p>
            </div>
            {{-- SINGLE --}}
            <div data-aos="fade-up" data-aos-delay="500" class="w-full h-auto py-10 md:py-0 md:h-80 px-5 flex-col items-center justify-center">
                <img src="{{ asset('icons/icon-test.svg') }}" class="w-20 mx-auto" alt="Awokwok">
                <h1 class="font-bold text-xl py-5 text-center">Judul disini</h1>
                <p class="text-center text-zinc-500 max-w-md mx-auto">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis reiciendis saepe, expedita blanditiis sunt laboriosam id animi eveniet officia explicabo.</p>
            </div>
        </div>
    </div>

    {{-- START : CTA --}}
    @include('partials.whatsapp-section')
    {{-- END : CTA --}}
    {{-- START : FOOTER --}}
    @include('partials.footer')
    {{-- START : FOOTER --}}
@endsection

@push('scripts')

@endpush