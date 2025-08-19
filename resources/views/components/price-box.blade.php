@props([
    'price' => '',
    'period' => '',
    'pack_type' => '',
    'short_desc' => '',
    'unlimited_update' => false,
    'custom_permission' => false,
    'custom_design_feature' => false,
])

@php
    $positive_feature = '
    <img class="tick-icon" src="/icons/icon-tick.svg" alt="icon">
    <img class="hidden tick-icon-active" src="/icons/icon-tick-orange.svg" alt="icon">';

    $negative_feature = '<img src="/icons/icon-close.svg" alt="icon">';
@endphp

<div
    class="rounded-2xl md:py-[53px] md:px-[48px] bg-white flex flex-col justify-between transition-all duration-300 package-card p-[35px] border border-gray-900 bill-monthly">
    <div>
        <div class="mb-[21px]">
            <span class="heading-3 font-bold font-chivo">{{ $price }}</span>
            <span class="text-sm font-bold text-gray-400 ml-[2px]">/{{ $period }}</span>
        </div>
        <h5 class="heading-5 font-bold mb-[9px] font-chivo">{{ $pack_type }}</h5>
        <p class="text-sm font-bold text-gray-400 mb-[43px]">{{$short_desc}}</p>
        <div class="w-full bg-gray-300 h-[1px] mb-[21px]"></div>
        <ul class="mb-[76px]">
            <li class="flex items-center gap-[10px] mb-[17px]">
                @if($unlimited_update)
                    {!! $positive_feature !!}
                @else
                    {!! $negative_feature !!}
                @endif
                <span class="text-md text-gray-500">Unlimited updates</span>
            </li>
            <li class="flex items-center gap-[10px] mb-[17px]">
                @if($custom_permission)
                    {!! $positive_feature !!}
                @else
                    {!! $negative_feature !!}
                @endif
                <span class="text-md text-gray-500">Custom permissions</span>
            </li>
            <li class="flex items-center gap-[10px] mb-[17px]">
                @if($custom_design_feature)
                    {!! $positive_feature !!}
                @else
                    {!! $negative_feature !!}
                @endif
                <span class="text-md text-gray-500">Custom designs & features</span>
            </li>
        </ul>
    </div>
    <button type="button">
        <a class="flex items-center z-10 relative transition-all duration-200 group py-[11px] px-[22px] rounded-md bg-gray-900 text-white hover:bg-gray-100 hover:text-gray-900 hover:-translate-y-[2px] border-[2px] border-[#171B24]"
           href="#">
            <span
                class="block text-inherit w-full h-full rounded-md text-lg font-chivo font-semibold">Get Started</span>
            <i>
                <img class="ml-[7px] w-[12px] invert group-hover:invert-0"
                     src="{{asset('icons/icon-right.svg')}}" alt="arrow right icon">
            </i>
        </a>
    </button>
</div>
