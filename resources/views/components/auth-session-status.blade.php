@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'is-size-6 has-text-success']) }}>
        {{ $status }}
    </div>
@endif