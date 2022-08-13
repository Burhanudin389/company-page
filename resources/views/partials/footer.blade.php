<footer class="w-full bg-zinc-800">
    <div class="w-full bg-zinc-900">
        <div class="w-full max-w-screen-custom mx-auto py-10 px-5">
            <div class="w-full h-full md:w-1/2 flex flex-col justify-center">
                <h1 class="font-semibold uppercase text-white text-sm">Metode pembayaran</h1>
                <div class="grid grid-cols-5 gap-2 md:gap-5 mt-5">
                    @foreach ($payments as $payment)
                        <div class="w-full bg-white px-3 h-6 md:h-10 flex justify-center items-center rounded-sm">
                            <img src="{{ asset('storage/uploads/payment/'. $payment->logo) }}" class="w-full" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="w-full max-w-screen-custom mx-auto px-4 pt-16">
        <div class="w-full grid grid-cols-1 md:grid-cols-4 gap-5">
            {{-- SINGLE ITEM --}}
            <div class="w-full">
                <div class="w-full mb-10">
                    {{-- LOGO --}}
                    <a href="{{ route('frontend.index') }}">
                        <img src="{{ asset('storage/uploads/metadata/'. $metaData->logo) }}" class="w-44" alt="">
                    </a>
                </div>
                <div class="w-full">
                    <h1 class="text-sm uppercase font-semibold text-white">Menu website</h1>
                    <ul class="text-sm mt-5 flex flex-col space-y-1">
                        <li>
                            <a href="#" class="text-zinc-400 hover:underline">Beranda</a>
                        </li>
                        <li>
                            <a href="#" class="text-zinc-400 hover:underline">Tentang kami</a>
                        </li>
                        <li>
                            <a href="#" class="text-zinc-400 hover:underline">Solusi</a>
                        </li>
                        <li>
                            <a href="#" class="text-zinc-400 hover:underline">Kontak</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full mt-5 md:mt-10">
                    <h1 class="text-sm uppercase font-semibold text-white">Layanan kami</h1>
                    <ul class="text-sm mt-5 flex flex-col space-y-1">
                        <li>
                            <a href="#" class="text-zinc-400 hover:underline">Pajak</a>
                        </li>
                        <li>
                            <a href="#" class="text-zinc-400 hover:underline">Akuntansi</a>
                        </li>
                        <li>
                            <a href="#" class="text-zinc-400 hover:underline">Audit</a>
                        </li>
                        <li>
                            <a href="#" class="text-zinc-400 hover:underline">Keuangan</a>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- SINGLE ITEM --}}
            <div class="w-full mt-5 md:mt-0">
                <div class="w-full">
                    <h1 class="text-sm uppercase font-semibold text-white">Informasi pelanggan</h1>
                    <ul class="text-sm mt-5 flex flex-col space-y-1">
                        <li>
                            <a href="#" class="text-zinc-400 hover:underline">Menu lain</a>
                        </li>
                        <li>
                            <a href="#" class="text-zinc-400 hover:underline">Menu lain</a>
                        </li>
                        <li>
                            <a href="#" class="text-zinc-400 hover:underline">Menu lain</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full mt-10">
                    <h1 class="text-sm uppercase font-semibold text-white">Kontak developer</h1>
                    <ul class="text-sm mt-5 flex flex-col space-y-1">
                        <li>
                            <a href="#" class="text-zinc-400 hover:underline">Menu lain</a>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- SINGLE ITEM --}}
            <div class="w-full md:col-span-2">
                <div class="w-full">
                    <h1 class="text-sm uppercase font-semibold text-white">Media sosial</h1>
                    <ul class="text-sm mt-5 flex space-x-3">
                        <li>
                            <a href="#" class="w-10 h-10 transition-all duration-300 bg-zinc-500 hover:bg-zinc-600 rounded-full flex justify-center items-center">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1536 1536"><path fill="currentColor" d="M1024 768q0-106-75-181t-181-75t-181 75t-75 181t75 181t181 75t181-75t75-181zm138 0q0 164-115 279t-279 115t-279-115t-115-279t115-279t279-115t279 115t115 279zm108-410q0 38-27 65t-65 27t-65-27t-27-65t27-65t65-27t65 27t27 65zM768 138q-7 0-76.5-.5t-105.5 0t-96.5 3t-103 10T315 169q-50 20-88 58t-58 88q-11 29-18.5 71.5t-10 103t-3 96.5t0 105.5t.5 76.5t-.5 76.5t0 105.5t3 96.5t10 103T169 1221q20 50 58 88t88 58q29 11 71.5 18.5t103 10t96.5 3t105.5 0t76.5-.5t76.5.5t105.5 0t96.5-3t103-10t71.5-18.5q50-20 88-58t58-88q11-29 18.5-71.5t10-103t3-96.5t0-105.5t-.5-76.5t.5-76.5t0-105.5t-3-96.5t-10-103T1367 315q-20-50-58-88t-88-58q-29-11-71.5-18.5t-103-10t-96.5-3t-105.5 0t-76.5.5zm768 630q0 229-5 317q-10 208-124 322t-322 124q-88 5-317 5t-317-5q-208-10-322-124T5 1085q-5-88-5-317t5-317q10-208 124-322T451 5q88-5 317-5t317 5q208 10 322 124t124 322q5 88 5 317z"/></svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="w-10 h-10 transition-all duration-300 bg-zinc-500 hover:bg-zinc-600 rounded-full flex justify-center items-center">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1536 1536"><path fill="currentColor" d="M1024 768q0-106-75-181t-181-75t-181 75t-75 181t75 181t181 75t181-75t75-181zm138 0q0 164-115 279t-279 115t-279-115t-115-279t115-279t279-115t279 115t115 279zm108-410q0 38-27 65t-65 27t-65-27t-27-65t27-65t65-27t65 27t27 65zM768 138q-7 0-76.5-.5t-105.5 0t-96.5 3t-103 10T315 169q-50 20-88 58t-58 88q-11 29-18.5 71.5t-10 103t-3 96.5t0 105.5t.5 76.5t-.5 76.5t0 105.5t3 96.5t10 103T169 1221q20 50 58 88t88 58q29 11 71.5 18.5t103 10t96.5 3t105.5 0t76.5-.5t76.5.5t105.5 0t96.5-3t103-10t71.5-18.5q50-20 88-58t58-88q11-29 18.5-71.5t10-103t3-96.5t0-105.5t-.5-76.5t.5-76.5t0-105.5t-3-96.5t-10-103T1367 315q-20-50-58-88t-88-58q-29-11-71.5-18.5t-103-10t-96.5-3t-105.5 0t-76.5.5zm768 630q0 229-5 317q-10 208-124 322t-322 124q-88 5-317 5t-317-5q-208-10-322-124T5 1085q-5-88-5-317t5-317q10-208 124-322T451 5q88-5 317-5t317 5q208 10 322 124t124 322q5 88 5 317z"/></svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="w-10 h-10 transition-all duration-300 bg-zinc-500 hover:bg-zinc-600 rounded-full flex justify-center items-center">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1536 1536"><path fill="currentColor" d="M1024 768q0-106-75-181t-181-75t-181 75t-75 181t75 181t181 75t181-75t75-181zm138 0q0 164-115 279t-279 115t-279-115t-115-279t115-279t279-115t279 115t115 279zm108-410q0 38-27 65t-65 27t-65-27t-27-65t27-65t65-27t65 27t27 65zM768 138q-7 0-76.5-.5t-105.5 0t-96.5 3t-103 10T315 169q-50 20-88 58t-58 88q-11 29-18.5 71.5t-10 103t-3 96.5t0 105.5t.5 76.5t-.5 76.5t0 105.5t3 96.5t10 103T169 1221q20 50 58 88t88 58q29 11 71.5 18.5t103 10t96.5 3t105.5 0t76.5-.5t76.5.5t105.5 0t96.5-3t103-10t71.5-18.5q50-20 88-58t58-88q11-29 18.5-71.5t10-103t3-96.5t0-105.5t-.5-76.5t.5-76.5t0-105.5t-3-96.5t-10-103T1367 315q-20-50-58-88t-88-58q-29-11-71.5-18.5t-103-10t-96.5-3t-105.5 0t-76.5.5zm768 630q0 229-5 317q-10 208-124 322t-322 124q-88 5-317 5t-317-5q-208-10-322-124T5 1085q-5-88-5-317t5-317q10-208 124-322T451 5q88-5 317-5t317 5q208 10 322 124t124 322q5 88 5 317z"/></svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="w-full mt-10">
                    <h1 class="text-sm uppercase font-semibold text-white">Newsletter</h1>
                    <ul class="text-sm mt-5 text-zinc-400">
                        <li class="max-w-sm">Dapatkan penawaran menarik dari kami dengan cara subscribe ke layanan newsletter kami</li>
                        <li class="w-full flex flex-col sm:flex-row mt-5 gap-y-5 sm:gap-y-0 sm:gap-x-5">
                            <input type="text" class="w-full h-12 sm:h-14 outline-none border-none rounded-sm transition-all duration-300 text-zinc-700 focus:bg-zinc-100 focus:ring-2 focus:ring-slate-500 px-4 text-sm" placeholder="Masukkan email anda" />
                            <button class="w-full h-12 sm:h-14 sm:w-40 transition-all duration-300 text-white bg-zinc-500 hover:bg-zinc-600 focus:ring-2 focus:ring-zinc-500 text-sm rounded-sm">Subscribe</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <p class="text-center text-sm py-10 md:pt-32 text-zinc-400">Copyright &copy;2022 Konsultanku, All rights reserved.</p>
</footer>