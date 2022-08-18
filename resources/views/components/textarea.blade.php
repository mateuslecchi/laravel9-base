@props([
'required' => false,
'name' => 'name',
'rows' => 25,
])

<label for="{{ $name }}" class="form-label">
    {{ $slot }}
</label>
<textarea name="{{ $name }}" id="{{ $name }}" rows="{{ $rows }}" class="form-control mb-2">{{ $value ?? ''}}</textarea>