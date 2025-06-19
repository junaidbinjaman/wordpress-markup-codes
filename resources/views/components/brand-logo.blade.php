@props([
    'logo' => '',
    'href' => '',
    'alt' => ''
])
<a
    class="transition-all duration-300 partner-item p-2 lg:p-[15px] md:pr-[15px] w-27 md:w-40 xl:w-auto lg:w-[184px] hover:translate-y-[-3px]"
    href="{{$href}}">
    <img src="{{asset($logo)}}" alt="partner logo">
</a>
