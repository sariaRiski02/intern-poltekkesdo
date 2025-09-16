<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>Detail Peserta Magang</title>
  </head>
  <body class="bg-gray-50 min-h-screen">

    <div class="p-6 space-y-8 max-w-6xl mx-auto">
      <!-- Header -->
      <div class="flex items-center justify-between">
        <div>
          <h1 class="text-3xl font-bold text-gray-900">Detail Peserta Magang</h1>
          <p class="text-gray-600 mt-1">Informasi lengkap calon peserta magang</p>
        </div>
        <div>
          <span class="px-4 py-2 rounded-full text-sm font-semibold bg-yellow-100 text-yellow-700">
            Pending
          </span>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Informasi Peserta -->
        <div class="lg:col-span-2 bg-white p-6 rounded-2xl shadow border border-gray-100 space-y-6">
          <h2 class="text-xl font-semibold text-gray-800 border-b pb-2">Data Pribadi</h2>
          <div class="grid grid-cols-2 gap-4 text-sm">
            <p><span class="font-medium text-gray-600">Nama Lengkap:</span> John Doe</p>
            <p><span class="font-medium text-gray-600">Universitas:</span> Universitas Indonesia</p>
            <p><span class="font-medium text-gray-600">Fakultas:</span> Ilmu Kesehatan</p>
            <p><span class="font-medium text-gray-600">Jurusan:</span> Keperawatan</p>
            <p><span class="font-medium text-gray-600">Alamat:</span> Jl. Sudirman No. 123, Jakarta</p>
            <p><span class="font-medium text-gray-600">No HP:</span> 08123456789</p>
          </div>

          <h2 class="text-xl font-semibold text-gray-800 border-b pb-2 mt-6">Periode Magang</h2>
          <div class="grid grid-cols-2 gap-4 text-sm">
            <p><span class="font-medium text-gray-600">Tanggal Mulai:</span> 01-10-2025</p>
            <p><span class="font-medium text-gray-600">Tanggal Selesai:</span> 31-12-2025</p>
            <p><span class="font-medium text-gray-600">Tanggal Pengajuan:</span> 15-09-2025</p>
          </div>
        </div>

        <!-- Dokumen -->
        <div class="bg-white p-6 rounded-2xl shadow border border-gray-100 space-y-4">
          <h2 class="text-xl font-semibold text-gray-800 border-b pb-2">Dokumen</h2>
          <ul class="space-y-2 text-sm">
            <li>
              <span class="font-medium text-gray-600">Application Letter:</span>
              <a href="#" class="text-blue-600 hover:underline">Lihat</a>
            </li>
            <li>
              <span class="font-medium text-gray-600">CV:</span>
              <a href="#" class="text-blue-600 hover:underline">Lihat</a>
            </li>
            <li>
              <span class="font-medium text-gray-600">Transkrip Nilai:</span>
              <a href="#" class="text-blue-600 hover:underline">Lihat</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Tombol Aksi -->
      <div class="flex space-x-4">
        <button class="px-5 py-2 bg-yellow-100 text-yellow-700 font-medium rounded-xl hover:bg-yellow-200 transition">Pending</button>
        <button class="px-5 py-2 bg-green-600 text-white font-medium rounded-xl hover:bg-green-700 transition">Terima</button>
        <button class="px-5 py-2 bg-red-600 text-white font-medium rounded-xl hover:bg-red-700 transition">Tolak</button>
        <button class="px-5 py-2 bg-blue-600 text-white font-medium rounded-xl hover:bg-blue-700 transition">Selesai</button>
      </div>
    </div>

  </body>
</html>
