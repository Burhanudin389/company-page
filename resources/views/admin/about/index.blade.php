{{-- MAIN CONTENT --}}
<div class="w-full bg-white rounded-md p-5">
    <div class="flex items-center justify-between mb-5">
        <div class="py-3">
            <p class="text-sm font-medium text-slate-500">Tentang kami</p>
            <h1 class="text-slate-900 text-xl">Data tentang kami</h1>
        </div>
        <div class="flex items-center space-x-3">
            <a href="{{ route('about.create') }}" class="w-40 h-11 rounded-md text-sm font-medium transition-all duration-300 bg-gradient-to-tr from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-700 focus:ring-2 focus:ring-blue-300 text-white active:text-blue-300 flex justify-center items-center">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024"><path fill="currentColor" d="M678.3 642.4c24.2-13 51.9-20.4 81.4-20.4h.1c3 0 4.4-3.6 2.2-5.6a371.67 371.67 0 0 0-103.7-65.8c-.4-.2-.8-.3-1.2-.5C719.2 505 759.6 431.7 759.6 349c0-137-110.8-248-247.5-248S264.7 212 264.7 349c0 82.7 40.4 156 102.6 201.1c-.4.2-.8.3-1.2.5c-44.7 18.9-84.8 46-119.3 80.6a373.42 373.42 0 0 0-80.4 119.5A373.6 373.6 0 0 0 137 888.8a8 8 0 0 0 8 8.2h59.9c4.3 0 7.9-3.5 8-7.8c2-77.2 32.9-149.5 87.6-204.3C357 628.2 432.2 597 512.2 597c56.7 0 111.1 15.7 158 45.1a8.1 8.1 0 0 0 8.1.3zM512.2 521c-45.8 0-88.9-17.9-121.4-50.4A171.2 171.2 0 0 1 340.5 349c0-45.9 17.9-89.1 50.3-121.6S466.3 177 512.2 177s88.9 17.9 121.4 50.4A171.2 171.2 0 0 1 683.9 349c0 45.9-17.9 89.1-50.3 121.6C601.1 503.1 558 521 512.2 521zM880 759h-84v-84c0-4.4-3.6-8-8-8h-56c-4.4 0-8 3.6-8 8v84h-84c-4.4 0-8 3.6-8 8v56c0 4.4 3.6 8 8 8h84v84c0 4.4 3.6 8 8 8h56c4.4 0 8-3.6 8-8v-84h84c4.4 0 8-3.6 8-8v-56c0-4.4-3.6-8-8-8z"/></svg>
                <span class="ml-1">Tambah data</span>
            </a>
        </div>
    </div>
    {{-- TABLE --}}
    <div id="table-component" class="w-full overflow-x-scroll mt-5">
        <table class="w-full table-auto rounded-lg overflow-hidden whitespace-nowrap">
            <thead>
                <tr class="text-left uppercase text-slate-500 bg-slate-100">
                    <th class="text-xs p-5 font-medium">ID</th>
                    <th class="text-xs p-5 font-medium">Ikon</th>
                    <th class="text-xs p-5 font-medium">Judul</th>
                    <th class="text-xs p-5 font-medium">Deskripsi</th>
                    <th class="text-xs p-5 font-medium">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @forelse ($abouts as $about)
                    <tr class="text-left">
                        <td class="text-sm px-5 py-3 text-slate-700">{{ $about->id }}</td>
                        <td class="text-sm px-5 py-3 text-slate-700">
                            <div class="block w-10 h-10 bg-slate-300 overflow-hidden rounded-full">
                                <img src="{{ asset('storage/uploads/about/'. $about->icon) }}" class="w-full h-full object-cover" alt="">
                            </div>
                        </td>
                        <td class="text-sm px-5 py-3 text-slate-700">{{ $about->title }}</td>
                        <td class="text-sm px-5 py-3 text-slate-700">
                            <p class="w-64 truncate">{{ $about->description }}</p>
                        </td>
                        <td class="text-sm px-5 py-3 text-slate-700">
                            <div class="flex space-x-3">
                                <!-- EDIT BUTTON -->
                                <a href="{{ route('about.edit', $about->id) }}" class="w-8 h-8 flex items-center justify-center rounded-md transition-all duration-300 bg-yellow-500 hover:bg-yellow-700 focus:ring-2 focus:ring-yellow-300 text-white">
                                    <span class="iconify text-lg" data-icon="akar-icons:edit"></span>
                                </a>
                                <!-- DELETE BUTTON -->
                                <div x-data="{ openConfirmDeleteModal : false }">
                                    <button @click="openConfirmDeleteModal = true" class="w-8 h-8 flex items-center justify-center rounded-md transition-all duration-300 bg-red-500 hover:bg-red-700 focus:ring-2 focus:ring-red-300 text-white">
                                        <span class="iconify text-lg" data-icon="heroicons-outline:trash"></span>
                                    </button>
                                    <div x-show="openConfirmDeleteModal" class="w-full h-screen fixed z-50 inset-0 bg-slate-900 bg-opacity-50 p-3 cursor-pointer flex justify-center items-center">
                                        <div x-show="openConfirmDeleteModal" @click.away="openConfirmDeleteModal = false" x-transition x-transition.duration.200ms class="w-full bg-white cursor-default rounded-lg mx-auto max-w-xl overflow-hidden p-8">
                                            <h1 class="text-xl font-medium">Anda yakin ingin menghapus?</h1>
                                            <p class="py-5 text-zinc-500">Tindakan ini tidak dapat dibatalkan</p>
                                            <div class="w-full flex space-x-3 justify-end pt-10">
                                                {{-- CANCEL BTN --}}
                                                <button @click="openConfirmDeleteModal = false" class="w-full md:w-40 h-11 flex items-center justify-center rounded-md transition-all duration-300 border border-slate-300 hover:bg-slate-100 focus:ring-2 focus:ring-slate-300 text-slate-500">
                                                    <span class="iconify text-lg" data-icon="heroicons-outline:trash"></span>
                                                    <span class="ml-2">Batalkan</span>
                                                </button>
                                                {{-- DELETE BTN --}}
                                                <form action="{{ route('about.destroy', $about->id) }}" method="POST" class="w-full md:w-40">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="w-full h-11 flex items-center justify-center rounded-md transition-all duration-300 bg-red-500 hover:bg-red-700 focus:ring-2 focus:ring-red-300 text-white">
                                                        <span class="iconify text-lg" data-icon="heroicons-outline:trash"></span>
                                                        <span class="ml-2">Hapus data</span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-sm text-red-500 italic">Tidak ada data ditemukan!</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>