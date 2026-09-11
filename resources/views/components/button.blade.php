@props([
    'href' => '#',
    'variant' => 'primary',
    'type' => 'button',
])

@php

    $classes = match ($variant) {

        'outline' =>
            'border border-[#D8A94E]/60 text-[#F4EFE3] hover:border-[#D8A94E] hover:bg-[#D8A94E]/10',

        'cream' =>
            'bg-[#F4EFE3] text-[#0B2E22] hover:bg-white',

        default =>
            'bg-[#D8A94E] text-[#0B2E22] hover:bg-[#e5bb66]',

    };

@endphp


@if ($href !== '#')

    <a
        href="{{ $href }}"
        {{ $attributes->merge([
            'class' => "inline-block rounded-full px-7 py-3.5 text-center text-sm font-bold transition duration-200 {$classes}"
        ]) }}
    >
        {{ $slot }}
    </a>

@else

    <button
        type="{{ $type }}"
        {{ $attributes->merge([
            'class' => "rounded-full px-7 py-3.5 text-center text-sm font-bold transition duration-200 {$classes}"
        ]) }}
    >
        {{ $slot }}
    </button>

@endif