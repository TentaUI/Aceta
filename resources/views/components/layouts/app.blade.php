@props(['title' => null])
    <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>{{ filled($title) ? $title . ' - ' : '' }} {{ config('app.name') }}</title>
        <link rel="icon" href="{{ asset('images/logo.svg') }}" type="image/x-icon">
        @vite([
            'resources/theme/main.js',
        ])

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>
    </head>
    <body class="bg-white text-zinc-900 transition-colors dark:bg-zinc-900 dark:text-zinc-100">
        <x-layouts.inc.header />

        {{ $slot }}
    </body>
</html>
