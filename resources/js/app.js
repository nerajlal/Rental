import './bootstrap';

// Main site JS
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if(mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // Product category filtering
    const categoryFilters = document.querySelectorAll('.category-filter');
    const productCards = document.querySelectorAll('.product-card');

    if(categoryFilters.length > 0 && productCards.length > 0) {
        categoryFilters.forEach(filter => {
            filter.addEventListener('click', function() {
                const category = this.getAttribute('data-category');

                // Update active filter
                categoryFilters.forEach(f => {
                    f.classList.remove('active', 'bg-orange-600', 'text-white');
                    f.classList.add('bg-gray-200', 'text-gray-700');
                });
                this.classList.remove('bg-gray-200', 'text-gray-700');
                this.classList.add('active', 'bg-orange-600', 'text-white');

                // Filter products
                productCards.forEach(card => {
                    if (category === 'all' || card.getAttribute('data-category') === category) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    }


    // Product detail modal
    const modal = document.getElementById('product-modal');
    const closeModalBtn = document.getElementById('close-modal');
    const productDetailBtns = document.querySelectorAll('.product-details');

    if(modal && closeModalBtn && productDetailBtns.length > 0) {
        productDetailBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const productId = this.getAttribute('data-product');
                const product = productData[productId];

                if (product) {
                    document.getElementById('modal-title').textContent = product.title;

                    const modalContent = document.getElementById('modal-content');
                    modalContent.innerHTML = `
                        <div class="mb-4">
                            <span class="text-2xl font-bold text-orange-600">${product.price}</span>
                        </div>
                        <p class="text-gray-700 mb-6">${product.description}</p>
                        <h4 class="font-semibold text-lg mb-3">Features:</h4>
                        <ul class="list-disc list-inside space-y-1 mb-6">
                            ${product.features.map(feature => `<li class="text-gray-600">${feature}</li>`).join('')}
                        </ul>
                        <h4 class="font-semibold text-lg mb-3">Includes:</h4>
                        <p class="text-gray-600">${product.includes}</p>
                    `;

                    modal.classList.remove('hidden');
                    document.body.style.overflow = 'hidden';
                }
            });
        });

        closeModalBtn.addEventListener('click', function() {
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        });

        // Close modal on outside click
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto';
            }
        });
    }
});


// Admin JS
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

    // The rest of the product management JS is now removed as it's handled by Blade.
    // The edit/delete functionality will need to be re-implemented in a future step if needed.

    // Re-adding modal logic for Add Product
    const addProductModal = document.getElementById('add-product-modal');
    const addProductBtn = document.getElementById('add-product-btn');
    const cancelAddModalBtn = document.getElementById('cancel-add-modal');

    if (addProductModal && addProductBtn && cancelAddModalBtn) {
        addProductBtn.addEventListener('click', () => openModal(addProductModal));
        cancelAddModalBtn.addEventListener('click', () => closeModal(addProductModal));
    }
});
