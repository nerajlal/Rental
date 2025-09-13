@include('admin.header')
@include('admin.sidebar')

        <!-- Page Content -->
    <main class="p-6 pt-28">
            <!-- Dashboard Page -->
            <div id="dashboard-page" class="page">
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-lg shadow-sm border">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600">Total Products</p>
                                <p class="text-2xl font-bold text-gray-800" id="total-products">{{ $productCount }}</p>
                            </div>
                            <div class="w-12 h-12 bg-secondary/10 rounded-lg flex items-center justify-center">
                                <i class="fas fa-box-open text-2xl text-secondary"></i>
                            </div>
                        </div>
                        <div class="mt-2">
                            <span class="text-accent text-sm">+{{ $productsThisMonth }} this month</span>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm border">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600">Active Orders</p>
                                <p class="text-2xl font-bold text-gray-800">0</p>
                            </div>
                            <div class="w-12 h-12 bg-accent/10 rounded-lg flex items-center justify-center">
                                <i class="fas fa-shopping-cart text-2xl text-accent"></i>
                            </div>
                        </div>
                        <div class="mt-2">
                            <span class="text-accent text-sm">+0 today</span>
                            <p class="text-accent text-sm">Upgrade for detailed analytics</p>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm border">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600">Revenue</p>
                                <p class="text-2xl font-bold text-gray-800">₹ 0</p>
                            </div>
                            <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center">
                                <i class="fas fa-dollar-sign text-2xl text-primary"></i>
                            </div>
                        </div>
                        <div class="mt-2">
                            <span class="text-accent text-sm">+0% from last month</span>
                            <p class="text-accent text-sm">Upgrade for detailed analytics</p>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm border">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600">Customers</p>
                                <p class="text-2xl font-bold text-gray-800">0</p>
                            </div>
                            <div class="w-12 h-12 bg-neutral/10 rounded-lg flex items-center justify-center">
                                <i class="fas fa-users text-2xl text-neutral"></i>
                            </div>
                        </div>
                        <div class="mt-2">
                            <span class="text-accent text-sm">+8 new this week</span>
                            <p class="text-accent text-sm">Upgrade for detailed analytics</p>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="grid lg:grid-cols-2 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-sm border text-center">
                        <h3 class="text-lg font-semibold mb-4">Recent Orders</h3>
                        <div class="bg-white p-6 rounded-lg shadow-sm border text-center">
                            <div class="flex flex-col items-center justify-center py-6">
                                <i class="fas fa-box-open text-4xl text-gray-400 mb-3"></i>
                                <p class="text-gray-600 mb-4">Detailed order history is available on premium plans.</p>
                                <button id="new-order" class="upgrade-trigger px-5 py-2 bg-gradient-to-r from-indigo-500 to-purple-600 text-white rounded-lg font-semibold shadow hover:opacity-90 transition duration-300 flex items-center justify-center gap-2">
                                    <i class="fas fa-arrow-up"></i>
                                    Upgrade Now
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm border">
                        <h3 class="text-lg font-semibold mb-4">Quick Actions</h3>
                        <div class="grid grid-cols-2 gap-4">

                            <button id="quick-add-product" 
                                    class="p-4 border-2 border-dashed border-gray-300 rounded-lg text-center hover:border-primary hover:bg-primary/10 transition duration-300">
                                <i class="fas fa-plus text-2xl text-gray-400 mx-auto mb-2"></i>
                                <p class="text-sm font-medium">Add Product</p>
                            </button>

                            <button id="quick-new-order" 
                                    class="p-4 border-2 border-dashed border-gray-300 rounded-lg text-center hover:border-secondary hover:bg-secondary/10 transition duration-300">
                                <i class="fas fa-file-alt text-2xl text-gray-400 mx-auto mb-2"></i>
                                <p class="text-sm font-medium">New Order</p>
                            </button>

                            <button id="quick-add-customer" 
                                    class="p-4 border-2 border-dashed border-gray-300 rounded-lg text-center hover:border-accent hover:bg-accent/10 transition duration-300">
                                <i class="fas fa-user-plus text-2xl text-gray-400 mx-auto mb-2"></i>
                                <p class="text-sm font-medium">Add Customer</p>
                            </button>

                            <button id="quick-view-reports" 
                                    class="p-4 border-2 border-dashed border-gray-300 rounded-lg text-center hover:border-neutral hover:bg-neutral/10 transition duration-300">
                                <i class="fas fa-chart-bar text-2xl text-gray-400 mx-auto mb-2"></i>
                                <p class="text-sm font-medium">View Reports</p>
                            </button>

                        </div>
                    </div>

                </div>
            </div>
        </main>

@include('admin.footer')



<script>
    // List of Quick Action button IDs
    const quickActions = [
        'quick-new-order',
        'new-order',
        'quick-add-customer',
        'quick-view-reports'
    ];

    quickActions.forEach(id => {
        const el = document.getElementById(id);
        if (el) {
            el.addEventListener('click', (e) => {
                e.preventDefault();
                // Trigger the Upgrade popup (or whatever popup you use)
                document.querySelector('#upgrade-btn').click();
            });
        }
    });
</script>

<script>
    document.getElementById("quick-add-product").addEventListener("click", function() {
        window.location.href = "admin/products";
    });
</script>

