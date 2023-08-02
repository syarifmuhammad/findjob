<x-app-layout class="py-3">
    <div class="max-w-7xl mx-auto flex gap-x-6 gap-y-6 mt-4 mb-6">
        <div class="w-3/4">
            <x-card class="w-full" style="padding-top:0; padding-left:0; padding-right:0;">
                <div style="background-image:url('{{ Vite::asset('resources/images/bg-auth.svg') }}')"
                    class="bg-cover h-48 relative mb-14 rounded-t-2xl">
                    <div
                        class="rounded-full w-36 aspect-square overflow-hidden border-4 border-white bg-black m-auto absolute -bottom-12 left-8">
                        <img src="{{ Storage::url($user->profile_picture) }}" class="object-cover">
                    </div>
                </div>
                <div class="px-8">
                    <div class="text-2xl font-semibold text-primary">{{ $user->name }}</div>
                    <p class="text-sm text-gray_custom">{{ $user->headline }}</p>
                    <p class="text-sm text-gray_custom/60">{{ $user->city }}, {{ $user->country }}</p>
                </div>
            </x-card>
        </div>
        <div class="w-1/4">
            @auth
                @if (Auth::id() == $user->id)
                    <x-card class="w-full text-primary text-xs font-semibold mb-3">
                        <p>Group</p>
                        <div class="flex items-center justify-between mt-5">
                            <p>Event</p>
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.5078 13.3821H13.5078V18.3821C13.5078 18.6473 13.4025 18.9017 13.2149 19.0892C13.0274 19.2767 12.773 19.3821 12.5078 19.3821C12.2426 19.3821 11.9882 19.2767 11.8007 19.0892C11.6132 18.9017 11.5078 18.6473 11.5078 18.3821V13.3821H6.50781C6.2426 13.3821 5.98824 13.2767 5.80071 13.0892C5.61317 12.9017 5.50781 12.6473 5.50781 12.3821C5.50781 12.1169 5.61317 11.8625 5.80071 11.675C5.98824 11.4874 6.2426 11.3821 6.50781 11.3821H11.5078V6.38208C11.5078 6.11686 11.6132 5.86251 11.8007 5.67497C11.9882 5.48744 12.2426 5.38208 12.5078 5.38208C12.773 5.38208 13.0274 5.48744 13.2149 5.67497C13.4025 5.86251 13.5078 6.11686 13.5078 6.38208V11.3821H18.5078C18.773 11.3821 19.0274 11.4874 19.2149 11.675C19.4025 11.8625 19.5078 12.1169 19.5078 12.3821C19.5078 12.6473 19.4025 12.9017 19.2149 13.0892C19.0274 13.2767 18.773 13.3821 18.5078 13.3821Z"
                                    fill="#016C6E" />
                            </svg>
                        </div>
                        <div class="flex items-center justify-between mt-5">
                            <p>Recruitment</p>
                            <a href="{{ route('recruitment.create') }}">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.5078 13.3821H13.5078V18.3821C13.5078 18.6473 13.4025 18.9017 13.2149 19.0892C13.0274 19.2767 12.773 19.3821 12.5078 19.3821C12.2426 19.3821 11.9882 19.2767 11.8007 19.0892C11.6132 18.9017 11.5078 18.6473 11.5078 18.3821V13.3821H6.50781C6.2426 13.3821 5.98824 13.2767 5.80071 13.0892C5.61317 12.9017 5.50781 12.6473 5.50781 12.3821C5.50781 12.1169 5.61317 11.8625 5.80071 11.675C5.98824 11.4874 6.2426 11.3821 6.50781 11.3821H11.5078V6.38208C11.5078 6.11686 11.6132 5.86251 11.8007 5.67497C11.9882 5.48744 12.2426 5.38208 12.5078 5.38208C12.773 5.38208 13.0274 5.48744 13.2149 5.67497C13.4025 5.86251 13.5078 6.11686 13.5078 6.38208V11.3821H18.5078C18.773 11.3821 19.0274 11.4874 19.2149 11.675C19.4025 11.8625 19.5078 12.1169 19.5078 12.3821C19.5078 12.6473 19.4025 12.9017 19.2149 13.0892C19.0274 13.2767 18.773 13.3821 18.5078 13.3821Z"
                                        fill="#016C6E" />
                                </svg>
                            </a>
                        </div>
                    </x-card>
                @endif
            @endauth
            <x-card class="w-full font-semibold mb-3">
                <h1 class="font-semibold text-xl mb-4">Jelajahi Topik</h1>
                <div class="text-sm flex flex-wrap gap-x-3 gap-y-3">
                    <x-badge>Front-End</x-badge>
                    <x-badge>Back-End</x-badge>
                    <x-badge>AI</x-badge>
                    <x-badge>Cryptography</x-badge>
                </div>
            </x-card>
            <x-card class="w-full mb-3 flex justify-center">
                <div>
                    <x-application-logo></x-application-logo>
                    <p class="text-gray_custom text-xs">
                        FindJob Coorporation made by<br>Marzuki Corp. © 2023
                    </p>
                </div>
            </x-card>
        </div>
    </div>
</x-app-layout>
