@extends('layouts.index')

@section('container')

@include('components.navbar-dark')
{{-- jumbotron --}}
<div class="swiper swiper-jumbotron w-full h-screen">
    <div class="swiper-wrapper">

        {{-- Slide 1 --}}
        <div class="swiper-slide relative bg-cover bg-center bg-black" style="background-image: url('https://images.unsplash.com/photo-1558005530-a7958896ec60?q=80&w=1171&auto=format&fit=crop&ixlib-rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3DD');"> 
            {{-- Dark Overlay --}}
            <div class="absolute inset-0 bg-black bg-opacity-60"></div>
            
            {{-- Text Content Container --}}
            <div class="relative z-10 flex flex-col justify-end h-full text-gray-200 px-6 md:px-12 lg:px-24 pb-20 md:pb-24 lg:pb-60 w-full max-w-4xl text-left">
                <h1 class="text-3xl md:text-5xl font-semibold drop-shadow-lg">
                    Jelajahi Surga Tersembunyi
                </h1>
                <p class="mt-4 text-lg md:text-xl font-normal max-w-xl">
                    Temukan keindahan alam Bali yang menakjubkan bersama kami. Paket tur eksklusif menanti Anda.
                </p>
            </div>
        </div>
        
        {{-- Slide 2 --}}
        <div class="swiper-slide relative bg-cover bg-center bg-black" style="background-image: url('https://images.unsplash.com/photo-1577717903315-1691ae25ab3f?q=80&w=1170&auto=format&fit=crop&ixlib-rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3DD');">
             {{-- Dark Overlay --}}
            <div class="absolute inset-0 bg-black bg-opacity-60"></div>
            
            {{-- Text Content Container --}}
            <div class="relative z-10 flex flex-col justify-end h-full text-gray-200 px-6 md:px-12 lg:px-24 pb-20 md:pb-24 lg:pb-60 w-full max-w-4xl text-left">
                <h1 class="text-3xl md:text-5xl font-semibold drop-shadow-lg">
                    Santai & Lepaskan Penat
                </h1>
                <p class="mt-4 text-lg md:text-xl font-normal max-w-xl">
                    Biarkan kami yang mengatur semuanya. Nikmati liburan tanpa stres dengan layanan terbaik dari tim profesional kami.
                </p>
            </div>
        </div>
        
        {{-- Slide 3 --}}
        <div class="swiper-slide relative bg-cover bg-center bg-black" style="background-image: url('https://images.unsplash.com/photo-1508499294917-a996a45e5482?q=80&w=1170&auto=format&fit=crop&ixlib-rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3DD');">
             {{-- Dark Overlay --}}
            <div class="absolute inset-0 bg-black bg-opacity-60"></div>
            
            {{-- Text Content Container --}}
            <div class="relative z-10 flex flex-col justify-end h-full text-gray-200 px-6 md:px-12 lg:px-24 pb-20 md:pb-24 lg:pb-60 w-full max-w-4xl text-left">
                <h1 class="text-3xl md:text-5xl font-semibold drop-shadow-lg">
                    Nikmati Keindahan Alam
                </h1>
                <p class="mt-4 text-lg md:text-xl font-normal max-w-xl">
                    Dari pantai yang mempesona hingga sawah terasering yang hijau, petualangan tak terlupakan Anda dimulai di sini.
                </p>
            </div>
        </div>

    </div>
</div>

  {{-- about --}}
<section class="about" id="about">
    <div class="container mx-auto px-4 lg:px-20 py-20">
        <h1 class="text-center font-title text-3xl mb-3 mb:text-6xl">About Me</h1>
        <img src="Bali2.png" alt="" class="rounded-md block md:hidden">
        <div class="flex justify-between lg:items-center">
            <div class="w-full md:w-1/2 md:pr-5 lg:pr-20">
                <h3 class="mt-5 text-2xl font-subtitle font-bold lg:text-3xl">Your Expert Guide to the Island of the Gods</h3>
                <p class="mt-3 mb-6 mb:mb-5 font-poppins text-gray-600 lg:text-base leading-relaxed text-justify">
                    My name is I Gusti Nyoman Sutresna, and I'm delighted to be your personal guide in Bali. With over 20 years of experience in the hospitality industry and more than a decade as a professional driver, I bring a wealth of local knowledge to every tour. I'm known for being friendly and proactive, always anticipating your needs to ensure a smooth and enjoyable journey. Flexibility is at the heart of my service; whether you're on a romantic honeymoon or traveling with a large family, I can customize the itinerary and vehicle to match your desires. Ultimately, your satisfaction is my top priority, and I am dedicated to making your Bali holiday truly unforgettable.
                </p>
                <a href="{{ config('app.whatsapp') }}" class="button">Contact Us</a>
            </div>
            <div
                class="hidden md:flex justify-center items-center w-full h-56 md:w-1/2 relative md:ms-6 md:h-48 lg:h-64 xl:h-80 xl:ms-10 mt-5 md:mt-0"
            >
                <img
                src="Bali2.png"
                class="absolute w-60 z-40 rounded-lg md:w-48 lg:w-64 xl:w-96 hover:scale-110 transition ease-in duration-300 cursor-pointer drop-shadow-2xl"
                />
                <img
                src="Bali2.png"
                class="absolute w-60 bottom-0 left-0 rounded-lg md:w-48 lg:w-64 xl:w-96 hover:z-50 hover:scale-110 transition ease-in duration-300 cursor-pointer hover:drop-shadow-2xl"
                />
                <img
                src="Bali2.png"
                class="absolute w-60 top-0 right-0 rounded-lg md:w-48 lg:w-64 xl:w-96 hover:z-50 hover:scale-110 transition ease-in duration-300 cursor-pointer hover:drop-shadow-2xl"
                />
            </div>
        </div>
    </div>
</section>

{{-- Why Choose Us --}}
<section class="why-choose-us" id="why-choose-us">
  <div class="py-20 w-full">
    <div class="container mx-auto px-6 md:px-10">

      {{-- Judul Section --}}
      <h1 class="title">Why Choose me?</h1>
      <p class="text-center text-gray-600 max-w-3xl mx-auto -mt-4 mb-16">
        I'm committed to providing an unforgettable holiday experience in Bali with the best service, transparent prices, and a friendly team.
      </p>

      {{-- Container untuk Poin Keunggulan --}}
      <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
        
        {{-- Poin 1: Harga Kompetitif --}}
        <div class="flex flex-col items-center">
          <div class="w-20 h-20 bg-cyan-400 rounded-full text-white flex items-center justify-center mb-4">
            <i class="icofont-price icofont-2x"></i>
          </div>
          <h3 class="mb-2 text-xl font-subtitle font-semibold">Competitive & Honest Price</h3>
          <p class="text-gray-700 leading-relaxed">
            Thanks to special contracts with Bali's best attractions and vendors, I can offer exceptional value and transparent pricing with no hidden fees.
          </p>
        </div>

        {{-- Poin 2: Berpengalaman & Profesional --}}
        <div class="flex flex-col items-center">
          <div class="w-20 h-20 bg-cyan-400 rounded-full text-white flex items-center justify-center mb-4">
            <i class="icofont-users-alt-5 icofont-2x"></i>
          </div>
          <h3 class="mb-2 text-xl font-subtitle font-semibold">Experienced & Professional</h3>
          <p class="text-gray-700 leading-relaxed">
            With over 20 years of hospitality experience and fluent English, your comfort and safety are my top priorities for a seamless journey.
          </p>
        </div>

        {{-- Poin 3: Tur Kustomisasi Penuh --}}
        <div class="flex flex-col items-center">
          <div class="w-20 h-20 bg-cyan-400 rounded-full text-white flex items-center justify-center mb-4">
            <i class="icofont-map-pins icofont-2x"></i>
          </div>
          <h3 class="mb-2 text-xl font-subtitle font-semibold">Fully Customizable Tours</h3>
          <p class="text-gray-700 leading-relaxed">
            Your holiday, your rules. We can customize any destination or activity, and negotiate the tour and price to create your perfect Bali adventure.
          </p>
        </div>

      </div>
    </div>
  </div>
</section>
 
{{-- ====================================================================== --}}
{{-- ================ BLOK UTAMA PENAWARAN (START) ======================== --}}
{{-- ====================================================================== --}}
<section id="featured-offers" class="w-full relative bg-gray-800 py-20">
    {{-- Background Image Layer --}}
    <img src="img/banner.jpg" class="absolute inset-0 w-full h-full object-cover opacity-20" alt="Bali coast background">

    {{-- Content Layer (positioned above the background) --}}
    <div class="relative z-10">

        {{-- -------------------------------------------------- --}}
        {{-- ----------------- TOP DESTINATIONS ----------------- --}}
        {{-- -------------------------------------------------- --}}
        <div class="container mx-auto px-4 md:px-10 mb-24">
            <h1 class="title text-white">Top Package Tour</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 mt-12">
                @foreach ($packages->take(4) as $package)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col group">
                    <div class="relative">
                        <img src="{{ asset('storage/'.$package->image_cover) }}" alt="Image of {{ $package->name }}" class="w-full h-56 object-cover" loading="lazy">
                    </div>
                    <div class="p-5 flex flex-col flex-grow">
                        {{-- <p class="text-sm text-gray-500">{{ $package->location ?? 'Kintamani, Bali' }}</p> --}}
                        <h3 class="text-xl font-bold font-subtitle mt-1 mb-3 text-gray-800">{{ $package->name }}</h3>
                        <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                            {{ \Illuminate\Support\Str::limit($package->description, 120, '...') }}
                        </p>
                        <div class="mt-6 pt-4 border-t flex justify-between items-center">
                            <div>
                                <span class="text-xs text-gray-500">Start From</span>
                                <p class="text-lg font-bold text-gray-900">Rp {{ number_format($package->price * 1000) }}</p>
                            </div>
                            <a href="/tour/{{ $package->slug }}" class="px-4 py-2 border rounded-full text-sm font-semibold text-cyan-600 border-cyan-600 hover:bg-cyan-600 hover:text-white transition-all duration-300">
                                View More
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-16">
                <a href="/tour-pacakges" class="bg-cyan-500 text-white font-bold py-3 px-8 rounded-lg shadow-md hover:bg-cyan-600 transition-colors duration-300">
                    View All Tour Package
                </a>
            </div>
        </div>


        {{-- -------------------------------------------------- --}}
        {{-- ------------------ TOUR PACKAGES ----------------- --}}
        {{-- -------------------------------------------------- --}}
        <div class="container mx-auto px-4 md:px-10 mb-24">
            <h1 class="title text-white">Top Activities</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 mt-12">
                @foreach ($activities as $activity)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden flex flex-col group">
                    <div class="relative">
                        <img src="{{ asset('storage/'.$activity->image_cover) }}" alt="Image of {{ $activity->name }}" class="w-full h-56 object-cover" loading="lazy">
                    </div>
                    <div class="p-5 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold font-subtitle mt-1 mb-3 text-gray-800">{{ $activity->name }}</h3>
                        <p class="text-gray-600 text-sm leading-relaxed flex-grow">
                            {{ \Illuminate\Support\Str::limit($activity->description, 120, '...') }}
                        </p>
                        <div class="mt-6 pt-4 border-t flex justify-between items-center">
                            <div>
                                <span class="text-xs text-gray-500">Start From</span>
                                <p class="text-lg font-bold text-gray-900">Rp {{ number_format($activity->price * 1000) }}</p>
                            </div>
                            <a href="/tour/{{ $activity->slug }}" class="px-4 py-2 border rounded-full text-sm font-semibold text-cyan-600 border-cyan-600 hover:bg-cyan-600 hover:text-white transition-all duration-300">
                                View More
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-16">
                <a href="/activities" class="bg-cyan-500 text-white font-bold py-3 px-8 rounded-lg shadow-md hover:bg-cyan-600 transition-colors duration-300">
                    View All Activities
                </a>
            </div>
        </div>

        <div class="container mx-auto px-4 md:px-10">
            <h2 class="text-3xl font-bold font-subtitle text-center text-white">Services</h2>
            <p class="mt-2 mb-12 max-w-2xl mx-auto text-center text-gray-300">We provide a complete solution for your travel needs in Bali.</p>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

                <a href="/cars" class="bg-white/10 backdrop-blur-md rounded-xl p-6 text-center text-white border border-white/20 transition-colors duration-300 hover:bg-white/20">
                    <i class="icofont-car-alt-1 icofont-4x text-cyan-400 mb-4"></i>
                    <h3 class="text-xl font-semibold font-subtitle mb-2">Car Charter</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">Explore Bali at your own pace with a private car and experienced driver.</p>
                </a>

                <a href="/airport" class="bg-white/10 backdrop-blur-md rounded-xl p-6 text-center text-white border border-white/20 transition-colors duration-300 hover:bg-white/20">
                    <i class="icofont-airplane-alt icofont-4x text-cyan-400 mb-4"></i>
                    <h3 class="text-xl font-semibold font-subtitle mb-2">Airport Transfer</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">Start and end your journey stress-free with our reliable airport pickup and drop-off service.</p>
                </a>

                <a href="/tour-packages" class="bg-white/10 backdrop-blur-md rounded-xl p-6 text-center text-white border border-white/20 transition-colors duration-300 hover:bg-white/20">
                    <i class="icofont-map-pins icofont-4x text-cyan-400 mb-4"></i>
                    <h3 class="text-xl font-semibold font-subtitle mb-2">Tour Packages</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">Discover the best of Bali with our curated tour packages, from culture to nature.</p>
                </a>

                <a href="/activities" class="bg-white/10 backdrop-blur-md rounded-xl p-6 text-center text-white border border-white/20 transition-colors duration-300 hover:bg-white/20">
                    <i class="icofont-diving-goggle icofont-4x text-cyan-400 mb-4"></i>
                    <h3 class="text-xl font-semibold font-subtitle mb-2">Activities</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">From water sports to cultural workshops, we offer a wide range of exciting activities.</p>
                </a>

            </div>
        </div>
    </div>
</section>
{{-- ====================================================================== --}}
{{-- ================= BLOK UTAMA PENAWARAN (END) ========================== --}}
{{-- ====================================================================== --}}

{{-- Testimonial Section - Modern Quote Example --}}
<section class="testimonial-quote py-20 bg-gray-50" id="testimonials">
  <div class="container mx-auto px-4">
    <h1 class="title">What People Say</h1>
    <p class="text-center text-gray-600 max-w-2xl mx-auto -mt-4 mb-16">
      Discover the experiences of our guests who have trusted us with their Bali holiday.
    </p>

    <div class="swiper swiper-testimonial">
      <div class="swiper-wrapper">
        @foreach ($reviews as $review)
        <div class="swiper-slide">
            {{-- Kita tambahkan `flex flex-col` agar footer (nama) selalu di bawah --}}
            <div class="relative h-full flex flex-col"> 
                <i class="icofont-quote-left icofont-5x absolute -top-6 -left-4 text-cyan-500 opacity-10"></i>
                
                {{-- Kontainer untuk teks testimoni --}}
                <div class="testimonial-content flex-grow"> {{-- flex-grow agar teks mengisi ruang --}}
                    
                    {{-- Versi Pendek (Excerpt) - Tampil secara default --}}
                    <p class="text-gray-700 text-base leading-relaxed z-10 excerpt">
                        {!! \Illuminate\Support\Str::limit($review->description, 150, '...') !!}
                        {{-- Tampilkan tombol "Read More" hanya jika teksnya memang panjang --}}
                        @if (strlen($review->description) > 150)
                            <button class="btn-read-more text-cyan-600 font-semibold hover:underline ml-1">Read More</button>
                        @endif
                    </p>

                    {{-- Versi Panjang (Full Text) - Disembunyikan secara default --}}
                    <p class="text-gray-700 text-base leading-relaxed z-10 full-text hidden">
                        {!! $review->description !!}
                        <button class="btn-read-less text-cyan-600 font-semibold hover:underline ml-1">Read Less</button>
                    </p>
                    
                </div>
                
                {{-- Bagian Profil (Footer Kartu) --}}
                <div class="flex items-center mt-6">
                    <img class="w-12 h-12 rounded-full object-cover mr-4" src="{{ asset('storage/'.$review->image) }}" alt="Photo of {{ $review->name }}">
                    <div>
                        <h4 class="font-semibold text-gray-900">{{ $review->name }}</h4>
                        <p class="text-sm text-gray-500">Visitor from Australia</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
      </div>
    </div>
  <div class="text-center mt-10">
          <a href="https://www.tripadvisor.com/UserReviewEdit-g297697-d25288635-My_Tour_Bali-Kuta_Kuta_District_Bali.html" class="button" target="_blank">Give your Review!</a> 
        </div>
    </div>
</section>


  {{-- gallery --}}
  <section class="gallery" id="gallery">
    <div class="container mx-auto">
      <div class="py-20 mx auto px-0 md:px-10 bg-dark-200">
        <h1 class="title">Gallery</h1>
        <div class="flex flex-row gap-y-4 items-center justify-between flex-wrap">
          @foreach ($photos->shuffle()->take(10) as $photo)    
          <button class="basis-1/2 md:basis-1/3 lg:basis-1/5 px-2 md:px-4" id="showModal" onclick="return {{ $photo->id }}">
            <div class="w-full md:h-48 h-40 rounded-xl shadow-lg relative overflow-hidden group bg-black">
              <img src="{{ asset('storage/'.$photo->image) }}" alt="{{ $photo->destination->name }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-300 ease-in-out" loading="lazy">
            </div>
          </button>
          <div class="relative z-30 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="modal">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
            <div class="fixed inset-0 z-30 overflow-y-auto">
              <div class="flex min-h-full items-center justify-center p-0 text-center sm:items-center sm:p-0">
                <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 h-auto lg:h-96 w-5/6 flex flex-col md:flex-row">
                  <div class="w-full md:w-1/2">
                    <img src="{{ asset('storage/'.$photo->image) }}" alt="{{ $photo->destination->name }}" class="relative w-full h-full object-cover" loading="lazy">
                    <button class="absolute top-2 right-4 text-4xl text-white md:text-black" id="close">&times;</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

   {{-- ======================= CTA SECTION ======================= --}}
<section class="relative bg-gray-800 py-20 text-white">
    {{-- Background Image Layer --}}
<img src="img/cta.jpg" class="absolute inset-0 w-full h-full object-cover object-bottom opacity-25" alt="Bali beach background">
    
    {{-- Content Layer --}}
    <div class="container mx-auto px-4 relative z-10 text-center">
        <h2 class="text-3xl font-bold font-subtitle">Tidak Menemukan Pilihan yang Pas?</h2>
        <p class="mt-2 mb-8 max-w-2xl mx-auto">Konsultasikan dengan kami sekarang juga untuk menemukan destinasi terbaik sesuai kemauanmu!</p>
        <a href="{{ config('app.whatsapp') }}" class="button bg-white text-cyan-700 hover:bg-gray-200">Hubungi Kami</a>
        
        <!-- <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mt-16 max-w-5xl mx-auto">
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
        </div>    -->
    </div>
</section>

  {{-- modal gallery section --}}

  {{-- footer --}}

  @include('components.footer')
  

@endsection

@section('scripts')
<script>
    var swiperJumbo = new Swiper(".swiper-jumbotron", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        loop: true, // Membuat slider dapat berputar tanpa henti
        autoplay: {
            delay: 4000, // Pindah slide otomatis setiap 4 detik
            disableOnInteraction: false,
        },
    });

    var swiperTestimonial = new Swiper(".swiper-testimonial", {
        // Opsi untuk membuat slider berputar
        loop: true,
        // Opsi untuk slide berganti otomatis
        autoplay: {
            delay: 5000, // ganti slide setiap 5 detik
            disableOnInteraction: false,
        },
        // Jarak antar slide
        spaceBetween: 30,
        // Pagination (titik navigasi)
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        // Pengaturan responsif
        breakpoints: {
            // Ketika lebar layar 640px atau lebih
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            // Ketika lebar layar 768px atau lebih
            768: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
            // Ketika lebar layar 1024px atau lebih
            1024: {
                slidesPerView: 3,
                spaceBetween: 50,
            },
        },
    });
    
    // Fungsi untuk handle Read More / Read Less pada testimoni
        document.addEventListener('click', function(event) {
            // Cek jika yang diklik adalah tombol "Read More"
            if (event.target.classList.contains('btn-read-more')) {
                // Cari parent terdekat dari konten testimoni
                const contentWrapper = event.target.closest('.testimonial-content');
                if (contentWrapper) {
                    contentWrapper.querySelector('.excerpt').classList.add('hidden');
                    contentWrapper.querySelector('.full-text').classList.remove('hidden');
                    
                    // Update Swiper untuk menyesuaikan tinggi slide jika berubah
                    if (typeof swiperTestimonial !== 'undefined') {
                        swiperTestimonial.update(); 
                    }
                }
            }

            // Cek jika yang diklik adalah tombol "Read Less"
            if (event.target.classList.contains('btn-read-less')) {
                // Cari parent terdekat dari konten testimoni
                const contentWrapper = event.target.closest('.testimonial-content');
                if (contentWrapper) {
                    contentWrapper.querySelector('.excerpt').classList.remove('hidden');
                    contentWrapper.querySelector('.full-text').classList.add('hidden');

                    // Update Swiper lagi
                    if (typeof swiperTestimonial !== 'undefined') {
                        swiperTestimonial.update(); 
                    }
                }
            }
        });
</script>
@endsection
