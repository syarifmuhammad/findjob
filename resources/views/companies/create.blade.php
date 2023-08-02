<x-app-layout>
    <div class="w-full">
        <div class="max-w-7xl mx-auto flex justify-between gap-x-6 py-4">
            @auth
                <div class="flex item-center justify-end">
                    <div class="hidden sm:flex sm:items-center">
                        <a href="{{ route('login') }}" class="font-semibold text-primary flex gap-x-2 items-center">
                            <svg width="24" height="15" viewBox="0 0 32 23" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M30 12.6934C30.8284 12.6934 31.5 12.0218 31.5 11.1934C31.5 10.3649 30.8284 9.69336 30 9.69336V12.6934ZM0.93934 10.1327C0.353553 10.7185 0.353553 11.6682 0.93934 12.254L10.4853 21.8C11.0711 22.3857 12.0208 22.3857 12.6066 21.8C13.1924 21.2142 13.1924 20.2644 12.6066 19.6786L4.12132 11.1934L12.6066 2.70808C13.1924 2.12229 13.1924 1.17254 12.6066 0.586758C12.0208 0.00097084 11.0711 0.00097084 10.4853 0.586758L0.93934 10.1327ZM30 9.69336H2V12.6934H30V9.69336Z"
                                    fill="#016C6E" />
                            </svg>
                            Back
                        </a>
                    </div>
                </div>
            @endauth
            <div></div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto flex gap-x-6 gap-y-6 mt-6 items-start">
        <form enctype="multipart/form-data" method="POST" action="{{ route('companies.store') }}" class="mb-6 w-2/3">
            @csrf
            <x-card>
                <div class="mt-4">
                    <x-input-label for="name" class="mb-2" :value="__('Nama perusahaan')" />
                    <x-text-input oninput="updatePreview('#nama_perusahaan', this, 'Nama Perusahaan')"
                        class="block mb-6 w-full" type="text" name="name" :value="old('name')" required
                        autocomplete="name" placeholder="Masukkan nama perusahaan anda" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="website" class="mb-2" :value="__('Website')" />
                    <x-text-input id="website" class="block mb-6 w-full" type="text" name="website"
                        :value="old('website')" required autocomplete="website"
                        placeholder="Masukkan website perusahaan anda" />
                    <x-input-error :messages="$errors->get('website')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="industry" class="mb-2" :value="__('Industri')" />
                    <x-text-input oninput="updatePreview('#industri', this, 'Industri')" class="block mb-6 w-full"
                        type="text" name="industry" :value="old('industry')" required autocomplete="industry"
                        placeholder="cth: Layanan keuangan" />
                    <x-input-error :messages="$errors->get('industry')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="organization_size" class="mb-2" :value="__('Ukuran organisasi')" />
                    <select placeholder="Pilih ukuran" name="organization_size"
                        class="w-full transition px-3 py-2 border-primary focus:border-primary focus:ring-primary rounded-lg text-base font-medium placeholder:text-[#505050]/30">
                        <option disabled selected>Pilih ukuran</option>
                        <option value="0-1 employees">0-1 karyawan</option>
                        <option value="2-10 karyawan">2-10 karyawan</option>
                        <option value="11-50 karyawan">11-50 karyawan</option>
                        <option value="11-50 karyawan">11-50 karyawan</option>
                        <option value="51-200 karyawan">51-200 karyawan</option>
                        <option value="201-500 karyawan">201-500 karyawan</option>
                        <option value="501-1000 karyawan">501-1000 karyawan</option>
                    </select>
                    <x-input-error :messages="$errors->get('organization_size')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="Jenis organisasi" class="mb-2" :value="__('Jenis organisasi')" />
                    <select placeholder="Pilih ukuran" name="organization_type"
                        class="w-full transition px-3 py-2 border-primary focus:border-primary focus:ring-primary rounded-lg text-base font-medium placeholder:text-[#505050]/30">
                        <option disabled selected>Pilih jenis</option>
                        <option value="Perusahaan umum">Perusahaan umum</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Pemerintahan">Pemerintahan</option>
                        <option value="Nonprofit">Nonprofit</option>
                    </select>
                    <x-input-error :messages="$errors->get('organization_type')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="logo" class="mb-2" :value="__('Logo')" />
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
                            <x-text-input id="logo" class="hidden mb-6 w-full" type="file" name="logo"
                                :value="old('logo')" required />
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('logo')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="tagline" class="mb-2" :value="__('Tagline')" />
                    <textarea name="tagline" oninput="updatePreview('#tagline', this, 'tagline')"
                        placeholder="Cth: Sebuah layanan untuk memudahkan mengelola keuangan pribadi anda."
                        class="block mb-6 w-full transition px-3 py-2 border-primary focus:border-primary focus:ring-primary rounded-lg text-base font-medium placeholder:text-[#505050]/30"></textarea>
                    <x-input-error :messages="$errors->get('industri')" class="mt-2" />
                </div>
            </x-card>
            <div class="flex items-center justify-between mt-6">
                <div></div>
                <x-primary-button class="px-6 py-2">
                    {{ __('Buat halaman perusahaan') }}
                </x-primary-button>
            </div>
        </form>
        <div class="flex-col rounded-lg justify-center bg-primary/20 w-1/3">
            <div class="bg-primary w-full rounded-t-lg p-4 text-white">
                Page Preview
            </div>
            <x-card class="flex-col mx-8 my-8">
                <div id="preview_foto">
                    <svg width="80" height="79" viewBox="0 0 104 105" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect y="0.193359" width="104" height="104" rx="10" fill="#C7DDDD" />
                        <circle cx="47.8405" cy="52.1933" r="33.36" fill="#016C6E" stroke="white"
                            stroke-width="4" />
                        <circle cx="74.8802" cy="70.9132" r="16.64" fill="white" />
                    </svg>
                </div>
                <h1 class="text-lg font-semibold mt-6" id="nama_perusahaan">Nama Perusahaan</h1>
                <p class="text mt-1" id="tagline">tagline</p>
                <p class="text mt-1 text-gray-400" id="industri">Industri</p>
                <x-primary-button class="px-6 py-2 mt-2">
                    <svg class="mr-2 -pl-2" width="20" height="21" viewBox="0 0 24 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 5.19336V19.1934M5 12.1934H19" stroke="white" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    {{ __('Follow') }}
                </x-primary-button>
            </x-card>
        </div>
    </div>

    @push('custom-scripts')
        <script>
            let parent_upload = document.querySelector('#parent_upload')
            let logo = document.querySelector('#logo')
            let text_choose_file = document.querySelector('#text_choose_file')
            let text_nama_input = document.querySelector('#text_nama_input')

            logo.addEventListener('change', (data) => {
                if (data.target.files.length > 0) {
                    text_choose_file.innerText = "Ubah file"
                    text_nama_input.innerText = data.target.files[0].name
                    document.querySelector('#preview_foto').innerHTML = `<img width='80' src='${URL.createObjectURL(data.target.files[0])}' />`
                    
                } else {
                    text_choose_file.innerText = "Choose file"
                    text_nama_input.innerText = "Unggah untuk melihat"
                    document.querySelector('#preview_foto').innerHTML =
                        "<svg width='80' height='79' viewBox='0 0 104 105' fill='none' xmlns='http://www.w3.org/2000/svg'><rect y='0.193359' width='104' height='104' rx='10' fill='#C7DDDD' /><circle cx='47.8405' cy='52.1933' r='33.36' fill='#016C6E' stroke='white' stroke-width='4' /><circle cx='74.8802' cy='70.9132' r='16.64' fill='white' /></svg>"

                }
            })

            parent_upload.addEventListener('click', () => {
                logo.click()
            })

            function updatePreview(id, el, defaultValue) {
                document.querySelector(id).innerText = el.value
                if (el.value.trim() == '') {
                    document.querySelector(id).innerText = defaultValue
                }
            }
        </script>
    @endpush
</x-app-layout>
