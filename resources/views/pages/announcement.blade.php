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
        Lihat status pendaftaran anda di berbagai program yang di sediakan.
      </p>
    </div>

    <!-- Status Applications -->
    <div class="max-w-5xl mx-auto space-y-6">

    @if(!$docs)
      <div class="flex justify-center items-center min-h-[60vh] bg-gradient-to-br from-emerald-50 via-white to-sky-50">
        <div
          class="max-w-3xl w-full bg-white/90 border border-emerald-100 rounded-3xl shadow-2xl p-12 text-center backdrop-blur-sm">

          <!-- Icon / Ilustrasi -->
          <div class="mb-8">
            <div
              class="mx-auto w-28 h-28 rounded-full bg-gradient-to-br from-emerald-500 to-sky-500 flex items-center justify-center shadow-lg">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14 text-white" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M9 17v-6m6 6V7M4 21h16M4 10h16M10 3h4" />
              </svg>
            </div>
          </div>

          <!-- Judul -->
          <h2 class="text-3xl md:text-4xl font-bold text-emerald-700 mb-4">
            Belum Ada Program yang Didaftarkan
          </h2>

          <!-- Deskripsi -->
          <p class="text-gray-600 text-lg leading-relaxed mb-8">
            Saat ini belum ada data program yang anda daftar.<br>
            Silahkan mendaftar program baru bila tersedia.
          </p>

          <!-- Tombol Aksi -->
          <a href="{{ route('contact') }}"
            class="inline-flex items-center gap-2 bg-gradient-to-r from-emerald-600 to-sky-600 hover:from-emerald-700 hover:to-sky-700 text-white font-semibold px-8 py-4 rounded-full shadow-md transition-all duration-300 hover:scale-105">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
              stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M14.752 11.168l-4.586-2.65A1 1 0 009 9.36v5.28a1 1 0 001.166.842l4.586-2.65a1 1 0 000-1.724z" />
            </svg>
            Hubungi Kami
          </a>
        </div>
      </div>
    @else


    @foreach ($docs as $doc)

        @if($doc->status == 'diterima')
            <!-- Status Diterima -->
            <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-2xl p-6 border-2 border-green-200 shadow-lg" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center gap-4 mb-4">
                <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-emerald-500 rounded-2xl flex items-center justify-center shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div>

                    <h3 class="text-2xl font-bold text-green-700">{{ $doc->department->name }}</h3>
                    <div class="flex items-center gap-2 mt-1">
                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-semibold">✅ DITERIMA</span>

                    </div>
                </div>
                </div>
                <div class="bg-green-100 rounded-xl p-4 border border-green-200">
                <h4 class="font-semibold text-green-800 mb-2">🎉 Selamat! Anda diterima sebagai pesarta program</h4>

                </div>
            </div>

        @elseif($doc->status == 'ditolak')
            <!-- Status Ditolak -->
            <div class="bg-gradient-to-r from-red-50 to-rose-50 rounded-2xl p-6 border-2 border-red-200 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center gap-4 mb-4">
                <div class="w-16 h-16 bg-gradient-to-br from-red-400 to-rose-500 rounded-2xl flex items-center justify-center shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-red-700"> {{ $doc->department->name }}</h3>
                    <div class="flex items-center gap-2 mt-1">
                    <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-semibold">❌ DITOLAK</span>

                    </div>
                </div>
                </div>
                <div class="bg-red-100 rounded-xl p-4 border border-red-200">
                <h4 class="font-semibold text-red-800 mb-2">Mohon maaf, pendaftaran Anda belum dapat kami terima</h4>

                </div>
            </div>


        @elseif($doc->status == 'pending')
            <!-- Status Pending/Diproses -->
            <div class="bg-gradient-to-r from-yellow-50 to-orange-50 rounded-2xl p-6 border-2 border-yellow-200 shadow-lg" data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-center gap-4 mb-4">
                <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-2xl flex items-center justify-center shadow-lg animate-pulse">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-yellow-700"> {{ $doc->department->name }}</h3>
                    <div class="flex items-center gap-2 mt-1">
                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm font-semibold">⏳ SEDANG DIPROSES</span>

                    </div>
                </div>
                </div>

            </div>


        @elseif($doc->status == 'selesai')
            <!-- Status Selesai/Completed -->
            <div class="bg-purple-100 rounded-xl p-4 border border-purple-200">
                <h4 class="font-semibold text-purple-800 mb-3">
                    🎉 Selamat! Anda telah menyelesaikan program {{ $doc->department->name }}
                </h4>

                @if ($doc->certificate)
                    <div class="flex items-center justify-between bg-white rounded-xl p-4 shadow-sm border border-purple-200 hover:shadow-md transition-all duration-200">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-emerald-500 flex items-center justify-center rounded-lg shadow-md">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4v16m8-8H4" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-purple-700 text-lg">Unduh Sertifikat</p>
                                <p class="text-sm text-slate-500">Klik tombol di samping untuk mengunduh sertifikat Anda</p>
                            </div>
                        </div>
                        <a href="{{ asset('storage/' . $doc->certificate) }}" target="_blank"
                            class="flex items-center gap-2 bg-gradient-to-r from-purple-500 to-emerald-500 text-white px-5 py-2.5 rounded-xl font-semibold hover:from-purple-600 hover:to-emerald-600 transform hover:scale-105 transition-all duration-200 shadow-lg">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5 5-5M12 15V3" />
                            </svg>
                            Unduh
                        </a>
                    </div>
                @else
                    <div class="flex items-center gap-3 bg-slate-50 rounded-xl p-4 border border-slate-200">
                        <div class="w-10 h-10 bg-gradient-to-br from-slate-300 to-slate-200 flex items-center justify-center rounded-lg shadow-sm">
                            <svg class="w-6 h-6 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M12 8v4m0 4v.01M21 12A9 9 0 113 12a9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold text-slate-700 text-lg">Mohon menunggu</p>
                            <p class="text-sm text-slate-500">Sertifikat Anda sedang diproses dan akan tersedia segera.</p>
                        </div>
                    </div>
                @endif
            </div>

        @endif
    @endforeach

    @endif
      <!-- Action Buttons -->
      <div class="text-center bg-white/90 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-slate-100" data-aos="fade-up" data-aos-delay="600">
        <h3 class="text-lg font-semibold text-slate-800 mb-4">Ingin mendaftar di Program lain?</h3>
        <div class="flex flex-col sm:flex-row gap-3 justify-center">
          <a href="{{ route('home') }}" class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-emerald-500 to-blue-500 hover:from-emerald-600 hover:to-blue-600 text-white font-semibold px-6 py-3 rounded-xl transition-all duration-300">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
            </svg>
            Daftar Program Lain
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
