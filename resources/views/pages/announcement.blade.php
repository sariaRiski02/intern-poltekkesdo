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
        <!-- Header -->
    <div class="text-center mb-12" data-aos="fade-up">
      <h1 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-emerald-600 to-blue-600 bg-clip-text text-transparent pb-4">
        📋 Status Pendaftaran Anda
      </h1>
      <p class="text-slate-600 text-lg mb-2">
        Lihat status pendaftaran magang Anda di berbagai departemen
      </p>
    </div>

    <!-- Status Applications -->
    <div class="max-w-5xl mx-auto space-y-6">

      <!-- Status Diterima -->
      <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-2xl p-6 border-2 border-green-200 shadow-lg" data-aos="fade-up" data-aos-delay="100">
        <div class="flex items-center gap-4 mb-4">
          <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-emerald-500 rounded-2xl flex items-center justify-center shadow-lg">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </div>
          <div>
            <h3 class="text-2xl font-bold text-green-700">Departemen Administrasi</h3>
            <div class="flex items-center gap-2 mt-1">
              <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-semibold">✅ DITERIMA</span>
              <span class="text-slate-500 text-sm">Diputuskan pada 15 September 2025</span>
            </div>
          </div>
        </div>
        <div class="bg-green-100 rounded-xl p-4 border border-green-200">
          <h4 class="font-semibold text-green-800 mb-2">🎉 Selamat! Anda diterima sebagai peserta magang</h4>
          <p class="text-green-700 text-sm mb-3">Periode magang: 24 September - 24 Desember 2025</p>
          <div class="space-y-2 text-sm text-green-700">
            <p><strong>Orientasi:</strong> Senin, 23 September 2025 pukul 08.00 WITA</p>
            <p><strong>Lokasi:</strong> Aula Poltekkes Manado</p>
            <p><strong>Pembimbing:</strong> Dr. Sari Wulandari, M.Kes</p>
          </div>
        </div>
      </div>

      <!-- Status Ditolak -->
      <div class="bg-gradient-to-r from-red-50 to-rose-50 rounded-2xl p-6 border-2 border-red-200 shadow-lg" data-aos="fade-up" data-aos-delay="200">
        <div class="flex items-center gap-4 mb-4">
          <div class="w-16 h-16 bg-gradient-to-br from-red-400 to-rose-500 rounded-2xl flex items-center justify-center shadow-lg">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
          </div>
          <div>
            <h3 class="text-2xl font-bold text-red-700">Departemen Keperawatan</h3>
            <div class="flex items-center gap-2 mt-1">
              <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-semibold">❌ DITOLAK</span>
              <span class="text-slate-500 text-sm">Diputuskan pada 16 September 2025</span>
            </div>
          </div>
        </div>
        <div class="bg-red-100 rounded-xl p-4 border border-red-200">
          <h4 class="font-semibold text-red-800 mb-2">Mohon maaf, pendaftaran Anda belum dapat kami terima</h4>
          <p class="text-red-700 text-sm mb-3"><strong>Alasan:</strong> Kuota departemen sudah penuh untuk periode ini</p>
          <div class="space-y-2 text-sm text-red-700">
            <p>• Anda dapat mendaftar kembali pada periode berikutnya</p>
            <p>• Period pendaftaran berikutnya: Januari 2026</p>
            <p>• Untuk informasi lebih lanjut, hubungi bagian akademik</p>
          </div>
        </div>
      </div>

      <!-- Status Pending/Diproses -->
      <div class="bg-gradient-to-r from-yellow-50 to-orange-50 rounded-2xl p-6 border-2 border-yellow-200 shadow-lg" data-aos="fade-up" data-aos-delay="300">
        <div class="flex items-center gap-4 mb-4">
          <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-2xl flex items-center justify-center shadow-lg animate-pulse">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </div>
          <div>
            <h3 class="text-2xl font-bold text-yellow-700">Departemen Farmasi</h3>
            <div class="flex items-center gap-2 mt-1">
              <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm font-semibold">⏳ SEDANG DIPROSES</span>
              <span class="text-slate-500 text-sm">Dikirim pada 12 September 2025</span>
            </div>
          </div>
        </div>
        <div class="bg-yellow-100 rounded-xl p-4 border border-yellow-200">
          <h4 class="font-semibold text-yellow-800 mb-2">Pendaftaran Anda sedang dalam proses seleksi</h4>
          <div class="space-y-2 text-sm text-yellow-700">
            <p>• Dokumen Anda sedang ditinjau oleh tim seleksi</p>
            <p>• Estimasi pengumuman: 20 September 2025</p>
            <p>• Status akan diupdate secara otomatis di halaman ini</p>
          </div>
          <div class="mt-3 bg-yellow-200 rounded-lg p-3">
            <div class="flex items-center justify-between text-sm">
              <span class="font-medium text-yellow-800">Progress Seleksi:</span>
              <span class="text-yellow-700">75%</span>
            </div>
            <div class="w-full bg-yellow-300 rounded-full h-2 mt-2">
              <div class="bg-gradient-to-r from-yellow-500 to-orange-500 h-2 rounded-full" style="width: 75%"></div>
            </div>
          </div>
        </div>
      </div>




      <!-- Status Selesai/Completed -->
      <div class="bg-gradient-to-r from-purple-50 to-violet-50 rounded-2xl p-6 border-2 border-purple-200 shadow-lg" data-aos="fade-up" data-aos-delay="500">
        <div class="flex items-center gap-4 mb-4">
          <div class="w-16 h-16 bg-gradient-to-br from-purple-400 to-violet-500 rounded-2xl flex items-center justify-center shadow-lg">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
            </svg>
          </div>
          <div>
            <h3 class="text-2xl font-bold text-purple-700">Departemen Teknologi Laboratorium Medis</h3>
            <div class="flex items-center gap-2 mt-1">
              <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm font-semibold">🎓 SELESAI</span>
              <span class="text-slate-500 text-sm">Diselesaikan pada 15 Agustus 2025</span>
            </div>
          </div>
        </div>
        <div class="bg-purple-100 rounded-xl p-4 border border-purple-200">
          <h4 class="font-semibold text-purple-800 mb-2">🎉 Selamat! Anda telah menyelesaikan program magang</h4>
          <p class="text-purple-700 text-sm mb-3"><strong>Periode:</strong> 15 Mei - 15 Agustus 2025 (3 bulan)</p>
          <div class="space-y-2 text-sm text-purple-700 mb-4">
            <p>• <strong>Nilai Akhir:</strong> A (90/100) - Sangat Baik</p>
            <p>• <strong>Pembimbing:</strong> Dr. Ahmad Surya, M.Si</p>
            <p>• <strong>Proyek Akhir:</strong> "Analisis Kualitas Air PDAM Manado"</p>
          </div>
          <div class="bg-gradient-to-r from-purple-200 to-violet-200 rounded-lg p-4">
            <h5 class="font-semibold text-purple-800 mb-2">📋 Dokumen Tersedia:</h5>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
              <a href="#" class="flex items-center gap-2 text-purple-700 hover:text-purple-800 text-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                Sertifikat Magang
              </a>
              <a href="#" class="flex items-center gap-2 text-purple-700 hover:text-purple-800 text-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                Laporan Akhir
              </a>
              <a href="#" class="flex items-center gap-2 text-purple-700 hover:text-purple-800 text-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/>
                </svg>
                Penilaian Kinerja
              </a>
              <a href="#" class="flex items-center gap-2 text-purple-700 hover:text-purple-800 text-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                </svg>
                Surat Rekomendasi
              </a>
            </div>
          </div>
        </div>
      </div>


      <!-- Action Buttons -->
      <div class="text-center bg-white/90 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-slate-100" data-aos="fade-up" data-aos-delay="600">
        <h3 class="text-lg font-semibold text-slate-800 mb-4">Butuh bantuan atau ingin mendaftar di departemen lain?</h3>
        <div class="flex flex-col sm:flex-row gap-3 justify-center">
          <a href="{{ route('home') }}" class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-emerald-500 to-blue-500 hover:from-emerald-600 hover:to-blue-600 text-white font-semibold px-6 py-3 rounded-xl transition-all duration-300">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            Daftar Departemen Lain
          </a>
          <a href="tel:+62431123456" class="inline-flex items-center justify-center gap-2 bg-white border-2 border-emerald-500 text-emerald-600 hover:bg-emerald-50 font-semibold px-6 py-3 rounded-xl transition-all duration-300">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
            </svg>
            Hubungi Kami
          </a>
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
