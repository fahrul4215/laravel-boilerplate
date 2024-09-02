<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover the best quality meat products at affordable prices.">
    <meta name="keywords" content="meat, halal, online store, fresh, quality, beef, lamb, chicken">
    <title>Halal Meat Store</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Header -->
    <header class="bg-white shadow sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center p-4">
            <h1 class="text-lg sm:text-2xl font-bold"><a href="#home">Halal Meat Store</a></h1>
            <div class="flex items-center space-x-4">
                <div class="hidden sm:block">
                    <input id="search-bar" type="text" placeholder="Search products..." class="border rounded-lg py-1 px-2 w-48 sm:w-64">
                </div>
                <nav class="hidden sm:flex space-x-4">
                    <a href="#home" class="text-gray-600 hover:text-gray-900">Home</a>
                    <a href="#products" class="text-gray-600 hover:text-gray-900">Products</a>
                    <a href="#categories" class="text-gray-600 hover:text-gray-900">Categories</a>
                    <a href="#contact" class="text-gray-600 hover:text-gray-900">Contact</a>
                </nav>
                <button id="cart-button" class="bg-blue-500 text-white py-1 px-3 sm:py-2 sm:px-4 rounded">Cart (<span id="cart-count">0</span>)</button>
                <button id="mobile-menu-button" class="sm:hidden text-gray-600 hover:text-gray-900 ml-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden sm:hidden">
            <div class="px-4 py-2 border-t">
                <input id="mobile-search-bar" type="text" placeholder="Search products..." class="border rounded-lg py-1 px-2 w-full">
            </div>
            <nav class="px-2 pt-2 pb-4 space-y-1">
                <a href="#home" class="block text-gray-600 hover:bg-gray-200 rounded px-3 py-2">Home</a>
                <a href="#products" class="block text-gray-600 hover:bg-gray-200 rounded px-3 py-2">Products</a>
                <a href="#categories" class="block text-gray-600 hover:bg-gray-200 rounded px-3 py-2">Categories</a>
                <a href="#contact" class="block text-gray-600 hover:bg-gray-200 rounded px-3 py-2">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="bg-cover bg-center h-screen" style="background-image: url('https://source.unsplash.com/1600x900/?meat,store');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
            <div class="text-center text-white px-6">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold">Premium Halal Meat Delivered to Your Doorstep</h2>
                <p class="mt-4 text-base sm:text-lg lg:text-xl">Order fresh and quality meat products online</p>
                <a href="#products" class="mt-8 inline-block bg-blue-500 text-white py-2 px-4 rounded">Shop Now</a>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section id="categories" class="container mx-auto py-12 sm:py-16">
        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-center mb-8 sm:mb-12">Product Categories</h2>
        <div id="category-list" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-8">
            <!-- Categories will be loaded here via jQuery -->
        </div>
    </section>

    <!-- Products Section with Swiper -->
    <section id="products" class="container mx-auto py-12 sm:py-16">
        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-center mb-8 sm:mb-12">Our Products</h2>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Products will be loaded here via jQuery -->
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="bg-gray-800 text-white py-12 sm:py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-8 sm:mb-12">Get in Touch</h2>
            <form id="contact-form" class="max-w-lg mx-auto">
                <div class="mb-4">
                    <label for="name" class="block text-left">Name</label>
                    <input type="text" id="name" class="w-full p-2 rounded bg-gray-700 border border-gray-600" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-left">Email</label>
                    <input type="email" id="email" class="w-full p-2 rounded bg-gray-700 border border-gray-600" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-left">Message</label>
                    <textarea id="message" class="w-full p-2 rounded bg-gray-700 border border-gray-600" required></textarea>
                </div>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 text-center py-4">
        <p>&copy; 2024 Halal Meat Store. All rights reserved.</p>
    </footer>

    <!-- Cart Modal -->
    <div id="cart-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-lg w-11/12 sm:w-2/3 lg:w-1/2 p-6">
            <h3 class="text-xl sm:text-2xl font-bold mb-4">Shopping Cart</h3>
            <ul id="cart-items" class="mb-4">
                <!-- Cart items will be dynamically added here -->
            </ul>
            <div class="text-right">
                <p class="text-lg font-bold mb-4">Total: Rp <span id="cart-total">0</span></p>
                <button id="checkout-button" class="bg-green-500 text-white py-2 px-4 rounded">Proceed to Checkout</button>
                <button id="close-cart" class="bg-blue-500 text-white py-2 px-4 rounded">Close</button>
            </div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- jQuery Script -->
    <script>
        $(document).ready(function() {
            // Mobile menu toggle
            $('#mobile-menu-button').click(function() {
                $('#mobile-menu').toggleClass('hidden');
            });

            const categories = [
                {
                    name: 'Beef',
                    image: 'https://source.unsplash.com/400x300/?beef',
                    alt: 'Beef Category'
                },
                {
                    name: 'Lamb',
                    image: 'https://source.unsplash.com/400x300/?lamb',
                    alt: 'Lamb Category'
                },
                {
                    name: 'Chicken',
                    image: 'https://source.unsplash.com/400x300/?chicken',
                    alt: 'Chicken Category'
                }
            ];

            const products = [
                {
                    name: 'Premium Beef',
                    category: 'Beef',
                    price: 150000,
                    image: 'https://source.unsplash.com/400x300/?beef',
                    alt: 'Premium Beef'
                },
                {
                    name: 'Organic Lamb',
                    category: 'Lamb',
                    price: 200000,
                    image: 'https://source.unsplash.com/400x300/?lamb',
                    alt: 'Organic Lamb'
                },
                {
                    name: 'Fresh Chicken',
                    category: 'Chicken',
                    price: 100000,
                    image: 'https://source.unsplash.com/400x300/?chicken',
                    alt: 'Fresh Chicken'
                }
            ];

            // Load categories into the page
            function loadCategories() {
                const categoryList = $('#category-list');
                categories.forEach(category => {
                    const categoryCard = `
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                            <img src="${category.image}" alt="${category.alt}" class="w-full h-40 sm:h-48 object-cover">
                            <div class="p-4 text-center">
                                <h3 class="text-lg sm:text-xl font-semibold">${category.name}</h3>
                            </div>
                        </div>
                    `;
                    categoryList.append(categoryCard);
                });
            }

            // Load products into the Swiper slider
            function loadProducts() {
                const swiperWrapper = $('.swiper-wrapper');
                products.forEach(product => {
                    const productSlide = `
                        <div class="swiper-slide bg-white shadow-lg rounded-lg overflow-hidden">
                            <img src="${product.image}" alt="${product.alt}" class="w-full h-40 sm:h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-lg sm:text-xl font-semibold">${product.name}</h3>
                                <p class="mt-2">Price: Rp ${product.price.toLocaleString()}</p>
                                <button class="mt-4 bg-blue-500 text-white py-1 px-3 sm:py-2 sm:px-4 rounded add-to-cart" data-product="${product.name}" data-price="${product.price}">Add to Cart</button>
                            </div>
                        </div>
                    `;
                    swiperWrapper.append(productSlide);
                });

                // Initialize Swiper
                new Swiper('.swiper-container', {
                    loop: true,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                });
            }

            loadCategories();
            loadProducts();

            // Search function
            function searchProducts(query) {
                const filteredProducts = products.filter(product => product.name.toLowerCase().includes(query.toLowerCase()));
                const swiperWrapper = $('.swiper-wrapper');
                swiperWrapper.empty();
                filteredProducts.forEach(product => {
                    const productSlide = `
                        <div class="swiper-slide bg-white shadow-lg rounded-lg overflow-hidden">
                            <img src="${product.image}" alt="${product.alt}" class="w-full h-40 sm:h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-lg sm:text-xl font-semibold">${product.name}</h3>
                                <p class="mt-2">Price: Rp ${product.price.toLocaleString()}</p>
                                <button class="mt-4 bg-blue-500 text-white py-1 px-3 sm:py-2 sm:px-4 rounded add-to-cart" data-product="${product.name}" data-price="${product.price}">Add to Cart</button>
                            </div>
                        </div>
                    `;
                    swiperWrapper.append(productSlide);
                });

                // Reinitialize Swiper after filtering
                new Swiper('.swiper-container', {
                    loop: true,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                });
            }

            // Handle search input
            $('#search-bar').on('input', function() {
                const query = $(this).val();
                searchProducts(query);
            });

            $('#mobile-search-bar').on('input', function() {
                const query = $(this).val();
                searchProducts(query);
            });

            // Cart functionality
            let cart = [];

            function updateCart() {
                $('#cart-count').text(cart.length);
                const cartItems = $('#cart-items');
                cartItems.empty();
                let total = 0;
                if (cart.length === 0) {
                    cartItems.append('<li class="text-center text-gray-600">Your cart is empty.</li>');
                } else {
                    cart.forEach(item => {
                        cartItems.append(`<li class="border-b py-2">${item.name} - Rp ${item.price.toLocaleString()}</li>`);
                        total += item.price;
                    });
                }
                $('#cart-total').text(total.toLocaleString());
            }

            // Add to cart button click
            $(document).on('click', '.add-to-cart', function() {
                const productName = $(this).data('product');
                const productPrice = $(this).data('price');
                cart.push({ name: productName, price: productPrice });
                updateCart();
                alert(productName + " has been added to your cart!");
            });

            // Show cart modal
            $('#cart-button').click(function() {
                $('#cart-modal').removeClass('hidden').addClass('flex');
            });

            // Close cart modal
            $('#close-cart').click(function() {
                $('#cart-modal').removeClass('flex').addClass('hidden');
            });

            // Proceed to checkout (this is a placeholder for payment integration)
            $('#checkout-button').click(function() {
                alert("Proceeding to payment gateway...");
                // Here you would redirect to or integrate with a payment gateway
            });

            // Contact form submission
            $('#contact-form').submit(function(event) {
                event.preventDefault();
                alert("Thank you for reaching out! We'll get back to you soon.");
                $(this).trigger("reset");
            });
        });
    </script>

</body>
</html>
