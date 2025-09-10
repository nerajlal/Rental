<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - {{ $siteConfig['business']['name'] }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <!-- Mobile Sidebar Toggle -->
    <button id="sidebar-toggle" class="lg:hidden fixed top-4 left-4 z-50 bg-white p-2 rounded-lg shadow-lg">
        <i class="fas fa-bars w-6 h-6"></i>
    </button>

    <!-- Main Content -->
    <div class="lg:ml-64 min-h-screen">
        <!-- Header -->
        <header class="bg-white shadow-sm border-b px-6 py-4 fixed top-0 right-0 w-full lg:w-[calc(100%-16rem)] z-30">
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
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <button type="submit" class="p-2 text-gray-600 hover:text-gray-800">
                            <i class="fas fa-sign-out-alt w-6 h-6"></i>
                        </button>
                    </form>
                </div>
            </div>
        </header>
