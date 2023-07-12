@props(['active'])
@php
$classes = ($active ?? false)
            // ? 'inline-flex items-center px-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            ? 'rounded-[20px] px-3 py-1.5 text-primary bg-primary_50 font-semibold'
            : 'rounded-[20px] px-3 py-1.5 text-gray_custom bg-gray_soft font-semibold';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>