@extends('layouts.app')

@section('content')
<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-brand-navy">
    <div class="absolute inset-0 bg-gradient-to-br from-brand-navy via-[#0a2a4a] to-brand-navy"></div>
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_rgba(235,83,51,0.12),transparent_70%)]"></div>

    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-96 h-96 rounded-full border border-brand-orange/10 animate-pulse" style="animation-duration: 4s;"></div>
        <div class="absolute -bottom-32 -left-32 w-80 h-80 rounded-full border border-white/5 animate-pulse" style="animation-duration: 6s;"></div>
        <div class="absolute top-1/3 left-1/4 w-4 h-4 rounded-full bg-brand-orange/20 animate-ping" style="animation-duration: 3s;"></div>
        <div class="absolute top-2/3 right-1/4 w-3 h-3 rounded-full bg-white/10 animate-ping" style="animation-duration: 5s;"></div>
        <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-gradient-to-br from-brand-orange/5 to-transparent rounded-full blur-3xl"></div>
    </div>

    <div class="relative z-10 text-center px-4 sm:px-6 max-w-2xl mx-auto pt-24 pb-20">
        <span class="inline-flex items-center gap-2 px-5 py-2 text-xs font-semibold tracking-widest uppercase text-brand-orange bg-brand-orange/10 rounded-full border border-brand-orange/20 mb-8">
            <span class="w-2 h-2 rounded-full bg-brand-orange animate-pulse"></span>
            Coming Soon
        </span>
        <h1 class="text-5xl sm:text-6xl md:text-7xl font-bold leading-[1.1] tracking-tight text-white">
            We're Building Something
            <span class="text-brand-orange">Amazing</span>
        </h1>
        <p class="mt-6 text-lg sm:text-xl text-white/60 max-w-lg mx-auto leading-relaxed">
            This feature is currently under development. Stay tuned for updates&mdash;we're working hard to bring it to you soon.
        </p>
        <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="{{ url('/') }}" class="inline-flex items-center gap-2 px-8 py-3.5 text-sm font-semibold text-white bg-brand-orange rounded-xl hover:bg-orange-600 transition-all duration-200 shadow-lg hover:shadow-xl">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Back to Home
            </a>
            <button type="button" id="notify-open" class="inline-flex items-center gap-2 px-8 py-3.5 text-sm font-semibold text-white border-2 border-white/20 rounded-xl hover:bg-white/10 hover:border-white/40 transition-all duration-200">
                Notify Me
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                </svg>
            </button>
        </div>
    </div>
</section>

<x-notify-modal />
@endsection
