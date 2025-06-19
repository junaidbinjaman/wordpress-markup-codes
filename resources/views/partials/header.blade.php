<header class="h-auto full-width py-[10px] first-letter:lg:py-[26px] sticky top-0 shadow z-50 bg-white">
    <div
        class="px-[12px] md:px-[36px] xl:px-0 flex items-center justify-between mx-auto relative !mt-0 max-w-[1320px]">
        <x-logo theme="light" />
        <nav class="z-50 absolute hidden top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 lg:block">
            <ul class="navbar flex flex-col justify-center font-chivo gap-[34px] lg:flex-row">
                <x-navinput slug="home" :active="request()->is('/')">Home</x-navinput>
                <x-navinput slug="about" :active="request()->is('about')">About</x-navinput>
                <x-navinput slug="company" :active="request()->is('blogs')">Blogs</x-navinput>
                <x-navinput slug="services" :active="request()->is('services')">Services</x-navinput>
                <x-navinput slug="contact" :active="request()->is('contact')">Contact</x-navinput>
            </ul>
        </nav>
        <div class="hidden xl:block">
            <button type="button">
                <a class="flex items-center inline-block z-10 relative transition-all duration-200 group px-[22px] py-[15px] lg:px-[32px] lg:py-[22px] rounded-[50px] bg-gray-100 text-gray-900 hover:bg-gray-900 hover:text-white hover:-translate-y-[2px] hidden lg:flex"
                   href="#">
                        <span
                            class="block text-inherit w-full h-full rounded-[50px] text-heading-6 font-bold font-chivo">Learn more</span>
                    <i>
                        <img class="ml-[7px] w-[12px] filter-black group-hover:filter-white"
                             src="{{asset('/icons/icon-right.svg')}}" alt="arrow right icon">
                    </i>
                </a>
            </button>
        </div>


        <!-- drawer init and toggle -->
        <div class="text-center lg:hidden flex flex-col justify-between h-5" data-drawer-target="drawer-example" data-drawer-show="drawer-example">
            <span class="bg-gray-600 h-[2px] w-[40px]"></span>
            <span class="bg-gray-600 h-[2px] w-[40px]"></span>
            <span class="bg-gray-600 h-[2px] w-[40px]"></span>
        </div>

        <!-- drawer component -->
        <div id="drawer-example"
             class="fixed top-0 left-0 z-900 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800"
             tabindex="-1" aria-labelledby="drawer-label">

            <x-logo class="pb-5" theme="dark" />
            <nav>
                <ul class="flex flex-col gap-5">
                    <x-navinput slug="home" :active="request()->is('/')" theme="dark">Home</x-navinput>
                    <x-navinput slug="about" :active="request()->is('about')" theme="dark">About</x-navinput>
                    <x-navinput slug="company" :active="request()->is('blogs')" theme="dark">Blogs</x-navinput>
                    <x-navinput slug="services" :active="request()->is('services')" theme="dark">Services</x-navinput>
                    <x-navinput slug="contact" :active="request()->is('contact')" theme="dark">Contact</x-navinput>
                </ul>
            </nav>
        </div>


    </div>


</header>

