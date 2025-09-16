@extends('layouts.app')

@section('content')
<section class="min-h-screen bg-gradient-to-br from-emerald-50 via-blue-50 to-white relative overflow-hidden py-12">
  <!-- Background Pattern -->
  <div class="absolute inset-0 opacity-5">
    <div class="absolute top-20 left-10 w-32 h-32 bg-emerald-300 rounded-full blur-3xl"></div>
    <div class="absolute top-40 right-20 w-48 h-48 bg-blue-300 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 left-1/3 w-40 h-40 bg-emerald-200 rounded-full blur-3xl"></div>
  </div>

  <div class="container mx-auto px-6 relative z-10">
    <!-- Header -->
    <div class="text-center mb-12" data-aos="fade-up">
      <h1 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-emerald-600 to-blue-600 bg-clip-text text-transparent mb-4">
        📋 Papan Pengumuman
      </h1>
      <p class="text-slate-600 text-lg mb-2">
        Pengumuman Penerimaan Peserta Magang Poltekkes Manado
      </p>
      <p class="text-emerald-600 font-semibold">
        Periode: September 2025 - Februari 2026
      </p>
    </div>

    <!-- Announcement Cards -->
    <div class="max-w-5xl mx-auto space-y-6">
      
      <!-- Announcement Header -->
      <div class="bg-gradient-to-r from-emerald-600 to-blue-600 rounded-2xl p-8 text-white shadow-xl" data-aos="fade-up">
        <div class="flex items-center justify-between flex-wrap gap-4">
          <div>
            <h2 class="text-2xl font-bold mb-2">🎉 Selamat kepada Peserta yang Diterima!</h2>
            <p class="text-emerald-100">Berikut adalah daftar peserta yang diterima untuk program magang</p>
          </div>
          <div class="text-right">
            <div class="bg-white/20 rounded-lg px-4 py-2">
              <p class="text-sm font-medium">Tanggal Pengumuman</p>
              <p class="text-xl font-bold">16 Sep 2025</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Department: Administrasi -->
      <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-lg p-6 border border-emerald-100" data-aos="fade-up" data-aos-delay="100">
        <div class="flex items-center gap-4 mb-6">
          <div class="w-12 h-12 bg-gradient-to-r from-emerald-400 to-emerald-500 rounded-xl flex items-center justify-center">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg>
          </div>
          <div>
            <h3 class="text-xl font-bold text-emerald-700">Departemen Administrasi</h3>
            <p class="text-slate-600 text-sm">3 peserta diterima</p>
          </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          <!-- Accepted Student 1 -->
          <div class="bg-green-50 border border-green-200 rounded-xl p-4">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                <span class="text-green-600 font-semibold text-sm">AS</span>
              </div>
              <div class="flex-1">
                <h4 class="font-semibold text-gray-900">Andi Sari</h4>
                <p class="text-sm text-gray-600">Universitas Sam Ratulangi</p>
                <p class="text-xs text-green-600 font-medium">✓ DITERIMA</p>
              </div>
            </div>
          </div>

          <!-- Accepted Student 2 -->
          <div class="bg-green-50 border border-green-200 rounded-xl p-4">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                <span class="text-green-600 font-semibold text-sm">BP</span>
              </div>
              <div class="flex-1">
                <h4 class="font-semibold text-gray-900">Budi Pratama</h4>
                <p class="text-sm text-gray-600">Universitas Negeri Manado</p>
                <p class="text-xs text-green-600 font-medium">✓ DITERIMA</p>
              </div>
            </div>
          </div>

          <!-- Accepted Student 3 -->
          <div class="bg-green-50 border border-green-200 rounded-xl p-4">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                <span class="text-green-600 font-semibold text-sm">CL</span>
              </div>
              <div class="flex-1">
                <h4 class="font-semibold text-gray-900">Citra Lestari</h4>
                <p class="text-sm text-gray-600">Politeknik Negeri Manado</p>
                <p class="text-xs text-green-600 font-medium">✓ DITERIMA</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Department: Keperawatan -->
      <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-lg p-6 border border-pink-100" data-aos="fade-up" data-aos-delay="200">
        <div class="flex items-center gap-4 mb-6">
          <div class="w-12 h-12 bg-gradient-to-r from-pink-400 to-rose-500 rounded-xl flex items-center justify-center">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
            </svg>
          </div>
          <div>
            <h3 class="text-xl font-bold text-pink-700">Departemen Keperawatan</h3>
            <p class="text-slate-600 text-sm">4 peserta diterima</p>
          </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
          <!-- Accepted Students -->
          <div class="bg-green-50 border border-green-200 rounded-xl p-4">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                <span class="text-green-600 font-semibold text-sm">DR</span>
              </div>
              <div class="flex-1">
                <h4 class="font-semibold text-gray-900">Dewi Ramadhani</h4>
                <p class="text-sm text-gray-600">UNSRAT</p>
                <p class="text-xs text-green-600 font-medium">✓ DITERIMA</p>
              </div>
            </div>
          </div>

          <div class="bg-green-50 border border-green-200 rounded-xl p-4">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                <span class="text-green-600 font-semibold text-sm">FS</span>
              </div>
              <div class="flex-1">
                <h4 class="font-semibold text-gray-900">Fitri Susanti</h4>
                <p class="text-sm text-gray-600">UNIMA</p>
                <p class="text-xs text-green-600 font-medium">✓ DITERIMA</p>
              </div>
            </div>
          </div>

          <div class="bg-green-50 border border-green-200 rounded-xl p-4">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                <span class="text-green-600 font-semibold text-sm">GH</span>
              </div>
              <div class="flex-1">
                <h4 class="font-semibold text-gray-900">Grace Hasibuan</h4>
                <p class="text-sm text-gray-600">POLIMDO</p>
                <p class="text-xs text-green-600 font-medium">✓ DITERIMA</p>
              </div>
            </div>
          </div>

          <div class="bg-green-50 border border-green-200 rounded-xl p-4">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                <span class="text-green-600 font-semibold text-sm">HI</span>
              </div>
              <div class="flex-1">
                <h4 class="font-semibold text-gray-900">Hendra Irawan</h4>
                <p class="text-sm text-gray-600">UNSRAT</p>
                <p class="text-xs text-green-600 font-medium">✓ DITERIMA</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Department: Farmasi -->
      <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-lg p-6 border border-purple-100" data-aos="fade-up" data-aos-delay="300">
        <div class="flex items-center gap-4 mb-6">
          <div class="w-12 h-12 bg-gradient-to-r from-purple-400 to-purple-500 rounded-xl flex items-center justify-center">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
            </svg>
          </div>
          <div>
            <h3 class="text-xl font-bold text-purple-700">Departemen Farmasi</h3>
            <p class="text-slate-600 text-sm">2 peserta diterima</p>
          </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div class="bg-green-50 border border-green-200 rounded-xl p-4">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                <span class="text-green-600 font-semibold text-sm">IJ</span>
              </div>
              <div class="flex-1">
                <h4 class="font-semibold text-gray-900">Indah Juwita</h4>
                <p class="text-sm text-gray-600">Universitas Sam Ratulangi</p>
                <p class="text-xs text-green-600 font-medium">✓ DITERIMA</p>
              </div>
            </div>
          </div>

          <div class="bg-green-50 border border-green-200 rounded-xl p-4">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                <span class="text-green-600 font-semibold text-sm">JK</span>
              </div>
              <div class="flex-1">
                <h4 class="font-semibold text-gray-900">Joko Kurniawan</h4>
                <p class="text-sm text-gray-600">Politeknik Negeri Manado</p>
                <p class="text-xs text-green-600 font-medium">✓ DITERIMA</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Important Notes -->
      <div class="bg-gradient-to-r from-blue-100 to-emerald-100 rounded-2xl p-8 border border-blue-200" data-aos="fade-up" data-aos-delay="400">
        <div class="flex items-start gap-4">
          <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-emerald-500 rounded-xl flex items-center justify-center flex-shrink-0">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </div>
          <div class="flex-1">
            <h3 class="text-xl font-bold text-slate-800 mb-4">📢 Informasi Penting untuk Peserta yang Diterima</h3>
            <div class="space-y-3 text-slate-700">
              <div class="flex items-start gap-2">
                <span class="text-emerald-600 font-bold">•</span>
                <p><strong>Orientasi:</strong> Senin, 23 September 2025 pukul 08.00 WITA di Aula Poltekkes Manado</p>
              </div>
              <div class="flex items-start gap-2">
                <span class="text-emerald-600 font-bold">•</span>
                <p><strong>Mulai Magang:</strong> Selasa, 24 September 2025</p>
              </div>
              <div class="flex items-start gap-2">
                <span class="text-emerald-600 font-bold">•</span>
                <p><strong>Dokumen yang harus dibawa:</strong> Surat pengantar dari kampus, KTP, dan foto 3x4 (2 lembar)</p>
              </div>
              <div class="flex items-start gap-2">
                <span class="text-emerald-600 font-bold">•</span>
                <p><strong>Dress Code:</strong> Seragam sesuai ketentuan masing-masing departemen</p>
              </div>
              <div class="flex items-start gap-2">
                <span class="text-emerald-600 font-bold">•</span>
                <p><strong>Kontak:</strong> Untuk pertanyaan lebih lanjut, hubungi bagian akademik di (0431) 123456</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Contact Information -->
      <div class="text-center bg-white/90 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-slate-100" data-aos="fade-up" data-aos-delay="500">
        <h3 class="text-lg font-semibold text-slate-800 mb-2">Untuk Peserta yang Belum Diterima</h3>
        <p class="text-slate-600 mb-4">Jangan berkecil hati! Pantau terus pengumuman selanjutnya atau daftar kembali pada periode berikutnya.</p>
        <a href="{{ route('home') }}" class="inline-flex items-center gap-2 bg-gradient-to-r from-emerald-500 to-blue-500 hover:from-emerald-600 hover:to-blue-600 text-white font-semibold px-6 py-3 rounded-lg transition-all duration-300">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
          </svg>
          Lihat Program Magang Lainnya
        </a>
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