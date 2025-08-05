@props([
    'box_title' => '',
    'box_description' => '',
    'box_featured_image' => ''
])

<div class="mx-auto lg:flex gap-[30px] max-w-[1190px]">
    <div
        class="text-center rounded-2xl p-5 max-h-[300px] md:max-h-[450px] lg:max-h-[380px] xl:max-h-[455px] md:p-14 mb-[150px] md:mb-[300px] lg:mb-0 transition-all duration-300 hover:translate-y-[-3px] bg-bg-2">
        <h3 class="font-bold font-chivo text-[20px] leading-[26px] md:text-heading-4 mb-[18px]">
            {{$box_title}}
        </h3>
        <p class="text-md text-gray-600 mb-[22px] lg:mx-16">{{$box_description}}</p
        ><img
            class="p-5 rounded-2xl object-cover mx-auto w-full bg-[#EBECF4]"
            src="{{asset($box_featured_image)}}" alt="Feature image">
    </div>

</div>
