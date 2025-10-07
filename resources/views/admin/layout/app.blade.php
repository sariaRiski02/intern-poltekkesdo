<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('title', 'Poltekkesdo')</title>
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Additional Meta Tags -->
    <meta name="description" content="Admin Dashboard Poltekkesdo - Management System">
    <link rel="icon" type="image/png" href="/images/logo.png">
</head>
<body class="min-h-screen bg-gradient-to-br from-emerald-50 via-blue-50 to-white relative overflow-x-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5 pointer-events-none select-none -z-10">
        <div class="absolute top-20 left-10 w-40 h-40 bg-emerald-300 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute top-40 right-20 w-56 h-56 bg-blue-300 rounded-full blur-3xl animate-pulse delay-1000"></div>
        <div class="absolute bottom-20 left-1/3 w-48 h-48 bg-emerald-200 rounded-full blur-3xl animate-pulse delay-2000"></div>
        <div class="absolute bottom-40 right-1/4 w-32 h-32 bg-cyan-300 rounded-full blur-3xl animate-pulse delay-500"></div>
    </div>

    @include('admin.navbar.sidebar')

    <!-- Main Content Area -->
    <div class="lg:ml-72 min-h-screen">
        <!-- Top Header -->
        <header class="bg-white/90 backdrop-blur-md shadow-sm border-b border-emerald-100 px-4 sm:px-6 py-4 flex justify-between items-center relative z-10">
            <div class="flex items-center gap-4">
                <button id="sidebar-toggle" class="lg:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                <div>
                    <h1 class="text-2xl font-bold text-slate-800">Dashboard</h1>
                    <p class="text-sm text-slate-500">Welcome to admin panel</p>
                </div>
            </div>

            <div class="flex items-center gap-4">
                <!-- User Profile -->
                <div class="flex items-center gap-3 px-3 py-2 rounded-xl bg-gradient-to-r from-emerald-100 to-blue-100">
                    <div class="w-8 h-8 rounded-full bg-gradient-to-r from-emerald-400 to-blue-400 flex items-center justify-center">
                        <span class="text-white text-sm font-semibold">A</span>
                    </div>
                    <div class="hidden md:block">
                        <p class="text-sm font-semibold text-slate-800">Admin</p>
                        <p class="text-xs text-slate-500">Administrator</p>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content -->
        <main class="p-6">
            <div class="max-w-7xl mx-auto">


                <!-- Content Area -->
                <div class="bg-white/90 backdrop-blur-md rounded-3xl shadow-xl border border-emerald-100 overflow-hidden">
                    @yield('content')
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="px-6 py-4 mt-auto border-t border-emerald-100 bg-white/50 backdrop-blur-sm">
            <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center text-sm text-slate-500">
                <div class="mb-2 md:mb-0">
                    &copy; {{ date('Y') }} Admin Panel - Poltekkesdo. All rights reserved.
                </div>
                <div class="flex items-center gap-4">
                    <span>Version 1.0</span>

                </div>
            </div>
        </footer>
    </div>

    <!-- JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        // Sidebar toggle functionality
        const sidebarToggle = document.getElementById('sidebar-toggle');
        const sidebarClose = document.getElementById('sidebar-close');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebar-overlay');

        function openSidebar() {
            sidebar.classList.remove('-translate-x-full');
            sidebarOverlay.classList.remove('hidden');
            // Don't add overflow-hidden to body for better mobile experience
        }

        function closeSidebar() {
            sidebar.classList.add('-translate-x-full');
            sidebarOverlay.classList.add('hidden');
            // Remove any overflow restrictions
            document.body.classList.remove('overflow-hidden');
        }

        sidebarToggle?.addEventListener('click', openSidebar);
        sidebarClose?.addEventListener('click', closeSidebar);
        sidebarOverlay?.addEventListener('click', closeSidebar);

        // Close sidebar on window resize for larger screens
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                closeSidebar();
            }
        });
    </script>
</body>
</html>
