<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <div class="mt-16">
        @if (Route::has('login'))
            <div class="text-center text-gray-800">
                <livewire:welcome.navigation />
            </div>
        @endif
    </div>
    <body class="antialiased font-sans bg-gray-50">
            <div class="bg-white min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8">
                <!-- Header Section -->

                <div class="text-center">
                    <h1 class="text-5xl font-extrabold text-gray-900">Welcome to NoseIQ</h1>
                    <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                        The premier platform where fragrance brands and perfumers collaborate to create groundbreaking scents.
                        Discover, connect, and innovate with a global community passionate about olfactive artistry.
                    </p>
                </div>

                <!-- Image Section -->
                <div class="mt-12 flex justify-center">
                    <img src="{{ asset('images/fragrance-banner.jpg') }}" alt="Fragrance Marketplace" class="rounded-lg shadow-lg w-full max-w-3xl h-64 object-cover" />
                </div>

                <!-- About Section -->
                <div class="mt-16 text-center max-w-3xl mx-auto">
                    <h2 class="text-3xl font-semibold text-gray-800">A New Era for Perfumery</h2>
                    <p class="mt-4 text-gray-600">
                        NoseIQ revolutionizes the way fragrance professionals collaborate. Whether you're a niche perfume house
                        seeking a master perfumer, or an independent creator looking for high-quality ingredients, our platform
                        simplifies the process.
                    </p>
                </div>

                <!-- Features Section -->
                <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <div class="p-6 bg-gray-100 rounded-lg shadow">
                        <h3 class="text-xl font-semibold text-gray-800">For Brands</h3>
                        <p class="mt-2 text-gray-600">
                            Connect with world-class perfumers and fragrance experts to craft signature scents that define your brand.
                        </p>
                    </div>
                    <div class="p-6 bg-gray-100 rounded-lg shadow">
                        <h3 class="text-xl font-semibold text-gray-800">For Perfumers</h3>
                        <p class="mt-2 text-gray-600">
                            Showcase your expertise, receive project proposals, and collaborate with top-tier fragrance brands worldwide.
                        </p>
                    </div>
                    <div class="p-6 bg-gray-100 rounded-lg shadow">
                        <h3 class="text-xl font-semibold text-gray-800">For Suppliers</h3>
                        <p class="mt-2 text-gray-600">
                            List your ingredients and materials, helping fragrance creators access the highest quality raw materials.
                        </p>
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="mt-12 flex justify-center space-x-4">
                    <a href="#learn-more" class="px-6 py-3 bg-blue-500 text-white font-semibold rounded-lg shadow-lg hover:bg-blue-600 transition duration-200">
                        Learn More
                    </a>
                    <a href="#explore" class="px-6 py-3 bg-gray-800 text-white font-semibold rounded-lg shadow-lg hover:bg-gray-900 transition duration-200">
                        Explore Marketplace
                    </a>
                </div>
            </div>
        </body>
</html>
