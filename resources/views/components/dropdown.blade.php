@props([
    'id' => 'navbarDropdown',
    'icon',
    'title',
    'parentId' => 'sidenavAccordion',
    'active'
])

@php
    $classes = ($active ?? false)
                ? 'nav-link collapsed active'
                : 'nav-link collapsed';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} href="#" data-bs-toggle="collapse" data-bs-target="#{{ $id }}" aria-expanded="false"
    aria-controls="{{ $id }}">
    <div class="sb-nav-link-icon"><i class="{{ $icon }}"></i></div>
    {{ $title }}
    <div class="sb-sidenav-collapse-arrow"><i class="bi bi-chevron-down"></i></div>
</a>
<div class="collapse" id="{{ $id }}" aria-labelledby="heading{{ $id }}" data-bs-parent="#{{ $parentId }}">
    <nav class="sb-sidenav-menu-nested nav">
        {{ $slot }}
    </nav>
</div>