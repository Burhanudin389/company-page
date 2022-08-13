@extends('layouts.dashboard')

@section('content')
    <div class="w-full p-3 md:p-5">
        <div class="max-w-screen-xl mx-auto">
            {{-- BREADCRUMBS --}}
            <div class="py-3 md:pb-5 flex justify-between items-center">
                <div class="py-3 md:py-5 flex justify-between">
                    <div id="breadcrumbs" class="flex items-center space-x-3">
                        <a href="{{ route('dashboard') }}" class="text-sm font-medium text-blue-500 hover:underline">Dashboard</a>
                        <span class="iconify" data-icon="bx:chevron-right"></span>
                        <p class="text-sm font-medium text-slate-500">Layout</p>
                        <span class="iconify" data-icon="bx:chevron-right"></span>
                        <p class="text-sm font-medium text-slate-500">Halaman tentang kami</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col space-y-6">
                @include('admin.privillege.index')
            </div>
        </div>
    </div>
@endsection