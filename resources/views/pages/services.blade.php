@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <div class="lg:w-[1340px] mx-auto">
        <div class="px-[12px] md:px-[36px] mt-[70px] xl:px-0 text-center z-10 relative lg:mt-[99px]">
            <div class="text-center">
                <h2 class="font-bold font-chivo mx-auto text-gray-900 mb-5 md:mb-[30px] text-[35px] leading-[44px] md:text-[46px] md:leading-[52px] lg:text-heading-1 md:w-[20ch]">
                    Advanced<span class="text-green-900">analytics</span> to grow your business</h2>
                <p class="text-quote md:text-lead-lg text-gray-500 mx-auto md:w-[47ch] mb-[50px]">Connect your
                    conversations with the tools and services that you use to get the job done. With over 1,500 apps and
                    a robust API
                </p>
            </div>
            <div class="flex items-center justify-center mb-[87px]">
                <button type="button">
                    <a
                        class="flex items-center z-10 relative transition-all duration-200 group px-[22px] py-[15px] lg:px-[32px] lg:py-[22px] rounded-md bg-gray-900 text-white hover:bg-gray-100 hover:text-gray-900 hover:-translate-y-[2px] text-white bg-black text-heading-6 tracking-wide mr-[22px]"
                        href="#">
                        <span
                            class="block text-inherit w-full h-full rounded-md text-lg font-chivo font-semibold">Get Start</span><i>
                            <img class="ml-[7px] w-[12px] filter-white group-hover:filter-black"
                                 src="{{asset('icons/icon-right.svg')}}" alt="arrow right icon">
                        </i>
                    </a>
                </button>
                <div class="flex items-center gap-3">
                    <i>
                        <img src="{{asset('icons/icon-button.svg')}}" alt="">
                    </i>
                    <a
                        class="text-base flex items-center font-chivo font-medium text-[18px] leading-[18px] gap-[5px]"
                        href="/">How it works</a>
                </div>
            </div>
            <div class="relative mx-auto max-w-[1190px]">
                <img class="h-full w-full object-cover rounded-2xl" src="{{asset('images/hero-services-2.png')}}"
                     alt="Agon">
            </div>
        </div>
        <div class="px-[12px] md:px-[36px] mt-[70px] xl:px-0 mt-[30px] md:mt-[80px] lg:mt-[143px]">
            <h2 class="font-bold font-chivo text-[25px] leading-[30px] md:text-[35px] text-center mb-[40px] md:mb-[60px] lg:mb-[84px]">
                Trusted by the world’s leading companies
            </h2>
            <div class="flex flex-wrap items-center justify-center mb-[30px] md:mb-[60px] lg:mb-[80px]">
                <x-brand-logo logo="images/partner-logo-1.svg"/>
                <x-brand-logo logo="images/partner-logo-2.svg"/>
                <x-brand-logo logo="images/partner-logo-3.svg"/>
                <x-brand-logo logo="images/partner-logo-4.svg"/>
                <x-brand-logo logo="images/partner-logo-5.svg"/>
                <x-brand-logo logo="images/partner-logo-6.svg"/>
                <x-brand-logo logo="images/partner-logo-2.svg"/>
                <x-brand-logo logo="images/partner-logo-1.svg"/>
            </div>
            <div class="w-full bg-gray-300 h-[1px] mb-[50px] md:mb-[90px] lg:mb-[150px]"></div>
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
                <x-featured-box
                    box_title="Cross-Platform"
                    box_description="Your site is not complete with only landings.Get essential inner pages using our ready demos."
                    box_featured_image="images/thumbnail-8.png"
                />

                <x-featured-box
                    box_title="Cross-Platform"
                    box_description="Your site is not complete with only landings.Get essential inner pages using our ready demos."
                    box_featured_image="images/thumbnail-8.png"
                />
            </div>
        </div>
        <div class="px-[12px] md:px-[36px] mt-[70px] xl:px-0 lg:mt-[260px]">
            <div class="bg-bg-2 relative px-[12px] py-[70px] rounded-[50px]">
                <div class="text-center relative mb-[70px] md:mb-[90px]">
                    <h2 class="font-bold font-chivo mx-auto text-[35px] leading-[44px] md:text-[46px] md:leading-[52px] lg:text-heading-1 text-gray-900 mb-5 md:mb-[30px] max-w-[725px]">
                        What We Offer</h2>
                    <p class="text-quote md:text-lead-lg text-gray-600 mx-auto md:w-[43ch]">What makes us different from
                        others? We give holistic solutions with strategy, design &amp; technology.
                    </p>
                </div>


                <div id="default-carousel" class="relative w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="offer-list dots flex">
                                <x-service-box
                                    service_title="Market research"
                                    service_description="One make creepeth, man bearing theira firmament."
                                    service_thumbnail="icons/icon-trees.svg"
                                />
                                <x-service-box
                                    service_title="Strategic Consulting"
                                    service_thumbnail="images/icons/icon-sun.svg"
                                    service_description="One make creepeth, man bearing theira firmament."
                                />
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="offer-list dots flex gap-5">
                                <x-service-box
                                    service_title="Cognitive Solution"
                                    service_thumbnail="images/icons/icon-hat.svg"
                                    service_description="One make creepeth, man bearing theira firmament."
                                />
                                <x-service-box
                                    service_title="Cognitive Solution"
                                    service_thumbnail="images/icons/icon-trees.svg"
                                    service_description="One make creepeth, man bearing theira firmament."
                                />
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="offer-list dots flex gap-5">
                                <x-service-box
                                    service_title="Cognitive Solution"
                                    service_thumbnail="images/icons/icon-sun.svg"
                                    service_description="One make creepeth, man bearing theira firmament."
                                />
                                <x-service-box
                                    service_title="Cognitive Solution"
                                    service_thumbnail="images/icons/icon-hat.svg"
                                    service_description="One make creepeth, man bearing theira firmament."
                                />
                            </div>
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="offer-list dots flex gap-5">
                                <x-service-box
                                    service_title="Market research"
                                    service_description="One make creepeth, man bearing theira firmament."
                                    service_thumbnail="icons/icon-trees.svg"
                                />
                                <x-service-box
                                    service_title="Strategic Consulting"
                                    service_thumbnail="images/icons/icon-sun.svg"
                                    service_description="One make creepeth, man bearing theira firmament."
                                />
                            </div>
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="offer-list dots flex gap-5">
                                <x-service-box
                                    service_title="Cognitive Solution"
                                    service_thumbnail="images/icons/icon-trees.svg"
                                    service_description="One make creepeth, man bearing theira firmament."
                                />
                                <x-service-box
                                    service_title="Cognitive Solution"
                                    service_thumbnail="images/icons/icon-sun.svg"
                                    service_description="One make creepeth, man bearing theira firmament."
                                />
                            </div>
                        </div>
                        <!-- Item 6 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div class="bg-bg-3 flex mx-auto">
                                <div class="offer-list dots flex gap-5 ">
                                    <x-service-box
                                        service_title="Cognitive Solution"
                                        service_thumbnail="images/icons/icon-trees.svg"
                                        service_description="One make creepeth, man bearing theira firmament."
                                    />
                                    <x-service-box
                                        service_title="Cognitive Solution"
                                        service_thumbnail="images/icons/icon-sun.svg"
                                        service_description="One make creepeth, man bearing theira firmament."
                                    />
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                        <button
                            type="button"
                            class="w-3 h-3 rounded-full"
                            aria-current="true"
                            aria-label="Slide 1"
                            data-carousel-slide-to="0"></button>
                        <button
                            type="button"
                            class="w-3 h-3 rounded-full"
                            aria-current="false"
                            aria-label="Slide 2"
                            data-carousel-slide-to="1"></button>
                        <button
                            type="button"
                            class="w-3 h-3 rounded-full"
                            aria-current="false"
                            aria-label="Slide 3"
                            data-carousel-slide-to="2"></button>
                        <button type="button"
                                class="w-3 h-3 rounded-full"
                                aria-current="false"
                                aria-label="Slide 4"
                                data-carousel-slide-to="3"></button>
                        <button
                            type="button"
                            class="w-3 h-3 rounded-full"
                            aria-current="false"
                            aria-label="Slide 5"
                            data-carousel-slide-to="4"></button>
                        <button
                            type="button"
                            class="w-3 h-3 rounded-full"
                            aria-current="false"
                            aria-label="Slide 6"
                            data-carousel-slide-to="5"></button>
                    </div>
                    <!-- Slider controls -->
                    <button
                        type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="M5 1 1 5l4 4"/>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="gap-6 px-5 lg:flex xl:gap-[50px] mt-[70px] lg:mt-[150px]">
            <div class="flex-1 mb-[40px]">
                <div class="mb-[22px]">
                    <h2 class="text-gray-900 font-bold font-chivo mb-5 text-[35px] leading-[44px] md:text-[46px] md:leading-[52px] lg:text-heading-1 md:mb-[30px] max-w-[725px]">
                        Frequently asked questions</h2>
                    <p class="text-quote md:text-lead-lg text-gray-600">
                    </p>
                </div>
                <p class="text-text text-gray-600 mb-[40px]">Feeling inquisitive? Have a read through some of our FAQs
                    or contact our supporters for help
                </p>
                <div class="flex flex-col lg:max-w-[303px] md:gap-[35px] lg:mb-[48px]">
                    <div class="mb-[30px] lg:mb-0">
                        <div class="flex items-center mb-[17px]"><img class="mr-[9px]"
                                                                      src="./assets/images/icons/icon-leaf.svg"
                                                                      alt="leaf icon">
                            <h4 class="text-heading-6 font-chivo font-bold">Boost your sale</h4>
                        </div>
                        <p class="text-excerpt text-gray-600">The latest design trends meet hand-crafted templates.</p>
                    </div>
                    <div class="mb-[30px] lg:mb-0">
                        <div class="flex items-center mb-[17px]"><img class="mr-[9px]"
                                                                      src="./assets/images/icons/icon-leaf.svg"
                                                                      alt="leaf icon">
                            <h4 class="text-heading-6 font-chivo font-bold">Introducing New Features</h4>
                        </div>
                        <p class="text-excerpt text-gray-600">The latest design trends meet hand-crafted templates.</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <button type="button"><a
                            class="flex items-center inline-block z-10 relative transition-all duration-200 group px-[22px] py-[15px] lg:px-[32px] lg:py-[22px] rounded-[50px] bg-gray-900 text-white hover:bg-gray-100 hover:text-gray-900 hover:-translate-y-[2px] text-white bg-gray-900 w-fit"
                            href="#"><span
                                class="block text-inherit w-full h-full rounded-[50px] text-lg font-chivo font-semibold">Contact Us</span><i>
                                <img class="ml-[7px] w-[12px] filter-white group-hover:filter-black"
                                     src="./assets/images/icons/icon-right.svg" alt="arrow right icon"></i></a></button>
                    <button type="button"><a
                            class="flex items-center inline-block z-10 relative transition-all duration-200 group px-[22px] py-[15px] lg:px-[32px] lg:py-[22px] rounded-md bg-gray-900 text-white hover:bg-gray-100 hover:text-gray-900 hover:-translate-y-[2px] text-gray-900 bg-transparent w-fit"
                            href="#"><span
                                class="block text-inherit w-full h-full rounded-md text-lg font-chivo font-semibold">Support Center</span></a>
                    </button>
                </div>
            </div>
            <div class="flex-[1.5]">
                <div class="relative accordion-item mb-5">
                    <details>
                        <summary class="flex justify-between py-5 items-center gap-5 px-[30px]">
                            <h4 class="font-bold font-chivo text-[14px] xl:text-heading-5">Where is my order? Quisque
                                molestie
                            </h4>
                        </summary>
                        <p class="text-text content font-chivo mt-[30px] ml-[30px]">Nulla non sollicitudin. Morbi sit
                            amet laoreet ipsum, vel pretium mi. Morbi varius, tellus in accumsan blandit, elit ligula
                            eleifend velit, luctus mattis ante nulla condimentum nulla.
                        </p>
                    </details>
                </div>
                <div class="relative accordion-item mb-5">
                    <details>
                        <summary class="flex justify-between py-5 items-center gap-5 px-[30px]">
                            <h4 class="font-bold font-chivo text-[14px] xl:text-heading-5">How can I return an item
                                purchased online?
                            </h4>
                        </summary>
                        <p class="text-text content font-chivo mt-[30px] ml-[30px]">Nulla non sollicitudin. Morbi sit
                            amet laoreet ipsum, vel pretium mi. Morbi varius, tellus in accumsan blandit, elit ligula
                            eleifend velit, luctus mattis ante nulla condimentum nulla.
                        </p>
                    </details>
                </div>
                <div class="relative accordion-item mb-5">
                    <details>
                        <summary class="flex justify-between py-5 items-center gap-5 px-[30px]">
                            <h4 class="font-bold font-chivo text-[14px] xl:text-heading-5">Can I cancel or change my
                                order?
                            </h4>
                        </summary>
                        <p class="text-text content font-chivo mt-[30px] ml-[30px]">Nulla non sollicitudin. Morbi sit
                            amet laoreet ipsum, vel pretium mi. Morbi varius, tellus in accumsan blandit, elit ligula
                            eleifend velit, luctus mattis ante nulla condimentum nulla.
                        </p>
                    </details>
                </div>
                <div class="relative accordion-item mb-5">
                    <details>
                        <summary class="flex justify-between py-5 items-center gap-5 px-[30px]">
                            <h4 class="font-bold font-chivo text-[14px] xl:text-heading-5">I have promotional or
                                discount code?
                            </h4>
                        </summary>
                        <p class="text-text content font-chivo mt-[30px] ml-[30px]">Nulla non sollicitudin. Morbi sit
                            amet laoreet ipsum, vel pretium mi. Morbi varius, tellus in accumsan blandit, elit ligula
                            eleifend velit, luctus mattis ante nulla condimentum nulla.
                        </p>
                    </details>
                </div>
                <div class="relative accordion-item mb-5">
                    <details>
                        <summary class="flex justify-between py-5 items-center gap-5 px-[30px]">
                            <h4 class="font-bold font-chivo text-[14px] xl:text-heading-5">What are the delivery types
                                you use?
                            </h4>
                        </summary>
                        <p class="text-text content font-chivo mt-[30px] ml-[30px]">Nulla non sollicitudin. Morbi sit
                            amet laoreet ipsum, vel pretium mi. Morbi varius, tellus in accumsan blandit, elit ligula
                            eleifend velit, luctus mattis ante nulla condimentum nulla.
                        </p>
                    </details>
                </div>
                <div class="relative accordion-item mb-5">
                    <details>
                        <summary class="flex justify-between py-5 items-center gap-5 px-[30px]">
                            <h4 class="font-bold font-chivo text-[14px] xl:text-heading-5">How can I pay for my
                                purchases?
                            </h4>
                        </summary>
                        <p class="text-text content font-chivo mt-[30px] ml-[30px]">Nulla non sollicitudin. Morbi sit
                            amet laoreet ipsum, vel pretium mi. Morbi varius, tellus in accumsan blandit, elit ligula
                            eleifend velit, luctus mattis ante nulla condimentum nulla.
                        </p>
                    </details>
                </div>
                <div class="relative accordion-item mb-5">
                    <details>
                        <summary class="flex justify-between py-5 items-center gap-5 px-[30px]">
                            <h4 class="font-bold font-chivo text-[14px] xl:text-heading-5">Can I cancel my order?
                            </h4>
                        </summary>
                        <p class="text-text content font-chivo mt-[30px] ml-[30px]">Nulla non sollicitudin. Morbi sit
                            amet laoreet ipsum, vel pretium mi. Morbi varius, tellus in accumsan blandit, elit ligula
                            eleifend velit, luctus mattis ante nulla condimentum nulla.
                        </p>
                    </details>
                </div>
            </div>
        </div>
        <x-newsletter-subscription-box/>
        <div
            class="bg fixed bottom-28 rounded-full grid place-items-center opacity-0 invisible transition-all duration-300 right-[20px] z-[9999] w-[48px] h-[48px]"
            id="backToTop"><a class="rounded-full bg-green-900 grid place-items-center w-[48px] h-[48px]"
                              href="#top"><img src="./assets/images/icons/icon-up.svg" alt="to top icon"></a></div>
    </div>
@endsection
