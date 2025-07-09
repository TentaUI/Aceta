<?php

$path = trim(parse_url($attributes->get('href'), PHP_URL_PATH), '/');

if (blank($path)) {
    $path = '/';
} else {
    $path .= '*';
}

$active = request()->is($path);

$class = \Illuminate\Support\Arr::toCssClasses([
    'font-medium text-indigo-600 dark:text-indigo-400'                                                    => $active,
    'text-zinc-600 transition-colors hover:text-indigo-600 dark:text-zinc-400 dark:hover:text-indigo-400' => ! $active,
]);
?>

<a {{ $attributes->class($class) }} wire:navigate>
    {{ $slot }}
</a>
