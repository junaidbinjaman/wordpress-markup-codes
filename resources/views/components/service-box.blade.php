@props([
    'service_title' => '',
    'service_description' => '',
    'service_thumbnail' => ''
])

<div
    class="rounded-2xl py-[20px] px-[24px] md:py-[43px] md:px-[63px] md:mx-5 transition-all duration-300 hover:translate-y-[-3px] bg-white">
    <img class="h-full w-full object-cover mb-[30px] max-w-[50px] max-h-[50px]"
         src="{{asset($service_thumbnail)}}" alt="icon">
    <h3 class="font-chivo font-bold text-[18px] md:text-heading-5 mb-[20px]">{{$service_title}}</h3>
    <p class="text-text text-gray-600">{{$service_description}}</p>
</div>
