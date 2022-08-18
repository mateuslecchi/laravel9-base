@props([
'required' => false,
'multiple' => false,
'disabled' => false,
'name' => 'name',
'id' => 'id'
])

@php
if($multiple == true){
    $id = $name;
    $name = $name.'[]';
}else{
    $id = $name;
    $name = $name;
}
@endphp

<label for="{{ $id }}" class="form-label">
    {{ $slot }}
</label>
<select id="{{ $id }}" name="{{ $name }}" {{ $required ? 'required' : '' }} {{ $multiple ? 'multiple' : '' }}  {{ $disabled ? 'disabled' : '' }}  class="form-select mb-2">
    {{ $options }}
</select>