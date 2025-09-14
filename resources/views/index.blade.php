@include('head')

    <!-- Main Content -->
    <main class="pt-16" id="main-content">
        <!-- Hero Section -->
        <section class="bg-gradient-to-br from-primary to-primaryHover text-white py-20 px-4 relative overflow-hidden">
            <!-- Floating decorative elements -->
            <div class="absolute inset-0 opacity-20">
                <div class="absolute top-10 left-10 w-4 h-4 bg-white rounded-full animate-pulse"></div>
                <div class="absolute top-32 right-20 w-6 h-6 bg-white/70 rounded-full animate-bounce"></div>
                <div class="absolute bottom-20 left-1/4 w-3 h-3 bg-white/50 rounded-full animate-pulse"></div>
                <div class="absolute bottom-32 right-1/3 w-5 h-5 bg-white/60 rounded-full animate-bounce"></div>
            </div>
            
            <div class="max-w-7xl mx-auto text-center relative z-10">
                <h2 class="text-4xl md:text-6xl font-bold mb-6" id="hero-title">Transform Your Events with Elegant Decorations</h2>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Premium ornament rentals for weddings, corporate events, parties, and special occasions. Make every moment memorable with our exquisite collection.</p>
                <div class="space-y-4 md:space-y-0 md:space-x-4 md:flex md:justify-center">
                    <button class="bg-white text-primary px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300 w-full md:w-auto">Browse Products</button>
                    <button class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-primary transition duration-300 w-full md:w-auto">Get Quote</button>
                </div>
                
                <!-- Stats counter -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-16 max-w-4xl mx-auto">
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold mb-2">500+</div>
                        <div class="text-sm md:text-base opacity-90">Happy Clients</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold mb-2">1000+</div>
                        <div class="text-sm md:text-base opacity-90">Events Decorated</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold mb-2">200+</div>
                        <div class="text-sm md:text-base opacity-90">Premium Items</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold mb-2">5+</div>
                        <div class="text-sm md:text-base opacity-90">Years Experience</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Products Section -->
        <section class="py-20 px-4 bg-gray-50">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h3 class="text-4xl md:text-5xl font-bold mb-4 text-gray-800">Our Favorite <span class="text-primary">Collections</span></h3>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Discover our most popular and stunning decorative pieces that will transform your events into unforgettable experiences.</p>
                    <div class="w-24 h-1 bg-gradient-to-r from-primary to-red-500 mx-auto mt-6 rounded-full"></div>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
                        <div class="relative h-64 bg-gradient-to-br from-pink-200 to-purple-300 overflow-hidden">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <i class="fas fa-crown text-6xl text-white opacity-80 group-hover:scale-110 transition-transform duration-300"></i>
                            </div>
                            <div class="absolute top-4 right-4 bg-primary text-white px-3 py-1 rounded-full text-sm font-semibold">Popular</div>
                        </div>
                        <div class="p-6">
                            <h4 class="text-2xl font-bold mb-2 text-gray-800">Luxury Wedding Sets</h4>
                            <p class="text-gray-600 mb-4">Elegant centerpieces, crystal chandeliers, and premium table settings for your perfect wedding day.</p>
                            <div class="flex items-center justify-between">
                                <span class="text-primary font-bold text-xl">From ₹2,500/day</span>
                                <a href="products">
                                    <button class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-primaryHover transition duration-300">View Details</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
                        <div class="relative h-64 bg-gradient-to-br from-green-200 to-emerald-300 overflow-hidden">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <i class="fas fa-birthday-cake text-6xl text-white opacity-80 group-hover:scale-110 transition-transform duration-300"></i>
                            </div>
                            <div class="absolute top-4 right-4 bg-emerald-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Trending</div>
                        </div>
                        <div class="p-6">
                            <h4 class="text-2xl font-bold mb-2 text-gray-800">Birthday Party Themes</h4>
                            <p class="text-gray-600 mb-4">Colorful balloon arrangements, themed decorations, and fun party essentials for memorable celebrations.</p>
                            <div class="flex items-center justify-between">
                                <span class="text-primary font-bold text-xl">From ₹1,200/day</span>
                                <a href="products">
                                    <button class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-primaryHover transition duration-300">View Details</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
                        <div class="relative h-64 bg-gradient-to-br from-yellow-200 to-orange-300 overflow-hidden">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <i class="fas fa-hands-praying text-6xl text-white opacity-80 group-hover:scale-110 transition-transform duration-300"></i>
                            </div>
                            <div class="absolute top-4 right-4 bg-yellow-500 text-white px-3 py-1 rounded-full text-sm font-semibold">New</div>
                        </div>
                        <div class="p-6">
                            <h4 class="text-2xl font-bold mb-2 text-gray-800">Traditional Ceremonies</h4>
                            <p class="text-gray-600 mb-4">Authentic and ornate decorations to honor timeless traditions.</p>
                            <div class="flex items-center justify-between">
                                <span class="text-primary font-bold text-xl">From ₹1,800/day</span>
                                <a href="products">
                                    <button class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-primaryHover transition duration-300">View Details</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-12">
                    <a href="/products">
                        <button class="bg-gradient-to-r from-primary to-red-600 text-white px-8 py-4 rounded-xl font-bold text-lg hover:from-primaryHover hover:to-red-700 transition-all duration-300 transform hover:scale-105 shadow-lg">
                            View All Products
                        </button>
                    </a>
                </div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section class="py-20 px-4 bg-white">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h3 class="text-4xl md:text-5xl font-bold mb-4 text-gray-800">How It <span class="text-primary">Works</span></h3>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Simple steps to get the perfect decorations for your event</p>
                    <div class="w-24 h-1 bg-gradient-to-r from-primary to-red-500 mx-auto mt-6 rounded-full"></div>
                </div>

                <div class="grid md:grid-cols-4 gap-8">
                    <div class="text-center relative">
                        <div class="w-20 h-20 bg-gradient-to-br from-primary to-red-500 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold shadow-lg">
                            1
                        </div>
                        <h4 class="text-xl font-bold mb-4 text-gray-800">Browse & Select</h4>
                        <p class="text-gray-600">Explore our extensive collection of decorations and choose items that match your event theme and budget.</p>
                        <!-- Arrow for desktop -->
                        <div class="hidden md:block absolute top-10 -right-4 text-primary text-2xl">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>

                    <div class="text-center relative">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold shadow-lg">
                            2
                        </div>
                        <h4 class="text-xl font-bold mb-4 text-gray-800">Get Quote</h4>
                        <p class="text-gray-600">Contact us with your requirements and receive a personalized quote with transparent pricing for your selected items.</p>
                        <div class="hidden md:block absolute top-10 -right-4 text-blue-300 text-2xl">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>

                    <div class="text-center relative">
                        <div class="w-20 h-20 bg-gradient-to-br from-emerald-500 to-green-500 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold shadow-lg">
                            3
                        </div>
                        <h4 class="text-xl font-bold mb-4 text-gray-800">Book & Confirm</h4>
                        <p class="text-gray-600">Confirm your booking with advance payment and schedule delivery and setup according to your event timeline.</p>
                        <div class="hidden md:block absolute top-10 -right-4 text-emerald-300 text-2xl">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>

                    <div class="text-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold shadow-lg">
                            4
                        </div>
                        <h4 class="text-xl font-bold mb-4 text-gray-800">Enjoy Your Event</h4>
                        <p class="text-gray-600">Sit back and enjoy your perfectly decorated event while we handle setup, maintenance, and pickup after the event.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-16 px-4 bg-white">
            <div class="max-w-7xl mx-auto">
                <h3 class="text-3xl font-bold text-center mb-12 text-gray-800">Why Choose Our Rental Service?</h3>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center transition-all duration-300 ease-in-out hover:-translate-y-1 hover:shadow-xl p-6 rounded-lg bg-gray-50">
                        <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-gem text-3xl text-primary"></i>
                        </div>
                        <h4 class="text-xl font-semibold mb-2">Premium Quality</h4>
                        <p class="text-gray-600">Hand-selected ornaments and decorations crafted with attention to detail for your special occasions.</p>
                    </div>
                    <div class="text-center transition-all duration-300 ease-in-out hover:-translate-y-1 hover:shadow-xl p-6 rounded-lg bg-gray-50">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-clock text-3xl text-blue-600"></i>
                        </div>
                        <h4 class="text-xl font-semibold mb-2">Flexible Rental</h4>
                        <p class="text-gray-600">Choose rental periods that suit your event timeline, from single day to extended celebrations.</p>
                    </div>
                    <div class="text-center transition-all duration-300 ease-in-out hover:-translate-y-1 hover:shadow-xl p-6 rounded-lg bg-gray-50">
                        <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-headset text-3xl text-emerald-600"></i>
                        </div>
                        <h4 class="text-xl font-semibold mb-2">Expert Support</h4>
                        <p class="text-gray-600">Our team provides consultation and support to help you create the perfect atmosphere for your event.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Customer Testimonials Section -->
        <section class="py-20 px-4 bg-gradient-to-br from-primary/10 to-red-50">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h3 class="text-4xl md:text-5xl font-bold mb-4 text-gray-800">What Our <span class="text-primary">Clients Say</span></h3>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Don't just take our word for it - hear from our satisfied customers</p>
                    <div class="w-24 h-1 bg-gradient-to-r from-primary to-red-500 mx-auto mt-6 rounded-full"></div>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Testimonial 1 -->
                    <div class="bg-white/80 backdrop-blur-sm p-8 rounded-2xl shadow-lg border border-white/20 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-primary to-red-400 rounded-full flex items-center justify-center text-white font-bold text-lg">
                                P
                            </div>
                            <div class="ml-4">
                                <h4 class="font-bold text-gray-800">Priya Sharma</h4>
                                <p class="text-gray-600 text-sm">Wedding Client</p>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                        </div>
                        <p class="text-gray-700 italic">"Absolutely stunning decorations for our wedding! The team was professional, punctual, and everything was exactly as promised. Our guests couldn't stop complimenting the beautiful setup."</p>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="bg-white/80 backdrop-blur-sm p-8 rounded-2xl shadow-lg border border-white/20 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-indigo-400 rounded-full flex items-center justify-center text-white font-bold text-lg">
                                R
                            </div>
                            <div class="ml-4">
                                <h4 class="font-bold text-gray-800">Rajesh Kumar</h4>
                                <p class="text-gray-600 text-sm">Corporate Event</p>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                        </div>
                        <p class="text-gray-700 italic">"Perfect for our company's annual event. The modern decor and professional setup impressed all our clients and employees. Great value for money and excellent service!"</p>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="bg-white/80 backdrop-blur-sm p-8 rounded-2xl shadow-lg border border-white/20 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-emerald-400 to-green-400 rounded-full flex items-center justify-center text-white font-bold text-lg">
                                A
                            </div>
                            <div class="ml-4">
                                <h4 class="font-bold text-gray-800">Anita Patel</h4>
                                <p class="text-gray-600 text-sm">Birthday Party</p>
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                        </div>
                        <p class="text-gray-700 italic">"Made my daughter's birthday party magical! The colorful decorations and attention to detail were amazing. The team went above and beyond to make it special."</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Event Categories Section -->
        <section class="py-20 px-4 bg-white">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h3 class="text-4xl md:text-5xl font-bold mb-4 text-gray-800">Perfect for Every <span class="text-primary">Occasion</span></h3>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">From intimate gatherings to grand celebrations, we have the perfect jewelry for every event.</p>
                    <div class="w-24 h-1 bg-gradient-to-r from-primary to-red-500 mx-auto mt-6 rounded-full"></div>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                    <div class="text-center group cursor-pointer">
                        <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-br from-pink-100 to-red-100 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:shadow-lg transition-all duration-300">
                            <i class="fas fa-gem text-3xl text-pink-600"></i>
                        </div>
                        <h4 class="font-semibold text-gray-800 group-hover:text-primary transition-colors">Wedding Jewelry</h4>
                    </div>

                    <div class="text-center group cursor-pointer">
                        <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-br from-blue-100 to-indigo-100 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:shadow-lg transition-all duration-300">
                            <i class="fas fa-hand-holding-heart text-3xl text-blue-600"></i>
                        </div>
                        <h4 class="font-semibold text-gray-800 group-hover:text-primary transition-colors">Engagement Jewelry</h4>
                    </div>

                    <div class="text-center group cursor-pointer">
                        <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-br from-purple-100 to-pink-100 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:shadow-lg transition-all duration-300">
                            <i class="fas fa-cocktail text-3xl text-purple-600"></i>
                        </div>
                        <h4 class="font-semibold text-gray-800 group-hover:text-primary transition-colors">Party Jewelry</h4>
                    </div>

                    <div class="text-center group cursor-pointer">
                        <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-br from-green-100 to-emerald-100 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:shadow-lg transition-all duration-300">
                            <i class="fas fa-gopuram text-3xl text-green-600"></i>
                        </div>
                        <h4 class="font-semibold text-gray-800 group-hover:text-primary transition-colors">Traditional Jewelry</h4>
                    </div>

                    <div class="text-center group cursor-pointer">
                        <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-br from-yellow-100 to-orange-100 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:shadow-lg transition-all duration-300">
                            <i class="fas fa-crown text-3xl text-yellow-600"></i>
                        </div>
                        <h4 class="font-semibold text-gray-800 group-hover:text-primary transition-colors">Bridal Jewelry Sets</h4>
                    </div>

                    <div class="text-center group cursor-pointer">
                        <div class="w-20 h-20 mx-auto mb-4 bg-gradient-to-br from-green-100 to-teal-100 rounded-2xl flex items-center justify-center group-hover:scale-110 group-hover:shadow-lg transition-all duration-300">
                            <i class="fas fa-shopping-bag text-3xl text-teal-600"></i>
                        </div>
                        <h4 class="font-semibold text-gray-800 group-hover:text-primary transition-colors">Daily Wear Jewelry</h4>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->  

        <div class="text-center mt-16">
            <div class="bg-gradient-to-r from-primary/10 to-red-100 rounded-2xl p-8 max-w-4xl mx-auto">
                        <h4 class="text-2xl font-bold text-gray-800 mb-4">Flexible & Transparent Pricing</h4>
                        <p class="text-gray-700 text-lg mb-6">Every event is unique, and so are our prices. We offer completely customized quotes based on your specific needs, event size, location, and duration. No hidden fees, no surprises.</p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $siteConfig['business']['whatsapp']) }}" target="_blank">
                                <button class="bg-primary text-white px-8 py-3 rounded-xl font-semibold hover:bg-primaryHover transition duration-300">
                                    Get Custom Quote
                                </button>
                            </a>
                            <a href="products">
                                <button class="bg-transparent border-2 border-primary text-primary px-8 py-3 rounded-xl font-semibold hover:bg-primary hover:text-white transition duration-300">
                                    View All Items & Prices
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            <div>.</div>

        @include('footer')