<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Ornament Rentals</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: <?php echo json_encode($siteConfig['colors']); ?>
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50">

    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50 top-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <h1 class="text-xl font-bold text-gray-800" id="nav-brand"><?php echo $siteConfig['business']['name']; ?></h1>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" id="mobile-menu-button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600">
                        <i class="fas fa-bars h-6 w-6"></i>
                    </button>
                </div>

                <!-- Desktop navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="index.php" class="nav-link px-3 py-2 text-sm font-medium <?php if ($page === 'home') echo 'active'; ?>">Home</a>
                        <a href="products.php" class="nav-link px-3 py-2 text-sm font-medium <?php if ($page === 'products') echo 'active'; ?>">Products</a>
                        <a href="about.php" class="nav-link px-3 py-2 text-sm font-medium <?php if ($page === 'about') echo 'active'; ?>">About</a>
                        <a href="#" class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-300">Contact</a>
                    </div>
                </div>
            </div>

            <!-- Mobile navigation -->
            <div class="md:hidden hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="index.php" class="nav-link-mobile block px-3 py-2 text-base font-medium <?php if ($page === 'home') echo 'active'; ?>">Home</a>
                    <a href="products.php" class="nav-link-mobile block px-3 py-2 text-base font-medium <?php if ($page === 'products') echo 'active'; ?>">Products</a>
                    <a href="about.php" class="nav-link-mobile block px-3 py-2 text-base font-medium <?php if ($page === 'about') echo 'active'; ?>">About</a>
                    <a href="#" class="block px-3 py-2 text-base font-medium text-orange-600">Contact</a>
                </div>
            </div>
        </div>
    </nav>
