<aside id="main-sidebar" class="fixed top-0 left-0 z-40 transition-all duration-300 border-r lg:sticky lg:z-0 transform -translate-x-full lg:translate-x-0 w-72 h-screen overflow-y-auto bg-white p-3">
    <!-- LOGO -->
    <div class="w-full flex space-x-3 px-3 pt-3">
        @php
            $logo = App\Models\MetaData::first();
        @endphp
        <img src="{{ asset('storage/uploads/metadata/'. $logo->logo) }}" class="w-32" alt="MAIN LOGO">
        <div id="version" class="lg:hidden px-5 py-1 text-xs rounded-full bg-green-200 text-green-700 font-medium flex items-center justify-center">
            <span>v1.0.0</span>
        </div>
    </div>
    <!-- MENU -->
    <div class="w-full mt-10" x-data="{ selected: false }">
        <div id="sidebar-menu" @click.away="selected = false">
            <!-- GROUP MENU -->
            <ul class="mt-10">
                <li class="uppercase font-medium text-slate-400 text-xs tracking-wide mb-6 px-3">Admin Menu</li>
                <!-- SINGLE MENU -->
                <li class="relative text-sm">
                    <a href="{{ route('dashboard') }}" class="flex items-center w-full p-3 rounded-md transition-all duration-300 {{ request()->routeIs('dashboard') ? 'bg-blue-500 hover:bg-blue-700 my-2 shadow-lg' : 'text-slate-500' }}">
                        <svg class="w-6 h-6 {{  request()->routeIs('dashboard') ? 'text-white' : '' }}" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
                        <span class="ml-3 text-sm {{  request()->routeIs('dashboard') ? 'text-white' : '' }}">Dashboard</span>
                    </a>
                </li>
                <!-- SINGLE MENU -->
                <li class="relative text-sm">
                    <a href="{{ route('users.index') }}" class="flex items-center w-full p-3 rounded-md transition-all duration-300 {{ request()->routeIs('users.*') ? 'bg-blue-500 hover:bg-blue-700 my-2 shadow-lg' : 'text-slate-500' }}">
                        <svg class="w-6 h-6 {{  request()->routeIs('users.*') ? 'text-white' : '' }}" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2A10.13 10.13 0 0 0 2 12a10 10 0 0 0 4 7.92V20h.1a9.7 9.7 0 0 0 11.8 0h.1v-.08A10 10 0 0 0 22 12A10.13 10.13 0 0 0 12 2zM8.07 18.93A3 3 0 0 1 11 16.57h2a3 3 0 0 1 2.93 2.36a7.75 7.75 0 0 1-7.86 0zm9.54-1.29A5 5 0 0 0 13 14.57h-2a5 5 0 0 0-4.61 3.07A8 8 0 0 1 4 12a8.1 8.1 0 0 1 8-8a8.1 8.1 0 0 1 8 8a8 8 0 0 1-2.39 5.64z"/><path fill="currentColor" d="M12 6a3.91 3.91 0 0 0-4 4a3.91 3.91 0 0 0 4 4a3.91 3.91 0 0 0 4-4a3.91 3.91 0 0 0-4-4zm0 6a1.91 1.91 0 0 1-2-2a1.91 1.91 0 0 1 2-2a1.91 1.91 0 0 1 2 2a1.91 1.91 0 0 1-2 2z"/></svg>
                        <span class="ml-3 text-sm {{  request()->routeIs('users.*') ? 'text-white' : '' }}">Manajemen pengguna</span>
                    </a>
                </li>
            </ul>
            <!-- GROUP MENU -->
            <ul class="mt-8">
                <li class="uppercase font-medium text-slate-400 text-xs tracking-wide mb-3 px-3">Pengelola data</li>
                <!-- ACCORDION MENU -->
                <li class="relative text-sm">
                    <button type="button" class="flex items-center justify-between w-full p-3 rounded-md {{ request()->routeIs(['metadata.*', 'layout.*', 'privillege.*', 'payment.*', 'solution.*', 'partner.*', 'testimoni.*']) ? 'bg-blue-500 hover:bg-blue-700 mb-3 shadow-lg' : 'text-slate-500 hover:text-slate-500' }}" @click="selected !== 1 ? selected = 1 : selected = null">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 {{ request()->routeIs(['metadata.*', 'layout.*', 'privillege.*', 'payment.*', 'solution.*', 'partner.*', 'testimoni.*']) ? 'text-white' : '' }}" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6zM7.58 4.08L6.15 2.65C3.75 4.48 2.17 7.3 2.03 10.5h2a8.445 8.445 0 0 1 3.55-6.42zm12.39 6.42h2c-.15-3.2-1.73-6.02-4.12-7.85l-1.42 1.43a8.495 8.495 0 0 1 3.54 6.42z"/></svg>
                            <span class="ml-3 text-sm {{ request()->routeIs(['metadata.*', 'layout.*', 'privillege.*', 'payment.*', 'solution.*', 'partner.*', 'testimoni.*']) ? 'text-white' : '' }}">Kelola halaman</span>
                        </div>
                        <span class="iconify {{ request()->routeIs(['metadata.*', 'layout.*', 'privillege.*', 'payment.*', 'solution.*', 'partner.*', 'testimoni.*']) ? 'text-white' : '' }}" data-icon="akar-icons:chevron-down"></span>                               
                    </button>
                    <div class="relative overflow-hidden transition-all max-h-0 duration-300 {{ request()->routeIs(['metadata.*', 'layout.*', 'privillege.*', 'payment.*', 'solution.*', 'partner.*', 'testimoni.*']) ? 'sidebar-menu-active' : '' }}" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                        <ul class="py-3 border rounded-md text-slate-500 flex flex-col space-y-4 px-4">
                            {{-- SINGLE MENU --}}
                            <li class="transition-all duration-300 transform hover:translate-x-1 {{ request()->routeIs(['metadata.*']) ? 'font-medium text-blue-500' : '' }}">
                                <a href="{{ route('metadata.index') }}" class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256"><g fill="currentColor" fill-rule="evenodd"><path fill-rule="nonzero" d="M128 226c-13.27 0-25.936-2.584-37.994-7.752c-12.059-5.168-22.49-12.154-31.295-20.959c-8.805-8.805-15.791-19.236-20.959-31.295C32.584 153.936 30 141.271 30 128c0-13.27 2.584-25.936 7.752-37.994c5.168-12.059 12.154-22.49 20.959-31.295c8.805-8.805 19.236-15.791 31.295-20.959C102.064 32.584 114.729 30 128 30c13.27 0 25.936 2.584 37.994 7.752c12.059 5.168 22.49 12.154 31.295 20.959c8.805 8.805 15.791 19.236 20.959 31.295C223.416 102.064 226 114.729 226 128c0 13.27-2.584 25.936-7.752 37.994c-5.168 12.059-12.154 22.49-20.959 31.295c-8.805 8.805-19.236 15.791-31.295 20.959C153.936 223.416 141.271 226 128 226zm0-16c11.104 0 21.701-2.162 31.791-6.486c10.09-4.325 18.818-10.17 26.186-17.537c7.367-7.368 13.212-16.096 17.537-26.186C207.838 149.701 210 139.104 210 128s-2.162-21.701-6.486-31.791c-4.325-10.09-10.17-18.818-17.537-26.186c-7.368-7.367-16.096-13.212-26.186-17.537C149.701 48.162 139.104 46 128 46s-21.701 2.162-31.791 6.486c-10.09 4.325-18.818 10.17-26.186 17.537c-7.367 7.368-13.212 16.096-17.537 26.186C48.162 106.299 46 116.896 46 128s2.162 21.701 6.486 31.791c4.325 10.09 10.17 18.818 17.537 26.186c7.368 7.367 16.096 13.212 26.186 17.537C106.299 207.838 116.896 210 128 210z"/><path d="M128 96c9.941 0 18-8.059 18-18s-8.059-18-18-18a17.932 17.932 0 0 0-11.945 4.534A17.956 17.956 0 0 0 110 78c0 9.941 8.059 18 18 18z"/></g></svg>
                                    <span class="ml-2">Metadata</span>
                                </a>
                            </li>
                            {{-- SINGLE MENU --}}
                            <li class="transition-all duration-300 transform hover:translate-x-1 {{ request()->routeIs(['layout.homepage', 'privillege.*', 'payment.*', 'solution.*', 'partner.*', 'testimoni.*']) ? 'font-medium text-blue-500' : '' }}">
                                <a href="{{ route('layout.homepage') }}" class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256"><g fill="currentColor" fill-rule="evenodd"><path fill-rule="nonzero" d="M128 226c-13.27 0-25.936-2.584-37.994-7.752c-12.059-5.168-22.49-12.154-31.295-20.959c-8.805-8.805-15.791-19.236-20.959-31.295C32.584 153.936 30 141.271 30 128c0-13.27 2.584-25.936 7.752-37.994c5.168-12.059 12.154-22.49 20.959-31.295c8.805-8.805 19.236-15.791 31.295-20.959C102.064 32.584 114.729 30 128 30c13.27 0 25.936 2.584 37.994 7.752c12.059 5.168 22.49 12.154 31.295 20.959c8.805 8.805 15.791 19.236 20.959 31.295C223.416 102.064 226 114.729 226 128c0 13.27-2.584 25.936-7.752 37.994c-5.168 12.059-12.154 22.49-20.959 31.295c-8.805 8.805-19.236 15.791-31.295 20.959C153.936 223.416 141.271 226 128 226zm0-16c11.104 0 21.701-2.162 31.791-6.486c10.09-4.325 18.818-10.17 26.186-17.537c7.367-7.368 13.212-16.096 17.537-26.186C207.838 149.701 210 139.104 210 128s-2.162-21.701-6.486-31.791c-4.325-10.09-10.17-18.818-17.537-26.186c-7.368-7.367-16.096-13.212-26.186-17.537C149.701 48.162 139.104 46 128 46s-21.701 2.162-31.791 6.486c-10.09 4.325-18.818 10.17-26.186 17.537c-7.367 7.368-13.212 16.096-17.537 26.186C48.162 106.299 46 116.896 46 128s2.162 21.701 6.486 31.791c4.325 10.09 10.17 18.818 17.537 26.186c7.368 7.367 16.096 13.212 26.186 17.537C106.299 207.838 116.896 210 128 210z"/><path d="M128 96c9.941 0 18-8.059 18-18s-8.059-18-18-18a17.932 17.932 0 0 0-11.945 4.534A17.956 17.956 0 0 0 110 78c0 9.941 8.059 18 18 18z"/></g></svg>
                                    <span class="ml-2">Homepage</span>
                                </a>
                            </li>
                            {{-- SINGLE MENU --}}
                            <li class="transition-all duration-300 transform hover:translate-x-1 {{ request()->routeIs(['layout.about']) ? 'font-medium text-blue-500' : '' }}">
                                <a href="{{ route('layout.about') }}" class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256"><g fill="currentColor" fill-rule="evenodd"><path fill-rule="nonzero" d="M128 226c-13.27 0-25.936-2.584-37.994-7.752c-12.059-5.168-22.49-12.154-31.295-20.959c-8.805-8.805-15.791-19.236-20.959-31.295C32.584 153.936 30 141.271 30 128c0-13.27 2.584-25.936 7.752-37.994c5.168-12.059 12.154-22.49 20.959-31.295c8.805-8.805 19.236-15.791 31.295-20.959C102.064 32.584 114.729 30 128 30c13.27 0 25.936 2.584 37.994 7.752c12.059 5.168 22.49 12.154 31.295 20.959c8.805 8.805 15.791 19.236 20.959 31.295C223.416 102.064 226 114.729 226 128c0 13.27-2.584 25.936-7.752 37.994c-5.168 12.059-12.154 22.49-20.959 31.295c-8.805 8.805-19.236 15.791-31.295 20.959C153.936 223.416 141.271 226 128 226zm0-16c11.104 0 21.701-2.162 31.791-6.486c10.09-4.325 18.818-10.17 26.186-17.537c7.367-7.368 13.212-16.096 17.537-26.186C207.838 149.701 210 139.104 210 128s-2.162-21.701-6.486-31.791c-4.325-10.09-10.17-18.818-17.537-26.186c-7.368-7.367-16.096-13.212-26.186-17.537C149.701 48.162 139.104 46 128 46s-21.701 2.162-31.791 6.486c-10.09 4.325-18.818 10.17-26.186 17.537c-7.367 7.368-13.212 16.096-17.537 26.186C48.162 106.299 46 116.896 46 128s2.162 21.701 6.486 31.791c4.325 10.09 10.17 18.818 17.537 26.186c7.368 7.367 16.096 13.212 26.186 17.537C106.299 207.838 116.896 210 128 210z"/><path d="M128 96c9.941 0 18-8.059 18-18s-8.059-18-18-18a17.932 17.932 0 0 0-11.945 4.534A17.956 17.956 0 0 0 110 78c0 9.941 8.059 18 18 18z"/></g></svg>
                                    <span class="ml-2">Halaman tentang kami</span>
                                </a>
                            </li>
                            {{-- SINGLE MENU --}}
                            <li class="transition-all duration-300 transform hover:translate-x-1 {{ request()->routeIs(['layout.about']) ? 'font-medium text-blue-500' : '' }}">
                                <a href="{{ route('layout.about') }}" class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256"><g fill="currentColor" fill-rule="evenodd"><path fill-rule="nonzero" d="M128 226c-13.27 0-25.936-2.584-37.994-7.752c-12.059-5.168-22.49-12.154-31.295-20.959c-8.805-8.805-15.791-19.236-20.959-31.295C32.584 153.936 30 141.271 30 128c0-13.27 2.584-25.936 7.752-37.994c5.168-12.059 12.154-22.49 20.959-31.295c8.805-8.805 19.236-15.791 31.295-20.959C102.064 32.584 114.729 30 128 30c13.27 0 25.936 2.584 37.994 7.752c12.059 5.168 22.49 12.154 31.295 20.959c8.805 8.805 15.791 19.236 20.959 31.295C223.416 102.064 226 114.729 226 128c0 13.27-2.584 25.936-7.752 37.994c-5.168 12.059-12.154 22.49-20.959 31.295c-8.805 8.805-19.236 15.791-31.295 20.959C153.936 223.416 141.271 226 128 226zm0-16c11.104 0 21.701-2.162 31.791-6.486c10.09-4.325 18.818-10.17 26.186-17.537c7.367-7.368 13.212-16.096 17.537-26.186C207.838 149.701 210 139.104 210 128s-2.162-21.701-6.486-31.791c-4.325-10.09-10.17-18.818-17.537-26.186c-7.368-7.367-16.096-13.212-26.186-17.537C149.701 48.162 139.104 46 128 46s-21.701 2.162-31.791 6.486c-10.09 4.325-18.818 10.17-26.186 17.537c-7.367 7.368-13.212 16.096-17.537 26.186C48.162 106.299 46 116.896 46 128s2.162 21.701 6.486 31.791c4.325 10.09 10.17 18.818 17.537 26.186c7.368 7.367 16.096 13.212 26.186 17.537C106.299 207.838 116.896 210 128 210z"/><path d="M128 96c9.941 0 18-8.059 18-18s-8.059-18-18-18a17.932 17.932 0 0 0-11.945 4.534A17.956 17.956 0 0 0 110 78c0 9.941 8.059 18 18 18z"/></g></svg>
                                    <span class="ml-2">Halaman solusi</span>
                                </a>
                            </li>
                            {{-- SINGLE MENU --}}
                            <li class="transition-all duration-300 transform hover:translate-x-1 {{ request()->routeIs(['layout.about']) ? 'font-medium text-blue-500' : '' }}">
                                <a href="{{ route('layout.about') }}" class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256"><g fill="currentColor" fill-rule="evenodd"><path fill-rule="nonzero" d="M128 226c-13.27 0-25.936-2.584-37.994-7.752c-12.059-5.168-22.49-12.154-31.295-20.959c-8.805-8.805-15.791-19.236-20.959-31.295C32.584 153.936 30 141.271 30 128c0-13.27 2.584-25.936 7.752-37.994c5.168-12.059 12.154-22.49 20.959-31.295c8.805-8.805 19.236-15.791 31.295-20.959C102.064 32.584 114.729 30 128 30c13.27 0 25.936 2.584 37.994 7.752c12.059 5.168 22.49 12.154 31.295 20.959c8.805 8.805 15.791 19.236 20.959 31.295C223.416 102.064 226 114.729 226 128c0 13.27-2.584 25.936-7.752 37.994c-5.168 12.059-12.154 22.49-20.959 31.295c-8.805 8.805-19.236 15.791-31.295 20.959C153.936 223.416 141.271 226 128 226zm0-16c11.104 0 21.701-2.162 31.791-6.486c10.09-4.325 18.818-10.17 26.186-17.537c7.367-7.368 13.212-16.096 17.537-26.186C207.838 149.701 210 139.104 210 128s-2.162-21.701-6.486-31.791c-4.325-10.09-10.17-18.818-17.537-26.186c-7.368-7.367-16.096-13.212-26.186-17.537C149.701 48.162 139.104 46 128 46s-21.701 2.162-31.791 6.486c-10.09 4.325-18.818 10.17-26.186 17.537c-7.367 7.368-13.212 16.096-17.537 26.186C48.162 106.299 46 116.896 46 128s2.162 21.701 6.486 31.791c4.325 10.09 10.17 18.818 17.537 26.186c7.368 7.367 16.096 13.212 26.186 17.537C106.299 207.838 116.896 210 128 210z"/><path d="M128 96c9.941 0 18-8.059 18-18s-8.059-18-18-18a17.932 17.932 0 0 0-11.945 4.534A17.956 17.956 0 0 0 110 78c0 9.941 8.059 18 18 18z"/></g></svg>
                                    <span class="ml-2">Halaman kontak</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                
            </ul>
        </div>
    </div>
</aside>