<x-admin-layout class="py-3">
    
<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>

        <a href="{{ route('dashboard') }}" class="flex ml-2 md:mr-24">
                        <x-application-logo class="block w-auto text-2xl" />
         </a>
        </a>
      </div>
      <div class="flex items-center">
          <div class="flex items-center ml-3">
            <div>
              <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
              </button>
            </div>
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
              <div class="px-4 py-3" role="none">
                <p class="text-sm text-gray-900 dark:text-white" role="none">
                  Neil Sims
                </p>
                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                  neil.sims@flowbite.com
                </p>
              </div>
              <ul class="py-1" role="none">
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
  </div>
</nav>

<div class="p-4 sm:ml-64">
   <div class="p-4 border-2 border-slate-500 border-dashed rounded-lg mt-14">
   <div class="bg-white rounded-lg p-4 shadow-md">
        <h2 class="text-xl font-semibold mb-2">Ethical Hacking</h2>
        <div class="flex justify-center items-center">
                    <img class="max-w-full aspect-video object-cover mt-1 rounded-2xl"
                                        src="{{ Vite::asset('resources/images/course-example.jpeg') }}" alt=""></div>
            <p class="text-gray-600 mt-3 mb-4 text-justify">Kursus Ethical Hacking adalah program pelatihan yang mengajarkan teknik dan metodologi hacking etis yang bertujuan untuk meningkatkan keamanan sistem dan jaringan komputer. Dalam kursus ini, peserta akan belajar bagaimana menjadi seorang "penetrator" atau penembus keamanan yang beretika, dengan fokus pada mengidentifikasi dan menutup kerentanan sistem untuk mencegah potensi serangan oleh pihak-pihak yang tidak berwenang.
                Materi kursus mencakup pemahaman tentang ancaman siber, prinsip-prinsip etika dalam hacking, dan landasan hukum serta peraturan yang mengatur penggunaan teknik hacking. Peserta akan belajar cara melakukan uji penetrasi atau penetration testing secara efektif dengan menggunakan alat-alat dan teknik hacking yang sah untuk menguji keamanan sistem, aplikasi web, dan infrastruktur jaringan.</p>
            <div class="mb-2">
                <span class="text-primary text-base font-semibold">Course Type : Hacking, Software, Bug</span>
            </div>
            <div class="mb-2">
                 <span class="text-primary text-base font-semibold">Date :  18-10-2022</span>
            </div>
        <div class="flex justify-between items-center">
          <span class="text-gray-500">Instructor: John Doe</span>
          <x-primary-button class="px-6 py-2 mx-1" :default="false">
                            {{ __('Acc') }}
                </x-primary-button>
        </div>
    </div>
        

   </div>
</div>

</x-admin-layout>
