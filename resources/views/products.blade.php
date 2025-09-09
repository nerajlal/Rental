@include('head')

    <!-- Main Content -->
    <main class="pt-16" id="main-content">
        <!-- Products Page -->
        <section class="py-20 px-4">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-4xl font-bold text-center mb-12 text-gray-800">Our Ornament Collection</h2>

                <!-- Categories -->
                <div class="flex flex-wrap justify-center gap-4 mb-12">
                    <button class="category-filter active bg-orange-600 text-white px-6 py-2 rounded-full font-medium" data-category="all">All Categories</button>
                    <button class="category-filter bg-gray-200 text-gray-700 hover:bg-gray-300 px-6 py-2 rounded-full font-medium transition duration-300" data-category="wedding">Wedding</button>
                    <button class="category-filter bg-gray-200 text-gray-700 hover:bg-gray-300 px-6 py-2 rounded-full font-medium transition duration-300" data-category="corporate">Corporate</button>
                    <button class="category-filter bg-gray-200 text-gray-700 hover:bg-gray-300 px-6 py-2 rounded-full font-medium transition duration-300" data-category="party">Party</button>
                    <button class="category-filter bg-gray-200 text-gray-700 hover:bg-gray-300 px-6 py-2 rounded-full font-medium transition duration-300" data-category="holiday">Holiday</button>
                </div>

                <!-- Product Grid -->
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <!-- Product 1 -->
                    <div class="product-card bg-white rounded-lg shadow-md overflow-hidden card-hover" data-category="wedding">
                        <div class="h-48 bg-gradient-to-br from-pink-100 to-rose-200 flex items-center justify-center">
                            <i class="fas fa-heart text-5xl text-pink-600"></i>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Elegant Wedding Centerpieces</h3>
                            <p class="text-gray-600 text-sm mb-3">Beautiful crystal and floral centerpieces perfect for wedding receptions.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-orange-600 font-bold">$45/day</span>
                                <button class="product-details bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm transition duration-300" data-product="wedding-centerpieces">View Details</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="product-card bg-white rounded-lg shadow-md overflow-hidden card-hover" data-category="corporate">
                        <div class="h-48 bg-gradient-to-br from-blue-100 to-indigo-200 flex items-center justify-center">
                            <i class="fas fa-lightbulb text-5xl text-blue-600"></i>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Professional Event Lighting</h3>
                            <p class="text-gray-600 text-sm mb-3">Sophisticated lighting solutions for corporate events and conferences.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-orange-600 font-bold">$65/day</span>
                                <button class="product-details bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm transition duration-300" data-product="corporate-lighting">View Details</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="product-card bg-white rounded-lg shadow-md overflow-hidden card-hover" data-category="party">
                        <div class="h-48 bg-gradient-to-br from-purple-100 to-pink-200 flex items-center justify-center">
                            <i class="fas fa-birthday-cake text-5xl text-purple-600"></i>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Party Balloon Arrangements</h3>
                            <p class="text-gray-600 text-sm mb-3">Colorful and creative balloon displays for birthdays and celebrations.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-orange-600 font-bold">$35/day</span>
                                <button class="product-details bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm transition duration-300" data-product="party-balloons">View Details</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="product-card bg-white rounded-lg shadow-md overflow-hidden card-hover" data-category="holiday">
                        <div class="h-48 bg-gradient-to-br from-green-100 to-red-200 flex items-center justify-center">
                            <i class="fas fa-sleigh text-5xl text-green-600"></i>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Holiday Decorations</h3>
                            <p class="text-gray-600 text-sm mb-3">Festive ornaments and decorations for Christmas and seasonal celebrations.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-orange-600 font-bold">$25/day</span>
                                <button class="product-details bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm transition duration-300" data-product="holiday-decor">View Details</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 5 -->
                    <div class="product-card bg-white rounded-lg shadow-md overflow-hidden card-hover" data-category="wedding">
                        <div class="h-48 bg-gradient-to-br from-yellow-100 to-orange-200 flex items-center justify-center">
                            <i class="fas fa-camera-retro text-5xl text-yellow-600"></i>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Vintage Wedding Decor</h3>
                            <p class="text-gray-600 text-sm mb-3">Classic and vintage-inspired ornaments for timeless wedding celebrations.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-orange-600 font-bold">$55/day</span>
                                <button class="product-details bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm transition duration-300" data-product="vintage-wedding">View Details</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 6 -->
                    <div class="product-card bg-white rounded-lg shadow-md overflow-hidden card-hover" data-category="corporate">
                        <div class="h-48 bg-gradient-to-br from-gray-100 to-blue-200 flex items-center justify-center">
                            <i class="fas fa-briefcase text-5xl text-gray-600"></i>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-lg mb-2">Executive Table Settings</h3>
                            <p class="text-gray-600 text-sm mb-3">Premium table decorations for business dinners and corporate galas.</p>
                            <div class="flex justify-between items-center">
                                <span class="text-orange-600 font-bold">$75/day</span>
                                <button class="product-details bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm transition duration-300" data-product="executive-tables">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Product Detail Modal -->
        <div id="product-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
            <div class="bg-white rounded-lg max-w-2xl w-full max-h-screen overflow-y-auto">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 id="modal-title" class="text-2xl font-bold text-gray-800"></h3>
                        <button id="close-modal" class="text-gray-500 hover:text-gray-700">
                            <i class="fas fa-times w-6 h-6"></i>
                        </button>
                    </div>
                    <div id="modal-content" class="space-y-4">
                        <!-- Content will be populated by JavaScript -->
                    </div>
                    <div class="mt-6 flex gap-4">
                        <button class="bg-orange-600 hover:bg-orange-700 text-white px-6 py-2 rounded-lg font-medium transition duration-300 flex-1">Request Quote</button>
                        <button class="border-2 border-gray-300 text-gray-700 hover:bg-gray-50 px-6 py-2 rounded-lg font-medium transition duration-300 flex-1">Add to Wishlist</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

@include('footer')
