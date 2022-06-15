@props(['active'])

@php
$classes = ($active ?? false)
            ? 'mx-2 btn btn-secondary'
            : 'mx-2 btn btn-outline-secondary';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
