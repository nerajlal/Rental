<?php
$page = 'home';
include_once 'config.php';
include 'head.php';
?>

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
                            <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold mb-2">Premium Quality</h4>
                        <p class="text-gray-600">Hand-selected ornaments and decorations crafted with attention to detail for your special occasions.</p>
                    </div>
                    <div class="text-center card-hover p-6 rounded-lg bg-gray-50">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold mb-2">Flexible Rental</h4>
                        <p class="text-gray-600">Choose rental periods that suit your event timeline, from single day to extended celebrations.</p>
                    </div>
                    <div class="text-center card-hover p-6 rounded-lg bg-gray-50">
                        <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
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
                            <svg class="w-16 h-16 text-orange-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                </svg>
                            </div>
                            <h4 class="text-xl font-semibold mb-2">Event Specialists</h4>
                            <p class="text-gray-600">Our team of experienced event specialists help you choose the perfect decorations for your occasion.</p>
                        </div>
                        <div class="text-center">
                            <div class="w-32 h-32 bg-gradient-to-br from-blue-200 to-indigo-200 rounded-full mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-16 h-16 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                            </div>
                            <h4 class="text-xl font-semibold mb-2">Design Consultants</h4>
                            <p class="text-gray-600">Professional designers who understand color schemes, themes, and spatial arrangements to maximize visual impact.</p>
                        </div>
                        <div class="text-center">
                            <div class="w-32 h-32 bg-gradient-to-br from-emerald-200 to-teal-200 rounded-full mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-16 h-16 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                            </div>
                            <h4 class="text-xl font-semibold mb-2">Logistics Team</h4>
                            <p class="text-gray-600">Reliable delivery and setup professionals ensure your decorations arrive on time and are perfectly arranged.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section class="py-20 px-4 bg-gradient-to-r from-orange-50 to-red-100">
                <div class="max-w-4xl mx-auto">
                    <h3 class="text-4xl font-bold text-center mb-4 text-gray-800">Get In Touch</h3>
                    <p class="text-lg text-center text-gray-600 mb-12">We'd love to hear from you. Send us a message and we'll get back to you shortly.</p>
                    <div class="grid md:grid-cols-2 gap-12">
                        <div class="space-y-8">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-orange-600 text-white rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-xl font-semibold">Phone</h4>
                                    <p class="text-gray-700 mt-1"><?php echo $siteConfig['business']['phone']; ?></p>
                                    <a href="tel:<?php echo $siteConfig['business']['phone']; ?>" class="text-orange-600 hover:text-orange-700 font-medium">Call us</a>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-orange-600 text-white rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-xl font-semibold">Email</h4>
                                    <p class="text-gray-700 mt-1"><?php echo $siteConfig['business']['email']; ?></p>
                                    <a href="mailto:<?php echo $siteConfig['business']['email']; ?>" class="text-orange-600 hover:text-orange-700 font-medium">Email us</a>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-orange-600 text-white rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.894 11.892-1.99 0-3.902-.539-5.587-1.52l-6.19 1.669zm4.99-6.983c.282-.14.574-.223.869-.223.296 0 .587.083.851.246 1.45.891 3.097 1.37 4.792 1.371 5.438.002 9.875-4.434 9.877-9.876.002-5.44-4.434-9.875-9.876-9.875-5.439 0-9.875 4.435-9.877 9.876 0 1.791.49 3.515 1.38 4.99l.11.192-1.012 3.688 3.743-1.002.176.103z"/></svg>
                                </div>
                                <div>
                                    <h4 class="text-xl font-semibold">WhatsApp</h4>
                                    <p class="text-gray-700 mt-1"><?php echo $siteConfig['business']['whatsapp']; ?></p>
                                    <a href="https://wa.me/<?php echo preg_replace('/[^0-9]/', '', $siteConfig['business']['whatsapp']); ?>" target="_blank" class="text-orange-600 hover:text-orange-700 font-medium">Message us</a>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-orange-600 text-white rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.07 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.225-.148-4.771-1.664-4.919-4.919-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.225 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.689-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                                </div>
                                <div>
                                    <h4 class="text-xl font-semibold">Instagram</h4>
                                    <p class="text-gray-700 mt-1">@metora.in</p>
                                    <a href="<?php echo $siteConfig['business']['instagram']; ?>" target="_blank" class="text-orange-600 hover:text-orange-700 font-medium">Follow us</a>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-orange-600 text-white rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-xl font-semibold">Address</h4>
                                    <p class="text-gray-700 mt-1"><?php echo $siteConfig['business']['address']; ?></p>
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
            </section>
    </main>

<?php include 'footer.php'; ?>