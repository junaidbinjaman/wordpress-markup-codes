@props([
    "thumbnail" => "",
    "title" => "",
    "avatar" => "",
    "author" => "",
    "publish_date" => "",
    "bg_color_no" => "8"
])

<div class="flex items-center gap-6 pb-12 border-b border-gray-200 justify-between">
    <div class="flex-1">
        <p class="font-bold font-chivo text-[14px] md:text-heading-6 line-clamp-2 mb-[18px]">{{$title}}</p>
        <div class="flex items-center gap-[11px]">
            <img
                class="h-full w-full object-cover rounded-full max-w-[42px]"
                src="{{asset($thumbnail)}}" alt="avatar">
            <div>
                <p class="text-lead line-clamp-2 font-bold mb-[3px]">{{$author}}</p>
                <p class="text-md text-gray-500 font-bold text-sm">{{$publish_date}}</p>
            </div>
        </div>
    </div>
    <div class="relative flex-1 max-w-[133px]">
        <div class="pr-[13px] aspect-square">
            <img
                class="h-full w-full object-cover rounded-2xl z-10 relative object-cover"
                src="{{asset($thumbnail)}}" alt="Agon">
        </div>
        <div class="absolute w-full h-full left-0 z-0 top-0 translate-y-[13px] pl-[13px]">
            <div
                class="w-full h-full rounded-2xl bg-opacity-50 transition-all duration-200 bg-bg-{{$bg_color_no}} group-hover:-translate-x-[10px] group-hover:-translate-y-[10px]"></div>
        </div>
    </div>
</div>
