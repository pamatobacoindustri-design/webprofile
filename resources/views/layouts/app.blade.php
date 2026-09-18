<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'PT PAMA TOBACCO INDUSTRI — Produsen rokok nasional berkualitas tinggi dari Ds. Wangandawa, Kabupaten Tegal, Jawa Tengah.')">
    <meta name="keywords" content="pama tobacco, pabrik rokok tegal, rokok kretek, SKT, SKM, distributor rokok jawa tengah">
    <meta property="og:title" content="@yield('title', 'PT PAMA TOBACCO INDUSTRI')">
    <meta property="og:description" content="@yield('meta_description', 'Produsen rokok nasional berkualitas tinggi dari Tegal, Jawa Tengah.')">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
    <title>@yield('title', 'PT PAMA TOBACCO INDUSTRI') | Kualitas Tembakau Nasional</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    {{-- Preconnect for Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Inline styles for navbar transition --}}
    <style>
        #navbar {
            transition: background-color 0.4s ease, box-shadow 0.4s ease;
        }
        .navbar-transparent {
            background-color: transparent !important;
        }
        .navbar-scrolled {
            background-color: #ffffff !important;
            box-shadow: 0 2px 20px rgba(0,0,0,0.10) !important;
        }
        .navbar-scrolled .nav-link-white {
            color: #1C1C1E !important;
        }
        .navbar-scrolled .nav-link-white:hover {
            color: #7B1C2E !important;
        }
        .navbar-scrolled .logo-text {
            color: #7B1C2E !important;
        }
        .navbar-scrolled .logo-sub {
            color: #6B6B6B !important;
        }
        .navbar-scrolled .mobile-menu-icon {
            color: #1C1C1E !important;
        }
    </style>

    @stack('head')
</head>
<body class="bg-white">

    {{-- ─── NAVBAR ─────────────────────────────────────── --}}
    @include('partials.navbar')

    {{-- ─── MAIN CONTENT ──────────────────────────────── --}}
    <main>
        @yield('content')
    </main>

    {{-- ─── FOOTER ─────────────────────────────────────── --}}
    @include('partials.footer')

    @stack('scripts')
</body>
</html>
