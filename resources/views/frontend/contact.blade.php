@extends('layouts.app')
@section('title', 'Kontak - Konsultan')
@section('content')
    {{-- START : HEADER --}}
    <header class="relative w-full h-96">
        <img data-aos="fade-in" src="{{ asset('img/head-page.svg') }}" class="-z-50 w-full h-full object-cover opacity-50" alt="">
        <div class="absolute pt-10 inset-0 z-10 w-full h-full">
            <div class="max-w-screen-custom h-full px-4 mx-auto flex flex-col justify-center items-center">
                <h1 data-aos="fade-up" data-aos-delay="100" class="text-3xl font-black max-w-md">Kontak</h1>
                <p data-aos="fade-up" data-aos-delay="300" class="max-w-md mt-5 text-zinc-500">Punya pertanyaan khusus? Tim kami siap membantu anda</p>
            </div>
        </div>
    </header>
    {{-- END : HEADER --}}
    {{-- START : CONTACT --}}
    <div class="w-full">
        <div class="w-full max-w-screen-custom mx-auto grid grid-cols-1 md:grid-cols-3 pt-10 gap-5">
            {{--  --}}
            <div data-aos="fade-up" data-aos-delay="200" class="w-full h-auto transition-all duration-300 rounded-lg border border-transparent hover:bg-blue-50 hover:border-blue-300 py-10 md:py-0 md:h-64 px-5 flex flex-col items-center justify-center">
                <img src="{{ asset('icons/location.svg') }}" class="w-20 mx-auto" alt="">
                <div class="flex flex-col h-28 mt-5">
                    <h1 class="font-semibold text-lg text-center h-10">Lokasi kantor</h1>
                    <p class="text-center text-zinc-500 max-w-md mx-auto lg:px-5">Wisma Staco, Lt.6, Jl. Casablanca,Kav. 18 Jakarta Selatan. 12870</p>
                </div>
            </div>
            {{--  --}}
            <div data-aos="fade-up" data-aos-delay="400" class="w-full h-auto transition-all duration-300 rounded-lg border border-transparent hover:bg-blue-50 hover:border-blue-300 py-10 md:py-0 md:h-64 px-5 flex flex-col items-center justify-center">
                <img src="{{ asset('icons/call-center.svg') }}" class="w-20 mx-auto" alt="">
                <div class="flex flex-col h-28 mt-5">
                    <h1 class="font-semibold text-lg text-center h-10">Customer services</h1>
                    <a href="tel:6287828713886" class="text-center hover:underline text-zinc-500 max-w-md mx-auto lg:px-5">+62 813-8350-7957</a>
                </div>
            </div>
            {{--  --}}
            <div data-aos="fade-up" data-aos-delay="600" class="w-full h-auto transition-all duration-300 rounded-lg border border-transparent hover:bg-blue-50 hover:border-blue-300 py-10 md:py-0 md:h-64 px-5 flex flex-col items-center justify-center">
                <img src="{{ asset('icons/customer-service.svg') }}" class="w-20 mx-auto" alt="">
                <div class="flex flex-col h-28 mt-5">
                    <h1 class="font-semibold text-lg text-center h-10">Layanan pengaduan</h1>
                    <a href="mailto:care@konsultanku.com" class="text-center hover:underline text-zinc-500 max-w-md mx-auto lg:px-5">care@konsultanku.co.id</a>
                </div>
            </div>
        </div>
        <div class="w-full max-w-screen-custom mx-auto pb-10 px-4">
            <div class="w-full py-10 text-center">
                <h1 data-aos="fade-up" data-aos-delay="100" class="text-2xl md:text-3xl font-bold text-zinc-900">Kantor kami</h1>
                <p data-aos="fade-up" data-aos-delay="300" class="mt-3 max-w-lg mx-auto text-zinc-500">Temukan kami di google maps</p>
            </div>
            <iframe data-aos="fade-up" data-aos-delay="500" class="w-full h-96 rounded-md" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63356.91155967996!2d109.52917877106215!3d-7.031960562487451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fe01fab873f61%3A0xc109484cee38731e!2sKajen%2C%20Kec.%20Kajen%2C%20Kabupaten%20Pekalongan%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1660053271182!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    {{-- END : CONTACT --}}
    {{-- START : FOOTER --}}
    @include('partials.footer')
    {{-- START : FOOTER --}}
@endsection

@push('scripts')

@endpush