document.addEventListener('DOMContentLoaded', function() {
    // Sidebar Toggle
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebar-toggle');
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', () => sidebar.classList.toggle('hidden'));
    }

    // Modal elements
    const addProductModal = document.getElementById('add-product-modal');
    const editProductModal = document.getElementById('edit-product-modal');
    const upgradeModal = document.getElementById('upgrade-modal');
    const upgradeBenefitsModal = document.getElementById('upgrade-benefits-modal');
    const addProductBtn = document.getElementById('add-product-btn');
    const quickAddProductBtn = document.getElementById('quick-add-product');
    const cancelAddModalBtn = document.getElementById('cancel-add-modal');
    const addProductForm = document.getElementById('add-product-form');
    const editProductForm = document.getElementById('edit-product-form');
    const productsContainer = document.getElementById('products-container');

    // --- Modal Control ---
    const openModal = (modal) => modal && modal.classList.remove('hidden');
    const closeModal = (modal) => modal && modal.classList.add('hidden');

    if (addProductBtn) addProductBtn.addEventListener('click', () => openModal(addProductModal));
    if (quickAddProductBtn) quickAddProductBtn.addEventListener('click', () => openModal(addProductModal));
    if (cancelAddModalBtn) cancelAddModalBtn.addEventListener('click', () => closeModal(addProductModal));
    if (document.getElementById('cancel-upgrade-modal')) {
        document.getElementById('cancel-upgrade-modal').addEventListener('click', () => closeModal(upgradeModal));
    }
    if (document.getElementById('close-upgrade-benefits-modal')) {
        document.getElementById('close-upgrade-benefits-modal').addEventListener('click', () => closeModal(upgradeBenefitsModal));
    }
    if (document.getElementById('upgrade-btn')) {
        document.getElementById('upgrade-btn').addEventListener('click', () => openModal(upgradeBenefitsModal));
    }
    if (upgradeModal) {
        const upgradeButton = upgradeModal.querySelector('.bg-green-600');
        if (upgradeButton) {
            upgradeButton.addEventListener('click', () => {
                closeModal(upgradeModal);
                openModal(upgradeBenefitsModal);
            });
        }
    }

    // --- Product Rendering ---
    function renderAdminProducts() {
        if (!productsContainer) return;
        productsContainer.innerHTML = '';
        adminProducts.forEach((product, index) => {
            const productCard = document.createElement('div');
            productCard.className = 'bg-white p-4 rounded-lg shadow-sm border flex flex-col justify-between';
            productCard.innerHTML = `
                <div>
                    <img src="${product.imageUrl}" alt="${product.name}" class="w-full h-32 object-cover rounded-md mb-4">
                    <h4 class="font-semibold text-md mb-1">${product.name}</h4>
                    <p class="text-sm text-gray-600 mb-2">${product.category}</p>
                </div>
                <div class="mt-4">
                    <div class="flex items-center justify-between text-sm">
                        <span class="font-bold text-gray-800">$${product.price.toFixed(2)}</span>
                        <span class="text-gray-600">Stock: ${product.stock}</span>
                    </div>
                    <div class="flex items-center justify-between mt-3 space-x-2">
                            <button class="edit-product-btn w-full bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-md text-xs font-medium transition" data-index="${index}">Edit</button>
                    </div>
                </div>
            `;
            productsContainer.appendChild(productCard);
        });
        addEventListenersToButtons();
    }

    // --- Event Listeners for Dynamic Buttons ---
    function addEventListenersToButtons() {
        document.querySelectorAll('.edit-product-btn').forEach(button => {
            button.addEventListener('click', handleEditClick);
        });
        document.querySelectorAll('.delete-product-btn').forEach(button => {
            button.addEventListener('click', handleDeleteClick);
        });
    }

    // --- Event Handlers ---
    function handleEditClick(event) {
        const productIndex = event.target.dataset.index;
        const product = adminProducts[productIndex];

        editProductForm.innerHTML = `
            <input type="hidden" name="id" value="${product.id}">
            <div>
                <label class="block text-sm font-medium text-gray-700">Product Name</label>
                <input type="text" name="name" value="${product.name}" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm">
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Your Price</label>
                    <input type="number" name="price" value="${product.price}" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Original Price</label>
                    <input type="number" name="original_price" value="${product.price}" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm">
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" rows="4" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm">${product.name}</textarea>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Product Images</label>
                <input type="file" name="images" multiple class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-orange-50 file:text-orange-700 hover:file:bg-orange-100">
            </div>
            <div class="flex justify-end space-x-4 pt-4">
                <button type="button" class="cancel-edit-modal px-6 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">Cancel</button>
                <button type="button" class="save-changes-btn px-6 py-2 bg-blue-600 text-white rounded-md text-sm font-medium hover:bg-blue-700">Save Changes</button>
                <button type="button" class="delete-from-edit-btn px-6 py-2 bg-red-600 text-white rounded-md text-sm font-medium hover:bg-red-700">Delete</button>
            </div>
        `;

        openModal(editProductModal);

        editProductModal.querySelector('.cancel-edit-modal').addEventListener('click', () => closeModal(editProductModal));
        editProductModal.querySelector('.save-changes-btn').addEventListener('click', () => {
            closeModal(editProductModal);
            openModal(upgradeModal);
        });
        editProductModal.querySelector('.delete-from-edit-btn').addEventListener('click', () => {
            handleDeleteClick(event);
            closeModal(editProductModal);
        });
    }

    function handleDeleteClick(event) {
        const productIndex = event.target.dataset.index;
        if (confirm('Are you sure you want to delete this product?')) {
            adminProducts.splice(productIndex, 1);
            renderAdminProducts();
        }
    }

    if (addProductForm) {
        addProductForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(addProductForm);
            const newProduct = {
                id: adminProducts.length + 1,
                name: formData.get('name'),
                category: 'Uncategorized',
                price: parseFloat(formData.get('price')),
                stock: 0,
                imageUrl: 'https://via.placeholder.com/150/d1d5db/4b5563?text=New'
            };
            adminProducts.unshift(newProduct);
            renderAdminProducts();
            addProductForm.reset();
            closeModal(addProductModal);
        });
    }

    // Initial Render
    if (document.getElementById('products-page')) {
        renderAdminProducts();
    }
});
