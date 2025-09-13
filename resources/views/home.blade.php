@extends('layouts.app')


@section('content')



<!-- Header Title -->
    <section class="py-12">
      <div class="container mx-auto px-6 text-center">
        <h1 class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-emerald-600 to-blue-600 bg-clip-text text-transparent pb-3">
          Program Magang Poltekkes Manado
        </h1>
        <p class="text-slate-600 text-lg">Kementerian Kesehatan Republik Indonesia</p>
      </div>
    </section>



<!-- Lowongan Section -->
    <section id="lowongan" class="py-16">
      <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
          <!-- Card 1 - Administrasi -->
          <div class="group bg-white/90 backdrop-blur-sm rounded-3xl shadow-lg hover:shadow-2xl p-6 border border-emerald-100 hover:border-emerald-200 transition-all duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
            <div class="mb-4">
              <div class="w-12 h-12 bg-gradient-to-r from-emerald-400 to-emerald-500 rounded-xl flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-300">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
              </div>
              <h3 class="text-lg font-bold text-emerald-700 mb-2">Administrasi</h3>
              <p class="text-slate-600 text-sm leading-relaxed mb-4">Sistem administrasi modern dengan teknologi terintegrasi.</p>
            </div>

            <div class="space-y-2 mb-6">
              <div class="flex items-center gap-2 text-xs">
                <div class="w-1.5 h-1.5 bg-emerald-400 rounded-full"></div>
                <span class="text-slate-600">3-6 bulan</span>
              </div>
              <div class="flex items-center gap-2 text-xs">
                <div class="w-1.5 h-1.5 bg-blue-400 rounded-full"></div>
                <span class="text-slate-600">Sertifikat resmi</span>
              </div>
            </div>

            <button class="w-full bg-gradient-to-r from-emerald-500 to-emerald-600 hover:from-emerald-600 hover:to-emerald-700 text-white px-4 py-3 rounded-xl font-semibold text-sm shadow-lg hover:shadow-xl transition-all duration-300 group-hover:scale-105">
              Daftar Sekarang
            </button>
          </div>

          <!-- Card 2 - Laboratorium -->
          <div class="group bg-white/90 backdrop-blur-sm rounded-3xl shadow-lg hover:shadow-2xl p-6 border border-blue-100 hover:border-blue-200 transition-all duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
            <div class="mb-4">
              <div class="w-12 h-12 bg-gradient-to-r from-blue-400 to-blue-500 rounded-xl flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-300">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                </svg>
              </div>
              <h3 class="text-lg font-bold text-blue-700 mb-2">Laboratorium</h3>
              <p class="text-slate-600 text-sm leading-relaxed mb-4">Praktik langsung dengan peralatan canggih dan mentor ahli.</p>
            </div>

            <div class="space-y-2 mb-6">
              <div class="flex items-center gap-2 text-xs">
                <div class="w-1.5 h-1.5 bg-blue-400 rounded-full"></div>
                <span class="text-slate-600">4-6 bulan</span>
              </div>
              <div class="flex items-center gap-2 text-xs">
                <div class="w-1.5 h-1.5 bg-emerald-400 rounded-full"></div>
                <span class="text-slate-600">Lab modern</span>
              </div>
            </div>

            <button class="w-full bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white px-4 py-3 rounded-xl font-semibold text-sm shadow-lg hover:shadow-xl transition-all duration-300 group-hover:scale-105">
              Daftar Sekarang
            </button>
          </div>

          <!-- Card 3 - IT Kesehatan -->
          <div class="group bg-white/90 backdrop-blur-sm rounded-3xl shadow-lg hover:shadow-2xl p-6 border border-emerald-100 hover:border-emerald-200 transition-all duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="300">
            <div class="mb-4">
              <div class="w-12 h-12 bg-gradient-to-r from-emerald-400 to-blue-500 rounded-xl flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-300">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
              </div>
              <h3 class="text-lg font-bold text-emerald-700 mb-2">IT Kesehatan</h3>
              <p class="text-slate-600 text-sm leading-relaxed mb-4">Sistem informasi kesehatan dengan teknologi terdepan.</p>
            </div>

            <div class="space-y-2 mb-6">
              <div class="flex items-center gap-2 text-xs">
                <div class="w-1.5 h-1.5 bg-emerald-400 rounded-full"></div>
                <span class="text-slate-600">3-6 bulan</span>
              </div>
              <div class="flex items-center gap-2 text-xs">
                <div class="w-1.5 h-1.5 bg-blue-400 rounded-full"></div>
                <span class="text-slate-600">Project nyata</span>
              </div>
            </div>

            <button class="w-full bg-gradient-to-r from-emerald-500 to-blue-500 hover:from-emerald-600 hover:to-blue-600 text-white px-4 py-3 rounded-xl font-semibold text-sm shadow-lg hover:shadow-xl transition-all duration-300 group-hover:scale-105">
              Daftar Sekarang
            </button>
          </div>

          <!-- Card 4 - Keperawatan -->
          <div class="group bg-white/90 backdrop-blur-sm rounded-3xl shadow-lg hover:shadow-2xl p-6 border border-pink-100 hover:border-pink-200 transition-all duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="400">
            <div class="mb-4">
              <div class="w-12 h-12 bg-gradient-to-r from-pink-400 to-rose-500 rounded-xl flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-300">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>
              </div>
              <h3 class="text-lg font-bold text-pink-700 mb-2">Keperawatan</h3>
              <p class="text-slate-600 text-sm leading-relaxed mb-4">Praktik keperawatan dengan standar internasional.</p>
            </div>

            <div class="space-y-2 mb-6">
              <div class="flex items-center gap-2 text-xs">
                <div class="w-1.5 h-1.5 bg-pink-400 rounded-full"></div>
                <span class="text-slate-600">6 bulan</span>
              </div>
              <div class="flex items-center gap-2 text-xs">
                <div class="w-1.5 h-1.5 bg-rose-400 rounded-full"></div>
                <span class="text-slate-600">Sertifikat profesi</span>
              </div>
            </div>

            <button class="w-full bg-gradient-to-r from-pink-500 to-rose-600 hover:from-pink-600 hover:to-rose-700 text-white px-4 py-3 rounded-xl font-semibold text-sm shadow-lg hover:shadow-xl transition-all duration-300 group-hover:scale-105">
              Daftar Sekarang
            </button>
          </div>

          <!-- Card 5 - Farmasi -->
          <div class="group bg-white/90 backdrop-blur-sm rounded-3xl shadow-lg hover:shadow-2xl p-6 border border-purple-100 hover:border-purple-200 transition-all duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="500">
            <div class="mb-4">
              <div class="w-12 h-12 bg-gradient-to-r from-purple-400 to-purple-500 rounded-xl flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-300">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                </svg>
              </div>
              <h3 class="text-lg font-bold text-purple-700 mb-2">Farmasi</h3>
              <p class="text-slate-600 text-sm leading-relaxed mb-4">Praktik farmasi klinis dan industri farmasi.</p>
            </div>

            <div class="space-y-2 mb-6">
              <div class="flex items-center gap-2 text-xs">
                <div class="w-1.5 h-1.5 bg-purple-400 rounded-full"></div>
                <span class="text-slate-600">4-5 bulan</span>
              </div>
              <div class="flex items-center gap-2 text-xs">
                <div class="w-1.5 h-1.5 bg-indigo-400 rounded-full"></div>
                <span class="text-slate-600">Apotek partner</span>
              </div>
            </div>

            <button class="w-full bg-gradient-to-r from-purple-500 to-purple-600 hover:from-purple-600 hover:to-purple-700 text-white px-4 py-3 rounded-xl font-semibold text-sm shadow-lg hover:shadow-xl transition-all duration-300 group-hover:scale-105">
              Daftar Sekarang
            </button>
          </div>

          <!-- Card 6 - Gizi -->
          <div class="group bg-white/90 backdrop-blur-sm rounded-3xl shadow-lg hover:shadow-2xl p-6 border border-orange-100 hover:border-orange-200 transition-all duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="600">
            <div class="mb-4">
              <div class="w-12 h-12 bg-gradient-to-r from-orange-400 to-orange-500 rounded-xl flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-300">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                </svg>
              </div>
              <h3 class="text-lg font-bold text-orange-700 mb-2">Gizi</h3>
              <p class="text-slate-600 text-sm leading-relaxed mb-4">Program gizi dan nutrisi untuk kesehatan masyarakat.</p>
            </div>

            <div class="space-y-2 mb-6">
              <div class="flex items-center gap-2 text-xs">
                <div class="w-1.5 h-1.5 bg-orange-400 rounded-full"></div>
                <span class="text-slate-600">3-4 bulan</span>
              </div>
              <div class="flex items-center gap-2 text-xs">
                <div class="w-1.5 h-1.5 bg-yellow-400 rounded-full"></div>
                <span class="text-slate-600">Konsultasi gizi</span>
              </div>
            </div>

            <button class="w-full bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white px-4 py-3 rounded-xl font-semibold text-sm shadow-lg hover:shadow-xl transition-all duration-300 group-hover:scale-105">
              Daftar Sekarang
            </button>
          </div>

          <!-- Card 7 - Radiologi -->
          <div class="group bg-white/90 backdrop-blur-sm rounded-3xl shadow-lg hover:shadow-2xl p-6 border border-teal-100 hover:border-teal-200 transition-all duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="700">
            <div class="mb-4">
              <div class="w-12 h-12 bg-gradient-to-r from-teal-400 to-teal-500 rounded-xl flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-300">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                </svg>
              </div>
              <h3 class="text-lg font-bold text-teal-700 mb-2">Radiologi</h3>
              <p class="text-slate-600 text-sm leading-relaxed mb-4">Teknologi pencitraan medis dan diagnostik.</p>
            </div>

            <div class="space-y-2 mb-6">
              <div class="flex items-center gap-2 text-xs">
                <div class="w-1.5 h-1.5 bg-teal-400 rounded-full"></div>
                <span class="text-slate-600">4-6 bulan</span>
              </div>
              <div class="flex items-center gap-2 text-xs">
                <div class="w-1.5 h-1.5 bg-cyan-400 rounded-full"></div>
                <span class="text-slate-600">Alat canggih</span>
              </div>
            </div>

            <button class="w-full bg-gradient-to-r from-teal-500 to-teal-600 hover:from-teal-600 hover:to-teal-700 text-white px-4 py-3 rounded-xl font-semibold text-sm shadow-lg hover:shadow-xl transition-all duration-300 group-hover:scale-105">
              Daftar Sekarang
            </button>
          </div>

          <!-- Card 8 - Kebidanan -->
          <div class="group bg-white/90 backdrop-blur-sm rounded-3xl shadow-lg hover:shadow-2xl p-6 border border-rose-100 hover:border-rose-200 transition-all duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="800">
            <div class="mb-4">
              <div class="w-12 h-12 bg-gradient-to-r from-rose-400 to-pink-500 rounded-xl flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-300">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                </svg>
              </div>
              <h3 class="text-lg font-bold text-rose-700 mb-2">Kebidanan</h3>
              <p class="text-slate-600 text-sm leading-relaxed mb-4">Pelayanan kesehatan ibu dan anak profesional.</p>
            </div>

            <div class="space-y-2 mb-6">
              <div class="flex items-center gap-2 text-xs">
                <div class="w-1.5 h-1.5 bg-rose-400 rounded-full"></div>
                <span class="text-slate-600">6 bulan</span>
              </div>
              <div class="flex items-center gap-2 text-xs">
                <div class="w-1.5 h-1.5 bg-pink-400 rounded-full"></div>
                <span class="text-slate-600">Praktik klinis</span>
              </div>
            </div>

            <button class="w-full bg-gradient-to-r from-rose-500 to-pink-600 hover:from-rose-600 hover:to-pink-700 text-white px-4 py-3 rounded-xl font-semibold text-sm shadow-lg hover:shadow-xl transition-all duration-300 group-hover:scale-105">
              Daftar Sekarang
            </button>
          </div>
    </section>
@endsection
