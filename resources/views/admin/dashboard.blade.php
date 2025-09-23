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
                    <div class="text-2xl font-bold text-slate-800">{{ $peserta }}</div>
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
                    <div class="text-2xl font-bold text-slate-800">{{ $department }}</div>
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
                    <div class="text-2xl font-bold text-slate-800">{{ $visitor }}</div>
                    <div class="text-sm text-slate-500">pengunjung</div>
                </div>
            </div>
        </div>

        <!-- Status Aktif -->
        <div class="bg-white rounded-2xl p-4 shadow-lg border border-purple-100 hover:shadow-xl transition-all duration-300">
            <div class="flex items-center gap-3">
                <div class="p-2 bg-gradient-to-br from-purple-400 to-purple-600 rounded-xl">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div>
                    <div class="text-2xl font-bold text-slate-800">{{ $docs->where('status', 'diterima')->count() }}</div>
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
                        <a href="{{ route('admin.activity-index') }}" class="text-emerald-600 text-sm font-medium hover:text-emerald-700 transition-colors">
                            Lihat Semua →
                        </a>
                    </div>
                </div>
                <div class="p-4">
                    <div class="space-y-3">
                        <!-- Dynamic Activity Items dengan Warna Elegan -->
                        @php
                            $activityColors = [
                                [
                                    'bg' => 'bg-gradient-to-r from-violet-50 to-purple-50',
                                    'hover' => 'hover:from-violet-100 hover:to-purple-100',
                                    'dot' => 'bg-gradient-to-r from-violet-500 to-purple-500',
                                    'time' => 'text-violet-600',
                                    'icon' => '<svg class="w-4 h-4 text-violet-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path></svg>',
                                    'glow' => 'shadow-violet-200/50'
                                ],
                                [
                                    'bg' => 'bg-gradient-to-r from-rose-50 to-pink-50',
                                    'hover' => 'hover:from-rose-100 hover:to-pink-100',
                                    'dot' => 'bg-gradient-to-r from-rose-500 to-pink-500',
                                    'time' => 'text-rose-600',
                                    'icon' => '<svg class="w-4 h-4 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>',
                                    'glow' => 'shadow-rose-200/50'
                                ],
                                [
                                    'bg' => 'bg-gradient-to-r from-emerald-50 to-teal-50',
                                    'hover' => 'hover:from-emerald-100 hover:to-teal-100',
                                    'dot' => 'bg-gradient-to-r from-emerald-500 to-teal-500',
                                    'time' => 'text-emerald-600',
                                    'icon' => '<svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
                                    'glow' => 'shadow-emerald-200/50'
                                ],
                                [
                                    'bg' => 'bg-gradient-to-r from-blue-50 to-cyan-50',
                                    'hover' => 'hover:from-blue-100 hover:to-cyan-100',
                                    'dot' => 'bg-gradient-to-r from-blue-500 to-cyan-500',
                                    'time' => 'text-blue-600',
                                    'icon' => '<svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>',
                                    'glow' => 'shadow-blue-200/50'
                                ],
                                [
                                    'bg' => 'bg-gradient-to-r from-amber-50 to-orange-50',
                                    'hover' => 'hover:from-amber-100 hover:to-orange-100',
                                    'dot' => 'bg-gradient-to-r from-amber-500 to-orange-500',
                                    'time' => 'text-amber-600',
                                    'icon' => '<svg class="w-4 h-4 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>',
                                    'glow' => 'shadow-amber-200/50'
                                ],
                                [
                                    'bg' => 'bg-gradient-to-r from-indigo-50 to-purple-50',
                                    'hover' => 'hover:from-indigo-100 hover:to-purple-100',
                                    'dot' => 'bg-gradient-to-r from-indigo-500 to-purple-500',
                                    'time' => 'text-indigo-600',
                                    'icon' => '<svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>',
                                    'glow' => 'shadow-indigo-200/50'
                                ]
                            ];
                        @endphp

                        @forelse ($activities as $index => $activity)
                            @php
                                $colorScheme = $activityColors[$index % count($activityColors)];
                            @endphp
                            <div class="relative overflow-hidden group">
                                <!-- Main Activity Card -->
                                <div class="flex items-start gap-4 p-4 rounded-2xl {{ $colorScheme['bg'] }} {{ $colorScheme['hover'] }} transition-all duration-500 border border-white/60 backdrop-blur-sm shadow-lg {{ $colorScheme['glow'] }} hover:shadow-xl group-hover:scale-[1.02] transform">
                                    <!-- Elegant Icon Container -->
                                    <div class="relative flex-shrink-0">
                                        <div class="w-12 h-12 rounded-2xl {{ $colorScheme['dot'] }} shadow-lg flex items-center justify-center backdrop-blur-sm border border-white/30 group-hover:scale-110 transition-transform duration-300">
                                            {!! $colorScheme['icon'] !!}
                                        </div>
                                        <!-- Animated Ring -->
                                        <div class="absolute inset-0 w-12 h-12 rounded-2xl {{ $colorScheme['dot'] }} opacity-20 animate-ping"></div>
                                    </div>

                                    <!-- Content Section -->
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-start justify-between gap-4">
                                            <div class="flex-1">
                                                <!-- Activity Title -->
                                                <h4 class="font-bold text-slate-800 text-base leading-tight mb-1.5 group-hover:text-slate-900 transition-colors">
                                                    {{ $activity->activity }}
                                                </h4>

                                                <!-- Activity Description -->
                                                <p class="text-slate-600 text-sm mb-3 leading-relaxed group-hover:text-slate-700 transition-colors">
                                                    {{ $activity->description }}
                                                </p>

                                                <!-- User Badge -->
                                                <div class="flex items-center gap-2">
                                                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-xl bg-white/80 backdrop-blur-sm text-slate-700 font-medium text-xs shadow-sm border border-white/60 group-hover:bg-white transition-colors">
                                                        <div class="w-5 h-5 rounded-full {{ $colorScheme['dot'] }} flex items-center justify-center shadow-sm">
                                                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                                            </svg>
                                                        </div>
                                                        <span>Dilakukan oleh: {{ $activity->intern->fullname ?? 'Guest (' . $activity->visitor->ip . ')' }}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Elegant Time Badge -->
                                            <div class="flex-shrink-0">
                                                <div class="px-4 py-2 rounded-2xl bg-white/90 backdrop-blur-md border border-white/70 shadow-lg group-hover:shadow-xl transition-shadow">
                                                    <div class="flex items-center gap-2">
                                                        <svg class="w-3 h-3 {{ $colorScheme['time'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                        </svg>
                                                        <p class="text-xs font-semibold {{ $colorScheme['time'] }}">
                                                            {{ $activity->created_at->diffForHumans() }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Subtle Glow Effect on Hover -->
                                <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-all duration-500 pointer-events-none">
                                    <div class="absolute inset-0 rounded-2xl {{ $colorScheme['dot'] }} opacity-[0.08] blur-xl transform scale-110"></div>
                                </div>

                                <!-- Decorative Corner Elements -->
                                <div class="absolute top-2 right-2 w-2 h-2 {{ $colorScheme['dot'] }} rounded-full opacity-30 group-hover:opacity-60 transition-opacity"></div>
                                <div class="absolute bottom-2 left-12 w-1 h-1 {{ $colorScheme['dot'] }} rounded-full opacity-20 group-hover:opacity-40 transition-opacity"></div>
                            </div>
                        @empty
                            <!-- Empty State dengan Design Elegan -->
                            <div class="flex flex-col items-center justify-center py-12 px-6">
                                <div class="w-16 h-16 rounded-3xl bg-gradient-to-br from-slate-100 to-slate-200 flex items-center justify-center mb-4 shadow-lg">
                                    <svg class="w-8 h-8 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-lg font-semibold text-slate-700 mb-2">Belum Ada Aktivitas</h3>
                                <p class="text-slate-500 text-center text-sm leading-relaxed max-w-sm">
                                    Aktivitas terbaru akan ditampilkan di sini ketika ada kegiatan baru di sistem.
                                </p>
                            </div>
                        @endforelse
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


                        <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 p-3 rounded-xl bg-gradient-to-r from-cyan-50 to-cyan-100 hover:from-cyan-100 hover:to-cyan-200 transition-all duration-300 group">
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

                        <a href="{{ route('admin.add-intern') }}" class="flex items-center gap-3 p-3 rounded-xl bg-gradient-to-r from-emerald-50 to-emerald-100 hover:from-emerald-100 hover:to-emerald-200 transition-all duration-300 group">
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

                        <a href="{{ route('admin.department') }}" class="flex items-center gap-3 p-3 rounded-xl bg-gradient-to-r from-blue-50 to-blue-100 hover:from-blue-100 hover:to-blue-200 transition-all duration-300 group">
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

                        <a href="{{ route('admin.intern') }}" class="flex items-center gap-3 p-3 rounded-xl
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
                        <a href="{{ route('admin.profile') }}" class="flex items-center gap-3 p-3 rounded-xl bg-gradient-to-r from-purple-50 to-purple-100 hover:from-purple-100 hover:to-purple-200 transition-all duration-300 group">
                            <div class="p-2 bg-purple-500 rounded-lg">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold text-purple-800 text-sm">Profil Admin</p>
                                <p class="text-xs text-purple-600">Kelola profil admin</p>
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
                <a href="{{ route('admin.intern') }}" class="text-indigo-600 text-sm font-medium hover:text-indigo-700 transition-colors">
                    Lihat Semua →
                </a>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-slate-50 border-b border-slate-200">
                    <tr>
                        <th class="text-left px-4 py-3 text-xs font-semibold text-slate-600 uppercase tracking-wide">Nama</th>
                        <th class="text-left px-4 py-3 text-xs font-semibold text-slate-600 uppercase tracking-wide">Universitas</th>
                        <th class="text-left px-4 py-3 text-xs font-semibold text-slate-600 uppercase tracking-wide">Departemen</th>
                        <th class="text-left px-4 py-3 text-xs font-semibold text-slate-600 uppercase tracking-wide">Status</th>
                        <th class="text-left px-4 py-3 text-xs font-semibold text-slate-600 uppercase tracking-wide">Tanggal</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200">

                    @foreach ($interns as $intern)
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-2">
                                    <div class="w-8 h-8 bg-gradient-to-br from-emerald-400 to-emerald-600 rounded-full flex items-center justify-center">
                                        <span class="text-white font-semibold text-xs">{{ $intern->intern->initials }}</span>
                                    </div>
                                    <div>
                                        <p class="font-medium text-slate-800 text-sm">{{ $intern->intern->fullname }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-slate-600 text-sm">{{ $intern->intern->university }}</td>
                            <td class="px-4 py-3">
                                <span class="inline-flex px-2 py-1 rounded-full text-xs font-medium  text-black">
                                    {{ $intern->department->name }}
                                </span>
                            </td>
                            <td class="px-4 py-3">
                                 @php
                                    $status = $intern->status;
                                    $statusClasses = [
                                        'pending' => 'bg-yellow-100 text-yellow-700',
                                        'ditolak' => 'bg-red-100 text-red-700',
                                        'diterima' => 'bg-green-100 text-green-700',
                                        'selesai' => 'bg-purple-100 text-purple-700',
                                    ];
                                    $class = $statusClasses[$status] ?? 'bg-gray-100 text-gray-700';
                                @endphp
                                <span class="inline-flex px-2 py-1 rounded-full text-xs font-medium {{ $class }}">
                                    {{ ucfirst($status) }}
                                </span>
                            </td>
                            <td class="px-4 py-3 text-slate-600 text-sm">{{ $intern->created_at->format('d M Y') }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
