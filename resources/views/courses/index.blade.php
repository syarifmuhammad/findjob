<x-app-layout>
    @pushOnce('menu-right')
        @guest
            <div class="flex item-center justify-end">
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <a href="{{ route('login') }}">
                        <x-primary-button class="px-6 py-2" :default="false">
                            {{ __('+ Buat Halaman Perusahaan') }}
                        </x-primary-button>
                    </a>
                </div>
            </div>
        @endguest
    @endPushOnce
    <div class="w-full bg-white">
        <div class="max-w-7xl mx-auto flex justify-between gap-x-6 py-4">
            <div></div>
            @auth
                <div class="flex item-center justify-end">
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <a href="{{ route('companies.create') }}">
                            <x-primary-button class="px-6 py-2" :default="false">
                                {{ __('+ Buat Halaman Perusahaan') }}
                            </x-primary-button>
                        </a>
                    </div>
                </div>
            @endauth
        </div>
    </div>
    <div class="max-w-7xl mx-auto grid grid-cols-[3fr_6fr_4fr] grid-rows-[auto_auto_1fr] gap-x-6 gap-y-6 mt-6">
        <x-card>

        </x-card>
        <x-card class="flex flex-col divide-y">
            @foreach ($companies as $company)
                <div class="flex gap-x-3 py-4">
                    <div>
                        <div class="bg-slate-500 w-20 aspect-square rounded-full">
                            <img src="{{ Storage::url($company->logo) }}" alt="Logo" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div>
                        <h2 class='font-semibold text-md'>{{ $company->name }}</h2>
                        <h3>{{ $company->organization_type }}</h3>
                        <p class="text-sm text-gray-600">{{ $company->tagline }}</p>
                    </div>
                </div>
            @endforeach
        </x-card>
        <x-card class="flex flex-col divide-y">
            @for ($i=0; $i<10; $i++)
                <div class="flex gap-x-3 py-4">
                    <div>
                        <div class="bg-slate-500 w-10 aspect-square rounded-full">
                            <img src="{{ Storage::url($company->logo) }}" alt="Logo" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div>
                        <h2 class='font-semibold text-md'>{{ $company->name }}</h2>
                        <h3>{{ $company->organization_type }}</h3>
                    </div>
                </div>
            @endfor
        </x-card>
    </div>
</x-app-layout>
