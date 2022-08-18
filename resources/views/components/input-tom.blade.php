@props([
'required' => false,
'disabled' => false,
'name' => 'name',
'type' => '',
'value' => ''
])

<label for="{{ $name }}" class="form-label">
    {{ $slot }} <small class="form-text text-muted"> {{ $muted ?? '' }} </small>
</label>
<input id="{{ $name }}" name="{{ $name }}" {{ $value ? 'value='.$value : '' }}  {{ $required ? 'required' : '' }} {{ $disabled ? 'disabled' : '' }} class="form-control mb-2">