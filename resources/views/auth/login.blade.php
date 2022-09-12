<x-guest-layout>
    <div class="w-full relative">
        <div class="w-full max-w-screen-custom mx-auto h-screen grid grid-cols-1 lg:grid-cols-5 md:gap-x-10 lg:gap-x-20">
            <!-- LEFT : FORM -->
            <form action="{{ route('login') }}" method="POST" class="w-full lg:col-span-2 flex flex-col justify-center items-center space-y-5 p-5 max-w-lg mx-auto">
                @csrf 
                <div class="w-full mb-5">
                    <img src="/asset/logo.svg" alt="">
                </div>
                <div class="w-full">
                    <h1 class="text-lg md:text-xl font-medium">Login</h1>
                    <p class="text-slate-500">Login to your existing account</p>
                </div>
                <!-- SINGLE INPUT -->
                <div class="w-full">
                    <label for="email" class="text-xs uppercase font-medium text-slate-400">Email</label>
                    <input type="email" name="email" id="email" placeholder="example@email.com" class="w-full mt-1 text-sm px-5 py-3 rounded-md focus:outline-none border border-slate-300 text-slate-700 transition-all duration-300 focus:shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                </div>
                <!-- SINGLE INPUT -->
                <div class="w-full">
                    <label for="password" class="text-xs uppercase font-medium text-slate-400">Password</label>
                    <div id="input-password" class="relative text-slate-400 focus-within:text-blue-500">
                        <input type="password" name="password" id="password" placeholder="Input your password" class="w-full mt-1 text-sm px-5 py-3 rounded-md focus:outline-none border border-slate-300 text-slate-700 transition-all duration-300 focus:shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-200">
                    </div>
                </div>
                <!-- CHECKBOXES -->
                <div class="w-full flex">
                    <input type="checkbox" name="remember" id="remember" class="cursor-pointer">
                    <label for="remember" class="text-sm ml-2 text-slate-400 cursor-pointer">Remember me</label>
                </div>
                <!-- SUBMIT BUTTON -->
                <div class="w-full flex">
                    <button type="submit" class="w-full py-3 transition-all duration-300 bg-blue-500 hover:bg-blue-700 focus:ring-2 focus:ring-blue-300 rounded-md text-white text-sm">Login</button>
                </div>
                {{-- <div class="w-full">
                    <a href="{{ route('register') }}">Daftar sekarang</a>
                </div> --}}
            </form>
        </div>
        <!-- PATTERN -->
        <img src="/asset/img/auth-v1-pattern.svg" class="w-full h-full lg:hidden object-cover opacity-10 absolute inset-0 -z-10" alt="">
        <div class="hidden lg:block w-3/5 h-screen overflow-hidden bg-blue-500 object-cover fixed top-0 right-0">
            <img src="/asset/img/auth-v1-pattern.svg" class="w-full" alt="">
        </div>
    </div>
</x-guest-layout>
