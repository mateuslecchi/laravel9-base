@props([
'action' => 'route',
'id' => 'id',
])

<form method="POST" action="{{ $action }}">
    @csrf
    @method('DELETE')
    <input type="hidden" name="id" value="{{ $id }}">
    <button type="submit" class="btn-close" data-bs-dismiss="alert" aria-label="Desvincular" title="Desvincular Funcionário"></button>
</form>