@include('head')

    <!-- Main Content -->
    <main class="pt-16" id="main-content">
        <!-- Contact Page -->
        <section class="py-20 px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-gray-800">Contact Us</h2>
                    <p class="text-gray-600 mt-4">We'd love to hear from you! Whether you have a question about our products, pricing, or anything else, our team is ready to answer all your questions.</p>
                </div>

                <div class="grid md:grid-cols-2 gap-12">
                    <!-- Contact Form -->
                    <div class="bg-white p-8 rounded-lg shadow-md">
                        <h3 class="text-2xl font-semibold mb-6">Send us a Message</h3>

                        @if(session('success'))
                            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                                <p class="font-bold">Success</p>
                                <p>{{ session('success') }}</p>
                            </div>
                        @endif

                        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                            @csrf
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                                <input type="text" name="name" id="name" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                                <input type="email" name="email" id="email" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500">
                            </div>
                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                                <input type="text" name="subject" id="subject" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500">
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                                <textarea name="message" id="message" rows="5" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="w-full bg-orange-600 hover:bg-orange-700 text-white font-bold py-3 px-4 rounded-md transition duration-300">Send Message</button>
                            </div>
                        </form>
                    </div>

                    <!-- Contact Information -->
                    <div class="space-y-6">
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h4 class="font-semibold text-lg flex items-center gap-3"><i class="fas fa-map-marker-alt text-orange-500"></i> Address</h4>
                            <p class="text-gray-600 mt-2">{{ $siteConfig['business']['address'] }}</p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h4 class="font-semibold text-lg flex items-center gap-3"><i class="fas fa-phone text-orange-500"></i> Phone</h4>
                            <p class="text-gray-600 mt-2"><a href="tel:{{ $siteConfig['business']['phone'] }}" class="hover:text-orange-600">{{ $siteConfig['business']['phone'] }}</a></p>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h4 class="font-semibold text-lg flex items-center gap-3"><i class="fas fa-envelope text-orange-500"></i> Email</h4>
                            <p class="text-gray-600 mt-2"><a href="mailto:{{ $siteConfig['business']['email'] }}" class="hover:text-orange-600">{{ $siteConfig['business']['email'] }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@include('footer')
