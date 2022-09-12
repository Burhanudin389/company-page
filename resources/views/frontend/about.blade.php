@extends('layouts.app')
@section('title', 'Kontak - Konsultan')
@section('content')
    {{-- START : HEADER --}}
    <header class="relative w-full h-96">
        <img data-aos="fade-in" src="{{ asset('img/head-page.svg') }}" class="-z-50 w-full h-full object-cover opacity-50" alt="">
        <div class="absolute pt-10 inset-0 z-10 w-full h-full">
            <div class="max-w-screen-custom h-full px-4 mx-auto flex flex-col justify-center items-center">
                <h1 data-aos="fade-up" class="text-xl md:text-3xl font-black max-w-md">Tentang kami</h1>
                <p data-aos="fade-up" data-aos-delay="300" class="max-w-md mt-5 text-zinc-500 mx-auto text-center">KAP Mochammad Novelsyah adalah platform bisnis terpercaya</p>
            </div>
        </div>
    </header>
    {{-- END : HEADER --}}
    {{-- START : ABOUT --}}
    <div class="w-full pt-20 pb-10">
        <div class="w-full max-w-screen-custom mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-5 items-center">
            <div class="w-full relative">
                <img src="{{ asset('img/back-text-pattern.svg') }}" style="-webkit-user-drag: none;" class="absolute select-none inset-0 w-36 opacity-50 transform -translate-y-1/3 -translate-x-1/2" alt="">
                <h1 data-aos="fade-up" data-aos-delay="100" class="font-bold text-xl md:text-3xl leading-loose">Kenapa anda harus memilih kami sebagai layanan konsultasi bisnis anda?</h1>
                <p data-aos="fade-up" data-aos-delay="200" class="leading-loose pt-5 text-zinc-500 text-justify">Kantor Akuntan Publik (KAP) Mochamad Novelsyah didirikan di Banjarmasin, setelah mendapatkan izin Akuntan Publik dari Kementerian Keuangan sesuai Keputusan Menteri Keuangan Republik Indonesia Nomor 325/KM.1/2022 tanggal 06 April 2022, dan izin Kantor Akuntan Publik dari Kementerian Keuangan sesuai Keputusan Menteri Keuangan Republik Indonesia Nomor 487/KM.1/2022 tanggal 12 Mei 2022. KAP Mochamad Novelsyah merupakan kantor akuntan publik berbadan hukum perseorangan dengan dasar Salinan Akta Notaris No. 24 tanggal 15 Agustus 2022 dari Notaris Juhriansyah, S.H, M.Kn di Banjarmasin. KAP dipimpin oleh Mochamad Novelsyah, CPA dengan alamat kantor di Komplek Samudra Jl Samudra 1 No. 33 RT/RW 45/02, Kelurahan Pemurus Dalam, Kecamatan Banjarmasin Selatan, Kota Banjarmasin Provinsi Kalimantan Selatan 70248.</p>
                <div data-aos="fade-up" data-aos-delay="300" class="mt-5 p-5 bg-slate-100 rounded-md">
                    <h3 class="font-bold">NPWP</h3>
                    <p class="text-sm">60.579.933.7-731.000</p>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" class="w-full xl:p-10 md:pr-0 flex justify-center">
                <img src="{{ asset('img/rect.png') }}" class="w-full rounded-md" alt="">
            </div>
        </div>
    </div>
    {{-- END : ABOUT --}}

    {{-- CARD --}}
    <div class="w-full">
        <div class="w-full max-w-screen-custom mx-auto grid grid-cols-1 md:grid-cols-3 gap-5 py-10 px-4">
            @foreach ($abouts as $about)
                {{-- SINGLE --}}
                <div data-aos="fade-up" data-aos-delay="{{ $delayAbout++ }}00" class="w-full h-auto py-10 md:py-0 md:h-80 px-5 flex-col items-center justify-center">
                    <img src="{{ asset('storage/uploads/about/'. $about->icon) }}" class="w-20 mx-auto" alt="Awokwok">
                    <h1 class="font-bold text-xl pt-10 pb-3 text-center">{{ $about->title}}</h1>
                    <p class="text-center text-zinc-500 max-w-md mx-auto">{{ $about->description }}</p>
                </div>
            @endforeach
        </div>
    </div>

    {{--  --}}
    <div class="w-full py-10">
        <div class="w-full max-w-screen-custom mx-auto px-4">
            <div class="w-full">
                <h1 data-aos="fade-up" data-aos-delay="200" class="text-2xl md:text-3xl font-bold max-w-md">Nilai-Nilai Organisasi</h1>
                <p data-aos="fade-up" data-aos-delay="400" class="max-w-md mt-5 text-zinc-500">Nilai-Nilai Organisasi KAP Mochamad Novelsyah</p>
            </div>
            <div class="w-full mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- SINGLE --}}
                <div data-aos="fade-up" data-aos-delay="100" class="w-full border rounded-md p-5">
                    <h1 class="text-xl">Integritas</h1>
                    <p class="text-zinc-500 mt-3">Sikap keterusterangan, kejujuran, dan karakter untuk bertindak dengan tepat.</p>
                </div>
                {{-- SINGLE --}}
                <div data-aos="fade-up" data-aos-delay="200" class="w-full border rounded-md p-5">
                    <h1 class="text-xl">Independen</h1>
                    <p class="text-zinc-500 mt-3">Sikap dan pemikiran yang tidak terpengaruh oleh tekanan yang mempengaruhi pertimbangan profesional.</p>
                </div>
                {{-- SINGLE --}}
                <div data-aos="fade-up" data-aos-delay="300" class="w-full border rounded-md p-5">
                    <h1 class="text-xl">Profesional</h1>
                    <p class="text-zinc-500 mt-3">Sikap untuk selalu menggunakan kompetensi dan sikap kehati-hatian dalam setiap penugasan.</p>
                </div>
                {{-- SINGLE --}}
                <div data-aos="fade-up" data-aos-delay="400" class="w-full border rounded-md p-5">
                    <h1 class="text-xl">Disiplin</h1>
                    <p class="text-zinc-500 mt-3">Sikap untuk taat dan patuh terhadap ketentuan yang ditetapkan atau disepakati.</p>
                </div>
                {{-- SINGLE --}}
                <div data-aos="fade-up" data-aos-delay="500" class="w-full border rounded-md p-5">
                    <h1 class="text-xl">Kerjasama</h1>
                    <p class="text-zinc-500 mt-3">Sikap untuk bekerjasama, tolong menolong dan berempati.</p>
                </div>
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