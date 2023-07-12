<x-app-layout class="py-3">
    <div class="max-w-7xl mx-auto flex gap-x-6 gap-y-6 mt-4 mb-8">
        <div class="w-1/4">
            <x-card class="overflow-hidden w-full" style="padding:0;">
                <div style="background-image:url('{{ Vite::asset('resources/images/bg-auth.svg') }}')"
                    class="bg-cover h-20 relative mb-14">
                    <div class="rounded-full w-20 aspect-square bg-black m-auto absolute -bottom-1/2"
                        style="left:calc(50% - 40px);"></div>
                </div>
                <div class="p-8">
                    <div class="text-center font-semibold text-primary">Gilan Nico Nico Nii</div>
                    <p class="text-center text-xs text-gray_custom">Cloud Computing at Google</p>
                    <div class="bg-gradient-radial w-full h-[1px] my-8"></div>
                    <div class="flex justify-between text-xs">
                        <p>Who see your profile</p>
                        <p class="font-semibold text-primary">340</p>
                    </div>
                    <div class="flex justify-between text-xs mt-4">
                        <p>View your post</p>
                        <p class="font-semibold text-primary">5.821</p>
                    </div>
                </div>
            </x-card>
            <x-card class="w-full text-primary text-xs mt-8 font-semibold sticky top-8">
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
                    <a :href="route('recruitment.create')">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.5078 13.3821H13.5078V18.3821C13.5078 18.6473 13.4025 18.9017 13.2149 19.0892C13.0274 19.2767 12.773 19.3821 12.5078 19.3821C12.2426 19.3821 11.9882 19.2767 11.8007 19.0892C11.6132 18.9017 11.5078 18.6473 11.5078 18.3821V13.3821H6.50781C6.2426 13.3821 5.98824 13.2767 5.80071 13.0892C5.61317 12.9017 5.50781 12.6473 5.50781 12.3821C5.50781 12.1169 5.61317 11.8625 5.80071 11.675C5.98824 11.4874 6.2426 11.3821 6.50781 11.3821H11.5078V6.38208C11.5078 6.11686 11.6132 5.86251 11.8007 5.67497C11.9882 5.48744 12.2426 5.38208 12.5078 5.38208C12.773 5.38208 13.0274 5.48744 13.2149 5.67497C13.4025 5.86251 13.5078 6.11686 13.5078 6.38208V11.3821H18.5078C18.773 11.3821 19.0274 11.4874 19.2149 11.675C19.4025 11.8625 19.5078 12.1169 19.5078 12.3821C19.5078 12.6473 19.4025 12.9017 19.2149 13.0892C19.0274 13.2767 18.773 13.3821 18.5078 13.3821Z"
                                fill="#016C6E" />
                        </svg>
                    </a>
                </div>
            </x-card>
        </div>
        <div class="w-2/4">
            <h1 class="font-semibold text-xl mb-4 text-primary">Recommendation Theme</h1>
            <x-card class="overflow-hidden w-full" style="padding-top:0; padding-left:0; padding-right: 0;">
                <div style="background-image:url('{{ Vite::asset('resources/images/bg-blue.png') }}')"
                    class="bg-cover h-[200px] mb-4"></div>
                <div class="pl-8 pr-16">
                    <h1 class="font-semibold">Music Event</h1>
                    <p class="mt-3 text-xs">Lorem ipsum dolor sit amet consectetur. Aliquet scelerisque a aliquet
                        interdum orci dolor eu. Gravida
                        ornare duis in viverra bibendum etiam velit. Nisl ut amet et nam. Non sed nunc est sit egestas
                        nulla
                        massa. Augue phasellus in massa tempus ipsum vulputate. Lorem ipsum dolor sit am</p>
                </div>
            </x-card>
            <h1 class="font-semibold text-xl mt-12 mb-4 text-primary">Select Theme</h1>
            <div class="grid-cols-2 grid gap-4">
                <x-card class="overflow-hidden"
                    style="padding-top:0; padding-left:0; padding-right: 0; padding-bottom:14px;">
                    <div style="background-image:url('{{ Vite::asset('resources/images/bg-blue.png') }}')"
                        class="bg-cover h-[122px] mb-4"></div>
                    <div class="px-8">
                        <h1 class="font-semibold">Music Event</h1>
                        <x-secondary-button class="w-full px-6 py-2 justify-center text-sm mt-6">Choose this theme
                        </x-secondary-button>
                    </div>
                </x-card>
                <x-card class="overflow-hidden"
                    style="padding-top:0; padding-left:0; padding-right: 0; padding-bottom:14px;">
                    <div style="background-image:url('{{ Vite::asset('resources/images/bg-blue.png') }}')"
                        class="bg-cover h-[122px] mb-4"></div>
                    <div class="px-8">
                        <h1 class="font-semibold">Job Fair Event</h1>
                        <x-secondary-button class="w-full px-6 py-2 justify-center text-sm mt-6">Choose this theme
                        </x-secondary-button>
                    </div>
                </x-card>
            </div>
        </div>
        <div class="w-1/4 mt-12">
            <div
                class="w-full h-[348px] border-2 border-primary border-dashed rounded-[20px] text-primary flex flex-col justify-center items-center">
                <svg width="68" height="68" viewBox="0 0 68 68" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M50.6113 36.7107H36.7686V50.5535C36.7686 51.2877 36.4769 51.9919 35.9577 52.5111C35.4385 53.0303 34.7343 53.322 34 53.322C33.2657 53.322 32.5615 53.0303 32.0423 52.5111C31.5231 51.9919 31.2314 51.2877 31.2314 50.5535V36.7107H17.3887C16.6544 36.7107 15.9502 36.419 15.431 35.8998C14.9118 35.3806 14.6201 34.6764 14.6201 33.9421C14.6201 33.2079 14.9118 32.5037 15.431 31.9845C15.9502 31.4653 16.6544 31.1736 17.3887 31.1736H31.2314V17.3308C31.2314 16.5965 31.5231 15.8924 32.0423 15.3731C32.5615 14.8539 33.2657 14.5623 34 14.5623C34.7343 14.5623 35.4385 14.8539 35.9577 15.3731C36.4769 15.8924 36.7686 16.5965 36.7686 17.3308V31.1736H50.6113C51.3456 31.1736 52.0498 31.4653 52.569 31.9845C53.0882 32.5037 53.3799 33.2079 53.3799 33.9421C53.3799 34.6764 53.0882 35.3806 52.569 35.8998C52.0498 36.419 51.3456 36.7107 50.6113 36.7107Z"
                        fill="#016C6E" />
                </svg>
                <span class="text-lg font-semibold">Create New Theme</span>
            </div>
        </div>
    </div>
</x-app-layout>
