@extends('layouts.app')

@section('title', 'Contact Us - Shree Momai Krupa Taxi Service')
@section('meta_description', 'Get in touch with us. Contact our team for inquiries, bookings, or feedback.')

@section('extra_css')
<link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
@endsection

@section('content')

<!-- Hero Section with Floating Contact Cards -->
<div class="relative overflow-hidden bg-gradient-to-br from-[#0f2537] via-[#1a3a52] to-[#2d5a7b] text-white py-20 md:py-32">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 40px 40px;"></div>
    
    <!-- Decorative Blobs -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-yellow-400/20 rounded-full blur-3xl animate-float"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-400/20 rounded-full blur-3xl animate-float" style="animation-delay: 2s;"></div>

    <div class="container-max relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 px-5 py-2.5 bg-yellow-400/20 backdrop-blur-md rounded-full mb-6 border border-yellow-400/30">
                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.438a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                </svg>
                <span class="text-sm font-bold">We're Here to Help</span>
            </div>

            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold mb-6 leading-tight">
                Let's Start a
                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-200">
                    Conversation
                </span>
            </h1>

            <p class="text-xl text-gray-200 leading-relaxed">
                Have questions? Need a ride? We're available 24/7 to assist you with bookings, inquiries, and support.
            </p>
        </div>

        <!-- Quick Contact Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            
            <!-- Phone Card -->
            <div class="group relative" data-aos="fade-up">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-500/30 to-cyan-500/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                <div class="relative bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-8 text-center hover:bg-white/20 transition-all duration-300 cursor-pointer" onclick="window.location.href='tel:+919009058600'">
                    <div class="w-16 h-16 bg-yellow-400/20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.438a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Call Us Now</h3>
                    <p class="text-sm text-gray-300 mb-3">Available 24/7</p>
                    <a href="tel:+919009058600" class="text-yellow-400 font-bold text-lg hover:text-yellow-300">+91 9009058600</a>
                </div>
            </div>

            <!-- WhatsApp Card -->
            <div class="group relative" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute inset-0 bg-gradient-to-br from-green-500/30 to-emerald-500/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                <div class="relative bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-8 text-center hover:bg-white/20 transition-all duration-300 cursor-pointer" onclick="window.open('https://wa.me/919009058600', '_blank')">
                    <div class="w-16 h-16 bg-green-400/20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-green-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-2">WhatsApp</h3>
                    <p class="text-sm text-gray-300 mb-3">Quick responses</p>
                    <span class="text-green-400 font-bold text-lg">Chat Now</span>
                </div>
            </div>

            <!-- Email Card -->
            <div class="group relative" data-aos="fade-up" data-aos-delay="200">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-500/30 to-pink-500/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-500"></div>
                <div class="relative bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-8 text-center hover:bg-white/20 transition-all duration-300 cursor-pointer" onclick="window.location.href='mailto:info@shreemomaikrupa.com'">
                    <div class="w-16 h-16 bg-purple-400/20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-purple-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mb-2">Email Us</h3>
                    <p class="text-sm text-gray-300 mb-3">Within 2 hours</p>
                    <a href="mailto:info@shreemomaikrupa.com" class="text-purple-400 font-bold text-sm hover:text-purple-300 break-all">info@shreemomaikrupa.com</a>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Main Contact Section: Form + Info Side by Side -->
<section class="py-20 md:py-32 bg-gray-50">
    <div class="container-max">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16">
            
            <!-- Left Side: Contact Form -->
            <div data-aos="fade-right">
                <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-12">
                    <div class="mb-8">
                        <h2 class="text-3xl md:text-4xl font-extrabold text-[#1a3a52] mb-4">
                            Send us a Message
                        </h2>
                        <p class="text-gray-600 text-lg">
                            Fill out the form below and we'll get back to you as soon as possible.
                        </p>
                    </div>

                    <form id="contactForm" class="space-y-6">
                        
                        <!-- Name & Email Row -->
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="form-group">
                                <label for="name" class="block text-sm font-bold text-[#1a3a52] mb-2">
                                    Your Name <span class="text-red-500">*</span>
                                </label>
                                <input 
                                    type="text" 
                                    id="name" 
                                    name="name" 
                                    required 
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-yellow-400 focus:ring-4 focus:ring-yellow-400/20 transition-all duration-300 outline-none"
                                    placeholder="John Doe"
                                >
                                <span class="error-message text-red-500 text-sm hidden"></span>
                            </div>

                            <div class="form-group">
                                <label for="email" class="block text-sm font-bold text-[#1a3a52] mb-2">
                                    Email Address <span class="text-red-500">*</span>
                                </label>
                                <input 
                                    type="email" 
                                    id="email" 
                                    name="email" 
                                    required 
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-yellow-400 focus:ring-4 focus:ring-yellow-400/20 transition-all duration-300 outline-none"
                                    placeholder="john@example.com"
                                >
                                <span class="error-message text-red-500 text-sm hidden"></span>
                            </div>
                        </div>

                        <!-- Phone & Subject Row -->
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="form-group">
                                <label for="phone" class="block text-sm font-bold text-[#1a3a52] mb-2">
                                    Phone Number
                                </label>
                                <input 
                                    type="tel" 
                                    id="phone" 
                                    name="phone" 
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-yellow-400 focus:ring-4 focus:ring-yellow-400/20 transition-all duration-300 outline-none"
                                    placeholder="+91 9876543210"
                                >
                            </div>

                            <div class="form-group">
                                <label for="subject" class="block text-sm font-bold text-[#1a3a52] mb-2">
                                    Subject <span class="text-red-500">*</span>
                                </label>
                                <select 
                                    id="subject" 
                                    name="subject" 
                                    required 
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-yellow-400 focus:ring-4 focus:ring-yellow-400/20 transition-all duration-300 outline-none appearance-none bg-white"
                                >
                                    <option value="">Select a subject</option>
                                    <option value="booking">Booking Inquiry</option>
                                    <option value="pricing">Pricing Query</option>
                                    <option value="tour">Tour Package</option>
                                    <option value="corporate">Corporate Service</option>
                                    <option value="feedback">Feedback</option>
                                    <option value="complaint">Complaint</option>
                                    <option value="other">Other</option>
                                </select>
                                <span class="error-message text-red-500 text-sm hidden"></span>
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="form-group">
                            <label for="message" class="block text-sm font-bold text-[#1a3a52] mb-2">
                                Your Message <span class="text-red-500">*</span>
                            </label>
                            <textarea 
                                id="message" 
                                name="message" 
                                rows="5" 
                                required 
                                class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-yellow-400 focus:ring-4 focus:ring-yellow-400/20 transition-all duration-300 outline-none resize-none"
                                placeholder="Tell us more about your inquiry..."
                            ></textarea>
                            <span class="error-message text-red-500 text-sm hidden"></span>
                        </div>

                        <!-- Newsletter Checkbox -->
                        <div class="form-group">
                            <label class="flex items-start gap-3 cursor-pointer group">
                                <input 
                                    type="checkbox" 
                                    id="subscribe" 
                                    name="subscribe" 
                                    class="w-5 h-5 mt-0.5 rounded border-2 border-gray-300 text-yellow-500 focus:ring-yellow-400"
                                >
                                <span class="text-sm text-gray-600 group-hover:text-gray-900 transition-colors">
                                    Subscribe to our newsletter for exclusive offers and updates
                                </span>
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button 
                            type="submit" 
                            class="w-full py-4 bg-gradient-to-r from-yellow-400 to-yellow-500 text-[#1a3a52] font-bold text-lg rounded-xl hover:shadow-2xl transform hover:scale-[1.02] transition-all duration-300 flex items-center justify-center gap-3"
                        >
                            <span>Send Message</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"/>
                            </svg>
                        </button>

                        <!-- Success Message -->
                        <div id="successMessage" class="hidden p-4 bg-green-50 border-l-4 border-green-500 rounded-lg">
                            <div class="flex items-center gap-3">
                                <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <div>
                                    <div class="font-bold text-green-800">Message Sent Successfully!</div>
                                    <div class="text-sm text-green-700">We'll get back to you within 2 hours.</div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

            <!-- Right Side: Contact Information -->
            <div data-aos="fade-left">
                
                <!-- Office Location -->
                <div class="bg-gradient-to-br from-[#1a3a52] to-[#0f2537] rounded-3xl p-8 md:p-10 text-white mb-8 shadow-2xl">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-12 h-12 bg-yellow-400/20 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-extrabold">Office Location</h3>
                    </div>
                    <p class="text-gray-200 text-lg leading-relaxed mb-4">
                        Defence Colony Road,<br>
                        Jamnagar, Gujarat 361005,<br>
                        India
                    </p>
                    <a href="https://maps.google.com/?q=Jamnagar+Gujarat" target="_blank" class="inline-flex items-center gap-2 text-yellow-400 font-bold hover:text-yellow-300 transition-colors">
                        <span>Get Directions</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </div>

                <!-- Business Hours -->
                <div class="bg-white rounded-3xl p-8 md:p-10 shadow-2xl mb-8">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-extrabold text-[#1a3a52]">Business Hours</h3>
                    </div>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center pb-3 border-b border-gray-200">
                            <span class="text-gray-600 font-semibold">Monday - Friday</span>
                            <span class="text-[#1a3a52] font-bold">6:00 AM - 11:00 PM</span>
                        </div>
                        <div class="flex justify-between items-center pb-3 border-b border-gray-200">
                            <span class="text-gray-600 font-semibold">Saturday</span>
                            <span class="text-[#1a3a52] font-bold">6:00 AM - 11:30 PM</span>
                        </div>
                        <div class="flex justify-between items-center pb-3 border-b border-gray-200">
                            <span class="text-gray-600 font-semibold">Sunday</span>
                            <span class="text-[#1a3a52] font-bold">6:00 AM - 10:30 PM</span>
                        </div>
                        <div class="flex items-center gap-3 pt-2">
                            <div class="flex-shrink-0 w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                            <span class="text-green-600 font-bold text-lg">24/7 Emergency Service Available</span>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-3xl p-8 md:p-10 shadow-2xl">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-12 h-12 bg-white/30 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-[#1a3a52]" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-extrabold text-[#1a3a52]">Follow Us</h3>
                    </div>
                    <p class="text-[#1a3a52] mb-6">Stay connected for updates and special offers</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#" class="w-12 h-12 bg-white/30 hover:bg-white/50 rounded-xl flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                            <svg class="w-6 h-6 text-[#1a3a52]" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-white/30 hover:bg-white/50 rounded-xl flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                            <svg class="w-6 h-6 text-[#1a3a52]" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-white/30 hover:bg-white/50 rounded-xl flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                            <svg class="w-6 h-6 text-[#1a3a52]" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-white/30 hover:bg-white/50 rounded-xl flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                            <svg class="w-6 h-6 text-[#1a3a52]" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-20 md:py-32 bg-white">
    <div class="container-max">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-400/10 border border-yellow-400/30 rounded-full mb-6">
                <svg class="w-5 h-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                </svg>
                <span class="text-sm font-bold text-[#1a3a52]">Find Us</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-extrabold text-[#1a3a52] mb-4">
                Visit Our Office
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Located in the heart of Jamnagar for your convenience
            </p>
        </div>

        <div class="relative rounded-3xl overflow-hidden shadow-2xl" data-aos="fade-up">
            <!-- Google Maps Embed or Placeholder -->
            <div class="aspect-video bg-gradient-to-br from-blue-100 to-blue-200 flex items-center justify-center">
                <div class="text-center text-[#1a3a52] p-8">
                    <svg class="w-24 h-24 mx-auto mb-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <h3 class="text-2xl font-bold mb-3">Defence Colony Road, Jamnagar</h3>
                    <p class="text-lg text-gray-600 mb-6">Interactive map integration coming soon</p>
                    <a href="https://maps.google.com/?q=Jamnagar+Gujarat" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 bg-[#1a3a52] text-white font-bold rounded-xl hover:bg-[#0f2537] transition-colors">
                        <span>Open in Google Maps</span>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"/>
                            <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Uncomment below to use real Google Maps -->
            <!-- <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235013.74844673845!2d69.8597406!3d22.4707019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39569d63fa22c697%3A0x2db3e3efa5e147b!2sJamnagar%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1234567890"
                width="100%" 
                height="500" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                class="w-full h-[500px]"
            ></iframe> -->
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 md:py-32 bg-gray-50">
    <div class="container-max">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-yellow-400/10 border border-yellow-400/30 rounded-full mb-6">
                <svg class="w-5 h-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                </svg>
                <span class="text-sm font-bold text-[#1a3a52]">FAQs</span>
            </div>
            <h2 class="text-4xl md:text-5xl font-extrabold text-[#1a3a52] mb-4">
                Frequently Asked Questions
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Quick answers to common questions
            </p>
        </div>

        <div class="max-w-3xl mx-auto space-y-4">
            
            <div class="faq-item bg-white rounded-xl shadow-md overflow-hidden" data-aos="fade-up">
                <button class="faq-question w-full px-6 py-5 text-left flex items-center justify-between font-bold text-[#1a3a52] hover:bg-gray-50 transition-colors">
                    <span>How do I book a taxi?</span>
                    <svg class="w-6 h-6 transform transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </button>
                <div class="faq-answer hidden px-6 pb-5 text-gray-600">
                    You can book through our website, call us directly at +91 9009058600, or message us on WhatsApp. Bookings are available 24/7.
                </div>
            </div>

            <div class="faq-item bg-white rounded-xl shadow-md overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                <button class="faq-question w-full px-6 py-5 text-left flex items-center justify-between font-bold text-[#1a3a52] hover:bg-gray-50 transition-colors">
                    <span>What are your payment options?</span>
                    <svg class="w-6 h-6 transform transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </button>
                <div class="faq-answer hidden px-6 pb-5 text-gray-600">
                    We accept cash, UPI, credit/debit cards, and online transfers. Payment can be made after your ride or in advance for bookings.
                </div>
            </div>

            <div class="faq-item bg-white rounded-xl shadow-md overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                <button class="faq-question w-full px-6 py-5 text-left flex items-center justify-between font-bold text-[#1a3a52] hover:bg-gray-50 transition-colors">
                    <span>Do you offer airport transfers?</span>
                    <svg class="w-6 h-6 transform transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </button>
                <div class="faq-answer hidden px-6 pb-5 text-gray-600">
                    Yes, we provide reliable airport pickup and drop services. Book in advance for guaranteed availability and competitive rates.
                </div>
            </div>

            <div class="faq-item bg-white rounded-xl shadow-md overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                <button class="faq-question w-full px-6 py-5 text-left flex items-center justify-between font-bold text-[#1a3a52] hover:bg-gray-50 transition-colors">
                    <span>Can I cancel or modify my booking?</span>
                    <svg class="w-6 h-6 transform transition-transform duration-300" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </button>
                <div class="faq-answer hidden px-6 pb-5 text-gray-600">
                    Yes, you can cancel or modify bookings up to 2 hours before the scheduled time without any charges. Contact us immediately for changes.
                </div>
            </div>

        </div>
    </div>
</section>

@endsection

@section('extra_js')
<script src="{{ asset('js/contact.js') }}"></script>
@endsection
