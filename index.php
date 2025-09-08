<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Ornament Rentals</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Configuration file for easy customization
        const siteConfig = {
            colors: {
                primary: '#c2410c', // orange-700
                primaryHover: '#ea580c', // orange-600
                secondary: '#1e40af', // blue-700
                secondaryHover: '#2563eb', // blue-600
                accent: '#059669', // emerald-600
                neutral: '#374151', // gray-700
                light: '#f9fafb', // gray-50
                dark: '#111827' // gray-900
            },
            business: {
                name: 'Premium Ornament Rentals',
                tagline: 'Transform Your Events with Elegant Decorations',
                phone: '+1 (555) 123-4567',
                email: 'info@ornamentrentals.com',
                address: '123 Event Street, City, State 12345'
            }
        };

        // Apply custom colors to Tailwind
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: siteConfig.colors.primary,
                        secondary: siteConfig.colors.secondary,
                        accent: siteConfig.colors.accent
                    }
                }
            }
        }
    </script>
    <style>
        .hero-gradient {
            background: linear-gradient(135deg, #c2410c 0%, #ea580c 100%);
        }
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50 top-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <h1 class="text-xl font-bold text-gray-800" id="nav-brand">Premium Ornament Rentals</h1>
                    </div>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" id="mobile-menu-button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
                
                <!-- Desktop navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="#" class="nav-link active px-3 py-2 text-sm font-medium" data-page="home">Home</a>
                        <a href="#" class="nav-link px-3 py-2 text-sm font-medium" data-page="products">Products</a>
                        <a href="#" class="nav-link px-3 py-2 text-sm font-medium" data-page="about">About</a>
                        <a href="#" class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-300">Contact</a>
                    </div>
                </div>
            </div>
            
            <!-- Mobile navigation -->
            <div class="md:hidden hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="#" class="nav-link-mobile active block px-3 py-2 text-base font-medium" data-page="home">Home</a>
                    <a href="#" class="nav-link-mobile block px-3 py-2 text-base font-medium" data-page="products">Products</a>
                    <a href="#" class="nav-link-mobile block px-3 py-2 text-base font-medium" data-page="about">About</a>
                    <a href="#" class="block px-3 py-2 text-base font-medium text-orange-600">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16" id="main-content">
        <!-- Home Page -->
        <div id="home-page" class="page">
            <!-- Hero Section -->
            <section class="hero-gradient text-white py-20 px-4">
                <div class="max-w-7xl mx-auto text-center">
                    <h2 class="text-4xl md:text-6xl font-bold mb-6" id="hero-title">Transform Your Events with Elegant Decorations</h2>
                    <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Premium ornament rentals for weddings, corporate events, parties, and special occasions. Make every moment memorable with our exquisite collection.</p>
                    <div class="space-y-4 md:space-y-0 md:space-x-4 md:flex md:justify-center">
                        <button class="bg-white text-orange-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300 w-full md:w-auto">Browse Products</button>
                        <button class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-orange-600 transition duration-300 w-full md:w-auto">Get Quote</button>
                    </div>
                </div>
            </section>

            <!-- Features Section -->
            <section class="py-16 px-4 bg-white">
                <div class="max-w-7xl mx-auto">
                    <h3 class="text-3xl font-bold text-center mb-12 text-gray-800">Why Choose Our Rental Service?</h3>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="text-center card-hover p-6 rounded-lg bg-gray-50">
                            <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                </svg>
                            </div>
                            <h4 class="text-xl font-semibold mb-2">Premium Quality</h4>
                            <p class="text-gray-600">Hand-selected ornaments and decorations crafted with attention to detail for your special occasions.</p>
                        </div>
                        <div class="text-center card-hover p-6 rounded-lg bg-gray-50">
                            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h4 class="text-xl font-semibold mb-2">Flexible Rental</h4>
                            <p class="text-gray-600">Choose rental periods that suit your event timeline, from single day to extended celebrations.</p>
                        </div>
                        <div class="text-center card-hover p-6 rounded-lg bg-gray-50">
                            <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h4 class="text-xl font-semibold mb-2">Expert Support</h4>
                            <p class="text-gray-600">Our team provides consultation and support to help you create the perfect atmosphere for your event.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Team Section -->
            <section class="py-16 px-4 bg-white">
                <div class="max-w-6xl mx-auto">
                    <h3 class="text-3xl font-bold text-center mb-12 text-gray-800">Our Expert Team</h3>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="w-32 h-32 bg-gradient-to-br from-orange-200 to-pink-200 rounded-full mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-16 h-16 text-orange-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                </svg>
                            </div>
                            <h4 class="text-xl font-semibold mb-2">Event Specialists</h4>
                            <p class="text-gray-600">Our team of experienced event specialists help you choose the perfect decorations for your occasion.</p>
                        </div>
                        <div class="text-center">
                            <div class="w-32 h-32 bg-gradient-to-br from-blue-200 to-indigo-200 rounded-full mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-16 h-16 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                            </div>
                            <h4 class="text-xl font-semibold mb-2">Design Consultants</h4>
                            <p class="text-gray-600">Professional designers who understand color schemes, themes, and spatial arrangements to maximize visual impact.</p>
                        </div>
                        <div class="text-center">
                            <div class="w-32 h-32 bg-gradient-to-br from-emerald-200 to-teal-200 rounded-full mx-auto mb-4 flex items-center justify-center">
                                <svg class="w-16 h-16 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                            </div>
                            <h4 class="text-xl font-semibold mb-2">Logistics Team</h4>
                            <p class="text-gray-600">Reliable delivery and setup professionals ensure your decorations arrive on time and are perfectly arranged.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section class="py-16 px-4 bg-gray-50">
                <div class="max-w-4xl mx-auto">
                    <h3 class="text-3xl font-bold text-center mb-12 text-gray-800">Get In Touch</h3>
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="space-y-6">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold">Phone</h4>
                                    <p class="text-gray-600" id="contact-phone">+1 (555) 123-4567</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold">Email</h4>
                                    <p class="text-gray-600" id="contact-email">info@ornamentrentals.com</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-emerald-100 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold">Address</h4>
                                    <p class="text-gray-600" id="contact-address">123 Event Street<br>City, State 12345</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h4 class="text-xl font-semibold mb-4">Send us a message</h4>
                            <form class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                    <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Event Type</label>
                                    <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500">
                                        <option>Wedding</option>
                                        <option>Corporate Event</option>
                                        <option>Birthday Party</option>
                                        <option>Holiday Celebration</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                                    <textarea rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500"></textarea>
                                </div>
                                <button type="submit" class="w-full bg-orange-600 hover:bg-orange-700 text-white py-2 px-4 rounded-md font-medium transition duration-300">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4" id="footer-brand">Premium Ornament Rentals</h3>
                    <p class="text-gray-400 mb-4">Creating unforgettable moments with premium decorative rentals for all your special occasions.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.097.118.112.221.082.343-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.748-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Products</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">About</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Services</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Wedding Decorations</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Corporate Events</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Party Planning</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Holiday Decor</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li id="footer-phone">+1 (555) 123-4567</li>
                        <li id="footer-email">info@ornamentrentals.com</li>
                        <li id="footer-address">123 Event Street<br>City, State 12345</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 Premium Ornament Rentals. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Product data
        const productData = {
            'wedding-centerpieces': {
                title: 'Elegant Wedding Centerpieces',
                price: '$45/day',
                description: 'Transform your wedding reception with our stunning collection of crystal and floral centerpieces. Each piece is carefully crafted to create an atmosphere of elegance and romance.',
                features: [
                    'Premium crystal and glass materials',
                    'Fresh or silk floral options available',
                    'Multiple height variations (12", 18", 24")',
                    'Customizable color schemes',
                    'LED lighting options',
                    'Setup and breakdown included'
                ],
                includes: 'Centerpiece base, decorative elements, candles (if applicable), setup instructions'
            },
            'corporate-lighting': {
                title: 'Professional Event Lighting',
                price: '$65/day',
                description: 'Create the perfect ambiance for your corporate events with our sophisticated lighting solutions. From subtle accent lighting to dramatic spotlights.',
                features: [
                    'LED and traditional lighting options',
                    'Wireless and wired configurations',
                    'Color-changing capabilities',
                    'Professional-grade equipment',
                    'Remote control operation',
                    'Technical support included'
                ],
                includes: 'Light fixtures, control systems, cables, professional setup and operation'
            },
            'party-balloons': {
                title: 'Party Balloon Arrangements',
                price: '$35/day',
                description: 'Add color and excitement to your celebrations with our creative balloon displays. Perfect for birthdays, anniversaries, and festive gatherings.',
                features: [
                    'Helium and air-filled options',
                    'Custom color combinations',
                    'Shaped and themed balloons',
                    'Balloon arches and columns',
                    'Biodegradable materials available',
                    'Professional arrangement'
                ],
                includes: 'Balloons, weights, ribbons, arrangement setup, disposal service'
            },
            'holiday-decor': {
                title: 'Holiday Decorations',
                price: '$25/day',
                description: 'Celebrate the seasons with our festive holiday decorations. From Christmas magic to seasonal celebrations, we have everything you need.',
                features: [
                    'Seasonal themed collections',
                    'Indoor and outdoor options',
                    'LED and traditional lighting',
                    'Weather-resistant materials',
                    'Easy setup and removal',
                    'Storage containers included'
                ],
                includes: 'Decorative items, lighting, setup hardware, instruction manual'
            },
            'vintage-wedding': {
                title: 'Vintage Wedding Decor',
                price: '$55/day',
                description: 'Step back in time with our curated collection of vintage wedding decorations. Perfect for creating a romantic, nostalgic atmosphere.',
                features: [
                    'Authentic vintage pieces',
                    'Antique-inspired reproductions',
                    'Vintage lace and fabric elements',
                    'Classic color palettes',
                    'Period-appropriate styling',
                    'Customization available'
                ],
                includes: 'Vintage decorations, linens, accessories, styling consultation'
            },
            'executive-tables': {
                title: 'Executive Table Settings',
                price: '$75/day',
                description: 'Impress your clients and colleagues with our premium executive table settings. Designed for business dinners and corporate galas.',
                features: [
                    'Fine china and crystal',
                    'Premium linens and napkins',
                    'Professional place settings',
                    'Elegant centerpieces',
                    'Corporate color schemes',
                    'White-glove service'
                ],
                includes: 'Complete table setting, centerpieces, linens, professional setup and cleanup'
            }
        };

        // Navigation functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });

            // Page navigation
            const navLinks = document.querySelectorAll('.nav-link, .nav-link-mobile');
            const pages = document.querySelectorAll('.page');

            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetPage = this.getAttribute('data-page');
                    
                    // Hide all pages
                    pages.forEach(page => page.classList.add('hidden'));
                    
                    // Show target page
                    if (targetPage === 'home') {
                        document.getElementById('home-page').classList.remove('hidden');
                    } else if (targetPage === 'products') {
                        document.getElementById('products-page').classList.remove('hidden');
                    } else if (targetPage === 'about') {
                        document.getElementById('about-page').classList.remove('hidden');
                    }
                    
                    // Update active state
                    navLinks.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Close mobile menu
                    mobileMenu.classList.add('hidden');
                    
                    // Scroll to top
                    window.scrollTo(0, 0);
                });
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
    </script>
</body>
</html>

            <!-- CTA Section -->
            <section class="py-16 px-4 bg-gray-100">
                <div class="max-w-4xl mx-auto text-center">
                    <h3 class="text-3xl font-bold mb-6 text-gray-800">Ready to Make Your Event Unforgettable?</h3>
                    <p class="text-lg text-gray-600 mb-8">Browse our extensive collection of premium ornaments and decorations available for rent.</p>
                    <button class="bg-orange-600 hover:bg-orange-700 text-white px-8 py-3 rounded-lg font-semibold transition duration-300">View Our Collection</button>
                </div>
            </section>
        </div>

        <!-- Products Page -->
        <div id="products-page" class="page hidden">
            <section class="py-20 px-4">
                <div class="max-w-7xl mx-auto">
                    <h2 class="text-4xl font-bold text-center mb-12 text-gray-800">Our Ornament Collection</h2>
                    
                    <!-- Categories -->
                    <div class="flex flex-wrap justify-center gap-4 mb-12">
                        <button class="category-filter active bg-orange-600 text-white px-6 py-2 rounded-full font-medium" data-category="all">All Categories</button>
                        <button class="category-filter bg-gray-200 text-gray-700 hover:bg-gray-300 px-6 py-2 rounded-full font-medium transition duration-300" data-category="wedding">Wedding</button>
                        <button class="category-filter bg-gray-200 text-gray-700 hover:bg-gray-300 px-6 py-2 rounded-full font-medium transition duration-300" data-category="corporate">Corporate</button>
                        <button class="category-filter bg-gray-200 text-gray-700 hover:bg-gray-300 px-6 py-2 rounded-full font-medium transition duration-300" data-category="party">Party</button>
                        <button class="category-filter bg-gray-200 text-gray-700 hover:bg-gray-300 px-6 py-2 rounded-full font-medium transition duration-300" data-category="holiday">Holiday</button>
                    </div>

                    <!-- Product Grid -->
                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                        <!-- Product 1 -->
                        <div class="product-card bg-white rounded-lg shadow-md overflow-hidden card-hover" data-category="wedding">
                            <div class="h-48 bg-gradient-to-br from-pink-100 to-rose-200 flex items-center justify-center">
                                <svg class="w-16 h-16 text-pink-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                                </svg>
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-lg mb-2">Elegant Wedding Centerpieces</h3>
                                <p class="text-gray-600 text-sm mb-3">Beautiful crystal and floral centerpieces perfect for wedding receptions.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-orange-600 font-bold">$45/day</span>
                                    <button class="product-details bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm transition duration-300" data-product="wedding-centerpieces">View Details</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 2 -->
                        <div class="product-card bg-white rounded-lg shadow-md overflow-hidden card-hover" data-category="corporate">
                            <div class="h-48 bg-gradient-to-br from-blue-100 to-indigo-200 flex items-center justify-center">
                                <svg class="w-16 h-16 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-lg mb-2">Professional Event Lighting</h3>
                                <p class="text-gray-600 text-sm mb-3">Sophisticated lighting solutions for corporate events and conferences.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-orange-600 font-bold">$65/day</span>
                                    <button class="product-details bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm transition duration-300" data-product="corporate-lighting">View Details</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 3 -->
                        <div class="product-card bg-white rounded-lg shadow-md overflow-hidden card-hover" data-category="party">
                            <div class="h-48 bg-gradient-to-br from-purple-100 to-pink-200 flex items-center justify-center">
                                <svg class="w-16 h-16 text-purple-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-lg mb-2">Party Balloon Arrangements</h3>
                                <p class="text-gray-600 text-sm mb-3">Colorful and creative balloon displays for birthdays and celebrations.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-orange-600 font-bold">$35/day</span>
                                    <button class="product-details bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm transition duration-300" data-product="party-balloons">View Details</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 4 -->
                        <div class="product-card bg-white rounded-lg shadow-md overflow-hidden card-hover" data-category="holiday">
                            <div class="h-48 bg-gradient-to-br from-green-100 to-red-200 flex items-center justify-center">
                                <svg class="w-16 h-16 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l.09.26 2.78 8.57h9.03l-7.31 5.31 2.78 8.57L12 19.4l-7.37 5.31 2.78-8.57L.1 10.83h9.03L12 2z"/>
                                </svg>
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-lg mb-2">Holiday Decorations</h3>
                                <p class="text-gray-600 text-sm mb-3">Festive ornaments and decorations for Christmas and seasonal celebrations.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-orange-600 font-bold">$25/day</span>
                                    <button class="product-details bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm transition duration-300" data-product="holiday-decor">View Details</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 5 -->
                        <div class="product-card bg-white rounded-lg shadow-md overflow-hidden card-hover" data-category="wedding">
                            <div class="h-48 bg-gradient-to-br from-yellow-100 to-orange-200 flex items-center justify-center">
                                <svg class="w-16 h-16 text-yellow-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9.5 3A6.5 6.5 0 0 1 16 9.5c0 1.61-.59 3.09-1.56 4.23l.27.27h.79l5 5-1.5 1.5-5-5v-.79l-.27-.27A6.516 6.516 0 0 1 9.5 16a6.5 6.5 0 0 1 0-13zm0 2C7 5 5 7 5 9.5S7 14 9.5 14 14 12 14 9.5 12 5 9.5 5z"/>
                                </svg>
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-lg mb-2">Vintage Wedding Decor</h3>
                                <p class="text-gray-600 text-sm mb-3">Classic and vintage-inspired ornaments for timeless wedding celebrations.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-orange-600 font-bold">$55/day</span>
                                    <button class="product-details bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm transition duration-300" data-product="vintage-wedding">View Details</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 6 -->
                        <div class="product-card bg-white rounded-lg shadow-md overflow-hidden card-hover" data-category="corporate">
                            <div class="h-48 bg-gradient-to-br from-gray-100 to-blue-200 flex items-center justify-center">
                                <svg class="w-16 h-16 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                                </svg>
                            </div>
                            <div class="p-4">
                                <h3 class="font-semibold text-lg mb-2">Executive Table Settings</h3>
                                <p class="text-gray-600 text-sm mb-3">Premium table decorations for business dinners and corporate galas.</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-orange-600 font-bold">$75/day</span>
                                    <button class="product-details bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm transition duration-300" data-product="executive-tables">View Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Product Detail Modal -->
        <div id="product-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
            <div class="bg-white rounded-lg max-w-2xl w-full max-h-screen overflow-y-auto">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 id="modal-title" class="text-2xl font-bold text-gray-800"></h3>
                        <button id="close-modal" class="text-gray-500 hover:text-gray-700">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                    <div id="modal-content" class="space-y-4">
                        <!-- Content will be populated by JavaScript -->
                    </div>
                    <div class="mt-6 flex gap-4">
                        <button class="bg-orange-600 hover:bg-orange-700 text-white px-6 py-2 rounded-lg font-medium transition duration-300 flex-1">Request Quote</button>
                        <button class="border-2 border-gray-300 text-gray-700 hover:bg-gray-50 px-6 py-2 rounded-lg font-medium transition duration-300 flex-1">Add to Wishlist</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Page -->
        <div id="about-page" class="page hidden">
            <!-- Hero Section -->
            <section class="bg-gradient-to-r from-orange-600 to-orange-700 text-white py-20 px-4">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-4xl md:text-5xl font-bold mb-6">About Our Rental Service</h2>
                    <p class="text-xl md:text-2xl">We specialize in providing premium ornament rental solutions to make your events truly unforgettable.</p>
                </div>
            </section>

            <!-- Story Section -->
            <section class="py-16 px-4 bg-white">
                <div class="max-w-6xl mx-auto">
                    <div class="grid md:grid-cols-2 gap-12 items-center">
                        <div>
                            <h3 class="text-3xl font-bold mb-6 text-gray-800">Our Story</h3>
                            <p class="text-gray-600 mb-6">Founded with a passion for creating memorable experiences, our ornament rental service has been transforming events for over a decade. We understand that every celebration is unique and deserves decorations that reflect its special character.</p>
                            <p class="text-gray-600 mb-6">From intimate gatherings to grand corporate events, we've curated an extensive collection of high-quality ornaments and decorations that cater to diverse themes and styles. Our commitment to excellence has made us the trusted choice for event planners and individuals alike.</p>
                            <p class="text-gray-600">We believe that beautiful decorations shouldn't be a luxury, which is why we offer flexible rental options that make premium ornaments accessible for any budget.</p>
                        </div>
                        <div class="bg-gradient-to-br from-orange-100 to-pink-100 rounded-lg p-8 text-center">
                            <svg class="w-24 h-24 mx-auto mb-4 text-orange-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            <h4 class="text-2xl font-bold text-gray-800 mb-2">10+ Years</h4>
                            <p class="text-gray-600">of Creating Beautiful Events</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Values Section -->
            <section class="py-16 px-4 bg-gray-50">
                <div class="max-w-7xl mx-auto">
                    <h3 class="text-3xl font-bold text-center mb-12 text-gray-800">Our Values</h3>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="text-center p-6">
                            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h4 class="text-xl font-semibold mb-3 text-gray-800">Quality First</h4>
                            <p class="text-gray-600">We carefully select and maintain every piece in our collection to ensure the highest quality for your events.</p>
                        </div>
                        <div class="text-center p-6">
                            <div class="w-16 h-16 bg-emerald-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20a3 3 0 01-3-3v-2a3 3 0 013-3 3 3 0 013 3v2a3 3 0 01-3 3z"></path>
                                </svg>
                            </div>
                            <h4 class="text-xl font-semibold mb-3 text-gray-800">Customer Focused</h4>
                            <p class="text-gray-600">Your satisfaction is our priority. We work closely with you to understand your vision and bring it to life.</p>
                        </div>
                        <div class="text-center p-6">
                            <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h4 class="text-xl font-semibold mb-3 text-gray-800">Innovation</h4>
                            <p class="text-gray-600">We continuously expand our collection with the latest trends and timeless classics to meet evolving needs.</p>
                        </div>