@extends('layouts.app')

@section('content')
<!-- Login Section -->
<section class="min-h-screen bg-gradient-to-br from-emerald-50 via-blue-50 to-white relative overflow-hidden flex items-center justify-center py-12">
  <!-- Background Pattern -->
  <div class="absolute inset-0 opacity-5">
    <div class="absolute top-20 left-10 w-32 h-32 bg-emerald-300 rounded-full blur-3xl"></div>
    <div class="absolute top-40 right-20 w-48 h-48 bg-blue-300 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 left-1/3 w-40 h-40 bg-emerald-200 rounded-full blur-3xl"></div>
  </div>

  <div class="container mx-auto px-6 relative z-10">
    <div class="max-w-md mx-auto">
      <!-- Header -->
      <div class="text-center mb-8">
        <div class="flex justify-center mb-6">
          <div class="relative">
            <img src="/images/logo.png" alt="Logo Kemenkes" class="h-16 w-16 object-contain" />
            <div class="absolute -inset-1 bg-gradient-to-r from-emerald-400 to-blue-400 rounded-full blur opacity-25"></div>
          </div>
        </div>
        <h1 class="text-3xl font-bold bg-gradient-to-r from-emerald-600 to-blue-600 bg-clip-text text-transparent mb-2">
          Masuk ke Akun
        </h1>
        <p class="text-slate-600">Program Magang Poltekkes Manado</p>
      </div>

      <!-- Login Form -->
      <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-8 border border-emerald-100">
        <!-- Role Selection -->
        <div class="mb-6">
          <p class="text-center text-sm font-semibold text-slate-700 mb-4">Masuk sebagai:</p>
          <div class="flex gap-2">
            <button
              type="button"
              id="internBtn"
              class="flex-1 py-3 px-4 text-sm font-medium rounded-xl border-2 transition-all duration-300 role-btn active bg-gradient-to-r from-emerald-500 to-blue-500 text-white border-transparent shadow-lg hover:shadow-xl"
              onclick="selectRole('intern')"
            >
              <div class="flex items-center justify-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                </svg>
                Peserta Magang
              </div>
            </button>
            <button
              type="button"
              id="adminBtn"
              class="flex-1 py-3 px-4 text-sm font-medium rounded-xl border-2 transition-all duration-300 role-btn bg-white/50 text-slate-600 border-slate-200 hover:border-emerald-300 hover:bg-emerald-50"
              onclick="selectRole('admin')"
            >
              <div class="flex items-center justify-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
                Administrator
              </div>
            </button>
          </div>
        </div>
        <form method="POST" action="{{ route('login') }}" id="loginForm">
          @csrf

          <!-- Hidden Role Field -->
          <input type="hidden" id="roleField" name="role" value="intern">

          <!-- Email Field -->
          <div class="mb-6">
            <label for="email" class="block text-sm font-semibold text-slate-700 mb-2">
              Email
            </label>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
              </div>
              <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                class="w-full pl-10 pr-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors bg-white/50 backdrop-blur-sm @error('email') border-red-500 @enderror"
                placeholder="contoh@email.com"
                required
              >
            </div>
            @error('email')
              <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
          </div>

          <!-- Password Field -->
          <div class="mb-6">
            <label for="password" class="block text-sm font-semibold text-slate-700 mb-2">
              Password
            </label>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                </svg>
              </div>
              <input
                type="password"
                id="password"
                name="password"
                class="w-full pl-10 pr-12 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors bg-white/50 backdrop-blur-sm @error('password') border-red-500 @enderror"
                placeholder="Masukkan password"
                required
              >
              <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                <button type="button" id="togglePassword" class="text-slate-400 hover:text-slate-600 transition-colors">
                  <svg id="eyeIcon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                  </svg>
                  <svg id="eyeSlashIcon" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21"></path>
                  </svg>
                </button>
              </div>
            </div>
            @error('password')
              <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
          </div>

          <!-- Remember Me & Forgot Password -->
          <div class="flex items-center justify-between mb-6">
            <div class="flex items-center">
              <input
                type="checkbox"
                id="remember"
                name="remember"
                class="w-4 h-4 text-emerald-600 bg-white border-slate-300 rounded focus:ring-emerald-500 focus:ring-2"
                {{ old('remember') ? 'checked' : '' }}
              >
              <label for="remember" class="ml-2 text-sm text-slate-600">
                Ingat saya
              </label>
            </div>
            <a href="#" class="text-sm text-emerald-600 hover:text-emerald-500 transition-colors font-medium">
              Lupa password?
            </a>
          </div>

          <!-- Login Button -->
          <button
            type="submit"
            class="w-full bg-gradient-to-r from-emerald-500 to-blue-500 hover:from-emerald-600 hover:to-blue-600 text-white font-bold py-3 px-4 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 flex items-center justify-center gap-2"
          >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
            </svg>
            Masuk
          </button>

          <!-- Divider -->
          <div class="relative my-6">
            <div class="absolute inset-0 flex items-center">
              <div class="w-full border-t border-slate-200"></div>
            </div>
            <div class="relative flex justify-center text-sm">
              <span class="px-4 bg-white text-slate-500">Atau</span>
            </div>
          </div>

          <!-- Register Link -->
          <div class="text-center">
            <p class="text-slate-600">
              Belum punya akun?
              <a href="{{ route('register') }}" class="text-emerald-600 hover:text-emerald-500 font-semibold transition-colors">
                Daftar sekarang
              </a>
            </p>
          </div>
        </form>
      </div>

      <!-- Additional Info -->
      <div class="text-center mt-6">
        <p class="text-sm text-slate-500">
          Dengan masuk, Anda menyetujui
          <a href="#" class="text-emerald-600 hover:text-emerald-500 transition-colors">Syarat & Ketentuan</a>
          dan
          <a href="#" class="text-emerald-600 hover:text-emerald-500 transition-colors">Kebijakan Privasi</a>
        </p>
      </div>
    </div>
  </div>
</section>

<script>
  // Toggle password visibility
  document.getElementById('togglePassword').addEventListener('click', function() {
    const passwordField = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');
    const eyeSlashIcon = document.getElementById('eyeSlashIcon');

    if (passwordField.type === 'password') {
      passwordField.type = 'text';
      eyeIcon.classList.add('hidden');
      eyeSlashIcon.classList.remove('hidden');
    } else {
      passwordField.type = 'password';
      eyeIcon.classList.remove('hidden');
      eyeSlashIcon.classList.add('hidden');
    }
  });

  // Role selection functionality
  function selectRole(role) {
    // Update hidden field
    document.getElementById('roleField').value = role;

    // Update button styles
    const internBtn = document.getElementById('internBtn');
    const adminBtn = document.getElementById('adminBtn');

    // Reset all buttons
    internBtn.classList.remove('active', 'bg-gradient-to-r', 'from-emerald-500', 'to-blue-500', 'text-white', 'border-transparent', 'shadow-lg');
    internBtn.classList.add('bg-white/50', 'text-slate-600', 'border-slate-200', 'hover:border-emerald-300', 'hover:bg-emerald-50');

    adminBtn.classList.remove('active', 'bg-gradient-to-r', 'from-emerald-500', 'to-blue-500', 'text-white', 'border-transparent', 'shadow-lg');
    adminBtn.classList.add('bg-white/50', 'text-slate-600', 'border-slate-200', 'hover:border-emerald-300', 'hover:bg-emerald-50');

    // Activate selected button
    if (role === 'intern') {
      internBtn.classList.remove('bg-white/50', 'text-slate-600', 'border-slate-200', 'hover:border-emerald-300', 'hover:bg-emerald-50');
      internBtn.classList.add('active', 'bg-gradient-to-r', 'from-emerald-500', 'to-blue-500', 'text-white', 'border-transparent', 'shadow-lg');
    } else {
      adminBtn.classList.remove('bg-white/50', 'text-slate-600', 'border-slate-200', 'hover:border-emerald-300', 'hover:bg-emerald-50');
      adminBtn.classList.add('active', 'bg-gradient-to-r', 'from-emerald-500', 'to-blue-500', 'text-white', 'border-transparent', 'shadow-lg');
    }
  }
</script>
@endsection
