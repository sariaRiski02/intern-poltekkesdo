<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
    <title>Detail Peserta </title>
  </head>
  <body class="bg-gradient-to-br from-blue-50 via-white to-indigo-50 min-h-screen">

    <div class="container mx-auto px-4 py-6 lg:py-8 space-y-6 lg:space-y-8 max-w-7xl">
      <!-- Header -->
      <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-4 lg:p-6">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
          <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-4">
            <a href="{{ route('admin.intern') }}" class="inline-flex items-center text-gray-600 hover:text-indigo-600 transition-colors duration-200 group w-fit">
              <svg class="w-5 h-5 mr-2 group-hover:-translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
              </svg>
              Kembali
            </a>
            <div class="border-l border-gray-200 pl-3 sm:pl-4 hidden sm:block"></div>
            <div>
              <h1 class="text-2xl lg:text-3xl font-bold text-gray-900 tracking-tight">Detail Peserta Program</h1>
              <p class="text-gray-600 text-sm lg:text-base mt-1">Informasi lengkap calon peserta</p>
            </div>
          </div>
          <div class="flex items-center gap-3">
            @php
                $statusConfig = [
                    'pending' => [
                        'color' => 'yellow',
                        'text' => 'Menunggu Review',
                        'bg' => 'from-yellow-100 to-amber-100',
                        'textColor' => 'text-yellow-700',
                        'border' => 'border-yellow-200',
                        'dot' => 'bg-yellow-400'
                    ],
                    'diterima' => [
                        'color' => 'green',
                        'text' => 'Diterima',
                        'bg' => 'from-green-100 to-emerald-100',
                        'textColor' => 'text-green-700',
                        'border' => 'border-green-200',
                        'dot' => 'bg-green-400'
                    ],
                    'ditolak' => [
                        'color' => 'red',
                        'text' => 'Ditolak',
                        'bg' => 'from-red-100 to-pink-100',
                        'textColor' => 'text-red-700',
                        'border' => 'border-red-200',
                        'dot' => 'bg-red-400'
                    ],
                    'selesai' => [
                        'color' => 'blue',
                        'text' => 'Selesai',
                        'bg' => 'from-blue-100 to-indigo-100',
                        'textColor' => 'text-blue-700',
                        'border' => 'border-blue-200',
                        'dot' => 'bg-blue-400'
                    ]
                ];

                $currentStatus = $statusConfig[$docs->status] ?? $statusConfig['pending'];
            @endphp

            <div class="flex items-center gap-2">
                <div class="w-2 h-2 {{ $currentStatus['dot'] }} rounded-full animate-pulse"></div>
                <span class="px-4 py-2 rounded-full text-sm font-semibold bg-gradient-to-r {{ $currentStatus['bg'] }} {{ $currentStatus['textColor'] }} border {{ $currentStatus['border'] }}">
                    {{ $currentStatus['text'] }}
                </span>
            </div>
          </div>
        </div>
      </div>

      <!-- Content Grid -->
      <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 lg:gap-8">
        <!-- Informasi Peserta -->
        <div class="xl:col-span-2 space-y-6">
          <!-- Data Pribadi Card -->
          <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-shadow duration-300">
            <div class="bg-gradient-to-r from-indigo-500 to-purple-600 px-6 py-4">
              <h2 class="text-xl font-bold text-white flex items-center">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
            </svg>
            Data Pribadi
              </h2>
            </div>
            <div class="p-6">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4 lg:gap-6">
            <div class="space-y-3">
              <div class="flex flex-col">
                <span class="text-sm font-medium text-gray-500 mb-1">Nama Lengkap</span>
                <span class="text-gray-900 font-semibold">{{ $docs->intern->fullname }}</span>
              </div>
              <div class="flex flex-col">
                <span class="text-sm font-medium text-gray-500 mb-1">Email</span>
                <span class="text-gray-900 font-mono">{{ $docs->intern->user->email ?? '-' }}</span>
              </div>
              <div class="flex flex-col">
                <span class="text-sm font-medium text-gray-500 mb-1">Universitas</span>
                <span class="text-gray-900">{{ $docs->intern->university }}</span>
              </div>
              <div class="flex flex-col">
                <span class="text-sm font-medium text-gray-500 mb-1">Fakultas</span>
                <span class="text-gray-900">{{ $docs->intern->faculty }}</span>
              </div>
            </div>
            <div class="space-y-3">
              <div class="flex flex-col">
                <span class="text-sm font-medium text-gray-500 mb-1">Jurusan</span>
                <span class="text-gray-900">{{ $docs->intern->major }}</span>
              </div>
              <div class="flex flex-col">
                <span class="text-sm font-medium text-gray-500 mb-1">Department Magang</span>
                <span class="text-gray-900">{{ $docs->department->name }}</span>
              </div>
              <div class="flex flex-col">
                <span class="text-sm font-medium text-gray-500 mb-1">No HP</span>
                <span class="text-gray-900 font-mono">{{ $docs->intern->no_hp }}</span>
              </div>
              @if($passwordManual)
              <div class="flex flex-col">
                <span class="text-sm font-medium text-gray-500 mb-1">Password Manual</span>
                <span class="text-gray-900 font-mono">{{ $passwordManual ?? '-' }}</span>
              </div>
              @endif
              <div class="flex flex-col">
                <span class="text-sm font-medium text-gray-500 mb-1">Alamat</span>
                <span class="text-gray-900">{{ $docs->intern->address }}</span>
              </div>
            </div>
              </div>
            </div>
          </div>

          <!-- Periode Magang Card -->
          <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-shadow duration-300">
            <div class="bg-gradient-to-r from-emerald-500 to-teal-600 px-6 py-4">
              <h2 class="text-xl font-bold text-white flex items-center">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0v1a1 1 0 001 1h4a1 1 0 001-1V7m-6 0H5a2 2 0 00-2 2v8a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3"></path>
            </svg>
            Periode Magang
              </h2>
            </div>
            <div class="p-6">
              <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 lg:gap-6">
            <div class="text-center p-4 bg-emerald-50 rounded-xl border border-emerald-100">

              <div class="text-2xl font-bold text-emerald-600">{{ $docs->date_start?->format('d') ?? '-' }}</div>
            <div class="text-sm text-emerald-600 font-medium">{{ $docs->date_start?->format('F Y') ?? '-' }}</div>
              <div class="text-xs text-gray-600 mt-1">Tanggal Mulai</div>
            </div>
            <div class="text-center p-4 bg-blue-50 rounded-xl border border-blue-100">
              <div class="text-2xl font-bold text-blue-600">{{ $docs->date_end?->format('d') ?? '-'}}</div>
              <div class="text-sm text-blue-600 font-medium">{{ $docs->date_end?->format('F Y') ?? '-'}}</div>
              {{-- @dd($docs->date_end->format('F Y')) --}}
              <div class="text-xs text-gray-600 mt-1">Tanggal Selesai</div>
            </div>
            <div class="text-center p-4 bg-purple-50 rounded-xl border border-purple-100">
              <div class="text-2xl font-bold text-purple-600">{{ $docs->created_at->format('d') }}</div>
              <div class="text-sm text-purple-600 font-medium">{{ $docs->created_at->format('F Y') }}</div>
              <div class="text-xs text-gray-600 mt-1">Tanggal Pengajuan</div>
            </div>
              </div>
            </div>
          </div>


          @if($docs->status == 'selesai')
          <!-- input sertifikat -->
          <form action="{{ route('admin.sertifikat',$docs->slug) }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-2xl p-5 shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-shadow duration-300">
            @csrf

                <label for="cv" class="block text-sm font-medium text-slate-700 mb-2">
                    Beri Sertifikat <span class="text-slate-400">(Opsional)</span>
                </label>
                <div class="relative">
                    <input type="file" id="sertifikat" name="sertifikat" accept=".pdf,.doc,.docx,.jpg,.jpeg"
                         class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-200 bg-white/50 backdrop-blur-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    @error('sertifikat')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <p class="text-xs text-slate-500 mt-2">Format: PDF,JPG,JPEG,PNG (Maksimal 5MB)</p>

                <div class="flex justify-end">

                    <button type="submit" class="flex items-center justify-center px-6 py-3 bg-purple-500 bg-gradient-to-r from-purple-500 to-emerald-600 text-white font-semibold rounded-xl hover:from-purple-600 hover:to-emerald-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-purple-500/25">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Kirim
                    </button>
                </div>
          </form>

          @endif
        </div>

        <!-- Dokumen -->
        <div class="space-y-6">
          <!-- Dokumen Card -->
          <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-shadow duration-300">
            <div class="bg-gradient-to-r from-orange-500 to-red-500 px-6 py-4">
              <h2 class="text-xl font-bold text-white flex items-center">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                Dokumen
              </h2>
            </div>
            <div class="p-6">
              <div class="space-y-4">


                @if($docs->application_letter)
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-xl border border-gray-100 hover:bg-gray-100 transition-colors duration-200">
                  <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                      <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                      </svg>
                    </div>
                    <div>
                      <div class="font-medium text-gray-900">Surat Pengajuan</div>
                    </div>
                  </div>
                  {{-- surat pengajuan --}}
                  <a href="{{ route('admin.document', $docs->application_letter) }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition-colors duration-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                    Lihat
                  </a>
                </div>
                @endif

                @if($docs->cv)
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-xl border border-gray-100 hover:bg-gray-100 transition-colors duration-200">
                  <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                      <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                      </svg>
                    </div>
                    <div>
                      <div class="font-medium text-gray-900">Curriculum Vitae</div>

                    </div>
                  </div>
                  {{-- Curriculum Vitae --}}

                  <a href="{{ route('admin.document',$docs->cv) }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-green-600 text-white text-sm font-medium rounded-lg hover:bg-green-700 transition-colors duration-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                    Lihat
                  </a>
                </div>
                @endif

                @if($docs->transcript)
                 <div class="flex items-center justify-between p-4 bg-gray-50 rounded-xl border border-gray-100 hover:bg-gray-100 transition-colors duration-200">
                  <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                      <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                      </svg>
                    </div>
                    <div>
                      <div class="font-medium text-gray-900">Transkrip Nilai</div>

                    </div>
                  </div>
                  <a href="{{ route('admin.document', $docs->transcript) }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-purple-600 text-white text-sm font-medium rounded-lg hover:bg-purple-700 transition-colors duration-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                    Lihat
                  </a>
                </div>
                @endif
                @if($docs->certificate)
                 <div class="flex items-center justify-between p-4 bg-gray-50 rounded-xl border border-gray-100 hover:bg-gray-100 transition-colors duration-200">
                  <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                      <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                      </svg>
                    </div>
                    <div>
                      <div class="font-medium text-gray-900">Sertifikat</div>

                    </div>
                  </div>
                  <a href="{{ asset('storage/' . $docs->certificate) }}" target="_blank" class="inline-flex items-center px-4 py-2 bg-purple-600 text-white text-sm font-medium rounded-lg hover:bg-purple-700 transition-colors duration-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                    </svg>
                    Lihat
                  </a>
                </div>
                @endif

              </div>
            </div>
          </div>
        </div>
      </div>



      <!-- Action Buttons -->
      <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">

        @if($docs->status === 'pending')
            <div id="status-pending" class="status-section">
                <!-- Status: Menunggu Review (Default) -->
                <div class="flex flex-col sm:flex-row gap-4 sm:gap-3">
                    <!-- Status Button -->
                    <div class="flex items-center justify-center px-6 py-3 bg-gradient-to-r from-yellow-100 to-amber-100 text-yellow-700 font-semibold rounded-xl border-2 border-yellow-200 cursor-default">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Status: Menunggu Review
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-3 flex-1 sm:justify-end">
                        <a href="{{ route('admin.edit-intern-status', ['docs' => $docs->slug, 'status' => 'diterima']) }}" class="flex items-center justify-center px-6 py-3 bg-gradient-to-r bg-green-500 from-green-500 to-emerald-600 text-white font-semibold rounded-xl hover:from-green-600 hover:to-emerald-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-green-500/25">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Terima
                        </a>

                        <a href="{{ route('admin.edit-intern-status', ['docs' => $docs->slug, 'status' => 'ditolak']) }}" class="flex items-center justify-center px-6 py-3 bg-red-500 bg-gradient-to-r from-red-500 to-pink-600 text-white font-semibold rounded-xl hover:from-red-600 hover:to-pink-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-red-500/25">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            Tolak
                        </a>
                    </div>
                </div>
            </div>
        @endif

        @if($docs->status === 'diterima')
            <!-- Status: Diterima -->
            <div id="status-accepted" class="status-section">
                <div class="flex flex-col sm:flex-row gap-4 sm:gap-3">
                    <!-- Status Button -->
                    <div class="flex items-center justify-center px-6 py-3 bg-gradient-to-r from-green-100 to-emerald-100 text-green-700 font-semibold rounded-xl border-2 border-green-200 cursor-default">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Status: Diterima
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-3 flex-1 sm:justify-end">
                        <a href="{{ route('admin.edit-intern-status', ['docs' => $docs->slug, 'status' => 'pending']) }}" class="flex items-center justify-center px-6 py-3 bg-amber-400 bg-gradient-to-r from-yellow-500 to-amber-600 text-white font-semibold rounded-xl hover:from-yellow-600 hover:to-amber-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-yellow-500/25">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Pending
                        </a>

                        <a href="{{ route('admin.edit-intern-status', ['docs' => $docs->slug, 'status' => 'ditolak']) }}" class="flex items-center justify-center px-6 py-3 bg-gradient-to-r bg-red-500 from-red-500 to-pink-600 text-white font-semibold rounded-xl hover:from-red-600 hover:to-pink-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-red-500/25">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            Tolak
                        </a>

                        <a href="{{ route('admin.edit-intern-status', ['docs' => $docs->slug, 'status' => 'selesai']) }}" class="flex items-center justify-center px-6 py-3 bg-indigo-700 bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-semibold rounded-xl hover:from-blue-600 hover:to-indigo-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-blue-500/25">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                            </svg>
                            Selesai
                        </a>
                    </div>
                </div>
            </div>
        @endif

        @if ($docs->status === 'ditolak')
            <!-- Status: Ditolak -->
            <div id="status-rejected" class="status-section">
                <div class="flex flex-col sm:flex-row gap-4 sm:gap-3">
                    <!-- Status Button -->
                    <div class="flex items-center justify-center px-6 py-3  bg-gradient-to-r from-red-100 to-pink-100 text-red-700 font-semibold rounded-xl border-2 border-red-200 cursor-default">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        Status: Ditolak
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-3 flex-1 sm:justify-end">
                        <a href="{{ route('admin.edit-intern-status', ['docs' => $docs->slug, 'status' => 'pending']) }}" class="flex items-center justify-center px-6 py-3 bg-amber-400 bg-gradient-to-r from-yellow-500 to-amber-600 text-white font-semibold rounded-xl hover:from-yellow-600 hover:to-amber-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-yellow-500/25">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Pending
                        </a>

                        <a href="{{ route('admin.edit-intern-status', ['docs' => $docs->slug, 'status' => 'diterima']) }}" class="flex items-center justify-center px-6 py-3 bg-green-500 bg-gradient-to-r from-green-500 to-emerald-600 text-white font-semibold rounded-xl hover:from-green-600 hover:to-emerald-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-green-500/25">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Terima
                        </a>
                    </div>
                </div>
            </div>
        @endif

        @if ($docs->status === 'selesai')
            <!-- Status: Selesai -->
            <div id="status-completed" class="status-section">
                <div class="flex flex-col sm:flex-row gap-4 sm:gap-3">
                    <!-- Status Button -->
                    <div class="flex items-center justify-center px-6 py-3 bg-gradient-to-r from-blue-100 to-indigo-100 text-blue-700 font-semibold rounded-xl border-2 border-blue-200 cursor-default">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                        </svg>
                        Status: Selesai
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-3 flex-1 sm:justify-end">
                        <a href="{{ route('admin.edit-intern-status',[$docs->slug, 'pending']) }}" class="flex items-center justify-center px-6 py-3 bg-amber-400 bg-gradient-to-r from-yellow-500 to-amber-600 text-white font-semibold rounded-xl hover:from-yellow-600 hover:to-amber-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-yellow-500/25">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Pending
                        </a>

                        <a href="{{ route('admin.edit-intern-status', [$docs->slug, 'ditolak']) }}" class="flex items-center justify-center px-6 py-3 bg-red-500 bg-gradient-to-r from-red-500 to-pink-600 text-white font-semibold rounded-xl hover:from-red-600 hover:to-pink-700 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-red-500/25">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            Tolak
                        </a>


                    </div>
                </div>
            </div>
        @endif


        <!-- Additional Info -->
        <div class="mt-4 pt-4 border-t border-gray-100">
          <div class="flex flex-col sm:flex-row sm:items-center justify-between text-sm text-gray-500 gap-2">
            <div class="flex items-center">
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              Pastikan semua dokumen telah diperiksa sebelum mengambil keputusan
            </div>
            <div class="flex items-center">
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              Silahkan Putuskan
            </div>
          </div>
        </div>
      </div>

    </div>

    @if (session('error'))
    alert('Error', '{{ session('error') }}', 'error');
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ session('error') }}',
        });
    </script>
    @endif

    @if (session('success'))
    alert('Success', '{{ session('success') }}', 'success');
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ session('success') }}',
        });
    </script>
    @endif

  </body>
</html>
