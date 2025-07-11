<footer {{ $attributes->class('border-t border-zinc-200  dark:border-zinc-800') }}>
    <div class="mx-auto container px-4 py-6 sm:px-6 lg:px-8">
        <div class="flex flex-col items-center justify-between md:flex-row">
            <div class="mb-4 flex items-center space-x-2 md:mb-0">
                <img src="{{ asset('images/logo.svg') }}" alt="logo" class="size-10" />
                <span class="text-xl font-bold text-zinc-900 dark:text-white">{{ config('app.name') }}</span>
            </div>

            <p class="text-zinc-600 dark:text-zinc-400">2025 © Octopy ID</p>
        </div>
    </div>
</footer>
