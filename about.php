<?php
$page = 'about';
include_once 'config.php';
include 'head.php';
?>

    <!-- Main Content -->
    <main class="pt-16" id="main-content">
        <!-- About Page -->
        <!-- Hero Section -->
        <section class="bg-gradient-to-r from-orange-600 to-orange-700 text-white py-20 px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">About Our Rental Service</h2>
                <p class="text-xl md:text-2xl">We specialize in providing premium ornament rental solutions to make your events truly unforgettable.</p>
            </div>
        </section>

        <!-- Story Section -->
        <section class="py-16 px-4 bg-white">
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h3 class="text-3xl font-bold mb-6 text-gray-800">Our Story</h3>
                        <p class="text-gray-600 mb-6">Founded with a passion for creating memorable experiences, our ornament rental service has been transforming events for over a decade. We understand that every celebration is unique and deserves decorations that reflect its special character.</p>
                        <p class="text-gray-600 mb-6">From intimate gatherings to grand corporate events, we've curated an extensive collection of high-quality ornaments and decorations that cater to diverse themes and styles. Our commitment to excellence has made us the trusted choice for event planners and individuals alike.</p>
                        <p class="text-gray-600">We believe that beautiful decorations shouldn't be a luxury, which is why we offer flexible rental options that make premium ornaments accessible for any budget.</p>
                    </div>
                    <div class="bg-gradient-to-br from-orange-100 to-pink-100 rounded-lg p-8 text-center">
                        <svg class="w-24 h-24 mx-auto mb-4 text-orange-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                        <h4 class="text-2xl font-bold text-gray-800 mb-2">10+ Years</h4>
                        <p class="text-gray-600">of Creating Beautiful Events</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Values Section -->
        <section class="py-16 px-4 bg-gray-50">
            <div class="max-w-7xl mx-auto">
                <h3 class="text-3xl font-bold text-center mb-12 text-gray-800">Our Values</h3>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center p-6">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold mb-3 text-gray-800">Quality First</h4>
                        <p class="text-gray-600">We carefully select and maintain every piece in our collection to ensure the highest quality for your events.</p>
                    </div>
                    <div class="text-center p-6">
                        <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20a3 3 0 01-3-3v-2a3 3 0 013-3 3 3 0 013 3v2a3 3 0 01-3 3z"></path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold mb-3 text-gray-800">Customer Focused</h4>
                        <p class="text-gray-600">Your satisfaction is our priority. We work closely with you to understand your vision and bring it to life.</p>
                    </div>
                    <div class="text-center p-6">
                        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h4 class="text-xl font-semibold mb-3 text-gray-800">Innovation</h4>
                        <p class="text-gray-600">We continuously expand our collection with the latest trends and timeless classics to meet evolving needs.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include 'footer.php'; ?>
