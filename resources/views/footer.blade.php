<!-- Footer -->
    <footer class="bg-gray-800 text-white py-12 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="col-span-2 md:col-span-1">
                    <h3 class="text-xl font-bold mb-4" id="footer-brand">{{ $siteConfig['business']['name'] }}</h3>
                    <p class="text-gray-400 mb-4">Creating unforgettable moments with premium decorative rentals for all your special occasions.</p>
                    <div class="flex space-x-4">
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $siteConfig['business']['whatsapp']) }}" target="_blank" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-whatsapp text-2xl"></i>
                        </a>
                        <a href="{{ $siteConfig['business']['instagram'] }}" target="_blank" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                        <a href="tel:{{ $siteConfig['business']['phone'] }}" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fas fa-phone text-2xl"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ url('/') }}" class="text-gray-400 hover:text-white transition duration-300">Home</a></li>
                        <li><a href="{{ url('/products') }}" class="text-gray-400 hover:text-white transition duration-300">Products</a></li>
                        <li><a href="{{ url('/about') }}" class="text-gray-400 hover:text-white transition duration-300">About</a></li>
                        <li><a href="{{ url('/#contact') }}" class="text-gray-400 hover:text-white transition duration-300">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Services</h4>
                    <ul class="flex flex-row flex-wrap gap-x-4 gap-y-2 md:flex-col md:space-y-2 md:flex-nowrap md:gap-0">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Wedding Decorations</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Corporate Events</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Party Planning</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Holiday Decor</a></li>
                    </ul>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>Phone: <a href="tel:{{ $siteConfig['business']['phone'] }}" class="hover:text-white">{{ $siteConfig['business']['phone'] }}</a></li>
                        <li>WhatsApp: <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $siteConfig['business']['whatsapp']) }}" target="_blank" class="hover:text-white">{{ $siteConfig['business']['whatsapp'] }}</a></li>
                        <li>Email: <a href="mailto:{{ $siteConfig['business']['email'] }}" class="hover:text-white">{{ $siteConfig['business']['email'] }}</a></li>
                        <li>Address: {{ $siteConfig['business']['address'] }}</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 flex flex-col md:flex-row md:justify-between text-center md:text-left text-gray-400">
                <p class="mb-2 md:mb-0">&copy; 2024 {{ $siteConfig['business']['name'] }}. All rights reserved.</p>
                <p>Developed by <a href="https://metora.in/" target="_blank" class="text-orange-400 hover:text-orange-500">Metora</a></p>
            </div>
        </div>
    </footer>

    @vite(['resources/js/app.js'])
    @include('auth.login_modal')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loginModal = document.getElementById('login-modal');
            const closeLoginModalBtn = document.getElementById('close-login-modal');

            function showModal() {
                loginModal.classList.remove('hidden');
            }

            function hideModal() {
                loginModal.classList.add('hidden');
            }

            if (closeLoginModalBtn) {
                closeLoginModalBtn.addEventListener('click', hideModal);
            }

            @if(session('show_admin_login') || $errors->any())
                showModal();
            @endif
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // --- Cart & Wishlist Logic ---
            const getStorage = (key) => {
                const data = localStorage.getItem(key);
                return data ? JSON.parse(data) : [];
            };

            const updateStorage = (key, data) => {
                localStorage.setItem(key, JSON.stringify(data));
                updateHeaderCounts();
            };

            const addToWishlist = (productId) => {
                let wishlist = getStorage('wishlist');
                if (!wishlist.includes(productId)) {
                    wishlist.push(productId);
                    updateStorage('wishlist', wishlist);
                    alert('Added to wishlist!');
                } else {
                    alert('This item is already in your wishlist.');
                }
            };

            const addToCart = (productId) => {
                let cart = getStorage('cart');
                // For simplicity, we'll just store product IDs. A real cart would store quantity too.
                if (!cart.includes(productId)) {
                    cart.push(productId);
                    updateStorage('cart', cart);
                    alert('Added to cart!');
                } else {
                    alert('This item is already in your cart.');
                }
            };

            const updateHeaderCounts = () => {
                const wishlistCount = getStorage('wishlist').length;
                const cartCount = getStorage('cart').length;

                document.getElementById('wishlist-count').textContent = wishlistCount;
                document.getElementById('cart-count').textContent = cartCount;

                const mobileWishlistCount = document.getElementById('mobile-wishlist-count');
                const mobileCartCount = document.getElementById('mobile-cart-count');
                if (mobileWishlistCount) mobileWishlistCount.textContent = wishlistCount;
                if (mobileCartCount) mobileCartCount.textContent = cartCount;
            };

            // Make functions globally accessible
            window.addToWishlist = addToWishlist;
            window.addToCart = addToCart;

            // Initial count update on page load
            updateHeaderCounts();
        });
    </script>
</body>
</html>
