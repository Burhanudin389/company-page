<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D-UI - Admin dashboard template</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Production -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100">
    <!-- LOADER -->
    <div style="z-index: 99999;" id="loader" class="w-full h-screen bg-white fixed inset-0 flex items-center justify-center transition-all duration-300">
        <img src="{{ asset('img/logo.svg') }}" class="animate-bounce" alt="">
    </div>
    <!-- LOADER -->
    <div class="w-full flex">
        <!-- MOBILE SIDEBAR CLOSER -->
        <div id="sidebar-closer" class="w-full h-screen fixed z-30 inset-0 bg-slate-900 bg-opacity-50 hidden lg:hidden"></div>
        <!-- START : SIDEBAR -->
        @include('partials.sidebar')
        <!-- END : SIDEBAR -->
        <!-- START : MAIN CONTENT -->
        <main class="w-full">
            <!-- HEADER -->
            <div class="w-full h-16 sticky z-20 top-0 right-0 bg-white shadow-md p-3 md:px-5">
                <div class="max-w-screen-xl mx-auto flex justify-between items-center">
                    <div class="flex items-center space-x-5 lg:space-x-0">
                        <button id="sidebar-mobile-btn" class="lg:hidden text-xl border border-slate-10 rounded-md py-2 px-3 hover:bg-slate-100">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M16 5H0V4h16v1zm0 8H0v-1h16v1zm0-4.008H0V8h16v.992z"/></svg>
                        </button>
                        <img src="{{ asset('img/logo.svg') }}" class="lg:hidden" alt="MAIN LOGO">
                        <!-- VERSION -->
                        <div id="version" class="hidden lg:block px-5 py-2 text-xs rounded-full bg-green-200 text-green-700 font-medium felx justify-center items-center">
                            <span>v1.0.0</span>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3">
                        <!-- NOTIFICATION -->
                        <div class="flex items-center">
                            <div class="inline-block relative" x-data="{ dropdownNotification: false }">
                                <div class="relative">
                                    <button @click="dropdownNotification = !dropdownNotification" :class="{ 'text-blue-500 bg-slate-100' : dropdownNotification }" class="transition-all duration-300 hover:bg-slate-100 hover:text-blue-500 p-2 rounded-full">
                                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="currentColor" d="M28.707 19.293L26 16.586V13a10.014 10.014 0 0 0-9-9.95V1h-2v2.05A10.014 10.014 0 0 0 6 13v3.586l-2.707 2.707A1 1 0 0 0 3 20v3a1 1 0 0 0 1 1h7v.777a5.152 5.152 0 0 0 4.5 5.199A5.006 5.006 0 0 0 21 25v-1h7a1 1 0 0 0 1-1v-3a1 1 0 0 0-.293-.707ZM19 25a3 3 0 0 1-6 0v-1h6Zm8-3H5v-1.586l2.707-2.707A1 1 0 0 0 8 17v-4a8 8 0 0 1 16 0v4a1 1 0 0 0 .293.707L27 20.414Z"/></svg>
                                    </button>
                                    <div class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full"></div>
                                </div>
                        
                                <ul @click.away="dropdownNotification = false" x-show="dropdownNotification" class="bg-white text-slate-500 py-2 text-sm flex flex-col fixed left-1/2 -translate-x-1/2 sm:left-auto sm:-translate-x-0 sm:absolute transform origin-top-right right-0 mx-auto w-80 sm:w-96 rounded shadow-lg mt-5"
                                    x-transition:enter="transition ease-out duration-100"
                                    x-transition:enter-start="opacity-0 transform opacity-50 scale-50"
                                    x-transition:enter-end="opacity-100 transform opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-200"
                                    x-transition:leave-end="opacity-0 transform opacity-0 scale-50"
                                >
                                    <li @click="dropdownNotification = false" class="px-2">
                                        <a href="#" class="rounded-md p-3 hover:bg-slate-100 flex space-x-3">
                                            <div class="w-10 h-10 rounded-full bg-slate-500 shadow-md"></div>
                                            <div class="flex flex-col justify-center">
                                                <span class="font-medium">Notification 1</span>
                                                <span class="text-xs">Notification content here...</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li @click="dropdownNotification = false" class="px-2">
                                        <a href="#" class="rounded-md p-3 hover:bg-slate-100 flex space-x-3">
                                            <div class="w-10 h-10 rounded-full bg-slate-500 shadow-md"></div>
                                            <div class="flex flex-col justify-center">
                                                <span class="font-medium">Notification 2</span>
                                                <span class="text-xs">Notification content here...</span>
                                            </div>
                                        </a>
                                    </li>
                                    <hr class="mt-2" />
                                    <li class="px-5 pt-4 pb-2 text-xs md:text-sm">
                                        <span>2 Unread notification, </span>
                                        <a @click="dropdownNotification = false" href="#" class="text-blue-500 hover:underline">See all notification...</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- SEARCH --> 
                        <div x-data="{ openSearchModal : false }">
                            <button @click="openSearchModal = true" :class="{ 'text-blue-500 bg-slate-100' : openSearchModal }" class="transition-all duration-300 hover:bg-slate-100 hover:text-blue-500 p-2 rounded-full">
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M19.023 16.977a35.13 35.13 0 0 1-1.367-1.384c-.372-.378-.596-.653-.596-.653l-2.8-1.337A6.962 6.962 0 0 0 16 9c0-3.859-3.14-7-7-7S2 5.141 2 9s3.14 7 7 7c1.763 0 3.37-.66 4.603-1.739l1.337 2.8s.275.224.653.596c.387.363.896.854 1.384 1.367l1.358 1.392l.604.646l2.121-2.121l-.646-.604c-.379-.372-.885-.866-1.391-1.36zM9 14c-2.757 0-5-2.243-5-5s2.243-5 5-5s5 2.243 5 5s-2.243 5-5 5z"/></svg>
                            </button>
                            <div x-show="openSearchModal" class="w-full h-screen fixed z-50 inset-0 bg-slate-900 bg-opacity-50 p-3 cursor-pointer">
                                <div x-show="openSearchModal" @click.away="openSearchModal = false" x-transition x-transition.duration.200ms class="w-full bg-white cursor-default rounded-lg mx-auto max-w-3xl md:mt-10 overflow-hidden p-5">
                                    <div class="w-full relative">
                                        <input type="text" class="w-full h-full px-5 py-4 outline-none rounded-md border transition-all duration-300 text-sm focus:ring-4" placeholder="Search something...">
                                    </div>
                                    <div class="flex justify-center items-center pt-5 space-x-3">
                                        <span class="text-xs text-slate-500">Search element by :</span>
                                        <img class="w-10" src="{{ asset('img/logo.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- USER PROFILE -->
                        <div class="flex items-center">
                            <div class="inline-block relative" x-data="{ dropdownProfile: false }">
                                <button @click="dropdownProfile = !dropdownProfile" class="focus:outline-none shadow cursor-pointer flex border rounded-full" :class="{ 'shadow-none border-indigo-300': dropdownProfile}">
                                    <img class="w-9 h-9 hover:ring-2 ring-slate-300 rounded-full" src="{{ asset('img/logo.svg') }}" alt="">
                                </button>
                        
                                <div @click.away="dropdownProfile = false" x-show="dropdownProfile" class="text-sm flex flex-col absolute transform origin-top-right right-0 w-72 rounded-md overflow-hidden shadow-lg mt-5"
                                    x-transition:enter="transition ease-out duration-100"
                                    x-transition:enter-start="opacity-0 transform opacity-50 scale-50"
                                    x-transition:enter-end="opacity-100 transform opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-200"
                                    x-transition:leave-end="opacity-0 transform opacity-0 scale-50"
                                >
                                    <ul class="bg-white text-slate-400 p-4">
                                        <li @click="dropdownProfile = false">
                                            <p class="text-md text-slate-900 font-medium">{{ Auth::user()->name }}</p>
                                            <a href="#" class="text-slate-500 hover:text-slate-300 text-xs">Lihat profil saya</a>
                                        </li>
                                    </ul>
                                    <ul class="bg-white border-t">
                                        <li>
                                            <form action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <button type="submit" class="flex items-center w-full px-4 py-3 transition-all duration-300 hover:bg-slate-50 hover:text-slate-500">
                                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M14 8V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2v-2"/><path d="M7 12h14l-3-3m0 6l3-3"/></g></svg>
                                                    <span class="ml-2">Logout</span>
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            @yield('content')

            <!-- FOOTER -->
            <footer class="w-full p-5 mt-5 border-t text-slate-500 text-sm">
                <p>Copyright &copy;2022 D-UI, All rights reserved</p>
            </footer>
        </main>
        <!-- START : MAIN CONTENT -->
    </div>
 
    <!--  -->
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    @include('sweetalert::alert')
    @stack('scripts')
    <script>
        // SIDEBAR
        const sidebarMobileBtn = document.querySelector("#sidebar-mobile-btn");
        const sidebarMobile = document.querySelector("#main-sidebar");
        const sidebarMobileCloser = document.querySelector("#sidebar-closer");
        const sidebarMenuLink = document.querySelectorAll("#sidebar-menu ul li a");

        sidebarMobileBtn.addEventListener("click", function () {
        sidebarMobile.classList.remove("-translate-x-full");
        sidebarMobileCloser.classList.remove("hidden");
        });

        sidebarMobileCloser.addEventListener("click", function () {
        sidebarMobileCloser.classList.add("hidden");
        sidebarMobile.classList.add("-translate-x-full");
        });

        sidebarMenuLink.forEach((link) => {
        link.addEventListener("click", function () {
            sidebarMobileCloser.classList.add("hidden");
            sidebarMobile.classList.add("-translate-x-full");
        });
        });

        // const version = document.querySelector("#button");
        // const versionTooltip = document.querySelector("#tooltip");

        tippy("#version", {
        content: '<span class="text-xs">D-UI Current version</span>',
        allowHTML: true,
        placement: "auto",
        });

        document.onreadystatechange = function () {
            if (document.readyState !== "complete") {
                document.querySelector("body").style.visibility = "hidden";
                document.querySelector("#loader").style.visibility = "visible";
            } else {
                // LOADED content after page is rendered : 1500ms
                document.querySelector("#loader").style.opacity = "0";
                document.querySelector("#loader").style.zIndex = "-999";
                
                document.querySelector("body").style.visibility = "visible";
            }
        };
    </script>
</body>
</html>