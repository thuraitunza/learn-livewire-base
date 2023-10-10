{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        {{ $slot }}
    </body>
</html> --}}

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Livewire</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="min-h-screen bg-gray-100">
        <header class="bg-white shadow">
            <div class="flex max-w-5xl mx-auto py-6 px-4">
                <h2 class="font-semibold text-xl
                    text-gray-800 leading-tight">
                    Livewire
                </h2>

                <a class="text-green-600 ms-6"
                    href="/users/add" wire:navigate>+ Add User</a>
            </div>
        </header>
        <main class="max-w-3xl mx-auto py-6 px-4">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
