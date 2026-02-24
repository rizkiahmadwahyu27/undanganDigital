<!DOCTYPE html>
<html lang="en" x-data="{ sidebarOpen: false }">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Dashboard Admin') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <script src="https://unpkg.com/lucide@latest"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans">

    <!-- MOBILE OVERLAY -->
    <div 
        class="fixed inset-0 bg-black/40 z-30 lg:hidden"
        x-show="sidebarOpen"
        @click="sidebarOpen = false"
        x-transition.opacity>
    </div>

    <!-- SIDEBAR -->
    <aside 
        class="fixed top-0 left-0 w-64 h-full bg-white shadow-lg z-40 transform 
               lg:translate-x-0 transition-transform duration-300"
        :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
    >
        <div class="p-4 border-b">
            <h2 class="text-lg font-semibold">Admin Panel</h2>
        </div>

        <nav class="p-4 space-y-1">
            <a href="{{route('admin.dashboard')}}" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-200">
                <i data-lucide="home" class="w-5"></i>
                Dashboard
            </a>

            <a href="{{route('undangan3')}}" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-200">
                <i data-lucide="users" class="w-5"></i>
                Data User
            </a>

            <a href="{{route('admin.order_undangan')}}" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-200">
                <i data-lucide="folder" class="w-5"></i>
                Data Order
            </a>
            <a href="{{route('contoh_undangan')}}" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-200">
                <i data-lucide="folder" class="w-5"></i>
                contoh undangan
            </a>

            <a href="#" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-200">
                <i data-lucide="settings" class="w-5"></i>
                Pengaturan
            </a>
        </nav>
    </aside>

    <!-- MAIN CONTENT -->
    <div class="lg:ml-64">

        <!-- TOP NAV -->
        <header class="bg-white shadow p-4 flex items-center justify-between sticky top-0 z-20">
            <button 
                class="lg:hidden p-2 rounded hover:bg-gray-200" 
                @click="sidebarOpen = true">
                <i data-lucide="menu" class="w-6"></i>
            </button>

            <h1 class="text-xl font-semibold">Dashboard</h1>

            <div>
                <button class="p-2 rounded hover:bg-gray-200">
                    <i data-lucide="user" class="w-6"></i>
                </button>
            </div>
        </header>

        <!-- PAGE CONTENT -->
        <main class="p-6">
            @yield('content')
        </main>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
