@props([
'required' => false,
'disabled' => false,
'name' => 'name',
'type' => '',
'value' => '',
'pattern' =>''
])

<label for="{{ $name }}" class="form-label">
    {{ $slot }} <small id="{{ $name }}" class="form-text text-muted"> {{ $muted ?? '' }} </small>
</label>
<input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ $value }}" {{ $required ? 'required' : '' }} {{
    $disabled ? 'disabled' : '' }} class="form-control mb-2" {{ $pattern ? 'pattern='.$pattern : '' }}>