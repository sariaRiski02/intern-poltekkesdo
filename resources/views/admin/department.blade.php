
@extends('admin.layout.app')

@section('title', 'Kelola Departemen')

@section('content')
<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="p-6 space-y-8">
    <!-- Header Section -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Kelola Departemen</h1>
            <p class="text-gray-600 mt-1">Mengelola departemen untuk program magang</p>
        </div>
        <button onclick="showAddDepartmentModal()" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-emerald-500 to-blue-500 text-white rounded-xl hover:from-emerald-600 hover:to-blue-600 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
            Tambah Departemen
        </button>
    </div>




    <!-- Departments Table -->
    <div class="bg-white rounded-2xl shadow border border-gray-100 overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-100 bg-gray-50">
            <h3 class="text-lg font-semibold text-gray-900">Daftar Departemen</h3>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                    <tr>
                        <th class="px-6 py-3 text-left">Departemen</th>
                        <th class="px-6 py-3 text-left">Peserta</th>
                        <th class="px-6 py-3 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-gradient-to-br from-emerald-500 to-green-600 rounded-xl flex items-center justify-center text-white font-bold">
                                    KP
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">Keperawatan</p>
                                    <p class="text-xs text-gray-500">Program studi keperawatan untuk perawat profesional</p>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-xs rounded-full bg-emerald-100 text-emerald-700 font-medium">45 Peserta</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex space-x-2">
                                <button onclick="showDetailModal('Keperawatan', 'Dr. Siti Rahayu, S.Kep', 'Program studi keperawatan untuk perawat profesional', 'Departemen Keperawatan memiliki komitmen untuk menghasilkan perawat yang profesional dan kompeten', 45)"
                                        class="inline-flex items-center px-3 py-1 text-xs font-medium text-blue-600 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    Detail
                                </button>
                                <button onclick="editDepartment('Keperawatan', 'Dr. Siti Rahayu, S.Kep', 'Program studi keperawatan untuk perawat profesional', 'Departemen Keperawatan memiliki komitmen untuk menghasilkan perawat yang profesional dan kompeten')"
                                        class="inline-flex items-center px-3 py-1 text-xs font-medium text-yellow-600 bg-yellow-50 rounded-lg hover:bg-yellow-100 transition-colors">
                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                    Edit
                                </button>
                                <button onclick="deleteDepartment('Keperawatan')"
                                        class="inline-flex items-center px-3 py-1 text-xs font-medium text-red-600 bg-red-50 rounded-lg hover:bg-red-100 transition-colors">
                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                    Hapus
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center text-white font-bold">
                                    KB
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">Kebidanan</p>
                                    <p class="text-xs text-gray-500">Program studi kebidanan untuk bidan profesional</p>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-xs rounded-full bg-purple-100 text-purple-700 font-medium">32 Peserta</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex space-x-2">
                                <button onclick="showDetailModal('Kebidanan', 'Dr. Maya Sari, SST', 'Program studi kebidanan untuk bidan profesional', 'Departemen Kebidanan fokus pada pelayanan kesehatan ibu dan anak', 32)"
                                        class="inline-flex items-center px-3 py-1 text-xs font-medium text-blue-600 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    Detail
                                </button>
                                <button onclick="editDepartment('Kebidanan', 'Dr. Maya Sari, SST', 'Program studi kebidanan untuk bidan profesional', 'Departemen Kebidanan fokus pada pelayanan kesehatan ibu dan anak')"
                                        class="inline-flex items-center px-3 py-1 text-xs font-medium text-yellow-600 bg-yellow-50 rounded-lg hover:bg-yellow-100 transition-colors">
                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                    Edit
                                </button>
                                <button onclick="deleteDepartment('Kebidanan')"
                                        class="inline-flex items-center px-3 py-1 text-xs font-medium text-red-600 bg-red-50 rounded-lg hover:bg-red-100 transition-colors">
                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                    Hapus
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-gradient-to-br from-orange-500 to-red-600 rounded-xl flex items-center justify-center text-white font-bold">
                                    FM
                                </div>
                                <div>
                                    <p class="font-medium text-gray-900">Farmasi</p>
                                    <p class="text-xs text-gray-500">Program studi farmasi untuk apoteker profesional</p>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-xs rounded-full bg-orange-100 text-orange-700 font-medium">28 Peserta</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex space-x-2">
                                <button onclick="showDetailModal('Farmasi', 'Dr. Ahmad Farid, S.Farm', 'Program studi farmasi untuk apoteker profesional', 'Departemen Farmasi menghasilkan tenaga farmasi yang berkualitas', 28)"
                                        class="inline-flex items-center px-3 py-1 text-xs font-medium text-blue-600 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    Detail
                                </button>
                                <button onclick="editDepartment('Farmasi', 'Dr. Ahmad Farid, S.Farm', 'Program studi farmasi untuk apoteker profesional', 'Departemen Farmasi menghasilkan tenaga farmasi yang berkualitas')"
                                        class="inline-flex items-center px-3 py-1 text-xs font-medium text-yellow-600 bg-yellow-50 rounded-lg hover:bg-yellow-100 transition-colors">
                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                    Edit
                                </button>
                                <button onclick="deleteDepartment('Farmasi')"
                                        class="inline-flex items-center px-3 py-1 text-xs font-medium text-red-600 bg-red-50 rounded-lg hover:bg-red-100 transition-colors">
                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                    Hapus
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
// Fungsi untuk menampilkan modal tambah departemen
function showAddDepartmentModal() {
    Swal.fire({
        title: '<div class="text-center"><h3 class="text-2xl font-bold text-gray-900 mb-2">Tambah Departemen Baru</h3><p class="text-gray-600">Lengkapi informasi departemen di bawah ini</p></div>',
        html: `
            <div class="space-y-4 text-left mt-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Nama Departemen *</label>
                    <input type="text" id="dept_name" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors" placeholder="Contoh: Teknologi Laboratorium Medik">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Kepala Departemen</label>
                    <input type="text" id="dept_head" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors" placeholder="Contoh: Dr. John Doe, S.Ked">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Singkat</label>
                    <input type="text" id="dept_head_desc" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors" placeholder="Deskripsi singkat departemen">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Lengkap</label>
                    <textarea id="dept_desc" rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors resize-none" placeholder="Deskripsi lengkap tentang departemen ini..."></textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Admin Yang Mengelola *</label>
                    <select id="dept_admin" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors">
                        <option value="">Pilih Admin</option>
                        <option value="1">Admin Utama</option>
                        <option value="2">Admin Akademik</option>
                        <option value="3">Admin Kemahasiswaan</option>
                    </select>
                </div>
            </div>
        `,
        width: '600px',
        showCancelButton: true,
        confirmButtonText: '<i class="fas fa-save"></i> Simpan Departemen',
        cancelButtonText: 'Batal',
        confirmButtonColor: '#10b981',
        cancelButtonColor: '#6b7280',
        customClass: {
            popup: 'rounded-2xl',
            confirmButton: 'rounded-xl px-6 py-3',
            cancelButton: 'rounded-xl px-6 py-3'
        },
        preConfirm: () => {
            const name = document.getElementById('dept_name').value;
            const head = document.getElementById('dept_head').value;
            const head_desc = document.getElementById('dept_head_desc').value;
            const desc = document.getElementById('dept_desc').value;
            const admin = document.getElementById('dept_admin').value;

            if (!name.trim()) {
                Swal.showValidationMessage('Nama departemen harus diisi');
                return false;
            }
            if (!admin) {
                Swal.showValidationMessage('Admin harus dipilih');
                return false;
            }

            return { name, head, head_desc, desc, admin };
        }
    }).then((result) => {
        if (result.isConfirmed) {
            const data = result.value;

            // Simulasi simpan data
            Swal.fire({
                title: 'Berhasil!',
                html: `Departemen <strong>${data.name}</strong> telah berhasil ditambahkan`,
                icon: 'success',
                confirmButtonColor: '#10b981',
                timer: 2000,
                timerProgressBar: true,
                customClass: {
                    popup: 'rounded-2xl'
                }
            }).then(() => {
                // Refresh halaman atau update table
                console.log('Data yang akan disimpan:', data);
                // location.reload(); // Uncomment untuk refresh
            });
        }
    });
}

// Fungsi untuk menampilkan detail departemen
function showDetailModal(name, head, head_desc, desc, participantCount) {
    const initials = name.split(' ').map(word => word.charAt(0)).join('').toUpperCase();

    Swal.fire({
        title: `<div class="text-center">
                    <div class="w-20 h-20 bg-gradient-to-br from-emerald-500 to-blue-600 rounded-2xl flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4">
                        ${initials}
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">${name}</h3>
                    <p class="text-gray-600 mt-1">${head_desc}</p>
                </div>`,
        html: `
            <div class="max-h-96 overflow-y-auto text-left">
                <!-- Stats -->
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div class="bg-gradient-to-br from-emerald-50 to-emerald-100 p-4 rounded-xl border border-emerald-200">
                        <div class="text-center">
                            <p class="text-xs font-medium text-emerald-600 uppercase tracking-wide">Total Peserta</p>
                            <p class="text-xl font-bold text-emerald-900">${participantCount}</p>
                        </div>
                    </div>
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-4 rounded-xl border border-blue-200">
                        <div class="text-center">
                            <p class="text-xs font-medium text-blue-600 uppercase tracking-wide">Status</p>
                            <p class="text-lg font-bold text-blue-900">Aktif</p>
                        </div>
                    </div>
                </div>

                <!-- Info Detail -->
                <div class="space-y-4">
                    <div class="bg-white border border-gray-200 rounded-xl p-4">
                        <div class="flex items-center space-x-2 mb-3">
                            <div class="p-2 bg-blue-100 rounded-lg">
                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <h5 class="font-bold text-gray-900">Informasi Departemen</h5>
                        </div>
                        <div class="space-y-2 text-sm">
                            <div class="flex justify-between">
                                <span class="font-medium text-gray-500">Kepala Departemen</span>
                                <span class="font-semibold text-gray-900">${head}</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white border border-gray-200 rounded-xl p-4">
                        <div class="flex items-center space-x-2 mb-3">
                            <div class="p-2 bg-green-100 rounded-lg">
                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <h5 class="font-bold text-gray-900">Deskripsi</h5>
                        </div>
                        <p class="text-sm text-gray-700">${desc}</p>
                    </div>
                </div>
            </div>
        `,
        width: '600px',
        showCancelButton: true,
        confirmButtonText: '<i class="fas fa-edit"></i> Edit Departemen',
        cancelButtonText: 'Tutup',
        confirmButtonColor: '#f59e0b',
        cancelButtonColor: '#6b7280',
        customClass: {
            popup: 'rounded-2xl',
            confirmButton: 'rounded-xl px-6 py-2',
            cancelButton: 'rounded-xl px-6 py-2'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            editDepartment(name, head, head_desc, desc);
        }
    });
}

// Fungsi untuk edit departemen
function editDepartment(name, head, head_desc, desc) {
    Swal.fire({
        title: '<div class="text-center"><h3 class="text-2xl font-bold text-gray-900 mb-2">Edit Departemen</h3><p class="text-gray-600">Update informasi departemen</p></div>',
        html: `
            <div class="space-y-4 text-left mt-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Nama Departemen *</label>
                    <input type="text" id="edit_dept_name" value="${name}" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 transition-colors">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Kepala Departemen</label>
                    <input type="text" id="edit_dept_head" value="${head}" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 transition-colors">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Singkat</label>
                    <input type="text" id="edit_dept_head_desc" value="${head_desc}" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 transition-colors">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Lengkap</label>
                    <textarea id="edit_dept_desc" rows="3" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 transition-colors resize-none">${desc}</textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Admin Yang Mengelola *</label>
                    <select id="edit_dept_admin" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 transition-colors">
                        <option value="1" selected>Admin Utama</option>
                        <option value="2">Admin Akademik</option>
                        <option value="3">Admin Kemahasiswaan</option>
                    </select>
                </div>
            </div>
        `,
        width: '600px',
        showCancelButton: true,
        confirmButtonText: '<i class="fas fa-save"></i> Update Departemen',
        cancelButtonText: 'Batal',
        confirmButtonColor: '#f59e0b',
        cancelButtonColor: '#6b7280',
        customClass: {
            popup: 'rounded-2xl',
            confirmButton: 'rounded-xl px-6 py-3',
            cancelButton: 'rounded-xl px-6 py-3'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: 'Berhasil Diperbarui!',
                text: `Departemen ${name} telah berhasil diperbarui`,
                icon: 'success',
                confirmButtonColor: '#10b981',
                timer: 2000,
                timerProgressBar: true,
                customClass: {
                    popup: 'rounded-2xl'
                }
            });
        }
    });
}

// Fungsi untuk hapus departemen
function deleteDepartment(name) {
    Swal.fire({
        title: 'Hapus Departemen?',
        html: `
            <div class="text-center">
                <div class="w-16 h-16 bg-red-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                    </svg>
                </div>
                <p class="text-lg font-semibold text-gray-900 mb-2">${name}</p>
                <p class="text-gray-600">Apakah Anda yakin ingin menghapus departemen ini?</p>
                <p class="text-sm text-red-600 mt-2">⚠️ Tindakan ini tidak dapat dibatalkan</p>
            </div>
        `,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya, Hapus!',
        cancelButtonText: 'Batal',
        confirmButtonColor: '#ef4444',
        cancelButtonColor: '#6b7280',
        customClass: {
            popup: 'rounded-2xl',
            confirmButton: 'rounded-xl px-6 py-2',
            cancelButton: 'rounded-xl px-6 py-2'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: 'Terhapus!',
                text: `Departemen ${name} telah berhasil dihapus`,
                icon: 'success',
                confirmButtonColor: '#10b981',
                timer: 2000,
                timerProgressBar: true,
                customClass: {
                    popup: 'rounded-2xl'
                }
            });
        }
    });
}
</script>
@endsection
