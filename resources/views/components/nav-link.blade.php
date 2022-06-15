@props(['active'])

@php
$classes = ($active ?? false)
            ? 'd-inline-flex align-items-center text-decoration-none px-1 pt-1 text-danger'
            : 'd-inline-flex align-items-center px-1 pt-1 text-primary';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
