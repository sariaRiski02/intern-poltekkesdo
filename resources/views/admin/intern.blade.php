@extends('admin.layout.app')

@section('title', 'Daftar Peserta')

@section('content')
<div class="p-6 space-y-8">
    <!-- Header Section -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Peserta Magang</h1>
            <p class="text-gray-600 mt-1">Kelola status dan informasi peserta magang</p>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-2xl shadow border border-gray-100">
            <p class="text-sm font-medium text-gray-500">Total Peserta</p>
            <p class="text-3xl font-bold text-gray-900">124</p>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow border border-gray-100">
            <p class="text-sm font-medium text-gray-500">Pending</p>
            <p class="text-3xl font-bold text-yellow-600">18</p>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow border border-gray-100">
            <p class="text-sm font-medium text-gray-500">Diterima</p>
            <p class="text-3xl font-bold text-green-600">89</p>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow border border-gray-100">
            <p class="text-sm font-medium text-gray-500">Selesai</p>
            <p class="text-3xl font-bold text-blue-600">17</p>
        </div>
    </div>

    <!-- Table -->
    <div class="bg-white rounded-2xl shadow border border-gray-100 overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-100 bg-gray-50">
            <h3 class="text-lg font-semibold text-gray-900">Daftar Peserta</h3>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                    <tr>
                        <th class="px-6 py-3 text-left">No</th>
                        <th class="px-6 py-3 text-left">Peserta</th>
                        <th class="px-6 py-3 text-left">Universitas</th>
                        <th class="px-6 py-3 text-left">Departemen</th>
                        <th class="px-6 py-3 text-left">Status</th>
                        <th class="px-6 py-3 text-left">Detail</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4 font-medium text-gray-900">
                            John Doe<br>
                            <span class="text-xs text-gray-500">john.doe@email.com</span>
                        </td>
                        <td class="px-6 py-4">Universitas Indonesia</td>
                        <td class="px-6 py-4">Keperawatan</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-xs rounded-full bg-yellow-100 text-yellow-700 font-medium">Pending</span>
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('detail-intern') }}"
                               class="inline-flex items-center px-3 py-2 text-sm font-medium text-blue-600 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                                Lihat
                            </a>
                        </td>
                    </tr>

                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">2</td>
                        <td class="px-6 py-4 font-medium text-gray-900">
                            Sarah Jane<br>
                            <span class="text-xs text-gray-500">sarah.jane@email.com</span>
                        </td>
                        <td class="px-6 py-4">Universitas Gadjah Mada</td>
                        <td class="px-6 py-4">Farmasi</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700 font-medium">Diterima</span>
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ url('/peserta/2') }}"
                               class="inline-flex items-center px-3 py-2 text-sm font-medium text-blue-600 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                                Lihat
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
