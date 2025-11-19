<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title') - Kedai Es Teler Sariwangi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .nav-pill {
            background-color: #d1fae5;
            color: #065f46;
            font-weight: 600;
            border-radius: 9999px;
            padding: 0.5rem 1.25rem;
            transition: all 0.3s;
        }
        .nav-pill:hover {
            background-color: #047857;
            color: white;
        }
        .nav-pill.active {
            background-color: #047857;
            color: white;
        }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="bg-gray-50 text-gray-900">

    <!-- Header -->
    <header class="bg-green-700 text-white text-center p-6 shadow-md">
        <a href="{{ route('home') }}" class="block">
            <h1 class="text-4xl font-extrabold tracking-wide">Kedai Es Teler Sariwangi</h1>
            <p class="mt-1 text-green-200 text-lg">Segarkan harimu dengan minuman spesial kami!</p>
        </a>
    </header>

    <!-- Navigation -->
    <nav class="bg-green-600 text-white">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-center gap-6 flex-wrap py-4">
                <a href="{{ route('home') }}" class="nav-pill {{ request()->routeIs('home') ? 'active' : '' }}">🏠 Home</a>
                <a href="{{ route('menu') }}" class="nav-pill {{ request()->routeIs('menu') ? 'active' : '' }}">📋 Menu</a>
                <a href="{{ route('galeri') }}" class="nav-pill {{ request()->routeIs('galeri') ? 'active' : '' }}">🖼 Galeri</a>
                <a href="{{ route('keranjang') }}" class="nav-pill {{ request()->routeIs('keranjang') ? 'active' : '' }}">🛒 Keranjang</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 mt-8 mb-12">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-green-700 text-white text-center p-6 mt-14 shadow-inner">
        <p>© {{ date('Y') }} Kedai Es Teler Sariwangi. Semua Hak Dilindungi.</p>
    </footer>

    @yield('scripts')
</body>
</html>