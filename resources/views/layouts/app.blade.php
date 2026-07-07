<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GridSpace</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            @theme {
                --color-brand-orange: #EB5333;
                --color-brand-navy: #052E5C;
                --color-brand-light: #F8F9FB;
                --color-brand-white: #FFFFFF;
            }
        </style>
    @endif
</head>
<body class="font-sans antialiased text-brand-navy bg-brand-white">

    <x-nav />

    <main>
        @yield('content')
    </main>

    <x-footer />

</body>
</html>
