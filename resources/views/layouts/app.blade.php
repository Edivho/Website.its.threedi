<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Its.Threedi — Thrift Store & Business Partner')</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Premium curated vintage & modern thrift store in Jakarta Selatan and your strategic business package partner. Start your successful thrift business today.">
    <meta name="keywords" content="Its.Threedi, Thrift Store, Paket Usaha Thrift, Vintage Clothes, Jakarta Selatan, Jagakarsa">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS (Tailwind CDN / Vite Asset compiler) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#810B38',
                        dark: '#541A1A',
                        'brand-bg': '#F1E2D1',
                        'brand-light': '#FAF6F0',
                        accent: '#DCC3AA',
                        'accent-dark': '#C4A78D',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                        display: ['Space Grotesk', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- Alpine.js (Native Interactivity) -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Custom Style tweaks -->
    <style>
        body {
            background-color: #F1E2D1;
            color: #541A1A;
            -webkit-font-smoothing: antialiased;
        }
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #F1E2D1;
        }
        ::-webkit-scrollbar-thumb {
            background: #DCC3AA;
            border-radius: 3px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #810B38;
        }
    </style>
</head>
<body class="min-h-screen antialiased overflow-x-hidden selection:bg-primary selection:text-white">

    <!-- Header / Navbar -->
    @include('components.navbar')

    <!-- Main Content Slot -->
    <main class="relative">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')

</body>
</html>
