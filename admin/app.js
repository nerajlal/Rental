document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebar-toggle');

    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('hidden');
        });
    }

    // Function to render products on the admin products page
    function renderAdminProducts() {
        const container = document.getElementById('products-container');
        if (!container) return;

        container.innerHTML = ''; // Clear existing content

        adminProducts.forEach(product => {
            const productCard = `
                <div class="bg-white p-4 rounded-lg shadow-sm border flex flex-col justify-between">
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
                            <button class="w-1/2 bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-md text-xs font-medium transition">Edit</button>
                            <button class="w-1/2 bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md text-xs font-medium transition">Delete</button>
                        </div>
                    </div>
                </div>
            `;
            container.innerHTML += productCard;
        });
    }

    // Render products if we are on the products page
    if (document.getElementById('products-page')) {
        renderAdminProducts();
    }
});
