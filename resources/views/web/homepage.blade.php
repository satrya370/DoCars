@extends('layouts.index')

@section('container')

  <livewire-navbar />
  
  {{-- jumbotron --}}
<div class="swiper swiper-jumbotron w-full h-screen">
    <div class="swiper-wrapper">

        <div class="swiper-slide flex justify-center items-center bg-cover" style="background-image: url('https://images.unsplash.com/photo-1558005530-a7958896ec60?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"> 
            <h1 class="text-white text-4xl md:text-6xl font-extrabold text-center drop-shadow-xl px-10 md:px-4">
                Jelajahi Surga Tersembunyi
            </h1>
        </div>
        
        <div class="swiper-slide flex justify-center items-center bg-cover" style="background-image: url('https://images.unsplash.com/photo-1577717903315-1691ae25ab3f?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
            <h1 class="text-white text-4xl md:text-6xl font-extrabold text-center drop-shadow-xl px-10 md:px-4">
                Santai & Lepaskan Penat
            </h1>
        </div>
        
        <div class="swiper-slide flex justify-center items-center bg-cover" style="background-image: url('...');">
            <h1 class="text-white text-4xl md:text-6xl font-extrabold text-center drop-shadow-xl px-10 md:px-4">
                Nikmati Keindahan Alam
            </h1>
        </div>

    </div>
    
    <div class="swiper-button-next mr-3 md:mr-10"></div>
    <div class="swiper-button-prev ml-3 md:ml-10"></div>
</div>

  {{-- about --}}
  <section class="about" id="about">
    <div class="container mx-auto px-4 lg:px-20 py-20">
      <h1  class="text-center font-title text-3xl mb-3 mb:text-6xl">About Me</h1>
      <div class="flex justify-evenly lg:items-center">
        <div class="w-full md:w-1/2 md:pr-5 lg:pr-20">
          <h3 class="mt-5 text-2xl font-subtitle font-bold lg:text-3xl">Forget Busy Work, and Enjoy your Holiday</h3>
          <p class="mt-3 mb-6 mb:mb-5 font-poppins text-gray-600 lg:text-base leading-relaxed text-justify">
            Welcome to My Tour Bali, your premier travel and tourism agency located in the beautiful island of Bali. We offer a wide range of services, including airport transfers, tour packages, and car rentals. Our tour packages are designed to showcase the best of what Bali has to offer, from its stunning beaches and vibrant culture to its rich history and natural beauty. Our team of professional and friendly drivers will ensure that you have a safe and comfortable journey while exploring Bali. We invite you to browse our website and learn more about the services we offer. If you have any questions or would like to book a tour, please don't hesitate to contact us.
          </p>
          <a href="{{ config('app.whatsapp') }}" class="button">Contact Us</a>
        </div>
        <div class="hidden md:w-1/2 md:flex md:items-center md:p-3 lg:p-6">
          <figure>
            <img src="img/banner.jpg" alt="" class="rounded-xl shadow-lg" loading="lazy">
            <figcaption class="text-sm text-gray-500">*klingking beach</figcaption>
          </figure>
        </div>
      </div>
    </div>
  </section>

 {{-- Why Choose Us --}}
<section class="why-choose-us" id="why-choose-us">
  <div class="py-20 w-full">
    <div class="container mx-auto px-6 md:px-10">

      {{-- Judul Section --}}
      <h1 class="title">Why Choose Us?</h1>
      <p class="text-center text-gray-600 max-w-3xl mx-auto -mt-4 mb-16">
        We are committed to providing an unforgettable holiday experience in Bali with the best service, transparent prices, and a friendly team.
      </p>

      {{-- Container untuk Poin Keunggulan --}}
      <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
        
        {{-- Poin 1: Tim Profesional --}}
        <div class="flex flex-col items-center">
          <div class="w-20 h-20 bg-cyan-400 rounded-full text-white flex items-center justify-center mb-4">
            <i class="icofont-users-alt-5 icofont-2x"></i>
          </div>
          <h3 class="mb-2 text-xl font-subtitle font-semibold">Professional Team</h3>
          <p class="text-gray-700 leading-relaxed">
            Our drivers and guides are experienced, friendly, and knowledgeable about the best destinations in Bali to ensure your comfort and safety.
          </p>
        </div>

        {{-- Poin 2: Harga Terbaik --}}
        <div class="flex flex-col items-center">
          <div class="w-20 h-20 bg-cyan-400 rounded-full text-white flex items-center justify-center mb-4">
            <i class="icofont-price icofont-2x"></i>
          </div>
          <h3 class="mb-2 text-xl font-subtitle font-semibold">Best & Honest Price</h3>
          <p class="text-gray-700 leading-relaxed">
            We offer competitive and transparent pricing with no hidden fees. The quality of our service is always our top priority.
          </p>
        </div>

        {{-- Poin 3: Itinerary Fleksibel --}}
        <div class="flex flex-col items-center">
          <div class="w-20 h-20 bg-cyan-400 rounded-full text-white flex items-center justify-center mb-4">
            <i class="icofont-map-pins icofont-2x"></i>
          </div>
          <h3 class="mb-2 text-xl font-subtitle font-semibold">Flexible Itinerary</h3>
          <p class="text-gray-700 leading-relaxed">
            Your satisfaction is our goal. You can customize your tour itinerary according to your interests and desired schedule.
          </p>
        </div>

      </div>
    </div>
  </div>
</section>
 
{{-- ====================================================================== --}}
{{-- ================ BLOK UTAMA PENAWARAN (START) ======================== --}}
{{-- ====================================================================== --}}
<section id="featured-offers" class="w-full bg-gradient-to-b from-sky-100 to-gray-50 py-20">

  {{-- -------------------------------------------------- --}}
  {{-- ----------------- TOP DESTINATIONS ----------------- --}}
  {{-- -------------------------------------------------- --}}
  <div class="container mx-auto px-4 md:px-10 mb-24">
    <h1 class="title">Top Package Tour</h1>
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
    <h1 class="title">Top Activities</h1>
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
              <a href="/activity/{{ $activity->slug }}" class="px-4 py-2 border rounded-full text-sm font-semibold text-cyan-600 border-cyan-600 hover:bg-cyan-600 hover:text-white transition-all duration-300">
                View More
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="text-center mt-16">
      <a href="/activities" class="bg-cyan-500 text-white font-bold py-3 px-8 rounded-lg shadow-md hover:bg-cyan-600 transition-colors duration-300">
        View All Destinations
      </a>
    </div>
  </div>


  {{-- -------------------------------------------------- --}}
  {{-- -------------------- SERVICES -------------------- --}}
  {{-- -------------------------------------------------- --}}
  <div class="container mx-auto px-10 md:px-2 lg:px-20">
    <h1 class="title">Services</h1>
    <div class="flex flex-col gap-8 md:flex-row justify-center mt-12">
      <a href="/airport" class="block w-full">
        <div class="bg-white p-7 rounded-lg shadow-lg flex flex-col items-center text-center transform hover:-translate-y-2 transition-transform duration-300">
          <div class="w-24 h-24 bg-cyan-400 rounded-full text-white flex items-center justify-center mb-4">
            <i class="icofont-airplane icofont-4x"></i>
          </div>
          <h3 class="my-3 text-xl font-subtitle font-semibold">Airport Transport</h3>
          <p class="text-gray-700">Safe and comfortable airport pickup and drop-off services for tourists.</p>
        </div>
      </a>
      <a href="/cars" class="block w-full">
        <div class="bg-white p-7 rounded-lg shadow-lg flex flex-col items-center text-center transform hover:-translate-y-2 transition-transform duration-300">
          <div class="w-24 h-24 bg-cyan-400 rounded-full text-white flex items-center justify-center mb-4">
            <i class="icofont-car icofont-4x"></i>
          </div>
          <h3 class="my-3 text-xl font-subtitle font-semibold">Car Charter</h3>
          <p class="text-gray-700">Flexible transportation services to beautiful tourist attractions in Bali.</p>
        </div>
      </a>
      <a href="/activities" class="block w-full">
        <div class="bg-white p-7 rounded-lg shadow-lg flex flex-col items-center text-center transform hover:-translate-y-2 transition-transform duration-300">
          <div class="w-24 h-24 bg-cyan-400 rounded-full text-white flex items-center justify-center mb-4">
            <i class="icofont-island-alt icofont-4x"></i>
          </div>
          <h3 class="my-3 text-xl font-subtitle font-semibold">Guest Activities</h3>
          <p class="text-gray-700">Find interesting activities like rafting, cycling, ATV rides, and many more.</p>
        </div>
      </a>
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
