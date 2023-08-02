<x-app-layout class="py-3">
    <div class="max-w-7xl mx-auto flex gap-x-6 gap-y-6 mt-4 mb-6">
        <div class="w-3/4">
            <x-card class="w-full">
                <h1 class="font-semibold text-xl mb-4">Protect Against Cyberattack</h1>
                <div class="flex justify-center items-center">
                <img class="max-w-full aspect-video object-cover mt-1 rounded-2xl"
                                    src="{{ Vite::asset('resources/images/course-example.jpeg') }}" alt=""></div>
                <div class="max-w-full py-8">
                    <p class="text-base text-gray_custom text-justify">
                    Kursus <span class="text-primary">"Protect Against Cyberattack"</span> adalah kursus yang dirancang untuk memberikan pemahaman mendalam tentang ancaman siber dan cara melindungi diri dan organisasi dari serangan siber. Dalam dunia yang semakin terhubung digital, serangan siber telah menjadi ancaman serius bagi individu, perusahaan, dan institusi di seluruh dunia. Kursus ini bertujuan untuk memberikan pengetahuan dan keterampilan yang diperlukan untuk mengidentifikasi, mencegah, dan mengatasi berbagai jenis serangan siber.
                    </p>
                    <h2 class="text-base text-gray_custom font-semibold mt-4 mb-3"> Isi Kursus:</h2>
                        <ul class="list-disc pl-6 text-gray_custom">
                            <li>Pengenalan Cybersecurity</li>
                            <li>Konsep Keamanan Digital</li>
                            <li>Identifikasi Serangan</li>
                            <li>Pencegahan dan Perlindungan</li>
                            <li>Manajemen Insiden</li>
                            <li>Aspek Hukum dan Etika</li>
                            <li>Keamanan Jaringan dan Aplikasi</li>
                        </ul>
                </div>
                <div class="bg-gradient-radial w-full h-[1px] my-5"></div>

                <div class="flex items-center justify-end">
                         <x-secondary-button class="px-6 py-2" :default="false">
                            {{ __('Kembali') }}
                        </x-secondary-button>
                        <x-primary-button class="px-6 py-2 mx-1" :default="false">
                            {{ __('Mulai') }}
                        </x-primary-button>
                        
                </div>
        
            </x-card>
        </div>
        <div class="w-1/4">
            @auth
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
