<!-- Sidebar (Mobile toggle) -->
    <div id="sidebar-overlay" class="fixed inset-0 z-40 lg:hidden hidden backdrop-blur-[4px]"></div>

    <!-- Sidebar -->
    <aside id="sidebar" class="fixed top-0 left-0 z-50 w-64 sm:w-80 md:w-72 h-full bg-white/95 backdrop-blur-lg shadow-2xl border-r border-emerald-100 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 max-w-[40vw] sm:max-w-[60vw] md:max-w-none">
        <!-- Logo Section -->
        <div class="flex items-center justify-between p-4 sm:p-6 border-b border-emerald-100">
            <div class="flex items-center gap-2 sm:gap-3">
                <div class="relative">
                    <img src="/images/logo.png" alt="Logo" class="h-10 w-10 sm:h-12 sm:w-12 object-contain">
                    <div class="absolute -inset-1 bg-gradient-to-r from-emerald-400 to-blue-400 rounded-full blur opacity-25"></div>
                </div>
                <div class="hidden sm:block">
                    <h2 class="text-base sm:text-lg font-bold bg-gradient-to-r from-emerald-600 to-blue-600 bg-clip-text text-transparent">Admin Panel</h2>
                    <p class="text-xs text-slate-500">Poltekkesdo</p>
                </div>
            </div>
            <button id="sidebar-close" class="lg:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors">
                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Navigation Menu -->
        <nav class="p-3 sm:p-4 space-y-1 sm:space-y-2 overflow-y-auto">
            <div class="mb-4 sm:mb-6">
                <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider px-2 sm:px-3 mb-2 sm:mb-3">Main Menu</p>

                <!-- Dashboard -->
                <a href="{{ route('dashboard') }}"
                class="flex items-center gap-2 sm:gap-3 px-2 sm:px-3 py-2 sm:py-3 rounded-xl font-medium text-slate-700
                hover:bg-gradient-to-r hover:from-emerald-100 hover:to-blue-100 hover:text-emerald-700 transition-all duration-300 group
                {{ request()->routeIs('dashboard') ? 'bg-gradient-to-r from-emerald-100 to-blue-100 text-emerald-700' : '' }}">
                    <div class="p-1.5 sm:p-2 rounded-lg bg-gradient-to-r from-emerald-400 to-emerald-500 text-white group-hover:scale-110 transition-transform">
                        <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v1H8V5z"></path>
                        </svg>
                    </div>
                    <span class="text-sm sm:text-base">Dashboard</span>
                </a>

                <!-- Peserta -->
                <a href="{{ route('intern') }}"
                class="flex items-center gap-2 sm:gap-3 px-2 sm:px-3 py-2 sm:py-3 rounded-xl font-medium text-slate-700
                hover:bg-gradient-to-r hover:from-blue-100 hover:to-cyan-100 hover:text-blue-700 transition-all duration-300 group
                {{ request()->routeIs('intern') ? 'bg-gradient-to-r from-blue-100 to-cyan-100 text-blue-700' : '' }}">
                    <div class="p-1.5 sm:p-2 rounded-lg bg-gradient-to-r from-blue-400 to-blue-500 text-white group-hover:scale-110 transition-transform">
                        <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                        </svg>
                    </div>
                    <span class="text-sm sm:text-base">Peserta</span>
                </a>

                <!-- Departemen -->
                <a href="{{ route('department') }}"
                class="flex items-center gap-2 sm:gap-3 px-2 sm:px-3 py-2 sm:py-3 rounded-xl font-medium text-slate-700
                hover:bg-gradient-to-r hover:from-cyan-100 hover:to-teal-100 hover:text-cyan-700 transition-all duration-300 group
                {{ request()->routeIs('department') ? 'bg-gradient-to-r from-cyan-100 to-teal-100 text-cyan-700' : '' }}">
                    <div class="p-1.5 sm:p-2 rounded-lg bg-gradient-to-r from-cyan-400 to-cyan-500 text-white group-hover:scale-110 transition-transform">
                        <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <span class="text-sm sm:text-base">Departemen</span>
                </a>

                <!-- Tambahkan Peserta -->
                <a href="{{ route('add-intern') }}"
                class="flex items-center gap-2 sm:gap-3 px-2 sm:px-3 py-2 sm:py-3 rounded-xl font-medium text-slate-700
                hover:bg-gradient-to-r hover:from-teal-100 hover:to-emerald-100 hover:text-teal-700 transition-all duration-300 group
                {{ request()->routeIs('add-intern') ? 'bg-gradient-to-r from-teal-100 to-emerald-100 text-teal-700' : '' }}">
                    <div class="p-1.5 sm:p-2 rounded-lg bg-gradient-to-r from-teal-400 to-teal-500 text-white group-hover:scale-110 transition-transform">
                        <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <span class="text-sm sm:text-base">Tambahkan Peserta</span>
                </a>
            </div>

            <div class="border-t border-emerald-100 pt-3 sm:pt-4">
                <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider px-2 sm:px-3 mb-2 sm:mb-3">Account</p>

                <a href="{{ route('profile') }}" class="flex items-center gap-2 sm:gap-3 px-2 sm:px-3 py-2 sm:py-3 rounded-xl font-medium text-slate-700 hover:bg-gradient-to-r hover:from-violet-100 hover:to-purple-100 hover:text-violet-700 transition-all duration-300 group  {{ request()->routeIs('profile') ? 'bg-gradient-to-r from-violet-100 to-purple-100 text-violet-700' : '' }}">
                    <div class="p-1.5 sm:p-2 rounded-lg bg-gradient-to-r from-violet-400 to-violet-500 text-white group-hover:scale-110 transition-transform">
                        <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <span class="text-sm sm:text-base">Profil</span>
                </a>


                <a href="/logout" class="flex items-center gap-2 sm:gap-3 px-2 sm:px-3 py-2 sm:py-3 rounded-xl font-medium text-slate-700 hover:bg-gradient-to-r hover:from-red-100 hover:to-pink-100 hover:text-red-700 transition-all duration-300 group">
                    <div class="p-1.5 sm:p-2 rounded-lg bg-gradient-to-r from-red-400 to-red-500 text-white group-hover:scale-110 transition-transform">
                        <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                    </div>
                    <span class="text-sm sm:text-base">Logout</span>
                </a>
            </div>
        </nav>
    </aside>
