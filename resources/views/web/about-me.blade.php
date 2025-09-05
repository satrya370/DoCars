{{-- about.blade.php - DESAIN 1: PROFESIONAL & TERPERCAYA --}}
@extends('layouts.index')

@section('container')

@include('components.navbar-dark')

<main>
    {{-- 1. HERO SECTION --}}
    {{-- ======================= HERO SECTION ======================= --}}
    <section class="hero-section relative py-32 md:py-48 lg:py-64 bg-gray-900 overflow-hidden">
    {{-- Decorative Shape (similar to the example) --}}
    <div class="absolute bottom-0 left-0 w-full h-1/2 bg-gray-900 rounded-tl-[80px] md:rounded-tl-[120px] lg:rounded-tl-[200px]"></div>
    <div class="container mx-auto px-4 relative z-20 text-center">
    <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold font-title text-white mb-4">ABOUT ME</h1>
    </div>
    {{-- Background Image (you can still use an image here if you prefer) --}}
    <img src="img/ubud.jpg" class="absolute top-0 left-0 w-full h-full object-cover opacity-20" alt="packages background">
    </section>

    {{-- 2. ABOUT CONTENT SECTION --}}
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-12 lg:gap-20">
                {{-- Kolom Teks --}}
                <div class="w-full md:w-1/2">
                    <h2 class="text-3xl font-bold font-subtitle text-gray-800">Your Expert Guide to the Island of the Gods</h2>
                    <p class="mt-4 text-gray-600 leading-relaxed text-justify">
                        My name is I Gusti Nyoman Sutresna, and I'm delighted to be your personal guide in Bali. With over 20 years of experience in the hospitality industry and more than a decade as a professional driver, I bring a wealth of local knowledge to every tour. I'm known for being friendly and proactive, always anticipating your needs to ensure a smooth and enjoyable journey. Flexibility is at the heart of my service; whether you're on a romantic honeymoon or traveling with a large family, I can customize the itinerary and vehicle to match your desires. Ultimately, your satisfaction is my top priority, and I am dedicated to making your Bali holiday truly unforgettable.
                    </p>
                    <a href="{{ config('app.whatsapp') }}" class="button mt-8">Contact Me</a>
                </div>
                {{-- Kolom Gambar --}}
                <div class="w-full md:w-1/2">
                    <img src="https://images.unsplash.com/photo-1559599573-a415f394c356?q=80&w=1887&auto=format&fit=crop" class="rounded-xl shadow-2xl w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    {{-- 3. KEY STRENGTHS SECTION --}}
    <section class="bg-cyan-50 py-20">
        <div class="container mx-auto px-4">
            <h2 class="title">My Commitment to You</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <i class="icofont-badge text-4xl text-cyan-600"></i>
                    <h3 class="font-semibold text-xl my-2">20+ Years Experience</h3>
                    <p class="text-gray-600">Extensive background in hospitality and professional driving.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <i class="icofont-compass-alt text-4xl text-cyan-600"></i>
                    <h3 class="font-semibold text-xl my-2">Flexible & Custom Tours</h3>
                    <p class="text-gray-600">I adapt every tour and vehicle to your personal needs.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <i class="icofont-simple-smile text-4xl text-cyan-600"></i>
                    <h3 class="font-semibold text-xl my-2">Guest Satisfaction</h3>
                    <p class="text-gray-600">Your unforgettable holiday experience is my highest priority.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- 4. FAQ Section --}}
    <section class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="title">Frequently Asked Questions</h2>
            <div class="mt-10 max-w-4xl mx-auto divide-y">
                
                <div class="py-5" x-data="{ open: false }">
                    <div @click="open = !open" class="flex justify-between items-center cursor-pointer">
                        <h3 class="text-xl font-semibold">How do I book a tour?</h3>
                        <i class="icofont-plus text-2xl" :class="{ 'rotate-45': open }"></i>
                    </div>
                    <p x-show="open" x-transition class="mt-3 text-gray-600 leading-relaxed">It's easy! Just click any booking button on this site to start a discussion with me via WhatsApp. We'll finalize the details, and once we agree, your tour is confirmed.</p>
                </div>

                <div class="py-5" x-data="{ open: false }">
                    <div @click="open = !open" class="flex justify-between items-center cursor-pointer">
                        <h3 class="text-xl font-semibold">Is there a cancellation fee?</h3>
                        <i class="icofont-plus text-2xl" :class="{ 'rotate-45': open }"></i>
                    </div>
                    <p x-show="open" x-transition class="mt-3 text-gray-600 leading-relaxed">Yes, a cancellation fee may apply if a tour or activity is canceled less than 24 hours before the scheduled time. Please contact me for details.</p>
                </div>

                <div class="py-5" x-data="{ open: false }">
                    <div @click="open = !open" class="flex justify-between items-center cursor-pointer">
                        <h3 class="text-xl font-semibold">Can I customize the destinations in a tour package?</h3>
                        <i class="icofont-plus text-2xl" :class="{ 'rotate-45': open }"></i>
                    </div>
                    <p x-show="open" x-transition class="mt-3 text-gray-600 leading-relaxed">Absolutely! We can adjust the itinerary as long as the new destinations are along the same route and the timing is manageable. We can discuss all the possibilities to create your perfect day.</p>
                </div>

                <div class="py-5" x-data="{ open: false }">
                    <div @click="open = !open" class="flex justify-between items-center cursor-pointer">
                        <h3 class="text-xl font-semibold">Can I choose my own destinations or activities?</h3>
                        <i class="icofont-plus text-2xl" :class="{ 'rotate-45': open }"></i>
                    </div>
                    <p x-show="open" x-transition class="mt-3 text-gray-600 leading-relaxed">Yes, I welcome all discussions for custom-made tours. If you have specific places you want to visit or activities you want to do, just let me know, and I can arrange a personalized itinerary for you.</p>
                </div>

                <div class="py-5" x-data="{ open: false }">
                    <div @click="open = !open" class="flex justify-between items-center cursor-pointer">
                        <h3 class="text-xl font-semibold">Is the price negotiable?</h3>
                        <i class="icofont-plus text-2xl" :class="{ 'rotate-45': open }"></i>
                    </div>
                    <p x-show="open" x-transition class="mt-3 text-gray-600 leading-relaxed">Yes, prices can be discussed, especially for custom tours or group bookings. Feel free to reach out to me with your budget and requirements.</p>
                </div>

                <div class="py-5" x-data="{ open: false }">
                    <div @click="open = !open" class="flex justify-between items-center cursor-pointer">
                        <h3 class="text-xl font-semibold">Can I choose the car?</h3>
                        <i class="icofont-plus text-2xl" :class="{ 'rotate-45': open }"></i>
                    </div>
                    <p x-show="open" x-transition class="mt-3 text-gray-600 leading-relaxed">Yes, you can request a specific type of vehicle. Please note that choosing a different car may incur an additional fee depending on the model selected.</p>
                </div>

            </div>
        </div>
    </section>

</main>

@include('components.footer')

@endsection