@include('head')

    <!-- Main Content -->
    <main class="pt-16" id="main-content">
        <!-- Products Page -->
        <section class="py-20 px-4">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-4xl font-bold text-center mb-12 text-gray-800">Our Ornament Collection</h2>

                <!-- Categories -->
                <div class="flex flex-wrap justify-center gap-4 mb-12">
                    <button class="category-filter active bg-primary text-white px-6 py-2 rounded-full font-medium" data-category="all">All Categories</button>
                    @php
                        $categories = $products->pluck('category')->unique();
                    @endphp
                    @foreach($categories as $category)
                        @if($category)
                            <button class="category-filter bg-gray-200 text-gray-700 hover:bg-gray-300 px-6 py-2 rounded-full font-medium transition duration-300" data-category="{{ strtolower(str_replace(' ', '-', $category)) }}">{{ $category }}</button>
                        @endif
                    @endforeach
                </div>

                <!-- Product Grid -->
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                    @forelse ($products as $product)
                        <x-product-card :product="$product" />
                    @empty
                        <p class="text-gray-500 col-span-full text-center">No products available at the moment. Please check back later.</p>
                    @endforelse
                </div>
            </div>
        </section>
    </main>

@include('footer')
