@props([
    'bg_color' => 'white',
])

<section {{ $attributes->class([ 'rounded-lg p-8 border-2 h-auto' ])->merge([ 'class' => 'bg-' . $bg_color ]) }}>
    {{ $slot }}
</section>