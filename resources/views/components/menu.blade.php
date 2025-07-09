<?php

$active = request()->is(parse_url($attributes->get('href'), PHP_URL_PATH));

$class = \Illuminate\Support\Arr::toCssClasses([
    'text-zinc-600 transition-colors hover:text-indigo-600 dark:text-zinc-400 dark:hover:text-indigo-400' => ! $active,
]);
?>

<a {{ $attributes->class($class) }} wire:navigate wire:current.exact="font-medium text-indigo-600 dark:text-indigo-400">
    {{ $slot }}
</a>
