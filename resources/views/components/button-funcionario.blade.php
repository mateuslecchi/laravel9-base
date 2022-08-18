@props([
'action' => 'route',
])

<form method="GET" action="{{ $action }}">
    <button type="submit" class="btn btn-secondary btn-sm ms-1 ">
        <i class="bi bi-calendar2-event"></i>
        Vincular Funcionários
    </button>
</form>