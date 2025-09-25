@extends('layouts.app')

@section('content')
    <section class="min-h-screen bg-gradient-to-br from-slate-50 via-emerald-50/30 to-blue-50/20 py-12 relative overflow-hidden">
    <!-- Enhanced Background Pattern -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-10 w-96 h-96 bg-gradient-to-r from-emerald-200/20 to-blue-200/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute top-40 right-20 w-80 h-80 bg-gradient-to-r from-blue-200/20 to-purple-200/20 rounded-full blur-3xl animate-pulse delay-300"></div>
        <div class="absolute bottom-20 left-1/3 w-64 h-64 bg-gradient-to-r from-emerald-200/20 to-teal-200/20 rounded-full blur-3xl animate-pulse delay-700"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full h-full bg-gradient-to-r from-transparent via-white/5 to-transparent rotate-12"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-12" data-aos="fade-up">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-emerald-500 to-blue-500 rounded-2xl mb-6 shadow-lg">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-emerald-600 via-blue-600 to-purple-600 bg-clip-text text-transparent mb-4 leading-tight">
            Form Pendaftaran Magang
            </h1>
            <p class="text-slate-600 text-xl max-w-2xl mx-auto leading-relaxed">
            Bergabunglah dengan program magang profesional di Poltekkes Manado dan kembangkan karir Anda
            </p>
        </div>

        <!-- Form Card -->
        <div class="bg-white/80 backdrop-blur-xl rounded-3xl shadow-2xl p-10 border border-white/20 ring-1 ring-emerald-100/50 hover:shadow-3xl transition-all duration-500" data-aos="fade-up" data-aos-delay="100" style="box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15), 0 0 0 1px rgba(255, 255, 255, 0.1) inset;">
            <form action="{{ route('intern.store', $department->slug) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
            @csrf

            <!-- Personal Information Section -->
            <div class="space-y-6">
                <div class="relative mb-8">
                    <div class="absolute -inset-2 bg-gradient-to-r from-emerald-500/20 to-blue-500/20 rounded-2xl blur-lg opacity-50"></div>
                    <h2 class="relative text-2xl font-bold text-slate-800 bg-white/60 backdrop-blur-sm rounded-2xl p-4 border border-white/30">
                    <span class="inline-flex items-center gap-3">
                        <div class="p-2 bg-gradient-to-br from-emerald-500 to-blue-500 rounded-xl">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        Informasi Personal
                    </span>
                    </h2>
                </div>

                <!-- Nama Lengkap -->
                <div>
                <label for="nama_lengkap" class="block text-sm font-medium text-slate-700 mb-2">
                    Nama Lengkap <span class="text-red-500">*</span>
                </label>
                <div class="relative group">
                    <input value="{{ old('nama_lengkap') }}" type="text" id="nama_lengkap" name="nama_lengkap" required
                            class="w-full px-5 py-4 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-emerald-500/50 focus:border-emerald-400 transition-all duration-300 bg-white/70 backdrop-blur-sm hover:bg-white/90 hover:shadow-md placeholder-slate-400 group-hover:border-slate-300">
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-emerald-500/5 to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                </div>
                        @error('nama_lengkap')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                </div>

                <!-- No HP -->
                <div>
                    <label for="no_hp" class="block text-sm font-medium text-slate-700 mb-2">
                        Nomor HP <span class="text-red-500">*</span>
                    </label>
                    <div class="relative group">
                        <input value="{{ old('no_hp') }}" type="tel" id="no_hp" name="no_hp" required
                                class="w-full px-5 py-4 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-emerald-500/50 focus:border-emerald-400 transition-all duration-300 bg-white/70 backdrop-blur-sm hover:bg-white/90 hover:shadow-md placeholder-slate-400 group-hover:border-slate-300">
                        <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-emerald-500/5 to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                    </div>
                            @error('no_hp')
                                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                </div>

                <!-- Alamat -->
                <div>
                <label for="alamat" class="block text-sm font-medium text-slate-700 mb-2">
                    Alamat <span class="text-red-500">*</span>
                </label>
                <div class="relative group">
                    <textarea id="alamat" name="alamat" rows="4" value="{{ old('alamat') }}" required
                                class="w-full px-5 py-4 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-emerald-500/50 focus:border-emerald-400 transition-all duration-300 bg-white/70 backdrop-blur-sm hover:bg-white/90 hover:shadow-md placeholder-slate-400 resize-none group-hover:border-slate-300"></textarea>
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-emerald-500/5 to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                </div>
                            @error('alamat')
                                <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                </div>

                <!-- Tanggal Lahir -->
                <div>
                <label for="tanggal_lahir" class="block text-sm font-medium text-slate-700 mb-2">
                    Tanggal Lahir <span class="text-red-500">*</span>
                </label>
                <div class="relative group">
                    <input value="{{ old('tanggal_lahir') }}" type="date" id="tanggal_lahir" name="tanggal_lahir" required
                            class="w-full px-5 py-4 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-emerald-500/50 focus:border-emerald-400 transition-all duration-300 bg-white/70 backdrop-blur-sm hover:bg-white/90 hover:shadow-md placeholder-slate-400 group-hover:border-slate-300">
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-emerald-500/5 to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                </div>
                        @error('tanggal_lahir')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                </div>
            </div>

            <!-- Academic Information Section -->
            <div class="space-y-6">
                <h2 class="text-2xl font-bold text-slate-800 border-b border-emerald-100 pb-3">
                <span class="inline-flex items-center gap-2">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                    </svg>
                    Informasi Akademik
                </span>
                </h2>

                <!-- Universitas -->
                <div>
                <label for="universitas" class="block text-sm font-medium text-slate-700 mb-2">
                    Universitas/Institut <span class="text-red-500">*</span>
                </label>
                <input value="{{ old('universitas') }}" type="text" id="universitas" name="universitas" required
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-200 bg-white/50 backdrop-blur-sm">
                        @error('universitas')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                </div>

                <!-- Fakultas -->
                <div>
                <label for="fakultas" class="block text-sm font-medium text-slate-700 mb-2">
                    Fakultas <span class="text-red-500">*</span>
                </label>
                <input value="{{ old('fakultas') }}" type="text" id="fakultas" name="fakultas" required
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-200 bg-white/50 backdrop-blur-sm">
                        @error('fakultas')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                </div>

                <!-- Jurusan -->
                <div>
                <label for="jurusan" class="block text-sm font-medium text-slate-700 mb-2">
                    Jurusan/Program Studi <span class="text-red-500">*</span>
                </label>
                <input value="{{ old('jurusan') }}" type="text" id="jurusan" name="jurusan" required
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-200 bg-white/50 backdrop-blur-sm">
                        @error('jurusan')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                </div>
            </div>

            <!-- Internship Period Section -->
            <div class="space-y-6">
                <h2 class="text-2xl font-bold text-slate-800 border-b border-emerald-100 pb-3">
                <span class="inline-flex items-center gap-2">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 0V5a2 2 0 012-2h4a2 2 0 012 2v2M8 7h8M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    Periode Magang
                </span>
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Tanggal Mulai -->
                <div>
                    <label for="tanggal_mulai" class="block text-sm font-medium text-slate-700 mb-2">
                    Tanggal Mulai <span class="text-red-500">*</span>
                    </label>
                    <input value="{{ old('tanggal_mulai') }}" type="date" id="tanggal_mulai" name="tanggal_mulai" required
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-200 bg-white/50 backdrop-blur-sm">
                        @error('tanggal_mulai')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                </div>

                <!-- Tanggal Selesai -->
                <div>
                    <label for="tanggal_selesai" class="block text-sm font-medium text-slate-700 mb-2">
                    Tanggal Selesai <span class="text-red-500">*</span>
                    </label>
                    <input value="{{ old('tanggal_selesai') }}" type="date" id="tanggal_selesai" name="tanggal_selesai" required
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-200 bg-white/50 backdrop-blur-sm">
                        @error('tanggal_selesai')
                            <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                        @enderror
                </div>
                </div>
            </div>

            <!-- Documents Section -->
            <div class="space-y-6">
                <h2 class="text-2xl font-bold text-slate-800 border-b border-emerald-100 pb-3">
                <span class="inline-flex items-center gap-2">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Dokumen Pendukung
                </span>
                </h2>

                <!-- Surat Pengajuan dari Kampus -->
                <div>
                <label for="surat_pengajuan" class="block text-sm font-medium text-slate-700 mb-2">
                    Surat Pengajuan dari Kampus <span class="text-red-500">*</span>
                </label>
                <div class="relative">
                    <input value="{{ old('nama_lengkap') }}" type="file" id="surat_pengajuan" name="surat_pengajuan" accept=".pdf,.doc,.docx" required
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-200 bg-white/50 backdrop-blur-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100">
                    @error('surat_pengajuan')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <p class="text-xs text-slate-500 mt-2">Format: PDF, (Maksimal 5MB)</p>
                </div>

                <!-- CV (Optional) -->
                <div>
                <label for="cv" class="block text-sm font-medium text-slate-700 mb-2">
                    Curriculum Vitae (CV) <span class="text-slate-400">(Opsional)</span>
                </label>
                <div class="relative">
                    <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx"
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-200 bg-white/50 backdrop-blur-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                    @error('cv')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <p class="text-xs text-slate-500 mt-2">Format: PDF (Maksimal 5MB)</p>
                </div>

                <!-- Transkrip (Optional) -->
                <div>
                <label for="transkrip" class="block text-sm font-medium text-slate-700 mb-2">
                    Transkrip Nilai <span class="text-slate-400">(Opsional)</span>
                </label>
                <div class="relative">
                    <input type="file" id="transkrip" name="transkrip" accept=".pdf,.jpg,.jpeg,.png"
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-200 bg-white/50 backdrop-blur-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-purple-50 file:text-purple-700 hover:file:bg-purple-100">
                    @error('transkrip')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <p class="text-xs text-slate-500 mt-2">Format: PDF, JPG, PNG (Maksimal 5MB)</p>
                </div>
            </div>

            <!-- Department Information -->
            <div class="bg-emerald-50 rounded-2xl p-6 shadow-md">
                <h2 class="text-2xl font-bold text-emerald-800 border-b border-emerald-200 pb-3 mb-4">
                    <span class="inline-flex items-center gap-2">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                        Informasi Departemen
                    </span>
                </h2>

                <div class="text-lg text-slate-700">
                    <p class="mb-2">Departemen yang Anda pilih untuk magang:</p>
                    <p class="font-semibold text-emerald-700">
                        <strong>Department:</strong> {{ $department->name }}
                    </p>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="pt-8">
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-emerald-500 via-blue-500 to-purple-500 rounded-2xl blur opacity-30 group-hover:opacity-50 transition-opacity duration-500"></div>
                    <button type="submit" class="relative w-full bg-gradient-to-r from-emerald-500 via-blue-500 to-blue-600 hover:from-emerald-600 hover:via-blue-600 hover:to-purple-600 text-white font-bold py-5 px-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 hover:scale-[1.02] flex items-center justify-center gap-3 text-lg hover:-translate-y-1">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                </svg>
                Kirim Pendaftaran
                </button>
                <p class="text-center text-sm text-slate-500 mt-4">
                Dengan mengirim formulir ini, Anda menyetujui syarat dan ketentuan yang berlaku
                </p>
            </div>
            </form>
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

    // Form validation untuk tanggal
    document.getElementById('tanggal_mulai').addEventListener('change', function() {
        const startDate = this.value;
        const endDateInput = document.getElementById('tanggal_selesai');
        endDateInput.min = startDate;
    });

    // Tanggal lahir validation - set min and max dates
    const tanggalLahirInput = document.getElementById('tanggal_lahir');
    const today = new Date();
    const maxDate = new Date(today.getFullYear() - 17, today.getMonth(), today.getDate()); // Minimal umur 17 tahun
    const minDate = new Date(today.getFullYear() - 65, today.getMonth(), today.getDate()); // Maksimal umur 65 tahun

    tanggalLahirInput.max = maxDate.toISOString().split('T')[0];
    tanggalLahirInput.min = minDate.toISOString().split('T')[0];

    // Validasi umur saat input berubah
    tanggalLahirInput.addEventListener('change', function() {
        const birthDate = new Date(this.value);
        const age = Math.floor((today - birthDate) / (365.25 * 24 * 60 * 60 * 1000));

        if (age < 17) {
            alert('Umur minimal untuk mendaftar magang adalah 17 tahun.');
            this.value = '';
        } else if (age > 65) {
            alert('Umur maksimal untuk mendaftar magang adalah 65 tahun.');
            this.value = '';
        }
    });

    // File upload validation
    const fileInputs = document.querySelectorAll('input[type="file"]');
    fileInputs.forEach(input => {
        input.addEventListener('change', function() {
        const file = this.files[0];
        if (file && file.size > 5 * 1024 * 1024) { // 5MB
            alert('Ukuran file terlalu besar. Maksimal 5MB.');
            this.value = '';
        }
        });
    });
    </script>


@endsection
