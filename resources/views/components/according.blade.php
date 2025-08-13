@props([
    'faq_title' => '',
    'header_style' => '',
    'body_style' => '',
    'according_id' => '',
    'area_expanded' => 'false'
])
<h2 id={{"accordion-color-heading-" . $according_id}}>
    <button
        type="button"
        {{ $attributes->class([
            "flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl dark:border-gray-200 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-200 gap-3 ",
            $header_style
        ]) }}
        data-accordion-target={{"#accordion-color-body-" . $according_id}}
            aria-expanded={{$area_expanded}}
            aria-controls={{"#accordion-color-body-" . $according_id}}
    >
        <span>{{ $faq_title }}</span>
        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M9 5 5 1 1 5"/>
        </svg>
    </button>
</h2>
<div
    id={{"accordion-color-body-" . $according_id}}
        {{ $attributes->class([
            "hidden ",
            $body_style
        ]) }}
        aria-labelledby={{"#accordion-color-heading-" . $according_id}}
>
    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-200 dark:bg-white">
        {!! $faq_description !!}
    </div>
</div>


