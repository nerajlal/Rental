@include('head')

    <!-- Main Content -->
    <main class="pt-16" id="main-content">
        <!-- Contact Page -->
        <section class="py-16 px-4 bg-gradient-to-br from-orange-50 via-red-50 to-orange-100 min-h-screen relative overflow-hidden">
            <!-- Background Decorations -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-20 left-10 w-32 h-32 bg-orange-400 rounded-full blur-3xl animate-pulse"></div>
                <div class="absolute bottom-32 right-16 w-48 h-48 bg-red-300 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
                <div class="absolute top-1/2 left-1/4 w-24 h-24 bg-orange-300 rounded-full blur-2xl animate-pulse" style="animation-delay: 1s;"></div>
            </div>

            <div class="max-w-7xl mx-auto relative z-10">
                <!-- Header Section -->
                <div class="text-center mb-16">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl mb-6 shadow-lg">
                        <i class="fas fa-envelope text-2xl text-white"></i>
                    </div>
                    <h2 class="text-5xl lg:text-6xl font-bold text-gray-800 mb-6 tracking-tight">
                        Contact <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-red-600">Us</span>
                    </h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                        We'd love to hear from you! Whether you have a question about our products, pricing, or anything else, our team is ready to answer all your questions.
                    </p>
                    <div class="w-32 h-1 bg-gradient-to-r from-orange-500 to-red-500 mx-auto mt-8 rounded-full"></div>
                </div>

                <div class="grid lg:grid-cols-3 gap-12">
                    <!-- Contact Form -->
                    <div class="lg:col-span-2">
                        <div class="bg-white/90 backdrop-blur-sm p-8 lg:p-12 rounded-3xl shadow-2xl border border-white/20">
                            <div class="flex items-center mb-8">
                                <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-500 rounded-xl flex items-center justify-center mr-4 shadow-lg">
                                    <i class="fas fa-paper-plane text-white text-lg"></i>
                                </div>
                                <h3 class="text-3xl font-bold text-gray-800">Send us a Message</h3>
                            </div>
                            
                            @if(session('success'))
                                <div class="bg-gradient-to-r from-green-50 to-emerald-50 border-l-4 border-green-500 text-green-800 p-6 mb-8 rounded-r-xl shadow-sm" role="alert">
                                    <div class="flex items-center">
                                        <i class="fas fa-check-circle text-green-500 text-xl mr-3"></i>
                                        <div>
                                            <p class="font-bold text-lg">Success!</p>
                                            <p class="text-green-700">{{ session('success') }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <form action="{{ route('contact.submit') }}" method="POST" class="space-y-8">
                                @csrf
                                
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div class="group">
                                        <label for="name" class="block text-sm font-bold text-gray-700 mb-3 transition-colors group-focus-within:text-orange-600">
                                            <i class="fas fa-user mr-2 text-orange-500"></i>Full Name *
                                        </label>
                                        <input type="text" name="name" id="name" required 
                                               class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-0 focus:border-orange-500 transition-all duration-300 bg-gray-50 focus:bg-white hover:border-gray-300 text-gray-800 font-medium">
                                    </div>
                                    
                                    <div class="group">
                                        <label for="email" class="block text-sm font-bold text-gray-700 mb-3 transition-colors group-focus-within:text-orange-600">
                                            <i class="fas fa-envelope mr-2 text-orange-500"></i>Email Address *
                                        </label>
                                        <input type="email" name="email" id="email" required 
                                               class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-0 focus:border-orange-500 transition-all duration-300 bg-gray-50 focus:bg-white hover:border-gray-300 text-gray-800 font-medium">
                                    </div>
                                </div>
                                
                                <div class="group">
                                    <label for="subject" class="block text-sm font-bold text-gray-700 mb-3 transition-colors group-focus-within:text-orange-600">
                                        <i class="fas fa-tag mr-2 text-orange-500"></i>Subject *
                                    </label>
                                    <input type="text" name="subject" id="subject" required 
                                           class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-0 focus:border-orange-500 transition-all duration-300 bg-gray-50 focus:bg-white hover:border-gray-300 text-gray-800 font-medium">
                                </div>
                                
                                <div class="group">
                                    <label for="message" class="block text-sm font-bold text-gray-700 mb-3 transition-colors group-focus-within:text-orange-600">
                                        <i class="fas fa-comment-dots mr-2 text-orange-500"></i>Message *
                                    </label>
                                    <textarea name="message" id="message" rows="6" required 
                                              placeholder="Tell us about your requirements in detail..."
                                              class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-0 focus:border-orange-500 transition-all duration-300 bg-gray-50 focus:bg-white hover:border-gray-300 resize-none text-gray-800 font-medium"></textarea>
                                </div>
                                
                                <div class="pt-4">
                                    <button type="submit" 
                                            class="w-full bg-gradient-to-r from-orange-600 to-red-600 hover:from-orange-700 hover:to-red-700 text-white font-bold py-5 px-8 rounded-xl transition-all duration-300 transform hover:scale-[1.02] hover:shadow-2xl active:scale-[0.98] flex items-center justify-center space-x-3 text-lg">
                                        <i class="fas fa-paper-plane"></i>
                                        <span>Send Message</span>
                                        <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="lg:col-span-1 space-y-6">
                        <!-- Address Card -->
                        <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl shadow-lg border border-white/20 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 group">
                            <div class="flex items-start space-x-4">
                                <div class="w-14 h-14 bg-gradient-to-br from-red-500 to-pink-500 text-white rounded-xl flex items-center justify-center shadow-lg flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-map-marker-alt text-xl"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-bold text-lg text-gray-800 mb-2 flex items-center">
                                        Address
                                        <i class="fas fa-external-link-alt ml-2 text-xs text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity"></i>
                                    </h4>
                                    <p class="text-gray-600 leading-relaxed">{{ $siteConfig['business']['address'] }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Phone Card -->
                        <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl shadow-lg border border-white/20 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 group">
                            <div class="flex items-center space-x-4">
                                <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-700 text-white rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-phone text-xl"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-bold text-lg text-gray-800 mb-2">Phone</h4>
                                    <p class="text-gray-600">
                                        <a href="tel:{{ $siteConfig['business']['phone'] }}" 
                                           class="hover:text-orange-600 transition-colors font-semibold flex items-center">
                                            {{ $siteConfig['business']['phone'] }}
                                            <i class="fas fa-phone ml-2 text-xs opacity-0 group-hover:opacity-100 transition-opacity"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Email Card -->
                        <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl shadow-lg border border-white/20 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 group">
                            <div class="flex items-center space-x-4">
                                <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 text-white rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                    <i class="fas fa-envelope text-xl"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-bold text-lg text-gray-800 mb-2">Email</h4>
                                    <p class="text-gray-600">
                                        <a href="mailto:{{ $siteConfig['business']['email'] }}" 
                                           class="hover:text-orange-600 transition-colors font-semibold break-all flex items-center">
                                            {{ $siteConfig['business']['email'] }}
                                            <i class="fas fa-envelope ml-2 text-xs opacity-0 group-hover:opacity-100 transition-opacity"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- WhatsApp Card -->
                        <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl shadow-lg border border-white/20 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 group">
                            <div class="flex items-center space-x-4">
                                <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-600 text-white rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                    <i class="fab fa-whatsapp text-xl"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-bold text-lg text-gray-800 mb-2">WhatsApp</h4>
                                    <p class="text-gray-600">
                                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $siteConfig['business']['whatsapp']) }}" 
                                           target="_blank" 
                                           class="hover:text-orange-600 transition-colors font-semibold flex items-center">
                                            {{ $siteConfig['business']['whatsapp'] }}
                                            <i class="fab fa-whatsapp ml-2 text-xs opacity-0 group-hover:opacity-100 transition-opacity"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Instagram Card -->
                        <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl shadow-lg border border-white/20 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 group">
                            <div class="flex items-center space-x-4">
                                <div class="w-14 h-14 bg-gradient-to-br from-pink-500 to-purple-600 text-white rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-300">
                                    <i class="fab fa-instagram text-xl"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-bold text-lg text-gray-800 mb-2">Instagram</h4>
                                    <p class="text-gray-600">
                                        <a href="{{ $siteConfig['business']['instagram'] }}" 
                                           target="_blank" 
                                           class="hover:text-orange-600 transition-colors font-semibold flex items-center">
                                            Follow us on Instagram
                                            <i class="fab fa-instagram ml-2 text-xs opacity-0 group-hover:opacity-100 transition-opacity"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Call to Action Card -->
                        <div class="bg-gradient-to-br from-orange-500 to-red-600 p-6 rounded-2xl shadow-lg text-white mt-8">
                            <div class="text-center">
                                <i class="fas fa-clock text-2xl mb-4"></i>
                                <h4 class="font-bold text-xl mb-2">Quick Response</h4>
                                <p class="text-orange-100 text-sm leading-relaxed">
                                    We typically respond to all inquiries within 2-4 hours during business hours.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@include('footer')