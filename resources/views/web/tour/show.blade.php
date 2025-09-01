@extends('layouts.index')

@section('container')

  {{-- Navbar disertakan di sini --}}
  @include('components.navbar')

<main class="bg-gray-50 pt-32 pb-20">
  <div class="container mx-auto px-4 lg:px-12">
      {{-- Layout utama 2 kolom --}}
    <div class="flex flex-col lg:flex-row lg:gap-x-12">
      <div class="w-full lg:w-2/3">
        <h1 class="text-3xl lg:text-4xl font-bold font-title text-gray-800">
            {{ $package->name }}
        </h1>
        <div class="flex flex-wrap gap-x-6 gap-y-4 my-6 pb-6 border-b">
          <div class="flex items-center text-sm text-gray-600">
            <i class="icofont-clock-time text-cyan-600 mr-2 text-xl"></i>
            Duration: {{ $package->duration }}
          </div>
          <div class="flex items-center text-sm text-gray-600">
            <i class="icofont-user-alt-7 text-cyan-600 mr-2 text-xl"></i>
            Including Driver & Guide
          </div>
          <div class="flex items-center text-sm text-gray-600">
            <i class="icofont-location-pin text-cyan-600 mr-2 text-xl"></i>
            Includes Pickup Airport and Hotels
          </div>
          <div class="flex items-center text-sm text-gray-600">
            <i class="icofont-calendar text-cyan-600 mr-2 text-xl"></i>
            Free Cancellation Fee
          </div>
        </div>

        <div class="w-full">
          <div style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff"
            class="swiper swiper-package2 rounded-xl overflow-hidden shadow-md bg-gray-200">
            <div class="swiper-wrapper">
                @foreach ($slides as $s)
                  <div class="swiper-slide">
                    <img src="{{ $s['src'] }}"
                        alt="{{ $s['alt'] }}"
                        class="w-full h-80 lg:h-[450px] object-cover"
                        loading="lazy" />
                  </div>
                @endforeach
              </div>
            {{-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div> --}}
          </div>

          <div thumbsSlider="" class="swiper swiper-package mt-3">
            <div class="swiper-wrapper">
              @foreach ($slides as $s)
                <div class="swiper-slide">
                  <img src="{{ $s['src'] }}"
                    alt="Thumb - {{ $s['alt'] }}"
                    class="w-full h-24 object-cover rounded-lg"
                    loading="lazy" />
                </div>
              @endforeach
            </div>
          </div>
        </div>
          
          <div class="mt-12">
            <h2 class="text-2xl font-bold font-subtitle mb-4">Overview</h2>
            {{-- Kelas 'prose' dari Tailwind untuk styling teks otomatis --}}
            <div class="prose max-w-none text-gray-600 leading-relaxed">
              <p>
                  {{ $package->description }}
              </p>
            </div>
            <br>
            @if(!empty($package->what_to_expect) && is_array($package->what_to_expect))
            <div class="pt-8 border-t">
              <h2 class="text-[24px] font-bold font-subtitle mb-4">What To Expect</h2>
              <ul class="space-y-3 text-gray-700">
                  @foreach ($package->what_to_expect as $item)
                  <li class="flex items-start text-[20px]">
                      <i class="icofont-check-alt text-emerald-500 mr-3 mt-1"></i>
                      <span>{{ $item }}</span>
                  </li>
                  @endforeach
              </ul>
            </div>
            @endif
        </div>
      
      <br>

      <div class="pt-8 border-t">
      {{-- tambahkan ini sekali di layout agar tidak FOUC --}}
      <style>[x-cloak]{ display:none !important; }</style>

      <h2 class="text-[24px] font-bold font-subtitle mb-4">Itinerary</h2>

      @if ($package->category_id == 2)
      {{-- Day 1 auto-open --}}
      <div x-data="{ openDays: { {{ (int)$firstDay }}: true } }" class="space-y-4">
        @foreach ($byDay as $day => $items)
          <div class="border rounded-lg" x-cloak>
            {{-- Header Day --}}
            <button
              type="button"
              @click="openDays[{{ (int)$day }}] = !openDays[{{ (int)$day }}]"
              class="w-full flex items-center justify-between px-4 py-3"
          >
              <span class="font-semibold text-lg">Day {{ $day }}</span>
              <i class="icofont-simple-down text-2xl text-gray-500 transition-transform duration-300"
                :class="{ 'rotate-180': openDays[{{ (int)$day }}] }"></i>
            </button>

            {{-- Konten Day --}}
            <div x-show="openDays[{{ (int)$day }}]"
              x-transition:enter="transition ease-out duration-300"
              x-transition:enter-start="opacity-0 -translate-y-2"
              x-transition:enter-end="opacity-100 translate-y-0"
              x-transition:leave="transition ease-in duration-200"
              x-transition:leave-start="opacity-100 translate-y-0"
              x-transition:leave-end="opacity-0 -translate-y-2"
              class="px-4 pb-4"
            >
                <div class="relative pl-8 border-l-2 border-gray-300 mt-2">
                  @foreach ($items as $item)
                    <div class="mb-8 ml-4">
                        <div class="absolute w-8 h-8 bg-cyan-600 rounded-full -left-4 flex items-center justify-center text-white font-bold">
                            {{ $loop->iteration }}
                        </div>
                        <p class="font-bold text-gray-800">
                            {{ \Illuminate\Support\Str::of($item->start_time)->substr(0,5) }} – {{ $item->name }}
                        </p>
                        <p class="text-gray-600 mt-1 text-[20px]">
                            {{ $item->description }}
                        </p>
                    </div>
                  @endforeach
                </div>
            </div>
          </div>
        @endforeach
      </div>
      @else
      <div class="relative pl-8 border-l-2 border-gray-300 mt-2">
        @foreach ($destinations as $item)
          <div class="mb-8 ml-4">
              <div class="absolute w-8 h-8 bg-cyan-600 rounded-full -left-4 flex items-center justify-center text-white font-bold">
                  {{ $loop->iteration }}
              </div>
              <p class="font-bold text-gray-800">
                  {{ \Illuminate\Support\Str::of($item->start_time)->substr(0,5) }} – {{ $item->name }}
              </p>
              <p class="text-gray-600 mt-1 text-[20px]">
                  {{ $item->description }}
              </p>
          </div>
        @endforeach
      </div>
      @endif

      


    <div class="space-y-12 mt-12">  
      <div class="pt-8 border-t">
        <div class="divide-y">
          <div class="py-5">
            <div class="flex justify-between items-center cursor-pointer">
              <h2 class="text-[24px] font-bold font-subtitle">What's Included</h2>
            </div>
            <div class="mt-4 text-[20px] text-gray-700 leading-relaxed">
              <p class="mb-2"><strong>Included:</strong> {{ $package->whats_included }} </p>
              @if ($package->whats_not_included)
              <p><strong>Not Included:</strong> {{ $package->whats_not_included }}</p>
              @endif
            </div>
          </div>
          @if ($package->need_to_know)
          <div class="py-5">
            <div class="flex justify-between items-center cursor-pointer">
              <h2 class="text-[24px] font-bold font-subtitle">Need to Know</h2>
            </div>
            <div class="mt-4 text-[20px] text-gray-700 leading-relaxed">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo nam aut quam eligendi, quos odio sequi dolores recusandae sunt minima.</p>
            </div>
          </div>
          @endif
          @if ($package->what_to_bring)
          <div class="py-5">
            <div class="flex justify-between items-center cursor-pointer">
              <h2 class="text-[24px] font-bold font-subtitle">What to Bring</h2>
            </div>
            <div class="mt-4 text-[20px] text-gray-700 leading-relaxed">
              <p>{{ $package->what_to_bring }}</p>
            </div>
          </div>
          @endif
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
<section class="you-might-like bg-sky-50 py-20">
  <div class="container mx-auto px-4 md:px-10">
    <h1 class="title">You Might Also Like</h1>

    <div class="swiper-container related-tours-swiper mt-12 overflow-hidden">
      <div class="swiper-wrapper">
        @foreach ($relatedPackages as $relatedPackage)
          <div class="swiper-slide h-full">
            <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col group h-full">
              <div class="relative">
                <img
                  src="{{ asset('storage/'.$relatedPackage->image_cover) }}"
                  alt="Image of {{ $relatedPackage->name }}"
                  class="w-full h-56 object-cover"
                  loading="lazy"
                >
              </div>
              <div class="p-5 flex flex-col flex-grow">
                <p class="text-sm text-gray-500">{{ $relatedPackage->location ?? 'Bali, Indonesia' }}</p>
                <h3 class="text-xl font-bold font-subtitle mt-1 mb-3 text-gray-800">{{ $relatedPackage->name }}</h3>
                <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                  {{ \Illuminate\Support\Str::limit(strip_tags($relatedPackage->description), 120, '...') }}
                </p>
                <div class="mt-6 pt-4 border-t flex justify-between items-center">
                  <div>
                    <span class="text-xs text-gray-500">Start From</span>
                    <p class="text-lg font-bold text-gray-900">
                      Rp {{ number_format($relatedPackage->price * 1000) }}
                    </p>
                  </div>
                  <a href="{{ url('/tour/'.$relatedPackage->slug) }}"
                     class="px-4 py-2 border rounded-full text-sm font-semibold text-cyan-600 border-cyan-600 hover:bg-cyan-600 hover:text-white transition-all duration-300">
                    View More
                  </a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>

      {{-- <div class="swiper-pagination mt-8 relative"></div> --}}
    </div>
  </div>
</section>


  {{-- Footer disertakan di sini --}}
  @include('components.footer')

{{-- Ini adalah penutup untuk @section('container') --}}
@push('scripts')
<script>
  var swiperThumbs = new Swiper(".swiper-package", {
    loop: {{ $slides->count() > 1 ? 'true' : 'false' }},
    spaceBetween: 10,
    slidesPerView: 5,
    freeMode: true,
    watchSlidesProgress: true,
    breakpoints: {
      0:   { slidesPerView: 3, spaceBetween: 8 },
      640: { slidesPerView: 5, spaceBetween: 10 },
    },
    
  });

  var swiperMain = new Swiper(".swiper-package2", {
    loop: {{ $slides->count() > 1 ? 'true' : 'false' }},
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: { el: ".swiper-pagination", clickable: true },
    thumbs: { swiper: swiperThumbs },
    autoplay: {
        delay: 4000, // Pindah slide otomatis setiap 4 detik
        disableOnInteraction: false,
    },
  });

    var swiperRelated = new Swiper('.related-tours-swiper', {
    spaceBetween: 16,
    pagination: { el: '.swiper-pagination', clickable: true },
    // 4 kolom di layar besar
    breakpoints: {
      0:    { slidesPerView: 1 },
      640:  { slidesPerView: 2 },
      1024: { slidesPerView: 3 },
      1280: { slidesPerView: 4 },
    },
    autoplay: {
        delay: 4000, // Pindah slide otomatis setiap 4 detik
        disableOnInteraction: false,
    },
  });
</script>
@endpush
@endsection