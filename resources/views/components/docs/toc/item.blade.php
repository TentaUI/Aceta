@props(['item', 'level'])

<?php
$padding = match ($level) {
    0 => 'pl-[8px]',
    1 => 'pl-[16px]',
    2 => 'pl-[24px]',
    3 => 'pl-[32px]',
};

$class = \Illuminate\Support\Arr::toCssClasses([
    'text-zinc-600 dark:text-zinc-400',
    'toc-link block text-sm hover:text-zinc-900 dark:hover:text-white transition-colors py-1',
]);
?>
<div
    @click="() => {
    setTimeout(() => $store.tocNavHighlighter.visibleHeadingId = '{{ $item['id'] }}', 10)
}"
    class="border-l-2 border-zinc-200 {{ $padding }}"
    :class="$store.tocNavHighlighter.visibleHeadingId === '{{ $item['id']}}' ? 'border-l-indigo-500' : ''"
>
    <a href="#{{ $item['id'] }}" {{ $attributes->class($class) }}>
        {{ $item['label'] }}
    </a>
</div>

@if (!empty($item['children']))
    @foreach ($item['children'] as $child)
        <x-docs.toc.item :item="$child" :level="$child['level']" />
    @endforeach
@endif
