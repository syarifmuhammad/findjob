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
    <body class="antialiased">
        <div class="min-h-screen flex items-center">
            <div class="w-1/2 min-h-screen flex justify-center items-center">
                <div class="w-[65%] px-6 py-4">
                    {{ $slot }}
                </div>
            </div>
            <div class="w-1/2 min-h-screen h-full shadow-md overflow-hidden bg-cover flex justify-center items-center" style="background-image:url('<?=Vite::asset('resources/images/bg-auth.svg')?>')">
                <div class="text-center">
                    <x-application-logo variant="white" class="text-5xl" />
                    <small class="text-white font-bold text-base">Find It by yourself</small>
                </div>
            </div>
        </div>
    </body>
</html>
