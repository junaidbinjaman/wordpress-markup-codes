@extends('layouts.app')

@section('title', 'Blogs')

@section('content')
    <div class="full-width bg-gray-100">
        <div class="text-center px-5 pt-[74px] pb-[90px]">
            <h1 class="font-chivo font-bold lg:text-display-3 md:text-[45px] md:leading-[52px] text-[35px] leading-[42px] mb-7">
                Our Blog
            </h1>
            <p class="font-bold font-chivo text-[14px] md:text-heading-6 text-gray-600 mx-auto md:max-w-[55ch]">From
                year to year we strive to invent the most innovative technology that is used by both small enterprises
                and space enterprises.
            </p>
        </div>
    </div>
    <div class="lg:w-[1340px] mx-auto">
        <div class="px-[12px] md:px-[36px] mt-[70px] xl:px-0 lg:mt-[140px]">
            <div class="text-center mb-[40px] lg:mb-[73px]">
                <h2 class="font-bold font-chivo mx-auto text-[35px] leading-[44px] md:text-[46px] md:leading-[52px] lg:text-heading-1 text-gray-900 mb-5 md:mb-[30px] max-w-[725px]">
                    Featured Aritcles</h2>
                <p class="text-quote md:text-lead-lg text-gray-600 mx-auto max-w-[691px]">From Our blog and Event
                    fanpage</p>
            </div>
            <div class="grid grid-cols-1 gap-[30px] md:grid-cols-2 gap-y-[60px] lg:grid-cols-3">
                <x-featured-blog-box-lg
                    thumbnail="images/thumbnail-3.png"
                    title="How To Blow Through Capital At An Incredible Rate"
                    avatar="images/avatar-12.png"
                    author="Jenny Wilson"
                    publish_date="August 25, 2022"
                >
                    <x-slot name="description">
                        Lorem ipsum dolor sit amet consectetur adipiscing elit interdum ullamcorper sed pharetra
                        senectus donec nunc.
                        Consequat semper viverra nam libero justo laoreet facilisis magna etiam.
                    </x-slot>
                </x-featured-blog-box-lg>
                <x-featured-blog-box-lg
                    thumbnail="images/thumbnail-4.png"
                    title="How To Blow Through Capital At An Incredible Rate"
                    avatar="images/avatar-11.png"
                    author="Jenny Wilson"
                    publish_date="August 25, 2022"
                    bg_color_no="2"
                >
                    <x-slot name="description">
                        Lorem ipsum dolor sit amet consectetur adipiscing elit interdum ullamcorper sed pharetra
                        senectus donec nunc.
                        Consequat semper viverra nam libero justo laoreet facilisis magna etiam.
                    </x-slot>
                </x-featured-blog-box-lg>
                <div class="flex flex-col gap-8 md:col-span-2 lg:col-span-1">
                    <x-featured-post-box-sm
                        thumbnail="images/thumbnail-1.png"
                        title="Design Studios That Everyone Should Know"
                        avatar="images/avatar-11.png"
                        author="Jane Cooper"
                        publish_date="August 25, 2022"
                        bg_color_no="10"
                    />
                    <x-featured-post-box-sm
                        thumbnail="images/thumbnail-2.png"
                        title="Design Studios That Everyone Should Know"
                        avatar="images/avatar-12.png"
                        author="Jane Cooper"
                        publish_date="August 25, 2022"
                        bg_color_no="9"
                    />
                    <x-featured-post-box-sm
                        thumbnail="images/thumbnail-3.png"
                        title="Design Studios That Everyone Should Know"
                        avatar="images/avatar-9.png"
                        author="Jane Cooper"
                        publish_date="August 25, 2022"
                        bg_color_no="8"
                    />
                    <x-featured-post-box-sm
                        thumbnail="images/thumbnail-4.png"
                        title="Design Studios That Everyone Should Know"
                        avatar="images/avatar-8.png"
                        author="Jane Cooper"
                        publish_date="August 25, 2022"
                        bg_color_no="7"
                    />
                </div>
            </div>
        </div>
        <div class="px-[12px] md:px-[36px] mt-[70px] xl:px-0 lg:mt-[138px]">
            <div class="flex flex-col gap-6 justify-center lg:flex-row lg:items-center mb-[45px] md:mb-[87px]">
                <div>
                    <h2 class="text-gray-900 font-bold font-chivo mb-5 text-[35px] leading-[44px] md:text-[46px] md:leading-[52px] lg:text-heading-1 md:mb-[30px] max-w-[725px]">
                        Latest News</h2>
                    <p class="text-quote md:text-lead-lg text-gray-600">From Our blog and Event fanpage
                    </p>
                </div>
            </div>
            <div class="lg:grid lg:grid-cols-3 lg:gap-x-5 xl:gap-x-[30px] gap-y-[50px] xl:gap-y-[87px]">
                <x-post-box
                    post_category="Company"
                    post_title="We can blend colors multiple ways, the most common"
                    href="/"
                    thumbnail="images/thumbnail-3.png"
                    bg_color_no="10"
                />
                <x-post-box
                    post_category="Company"
                    post_title="We can blend colors multiple ways, the most common"
                    href="/"
                    thumbnail="images/thumbnail-3.png"
                    bg_color_no="9"
                />
                <x-post-box
                    post_category="Company"
                    post_title="We can blend colors multiple ways, the most common"
                    href="/"
                    thumbnail="images/thumbnail-3.png"
                    bg_color_no="8"
                />
                <x-post-box
                    post_category="Company"
                    post_title="We can blend colors multiple ways, the most common"
                    href="/"
                    thumbnail="images/thumbnail-3.png"
                    bg_color_no="8"
                />
                <x-post-box
                    post_category="Company"
                    post_title="We can blend colors multiple ways, the most common"
                    href="/"
                    thumbnail="images/thumbnail-3.png"
                    bg_color_no="6"
                />
                <x-post-box
                    post_category="Company"
                    post_title="We can blend colors multiple ways, the most common"
                    href="/"
                    thumbnail="images/thumbnail-3.png"
                    bg_color_no="5"
                />

            </div>
            <button type="button">
                <a
                    class="flex items-center z-10 relative transition-all duration-200 group px-[22px] py-[15px] lg:px-[32px] lg:py-[22px] rounded-[50px] bg-gray-900 text-white hover:bg-gray-100 hover:text-gray-900 hover:-translate-y-[2px] w-fit mx-auto mt-[70px] lg:mt-[112px]"
                    href="#">
                    <span
                        class="block text-inherit w-full h-full rounded-[50px] text-lg font-chivo font-semibold">Load more posts</span>
                    <i>
                        <img class="ml-[7px] w-[12px] filter-white group-hover:filter-black"
                             src="{{asset('icons/icon-right.svg')}}" alt="arrow right icon">
                    </i>
                </a>
            </button>
        </div>
        <x-newsletter-subscription-box />
    </div>
@endsection
