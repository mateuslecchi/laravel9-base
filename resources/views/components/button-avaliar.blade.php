@props([
'action' => 'route',
'proximo' => ''
])

<form method="POST" action="{{ $action }}">
    @csrf
    <button type="submit" class="btn btn-warning btn-sm ms-1 ">
        <i class="bi bi-star-fill"></i>
        Avaliar
    </button>
</form>