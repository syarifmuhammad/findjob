<x-guest-layout>
    <h1 class="text-black_custom text-4xl font-bold mb-14">Sign Up<span class="text-primary">.</span></h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Name -->
        <div class="mt-4">
            <x-input-label for="name" class="mb-2" :value="__('Name')" />
            <x-text-input id="name" class="block mb-6 w-full" type="text" name="name" :value="old('name')" required autocomplete="name" placeholder="Enter your name here" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" class="mb-2" :value="__('E-Mail')" />
            <x-text-input id="email" class="block mb-6 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Enter your e-mail here" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" class="mb-4" :value="__('Password')" />

            <x-text-input id="password" class="block mb-6 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" placeholder="Enter your password here" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" class="mb-4" :value="__('Repeat your password')" />

            <x-text-input id="password_confirmation" class="block mb-6 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" placeholder="Repeat your password here" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between mt-6">
            <a href="{{ route('login') }}">
                <x-secondary-button class="px-6 py-2">
                    {{ __('Close') }}
                </x-secondary-button>
            </a>
            <x-primary-button class="px-6 py-2">
                {{ __('Sign Up') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
