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
                    @php
                        $categories = $products->pluck('category')->unique();
                    @endphp
                    @foreach($categories as $category)
                        @if($category)
                            <button class="category-filter bg-gray-200 text-gray-700 hover:bg-gray-300 px-6 py-2 rounded-full font-medium transition duration-300" data-category="{{ strtolower(str_replace(' ', '-', $category)) }}">{{ $category }}</button>
                        @endif
                    @endforeach
                </div>

                <!-- Product Grid -->
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    @forelse ($products as $product)
                        <div class="product-card bg-white rounded-lg shadow-md overflow-hidden card-hover" data-category="{{ strtolower(str_replace(' ', '-', $product->category)) }}">
                            <div class="h-48 bg-gray-200 flex items-center justify-center">
                                <img src="{{ $product->images->first() ? route('product.image', ['imageName' => basename($product->images->first()->image_path)]) : 'https://via.placeholder.com/150/d1d5db/4b5563?text=No+Image' }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-lg mb-2">{{ $product->name }}</h3>
                                <p class="text-gray-600 text-sm mb-3">{{ Str::limit($product->description, 100) }}</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-orange-600 font-bold">${{ number_format($product->price, 2) }}/day</span>
                                    <button class="product-details bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm transition duration-300" data-product="{{ $product->id }}">View Details</button>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-gray-500 col-span-full text-center">No products available at the moment. Please check back later.</p>
                    @endforelse
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
