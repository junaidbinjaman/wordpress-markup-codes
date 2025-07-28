@extends('layouts.app')

@section('title', 'Home - All Next Ver')

@section('content')
    @include('partials.heroArea')

    <div class="px-[12px] md:px-[36px] mt-[70px] xl:px-0 mt-[30px] md:mt-[80px] lg:mt-[143px]">
        <h2 class="font-bold font-chivo text-[25px] leading-[30px] md:text-heading-3 text-center mb-[40px] md:mb-[60px] lg:mb-[84px]">
            Trusted by the world’s leading companies
        </h2>
        <div class="flex flex-wrap items-center justify-center mb-[30px] md:mb-[60px] lg:mb-[80px]">
            <a
                class="transition-all duration-300 partner-item p-[15px] md:pr-[15px] xl:w-auto lg:w-[184px] hover:translate-y-[-3px]"
                href="/">
                <img src="/images/partner-logo-1.svg" alt="partner logo">
            </a>
            <a
                class="transition-all duration-300 partner-item p-[15px] md:pr-[15px] xl:w-auto lg:w-[184px] hover:translate-y-[-3px]"
                href="/">
                <img src="/images/partner-logo-2.svg" alt="partner logo">
            </a>
            <a
                class="transition-all duration-300 partner-item p-[15px] md:pr-[15px] xl:w-auto lg:w-[184px] hover:translate-y-[-3px]"
                href="/">
                <img src="/images/partner-logo-3.svg" alt="partner logo">
            </a>
            <a
                class="transition-all duration-300 partner-item p-[15px] md:pr-[15px] xl:w-auto lg:w-[184px] hover:translate-y-[-3px]"
                href="/">
                <img src="/images/partner-logo-4.svg" alt="partner logo">
            </a>
            <a
                class="transition-all duration-300 partner-item p-[15px] md:pr-[15px] xl:w-auto lg:w-[184px] hover:translate-y-[-3px] md:col-start-2 lg:col-start-auto"
                href="/">
                <img src="/images/partner-logo-5.svg" alt="partner logo">
            </a>
            <a
                class="transition-all duration-300 partner-item p-[15px] md:pr-[15px] xl:w-auto lg:w-[184px] hover:translate-y-[-3px] md:col-start-3 lg:col-start-auto"
                href="/">
                <img src="/images/partner-logo-6.svg" alt="partner logo">
            </a>
            <a
                class="transition-all duration-300 partner-item p-[15px] md:pr-[15px] xl:w-auto lg:w-[184px] hover:translate-y-[-3px]"
                href="/">
                <img src="/images/partner-logo-1.svg" alt="partner logo">
            </a>
            <a
                class="transition-all duration-300 partner-item p-[15px] md:pr-[15px] xl:w-auto lg:w-[184px] hover:translate-y-[-3px]"
                href="/">
                <img src="/images/partner-logo-2.svg" alt="partner logo">
            </a>
            <a
                class="transition-all duration-300 partner-item p-[15px] md:pr-[15px] xl:w-auto lg:w-[184px] hover:translate-y-[-3px]"
                href="/">
                <img src="/images/partner-logo-3.svg" alt="partner logo">
            </a>
        </div>
        <div class="w-full bg-gray-300 h-[1px] mb-[50px] md:mb-[90px] lg:mb-[150px]"></div>
    </div>

    <div class="wrapper mx-auto text-gray-900 font-normal max-w-[1320px]">
        <div class="px-[12px] md:px-[36px] mt-[70px] xl:px-0 max-w-[1320px] mx-auto">
            <div class="lg:grid lg:grid-cols-2 gap-[160px]">
                <div class="relative">
                    <img class="rounded-2xl mb-[30px] lg:mb-0 lg:flex-1" src="/images/thumbnail-7.png" alt="Agon">
                    <img
                        class="absolute rounded-2xl bottom-0 shadow-3 animate-float max-w-[296px] right-[-15%]"
                        src="/images/chart.png" alt="chart image">
                </div>
                <div class="flex-1 order-1 lg:gap-[30px] xl:gap-[64px]">
                <span
                    class="font-chivo inline-block bg-bg-6 text-green-900 py-[14px] px-[28px] rounded-[50px] text-[14px] leading-[14px] mb-[22px]">What We Do, What You Get</span>
                    <h3 class="font-chivo font-bold lg:text-heading-1 md:text-[46px] md:leading-[52px] text-[35px] leading-[44px] mb-[22px]">
                        Fresh Ideas. Thoughtful Design.</h3>
                    <p class="text-quote md:text-lead-lg text-gray-600 mb-[50px]">Feugiat primis ligula risus auctor
                        egestas
                        and augue viverra mauri tortor in iaculis magna a feugiat mauris ipsum and placerat viverra
                        tortor
                        gravida purus.
                    </p>
                    <div>
                        <div
                            class="flex items-start gap-5 transition-all duration-300 mb-[33px] hover:translate-y-[-3px] last:mb-0">
                            <img class="h-full w-full object-cover max-w-[64px]" src="/icons/icon-temple.svg"
                                 alt="icon">
                            <div>
                                <h3 class="font-bold font-chivo text-[20px] leading-[26px] md:text-heading-4 mb-[14px]">
                                    Work
                                    smarter with powerful features
                                </h3>
                                <p class="text-excerpt">Aliquam a augue suscipit, luctus neque purus ipsum neque at
                                    dolor
                                    primis libero tempus, blandit</p>
                            </div>
                        </div>
                        <div
                            class="flex items-start gap-5 transition-all duration-300 mb-[33px] hover:translate-y-[-3px] last:mb-0">
                            <img class="h-full w-full object-cover max-w-[64px]" src="/icons/icon-animal.svg"
                                 alt="icon">
                            <div>
                                <h3 class="font-bold font-chivo text-[20px] leading-[26px] md:text-heading-4 mb-[14px]">
                                    Designed for teams of all sorts and sizes
                                </h3>
                                <p class="text-excerpt">Aliquam a augue suscipit, luctus neque purus ipsum neque at
                                    dolor
                                    primis libero tempus, blandit</p>
                            </div>
                        </div>
                        <div
                            class="flex items-start gap-5 transition-all duration-300 mb-[33px] hover:translate-y-[-3px] last:mb-0">
                            <img class="h-full w-full object-cover max-w-[64px]" src="/icons/icon-ball.svg"
                                 alt="icon">
                            <div>
                                <h3 class="font-bold font-chivo text-[20px] leading-[26px] md:text-heading-4 mb-[14px]">
                                    Advanced analytics to grow your business
                                </h3>
                                <p class="text-excerpt">Aliquam a augue suscipit, luctus neque purus ipsum neque at
                                    dolor
                                    primis libero tempus, blandit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-[12px] md:px-[36px] mt-[70px] xl:px-0 lg:mt-[133px]">
            <div class="text-center mb-[30px] md:mb-[90px]">
                <h2 class="font-bold font-chivo mx-auto text-[35px] leading-[44px] md:text-[46px] md:leading-[52px] lg:text-heading-1 text-gray-900 mb-5 md:mb-[30px] max-w-[725px]">
                    Discover powerful features to boost your productivity</h2>
                <p class="text-quote md:text-lead-lg text-gray-600 mx-auto max-w-[976px]">Excepteur sint occaecat
                    cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus
                    nulla.
                </p>
            </div>
            <div class="mx-auto lg:flex gap-[30px] max-w-[1190px]">
                <div
                    class="text-center rounded-2xl p-5 max-h-[300px] md:max-h-[450px] lg:max-h-[380px] xl:max-h-[455px] md:p-14 mb-[150px] md:mb-[300px] lg:mb-0 transition-all duration-300 hover:translate-y-[-3px] bg-yellow-100">
                    <h3 class="font-bold font-chivo text-[20px] leading-[26px] md:text-heading-4 mb-[18px]">
                        Cross-Platform
                    </h3>
                    <p class="text-md text-gray-600 mb-[22px] lg:mx-16">Your site is not complete with only landings.
                        Get essential inner pages using our ready demos.</p>
                    <img
                        class="p-5 rounded-2xl object-cover mx-auto w-full bg-[#EBECF4]"
                        src="/images/thumbnail-8.png" alt="Feature image">
                </div>
                <div
                    class="text-center rounded-2xl p-5 max-h-[300px] md:max-h-[450px] lg:max-h-[380px] xl:max-h-[455px] md:p-14 mb-[150px] md:mb-[300px] lg:mb-0 transition-all duration-300 hover:translate-y-[-3px] bg-yellow-100">
                    <h3 class="font-bold font-chivo text-[20px] leading-[26px] md:text-heading-4 mb-[18px]">Extremely
                        Flexible
                    </h3>
                    <p class="text-md text-gray-600 mb-[22px] lg:mx-16">Your site is not complete with only landings.
                        Get essential inner pages using our ready demos.</p>
                    <img
                        class="p-5 rounded-2xl object-cover mx-auto w-full bg-[#EBECF4]"
                        src="/images/thumbnail-9.png" alt="Feature image">
                </div>
            </div>
        </div>
        <div class="px-[12px] md:px-[36px] mt-[70px] xl:px-0 lg:mt-[286px]">
            <div class="text-center mb-[40px] lg:mb-[90px]">
                <h2 class="font-bold font-chivo mx-auto text-[35px] leading-[44px] md:text-[46px] md:leading-[52px] lg:text-heading-1 text-gray-900 mb-5 md:mb-[30px] max-w-[725px]">
                    Built exclusively for you</h2>
                <p class="text-quote md:text-lead-lg text-gray-600 mx-auto max-w-[976px]">Excepteur sint occaecat
                    cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum — semper quis lectus
                    nulla.
                </p>
            </div>
            <div class="lg:flex lg:items-center gap-[30px]">
                <div
                    class="flex items-start gap-5 transition-all duration-300 mb-[33px] hover:translate-y-[-3px] border-b border-gray-200 pb-[50px] last:mb-0">
                    <img class="h-full w-full object-cover max-w-[64px]" src="/icons/icon-resources.svg"
                         alt="icon">
                    <div>
                        <h3 class="font-bold font-chivo text-[20px] leading-[26px] md:text-heading-4 mb-[14px]">1.
                            Acquisition
                        </h3>
                        <p class="text-excerpt">Aliquam a augue suscipit, luctus neque purus ipsum neque at dolor primis
                            libero tempus, blandit</p>
                    </div>
                </div>
                <div
                    class="flex items-start gap-5 transition-all duration-300 mb-[33px] hover:translate-y-[-3px] border-b border-gray-200 pb-[50px] last:mb-0">
                    <img class="h-full w-full object-cover max-w-[64px]" src="/icons/icon-cards.svg"
                         alt="icon">
                    <div>
                        <h3 class="font-bold font-chivo text-[20px] leading-[26px] md:text-heading-4 mb-[14px]">2.
                            Activation
                        </h3>
                        <p class="text-excerpt">Aliquam a augue suscipit, luctus neque purus ipsum neque at dolor primis
                            libero tempus, blandit</p>
                    </div>
                </div>
                <div
                    class="flex items-start gap-5 transition-all duration-300 mb-[33px] hover:translate-y-[-3px] border-b border-gray-200 pb-[50px]">
                    <img class="h-full w-full object-cover max-w-[64px]" src="/icons/icon-stats.svg"
                         alt="icon">
                    <div>
                        <h3 class="font-bold font-chivo text-[20px] leading-[26px] md:text-heading-4 mb-[14px]">3.
                            Retention
                        </h3>
                        <p class="text-excerpt">Aliquam a augue suscipit, luctus neque purus ipsum neque at dolor primis
                            libero tempus, blandit</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-[12px] md:px-[36px] mt-[70px] xl:px-0 lg:mt-[150px]">
            <div class="lg:grid lg:grid-cols-2 gap-[150px]">
                <img
                    class="h-full w-full object-cover order-2 rounded-2xl mb-[30px] lg:mb-0 lg:flex-1"
                    src="/images/thumbnail-10.png" alt="Agon">
                <div class="flex-1 lg:gap-[30px] xl:gap-[64px]">
                    <span
                        class="font-chivo inline-block bg-bg-9 text-primary py-[14px] px-[28px] rounded-[50px] text-[14px] leading-[14px] mb-[22px]">Built Exclusively For You</span>
                    <h3 class="font-chivo font-bold lg:text-heading-1 md:text-[46px] md:leading-[52px] text-[35px] leading-[44px] mb-[22px]">
                        From the big picture to every tiny detail, we got you covered.</h3>
                    <p class="text-quote md:text-lead-lg text-gray-600 mb-[50px]">Necessary to deliver white glove,
                        fully managed campaigns that surpass industry benchmarks.Take your career to next level. Apply
                        to our team and see what we can do together. You’re good enough.
                    </p>
                    <div class="md:grid md:grid-cols-2 md:gap-y-[34px] lg:gap-x-[70px]">
                        <div class="mb-[30px] lg:mb-0">
                            <div class="flex items-center mb-[17px]">
                                <img class="mr-[9px]" src="/icons/icon-leaf.svg" alt="leaf icon">
                                <h4 class="text-heading-6 font-chivo font-bold">Boost your sale</h4>
                            </div>
                            <p class="text-excerpt text-gray-600">The latest design trends meet hand-crafted
                                templates.</p>
                        </div>
                        <div class="mb-[30px] lg:mb-0">
                            <div class="flex items-center mb-[17px]">
                                <img class="mr-[9px]" src="/icons/icon-leaf.svg" alt="leaf icon">
                                <h4 class="text-heading-6 font-chivo font-bold">Smart Installation Tools</h4>
                            </div>
                            <p class="text-excerpt text-gray-600">The latest design trends meet hand-crafted
                                templates.</p>
                        </div>
                        <div class="mb-[30px] lg:mb-0">
                            <div class="flex items-center mb-[17px]">
                                <img class="mr-[9px]" src="/icons/icon-leaf.svg" alt="leaf icon">
                                <h4 class="text-heading-6 font-chivo font-bold">Introducing New Features</h4>
                            </div>
                            <p class="text-excerpt text-gray-600">The latest design trends meet hand-crafted
                                templates.</p>
                        </div>
                        <div class="mb-[30px] lg:mb-0">
                            <div class="flex items-center mb-[17px]">
                                <img class="mr-[9px]" src="/icons/icon-leaf.svg" alt="leaf icon">
                                <h4 class="text-heading-6 font-chivo font-bold">Dynamic Boosting</h4>
                            </div>
                            <p class="text-excerpt text-gray-600">The latest design trends meet hand-crafted
                                templates.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-[12px] md:px-[36px] mt-[70px] xl:px-0 lg:mt-[150px]">
            <div class="rounded-2xl px-5 py-24 lg:pt-[96px] lg:px-[122px] lg:pb-[139px] bg-gray-100">
                <div class="text-center">
                    <h2 class="font-bold font-chivo mx-auto text-[35px] leading-[44px] md:text-[46px] md:leading-[52px] lg:text-heading-1 text-gray-900 mb-[8px] max-w-[725px]">
                        Our Happy Customers</h2>
                    <p class="text-quote md:text-lead-lg text-gray-600 mx-auto max-w-[976px]">
                    </p>
                </div>
                <p class="text-quote md:text-lead-lg text-gray-600 mx-auto text-center max-w-[509px] mb-[30px] lg:mb-[60px]">
                    Know about our clients, we are a woldwide corporate brand
                </p>
                <div class="grid grid-cols-1 gap-y-8 gap-x-[30px] lg:grid-cols-2">
                    <div
                        class="rounded-2xl py-[40px] px-[30px] md:py-[55px] md:px-[48px] hover:translate-y-[-3px] transition-all duration-300 bg-white">
                        <h4 class="font-bold font-chivo text-[14px] xl:text-heading-5 mb-[30px]">Satisfied client
                            testimonial
                        </h4>
                        <p class="text-text text-gray-600 mb-[30px]">Even factoring differences in body weight between
                            children and adults into account, it would still not reach an intoxicating level in
                            children.
                        </p>
                        <div class="flex items-center gap-6"><img
                                class="h-full w-full object-cover max-w-[80px] rounded-[4px]"
                                src="/images/avatar-5.png" alt="avatar">
                            <div>
                                <p class="text-lead font-bold mb-[3px]">Jane Cooper
                                </p>
                                <p class="text-md text-gray-500">Biffco Enterprises Ltd.</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="rounded-2xl py-[40px] px-[30px] md:py-[55px] md:px-[48px] hover:translate-y-[-3px] transition-all duration-300 bg-white">
                        <h4 class="font-bold font-chivo text-[14px] xl:text-heading-5 mb-[30px]">98% of residents
                            recommend us
                        </h4>
                        <p class="text-text text-gray-600 mb-[30px]">So yes, the alcohol (ethanol) in hand sanitizers
                            can be absorbed through the skin, but no, it would not cause intoxication.
                        </p>
                        <div class="flex items-center gap-6"><img
                                class="h-full w-full object-cover max-w-[80px] rounded-[4px]"
                                src="/images/avatar-6.png" alt="avatar">
                            <div>
                                <p class="text-lead font-bold mb-[3px]">Wade Warren
                                </p>
                                <p class="text-md text-gray-500">Krusty Krab</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="rounded-2xl py-[40px] px-[30px] md:py-[55px] md:px-[48px] hover:translate-y-[-3px] transition-all duration-300 bg-white">
                        <h4 class="font-bold font-chivo text-[14px] xl:text-heading-5 mb-[30px]">Our success stories
                        </h4>
                        <p class="text-text text-gray-600 mb-[30px]">“It has been an absolute pleasure dealing with Scan
                            during the lockdown. Our church began to livestream our services, and Scan had a great
                            selection of hardware....”
                        </p>
                        <div class="flex items-center gap-6"><img
                                class="h-full w-full object-cover max-w-[80px] rounded-[4px]"
                                src="/images/avatar-7.png" alt="avatar">
                            <div>
                                <p class="text-lead font-bold mb-[3px]">Leslie Alexander
                                </p>
                                <p class="text-md text-gray-500">Rundofase</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="rounded-2xl py-[40px] px-[30px] md:py-[55px] md:px-[48px] hover:translate-y-[-3px] transition-all duration-300 bg-white">
                        <h4 class="font-bold font-chivo text-[14px] xl:text-heading-5 mb-[30px]">This is simply
                            unbelievable
                        </h4>
                        <p class="text-text text-gray-600 mb-[30px]">“I was also lucky enough to read @Coding_Career
                            early and I was thoroughly blown away! It’s the book I wish I had when I started my dev
                            career.”
                        </p>
                        <div class="flex items-center gap-6"><img
                                class="h-full w-full object-cover max-w-[80px] rounded-[4px]"
                                src="/images/avatar-8.png" alt="avatar">
                            <div>
                                <p class="text-lead font-bold mb-[3px]">Jenny Wilson
                                </p>
                                <p class="text-md text-gray-500">Soylent Corp</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-[12px] md:px-[36px] mt-[70px] xl:px-0 lg:mt-[139px]">
            <div class="text-center">
                <h2 class="font-bold mx-auto text-[35px] leading-[44px] md:text-[46px] md:leading-[52px] lg:text-[70px] lg:leading-[82px] text-gray-900 mb-5 md:mb-[30px] max-w-[725px]">
                    Choose The Best Plan That’s For You</h2>
                <p class="text-quote md:text-lead-lg text-gray-600 mx-auto max-w-[976px]">
                </p>
            </div>
            <div class="flex items-center justify-center gap-[10px] mb-[54px] text-gray-900 text-gray-900">
                <p class="text-text">Bill Monthly
                </p>
                <div class="flex items-center justify-center">
                    <label class="flex items-center cursor-pointer" for="billSwitch">
                        <div class="relative">
                            <input class="sr-only peer" id="billSwitch" type="checkbox" name="">
                            <div
                                class="block rounded-full w-[65px] h-[30px] bg-gray-900 peer-checked:bg-green-900"></div>
                            <div id="foobar"
                                class="dot absolute left-1 top-1 rounded-full transition h-[21px] w-[21px] bg-white"></div>
                        </div>
                    </label>
                </div>
                <p class="text-text">Bill Annually
                </p>
            </div>
            <div class="package">
                <div class="grid package-list gap-[30px] md:grid-cols-2 xl:grid-cols-4">
                    <div
                        class="rounded-2xl p-[30px] md:py-[53px] md:px-[48px] bg-white flex flex-col justify-between transition-all duration-300 package-card p-[35px] border border-gray-900 bill-monthly">
                        <div>
                            <div class="mb-[21px]">
                                <span class="text-heading-3 font-bold font-chivo">$35</span>
                                <span class="text-sm font-bold text-gray-400 ml-[2px]">/month</span>
                            </div>
                            <h5 class="text-heading-5 font-chivo font-bold mb-[9px]">Standard</h5>
                            <p class="text-sm font-bold text-gray-400 mb-[43px]">All the basics for businesses that are
                                just getting started.</p>
                            <div class="w-full bg-gray-300 h-[1px] mb-[21px]"></div>
                            <ul class="mb-[76px]">
                                <li class="flex items-center gap-[10px] mb-[17px]">
                                    <img class="tick-icon" src="/icons/icon-tick.svg" alt="icon">
                                    <img class="hidden tick-icon-active" src="/icons/icon-tick-orange.svg" alt="icon">
                                    <span class="text-md text-gray-500">Unlimited updates</span>
                                </li>
                                <li class="flex items-center gap-[10px] mb-[17px]">
                                    <img class="tick-icon" src="/icons/icon-tick.svg" alt="icon">
                                    <img class="hidden tick-icon-active" src="/icons/icon-tick-orange.svg" alt="icon">
                                    <span class="text-md text-gray-500">Custom permissions</span>
                                </li>
                                <li class="flex items-center gap-[10px] mb-[17px]">
                                    <img src="/icons/icon-close.svg" alt="icon">
                                    <span class="text-md text-gray-500">Custom designs & features</span>
                                </li>
                            </ul>
                        </div>
                        <button type="button">
                            <a class="flex items-center inline-block z-10 relative transition-all duration-200 group py-[11px] px-[22px] rounded-md bg-gray-900 text-white hover:bg-gray-100 hover:text-gray-900 hover:-translate-y-[2px] border-[2px] border-[#171B24]"
                               href="#"><span
                                    class="block text-inherit w-full h-full rounded-md text-lg font-chivo font-semibold">Get Started</span>
                                <i>
                                    <img class="ml-[7px] w-[12px] filter-white group-hover:filter-black"
                                         src="/icons/icon-right.svg" alt="arrow right icon">
                                </i>
                            </a>
                        </button>
                    </div>
                    <div
                        class="rounded-2xl p-[30px] md:py-[53px] md:px-[48px] bg-white flex flex-col justify-between transition-all duration-300 package-card p-[35px] active border border-gray-900 bill-monthly">
                        <div>
                            <div class="mb-[21px]"><span class="text-heading-3 font-bold font-chivo">$89</span><span
                                    class="text-sm font-bold text-gray-400 ml-[2px]">/month</span></div>
                            <h5 class="text-heading-5 font-chivo font-bold mb-[9px]">Standard</h5>
                            <p class="text-sm font-bold text-gray-400 mb-[43px]">All the basics for businesses that are
                                just getting started.</p>
                            <div class="w-full bg-gray-300 h-[1px] mb-[21px]"></div>
                            <ul class="mb-[76px]">
                                <li class="flex items-center gap-[10px] mb-[17px]">
                                    <img class="tick-icon" src="/icons/icon-tick.svg" alt="icon">
                                    <img class="hidden tick-icon-active" src="/icons/icon-tick-orange.svg" alt="icon">
                                    <span class="text-md text-gray-500">Unlimited updates</span>
                                </li>
                                <li class="flex items-center gap-[10px] mb-[17px]">
                                    <img class="tick-icon" src="/icons/icon-tick.svg" alt="icon">
                                    <img class="hidden tick-icon-active" src="/icons/icon-tick-orange.svg" alt="icon">
                                    <span class="text-md text-gray-500">Custom permissions</span>
                                </li>
                                <li class="flex items-center gap-[10px] mb-[17px]">
                                    <img src="/icons/icon-close.svg" alt="icon">
                                    <span class="text-md text-gray-500">Custom designs & features</span>
                                </li>
                            </ul>
                        </div>
                        <button type="button">
                            <a class="flex items-center inline-block z-10 relative transition-all duration-200 group py-[11px] px-[22px] rounded-md bg-gray-900 text-white hover:bg-gray-100 hover:text-gray-900 hover:-translate-y-[2px] border-[2px] border-[#171B24]"
                               href="#">
                                <span
                                    class="block text-inherit w-full h-full rounded-md text-lg font-chivo font-semibold">Get Started</span>
                                <i>
                                    <img class="ml-[7px] w-[12px] filter-white group-hover:filter-black"
                                         src="/icons/icon-right.svg" alt="arrow right icon">
                                </i>
                            </a>
                        </button>
                    </div>
                    <div
                        class="rounded-2xl p-[30px] md:py-[53px] md:px-[48px] bg-white flex flex-col justify-between transition-all duration-300 package-card p-[35px] border border-gray-900 bill-monthly">
                        <div>
                            <div class="mb-[21px]">
                                <span class="text-heading-3 font-bold font-chivo">$125</span>
                                <span class="text-sm font-bold text-gray-400 ml-[2px]">/month</span>
                            </div>
                            <h5 class="text-heading-5 font-chivo font-bold mb-[9px]">Standard</h5>
                            <p class="text-sm font-bold text-gray-400 mb-[43px]">All the basics for businesses that are
                                just getting started.</p>
                            <div class="w-full bg-gray-300 h-[1px] mb-[21px]"></div>
                            <ul class="mb-[76px]">
                                <li class="flex items-center gap-[10px] mb-[17px]">
                                    <img class="tick-icon" src="/icons/icon-tick.svg" alt="icon">
                                    <img class="hidden tick-icon-active" src="/icons/icon-tick-orange.svg" alt="icon">
                                    <span class="text-md text-gray-500">Unlimited updates</span>
                                </li>
                                <li class="flex items-center gap-[10px] mb-[17px]">
                                    <img class="tick-icon" src="/icons/icon-tick.svg" alt="icon">
                                    <img class="hidden tick-icon-active" src="/icons/icon-tick-orange.svg" alt="icon">
                                    <span class="text-md text-gray-500">Custom permissions</span>
                                </li>
                                <li class="flex items-center gap-[10px] mb-[17px]">
                                    <img src="/icons/icon-close.svg" alt="icon">
                                    <span class="text-md text-gray-500">Custom designs & features</span>
                                </li>
                            </ul>
                        </div>
                        <button type="button">
                            <a class="flex items-center inline-block z-10 relative transition-all duration-200 group py-[11px] px-[22px] rounded-md bg-gray-900 text-white hover:bg-gray-100 hover:text-gray-900 hover:-translate-y-[2px] border-[2px] border-[#171B24]"
                               href="#">
                                <span
                                    class="block text-inherit w-full h-full rounded-md text-lg font-chivo font-semibold">Get Started</span>
                                <i>
                                    <img class="ml-[7px] w-[12px] filter-white group-hover:filter-black"
                                         src="/icons/icon-right.svg" alt="arrow right icon">
                                </i>
                            </a>
                        </button>
                    </div>
                    <div
                        class="rounded-2xl p-[30px] md:py-[53px] md:px-[48px] bg-white flex flex-col justify-between transition-all duration-300 package-card p-[35px] border border-gray-900 bill-monthly">
                        <div>
                            <div class="mb-[21px]"><span class="text-heading-3 font-bold font-chivo">$199</span><span
                                    class="text-sm font-bold text-gray-400 ml-[2px]">/month</span></div>
                            <h5 class="text-heading-5 font-chivo font-bold mb-[9px]">Standard</h5>
                            <p class="text-sm font-bold text-gray-400 mb-[43px]">All the basics for businesses that are
                                just getting started.</p>
                            <div class="w-full bg-gray-300 h-[1px] mb-[21px]"></div>
                            <ul class="mb-[76px]">
                                <li class="flex items-center gap-[10px] mb-[17px]">
                                    <img class="tick-icon" src="/icons/icon-tick.svg" alt="icon">
                                    <img class="hidden tick-icon-active" src="/icons/icon-tick-orange.svg" alt="icon">
                                    <span class="text-md text-gray-500">Unlimited updates</span>
                                </li>
                                <li class="flex items-center gap-[10px] mb-[17px]">
                                    <img class="tick-icon" src="/icons/icon-tick.svg" alt="icon">
                                    <img class="hidden tick-icon-active" src="/icons/icon-tick-orange.svg" alt="icon">
                                    <span class="text-md text-gray-500">Custom permissions</span>
                                </li>
                                <li class="flex items-center gap-[10px] mb-[17px]">
                                    <img src="/icons/icon-close.svg" alt="icon">
                                    <span class="text-md text-gray-500">Custom designs & features</span>
                                </li>
                            </ul>
                        </div>
                        <button type="button">
                            <a class="flex items-center inline-block z-10 relative transition-all duration-200 group py-[11px] px-[22px] rounded-md bg-gray-900 text-white hover:bg-gray-100 hover:text-gray-900 hover:-translate-y-[2px] border-[2px] border-[#171B24]"
                               href="#">
                                <span
                                    class="block text-inherit w-full h-full rounded-md text-lg font-chivo font-semibold">Get Started</span>
                                <i>
                                    <img class="ml-[7px] w-[12px] filter-white group-hover:filter-black"
                                         src="/icons/icon-right.svg" alt="arrow right icon">
                                </i>
                            </a>
                        </button>
                    </div>
                    <div
                        class="rounded-2xl p-[30px] md:py-[53px] md:px-[48px] bg-white flex flex-col justify-between transition-all duration-300 package-card p-[35px] border border-gray-900 bill-annually">
                        <div>
                            <div class="mb-[21px]">
                                <span class="text-heading-3 font-bold font-chivo">$420</span>
                                <span class="text-sm font-bold text-gray-400 ml-[2px]">/year</span>
                            </div>
                            <h5 class="text-heading-5 font-chivo font-bold mb-[9px]">Standard</h5>
                            <p class="text-sm font-bold text-gray-400 mb-[43px]">All the basics for businesses that are
                                just getting started.</p>
                            <div class="w-full bg-gray-300 h-[1px] mb-[21px]"></div>
                            <ul class="mb-[76px]">
                                <li class="flex items-center gap-[10px] mb-[17px]">
                                    <img class="tick-icon" src="/icons/icon-tick.svg" alt="icon">
                                    <img class="hidden tick-icon-active" src="/icons/icon-tick-orange.svg" alt="icon">
                                    <span class="text-md text-gray-500">Unlimited updates</span>
                                </li>
                                <li class="flex items-center gap-[10px] mb-[17px]">
                                    <img class="tick-icon" src="/icons/icon-tick.svg" alt="icon">
                                    <img class="hidden tick-icon-active" src="/icons/icon-tick-orange.svg" alt="icon">
                                    <span class="text-md text-gray-500">Custom permissions</span>
                                </li>
                                <li class="flex items-center gap-[10px] mb-[17px]">
                                    <img src="/icons/icon-close.svg" alt="icon">
                                    <span class="text-md text-gray-500">Custom designs & features</span>
                                </li>
                            </ul>
                        </div>
                        <button type="button">
                            <a class="flex items-center inline-block z-10 relative transition-all duration-200 group py-[11px] px-[22px] rounded-md bg-gray-900 text-white hover:bg-gray-100 hover:text-gray-900 hover:-translate-y-[2px] border-[2px] border-[#171B24]"
                               href="#">
                                <span
                                    class="block text-inherit w-full h-full rounded-md text-lg font-chivo font-semibold">Get Started</span>
                                <i>
                                    <img class="ml-[7px] w-[12px] filter-white group-hover:filter-black"
                                         src="/icons/icon-right.svg" alt="arrow right icon">
                                </i>
                            </a>
                        </button>
                    </div>
                    <div
                        class="rounded-2xl p-[30px] md:py-[53px] md:px-[48px] bg-white flex flex-col justify-between transition-all duration-300 package-card p-[35px] active border border-gray-900 bill-annually">
                        <div>
                            <div class="mb-[21px]">
                                <span class="text-heading-3 font-bold font-chivo">$1068</span>
                                <span class="text-sm font-bold text-gray-400 ml-[2px]">/year</span>
                            </div>
                            <h5 class="text-heading-5 font-chivo font-bold mb-[9px]">Standard</h5>
                            <p class="text-sm font-bold text-gray-400 mb-[43px]">All the basics for businesses that are
                                just getting started.</p>
                            <div class="w-full bg-gray-300 h-[1px] mb-[21px]"></div>
                            <ul class="mb-[76px]">
                                <li class="flex items-center gap-[10px] mb-[17px]">
                                    <img class="tick-icon" src="/icons/icon-tick.svg" alt="icon">
                                    <img class="hidden tick-icon-active" src="/icons/icon-tick-orange.svg" alt="icon">
                                    <span class="text-md text-gray-500">Unlimited updates</span>
                                </li>
                                <li class="flex items-center gap-[10px] mb-[17px]">
                                    <img class="tick-icon" src="/icons/icon-tick.svg" alt="icon">
                                    <img class="hidden tick-icon-active" src="/icons/icon-tick-orange.svg" alt="icon">
                                    <span class="text-md text-gray-500">Custom permissions</span>
                                </li>
                                <li class="flex items-center gap-[10px] mb-[17px]">
                                    <img src="/icons/icon-close.svg" alt="icon">
                                    <span class="text-md text-gray-500">Custom designs & features</span>
                                </li>
                            </ul>
                        </div>
                        <button type="button">
                            <a
                                class="flex items-center inline-block z-10 relative transition-all duration-200 group py-[11px] px-[22px] rounded-md bg-gray-900 text-white hover:bg-gray-100 hover:text-gray-900 hover:-translate-y-[2px] border-[2px] border-[#171B24]"
                                href="#">
                                <span
                                    class="block text-inherit w-full h-full rounded-md text-lg font-chivo font-semibold">Get Started</span>
                                <i>
                                    <img class="ml-[7px] w-[12px] filter-white group-hover:filter-black"
                                         src="/icons/icon-right.svg" alt="arrow right icon">
                                </i>
                            </a>
                        </button>
                    </div>
                    <div
                        class="rounded-2xl p-[30px] md:py-[53px] md:px-[48px] bg-white flex flex-col justify-between transition-all duration-300 package-card p-[35px] border border-gray-900 bill-annually">
                        <div>
                            <div class="mb-[21px]">
                                <span class="text-heading-3 font-bold font-chivo">$1500</span>
                                <span
                                    class="text-sm font-bold text-gray-400 ml-[2px]">/year</span>
                            </div>
                            <h5 class="text-heading-5 font-chivo font-bold mb-[9px]">Standard</h5>
                            <p class="text-sm font-bold text-gray-400 mb-[43px]">All the basics for businesses that are
                                just getting started.</p>
                            <div class="w-full bg-gray-300 h-[1px] mb-[21px]"></div>
                            <ul class="mb-[76px]">
                                <li class="flex items-center gap-[10px] mb-[17px]">
                                    <img class="tick-icon" src="/icons/icon-tick.svg" alt="icon">
                                    <img
                                        class="hidden tick-icon-active" src="/icons/icon-tick-orange.svg"
                                        alt="icon">
                                    <span class="text-md text-gray-500">Unlimited updates</span>
                                </li>
                                <li class="flex items-center gap-[10px] mb-[17px]">
                                    <img class="tick-icon" src="/icons/icon-tick.svg" alt="icon">
                                    <img
                                        class="hidden tick-icon-active" src="/icons/icon-tick-orange.svg"
                                        alt="icon">
                                    <span class="text-md text-gray-500">Custom permissions</span>
                                </li>
                                <li class="flex items-center gap-[10px] mb-[17px]">
                                    <img src="/icons/icon-close.svg" alt="icon">
                                    <span class="text-md text-gray-500">Custom designs & features</span>
                                </li>
                            </ul>
                        </div>
                        <button type="button">
                            <a
                                class="flex items-center inline-block z-10 relative transition-all duration-200 group py-[11px] px-[22px] rounded-md bg-gray-900 text-white hover:bg-gray-100 hover:text-gray-900 hover:-translate-y-[2px] border-[2px] border-[#171B24]"
                                href="#">
                                <span
                                    class="block text-inherit w-full h-full rounded-md text-lg font-chivo font-semibold">Get Started</span>
                                <i>
                                    <img class="ml-[7px] w-[12px] filter-white group-hover:filter-black"
                                         src="/icons/icon-right.svg" alt="arrow right icon">
                                </i>
                            </a>
                        </button>
                    </div>
                    <div
                        class="rounded-2xl p-[30px] md:py-[53px] md:px-[48px] bg-white flex flex-col justify-between transition-all duration-300 package-card p-[35px] border border-gray-900 bill-annually">
                        <div>
                            <div class="mb-[21px]">
                                <span class="text-heading-3 font-bold font-chivo">$2388</span>
                                <span
                                    class="text-sm font-bold text-gray-400 ml-[2px]">/year</span>
                            </div>
                            <h5 class="text-heading-5 font-chivo font-bold mb-[9px]">Standard</h5>
                            <p class="text-sm font-bold text-gray-400 mb-[43px]">All the basics for businesses that are
                                just getting started.</p>
                            <div class="w-full bg-gray-300 h-[1px] mb-[21px]"></div>
                            <ul class="mb-[76px]">
                                <li class="flex items-center gap-[10px] mb-[17px]">
                                    <img class="tick-icon" src="/icons/icon-tick.svg" alt="icon">
                                    <img
                                        class="hidden tick-icon-active" src="./assets/images/icons/icon-tick-orange.svg"
                                        alt="icon">
                                    <span class="text-md text-gray-500">Unlimited updates</span>
                                </li>
                                <li class="flex items-center gap-[10px] mb-[17px]">
                                    <img class="tick-icon" src="/icons/icon-tick.svg" alt="icon">
                                    <img
                                        class="hidden tick-icon-active" src="/icons/icon-tick-orange.svg"
                                        alt="icon">
                                    <span class="text-md text-gray-500">Custom permissions</span>
                                </li>
                                <li class="flex items-center gap-[10px] mb-[17px]">
                                    <img
                                        src="/icons/icon-close.svg" alt="icon">
                                    <span class="text-md text-gray-500">Custom designs & features</span>
                                </li>
                            </ul>
                        </div>
                        <button type="button">
                            <a
                                class="flex items-center z-10 relative transition-all duration-200 group py-[11px] px-[22px] rounded-md bg-gray-900 text-white hover:bg-gray-100 hover:text-gray-900 hover:-translate-y-[2px] border-[2px] border-[#171B24]"
                                href="#">
                                <span
                                    class="block text-inherit w-full h-full rounded-md text-lg font-chivo font-semibold">Get Started</span>
                                <i>
                                    <img class="ml-[7px] w-[12px] filter-white group-hover:filter-black"
                                         src="{{ asset('/icons/icon-right.svg') }}" alt="arrow right icon">
                                </i>
                            </a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-[12px] md:px-[36px] mt-[70px] xl:px-0 md:mt-[150px]">
            <div class="rounded-2xl p-[30px] gap-5 mx-auto bg-purple-200 px-[15px] py-[50px] md:flex md:px-[52px] md:py-[72px] lg:gap-[40px] lg:h-[420px] xl:h-[390px] max-w-[1190px]">
                <div class="flex-1 mb-[30px]">
                    <p class="text-capitalized uppercase text-gray-500 tracking-[2px] mb-[13px]">newsletter</p>
                    <h4 class="font-bold font-chivo text-[28px] leading-[32px] md:text-heading-2 mb-[20px]">Subscribe our newsletter</h4>
                    <p class="text-text text-gray-500">By clicking the button, you are agreeing with our</p>
                    <a class="text-green-900" href="/">Term & Conditions</a>
                    <form class="mt-[30px]" action="/">
                        <div class="bg-white flex items-center justify-between p-3 rounded-[55px]">
                            <input class="ml-[25px]" type="text" placeholder="Enter your mail ...">
                            <button class="rounded-full bg-green-900 grid place-items-center w-[56px] h-[56px]" type="submit">
                                <img class="!filter-white !text-white" src="{{asset('/icons/icon-right.svg')}}" alt="">
                            </button>
                        </div>
                    </form>
                </div>
                <div class="relative flex-1">
                    <img class="h-full w-full object-cover rounded-2xl img-shadow lg:absolute lg:max-w-[332px] lg:h-[403px] lg:right-0" src="{{asset('/images/thumbnail-2.png')}}" alt="Agon">
                    <img class=" object-cover absolute animate-float w-[225px] h-[170px] rounded-[14px] bottom-[-20px] left-[-10px]" src="{{asset('/images/thumbnail-2.png')}}" alt="Agon">
                </div>
            </div>
        </div>
    </div>
@endsection
