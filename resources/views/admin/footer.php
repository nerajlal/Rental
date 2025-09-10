    <script src="products.js"></script>
    <script src="app.js"></script>

    <!-- Upgrade Benefits Modal -->
    <div id="upgrade-benefits-modal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50 modal-overlay">
        <div class="bg-white p-8 rounded-lg shadow-2xl w-full max-w-lg fade-in">
            <div class="text-center">
                <i class="fas fa-rocket text-5xl text-primary mb-4"></i>
                <h2 class="text-2xl font-bold mb-4">Unlock Your Business Potential!</h2>
                <p class="text-gray-600 mb-6">Upgrade to our Business Plan to access powerful features:</p>
            </div>
            <ul class="space-y-3 text-gray-700">
                <li class="flex items-start">
                    <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                    <span><b>Unlimited Product Listings:</b> Add as many products as you need.</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                    <span><b>Product Editing:</b> Full control to edit all product details instantly.</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                    <span><b>Advanced Analytics:</b> Get detailed insights into your sales and customers.</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                    <span><b>Priority Support:</b> Get faster, dedicated support from our team.</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-check-circle text-accent mt-1 mr-3"></i>
                    <span><b>Custom Domain:</b> Use your own domain name for a professional look.</span>
                </li>
            </ul>
            <div class="mt-8 flex flex-col items-center">
                <a href="https://wa.me/<?php echo preg_replace('/[^0-9]/', '', $siteConfig['business']['whatsapp']); ?>" target="_blank" class="w-full text-center px-6 py-3 bg-accent text-white rounded-md text-lg font-semibold hover:bg-accent-dark transition duration-300">
                    <i class="fab fa-whatsapp mr-2"></i>
                    Contact on WhatsApp to Upgrade
                </a>
                <button type="button" id="close-upgrade-benefits-modal" class="mt-4 text-sm text-gray-600 hover:text-gray-800">Close</button>
            </div>
        </div>
    </div>
</body>
</html>
