@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-bold text-base text-[#505050]']) }}>
    {{ $value ?? $slot }}
</label>
