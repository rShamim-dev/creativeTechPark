<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Landing Page</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.3/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
        <div class="container mx-auto px-4 py-16 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Shop the Best Deals</h1>
            <p class="text-lg md:text-xl mb-6">Discover exclusive products at unbeatable prices.</p>
            <a href="#products"
                class="px-6 py-3 bg-white text-blue-600 font-semibold rounded-lg shadow hover:bg-gray-100 transition">
                Shop Now
            </a>
        </div>
    </section>

    <!-- Featured Products -->
    <section id="products" class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">Featured Products</h2>
            <div x-data="productList()" x-init="fetchProducts()" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Product Card -->
                <template x-for="product in products" :key="product.id">
                    <div class="bg-white rounded-lg shadow p-4" x-data="{ isHovered: false }" @mouseenter="isHovered = true" @mouseleave="isHovered = false">
                        <div class="relative">
                            <img :src="product.image" :alt="product.name" class="rounded-md w-full object-cover h-48" />
                            <button @click="addToCart(product)"
                                x-show="isHovered"
                                class="absolute top-2 right-2 bg-blue-600 text-white px-2 py-1 rounded hover:bg-blue-700 transition"
                                x-transition>
                                Add to Cart
                            </button>
                        </div>
                        <h3 class="text-lg font-semibold mt-4" x-text="product.name"></h3>
                        <p class="text-gray-600 mt-2" x-text="`$${product.price}`"></p>
                    </div>
                </template>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="bg-blue-50 py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">What Our Customers Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg shadow p-4 text-center">
                    <p class="text-gray-600 mb-4">"Amazing quality! I love the customer service and the product range."
                    </p>
                    <h4 class="text-lg font-semibold">- Jane Doe</h4>
                </div>
                <div class="bg-white rounded-lg shadow p-4 text-center">
                    <p class="text-gray-600 mb-4">"Fast delivery and unbeatable prices. Highly recommend this store."
                    </p>
                    <h4 class="text-lg font-semibold">- John Smith</h4>
                </div>
                <div class="bg-white rounded-lg shadow p-4 text-center">
                    <p class="text-gray-600 mb-4">"Great experience from start to finish. I'll definitely be back."</p>
                    <h4 class="text-lg font-semibold">- Sarah Lee</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2025 E-Commerce Store. All rights reserved.</p>
        </div>
    </footer>

    <script>
        function productList() {
            return {
                products: [],
                async fetchProducts() {
                    try {
                        const response = await fetch('http://127.0.0.1:8000/get-product'); // Replace with your API URL
                        this.products = await response.json();
                    } catch (error) {
                        console.error('Error fetching products:', error);
                    }
                },
                addToCart(product) {
                    alert(`Added "${product.name}" to cart!`);
                },
            };
        }
    </script>

</body>

</html>
