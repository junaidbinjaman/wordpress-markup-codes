@props(['description' => 'The description', 'name' => 'name', 'title' => 'Job description'])
<div
    class="bg-white transition-all duration-300 px-[35px] pt-[33px] pb-[28px] hover:translate-y-[-3px]">
    <p class="text-text mb-[15px]">"{{$description}}"</p>
    <div class="flex items-center gap-6">
        <img
            class="h-full w-full object-cover rounded-full max-w-[80px]"
            src="{{asset('images/avatar-12.png')}}" alt="avatar">
        <div>
            <p class="text-lead line-clamp-2 font-bold mb-[3px]">{{$name}}</p>
            <p class="text-md text-gray-500">{{$title}}</p>
        </div>
    </div>
</div>
