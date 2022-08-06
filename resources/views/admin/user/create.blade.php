@extends('layouts.dashboard')

@section('content')
    <div class="w-full p-3 md:p-5">
        <div class="max-w-screen-xl mx-auto">
            {{-- BREADCRUMBS --}}
            <div class="py-3 md:pb-5 flex justify-between items-center">
                <div class="py-3 md:py-5 flex justify-between">
                    <div id="breadcrumbs" class="flex items-center space-x-3">
                        <a href="{{ route('dashboard') }}" class="text-sm font-medium text-purple-500 hover:underline">Beranda</a>
                        <span class="iconify" data-icon="bx:chevron-right"></span>
                        <a href="{{ route('users.index') }}" class="text-sm font-medium text-purple-500 hover:underline">Pengguna</a>
                        <span class="iconify" data-icon="bx:chevron-right"></span>
                        <p class="text-sm font-medium text-slate-500">Tambah data pengguna</p>
                    </div>
                </div>
            </div>
            {{-- MAIN CONTENT --}}
            <div class="w-full bg-white rounded-md p-5">
                {{-- FORM --}}
                <div class="w-full mt-5">
                    <div class="pb-3">
                        <p class="text-sm font-medium text-slate-500">Pengguna</p>
                        <h1 class="text-slate-900 text-xl">Tambah data pengguna</h1>
                    </div>
                    <form action="{{ route('users.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-5 pb-5">
                        @csrf
                        {{-- NAMA RAPAT --}}
                        <div class="relative z-0 w-full mt-5">
                            <input value="{{ old('name') }}" placeholder="Masukkan nama pengguna" type="text" name="name" class="@error('name') border-red-500 @enderror border-gray-300 block px-3 py-2.5 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 appearance-none outline-none focus:ring-0 focus:border-purple-600 transition-all duration-300 focus:placeholder:text-purple-400"/>
                            @error('name')
                                <span class="error-message text-xs italic text-red-500 mt-0.5">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- NAMA RAPAT --}}
                        <div class="relative z-0 w-full mt-5">
                            <input value="{{ old('email') }}" placeholder="Masukkan email pengguna" type="email" name="email" class="@error('email') border-red-500 @enderror border-gray-300 block px-3 py-2.5 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 appearance-none outline-none focus:ring-0 focus:border-purple-600 transition-all duration-300 focus:placeholder:text-purple-400"/>
                            @error('email')
                                <span class="error-message text-xs italic text-red-500 mt-0.5">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- NAMA RAPAT --}}
                        <div class="relative z-0 w-full mt-5">
                            <input value="{{ old('password') }}" placeholder="Masukkan password pengguna" type="password" name="password" class="@error('password') border-red-500 @enderror border-gray-300 block px-3 py-2.5 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 appearance-none outline-none focus:ring-0 focus:border-purple-600 transition-all duration-300 focus:placeholder:text-purple-400"/>
                            @error('password')
                                <span class="error-message text-xs italic text-red-500 mt-0.5">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- NAMA RAPAT --}}
                        <div class="relative z-0 w-full mt-5">
                            <select value="{{ old('role') }}" name="role" id="role" class="@error('role') border-red-500 @enderror border-gray-300 block py-2.5 px-3 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 appearance-none focus:outline-none focus:ring-0 focus:border-purple-600 peer">
                                <option selected disabled>-- Pilih role pengguna</option>
                                <option value="admin">Admin</option>
                                <option value="employee">Karyawan</option>
                                <option value="guest">Pengunjung</option>
                            </select>
                            {{-- <label for="role" class="@error('role') text-red-500 @enderror text-gray-500 peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-90 left-2 top-3 z-10 origin-[0] peer-focus:left-0 peer-focus:text-purple-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tipe user</label> --}}
                            @error('role')
                                <span class="error-message text-xs italic text-red-500 mt-0.5">{{ $message }}</span>
                            @enderror
                        </div>
                        {{--  --}}
                        <div class="flex items-center space-x-3 mt-5">
                            <a href="{{ route('users.index') }}" class="w-36 h-11 rounded-md text-sm font-medium transition-all duration-300 bg-gradient-to-tr from-red-500 to-red-700 hover:from-red-600 hover:to-red-700 focus:ring-2 focus:ring-red-300 text-white active:text-red-300 flex justify-center items-center">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/></svg>
                                <span class="ml-2">Batalkan</span>
                            </a>
                            <button class="w-36 h-11 rounded-md text-sm font-medium transition-all duration-300 bg-gradient-to-tr from-purple-500 to-purple-700 hover:from-purple-600 hover:to-purple-700 focus:ring-2 focus:ring-purple-300 text-white active:text-purple-300 flex justify-center items-center">
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