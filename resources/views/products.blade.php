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
                                    <a href="{{ route('products.show', $product) }}" class="product-details bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm transition duration-300">View Details</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-gray-500 col-span-full text-center">No products available at the moment. Please check back later.</p>
                    @endforelse
                </div>
            </div>
        </section>
    </main>

@include('footer')
