@props([

'action' => 'action',
'target' => 'target',
'nome' => 'nome',
'parada' => 'parada',
'id' => 'id',
])

<div class="modal fade" id="{{ $target }}" tabindex="-1" aria-labelledby="{{{ $target }}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $target }}">Avaliar Funcionário</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="bg-light p-1 rounded"><strong>Nome:</strong> {{ $nome }}</p>
                <p class="bg-light p-1 rounded"><strong>Parada:</strong> {{ $parada }}</p>
                <form action="{{ $action }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $id }}">
                    <input type="hidden" name="parada" value="{{ $parada }}">
                    <label for="nota" class="form-label">Nota: <output name="valorNota"
                            id="valorNota">5</output></label>
                    <input type="range" class="form-range" value="5" min="0.0" max="10.0" step="0.5" name="nota" id="nota"
                        oninput="valorNota.value = nota.value">
                    <div class="mb-3">
                        <label for="observacao" class="form-label">Observação:</label>
                        <textarea class="form-control" id="observacao" name="observacao" rows="3"></textarea>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">
                    <i class="bi bi-x-lg"></i>
                    Cancelar
                </button>
                <x-button type="submit" class="btn-sm btn-warning">
                    <i class="bi bi-star-fill"></i>
                    Avaliar
                </x-button>
                </form>
            </div>
        </div>
    </div>
</div>