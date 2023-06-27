<x-app-layout>
    @pushOnce('menu-right')
        <div class="flex item-center justify-end">
            @guest
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <a href="{{ route('register') }}">
                        <x-primary-button class="px-6 py-2" :default="false">
                            {{ __('Sign Up') }}
                        </x-primary-button>
                    </a>
                </div>
            @endguest
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <a href="{{ route('login') }}">
                    <x-secondary-button class="px-6 py-2" :default="false">
                        {{ __('Sign In') }}
                    </x-secondary-button>
                </a>
            </div>
        </div>
    @endPushOnce
    <div class="max-w-7xl mx-auto">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                {{ __("You're logged in!") }}
            </div>
        </div>
    </div>
</x-app-layout>
