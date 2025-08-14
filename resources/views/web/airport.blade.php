@extends('layouts.index')

@section('container')

{{-- Menggunakan navbar yang sama untuk konsistensi --}}
@include('components.navbar')

{{-- 1. Revised Hero Section --}}

<section class="hero-section relative py-32 md:py-48 lg:py-64 bg-gray-100 overflow-hidden">
{{-- Decorative Shape (similar to the example) --}}
<div class="absolute bottom-0 left-0 w-full h-1/2 bg-cyan-600 rounded-tl-[80px] md:rounded-tl-[120px] lg:rounded-tl-[200px]"></div>
<div class="container mx-auto px-4 relative z-20 text-center">
<h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold font-title text-white mb-4">AIRPORT TRANSFER</h1>
<p class="text-lg md:text-xl text-white opacity-80">Reliable and comfortable transportation to your Bali destination.</p>
</div>
{{-- Background Image (you can still use an image here if you prefer) --}}
<img src="Bali2.png" class="absolute top-0 left-0 w-full h-full object-cover opacity-20" alt="Airport background">
</section>

<main class="py-20">
<div class="container mx-auto px-4 lg:px-12">

    {{-- 2. Intro Section with CTA --}}
    <section class="intro-section">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <div class="w-full lg:w-1/3">
                <img src="Bali2.png" class="rounded-xl shadow-lg w-full h-full object-cover">
            </div>
            <div class="w-full lg:w-2/3">
                <h2 class="text-3xl font-bold font-subtitle text-gray-800">Your Trusted Bali Airport Transfer Partner</h2>
                <p class="mt-4 text-xl text-gray-600 leading-relaxed">
                    Arrive in Bali smoothly and stress-free with our dedicated airport transfer service. We prioritize your comfort and punctuality, ensuring a seamless transition from the airport to your accommodation.
                </p>
                <div class="mt-8">
                    <a href="{{ config('app.whatsapp') }}" class="inline-block bg-emerald-500 text-white font-bold py-3 px-8 rounded-lg shadow-md hover:bg-emerald-600 transition-colors">
                        <i class="icofont-brand-whatsapp"></i> Contact Us Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- 3. Available At Section (Slider) --}}
    <section class="available-at-section mt-20 pt-16 border-t">
        <h2 class="title">Available At</h2>
        <div class="swiper-container available-locations-swiper mt-10 overflow-hidden">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="rounded-lg overflow-hidden shadow-md">
                        <img src="Bali2.png" alt="Ubud" class="w-full h-48 object-cover">
                        <div class="p-4 text-center">
                            <h4 class="font-semibold text-lg text-gray-800">Ubud</h4>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rounded-lg overflow-hidden shadow-md">
                        <img src="Bali2.png" alt="Kuta" class="w-full h-48 object-cover">
                        <div class="p-4 text-center">
                            <h4 class="font-semibold text-lg text-gray-800">Kuta</h4>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rounded-lg overflow-hidden shadow-md">
                        <img src="Bali2.png" alt="Seminyak" class="w-full h-48 object-cover">
                        <div class="p-4 text-center">
                            <h4 class="font-semibold text-lg text-gray-800">Seminyak</h4>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rounded-lg overflow-hidden shadow-md">
                        <img src="Bali2.png" alt="Nusa Dua" class="w-full h-48 object-cover">
                        <div class="p-4 text-center">
                            <h4 class="font-semibold text-lg text-gray-800">Nusa Dua</h4>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rounded-lg overflow-hidden shadow-md">
                        <img src="Bali2.png" alt="Lovina" class="w-full h-48 object-cover">
                        <div class="p-4 text-center">
                            <h4 class="font-semibold text-lg text-gray-800">Lovina</h4>
                        </div>
                    </div>
                </div>
                {{-- Add more destinations as needed --}}
            </div>
            <div class="swiper-pagination mt-4 relative"></div>
        </div>
    </section>

    {{-- 4. Why Choose Us Section --}}
    <section class="why-choose-us-section mt-20 pt-16 border-t">
        <h2 class="title">Why Choose Our Transfer Service?</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
            <div class="bg-white p-6 rounded-lg border shadow-sm">
                <i class="icofont-clock-time text-3xl text-cyan-600"></i>
                <h3 class="font-semibold text-xl my-2">On-Time Guarantee</h3>
                <p class="text-gray-600">We monitor your flight and ensure punctual pickups.</p>
            </div>
            <div class="bg-white p-6 rounded-lg border shadow-sm">
                <i class="icofont-user-suited text-3xl text-cyan-600"></i>
                <h3 class="font-semibold text-xl my-2">Professional Drivers</h3>
                <p class="text-gray-600">Experienced, courteous, and English-speaking drivers.</p>
            </div>
            <div class="bg-white p-6 rounded-lg border shadow-sm">
                <i class="icofont-price text-3xl text-cyan-600"></i>
                <h3 class="font-semibold text-xl my-2">Transparent Pricing</h3>
                <p class="text-gray-600">Fixed rates with no hidden costs.</p>
            </div>
            <div class="bg-white p-6 rounded-lg border shadow-sm">
                <i class="icofont-car-alt-1 text-3xl text-cyan-600"></i>
                <h3 class="font-semibold text-xl my-2">Comfortable Vehicles</h3>
                <p class="text-gray-600">Clean, air-conditioned cars for a pleasant journey.</p>
            </div>
            <div class="bg-white p-6 rounded-lg border shadow-sm">
                <i class="icofont-ui-check text-3xl text-cyan-600"></i>
                <h3 class="font-semibold text-xl my-2">Easy Booking</h3>
                <p class="text-gray-600">Simple booking process via WhatsApp.</p>
            </div>
             <div class="bg-white p-6 rounded-lg border shadow-sm">
                <i class="icofont-headphone-alt-1 text-3xl text-cyan-600"></i>
                <h3 class="font-semibold text-xl my-2">24/7 Support</h3>
                <p class="text-gray-600">Dedicated support whenever you need it.</p>
            </div>
        </div>
    </section>

    {{-- 5. Price List Section (New Design) --}}
    <section class="price-list-section mt-20 pt-16 border-t">
        <h2 class="title">Transfer Price List</h2>
        @php
            $prices = [
                'South Bali Area' => [
                    ['destination' => 'Kuta / Legian', 'price' => 150000],
                    ['destination' => 'Seminyak', 'price' => 175000],
                    ['destination' => 'Nusa Dua / Jimbaran', 'price' => 200000],
                    ['destination' => 'Canggu', 'price' => 250000],
                ],
                'Central & North Bali' => [
                    ['destination' => 'Ubud Center', 'price' => 350000],
                    ['destination' => 'Kintamani', 'price' => 550000],
                    ['destination' => 'Munduk / Bedugul', 'price' => 600000],
                    ['destination' => 'Lovina', 'price' => 650000],
                ]
            ];
        @endphp

        <div class="mt-10 space-y-12">
            @foreach($prices as $area => $destinations)
                <div>
                    <h3 class="text-2xl font-bold font-subtitle mb-6">{{ $area }}</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        @foreach($destinations as $item)
                            <div class="border rounded-lg p-4 flex justify-between items-center bg-white shadow-sm">
                                <span class="font-medium text-gray-700">{{ $item['destination'] }}</span>
                                <span class="font-bold text-cyan-600">Rp {{ number_format($item['price']) }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- 6. FAQ Section --}}
    <section class="faq-section mt-20 pt-16 border-t">
        <h2 class="title">Frequently Asked Questions</h2>
        <div class="mt-10 max-w-4xl mx-auto divide-y">
            <div class="py-5" x-data="{ open: false }">
                <div @click="open = !open" class="flex justify-between items-center cursor-pointer">
                    <h3 class="text-xl font-semibold">How do I find my driver at the airport?</h3>
                    <i class="icofont-plus text-2xl" :class="{ 'rotate-45': open }"></i>
                </div>
                <p x-show="open" x-transition class="mt-3 text-gray-600 leading-relaxed">Our driver will be waiting for you at the arrival hall exit, holding a sign with your name on it.</p>
            </div>
            <div class="py-5" x-data="{ open: false }">
                <div @click="open = !open" class="flex justify-between items-center cursor-pointer">
                    <h3 class="text-xl font-semibold">Are the prices per person or per vehicle?</h3>
                    <i class="icofont-plus text-2xl" :class="{ 'rotate-45': open }"></i>
                </div>
                <p x-show="open" x-transition class="mt-3 text-gray-600 leading-relaxed">The prices listed are per vehicle, accommodating up to a certain number of passengers (usually 4-6, please confirm when booking).</p>
            </div>
            <div class="py-5" x-data="{ open: false }">
                <div @click="open = !open" class="flex justify-between items-center cursor-pointer">
                    <h3 class="text-xl font-semibold">What happens if my flight is delayed?</h3>
                    <i class="icofont-plus text-2xl" :class="{ 'rotate-45': open }"></i>
                </div>
                <p x-show="open" x-transition class="mt-3 text-gray-600 leading-relaxed">We track your flight information, so our driver will be aware of any delays and will adjust the pickup time accordingly at no extra charge.</p>
            </div>
            <div class="py-5" x-data="{ open: false }">
                <div @click="open = !open" class="flex justify-between items-center cursor-pointer">
                    <h3 class="text-xl font-semibold">Is there extra charge for luggage?</h3>
                    <i class="icofont-plus text-2xl" :class="{ 'rotate-45': open }"></i>
                </div>
                <p x-show="open" x-transition class="mt-3 text-gray-600 leading-relaxed">Our prices include standard luggage. If you have excessive or oversized luggage, please inform us during booking to ensure we provide a suitable vehicle.</p>
            </div>
        </div>
    </section>

</div>
</main>

{{-- 7. CTA Section --}}

<section class="cta-section bg-slate-100 py-16 text-center">
<div class="container mx-auto px-4">
<h2 class="text-3xl font-bold font-subtitle">Ready for a Smooth Arrival?</h2>
<p class="text-xl text-gray-600 mt-2 mb-8 max-w-2xl mx-auto">Book your Bali airport transfer with us today!</p>
<a href="{{ config('app.whatsapp') }}" class="inline-block bg-emerald-500 text-white font-bold py-3 px-8 rounded-lg shadow-md hover:bg-emerald-600 transition-colors">
<i class="icofont-brand-whatsapp"></i> Book Your Transfer
</a>
</div>
</section>

@include('components.footer')

<script>
const availableLocationsSwiper = new Swiper('.available-locations-swiper', {
loop: true,
slidesPerView: 2,
spaceBetween: 20,
pagination: {
el: '.swiper-pagination',
clickable: true,
},
breakpoints: {
640: {
slidesPerView: 3,
spaceBetween: 30,
},
1024: {
slidesPerView: 4,
spaceBetween: 40,
},
},
});
</script>

@endsection