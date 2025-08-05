@extends('layouts.app')

@section('title', 'About - All Next Ver')

@section('content')
    <div class="lg:w-[1340px] mx-auto">
        <div>
            <div class="px-[12px] md:px-[36px] mt-[70px] xl:px-0 text-center">
                <div class="text-center mb-[35px] md:mb-[43px]">
                    <h2 class="font-bold font-chivo mx-auto text-[35px] leading-[44px] md:text-[46px] md:leading-[52px] lg:text-heading-1 text-gray-900 mb-5 md:mb-[30px] max-w-[725px]">
                        Our Story</h2>
                    <p class="text-quote md:text-lead-lg text-gray-600 mx-auto max-w-[976px]">
                    </p>
                </div>
                <h3 class="font-bold font-chivo text-[20px] leading-[26px] md:text-heading-4 text-gray-600 mx-auto mb-[40px] md:mb-[75px] md:w-[47ch]">
                    We supply enterprises, organizations and institutes of high-tech industries with modern components.
                    We
                    build long-term trusting relationships with our customers and partnes for further fruitful
                    cooperations.
                </h3>
                <div class="relative mx-auto max-w-[1190px]">
                    <img class="h-full w-full object-cover rounded-2xl" src="{{asset('images/thumbnail-23.png')}}"
                         alt="Agon">
                    <button
                        class="rounded-full bg-white grid place-items-center absolute play-video w-[60px] h-[60px] md:w-[138px] md:h-[138px] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
                        <img src="{{asset('icons/icon-play.svg')}}" alt="play button" width="26">
                    </button>
                </div>
            </div>
            <div class="px-[12px] md:px-[36px] mt-[70px] xl:px-0 lg:mt-[138px] lg:w-[1350px] mx-auto">
                <div class="text-center mb-[45px] lg:mb-[88px]">
                    <h2 class="font-bold font-chivo mx-auto text-[35px] leading-[44px] md:text-[46px] md:leading-[52px] lg:text-heading-1 text-gray-900 mb-5 md:mb-[30px] max-w-full">
                        Providing solutions of every kind</h2>
                    <p class="text-quote md:text-lead-lg text-gray-600 mx-auto max-w-[743px]">
                        In a professional context it often happens that private or corporate clients order a publication
                        to
                        publish news.
                    </p>
                </div>
                <div class="lg:flex lg:items-center gap-[30px]">
                    <div
                        class="flex items-start gap-5 transition-all duration-300 mb-[33px] hover:translate-y-[-3px] border-b border-gray-200 pb-[50px] last:mb-0">
                        <img class="h-full w-full object-cover max-w-[64px]" src="{{asset('icons/icon-resources.svg')}}"
                             alt="icon">
                        <div>
                            <h3 class="font-bold font-chivo text-[20px] leading-[26px] md:text-heading-4 mb-[14px]">
                                1. Acquisition
                            </h3>
                            <p class="text-excerpt">
                                Aliquam a augue suscipit, luctus neque purus ipsum neque at dolor primis libero tempus,
                                blandit</p>
                        </div>
                    </div>
                    <div
                        class="flex items-start gap-5 transition-all duration-300 mb-[33px] hover:translate-y-[-3px] border-b border-gray-200 pb-[50px] last:mb-0">
                        <img class="h-full w-full object-cover max-w-[64px]" src="{{asset('icons/icon-cards.svg')}}"
                             alt="icon">
                        <div>
                            <h3 class="font-bold font-chivo text-[20px] leading-[26px] md:text-heading-4 mb-[14px]">2.
                                Activation
                            </h3>
                            <p class="text-excerpt">Aliquam a augue suscipit, luctus neque purus ipsum neque at dolor
                                primis
                                libero tempus, blandit</p>
                        </div>
                    </div>
                    <div
                        class="flex items-start gap-5 transition-all duration-300 mb-[33px] hover:translate-y-[-3px] border-b border-gray-200 pb-[50px]">
                        <img class="h-full w-full object-cover max-w-[64px]" src="{{asset('icons/icon-stats.svg')}}"
                             alt="icon">
                        <div>
                            <h3 class="font-bold font-chivo text-[20px] leading-[26px] md:text-heading-4 mb-[14px]">3.
                                Retention
                            </h3>
                            <p class="text-excerpt">Aliquam a augue suscipit, luctus neque purus ipsum neque at dolor
                                primis
                                libero tempus, blandit</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="full-width bg-bg-6">
                <div
                    class="px-[12px] md:px-[36px] mt-[70px] xl:px-0 flex flex-col gap-6 mx-auto py-[98px] lg:flex-row max-w-[1320px]">
                    <div class="flex-[1.36] mr-[90px]">
                    <span
                        class="font-chivo inline-block bg-bg-9 text-gray-900 py-[14px] px-[28px] rounded-[50px] text-[14px] leading-[14px] mb-[36px]">Built Exclusively For You</span>
                        <h1 class="font-extrabold font-chivo text-[35px] leading-[44px] sm:text-[46px] sm:leading-[52px] md:text-heading-1 mb-[25px]">
                            Don’t take our word for it. See what our clients say.
                        </h1>
                        <p class="text-quote md:text-lead-lg text-gray-600 mb-[55px]">Aliquam a augue suscipit, luctus
                            neque
                            purus ipsum neque at dolor primis libero tempus, blandit
                        </p>
                        <button type="button">
                            <a
                                class="flex items-center inline-block z-10 relative transition-all duration-200 group px-[22px] py-[15px] lg:px-[32px] lg:py-[22px] rounded-[50px] bg-gray-100 text-gray-900 hover:bg-gray-900 hover:text-white hover:-translate-y-[2px] text-gray-900 bg-white w-fit"
                                href="#">
                            <span
                                class="block text-inherit w-full h-full rounded-[50px] text-lg font-chivo font-semibold">Learn More</span>
                                <i>
                                    <img class="ml-[7px] w-[12px] filter-black group-hover:filter-white"
                                         src="{{asset('icons/icon-right.svg')}}" alt="arrow right icon">
                                </i>
                            </a>
                        </button>
                    </div>
                    <div class="flex flex-col gap-8 flex-1">
                        <x-user-box
                            description="Your company is truly upstanding and is behind its product 100%. It's the perfect solution for our business. It has really helped our business."
                            name="Junaid Bin Jaman"
                            title="Web & Mobile App Developer"
                        />
                        <x-user-box
                            description="Your company is truly upstanding and is behind its product 100%. It's the perfect solution for our business. It has really helped our business."
                            name="Junaid Bin Jaman"
                            title="Web & Mobile App Developer"
                        />
                    </div>
                    <div class="flex flex-col gap-8 flex-1">
                        <x-user-box
                            description="Your company is truly upstanding and is behind its product 100%. It's the perfect solution for our business. It has really helped our business."
                            name="Junaid Bin Jaman"
                            title="Web & Mobile App Developer"
                        />
                        <x-user-box
                            description="Your company is truly upstanding and is behind its product 100%. It's the perfect solution for our business. It has really helped our business."
                            name="Jeff Melony"
                            title="Managing Director"
                        />
                    </div>
                </div>
            </div>
            <div class="px-[12px] md:px-[36px] mt-[70px] xl:px-0 lg:mt-[150px] ">
                <div class="lg:grid lg:grid-cols-2 gap-[150px]">
                    <img
                        class="h-full w-full object-cover order-first rounded-2xl mb-[30px] lg:mb-0 lg:flex-1"
                        src="{{asset('images/thumbnail-24.png')}}" alt="Agon">
                    <div class="flex-1 order-1 lg:gap-[30px] xl:gap-[64px]">
                    <span
                        class="font-chivo inline-block bg-bg-6 text-green-900 py-[14px] px-[28px] rounded-[50px] text-[14px] leading-[14px] mb-[22px]">An Exceptionally unique experience Tailored to you</span>
                        <h3 class="font-chivo font-bold lg:text-heading-1 md:text-[46px] md:leading-[52px] text-[35px] leading-[44px] mb-[22px]">
                            From the big picture to every tiny detail, we got you covered.</h3>
                        <p class="text-quote md:text-lead-lg text-gray-600 mb-[50px]">Necessary to deliver white glove,
                            fully managed campaigns that surpass industry benchmarks.Take your career to next level.
                            Apply
                            to our team and see what we can do together. You’re good enough.
                        </p>
                        <div class="md:grid md:grid-cols-2 md:gap-y-[34px] lg:gap-x-[70px]">
                            <div class="mb-[30px] lg:mb-0">
                                <div class="flex items-center mb-[17px]">
                                    <img class="mr-[9px]" src="{{asset('icons/icon-leaf.svg')}}" alt="leaf icon">
                                    <h4 class="text-heading-6 font-chivo font-bold">Boost your sale</h4>
                                </div>
                                <p class="text-excerpt text-gray-600">The latest design trends meet hand-crafted
                                    templates.</p>
                            </div>
                            <div class="mb-[30px] lg:mb-0">
                                <div class="flex items-center mb-[17px]">
                                    <img class="mr-[9px]" src="{{asset('icons/icon-leaf.svg')}}" alt="leaf icon">
                                    <h4 class="text-heading-6 font-chivo font-bold">Smart Installation Tools</h4>
                                </div>
                                <p class="text-excerpt text-gray-600">The latest design trends meet hand-crafted
                                    templates.</p>
                            </div>
                            <div class="mb-[30px] lg:mb-0">
                                <div class="flex items-center mb-[17px]">
                                    <img class="mr-[9px]" src="{{asset('icons/icon-leaf.svg')}}" alt="leaf icon">
                                    <h4 class="text-heading-6 font-chivo font-bold">Introducing New Features</h4>
                                </div>
                                <p class="text-excerpt text-gray-600">The latest design trends meet hand-crafted
                                    templates.</p>
                            </div>
                            <div class="mb-[30px] lg:mb-0">
                                <div class="flex items-center mb-[17px]">
                                    <img class="mr-[9px]" src="{{asset('icons/icon-leaf.svg')}}" alt="leaf icon">
                                    <h4 class="text-heading-6 font-chivo font-bold">Dynamic Boosting</h4>
                                </div>
                                <p class="text-excerpt text-gray-600">The latest design trends meet hand-crafted
                                    templates.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-[12px] md:px-[36px] mt-[70px] xl:px-0 lg:mt-[88px]">
                <div
                    class="grid grid-cols-2 flex-1 text-center gap-2 gap-y-8 md:grid-cols-2 xl:gap-y-[70px] lg:grid-cols-5 mb-[44px] md:mb-[88px]">
                    <div>
                        <h1 class="font-chivo font-bold lg:text-display-3 md:text-[45px] md:leading-[52px] text-[35px] leading-[42px] mb-1 text-green-900">
                            +12
                        </h1>
                        <p class="text-text text-gray-500 mx-auto md:w-[26ch]">years in business</p>
                    </div>
                    <div>
                        <h1 class="font-chivo font-bold lg:text-display-3 md:text-[45px] md:leading-[52px] text-[35px] leading-[42px] mb-1 text-green-900">
                            2K+
                        </h1>
                        <p class="text-text text-gray-500 mx-auto md:w-[26ch]">projects done</p>
                    </div>
                    <div>
                        <h1 class="font-chivo font-bold lg:text-display-3 md:text-[45px] md:leading-[52px] text-[35px] leading-[42px] mb-1 text-green-900">
                            28+
                        </h1>
                        <p class="text-text text-gray-500 mx-auto md:w-[26ch]">countries /offices</p>
                    </div>
                    <div>
                        <h1 class="font-chivo font-bold lg:text-display-3 md:text-[45px] md:leading-[52px] text-[35px] leading-[42px] mb-1 text-green-900">
                            86
                        </h1>
                        <p class="text-text text-gray-500 mx-auto md:w-[26ch]">Constant clients</p>
                    </div>
                    <div>
                        <h1 class="font-chivo font-bold lg:text-display-3 md:text-[45px] md:leading-[52px] text-[35px] leading-[42px] mb-1 text-green-900">
                            +12
                        </h1>
                        <p class="text-text text-gray-500 mx-auto md:w-[26ch]">years in business</p>
                    </div>
                </div>
                <div class="w-full bg-gray-300 h-[1px]"></div>
            </div>
            <div class="px-[12px] md:px-[36px] mt-[70px] xl:px-0 lg:mt-[128px]">
                <div class="text-center mb-[30px] md:mb-[90px]">
                    <h2 class="font-bold font-chivo mx-auto text-[35px] leading-[44px] md:text-[46px] md:leading-[52px] lg:text-heading-1 text-gray-900 mb-5 md:mb-[30px] md:w-[13ch]">
                        Building the Work Ecosystem</h2>
                    <p class="text-quote md:text-lead-lg text-gray-600 mx-auto md:w-[56ch]">From year to year we strive
                        to
                        invent the most innovative technology that is used by both small and big enterprises
                    </p>
                </div>
                <div class="mx-auto lg:flex gap-[30px] max-w-[1190px]">
                    <div
                        class="text-center rounded-2xl p-5 max-h-[300px] md:max-h-[450px] lg:max-h-[380px] xl:max-h-[455px] md:p-14 mb-[150px] md:mb-[300px] lg:mb-0 transition-all duration-300 hover:translate-y-[-3px] bg-bg-2">
                        <h3 class="font-bold font-chivo text-[20px] leading-[26px] md:text-heading-4 mb-[18px]">
                            Cross-Platform
                        </h3>
                        <p class="text-md text-gray-600 mb-[22px] lg:mx-16">Your site is not complete with only
                            landings.
                            Get essential inner pages using our ready demos.</p>
                        <img
                            class="p-5 rounded-2xl object-cover mx-auto w-full bg-[#EBECF4]"
                            src="{{asset('images/thumbnail-8.png')}}" alt="Feature image">
                    </div>
                    <div
                        class="text-center rounded-2xl p-5 max-h-[300px] md:max-h-[450px] lg:max-h-[380px] xl:max-h-[455px] md:p-14 mb-[150px] md:mb-[300px] lg:mb-0 transition-all duration-300 hover:translate-y-[-3px] bg-bg-6">
                        <h3 class="font-bold font-chivo text-[20px] leading-[26px] md:text-heading-4 mb-[18px]">
                            Extremely
                            Flexible
                        </h3>
                        <p class="text-md text-gray-600 mb-[22px] lg:mx-16">Your site is not complete with only
                            landings.
                            Get essential inner pages using our ready demos.</p>
                        <img
                            class="p-5 rounded-2xl object-cover mx-auto w-full bg-[#EBECF4]"
                            src="{{asset('images/thumbnail-9.png')}}" alt="Feature image">
                    </div>
                </div>
            </div>
            <div class="px-[12px] md:px-[36px] mt-[70px] xl:px-0 lg:mt-[238px]">
                <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between mb-[45px] md:mb-[87px]">
                    <div>
                        <h2 class="text-gray-900 font-bold font-chivo mb-5 text-[35px] leading-[44px] md:text-[46px] md:leading-[52px] lg:text-heading-1 md:mb-[30px] max-w-[725px]">
                            From Our Blog</h2>
                        <p class="text-quote md:text-lead-lg text-gray-600">From Our blog and Event fanpage
                        </p>
                    </div>
                    <button type="button">
                        <a
                            class="flex items-center z-10 relative transition-all duration-200 group px-[22px] py-[15px] lg:px-[32px] lg:py-[22px] rounded-[50px] bg-gray-900 text-white hover:bg-gray-100 hover:text-gray-900 hover:-translate-y-[2px] text-white bg-gray-900 w-fit"
                            href="#">
                        <span
                            class="block text-inherit w-full h-full rounded-[50px] text-lg font-chivo font-semibold">View More</span>
                            <i>
                                <img class="ml-[7px] w-[12px] filter-white group-hover:filter-black"
                                     src="{{asset('icons/icon-right.svg')}}" alt="arrow right icon">
                            </i>
                        </a>
                    </button>
                </div>
                <div class="lg:grid lg:grid-cols-3 lg:gap-x-5 xl:gap-x-[30px] gap-y-[50px] xl:gap-y-[87px]">

                    <x-post-box
                        post_category="Marketing Event"
                        post_title="How To Blow Through Capital At An Incredible Rate"
                        href="/hhh"
                        thumbnail="images/thumbnail-4.png"
                    />

                    <x-post-box
                        post_category="Marketing Event"
                        post_title="How To Blow Through Capital At An Incredible Rate"
                        href="/hhh"
                        thumbnail="images/thumbnail-4.png"
                    />

                    <x-post-box
                        post_category="Marketing Event"
                        post_title="How To Blow Through Capital At An Incredible Rate"
                        href="/hhh"
                        thumbnail="images/thumbnail-4.png"
                    />
                </div>
            </div>
            <x-newsletter-subscription-box />
            <div
                class="bg fixed bottom-28 rounded-full grid place-items-center opacity-0 invisible transition-all duration-300 right-[20px] z-[9999] w-[48px] h-[48px]"
                id="backToTop"><a class="rounded-full bg-green-900 grid place-items-center w-[48px] h-[48px]"
                                  href="#top"><img src="./assets/images/icons/icon-up.svg" alt="to top icon"></a></div>
        </div>
    </div>
@endsection
