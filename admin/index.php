<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Ornament Rentals</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        .sidebar-transition {
            transition: transform 0.3s ease-in-out;
        }
        .modal-overlay {
            backdrop-filter: blur(4px);
        }
        .fade-in {
            animation: fadeIn 0.3s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.95); }
            to { opacity: 1; transform: scale(1); }
        }
        .slide-in {
            animation: slideIn 0.3s ease-out;
        }
        @keyframes slideIn {
            from { transform: translateX(-100%); }
            to { transform: translateX(0); }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Sidebar -->
    <div id="sidebar" class="fixed left-0 top-0 h-full w-64 bg-white shadow-lg sidebar-transition z-40 slide-in">
        <div class="p-6 border-b">
            <h1 class="text-xl font-bold text-gray-800">Admin Panel</h1>
            <p class="text-sm text-gray-600">Ornament Rentals</p>
        </div>

        <nav class="mt-6">
            <a href="#" class="sidebar-link active flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100" data-page="dashboard">
                <i class="fas fa-tachometer-alt w-5 h-5 mr-3"></i>
                Dashboard
            </a>

            <a href="#" class="sidebar-link flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100" data-page="products">
                <i class="fas fa-box-open w-5 h-5 mr-3"></i>
                Products
            </a>

            <a href="#" class="sidebar-link flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100" data-page="orders">
                <i class="fas fa-shopping-cart w-5 h-5 mr-3"></i>
                Orders
            </a>

            <a href="#" class="sidebar-link flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100" data-page="customers">
                <i class="fas fa-users w-5 h-5 mr-3"></i>
                Customers
            </a>

            <a href="#" class="sidebar-link flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100" data-page="settings">
                <i class="fas fa-cog w-5 h-5 mr-3"></i>
                Settings
            </a>
        </nav>

        <div class="absolute bottom-6 left-6 right-6">
            <div class="bg-gradient-to-r from-orange-400 to-pink-400 text-white p-4 rounded-lg">
                <h3 class="font-semibold text-sm">Free Plan</h3>
                <p class="text-xs opacity-90 mt-1">Upgrade to unlock more features</p>
                <button id="upgrade-btn" class="mt-2 bg-white text-orange-600 px-3 py-1 rounded text-xs font-medium hover:bg-gray-100 transition duration-300">
                    Upgrade Now
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Sidebar Toggle -->
    <button id="sidebar-toggle" class="lg:hidden fixed top-4 left-4 z-50 bg-white p-2 rounded-lg shadow-lg">
        <i class="fas fa-bars w-6 h-6"></i>
    </button>

    <!-- Main Content -->
    <div class="lg:ml-64 min-h-screen">
        <!-- Header -->
        <header class="bg-white shadow-sm border-b px-6 py-4">
            <div class="flex items-center justify-between">
                <h2 id="page-title" class="text-2xl font-bold text-gray-800">Dashboard</h2>
                <div class="flex items-center space-x-4">
                    <button class="relative p-2 text-gray-600 hover:text-gray-800">
                        <i class="fas fa-bell w-6 h-6"></i>
                        <span class="absolute top-0 right-0 h-2 w-2 bg-red-500 rounded-full"></span>
                    </button>
                    <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center">
                        <i class="fas fa-user w-5 h-5 text-gray-600"></i>
                    </div>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <main class="p-6">
            <!-- Dashboard Page -->
            <div id="dashboard-page" class="page">
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-lg shadow-sm border">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600">Total Products</p>
                                <p class="text-2xl font-bold text-gray-800" id="total-products">12</p>
                            </div>
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-box-open text-2xl text-blue-600"></i>
                            </div>
                        </div>
                        <div class="mt-2">
                            <span class="text-green-500 text-sm">+2 this month</span>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm border">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600">Active Orders</p>
                                <p class="text-2xl font-bold text-gray-800">18</p>
                            </div>
                            <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-shopping-cart text-2xl text-green-600"></i>
                            </div>
                        </div>
                        <div class="mt-2">
                            <span class="text-green-500 text-sm">+5 today</span>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm border">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600">Revenue</p>
                                <p class="text-2xl font-bold text-gray-800">$2,847</p>
                            </div>
                            <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-dollar-sign text-2xl text-yellow-600"></i>
                            </div>
                        </div>
                        <div class="mt-2">
                            <span class="text-green-500 text-sm">+12% from last month</span>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm border">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-gray-600">Customers</p>
                                <p class="text-2xl font-bold text-gray-800">86</p>
                            </div>
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-users text-2xl text-purple-600"></i>
                            </div>
                        </div>
                        <div class="mt-2">
                            <span class="text-green-500 text-sm">+8 new this week</span>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="grid lg:grid-cols-2 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-sm border">
                        <h3 class="text-lg font-semibold mb-4">Recent Orders</h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-star text-blue-600"></i>
                                    </div>
                                    <div>
                                        <p class="font-medium">Wedding Centerpieces</p>
                                        <p class="text-sm text-gray-600">Sarah Johnson</p>
                                    </div>
                                </div>
                                <span class="text-green-600 font-semibold">$180</span>
                            </div>

                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-birthday-cake text-purple-600"></i>
                                    </div>
                                    <div>
                                        <p class="font-medium">Party Balloons</p>
                                        <p class="text-sm text-gray-600">Mike Chen</p>
                                    </div>
                                </div>
                                <span class="text-green-600 font-semibold">$105</span>
                            </div>

                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                <div class="flex items-center space-x-3">
                                    <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-lightbulb text-yellow-600"></i>
                                    </div>
                                    <div>
                                        <p class="font-medium">Corporate Lighting</p>
                                        <p class="text-sm text-gray-600">TechCorp Inc.</p>
                                    </div>
                                </div>
                                <span class="text-green-600 font-semibold">$260</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm border">
                        <h3 class="text-lg font-semibold mb-4">Quick Actions</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <button id="quick-add-product" class="p-4 border-2 border-dashed border-gray-300 rounded-lg text-center hover:border-orange-400 hover:bg-orange-50 transition duration-300">
                                <i class="fas fa-plus text-2xl text-gray-400 mx-auto mb-2"></i>
                                <p class="text-sm font-medium">Add Product</p>
                            </button>

                            <button class="p-4 border-2 border-dashed border-gray-300 rounded-lg text-center hover:border-blue-400 hover:bg-blue-50 transition duration-300">
                                <i class="fas fa-file-alt text-2xl text-gray-400 mx-auto mb-2"></i>
                                <p class="text-sm font-medium">New Order</p>
                            </button>

                            <button class="p-4 border-2 border-dashed border-gray-300 rounded-lg text-center hover:border-green-400 hover:bg-green-50 transition duration-300">
                                <i class="fas fa-user-plus text-2xl text-gray-400 mx-auto mb-2"></i>
                                <p class="text-sm font-medium">Add Customer</p>
                            </button>

                            <button class="p-4 border-2 border-dashed border-gray-300 rounded-lg text-center hover:border-purple-400 hover:bg-purple-50 transition duration-300">
                                <i class="fas fa-chart-bar text-2xl text-gray-400 mx-auto mb-2"></i>
                                <p class="text-sm font-medium">View Reports</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Products Page -->
            <div id="products-page" class="page hidden">
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

            <!-- Other Pages (Placeholder) -->
            <div id="orders-page" class="page hidden">
                <div class="bg-white p-8 rounded-lg shadow-sm text-center">
                    <i class="fas fa-shopping-cart text-5xl text-gray-400 mx-auto mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Orders Management</h3>
                    <p class="text-gray-600">This section will contain order management features.</p>
                </div>
            </div>

            <div id="customers-page" class="page hidden">
                <div class="bg-white p-8 rounded-lg shadow-sm text-center">
                    <i class="fas fa-users text-5xl text-gray-400 mx-auto mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Customer Management</h3>
                    <p class="text-gray-600">This section will contain customer management features.</p>
                </div>
            </div>

            <div id="settings-page" class="page hidden">
                <div class="bg-white p-8 rounded-lg shadow-sm text-center">
                    <i class="fas fa-cog text-5xl text-gray-400 mx-auto mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Settings</h3>
                    <p class="text-gray-600">This section will contain application settings.</p>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
