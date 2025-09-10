@php
use Illuminate\Support\Facades\Storage;
@endphp
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

                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                        <strong class="font-bold">Success!</strong>
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                <!-- Product Cards -->
                <div id="products-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    @forelse ($products as $product)
                        <div class="bg-white p-4 rounded-lg shadow-sm border flex flex-col justify-between">
                            <div>
                                <img src="{{ $product->images->first() ? route('admin.product.image', ['imageName' => basename($product->images->first()->image_path)]) : 'https://via.placeholder.com/150/d1d5db/4b5563?text=No+Image' }}" alt="{{ $product->name }}" class="w-full h-32 object-cover rounded-md mb-4">
                                <h4 class="font-semibold text-md mb-1">{{ $product->name }}</h4>
                                <p class="text-sm text-gray-600 mb-2">{{ $product->category }} / {{ $product->subcategory }}</p>
                                <p class="text-xs text-gray-500 mb-2">Weight: {{ $product->weight ?? 'N/A' }}</p>
                            </div>
                            <div class="mt-4">
                                <div class="flex items-center justify-between text-sm">
                                    <span class="font-bold text-gray-800">${{ number_format($product->price, 2) }}</span>
                                    <span class="text-gray-600">Stock: {{ $product->stock }}</span>
                                </div>
                                <div class="flex items-center justify-between mt-3 space-x-2">
                                    <button class="edit-product-btn w-full bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-md text-xs font-medium transition" data-id="{{ $product->id }}">Edit</button>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-gray-500 col-span-full">No products found. Click "Add Product" to get started.</p>
                    @endforelse
                </div>
            </div>
        </main>

    <!-- Add Product Modal -->
    <div id="add-product-modal" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50 modal-overlay">
        <div class="bg-white p-8 rounded-lg shadow-2xl w-full max-w-2xl fade-in">
            <h2 class="text-2xl font-bold mb-6">Add New Product</h2>
            <form method="POST" action="{{ route('admin.products.store') }}" class="space-y-4" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="product-name" class="block text-sm font-medium text-gray-700">Product Name</label>
                    <input type="text" id="product-name" name="name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary" required>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                        <select id="category" name="category" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary" required>
                            <option>Wedding Jewelry</option>
                            <option>Engagement Jewelry</option>
                            <option>Party Jewelry</option>
                            <option>Traditional Jewelry</option>
                            <option>Bridal Jewelry Sets</option>
                            <option>Festival Jewelry</option>
                            <option>Contemporary Jewelry</option>
                            <option>Daily Wear Jewelry</option>
                        </select>
                    </div>
                    <div>
                        <label for="subcategory" class="block text-sm font-medium text-gray-700">Subcategory</label>
                        <select id="subcategory" name="subcategory" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary" required>
                            <option>Necklaces</option>
                            <option>Earrings</option>
                            <option>Bangles / Bracelets</option>
                            <option>Rings</option>
                            <option>Maang Tikka</option>
                            <option>Matha Patti</option>
                            <option>Nose Rings / Nath</option>
                            <option>Waist Belt (Kamarbandh / Oddiyanam)</option>
                            <option>Armlets (Bajubandh)</option>
                            <option>Anklets / Payal</option>
                            <option>Full Bridal Sets (complete matching set)</option>
                            <option>Temple Jewelry Sets</option>
                            <option>Crown / Head Accessories</option>
                            <option>Hair Accessories (pins, clips, jadas)</option>
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                        <input type="number" id="price" name="price" step="0.01" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary" required>
                    </div>
                    <div>
                        <label for="weight" class="block text-sm font-medium text-gray-700">Weight (e.g., 25g, 2-3 tola)</label>
                        <input type="text" id="weight" name="weight" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary">
                    </div>
                </div>

                <div>
                    <label for="product-description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea id="product-description" name="description" rows="4" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary"></textarea>
                </div>

                <div>
                    <label for="product-images" class="block text-sm font-medium text-gray-700">Product Images (WEBP only, max 5MB)</label>
                    <input type="file" id="product-images" name="images[]" multiple accept="image/webp" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-primary/10 file:text-primary hover:file:bg-primary/20">
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
                <input type="hidden" id="edit-product-id" name="id">
                <div>
                    <label for="edit-product-name" class="block text-sm font-medium text-gray-700">Product Name</label>
                    <input type="text" id="edit-product-name" name="name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary" required>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="edit-category" class="block text-sm font-medium text-gray-700">Category</label>
                        <select id="edit-category" name="category" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary" required>
                            <option>Wedding Jewelry</option>
                            <option>Engagement Jewelry</option>
                            <option>Party Jewelry</option>
                            <option>Traditional Jewelry</option>
                            <option>Bridal Jewelry Sets</option>
                            <option>Festival Jewelry</option>
                            <option>Contemporary Jewelry</option>
                            <option>Daily Wear Jewelry</option>
                        </select>
                    </div>
                    <div>
                        <label for="edit-subcategory" class="block text-sm font-medium text-gray-700">Subcategory</label>
                        <select id="edit-subcategory" name="subcategory" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary" required>
                            <option>Necklaces</option>
                            <option>Earrings</option>
                            <option>Bangles / Bracelets</option>
                            <option>Rings</option>
                            <option>Maang Tikka</option>
                            <option>Matha Patti</option>
                            <option>Nose Rings / Nath</option>
                            <option>Waist Belt (Kamarbandh / Oddiyanam)</option>
                            <option>Armlets (Bajubandh)</option>
                            <option>Anklets / Payal</option>
                            <option>Full Bridal Sets (complete matching set)</option>
                            <option>Temple Jewelry Sets</option>
                            <option>Crown / Head Accessories</option>
                            <option>Hair Accessories (pins, clips, jadas)</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="edit-price" class="block text-sm font-medium text-gray-700">Price</label>
                        <input type="number" id="edit-price" name="price" step="0.01" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary" required>
                    </div>
                    <div>
                        <label for="edit-weight" class="block text-sm font-medium text-gray-700">Weight (e.g., 25g, 2-3 tola)</label>
                        <input type="text" id="edit-weight" name="weight" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary">
                    </div>
                </div>
                <div>
                    <label for="edit-product-description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea id="edit-product-description" name="description" rows="4" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-primary focus:border-primary"></textarea>
                </div>
                <div class="flex justify-between items-center pt-4">
                    <div>
                        <button type="button" id="delete-product-btn" class="px-6 py-2 bg-red-600 text-white rounded-md text-sm font-medium hover:bg-red-700">Delete</button>
                    </div>
                    <div class="flex space-x-4">
                        <button type="button" id="cancel-edit-modal" class="px-6 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">Cancel</button>
                        <button type="submit" class="px-6 py-2 bg-primary text-white rounded-md text-sm font-medium hover:bg-primary-dark">Save Changes</button>
                    </div>
                </div>
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



<script>
document.addEventListener("DOMContentLoaded", () => {
    const addProductBtn = document.getElementById("add-product-btn");
    const addProductModal = document.getElementById("add-product-modal");
    const cancelAddBtn = document.getElementById("cancel-add-modal");
    const editProductModal = document.getElementById("edit-product-modal");
    const editProductForm = document.getElementById("edit-product-form");
    const productsContainer = document.getElementById("products-container");

    // Function to open a modal
    const openModal = (modal) => modal.classList.remove("hidden");

    // Function to close a modal
    const closeModal = (modal) => modal.classList.add("hidden");

    // Open Add Product modal
    addProductBtn?.addEventListener("click", () => openModal(addProductModal));

    // Close Add Product modal
    cancelAddBtn?.addEventListener("click", () => closeModal(addProductModal));
    addProductModal?.addEventListener("click", (e) => {
        if (e.target.classList.contains("modal-overlay")) {
            closeModal(addProductModal);
        }
    });

    // Handle Edit Product functionality
    productsContainer.addEventListener('click', async (e) => {
        if (e.target.classList.contains('edit-product-btn')) {
            const productId = e.target.dataset.id;

            try {
                const response = await fetch(`/admin/products/${productId}`);
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                const product = await response.json();

                // Populate the form
                editProductForm.querySelector('#edit-product-id').value = product.id;
                editProductForm.querySelector('#edit-product-name').value = product.name;
                editProductForm.querySelector('#edit-category').value = product.category;
                editProductForm.querySelector('#edit-subcategory').value = product.subcategory;
                editProductForm.querySelector('#edit-price').value = product.price;
                editProductForm.querySelector('#edit-weight').value = product.weight;
                editProductForm.querySelector('#edit-product-description').value = product.description;

                openModal(editProductModal);

            } catch (error) {
                console.error('Error fetching product details:', error);
                // Optionally, show an error message to the user
            }
        }
    });

    // Close Edit Product modal
    editProductModal.addEventListener('click', (e) => {
        if (e.target.classList.contains('modal-overlay') || e.target.id === 'cancel-edit-modal') {
            closeModal(editProductModal);
        }
    });

    // Handle Edit form submission to show upgrade modal
    editProductForm.addEventListener('submit', (e) => {
        e.preventDefault();
        closeModal(editProductModal);
        openModal(document.getElementById('upgrade-modal'));
    });

    // Close Upgrade modal
    const upgradeModal = document.getElementById('upgrade-modal');
    upgradeModal.addEventListener('click', (e) => {
        if (e.target.classList.contains('modal-overlay') || e.target.id === 'cancel-upgrade-modal') {
            closeModal(upgradeModal);
        }
    });

    // Handle Delete Product
    const deleteBtn = document.getElementById('delete-product-btn');
    deleteBtn.addEventListener('click', async () => {
        const productId = document.getElementById('edit-product-id').value;
        if (confirm('Are you sure you want to delete this product?')) {
            try {
                const response = await fetch(`/admin/products/${productId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Content-Type': 'application/json'
                    }
                });

                if (response.ok) {
                    closeModal(editProductModal);
                    // Find the product card and remove it from the DOM
                    const productCard = document.querySelector(`.edit-product-btn[data-id='${productId}']`).closest('.bg-white');
                    productCard.remove();
                    // Optionally, show a success message
                } else {
                    // Handle error
                    console.error('Failed to delete product');
                }
            } catch (error) {
                console.error('Error:', error);
            }
        }
    });
});
</script>
    