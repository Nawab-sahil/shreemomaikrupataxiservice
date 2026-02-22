@extends('layouts.app')

@section('title', 'About Us - Shree Momai Krupa Taxi Service')
@section('meta_description', 'Learn about Shree Momai Krupa - Your trusted taxi service partner in Jamnagar since 2015.')

@section('extra_css')
<link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
@endsection

@section('content')

<!-- Hero Section -->
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
                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                </svg>
                <span class="text-sm font-bold text-yellow-300">Since 2015</span>
            </div>

            <h1 class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-extrabold mb-6 leading-[1.1]">
                <span class="block">Your Trusted</span>
                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500">
                    Journey Partner
                </span>
            </h1>

            <p class="text-xl md:text-2xl text-gray-200 mb-10 leading-relaxed max-w-2xl">
                For nearly a decade, we've been Jamnagar's choice for reliable, comfortable, and professional taxi services.
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-wrap gap-4">
                <a href="/booking" class="group inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-yellow-400 to-yellow-500 text-[#1a3a52] font-bold text-lg rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                    <span>Book Now</span>
                    <svg class="w-6 h-6 transform group-hover:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </a>
                <a href="/contact" class="inline-flex items-center gap-3 px-8 py-4 bg-white/10 backdrop-blur-sm text-white font-bold text-lg rounded-xl border-2 border-white/30 hover:bg-white/20 transform hover:scale-105 transition-all duration-300">
                    <span>Contact Us</span>
                </a>
            </div>
        </div>

        <!-- Stats Cards - Floating -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 max-w-4xl mt-16">
            <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-4 md:p-6 text-center transform hover:scale-105 transition-all duration-300">
                <div class="text-3xl md:text-4xl font-extrabold text-yellow-400 mb-1">500+</div>
                <div class="text-xs md:text-sm text-gray-300">Happy Customers</div>
            </div>
            <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-4 md:p-6 text-center transform hover:scale-105 transition-all duration-300">
                <div class="text-3xl md:text-4xl font-extrabold text-yellow-400 mb-1">50+</div>
                <div class="text-xs md:text-sm text-gray-300">Vehicles</div>
            </div>
            <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-4 md:p-6 text-center transform hover:scale-105 transition-all duration-300">
                <div class="text-3xl md:text-4xl font-extrabold text-yellow-400 mb-1">24/7</div>
                <div class="text-xs md:text-sm text-gray-300">Available</div>
            </div>
            <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-4 md:p-6 text-center transform hover:scale-105 transition-all duration-300">
                <div class="text-3xl md:text-4xl font-extrabold text-yellow-400 mb-1">10+</div>
                <div class="text-xs md:text-sm text-gray-300">Years Experience</div>
            </div>
        </div>
    </div>
</div>

<!-- Our Story Section -->
<section class="py-20 md:py-32 bg-gray-50">
    <div class="container-max">
        <div class="max-w-4xl mx-auto text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-400/10 border border-yellow-400/30 rounded-full mb-6">
                <svg class="w-5 h-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                </svg>
                <span class="text-sm font-bold text-[#1a3a52]">Our Story</span>
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-[#1a3a52] mb-6">
                A Journey of Excellence
            </h2>
            <p class="text-xl text-gray-600 leading-relaxed">
                From humble beginnings to becoming Jamnagar's most trusted taxi service
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
            <div data-aos="fade-right">
                <div class="relative">
                    <div class="absolute -top-6 -left-6 w-24 h-24 bg-yellow-400/20 rounded-full"></div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-blue-400/20 rounded-full"></div>
                    <img src="https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?w=800&q=80" alt="Our Taxi Fleet" class="relative rounded-3xl shadow-2xl w-full">
                </div>
            </div>
            <div data-aos="fade-left">
                <h3 class="text-3xl font-extrabold text-[#1a3a52] mb-4">How It All Started</h3>
                <p class="text-lg text-gray-600 mb-4 leading-relaxed">
                    In 2015, with just 5 vehicles and a vision to serve, Shree Momai Krupa Taxi Service was born. Our founder recognized the need for reliable, professional transportation in Jamnagar.
                </p>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    What started as a small venture has grown into a trusted brand serving hundreds of customers daily, with a fleet of 50+ modern vehicles and a team of experienced professionals.
                </p>
                <div class="flex items-center gap-4 p-6 bg-gradient-to-r from-yellow-50 to-orange-50 rounded-2xl border-l-4 border-yellow-500">
                    <svg class="w-12 h-12 text-yellow-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <div>
                        <div class="font-bold text-[#1a3a52]">Our Promise</div>
                        <div class="text-gray-600">Reliability, Safety, and Comfort on Every Journey</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision with Unique Design -->
<section class="py-20 md:py-32 bg-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle, #1a3a52 1px, transparent 1px); background-size: 40px 40px;"></div>

    <div class="container-max relative z-10">
        <div class="grid md:grid-cols-2 gap-8">
            
            <!-- Mission Card -->
            <div class="group relative" data-aos="fade-up">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-500/20 to-cyan-500/10 rounded-3xl blur-2xl group-hover:blur-3xl transition-all duration-500"></div>
                <div class="relative bg-gradient-to-br from-[#1a3a52] to-[#0f2537] rounded-3xl p-10 md:p-12 text-white shadow-2xl transform group-hover:-translate-y-2 transition-all duration-500">
                    <div class="w-20 h-20 bg-yellow-400/20 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-3xl md:text-4xl font-extrabold mb-6">Our Mission</h3>
                    <p class="text-lg text-gray-200 leading-relaxed mb-6">
                        To provide safe, reliable, and professional transportation services that exceed customer expectations while maintaining the highest standards of quality and customer care.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-yellow-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Customer-first approach</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-yellow-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Safety and reliability</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-yellow-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Continuous improvement</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vision Card -->
            <div class="group relative" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute inset-0 bg-gradient-to-br from-yellow-500/20 to-orange-500/10 rounded-3xl blur-2xl group-hover:blur-3xl transition-all duration-500"></div>
                <div class="relative bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-3xl p-10 md:p-12 text-[#1a3a52] shadow-2xl transform group-hover:-translate-y-2 transition-all duration-500">
                    <div class="w-20 h-20 bg-white/30 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-[#1a3a52]" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-3xl md:text-4xl font-extrabold mb-6">Our Vision</h3>
                    <p class="text-lg leading-relaxed mb-6">
                        To become the most trusted and preferred taxi service in Gujarat, recognized for our commitment to innovation, sustainability, and exceptional customer experiences.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-[#1a3a52] flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="font-semibold">Market leadership in Gujarat</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-[#1a3a52] flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="font-semibold">Tech-enabled services</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 text-[#1a3a52] flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="font-semibold">Eco-friendly fleet</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Our Values Section -->
<section class="py-20 md:py-32 bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="container-max">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-400/10 border border-yellow-400/30 rounded-full mb-6">
                <svg class="w-5 h-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
                <span class="text-sm font-bold text-[#1a3a52]">Core Values</span>
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-[#1a3a52] mb-4">
                What We Stand For
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                The principles that guide every journey
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500" data-aos="fade-up">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-extrabold text-[#1a3a52] mb-3">Safety First</h3>
                <p class="text-gray-600 leading-relaxed">Your safety is our top priority. All vehicles maintained to highest standards.</p>
            </div>

            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-extrabold text-[#1a3a52] mb-3">Integrity</h3>
                <p class="text-gray-600 leading-relaxed">Transparent pricing, honest service, and trustworthy professionals always.</p>
            </div>

            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-extrabold text-[#1a3a52] mb-3">Excellence</h3>
                <p class="text-gray-600 leading-relaxed">Continuously improving to deliver the best possible service experience.</p>
            </div>

            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-500" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-extrabold text-[#1a3a52] mb-3">Customer Care</h3>
                <p class="text-gray-600 leading-relaxed">Dedicated support team ensuring satisfaction every step of the way.</p>
            </div>

        </div>
    </div>
</section>

<!-- Timeline Section -->
<section class="py-20 md:py-32 bg-white relative overflow-hidden">
    <div class="container-max relative z-10">
        <div class="text-center mb-20">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-400/10 border border-yellow-400/30 rounded-full mb-6">
                <svg class="w-5 h-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                </svg>
                <span class="text-sm font-bold text-[#1a3a52]">Our Journey</span>
            </div>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-[#1a3a52] mb-4">
                Milestones That Matter
            </h2>
        </div>

        <div class="max-w-5xl mx-auto">
            <div class="relative">
                <!-- Timeline Line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-yellow-400 via-blue-500 to-purple-500 hidden md:block"></div>

                <!-- Timeline Items -->
                <div class="space-y-16">
                    
                    <!-- 2015 -->
                    <div class="relative grid md:grid-cols-2 gap-8 items-center" data-aos="fade-up">
                        <div class="md:text-right">
                            <div class="inline-block bg-gradient-to-r from-yellow-400 to-yellow-500 text-[#1a3a52] px-6 py-3 rounded-full font-bold text-lg mb-4 shadow-lg">
                                2015
                            </div>
                            <h3 class="text-2xl font-extrabold text-[#1a3a52] mb-3">The Beginning</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Started with a vision to provide reliable taxi services to Jamnagar with just 5 vehicles and a passionate team.
                            </p>
                        </div>
                        <div class="hidden md:block"></div>
                        <div class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 w-8 h-8 bg-yellow-400 rounded-full border-4 border-white shadow-lg hidden md:block"></div>
                    </div>

                    <!-- 2017 -->
                    <div class="relative grid md:grid-cols-2 gap-8 items-center" data-aos="fade-up">
                        <div class="hidden md:block"></div>
                        <div>
                            <div class="inline-block bg-gradient-to-r from-blue-500 to-blue-600 text-white px-6 py-3 rounded-full font-bold text-lg mb-4 shadow-lg">
                                2017
                            </div>
                            <h3 class="text-2xl font-extrabold text-[#1a3a52] mb-3">Major Expansion</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Grew our fleet to 25 vehicles and expanded services to include tour packages and corporate travel solutions.
                            </p>
                        </div>
                        <div class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 w-8 h-8 bg-blue-500 rounded-full border-4 border-white shadow-lg hidden md:block"></div>
                    </div>

                    <!-- 2019 -->
                    <div class="relative grid md:grid-cols-2 gap-8 items-center" data-aos="fade-up">
                        <div class="md:text-right">
                            <div class="inline-block bg-gradient-to-r from-green-500 to-green-600 text-white px-6 py-3 rounded-full font-bold text-lg mb-4 shadow-lg">
                                2019
                            </div>
                            <h3 class="text-2xl font-extrabold text-[#1a3a52] mb-3">Award Recognition</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Received "Best Taxi Service" award and reached 300+ satisfied customers milestone across Jamnagar.
                            </p>
                        </div>
                        <div class="hidden md:block"></div>
                        <div class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 w-8 h-8 bg-green-500 rounded-full border-4 border-white shadow-lg hidden md:block"></div>
                    </div>

                    <!-- 2024 -->
                    <div class="relative grid md:grid-cols-2 gap-8 items-center" data-aos="fade-up">
                        <div class="hidden md:block"></div>
                        <div>
                            <div class="inline-block bg-gradient-to-r from-purple-500 to-purple-600 text-white px-6 py-3 rounded-full font-bold text-lg mb-4 shadow-lg">
                                2024
                            </div>
                            <h3 class="text-2xl font-extrabold text-[#1a3a52] mb-3">Digital Evolution</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Launched online booking platform, expanded fleet to 50+ vehicles, now serving 500+ regular customers daily.
                            </p>
                        </div>
                        <div class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 w-8 h-8 bg-purple-500 rounded-full border-4 border-white shadow-lg hidden md:block"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 md:py-32 bg-gradient-to-br from-[#0f2537] via-[#1a3a52] to-[#2d5a7b] text-white relative overflow-hidden">
    <!-- Decorative Elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-yellow-400/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-400/10 rounded-full blur-3xl"></div>

    <div class="container-max relative z-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            
            <div class="text-center transform hover:scale-110 transition-transform duration-300" data-aos="zoom-in">
                <div class="text-5xl md:text-6xl font-extrabold text-yellow-400 mb-3 counter" data-count="500">0</div>
                <div class="text-lg md:text-xl text-gray-300 font-semibold">Happy Customers</div>
            </div>

            <div class="text-center transform hover:scale-110 transition-transform duration-300" data-aos="zoom-in" data-aos-delay="100">
                <div class="text-5xl md:text-6xl font-extrabold text-yellow-400 mb-3 counter" data-count="50">0</div>
                <div class="text-lg md:text-xl text-gray-300 font-semibold">Modern Vehicles</div>
            </div>

            <div class="text-center transform hover:scale-110 transition-transform duration-300" data-aos="zoom-in" data-aos-delay="200">
                <div class="text-5xl md:text-6xl font-extrabold text-yellow-400 mb-3">24/7</div>
                <div class="text-lg md:text-xl text-gray-300 font-semibold">Service Available</div>
            </div>

            <div class="text-center transform hover:scale-110 transition-transform duration-300" data-aos="zoom-in" data-aos-delay="300">
                <div class="text-5xl md:text-6xl font-extrabold text-yellow-400 mb-3 counter" data-count="9">0</div>
                <div class="text-lg md:text-xl text-gray-300 font-semibold">Years of Service</div>
            </div>

        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="py-20 md:py-32 bg-gray-50">
    <div class="container-max">
        <div class="relative rounded-3xl overflow-hidden bg-gradient-to-br from-[#1a3a52] to-[#0f2537] p-12 md:p-20 text-center">
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-5" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;1&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>

            <div class="relative z-10 max-w-3xl mx-auto text-white">
                <div class="inline-flex items-center gap-2 px-5 py-2.5 bg-yellow-400/20 backdrop-blur-md rounded-full mb-6 border border-yellow-400/30">
                    <svg class="w-5 h-5 text-yellow-400 animate-pulse" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm font-bold text-yellow-300">Join Our Journey</span>
                </div>

                <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6">
                    Ready to Experience the Difference?
                </h2>
                <p class="text-xl text-gray-300 mb-10 leading-relaxed">
                    Let us be part of your journey. Book your ride today and discover why we're Jamnagar's most trusted taxi service.
                </p>

                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="/booking" class="inline-flex items-center gap-3 px-10 py-5 bg-gradient-to-r from-yellow-400 to-yellow-500 text-[#1a3a52] font-bold text-lg rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Book Your Ride</span>
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
<script src="{{ asset('js/about.js') }}"></script>
@endsection
