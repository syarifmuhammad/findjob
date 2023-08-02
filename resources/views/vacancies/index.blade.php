<x-app-layout class="py-3">
    <div class="max-w-7xl mx-auto flex gap-x-6 gap-y-6 mt-4">
        <div class="w-1/4">
            <x-card class="w-full font-semibold sticky top-8">
                <div class="flex gap-x-4">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5.06177 21.3198V5.31983C5.06177 4.76983 5.25777 4.29883 5.64977 3.90683C6.04177 3.51483 6.51243 3.31916 7.06177 3.31983H17.0618C17.6118 3.31983 18.0828 3.51583 18.4748 3.90783C18.8668 4.29983 19.0624 4.77049 19.0618 5.31983V21.3198L12.0618 18.3198L5.06177 21.3198Z"
                            fill="#2F2F2F" />
                    </svg>
                    <span class="font-semibold text-custom_black">My Job</span>

                </div>
                <div class="flex gap-x-4 mt-4">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_134_402)">
                            <path
                                d="M15.0619 19.3198C15.062 19.8244 14.8715 20.3104 14.5284 20.6804C14.1853 21.0504 13.715 21.277 13.2119 21.3148L13.0619 21.3198H11.0619C10.5573 21.32 10.0713 21.1294 9.70131 20.7863C9.33133 20.4432 9.1047 19.973 9.06686 19.4698L9.06186 19.3198H15.0619ZM12.0619 2.31982C13.8768 2.31979 15.6209 3.02472 16.9261 4.2859C18.2313 5.54708 18.9956 7.26591 19.0579 9.07982L19.0619 9.31982V13.0838L20.8839 16.7278C20.9634 16.8868 21.0032 17.0627 20.9998 17.2405C20.9965 17.4182 20.9501 17.5925 20.8647 17.7484C20.7793 17.9043 20.6574 18.0372 20.5093 18.1357C20.3613 18.2341 20.1917 18.2953 20.0149 18.3138L19.8999 18.3198H4.22386C4.04602 18.3199 3.87083 18.2768 3.71328 18.1943C3.55574 18.1118 3.42054 17.9924 3.31928 17.8462C3.21802 17.7 3.15371 17.5314 3.13186 17.3549C3.11002 17.1784 3.13129 16.9993 3.19386 16.8328L3.23986 16.7278L5.06186 13.0838V9.31982C5.06186 7.46331 5.79936 5.68283 7.11211 4.37008C8.42487 3.05732 10.2053 2.31982 12.0619 2.31982Z"
                                fill="#2F2F2F" />
                        </g>
                        <defs>
                            <clipPath id="clip0_134_402">
                                <rect width="24" height="24" fill="white"
                                    transform="translate(0.0617676 0.319824)" />
                            </clipPath>
                        </defs>
                    </svg>

                    <span class="font-semibold text-custom_black">Job Notification</span>

                </div>
                <div class="flex gap-x-4 mt-4">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5.06177 21.3198C4.51177 21.3198 4.04077 21.1238 3.64877 20.7318C3.25677 20.3398 3.0611 19.8692 3.06177 19.3198V5.31983C3.06177 4.76983 3.25777 4.29883 3.64977 3.90683C4.04177 3.51483 4.51244 3.31916 5.06177 3.31983H19.0618C19.6118 3.31983 20.0828 3.51583 20.4748 3.90783C20.8668 4.29983 21.0624 4.77049 21.0618 5.31983V19.3198C21.0618 19.8698 20.8658 20.3408 20.4738 20.7328C20.0818 21.1248 19.6111 21.3205 19.0618 21.3198H5.06177ZM12.0618 12.3198L14.5618 10.8198L17.0618 12.3198V5.31983H12.0618V12.3198Z"
                            fill="#2F2F2F" />
                    </svg>


                    <span class="font-semibold text-custom_black">Guide for Job Seekers</span>

                </div>
            </x-card>
        </div>
        <div class="w-2/4">
            <x-card>
                <h1 class="font-semibold text-xl mb-8">Recommendation Job</h1>
                @for ($i = 0; $i < 3; $i++)
                    <div class="w-full flex items-start justify-between mb-6">
                        <div class="flex gap-x-6 items-start">
                            <img class="w-8 aspect-square object-cover mt-1"
                                src="{{ Vite::asset('resources/images/image-example.png') }}" alt="">
                            <div>
                                <p class="text-primary font-semibold">Cloud Solution Architect - AWS</p>
                                <p class="text-xs text-gray_custom font-semibold">Amazon</p>
                                <p class="mt-2 text-xs text-gray_custom">Washington, America</p>
                            </div>
                        </div>
                        <x-secondary-button class="text-xs px-6 py-3 self-center">Apply Now</x-secondary-button>
                    </div>
                @endfor
            </x-card>
        </div>
        <div class="w-1/4 flex justify-center">
            <div>
                <x-application-logo></x-application-logo>
                <p class="text-gray_custom text-xs">
                    FindJob Coorporation made by<br>Marzuki Corp. © 2023
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
