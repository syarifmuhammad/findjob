<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center border-2 border-primary rounded-lg bg-primary rounded-lg font-semibold text-base text-white hover:bg-primary/90 focus:bg-primary/90 active:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
