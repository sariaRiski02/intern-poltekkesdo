@extends('layouts.app')

@section('content')
    <section class="min-h-screen bg-gradient-to-br from-emerald-50 via-blue-50 to-white py-12">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-20 left-10 w-32 h-32 bg-emerald-300 rounded-full blur-3xl"></div>
        <div class="absolute top-40 right-20 w-48 h-48 bg-blue-300 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-1/3 w-40 h-40 bg-emerald-200 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-8" data-aos="fade-up">
            <h1 class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-emerald-600 to-blue-600 bg-clip-text text-transparent mb-4">
            Form Pendaftaran Magang
            </h1>
            <p class="text-slate-600 text-lg">
            Isi formulir di bawah ini untuk mendaftar program magang di Poltekkes Manado
            </p>
        </div>

        <!-- Form Card -->
        <div class="bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-8 border border-emerald-100" data-aos="fade-up" data-aos-delay="100">
            <form action="#" method="POST" enctype="multipart/form-data" class="space-y-8">
            @csrf

            <!-- Personal Information Section -->
            <div class="space-y-6">
                <h2 class="text-2xl font-bold text-slate-800 border-b border-emerald-100 pb-3">
                <span class="inline-flex items-center gap-2">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    Informasi Personal
                </span>
                </h2>

                <!-- Nama Lengkap -->
                <div>
                <label for="nama_lengkap" class="block text-sm font-medium text-slate-700 mb-2">
                    Nama Lengkap <span class="text-red-500">*</span>
                </label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" required
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-200 bg-white/50 backdrop-blur-sm">
                </div>

                <!-- Email -->
                <div>
                <label for="email" class="block text-sm font-medium text-slate-700 mb-2">
                    Email <span class="text-red-500">*</span>
                </label>
                <input type="email" id="email" name="email" required
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-200 bg-white/50 backdrop-blur-sm">
                </div>

                <!-- No HP -->
                <div>
                <label for="no_hp" class="block text-sm font-medium text-slate-700 mb-2">
                    Nomor HP <span class="text-red-500">*</span>
                </label>
                <input type="tel" id="no_hp" name="no_hp" required
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-200 bg-white/50 backdrop-blur-sm">
                </div>

                <!-- Alamat -->
                <div>
                <label for="alamat" class="block text-sm font-medium text-slate-700 mb-2">
                    Alamat <span class="text-red-500">*</span>
                </label>
                <textarea id="alamat" name="alamat" rows="3" required
                            class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-200 bg-white/50 backdrop-blur-sm resize-none"></textarea>
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
                <input type="text" id="universitas" name="universitas" required
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-200 bg-white/50 backdrop-blur-sm">
                </div>

                <!-- Fakultas -->
                <div>
                <label for="fakultas" class="block text-sm font-medium text-slate-700 mb-2">
                    Fakultas <span class="text-red-500">*</span>
                </label>
                <input type="text" id="fakultas" name="fakultas" required
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-200 bg-white/50 backdrop-blur-sm">
                </div>

                <!-- Jurusan -->
                <div>
                <label for="jurusan" class="block text-sm font-medium text-slate-700 mb-2">
                    Jurusan/Program Studi <span class="text-red-500">*</span>
                </label>
                <input type="text" id="jurusan" name="jurusan" required
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-200 bg-white/50 backdrop-blur-sm">
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
                    <input type="date" id="tanggal_mulai" name="tanggal_mulai" required
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-200 bg-white/50 backdrop-blur-sm">
                </div>

                <!-- Tanggal Selesai -->
                <div>
                    <label for="tanggal_selesai" class="block text-sm font-medium text-slate-700 mb-2">
                    Tanggal Selesai <span class="text-red-500">*</span>
                    </label>
                    <input type="date" id="tanggal_selesai" name="tanggal_selesai" required
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-200 bg-white/50 backdrop-blur-sm">
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
                    <input type="file" id="surat_pengajuan" name="surat_pengajuan" accept=".pdf,.doc,.docx" required
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-200 bg-white/50 backdrop-blur-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100">
                </div>
                <p class="text-xs text-slate-500 mt-2">Format: PDF, DOC, DOCX (Maksimal 5MB)</p>
                </div>

                <!-- CV (Optional) -->
                <div>
                <label for="cv" class="block text-sm font-medium text-slate-700 mb-2">
                    Curriculum Vitae (CV) <span class="text-slate-400">(Opsional)</span>
                </label>
                <div class="relative">
                    <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx"
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-200 bg-white/50 backdrop-blur-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                </div>
                <p class="text-xs text-slate-500 mt-2">Format: PDF, DOC, DOCX (Maksimal 5MB)</p>
                </div>

                <!-- Transkrip (Optional) -->
                <div>
                <label for="transkrip" class="block text-sm font-medium text-slate-700 mb-2">
                    Transkrip Nilai <span class="text-slate-400">(Opsional)</span>
                </label>
                <div class="relative">
                    <input type="file" id="transkrip" name="transkrip" accept=".pdf,.jpg,.jpeg,.png"
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-200 bg-white/50 backdrop-blur-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-purple-50 file:text-purple-700 hover:file:bg-purple-100">
                </div>
                <p class="text-xs text-slate-500 mt-2">Format: PDF, JPG, PNG (Maksimal 5MB)</p>
                </div>
            </div>

            <!-- Department Selection -->
            <div class="space-y-6">
                <h2 class="text-2xl font-bold text-slate-800 border-b border-emerald-100 pb-3">
                <span class="inline-flex items-center gap-2">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                    Departemen Pilihan
                </span>
                </h2>

                <div>
                <label for="department_id" class="block text-sm font-medium text-slate-700 mb-2">
                    Pilih Departemen Magang <span class="text-red-500">*</span>
                </label>
                <select id="department_id" name="department_id" required
                        class="w-full px-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-200 bg-white/50 backdrop-blur-sm">
                    <option value="">Pilih Departemen...</option>
                    <option value="1">Administrasi</option>
                    <option value="2">Laboratorium</option>
                    <option value="3">IT Kesehatan</option>
                    <option value="4">Keperawatan</option>
                    <option value="5">Farmasi</option>
                    <option value="6">Gizi</option>
                    <option value="7">Radiologi</option>
                    <option value="8">Kebidanan</option>
                </select>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="pt-6">
                <button type="submit" class="w-full bg-gradient-to-r from-emerald-500 to-blue-500 hover:from-emerald-600 hover:to-blue-600 text-white font-bold py-4 px-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-[1.02] flex items-center justify-center gap-3 text-lg">
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
