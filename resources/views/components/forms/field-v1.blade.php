@props(['name' => null, 'label' => null])
<div class="">
    <label @if ($name) for="{{ $name }}" @endif class="label">{{ $label }}</label>
    {{ $slot }}
</div>
