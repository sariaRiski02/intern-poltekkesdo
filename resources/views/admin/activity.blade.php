<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Activity Log</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md">
            <!-- Header with Back Button -->
            <div class="px-6 py-4 border-b border-gray-200">
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between space-y-4 sm:space-y-0">
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center px-4 py-2 bg-gray-600 text-white text-sm font-medium rounded-lg hover:bg-gray-700 transition duration-200 ease-in-out transform hover:scale-105 shadow-md">
                            <i class="fas fa-arrow-left mr-2"></i>
                            Kembali
                        </a>
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-history text-blue-600"></i>
                            <h1 class="text-2xl font-bold text-gray-900">Activity Log</h1>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3">
                        <!-- Filter dan Search bisa ditambah di sini -->
                        <div class="text-sm text-gray-500">
                            Total: {{ $activities->total() ?? 0 }} aktivitas
                        </div>
                        <button onclick="refreshPage()" class="inline-flex items-center px-3 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition duration-200 ease-in-out">
                            <i class="fas fa-sync-alt mr-1" id="refresh-icon"></i>
                            Refresh
                        </button>
                    </div>
                </div>
            </div>

            <!-- Loading Indicator -->
            <div id="loading" class="hidden px-6 py-8">
                <div class="flex items-center justify-center">
                    <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-blue-600"></div>
                    <span class="ml-2 text-gray-600">Memuat data...</span>
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto" id="table-container">
                <table class="w-full table-auto">
                    <thead class="bg-gradient-to-r from-gray-50 to-gray-100">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider border-b border-gray-200">
                                <i class="fas fa-hashtag mr-1"></i>No
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider border-b border-gray-200">
                                <i class="fas fa-clock mr-1"></i>Waktu
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider border-b border-gray-200">
                                <i class="fas fa-user mr-1"></i>User
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider border-b border-gray-200">
                                <i class="fas fa-play mr-1"></i>Action
                            </th>
                            <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider border-b border-gray-200">
                                <i class="fas fa-info-circle mr-1"></i>Deskripsi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-100">
                        @forelse ($activities as $activity)
                            <tr class="hover:bg-blue-50 transition duration-150 ease-in-out group">
                                <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                    <span class="bg-gray-100 group-hover:bg-blue-100 px-2 py-1 rounded-full text-xs font-semibold">
                                        {{ ($activities->currentPage() - 1) * $activities->perPage() + $loop->iteration }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600">
                                    <div class="flex flex-col">
                                        <span class="font-medium">{{ $activity->created_at->diffForHumans() }}</span>
                                        <span class="text-xs text-gray-400">{{ $activity->created_at->format('d M Y, H:i:s') }}</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-8 w-8">
                                            <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center">
                                                <i class="fas fa-user text-blue-600 text-xs"></i>
                                            </div>
                                        </div>
                                        <div class="ml-3">
                                            <span class="font-medium text-gray-900">{{ $activity->intern->fullname ?? request()->ip() }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm">
                                    @php
                                        $actionColors = [
                                            'create' => 'bg-green-100 text-green-800 border-green-200',
                                            'upload' => 'bg-purple-100 text-purple-800 border-purple-200',
                                            'update' => 'bg-yellow-100 text-yellow-800 border-yellow-200',
                                            'delete' => 'bg-red-100 text-red-800 border-red-200',
                                            'login' => 'bg-blue-100 text-blue-800 border-blue-200',
                                            'logout' => 'bg-gray-100 text-gray-800 border-gray-200',
                                        ];
                                        $colorClass = $actionColors[strtolower($activity->activity)] ?? 'bg-blue-100 text-blue-800 border-blue-200';
                                    @endphp
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold border {{ $colorClass }}">
                                        {{ ucfirst($activity->activity) }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-600">
                                    <div class="max-w-xs">
                                        <p class="truncate" title="{{ $activity->description }}">{{ $activity->description }}</p>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-12 text-center">
                                    <div class="flex flex-col items-center justify-center">
                                        <i class="fas fa-history text-gray-300 text-6xl mb-4"></i>
                                        <h3 class="text-lg font-medium text-gray-900 mb-2">Tidak ada aktivitas</h3>
                                        <p class="text-gray-500">Belum ada aktivitas yang tercatat di sistem.</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            @if($activities->hasPages())
            <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
                <div class="flex items-center justify-between">
                    <div class="text-sm text-gray-700">
                        Menampilkan {{ $activities->firstItem() ?? 0 }} sampai {{ $activities->lastItem() ?? 0 }} dari {{ $activities->total() }} hasil
                    </div>
                    <div>
                        {{ $activities->links('pagination::tailwind') }}
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>

    <!-- SweetAlert untuk Error Handling -->
    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session('error') }}',
                confirmButtonColor: '#ef4444',
                background: '#ffffff',
                backdrop: 'rgba(0,0,0,0.4)'
            });
        </script>
    @endif

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                confirmButtonColor: '#10b981',
                timer: 3000,
                timerProgressBar: true
            });
        </script>
    @endif

    <!-- JavaScript untuk Interaktivitas -->
    <script>
        // Function untuk refresh halaman
        function refreshPage() {
            const refreshIcon = document.getElementById('refresh-icon');
            const tableContainer = document.getElementById('table-container');
            const loading = document.getElementById('loading');

            // Animasi loading
            refreshIcon.classList.add('animate-spin');
            tableContainer.classList.add('hidden');
            loading.classList.remove('hidden');

            // Simulate loading time
            setTimeout(() => {
                location.reload();
            }, 1000);
        }

        // Auto refresh setiap 5 menit
        setInterval(() => {
            if (document.visibilityState === 'visible') {
                location.reload();
            }
        }, 300000); // 5 menit

        // Handle visibility change untuk pause/resume auto refresh
        document.addEventListener('visibilitychange', function() {
            if (document.visibilityState === 'visible') {
                console.log('Tab aktif, auto refresh berjalan');
            } else {
                console.log('Tab tidak aktif, auto refresh dihentikan sementara');
            }
        });

        // Smooth scroll untuk pagination
        document.addEventListener('DOMContentLoaded', function() {
            const paginationLinks = document.querySelectorAll('.pagination a');
            paginationLinks.forEach(link => {
                link.addEventListener('click', function() {
                    const tableContainer = document.getElementById('table-container');
                    const loading = document.getElementById('loading');

                    tableContainer.classList.add('hidden');
                    loading.classList.remove('hidden');
                });
            });
        });

        // Tooltip untuk description yang terpotong
        document.addEventListener('DOMContentLoaded', function() {
            const truncatedElements = document.querySelectorAll('.truncate');
            truncatedElements.forEach(element => {
                if (element.scrollWidth > element.clientWidth) {
                    element.classList.add('cursor-help');
                }
            });
        });
    </script>

    <!-- Print Styles -->
    <style>
        @media print {
            .no-print {
                display: none !important;
            }

            body {
                background-color: white !important;
            }

            .shadow-md {
                box-shadow: none !important;
            }

            .bg-gradient-to-r {
                background: #f9fafb !important;
            }
        }

        /* Custom scrollbar */
        .overflow-x-auto::-webkit-scrollbar {
            height: 6px;
        }

        .overflow-x-auto::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        .overflow-x-auto::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 3px;
        }

        .overflow-x-auto::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        /* Loading animation */
        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: .5;
            }
        }

        .animate-pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        /* Hover effects */
        .group:hover .group-hover\:bg-blue-100 {
            background-color: #dbeafe;
        }
    </style>
</body>
</html>
