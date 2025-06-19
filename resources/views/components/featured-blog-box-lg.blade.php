@props([
    'thumbnail' => '',
    'title' => '',
    'avatar' => '',
    'author' => '',
    'publish_date' => '',
    'bg_color_no' => '9'
])

<div class="relative">
    <div class="relative">
        <div class="pr-[26px] aspect-[458/557]">
            <img class="h-full w-full object-cover rounded-2xl z-10 relative object-cover"
                 src="{{asset($thumbnail)}}" alt="Agon">
        </div>
        <div class="absolute w-full h-full left-0 z-0 top-0 translate-y-[30px] pl-[33px]">
            <div
                class="w-full h-full rounded-2xl bg-opacity-50 transition-all duration-200 bg-bg-{{$bg_color_no}} group-hover:-translate-x-[10px] group-hover:-translate-y-[10px]"></div>
        </div>
    </div>
    <h3 class="font-bold font-chivo text-[20px] leading-[26px] md:text-heading-4 mt-[45px] md:mt-[73px] mb-[18px]">{{$title}}</h3>
    <p class="text-text text-gray-500 mb-[15px]">{!! $description !!}</p>
    <div class="flex items-center gap-[15px]">
        <img class="h-full w-full object-cover rounded-full max-w-[60px]" src="{{'images/avatar-12.png'}}" alt="avatar">
        <div>
            <p class="text-lead line-clamp-2 font-bold mb-[3px] font-chivo lg:text-heading-6">{{$author}}</p>
            <p class="text-md text-gray-500 font-bold text-sm">{{$publish_date}}</p>
        </div>
    </div>
</div>
