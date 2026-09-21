@props(['text' => 'عنوان', 'position' => 'top'])
@php
    $tooltipId = 'tooltip.' . '-' . \Illuminate\Support\Str::uuid();
    $positions = [
        'top' => 'bottom-full left-1/2 -translate-x-1/2 mb-2.5',
        'bottom' => 'top-full left-1/2 -translate-x-1/2 mt-2.5',
        'left' => 'right-full top-1/2 -translate-y-1/2 mr-2.5',
        'right' => 'left-full top-1/2 -translate-x-1/2 ml-2.5',
    ];
    $arrowPositions = [
        'top' => 'top-full left-1/2 -translate-x-1/2 rotate-180 -mt-1',
        'bottom' => 'bottom-full left-1/2 -translate-x-1/2 -mb-1',
        'left' => 'left-full top-1/2 -translate-y-1/2 rotate-90 -ml-1',
        'right' => 'right-full top-1/2 -translate-x-1/2 -rotate-90 -mr-1',
    ];
    $tooltipPostion = $positions[$position] ?? 'top';
    $arrowPosition = $arrowPositions[$position] ?? 'top';
@endphp
<div x-data="tooltip" {{ $attributes->merge(['class' => 'relative inline-flex']) }}>
    <div @mouseenter="show()" @mouseleave="hide()" @focus="show()" @blur="hide()" aria-describedby="tooltip">
        {{ $slot }}
    </div>
    <div x-show="openTooltip" x-cloak x-transition.delay.100ms
        class="absolute {{ $tooltipPostion }} px-3 py-1 rounded-full bg-black backdrop-blur-[6px] text-white"
        id="{{ $tooltipId }}" role="tooltip">
        <span class="text-xs text-nowrap leading-relaxed">{{ $text }}</span>
        <x-ui.icon name="triangle" class="absolute {{ $arrowPosition }} size-3" />
    </div>
</div>
