@extends('layouts.app')

@section('content')
<!-- Detail Lowongan Section -->
<section class="min-h-screen bg-gradient-to-br from-emerald-50 via-blue-50 to-white relative overflow-hidden py-12">
  <!-- Background Pattern -->
  <div class="absolute inset-0 opacity-5">
    <div class="absolute top-20 left-10 w-32 h-32 bg-emerald-300 rounded-full blur-3xl"></div>
    <div class="absolute top-40 right-20 w-48 h-48 bg-blue-300 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 left-1/3 w-40 h-40 bg-emerald-200 rounded-full blur-3xl"></div>
  </div>

  <div class="container mx-auto px-6 relative z-10">
    <!-- Breadcrumb -->
    <div class="mb-8">
      <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
          <li class="inline-flex items-center">
            <a href="{{ route('home') }}" class="inline-flex items-center text-sm font-medium text-slate-700 hover:text-emerald-600 transition-colors">
              <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
              </svg>
              Beranda
            </a>
          </li>
          <li>
            <div class="flex items-center">
              <svg class="w-6 h-6 text-slate-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd"></path>
              </svg>
              <span class="text-sm font-medium text-slate-500 ml-1 md:ml-2">Detail Lowongan</span>
            </div>
          </li>
        </ol>
      </nav>
    </div>

    <div class="max-w-4xl mx-auto">
      <!-- Header Card -->
      <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 border border-emerald-100 mb-8" data-aos="fade-up">
        <div class="flex flex-col md:flex-row items-start gap-6">
          <!-- Icon -->
          <div class="flex-shrink-0">
            <div class="w-20 h-20 bg-gradient-to-r from-emerald-400 to-blue-500 rounded-2xl flex items-center justify-center shadow-lg">
              <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
              </svg>
            </div>
          </div>

          <!-- Content -->
          <div class="flex-1">
            <h1 class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-emerald-600 to-blue-600 bg-clip-text text-transparent mb-3">
              Program Magang Administrasi
            </h1>
            <p class="text-slate-600 text-lg mb-4">
              Sistem administrasi modern dengan teknologi terintegrasi di lingkungan Poltekkes Manado
            </p>

            <!-- Status & Info -->
            <div class="flex flex-wrap gap-4 items-center">
              <div class="inline-flex items-center gap-2 bg-green-50 text-green-700 px-4 py-2 rounded-full text-sm font-medium border border-green-200">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                Tersedia
              </div>
              <div class="flex items-center gap-2 text-slate-600 text-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                3-6 bulan
              </div>
              <div class="flex items-center gap-2 text-slate-600 text-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                Manado, Sulawesi Utara
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Main Content -->
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Left Content -->
        <div class="lg:col-span-2 space-y-8">
          <!-- Description -->
          <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-lg p-6 border border-slate-100" data-aos="fade-up" data-aos-delay="100">
            <h2 class="text-xl font-bold text-slate-800 mb-4">Deskripsi Program</h2>
            <div class="prose prose-slate max-w-none">
              <p class="text-slate-600 leading-relaxed mb-4">
                Program magang Administrasi di Poltekkes Manado memberikan kesempatan kepada mahasiswa untuk memperoleh pengalaman praktis dalam pengelolaan sistem administrasi modern dengan teknologi terintegrasi.
              </p>
              <p class="text-slate-600 leading-relaxed mb-4">
                Peserta akan belajar tentang manajemen data, sistem informasi kesehatan, dokumentasi medis, dan berbagai aspek administrasi dalam lingkungan pelayanan kesehatan yang profesional.
              </p>
              <p class="text-slate-600 leading-relaxed">
                Program ini dirancang untuk memberikan pemahaman komprehensif tentang operasional administrasi di institusi pendidikan kesehatan terkemuka.
              </p>
            </div>
          </div>

          <!-- Requirements -->
          <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-lg p-6 border border-slate-100" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-xl font-bold text-slate-800 mb-4">Persyaratan</h2>
            <div class="space-y-3">
              <div class="flex items-start gap-3">
                <div class="w-2 h-2 bg-emerald-500 rounded-full mt-2 flex-shrink-0"></div>
                <span class="text-slate-600">Mahasiswa aktif jurusan Administrasi, Manajemen, atau bidang terkait</span>
              </div>
              <div class="flex items-start gap-3">
                <div class="w-2 h-2 bg-emerald-500 rounded-full mt-2 flex-shrink-0"></div>
                <span class="text-slate-600">Minimal semester 5 atau telah menyelesaikan 100 SKS</span>
              </div>
              <div class="flex items-start gap-3">
                <div class="w-2 h-2 bg-emerald-500 rounded-full mt-2 flex-shrink-0"></div>
                <span class="text-slate-600">IPK minimal 3.0</span>
              </div>
              <div class="flex items-start gap-3">
                <div class="w-2 h-2 bg-emerald-500 rounded-full mt-2 flex-shrink-0"></div>
                <span class="text-slate-600">Memiliki kemampuan dasar komputer (MS Office)</span>
              </div>
              <div class="flex items-start gap-3">
                <div class="w-2 h-2 bg-emerald-500 rounded-full mt-2 flex-shrink-0"></div>
                <span class="text-slate-600">Komunikasi yang baik dan dapat bekerja dalam tim</span>
              </div>
            </div>
          </div>

          <!-- Benefits -->
          <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-lg p-6 border border-slate-100" data-aos="fade-up" data-aos-delay="300">
            <h2 class="text-xl font-bold text-slate-800 mb-4">Fasilitas & Manfaat</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div class="flex items-center gap-3 p-3 bg-emerald-50 rounded-lg">
                <div class="w-8 h-8 bg-emerald-500 rounded-lg flex items-center justify-center">
                  <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                </div>
                <span class="text-sm text-slate-700 font-medium">Sertifikat Resmi</span>
              </div>
              <div class="flex items-center gap-3 p-3 bg-blue-50 rounded-lg">
                <div class="w-8 h-8 bg-blue-500 rounded-lg flex items-center justify-center">
                  <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                  </svg>
                </div>
                <span class="text-sm text-slate-700 font-medium">Bimbingan Mentor</span>
              </div>
              <div class="flex items-center gap-3 p-3 bg-purple-50 rounded-lg">
                <div class="w-8 h-8 bg-purple-500 rounded-lg flex items-center justify-center">
                  <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                  </svg>
                </div>
                <span class="text-sm text-slate-700 font-medium">Akses Teknologi</span>
              </div>
              <div class="flex items-center gap-3 p-3 bg-orange-50 rounded-lg">
                <div class="w-8 h-8 bg-orange-500 rounded-lg flex items-center justify-center">
                  <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                  </svg>
                </div>
                <span class="text-sm text-slate-700 font-medium">Networking</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Sidebar -->
        <div class="space-y-6">
          <!-- Application Card -->
          <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-lg p-6 border border-emerald-100 sticky top-6" data-aos="fade-up" data-aos-delay="400">
            <h3 class="text-xl font-bold text-slate-800 mb-4">Pendaftaran</h3>

            <!-- Timeline -->
            <div class="space-y-4 mb-6">
              <div class="flex items-start gap-3">
                <div class="w-2 h-2 bg-green-500 rounded-full mt-2"></div>
                <div>
                  <div class="text-sm font-medium text-slate-800">Pendaftaran Dibuka</div>
                  <div class="text-xs text-slate-600">15 September 2025</div>
                </div>
              </div>
              <div class="flex items-start gap-3">
                <div class="w-2 h-2 bg-amber-500 rounded-full mt-2"></div>
                <div>
                  <div class="text-sm font-medium text-slate-800">Batas Pendaftaran</div>
                  <div class="text-xs text-slate-600">30 September 2025</div>
                </div>
              </div>
              <div class="flex items-start gap-3">
                <div class="w-2 h-2 bg-blue-500 rounded-full mt-2"></div>
                <div>
                  <div class="text-sm font-medium text-slate-800">Mulai Program</div>
                  <div class="text-xs text-slate-600">15 Oktober 2025</div>
                </div>
              </div>
            </div>

            <!-- Quota -->
            <div class="bg-gradient-to-r from-emerald-50 to-blue-50 rounded-xl p-4 mb-6">
              <div class="text-center">
                <div class="text-2xl font-bold text-slate-800 mb-1">15</div>
                <div class="text-sm text-slate-600">Kuota Tersedia</div>
              </div>
            </div>

            <!-- Apply Button -->
            <button class="w-full bg-gradient-to-r from-emerald-500 to-blue-500 hover:from-emerald-600 hover:to-blue-600 text-white font-bold py-4 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 flex items-center justify-center gap-2 mb-4">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
              </svg>
              Daftar Sekarang
            </button>

            <!-- Info -->
            <div class="text-xs text-slate-500 text-center">
              <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              Proses seleksi berkas dalam 1-3 hari kerja
            </div>
          </div>

          <!-- Contact Info -->
          <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-lg p-6 border border-slate-100" data-aos="fade-up" data-aos-delay="500">
            <h3 class="text-lg font-bold text-slate-800 mb-4">Informasi Kontak</h3>
            <div class="space-y-3">
              <div class="flex items-center gap-3">
                <div class="w-8 h-8 bg-emerald-100 rounded-lg flex items-center justify-center">
                  <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                  </svg>
                </div>
                <div>
                  <div class="text-sm font-medium text-slate-800">Telepon</div>
                  <div class="text-xs text-slate-600">(0431) 123456</div>
                </div>
              </div>
              <div class="flex items-center gap-3">
                <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                  <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                  </svg>
                </div>
                <div>
                  <div class="text-sm font-medium text-slate-800">Email</div>
                  <div class="text-xs text-slate-600">magang@poltekkesmanado.ac.id</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
