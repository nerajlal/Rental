<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - {{ $siteConfig['business']['name'] }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    @vite(['resources/css/app.css'])
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {{ Illuminate\Support\Js::from($siteConfig['colors']) }}
                }
            }
        }
    </script>
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
                @if(isset($expiry_warning) && $expiry_warning)
                    <div class="bg-yellow-100 border-b-4 border-yellow-500 text-yellow-700 p-4 text-center" role="alert">
                        <p>{{ $expiry_warning }}</p>
                    </div>
                @endif
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
