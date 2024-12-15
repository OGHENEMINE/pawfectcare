@props(['active'])

@php
$classes = ($active ?? false)
    ? 'flex items-center gap-1 font-medium text-primary focus:outline-none focus:text-neutral-400 transition duration-150 ease-in-out cursor-pointer'
    : 'flex items-center gap-1 font-medium hover:text-primary/35 text-neutral-400 focus:outline-none focus:text-gray-400 transition duration-150 ease-in-out cursor-pointer';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
