<x-app-layout class="py-3">
    <div class="max-w-7xl mx-auto flex gap-x-16 gap-y-6 mt-4">
        <div class="w-1/4">
            <x-card class="w-full font-semibold sticky top-8">
                <div class="flex gap-x-4">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5.06177 21.3198C4.51177 21.3198 4.04077 21.1238 3.64877 20.7318C3.25677 20.3398 3.0611 19.8692 3.06177 19.3198V5.31983C3.06177 4.76983 3.25777 4.29883 3.64977 3.90683C4.04177 3.51483 4.51244 3.31916 5.06177 3.31983H19.0618C19.6118 3.31983 20.0828 3.51583 20.4748 3.90783C20.8668 4.29983 21.0624 4.77049 21.0618 5.31983V19.3198C21.0618 19.8698 20.8658 20.3408 20.4738 20.7328C20.0818 21.1248 19.6111 21.3205 19.0618 21.3198H5.06177ZM12.0618 12.3198L14.5618 10.8198L17.0618 12.3198V5.31983H12.0618V12.3198Z"
                            fill="#2F2F2F" />
                    </svg>


                    <a href="{{ route('vacancies.index') }}" class="font-semibold text-custom_black underline border-primary">All Vacancies</a>

                </div>
                <div class="flex gap-x-4 mt-4">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5.06177 21.3198V5.31983C5.06177 4.76983 5.25777 4.29883 5.64977 3.90683C6.04177 3.51483 6.51243 3.31916 7.06177 3.31983H17.0618C17.6118 3.31983 18.0828 3.51583 18.4748 3.90783C18.8668 4.29983 19.0624 4.77049 19.0618 5.31983V21.3198L12.0618 18.3198L5.06177 21.3198Z"
                            fill="#2F2F2F" />
                    </svg>
                    <a href="{{ route('vacancies.my_vacancies') }}" class="font-semibold text-custom_black">My Vacancies</a>

                </div>
            </x-card>
        </div>
        <div class="w-2/4">
            <x-card class="mb-6 overflow-hidden" style="padding:0">
                <div class="mb-2 pt-8 px-8">
                    <h1 class="font-semibold text-xl">Recommended for you</h1>
                    <p class="text-gray-400">Based on your profile and search history</p>
                </div>

                <div class="flex flex-col divide-y px-8">
                    @foreach ($recommended as $r)
                        <a href="{{ route('vacancies.collection', ['vacancy_id' => $r->id]) }}" class="w-full flex items-start justify-between py-6 cursor-pointer group">
                            <div class="flex gap-x-6 items-start">
                                <img class="w-8 aspect-square object-cover mt-1"
                                    src="{{ Storage::url($r->company->logo) }}" alt="">
                                <div>
                                    <p class="text-primary font-semibold group-hover:underline">{{ $r->job_title }}</p>
                                    <p class="text-xs text-gray_custom font-semibold">{{ $r->company->name }}</p>
                                    <p class="mt-2 text-xs text-gray_custom">{{ $r->location }}</p>
                                </div>
                            </div>
                            {{-- <x-secondary-button class="text-xs px-6 py-3 self-center">Apply Now</x-secondary-button> --}}
                        </a>
                    @endforeach
                </div>
                <a href="{{ route('vacancies.collection') }}" class="block border-t py-4 text-center w-full hover:bg-gray_soft cursor-pointer">Show All</a>
            </x-card>
            <x-card>
                <div class="mb-2">
                    <h1 class="font-semibold text-xl">More jobs for you</h1>
                    <p class="text-gray-400">Based on your profile and search history</p>
                </div>

                <div class="flex flex-col divide-y">
                    @if (count($more) == 0)
                    <div class="w-full py-2 text-gray-500">
                        Nothing for now ...
                    </div>
                    @endif
                    @foreach ($more as $m)
                        <a href="{{ route('vacancies.collection', ['vacancy_id' => $m->id]) }}" class="w-full flex items-start justify-between py-6 cursor-pointer group">
                            <div class="flex gap-x-6 items-start">
                                <img class="w-8 aspect-square object-cover mt-1"
                                    src="{{ Storage::url($m->company->logo) }}" alt="">
                                <div>
                                    <p class="text-primary font-semibold group-hover:underline">{{ $m->job_title }}</p>
                                    <p class="text-xs text-gray_custom font-semibold">{{ $m->company->name }}</p>
                                    <p class="mt-2 text-xs text-gray_custom">{{ $m->location }}</p>
                                </div>
                            </div>
                            {{-- <x-secondary-button class="text-xs px-6 py-3 self-center">Apply Now</x-secondary-button> --}}
                        </a>
                    @endforeach
                </div>
            </x-card>
        </div>
        <div class="w-1/4 flex">
            <div>
                <x-application-logo></x-application-logo>
                <p class="text-gray_custom text-xs">
                    FindJob Coorporation made by<br>Marzuki Corp. © 2023
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
