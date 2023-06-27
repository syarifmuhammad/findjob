@props(['active'])

@php
$classes = ($active ?? false)
            // ? 'inline-flex items-center px-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            ? 'inline-flex items-center border-b-2 border-primary text-sm font-medium leading-5 text-primary hover:text-primary hover:border-primary focus:outline-none focus:text-primary focus:border-primary transition duration-150 ease-in-out'
            : 'inline-flex items-center border-b-2 border-transparent text-sm font-medium leading-5 text-black_custom hover:text-primary hover:border-primary focus:outline-none focus:text-primary focus:border-primary transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
