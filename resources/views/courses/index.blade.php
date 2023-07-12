<x-app-layout class="py-3">
    <div class="max-w-7xl mx-auto flex gap-x-6 gap-y-6 mt-4">
        <div class="w-3/4">
            <x-card class="w-full">
                <h1 class="font-semibold text-xl mb-4">Course</h1>
                <p class="text-xs text-gray_custom">
                    Lorem ipsum dolor sit amet consectetur. Aliquet scelerisque a aliquet interdum orci dolor eu.
                    Gravida ornare duis in viverra bibendum etiam velit. Nisl ut amet et nam. Non sed nunc est sit
                    egestas nulla massa. Augue phasellus in massa tempus ipsum vulputate. Lorem ipsum dolor sit amet
                    consectetur. Aliquet scelerisque a aliquet interdum orci dolor eu. Gravida ornare duis in viverra
                    bibendum etiam velit. Nisl ut amet et nam. Non sed nunc est sit egestas nulla massa. Augue phasellus
                    in massa tempus ipsum vulputate.
                </p>
                <div class="bg-gradient-radial w-full h-[1px] my-5"></div>

                <div class="flex items-center justify-between">
                    <div class="flex gap-x-3 overflow-x-hidden">
                        <x-badge>All</x-badge>
                        <x-badge active>Recommendation</x-badge>
                        <x-badge>Design</x-badge>
                        <x-badge>Front-End</x-badge>
                    </div>
                    <div class="px-4 py-2 rounded-[100px] border-0 bg-primary_50 flex items-center">
                        <input type="search" name="search" id="search"
                            class="placeholder:text-primary border-0 outline-transparent     p-0 bg-transparent outline-0 focus:outline-0"
                            placeholder="Search">
                        <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.6 18.3179L10.3 12.0179C9.8 12.4179 9.225 12.7345 8.575 12.9679C7.925 13.2012 7.23333 13.3179 6.5 13.3179C4.68333 13.3179 3.146 12.6885 1.888 11.4299C0.63 10.1712 0.000666667 8.63387 0 6.81787C0 5.0012 0.629333 3.46387 1.888 2.20587C3.14667 0.947871 4.684 0.318538 6.5 0.317871C8.31667 0.317871 9.854 0.947204 11.112 2.20587C12.37 3.46454 12.9993 5.00187 13 6.81787C13 7.5512 12.8833 8.24287 12.65 8.89287C12.4167 9.54287 12.1 10.1179 11.7 10.6179L18 16.9179L16.6 18.3179ZM6.5 11.3179C7.75 11.3179 8.81267 10.8802 9.688 10.0049C10.5633 9.12954 11.0007 8.0672 11 6.81787C11 5.56787 10.5623 4.5052 9.687 3.62987C8.81167 2.75454 7.74933 2.3172 6.5 2.31787C5.25 2.31787 4.18733 2.75554 3.312 3.63087C2.43667 4.5062 1.99933 5.56854 2 6.81787C2 8.06787 2.43767 9.13054 3.313 10.0059C4.18833 10.8812 5.25067 11.3185 6.5 11.3179Z"
                                fill="#016C6E" />
                        </svg>

                    </div>
                </div>
                <div class="mt-6">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="w-full flex items-start justify-between mb-6">
                            <div class="flex gap-x-6 items-start">
                                <img class="w-8 aspect-square object-cover mt-1"
                                    src="{{ Vite::asset('resources/images/image-example.png') }}" alt="">
                                <div>
                                    <p class="text-black_custom font-semibold">Google I/O Extended</p>
                                    <p class="text-xs text-gray_custom font-semibold mt-2">Organizer : Google</p>
                                    <p class="text-xs text-gray_custom">23 people join this recruitment</p>
                                </div>
                            </div>
                            <x-secondary-button class="text-xs px-6 py-3 self-center">Enroll Now</x-secondary-button>
                        </div>
                    @endfor
                </div>
            </x-card>
        </div>
        <div class="w-1/4">
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
        </div>
    </div>
</x-app-layout>
