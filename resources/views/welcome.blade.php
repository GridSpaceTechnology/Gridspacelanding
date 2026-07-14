@extends('layouts.app')

@section('content')

    <x-hero />

    <section id="services" class="bg-brand-light py-20 sm:py-24 lg:py-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14 sm:mb-16 lg:mb-20">
                <span class="inline-block px-4 py-1.5 text-xs font-semibold tracking-widest uppercase text-brand-orange bg-brand-orange/10 rounded-full mb-4">
                    Our Services
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-brand-navy tracking-tight">
                    Everything you need to succeed
                </h2>
                <p class="mt-4 text-base sm:text-lg text-brand-navy/60 max-w-2xl mx-auto">
                    One platform connecting you to spaces, talent, and projects.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8 lg:gap-10">

                <x-service-card
                    title="Cowork Spaces"
                    description="Find and book verified flexible workspaces near you."
                    buttonText="Explore Spaces"
                    buttonColor="brand-navy"
                    url="https://www.cowork.gridspace.com.ng/"
                >
                    <x-slot:icon>
                        <svg class="w-8 h-8 sm:w-10 sm:h-10 text-brand-navy" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </x-slot:icon>
                </x-service-card>

                <x-service-card
                    title="Job Recruiting"
                    description="AI recruitment platform helping employers hire top talent faster."
                    buttonText="Start Recruiting"
                    buttonColor="brand-orange"
                    :url="route('coming-soon')"
                >
                    <x-slot:icon>
                        <svg class="w-8 h-8 sm:w-10 sm:h-10 text-brand-navy" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </x-slot:icon>
                </x-service-card>

                <x-service-card
                    title="Projects"
                    description="Post or join projects and collaborate with skilled professionals."
                    buttonText="Discover Projects"
                    buttonColor="brand-navy"
                    :url="route('coming-soon')"
                >
                    <x-slot:icon>
                        <svg class="w-8 h-8 sm:w-10 sm:h-10 text-brand-navy" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                    </x-slot:icon>
                </x-service-card>

            </div>
        </div>
    </section>

@endsection
