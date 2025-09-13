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
    <div class="mb-8" data-aos="fade-down">
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
            <h1 class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-emerald-600 to-blue-600 bg-clip-text text-transparent pb-3">
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
      <div class="space-y-8">
        <!-- Description -->
        <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-lg p-8 border border-slate-100" data-aos="fade-up" data-aos-delay="100">
          <h2 class="text-2xl font-bold text-slate-800 mb-6">Deskripsi Program</h2>
          <div class="prose prose-slate max-w-none">
            <p class="text-slate-600 leading-relaxed mb-4 text-base">
              Program magang Administrasi di Poltekkes Manado memberikan kesempatan kepada mahasiswa untuk memperoleh pengalaman praktis dalam pengelolaan sistem administrasi modern dengan teknologi terintegrasi.
            </p>
            <p class="text-slate-600 leading-relaxed mb-4 text-base">
              Peserta akan belajar tentang manajemen data, sistem informasi kesehatan, dokumentasi medis, dan berbagai aspek administrasi dalam lingkungan pelayanan kesehatan yang profesional.
            </p>
            <p class="text-slate-600 leading-relaxed text-base">
              Program ini dirancang untuk memberikan pemahaman komprehensif tentang operasional administrasi di institusi pendidikan kesehatan terkemuka.
            </p>
          </div>
        </div>

        <!-- Requirements -->
        <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-lg p-8 border border-slate-100" data-aos="fade-up" data-aos-delay="200">
          <h2 class="text-2xl font-bold text-slate-800 mb-6">Persyaratan</h2>
          <div class="space-y-4">
            <div class="flex items-start gap-4">
              <div class="w-2 h-2 bg-emerald-500 rounded-full mt-2 flex-shrink-0"></div>
              <span class="text-slate-600 text-base">Mahasiswa aktif jurusan Administrasi, Manajemen, atau bidang terkait</span>
            </div>
            <div class="flex items-start gap-4">
              <div class="w-2 h-2 bg-emerald-500 rounded-full mt-2 flex-shrink-0"></div>
              <span class="text-slate-600 text-base">Minimal semester 5 atau telah menyelesaikan 100 SKS</span>
            </div>
            <div class="flex items-start gap-4">
              <div class="w-2 h-2 bg-emerald-500 rounded-full mt-2 flex-shrink-0"></div>
              <span class="text-slate-600 text-base">IPK minimal 3.0</span>
            </div>
            <div class="flex items-start gap-4">
              <div class="w-2 h-2 bg-emerald-500 rounded-full mt-2 flex-shrink-0"></div>
              <span class="text-slate-600 text-base">Memiliki kemampuan dasar komputer (MS Office)</span>
            </div>
            <div class="flex items-start gap-4">
              <div class="w-2 h-2 bg-emerald-500 rounded-full mt-2 flex-shrink-0"></div>
              <span class="text-slate-600 text-base">Komunikasi yang baik dan dapat bekerja dalam tim</span>
            </div>
          </div>
        </div>

        <!-- Apply Button -->
        <div class="text-center" data-aos="fade-up" data-aos-delay="400">
          <button class="bg-gradient-to-r from-emerald-500 to-blue-500 hover:from-emerald-600 hover:to-blue-600 text-white font-bold py-4 px-12 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 flex items-center justify-center gap-3 mx-auto text-lg cursor-pointer">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
            </svg>
            Daftar Sekarang
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- AOS Script -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
    easing: 'ease-in-out',
    once: true,
    offset: 100
  });
</script>
@endsection
