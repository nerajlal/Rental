<?php include_once 'config.php'; ?>
<!-- Footer -->
    <footer class="bg-gray-800 text-white py-12 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="col-span-2 md:col-span-1">
                    <h3 class="text-xl font-bold mb-4" id="footer-brand"><?php echo $siteConfig['business']['name']; ?></h3>
                    <p class="text-gray-400 mb-4">Creating unforgettable moments with premium decorative rentals for all your special occasions.</p>
                    <div class="flex space-x-4">
                        <a href="https://wa.me/<?php echo preg_replace('/[^0-9]/', '', $siteConfig['business']['whatsapp']); ?>" target="_blank" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-whatsapp text-2xl"></i>
                        </a>
                        <a href="<?php echo $siteConfig['business']['instagram']; ?>" target="_blank" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                        <a href="tel:<?php echo $siteConfig['business']['phone']; ?>" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fas fa-phone text-2xl"></i>
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
                        <li>Phone: <a href="tel:<?php echo $siteConfig['business']['phone']; ?>" class="hover:text-white"><?php echo $siteConfig['business']['phone']; ?></a></li>
                        <li>WhatsApp: <a href="https://wa.me/<?php echo preg_replace('/[^0-9]/', '', $siteConfig['business']['whatsapp']); ?>" target="_blank" class="hover:text-white"><?php echo $siteConfig['business']['whatsapp']; ?></a></li>
                        <li>Email: <a href="mailto:<?php echo $siteConfig['business']['email']; ?>" class="hover:text-white"><?php echo $siteConfig['business']['email']; ?></a></li>
                        <li>Address: <?php echo $siteConfig['business']['address']; ?></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 flex flex-col md:flex-row md:justify-between text-center md:text-left text-gray-400">
                <p class="mb-2 md:mb-0">&copy; 2024 <?php echo $siteConfig['business']['name']; ?>. All rights reserved.</p>
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
