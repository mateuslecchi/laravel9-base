@props([
'target' => 'target',
'title' => 'title',
'body' => 'body',
'action' => 'action'
])

<div class="modal fade" id="{{ $target }}" tabindex="-1" aria-labelledby="{{ $target }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $target }}">{{ $title}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">{{ $body }}</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">
                    <i class="bi bi-x-lg"></i>
                    Cancelar
                </button>
                <form action="{{ $action }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <x-button type="submit" class="btn-sm btn-danger">
                        <i class="bi bi-trash"></i>
                        Excluir
                    </x-button>
                </form>
            </div>
        </div>
    </div>
</div>