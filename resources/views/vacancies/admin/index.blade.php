<x-app-layout class="py-3">
    <div class="max-w-7xl mx-auto flex gap-x-6 gap-y-6 mt-4">
        <div class="w-3/12">
            <x-card class="overflow-hidden w-full" style="padding:0;">
                <div style="background-image:url('{{ Vite::asset('resources/images/bg-auth.svg') }}')"
                    class="bg-cover h-20 relative mb-14">
                    <div class="rounded-lg w-20 aspect-square bg-black absolute overflow-hidden -bottom-1/2 left-6">
                        <img class="w-full h-full object-cover" src="{{ Storage::url($company->logo) }}" alt="">
                    </div>
                </div>
                <div class="p-8">
                    <div class="font-semibold text-primary">{{ $company->name }}</div>
                    <p class="text-xs text-gray_custom">0 followers</p>
                    <div class="bg-gradient-radial w-full h-[1px] my-8"></div>
                    <div class="flex -mx-8 flex-col">
                        <a href="{{ route('companies.admin.index', Request::get('company_id')) }}"
                            class="w-full px-8 py-3 hover:bg-gray_soft text-slate-600 border-l-2">
                            Feed
                        </a>
                        <div class="w-full px-8 py-3 hover:bg-gray_soft text-slate-600 border-l-2">
                            Edit Company
                        </div>
                        <div class="w-full px-8 py-3 hover:bg-gray_soft text-slate-600 border-l-2 border-primary">
                            Manage Vacancies
                        </div>
                    </div>
                </div>
            </x-card>
        </div>
        <div class="w-6/12 self-start">
            <x-card>
                <div class="flex justify-between">
                    <h1 class="font-semibold text-xl mb-6">My Vacancies</h1>
                    <svg x-data @click="$dispatch('open-modal', 'modal_create_vacancy')" class="cursor-pointer" width="25" height="25" viewBox="0 0 25 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.5078 13.3821H13.5078V18.3821C13.5078 18.6473 13.4025 18.9017 13.2149 19.0892C13.0274 19.2767 12.773 19.3821 12.5078 19.3821C12.2426 19.3821 11.9882 19.2767 11.8007 19.0892C11.6132 18.9017 11.5078 18.6473 11.5078 18.3821V13.3821H6.50781C6.2426 13.3821 5.98824 13.2767 5.80071 13.0892C5.61317 12.9017 5.50781 12.6473 5.50781 12.3821C5.50781 12.1169 5.61317 11.8625 5.80071 11.675C5.98824 11.4874 6.2426 11.3821 6.50781 11.3821H11.5078V6.38208C11.5078 6.11686 11.6132 5.86251 11.8007 5.67497C11.9882 5.48744 12.2426 5.38208 12.5078 5.38208C12.773 5.38208 13.0274 5.48744 13.2149 5.67497C13.4025 5.86251 13.5078 6.11686 13.5078 6.38208V11.3821H18.5078C18.773 11.3821 19.0274 11.4874 19.2149 11.675C19.4025 11.8625 19.5078 12.1169 19.5078 12.3821C19.5078 12.6473 19.4025 12.9017 19.2149 13.0892C19.0274 13.2767 18.773 13.3821 18.5078 13.3821Z"
                            fill="#016C6E" />
                    </svg>
                </div>
                <div class="divide-y">
                    @foreach ($vacancies as $vacancy)
                        <div class="w-full flex items-start justify-between py-6">
                            <div class="flex gap-x-6 items-start">
                                <img class="w-8 aspect-square object-cover mt-1"
                                    src="{{ Storage::url($company->logo) }}" alt="">
                                <div>
                                    <p class="text-primary font-semibold">{{ $vacancy->job_title }}</p>
                                    <p class="text-xs text-gray_custom font-semibold">{{ $company->name }}</p>
                                    <p class="mt-2 text-xs text-gray_custom">{{ $company->location }}</p>
                                </div>
                            </div>
                            <div class="self-center flex gap-x-2">
                                <x-secondary-button class="text-xs px-6 py-3">Edit</x-secondary-button>
                                <x-secondary-button class="text-xs px-6 py-3 border-none">Delete</x-secondary-button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </x-card>
        </div>
        <div class="w-3/12">
            <x-card class="w-full sticky top-8">
                <h1 class="font-semibold mb-8">Follow for more</h1>
                @for ($i = 0; $i < 3; $i++)
                    <div class="w-full flex flex-col items-start justify-between mb-6">
                        <div class="flex gap-x-6 items-start">
                            <img class="w-6 aspect-square object-cover mt-1"
                                src="{{ Vite::asset('resources/images/image-example.png') }}" alt="">
                            <div>
                                <p class="text-black_custom font-semibold">Michael Doe</p>
                                <p class="mt-1 text-xs text-gray_custom">Cloud Computing at Google</p>
                                <x-secondary-button class="text-xs px-6 py-2 self-center mt-3"
                                    style="border-radius: 100px;">Follow</x-secondary-button>
                            </div>
                        </div>
                    </div>
                @endfor
            </x-card>
        </div>
    </div>
</x-app-layout>

<x-modal name="modal_create_vacancy" :show="false">
    <x-slot:title>
        Create new vacancy
    </x-slot:title>
    <form class="p-8" method="POST" action="{{ route('vacancies.admin.store') }}">
        @csrf
        <input type="hidden" name="company_id" value="{{ Request::get('company_id') }}">
        <div class="mt-4">
            <x-input-label for="job_title" class="mb-2" :value="__('Job title')" />
            <x-text-input class="block mb-6 w-full" type="text" name="job_title" :value="old('job_title')" required
                autocomplete="job_title" placeholder="Add the title you are hiring for" />
            <x-input-error :messages="$errors->get('job_title')" class="mt-2" />
        </div>
        <div class="mt-4">
            <div class="mt-4">
                <x-input-label for="workplace_type" class="mb-2" :value="__('Workplace type')" />
                <select placeholder="Pilih ukuran" name="workplace_type"
                    class="w-full transition px-3 py-2 border-primary focus:border-primary focus:ring-primary rounded-lg text-base font-medium placeholder:text-[#505050]/30">
                    <option value="On-Site">On-Site</option>
                    <option value="Hybrid">Hybrid</option>
                    <option value="Remote">Remote</option>
                </select>
                <x-input-error :messages="$errors->get('workplace_type')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="location" class="mb-2" :value="__('Location')" />
                <x-text-input class="block mb-6 w-full" type="text" name="location" :value="old('location')" required
                    autocomplete="location" placeholder="Country or state" />
                <x-input-error :messages="$errors->get('location')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="Job type" class="mb-2" :value="__('Job type')" />
                <select name="job_type"
                    class="w-full transition px-3 py-2 border-primary focus:border-primary focus:ring-primary rounded-lg text-base font-medium placeholder:text-[#505050]/30">
                    <option value="Full-time">Full-time</option>
                    <option value="Part-time">Part-time</option>
                    <option value="Contract">Contract</option>
                    <option value="Temporary">Temporary</option>
                    <option value="Other">Other</option>
                    <option value="Volunteer">Volunteer</option>
                    <option value="Internship">Internship</option>
                </select>
                <x-input-error :messages="$errors->get('job_type')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="Skill" class="mb-2" :value="__('Skill')" />
                <div x-data="selectConfigs()">
                    <div @click.away="close()">
                        <x-text-input class="block w-full mb-1" type="text" name="skill" required
                            autocomplete="skill" placeholder="Skill" x-model="filter"
                            x-transition:leave="transition ease-in duration-100"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                            @mousedown="open()" @input="fetchOptions()" />
                        <div x-show="isOpen()" class="rounded-b-lg bg-white border flex flex-col divide-y">
                            <div @click="selecteds.push({ id:null, name:filter })" x-show="filter != ''"
                                class="p-3 hover:bg-gray_soft text-primary">Add Skill +</div>
                            <template x-for="(option, index) in options" :key="index">
                                <div @click="onOptionClick(index)" class="p-3 hover:bg-gray_soft"
                                    x-text="option.name"></div>
                            </template>
                        </div>
                    </div>
                    <div class="flex gap-2 mt-2 flex-wrap">
                        <template x-for="(option, index) in selecteds" :key="index">
                            <x-badge x-text="option.name"></x-badge>
                        </template>
                    </div>
                    <template x-for="(option, index) in selecteds" :key="index">
                        <input type="hidden" :name="option.id != null ? 'skill_exists[]' : 'skill_not_exists[]'"
                            :value="option.id != null ? option.id : option.name" />
                    </template>
                </div>
            </div>
            <div class="mt-4">
                <x-input-label for="description" class="mb-2" :value="__('Description')" />
                <textarea name="description"
                    placeholder="Description"
                    class="block mb-6 w-full transition px-3 py-2 border-primary focus:border-primary focus:ring-primary rounded-lg text-base font-medium placeholder:text-[#505050]/30"></textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>
            <div class="flex items-center justify-end mt-6 gap-x-3">
                <x-secondary-button @click="$dispatch('close')" class="px-6 py-2 border-none">
                    {{ __('Cancel') }}
                </x-secondary-button>
                <x-primary-button class="px-6 py-2">
                    {{ __('Add Vacancy') }}
                </x-primary-button>
            </div>
    </form>
</x-modal>

<script>
    function selectConfigs() {
        return {
            delay: null,
            filter: '',
            show_result_search: false,
            selected: null,
            selecteds: [],
            focusedOptionIndex: null,
            options: null,
            close() {
                this.show_result_search = false;
                this.filter = this.selectedName();
                this.focusedOptionIndex = this.selected ? this.focusedOptionIndex : null;
            },
            open() {
                this.show_result_search = true;
                this.filter = '';
                this.fetchOptions()
            },
            toggle() {
                if (this.show_result_search) {
                    this.close();
                } else {
                    this.open()
                }
            },
            isOpen() {
                return this.show_result_search === true
            },
            selectedName() {
                return this.selected ? this.selected.name : this.filter;
            },
            classOption(id, index) {
                const isSelected = this.selected ? (id == this.selected.id) : false;
                const isFocused = (index == this.focusedOptionIndex);
                return {
                    'cursor-pointer w-full border-gray-100 border-b hover:bg-blue-50': true,
                    'bg-blue-100': isSelected,
                    'bg-blue-50': isFocused
                };
            },
            fetchOptions() {
                if (this.delay) {
                    window.clearTimeout(this.delay)
                }
                this.delay = window.setTimeout(() => {
                    fetch(`{{ route('skills.search') }}?search=${this.filter}`)
                        .then(response => response.json())
                        .then(data => this.options = data);
                }, 500)
            },
            onOptionClick(index) {
                this.focusedOptionIndex = index;
                this.selectOption();
            },
            selectOption() {
                if (!this.isOpen()) {
                    return;
                }
                this.focusedOptionIndex = this.focusedOptionIndex ?? 0;
                const selected = this.options[this.focusedOptionIndex]
                this.selected = selected;
                // if (this.selected && this.selected.id == selected.id) {
                //     this.filter = '';
                //     this.selected = null;
                // } else {
                //     this.filter = this.selectedName();
                // }

                if (!this.selecteds.some(s => s.id == this.selected.id)) {
                    this.selecteds.push(this.selected)
                }

                this.close();
            },
        }

    }
</script>