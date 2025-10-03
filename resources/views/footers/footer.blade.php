<!-- Footer -->
    <footer class="bg-slate-900 text-white py-12">
      <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
          <!-- Logo & Description -->
          <div class="md:col-span-2">
            <div class="flex items-center gap-3 mb-4">
              <img src="/images/logo.png" alt="Logo" class="h-10 w-10 object-contain" />
              <div>
                <h3 class="font-bold text-xl">Poltekkes Manado</h3>
                <p class="text-sm text-slate-400">Kementerian Kesehatan RI</p>
              </div>
            </div>
            <p class="text-slate-300 max-w-md">Program magang terbaik di bidang kesehatan dengan fasilitas modern dan bimbingan profesional.</p>
          </div>

          <!-- Quick Links -->
          <div>
            <h4 class="font-semibold text-lg mb-4">Quick Links</h4>
            <ul class="space-y-2 text-slate-300">
              <li><a href="{{route('home')}}" class="hover:text-emerald-400 transition-colors">Beranda</a></li>
              @auth
              <li><a href="{{ route('announcement') }}" class="hover:text-emerald-400 transition-colors">Pengumuman</a></li>

              @endauth
              <li><a href="{{ route('about') }}" class="hover:text-emerald-400 transition-colors">Tentang</a></li>
              <li><a href="{{ route('contact') }}" class="hover:text-emerald-400 transition-colors">Kontak</a></li>
            </ul>
          </div>

          <!-- Contact Info -->
          <div>
            <h4 class="font-semibold text-lg mb-4">Kontak</h4>
            <ul class="space-y-2 text-slate-300">
              <li>info@poltekkes-manado.ac.id</li>
              <li>@poltekkesmanado</li>
              <li>+62 431 123456</li>
            </ul>
          </div>
        </div>

        <div class="border-t border-slate-700 pt-8 text-center">
           <p class="text-slate-400">&copy; Created by Internship Students of University of Sam Ratulangi Manado</p>
        </div>
      </div>
    </footer>
