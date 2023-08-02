@props(['variant' => 'default'])

@if ($variant == 'white')
    <h1 {{ $attributes->merge(['class' => 'font-montserrat font-bold text-white']) }}>Find<span class="text-primary">Job.</span></h1>
@else    
    <h1 {{ $attributes->merge(['class' => 'font-montserrat font-bold text-black_custom']) }}>Find<span class="text-primary">Job.</span></h1>
@endif

