@props([
    'slug' => '/',
    'active' => null,
    'theme' => 'light',
])

@php
$class = 'flex items-center group';

if ($active) {
    $class = $class . ' underline underline-offset-5 decoration-primary decoration-2';
}

if ($theme === 'dark') {
    $class = $class . ($active ? ' text-primary' : ' text-white');
}

@endphp

<li {{$attributes->merge(['class' => $class])}}>
    <a class="hover:text-green-900 text-base font-inter menu-link lg:text-heading-6 mr-[7px]"
       href="{{route($slug)}}">{{ $slot }}</a>
</li>
