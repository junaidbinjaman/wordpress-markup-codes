@props(['theme' => 'light'])

<a {{$attributes->merge(['class' => 'flex'])}} href="/">
    @if($theme === 'dark')
        <img class="logo z-50 w-[100px] md:w-[80px] lg:w-[110px] xl:w-[160px]" src="{{ asset('logo-dark.png') }}"
             alt="logo image">
    @else
        <img class="logo z-50 w-[100px] md:w-[80px] lg:w-[110px] xl:w-[160px]" src="{{ asset('logo.png') }}"
             alt="logo image">
    @endif
</a>
