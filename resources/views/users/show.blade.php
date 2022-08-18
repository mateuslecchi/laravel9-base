<x-app-layout>
    @include('users.menu')

    <div class="bg-white shadow rounded p-2">
        <div class="card background">
            <div class="card-header">
                <div class="row">
                    <div class="col d-flex justify-content-between">
                        <div>
                            <h3>{{ $usuario->name }}</h3>
                        </div>
                        <div class=" ">
                            <a href="{{ route('usuarios.edit', ['usuario' => $usuario->id]) }}"
                                class="btn btn-primary btn-sm"><i class="bi bi-pencil-fill"></i> Editar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <p class="bg-light p-1 rounded"><strong>Email:</strong> {{ $usuario->email }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="bg-light p-1 rounded"><strong>Atribuições:</strong> {{ $usuario->roles->implode('name', ' / ') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>