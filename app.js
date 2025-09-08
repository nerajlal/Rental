// Navigation functionality
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
    });


    // Product category filtering
    const categoryFilters = document.querySelectorAll('.category-filter');
    const productCards = document.querySelectorAll('.product-card');

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

    // Product detail modal
    const modal = document.getElementById('product-modal');
    const closeModalBtn = document.getElementById('close-modal');
    const productDetailBtns = document.querySelectorAll('.product-details');

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

    // Apply configuration
    function applyConfiguration() {
        // Update brand names
        document.getElementById('nav-brand').textContent = siteConfig.business.name;
        document.getElementById('footer-brand').textContent = siteConfig.business.name;

        // Update hero title
        document.getElementById('hero-title').textContent = siteConfig.business.tagline;

        // Update contact information
        document.getElementById('contact-phone').textContent = siteConfig.business.phone;
        document.getElementById('contact-email').textContent = siteConfig.business.email;
        document.getElementById('contact-address').innerHTML = siteConfig.business.address.replace(', ', '<br>');

        document.getElementById('footer-phone').textContent = siteConfig.business.phone;
        document.getElementById('footer-email').textContent = siteConfig.business.email;
        document.getElementById('footer-address').innerHTML = siteConfig.business.address.replace(', ', '<br>');
    }

    // Apply custom styling based on configuration
    function applyCustomColors() {
        const style = document.createElement('style');
        style.textContent = `
            .nav-link.active { color: ${siteConfig.colors.primary}; }
            .nav-link:hover { color: ${siteConfig.colors.primaryHover}; }
            .nav-link-mobile.active { color: ${siteConfig.colors.primary}; }
            .nav-link-mobile:hover { color: ${siteConfig.colors.primaryHover}; }
        `;
        document.head.appendChild(style);
    }

    applyConfiguration();
    applyCustomColors();
});
