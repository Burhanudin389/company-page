@extends('layouts.app')
@section('title', 'Kontak - Konsultan')
@section('content')
    {{-- START : HEADER --}}
    <header class="relative w-full h-96">
        <img data-aos="fade-in" src="{{ asset('img/head-page.svg') }}" class="-z-50 w-full h-full object-cover opacity-50" alt="">
        <div class="absolute pt-10 inset-0 z-10 w-full h-full">
            <div class="max-w-screen-custom h-full px-4 mx-auto flex flex-col justify-center items-center">
                <h1 data-aos="fade-up" data-aos-delay="100" class="text-xl md:text-3xl font-black max-w-md">Kontak</h1>
                <p data-aos="fade-up" data-aos-delay="300" class="max-w-md mx-auto text-center mt-5 text-zinc-500">Punya pertanyaan khusus? Kami siap membantu anda</p>
            </div>
        </div>
    </header>
    {{-- END : HEADER --}}
    {{-- START : CONTACT --}}
    <div class="w-full">
        <div class="w-full max-w-screen-custom mx-auto grid grid-cols-1 md:grid-cols-3 pt-10 gap-5">
            @foreach ($contacts as $contact)
                {{--  --}}
                <div data-aos="fade-up" data-aos-delay="{{ $delayContact++ }}00" class="w-full h-auto transition-all duration-300 rounded-lg border border-transparent hover:bg-blue-50 hover:border-blue-300 py-10 md:h-72 px-5 flex flex-col items-center justify-center">
                    <img src="{{ asset('storage/uploads/contact/'. $contact->icon) }}" class="w-20 mx-auto" alt="">
                    <div class="flex flex-col h-32 mt-5">
                        <h1 class="font-semibold text-lg text-center h-10">{{ $contact->name }}</h1>
                        @if ($contact->type === 'whatsapp')
                            <a href="https://wa.me/{{ $contact->contact }}" target="_blank" class="text-center hover:underline text-zinc-500 max-w-md mx-auto lg:px-5">+{{ $contact->contact }}</a>
                        @elseif ($contact->type === 'email')
                            <a href="mailto:{{ $contact->contact }}" class="text-center hover:underline text-zinc-500 max-w-md mx-auto lg:px-5">{{ $contact->contact }}</a>
                        @else
                            <p class="text-center text-zinc-500 max-w-md mx-auto lg:px-5">{{ $contact->contact }}</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
        <div class="w-full max-w-screen-custom mx-auto py-10 px-4">
            <div class="w-full py-10 text-center">
                <h1 data-aos="fade-up" data-aos-delay="100" class="text-2xl md:text-3xl font-bold text-zinc-900">Kantor kami</h1>
                <p data-aos="fade-up" data-aos-delay="300" class="mt-3 max-w-lg mx-auto text-zinc-500">Temukan kami di google maps</p>
            </div>
            <iframe data-aos="fade-up" data-aos-delay="500" class="w-full h-96 rounded-md" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.993551831464!2d114.62031601406706!3d-3.351714042309919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de427400c2df4f1%3A0x97f7dc8625fa072b!2sJl.%20Samudra%20I%20No.33%2C%20RT.45%2C%20Pemurus%20Dalam%2C%20Kec.%20Banjarmasin%20Sel.%2C%20Kota%20Banjarmasin%2C%20Kalimantan%20Selatan%2070248!5e0!3m2!1sid!2sid!4v1661001078326!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    {{-- END : CONTACT --}}
    {{-- START : FOOTER --}}
    @include('partials.footer')
    {{-- START : FOOTER --}}
@endsection

@push('scripts')

@endpush