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
                        <p class="text-sm font-medium text-slate-500">Kelola informasi halaman</p>
                    </div>
                </div>
            </div>
            {{-- MAIN CONTENT --}}
            <div class="w-full bg-white rounded-md p-5">
                <div class="flex items-center justify-between mb-10">
                    <div class="py-3">
                        <p class="text-sm font-medium text-slate-500">Metadata</p>
                        <h1 class="text-slate-900 text-xl">Kelola informasi halaman website</h1>
                    </div>
                </div>
                {{-- CONTENT --}}
                <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-5 mt-3">
                    {{--  --}}
                    <div x-data="{ openEditLogoForm : false }" class="w-full border p-5 rounded-md shadow-md flex items-center relative">
                        <form x-show="openEditLogoForm" action="{{ route('metadata.logo', $data->id) }}" method="POST" enctype="multipart/form-data" class="w-full h-full p-5 flex items-center justify-between absolute inset-0 bg-white">
                            @csrf
                            <input type="file" name="logo" required>
                            <div class="flex">
                                <button class="w-8 h-8 rounded-md text-sm font-medium transition-all duration-300 bg-gradient-to-tr from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-700 focus:ring-2 focus:ring-blue-300 text-white active:text-blue-300 flex justify-center items-center">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M4 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1V9.5A1.5 1.5 0 0 1 5.5 8h5A1.5 1.5 0 0 1 12 9.5V13a1 1 0 0 0 1-1V5.621a1 1 0 0 0-.293-.707l-1.621-1.621A1 1 0 0 0 10.379 3H10v1.5A1.5 1.5 0 0 1 8.5 6h-2A1.5 1.5 0 0 1 5 4.5V3H4Zm2 0v1.5a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5V3H6Zm5 10V9.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0-.5.5V13h6ZM2 4a2 2 0 0 1 2-2h6.379a2 2 0 0 1 1.414.586l1.621 1.621A2 2 0 0 1 14 5.621V12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4Z"/></svg>
                                </button>
                                <button @click="openEditLogoForm = false" class="ml-3 w-8 h-8 rounded-md text-sm font-medium transition-all duration-300 bg-gradient-to-tr from-red-500 to-red-700 hover:from-red-600 hover:to-red-700 focus:ring-2 focus:ring-red-300 text-white active:text-red-300 flex justify-center items-center">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8L4.646 5.354a.5.5 0 0 1 0-.708z"/></svg>
                                </button>
                            </div>
                        </form>
                        <div class="w-full flex items-center justify-between space-x-5">
                            <div class="w-full flex items-center">
                                <div class="block w-16 h-16 bg-slate-300 overflow-hidden rounded-full">
                                    <img src="{{ asset('storage/uploads/metadata/'. $data->logo) }}" class="w-full h-full object-cover" alt="">
                                </div>
                                <div class="ml-5">
                                    <h1 class="text-lg font-medium">Logo</h1>
                                    <p class="text-sm">Logo website</p>
                                </div>
                            </div>
                            <button @click="openEditLogoForm = true" class="w-8 h-8 flex items-center justify-center rounded-md transition-all duration-300 bg-yellow-500 hover:bg-yellow-700 focus:ring-2 focus:ring-yellow-300 text-white">
                                <span class="iconify text-lg" data-icon="akar-icons:edit"></span>
                            </button>
                        </div>
                    </div>
                    {{--  --}}
                    <div x-data="{ openEditFaviconForm : false }" class="w-full border p-5 rounded-md shadow-md flex items-center relative">
                        <form x-show="openEditFaviconForm" action="{{ route('metadata.favicon', $data->id) }}" method="POST" enctype="multipart/form-data" class="w-full h-full p-5 flex items-center justify-between absolute inset-0 bg-white">
                            @csrf
                            <input type="file" name="favicon" required>
                            <div class="flex">
                                <button class="w-8 h-8 rounded-md text-sm font-medium transition-all duration-300 bg-gradient-to-tr from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-700 focus:ring-2 focus:ring-blue-300 text-white active:text-blue-300 flex justify-center items-center">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M4 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1V9.5A1.5 1.5 0 0 1 5.5 8h5A1.5 1.5 0 0 1 12 9.5V13a1 1 0 0 0 1-1V5.621a1 1 0 0 0-.293-.707l-1.621-1.621A1 1 0 0 0 10.379 3H10v1.5A1.5 1.5 0 0 1 8.5 6h-2A1.5 1.5 0 0 1 5 4.5V3H4Zm2 0v1.5a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5V3H6Zm5 10V9.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0-.5.5V13h6ZM2 4a2 2 0 0 1 2-2h6.379a2 2 0 0 1 1.414.586l1.621 1.621A2 2 0 0 1 14 5.621V12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4Z"/></svg>
                                </button>
                                <button @click="openEditFaviconForm = false" class="ml-3 w-8 h-8 rounded-md text-sm font-medium transition-all duration-300 bg-gradient-to-tr from-red-500 to-red-700 hover:from-red-600 hover:to-red-700 focus:ring-2 focus:ring-red-300 text-white active:text-red-300 flex justify-center items-center">
                                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8L4.646 5.354a.5.5 0 0 1 0-.708z"/></svg>
                                </button>
                            </div>
                        </form>
                        <div class="w-full flex items-center justify-between space-x-5">
                            <div class="w-full flex items-center">
                                <div class="block w-16 h-16 bg-slate-300 overflow-hidden rounded-full">
                                    <img src="{{ asset('storage/uploads/metadata/'. $data->favicon) }}" class="w-full h-full object-cover" alt="">
                                </div>
                                <div class="ml-5">
                                    <h1 class="text-lg font-medium">Favicon</h1>
                                    <p class="text-sm">Mini icon (size: 32 x 32)</p>
                                </div>
                            </div>
                            <button @click="openEditFaviconForm = true" class="w-8 h-8 flex items-center justify-center rounded-md transition-all duration-300 bg-yellow-500 hover:bg-yellow-700 focus:ring-2 focus:ring-yellow-300 text-white">
                                <span class="iconify text-lg" data-icon="akar-icons:edit"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection