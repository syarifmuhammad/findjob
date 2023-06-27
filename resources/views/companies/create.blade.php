<x-app-layout>
    <div class="w-full bg-white">
        <div class="max-w-7xl mx-auto flex justify-between gap-x-6 py-4">
            @auth
                <div class="flex item-center justify-end">
                    <div class="hidden sm:flex sm:items-center">
                        <a href="{{ route('login') }}">
                            <x-secondary-button class="px-6 py-2" :default="false">
                                {{ __('Kembali') }}
                            </x-secondary-button>
                        </a>
                    </div>
                </div>
            @endauth
            <div></div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto flex gap-x-6 gap-y-6 mt-6 items-start">
        <div class="flex-col rounded-lg justify-center bg-stone-200 w-1/3">
            <div class="bg-white w-full rounded-t-lg p-4">
                Preview
            </div>
            <x-card class="flex-col mx-8 my-8">
                <div>
                    <div class="bg-slate-500 w-40 ring-2 ring-slate-400 aspect-square rounded-full m-auto"></div>
                </div>
                <h1 class="text-lg font-semibold text-center mt-6">Institut Teknologi Telkom Surabaya</h1>
                <p class="text text-center mt-2">Solution for the nation</p>
                <p class="text text-center mt-2 text-gray-400">Industry</p>
            </x-card>
        </div>
        <form method="POST" action="{{ route('companies.store') }}" enctype="multipart/form-data" class="mb-6 w-2/3">
            @csrf
            <x-card>
                <div class="mt-4">
                    <x-input-label for="name" class="mb-2" :value="__('Nama perusahaan')" />
                    <x-text-input id="name" class="block mb-6 w-full" type="text" name="name"
                        :value="old('name')" required autocomplete="name" placeholder="Masukkan nama perusahaan anda" />
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
                    <x-text-input id="industri" class="block mb-6 w-full" type="text" name="industri"
                        :value="old('industri')" required autocomplete="industri" placeholder="cth: Layanan keuangan" />
                    <x-input-error :messages="$errors->get('industri')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="organization_size" class="mb-2" :value="__('Ukuran organisasi')" />
                    <select placeholder="Pilih ukuran"
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
                    <select placeholder="Pilih ukuran"
                        class="w-full transition px-3 py-2 border-primary focus:border-primary focus:ring-primary rounded-lg text-base font-medium placeholder:text-[#505050]/30">
                        <option disabled selected>Pilih jenis</option>
                        <option value="Perusahaan umum">Perusahaan umum</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Pemerintahan">Pemerintahan</option>
                        <option value="Nonprofit">Nonprofit</option>
                        <option value="51-200 employees">51-200 employees</option>
                        <option value="201-500 employees">201-500 employees</option>
                        <option value="501-1000 employees">501-1000 employees</option>
                    </select>
                    <x-input-error :messages="$errors->get('organization_size')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="logo" class="mb-2" :value="__('Logo')" />
                    <div class="rounded-lg bg-gray-100 w-100 border border-dashed border-gray-500">
                        <div class="flex flex-col justify-center items-center py-8 cursor-pointer">
                            <div class="flex gap-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" data-supported-dps="24x24"
                                    fill="currentColor" class="mercado-match" width="24" height="24"
                                    focusable="false">
                                    <path
                                        d="M21 14v5a3 3 0 01-3 3H6a3 3 0 01-3-3v-5h2v5a1 1 0 001 1h12a1 1 0 001-1v-5zm-10 2h2V5.15L17 8V5.57L12 2 7 5.57V8l4-2.85z">
                                    </path>
                                </svg>
                                <h3 class="text-gray-700">Choose File</h3>
                            </div>
                            <p class="text-gray-700 text-xs mt-1 text-center">Unggah untuk melihat</p>
                            <x-text-input id="logo" class="hidden mb-6 w-full" type="file" name="logo"
                                :value="old('logo')" required />
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('logo')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="tagline" class="mb-2" :value="__('Tagline')" />
                    <textarea id="tagline" name="tagline"
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
    </div>
</x-app-layout>
