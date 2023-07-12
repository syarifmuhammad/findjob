<x-guest-layout>
<body class="bg-gray-200 font-sans">
<header class="bg-transparent absolute left-0 w-full top-0 flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="#home" class="text-black font-bold text-lg py-6 block ">Find<span class="text-primary font-bold ">Job.</span></a>
                </div>
                <div class="items-center flex px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>

                    <nav id="nav-menu" class="hidden absolute py-5 bg-gray-800 shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:shadow-none lg:rounded-none lg:bg-transparent lg:max-w-full">
                        <ul class="block lg:flex">
                            <li class="group text-gray-400">
                                <a href="#home" class="text-base py-2 mx-8 flex group-hover:text-primary">Home</a>
                            </li>
                            <li class="group text-gray-400">
                                <a href="#about" class="text-base py-2 mx-8 flex group-hover:text-primary">About Me</a>
                            </li>
                            <li class="group text-gray-400">
                                <a href="#portofolio" class="text-base py-2 mx-8 flex group-hover:text-primary">Portofolio</a>
                            </li>
                            <li class="group text-gray-400">
                                <a href="#skills" class="text-base py-2 mx-8 flex group-hover:text-primary">Skills</a>
                            </li>
                            <li class="group text-gray-400">
                                <a href="#contact" class="text-base py-2 mx-8 flex group-hover:text-primary">Contact Me</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

</body>
</x-guest-layout>