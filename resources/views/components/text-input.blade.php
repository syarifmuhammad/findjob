@props(['disabled' => false])
<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'transition px-3 py-2 border-primary focus:border-primary focus:ring-primary rounded-lg text-base font-medium placeholder:text-[#505050]/30']) !!}>
