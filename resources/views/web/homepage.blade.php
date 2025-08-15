@extends('layouts.index')

@section('container')

  <livewire-navbar />
  
  {{-- jumbotron --}}
<div class="swiper swiper-jumbotron w-full h-screen"> {{-- <-- 1. TAMBAHKAN CLASS INI --}}
    <div class="swiper-wrapper"> {{-- <-- 2. HAPUS CLASS FLEXBOX DARI SINI --}}

        {{-- Slide 1 --}}
        <div class="swiper-slide flex justify-center items-center bg-cover" style="background-image: url('https://images.unsplash.com/photo-1558005530-a7958896ec60?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"> {{-- <-- 3. PINDAHKAN CLASS FLEXBOX KE SINI --}}
            <h1 class="text-white text-4xl md:text-6xl font-extrabold text-center drop-shadow-xl px-4">
                Jelajahi Surga Tersembunyi
            </h1>
        </div>
        
        {{-- Slide 2 --}}
        <div class="swiper-slide flex justify-center items-center bg-cover" style="background-image: url('https://images.unsplash.com/photo-1577717903315-1691ae25ab3f?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"> {{-- <-- 3. PINDAHKAN CLASS FLEXBOX KE SINI --}}
            <h1 class="text-white text-4xl md:text-6xl font-extrabold text-center drop-shadow-xl px-4">
                Santai & Lepaskan Penat
            </h1>
        </div>
        
        {{-- Slide 3 --}}
        <div class="swiper-slide flex justify-center items-center bg-cover" style="background-image: url('...');"> {{-- <-- 3. PINDAHKAN CLASS FLEXBOX KE SINI --}}
            <h1 class="text-white text-4xl md:text-6xl font-extrabold text-center drop-shadow-xl px-4">
                Nikmati Keindahan Alam
            </h1>
        </div>

    </div>
    
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

  {{-- about --}}
  <section class="about" id="about">
    <div class="container mx-auto px-4 lg:px-20 py-20">
      <h1  class="text-center font-title text-3xl mb-3 mb:text-6xl">About Me</h1>
      <div class="line-pattern mx-auto"></div>
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
    <h1 class="title">Top Destinations</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-12">
      @foreach ($packages->take(3) as $package)
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
      <a href="/tours" class="bg-cyan-500 text-white font-bold py-3 px-8 rounded-lg shadow-md hover:bg-cyan-600 transition-colors duration-300">
        View All Destinations
      </a>
    </div>
  </div>


  {{-- -------------------------------------------------- --}}
  {{-- ------------------ TOUR PACKAGES ----------------- --}}
  {{-- -------------------------------------------------- --}}
  <div class="container md:px-4 px-4 mx-auto mb-24">
    <h1 class="title text-3xl md:text-4xl font-bold mb-10 text-center">Tour Packages</h1>
    <div class="flex flex-wrap gap-y-6 justify-center">
      @foreach ($packages as $package)
        <div class="basis-full sm:basis-1/2 md:basis-1/3 lg:basis-1/3 px-2 sm:px-3 md:px-4">
          <div class="w-full h-96 md:h-96 rounded-xl shadow-lg overflow-hidden relative group bg-white">
            <a href="/tour/{{ $package->slug }}" class="block w-full h-full">
              <img src="{{ asset('storage/'.$package->image_cover) }}" alt="{{ $package->name }}" class="w-full h-full object-cover transition-transform duration-300 ease-in-out group-hover:scale-110" loading="lazy">
              <div class="w-full z-20 absolute bottom-0 bg-white bg-opacity-95 px-5 py-4">
                <h4 class="text-gray-700 text-center font-subtitle font-bold text-xl">{{ $package->name }}</h4>
                <p class="py-2 text-gray-600 text-sm md:text-base">
                  Itinerary: {{ \Illuminate\Support\Str::limit($package->destinations->pluck('name')->implode(', '), 50, '...') }}
                </p>
                <div class="flex items-center justify-between py-3 border-t-2 mt-2">
                  <span class="text-lg font-semibold">Start from Rp. {{ $package->price }}K</span>
                  <a href="{{ config('app.whatsapp') }}?text=Hello,%20I'm%20interested%20in%20the%20{{ urlencode($package->name) }}%20tour%20package." class="text-center block py-2 px-4 bg-[#25d366] text-white font-semibold text-sm rounded-lg shadow-md hover:bg-[#128c7e]">
                    <i class="icofont-brand-whatsapp"></i> Book Now
                  </a>
                </div>
              </div>
            </a>
          </div>
        </div>
      @endforeach
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

    <div class="grid grid-cols-1 md:grid-cols-3 gap-12 lg:gap-16">
      
      {{-- Ulasan 1 --}}
      <div class="relative">
        <i class="icofont-quote-left icofont-5x absolute -top-6 -left-4 text-cyan-500 opacity-10"></i>
        <p class="text-gray-700 text-lg leading-relaxed z-10">
          "Our driver, Ketut, was more than just a driver; he was an amazing guide! He showed us hidden gems we would have never found on our own. The car was clean and comfortable. Highly recommended!"
        </p>
        <div class="flex items-center mt-6">
          <img class="w-12 h-12 rounded-full object-cover mr-4" src="https://i.pravatar.cc/150?u=sarah" alt="Photo of Sarah Jenkins">
          <div>
            <h4 class="font-semibold text-gray-900">Sarah Jenkins</h4>
            <p class="text-sm text-gray-500">Visitor from Australia</p>
          </div>
        </div>
      </div>

      {{-- Ulasan 2 --}}
      <div class="relative">
        <i class="icofont-quote-left icofont-5x absolute -top-6 -left-4 text-cyan-500 opacity-10"></i>
        <p class="text-gray-700 text-lg leading-relaxed z-10">
          "The booking process was so simple via WhatsApp. We were able to customize our trip to see both Uluwatu and the rice terraces in one day. The team was very responsive and accommodating."
        </p>
        <div class="flex items-center mt-6">
          <img class="w-12 h-12 rounded-full object-cover mr-4" src="https://i.pravatar.cc/150?u=markus" alt="Photo of Markus Weber">
          <div>
            <h4 class="font-semibold text-gray-900">Markus Weber</h4>
            <p class="text-sm text-gray-500">Visitor from Germany</p>
          </div>
        </div>
      </div>

      {{-- Ulasan 3 --}}
      <div class="relative">
        <i class="icofont-quote-left icofont-5x absolute -top-6 -left-4 text-cyan-500 opacity-10"></i>
        <p class="text-gray-700 text-lg leading-relaxed z-10">
          "Traveling with two young kids can be stressful, but My Tour Bali made it a breeze. They were so patient and even had child seats ready for us. Our family had an unforgettable time. Thank you!"
        </p>
        <div class="flex items-center mt-6">
          <img class="w-12 h-12 rounded-full object-cover mr-4" src="https://i.pravatar.cc/150?u=priya" alt="Photo of Priya Patel">
          <div>
            <h4 class="font-semibold text-gray-900">Priya Patel</h4>
            <p class="text-sm text-gray-500">Visitor from United Kingdom</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



  {{-- gallery --}}
  <section class="gallery" id="gallery">
    <div class="container mx-auto">
      <div class="py-20 mx auto px-10 bg-dark-200">
        <h1 class="title">Gallery</h1>
        <h3 class="text-center text-xl font-medium">Photos</h3>
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
                  {{-- <div class="w-full md:w-1/2 p-4 md:py-12 md:px-4">
                    <h2 class="text-xl font-subtitle font-semibold mb-1 md:text-2xl md:mb-3 text-gray-700">{{ $photo->destination->name }}</h2>
                    <p>{{ $photo->destination->description }}</p>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <h3 class="text-center text-xl font-medium mt-10">Videos</h3>
        <div class="flex flex-row gap-y-4 items-center justify-between flex-wrap">
          @foreach ($videos->shuffle()->take(10) as $video)    
          <button class="basis-1/2 md:basis-1/3 lg:basis-1/5 px-2 md:px-4" id="showModal" onclick="return {{ $video->id }}">
            <div class="w-full md:h-48 h-40 rounded-xl shadow-lg relative overflow-hidden group bg-black">
              <img src="{{ asset('storage/'.$video->thumbnail) }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-300 ease-in-out" loading="lazy">
            </div>
          </button>
          <div class="relative z-30 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="modal">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
            <div class="fixed inset-0 z-30 overflow-y-auto">
              <div class="flex min-h-full items-center justify-center p-0 text-center sm:items-center sm:p-0">
                <div class="relative transform rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 h-auto lg:h-96 flex flex-col md:flex-row mt-32">
                  <div class="w-full pt-10">
                    <iframe width="315" height="560"
                      src="https://www.youtube.com/embed/{{ $video->url }}"
                      title="YouTube video player" frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media;
                      gyroscope;
                      web-share"
                      allowfullscreen></iframe>
                    <button class="absolute top-0 right-3 text-4xl text-black z-50" id="close">&times;</button>
                  </div>
                  {{-- <div class="w-full md:w-1/2 p-4 md:py-12 md:px-4">
                    <h2 class="text-xl font-subtitle font-semibold mb-1 md:text-2xl md:mb-3 text-gray-700">{{ $video->destination->name }}</h2>
                    <p>{{ $photo->destination->description }}</p>
                  </div> --}}
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


  {{-- testimonial --}}
  <section class="testimonial" id="testimonial">
    <div class="py-20 bg-gray-200">
      <div class="container mx-auto px-4 overflow-hidden">
        <h1 class="title">Reviews</h1>
        <div class="flex swiper-container w-[80%] md:w-full mx-auto">
          <div class="swiper-wrapper">
            @foreach ($reviews as $review)
            <div class="swiper-slide">
              <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm scale-75 transition-transform duration-300 ease-in-out mx-auto" id="card">
                <div class="flex items-center">
                  <img src="{{ asset('storage/'. $review->image) }}" alt="" class="w-16 h-16 object-cover object-center rounded-full" loading="lazy">
                  <div class="flex flex-col ml-3">
                    <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">{{ $review->name }}</h5>
                    <ul class="flex">
                      @for ($i = 1; $i <= $review->stars; $i++)
                      <li>
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                          <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                        </svg>
                      </li>
                      @endfor
                      @if ($review->stars != 5)
                        @for ($i = 1; $i <= 5 - $review->stars; $i++)
                        <li>
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"></path>
                          </svg>
                        </li> 
                        @endfor
                      @endif
                    </ul>
                  </div>
                </div>
                <p class="text-gray-700 text-base mb-4 mt-3 text-center" id="excerpt">
                  {{ $review->excerpt }}
                  <button id="excerptButton" class="text-cyan-400">Read more..</button>
                </p>
                <p class="text-gray-700 text-base mb-4 mt-3 hidden" id="description">
                  {{ $review->description }}
                  <button id="descButton" class="text-cyan-400">Collapse</button>
                </p>
              </div>
            </div>
            @endforeach
          </div>  
          <div class="swiper-pagination"></div>
        </div>
        <div class="text-center mt-5">
          <a href="https://www.tripadvisor.com/UserReviewEdit-g297697-d25288635-My_Tour_Bali-Kuta_Kuta_District_Bali.html" class="button" target="_blank">Give your Review!</a> 
        </div>
      </div>
    </div>
  </section>

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
</script>
@endsection
