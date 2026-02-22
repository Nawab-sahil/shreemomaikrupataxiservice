@extends('layouts.app')

@section('title', 'Our Services - Shree Momai Krupa Taxi Service')
@section('meta_description', 'Explore our comprehensive taxi services in Jamnagar - Airport transfers, city rides, tours, corporate travel, and more.')

@section('extra_css')
<link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">
@endsection

@section('content')

<!-- Unique Diagonal Hero Section -->
<div class="relative overflow-hidden bg-gradient-to-br from-[#0f2537] via-[#1a3a52] to-[#2d5a7b] text-white">
    <!-- Diagonal Background Shape -->
    <div class="absolute inset-0">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-bl from-yellow-400/10 to-transparent transform skew-x-12 origin-top-right"></div>
        <div class="absolute bottom-0 left-0 w-2/3 h-3/4 bg-gradient-to-tr from-blue-500/5 to-transparent transform -skew-x-12 origin-bottom-left"></div>
    </div>

    <!-- Floating Geometric Shapes -->
    <div class="absolute top-20 left-[10%] w-32 h-32 border-4 border-yellow-400/20 rounded-full animate-float"></div>
    <div class="absolute top-40 right-[15%] w-24 h-24 border-4 border-blue-300/20 transform rotate-45 animate-float-delayed"></div>
    <div class="absolute bottom-32 left-[20%] w-40 h-40 border-4 border-yellow-300/10 rounded-full animate-float-slow"></div>
    <div class="absolute bottom-20 right-[25%] w-20 h-20 bg-gradient-to-br from-yellow-400/10 to-transparent rounded-lg transform rotate-12 animate-pulse"></div>

    <!-- Dotted Pattern -->
    <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 30px 30px;"></div>

    <div class="container-max relative z-10 py-20 md:py-32">
        <div class="max-w-4xl">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-yellow-400/20 to-yellow-500/10 backdrop-blur-md rounded-full mb-8 border border-yellow-400/30 shadow-lg">
                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"/>
                </svg>
                <span class="text-sm font-bold text-yellow-300">Premium Taxi Services</span>
            </div>

            <h1 class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-extrabold mb-6 leading-[1.1]">
                <span class="block">Services That</span>
                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500">
                    Move You Forward
                </span>
            </h1>

            <p class="text-xl md:text-2xl text-gray-200 mb-10 leading-relaxed max-w-2xl">
                From daily commutes to special events, we've got the perfect transportation solution for every journey
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-wrap gap-4">
                <a href="#services-grid" class="group inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-yellow-400 to-yellow-500 text-[#1a3a52] font-bold text-lg rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                    <span>Explore Services</span>
                    <svg class="w-6 h-6 transform group-hover:translate-y-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                </a>
                <a href="/booking" class="inline-flex items-center gap-3 px-8 py-4 bg-white/10 backdrop-blur-sm text-white font-bold text-lg rounded-xl border-2 border-white/30 hover:bg-white/20 transform hover:scale-105 transition-all duration-300">
                    <span>Book Now</span>
                </a>
            </div>
        </div>

        <!-- Stats Cards - Floating -->
        <div class="grid grid-cols-3 gap-4 md:gap-6 max-w-2xl mt-16 ml-auto">
            <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-4 md:p-6 text-center transform hover:scale-105 transition-all duration-300">
                <div class="text-3xl md:text-4xl font-extrabold text-yellow-400 mb-1">6+</div>
                <div class="text-xs md:text-sm text-gray-300">Services</div>
            </div>
            <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-4 md:p-6 text-center transform hover:scale-105 transition-all duration-300">
                <div class="text-3xl md:text-4xl font-extrabold text-yellow-400 mb-1">24/7</div>
                <div class="text-xs md:text-sm text-gray-300">Available</div>
            </div>
            <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-4 md:p-6 text-center transform hover:scale-105 transition-all duration-300">
                <div class="text-3xl md:text-4xl font-extrabold text-yellow-400 mb-1">100%</div>
                <div class="text-xs md:text-sm text-gray-300">Reliable</div>
            </div>
        </div>
    </div>
</div>

<!-- Services in Unique Zig-Zag Layout -->
<section id="services-grid" class="py-20 md:py-32 bg-gray-50">
    <div class="container-max">
        
        <!-- Section Header -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-400/10 border border-yellow-400/30 rounded-full mb-4">
                <svg class="w-5 h-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"/>
                </svg>
                <span class="text-sm font-bold text-[#1a3a52]">What We Offer</span>
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-[#1a3a52] mb-4">
                Our Premium Services
            </h2>
            <p class="text-lg md:text-xl text-gray-600 max-w-2xl mx-auto">
                Tailored transportation solutions for every need
            </p>
        </div>

        <!-- Service 1: Airport Transfer (Right Aligned) -->
        <div class="mb-24 md:mb-32">
            <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center">
                <div class="order-2 md:order-1" data-aos="fade-right">
                    <div class="relative">
                        <div class="absolute -top-6 -left-6 w-32 h-32 bg-yellow-400/20 rounded-3xl transform rotate-12"></div>
                        <img src="{{ asset('images/serviceairport.jpg') }}" 
                             alt="Airport Transfer" 
                             class="relative rounded-3xl shadow-2xl w-full h-80 object-cover">
                        <div class="absolute -bottom-6 -right-6 bg-gradient-to-br from-yellow-400 to-yellow-500 text-[#1a3a52] px-6 py-4 rounded-2xl shadow-xl">
                            <div class="text-sm font-semibold">Starting from</div>
                            <div class="text-2xl font-extrabold">₹500</div>
                        </div>
                    </div>
                </div>
                <div class="order-1 md:order-2" data-aos="fade-left">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-100 rounded-full mb-4">
                        <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"/>
                        </svg>
                        <span class="text-sm font-bold text-blue-700">Most Popular</span>
                    </div>
                    <h3 class="text-4xl md:text-5xl font-extrabold text-[#1a3a52] mb-4">Airport Transfer</h3>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        Stress-free airport pickups and drop-offs with flight tracking, professional drivers, and guaranteed on-time service.
                    </p>
                    <div class="space-y-3 mb-8">
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Flight tracking & real-time updates</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Meet & greet at terminal</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Luggage assistance included</span>
                        </div>
                    </div>
                    <a href="/booking" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-[#1a3a52] to-[#0f2537] text-white font-bold rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                        <span>Book Now</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Service 2: City Rides (Left Aligned) -->
        <div class="mb-24 md:mb-32">
            <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center">
                <div data-aos="fade-right">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-green-100 rounded-full mb-4">
                        <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm font-bold text-green-700">Quick & Easy</span>
                    </div>
                    <h3 class="text-4xl md:text-5xl font-extrabold text-[#1a3a52] mb-4">City Rides</h3>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        Your daily commute made comfortable. Quick, safe, and affordable taxi rides across Jamnagar city.
                    </p>
                    <div class="space-y-3 mb-8">
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 bg-gradient-to-br from-green-400 to-green-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Instant booking available</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 bg-gradient-to-br from-green-400 to-green-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Clean & well-maintained vehicles</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 bg-gradient-to-br from-green-400 to-green-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Transparent, affordable pricing</span>
                        </div>
                    </div>
                    <a href="/booking" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-green-500 to-green-600 text-white font-bold rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                        <span>Book Now</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
                <div data-aos="fade-left">
                    <div class="relative">
                        <div class="absolute -top-6 -right-6 w-32 h-32 bg-green-400/20 rounded-3xl transform -rotate-12"></div>
                        <img src="{{ asset('images/servicecity.jpg') }}" 
                             alt="City Rides" 
                             class="relative rounded-3xl shadow-2xl w-full h-80 object-cover">
                        <div class="absolute -bottom-6 -left-6 bg-gradient-to-br from-green-500 to-green-600 text-white px-6 py-4 rounded-2xl shadow-xl">
                            <div class="text-sm font-semibold">Starting from</div>
                            <div class="text-2xl font-extrabold">₹150</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service 3: Outstation Tours (Right Aligned) -->
        <div class="mb-24 md:mb-32">
            <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center">
                <div class="order-2 md:order-1" data-aos="fade-right">
                    <div class="relative">
                        <div class="absolute -top-6 -left-6 w-32 h-32 bg-purple-400/20 rounded-3xl transform rotate-12"></div>
                        <img src="{{ asset('images/serviceoutstation.jpg') }}" 
                             alt="Outstation Tours" 
                             class="relative rounded-3xl shadow-2xl w-full h-80 object-cover">
                        <div class="absolute -bottom-6 -right-6 bg-gradient-to-br from-purple-500 to-purple-600 text-white px-6 py-4 rounded-2xl shadow-xl">
                            <div class="text-sm font-semibold">Starting from</div>
                            <div class="text-2xl font-extrabold">₹1,999</div>
                        </div>
                    </div>
                </div>
                <div class="order-1 md:order-2" data-aos="fade-left">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-purple-100 rounded-full mb-4">
                        <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <span class="text-sm font-bold text-purple-700">Adventure Awaits</span>
                    </div>
                    <h3 class="text-4xl md:text-5xl font-extrabold text-[#1a3a52] mb-4">Outstation Tours</h3>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        Explore Gujarat's wonders with our curated outstation tour packages. Comfortable, flexible, and memorable.
                    </p>
                    <div class="space-y-3 mb-8">
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 bg-gradient-to-br from-purple-400 to-purple-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Customizable itineraries</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 bg-gradient-to-br from-purple-400 to-purple-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">Experienced local drivers</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 bg-gradient-to-br from-purple-400 to-purple-500 rounded-full flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span class="text-gray-700 font-medium">All-inclusive packages available</span>
                        </div>
                    </div>
                    <a href="/tours" class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-purple-500 to-purple-600 text-white font-bold rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-300">
                        <span>View Tours</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- More Services in Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-20">
            
            <!-- Corporate Travel -->
            <div class="group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl overflow-hidden transform hover:-translate-y-2 transition-all duration-500" data-aos="fade-up">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-orange-400/20 to-transparent rounded-bl-full"></div>
                <div class="relative p-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-orange-400 to-orange-500 rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-extrabold text-[#1a3a52] mb-3">Corporate Travel</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Professional transportation solutions for businesses, meetings, and corporate events.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2 text-sm text-gray-700">
                            <svg class="w-4 h-4 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            Executive vehicles
                        </li>
                        <li class="flex items-center gap-2 text-sm text-gray-700">
                            <svg class="w-4 h-4 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            Monthly packages
                        </li>
                    </ul>
                    <a href="/contact" class="inline-flex items-center gap-2 text-orange-600 font-bold hover:gap-3 transition-all">
                        <span>Inquire Now</span>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                    </a>
                </div>
            </div>

            <!-- Event Transport -->
            <div class="group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl overflow-hidden transform hover:-translate-y-2 transition-all duration-500" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-pink-400/20 to-transparent rounded-bl-full"></div>
                <div class="relative p-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-pink-400 to-pink-500 rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-extrabold text-[#1a3a52] mb-3">Event Transport</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Make your special events memorable with our group transportation and coordination services.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2 text-sm text-gray-700">
                            <svg class="w-4 h-4 text-pink-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            Weddings & parties
                        </li>
                        <li class="flex items-center gap-2 text-sm text-gray-700">
                            <svg class="w-4 h-4 text-pink-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            Group discounts
                        </li>
                    </ul>
                    <a href="/booking" class="inline-flex items-center gap-2 text-pink-600 font-bold hover:gap-3 transition-all">
                        <span>Book Now</span>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                    </a>
                </div>
            </div>

            <!-- Cargo Delivery -->
            <div class="group relative bg-white rounded-3xl shadow-lg hover:shadow-2xl overflow-hidden transform hover:-translate-y-2 transition-all duration-500" data-aos="fade-up" data-aos-delay="200">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-bl from-cyan-400/20 to-transparent rounded-bl-full"></div>
                <div class="relative p-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-cyan-400 to-cyan-500 rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/>
                            <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-extrabold text-[#1a3a52] mb-3">Cargo Delivery</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Reliable package and cargo delivery services across Jamnagar and surrounding areas.</p>
                    <ul class="space-y-2 mb-6">
                        <li class="flex items-center gap-2 text-sm text-gray-700">
                            <svg class="w-4 h-4 text-cyan-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            Tracked delivery
                        </li>
                        <li class="flex items-center gap-2 text-sm text-gray-700">
                            <svg class="w-4 h-4 text-cyan-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            Same-day service
                        </li>
                    </ul>
                    <a href="/contact" class="inline-flex items-center gap-2 text-cyan-600 font-bold hover:gap-3 transition-all">
                        <span>Learn More</span>
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Why Choose Section with Overlapping Cards -->
<section class="relative py-20 md:py-32 bg-gradient-to-br from-[#1a3a52] to-[#0f2537] text-white overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;1&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>

    <div class="container-max relative z-10">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-4">
                Why Choose Us?
            </h2>
            <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                Experience the difference with our premium service standards
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="relative group" data-aos="fade-up">
                <div class="absolute inset-0 bg-gradient-to-br from-yellow-400/20 to-transparent rounded-2xl blur-xl group-hover:blur-2xl transition-all"></div>
                <div class="relative bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-8 hover:bg-white/15 transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Premium Quality</h3>
                    <p class="text-gray-300 leading-relaxed">Well-maintained vehicles and professional drivers ensuring comfort</p>
                </div>
            </div>

            <div class="relative group" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-400/20 to-transparent rounded-2xl blur-xl group-hover:blur-2xl transition-all"></div>
                <div class="relative bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-8 hover:bg-white/15 transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-blue-500 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">100% Reliability</h3>
                    <p class="text-gray-300 leading-relaxed">On-time service guaranteed with real-time tracking</p>
                </div>
            </div>

            <div class="relative group" data-aos="fade-up" data-aos-delay="200">
                <div class="absolute inset-0 bg-gradient-to-br from-green-400/20 to-transparent rounded-2xl blur-xl group-hover:blur-2xl transition-all"></div>
                <div class="relative bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-8 hover:bg-white/15 transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-green-500 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Transparent Pricing</h3>
                    <p class="text-gray-300 leading-relaxed">No hidden charges, upfront pricing with detailed breakdown</p>
                </div>
            </div>

            <div class="relative group" data-aos="fade-up" data-aos-delay="300">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-400/20 to-transparent rounded-2xl blur-xl group-hover:blur-2xl transition-all"></div>
                <div class="relative bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-8 hover:bg-white/15 transition-all duration-300">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-400 to-purple-500 rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-3">24/7 Support</h3>
                    <p class="text-gray-300 leading-relaxed">Round-the-clock assistance for all your travel needs</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA Section -->
<section class="py-20 md:py-32 bg-gray-50">
    <div class="container-max">
        <div class="relative rounded-3xl overflow-hidden bg-gradient-to-br from-[#1a3a52] to-[#0f2537] p-12 md:p-20">
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;100&quot; height=&quot;100&quot; viewBox=&quot;0 0 100 100&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cpath d=&quot;M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z&quot; fill=&quot;%23ffffff&quot; fill-opacity=&quot;1&quot; fill-rule=&quot;evenodd&quot;/%3E%3C/svg%3E');"></div>
            </div>

            <div class="relative z-10 text-center text-white max-w-4xl mx-auto">
                <div class="inline-flex items-center gap-2 px-5 py-2.5 bg-yellow-400/20 backdrop-blur-md rounded-full mb-6 border border-yellow-400/30">
                    <svg class="w-5 h-5 text-yellow-400 animate-pulse" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-bold text-yellow-300">Start Your Journey Today</span>
                </div>

                <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6">
                    Ready to Experience Premium Service?
                </h2>
                <p class="text-xl text-gray-300 mb-10 leading-relaxed">
                    Book your next ride with us and discover why thousands of customers trust Shree Momai Krupa Taxi Service
                </p>

                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="/booking" class="group inline-flex items-center gap-3 px-10 py-5 bg-gradient-to-r from-yellow-400 to-yellow-500 text-[#1a3a52] font-bold text-lg rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Book Your Ride Now</span>
                    </a>
                    <a href="tel:+919009058600" class="inline-flex items-center gap-3 px-10 py-5 bg-white/10 backdrop-blur-sm text-white font-bold text-lg rounded-xl border-2 border-white/30 hover:bg-white/20 transform hover:scale-105 transition-all duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.438a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                        </svg>
                        <span>Call: +91 9009058600</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('extra_js')
<script src="{{ asset('js/services.js') }}"></script>
@endsection
