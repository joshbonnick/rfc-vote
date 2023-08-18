@php
    /**
     * @var Illuminate\View\ComponentAttributeBag $attributes
     * @var string $icon
     */

    $styles = 'px-5 w-full py-1.5 text-[.9rem] font-bold text-gray-900 transition-colors border-b hover:bg-gray-100';
@endphp

@if ($attributes->has('href'))
    <a {{ $attributes->merge(['class' => $styles]) }}>
        <span class="flex items-center gap-2">
            <x-dynamic-component :component="$icon" class="w-4 h-4" /> {{ $slot }}
        </span>
    </a>
@else
    <button {{ $attributes->merge(['class' => $styles]) }}>
        <span class="flex items-center gap-2">
            <x-dynamic-component :component="$icon" class="w-4 h-4" /> {{ $slot }}
        </span>
    </button>
@endif
