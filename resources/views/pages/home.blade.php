@extends('layouts.app')

@section('content')
<!-- Header Title -->
    <section class="py-12">
      <div class="container mx-auto px-6 text-center">
        <h1 class="text-3xl md:text-4xl font-bold bg-gradient-to-r from-emerald-600 to-blue-600 bg-clip-text text-transparent pb-3">
          Program Rekrutmen Poltekkes Kemenkes Manado
        </h1>
        <p class="text-slate-600 text-lg">Kementerian Kesehatan Republik Indonesia</p>
      </div>
    </section>

    @if($departments->isEmpty())
    @include('pages.empty-intern')
    @endif

<!-- Lowongan Section -->
    <section id="lowongan" class="py-16">
      <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-8">
            @php
                $color = ['emerald', 'blue', 'cyan', 'teal', 'lime', 'rose', 'fuchsia', 'violet'
                ];
                function getRandomColor($colors) {
                    return $colors[array_rand($colors)];
                }
            @endphp


            @foreach ($departments as $department)
              @php
                  $selected = getRandomColor($color);
              @endphp
              <div class="group bg-white/90 backdrop-blur-sm rounded-3xl shadow-lg hover:shadow-2xl p-6 border border-{{$selected}}-100 hover:border-{{$selected}}-300 transition-all duration-700 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                <div class="mb-4">
                  <div class="w-12 h-12 bg-gradient-to-r from-{{$selected}}-400 to-{{$selected}}-500 rounded-xl flex items-center justify-center mb-3 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01"/>
                    </svg>
                  </div>
                  <h3 class="text-lg font-bold text-{{$selected}}-700 mb-2">{{ $department->name }}</h3>
                  <p class="text-slate-600 text-md leading-relaxed mb-4">{{ Str::words($department->head_desc, 5, '...') }}</p>
                  <p class="text-slate-600 text-sm leading-relaxed mb-4">Jumlah Pendaftar: 5</p>
                </div>
                <a href="{{ route('detail', $department->slug) }}" class="w-full bg-gradient-to-r from-{{$selected}}-500 to-{{$selected}}-600 hover:from-{{$selected}}-600 hover:to-{{$selected}}-700 text-white px-4 py-3 rounded-xl font-semibold text-sm shadow-lg hover:shadow-xl transition-all duration-300 group-hover:scale-105 text-center block">
                    Lihat
                </a>
              </div>
              @endforeach

        </div>
      </div>
    </section>
@endsection
