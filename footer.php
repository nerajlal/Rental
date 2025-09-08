<?php include_once 'config.php'; ?>
<!-- Footer -->
    <footer class="bg-gray-800 text-white py-12 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4" id="footer-brand"><?php echo $siteConfig['business']['name']; ?></h3>
                    <p class="text-gray-400 mb-4">Creating unforgettable moments with premium decorative rentals for all your special occasions.</p>
                    <div class="flex space-x-4">
                        <a href="https://wa.me/<?php echo preg_replace('/[^0-9]/', '', $siteConfig['business']['whatsapp']); ?>" target="_blank" class="text-gray-400 hover:text-white transition duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.894 11.892-1.99 0-3.902-.539-5.587-1.52l-6.19 1.669zm4.99-6.983c.282-.14.574-.223.869-.223.296 0 .587.083.851.246 1.45.891 3.097 1.37 4.792 1.371 5.438.002 9.875-4.434 9.877-9.876.002-5.44-4.434-9.875-9.876-9.875-5.439 0-9.875 4.435-9.877 9.876 0 1.791.49 3.515 1.38 4.99l.11.192-1.012 3.688 3.743-1.002.176.103z"/></svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.07 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.225-.148-4.771-1.664-4.919-4.919-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.225 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.689-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a href="tel:<?php echo $siteConfig['business']['phone']; ?>" class="text-gray-400 hover:text-white transition duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="index.php" class="text-gray-400 hover:text-white transition duration-300">Home</a></li>
                        <li><a href="products.php" class="text-gray-400 hover:text-white transition duration-300">Products</a></li>
                        <li><a href="about.php" class="text-gray-400 hover:text-white transition duration-300">About</a></li>
                        <li><a href="index.php#contact" class="text-gray-400 hover:text-white transition duration-300">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Services</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Wedding Decorations</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Corporate Events</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Party Planning</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Holiday Decor</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>Phone: <a href="tel:<?php echo $siteConfig['business']['phone']; ?>" class="hover:text-white"><?php echo $siteConfig['business']['phone']; ?></a></li>
                        <li>WhatsApp: <a href="https://wa.me/<?php echo preg_replace('/[^0-9]/', '', $siteConfig['business']['whatsapp']); ?>" target="_blank" class="hover:text-white"><?php echo $siteConfig['business']['whatsapp']; ?></a></li>
                        <li>Email: <a href="mailto:<?php echo $siteConfig['business']['email']; ?>" class="hover:text-white"><?php echo $siteConfig['business']['email']; ?></a></li>
                        <li>Address: <?php echo $siteConfig['business']['address']; ?></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 flex justify-between items-center text-gray-400">
                <p>&copy; 2024 <?php echo $siteConfig['business']['name']; ?>. All rights reserved.</p>
                <p>Developed by <a href="https://metora.in/" target="_blank" class="text-orange-400 hover:text-orange-500">Metora</a></p>
            </div>
        </div>
    </footer>

    <script src="config.js"></script>
    <script>
        // Apply custom colors to Tailwind
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: siteConfig.colors.primary,
                        secondary: siteConfig.colors.secondary,
                        accent: siteConfig.colors.accent
                    }
                }
            }
        }
    </script>
    <script src="products.js"></script>
    <script src="app.js"></script>
</body>
</html>
