@props([
'action' => 'route',
])

<form method="POST" action="{{ $action }}">
    @csrf
    <button type="submit" class="btn btn-secondary btn-sm ms-1 ">
        <i class="bi bi-calendar2-event"></i>
        Registrar Novo Empréstimo
    </button>
</form>