<x-app-layout class="py-3">
    <div class="max-w-7xl mx-auto flex gap-x-6 gap-y-6 mt-4">
        @auth
            <div class="w-3/12">
                <x-card class="overflow-hidden w-full" style="padding:0;">
                    <div style="background-image:url('{{ Vite::asset('resources/images/bg-auth.svg') }}')"
                        class="bg-cover h-20 relative mb-14">
                        <div class="rounded-full w-20 aspect-square bg-black m-auto absolute -bottom-1/2"
                            style="left:calc(50% - 40px);"></div>
                    </div>
                    <div class="p-8">
                        <div class="text-center font-semibold text-primary">{{ Auth::user()->name }}</div>
                        <p class="text-center text-xs text-gray_custom">{{ Auth::user()->headline }}</p>
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
                <x-card class="w-full mt-8">
                    <h1 class="text-primary font-medium">My Companies</h1>
                    <div class="mt-4 flex flex-col gap-y-4 divide-y">
                        @foreach ($my_companies as $my_company)
                            <div>
                                <a class="cursor-pointer" href="{{ route('companies.admin.index', $my_company->id) }}">
                                    <img class="w-[100px]" src="{{ Storage::url($my_company->logo) }}" alt="">
                                </a>
                                <a class="cursor-pointer" href="{{ route('companies.admin.index', $my_company->id) }}">
                                    <p class="mt-3 font-semibold text-lg hover:underline">{{ $my_company->name }}</p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('companies.create') }}">
                            <x-primary-button class="px-4 py-2 text-sm rounded-3xl flex items-center gap-x-4">Make Company
                                <svg width="20" height="20" viewBox="0 0 25 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.5078 13.3821H13.5078V18.3821C13.5078 18.6473 13.4025 18.9017 13.2149 19.0892C13.0274 19.2767 12.773 19.3821 12.5078 19.3821C12.2426 19.3821 11.9882 19.2767 11.8007 19.0892C11.6132 18.9017 11.5078 18.6473 11.5078 18.3821V13.3821H6.50781C6.2426 13.3821 5.98824 13.2767 5.80071 13.0892C5.61317 12.9017 5.50781 12.6473 5.50781 12.3821C5.50781 12.1169 5.61317 11.8625 5.80071 11.675C5.98824 11.4874 6.2426 11.3821 6.50781 11.3821H11.5078V6.38208C11.5078 6.11686 11.6132 5.86251 11.8007 5.67497C11.9882 5.48744 12.2426 5.38208 12.5078 5.38208C12.773 5.38208 13.0274 5.48744 13.2149 5.67497C13.4025 5.86251 13.5078 6.11686 13.5078 6.38208V11.3821H18.5078C18.773 11.3821 19.0274 11.4874 19.2149 11.675C19.4025 11.8625 19.5078 12.1169 19.5078 12.3821C19.5078 12.6473 19.4025 12.9017 19.2149 13.0892C19.0274 13.2767 18.773 13.3821 18.5078 13.3821Z"
                                        fill="#ffffff" />
                                </svg></x-primary-button>
                        </a>
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
                </x-card>
            </div>
        @endauth
        <div class="{{ Auth::check() ? 'w-6/12' : 'w-9/12' }} self-start">
            @auth
                <x-card class="flex gap-x-4 items-start">
                    <div class="w-14 bg-black aspect-square rounded-full"></div>
                    <div class="w-full">
                        <input
                            class="placeholder:text-xs placeholder:text-gray_custom rounded-[100px] w-full py-3 px-4 border border-primary"
                            type="text" name="status" placeholder="Write something...">
                        <div class="mt-6 flex justify-between">
                            <div class="flex items-center gap-x-2">
                                <svg width="22" height="17" viewBox="0 0 22 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.5 2.47119C0.5 1.87445 0.737053 1.30216 1.15901 0.880201C1.58097 0.458245 2.15326 0.221191 2.75 0.221191H19.25C19.8467 0.221191 20.419 0.458245 20.841 0.880201C21.2629 1.30216 21.5 1.87445 21.5 2.47119V14.4712C21.5 15.0679 21.2629 15.6402 20.841 16.0622C20.419 16.4841 19.8467 16.7212 19.25 16.7212H2.75C2.15326 16.7212 1.58097 16.4841 1.15901 16.0622C0.737053 15.6402 0.5 15.0679 0.5 14.4712V2.47119ZM2 12.5312V14.4712C2 14.8852 2.336 15.2212 2.75 15.2212H19.25C19.4489 15.2212 19.6397 15.1422 19.7803 15.0015C19.921 14.8609 20 14.6701 20 14.4712V12.5312L17.31 9.84219C17.0287 9.56129 16.6475 9.40351 16.25 9.40351C15.8525 9.40351 15.4713 9.56129 15.19 9.84219L14.31 10.7212L15.28 11.6912C15.3537 11.7599 15.4128 11.8427 15.4538 11.9347C15.4948 12.0267 15.5168 12.126 15.5186 12.2267C15.5204 12.3274 15.5018 12.4274 15.4641 12.5208C15.4264 12.6142 15.3703 12.699 15.299 12.7702C15.2278 12.8414 15.143 12.8976 15.0496 12.9353C14.9562 12.973 14.8562 12.9916 14.7555 12.9898C14.6548 12.988 14.5555 12.966 14.4635 12.925C14.3715 12.884 14.2887 12.8249 14.22 12.7512L9.06 7.59219C8.77875 7.31129 8.3975 7.15351 8 7.15351C7.6025 7.15351 7.22125 7.31129 6.94 7.59219L2 12.5322V12.5312ZM12.125 4.72119C12.125 4.42282 12.2435 4.13667 12.4545 3.9257C12.6655 3.71472 12.9516 3.59619 13.25 3.59619C13.5484 3.59619 13.8345 3.71472 14.0455 3.9257C14.2565 4.13667 14.375 4.42282 14.375 4.72119C14.375 5.01956 14.2565 5.30571 14.0455 5.51669C13.8345 5.72766 13.5484 5.84619 13.25 5.84619C12.9516 5.84619 12.6655 5.72766 12.4545 5.51669C12.2435 5.30571 12.125 5.01956 12.125 4.72119Z"
                                        fill="#378FE9" />
                                </svg>
                                <p class="text-xs font-semibold text-gray_custom">Photo</p>
                            </div>
                            <div class="flex items-center gap-x-2">
                                <svg width="20" height="17" viewBox="0 0 20 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.75 15.9712C19.75 16.1701 19.671 16.3609 19.5303 16.5015C19.3897 16.6422 19.1989 16.7212 19 16.7212H1C0.801088 16.7212 0.610322 16.6422 0.46967 16.5015C0.329018 16.3609 0.25 16.1701 0.25 15.9712C0.25 15.7723 0.329018 15.5815 0.46967 15.4409C0.610322 15.3002 0.801088 15.2212 1 15.2212H19C19.1989 15.2212 19.3897 15.3002 19.5303 15.4409C19.671 15.5815 19.75 15.7723 19.75 15.9712ZM19.75 1.72119V12.2212C19.75 12.619 19.592 13.0005 19.3107 13.2819C19.0294 13.5632 18.6478 13.7212 18.25 13.7212H1.75C1.35218 13.7212 0.970644 13.5632 0.68934 13.2819C0.408035 13.0005 0.25 12.619 0.25 12.2212V1.72119C0.25 1.32337 0.408035 0.941836 0.68934 0.660531C0.970644 0.379227 1.35218 0.221191 1.75 0.221191H18.25C18.6478 0.221191 19.0294 0.379227 19.3107 0.660531C19.592 0.941836 19.75 1.32337 19.75 1.72119ZM13.375 6.97119C13.375 6.84496 13.3431 6.72079 13.2823 6.61017C13.2215 6.49955 13.1337 6.40607 13.0272 6.33838L8.90219 3.71338C8.78881 3.64135 8.65816 3.60108 8.5239 3.5968C8.38964 3.59252 8.25669 3.62438 8.13895 3.68905C8.02121 3.75371 7.923 3.84881 7.85458 3.96441C7.78616 4.08001 7.75004 4.21186 7.75 4.34619V9.59619C7.75004 9.73052 7.78616 9.86237 7.85458 9.97797C7.923 10.0936 8.02121 10.1887 8.13895 10.2533C8.25669 10.318 8.38964 10.3499 8.5239 10.3456C8.65816 10.3413 8.78881 10.301 8.90219 10.229L13.0272 7.604C13.1337 7.53631 13.2215 7.44283 13.2823 7.33221C13.3431 7.22159 13.375 7.09742 13.375 6.97119Z"
                                        fill="#5F9B41" />
                                </svg>

                                <p class="text-xs font-semibold text-gray_custom">Video</p>
                            </div>
                            <div class="flex items-center gap-x-2">
                                <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_139_359)">
                                        <path
                                            d="M10.1518 10.7173C10.7768 10.7173 11.3358 10.2333 11.3358 9.53725C11.3358 8.70525 10.8088 8.30725 10.1758 8.30725C9.58981 8.30725 9.00781 8.69425 9.00781 9.51725C9.00781 10.3343 9.55081 10.7173 10.1518 10.7173Z"
                                            fill="#C37D16" />
                                        <path
                                            d="M4.25 0.471191C4.38261 0.471191 4.50979 0.52387 4.60355 0.617638C4.69732 0.711406 4.75 0.838583 4.75 0.971191V1.47119H12.75V0.971191C12.75 0.838583 12.8027 0.711406 12.8964 0.617638C12.9902 0.52387 13.1174 0.471191 13.25 0.471191C13.3826 0.471191 13.5098 0.52387 13.6036 0.617638C13.6973 0.711406 13.75 0.838583 13.75 0.971191V1.47119H14.75C15.2804 1.47119 15.7891 1.68191 16.1642 2.05698C16.5393 2.43205 16.75 2.94076 16.75 3.47119V14.4712C16.75 15.0016 16.5393 15.5103 16.1642 15.8854C15.7891 16.2605 15.2804 16.4712 14.75 16.4712H2.75C2.21957 16.4712 1.71086 16.2605 1.33579 15.8854C0.960714 15.5103 0.75 15.0016 0.75 14.4712V3.47119C0.75 2.94076 0.960714 2.43205 1.33579 2.05698C1.71086 1.68191 2.21957 1.47119 2.75 1.47119H3.75V0.971191C3.75 0.838583 3.80268 0.711406 3.89645 0.617638C3.99021 0.52387 4.11739 0.471191 4.25 0.471191ZM14.204 3.47119H3.295C2.995 3.47119 2.75 3.69519 2.75 3.97119V4.97119C2.75 5.24719 2.994 5.47119 3.295 5.47119H14.205C14.505 5.47119 14.75 5.24719 14.75 4.97119V3.97119C14.75 3.69519 14.506 3.47119 14.204 3.47119ZM10.086 13.2612C11.344 13.2612 12.086 12.1942 12.086 10.3892C12.086 8.45519 11.305 7.72119 10.133 7.72119C9.207 7.72119 8.336 8.39319 8.336 9.53019C8.336 10.6902 9.16 11.3002 10.012 11.3002C10.758 11.3002 11.242 10.9242 11.395 10.5102H11.422C11.418 11.8262 10.961 12.6742 10.117 12.6742C9.453 12.6742 9.109 12.2242 9.067 11.8542H8.383C8.43 12.4942 8.977 13.2602 10.086 13.2602V13.2612ZM7.196 7.82619H6.563C6.10933 8.0675 5.67084 8.33634 5.25 8.63119V9.32619C5.625 9.06919 6.219 8.70619 6.508 8.54919H6.52V13.1592H7.195V7.82519L7.196 7.82619Z"
                                            fill="#C37D16" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_139_359">
                                            <rect width="16" height="16" fill="white"
                                                transform="translate(0.75 0.471191)" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                <p class="text-xs font-semibold text-gray_custom">Event</p>
                            </div>
                            <div class="flex items-center gap-x-2">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.75 3.47119H5.75C4.65 3.47119 3.75 4.37119 3.75 5.47119V19.4712C3.75 20.5712 4.65 21.4712 5.75 21.4712H19.75C20.85 21.4712 21.75 20.5712 21.75 19.4712V5.47119C21.75 4.37119 20.85 3.47119 19.75 3.47119ZM13.75 17.4712H8.75C8.2 17.4712 7.75 17.0212 7.75 16.4712C7.75 15.9212 8.2 15.4712 8.75 15.4712H13.75C14.3 15.4712 14.75 15.9212 14.75 16.4712C14.75 17.0212 14.3 17.4712 13.75 17.4712ZM16.75 13.4712H8.75C8.2 13.4712 7.75 13.0212 7.75 12.4712C7.75 11.9212 8.2 11.4712 8.75 11.4712H16.75C17.3 11.4712 17.75 11.9212 17.75 12.4712C17.75 13.0212 17.3 13.4712 16.75 13.4712ZM16.75 9.47119H8.75C8.2 9.47119 7.75 9.02119 7.75 8.47119C7.75 7.92119 8.2 7.47119 8.75 7.47119H16.75C17.3 7.47119 17.75 7.92119 17.75 8.47119C17.75 9.02119 17.3 9.47119 16.75 9.47119Z"
                                        fill="#E16745" />
                                </svg>

                                <p class="text-xs font-semibold text-gray_custom">Article</p>
                            </div>
                        </div>
                    </div>
                </x-card>
                <div class="bg-gradient-radial w-full h-[1px] my-5"></div>
            @endauth
            <x-card class="mb-6 overflow-hidden" style="padding:0">
                <div class="mb-2 pt-8 px-8">
                    <h1 class="font-semibold text-xl">Job Recommendation</h1>
                    {{-- <p class="text-gray-400">Based on your profile and search history</p> --}}
                </div>

                <div class="flex flex-col divide-y px-8">
                    @foreach ($recommended_vacancies as $rv)
                        <a href="{{ route('vacancies.collection', ['vacancy_id' => $rv->id]) }}"
                            class="w-full flex items-start justify-between py-6 cursor-pointer group">
                            <div class="flex gap-x-6 items-start">
                                <img class="w-8 aspect-square object-cover mt-1"
                                    src="{{ Storage::url($rv->company->logo) }}" alt="">
                                <div>
                                    <p class="text-primary font-semibold group-hover:underline">{{ $rv->job_title }}
                                    </p>
                                    <p class="text-xs text-gray_custom font-semibold">{{ $rv->company->name }}</p>
                                    <p class="mt-2 text-xs text-gray_custom">{{ $rv->location }}</p>
                                </div>
                            </div>
                            <x-secondary-button class="text-xs px-6 py-3 self-center">Apply Now</x-secondary-button>
                        </a>
                    @endforeach
                </div>
                <a href="{{ route('vacancies.collection') }}"
                    class="block border-t py-4 text-center w-full hover:bg-gray_soft cursor-pointer">Show All</a>
            </x-card>
            <x-card class="mt-5">
                <h1 class="font-semibold text-xl mb-8">Recommendation Course</h1>
                @for ($i = 0; $i < 3; $i++)
                    <div class="w-full flex items-start justify-between mb-6">
                        <div class="flex gap-x-6 items-start">
                            <img class="w-8 aspect-square object-cover mt-2"
                                src="{{ Vite::asset('resources/images/image-example.png') }}" alt="">
                            <div>
                                <p class="font-semibold">Cloud Computing (CC)</p>
                                <p class="text-xs text-gray_custom mt-1">Topic: API, Database, Knowledge, Queries,
                                    Testing</p>
                                <p class="text-xs text-gray_custom">2,4 M people enroll this course</p>
                            </div>
                        </div>
                        <x-secondary-button class="text-xs px-6 py-3 self-center">Enroll Now</x-secondary-button>
                    </div>
                @endfor
            </x-card>
            <div class="bg-gradient-radial w-full h-[1px] my-5"></div>
            @for ($i = 0; $i < 3; $i++)
                <x-card class="mb-5" style="padding-top:0; padding-right: 0; padding-left: 0;">
                    <div class="flex items-center justify-between px-8 pt-8 pb-4">
                        <div class="flex gap-x-6 items-start self-start">
                            <img class="w-8 aspect-square rounded-full object-cover mt-1"
                                src="{{ Vite::asset('resources/images/image-example.png') }}" alt="">
                            <div>
                                <p class="font-semibold text-black_custom">Jefri Achmad Maulana</p>
                                <p class="text-xs text-gray_custom">Undergraduate at Institut Teknologi Telkom
                                    Surabaya</p>
                                <div class="flex items-center mt-1">
                                    <p class="text-xs text-gray_custom">
                                        6 hour ·
                                        <svg class="inline" width="16" height="17" viewBox="0 0 16 17"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.00016 1.50244C4.32416 1.50244 1.3335 4.49311 1.3335 8.16911C1.3335 11.8451 4.32416 14.8358 8.00016 14.8358C11.6762 14.8358 14.6668 11.8451 14.6668 8.16911C14.6668 4.49311 11.6762 1.50244 8.00016 1.50244ZM2.66683 8.16911C2.66683 7.56977 2.77083 6.99444 2.95416 6.45644L4.00016 7.50244L5.3335 8.83577V10.1691L6.66683 11.5024L7.3335 12.1691V13.4564C4.7075 13.1264 2.66683 10.8838 2.66683 8.16911ZM12.2202 11.4178C11.7848 11.0671 11.1248 10.8358 10.6668 10.8358V10.1691C10.6668 9.81549 10.5264 9.47635 10.2763 9.2263C10.0263 8.97625 9.68712 8.83577 9.3335 8.83577H6.66683V6.83577C7.02045 6.83577 7.35959 6.6953 7.60964 6.44525C7.85969 6.1952 8.00016 5.85606 8.00016 5.50244V4.83577H8.66683C9.02045 4.83577 9.35959 4.6953 9.60964 4.44525C9.85969 4.1952 10.0002 3.85606 10.0002 3.50244V3.22844C11.9522 4.02111 13.3335 5.93577 13.3335 8.16911C13.3334 9.34557 12.9417 10.4885 12.2202 11.4178Z"
                                                fill="#848484" />
                                        </svg>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.6174 6.01613C14.6175 6.26141 14.5693 6.50431 14.4755 6.73095C14.3817 6.95759 14.2442 7.16354 14.0708 7.33704C13.8974 7.51053 13.6915 7.64818 13.465 7.74212C13.2384 7.83606 12.9955 7.88445 12.7502 7.88453C12.505 7.8846 12.2621 7.83637 12.0354 7.74258C11.8088 7.64878 11.6028 7.51127 11.4293 7.33788C11.2558 7.1645 11.1182 6.95864 11.0242 6.73206C10.9303 6.50547 10.8819 6.26261 10.8818 6.01733C10.8817 5.52195 11.0783 5.04681 11.4285 4.69642C11.7786 4.34602 12.2537 4.14909 12.749 4.14893C13.2444 4.14877 13.7196 4.3454 14.0699 4.69557C14.4203 5.04574 14.6173 5.52075 14.6174 6.01613Z"
                                fill="#2F2F2F" />
                            <path
                                d="M12.75 14.2937C13.7812 14.2937 14.6172 13.4578 14.6172 12.4265C14.6172 11.3953 13.7812 10.5593 12.75 10.5593C11.7188 10.5593 10.8828 11.3953 10.8828 12.4265C10.8828 13.4578 11.7188 14.2937 12.75 14.2937Z"
                                fill="#2F2F2F" />
                            <path
                                d="M12.75 20.7053C13.7812 20.7053 14.6172 19.8694 14.6172 18.8381C14.6172 17.8069 13.7812 16.9709 12.75 16.9709C11.7188 16.9709 10.8828 17.8069 10.8828 18.8381C10.8828 19.8694 11.7188 20.7053 12.75 20.7053Z"
                                fill="#2F2F2F" />
                        </svg>

                    </div>
                    <p class="text-xs text-gray_custom px-8">
                        Lorem ipsum dolor sit amet consectetur. Aliquet scelerisque a aliquet interdum orci dolor eu.
                        Gravida ornare duis in viverra bibendum etiam velit. Nisl ut amet et nam. Non sed nunc est sit
                        egestas nulla massa. Augue phasellus in massa tempus ipsum vulputate.
                    </p>
                    <div class="w-full bg-black_custom mt-6">
                        <img src="{{ Vite::asset('resources/images/post-example.png') }}" class="w-full"
                            alt="post">
                    </div>
                    <div class="flex justify-between text-gray_custom text-xs py-3 px-12">
                        <span>120 Likes</span>
                        <span>23 Comment · 4 Share</span>
                    </div>
                    <div class="bg-gradient-radial w-full h-[1px] mb-3"></div>
                    <div class="flex justify-between px-12 mt-3">
                        <div class="text-gray_custom flex gap-x-2 items-center cursor-pointer">
                            <svg width="28" height="29" viewBox="0 0 33 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.16683 11.9999V27.9999H1.8335V11.9999H7.16683ZM12.5002 27.9999C11.7929 27.9999 11.1146 27.719 10.6145 27.2189C10.1144 26.7188 9.8335 26.0405 9.8335 25.3333V11.9999C9.8335 11.2666 10.1268 10.5999 10.6202 10.1199L19.3935 1.33325L20.8068 2.74659C21.1668 3.10659 21.3935 3.59992 21.3935 4.14658L21.3535 4.57325L20.0868 10.6666H28.5002C29.2074 10.6666 29.8857 10.9475 30.3858 11.4476C30.8859 11.9477 31.1668 12.626 31.1668 13.3333V15.9999C31.1668 16.3466 31.1002 16.6666 30.9802 16.9733L26.9535 26.3733C26.5535 27.3333 25.6068 27.9999 24.5002 27.9999H12.5002ZM12.5002 25.3333H24.5402L28.5002 15.9999V13.3333H16.7802L18.2868 6.23992L12.5002 12.0399V25.3333Z"
                                    fill="#848484" />
                            </svg>
                            Like
                        </div>
                        <div class="text-gray_custom flex gap-x-2 items-center cursor-pointer">
                            <svg width="28" height="29" viewBox="0 0 33 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M29.8198 5.33341C29.8198 3.86675 28.6332 2.66675 27.1665 2.66675H5.83317C4.3665 2.66675 3.1665 3.86675 3.1665 5.33341V21.3334C3.1665 22.8001 4.3665 24.0001 5.83317 24.0001H24.4998L29.8332 29.3334L29.8198 5.33341ZM27.1665 5.33341V22.8934L25.6065 21.3334H5.83317V5.33341H27.1665ZM8.49984 16.0001H24.4998V18.6667H8.49984V16.0001ZM8.49984 12.0001H24.4998V14.6667H8.49984V12.0001ZM8.49984 8.00008H24.4998V10.6667H8.49984V8.00008Z"
                                    fill="#848484" />
                            </svg>
                            Comment
                        </div>
                        <div class="text-gray_custom flex gap-x-2 items-center cursor-pointer">
                            <svg width="28" height="29" viewBox="0 0 33 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M19.4999 7.33343C19.5 6.32101 19.8546 5.34058 20.5021 4.56231C21.1496 3.78405 22.0492 3.25707 23.0447 3.07284C24.0402 2.88862 25.0688 3.05878 25.952 3.55379C26.8351 4.0488 27.5171 4.83741 27.8795 5.78275C28.2419 6.72808 28.2618 7.77047 27.9359 8.72898C27.6099 9.68749 26.9586 10.5016 26.0951 11.03C25.2315 11.5585 24.2102 11.7679 23.2083 11.6219C22.2065 11.4759 21.2874 10.9837 20.6106 10.2308L16.9879 12.2068L12.9346 14.5228C13.5013 15.5202 13.6499 16.7014 13.3479 17.8081L20.6106 21.7694C21.3211 20.98 22.2969 20.479 23.3525 20.3616C24.4081 20.2442 25.4701 20.5186 26.3367 21.1326C27.2033 21.7467 27.8142 22.6576 28.0534 23.6925C28.2926 24.7273 28.1435 25.8139 27.6342 26.746C27.125 27.6781 26.2911 28.3907 25.2911 28.7485C24.291 29.1062 23.1944 29.0843 22.2095 28.6867C21.2246 28.2892 20.42 27.5437 19.9485 26.592C19.477 25.6403 19.3714 24.5485 19.6519 23.5241L12.3892 19.5641C11.8357 20.1797 11.1175 20.6239 10.3194 20.8441C9.52139 21.0643 8.67697 21.0513 7.88609 20.8066C7.09521 20.5619 6.39096 20.0958 5.85669 19.4634C5.32242 18.8311 4.98048 18.0589 4.87133 17.2382C4.76218 16.4176 4.89039 15.5828 5.24078 14.8328C5.59118 14.0827 6.1491 13.4487 6.84853 13.0058C7.54796 12.5629 8.35962 12.3297 9.18748 12.3336C10.0153 12.3375 10.8247 12.5785 11.5199 13.0281L16.0132 10.4601L19.6519 8.47476C19.5508 8.10276 19.4996 7.71893 19.4999 7.33343ZM23.8332 5.00009C23.5268 5.00009 23.2234 5.06045 22.9403 5.17771C22.6572 5.29497 22.4 5.46684 22.1833 5.68351C21.9667 5.90018 21.7948 6.1574 21.6775 6.4405C21.5603 6.72359 21.4999 7.02701 21.4999 7.33343C21.4999 7.63984 21.5603 7.94326 21.6775 8.22635C21.7948 8.50945 21.9667 8.76667 22.1833 8.98334C22.4 9.20001 22.6572 9.37188 22.9403 9.48914C23.2234 9.60641 23.5268 9.66676 23.8332 9.66676C24.4521 9.66676 25.0456 9.42093 25.4832 8.98334C25.9207 8.54576 26.1666 7.95226 26.1666 7.33343C26.1666 6.71459 25.9207 6.12109 25.4832 5.68351C25.0456 5.24592 24.4521 5.00009 23.8332 5.00009ZM9.16658 14.3334C8.54774 14.3334 7.95425 14.5793 7.51666 15.0168C7.07908 15.4544 6.83325 16.0479 6.83325 16.6668C6.83325 17.2856 7.07908 17.8791 7.51666 18.3167C7.95425 18.7543 8.54774 19.0001 9.16658 19.0001C9.78542 19.0001 10.3789 18.7543 10.8165 18.3167C11.2541 17.8791 11.4999 17.2856 11.4999 16.6668C11.4999 16.0479 11.2541 15.4544 10.8165 15.0168C10.3789 14.5793 9.78542 14.3334 9.16658 14.3334ZM21.4999 24.6668C21.4999 24.0479 21.7457 23.4544 22.1833 23.0168C22.6209 22.5793 23.2144 22.3334 23.8332 22.3334C24.4521 22.3334 25.0456 22.5793 25.4832 23.0168C25.9207 23.4544 26.1666 24.0479 26.1666 24.6668C26.1666 25.2856 25.9207 25.8791 25.4832 26.3167C25.0456 26.7543 24.4521 27.0001 23.8332 27.0001C23.2144 27.0001 22.6209 26.7543 22.1833 26.3167C21.7457 25.8791 21.4999 25.2856 21.4999 24.6668Z"
                                    fill="#848484" />
                            </svg>
                            Share
                        </div>
                    </div>
                </x-card>
            @endfor
        </div>
        <div class="w-3/12">
            <x-card class="w-full sticky top-8 overflow-y-auto max-h-[calc(100vh-4rem)]">
                <h1 class="font-semibold mb-8">Follow for more</h1>
                @foreach ($follow as $f)
                    <a href="{{ route('profile.index', $f->slug) }}" class="w-full flex flex-col items-start justify-between mb-6 group">
                        <div class="flex gap-x-6 items-start">
                            <img class="w-6 aspect-square object-cover mt-1"
                                src="{{ Storage::url($f->profile_picture) }}" alt="">
                            <div>
                                <p class="text-black_custom font-semibold group-hover:underline">{{ $f->name }}</p>
                                <p class="mt-1 text-xs text-gray_custom">{{ $f->headline }}</p>
                                <x-secondary-button class="text-xs px-6 py-2 self-center mt-3"
                                    style="border-radius: 100px;">Follow</x-secondary-button>
                            </div>
                        </div>
                    </a>
                @endforeach
            </x-card>
        </div>
    </div>
</x-app-layout>
