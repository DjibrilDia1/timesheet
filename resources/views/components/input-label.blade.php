@props(['value'])

<label {{ $attributes->merge(['class' => 'text-primary block font-medium text-s']) }}>
    {{ $value ?? $slot }}
</label>
