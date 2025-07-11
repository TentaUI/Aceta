@props(['item', 'level'])

<?php
$padding = match ($level) {
    0 => 'pl-[8px]',
    1 => 'pl-[16px]',
    2 => 'pl-[24px]',
    3 => 'pl-[32px]',
};

$class = \Illuminate\Support\Arr::toCssClasses([
    'text-zinc-700 dark:text-zinc-300',
    'toc-link block text-sm hover:text-zinc-900 dark:hover:text-white transition-colors py-1',
]);
?>
<div
    class="border-l-2 {{ $padding }}"
    :class="$tenta.navigation.isActive('{{ $item['id']}}') ? 'border-indigo-600 dark:border-indigo-400' : 'border-zinc-200 dark:border-zinc-800'"
    x-on:click="$tenta.navigation.setActive('{{ $item['id'] }}')"
>
    <a href="#{{ $item['id'] }}" {{ $attributes->class($class) }} :class="$tenta.navigation.isActive('{{ $item['id']}}') ? 'font-medium' : ''">
        {{ $item['label'] }}
    </a>
</div>

@if (!empty($item['children']))
    @foreach ($item['children'] as $child)
        <x-docs.toc.item :item="$child" :level="$child['level']" />
    @endforeach
@endif
