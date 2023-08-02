<x-item-layout>
    <x-slot:left>
        <h1 class="text-primary font-medium py-6 px-10">All Vacancies</h1>
        <div class="divide-y">
            @foreach ($vacancies as $vacancy)
                <a href="{{ route('vacancies.collection', ['vacancy_id' => $vacancy->id]) }}"
                    class="w-full flex items-start justify-between py-6 group px-10 cursor-pointer {{ $selected_vacancy != null && $vacancy->id == $selected_vacancy->id ? 'bg-primary/20' : 'hover:bg-gray_soft' }}">
                    <div class="flex gap-x-6 items-start">
                        <img class="w-12 aspect-square object-cover mt-1"
                            src="{{ Storage::url($vacancy->company->logo) }}" alt="">
                        <div>
                            <p class="text-primary text-lg font-semibold group-hover:underline">{{ $vacancy->job_title }}
                            </p>
                            <p class="text-gray_custom font-semibold">{{ $vacancy->company->name }}</p>
                            <p class=" text-gray_custom">{{ $vacancy->location }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        @if (count($vacancies->items()) <= 0)
            <h1 class="py-6 px-10 font-medium">Belum ada lowongan pekerjaan</h1>
        @endif
    </x-slot:left>
    <x-slot:right>
        @if ($selected_vacancy != null)
            <div class="py-8 pl-10 px-6 rounded-md">
                <img class="w-24 object-cover mt-1" src="{{ Storage::url($selected_vacancy->company->logo) }}"
                    alt="">
                <h1 class="text-primary text-xl font-semibold hover:underline mt-6 cursor-pointer">
                    {{ $selected_vacancy->job_title }}</h1>
                <div>{{ $selected_vacancy->company->name }} · {{ $selected_vacancy->location }}</div>
                <div class="mt-4">

                    {{-- <a href="{{ route('register') }}"> --}}
                    @auth
                    <x-primary-button x-data=""
                        x-on:click.prevent="$dispatch('open-modal', 'modal-apply')" class="px-6 py-2 flex gap-x-2"
                        :default="false">
                        <span>{{ __('Apply') }}</span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" width="16"
                                height="16" viewBox="0 0 16 16" focusable="false"
                                class="apply-button__offsite-apply-icon-svg lazy-loaded" aria-busy="false">
                                <path style="fill:#fff"
                                    d="M12,10v3a1,1,0,0,1-1,1H3a1,1,0,0,1-1-1V5A1,1,0,0,1,3,4H6V6H4v6h6V10h2Zm1-8H8V4h2.67L6,8.67,7.33,10,12,5.33V8h2V3A1,1,0,0,0,13,2Z">
                                </path>
                            </svg></span>
                    </x-primary-button>
                    @endauth
                    @guest
                    <x-primary-button x-data=""
                        x-on:click.prevent="$dispatch('open-modal', 'modal-login')" class="px-6 py-2 flex gap-x-2"
                        :default="false">
                        <span>{{ __('Apply') }}</span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" width="16"
                                height="16" viewBox="0 0 16 16" focusable="false"
                                class="apply-button__offsite-apply-icon-svg lazy-loaded" aria-busy="false">
                                <path style="fill:#fff"
                                    d="M12,10v3a1,1,0,0,1-1,1H3a1,1,0,0,1-1-1V5A1,1,0,0,1,3,4H6V6H4v6h6V10h2Zm1-8H8V4h2.67L6,8.67,7.33,10,12,5.33V8h2V3A1,1,0,0,0,13,2Z">
                                </path>
                            </svg></span>
                    </x-primary-button>
                    @endguest
                    {{-- </a> --}}
                </div>
            </div>
            <div class="bg-gradient-radial w-full h-[1px]"></div>
            @if (count($selected_vacancy->skillables) > 0)
                <div class="ml-10 my-6">
                    <h1 class="font-semibold text-xl mb-2">Skill requirement</h1>
                    <div class="flex gap-3 overflow-x-auto">
                        @foreach ($selected_vacancy->skillables as $s)
                            <x-badge>{{ $s->skill->name }}</x-badge>
                        @endforeach
                    </div>
                </div>
                <div class="bg-gradient-radial w-full h-[1px]"></div>
            @endif
            <div class="ml-10 my-4">
                <h1 class="font-semibold text-xl mb-2">About the vacancy</h1>
                <div class="relative overflow-y-hidden overflow-x-auto">
                    {{ $selected_vacancy->description }}
                </div>
            </div>
        @endif
    </x-slot:right>

    @push('custom-scripts')
    @endpush
</x-item-layout>
@auth
    @if ($selected_vacancy != null)
        <x-modal name="modal-apply">
            <x-slot:title>
                Apply to {{ $selected_vacancy->company->name }}
            </x-slot:title>
            <div class="px-6 mt-4 mb-6">
                <h1 class="font-semibold">Contact info</h1>
                <div class="flex items-center gap-x-3 mt-2">
                    <div class="w-14 bg-black aspect-square rounded-full"></div>
                    <div>
                        <p class="font-semibold">{{ Auth::user()->name }}</p>
                        <p class="text-xs text-gray_custom font-semibold">Amazon</p>
                        <p class="text-xs text-gray_custom">Washington, America</p>
                    </div>
                </div>
            </div>
            <div class="bg-gradient-radial w-full h-[1px]"></div>
            <form enctype="multipart/form-data" method="POST"
                action="{{ route('vacancies.apply', $selected_vacancy->id) }}" class="p-6 pt-0">
                @csrf
                <div class="mt-4">
                    <x-input-label for="name" class="mb-2" :value="__('Nama*')" />
                    <x-text-input class="block mb-6 w-full" type="text" name="name" value="{{ Auth::user()->name }}"
                        required autocomplete="name" placeholder="Masukkan nama anda" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="phone_code" class="mb-2" :value="__('Phone country code*')" />
                    <select placeholder="Pilih" name="phone_code"
                        class="w-full transition px-3 py-2 border-primary focus:border-primary focus:ring-primary rounded-lg text-base font-medium placeholder:text-[#505050]/30">
                        <option disabled selected>Pilih</option>
                        @foreach ($phone_code as $pc)
                            <option value="{{ $pc->code }}">{{ $pc->name . ' (' . $pc->dial_code . ')' }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('phone_code')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="phone" class="mb-2" :value="__('Mobile phone number*')" />
                    <x-text-input class="block mb-6 w-full" type="text" name="phone" required autocomplete="phone"
                        placeholder="cth: 812345678910" />
                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="email" class="mb-2" :value="__('Email address*')" />
                    <x-text-input class="block mb-6 w-full" value="{{ Auth::user()->email }}" type="email" name="email"
                        required autocomplete="email" placeholder="cth: johndoe@example.com" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="resume" class="mb-2" :value="__('CV / Resume')" />
                    <div class="rounded-lg bg-gray-100 w-100 border border-dashed border-gray-500">
                        <div class="flex flex-col justify-center items-center py-8 cursor-pointer" id="parent_upload">
                            <div class="flex gap-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-supported-dps="24x24"
                                    fill="currentColor" class="mercado-match" width="24" height="24"
                                    focusable="false">
                                    <path
                                        d="M21 14v5a3 3 0 01-3 3H6a3 3 0 01-3-3v-5h2v5a1 1 0 001 1h12a1 1 0 001-1v-5zm-10 2h2V5.15L17 8V5.57L12 2 7 5.57V8l4-2.85z">
                                    </path>
                                </svg>
                                <h3 class="text-gray-700" id="text_choose_file">Choose File</h3>
                            </div>
                            <p class="text-gray-700 text-xs mt-1 text-center" id="text_nama_input">Unggah untuk melihat
                            </p>
                            <x-text-input id="resume" class="hidden mb-6 w-full" type="file" name="resume"
                                required />
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('resume')" class="mt-2" />
                </div>
                {{-- <div class="mt-4">
            <x-input-label for="tagline" class="mb-2" :value="__('Tagline')" />
            <textarea name="tagline" oninput="updatePreview('#tagline', this, 'tagline')"
                placeholder="Cth: Sebuah layanan untuk memudahkan mengelola keuangan pribadi anda."
                class="block mb-6 w-full transition px-3 py-2 border-primary focus:border-primary focus:ring-primary rounded-lg text-base font-medium placeholder:text-[#505050]/30"></textarea>
            <x-input-error :messages="$errors->get('industri')" class="mt-2" />
        </div> --}}
                <div class="flex items-center justify-between mt-6">
                    <div></div>
                    <x-primary-button class="px-6 py-2">
                        {{ __('Apply') }}
                    </x-primary-button>
                </div>
            </form>
        </x-modal>

        <script>
            let parent_upload = document.querySelector('#parent_upload')
            let resume = document.querySelector('#resume')
            let text_choose_file = document.querySelector('#text_choose_file')
            let text_nama_input = document.querySelector('#text_nama_input')

            resume.addEventListener('change', (data) => {
                if (data.target.files.length > 0) {
                    text_choose_file.innerText = "Ubah file"
                    text_nama_input.innerText = data.target.files[0].name
                    document.querySelector('#preview_foto').innerHTML =
                        `<img width='80' src='${URL.createObjectURL(data.target.files[0])}' />`

                } else {
                    text_choose_file.innerText = "Choose file"
                    text_nama_input.innerText = "Unggah untuk melihat"
                    document.querySelector('#preview_foto').innerHTML =
                        "<svg width='80' height='79' viewBox='0 0 104 105' fill='none' xmlns='http://www.w3.org/2000/svg'><rect y='0.193359' width='104' height='104' rx='10' fill='#C7DDDD' /><circle cx='47.8405' cy='52.1933' r='33.36' fill='#016C6E' stroke='white' stroke-width='4' /><circle cx='74.8802' cy='70.9132' r='16.64' fill='white' /></svg>"

                }
            })

            parent_upload.addEventListener('click', () => {
                resume.click()
            })
        </script>
    @endif
@endauth
@guest
    <x-modal name="modal-login">
        <x-slot:title>
            Login for apply to {{ $selected_vacancy->company->name }}
        </x-slot:title>
        <div class="px-6 mt-4 mb-6">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" class="mb-1" :value="__('Email')" />
                    <x-text-input id="email" class="block w-full" type="email" name="email" :value="old('email')"
                        required autofocus autocomplete="username" placeholder="Enter your e-mail here" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-2">
                    <x-input-label for="password" class="mb-1" :value="__('Password')" />
                    <x-text-input id="password" class="block w-full" type="password" name="password" required
                        autocomplete="current-password" placeholder="Enter your password here" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-3">
                    @if (Route::has('password.request'))
                        <a class="text-sm text-primary hover:underline rounded-md"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
                <div class="flex items-center justify-between mt-6">
                    <a href="{{ route('register') }}">
                        <x-secondary-button class="px-6 py-2">
                            {{ __('Sign Up') }}
                        </x-secondary-button>
                    </a>
                    <x-primary-button class="px-6 py-2">
                        {{ __('Sign In') }}
                    </x-primary-button>
                </div>
            </form>
    </x-modal>
@endguest
