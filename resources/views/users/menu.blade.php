<x-slot name="header">
    <div class="d-flex justify-content-between">
        <div class="">
            @switch(Route::currentRouteName())

            @case('usuarios.index')
            <h3>Lista de Usuários</h3>
            @break

            @case('usuarios.create')
            <h3>Cadastrar Novo Usuário</h3>
            @break

            @case('usuarios.show')
            <h3>Usuário</h3>
            @break

            @case('usuarios.edit')
            <h3>Editar Usuário</h3>
            @break

            @endswitch
        </div>
        <div class="">
            <a href="{{ route('usuarios.create') }}" class="btn btn-success btn-sm"><i class="bi bi-plus-lg"></i> Novo</a>
            <a href="{{ route('usuarios.index') }}" class="btn btn-primary btn-sm"><i class="bi bi-card-list"></i> Listar</a>
        </div>
    </div>



</x-slot>