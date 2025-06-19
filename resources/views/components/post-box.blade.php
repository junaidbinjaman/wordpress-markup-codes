@props([
    'post_category' => 'default',
    'post_title' => '',
    'href' => '',
    'thumbnail' => '',
    "bg_color_no" => "9"
])
<a class="block group" href="{{$href}}">
    <div class="flex items-center mb-[11px]">
        <div class="bg-gray-500 rounded-full w-[3px] h-[3px] mr-[6px]"></div>
        <span class="uppercase text-gray-500">{{$post_category}}</span>
    </div>
    <p class="text-heading-4 font-chivo font-bold inline-block mb-[26px]">{{$post_title}}</p>
    <div class="relative mb-16">
        <div class="relative">
            <div class="pr-[26px] aspect-[430/275]">
                <img
                    class="h-full w-full object-cover rounded-2xl z-10 relative"
                    src="{{asset($thumbnail)}}" alt="Agon">
            </div>
            <div class="absolute w-full h-full left-0 z-0 top-0 translate-y-[30px] pl-[33px]">
                <div
                    class="w-full h-full rounded-2xl bg-opacity-50 transition-all duration-200 bg-bg-{{$bg_color_no}} group-hover:-translate-x-[10px] group-hover:-translate-y-[10px]"></div>
            </div>
        </div>
    </div>
</a>
