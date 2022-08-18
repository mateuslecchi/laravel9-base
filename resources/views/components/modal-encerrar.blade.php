@props([

    'action' => 'action'
])

<div class="modal fade" id="encerrarparada" tabindex="-1" aria-labelledby="encerrarparada" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="encerrarparada">Encerrar Parada?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Deseja encerrar esta parada?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">
                    <i class="bi bi-x-lg"></i>
                    Cancelar
                </button>
                <form action="{{ $action }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <x-button type="submit" class="btn-sm btn-warning">
                        <i class="bi bi-archive-fill"></i>
                        Encerrar Parada
                    </x-button>
                </form>
            </div>
        </div>
    </div>
</div>