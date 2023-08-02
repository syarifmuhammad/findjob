<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased text-black_custom h-screen bg-white_custom overflow-y-hidden flex flex-col gap-y-4">
    @include('layouts.navigation')
    <main class="max-w-7xl w-full mx-auto grid grid-cols-2 gap-y-6 divide-x bg-white rounded-t-lg overflow-hidden">
            <section class="h-full overflow-y-auto">
                {{ $left }}
            </section>
            <section class="h-full overflow-y-auto">
                {{ $right }}
            </section>
    </main>
    @stack('custom-scripts')
</body>

</html>
