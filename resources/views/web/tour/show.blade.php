@extends('layouts.index')

@section('container')

  {{-- Navbar disertakan di sini --}}
  @include('components.navbar')

  <main class="bg-gray-50 pt-32 pb-20">
    <div class="container mx-auto px-4 lg:px-12">

      {{-- Layout utama 2 kolom --}}
      <div class="flex flex-col lg:flex-row lg:gap-x-12">

{{-- ============================================= --}}
{{-- ================ KOLOM KIRI (KONTEN) ======== --}}
{{-- ============================================= --}}
<div class="w-full lg:w-2/3">

    <h1 class="text-3xl lg:text-4xl font-bold font-title text-gray-800">
        {{ $package->name }}
    </h1>

    <div class="flex flex-wrap gap-x-6 gap-y-4 my-6 pb-6 border-b">
        <div class="flex items-center text-sm text-gray-600">
            <i class="icofont-clock-time text-cyan-600 mr-2 text-xl"></i>
            Durasi: 10 Jam
        </div>
        <div class="flex items-center text-sm text-gray-600">
            <i class="icofont-user-alt-7 text-cyan-600 mr-2 text-xl"></i>
            Termasuk Driver & Guide
        </div>
        <div class="flex items-center text-sm text-gray-600">
            <i class="icofont-location-pin text-cyan-600 mr-2 text-xl"></i>
            Termasuk Penjemputan
        </div>
        <div class="flex items-center text-sm text-gray-600">
            <i class="icofont-calendar text-cyan-600 mr-2 text-xl"></i>
            Bebas Biaya Pembatalan
        </div>
    </div>

    {{-- Kode PHP untuk mengumpulkan semua gambar dari setiap destinasi --}}
    @php
        $galleryImages = collect();
        if(isset($destinations)) {
            foreach ($destinations as $destination) {
                if(isset($destination->photo)) {
                    foreach ($destination->photo as $photo) {
                        $galleryImages->push($photo);
                    }
                }
            }
        }
    @endphp

    <div class="w-full">
        <div class="w-full h-80 lg:h-[450px] rounded-xl overflow-hidden shadow-md bg-gray-200">
            {{-- Menggunakan gambar cover dari package, atau gambar pertama dari galeri sebagai fallback --}}
            <img src="{{ asset('storage/' . ($package->image_cover ?? $galleryImages->first()->image ?? '')) }}" alt="Main image for {{ $package->name }}" class="w-full h-full object-cover">
        </div>
        <div class="grid grid-cols-3 sm:grid-cols-5 gap-3 mt-3">
            {{-- Menampilkan 5 gambar pertama dari galeri --}}
            @foreach ($galleryImages->take(5) as $photo)
                <div class="w-full h-24 bg-gray-200 rounded-lg overflow-hidden">
                     <img src="{{ asset('storage/' . $photo->image) }}" alt="Thumbnail of a destination in {{ $package->name }}" class="w-full h-full object-cover cursor-pointer hover:opacity-80 transition">
                </div>
            @endforeach
        </div>
    </div>
    
    <div class="mt-12">
    <h2 class="text-2xl font-bold font-subtitle mb-4">Overview</h2>
    {{-- Kelas 'prose' dari Tailwind untuk styling teks otomatis --}}
    <div class="prose max-w-none text-gray-600 leading-relaxed">
        <p>
            The Kintamani Tour, Ubud Center, and Natural Hot Spring experience offers a perfect blend of cultural exploration, breathtaking scenery, and relaxing leisure. Begin your journey in Ubud, the heart of Bali’s arts and traditions, where you can explore bustling markets, local craftsmanship, and iconic landmarks. Continue to Kintamani, a highland area renowned for its panoramic views of Mount Batur and the stunning lake that surrounds it. The tour concludes with a rejuvenating soak in a natural hot spring, allowing you to unwind while enjoying the serene mountain atmosphere. This trip is ideal for travelers seeking a balance of adventure, culture, and relaxation in one day.
        </p>
    </div>

    <br>
        <div class="pt-8 border-t">
            <h2 class="text-[24px] font-bold font-subtitle mb-4">What To Expect</h2>
            <ul class="space-y-3 text-gray-700">
                <li class="flex items-start text-[20px]">
                    <i class="icofont-check-alt text-emerald-500 mr-3 mt-1"></i>
                    <span>Saksikan pemandangan megah Gunung Batur dari dekat.</span>
                </li>
                <li class="flex items-start text-[20px]">
                    <i class="icofont-check-alt text-emerald-500 mr-3 mt-1"></i>
                    <span>Jelajahi pusat budaya dan seni Bali di jantung kota Ubud.</span>
                </li>
                <li class="flex items-start text-[20px]">
                    <i class="icofont-check-alt text-emerald-500 mr-3 mt-1"></i>
                    <span>Rasakan relaksasi di sumber air panas alami dengan pemandangan danau.</span>
                </li>
                <li class="flex items-start text-[20px]">
                    <i class="icofont-check-alt text-emerald-500 mr-3 mt-1"></i>
                    <span>Nikmati perjalanan pribadi dan nyaman dengan driver berpengalaman.</span>
                </li>
            </ul>
        </div>
<br>
        <div class="pt-8 border-t">
            <h2 class="text-[24px] font-bold font-subtitle mb-4">Tour Location</h2>
            <div class="w-full max-w-xl mx-auto aspect-video rounded-xl bg-gray-200 mt-4 flex items-center justify-center border">
                <p class="text-gray-500">Placeholder untuk Google Maps Embed</p>
            </div>
        </div>
<br>
        @php
            $itineraryData = [
                ['time_title' => '08:00 – Hotel Pick-Up', 'description' => 'Your driver will pick you up from your hotel in a comfortable, air-conditioned vehicle.'],
                ['time_title' => '09:00 – Explore Ubud Center', 'description' => 'Visit Ubud’s vibrant art market, royal palace, and surrounding attractions. Enjoy Browse local handicrafts, paintings, and souvenirs.'],
                ['time_title' => '11:30 – Kintamani & Mount Batur Viewpoint', 'description' => 'Take in the stunning panoramic views of Mount Batur and Lake Batur from one of the best vantage points.'],
                ['time_title' => '13:30 – Natural Hot Spring', 'description' => 'Relax and rejuvenate in a natural hot spring near Lake Batur, surrounded by mountain scenery.'],
                ['time_title' => '17:00 – Return to Hotel', 'description' => 'Arrive back at your hotel with unforgettable memories from your cultural and nature-filled day.']
            ];
        @endphp

        <div class="pt-8 border-t" x-data="{ open: false }">
    <div @click="open = !open" class="flex justify-between items-center cursor-pointer">
        <h2 class="text-[24px] font-bold font-subtitle">Itinerary</h2>
        <i class="icofont-simple-down text-2xl text-gray-500 transition-transform duration-300" :class="{ 'rotate-180': open }"></i>
    </div>
    
    {{-- Konten Timeline yang bisa disembunyikan dengan transisi yang lebih halus --}}
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         class="mt-6">
        <div class="relative pl-8 border-l-2 border-gray-300">
            @foreach ($itineraryData as $index => $item)
                <div class="mb-10 ml-4">
                    <div class="absolute w-8 h-8 bg-cyan-600 rounded-full -left-4 flex items-center justify-center text-white font-bold">
                        {{ $index + 1 }}
                    </div>
                    <p class="font-bold text-gray-800">{{ $item['time_title'] }}</p>
                    <p class="text-gray-600 mt-1 text-[20px]">{{ $item['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="space-y-12 mt-12">

{{-- =================================================================== --}}
{{-- ================ KODE LANJUTAN (START) ============================ --}}
{{-- Letakkan kode ini di bawah blok kode Itinerary yang sudah ada --}}
{{-- =================================================================== --}}

<div class="space-y-12 mt-12">

    <div class="pt-8 border-t">
        <div class="divide-y">
            <div class="py-5" x-data="{ open: false }">
                <div @click="open = !open" class="flex justify-between items-center cursor-pointer">
                    <h2 class="text-[24px] font-bold font-subtitle">What's Included</h2>
                    <i class="icofont-plus text-2xl text-gray-500 transition-transform duration-300" :class="{ 'rotate-45': open }"></i>
                </div>
                <div x-show="open" x-transition class="mt-4 text-[20px] text-gray-700 leading-relaxed">
                    <p class="mb-2"><strong>Termasuk:</strong> Sesi bermain ATV, peralatan keselamatan standar internasional, asuransi, fasilitas handuk & ruang ganti, dan makan siang setelah aktivitas.</p>
                    <p><strong>Tidak Termasuk:</strong> Pembelian dokumentasi (foto/video) dan pengeluaran pribadi lainnya.</p>
                </div>
            </div>
            <div class="py-5" x-data="{ open: false }">
                <div @click="open = !open" class="flex justify-between items-center cursor-pointer">
                    <h2 class="text-[24px] font-bold font-subtitle">Need to Know</h2>
                    <i class="icofont-plus text-2xl text-gray-500 transition-transform duration-300" :class="{ 'rotate-45': open }"></i>
                </div>
                <div x-show="open" x-transition class="mt-4 text-[20px] text-gray-700 leading-relaxed">
                    <p>Konfirmasi akan diterima saat pemesanan. Untuk Tandem Ride, pemesanan harus dalam kelipatan 2 orang. Anak-anak (di bawah 13 tahun) harus melakukan Tandem Ride bersama orang dewasa.</p>
                </div>
            </div>
             <div class="py-5" x-data="{ open: false }">
                <div @click="open = !open" class="flex justify-between items-center cursor-pointer">
                    <h2 class="text-[24px] font-bold font-subtitle">What to Bring</h2>
                    <i class="icofont-plus text-2xl text-gray-500 transition-transform duration-300" :class="{ 'rotate-45': open }"></i>
                </div>
                <div x-show="open" x-transition class="mt-4 text-[20px] text-gray-700 leading-relaxed">
                    <p>Baju ganti, tabir surya (sunblock), kacamata hitam, dan uang tunai atau kartu untuk pengeluaran pribadi Anda.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-8 border-t">
        <h2 class="text-[24px] font-bold font-subtitle mb-4">Cancellation Policy</h2>
        <p class="text-[20px] text-gray-600 leading-relaxed">
            Untuk pengembalian dana penuh, Anda harus membatalkan setidaknya 24 jam sebelum waktu mulai tur. Jika Anda membatalkan kurang dari 24 jam sebelum waktu mulai, jumlah yang Anda bayarkan tidak akan dikembalikan. Perubahan apa pun yang dilakukan kurang dari 24 jam sebelum waktu mulai tur tidak akan diterima.
        </p>
    </div>

    <div class="pt-8 border-t text-center">
        <h2 class="text-[24px] font-bold font-subtitle">Siap Berpetualang?</h2>
        <p class="text-[20px] text-gray-600 mt-2 mb-6">Masih ada pertanyaan atau sudah siap memesan perjalanan Anda? Hubungi kami sekarang!</p>
        <a href="{{ config('app.whatsapp') }}?text=Hello,%20I'm%20interested%20in%20the%20{{ urlencode($package->name) }}%20tour%20package." class="inline-block bg-emerald-500 text-white font-bold py-3 px-8 rounded-lg shadow-md hover:bg-emerald-600 transition-colors duration-300">
            <i class="icofont-brand-whatsapp"></i> Hubungi via WhatsApp
        </a>
    </div>

</div>
</div>
    </div> 
</div>

        {{-- ============================================= --}}
{{-- ================ KOLOM KANAN (SIDEBAR) ====== --}}
{{-- ============================================= --}}
<div class="w-full lg:w-1/3 mt-12 lg:mt-0">
  <div class="sticky top-28"> {{-- Membuat sidebar 'menempel' saat scroll --}}

    <div class="bg-white rounded-xl shadow-lg border">
      {{-- Header Kotak Harga --}}
      <div class="bg-[#2973AC] text-white p-4 rounded-t-xl">
        <span class="text-sm">Start From</span>
        <p class="text-2xl font-bold">Rp {{ number_format($package->price * 1000) }}</p>
      </div>
      {{-- Isi Kotak --}}
      <div class="p-6">
        <h3 class="font-semibold text-gray-800 mb-4">Termasuk Dalam Paket:</h3>
        <ul class="space-y-3 text-gray-700 mb-6">
          <li class="flex items-start">
            <i class="icofont-car text-emerald-500 mr-3 mt-1"></i>
            <span>Mobil Pribadi Full AC</span>
          </li>
          <li class="flex items-start">
            <i class="icofont-user-suited text-emerald-500 mr-3 mt-1"></i>
            <span>Driver Profesional Berbahasa Inggris</span>
          </li>
          <li class="flex items-start">
            <i class="icofont-ticket-alt text-emerald-500 mr-3 mt-1"></i>
            <span>Semua Tiket Masuk Objek Wisata</span>
          </li>
          <li class="flex items-start">
            <i class="icofont-prestashop text-emerald-500 mr-3 mt-1"></i>
            <span>Biaya Parkir</span>
          </li>
           <li class="flex items-start">
            <i class="icofont-bottle text-emerald-500 mr-3 mt-1"></i>
            <span>Air Mineral</span>
          </li>
        </ul>
        {{-- Tombol Book Now --}}
        <a href="{{ config('app.whatsapp') }}?text=Hello,%20I'm%20interested%20in%20the%20{{ urlencode($package->name) }}%20tour%20package." class="w-full block text-center border border-[#2973AC] text-[#2973AC] font-semibold py-3 rounded-lg hover:bg-[#2973AC] hover:text-white transition-all duration-300">
          Book Now
        </a>
      </div>
    </div>

    <div class="bg-white rounded-xl shadow-lg border mt-8">
       <div class="p-6">
         <h3 class="font-semibold text-gray-800 mb-4">Contact Information</h3>
         <ul class="space-y-4 text-gray-600">
            <li class="flex items-center">
                <i class="icofont-phone text-gray-500 mr-4 text-xl"></i>
                <span>081-225-338-222-888</span>
            </li>
            <li class="flex items-center">
                <i class="icofont-email text-gray-500 mr-4 text-xl"></i>
                <span>TourBali@Gmail.com</span>
            </li>
            <li class="flex items-center">
                <i class="icofont-instagram text-gray-500 mr-4 text-xl"></i>
                <span>@Tourbali</span>
            </li>
             <li class="flex items-center">
                <i class="icofont-web text-gray-500 mr-4 text-xl"></i>
                <span>www.mytourbali.com</span>
            </li>
         </ul>
       </div>
    </div>

  </div>
</div>

  </div>
</div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </main>
  
{{-- ============================================= --}}
{{-- ================ YOU MIGHT ALSO LIKE ======== --}}
{{-- ============================================= --}}
<section class="you-might-like bg-slate-100 py-20">
    <div class="container mx-auto px-4 md:px-10">
        <h1 class="title">You Might Also Like</h1>

        {{-- Logika untuk menampilkan paket lain (selain yang sedang dilihat) --}}
        @php
            // Asumsi: $allPackages berisi semua paket, dikirim dari controller
            // $package adalah paket yang sedang dilihat saat ini
            if (isset($allPackages)) {
                $relatedPackages = $allPackages->where('id', '!=', $package->id);
            } else {
                // Fallback jika $allPackages tidak ada, tampilkan 3 paket acak
                $relatedPackages = \App\Models\Package::where('id', '!=', $package->id)->inRandomOrder()->take(6)->get();
            }
        @endphp

        <div class="swiper-container related-tours-swiper mt-12 overflow-hidden">
            <div class="swiper-wrapper">

                @foreach ($relatedPackages as $relatedPackage)
                <div class="swiper-slide h-full">
                    {{-- Kartu ini menggunakan desain yang sama persis dengan Top Destinations --}}
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col group h-full">
                        <div class="relative">
                            <img src="{{ asset('storage/'.$relatedPackage->image_cover) }}" alt="Image of {{ $relatedPackage->name }}" class="w-full h-56 object-cover" loading="lazy">
                        </div>
                        <div class="p-5 flex flex-col flex-grow">
                            <p class="text-sm text-gray-500">{{ $relatedPackage->location ?? 'Bali, Indonesia' }}</p>
                            <h3 class="text-xl font-bold font-subtitle mt-1 mb-3 text-gray-800">{{ $relatedPackage->name }}</h3>
                            <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                                {{ \Illuminate\Support\Str::limit($relatedPackage->description, 120, '...') }}
                            </p>
                            <div class="mt-6 pt-4 border-t flex justify-between items-center">
                                <div>
                                    <span class="text-xs text-gray-500">Start From</span>
                                    <p class="text-lg font-bold text-gray-900">Rp {{ number_format($relatedPackage->price * 1000) }}</p>
                                </div>
                                <a href="/tour/{{ $relatedPackage->slug }}" class="px-4 py-2 border rounded-full text-sm font-semibold text-cyan-600 border-cyan-600 hover:bg-cyan-600 hover:text-white transition-all duration-300">
                                    View More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="swiper-pagination mt-8 relative"></div>
        </div>

    </div>
</section>

  {{-- Footer disertakan di sini --}}
  @include('components.footer')

{{-- Ini adalah penutup untuk @section('container') --}}
@endsection