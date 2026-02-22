<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - Shree Momai Krupa Taxi Service</title>
    <meta name="description" content="@yield('meta_description', 'Premier Taxi Service in Jamnagar')">
    
    <!-- Tailwind CSS CDN with Custom Config -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        html {
            scroll-behavior: smooth;
        }

        * {
            font-family: 'Poppins', sans-serif;
        }

        /* Primary Colors */
        :root {
            --primary: #1a3a52;
            --accent: #FFC107;
        }

        .bg-primary { background-color: #1a3a52; }
        .text-primary { color: #1a3a52; }
        .text-accent { color: #FFC107; }
        .bg-accent { background-color: #FFC107; }
        .border-accent { border-color: #FFC107; }

        /* Utility Classes */
        .container-max {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn-accent {
            background-color: #FFC107;
            color: #1a3a52;
            padding: 10px 24px;
            border-radius: 6px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-accent:hover {
            background-color: #e0a800;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(255, 193, 7, 0.3);
        }

        .btn-primary {
            background-color: #1a3a52;
            color: white;
            padding: 12px 28px;
            border-radius: 6px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary:hover {
            background-color: #0f2438;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(26, 58, 82, 0.3);
        }

        /* Animations */
        @keyframes slideDown {
            from { transform: translateY(-100%); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 0 0 rgba(255, 193, 7, 0.7); }
            50% { box-shadow: 0 0 0 10px rgba(255, 193, 7, 0); }
        }

        .animate-slide-down { animation: slideDown 0.3s ease; }
        .animate-fade { animation: fadeIn 0.6s ease; }
        .animate-pulse-glow { animation: pulse-glow 2s infinite; }
    </style>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1a3a52',
                        accent: '#FFC107',
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- External Stylesheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/header-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/hero.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/hero-enhanced.css') }}">

    @yield('extra_css')
</head>
<body class="bg-white">
    <!-- Header -->
    @include('layouts.header')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layouts.footer')

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Global Animation Utilities -->
    <script src="{{ asset('js/animations.js') }}"></script>
    
    <!-- Header Management -->
    <script src="{{ asset('js/header.js') }}"></script>
    
    <!-- Header Slider -->
    <script src="{{ asset('js/header-slider.js') }}"></script>
    
    <!-- Hero Section & Quick Booking -->
    <script src="{{ asset('js/hero.js') }}"></script>

    @yield('extra_js')
</body>
</html>
