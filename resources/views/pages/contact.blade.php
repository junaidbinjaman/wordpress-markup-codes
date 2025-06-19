@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <div class="full-width bg-bg-2">
        <div class="text-center px-5 pt-[74px] pb-[90px]">
            <h2 class="font-bold font-chivo text-[28px] leading-[32px] md:text-heading-2 mb-[22px]">Contact Us
            </h2>
            <p class="text-text text-gray-500 mx-auto md:w-[49ch]">Equidem necessitatibus ei eam, ceteros expetenda
                hendrerit ei per, tation vituperatoribus ut.
            </p>
        </div>
    </div>
    <div class="lg:max-w-[1340px] mx-auto">
        <div
            class="bg-gray-100 relative p-[40px] md:pt-[91px] md:pr-[98px] md:pb-[86px] md:pl-[92px] mt-[100px] rounded-[58px]">
            <div class="mx-auto relative max-w-[1320px]">
                <img class="absolute right-0 max-w-[129px] top-[-50px]" src="{{asset('images/mail.png')}}"
                     alt="mail image">
                <p class="text-capitalized text-gray-500 uppercase tracking-[2px] mb-[15px]">Contact us</p>
                <h2 class="font-bold font-chivo text-[25px] leading-[30px] md:text-heading-3 mb-[22px]">
                    Have an project in mind?
                </h2>
                <p class="text-text text-gray-600 mb-[30px] md:mb-[60px]">
                    The right move at the right time saves your investment. live the dream of expanding your business.
                </p>
                <div class="flex flex-col gap-8 mb-[15px] md:mb-[25px] lg:flex-row lg:gap-[50px] xl:gap-[98px]">
                    <div>
                        <div class="flex gap-[13px] mb-[15px] md:mb-[25px]">
                            <i>
                                <img src="{{asset('icons/icon-home-fill.svg')}}" alt="home icon"/>
                            </i>
                            <p class="text-heading-6 font-bold font-chivo">Agon Studio</p>
                        </div>
                        <p class="text-text text-gray-600">4517 Washington Ave.</p>
                        <p class="text-text text-gray-600 mb-[10px] md:mb-[16px]">Manchester, Kentucky 39495</p>
                        <p class="text-text text-gray-600 underline">(239) 555-0108</p>
                        <p class="text-text text-gray-600 underline">contact@agon.com</p>
                    </div>
                    <form class="flex-1" action="/">
                        <div class="flex flex-col gap-6 mb-6 lg:flex-row xl:gap-[30px]">
                            <input
                                class="outline-none flex-1 placeholder:text-gray-400 placeholder:text-md placeholder:font-chivo py-5 px-[30px]"
                                type="text" placeholder="Enter your name">
                            <input
                                class="outline-none flex-1 placeholder:text-gray-400 placeholder:text-md placeholder:font-chivo py-5 px-[30px]"
                                type="text" placeholder="Company (optional)">
                        </div>
                        <div class="flex flex-col gap-6 mb-6 lg:flex-row xl:gap-[30px]">
                            <input
                                class="outline-none flex-1 placeholder:text-gray-400 placeholder:text-md placeholder:font-chivo py-5 px-[30px]"
                                type="text" placeholder="Your email">
                            <input
                                class="outline-none flex-1 placeholder:text-gray-400 placeholder:text-md placeholder:font-chivo py-5 px-[30px]"
                                type="text" placeholder="Phone number">
                        </div>
                        <textarea
                            class="w-full py-5 resize-none outline-0 px-[30px] max-h-[150px] mb-[35px] md:mb-[56px]"
                            name="" cols="100" rows="10" placeholder="Tell us about yourself"></textarea>
                        <div class="flex flex-col gap-5">
                            <button
                                class="flex items-center transition-colors duration-200 px-[22px] py-[15px] lg:px-[32px] lg:py-[22px] rounded-[50px] font-chivo font-semibold text-md md:text-lg text-white bg-gray-900 w-fit"
                                type="submit">
                                Send Message
                                <i>
                                    <img
                                        class="ml-[7px] w-[12px] filter-white"
                                        src="{{asset('images/icons/icon-right.svg')}}"
                                        alt="arrow right icon"
                                    />
                                </i>
                            </button>
                            <p class="text-md text-gray-500">By clicking contact us button, you agree our terms and policy,</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="px-[12px] md:px-[36px] mt-[70px] xl:px-0 lg:mt-[138px]">
            <div class="text-center mb-[100px]">
                <h2 class="font-bold font-chivo mx-auto text-[35px] leading-[44px] md:text-[46px] md:leading-[52px] lg:text-heading-1 text-gray-900 mb-5 md:mb-[30px] max-w-full">
                    Our Location
                </h2>
                <p class="text-quote md:text-lead-lg text-gray-600 mx-auto max-w-[743px]">
                    In a professional context it often happens that private or corporate clients order a publication to publish news.
                </p>
            </div>
            <div class="lg:flex lg:items-center gap-[30px]">
                <div
                    class="flex items-start gap-5 transition-all duration-300 mb-[33px] hover:translate-y-[-3px] border-b border-gray-200 pb-[50px] last:mb-0">
                    <img
                        class="h-full w-full object-cover max-w-[64px]"
                        src="{{asset('icons/icon-resources.svg')}}"
                         alt="icon">
                    <div>
                        <h3 class="font-bold font-chivo text-[20px] leading-[26px] md:text-heading-4 mb-[14px]">Office</h3>
                        <p class="text-[#7E7E7E] text-[14px] leading-[18px]">205 North Michigan Avenue, Suite 810</p>
                        <p class="text-[#7E7E7E] text-[14px] leading-[18px]">Chicago, 60601, USA</p>
                        <p class="text-[#7E7E7E] text-[14px] leading-[18px]">Phone: (123) 456-7890</p>
                        <p class="text-[#7E7E7E] text-[14px] leading-[18px]">Email: contact@Evara.com</p>
                    </div>
                </div>
                <div
                    class="flex items-start gap-5 transition-all duration-300 mb-[33px] hover:translate-y-[-3px] border-b border-gray-200 pb-[50px] last:mb-0">
                    <img class="h-full w-full object-cover max-w-[64px]" src="{{asset('icons/icon-cards.svg')}}" alt="icon">
                    <div>
                        <h3 class="font-bold font-chivo text-[20px] leading-[26px] md:text-heading-4 mb-[14px]">Studio</h3>
                        <p class="text-[#7E7E7E] text-[14px] leading-[18px]">205 North Michigan Avenue, Suite 810</p>
                        <p class="text-[#7E7E7E] text-[14px] leading-[18px]">Chicago, 60601, USA</p>
                        <p class="text-[#7E7E7E] text-[14px] leading-[18px]">Phone: (123) 456-7890</p>
                        <p class="text-[#7E7E7E] text-[14px] leading-[18px]">Email: contact@Evara.com</p>
                    </div>
                </div>
                <div
                    class="flex items-start gap-5 transition-all duration-300 mb-[33px] hover:translate-y-[-3px] border-b border-gray-200 pb-[50px]">
                    <img class="h-full w-full object-cover max-w-[64px]" src="{{asset('icons/icon-stats.svg')}}" alt="icon">
                    <div>
                        <h3 class="font-bold font-chivo text-[20px] leading-[26px] md:text-heading-4 mb-[14px]">Factory
                        </h3>
                        <p class="text-[#7E7E7E] text-[14px] leading-[18px]">205 North Michigan Avenue, Suite 810</p>
                        <p class="text-[#7E7E7E] text-[14px] leading-[18px]">Chicago, 60601, USA</p>
                        <p class="text-[#7E7E7E] text-[14px] leading-[18px]">Phone: (123) 456-7890</p>
                        <p class="text-[#7E7E7E] text-[14px] leading-[18px]">Email: contact@Evara.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="bg fixed bottom-28 rounded-full grid place-items-center opacity-0 invisible transition-all duration-300 right-[20px] z-[9999] w-[48px] h-[48px]"
            id="backToTop"><a class="rounded-full bg-green-900 grid place-items-center w-[48px] h-[48px]"
                              href="#top"><img src="./assets/images/icons/icon-up.svg" alt="to top icon"></a></div>
    </div>
@endsection
