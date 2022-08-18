@props([
'action' => 'route',
'proximo' => ''
])

<form method="POST" action="{{ $action }}">
    @csrf
    @method('PATCH')
    <button type="submit" class="btn btn-sm bg-warning ">
        <i class="bi bi-archive-fill"></i>
        Reabrir Parada
    </button>
</form>