<?php

$menus = [
    'Home' => route('tenta.home'),
    'Docs' => route('tenta.docs', [
        'any' => 'install',
    ]),
];
?>
<div x-data="{ mobile: false }" class="sticky top-0 z-50 ">
    <div class="border-b border-zinc-200 bg-white dark:border-zinc-800 dark:bg-zinc-900">
        <div class="mx-auto container px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                {{-- LOGO --}}
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('images/logo.svg') }}" alt="logo" class="size-10" />
                    <span class="text-xl font-bold text-zinc-900 dark:text-white">{{ config('app.name') }}</span>
                </div>

                <div class="flex items-center gap-x-3">
                    <nav class="hidden items-center gap-x-4 md:flex">
                        @foreach($menus as $label => $href)
                            <x-menu :$href>{{ $label }}</x-menu>
                        @endforeach
                    </nav>

                    <div class="mx-2 hidden h-5 w-px bg-zinc-300 md:block dark:bg-zinc-700"></div>

                    <button
                        x-data
                        x-on:click="$tenta.theme.toggle"
                        class="cursor-pointer rounded-lg p-2 text-zinc-600 transition-colors hover:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-700"
                    >
                        <x-icon name="lucide-sun" class="hidden size-5 dark:block" />
                        <x-icon name="lucide-moon" class="block size-5 dark:hidden" />
                    </button>

                    <button
                        type="button"
                        class="relative mr-2 inline-flex cursor-pointer items-center justify-center gap-2 rounded-lg bg-zinc-100 p-2 ps-4 pe-4 text-sm transition-colors max-md:hidden dark:bg-zinc-700"
                    >
                        <div class="flex items-center gap-2">
                            <x-icon name="lucide-search" class="size-5 text-zinc-400" />
                            <span class="text-zinc-400">Search</span>
                            <div class="min-w-1"></div>
                            <span class="text-zinc-400">⌘K</span>
                        </div>
                    </button>

                    <!-- Mobile menu button -->
                    <div class="md:hidden">
                        <button
                            x-on:click="mobile = !mobile"
                            class="rounded-lg p-2 cursor-pointer text-zinc-600 transition-colors hover:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-800"
                        >
                            <x-icon name="lucide-menu" class="size-5" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav x-show="mobile" x-transition
         class="border-b p-4 flex flex-col border-zinc-200 bg-white dark:border-zinc-800 dark:bg-zinc-900 space-y-2 pb-4 md:hidden">
        @foreach($menus as $label => $href)
            <x-menu mobile :$href>{{ $label }}</x-menu>
        @endforeach
    </nav>
</div>
