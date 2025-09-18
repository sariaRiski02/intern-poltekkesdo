<!-- Navigation -->
    <nav class="bg-white/95 backdrop-blur-sm border-b border-emerald-100 sticky top-0 z-50 shadow-sm">
      <div class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
          <a href="{{ route('home') }}" class="flex items-center gap-4 hover:opacity-80 transition-opacity">
            <div class="relative">
              <img src="/images/logo.png" alt="Logo Kemenkes" class="h-12 w-12 object-contain" />
              <div class="absolute -inset-1 bg-gradient-to-r from-emerald-400 to-blue-400 rounded-full blur opacity-25"></div>
            </div>
            <div>
              <h1 class="font-bold text-xl text-emerald-800">Poltekkes Manado</h1>
              <p class="text-xs text-blue-600 font-medium">Kementerian Kesehatan RI</p>
            </div>
          </a>

          <!-- Desktop Menu -->
          <div class="hidden md:flex items-center gap-6">
            <a href="{{ route('home') }}" class="text-emerald-700 hover:text-emerald-600 font-medium transition-colors">Beranda</a>
            <a href="{{ route('announcement') }}" class="text-emerald-700 hover:text-emerald-600 font-medium transition-colors">Pengumuman</a>
            <a href="{{ route('about') }}" class="text-emerald-700 hover:text-emerald-600 font-medium transition-colors">Tentang</a>
            <a href="{{ route('contact') }}" class="text-emerald-700 hover:text-emerald-600 font-medium transition-colors">Kontak</a>
            {{-- @guest
              <a href="{{ route('login') }}" class="bg-gradient-to-r from-blue-500 to-emerald-500 text-white font-bold px-4 py-2 rounded-lg shadow hover:from-blue-600 hover:to-emerald-600 transition-all border-2 border-blue-600 hover:border-emerald-600">
                  Login
              </a>
            @endguest --}}

            {{-- @auth --}}
              <div class="flex items-center gap-3">
                <span class="text-emerald-700 font-medium"></span>
                <form action="" method="POST" class="inline">
                  @csrf
                  <button type="submit" class="cursor-pointer bg-gradient-to-r from-red-500 to-rose-500 text-white font-bold px-4 py-2 rounded-lg shadow hover:from-red-600 hover:to-rose-600 transition-all border-2 border-red-600 hover:border-rose-600">
                      Logout
                  </button>
                </form>
              </div>
            {{-- @endauth --}}
          </div>

          <!-- Mobile Hamburger Menu -->
          <div class="md:hidden">
            <button id="mobile-menu-toggle" class="text-emerald-700 hover:text-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-500 rounded-lg p-2 transition-colors">
              <svg id="hamburger-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>
              <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </button>
          </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden mt-4 pb-4">
          <div class="flex flex-col gap-4">
            <a href="{{ route('home') }}" class="text-emerald-700 hover:text-emerald-600 font-medium transition-colors py-2 px-4 rounded-lg hover:bg-emerald-50">Beranda</a>
            <a href="{{ route('about') }}" class="text-emerald-700 hover:text-emerald-600 font-medium transition-colors py-2 px-4 rounded-lg hover:bg-emerald-50">Tentang</a>
            <a href="{{ route('contact') }}" class="text-emerald-700 hover:text-emerald-600 font-medium transition-colors py-2 px-4 rounded-lg hover:bg-emerald-50">Kontak</a>
            <a href="{{ route('announcement') }}" class="text-emerald-700 hover:text-emerald-600 font-medium transition-colors py-2 px-4 rounded-lg hover:bg-emerald-50">Pengumuman</a>

            @guest
              <a href="{{ route('login') }}" class="bg-gradient-to-r from-blue-500 to-emerald-500 text-white font-bold px-4 py-2 rounded-lg shadow hover:from-blue-600 hover:to-emerald-600 transition-all border-2 border-blue-600 hover:border-emerald-600 text-center mt-2">
                  Login
              </a>
            @endguest

            @auth
              <div class="flex flex-col gap-3 mt-2">
                <div class="text-emerald-700 font-medium px-4 py-2">Halo, {{ Auth::user()->name }}</div>
                <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="w-full bg-gradient-to-r from-red-500 to-rose-500 text-white font-bold px-4 py-2 rounded-lg shadow hover:from-red-600 hover:to-rose-600 transition-all border-2 border-red-600 hover:border-rose-600 text-center">
                      Logout
                  </button>
                </form>
              </div>
            @endauth
          </div>
        </div>
      </div>
    </nav>
