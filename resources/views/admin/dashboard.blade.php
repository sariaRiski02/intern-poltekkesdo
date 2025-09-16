@extends('admin.layout.app')

@section('title', 'Dashboard')


@section('content')
<div class="p-4 md:p-6">
    <!-- Welcome Section -->
    <div class="mb-6">
        <div class="bg-gradient-to-r from-emerald-500 via-blue-500 to-cyan-500 rounded-2xl p-4 md:p-6 text-white relative overflow-hidden">
            <!-- Background decorations -->
            <div class="absolute top-0 right-0 w-24 h-24 bg-white/10 rounded-full -translate-y-12 translate-x-12"></div>
            <div class="absolute bottom-0 left-0 w-20 h-20 bg-white/10 rounded-full translate-y-10 -translate-x-10"></div>

            <div class="relative">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div>
                        <h2 class="text-xl md:text-2xl font-bold mb-2">
                            Selamat Datang, Admin! 👋
                        </h2>
                        <p class="text-emerald-100 text-sm md:text-base">
                            Kelola dan pantau program magang Poltekkes Manado dengan mudah
                        </p>
                    </div>
                    <div class="hidden md:block">
                        <div class="w-16 h-16 bg-white/20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <!-- Total Peserta Magang -->
        <div class="bg-white rounded-2xl p-4 shadow-lg border border-emerald-100 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center gap-3">
                <div class="p-2 bg-gradient-to-br from-emerald-400 to-emerald-600 rounded-xl">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                    </svg>
                </div>
                <div>
                    <div class="text-2xl font-bold text-slate-800">245</div>
                    <div class="text-sm text-slate-500">Peserta Magang</div>
                </div>
            </div>
        </div>

        <!-- Total Departemen -->
        <div class="bg-white rounded-2xl p-4 shadow-lg border border-blue-100 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center gap-3">
                <div class="p-2 bg-gradient-to-br from-blue-400 to-blue-600 rounded-xl">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <div>
                    <div class="text-2xl font-bold text-slate-800">18</div>
                    <div class="text-sm text-slate-500">Departemen</div>
                </div>
            </div>
        </div>

        <!-- Jumlah pengunjung -->
        <div class="bg-white rounded-2xl p-4 shadow-lg border border-cyan-100 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center gap-3">
                <div class="p-2 bg-gradient-to-br from-cyan-400 to-cyan-600 rounded-xl">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                    </svg>
                </div>
                <div>
                    <div class="text-2xl font-bold text-slate-800">1,247</div>
                    <div class="text-sm text-slate-500">pengunjung</div>
                </div>
            </div>
        </div>

        <!-- Status Aktif -->
        <div class="bg-white rounded-2xl p-4 shadow-lg border border-purple-100 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center gap-3">
                <div class="p-2 bg-gradient-to-br from-purple-400 to-purple-600 rounded-xl">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <div>
                    <div class="text-2xl font-bold text-slate-800">156</div>
                    <div class="text-sm text-slate-500">Magang Aktif</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
        <!-- Recent Activities -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-2xl shadow-lg border border-slate-200 overflow-hidden">
                <div class="p-4 border-b border-slate-200">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-bold text-slate-800 flex items-center gap-2">
                            <div class="p-1.5 bg-emerald-100 rounded-lg">
                                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            Aktivitas Terbaru
                        </h3>
                        <button class="text-emerald-600 text-sm font-medium hover:text-emerald-700 transition-colors">
                            Lihat Semua →
                        </button>
                    </div>
                </div>
                <div class="p-4">
                    <div class="space-y-3">
                        <!-- Activity Item -->
                        <div class="flex items-start gap-3 p-3 rounded-xl bg-emerald-50 hover:bg-emerald-100 transition-colors group">
                            <div class="w-2 h-2 bg-emerald-500 rounded-full mt-2"></div>
                            <div class="flex-1">
                                <p class="font-medium text-slate-800 text-sm">Pendaftaran peserta magang baru</p>
                                <p class="text-xs text-slate-600 mt-1">John Doe mendaftar untuk departemen Keperawatan</p>
                                <p class="text-xs text-emerald-600 mt-1">5 menit yang lalu</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 p-3 rounded-xl bg-blue-50 hover:bg-blue-100 transition-colors group">
                            <div class="w-2 h-2 bg-blue-500 rounded-full mt-2"></div>
                            <div class="flex-1">
                                <p class="font-medium text-slate-800 text-sm">Upload dokumen laporan</p>
                                <p class="text-xs text-slate-600 mt-1">Sarah Jane mengunggah laporan mingguan</p>
                                <p class="text-xs text-blue-600 mt-1">15 menit yang lalu</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 p-3 rounded-xl bg-purple-50 hover:bg-purple-100 transition-colors group">
                            <div class="w-2 h-2 bg-purple-500 rounded-full mt-2"></div>
                            <div class="flex-1">
                                <p class="font-medium text-slate-800 text-sm">Pembaruan sistem</p>
                                <p class="text-xs text-slate-600 mt-1">System berhasil diperbarui ke versi 2.1.0</p>
                                <p class="text-xs text-purple-600 mt-1">1 jam yang lalu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="space-y-4">
            <!-- Quick Actions Panel -->
            <div class="bg-white rounded-2xl shadow-lg border border-slate-200 overflow-hidden">
                <div class="p-4 border-b border-slate-200">
                    <h3 class="text-lg font-bold text-slate-800 flex items-center gap-2">
                        <div class="p-1.5 bg-blue-100 rounded-lg">
                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        Quick Actions
                    </h3>
                </div>
                <div class="p-4">
                    <div class="space-y-2">


                        <a href="#" class="flex items-center gap-3 p-3 rounded-xl bg-gradient-to-r from-cyan-50 to-cyan-100 hover:from-cyan-100 hover:to-cyan-200 transition-all duration-300 group">
                            <div class="p-2 bg-cyan-500 rounded-lg">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-cyan-800 text-sm">Dashboard</p>
                                <p class="text-xs text-cyan-600">Menuju dashboard</p>
                            </div>
                        </a>

                        <a href="#" class="flex items-center gap-3 p-3 rounded-xl bg-gradient-to-r from-emerald-50 to-emerald-100 hover:from-emerald-100 hover:to-emerald-200 transition-all duration-300 group">
                            <div class="p-2 bg-emerald-500 rounded-lg">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-emerald-800 text-sm">Tambah Peserta</p>
                                <p class="text-xs text-emerald-600">Daftarkan peserta baru</p>
                            </div>
                        </a>

                        <a href="#" class="flex items-center gap-3 p-3 rounded-xl bg-gradient-to-r from-blue-50 to-blue-100 hover:from-blue-100 hover:to-blue-200 transition-all duration-300 group">
                            <div class="p-2 bg-blue-500 rounded-lg">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-blue-800 text-sm">Kelola Departemen</p>
                                <p class="text-xs text-blue-600">Atur departemen magang</p>
                            </div>
                        </a>

                        <a href="#" class="flex items-center gap-3 p-3 rounded-xl
                            bg-gradient-to-r from-emerald-50 to-emerald-100
                            hover:from-emerald-100 hover:to-emerald-200
                            transition-all duration-300 group">
                            <div class="p-2 bg-emerald-500 rounded-lg">
                                <!-- Ikon User Group (Heroicons Outline) -->
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a4 4 0 00-3-3.87" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 20H4v-2a4 4 0 013-3.87M15 11a4 4 0 10-8 0 4 4 0 008 0zm6 0a4 4 0 10-8 0 4 4 0 008 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-emerald-800 text-sm">Lihat Peserta</p>
                                <p class="text-xs text-emerald-600">Lihat daftar peserta</p>
                            </div>
                        </a>

                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- Recent Registrations -->
    <div class="bg-white rounded-2xl shadow-lg border border-slate-200 overflow-hidden">
        <div class="p-4 border-b border-slate-200">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-bold text-slate-800 flex items-center gap-2">
                    <div class="p-1.5 bg-indigo-100 rounded-lg">
                        <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    Pendaftaran Terbaru
                </h3>
                <button class="text-indigo-600 text-sm font-medium hover:text-indigo-700 transition-colors">
                    Lihat Semua →
                </button>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-slate-50 border-b border-slate-200">
                    <tr>
                        <th class="text-left px-4 py-3 text-xs font-semibold text-slate-600 uppercase tracking-wide">Nama</th>
                        <th class="text-left px-4 py-3 text-xs font-semibold text-slate-600 uppercase tracking-wide">Email</th>
                        <th class="text-left px-4 py-3 text-xs font-semibold text-slate-600 uppercase tracking-wide">Departemen</th>
                        <th class="text-left px-4 py-3 text-xs font-semibold text-slate-600 uppercase tracking-wide">Status</th>
                        <th class="text-left px-4 py-3 text-xs font-semibold text-slate-600 uppercase tracking-wide">Tanggal</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200">
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-4 py-3">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 bg-gradient-to-br from-emerald-400 to-emerald-600 rounded-full flex items-center justify-center">
                                    <span class="text-white font-semibold text-xs">JD</span>
                                </div>
                                <div>
                                    <p class="font-medium text-slate-800 text-sm">John Doe</p>
                                    <p class="text-xs text-slate-500">Mahasiswa</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-slate-600 text-sm">john@example.com</td>
                        <td class="px-4 py-3">
                            <span class="inline-flex px-2 py-1 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">
                                Keperawatan
                            </span>
                        </td>
                        <td class="px-4 py-3">
                            <span class="inline-flex px-2 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                Pending
                            </span>
                        </td>
                        <td class="px-4 py-3 text-slate-600 text-sm">16 Sep 2025</td>
                    </tr>
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-4 py-3">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full flex items-center justify-center">
                                    <span class="text-white font-semibold text-xs">SJ</span>
                                </div>
                                <div>
                                    <p class="font-medium text-slate-800 text-sm">Sarah Jane</p>
                                    <p class="text-xs text-slate-500">Mahasiswa</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-slate-600 text-sm">sarah@example.com</td>
                        <td class="px-4 py-3">
                            <span class="inline-flex px-2 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                Farmasi
                            </span>
                        </td>
                        <td class="px-4 py-3">
                            <span class="inline-flex px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Approved
                            </span>
                        </td>
                        <td class="px-4 py-3 text-slate-600 text-sm">15 Sep 2025</td>
                    </tr>
                    <tr class="hover:bg-slate-50 transition-colors">
                        <td class="px-4 py-3">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 bg-gradient-to-br from-purple-400 to-purple-600 rounded-full flex items-center justify-center">
                                    <span class="text-white font-semibold text-xs">MK</span>
                                </div>
                                <div>
                                    <p class="font-medium text-slate-800 text-sm">Mike Johnson</p>
                                    <p class="text-xs text-slate-500">Mahasiswa</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-slate-600 text-sm">mike@example.com</td>
                        <td class="px-4 py-3">
                            <span class="inline-flex px-2 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                Kebidanan
                            </span>
                        </td>
                        <td class="px-4 py-3">
                            <span class="inline-flex px-2 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Approved
                            </span>
                        </td>
                        <td class="px-4 py-3 text-slate-600 text-sm">14 Sep 2025</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
