<?php $page = 'products'; ?>
<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

        <!-- Page Content -->
        <main class="p-6">
            <!-- Products Page -->
            <div id="products-page" class="page">
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <h3 class="text-xl font-semibold">Product Management</h3>
                        <p class="text-gray-600">Manage your ornament inventory</p>
                    </div>
                    <button id="add-product-btn" class="bg-orange-600 hover:bg-orange-700 text-white px-6 py-2 rounded-lg font-medium flex items-center space-x-2 transition duration-300">
                        <i class="fas fa-plus w-5 h-5"></i>
                        <span>Add Product</span>
                    </button>
                </div>

                <!-- Product Cards -->
                <div id="products-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <!-- Products will be populated by JavaScript -->
                </div>
            </div>
        </main>

<?php include 'footer.php'; ?>
