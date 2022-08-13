<nav id="navbar" data-aos="fade-in" data-aos-duration="1000" style="transition: all 300ms ease;" class="fixed top-0 left-0 z-30 w-full h-24 flex items-center transition-all duration-300">
    <div x-data="{ open : false }" class="w-full max-w-screen-custom mx-auto px-4">
        <div class="w-full flex justify-between items-center md:space-x-20 relative">
            <a href="{{ route('frontend.index') }}">
                <img src="{{ asset('storage/uploads/metadata/'. $metaData->logo) }}" class="w-40 md:w-56" alt="">
            </a>
            <div id="mobile-menu-closer" class="opacity-0 -z-50 w-full h-screen md:hidden transition-all duration-300 fixed top-0 left-0 bg-slate-900"></div>
            <div id="mobile-menu" class="fixed transform -translate-y-full md:translate-y-0 md:relative top-0 left-0 w-full h-96 md:h-auto transition-all duration-300 z-50 flex flex-col md:flex-row md:justify-between space-y-5 md:space-y-0 px-4 pt-5 md:px-0 md:pt-0">
                <ul class="bg-slate-900 md:bg-transparent flex flex-col space-y-5 md:flex-row md:space-y-0 sm:space-x-4 lg:space-x-8 md:justify-start md:items-center px-5 py-8 md:px-0 md:py-0 rounded-md">
                    <li @click="open = false">
                        <a href="{{ route('frontend.index') }}" class="{{ request()->routeIs('frontend.index') ? 'text-blue-500 hover:text-blue-700 font-bold' : 'text-slate-500 hover:text-slate-400 md:text-slate-900 md:hover:text-slate-500' }} font-medium">Beranda</a>
                    </li>
                    <li @click="open = false">
                        <a href="{{ route('frontend.about') }}" class="{{ request()->routeIs('frontend.about') ? 'text-blue-500 hover:text-blue-700 font-bold' : 'text-slate-500 hover:text-slate-400 md:text-slate-900 md:hover:text-slate-500' }} font-medium">Tentang kami</a>
                    </li>
                    <li @click="open = false">
                        <a href="{{ route('frontend.solution') }}" class="{{ request()->routeIs('frontend.solution') ? 'text-blue-500 hover:text-blue-700 font-bold' : 'text-slate-500 hover:text-slate-400 md:text-slate-900 md:hover:text-slate-500' }} font-medium">Solusi</a>
                    </li>
                    <li @click="open = false">
                        <a href="{{ route('frontend.contact') }}" class="{{ request()->routeIs('frontend.contact') ? 'text-blue-500 hover:text-blue-700 font-bold' : 'text-slate-500 hover:text-slate-400 md:text-slate-900 md:hover:text-slate-500' }} font-medium">Kontak</a>
                    </li>
                    <li @click="open = false" class="flex md:hidden">
                        @auth
                            @if (Auth::user()->hasRole(['admin', 'employee']))
                                <a href="{{ route('dashboard') }}" class="w-40 h-12 text-sm rounded-full font-medium transition-all duration-300 bg-gradient-to-tr from-yellow-400 to-yellow-600 hover:from-yellow-600 hover:to-yellow-600 focus:ring-2 focus:ring-yellow-300 text-white active:text-yellow-300 flex justify-center items-center">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024"><path fill="currentColor" d="M924.8 385.6a446.7 446.7 0 0 0-96-142.4a446.7 446.7 0 0 0-142.4-96C631.1 123.8 572.5 112 512 112s-119.1 11.8-174.4 35.2a446.7 446.7 0 0 0-142.4 96a446.7 446.7 0 0 0-96 142.4C75.8 440.9 64 499.5 64 560c0 132.7 58.3 257.7 159.9 343.1l1.7 1.4c5.8 4.8 13.1 7.5 20.6 7.5h531.7c7.5 0 14.8-2.7 20.6-7.5l1.7-1.4C901.7 817.7 960 692.7 960 560c0-60.5-11.9-119.1-35.2-174.4zM761.4 836H262.6A371.12 371.12 0 0 1 140 560c0-99.4 38.7-192.8 109-263c70.3-70.3 163.7-109 263-109c99.4 0 192.8 38.7 263 109c70.3 70.3 109 163.7 109 263c0 105.6-44.5 205.5-122.6 276zM623.5 421.5a8.03 8.03 0 0 0-11.3 0L527.7 506c-18.7-5-39.4-.2-54.1 14.5a55.95 55.95 0 0 0 0 79.2a55.95 55.95 0 0 0 79.2 0a55.87 55.87 0 0 0 14.5-54.1l84.5-84.5c3.1-3.1 3.1-8.2 0-11.3l-28.3-28.3zM490 320h44c4.4 0 8-3.6 8-8v-80c0-4.4-3.6-8-8-8h-44c-4.4 0-8 3.6-8 8v80c0 4.4 3.6 8 8 8zm260 218v44c0 4.4 3.6 8 8 8h80c4.4 0 8-3.6 8-8v-44c0-4.4-3.6-8-8-8h-80c-4.4 0-8 3.6-8 8zm12.7-197.2l-31.1-31.1a8.03 8.03 0 0 0-11.3 0l-56.6 56.6a8.03 8.03 0 0 0 0 11.3l31.1 31.1c3.1 3.1 8.2 3.1 11.3 0l56.6-56.6c3.1-3.1 3.1-8.2 0-11.3zm-458.6-31.1a8.03 8.03 0 0 0-11.3 0l-31.1 31.1a8.03 8.03 0 0 0 0 11.3l56.6 56.6c3.1 3.1 8.2 3.1 11.3 0l31.1-31.1c3.1-3.1 3.1-8.2 0-11.3l-56.6-56.6zM262 530h-80c-4.4 0-8 3.6-8 8v44c0 4.4 3.6 8 8 8h80c4.4 0 8-3.6 8-8v-44c0-4.4-3.6-8-8-8z"/></svg>
                                    <span class="ml-2">Dashboard</span>
                                </a>
                            @endif
                        @else
                            <a href="{{ route('login') }}" class="w-40 h-12 text-sm rounded-full font-medium transition-all duration-300 bg-gradient-to-tr from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-700 focus:ring-2 focus:ring-blue-300 text-white active:text-blue-300 flex justify-center items-center">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2C9.243 2 7 4.243 7 7v3H6c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-8c0-1.103-.897-2-2-2h-1V7c0-2.757-2.243-5-5-5zm6 10l.002 8H6v-8h12zm-9-2V7c0-1.654 1.346-3 3-3s3 1.346 3 3v3H9z"/></svg>
                                <span class="ml-2">Login</span>
                            </a>
                        @endauth
                    </li>
                </ul>
                <ul class="hidden md:flex">
                    <li @click="open = false">
                        @auth
                            @if (Auth::user()->hasRole(['admin', 'employee']))
                                <a href="{{ route('dashboard') }}" class="w-40 h-12 text-sm rounded-full font-medium transition-all duration-300 bg-gradient-to-tr from-yellow-400 to-yellow-600 hover:from-yellow-600 hover:to-yellow-600 focus:ring-2 focus:ring-yellow-300 text-white active:text-yellow-300 flex justify-center items-center">
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024"><path fill="currentColor" d="M924.8 385.6a446.7 446.7 0 0 0-96-142.4a446.7 446.7 0 0 0-142.4-96C631.1 123.8 572.5 112 512 112s-119.1 11.8-174.4 35.2a446.7 446.7 0 0 0-142.4 96a446.7 446.7 0 0 0-96 142.4C75.8 440.9 64 499.5 64 560c0 132.7 58.3 257.7 159.9 343.1l1.7 1.4c5.8 4.8 13.1 7.5 20.6 7.5h531.7c7.5 0 14.8-2.7 20.6-7.5l1.7-1.4C901.7 817.7 960 692.7 960 560c0-60.5-11.9-119.1-35.2-174.4zM761.4 836H262.6A371.12 371.12 0 0 1 140 560c0-99.4 38.7-192.8 109-263c70.3-70.3 163.7-109 263-109c99.4 0 192.8 38.7 263 109c70.3 70.3 109 163.7 109 263c0 105.6-44.5 205.5-122.6 276zM623.5 421.5a8.03 8.03 0 0 0-11.3 0L527.7 506c-18.7-5-39.4-.2-54.1 14.5a55.95 55.95 0 0 0 0 79.2a55.95 55.95 0 0 0 79.2 0a55.87 55.87 0 0 0 14.5-54.1l84.5-84.5c3.1-3.1 3.1-8.2 0-11.3l-28.3-28.3zM490 320h44c4.4 0 8-3.6 8-8v-80c0-4.4-3.6-8-8-8h-44c-4.4 0-8 3.6-8 8v80c0 4.4 3.6 8 8 8zm260 218v44c0 4.4 3.6 8 8 8h80c4.4 0 8-3.6 8-8v-44c0-4.4-3.6-8-8-8h-80c-4.4 0-8 3.6-8 8zm12.7-197.2l-31.1-31.1a8.03 8.03 0 0 0-11.3 0l-56.6 56.6a8.03 8.03 0 0 0 0 11.3l31.1 31.1c3.1 3.1 8.2 3.1 11.3 0l56.6-56.6c3.1-3.1 3.1-8.2 0-11.3zm-458.6-31.1a8.03 8.03 0 0 0-11.3 0l-31.1 31.1a8.03 8.03 0 0 0 0 11.3l56.6 56.6c3.1 3.1 8.2 3.1 11.3 0l31.1-31.1c3.1-3.1 3.1-8.2 0-11.3l-56.6-56.6zM262 530h-80c-4.4 0-8 3.6-8 8v44c0 4.4 3.6 8 8 8h80c4.4 0 8-3.6 8-8v-44c0-4.4-3.6-8-8-8z"/></svg>
                                    <span class="ml-2">Dashboard</span>
                                </a>
                            @endif
                        @else
                            <a href="{{ route('login') }}" class="w-40 h-12 text-sm rounded-full font-medium transition-all duration-300 bg-gradient-to-tr from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-700 focus:ring-2 focus:ring-blue-300 text-white active:text-blue-300 flex justify-center items-center">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2C9.243 2 7 4.243 7 7v3H6c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-8c0-1.103-.897-2-2-2h-1V7c0-2.757-2.243-5-5-5zm6 10l.002 8H6v-8h12zm-9-2V7c0-1.654 1.346-3 3-3s3 1.346 3 3v3H9z"/></svg>
                                <span class="ml-2">Login</span>
                            </a>
                        @endauth
                    </li>
                </ul>
            </div>
            <div class="md:hidden z-10">
                <button id="mobile-menu-btn" class="flex items-center" @click="open = true">
                    <svg class="w-8" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M16 5H0V4h16v1zm0 8H0v-1h16v1zm0-4.008H0V8h16v.992z"/></svg>
                </button>
            </div>
        </div>
    </div>
</nav>
    
@push('scripts')
<script>
    const navbar = document.querySelector('#navbar')
    const mobileMenu = document.querySelector('#mobile-menu')
    const mobileMenuBtn = document.querySelector('#mobile-menu-btn')
    const mobileMenuCloser = document.querySelector('#mobile-menu-closer')

    window.addEventListener('scroll', function() {
        let scrollPos = this.pageYOffset

        if(scrollPos > navbar.clientHeight) {
            navbar.classList.add('bg-white')
            navbar.classList.add('shadow-lg')
            navbar.classList.remove('h-24')
            navbar.classList.add('h-20')
        } else {
            navbar.classList.remove('bg-white')
            navbar.classList.remove('shadow-lg')
            navbar.classList.remove('h-20')
            navbar.classList.add('h-24')
        }
    })

    mobileMenuBtn.addEventListener('click', function() {
        mobileMenu.classList.remove('-translate-y-full')
        mobileMenuCloser.classList.replace('opacity-0', 'opacity-60')
    })
    
    mobileMenuCloser.addEventListener('click', function() {
        mobileMenu.classList.add('-translate-y-full')
        mobileMenuCloser.classList.replace('opacity-60', 'opacity-0')
    })
</script>
@endpush
