@extends('admin.layout.app')

@section('content')
<section class="min-h-screen bg-gradient-to-br from-slate-50 via-emerald-50/30 to-blue-50/20 py-12 relative overflow-hidden">
    <!-- Enhanced Background Pattern -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-10 w-96 h-96 bg-gradient-to-r from-emerald-200/20 to-blue-200/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute top-40 right-20 w-80 h-80 bg-gradient-to-r from-blue-200/20 to-purple-200/20 rounded-full blur-3xl animate-pulse delay-300"></div>
        <div class="absolute bottom-20 left-1/3 w-64 h-64 bg-gradient-to-r from-emerald-200/20 to-teal-200/20 rounded-full blur-3xl animate-pulse delay-700"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full h-full bg-gradient-to-r from-transparent via-white/5 to-transparent rotate-12"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto">

            <!-- Header -->
            <div class="text-center mb-12" data-aos="fade-up">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-emerald-500 to-blue-500 rounded-2xl mb-6 shadow-lg">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-emerald-600 via-blue-600 to-purple-600 bg-clip-text text-transparent mb-4 leading-tight">
                    Form Department
                </h1>
                <p class="text-slate-600 text-xl max-w-2xl mx-auto leading-relaxed">
                    Buat atau perbarui data department beserta admin penanggung jawab.
                </p>
            </div>

            <!-- Form Card -->
            <div class="bg-white/80 backdrop-blur-xl rounded-3xl shadow-2xl p-10 border border-white/20 ring-1 ring-emerald-100/50 hover:shadow-3xl transition-all duration-500"
                     data-aos="fade-up" data-aos-delay="100"
                     style="box-shadow: 0 25px 50px -12px rgba(0,0,0,0.15), 0 0 0 1px rgba(255,255,255,0.1) inset;">

                <form action="{{

                    isset($department) ? route('admin.update-department-process', $department->slug) : route('admin.add-department-process')

                    }}" method="POST" class="space-y-10" id="department-form">
                    @csrf
                    @if (isset($department))
                        @method('PUT')
                    @endif

                    <!-- Section: Informasi Department -->
                    <div class="space-y-6">
                        <div class="relative mb-2">
                            <div class="absolute -inset-2 bg-gradient-to-r from-emerald-500/20 to-blue-500/20 rounded-2xl blur-lg opacity-50"></div>
                            <h2 class="relative text-2xl font-bold text-slate-800 bg-white/60 backdrop-blur-sm rounded-2xl p-4 border border-white/30">
                                <span class="inline-flex items-center gap-3">
                                    <div class="p-2 bg-gradient-to-br from-emerald-500 to-blue-500 rounded-xl">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                        </svg>
                                    </div>
                                    Informasi Department
                                </span>
                            </h2>
                        </div>

                        <!-- Nama -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-slate-700 mb-2">
                                Nama Department <span class="text-red-500">*</span>
                            </label>
                            <div class="relative group">
                                <input type="text" id="name" name="name" value="{{ $department->name ?? '' }}" required
                                             placeholder="Contoh: Teknologi Informasi"
                                             class="w-full px-5 py-4 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-emerald-500/50 focus:border-emerald-400 transition-all duration-300 bg-white/70 backdrop-blur-sm hover:bg-white/90 hover:shadow-md placeholder-slate-400 group-hover:border-slate-300">
                                <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-emerald-500/5 to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                            </div>
                            <p class="text-xs text-slate-500 mt-1">Nama akan dipakai untuk identitas tampilan.</p>
                        </div>

                        <!-- Head Desc -->
                        <div>
                            <label for="head_desc" class="block text-sm font-medium text-slate-700 mb-2">
                                Deskripsi Singkat
                            </label>
                            <input type="text" id="head_desc" value="{{ $department->head_desc ?? '' }}" name="head_desc"
                                         placeholder="Contoh: Dr. Andi Setiawan, M.Kom"
                                         class="w-full px-5 py-4 border border-slate-200 rounded-2xl focus:ring-2 focus:ring-emerald-500/50 focus:border-emerald-400 transition-all duration-300 bg-white/70 backdrop-blur-sm hover:bg-white/90 hover:shadow-md placeholder-slate-400">
                        </div>

                        <!-- Persyaratan -->
                        <div>
                            <label for="requirements" class="block text-sm font-medium text-slate-700 mb-2">
                                Persyaratan
                            </label>
                            <textarea id="requirements" name="requirements" rows="3"
                                                placeholder="Contoh: Minimal D3, Memiliki pengalaman 2 tahun, Menguasai Ms. Office"
                                                class="w-full px-5 py-4 border border-slate-200 rounded-2xl focus:ring-2
                                                focus:ring-emerald-500/50 focus:border-emerald-400 transition-all duration-300
                                                bg-white/70 backdrop-blur-sm hover:bg-white/90 hover:shadow-md
                                                placeholder-slate-400 resize-none">{{ $requirments ?? '' }}</textarea>
                            <p class="text-xs text-slate-500 mt-1">Pisahkan setiap persyaratan dengan tanda koma (,) jika lebih dari satu.</p>
                        </div>

                        <!-- Deskripsi -->
                        <div>
                            <label for="desc" class="block text-sm font-medium text-slate-700 mb-2">
                                Deskripsi
                            </label>
                            <textarea id="desc" name="desc" rows="4"
                                                placeholder="Tuliskan deskripsi singkat mengenai department..."
                                                class="w-full px-5 py-4 border border-slate-200 rounded-2xl focus:ring-2
                                                focus:ring-emerald-500/50 focus:border-emerald-400 transition-all duration-300
                                                bg-white/70 backdrop-blur-sm hover:bg-white/90 hover:shadow-md
                                                placeholder-slate-400 resize-none">{{ $department->desc ?? '' }}</textarea>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="pt-4 grid grid-cols-1 sm:grid-cols-1 gap-4">
                        <div class="relative group">
                            <button type="submit"
                                            class="cursor-pointer relative w-full bg-gradient-to-r from-emerald-500 via-blue-500 to-blue-600 hover:from-emerald-600 hover:via-blue-600 hover:to-purple-600 text-white font-bold py-4 px-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 hover:scale-[1.02] flex items-center justify-center gap-3 text-lg hover:-translate-y-0.5">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                Simpan Department
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
