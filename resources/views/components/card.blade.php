@props([
    'bg_color' => 'white',
])

<section {{ $attributes->class([ 'rounded-[20px] p-8 h-auto shadow-soft' ])->merge([ 'class' => 'bg-' . $bg_color ]) }}>
    {{ $slot }}
</section>