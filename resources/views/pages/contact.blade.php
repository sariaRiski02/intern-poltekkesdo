@extends('layouts.app')

@section('content')
<!-- Contact Section -->
<section id="kontak" class="py-20 bg-gradient-to-br from-emerald-50 via-blue-50 to-white relative overflow-hidden">
  <!-- Background Pattern -->
  <div class="absolute inset-0 opacity-5">
    <div class="absolute top-20 left-10 w-32 h-32 bg-emerald-300 rounded-full blur-3xl"></div>
    <div class="absolute top-40 right-20 w-48 h-48 bg-blue-300 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 left-1/3 w-40 h-40 bg-emerald-200 rounded-full blur-3xl"></div>
  </div>

  <div class="container mx-auto px-6 relative z-10">
    <div class="text-center mb-16">
      <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-emerald-600 to-blue-600 bg-clip-text text-transparent pb-4">
        Hubungi Kami
      </h2>
      <div class="w-24 h-1 bg-gradient-to-r from-emerald-500 to-blue-500 mx-auto rounded-full mb-6"></div>
      <p class="text-lg text-slate-600 max-w-2xl mx-auto">
        Terhubung dengan kami melalui berbagai platform media sosial dan dapatkan informasi terbaru tentang program magang.
      </p>
    </div>

    <div class="max-w-6xl mx-auto">
      <!-- Contact Info Cards -->
      <div class="grid md:grid-cols-2 gap-8 mb-12">
        <!-- Email -->
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg border border-emerald-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 text-center">
          <div class="w-16 h-16 bg-gradient-to-r from-red-500 to-red-600 rounded-xl flex items-center justify-center mx-auto mb-6">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-slate-800 mb-3">Email</h3>
          <p class="text-slate-600 mb-4">Kirim email untuk informasi resmi</p>
          <a href="mailto:info@poltekkes-manado.ac.id" class="text-red-600 hover:text-red-700 font-semibold transition-colors">
            info@poltekkes-manado.ac.id
          </a>
        </div>

        <!-- Phone -->
        <!-- <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg border border-blue-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 text-center">
          <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-green-600 rounded-xl flex items-center justify-center mx-auto mb-6">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-slate-800 mb-3">Telepon</h3>
          <p class="text-slate-600 mb-4">Hubungi kami langsung</p>
          <a href="tel:+62431123456" class="text-green-600 hover:text-green-700 font-semibold transition-colors">
            +62 431 123 456
          </a>
        </div> -->

        <!-- Address -->
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg border border-emerald-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 text-center">
          <div class="w-16 h-16 bg-gradient-to-r from-emerald-500 to-blue-500 rounded-xl flex items-center justify-center mx-auto mb-6">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
          </div>
          <h3 class="text-xl font-bold text-slate-800 mb-3">Alamat</h3>
          <p class="text-slate-600 mb-4">Kunjungi kampus kami</p>
          <p class="text-emerald-600 font-semibold">
            Jl. R.W. Monginsidi, Malalayang,<br>
            Manado, Sulawesi Utara
          </p>
        </div>
      </div>

      <!-- Social Media Section -->
      <div class="text-center mb-12">
        <h3 class="text-3xl font-bold text-slate-800 mb-4">Ikuti Media Sosial Kami</h3>
        <p class="text-lg text-slate-600 mb-8">Dapatkan update terbaru dan informasi menarik lainnya</p>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-6 max-w-4xl mx-auto">
          <!-- Instagram -->
          <a href="https://www.instagram.com/polkesmanado/" target="_blank" class="group bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-pink-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 hover:border-pink-300">
            <div class="w-14 h-14 bg-gradient-to-r from-pink-500 to-purple-600 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
              <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 6.618 5.367 11.986 11.988 11.986s11.987-5.368 11.987-11.986C24.004 5.367 18.635.001 12.017.001zM8.449 16.988c-1.297 0-2.448-.49-3.33-1.295C4.198 14.827 3.762 13.756 3.762 12.017s.436-2.81 1.357-3.676c.882-.805 2.033-1.295 3.33-1.295s2.448.49 3.33 1.295c.921.866 1.357 1.937 1.357 3.676s-.436 2.81-1.357 3.676c-.882.805-2.033 1.295-3.33 1.295zm7.117 0c-1.297 0-2.448-.49-3.33-1.295-.921-.866-1.357-1.937-1.357-3.676s.436-2.81 1.357-3.676c.882-.805 2.033-1.295 3.33-1.295s2.448.49 3.33 1.295c.921.866 1.357 1.937 1.357 3.676s-.436 2.81-1.357 3.676c-.882.805-2.033 1.295-3.33 1.295z"/>
              </svg>
            </div>
            <h4 class="font-bold text-slate-800 text-sm">Instagram</h4>
            <p class="text-xs text-slate-600 mt-1 flex justify-center items-center">@poltekkesmanado</p>
          </a>

          <!-- Facebook -->
          <a href="https://facebook.com/poltekkesmanado" target="_blank" class="group bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-blue-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 hover:border-blue-300">
            <div class="w-14 h-14 bg-gradient-to-r from-blue-600 to-blue-700 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
              <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
              </svg>
            </div>
            <h4 class="font-bold text-slate-800 text-sm">Facebook</h4>
            <p class="text-xs text-slate-600 mt-1">Poltekkes Manado</p>
          </a>

          <!-- YouTube -->
          <a href="https://www.youtube.com/@polkesdo" target="_blank" class="group bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-red-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 hover:border-red-300">
            <div class="w-14 h-14 bg-gradient-to-r from-red-600 to-red-700 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
              <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
              </svg>
            </div>
            <h4 class="font-bold text-slate-800 text-sm">YouTube</h4>
            <p class="text-xs text-slate-600 mt-1">Poltekkes Manado</p>
          </a>

          <!-- Twitter -->
          <a href="https://twitter.com/poltekkesmanado" target="_blank" class="group bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-sky-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 hover:border-sky-300">
            <div class="w-14 h-14 bg-gradient-to-r from-sky-500 to-sky-600 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
              <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
              </svg>
            </div>
            <h4 class="font-bold text-slate-800 text-sm">Twitter</h4>
            <p class="text-xs text-slate-600 mt-1 flex justify-center items-center">@poltekkesmanado</p>
          </a>

          <!-- TikTok -->
          <a href="https://tiktok.com/@poltekkesmanado" target="_blank" class="group bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-slate-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 hover:border-slate-300">
            <div class="w-14 h-14 bg-gradient-to-r from-slate-800 to-slate-900 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
              <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
              </svg>
            </div>
            <h4 class="font-bold text-slate-800 text-sm">TikTok</h4>
            <p class="text-xs text-slate-600 mt-1 flex justify-center items-center">@poltekkesmanado</p>
          </a>

          <!-- WhatsApp -->
          <!-- <a href="https://wa.me/6243112345678" target="_blank" class="group bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-lg border border-green-100 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 hover:border-green-300">
            <div class="w-14 h-14 bg-gradient-to-r from-green-500 to-green-600 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
              <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.520-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
              </svg>
            </div>
            <h4 class="font-bold text-slate-800 text-sm">WhatsApp</h4>
            <p class="text-xs text-slate-600 mt-1">Chat Langsung</p>
          </a> -->
        </div>
      </div>


    </div>
  </div>
</section>
@endsection
