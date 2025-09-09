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
            <section class="py-20 px-4 bg-gradient-to-r from-orange-50 to-red-100">
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
                                    <p class="text-gray-700 mt-1"><?php echo $siteConfig['business']['phone']; ?></p>
                                    <a href="tel:<?php echo $siteConfig['business']['phone']; ?>" class="text-orange-600 hover:text-orange-700 font-medium">Call us</a>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-orange-600 text-white rounded-full flex items-center justify-center">
                                    <i class="fas fa-envelope text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="text-xl font-semibold">Email</h4>
                                    <p class="text-gray-700 mt-1"><?php echo $siteConfig['business']['email']; ?></p>
                                    <a href="mailto:<?php echo $siteConfig['business']['email']; ?>" class="text-orange-600 hover:text-orange-700 font-medium">Email us</a>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-orange-600 text-white rounded-full flex items-center justify-center">
                                    <i class="fab fa-whatsapp text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="text-xl font-semibold">WhatsApp</h4>
                                    <p class="text-gray-700 mt-1"><?php echo $siteConfig['business']['whatsapp']; ?></p>
                                    <a href="https://wa.me/<?php echo preg_replace('/[^0-9]/', '', $siteConfig['business']['whatsapp']); ?>" target="_blank" class="text-orange-600 hover:text-orange-700 font-medium">Message us</a>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-orange-600 text-white rounded-full flex items-center justify-center">
                                    <i class="fab fa-instagram text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="text-xl font-semibold">Instagram</h4>
                                    <p class="text-gray-700 mt-1">@metora.in</p>
                                    <a href="<?php echo $siteConfig['business']['instagram']; ?>" target="_blank" class="text-orange-600 hover:text-orange-700 font-medium">Follow us</a>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-12 h-12 bg-orange-600 text-white rounded-full flex items-center justify-center">
                                    <i class="fas fa-map-marker-alt text-xl"></i>
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