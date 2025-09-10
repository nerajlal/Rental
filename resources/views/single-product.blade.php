@include('head')

    <!-- Main Content -->
    <main class="pt-16" id="main-content">
        <!-- Single Product Page -->
        <section class="py-12 px-4">
            <div class="max-w-7xl mx-auto">
                <div class="grid md:grid-cols-2 gap-12 items-start">
                    <!-- Product Image Gallery -->
                    <div>
                        <div class="bg-gray-200 rounded-lg mb-4">
                            <img id="main-product-image" src="{{ $product->images->first() ? route('product.image', ['imageName' => basename($product->images->first()->image_path)]) : 'https://via.placeholder.com/600x600/d1d5db/4b5563?text=No+Image' }}" alt="{{ $product->name }}" class="w-full h-auto object-cover rounded-lg">
                        </div>
                        @if($product->images->count() > 1)
                            <div class="grid grid-cols-5 gap-2">
                                @foreach($product->images as $image)
                                    <div>
                                        <img src="{{ route('product.image', ['imageName' => basename($image->image_path)]) }}" alt="{{ $product->name }} thumbnail" class="w-full h-auto object-cover rounded-md cursor-pointer border-2 border-transparent hover:border-orange-500 transition">
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <!-- Product Details -->
                    <div>
                        <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $product->name }}</h1>

                        <div class="flex items-center mb-4">
                            <span class="text-3xl font-bold text-orange-600">${{ number_format($product->price, 2) }}</span>
                            <span class="text-xl text-gray-500 ml-2">/ day</span>
                        </div>

                        <div class="mb-6">
                            <h3 class="text-lg font-semibold text-gray-800 mb-2">Description</h3>
                            <p class="text-gray-600 leading-relaxed">{{ $product->description }}</p>
                        </div>

                        <div class="grid grid-cols-2 gap-4 mb-6 text-sm">
                            <div>
                                <h4 class="font-semibold text-gray-700">Category</h4>
                                <p class="text-gray-600">{{ $product->category }}</p>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-700">Subcategory</h4>
                                <p class="text-gray-600">{{ $product->subcategory }}</p>
                            </div>
                            @if($product->weight)
                            <div>
                                <h4 class="font-semibold text-gray-700">Weight</h4>
                                <p class="text-gray-600">{{ $product->weight }}</p>
                            </div>
                            @endif
                            <div>
                                <h4 class="font-semibold text-gray-700">Stock</h4>
                                <p class="text-gray-600">{{ $product->stock > 0 ? 'In Stock' : 'Out of Stock' }}</p>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex flex-col sm:flex-row gap-4">
                            <button onclick="addToCart({{ $product->id }})" class="w-full bg-orange-600 hover:bg-orange-700 text-white px-8 py-3 rounded-lg font-semibold text-lg transition duration-300 flex items-center justify-center gap-2">
                                <i class="fas fa-shopping-cart"></i>
                                <span>Add to Cart</span>
                            </button>
                            <button onclick="addToWishlist({{ $product->id }})" class="w-full border-2 border-gray-300 text-gray-700 hover:bg-gray-100 px-8 py-3 rounded-lg font-semibold text-lg transition duration-300 flex items-center justify-center gap-2">
                                <i class="far fa-heart"></i>
                                <span>Add to Wishlist</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Similar Products Section -->
        @if($similarProducts->isNotEmpty())
        <section class="py-12 bg-gray-100">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">You Might Also Like</h2>
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($similarProducts as $similarProduct)
                        <div class="product-card bg-white rounded-lg shadow-md overflow-hidden card-hover">
                            <div class="h-48 bg-gray-200 flex items-center justify-center">
                                <a href="{{ route('products.show', $similarProduct) }}">
                                    <img src="{{ $similarProduct->images->first() ? route('product.image', ['imageName' => basename($similarProduct->images->first()->image_path)]) : 'https://via.placeholder.com/150/d1d5db/4b5563?text=No+Image' }}" alt="{{ $similarProduct->name }}" class="w-full h-full object-cover">
                                </a>
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-lg mb-2">{{ $similarProduct->name }}</h3>
                                <div class="flex justify-between items-center">
                                    <span class="text-orange-600 font-bold">${{ number_format($similarProduct->price, 2) }}/day</span>
                                    <a href="{{ route('products.show', $similarProduct) }}" class="product-details bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm transition duration-300">View Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        @endif
    </main>

@include('footer')
