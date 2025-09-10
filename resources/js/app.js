import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    // ------------------
    // Common Site-wide JS
    // ------------------

    // Mobile menu toggle for the main site
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // Product category filtering on the main site
    const categoryFilters = document.querySelectorAll('.category-filter');
    const productCards = document.querySelectorAll('.product-card');
    if (categoryFilters.length > 0 && productCards.length > 0) {
        categoryFilters.forEach(filter => {
            filter.addEventListener('click', function () {
                const category = this.getAttribute('data-category');

                categoryFilters.forEach(f => {
                    f.classList.remove('active', 'bg-orange-600', 'text-white');
                    f.classList.add('bg-gray-200', 'text-gray-700');
                });
                this.classList.remove('bg-gray-200', 'text-gray-700');
                this.classList.add('active', 'bg-orange-600', 'text-white');

                productCards.forEach(card => {
                    card.style.display = (category === 'all' || card.getAttribute('data-category') === category) ? 'block' : 'none';
                });
            });
        });
    }

    // Product detail modal on the main site
    const productModal = document.getElementById('product-modal');
    const closeProductModalBtn = document.getElementById('close-modal');
    const productDetailBtns = document.querySelectorAll('.product-details');
    if (productModal && closeProductModalBtn && productDetailBtns.length > 0) {
        productDetailBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                const productId = this.getAttribute('data-product');
                // Note: productData is not defined in the original script. This will need to be fixed if this modal is used.
                const product = window.productData?.[productId];

                if (product) {
                    document.getElementById('modal-title').textContent = product.title;
                    const modalContent = document.getElementById('modal-content');
                    modalContent.innerHTML = `
                        <div class="mb-4"><span class="text-2xl font-bold text-orange-600">${product.price}</span></div>
                        <p class="text-gray-700 mb-6">${product.description}</p>
                        <h4 class="font-semibold text-lg mb-3">Features:</h4>
                        <ul class="list-disc list-inside space-y-1 mb-6">${product.features.map(f => `<li>${f}</li>`).join('')}</ul>
                        <h4 class="font-semibold text-lg mb-3">Includes:</h4>
                        <p class="text-gray-600">${product.includes}</p>
                    `;
                    productModal.classList.remove('hidden');
                    document.body.style.overflow = 'hidden';
                }
            });
        });

        const closeProductModal = () => {
            productModal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        };
        closeProductModalBtn.addEventListener('click', closeProductModal);
        productModal.addEventListener('click', (e) => e.target === productModal && closeProductModal());
    }


    // ------------------
    // Admin Panel JS
    // ------------------

    // --- Helper Functions ---
    const openModal = (modal) => modal && modal.classList.remove('hidden');
    const closeModal = (modal) => modal && modal.classList.add('hidden');

    // --- Element Selectors ---
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebar-toggle');
    const addProductModal = document.getElementById('add-product-modal');
    const upgradeModal = document.getElementById('upgrade-modal');
    const upgradeBenefitsModal = document.getElementById('upgrade-benefits-modal');
    const addProductBtn = document.getElementById('add-product-btn');
    const quickAddProductBtn = document.getElementById('quick-add-product');
    const cancelAddModalBtn = document.getElementById('cancel-add-modal');
    const cancelUpgradeModalBtn = document.getElementById('cancel-upgrade-modal');
    const closeUpgradeBenefitsModalBtn = document.getElementById('close-upgrade-benefits-modal');
    const upgradeBtn = document.getElementById('upgrade-btn');
    const upgradeModalUpgradeButton = upgradeModal ? upgradeModal.querySelector('.bg-green-600') : null;

    // --- Event Listeners ---

    // Sidebar
    if (sidebar && sidebarToggle) {
        sidebarToggle.addEventListener('click', () => sidebar.classList.toggle('hidden'));
    }

    // "Add Product" Modal
    if (addProductModal && addProductBtn && cancelAddModalBtn) {
        addProductBtn.addEventListener('click', () => openModal(addProductModal));
        cancelAddModalBtn.addEventListener('click', () => closeModal(addProductModal));
    }
    if (quickAddProductBtn) {
        quickAddProductBtn.addEventListener('click', () => openModal(addProductModal));
    }

    // "Upgrade" Modals
    if (upgradeBtn && upgradeBenefitsModal) {
        upgradeBtn.addEventListener('click', () => openModal(upgradeBenefitsModal));
    }
    if (cancelUpgradeModalBtn && upgradeModal) {
        cancelUpgradeModalBtn.addEventListener('click', () => closeModal(upgradeModal));
    }
    if (closeUpgradeBenefitsModalBtn && upgradeBenefitsModal) {
        closeUpgradeBenefitsModalBtn.addEventListener('click', () => closeModal(upgradeBenefitsModal));
    }
    if (upgradeModalUpgradeButton && upgradeModal && upgradeBenefitsModal) {
        upgradeModalUpgradeButton.addEventListener('click', () => {
            closeModal(upgradeModal);
            openModal(upgradeBenefitsModal);
        });
    }
});
