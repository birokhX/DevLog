@props(['label' => null, 'icon' => null, 'iconClasses' => null])
<button type="button" {{ $attributes->merge(['class' => 'btn-base flex-center']) }}>
    @if ($icon)
        <x-ui.icon name="{{ $icon }}" class="{{ $iconClasses }}" />
    @endif
    @if ($label)
        <span>{{ $label }}</span>
    @endif
</button>
