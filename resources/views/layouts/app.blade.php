<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') }} | {{ $title ?? config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles

</head>

<body>

    <main class="px-20 py-8 flex flex-col min-h-screen space-y-4">

        @livewire('navbar')

        <div class="flex-1">

            {{ $slot }}

        </div>

        @livewire('footer')

    </main>

    @livewireScripts

</body>

</html>