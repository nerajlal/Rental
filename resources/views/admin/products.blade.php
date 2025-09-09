@include('admin.header')
@include('admin.sidebar')

        <!-- Page Content -->
        <main class="p-6 pt-24">
            <!-- Products Page -->
            <div id="products-page" class="page">
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <h3 class="text-xl font-semibold">Product Management</h3>
                        <p class="text-gray-600">Manage your ornament inventory</p>
                    </div>
                    <button id="add-product-btn" class="bg-primary hover:bg-primary-dark text-white px-6 py-2 rounded-lg font-medium flex items-center space-x-2 transition duration-300">
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

    <!-- Add Product Modal -->
    <div id="add-product-modal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50 modal-overlay">
        <div class="bg-white p-8 rounded-lg shadow-2xl w-full max-w-2xl fade-in">
            <h2 class="text-2xl font-bold mb-6">Add New Product</h2>
            <form id="add-product-form" class="space-y-4">
                <div>
                    <label for="product-name" class="block text-sm font-medium text-gray-700">Product Name</label>
                    <input type="text" id="product-name" name="name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="your-price" class="block text-sm font-medium text-gray-700">Your Price</label>
                        <input type="number" id="your-price" name="price" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary">
                    </div>
                    <div>
                        <label for="original-price" class="block text-sm font-medium text-gray-700">Original Price</label>
                        <input type="number" id="original-price" name="original_price" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary">
                    </div>
                </div>
                <div>
                    <label for="product-description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea id="product-description" name="description" rows="4" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary"></textarea>
                </div>
                <div>
                    <label for="product-images" class="block text-sm font-medium text-gray-700">Product Images</label>
                    <input type="file" id="product-images" name="images" multiple class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20">
                </div>
                <div class="flex justify-end space-x-4 pt-4">
                    <button type="button" id="cancel-add-modal" class="px-6 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">Cancel</button>
                    <button type="submit" class="px-6 py-2 bg-primary text-white rounded-md text-sm font-medium hover:bg-primary-dark">Save Product</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Product Modal -->
    <div id="edit-product-modal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50 modal-overlay">
        <div class="bg-white p-8 rounded-lg shadow-2xl w-full max-w-2xl fade-in">
            <h2 class="text-2xl font-bold mb-6">Edit Product</h2>
            <form id="edit-product-form" class="space-y-4">
                <!-- Form content will be populated by JavaScript -->
            </form>
        </div>
    </div>

    <!-- Upgrade Modal -->
    <div id="upgrade-modal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50 modal-overlay">
        <div class="bg-white p-8 rounded-lg shadow-2xl w-full max-w-sm text-center fade-in">
            <h2 class="text-2xl font-bold mb-4">Upgrade Required</h2>
            <p class="text-gray-600 mb-6">Upgrade to the Business Plan to edit products.</p>
            <div class="flex justify-center space-x-4">
                <button type="button" id="cancel-upgrade-modal" class="px-6 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">Cancel</button>
                <button type="button" class="px-6 py-2 bg-green-600 text-white rounded-md text-sm font-medium hover:bg-green-700">Upgrade Now</button>
            </div>
        </div>
    </div>

@include('admin.footer')
