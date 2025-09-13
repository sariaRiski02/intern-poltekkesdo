@extends('layouts.app')

@section('content')
<!-- Register Section -->
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
          Daftar Akun Baru
        </h1>
        <p class="text-slate-600">Program Magang Poltekkes Manado</p>
      </div>

      <!-- Register Form -->
      <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-8 border border-emerald-100">
        <form method="POST" action="{{ route('register') }}" id="registerForm">
          @csrf

          <!-- Name Field -->
          <div class="mb-6">
            <label for="name" class="block text-sm font-semibold text-slate-700 mb-2">
              Nama Lengkap
            </label>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
              </div>
              <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
                class="w-full pl-10 pr-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors bg-white/50 backdrop-blur-sm @error('name') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror"
                placeholder="Masukkan nama lengkap"
                required
              >
            </div>
            @error('name')
              <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
          </div>

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
                class="w-full pl-10 pr-4 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors bg-white/50 backdrop-blur-sm @error('email') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror"
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
                class="w-full pl-10 pr-12 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors bg-white/50 backdrop-blur-sm @error('password') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror"
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
            <div class="mt-2">
              <div class="text-xs text-slate-500">
                Password minimal 8 karakter
              </div>
            </div>
          </div>

          <!-- Confirm Password Field -->
          <div class="mb-6">
            <label for="password_confirmation" class="block text-sm font-semibold text-slate-700 mb-2">
              Konfirmasi Password
            </label>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </div>
              <input
                type="password"
                id="password_confirmation"
                name="password_confirmation"
                class="w-full pl-10 pr-12 py-3 border border-slate-300 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors bg-white/50 backdrop-blur-sm @error('password_confirmation') border-red-500 focus:border-red-500 focus:ring-red-500 @enderror"
                placeholder="Ulangi password"
                required
              >
              <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                <button type="button" id="togglePasswordConfirmation" class="text-slate-400 hover:text-slate-600 transition-colors">
                  <svg id="eyeIconConfirm" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                  </svg>
                  <svg id="eyeSlashIconConfirm" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.878 9.878L3 3m6.878 6.878L21 21"></path>
                  </svg>
                </button>
              </div>
            </div>
            @error('password_confirmation')
              <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
          </div>

          <!-- Terms and Conditions -->
          <div class="mb-6">
            <div class="flex items-start">
              <input
                type="checkbox"
                id="terms"
                name="terms"
                class="w-4 h-4 text-emerald-600 bg-white border-slate-300 rounded focus:ring-emerald-500 focus:ring-2 mt-1"
                required
              >
              <label for="terms" class="ml-2 text-sm text-slate-600">
                Saya menyetujui
                <a href="#" class="text-emerald-600 hover:text-emerald-500 transition-colors font-medium">Syarat & Ketentuan</a>
                dan
                <a href="#" class="text-emerald-600 hover:text-emerald-500 transition-colors font-medium">Kebijakan Privasi</a>
              </label>
            </div>
          </div>

          <!-- Register Button -->
          <button
            type="submit"
            class="w-full bg-gradient-to-r from-emerald-500 to-blue-500 hover:from-emerald-600 hover:to-blue-600 text-white font-bold py-3 px-4 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 flex items-center justify-center gap-2"
          >
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
            </svg>
            Daftar Sekarang
          </button>

          <!-- Divider -->
          <div class="relative my-6">
            <div class="absolute inset-0 flex items-center">
              <div class="w-full border-t border-slate-200"></div>
            </div>
            <div class="relative flex justify-center text-sm">
              <span class="px-4 bg-white text-slate-500">Sudah punya akun?</span>
            </div>
          </div>

          <!-- Login Link -->
          <div class="text-center">
            <p class="text-slate-600">
              <a href="{{ route('login') }}" class="text-emerald-600 hover:text-emerald-500 font-semibold transition-colors">
                Masuk ke akun Anda
              </a>
            </p>
          </div>
        </form>
      </div>

      <!-- Additional Info -->
      <div class="text-center mt-6">
        <p class="text-sm text-slate-500">
          Dengan mendaftar, Anda menyetujui
          <a href="#" class="text-emerald-600 hover:text-emerald-500 transition-colors">Syarat & Ketentuan</a>
          dan
          <a href="#" class="text-emerald-600 hover:text-emerald-500 transition-colors">Kebijakan Privasi</a>
        </p>
      </div>
    </div>
  </div>
</section>

<script>
  // Toggle password visibility for main password field
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

  // Toggle password visibility for confirmation field
  document.getElementById('togglePasswordConfirmation').addEventListener('click', function() {
    const passwordField = document.getElementById('password_confirmation');
    const eyeIcon = document.getElementById('eyeIconConfirm');
    const eyeSlashIcon = document.getElementById('eyeSlashIconConfirm');

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

  // Password confirmation validation
  document.getElementById('password_confirmation').addEventListener('input', function() {
    const password = document.getElementById('password').value;
    const confirmPassword = this.value;
    const confirmField = this;

    if (confirmPassword === '') {
      confirmField.classList.remove('border-red-500', 'border-green-500');
      confirmField.classList.add('border-slate-300');
    } else if (password === confirmPassword) {
      confirmField.classList.remove('border-red-500', 'border-slate-300');
      confirmField.classList.add('border-green-500');
    } else {
      confirmField.classList.remove('border-green-500', 'border-slate-300');
      confirmField.classList.add('border-red-500');
    }
  });

  // Password strength indicator
  document.getElementById('password').addEventListener('input', function() {
    const password = this.value;
    const field = this;

    if (password.length < 8) {
      field.classList.remove('border-green-500');
      field.classList.add('border-slate-300');
    } else {
      field.classList.remove('border-slate-300');
      field.classList.add('border-green-500');
    }
  });
</script>
@endsection
