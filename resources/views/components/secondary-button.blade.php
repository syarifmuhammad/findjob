@props([
    'default' => true,
])
<button
    {{ $attributes->class([
        'inline-flex items-center bg-white border-2 border-primary rounded-lg text-primary',
        'font-semibold text-base' => $default,
    ])->merge([
        'type' => 'button'
    ]) }}>
    {{ $slot }}
</button>
