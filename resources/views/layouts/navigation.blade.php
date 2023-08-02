<nav x-data="{ open: false }" class="bg-white_custom">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto">
        <div class="flex justify-between py-9">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block w-auto text-2xl" />
                    </a>
                </div>
                <div class="border-l ml-9"></div>
                <!-- Navigation Links -->
                <div class="hidden space-x-9 sm:-my-px sm:ml-9 sm:flex items-center">
                    {{-- <x-text-input type="search" placeholder="Search ..."></x-text-input> --}}
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('course')" :active="request()->routeIs('course')">
                        {{ __('Course') }}
                    </x-nav-link>
                    {{-- <x-nav-link :href="route('companies.index')" :active="request()->routeIs('companies.*')">
                        {{ __('Perusahaan') }}
                    </x-nav-link> --}}
                    <x-nav-link :href="route('vacancies.index')" :active="request()->routeIs('vacancy.*')">
                        {{ __('Vacancy') }}
                    </x-nav-link>
                    <x-nav-link :href="route('recruitment.index')" :active="request()->routeIs('recruitment.*')">
                        {{ __('Recruitment') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            @auth
                <div class="hidden sm:flex sm:items-center sm:ml-6 gap-x-3">
                    {{-- icon search --}}
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19.6 21.7952L13.3 15.4952C12.8 15.8952 12.225 16.2118 11.575 16.4452C10.925 16.6785 10.2333 16.7952 9.5 16.7952C7.68333 16.7952 6.146 16.1658 4.888 14.9072C3.63 13.6485 3.00067 12.1112 3 10.2952C3 8.4785 3.62933 6.94117 4.888 5.68317C6.14667 4.42517 7.684 3.79583 9.5 3.79517C11.3167 3.79517 12.854 4.4245 14.112 5.68317C15.37 6.94183 15.9993 8.47917 16 10.2952C16 11.0285 15.8833 11.7202 15.65 12.3702C15.4167 13.0202 15.1 13.5952 14.7 14.0952L21 20.3952L19.6 21.7952ZM9.5 14.7952C10.75 14.7952 11.8127 14.3575 12.688 13.4822C13.5633 12.6068 14.0007 11.5445 14 10.2952C14 9.04517 13.5623 7.9825 12.687 7.10717C11.8117 6.23183 10.7493 5.7945 9.5 5.79517C8.25 5.79517 7.18733 6.23283 6.312 7.10817C5.43667 7.9835 4.99933 9.04583 5 10.2952C5 11.5452 5.43767 12.6078 6.313 13.4832C7.18833 14.3585 8.25067 14.7958 9.5 14.7952Z"
                            fill="#016C6E" />
                    </svg>

                    {{-- icon notification --}}
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.6286 16.7941C20.5508 16.7003 20.4744 16.6066 20.3994 16.5161C19.3682 15.2688 18.7443 14.5159 18.7443 10.9849C18.7443 9.15673 18.3069 7.65673 17.4449 6.53173C16.8093 5.70063 15.95 5.07017 14.8175 4.60423C14.803 4.59612 14.79 4.58549 14.7791 4.57282C14.3718 3.20876 13.2571 2.29517 11.9999 2.29517C10.7427 2.29517 9.62849 3.20876 9.22114 4.57142C9.21027 4.58362 9.19744 4.59391 9.18318 4.60188C6.54036 5.68985 5.25599 7.7772 5.25599 10.9834C5.25599 14.5159 4.63302 15.2688 3.60083 16.5147C3.52583 16.6052 3.44943 16.697 3.37161 16.7927C3.17061 17.0351 3.04326 17.33 3.00464 17.6425C2.96601 17.955 3.01772 18.2721 3.15365 18.5561C3.44286 19.1655 4.05927 19.5438 4.76286 19.5438H19.2421C19.9424 19.5438 20.5546 19.1659 20.8447 18.5594C20.9813 18.2753 21.0335 17.958 20.9952 17.6451C20.9569 17.3322 20.8297 17.0369 20.6286 16.7941ZM11.9999 23.2952C12.6773 23.2946 13.3418 23.1108 13.9232 22.7631C14.5045 22.4154 14.9809 21.9168 15.3018 21.3203C15.3169 21.2917 15.3244 21.2597 15.3234 21.2274C15.3225 21.1951 15.3133 21.1635 15.2966 21.1358C15.2799 21.1081 15.2563 21.0852 15.2281 21.0694C15.2 21.0535 15.1682 21.0451 15.1358 21.0452H8.86489C8.83252 21.0451 8.80066 21.0533 8.77243 21.0692C8.7442 21.085 8.72055 21.1079 8.7038 21.1356C8.68704 21.1633 8.67774 21.1949 8.67681 21.2273C8.67588 21.2596 8.68335 21.2917 8.69849 21.3203C9.01936 21.9168 9.49567 22.4153 10.0769 22.7629C10.6581 23.1106 11.3226 23.2945 11.9999 23.2952Z"
                            fill="#016C6E" />
                    </svg>

                    <div class="w-12 bg-black aspect-square rounded-full">

                    </div>

                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center pr-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link href="{{ route('profile.index', Auth::user()->slug) }}" @class(['text-primary' => request()->routeIs('profile.*')])>
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            @endauth
            @guest
                <div class="flex item-center justify-end">
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <a href="{{ route('register') }}">
                            <x-primary-button class="px-6 py-2" :default="false">
                                {{ __('Sign Up') }}
                            </x-primary-button>
                        </a>
                    </div>

                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <a href="{{ route('login') }}">
                            <x-secondary-button class="px-6 py-2" :default="false">
                                {{ __('Sign In') }}
                            </x-secondary-button>
                        </a>
                    </div>
                </div>
            @endguest
            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="bg-gradient-radial w-full h-[1px]"></div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('course')" :active="request()->routeIs('course')">
                {{ __('Course') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('companies.index')" :active="request()->routeIs('companies.*')">
                {{ __('Perusahaan') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('vacancies.index')" :active="request()->routeIs('vacancies.*')">
                {{ __('Vacancy') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('recruitment.index')" :active="request()->routeIs('recruitment.*')">
                {{ __('Recruitment') }}
            </x-responsive-nav-link>
        </div>

        @auth
            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link href="{{ route('profile.index', Auth::user()->slug) }}">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        @endauth
    </div>
</nav>
