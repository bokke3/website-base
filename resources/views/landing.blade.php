<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lolololl</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
        /* Tailwind CSS styles */
        </style>
    @endif
</head>
<body class="bg-gray-100 dark:bg-gray-900">
    <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
            <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                <div class="flex lg:justify-center lg:col-start-2">
                    <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- SVG content -->
                    </svg>
                </div>
                @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                    <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Dashboard
                    </a>
                    @else
                    <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Log in
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Register
                        </a>
                    @endif
                    @endauth
                </nav>
                @endif
            </header>

            <main class="mt-6">
                <!-- Hero Section -->
                <section class="hero bg-gray-100 dark:bg-gray-800 py-20">
                    <div class="container mx-auto text-center">
                        <h1 class="text-5xl font-bold text-black dark:text-white">Welcome to Our Website</h1>
                        <p class="mt-4 text-lg text-gray-700 dark:text-gray-300">Discover the amazing features and benefits we offer.</p>
                        <a href="#features" class="mt-8 inline-block bg-[#FF2D20] text-white py-3 px-6 rounded-lg shadow-lg hover:bg-[#e0241c] transition">Learn More</a>
                    </div>
                </section>

                <!-- Scrolling Images Section -->
                <section class="scrolling-images py-20">
                    <div class="container mx-auto overflow-x-auto whitespace-nowrap">
                        @foreach ($images as $image)
                            <img src="{{ $image->url }}" alt="{{ $image->alt }}" class="inline-block h-64 mx-2">
                        @endforeach
                    </div>
                </section>

                <!-- Existing content -->
                <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                    <!-- Existing cards and content -->
                </div>
            </main>

            <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </footer>
        </div>
    </div>
</body>
</html>