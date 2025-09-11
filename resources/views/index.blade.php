@include('head')

    <!-- Main Content -->
    <main class="pt-16" id="main-content">
        <!-- Home Page Content -->
        <!-- Hero Section -->
        <section class="hero-gradient text-white py-20 px-4">
            <div class="max-w-7xl mx-auto text-center">
                <h2 class="text-4xl md:text-6xl font-bold mb-6" id="hero-title">Transform Your Events with Elegant Decorations</h2>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Premium ornament rentals for weddings, corporate events, parties, and special occasions. Make every moment memorable with our exquisite collection.</p>
                <div class="space-y-4 md:space-y-0 md:space-x-4 md:flex md:justify-center">
                    <button class="bg-white text-orange-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300 w-full md:w-auto">Browse Products</button>
                    <button class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-orange-600 transition duration-300 w-full md:w-auto">Get Quote</button>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-16 px-4 bg-white">
            <div class="max-w-7xl mx-auto">
                <h3 class="text-3xl font-bold text-center mb-12 text-gray-800">Why Choose Our Rental Service?</h3>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center card-hover p-6 rounded-lg bg-gray-50">
                        <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-gem text-3xl text-orange-600"></i>
                        </div>
                        <h4 class="text-xl font-semibold mb-2">Premium Quality</h4>
                        <p class="text-gray-600">Hand-selected ornaments and decorations crafted with attention to detail for your special occasions.</p>
                    </div>
                    <div class="text-center card-hover p-6 rounded-lg bg-gray-50">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-clock text-3xl text-blue-600"></i>
                        </div>
                        <h4 class="text-xl font-semibold mb-2">Flexible Rental</h4>
                        <p class="text-gray-600">Choose rental periods that suit your event timeline, from single day to extended celebrations.</p>
                    </div>
                    <div class="text-center card-hover p-6 rounded-lg bg-gray-50">
                        <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-headset text-3xl text-emerald-600"></i>
                        </div>
                        <h4 class="text-xl font-semibold mb-2">Expert Support</h4>
                        <p class="text-gray-600">Our team provides consultation and support to help you create the perfect atmosphere for your event.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="py-16 px-4 bg-white">
            <div class="max-w-6xl mx-auto">
                <h3 class="text-3xl font-bold text-center mb-12 text-gray-800">Our Expert Team</h3>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="w-32 h-32 bg-gradient-to-br from-orange-200 to-pink-200 rounded-full mx-auto mb-4 flex items-center justify-center">
                            <i class="fas fa-user-tie text-5xl text-orange-600"></i>
                            </div>
                            <h4 class="text-xl font-semibold mb-2">Event Specialists</h4>
                            <p class="text-gray-600">Our team of experienced event specialists help you choose the perfect decorations for your occasion.</p>
                        </div>
                        <div class="text-center">
                            <div class="w-32 h-32 bg-gradient-to-br from-blue-200 to-indigo-200 rounded-full mx-auto mb-4 flex items-center justify-center">
                                <i class="fas fa-paint-brush text-5xl text-blue-600"></i>
                            </div>
                            <h4 class="text-xl font-semibold mb-2">Design Consultants</h4>
                            <p class="text-gray-600">Professional designers who understand color schemes, themes, and spatial arrangements to maximize visual impact.</p>
                        </div>
                        <div class="text-center">
                            <div class="w-32 h-32 bg-gradient-to-br from-emerald-200 to-teal-200 rounded-full mx-auto mb-4 flex items-center justify-center">
                                <i class="fas fa-truck text-5xl text-emerald-600"></i>
                            </div>
                            <h4 class="text-xl font-semibold mb-2">Logistics Team</h4>
                            <p class="text-gray-600">Reliable delivery and setup professionals ensure your decorations arrive on time and are perfectly arranged.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <!-- <section class="py-20 px-4 bg-gradient-to-r from-orange-50 to-red-100">
                <div class="max-w-4xl mx-auto">
                    <h3 class="text-4xl font-bold text-center mb-4 text-gray-800">Get In Touch</h3>
                    <p class="text-lg text-center text-gray-600 mb-12">We'd love to hear from you. Send us a message and we'll get back to you shortly.</p>
                    <div class="grid md:grid-cols-2 gap-12">
                        <div class="space-y-8">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-orange-600 text-white rounded-full flex items-center justify-center">
                                    <i class="fas fa-phone text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="text-xl font-semibold">Phone</h4>
                                    <p class="text-gray-700 mt-1">{{ $siteConfig['business']['phone'] }}</p>
                                    <a href="tel:{{ $siteConfig['business']['phone'] }}" class="text-orange-600 hover:text-orange-700 font-medium">Call us</a>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-orange-600 text-white rounded-full flex items-center justify-center">
                                    <i class="fas fa-envelope text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="text-xl font-semibold">Email</h4>
                                    <p class="text-gray-700 mt-1">{{ $siteConfig['business']['email'] }}</p>
                                    <a href="mailto:{{ $siteConfig['business']['email'] }}" class="text-orange-600 hover:text-orange-700 font-medium">Email us</a>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-orange-600 text-white rounded-full flex items-center justify-center">
                                    <i class="fab fa-whatsapp text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="text-xl font-semibold">WhatsApp</h4>
                                    <p class="text-gray-700 mt-1">{{ $siteConfig['business']['whatsapp'] }}</p>
                                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $siteConfig['business']['whatsapp']) }}" target="_blank" class="text-orange-600 hover:text-orange-700 font-medium">Message us</a>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-orange-600 text-white rounded-full flex items-center justify-center">
                                    <i class="fab fa-instagram text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="text-xl font-semibold">Instagram</h4>
                                    <p class="text-gray-700 mt-1">@metora.in</p>
                                    <a href="{{ $siteConfig['business']['instagram'] }}" target="_blank" class="text-orange-600 hover:text-orange-700 font-medium">Follow us</a>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-orange-600 text-white rounded-full flex items-center justify-center">
                                    <i class="fas fa-map-marker-alt text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="text-xl font-semibold">Address</h4>
                                    <p class="text-gray-700 mt-1">{{ $siteConfig['business']['address'] }}</p>
                                    <a href="#" class="text-orange-600 hover:text-orange-700 font-medium">Get directions</a>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white p-8 rounded-lg shadow-lg">
                            <h4 class="text-2xl font-semibold mb-6">Send us a message</h4>
                            <form class="space-y-6">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                                    <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition duration-300">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                    <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition duration-300">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Event Type</label>
                                    <select class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition duration-300">
                                        <option>Wedding</option>
                                        <option>Corporate Event</option>
                                        <option>Birthday Party</option>
                                        <option>Holiday Celebration</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                                    <textarea rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition duration-300"></textarea>
                                </div>
                                <button type="submit" class="w-full bg-orange-600 hover:bg-orange-700 text-white py-3 px-6 rounded-md font-semibold text-lg transition duration-300 transform hover:scale-105">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section> -->

            <!-- Contact Section -->
            <section class="py-16 px-4 bg-gradient-to-r from-orange-50 to-red-100 relative overflow-hidden">
                <!-- Background decoration -->
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute top-10 left-10 w-20 h-20 bg-orange-400 rounded-full blur-xl"></div>
                    <div class="absolute bottom-20 right-20 w-32 h-32 bg-red-300 rounded-full blur-xl"></div>
                    <div class="absolute top-1/2 left-1/3 w-16 h-16 bg-orange-300 rounded-full blur-lg"></div>
                </div>

                <div class="max-w-7xl mx-auto relative z-10">
                    <!-- Header -->
                    <div class="text-center mb-12">
                        <h3 class="text-5xl font-bold mb-4 text-gray-800 tracking-tight">
                            Get In <span class="text-orange-600">Touch</span>
                        </h3>
                        <p class="text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed">
                            We'd love to hear from you. Send us a message and we'll get back to you shortly.
                        </p>
                        <div class="w-24 h-1 bg-gradient-to-r from-orange-500 to-red-500 mx-auto mt-6 rounded-full"></div>
                    </div>

                    <div class="grid lg:grid-cols-3 gap-8">
                        <!-- Contact Information Cards -->
                        <div class="lg:col-span-1 space-y-6">
                            <!-- Phone Card -->
                            <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl shadow-lg border border-white/20 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                                <div class="flex items-center space-x-4">
                                    <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-orange-700 text-white rounded-xl flex items-center justify-center shadow-lg">
                                        <i class="fas fa-phone text-xl"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="text-lg font-bold text-gray-800">Phone</h4>
                                        <p class="text-gray-600 text-sm mb-2">{{ $siteConfig['business']['phone'] }}</p>
                                        <a href="tel:{{ $siteConfig['business']['phone'] }}" class="inline-flex items-center text-orange-600 hover:text-orange-700 font-semibold text-sm transition-colors">
                                            Call us <i class="fas fa-arrow-right ml-1 text-xs"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Email Card -->
                            <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl shadow-lg border border-white/20 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                                <div class="flex items-center space-x-4">
                                    <div class="w-14 h-14 bg-gradient-to-br from-orange-500 to-red-500 text-white rounded-xl flex items-center justify-center shadow-lg">
                                        <i class="fas fa-envelope text-xl"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="text-lg font-bold text-gray-800">Email</h4>
                                        <p class="text-gray-600 text-sm mb-2 break-all">{{ $siteConfig['business']['email'] }}</p>
                                        <a href="mailto:{{ $siteConfig['business']['email'] }}" class="inline-flex items-center text-orange-600 hover:text-orange-700 font-semibold text-sm transition-colors">
                                            Email us <i class="fas fa-arrow-right ml-1 text-xs"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- WhatsApp Card -->
                            <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl shadow-lg border border-white/20 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                                <div class="flex items-center space-x-4">
                                    <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-green-600 text-white rounded-xl flex items-center justify-center shadow-lg">
                                        <i class="fab fa-whatsapp text-xl"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="text-lg font-bold text-gray-800">WhatsApp</h4>
                                        <p class="text-gray-600 text-sm mb-2">{{ $siteConfig['business']['whatsapp'] }}</p>
                                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $siteConfig['business']['whatsapp']) }}" target="_blank" class="inline-flex items-center text-orange-600 hover:text-orange-700 font-semibold text-sm transition-colors">
                                            Message us <i class="fas fa-arrow-right ml-1 text-xs"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Instagram Card -->
                            <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl shadow-lg border border-white/20 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                                <div class="flex items-center space-x-4">
                                    <div class="w-14 h-14 bg-gradient-to-br from-pink-500 to-purple-600 text-white rounded-xl flex items-center justify-center shadow-lg">
                                        <i class="fab fa-instagram text-xl"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="text-lg font-bold text-gray-800">Instagram</h4>
                                        <p class="text-gray-600 text-sm mb-2">@metora.in</p>
                                        <a href="{{ $siteConfig['business']['instagram'] }}" target="_blank" class="inline-flex items-center text-orange-600 hover:text-orange-700 font-semibold text-sm transition-colors">
                                            Follow us <i class="fas fa-arrow-right ml-1 text-xs"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Address Card -->
                            <div class="bg-white/80 backdrop-blur-sm p-6 rounded-2xl shadow-lg border border-white/20 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                                <div class="flex items-start space-x-4">
                                    <div class="w-14 h-14 bg-gradient-to-br from-red-500 to-pink-500 text-white rounded-xl flex items-center justify-center shadow-lg flex-shrink-0">
                                        <i class="fas fa-map-marker-alt text-xl"></i>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="text-lg font-bold text-gray-800">Address</h4>
                                        <p class="text-gray-600 text-sm mb-2 leading-relaxed">{{ $siteConfig['business']['address'] }}</p>
                                        <a href="#" class="inline-flex items-center text-orange-600 hover:text-orange-700 font-semibold text-sm transition-colors">
                                            Get directions <i class="fas fa-arrow-right ml-1 text-xs"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Form -->
                        <div class="lg:col-span-2">
                            <div class="bg-white/90 backdrop-blur-sm p-8 lg:p-12 rounded-3xl shadow-2xl border border-white/20 h-full">
                                <div class="mb-8">
                                    <h4 class="text-3xl font-bold text-gray-800 mb-3">Send us a message</h4>
                                    <p class="text-gray-600">Fill out the form below and we'll get back to you as soon as possible.</p>
                                </div>
                                
                                <form class="space-y-6">
                                    <div class="grid md:grid-cols-2 gap-6">
                                        <div class="group">
                                            <label class="block text-sm font-semibold text-gray-700 mb-2 transition-colors group-focus-within:text-orange-600">Name *</label>
                                            <input type="text" required class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-0 focus:border-orange-500 transition-all duration-300 bg-gray-50 focus:bg-white hover:border-gray-300">
                                        </div>
                                        <div class="group">
                                            <label class="block text-sm font-semibold text-gray-700 mb-2 transition-colors group-focus-within:text-orange-600">Email *</label>
                                            <input type="email" required class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-0 focus:border-orange-500 transition-all duration-300 bg-gray-50 focus:bg-white hover:border-gray-300">
                                        </div>
                                    </div>
                                    
                                    <div class="group">
                                        <label class="block text-sm font-semibold text-gray-700 mb-2 transition-colors group-focus-within:text-orange-600">Event Type</label>
                                        <select class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-0 focus:border-orange-500 transition-all duration-300 bg-gray-50 focus:bg-white hover:border-gray-300 appearance-none cursor-pointer">
                                            <option>Wedding</option>
                                            <option>Corporate Event</option>
                                            <option>Birthday Party</option>
                                            <option>Holiday Celebration</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                    
                                    <div class="group">
                                        <label class="block text-sm font-semibold text-gray-700 mb-2 transition-colors group-focus-within:text-orange-600">Message *</label>
                                        <textarea rows="5" required placeholder="Tell us about your event requirements..." class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:outline-none focus:ring-0 focus:border-orange-500 transition-all duration-300 bg-gray-50 focus:bg-white hover:border-gray-300 resize-none"></textarea>
                                    </div>
                                    
                                    <div class="pt-4">
                                        <button type="submit" class="w-full bg-gradient-to-r from-orange-600 to-red-600 hover:from-orange-700 hover:to-red-700 text-white py-4 px-8 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-[1.02] hover:shadow-xl active:scale-[0.98] flex items-center justify-center space-x-2">
                                            <span>Send Message</span>
                                            <i class="fas fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </main>

@include('footer')