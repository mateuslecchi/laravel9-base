@props([
'required' => false,
'disabled' => false,
'checked' => false,
'name' => 'name',
'value' => ''
])

<div class="form-check">
    <input class="form-check-input" type="checkbox" value="{{ $value }}" id="{{ $name }}" {{ $required ? 'required' : '' }} {{ $disabled ? 'disabled' : '' }} {{ $checked ? 'checked' : '' }}>
    <label class="form-check-label" for="{{ $name }}">
        {{ $slot }} <small id="{{ $name }}" class="form-text text-muted"> {{ $muted ?? '' }} </small>
    </label>
</div>