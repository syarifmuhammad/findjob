<x-guest-layout>
    <h1 class="text-black_custom text-5xl font-bold mb-14">Sign Up<span class="text-primary">.</span></h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" class="mb-4" :value="__('E-Mail')" />
            <x-text-input id="email" class="block mb-6 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" class="mb-4" :value="__('Password')" />

            <x-text-input id="password" class="block mb-6 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" class="mb-4" :value="__('Repeat your password')" />

            <x-text-input id="password_confirmation" class="block mb-6 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Sign Up') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
