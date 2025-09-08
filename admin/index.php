<?php $page = 'dashboard'; ?>
<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

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
        </main>

<?php include 'footer.php'; ?>
