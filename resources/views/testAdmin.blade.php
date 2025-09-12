<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>Dashboard - Magang Poltekkes Manado</title>

    <!-- AOS & Chart.js -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>

  </head>
  <body class="bg-gradient-to-br from-slate-50 via-blue-50 to-emerald-50 min-h-screen">

    <!-- Sidebar -->
    <div class="flex">
      <aside class="w-72 min-h-screen bg-white/95 backdrop-blur-sm border-r border-emerald-100 shadow-lg fixed z-40">
        <div class="p-6 border-b border-emerald-100">
          <div class="flex items-center gap-3">
            <div class="relative">
              <img src="/images/logo.png" alt="Logo Kemenkes" class="h-10 w-10 object-contain" />
              <div class="absolute -inset-1 bg-gradient-to-r from-emerald-400 to-blue-400 rounded-full blur opacity-25"></div>
            </div>
            <div>
              <h1 class="font-bold text-lg text-emerald-800">Poltekkes Manado</h1>
              <p class="text-xs text-blue-600 font-medium">Dashboard Magang</p>
            </div>
          </div>
        </div>

        <!-- User Profile -->
        <div class="p-6 border-b border-slate-200">
          <div class="flex items-center gap-3">
            <div class="w-12 h-12 bg-gradient-to-r from-emerald-400 to-blue-400 rounded-full flex items-center justify-center text-white font-semibold">
              AD
            </div>
            <div>
              <h3 class="font-semibold text-slate-800">Admin Dashboard</h3>
              <p class="text-sm text-slate-500">Administrator</p>
            </div>
          </div>
        </div>

        <!-- Navigation Menu -->
        <nav class="p-4">
          <ul class="space-y-2">
            <li>
              <a href="#" class="flex items-center gap-3 px-4 py-3 bg-gradient-to-r from-emerald-500 to-blue-500 text-white rounded-xl shadow-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2V7"></path>
                </svg>
                Dashboard
              </a>
            </li>
            <li>
              <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:text-emerald-600 hover:bg-emerald-50 rounded-xl transition-all duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                </svg>
                Peserta Magang
              </a>
            </li>
            <li>
              <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:text-emerald-600 hover:bg-emerald-50 rounded-xl transition-all duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                </svg>
                Program Magang
              </a>
            </li>
            <li>
              <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:text-emerald-600 hover:bg-emerald-50 rounded-xl transition-all duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                </svg>
                Laporan
              </a>
            </li>
            <li>
              <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-600 hover:text-emerald-600 hover:bg-emerald-50 rounded-xl transition-all duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                </svg>
                Pengaturan
              </a>
            </li>
          </ul>
        </nav>

        <!-- Logout Button -->
        <div class="absolute bottom-6 left-4 right-4">
          <button class="w-full flex items-center gap-3 px-4 py-3 text-red-600 hover:text-red-700 hover:bg-red-50 rounded-xl transition-all duration-200">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
            </svg>
            Logout
          </button>
        </div>
      </aside>

      <!-- Main Content -->
      <main class="flex-1 ml-72">
        <!-- Header -->
        <header class="bg-white/95 backdrop-blur-sm border-b border-emerald-100 px-8 py-6 sticky top-0 z-30">
          <div class="flex items-center justify-between">
            <div>
              <h1 class="text-2xl font-bold text-slate-800">Dashboard Magang</h1>
              <p class="text-slate-500">Selamat datang di sistem manajemen magang</p>
            </div>
            <div class="flex items-center gap-4">
              <!-- Notification -->
              <button class="relative p-2 text-slate-600 hover:text-emerald-600 hover:bg-emerald-50 rounded-xl transition-all duration-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                </svg>
                <span class="absolute -top-1 -right-1 w-3 h-3 bg-red-500 rounded-full"></span>
              </button>

              <!-- User Menu -->
              <div class="flex items-center gap-3">
                <div class="text-right">
                  <p class="text-sm font-semibold text-slate-800">Admin</p>
                  <p class="text-xs text-slate-500">Online</p>
                </div>
                <div class="w-10 h-10 bg-gradient-to-r from-emerald-400 to-blue-400 rounded-full flex items-center justify-center text-white font-semibold">
                  AD
                </div>
              </div>
            </div>
          </div>
        </header>

        <!-- Dashboard Content -->
        <div class="p-8 space-y-8">
          <!-- Stats Cards -->
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card 1 -->
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 border border-emerald-100 shadow-lg hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
              <div class="flex items-center justify-between">
                <div>
                  <p class="text-slate-600 text-sm font-medium">Total Peserta</p>
                  <p class="text-3xl font-bold text-emerald-600 mt-2">245</p>
                  <p class="text-emerald-500 text-sm mt-1">↑ 12% dari bulan lalu</p>
                </div>
                <div class="w-14 h-14 bg-gradient-to-r from-emerald-400 to-emerald-500 rounded-2xl flex items-center justify-center">
                  <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                  </svg>
                </div>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 border border-blue-100 shadow-lg hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
              <div class="flex items-center justify-between">
                <div>
                  <p class="text-slate-600 text-sm font-medium">Program Aktif</p>
                  <p class="text-3xl font-bold text-blue-600 mt-2">12</p>
                  <p class="text-blue-500 text-sm mt-1">3 program baru</p>
                </div>
                <div class="w-14 h-14 bg-gradient-to-r from-blue-400 to-blue-500 rounded-2xl flex items-center justify-center">
                  <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                  </svg>
                </div>
              </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 border border-emerald-100 shadow-lg hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
              <div class="flex items-center justify-between">
                <div>
                  <p class="text-slate-600 text-sm font-medium">Lulus Bulan Ini</p>
                  <p class="text-3xl font-bold text-emerald-600 mt-2">38</p>
                  <p class="text-emerald-500 text-sm mt-1">97% tingkat kelulusan</p>
                </div>
                <div class="w-14 h-14 bg-gradient-to-r from-emerald-400 to-blue-400 rounded-2xl flex items-center justify-center">
                  <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                  </svg>
                </div>
              </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 border border-blue-100 shadow-lg hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="400">
              <div class="flex items-center justify-between">
                <div>
                  <p class="text-slate-600 text-sm font-medium">Pendaftar Baru</p>
                  <p class="text-3xl font-bold text-blue-600 mt-2">67</p>
                  <p class="text-blue-500 text-sm mt-1">↑ 8% minggu ini</p>
                </div>
                <div class="w-14 h-14 bg-gradient-to-r from-blue-400 to-emerald-400 rounded-2xl flex items-center justify-center">
                  <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                  </svg>
                </div>
              </div>
            </div>
          </div>

          <!-- Charts Section -->
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Participation Chart -->
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 border border-emerald-100 shadow-lg" data-aos="fade-up" data-aos-delay="500">
              <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-bold text-slate-800">Partisipasi Bulanan</h3>
                <select class="bg-emerald-50 border border-emerald-200 rounded-lg px-3 py-2 text-sm text-emerald-700">
                  <option>2025</option>
                  <option>2024</option>
                </select>
              </div>
              <div class="h-80">
                <canvas id="participationChart"></canvas>
              </div>
            </div>

            <!-- Program Distribution -->
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 border border-blue-100 shadow-lg" data-aos="fade-up" data-aos-delay="600">
              <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-bold text-slate-800">Distribusi Program</h3>
                <button class="text-blue-600 hover:text-blue-700 font-medium text-sm">Lihat Detail</button>
              </div>
              <div class="h-80">
                <canvas id="programChart"></canvas>
              </div>
            </div>
          </div>

          <!-- Recent Activities & Quick Actions -->
          <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Recent Activities -->
            <div class="lg:col-span-2 bg-white/80 backdrop-blur-sm rounded-2xl p-6 border border-emerald-100 shadow-lg" data-aos="fade-up" data-aos-delay="700">
              <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-bold text-slate-800">Aktivitas Terbaru</h3>
                <button class="text-emerald-600 hover:text-emerald-700 font-medium text-sm">Lihat Semua</button>
              </div>
              <div class="space-y-4">
                <div class="flex items-start gap-4 p-4 hover:bg-emerald-50 rounded-xl transition-all duration-200">
                  <div class="w-10 h-10 bg-emerald-100 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                    </svg>
                  </div>
                  <div class="flex-1">
                    <p class="font-semibold text-slate-800">Pendaftar Baru</p>
                    <p class="text-slate-600 text-sm">Sarah Johnson mendaftar program Magang Laboratorium</p>
                    <p class="text-slate-500 text-xs mt-1">2 menit yang lalu</p>
                  </div>
                </div>

                <div class="flex items-start gap-4 p-4 hover:bg-blue-50 rounded-xl transition-all duration-200">
                  <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                    </svg>
                  </div>
                  <div class="flex-1">
                    <p class="font-semibold text-slate-800">Sertifikat Disetujui</p>
                    <p class="text-slate-600 text-sm">5 peserta berhasil menyelesaikan program IT Kesehatan</p>
                    <p class="text-slate-500 text-xs mt-1">1 jam yang lalu</p>
                  </div>
                </div>

                <div class="flex items-start gap-4 p-4 hover:bg-emerald-50 rounded-xl transition-all duration-200">
                  <div class="w-10 h-10 bg-emerald-100 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                    </svg>
                  </div>
                  <div class="flex-1">
                    <p class="font-semibold text-slate-800">Program Baru</p>
                    <p class="text-slate-600 text-sm">Program Magang Farmasi telah ditambahkan</p>
                    <p class="text-slate-500 text-xs mt-1">3 jam yang lalu</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Quick Actions -->
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 border border-blue-100 shadow-lg" data-aos="fade-up" data-aos-delay="800">
              <h3 class="text-xl font-bold text-slate-800 mb-6">Aksi Cepat</h3>
              <div class="space-y-4">
                <button class="w-full flex items-center gap-3 p-4 bg-gradient-to-r from-emerald-500 to-emerald-600 hover:from-emerald-600 hover:to-emerald-700 text-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                  </svg>
                  Tambah Program
                </button>

                <button class="w-full flex items-center gap-3 p-4 bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                  </svg>
                  Buat Laporan
                </button>

                <button class="w-full flex items-center gap-3 p-4 border-2 border-emerald-200 text-emerald-600 hover:bg-emerald-50 hover:border-emerald-300 rounded-xl transition-all duration-300">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                  </svg>
                  Export Data
                </button>
              </div>

              <!-- Calendar Widget -->
              <div class="mt-8 p-4 bg-gradient-to-br from-slate-50 to-emerald-50 rounded-xl border border-emerald-100">
                <h4 class="font-semibold text-slate-800 mb-3">Jadwal Hari Ini</h4>
                <div class="space-y-2">
                  <div class="flex items-center gap-2 text-sm">
                    <div class="w-2 h-2 bg-emerald-400 rounded-full"></div>
                    <span class="text-slate-600">09:00 - Review Aplikasi</span>
                  </div>
                  <div class="flex items-center gap-2 text-sm">
                    <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                    <span class="text-slate-600">14:00 - Meeting Tim</span>
                  </div>
                  <div class="flex items-center gap-2 text-sm">
                    <div class="w-2 h-2 bg-amber-400 rounded-full"></div>
                    <span class="text-slate-600">16:30 - Follow-up Verifikasi Dokumen</span>
                  </div>
                </div>
                <div class="mt-4">
                  <button class="text-xs font-medium text-emerald-700 hover:text-emerald-800 underline underline-offset-4">
                    Lihat Kalender
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Footer -->
          <footer class="pt-4 text-center text-xs text-slate-500">
            © <span id="year"></span> Poltekkes Kemenkes Manado — Sistem Magang
          </footer>
        </div>
      </main>
    </div>

    @livewireScripts
    @vite('resources/js/app.js')

    <script>
      // Tahun di footer
      document.getElementById('year').textContent = new Date().getFullYear();

      // Init AOS
      AOS.init({
        once: true,
        duration: 700,
        easing: 'ease-out-quart'
      });

      // Chart.js configs
      const participationCtx = document.getElementById('participationChart').getContext('2d');
      const programCtx = document.getElementById('programChart').getContext('2d');

      // Partisipasi Bulanan (Line)
      new Chart(participationCtx, {
        type: 'line',
        data: {
          labels: ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'],
          datasets: [{
            label: 'Peserta Aktif',
            data: [120, 138, 132, 150, 162, 175, 168, 182, 190, 205, 210, 225],
            borderWidth: 3,
            fill: true,
            tension: 0.35
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: { display: true }
          },
          scales: {
            y: { beginAtZero: true, grid: { drawBorder: false } },
            x: { grid: { display: false } }
          }
        }
      });

      // Distribusi Program (Doughnut)
      new Chart(programCtx, {
        type: 'doughnut',
        data: {
          labels: ['IT Kesehatan', 'Farmasi', 'Keperawatan', 'Gizi', 'Analis Lab'],
          datasets: [{
            label: 'Jumlah Peserta',
            data: [45, 30, 28, 22, 15],
            borderWidth: 0
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: { position: 'bottom' }
          },
          cutout: '60%'
        }
      });
    </script>
  </body>
</html>
