@props([
'target' => 'target'
])

<button type="button" data-bs-toggle="modal" data-bs-target="{{ $target }}" class="btn btn-sm bg-danger text-white ">
    <i class="bi bi-trash"></i>
    Excluir
</button>