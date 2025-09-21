document.addEventListener('DOMContentLoaded', function() {
    // --- Generic Modal Control ---
    const openModal = (modal) => {
        if (modal) {
            modal.classList.remove('hidden');
        }
    };

    const closeModal = (modal) => {
        if (modal) {
            modal.classList.add('hidden');
        }
    };

    // --- Main Site JS ---

    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // --- Admin JS ---

    // Sidebar Toggle
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebar-toggle');
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', () => sidebar.classList.toggle('hidden'));
    }

    // Modal Elements
    const addProductModal = document.getElementById('add-product-modal');
    const editProductModal = document.getElementById('edit-product-modal');
    const upgradeModal = document.getElementById('upgrade-modal');
    const upgradeBenefitsModal = document.getElementById('upgrade-benefits-modal');
    const imageLimitModal = document.getElementById('image-limit-modal');

    // Trigger Elements
    const addProductBtn = document.getElementById('add-product-btn');
    const upgradeBtn = document.getElementById('upgrade-btn');
    const analyticsBtn = document.getElementById('analytics-btn');
    const addManagerBtn = document.getElementById('add-manager-btn');
    const customersBtn = document.getElementById('customers-btn');
    const ordersBtn = document.getElementById('orders-btn');

    // Close Button Elements
    const cancelAddModalBtn = document.getElementById('cancel-add-modal');
    const cancelEditModalBtn = document.getElementById('cancel-edit-modal');
    const cancelUpgradeModalBtn = document.getElementById('cancel-upgrade-modal');
    const closeUpgradeBenefitsModalBtn = document.getElementById('close-upgrade-benefits-modal');
    const cancelImageLimitModalBtn = document.getElementById('cancel-image-limit-modal');

    // --- Event Listeners ---

    // Add Product Modal
    if (addProductBtn) {
        addProductBtn.addEventListener('click', () => {
            const limitReached = addProductBtn.dataset.limitReached === '1';
            if (limitReached) {
                openModal(imageLimitModal);
            } else {
                openModal(addProductModal);
            }
        });
    }

    if (cancelAddModalBtn && addProductModal) {
        cancelAddModalBtn.addEventListener('click', () => closeModal(addProductModal));
    }

    // Edit Product Modal (triggered by class)
    const productsContainer = document.getElementById('products-container');
    if (productsContainer && editProductModal) {
        productsContainer.addEventListener('click', (e) => {
            if (e.target.classList.contains('edit-product-btn')) {
                // The logic to fetch product data and populate the form is in the Blade file.
                // This script only needs to handle the opening of the modal if it's not already handled.
                // Based on products.blade.php, the modal is opened in the inline script.
                // This is here for robustness in case that changes.
                openModal(editProductModal);
            }
        });
    }
    if (cancelEditModalBtn && editProductModal) {
        cancelEditModalBtn.addEventListener('click', () => closeModal(editProductModal));
    }

    // Upgrade Modals
    if (upgradeBtn && upgradeBenefitsModal) {
        upgradeBtn.addEventListener('click', () => openModal(upgradeBenefitsModal));
    }
    if (cancelUpgradeModalBtn && upgradeModal) {
        cancelUpgradeModalBtn.addEventListener('click', () => closeModal(upgradeModal));
    }
    if (closeUpgradeBenefitsModalBtn && upgradeBenefitsModal) {
        closeUpgradeBenefitsModalBtn.addEventListener('click', () => closeModal(upgradeBenefitsModal));
    }
    if (cancelImageLimitModalBtn && imageLimitModal) {
        cancelImageLimitModalBtn.addEventListener('click', () => closeModal(imageLimitModal));
    }

    // Sidebar triggers for upgrade modal
    if (window.isProFeatureLocked) {
        const sidebarTriggers = [analyticsBtn, addManagerBtn, customersBtn, ordersBtn];
        sidebarTriggers.forEach(btn => {
            if (btn && upgradeBtn) {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    upgradeBtn.click();
                });
            }
        });
    }

    // Close modals on overlay click
    const allModals = [addProductModal, editProductModal, upgradeModal, upgradeBenefitsModal, imageLimitModal];
    allModals.forEach(modal => {
        if (modal) {
            modal.addEventListener('click', (e) => {
                if (e.target.classList.contains('modal-overlay')) {
                    closeModal(modal);
                }
            });
        }
    });
});
