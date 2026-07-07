@props([
    'title' => '',
    'description' => '',
    'buttonText' => '',
    'buttonColor' => 'brand-navy',
    'url' => '#',
])

@php
    $isOrange = $buttonColor === 'brand-orange';
@endphp

<div class="group bg-white rounded-2xl shadow-md hover:shadow-2xl transition-all duration-300 ease-out p-8 sm:p-10 flex flex-col items-center text-center hover:-translate-y-2">
    <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-full flex items-center justify-center mb-6 shadow-sm group-hover:scale-110 group-hover:shadow-md transition-all duration-300 {{ $isOrange ? 'bg-gradient-to-br from-[#EB5333]/20 to-orange-100 group-hover:bg-[#EB5333]' : 'bg-gradient-to-br from-[#EB5333]/20 to-orange-100 group-hover:bg-[#052E5C]' }}">
        <div class="w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center text-brand-navy group-hover:text-white">
            {{ $icon }}
        </div>
    </div>

    <h3 class="text-2xl sm:text-3xl font-bold text-brand-navy mb-4">{{ $title }}</h3>

    <p class="text-brand-navy/70 text-base sm:text-lg leading-relaxed mb-8 max-w-xs">{{ $description }}</p>

    <a href="{{ $url }}" target="_blank" rel="noopener noreferrer" class="mt-auto inline-flex items-center px-7 sm:px-9 py-3.5 sm:py-4 text-sm sm:text-base font-semibold rounded-xl transition-all duration-200 shadow-md hover:shadow-xl border-2 {{ $isOrange ? 'text-black border-[#EB5333] bg-white hover:bg-[#EB5333] hover:text-white' : 'text-black border-[#052E5C] bg-white hover:bg-[#052E5C] hover:text-white' }}">
        {{ $buttonText }}
        <svg class="w-4 h-4 ml-2 -mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
        </svg>
    </a>
</div>
