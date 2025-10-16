@extends('admin.layout.app')

@section('title', 'Tambah Peserta')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full mb-4">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
            </div>
            <h1 class="text-4xl font-bold text-gray-900 mb-2">Tambah Peserta Program</h1>
            <p class="text-gray-600 text-lg">Isi form berikut untuk menambahkan peserta baru ke dalam sistem</p>
        </div>

        <!-- Form -->
        <div class="bg-white rounded-3xl shadow-2xl border border-gray-200 overflow-hidden">
            <div class="bg-gradient-to-r from-blue-500 to-indigo-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white">Form Pendaftaran</h2>
            </div>

            <form action="{{ route('admin.add-intern-process') }}" method="POST" enctype="multipart/form-data" class="p-8 space-y-8">
                @csrf
                <!-- Data Diri -->
                <div class="bg-gray-50 rounded-2xl p-6">
                    <div class="flex items-center mb-6">
                        <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center mr-3">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Data Diri</h3>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <!-- Nama Lengkap -->
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-gray-700">Nama Lengkap *</label>
                            <input type="text" name="fullname" value="{{ old('fullname') }}"
                                class="w-full px-4 py-3 border-2 @error('fullname') border-red-500 @else border-gray-200 @enderror rounded-xl shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"
                                placeholder="Masukkan nama lengkap" required>
                            @error('fullname')
                                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-gray-700">Email *</label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="w-full px-4 py-3 border-2 @error('email') border-red-500 @else border-gray-200 @enderror rounded-xl shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"
                                placeholder="Masukkan email" required>
                            @error('email')
                                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Universitas -->
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-gray-700">Universitas *</label>
                            <input type="text" name="university" value="{{ old('university') }}"
                                class="w-full px-4 py-3 border-2 @error('university') border-red-500 @else border-gray-200 @enderror rounded-xl shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"
                                placeholder="Nama universitas" required>
                            @error('university')
                                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Fakultas -->
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-gray-700">Fakultas *</label>
                            <input type="text" name="faculty" value="{{ old('faculty') }}"
                                class="w-full px-4 py-3 border-2 @error('faculty') border-red-500 @else border-gray-200 @enderror rounded-xl shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"
                                placeholder="Nama fakultas" required>
                            @error('faculty')
                                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Jurusan -->
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-gray-700">Jurusan *</label>
                            <input type="text" name="major" value="{{ old('major') }}"
                                class="w-full px-4 py-3 border-2 @error('major') border-red-500 @else border-gray-200 @enderror rounded-xl shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"
                                placeholder="Program studi" required>
                            @error('major')
                                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Tanggal Lahir -->
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-gray-700">Tanggal Lahir *</label>
                            <input type="date" name="birth_date" value="{{ old('birth_date') }}"
                                class="w-full px-4 py-3 border-2 @error('birth_date') border-red-500 @else border-gray-200 @enderror rounded-xl shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"
                                required>
                            @error('birth_date')
                                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Alamat -->
                        <div class="space-y-2 lg:col-span-1">
                            <label class="block text-sm font-semibold text-gray-700">Alamat *</label>
                            <textarea name="address" rows="3"
                                class="w-full px-4 py-3 border-2 @error('address') border-red-500 @else border-gray-200 @enderror rounded-xl shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 resize-none"
                                placeholder="Alamat lengkap" required>{{ old('address') }}</textarea>
                            @error('address')
                                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Nomor HP -->
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-gray-700">Nomor HP *</label>
                            <input type="text" name="no_hp" value="{{ old('no_hp') }}"
                                class="w-full px-4 py-3 border-2 @error('no_hp') border-red-500 @else border-gray-200 @enderror rounded-xl shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"
                                placeholder="08xxxxxxxxxx" required>
                            @error('no_hp')
                                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Department -->
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-gray-700">Unit *</label>
                            <select name="department_id"
                                class="w-full px-4 py-3 border-2 @error('department_id') border-red-500 @else border-gray-200 @enderror rounded-xl shadow-sm bg-white focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200"
                                required>
                                <option value="" disabled {{ old('department_id') ? '' : 'selected' }}>Pilih Unit</option>
                                @foreach($departments as $dept)
                                    <option value="{{ $dept->id }}" {{ old('department_id') == $dept->id ? 'selected' : '' }}>
                                        {{ $dept->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('department_id')
                                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Periode Magang -->
                <div class="bg-green-50 rounded-2xl p-6">
                    <div class="flex items-center mb-6">
                        <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center mr-3">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Periode Program</h3>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="block text-sm font-semibold text-gray-700">Tanggal Mulai *</label>
                            <input type="date" name="date_start" value="{{ old('date_start') }}"
                                class="w-full px-4 py-3 border-2 @error('date_start') border-red-500 @else border-gray-200 @enderror rounded-xl shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-200"
                                required>
                            @error('date_start')
                                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    <div class="space-y-2">
                            <label class="block text-sm font-semibold text-gray-700">Tanggal Selesai *</label>
                            <input type="date" name="date_end" value="{{ old('date_end') }}"
                                class="w-full px-4 py-3 border-2 @error('date_end') border-red-500 @else border-gray-200 @enderror rounded-xl shadow-sm focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-all duration-200"
                                required>
                            @error('date_end')
                                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Dokumen -->
                <div class="bg-purple-50 rounded-2xl p-6">
                    <div class="flex items-center mb-6">
                        <div class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center mr-3">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Upload Dokumen</h3>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        <!-- Surat Permohonan -->
                        <div class="space-y-3">
                            <label class="block text-sm font-semibold text-gray-700">Surat Permohonan *</label>
                            <input type="file" name="application_letter" accept=".pdf"
                                class="w-full px-4 py-3 border-2 border-dashed @error('application_letter') border-red-500 @else border-purple-300 @enderror rounded-xl bg-white focus:ring-2 focus:ring-purple-200 transition-all duration-200 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-purple-100 file:text-purple-700 hover:file:bg-purple-200"
                                required>
                            @error('application_letter')
                                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-xs text-gray-500">Format: PDF (Maks 5MB)</p>
                        </div>

                        <!-- Transkrip -->
                        <div class="space-y-3">
                            <label class="block text-sm font-semibold text-gray-700">Transkrip Nilai</label>
                            <input type="file" name="transcript" accept=".pdf"
                                class="w-full px-4 py-3 border-2 border-dashed @error('transcript') border-red-500 @else border-purple-300 @enderror rounded-xl bg-white focus:ring-2 focus:ring-purple-200 transition-all duration-200 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-purple-100 file:text-purple-700 hover:file:bg-purple-200">
                            @error('transcript')
                                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-xs text-gray-500">Format: PDF (Maks 5MB)</p>
                        </div>

                        <!-- CV -->
                        <div class="space-y-3">
                            <label class="block text-sm font-semibold text-gray-700">Curriculum Vitae</label>
                            <input type="file" name="cv" accept=".pdf"
                                class="w-full px-4 py-3 border-2 border-dashed @error('cv') border-red-500 @else border-purple-300 @enderror rounded-xl bg-white focus:ring-2 focus:ring-purple-200 transition-all duration-200 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-purple-100 file:text-purple-700 hover:file:bg-purple-200">
                            @error('cv')
                                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                            @enderror
                            <p class="text-xs text-gray-500">Format: PDF (Maks 5MB)</p>
                        </div>
                    </div>
                </div>

                <!-- Submit -->
                <div class="bg-gradient-to-r from-blue-500 to-indigo-600 rounded-2xl p-6">
                    <div class="flex flex-col sm:flex-row gap-4 justify-between items-center">
                        <div>
                            <h3 class="text-white font-bold text-lg">Konfirmasi Data</h3>
                            <p class="text-blue-100 text-sm">Pastikan semua data telah diisi dengan benar</p>
                        </div>
                        <div class="flex gap-3">
                            <button type="button" onclick="history.back()"
                                class="px-6 py-3 bg-white/20 text-white rounded-xl hover:bg-white/30 transition-all duration-200 font-semibold border border-white/30">
                                Batal
                            </button>
                            <button type="submit"
                                class="px-8 py-3 bg-white text-blue-600 rounded-xl hover:bg-blue-50 transition-all duration-200 font-bold shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Simpan Peserta
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const maxSize = 5 * 1024 * 1024; // 5MB dalam bytes
    const inputs = document.querySelectorAll('input[type="file"]');

    inputs.forEach(input => {
        input.addEventListener('change', function (e) {
            const file = e.target.files[0];
            const errorId = `${e.target.name}-error`;

            // hapus pesan error sebelumnya jika ada
            let existingError = document.getElementById(errorId);
            if (existingError) existingError.remove();

            if (file && file.size > maxSize) {
                // buat pesan error baru
                const errorMessage = document.createElement('p');
                errorMessage.id = errorId;
                errorMessage.className = 'text-sm text-red-600 mt-1';
                errorMessage.textContent = 'Ukuran file melebihi 5MB. Silakan pilih file yang lebih kecil.';

                // tambahkan di bawah input
                e.target.insertAdjacentElement('afterend', errorMessage);

                // kosongkan input agar tidak bisa diupload
                e.target.value = '';
            }
        });
    });
});
</script>

@endsection
