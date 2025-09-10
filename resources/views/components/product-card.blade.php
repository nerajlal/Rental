@props(['product'])

<div class="group bg-white rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
    <div class="h-56 relative">
        <a href="{{ route('products.show', $product) }}" class="block w-full h-full">
            <img src="{{ $product->images->first() ? route('product.image', ['imageName' => basename($product->images->first()->image_path)]) : 'https://via.placeholder.com/300x300/d1d5db/4b5563?text=No+Image' }}"
                 alt="{{ $product->name }}" class="w-full h-full object-cover">
        </a>
        <div class="absolute top-2 left-2 bg-orange-600 text-white text-xs font-semibold px-3 py-1 rounded-full">
            {{ $product->category }}
        </div>
        <button onclick="toggleWishlist({{ $product->id }}, this)" data-product-id="{{ $product->id }}" class="wishlist-toggle-btn absolute top-2 right-2 bg-white rounded-full p-2 transition-colors duration-300 hover:bg-red-100">
            <i class="far fa-heart text-gray-700 text-xl"></i>
        </button>
    </div>
    <div class="p-4 flex flex-col flex-grow">
        <h3 class="font-semibold text-lg mb-2 text-gray-800 flex-grow">
            <a href="{{ route('products.show', $product) }}" class="hover:text-orange-600 transition-colors">
                {{ $product->name }}
            </a>
        </h3>
        <div class="mt-auto">
            <div class="flex justify-between items-center">
                <span class="text-xl font-bold text-gray-900">₹{{ number_format($product->price, 2) }}<span class="text-sm font-normal text-gray-500">/day</span></span>
                <a href="{{ route('products.show', $product) }}" class="product-details bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-semibold transition duration-300">
                    Details
                </a>
            </div>
        </div>
    </div>
</div>
