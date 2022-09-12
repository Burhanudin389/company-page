@extends('layouts.app')
@section('title', 'Kontak - Konsultan')
@section('content')
    {{-- START : HEADER --}}
    <header class="relative w-full h-96">
        <img data-aos="fade-in" src="{{ asset('img/head-page.svg') }}" class="-z-50 w-full h-full object-cover opacity-50" alt="">
        <div class="absolute pt-10 inset-0 z-10 w-full h-full">
            <div class="max-w-screen-custom h-full px-4 mx-auto flex flex-col justify-center items-center">
                <h1 data-aos="fade-up" data-aos-delay="100" class="text-xl md:text-3xl font-black max-w-md">Solusi</h1>
                <p data-aos="fade-up" data-aos-delay="200" class="max-w-md mx-auto text-center mt-5 text-zinc-500">Lihat solusi yang kami tawarkan kepada anda</p>
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
            @foreach ($solutions as $solution)
                <div x-data="{ openModal : false }">
                    {{-- SINGLE --}}
                    <div data-aos="fade-up" data-aos-delay="{{ $delayPartner++ }}00" class="w-full border rounded-md flex items-center p-5 space-x-5 shadow-lg transition-all duration-300 hover:bg-blue-50 shadow-zinc-100 hover:shadow-zinc-200">
                        <img src="{{ asset('icons/icon-test.svg') }}" alt="">
                        <div class="w-full">
                            <h1 class="text-lg font-semibold">{{ $solution->title }}</h1>
                            <button @click="openModal = true" class="link-icon text-sm text-blue-500 inline-flex items-center">
                                <span>Lihat solusi</span>
                                <svg class="w-4 h-4 ml-2 transition-all duration-300" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/></svg>
                            </button>
                        </div>
                    </div>
                    <div x-cloak x-show="openModal" class="w-full h-screen fixed inset-0 z-50 bg-slate-900 bg-opacity-50 p-3 cursor-pointer">
                        <div x-show="openModal" @click.away="openModal = false" x-transition x-transition.duration.200ms class="w-full bg-white cursor-default rounded-lg mx-auto max-w-3xl md:mt-10 overflow-hidden px-5 py-10 flex flex-col items-center">
                            <img src="{{ asset('storage/uploads/solution/'. $solution->icon) }}" class="w-32" alt="">
                            <h1 class="text-lg mt-5">{{ $solution->title }}</h1>
                            <a href="https://wa.me/6281327305920" target="_blank" class="w-60 h-12 mt-5 text-sm rounded-full font-medium transition-all duration-300 bg-gradient-to-tr from-green-400 to-green-600 hover:from-green-600 hover:to-green-600 focus:ring-2 focus:ring-green-300 text-white flex justify-center items-center">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144l-2.494.654l.666-2.433l-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931a6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646c-.182-.065-.315-.099-.445.099c-.133.197-.513.646-.627.775c-.114.133-.232.148-.43.05c-.197-.1-.836-.308-1.592-.985c-.59-.525-.985-1.175-1.103-1.372c-.114-.198-.011-.304.088-.403c.087-.088.197-.232.296-.346c.1-.114.133-.198.198-.33c.065-.134.034-.248-.015-.347c-.05-.099-.445-1.076-.612-1.47c-.16-.389-.323-.335-.445-.34c-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654c0 .977.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992c.47.205.84.326 1.129.418c.475.152.904.129 1.246.08c.38-.058 1.171-.48 1.338-.943c.164-.464.164-.86.114-.943c-.049-.084-.182-.133-.38-.232z"/></svg>
                                <span class="ml-2">Konsultasikan sekarang</span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
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