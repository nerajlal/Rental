<!-- Sidebar -->
    <div id="sidebar" class="fixed left-0 top-0 h-full w-64 bg-white shadow-lg sidebar-transition z-40 slide-in hidden lg:block">
        <div class="p-6 border-b">
            <h1 class="text-xl font-bold text-gray-800">Admin Panel</h1>
            <p class="text-sm text-gray-600">{{ $siteConfig['business']['name'] }}</p>
        </div>

        <nav class="mt-6">
            <a href="{{ url('/admin') }}" class="sidebar-link @if($page === 'dashboard') active @endif flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100">
                <i class="fas fa-tachometer-alt w-5 h-5 mr-3"></i>
                Dashboard
            </a>

            <a href="{{ url('/admin/products') }}" class="sidebar-link @if($page === 'products') active @endif flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100">
                <i class="fas fa-box-open w-5 h-5 mr-3"></i>
                Products
            </a>

            <a href="#" id="upgrade-btn" class="sidebar-link @if($page === 'orders') active @endif 
            flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100">
                <i class="fa-solid fa-user-plus w-5 h-5 mr-3"></i>
                Add Managers
            </a>

            <a href="{{ url('/admin/customers') }}" class="sidebar-link @if($page === 'customers') active @endif flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100">
                <i class="fas fa-users w-5 h-5 mr-3"></i>
                Customers
            </a>

            <a href="#" id="analytics-btn" 
            class="sidebar-link @if($page === 'analytics') active @endif 
            flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100">
                <i class="fa-solid fa-chart-line w-5 h-5 mr-3"></i>
                Analytics
            </a>

            <a href="{{ url('/admin/settings') }}" class="sidebar-link @if($page === 'settings') active @endif flex items-center px-6 py-3 text-gray-700 hover:bg-gray-100">
                <i class="fas fa-cog w-5 h-5 mr-3"></i>
                Settings
            </a>
        </nav>

        <div class="absolute bottom-6 left-6 right-6">
            <div class="bg-gradient-to-r from-primary to-accent text-white p-4 rounded-lg">
                <h3 class="font-semibold text-sm">Free Plan</h3>
                <p class="text-xs opacity-90 mt-1">Upgrade to unlock more features</p>
                <button id="upgrade-btn" class="mt-2 bg-white text-primary px-3 py-1 rounded text-xs font-medium hover:bg-gray-100 transition duration-300">
                    Upgrade Now
                </button>
            </div>
        </div>
    </div>
