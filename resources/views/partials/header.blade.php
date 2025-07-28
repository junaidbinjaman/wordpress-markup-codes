<header class="h-auto full-width py-[10px] first-letter:lg:py-[26px] sticky top-0 shadow z-50 bg-white">
    <div
        class="px-[12px] md:px-[36px] xl:px-0 flex items-center justify-between mx-auto relative !mt-0 max-w-[1320px]">
        <a class="flex" href="/">
            <img class="logo z-50 w-[100px] md:w-[80px] lg:w-[110px] xl:w-[160px]" src="{{ asset('logo.png') }}"
                 alt="logo image">
        </a>
        <nav class="z-50 absolute hidden top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 lg:block">
            <ul class="navbar flex flex-col justify-center font-chivo gap-[34px] lg:flex-row">
                <li class="flex items-center group">
                    <a class="hover:text-green-900 text-base font-inter menu-link lg:text-heading-6 mr-[7px]"
                       href="/">Home</a>
                </li>
                <li class="flex items-center group">
                    <a class="hover:text-green-900 text-base font-inter menu-link lg:text-heading-6 mr-[7px]"
                       href="/about">About</a>
                </li>
                <li class="flex items-center group"><a
                        class="hover:text-green-900 text-base font-inter menu-link lg:text-heading-6 mr-[7px]"
                        href="/">Company</a>
                </li>
                <li class="flex items-center group">
                    <a class="hover:text-green-900 text-base font-inter menu-link lg:text-heading-6 mr-[7px]"
                       href="/">Pages</a>
                    <i>
                        <img class="icon-caret group-hover:filter-green" src="/icons/icon-caret.svg" alt="caret">
                    </i>
                    <ul class="menu-child shadow translate-y-4 opacity-0 bg-white top-full z-50 py-2 grid menu-shadow -translate-x-6 translate-y-8 transition-all duration-200 pointer-events-none group-hover:pointer-events-auto lg:absolute rounded-[4px] group-hover:grid group-hover:opacity-100 before:content-[''] before:block before:absolute before:w-full before:h-12 before:top-[-35px] before:left-0 grid-cols-1 w-[185px]">
                        <li class="menu-child-item font-chivo group transition-all duration-200 py-[10px] px-[22px] hover:filter-green hover:pl-[25px] hover:opacity-100"
                            data-menu="contact">
                            <a class="flex items-center text-[14px]" href="/contact.html">
                                <img class="opacity-40 w-[12px] h-[12px] mr-[8px] -translate-y-[1px]"
                                     src="/icons/icon-plane-header.svg" alt="">
                                <span class="whitespace-nowrap">Contact</span>
                            </a>
                        </li>
                        <li class="menu-child-item font-chivo group transition-all duration-200 py-[10px] px-[22px] hover:filter-green hover:pl-[25px] hover:opacity-100"
                            data-menu="singup">
                            <a class="flex items-center text-[14px]" href="/signup.html">
                                <img class="opacity-40 w-[12px] h-[12px] mr-[8px] -translate-y-[1px]"
                                     src="/icons/icon-user-add.svg" alt="">
                                <span class="whitespace-nowrap">Sign Up</span>
                            </a>
                        </li>
                        <li class="menu-child-item font-chivo group transition-all duration-200 py-[10px] px-[22px] hover:filter-green hover:pl-[25px] hover:opacity-100"
                            data-menu="login">
                            <a class="flex items-center text-[14px]" href="/login.html">
                                <img class="opacity-40 w-[12px] h-[12px] mr-[8px] -translate-y-[1px]"
                                     src="/icons/icon-fingerprint.svg" alt="">
                                <span class="whitespace-nowrap">Log In</span>
                            </a>
                        </li>
                        <li class="menu-child-item font-chivo group transition-all duration-200 py-[10px] px-[22px] hover:filter-green hover:pl-[25px] hover:opacity-100"
                            data-menu="rp">
                            <a class="flex items-center text-[14px]" href="/reset-password.html">
                                <img class="opacity-40 w-[12px] h-[12px] mr-[8px] -translate-y-[1px]"
                                     src="/icons/icon-settings.svg" alt="">
                                <span class="whitespace-nowrap">Reset Password</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="flex items-center group">
                    <a class="hover:text-green-900 text-base font-inter menu-link lg:text-heading-6 mr-[7px]"
                       href="/">Blog</a>
                </li>
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

        <div class="flex flex-col  justify-between w-6 h-5 cursor-pointer">
            <span class="bg-gray-500 h-[2px] block"></span>
            <span class="bg-gray-500 h-[2px] block"></span>
            <span class="bg-gray-500 h-[2px] block"></span>
        </div>


    </div>


</header>

