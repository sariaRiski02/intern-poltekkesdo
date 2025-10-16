<!doctype html>
<html lang="id" class="scroll-smooth">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script>
      tailwind.config = {
        theme: {
          extend: {
            animation: {
              'fade-in': 'fadeIn 0.6s ease-out',
              'slide-up': 'slideUp 0.5s ease-out',
              'scale-in': 'scaleIn 0.4s ease-out',
            },
            keyframes: {
              fadeIn: { '0%': { opacity: '0' }, '100%': { opacity: '1' } },
              slideUp: { '0%': { transform: 'translateY(20px)', opacity: '0' }, '100%': { transform: 'translateY(0)', opacity: '1' } },
              scaleIn: { '0%': { transform: 'scale(0.95)', opacity: '0' }, '100%': { transform: 'scale(1)', opacity: '1' } }
            }
          }
        }
      }
    </script>
    @vite('resources/css/app.css')
    <title>Detail Program - Elegant Dashboard</title>
  </head>
  <body class="bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 min-h-screen font-inter">

    <!-- Background Pattern -->
    <div class="fixed inset-0 opacity-30 pointer-events-none">
      <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, rgba(148, 163, 184, 0.15) 1px, transparent 0); background-size: 32px 32px;"></div>
    </div>

    <div class="container mx-auto px-4 py-8 lg:py-12 max-w-7xl space-y-8 relative">

      <!-- Header (tetap) -->
      <div class="bg-white/80 backdrop-blur-xl rounded-3xl shadow-xl border border-white/20 p-8 animate-fade-in hover:shadow-2xl transition-all duration-300">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-6">
          <div class="space-y-2">
            <div class="flex items-center gap-3">
              <div>
                <h1 class="text-3xl lg:text-4xl font-bold text-gray-900 tracking-tight">Detail Program</h1>
                <p class="text-gray-600 mt-1 text-base lg:text-lg font-medium">Informasi komprehensif mengenai program</p>
              </div>
            </div>
          </div>
          <a href="{{ route('admin.department') }}" class="inline-flex items-center px-6 py-3 bg-gray-100 hover:bg-indigo-500 text-gray-700 hover:text-white rounded-2xl font-semibold transition-all duration-300 group shadow-md hover:shadow-xl transform hover:-translate-y-1">
            <svg class="w-5 h-5 mr-3 group-hover:-translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Kembali ke Dashboard
          </a>
        </div>
      </div>

      <!-- Content Grid -->
      <div class="grid grid-cols-1 xl:grid-cols-5 gap-8 lg:gap-10">

        <!-- Informasi Department -->
        <div class="xl:col-span-3 space-y-8">

          <!-- Data Department -->
          <div class="bg-white/80 backdrop-blur-xl rounded-3xl shadow-xl border border-white/20 overflow-hidden hover:shadow-2xl transition-all duration-500 animate-slide-up group">
            <!-- HEADER CARD POLOS -->
            <div class="px-8 py-5 bg-white border-b border-gray-200">
              <h2 class="text-2xl font-bold text-gray-900 flex items-center">
                <div class="w-10 h-10 bg-gray-100 rounded-xl flex items-center justify-center mr-4">
                  <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                  </svg>
                </div>
                Informasi Program
              </h2>
              <p class="text-gray-500 mt-1 text-sm">Data lengkap dan terperinci</p>
            </div>
            <div class="p-8">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="space-y-6">
                  <div class="p-4 rounded-2xl transition-all duration-300">
                    <p class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-1">Nama Program</p>
                    <p class="text-gray-900 font-bold text-lg">{{ $department->name }}</p>
                  </div>

                  <div class="p-4 rounded-2xl transition-all duration-300">
                    <p class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-1">Deskripsi singkat</p>
                    <p class="text-gray-900 font-semibold">{{ $department->head_desc }}</p>
                  </div>
                </div>
                <div class="space-y-6">
                  <div class="p-4 rounded-2xl transition-all duration-300">
                    <p class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-1">Deskripsi</p>
                    <p class="text-gray-900 font-semibold">{{ $department->desc }}</p>
                  </div>
                  <div class="p-4 rounded-2xl transition-all duration-300">
                    <p class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-1">Admin Pembuat</p>
                    <p class="text-gray-900 font-semibold">{{ $department->admin->fullname }}</p>
                  </div>
                  <div class="p-4 rounded-2xl transition-all duration-300">
                    <p class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-1">Tanggal Dibuat</p>
                    <p class="text-gray-900 font-semibold">{{ $department->created_at->diffForHumans() }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- Statistik & Actions -->
        <div class="xl:col-span-2 space-y-8">

          <!-- Statistik -->
          <div class="bg-white/80 backdrop-blur-xl rounded-3xl shadow-xl border border-white/20 overflow-hidden hover:shadow-2xl transition-all duration-500 animate-scale-in">
            <!-- HEADER CARD POLOS -->
            <div class="px-8 py-5 bg-white border-b border-gray-200">
              <h2 class="text-2xl font-bold text-gray-900 flex items-center">
                <div class="w-10 h-10 bg-gray-100 rounded-xl flex items-center justify-center mr-4">
                  <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                  </svg>
                </div>
                Statistik Program
              </h2>
              <p class="text-gray-500 mt-1 text-sm">Rangkuman data dan aktivitas</p>
            </div>
            <div class="p-8 space-y-6">
              <div class="flex items-center justify-between p-6 bg-emerald-50 rounded-2xl border border-emerald-100 hover:shadow-lg transition-all duration-300">
                <div class="flex items-center gap-4">
                  <div class="w-12 h-12 bg-emerald-600 rounded-2xl flex items-center justify-center shadow-lg">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                  </div>
                  <div>
                    <p class="text-gray-600 font-semibold text-sm uppercase tracking-wider">Total Pendaftar</p>
                    <p class="text-gray-900 text-xs mt-1">Jumlah peserta rekrutmen terdaftar</p>
                  </div>
                </div>
                <div class="text-right">
                  <span class="text-3xl font-bold text-emerald-600">{{ $department->intern_count }}</span>
                  <p class="text-emerald-600 text-sm font-medium mt-1">Orang</p>
                </div>
              </div>

              <div class="flex items-center justify-between p-6 bg-blue-50 rounded-2xl border border-blue-100 hover:shadow-lg transition-all duration-300">
                <div class="flex items-center gap-4">
                  <div class="w-12 h-12 bg-blue-600 rounded-2xl flex items-center justify-center shadow-lg">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                  </div>
                  <div>
                    <p class="text-gray-600 font-semibold text-sm uppercase tracking-wider">Update Terakhir</p>
                    <p class="text-gray-900 text-xs mt-1">Pembaruan data terbaru</p>
                  </div>
                </div>
                <div class="text-right">
                  <span class="text-lg font-bold text-blue-700">{{ $department->updated_at->diffForHumans() }}</span>
                </div>
              </div>
            </div>
          </div>
        </div>



      </div>
      <!-- Card untuk Requirement Department -->
        <div class="xl:col-span-2">
            <div class="bg-white/80 backdrop-blur-xl rounded-3xl shadow-xl border border-white/20 overflow-hidden hover:shadow-2xl transition-all duration-500 animate-scale-in">
            <!-- HEADER CARD POLOS -->
            <div class="px-8 py-5 bg-white border-b border-gray-200">
                <h2 class="text-2xl font-bold text-gray-900 flex items-center">
                <div class="w-10 h-10 bg-gray-100 rounded-xl flex items-center justify-center mr-4">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                    </svg>
                </div>
                Persyaratan Magang
                </h2>
                <p class="text-gray-500 mt-1 text-sm">Beberapa persyaratan yang dibutuhkan untuk mendaftar</p>
            </div>
            <div class="p-8">
                <div class="space-y-4">
                    @foreach ($requirments as $requirement)
                    <div class="flex items-start space-x-4 p-4 hover:bg-gray-50 rounded-xl transition-all duration-300">
                        <div class="flex-shrink-0 w-6 h-6 bg-indigo-100 rounded-full flex items-center justify-center mt-1">
                        <span class="text-indigo-600 font-semibold text-sm">{{ $loop->iteration }}</span>
                        </div>
                        <div>
                        <h4 class="font-semibold text-gray-900">{{ $requirement->name }}</h4>
                        </div>
                    </div>
                    @endforeach

                </div>


            </div>
            </div>
        </div>
    </div>

  </body>
</html>
