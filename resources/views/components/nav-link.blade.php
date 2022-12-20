@props(['active','icon'])

@php
    $classes = ($active ?? false)
                ? 'nav-link active font-weight-bolder'
                : 'nav-link';
@endphp

<li class="nav-item">
    <a {{ $attributes->merge(['class' => $classes]) }}>
        <div class="sb-nav-link-icon"><i class="{{ $icon ?? ''}}"></i></div>
        {{ $slot }}
    </a>
</li>