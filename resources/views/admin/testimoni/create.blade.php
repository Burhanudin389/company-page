@extends('layouts.dashboard')

@section('content')
    <div class="w-full p-3 md:p-5">
        <div class="max-w-screen-xl mx-auto">
            {{-- BREADCRUMBS --}}
            <div class="py-3 md:pb-5 flex justify-between items-center">
                <div class="py-3 md:py-5 flex justify-between">
                    <div id="breadcrumbs" class="flex items-center space-x-3">
                        <a href="{{ route('dashboard') }}" class="text-sm font-medium text-blue-500 hover:underline">Beranda</a>
                        <span class="iconify" data-icon="bx:chevron-right"></span>
                        <p class="text-sm font-medium text-slate-500">Tambah data testimoni</p>
                    </div>
                </div>
            </div>
            {{-- MAIN CONTENT --}}
            <div class="w-full bg-white rounded-md p-5">
                {{-- FORM --}}
                <div class="w-full mt-5">
                    <div class="pb-3">
                        <p class="text-sm font-medium text-slate-500">Testimoni</p>
                        <h1 class="text-slate-900 text-xl">Tambah data testimoni</h1>
                    </div>
                    <form action="{{ route('testimoni.store') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 gap-5 pb-5">
                        @csrf
                        {{-- ICON --}}
                        <div class="relative z-0 w-full mt-5 bg-slate-100 rounded-md p-5">
                            <input type="file" name="photo" class="@error('photo') border-red-500 @enderror border-gray-300 py-2.5 w-full md:w-1/2 text-sm text-gray-900 bg-transparent appearance-none outline-none focus:ring-0 focus:border-blue-600 transition-all duration-300 focus:placeholder:text-blue-400"/>
                            @error('photo')
                                <span class="error-message text-xs italic text-red-500 mt-0.5">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- TITLE --}}
                        <div class="relative z-0 w-full mt-5">
                            <input value="{{ old('client') }}" placeholder="Masukkan nama klien" type="text" name="client" class="@error('client') border-red-500 @enderror border-gray-300 block px-3 py-2.5 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 appearance-none outline-none focus:ring-0 focus:border-blue-600 transition-all duration-300 focus:placeholder:text-blue-400"/>
                            @error('client')
                                <span class="error-message text-xs italic text-red-500 mt-0.5">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- DESCRIPTION --}}
                        <div class="relative z-0 w-full mt-5">
                            <textarea placeholder="Masukkan testimoni" rows="3" name="testimonis" class="@error('testimonis') border-red-500 @enderror border-gray-300 block px-3 py-2.5 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 appearance-none outline-none focus:ring-0 focus:border-blue-600 transition-all duration-300 focus:placeholder:text-blue-400">{{ old('testimonis') }}</textarea>
                            @error('testimonis')
                                <span class="error-message text-xs italic text-red-500 mt-0.5">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- BUTTON --}}
                        <div class="flex items-center space-x-3 mt-5">
                            <a href="{{ route('layout.homepage') }}" class="w-36 h-11 rounded-md text-sm font-medium transition-all duration-300 bg-gradient-to-tr from-red-500 to-red-700 hover:from-red-600 hover:to-red-700 focus:ring-2 focus:ring-red-300 text-white active:text-red-300 flex justify-center items-center">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/></svg>
                                <span class="ml-2">Batalkan</span>
                            </a>
                            <button class="w-36 h-11 rounded-md text-sm font-medium transition-all duration-300 bg-gradient-to-tr from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-700 focus:ring-2 focus:ring-blue-300 text-white active:text-blue-300 flex justify-center items-center">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M4 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1V9.5A1.5 1.5 0 0 1 5.5 8h5A1.5 1.5 0 0 1 12 9.5V13a1 1 0 0 0 1-1V5.621a1 1 0 0 0-.293-.707l-1.621-1.621A1 1 0 0 0 10.379 3H10v1.5A1.5 1.5 0 0 1 8.5 6h-2A1.5 1.5 0 0 1 5 4.5V3H4Zm2 0v1.5a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5V3H6Zm5 10V9.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0-.5.5V13h6ZM2 4a2 2 0 0 1 2-2h6.379a2 2 0 0 1 1.414.586l1.621 1.621A2 2 0 0 1 14 5.621V12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4Z"/></svg>
                                <span class="ml-2">Simpan</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection