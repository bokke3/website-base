<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Landing Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            padding: 10px 20px;
            display: flex;
            justify-content: flex-end;
        }
        .hero {
            background: url('hero-image.jpg') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: black;
            padding-top: 60px; /* Adjust for navbar height */
        }
        .hero h1 {
            font-size: 3em;
            margin: 0;
        }
        .hero p {
            font-size: 1.5em;
            margin: 10px 0;
        }
        .hero button {
            padding: 10px 20px;
            font-size: 1em;
            background-color: #ff6600;
            border: none;
            color: white;
            cursor: pointer;
        }
        .content {
            padding: 20px;
            text-align: center;
        }
        .content h2 {
            font-size: 2em;
            margin-bottom: 20px;
        }
        .content p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }
        .testimonials {
            background-color: #f9f9f9;
            padding: 20px;
            text-align: center;
        }
        .testimonial {
            margin-bottom: 20px;
        }
        .testimonial p {
            font-size: 1em;
            font-style: italic;
        }
        .testimonial span {
            display: block;
            font-size: 0.9em;
            color: #555;
        }
        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .footer a {
            color: #ff6600;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2em;
            }
            .hero p {
                font-size: 1em;
            }
        }
        .light-theme {
            color: black;
        }
        .light-theme .hero {
            color: black;
        }
        .light-theme .hero button {
            background-color: #ff6600;
            color: white;
        }
    </style>
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
<body class="{{ app()->isProduction() ? 'light-theme' : '' }}">
    @if (Route::has('login'))
        <nav class="navbar">
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
    <div class="hero">
        <h1>Welcome to Our CMS</h1>
        <p>The best solution for managing your content</p>
        <button>Learn More</button>
    </div>
    <div class="content">
        <h2>Features & Benefits</h2>
        <p>Our CMS offers a range of features designed to make content management easy and efficient.</p>
        <p>Benefit from a user-friendly interface, powerful tools, and seamless integration with your existing systems.</p>
    </div>
    <div class="testimonials">
        <h2>What Our Users Say</h2>
        <div class="testimonial">
            <p>"This CMS has transformed the way we manage our content. It's intuitive and powerful."</p>
            <span>- Jane Doe, Company XYZ</span>
        </div>
        <div class="testimonial">
            <p>"A game-changer for our business. The features are exactly what we needed."</p>
            <span>- John Smith, Company ABC</span>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2025 CMS Company. All rights reserved.</p>
        <p><a href="/privacy-policy">Privacy Policy</a> | <a href="/terms-of-service">Terms of Service</a></p>
    </div>
</body>
</html>