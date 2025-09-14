<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Ornament Rentals</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {{ Illuminate\Support\Js::from($siteConfig['colors']) }}
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-50">

    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50 top-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <h1 class="text-xl font-bold text-gray-800" id="nav-brand">{{ $siteConfig['business']['name'] }}</h1>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" id="mobile-menu-button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600">
                        <i class="fas fa-bars h-6 w-6"></i>
                    </button>
                </div>

                <!-- Desktop navigation -->
                <div class="hidden md:flex items-center">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="{{ url('/') }}" class="nav-link px-3 py-2 text-sm font-medium @if($page === 'home') active @endif">Home</a>
                        <a href="{{ url('/products') }}" class="nav-link px-3 py-2 text-sm font-medium @if($page === 'products') active @endif">Products</a>
                        <a href="{{ url('/about') }}" class="nav-link px-3 py-2 text-sm font-medium @if($page === 'about') active @endif">About</a>
                        <a href="{{ url('/contact') }}" class="bg-primary hover:bg-primaryHover text-white px-4 py-2 rounded-md text-sm font-medium transition duration-300">Contact</a>
                    </div>
                    <div class="ml-6 flex items-center space-x-4">
                        <a href="{{ route('wishlist.index') }}" class="text-gray-600 hover:text-primary relative">
                            <i class="fas fa-heart text-xl"></i>
                            <span id="wishlist-count" class="absolute -top-2 -right-2 bg-red-600 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">0</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Mobile navigation -->
            <div class="md:hidden hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="{{ url('/') }}" class="nav-link-mobile block px-3 py-2 text-base font-medium @if($page === 'home') active @endif">Home</a>
                    <a href="{{ url('/products') }}" class="nav-link-mobile block px-3 py-2 text-base font-medium @if($page === 'products') active @endif">Products</a>
                    <a href="{{ url('/about') }}" class="nav-link-mobile block px-3 py-2 text-base font-medium @if($page === 'about') active @endif">About</a>
                    <a href="{{ url('/contact') }}" class="block px-3 py-2 text-base font-medium text-primary">Contact</a>
                    <div class="border-t border-gray-200 my-2"></div>
                    <div class="flex justify-center space-x-6 py-2">
                        <a href="{{ route('wishlist.index') }}" class="text-gray-600 hover:text-primary relative">
                            <i class="fas fa-heart text-2xl"></i>
                            <span id="mobile-wishlist-count" class="absolute -top-2 -right-3 bg-red-600 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">0</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
