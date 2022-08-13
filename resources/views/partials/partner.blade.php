<section class="w-full py-10 bg-white">
    <div class="w-full max-w-screen-custom mx-auto px-4">
        <div class="w-full">
            <h1 data-aos="fade-up" data-aos-delay="200" class="text-2xl md:text-3xl font-bold max-w-md">Partner kami</h1>
            <p data-aos="fade-up" data-aos-delay="400" class="max-w-md mt-5 text-zinc-500">Kami telah dipercaya oleh banyak klien perorangan dan beberapa perusahaan besar</p>
        </div>
        <div class="w-full mt-10 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-5">
            @foreach ($partners as $partner)
                <div data-aos="zoom-in" data-aos-delay="{{ $delayPartner++ }}00" class="w-full px-5 py-2 border rounded-sm">
                    <img src="{{ asset('storage/uploads/partner/'. $partner->logo) }}" class="w-full" alt="">
                </div>
            @endforeach
        </div>
    </div>
</section>