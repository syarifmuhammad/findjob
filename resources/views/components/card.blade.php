@props([
    'bg_color' => 'white',
    'shadow' => true,
])

<div {{ $attributes->class([ 'rounded-lg p-8', 'drop-shadow-soft' => $shadow ])->merge([ 'class' => 'bg-' . $bg_color ]) }}>
    {{ $slot }}
</div>