@extends('layouts.index')

@section('container')
@include('components.navbar-dark')

{{-- ======================= HERO SECTION ======================= --}}
<section class="hero-section relative h-[50vh] flex items-center justify-center text-white">
    <div class="absolute w-full h-full bg-black/40 z-10"></div>
    <h1 class="text-5xl font-extrabold font-title z-20">Guest Activities</h1>
    <img src="https://source.unsplash.com/1600x900/?bali,adventure" class="w-full h-full object-cover" alt="Adventure in Bali">
</section>

{{-- ======================= PAGE WRAPPER (2 Columns) ======================= --}}
<div class="bg-slate-50">
    <div class="container mx-auto md:px-10 px-4 py-20 grid grid-cols-1 lg:grid-cols-12 gap-8">

        {{-- ======================= SIDEBAR LEFT ======================= --}}
        <aside class="lg:col-span-3">
            <form method="GET" action="{{ url()->current() }}" class="space-y-8">
                
                <section class="bg-white rounded-xl shadow-md overflow-hidden border">
                    <div class="bg-cyan-700 text-white p-4">
                        <h3 class="font-semibold text-lg">Tour Recommendations</h3>
                    </div>
                    <div class="p-5">
                        @php
                            $fallbackDest = [
                                ['name' => 'Kintamani Tour', 'slug' => 'kintamani-tour'],
                                ['name' => 'Uluwatu Sunset', 'slug' => 'uluwatu-sunset'],
                                ['name' => 'Ubud Day Trip', 'slug' => 'ubud-day-trip'],
                            ];
                            $dest = isset($topDestinations) && count($topDestinations) ? $topDestinations : $fallbackDest;
                        @endphp
                        <ul class="space-y-2">
                            @foreach($dest as $d)
                                <li>
                                    <a href="/tour/{{ $d['slug'] ?? $d->slug }}" class="text-gray-700 hover:text-cyan-600 hover:underline">{{ $d['name'] ?? $d->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </section>

                <section class="bg-white rounded-xl shadow-md overflow-hidden border">
                    <div class="bg-cyan-700 text-white p-4">
                        <h3 class="font-semibold text-lg">Sort By</h3>
                    </div>
                    @php
                        $fallbackCategories = collect([
                            ['slug' => 'hidden-gems', 'name' => 'Hidden Gems'],
                            ['slug' => 'water-activity', 'name' => 'Water Activity'],
                            ['slug' => 'nature', 'name' => 'Nature'],
                        ]);
                        $cats = isset($categories) && count($categories) ? collect($categories)->map(fn($c)=>['slug'=>$c->slug, 'name'=>$c->name]) : $fallbackCategories;
                        $selectedCats = collect(request()->input('category', []))->flatten()->all();
                    @endphp
                    <div class="p-5">
                        <div class="space-y-3">
                            @foreach($cats as $cat)
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" name="category[]" value="{{ $cat['slug'] }}" class="rounded border-gray-300 text-cyan-600 focus:ring-cyan-500" {{ in_array($cat['slug'], $selectedCats) ? 'checked' : '' }}>
                                <span class="text-gray-700">{{ $cat['name'] }}</span>
                            </label>
                            @endforeach
                        </div>
                        <button type="submit" class="mt-5 w-full bg-cyan-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-cyan-700 transition">Apply Filters</button>
                    </div>
                </section>

                <section class="bg-white rounded-xl shadow-md overflow-hidden border">
                    <div class="bg-cyan-700 text-white p-4">
                        <h3 class="font-semibold text-lg">Contact Information</h3>
                    </div>
                    <div class="p-5">
                        <ul class="space-y-3 text-gray-700">
                           <li class="flex items-center"><i class="icofont-phone text-gray-500 mr-3"></i> 081-225-338-888</li>
                           <li class="flex items-center"><i class="icofont-email text-gray-500 mr-3"></i> TourBali@gmail.com</li>
                        </ul>
                    </div>
                </section>

            </form>
        </aside>

        {{-- ======================= MAIN CONTENT RIGHT ======================= --}}
        <main class="lg:col-span-9">
            {{-- Info Bar --}}
            <div class="mb-6 text-sm text-gray-600">
                @php
                    $total = method_exists($activities, 'total') ? $activities->total() : (is_countable($activities) ? count($activities) : 0);
                @endphp
                Menampilkan <span class="font-semibold text-gray-800">{{ $total }}</span> aktivitas.
                @if($selectedCats)
                    <a href="{{ url()->current() }}" class="ml-2 text-cyan-700 hover:underline">Reset Filter</a>
                @endif
            </div>

            {{-- Grid of Activity Cards --}}
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                @forelse ($activities as $activity)
                {{-- KARTU BARU DARI REFERENSI HOMEPAGE --}}
                <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col group h-full">
                    <div class="relative">
                        <img src="{{ asset('storage/'.$activity->image_cover) }}" alt="Image of {{ $activity->name }}" class="w-full h-56 object-cover" loading="lazy">
                        @if(($activity->is_best_seller ?? false))
                            <span class="absolute top-3 left-3 px-3 py-1 text-xs font-semibold bg-yellow-400 text-gray-900 rounded-full">Best Seller</span>
                        @endif
                    </div>
                    <div class="p-5 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold font-subtitle mt-1 mb-3 text-gray-800">{{ $activity->name }}</h3>
                        <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                            {{ \Illuminate\Support\Str::limit($activity->short_description, 120, '...') }}
                        </p>
                        <div class="mt-6 pt-4 border-t flex justify-between items-center">
                            <div>
                                <span class="text-xs text-gray-500">from</span>
                                <p class="text-lg font-bold text-gray-900">Rp {{ number_format($activity->price,0,',','.') }}</p>
                            </div>
                            <a href="/tour/{{ $activity->slug }}" class="px-4 py-2 border rounded-full text-sm font-semibold text-cyan-600 border-cyan-600 hover:bg-cyan-600 hover:text-white transition-all">
                                View More
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="md:col-span-2 xl:col-span-3 rounded-2xl bg-white shadow p-8 text-center text-gray-600">
                    Belum ada aktivitas yang cocok dengan filter Anda. Coba reset filter atau pilih kategori lain.
                </div>
                @endforelse
            </div>

            {{-- Pagination --}}
            @if(method_exists($activities, 'links'))
            <div class="mt-12">
                {{ $activities->withQueryString()->links() }}
            </div>
            @endif
        </main>

    </div>
</div>

{{-- ======================= CTA SECTION ======================= --}}
<section class="relative bg-gray-800 py-20 text-white">
    <img src="https://source.unsplash.com/1600x900/?bali,coast" class="absolute inset-0 w-full h-full object-cover opacity-20" alt="Bali coast">
    <div class="container mx-auto px-4 relative z-10 text-center">
        <h2 class="text-3xl font-bold font-subtitle">Tidak Menemukan Pilihan yang Pas?</h2>
        <p class="mt-2 mb-8 max-w-2xl mx-auto">Konsultasikan dengan kami sekarang juga untuk menemukan destinasi terbaik sesuai kemauanmu!</p>
        <a href="{{ config('app.whatsapp') }}" class="button bg-white text-cyan-700 hover:bg-gray-200">Hubungi Kami</a>
        
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mt-16 max-w-5xl mx-auto">
            <div class="bg-white/10 p-4 rounded-lg backdrop-blur-sm">
                <i class="icofont-price text-3xl"></i>
                <h4 class="font-semibold mt-2">Jaminan Harga Termurah</h4>
            </div>
            <div class="bg-white/10 p-4 rounded-lg backdrop-blur-sm">
                <i class="icofont-shield-alt text-3xl"></i>
                <h4 class="font-semibold mt-2">Aman & Terpercaya</h4>
            </div>
            <div class="bg-white/10 p-4 rounded-lg backdrop-blur-sm">
                <i class="icofont-headphone-alt-1 text-3xl"></i>
                <h4 class="font-semibold mt-2">Bantuan Pelanggan 24/7</h4>
            </div>
            <div class="bg-white/10 p-4 rounded-lg backdrop-blur-sm">
                <i class="icofont-map-pins text-3xl"></i>
                <h4 class="font-semibold mt-2">Itinerary Fleksibel</h4>
            </div>
        </div>
    </div>
</section>

{{-- ======================= FAQ SECTION ======================= --}}
<section class="faq-section py-20">
    <div class="container mx-auto px-4">
        <h1 class="title">Frequently Asked Questions</h1>
        <div class="mt-10 max-w-4xl mx-auto divide-y">
             <div class="py-5" x-data="{ open: false }">
                <div @click="open = !open" class="flex justify-between items-center cursor-pointer">
                    <h3 class="text-xl font-semibold">Bagaimana cara memesan aktivitas?</h3>
                    <i class="icofont-plus text-2xl" :class="{ 'rotate-45': open }"></i>
                </div>
                <p x-show="open" x-transition class="mt-3 text-gray-600 leading-relaxed">Anda dapat langsung menekan tombol "View More" untuk melihat detail, lalu menghubungi kami melalui tombol WhatsApp yang tersedia untuk proses pemesanan lebih lanjut.</p>
            </div>
             <div class="py-5" x-data="{ open: false }">
                <div @click="open = !open" class="flex justify-between items-center cursor-pointer">
                    <h3 class="text-xl font-semibold">Apakah pembayaran harus lunas di awal?</h3>
                    <i class="icofont-plus text-2xl" :class="{ 'rotate-45': open }"></i>
                </div>
                <p x-show="open" x-transition class="mt-3 text-gray-600 leading-relaxed">Kami menawarkan opsi pembayaran yang fleksibel. Anda bisa membayar deposit terlebih dahulu dan melunasi sisanya saat hari-H. Silakan diskusikan dengan tim kami untuk detailnya.</p>
            </div>
        </div>
    </div>
</section>

@include('components.footer')

@endsection