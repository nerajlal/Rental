<?php
$page = 'products';
include_once 'config.php';
include 'head.php';
?>

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
                            <svg class="w-16 h-16 text-pink-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                            </svg>
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
                            <svg class="w-16 h-16 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
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
                            <svg class="w-16 h-16 text-purple-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
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
                            <svg class="w-16 h-16 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l.09.26 2.78 8.57h9.03l-7.31 5.31 2.78 8.57L12 19.4l-7.37 5.31 2.78-8.57L.1 10.83h9.03L12 2z"/>
                            </svg>
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
                            <svg class="w-16 h-16 text-yellow-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9.5 3A6.5 6.5 0 0 1 16 9.5c0 1.61-.59 3.09-1.56 4.23l.27.27h.79l5 5-1.5 1.5-5-5v-.79l-.27-.27A6.516 6.516 0 0 1 9.5 16a6.5 6.5 0 0 1 0-13zm0 2C7 5 5 7 5 9.5S7 14 9.5 14 14 12 14 9.5 12 5 9.5 5z"/>
                            </svg>
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
                            <svg class="w-16 h-16 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                            </svg>
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
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
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

<?php include 'footer.php'; ?>
