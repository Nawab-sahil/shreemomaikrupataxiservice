@extends('layouts.app')

@section('title', 'Book Your Ride - Shree Momai Krupa Taxi Service')
@section('meta_description', 'Book your taxi instantly. Easy online booking, transparent pricing, 24/7 service in Jamnagar.')

@section('extra_css')
<link rel="stylesheet" href="{{ asset('assets/css/booking.css') }}">
@endsection

@section('content')

<!-- Hero Section -->
<div class="relative overflow-hidden bg-gradient-to-br from-[#0f2537] via-[#1a3a52] to-[#2d5a7b] text-white py-16 md:py-24">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 40px 40px;"></div>
    
    <!-- Decorative Blobs -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-yellow-400/20 rounded-full blur-3xl animate-float"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-400/20 rounded-full blur-3xl animate-float" style="animation-delay: 2s;"></div>

    <div class="container-max relative z-10">
        <div class="text-center max-w-3xl mx-auto">
            <div class="inline-flex items-center gap-2 px-5 py-2.5 bg-yellow-400/20 backdrop-blur-md rounded-full mb-6 border border-yellow-400/30" data-aos="fade-up">
                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <span class="text-sm font-bold">Instant Confirmation</span>
            </div>

            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold mb-6 leading-tight" data-aos="fade-up" data-aos-delay="100">
                Book Your
                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-200">
                    Perfect Ride
                </span>
            </h1>

            <p class="text-xl text-gray-200 leading-relaxed mb-8" data-aos="fade-up" data-aos-delay="200">
                Fast, reliable, and comfortable taxi service available 24/7
            </p>

            <!-- Quick Features -->
            <div class="flex flex-wrap justify-center gap-6 text-sm" data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span>No Hidden Charges</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span>Professional Drivers</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span>Clean Vehicles</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Booking Section -->
<section class="py-16 md:py-24 bg-gray-50">
    <div class="container-max">
        <div class="grid lg:grid-cols-3 gap-8">
            
            <!-- Main Booking Form -->
            <div class="lg:col-span-2">
                
                <!-- Progress Steps -->
                <div class="flex items-center justify-between mb-8 bg-white rounded-2xl p-6 shadow-lg" data-aos="fade-up">
                    <div class="step-indicator flex-1 text-center">
                        <div class="step-number active mx-auto w-12 h-12 rounded-full bg-yellow-400 text-[#1a3a52] font-bold flex items-center justify-center mb-2 transition-all duration-300">
                            <span class="step-num">1</span>
                            <svg class="step-check hidden w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="text-sm font-bold text-[#1a3a52]">Journey Type</div>
                    </div>
                    <div class="step-line flex-1 h-1 bg-gray-200 mx-2"></div>
                    <div class="step-indicator flex-1 text-center">
                        <div class="step-number mx-auto w-12 h-12 rounded-full bg-gray-200 text-gray-500 font-bold flex items-center justify-center mb-2 transition-all duration-300">
                            <span class="step-num">2</span>
                            <svg class="step-check hidden w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="text-sm font-semibold text-gray-500">Trip Details</div>
                    </div>
                    <div class="step-line flex-1 h-1 bg-gray-200 mx-2"></div>
                    <div class="step-indicator flex-1 text-center">
                        <div class="step-number mx-auto w-12 h-12 rounded-full bg-gray-200 text-gray-500 font-bold flex items-center justify-center mb-2 transition-all duration-300">
                            <span class="step-num">3</span>
                            <svg class="step-check hidden w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div class="text-sm font-semibold text-gray-500">Your Info</div>
                    </div>
                </div>

                <!-- Form Card -->
                <div class="bg-white rounded-3xl shadow-2xl overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                    <form id="bookingForm">
                        
                        <!-- Step 1: Journey Type -->
                        <div class="form-step active p-8 md:p-12" data-step="1">
                            <h2 class="text-3xl font-extrabold text-[#1a3a52] mb-4">Choose Journey Type</h2>
                            <p class="text-gray-600 mb-8">Select the type of service you need</p>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                
                                <label class="journey-card group cursor-pointer">
                                    <input type="radio" name="journeyType" value="local" class="hidden journey-radio" required>
                                    <div class="relative h-full p-8 border-2 border-gray-200 rounded-2xl hover:border-yellow-400 transition-all duration-300 hover:shadow-xl">
                                        <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                            <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                        <h3 class="text-xl font-bold text-[#1a3a52] mb-2">Local City</h3>
                                        <p class="text-gray-600 text-sm">Point to point within city limits</p>
                                        <div class="absolute top-4 right-4 w-6 h-6 rounded-full border-2 border-gray-300 group-hover:border-yellow-400 transition-colors duration-300 radio-indicator"></div>
                                    </div>
                                </label>

                                <label class="journey-card group cursor-pointer">
                                    <input type="radio" name="journeyType" value="airport" class="hidden journey-radio" required>
                                    <div class="relative h-full p-8 border-2 border-gray-200 rounded-2xl hover:border-yellow-400 transition-all duration-300 hover:shadow-xl">
                                        <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                            <svg class="w-8 h-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"/>
                                            </svg>
                                        </div>
                                        <h3 class="text-xl font-bold text-[#1a3a52] mb-2">Airport Transfer</h3>
                                        <p class="text-gray-600 text-sm">Pickup or drop to airport</p>
                                        <div class="absolute top-4 right-4 w-6 h-6 rounded-full border-2 border-gray-300 group-hover:border-yellow-400 transition-colors duration-300 radio-indicator"></div>
                                    </div>
                                </label>

                                <label class="journey-card group cursor-pointer">
                                    <input type="radio" name="journeyType" value="outstation" class="hidden journey-radio" required>
                                    <div class="relative h-full p-8 border-2 border-gray-200 rounded-2xl hover:border-yellow-400 transition-all duration-300 hover:shadow-xl">
                                        <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                            <svg class="w-8 h-8 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                            </svg>
                                        </div>
                                        <h3 class="text-xl font-bold text-[#1a3a52] mb-2">Outstation</h3>
                                        <p class="text-gray-600 text-sm">Intercity or round trip</p>
                                        <div class="absolute top-4 right-4 w-6 h-6 rounded-full border-2 border-gray-300 group-hover:border-yellow-400 transition-colors duration-300 radio-indicator"></div>
                                    </div>
                                </label>

                                <label class="journey-card group cursor-pointer">
                                    <input type="radio" name="journeyType" value="tour" class="hidden journey-radio" required>
                                    <div class="relative h-full p-8 border-2 border-gray-200 rounded-2xl hover:border-yellow-400 transition-all duration-300 hover:shadow-xl">
                                        <div class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                                            <svg class="w-8 h-8 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/>
                                            </svg>
                                        </div>
                                        <h3 class="text-xl font-bold text-[#1a3a52] mb-2">Tour Package</h3>
                                        <p class="text-gray-600 text-sm">Sightseeing and tours</p>
                                        <div class="absolute top-4 right-4 w-6 h-6 rounded-full border-2 border-gray-300 group-hover:border-yellow-400 transition-colors duration-300 radio-indicator"></div>
                                    </div>
                                </label>

                            </div>

                            <div class="mt-8 flex justify-end">
                                <button type="button" class="next-step px-8 py-4 bg-gradient-to-r from-yellow-400 to-yellow-500 text-[#1a3a52] font-bold rounded-xl hover:shadow-xl transform hover:scale-105 transition-all duration-300 flex items-center gap-2">
                                    <span>Continue</span>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Step 2: Trip Details -->
                        <div class="form-step p-8 md:p-12 hidden" data-step="2">
                            <h2 class="text-3xl font-extrabold text-[#1a3a52] mb-4">Trip Details</h2>
                            <p class="text-gray-600 mb-8">Tell us about your journey</p>

                            <div class="space-y-6">
                                
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-bold text-[#1a3a52] mb-2">
                                            Pickup Location <span class="text-red-500">*</span>
                                        </label>
                                        <div class="relative">
                                            <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                            </svg>
                                            <select name="pickup" required class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-yellow-400 focus:ring-4 focus:ring-yellow-400/20 transition-all duration-300 outline-none appearance-none bg-white">
                                                <option value="" disabled selected>Select pickup city</option>
                                                <option>Ahmedabad</option>
                                                <option>Amreli</option>
                                                <option>Anand</option>
                                                <option>Ankleshwar</option>
                                                <option>Bhavnagar</option>
                                                <option>Bhuj</option>
                                                <option>Botad</option>
                                                <option>Chhota Udaipur</option>
                                                <option>Deesa</option>
                                                <option>Dahod</option>
                                                <option>Dwarka</option>
                                                <option>Gandhidham</option>
                                                <option>Gandhinagar</option>
                                                <option>Gir Somnath</option>
                                                <option>Godhra</option>
                                                <option>Gondal</option>
                                                <option>Himmatnagar</option>
                                                <option>Jamnagar</option>
                                                <option>Jetpur</option>
                                                <option>Junagadh</option>
                                                <option>Kalol</option>
                                                <option>Keshod</option>
                                                <option>Khambhalia</option>
                                                <option>Mahesana</option>
                                                <option>Morbi</option>
                                                <option>Nadiad</option>
                                                <option>Navsari</option>
                                                <option>Palanpur</option>
                                                <option>Porbandar</option>
                                                <option>Rajkot</option>
                                                <option>Surat</option>
                                                <option>Surendranagar</option>
                                                <option>Vadodara</option>
                                                <option>Valsad</option>
                                                <option>Veraval</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-bold text-[#1a3a52] mb-2">
                                            Drop Location <span class="text-red-500">*</span>
                                        </label>
                                        <div class="relative">
                                            <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                            </svg>
                                            <select name="drop" required class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-yellow-400 focus:ring-4 focus:ring-yellow-400/20 transition-all duration-300 outline-none appearance-none bg-white">
                                                <option value="" disabled selected>Select destination city</option>
                                                <option>Ahmedabad</option>
                                                <option>Amreli</option>
                                                <option>Anand</option>
                                                <option>Ankleshwar</option>
                                                <option>Bhavnagar</option>
                                                <option>Bhuj</option>
                                                <option>Botad</option>
                                                <option>Chhota Udaipur</option>
                                                <option>Deesa</option>
                                                <option>Dahod</option>
                                                <option>Dwarka</option>
                                                <option>Gandhidham</option>
                                                <option>Gandhinagar</option>
                                                <option>Gir Somnath</option>
                                                <option>Godhra</option>
                                                <option>Gondal</option>
                                                <option>Himmatnagar</option>
                                                <option>Jamnagar</option>
                                                <option>Jetpur</option>
                                                <option>Junagadh</option>
                                                <option>Kalol</option>
                                                <option>Keshod</option>
                                                <option>Khambhalia</option>
                                                <option>Mahesana</option>
                                                <option>Morbi</option>
                                                <option>Nadiad</option>
                                                <option>Navsari</option>
                                                <option>Palanpur</option>
                                                <option>Porbandar</option>
                                                <option>Rajkot</option>
                                                <option>Surat</option>
                                                <option>Surendranagar</option>
                                                <option>Vadodara</option>
                                                <option>Valsad</option>
                                                <option>Veraval</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-bold text-[#1a3a52] mb-2">
                                            Pickup Date <span class="text-red-500">*</span>
                                        </label>
                                        <div class="relative">
                                            <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                            </svg>
                                            <input type="date" name="date" required class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-yellow-400 focus:ring-4 focus:ring-yellow-400/20 transition-all duration-300 outline-none">
                                        </div>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-bold text-[#1a3a52] mb-2">
                                            Pickup Time <span class="text-red-500">*</span>
                                        </label>
                                        <div class="relative">
                                            <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                            </svg>
                                            <input type="time" name="time" required class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-yellow-400 focus:ring-4 focus:ring-yellow-400/20 transition-all duration-300 outline-none">
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-bold text-[#1a3a52] mb-2">
                                        Number of Passengers <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                                        </svg>
                                        <select name="passengers" required class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-yellow-400 focus:ring-4 focus:ring-yellow-400/20 transition-all duration-300 outline-none appearance-none bg-white">
                                            <option value="">Select passengers</option>
                                            <option value="1">1 Passenger</option>
                                            <option value="2">2 Passengers</option>
                                            <option value="3">3 Passengers</option>
                                            <option value="4">4 Passengers</option>
                                            <option value="5-7">5-7 Passengers</option>
                                            <option value="8+">8+ Passengers</option>
                                        </select>
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-bold text-[#1a3a52] mb-2">
                                        Additional Notes
                                    </label>
                                    <textarea name="notes" rows="3" class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-yellow-400 focus:ring-4 focus:ring-yellow-400/20 transition-all duration-300 outline-none resize-none" placeholder="Any special requirements or notes..."></textarea>
                                </div>

                            </div>

                            <div class="mt-8 flex justify-between">
                                <button type="button" class="prev-step px-8 py-4 border-2 border-gray-300 text-gray-700 font-bold rounded-xl hover:bg-gray-50 transition-all duration-300 flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Back</span>
                                </button>
                                <button type="button" class="next-step px-8 py-4 bg-gradient-to-r from-yellow-400 to-yellow-500 text-[#1a3a52] font-bold rounded-xl hover:shadow-xl transform hover:scale-105 transition-all duration-300 flex items-center gap-2">
                                    <span>Continue</span>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Step 3: Personal Information -->
                        <div class="form-step p-8 md:p-12 hidden" data-step="3">
                            <h2 class="text-3xl font-extrabold text-[#1a3a52] mb-4">Your Information</h2>
                            <p class="text-gray-600 mb-8">Please provide your contact details</p>

                            <div class="space-y-6">
                                
                                <div>
                                    <label class="block text-sm font-bold text-[#1a3a52] mb-2">
                                        Full Name <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                        </svg>
                                        <input type="text" name="name" required class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-yellow-400 focus:ring-4 focus:ring-yellow-400/20 transition-all duration-300 outline-none" placeholder="Enter your full name">
                                    </div>
                                </div>

                                <div class="grid md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-bold text-[#1a3a52] mb-2">
                                            Mobile Number <span class="text-red-500">*</span>
                                        </label>
                                        <div class="relative">
                                            <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.438a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                            </svg>
                                            <input type="tel" name="phone" required class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-yellow-400 focus:ring-4 focus:ring-yellow-400/20 transition-all duration-300 outline-none" placeholder="+91 9876543210">
                                        </div>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-bold text-[#1a3a52] mb-2">
                                            Email Address
                                        </label>
                                        <div class="relative">
                                            <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                            </svg>
                                            <input type="email" name="email" class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-yellow-400 focus:ring-4 focus:ring-yellow-400/20 transition-all duration-300 outline-none" placeholder="your@email.com">
                                        </div>
                                    </div>
                                </div>

                                <!-- Summary Box -->
                                <div class="bg-gradient-to-br from-yellow-50 to-orange-50 rounded-2xl p-6 border-l-4 border-yellow-500">
                                    <h3 class="font-bold text-[#1a3a52] mb-4 flex items-center gap-2">
                                        <svg class="w-5 h-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                        </svg>
                                        Booking Summary
                                    </h3>
                                    <div class="space-y-2 text-sm">
                                        <div class="flex justify-between">
                                            <span class="text-gray-600">Journey Type:</span>
                                            <span class="font-semibold text-[#1a3a52]" id="summary-type">-</span>
                                        </div>
                                        <div class="flex justify-between">
                                            <span class="text-gray-600">Pickup:</span>
                                            <span class="font-semibold text-[#1a3a52]" id="summary-pickup">-</span>
                                        </div>
                                        <div class="flex justify-between">
                                            <span class="text-gray-600">Drop:</span>
                                            <span class="font-semibold text-[#1a3a52]" id="summary-drop">-</span>
                                        </div>
                                        <div class="flex justify-between">
                                            <span class="text-gray-600">Date & Time:</span>
                                            <span class="font-semibold text-[#1a3a52]" id="summary-datetime">-</span>
                                        </div>
                                        <div class="flex justify-between">
                                            <span class="text-gray-600">Passengers:</span>
                                            <span class="font-semibold text-[#1a3a52]" id="summary-passengers">-</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="mt-8 flex justify-between">
                                <button type="button" class="prev-step px-8 py-4 border-2 border-gray-300 text-gray-700 font-bold rounded-xl hover:bg-gray-50 transition-all duration-300 flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Back</span>
                                </button>
                                <button type="submit" class="px-8 py-4 bg-gradient-to-r from-green-500 to-green-600 text-white font-bold rounded-xl hover:shadow-xl transform hover:scale-105 transition-all duration-300 flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span>Confirm Booking</span>
                                </button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1 space-y-6">
                
                <!-- Why Book Card -->
                <div class="bg-white rounded-3xl shadow-2xl p-8" data-aos="fade-up">
                    <h3 class="text-2xl font-extrabold text-[#1a3a52] mb-6">Why Book With Us?</h3>
                    
                    <div class="space-y-4">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#1a3a52] mb-1">Transparent Pricing</h4>
                                <p class="text-sm text-gray-600">No hidden charges or surprises</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#1a3a52] mb-1">Safe & Secure</h4>
                                <p class="text-sm text-gray-600">GPS tracked & insured rides</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#1a3a52] mb-1">Expert Drivers</h4>
                                <p class="text-sm text-gray-600">Trained & verified professionals</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#1a3a52] mb-1">24/7 Service</h4>
                                <p class="text-sm text-gray-600">Available anytime you need</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#1a3a52] mb-1">Quick Confirmation</h4>
                                <p class="text-sm text-gray-600">Instant booking confirmation</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Card -->
                <div class="bg-gradient-to-br from-[#1a3a52] to-[#0f2537] rounded-3xl shadow-2xl p-8 text-white" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-xl font-extrabold mb-4">Need Help?</h3>
                    <p class="text-gray-300 mb-6">Call us for immediate booking or assistance</p>
                    <a href="tel:+919009058600" class="block w-full py-4 bg-yellow-400 text-[#1a3a52] font-bold rounded-xl text-center hover:bg-yellow-500 transition-colors duration-300 flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.438a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                        </svg>
                        <span>+91 9009058600</span>
                    </a>
                    <div class="mt-4 text-sm text-center text-gray-300">
                        <p>or WhatsApp us at</p>
                        <a href="https://wa.me/919009058600" class="text-yellow-400 font-bold hover:text-yellow-300">+91 9009058600</a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- Success Modal (Hidden by default) -->
<div id="successModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl p-8 md:p-12 max-w-md w-full transform scale-95 transition-all duration-300" id="modalContent">
        <div class="text-center">
            <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-10 h-10 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
            </div>
            <h3 class="text-3xl font-extrabold text-[#1a3a52] mb-4">Booking Confirmed!</h3>
            <p class="text-gray-600 mb-2">Thank you for choosing Shree Momai Krupa Taxi Service.</p>
            <p class="text-sm text-gray-500 mb-8">You will receive a confirmation call shortly.</p>
            <div class="bg-yellow-50 rounded-xl p-4 mb-6 border-l-4 border-yellow-500">
                <p class="text-sm text-gray-700"><strong>Booking ID:</strong> <span id="bookingId" class="font-mono text-[#1a3a52]">-</span></p>
            </div>
            <button onclick="closeModal()" class="w-full py-4 bg-gradient-to-r from-yellow-400 to-yellow-500 text-[#1a3a52] font-bold rounded-xl hover:shadow-xl transition-all duration-300">
                Done
            </button>
        </div>
    </div>
</div>

@endsection

@section('extra_js')
<script src="{{ asset('js/booking.js') }}"></script>
@endsection
