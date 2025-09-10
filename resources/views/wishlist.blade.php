@include('head')

    <!-- Main Content -->
    <main class="pt-16" id="main-content">
        <!-- Wishlist Page -->
        <section class="py-20 px-4">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-4xl font-bold text-center mb-12 text-gray-800">My Wishlist</h2>

                <!-- Wishlist Grid -->
                <div id="wishlist-container" class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <!-- Products will be loaded here by JavaScript -->
                </div>

                <div id="wishlist-empty" class="hidden text-center py-16">
                    <i class="far fa-heart text-6xl text-gray-300 mb-4"></i>
                    <h3 class="text-2xl font-semibold text-gray-700 mb-2">Your Wishlist is Empty</h3>
                    <p class="text-gray-500 mb-6">You haven't added any items to your wishlist yet. Start exploring to find something you love!</p>
                    <a href="{{ route('products.index') }}" class="bg-orange-600 hover:bg-orange-700 text-white px-8 py-3 rounded-lg font-medium transition duration-300">Explore Products</a>
                </div>
            </div>
        </section>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', async function() {
            const container = document.getElementById('wishlist-container');
            const emptyMessage = document.getElementById('wishlist-empty');
            const wishlistIds = JSON.parse(localStorage.getItem('wishlist')) || [];

            if (wishlistIds.length === 0) {
                emptyMessage.classList.remove('hidden');
                return;
            }

            try {
                const response = await fetch('{{ route("products.byIds") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ ids: wishlistIds })
                });

                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }

                const products = await response.json();

                if (products.length === 0) {
                    emptyMessage.classList.remove('hidden');
                    return;
                }

                let productsHtml = '';
                products.forEach(product => {
                    const imageUrl = product.images.length > 0 ? `{{ url('/product-image') }}/${product.images[0].image_path.split('/').pop()}` : 'https://via.placeholder.com/150/d1d5db/4b5563?text=No+Image';
                    const productUrl = `{{ url('/products') }}/${product.id}`;

                    productsHtml += `
                        <div class="product-card bg-white rounded-lg shadow-md overflow-hidden card-hover">
                            <div class="h-48 bg-gray-200 flex items-center justify-center">
                                <a href="${productUrl}">
                                    <img src="${imageUrl}" alt="${product.name}" class="w-full h-full object-cover">
                                </a>
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-lg mb-2">${product.name}</h3>
                                <div class="flex justify-between items-center">
                                    <span class="text-orange-600 font-bold">$${parseFloat(product.price).toFixed(2)}/day</span>
                                    <a href="${productUrl}" class="product-details bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm transition duration-300">View Details</a>
                                </div>
                            </div>
                        </div>
                    `;
                });

                container.innerHTML = productsHtml;

            } catch (error) {
                console.error('Error fetching wishlist products:', error);
                container.innerHTML = '<p class="text-red-500 col-span-full text-center">Could not load wishlist items. Please try again later.</p>';
            }
        });
    </script>

@include('footer')
